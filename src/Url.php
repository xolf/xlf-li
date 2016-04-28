<?php

namespace Xolf\XlfLi;

/**
 * Xolf
 */
class Url
{

    public function link($url = null, $text = $url, $source = false)
    {
        $link = self::get($url, $source);
        return '<a href="' . $link . '">' . $url . '</a>';
    }

    public function get($url = null, $source = false)
    {
        $url = 'http://xlf.li?t=' . $url;
        if($source) $url .= '&s=' . $source;
        return $url;
    }

}

 ?>
