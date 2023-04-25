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

?>
