<?php get_header(); ?>
<section id="portfolio">

     <div class="container">
     <div><small style="color:black">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?></small>
</div>

     <?php if(have_posts()): while(have_posts()): the_post();?>
     <p><?php the_time('Y/m/d'); ?></p>
      <h3><?php the_title(); ?></h3>
          <?php the_content(); ?>
    <?php endwhile; endif; ?>
     </div>
</section>
<?php get_footer(); ?>

