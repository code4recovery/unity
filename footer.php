</main>

<?php if (!is_post_type_archive('tsml_meeting')) { ?>
    <aside class="w-1/3">
        <?php get_sidebar() ?>
    </aside>
<?php } ?>

</div>
</div>

<footer id="colophon" class="border-t border-neutral-300 bg-neutral-200 py-10 text-neutral-500">
    <div class="max-w-7xl mx-auto px-6 grid grid-cols-2">
        <div>
            <p><?php bloginfo('name') ?></p>
            <p><?php bloginfo('description') ?></p>
            <p>&copy; <?php echo wp_date('Y') ?></p>
        </div>
        <div>
            <p>Site Map</p>
            <p>A.A. Recovery Meetings</p>
            <p>District Map</p>
        </div>
    </div>
</footer>

<?php wp_footer() ?>

</body>

</html>