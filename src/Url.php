<?php

namespace Xolf\XlfLi;

/**
 * Xolf
 */
class Url
{

    public function get($url = null, $source = false)
    {
        $url = 'https://xlf.li?t=' . $url;
        if($source) $url .= '&?s=' . $source;
        return $url;
    }

}


 ?>
