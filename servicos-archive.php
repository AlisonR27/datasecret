<?php
/* Template Name: Servicos */

get_header();
?>  
<section id="servicos">
<?php
 $args = array(
   'post_type'           => 'servicos',
   'posts_per_page'      => -1,
 );
 $the_query = new WP_Query( $args );
 if ($the_query->have_posts()) {
   while ($the_query->have_posts()) {
     $the_query->the_post();?>
     <div class="blog-post">
       <img src="<?php the_post_thumbnail_url();?>" alt="" width="200px">
       <div class="blog-post-content">
         <h2><?php  the_title();?></h2>
         <p><?php echo get_the_excerpt();?></p>
         <a href="<?php echo the_permalink();?>">Saiba mais</a>
       </div>
     </div>
   <?php
   }
   wp_reset_postdata();
 }
?>
</section>

<?php
get_footer();