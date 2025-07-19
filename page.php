<?php get_header() ?>

<?php if (have_posts()) { ?>
    <?php while (have_posts()) {
        the_post(); ?>
        <h2 class="font-bold text-3xl"><?php the_title() ?></h2>
        <?php the_content() ?>
    <?php } ?>
<?php } else { ?>
    <p>There are no posts!</p>
<?php } ?>

<?php get_footer() ?>