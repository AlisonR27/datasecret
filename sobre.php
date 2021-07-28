<?php

/* Template Name: Sobre */

get_header();
?>
<style>
  #sobre .banner h1 {
    font-size:48pt;
    font-weight: 900;
  }
  #sobre {
    padding-top:0 !important;
  }
  .banner {
    position:relative;
    height:580px;
    margin-bottom:-100px;
  }
  .sobre-banner {
    width:100%;
    object-fit:cover;
    position: absolute;
    z-index: 0;
    height:100%;
  }
  .banner h1 {
    z-index: 5;
    position:absolute;
    height: 100%;
    width: 100%;
    text-align: center;
    justify-content: center;
    display: flex;
    align-items: center;
    padding-bottom: 50px;
  }
  #sobre article {
    position:relative;
    padding: 40px 90px;
    width:70%;
    margin:auto;
  }
  .know-us b * {
    font-weight: bold !important;
  }
  .know-us b h2 {
    font-weight: 900 !important;
  }
</style>
<section class="bg-white" id="sobre">
  <div class="banner">
    <img src="<?php the_post_thumbnail_url();?>" class="sobre-banner" alt="">  
    <h1 class="text-white">
      SOBRE NÓS
    </h1>
  </div>
  <article id="post-sobre" class="bg-white shadow-lg">
    <?php the_content();?>
  </article>
  <div class="container mt-5 mb-5 mx-auto row">
    <div class="col-4 text-center text-black">
      <h3 class="font-weight-bolder" >O que fazemos?</h3>
    </div>
    <div class="col-4 text-center text-black">
      <h3 class="font-weight-bolder" >Nossa Missão</h3>
    </div>
    <div class="col-4 text-center text-black">
      <h3 class="font-weight-bolder" >Nossa Visão</h3>
    </div>
  </div>
  <div class="container mx-auto my-5">
    <div class="card know-us shadow-lg border-0 w-75 mx-auto">
      <div class="card-body text-center py-5 px-2">
        <b>
          <small class="text-darkblue">
            Confie em quem é especialista em Proteção de Dados
          </small>
          <h2>
            Conheça nossos serviços
          </h2>
          <a href="" class="btn btn-lg btn-dblue px-3 py-2 rounded-0">
              Saiba mais
          </a>
        </b>
      </div>
    </div>
  </div>
</section>


<?php 
get_footer();