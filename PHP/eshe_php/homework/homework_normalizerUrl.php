<?php
/*
 * Реализуйте функцию normalizeUrl(), которая выполняет так называемую нормализацию данных.
 * Она принимает адрес сайта и возвращает его с https:// в начале.
 * Функция принимает адреса в виде АДРЕС или http://АДРЕС, но всегда возвращает адрес в виде https://АДРЕС
 */
function normalizeUrl($url)
{
    if (strpos($url, 'http://') === 0)
    {
        $url = str_replace('http://', 'https://' , $url);
        return $url;
    }
    elseif (strpos($url, 'https://'))
    {
        return $url;
    }
    else
    {
        return "https://$url";
    }
}
print_r(normalizeUrl('google.com'));