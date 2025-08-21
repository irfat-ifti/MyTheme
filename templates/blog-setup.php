<?php if(have_posts()): while(have_posts()): the_post();?>
<div class="blog-area">
    <h2><a class="text-decoration-none text-dark" href="<?php the_permalink();?>"><?php the_title();?></a></h2>
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