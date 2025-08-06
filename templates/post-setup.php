<?php if(have_posts()): while(have_posts()): the_post();?>
<div class="blog-area my-5">
    <h2><a class="text-decoration-none text-dark" href="<?php the_permalink();?>"><?php the_title();?></a></h2>
    <div class="post-details">
        <a href="<?php the_permalink();?>" class="text-secondary text-decoration-none">
            <?php the_content();?></a>

    </div>
    <div class="post-thumb">
        <a href="<?php the_permalink();?>"><?php the_post_thumbnail("post-thumbnails");?></a>
    </div>
</div>
<?php endwhile; else: _e("No Posts Found", "irfatifti"); endif;?>