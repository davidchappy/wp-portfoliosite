<div class="banner">

<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

<?php $image = get_field('home_headshot'); ?>
  
  <img class="headshot" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']?>">
  <p class="tagline"><?php the_field('role_description')?></p>

<?php endwhile; endif; wp_reset_postdata(); ?>


<?php 

  $args = array( 
    'post_type' => 'skill-tags',
  );
  $query = new WP_Query( $args );

?>

  <ul class="tags">

    <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>

      <li class="tag"><?php echo get_field('tag_name')?></li>

    <?php endwhile; endif; wp_reset_postdata(); ?>

  </ul>

</div>