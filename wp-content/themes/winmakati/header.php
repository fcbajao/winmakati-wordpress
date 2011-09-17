<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width" />

  <title><?php page_title(); ?></title>

  <link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/css/reset.css" />
  <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div id="page">
    <div id="header">
      <h1>
        <a href="<?php echo home_url(); ?>" title="<?php home_page_link_title(); ?>" rel="home">
          <span><?php bloginfo( 'name' ); ?></span>
        </a>
      </h1>
      <h2><?php bloginfo( 'description' ); ?></h2>
    </div>

    <div id="content">
