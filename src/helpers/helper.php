<?php
// src/helpers/helper.php

/**
 * Generate a base URL.
 *
 * @param string $path
 * @return string
 */
function base_url($path = '') {
    return 'http://localhost:8000' . ltrim($path, '/');
}

/**
 * Escape a string for HTML output.
 *
 * @param string $string
 * @return string
 */
function escape($string) {
    return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}

// Other helper functions
