<?php get_header();?>
<section id="body_are">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
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
            </div>
            <div class="col-md-3">
                <h2>This is sidebar area</h2>
            </div>
        </div>
    </div>
</section>
<?php get_footer();?>