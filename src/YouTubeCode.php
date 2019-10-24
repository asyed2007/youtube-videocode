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
     * Returns the youtube video code.
     *
     * @return string
     */
    public function getCode($url)
    {
        $code = "";
        $patterns = ['/(\?|&)v=([^&#]+)/', '/(\.be\/)+([^\/]+)/', '/(\/embed\/)+([^\/]+)/'];

        foreach ($patterns as $pattern) {
            preg_match($pattern, $url, $matches);
            if (count($matches)) {
                $code = $matches[2];
            }
        }


        $code = preg_replace('/\?.*/', "", $code);

        return $code;
    }
}
