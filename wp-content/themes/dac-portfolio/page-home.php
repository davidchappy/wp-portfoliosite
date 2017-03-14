<?php 
/*
  Template Name: Home Page
*/

?>

<?php get_header(); ?>

<?php get_template_part('content', 'banner'); ?>

<div class="content">
   
  <div class="about">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <?php the_content(); ?>      
      
    <?php endwhile; endif; ?>

    <a class="btn" href="#">Holler At Me</a>
  </div>  

  <hr>

  <div class="work clearfix">
    
    <h2>My Work</h2>

    <div class="row">
      <?php get_template_part('content', 'portfolio'); ?>
    </div>
  </div>
    
  <div class="contact">
    <h3>Like What You See?</h3>
    <a class="btn" href="#">Email Me</a>
  </div>

</div>

<?php get_footer(); ?>