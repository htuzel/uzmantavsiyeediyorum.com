<?php

if (!defined('FW'))
    die('Forbidden');

$cfg = array(
    'page_builder' => array(
        'title' => esc_html__('Search articles', 'docdirect'),
        'description' => esc_html__('Display search from for articles written by providers.', 'docdirect'),
        'tab' => esc_html__('DocDirect', 'docdirect'),
    )
);
