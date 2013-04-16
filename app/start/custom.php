<?php

if ( ! function_exists('dd'))
{
    /**
     * Dump the given value and kill the script.
     *
     * @param  mixed  $value
     * @return void
     */
    function dd($value)
    {
        echo "<pre>";
        var_dump($value);
        echo "</pre>";
        die;
    }
}
