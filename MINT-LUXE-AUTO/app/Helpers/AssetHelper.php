<?php

if (!function_exists('dynamic_asset')) {
    function dynamic_asset($path)
    {
        if (request()->server('HTTP_X_FORWARDED_PROTO') == 'https' || env('FORCE_HTTPS', false)) {
            return secure_asset($path);
        }
        return asset($path);
    }
} 