<?php

if (!function_exists('settings')) {
    function settings($key = null, $default = null)
    {
        // Simple fallback since GeneralSettings was removed
        if (is_array($key)) {
            return $default;
        }

        return $default;
    }
}