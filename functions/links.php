<?php

if (!defined('UNITY_LINK')) {
    define('UNITY_LINK', 'unity_link');
}

if (!defined('UNITY_NONCE')) {
    define('UNITY_NONCE', 'unity_nonce');
}

add_action('admin_init', function () {
    add_meta_box('unity_link_fields', 'Fields', function () {
        global $post;
        $url = get_post_meta($post->ID, 'url', true);
        wp_nonce_field(UNITY_NONCE, UNITY_NONCE);
        ?>
        <label for="url">URL</label>
        <input type="url" name="url" id="url" value="<?php esc_attr_e($url) ?>">
        <?php
    }, UNITY_LINK, 'normal', 'low');
});

// add custom post types
add_action('init', function () {
    register_post_type(UNITY_LINK, [
        'label' => 'Links',
        'public' => true,
        'has_archive' => false,
        'menu_icon' => 'dashicons-admin-links',
        'supports' => ['title'],
        'taxonomies' => ['category']
    ]);
});

add_action('save_post', function ($post_id, $post, $update) {
    // security
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    if (wp_is_post_revision($post_id)) {
        return;
    }
    if (!isset($_POST[UNITY_NONCE]) || !wp_verify_nonce($_POST[UNITY_NONCE], UNITY_NONCE)) {
        return;
    }
    if (!isset($_POST['post_type']) || ($_POST['post_type'] != UNITY_LINK)) {
        return;
    }
    update_post_meta($post_id, 'url', $_POST['url']);
}, 10, 3);