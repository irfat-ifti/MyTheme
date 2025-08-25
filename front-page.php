<?php
// Theme Front Page

get_header();?>

<section id="service_area">
    <div class="container my-3">
        <h1 class="text-center mb-3">Our Services</h1>
        <div class="card-wrapper">
            <?php 
            query_posts('post_type=services&post_status=publish&posts_per_page=-1&order=ASC&paged='. get_query_var("post"));
            if(have_posts()):
                while (have_posts()): the_post();
            ?>
            <div class="col-md-3 card">
                <h2 class="card-title"><?php the_title()?></h2>
                <div class="card-thumb"> <?php echo the_post_thumbnail("services");?></div>
                <p class="card-desc"><?php the_excerpt();?></p>
            </div>
            <?php endwhile;
            endif;?>
        </div>
    </div>
</section>


<?php get_footer();?>