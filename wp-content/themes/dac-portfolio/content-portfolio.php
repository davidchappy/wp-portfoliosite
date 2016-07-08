<?php 

  $args = array( 
    'post_type' => 'dac-portfolio',
  );
  $query = new WP_Query( $args );

?>

<?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>

<?php $image = get_field('dac_portfolio_image'); ?>

  <figure class="work-item">
        <img class="work-thumbnail" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']?>">
        <figcaption>
          <h4><?php the_field('dac_portfolio_title'); ?></h4>
          <p class="work-item-intro"><?php the_field('dac_portfolio_excerpt'); ?></p>
          <p><?php the_field('dac_portfolio_description'); ?></p>
          <a href="<?php the_field('dac_portfolio_link'); ?>" class="btn click-to-view">View This Project</a>
        </figcaption>
  </figure>

<?php endwhile; endif; wp_reset_postdata(); ?>
     