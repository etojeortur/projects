<?php


/*function startsWith($text, $substr)
{
   if (mb_strpos($text, $substr) !== false && mb_strpos($text, $substr) < 1){
       return true;
   }else{
       return false;
   }
}

var_dump(startsWith('one', 'o'));
*/


const SECONDS_IN_YEAR = 60 * 60 * 24 * 365;

/*function getYear($timestamp)
{
    $timestamp = floor($timestamp / 365 / 24 / 60 / 60);
    $timestamp += 1970;
    return intval($timestamp);
}
print_r(getYear(532435204));
*/

/* function getCustomDate($timestamp)
{
    return date("d/m/Y", $timestamp);
}

print_r(getCustomDate(532435204));
*/

function getHexletBirthday()
{
    return mktime(0, 0, 0, 1, 1, 2012);
}

print_r(getHexletBirthday());

print_r(date_default_timezone_get());
