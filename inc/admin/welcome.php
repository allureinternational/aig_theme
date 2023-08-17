<?php if (!defined('ABSPATH')) {
    die;
} // Cannot access directly. ?>

<div class="wrap to-wrap">

    <div class="to-admin-page-header">

        <div class="to-admin-page-header-text">
            <h1>
                <?php esc_html_e('Welcome to Conbix!', 'conbix'); ?>
            </h1>
            <p>
                <?php esc_html_e('Conbix is a Business Consulting WordPress Theme', 'conbix'); ?>
            </p>
        </div>

        <div class="to-admin-page-header-logo">
            <img src="<?php echo get_theme_file_uri('inc/admin/assets/img/icon.svg'); ?>" />
        </div>
    </div>

    <div class="to-admin-boxes">

        <div class="to-admin-box">

            <div class="to-admin-box-header">
                <h2>
                    <?php esc_html_e('Documentation', 'conbix'); ?>
                </h2>
            </div>

            <div class="to-admin-box-inside">
                <p>
                    <?php esc_html_e('You can find everything about theme functionality.', 'conbix'); ?>
                </p>
                <a href="https://docs.themeori.com/docs/conbix/" target="_blank" class="button">
                    <?php esc_html_e('Go to Documentation', 'conbix'); ?>
                </a>
            </div>

        </div>

        <div class="to-admin-box">

            <div class="to-admin-box-header">
                <h2>
                    <?php esc_html_e('Conbix Support', 'conbix'); ?>
                </h2>
            </div>

            <div class="to-admin-box-inside">
                <p>
                    <?php esc_html_e('Do you need help? Feel to free ask any question.', 'conbix'); ?>
                </p>
                <a href="https://docs.themeori.com/envato/conbix/help-and-support-24/" target="_blank"
                    class="button"><?php esc_html_e('Go to Support Page', 'conbix'); ?></a>
            </div>

        </div>

    </div>

</div>