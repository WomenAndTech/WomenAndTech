<?php global $post;
	if (is_home()||is_single()):
		$og_image=wp_get_attachment_url(get_post_thumbnail_id( (int) $post->ID));
	else:
		$og_image="http://a0.twimg.com/profile_images/2324237500/qg0reltqkz0rpp1ntdxa.png" 
	endif;
 ?>

<meta property="og:title" content="Women &amp;&amp; Tech" />
<meta property="og:type" content="website" />
<meta property="og:url" content="http://womenandtech.com" />
<meta property="og:image" content=<?php echo $og_image; ?>/>
<meta property="og:site_name" content="Women &amp;&amp; Tech" />
<meta property="fb:admins" content="48304418" />
<meta property="og:description" content="We're asking a group of clever women out for coffees to pick their brains and share our conversations. What is it like to be a woman working in tech? Nominate someone to share their story!" />