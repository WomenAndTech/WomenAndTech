<?php global $post;
	if (is_home()||is_single()):
		$social_image=wp_get_attachment_url(get_post_thumbnail_id( (int) $post->ID));
	else:
		$social_image="http://api.twitter.com/1/users/profile_image?screen_name=womenandtech&size=bigger"; 
	endif;

	$social_description=get_post_meta($post->ID, "archive_excerpt", false);
	if (!$social_description || empty($social_description[0])):
		$social_description[0] = "We're asking a group of clever women out for coffees to pick their brains and share our conversations. What is it like to be a woman working in tech? Nominate someone to share their story!";
	endif;

	if ($post->post_type == 'interview'):
		$social_title = "Women &amp;&amp; Tech interviews ".$post->post_title;
	else:
		$social_title = $post->post_title." | Women &amp;&amp; Tech";
	endif;
	
	if (is_home()):
		$social_url = get_home_url();
	else:
		$social_url = get_permalink($post->ID);
	endif;
 ?>

<meta property="og:title" content="<?php echo $social_title; ?>" />
<meta property="og:type" content="website" />
<meta property="og:url" content="<?php echo $social_url; ?>" />
<meta property="og:image" content="<?php echo $social_image; ?>"/>
<meta property="og:site_name" content="<?php echo $social_title; ?>" />
<meta property="fb:admins" content="48304418" />
<meta property="og:description" content="<?php echo strip_tags($social_description[0]); ?>"/>

<meta name="twitter:card" value="summary" />
<meta name="twitter:url" value="<?php echo $social_url; ?>" />
<meta name="twitter:title" value="<?php echo $social_title; ?>" />
<meta name="twitter:description" value="<?php echo strip_tags($social_description[0]); ?>" />
<meta name="twitter:image" value="<?php echo $social_image; ?>" />
<meta name="twitter:site" value='<a href="http://twitter.com/womenandtech" target="_blank" rel="nofollow">@womenandtech</a>' />
<meta name="twitter:creator" value="@womenandtech" />

<meta name="description" content="<?php echo strip_tags($social_description[0]); ?>">

<!-- Site Environment: <?php echo SITE_ENV; ?> -->