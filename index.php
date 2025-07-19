<?php get_header() ?>

<?php if (have_posts()) { ?>
    <?php while (have_posts()) {
        the_post(); ?>
        <h2>
            <a href="<?php the_permalink() ?>" class="font-bold text-3xl no-underline hover:underline">
                <?php the_title() ?>
            </a>
        </h2>
        <p class="mt-2 text-neutral-600"><?php the_date() ?></p>
        <div class="prose lg:prose-xl max-w-full my-5">
            <?php the_content('Continue reading') ?>
        </div>
    <?php } ?>
<?php } else { ?>
    <p>There are no posts!</p>
<?php } ?>

<?php get_footer() ?>