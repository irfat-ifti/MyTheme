<?php get_header();?>
<section id="body_are">
    <div class="container">
        <div class="row">
            <div class="col-md-9 pl-2">
                <?php if(have_posts()): while(have_posts()): the_post();?>
                <div class="blog-area my-5">
                    <h2><a class="text-decoration-none text-dark"
                            href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                    <div class="post-details">
                        <a class="text-secondary text-decoration-none" href="<?php the_permalink();?>">
                            <?php the_excerpt();?></a>

                    </div>
                    <div class="post-thumb">
                        <a href="<?php the_permalink();?>"><?php the_post_thumbnail("post-thumbnails");?></a>
                    </div>
                </div>
                <?php endwhile; else: _e("No Posts Found", "irfatifti"); endif;?>
                <div id="page_nav">
                    <?php 
                    if(function_exists("mt_pagenav")) {
                        mt_pagenav();
                    }else{
                        next_posts_link();
                        previous_posts_link();
                    }
                    ?>
                </div>
            </div>
            <div class="col-md-3 pr-2 mt-5">
                <?php get_sidebar();?>
            </div>
        </div>
    </div>
</section>
<?php get_footer();?>