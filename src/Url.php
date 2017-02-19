<?php

namespace Xolf\XlfLi;

/**
 * Xolf
 */
class Url
{

    public static function link($url = null, $text = false, $source = false)
    {
        if(!$text) $text = $url;
        $link = self::get($url, $source);
        return '<a href="' . $link . '" rel="nofollow">' . $url . '</a>';
    }

    public static function get($url = null, $source = false)
    {
        $url = 'http://xlf.li?t=' . $url;
        if($source) $url .= '&s=' . $source;
        return $url;
    }

}

 ?>
