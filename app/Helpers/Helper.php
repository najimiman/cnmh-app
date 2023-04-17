<?php
if (!function_exists('is_male_localisation')) {
    function is_male_localisation($key) {
        $isMale = filter_var(trans('message.isMale'), FILTER_VALIDATE_BOOLEAN);
        if ($isMale) {
            return 'un';
        } else {
            return 'une';
        }
    }
}

?>
