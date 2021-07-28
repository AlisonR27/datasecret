<!DOCTYPE html>
<html lang="pt-BR" style="margin:0 !important;">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title();?></title>
  <?php
    wp_head(  );
  ?>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark px-0">
      <div class="container px-0">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a href="<?php echo get_site_url();?>" class="navbar-brand">
          <img src="<?php echo get_bloginfo('template_url');?>/assets/img/logo_hor.svg"  width="220px" alt="">
        </a>
        <div class="collapse navbar-collapse justify-content-between" id="navbarToggler">
          <div class="mr-auto"></div>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="<?php echo get_site_url();?>/sobre" class="nav-link">SOBRE</a></li>
            <li class="nav-item"><a href="<?php echo get_site_url();?>/servicos" class="nav-link">SERVIÇOS</a></li>
            <li class="nav-item"><a href="<?php echo get_site_url();?>/datablog" class="nav-link">BLOG</a></li>
            <li class="nav-item"><a href="<?php echo get_site_url();?>/contatos" class="nav-link">CONTATOS</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <main <?php if (!is_front_page(  )) { echo 'class="bg-white"';}?>>