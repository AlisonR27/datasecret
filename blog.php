<?php
/* Template name: Archive */
get_header();
?>

<h2 class="title text-center">
  <span class="font-weight-normal">DATA</span>BLOG
</h2>
<div class="container">
  <div class="row mx-0">
    <section id="posts" class="col-7 p-0">
    <?php 
        get_header();
        $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
        $args = array(
          'post_type'           => 'post',
          'posts_per_page'      => 4,
          'paged'               => $paged,
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
    <nav id="navigate" class="col-5 bg-dark h-100">
        aa
    </nav>
  </div>
</div>

  <nav id="pagination" class="pagination">
    <?php 
        echo paginate_links( array(
            'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
            'total'        => $the_query->max_num_pages,
            'current'      => max( 1, get_query_var( 'paged' ) ),
            'format'       => '?page=%#%',
            'show_all'     => false,
            'type'         => 'plain',
            'end_size'     => 2,
            'mid_size'     => 1,
            'add_args'     => false,
            'add_fragment' => '',
      ));?>
</div>
<?php 
get_footer();