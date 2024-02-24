<?php

if (! function_exists('create_slug')) {
    function create_slug($title) {
        // Calling url_title with lowercase set to true
        $slug = url_title($title, '-', true);
        return $slug;
    }
}