<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
		
  <title>
    <?php echo wp_title(''); ?>
  </title>

  <meta http-equiv="content-type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>" />
  <meta name="description" content="<?php bloginfo('description') ?>" />
  <?php if(is_search()) { ?>
		<meta name="robots" content="noindex, nofollow" /> 
  <?php }?>
	
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/styles/grid.css" media="screen" />
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/styles/application.css" media="screen" />  
  <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
  
  <?php wp_head(); ?>

</head>

<body>
	
  <div class="container">
    <div id="masthead" class="column span-24 prepend-1 append-1 last">
      <h1><?php bloginfo('name'); ?></h1>
    </div>
    
    <div class="column span-24 prepend-1 append-1 last">
      <ul id="main-nav" class="nav">
        <?php wp_list_pages('title_li='); ?>
      </ul>
    </div>