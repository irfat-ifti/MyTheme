<?php get_header(); ?>
<div class="container text-center my-5">
    <div class="error-404">
        <h1 class="display-4 text-danger">404 - Page Not Found</h1>
        <p class="lead">Sorry, the page you are looking for does not exist. You can go back to the <a
                href="<?php echo home_url(); ?>" class="btn btn-primary">Homepage</a> or use the search below.</p>
        <div class="mt-4">
            <?php get_search_form(); ?>
        </div>
    </div>
</div>
<?php get_footer();?>