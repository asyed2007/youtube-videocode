<?php

/**
 * This file is part of the asyed2007/youtube-videocode library
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @copyright Copyright (c) Ali Syed <qali923@gmail.com>
 * @license http://opensource.org/licenses/MIT MIT
 */


namespace ASyed2007\YouTube;

/**
 * This package helps with parsing various youtube urls to get you the video id from the URLs
 */
class YouTubeCode
{
    /**
     * Returns a simple and friendly message.
     *
     * @return string
     */
    public function getHello()
    {
        return 'Hello, World!';
    }

    /**
     * Returns the youtube video code.
     *
     * @return string
     */
    public function getCode($url)
    {
        $code = "";

        preg_match('/(\?|&)v=([^&#]+)/', $url, $matches1);
        if (count($matches1)) {
            $code = $matches1[2];
        }

        preg_match('/(\.be\/)+([^\/]+)/', $url, $matches2);
        if (count($matches2)) {
            $code = $matches2[2];
        }

        preg_match('/(\/embed\/)+([^\/]+)/', $url, $matches3);
        if (count($matches3)) {
            $code = $matches3[2];
        }

        return $code;
    }
}
