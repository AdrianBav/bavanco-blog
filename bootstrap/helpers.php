<?php

if (! function_exists('pretty_date')) {
    /**
     * [date description]
     *
     * @param   [type]  $value
     * @return  [type]
     */
    function pretty_date($value)
    {
        return date('jS F, Y', strtotime($value));
    }
}
