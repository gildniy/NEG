<?php
/*
|--------------------------------------------------------------------------
| ConvertDateMySQLNorm
|--------------------------------------------------------------------------
|
| This function convert the Date MSQL in the Normal format.
*/
function convertMySQLtoNormDate($date)
{
    return date('M jS, Y g:i A', strtotime($date));
}

/*
|--------------------------------------------------------------------------
| ConvertNormalTextToBold
|--------------------------------------------------------------------------
*/

function boldText($string, $array)
{
    $string = strip_tags($string);
    return preg_replace('~(' . implode('|', $array) . '[a-zA-Z]{0,45})(?![^<]*[>])~is', '<strong>$0</strong>', $string);
}