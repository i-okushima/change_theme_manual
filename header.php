<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css" type="text/css">
  <title>
    <?php
    if (is_page()) {
      echo get_the_title();
    } else {
      echo post_type_archive_title();
    }
    ?>｜
    <?php bloginfo('name'); ?>
  </title>
  <?php wp_head(); ?>
</head>

<body class="light">
  <header>
    <nav>
      <ul>
        <li>
          <a href="<?php echo home_url('/text-elements'); ?>">text要素</a>
        </li>
        <li>
          <a href="<?php echo home_url('/div-elements'); ?>">div要素</a>
        </li>
        <li><a href="<?php echo home_url('/input-elements'); ?>">input要素</a></li>
      </ul>
    </nav>
  </header>