<?php

/**
 * Get data of Group or channel Telegram
 * Raminet Programmers
 * https://github.com/Raminet-2021
 */


// input tg group
$html = file_get_contents('https://t.me/Tg Group');

preg_match_all('#(.*?) members, (.*?) online#', $html, $matches);
preg_match_all('/<div class=\"tgme_page_description\" dir=\".*\">(.*)<\/div>/i', $html, $des);
preg_match_all('/<meta property=\"og:title\" content=\"(.*)\"/i', $html, $title);
preg_match('/([-a-z0-9_\/:.]+\.(jpg|jpeg|png|gif))/i', $html, $image);
$members = (int) filter_var($matches[1][0], FILTER_SANITIZE_NUMBER_INT);
$online  = (int) filter_var($matches[2][0], FILTER_SANITIZE_NUMBER_INT);
$title0 = $title[1][0];
$des0 = $des[0][0];





echo '<img  src=\"'.$image[0].'\">
</br> Title : '.$title0.'
</br> Members : '.$members.'
</br> Online : '.$online.'
</br> description : '.$des0.'

';

?>
