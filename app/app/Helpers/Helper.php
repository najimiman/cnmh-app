<?php
if (!function_exists('is_male_localisation')) {
    function is_male_localisation($key) {
        $isMale = filter_var(trans($key), FILTER_VALIDATE_BOOLEAN);
        // dd($isMale);
        if ($isMale) {
            return 'un';
        } else {
            return 'une';
        }
    }
}

if (!function_exists('app_menu')) {
    function app_menu() {
        return App\Models\MenuItem::all()->groupBy('menu_group.nom');
    }
}
