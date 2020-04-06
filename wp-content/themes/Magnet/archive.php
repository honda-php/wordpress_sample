<?php get_header(); ?>
<!-- Home Section -->

<section id="home">
     <div class="container">
          <div class="row">
               <div class="col-md-12 col-sm-12">
          <p>ご覧頂きありがとうございます。<br>
               エンジニアのホンダです。
          このサイトはHTMLで作成したブログをオリジナルテーマとしてwordpress化したサンプルサイトです。</p>
               </div>
          </div>
     </div>
</section>

<!-- Portfolio Section -->

<section id="portfolio">
     <div class="container">
          <div class="row">
          <?php if (in_category(array('3'))) {?>
            <?php if(have_posts()): while(have_posts()): the_post();?>
            　<div class="col-md-4 col-sm-6">
                    <a href="<?php the_permalink(); ?>">
                         <div class="portfolio-thumb">
                         <img src="<?php the_post_thumbnail_url(''); ?>" class="img-responsive" alt="<?php the_title(); ?>">  
                                 <div class="portfolio-overlay">
                                    <div class="portfolio-item">
                                            <h3><?php the_title(); ?></h3>
                                            <small><?php the_time('Y/m/d'); ?></small>
                                           <?php echo '<span class="'.$cat->slug.'">'.$cat->name.'</span>'?>
                                    </div>
                                </div>
                         </div>
                    </a>
              </div>
              <?php endwhile; endif; ?>
          <?php } elseif(in_category(array('2'))){ ?>
             <?php if(have_posts()): while(have_posts()): the_post();?>
              <div class="col-md-4 col-sm-6">
                    <a href="<?php the_permalink(); ?>">
                         <div class="portfolio-thumb">
                         <img src="<?php the_post_thumbnail_url(''); ?>" class="img-responsive" alt="<?php the_title(); ?>">  
                                 <div class="portfolio-overlay">
                                    <div class="portfolio-item">
                                            <h3><?php the_title(); ?></h3>
                                            <small><?php the_time('Y/m/d'); ?></small>
                                           <?php echo '<span class="'.$cat->slug.'">'.$cat->name.'</span>'?>
                                    </div>
                                </div>
                         </div>
                    </a>
              </div>
              <?php endwhile; endif; ?>
          <?php } elseif(in_category(array('5'))){ ?>
             <?php if(have_posts()): while(have_posts()): the_post();?>
              <div class="col-md-4 col-sm-6">
                    <a href="<?php the_permalink(); ?>">
                         <div class="portfolio-thumb">
                         <img src="<?php the_post_thumbnail_url(''); ?>" class="img-responsive" alt="<?php the_title(); ?>">  
                                 <div class="portfolio-overlay">
                                    <div class="portfolio-item">
                                            <h3><?php the_title(); ?></h3>
                                            <small><?php the_time('Y/m/d'); ?></small>
                                           <?php echo '<span class="'.$cat->slug.'">'.$cat->name.'</span>'?>
                                    </div>
                                </div>
                         </div>
                    </a>
              </div>
              <?php endwhile; endif; ?>
          <?php }else{ ?>
              <?php if(have_posts()): while(have_posts()): the_post();?>
              <div class="col-md-4 col-sm-6">
                    <a href="<?php the_permalink(); ?>">
                         <div class="portfolio-thumb">
                         <img src="<?php the_post_thumbnail_url(''); ?>" class="img-responsive" alt="<?php the_title(); ?>">  
                                 <div class="portfolio-overlay">
                                    <div class="portfolio-item">
                                            <h3><?php the_title(); ?></h3>
                                            <small><?php the_time('Y/m/d'); ?></small>
                                           <?php echo '<span class="'.$cat->slug.'">'.$cat->name.'</span>'?>
                                    </div>
                                </div>
                         </div>
                    </a>
              </div>
              <?php endwhile; endif; ?>
          <?php } ?>
        </div><!-- ./row -->
     </div>
</section>
<?php get_footer(); ?>

