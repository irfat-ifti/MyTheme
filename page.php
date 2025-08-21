<?php get_header();?>
<section id="body_are">
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-9 pl-2">
                <?php get_template_part('templates/post-setup');?>
            </div>
            <div class="col-md-3 pr-2">
                <?php get_sidebar();?>
            </div>
        </div>
    </div>
</section>
<?php get_footer();?>