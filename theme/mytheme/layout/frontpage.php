<?php
defined('MOODLE_INTERNAL') || die();

echo $OUTPUT->doctype() ?>
<html <?php echo $OUTPUT->htmlattributes(); ?>>
<head>
    <title><?php echo $PAGE->title; ?></title>
    <?php echo $OUTPUT->standard_head_html(); ?>
</head>
<body <?php echo $OUTPUT->body_attributes(); ?>>
<?php echo $OUTPUT->standard_top_of_body_html(); ?>
<header role="banner">
    <div>
        <h1>Custom Moodle Theme</h1>
    </div>
</header>
<div>
    <?php echo $OUTPUT->main_content(); ?>
</div>
<footer>
    <?php echo $OUTPUT->standard_end_of_body_html(); ?>
</footer>
</body>
</html>
