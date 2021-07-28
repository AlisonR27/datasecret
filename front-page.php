<?php 
get_header();
?>
<script>  
window.addEventListener('load', () => {
  new Glider(document.querySelector('.glider'), {
  slidesToShow: 1,
  dots: '#dots',
  draggable: true,
  arrows: {
    prev: '.glider-prev',
    next: '.glider-next'
  }
});
})
</script>
<section id="banner" class="position-relative" style="height:600px;background-image:url(<?php echo get_bloginfo('template_url');?>/assets/img/banner-bg.png);">
  <div class="container z-4">
    <div class="row">
      <div class="col-md-5 d-flex flex-column justify-content-between text-white border-left border-white" style="border-width:3px !important;">
        <div>
          <div class="glider">
          <?php 
            $args = array(
              'post_type'           => 'home-post',
              'posts_per_page'      => 5,
            );
            $the_query = new WP_Query($args);
            if ($the_query->have_posts()):
            while ($the_query->have_posts()):
            $the_query->the_post()
          ?>
            <article>
              <p class="text-uppercase">
                <?php the_title();?>
              </p>
              <b class="text-uppercase font-weight-bold">
                <?php echo get_the_content();  ?>
              </b>
            </article>
            <?php
            endwhile;
            wp_reset_postdata(  );
          endif;
            ?>
          </div>
        </div>
        <div id="dots" class="glider-dots"><button data-index="0" aria-label="Page 1" role="tab" class="glider-dot"></button><button data-index="1" aria-label="Page 2" role="tab" class="glider-dot "></button><button data-index="2" aria-label="Page 3" role="tab" class="glider-dot "></button><button data-index="3" aria-label="Page 4" role="tab" class="glider-dot active"></button><button data-index="4" aria-label="Page 5" role="tab" class="glider-dot "></button><button data-index="5" aria-label="Page 6" role="tab" class="glider-dot "></button><button data-index="6" aria-label="Page 7" role="tab" class="glider-dot "></button><button data-index="7" aria-label="Page 8" role="tab" class="glider-dot "></button><button data-index="8" aria-label="Page 9" role="tab" class="glider-dot "></button><button data-index="9" aria-label="Page 10" role="tab" class="glider-dot "></button></div>
      </div>
      <div class="col-7"></div>
    </div>
  </div>
</section>
<section id="servicos" class="bg-white">
  <h1 class="title text-center"> SERVIÇOS </h1>
  <div class="container px-0 mt-5">
    <div class="card-deck mx-0 justify-content-center">
    <?php 
      $args = array(
        'post_type'           => 'servicos',
        'posts_per_page'      => 5,
      );
      $the_query = new WP_Query($args);$index=0;
      if ($the_query->have_posts()):
      while ($the_query->have_posts()):
      $the_query->the_post()
    ?>
      <div class="card w-100 rounded-lg shadow-sm text-center" style="max-width:25vw;">
        <div class="card-header bg-white border-0">
          <h2 index="0<?php echo $index+1;?>/">
            <?php the_title(); ?>
          </h2>
        </div>
        <div class="card-body">
          <p>
          <?php echo substr(get_the_excerpt(), 100).'...';?>
        </p>
        </div>
        <div class="card-footer bg-white border-0">
          <a href="<?php the_permalink();?>" class="nav-link">
            Saiba mais ►
          </a>
        </div>
      </div>
      <?php
      if($index==2) {
        ?>
        </div>
        <div class="card-deck mx-0 mt-3 justify-content-center">
        <?php
      }
      $index++; endwhile;
      endif;
      wp_reset_postdata();
      ?>
    </div>
  </div>
</section>

<section id="blog">
  <h2 class="title text-center">
    <span class="font-weight-normal">DATA</span>BLOG
  </h2>
  <div class="container mt-5">
    <div class="card-deck">
      <?php 
      $args = array(
        'post_type'           => 'post',
        'posts_per_page'      => 3,
      );
      $the_query = new WP_Query($args);
      if ($the_query->have_posts()):
      while ($the_query->have_posts()):
      $the_query->the_post()
      ?>
      <div class="card border-0 bg-transparent">
        <img class="card-img-top rounded-lg shadow-sm" height="300px" style="object-fit:cover;" src="<?php the_post_thumbnail_url();?>" alt="">
        <div class="card-body">
          <?php the_excerpt();?>
        </div>
        <div class="card-footerborder-0 justify-content-end">
          <a href="<?php the_permalink();?>" class="stretched-link float-right font-weight-bold text-white">SAIBA MAIS ►</a>
        </div>
      </div>
      <?php
      endwhile;
      wp_reset_postdata();
    endif;
      ?>
    </div>
  </div>
</section>
<div class="row mx-0 justify-content-center mb-5">
  <a href="#" class="btn btn-light text-darkblue rounded-pill font-weight-bold px-4 py-2">VISITE NOSSO BLOG ►</a>
</div>
<?php 
get_footer();