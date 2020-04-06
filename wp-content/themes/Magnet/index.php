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
          <?php if(have_posts()): while(have_posts()): the_post();?>                
              <div class="col-md-4 col-sm-6">
                    <a href="<?php the_permalink(); ?>">
                         <div class="portfolio-thumb">
                         <img src="<?php the_post_thumbnail_url(''); ?>" class="img-responsive" alt="<?php the_title(); ?>">  
                                <div class="portfolio-overlay">
                                    <div class="portfolio-item">
                                            <h3><?php the_title(); ?></h3>
                                            <small><?php the_time('Y/m/d'); ?></small>
                                            <small><?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?></small>
                                    </div>
                                </div>
                         </div>
                    </a>
               </div>
          <?php endwhile; endif; ?>
          </div>
     </div>
</section>
<?php get_footer(); ?>

