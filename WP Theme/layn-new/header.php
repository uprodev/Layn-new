<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset');?>">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?php echo wp_get_document_title(); ?></title>

    <style>
        .global-wrapper.page-landing{opacity:0}.preloader{position:fixed;left:0;top:0;width:100vw;height:100vh;background-color:#111;z-index:9999;display:flex;flex-direction:column;align-items:center;justify-content:center;transform-origin:center}.preloader .preloader-logo{margin:0 0 20px;opacity:0}
    </style>

		<?php wp_head();?>
</head>

<body <?php body_class() ?>>
<header class="header">
    <div class="container-fluid">
        <div class="header-logo">
            <a href="#">
                <img src="./images/logo.svg" alt="" />
            </a>
        </div>
        <nav class="header-navigation">
            <ul>
                <li><a href="creative.html">Creative</a></li>
                <li><a href="assembly.html">Assembly</a></li>
            </ul>
        </nav>
    </div>
</header>
<div id="preloader" class="preloader">
    <div class="preloader-logo">
        <img src="<?= get_template_directory_uri();?>/images/logo.svg" alt="" />
    </div>
</div>

<div class="global-wrapper page-landing bg-dark">
    <main class="content">