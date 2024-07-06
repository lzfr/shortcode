<?php
namespace Lzfr\Shortcode;

class ShortcodeGenerator
{
    /**
     * @return false|string
     */
    public function generateShortcode()
    {
        // Implement your shortcode generation logic here
        return substr(md5(uniqid()), 0, 6); // Example generation logic
    }

    /**
     * @param $length
     * @return string
     */
    public function generateShortCodeByLength($length) :String
    {
        return substr(md5(uniqid()), 0, $length); // Example generation logic
    }
}
