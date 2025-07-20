<?php get_header() ?>

<?php if (have_posts()) { ?>
    <?php while (have_posts()) {
        the_post(); ?>
        <h2 class="font-bold text-3xl"><?php the_title() ?></h2>
        <div class="prose lg:prose-xl max-w-full my-5">
            <?php the_content() ?>
        </div>
    <?php } ?>
<?php } else { ?>
    <p>There are no posts!</p>
<?php } ?>

<?php get_footer() ?>