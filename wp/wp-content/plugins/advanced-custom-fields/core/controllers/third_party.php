<?php 

/*
*  third_party
*
*  @description: 
*  @since 3.5.1
*  @created: 23/06/12
*/
 
class acf_third_party 
{

	var $parent,
		$data;
	
	
	/*
	*  __construct
	*
	*  @description: 
	*  @since 3.1.8
	*  @created: 23/06/12
	*/
	
	function __construct($parent)
	{
		// vars
		$this->parent = $parent;
		$this->data['metaboxes'] = array();
		
		
		// Tabify Edit Screen - http://wordpress.org/extend/plugins/tabify-edit-screen/
		add_action('admin_head-settings_page_tabify-edit-screen', array($this,'admin_head_tabify'));
		
		
		// Duplicate Post - http://wordpress.org/extend/plugins/duplicate-post/
		add_action( 'dp_duplicate_page', array($this, 'dp_duplicate_page'), 11, 2);
	}
	
	
	/*
	*  admin_head_tabify
	*
	*  @description: 
	*  @since 3.5.1
	*  @created: 9/10/12
	*/
	
	function admin_head_tabify()
	{
		// remove ACF from the tabs
		add_filter('tabify_posttypes', array($this, 'tabify_posttypes'));
		
		
		// add acf metaboxes to list
		add_action('tabify_add_meta_boxes' , array($this,'tabify_add_meta_boxes'));
		
	}
	
	
	/*
	*  tabify_posttypes
	*
	*  @description: 
	*  @since 3.5.1
	*  @created: 9/10/12
	*/
	
	function tabify_posttypes( $posttypes )
	{
		if( isset($posttypes['acf']) )
		{
			unset( $posttypes['acf'] );
		}
	
		return $posttypes;
	}
	
	
	/*
	*  tabify_add_meta_boxes
	*
	*  @description: 
	*  @since 3.5.1
	*  @created: 9/10/12
	*/
	
	function tabify_add_meta_boxes( $post_type )
	{
		// get acf's
		$acfs = $this->parent->get_field_groups();
		
		if($acfs)
		{
			foreach($acfs as $acf)
			{
				// add meta box
				add_meta_box(
					'acf_' . $acf['id'], 
					$acf['title'], 
					array($this, 'dummy'), 
					$post_type
				);
				
			}
			// foreach($acfs as $acf)
		}
		// if($acfs)
	}
	
	function dummy(){ /* Do Nothing */ }
	
	
	
	/*
	*  dp_duplicate_page
	*
	*  @description: 
	*  @since 3.5.1
	*  @created: 9/10/12
	*/
	
	function dp_duplicate_page( $new_post_id, $old_post_object )
	{
		// only for acf
		if( $old_post_object->post_type != "acf" )
		{
			return;
		}
		
		
		// update keys
		$metas = get_post_custom( $new_post_id );
		
		if( $metas )
		{
			foreach( $metas as $field_key => $field )
			{
				if( strpos($field_key, 'field_') !== false )
				{
					$field = maybe_unserialize($field[0]);
					
					// delete old field
					delete_post_meta($new_post_id, $field_key);

					
					// set new keys (recursive for sub fields)
					$field = $this->create_new_field_keys( $field );
					

					// save it!
					update_post_meta($new_post_id, $field['key'], $field);
					
				}
				// if( strpos($field_key, 'field_') !== false )
			}
			// foreach( $metas as $field_key => $field )
		}
		// if( $metas )
	
	}
	
	
	/*
	*  create_new_field_keys
	*
	*  @description: 
	*  @since 3.5.1
	*  @created: 9/10/12
	*/
	
	function create_new_field_keys( $field )
	{
		if( isset( $field['key']) )
		{
			$field['key'] = 'field_' . uniqid();
		}
		
		
		if( isset( $field['sub_fields'] ) )
		{
			foreach( $field['sub_fields'] as &$sub_field )
			{
				$sub_field = $this->create_new_field_keys( $sub_field );
			}
		}
		
		
		return $field;
	}

}

?>