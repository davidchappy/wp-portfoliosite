<?php get_header(); ?>

<div class="content">
   
   	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <h1><?php the_title(); ?></h1>
      <p><?php the_content(); ?></p>        
    
    <?php endwhile; else : ?>
	
		<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
	
	<?php endif; ?>
    
  <div class="contact">
      <h3>Questions? Drop Me A Line!</h3>
      <a class="btn" href="#">Email Me</a>
  </div>

</div>

<?php get_footer(); ?>