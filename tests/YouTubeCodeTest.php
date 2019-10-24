<?php

namespace ASyed2007\YouTube\Test;

use ASyed2007\YouTube\YouTubeCode;

class YouTubeCodeTest extends TestCase
{
    public function testGetCode()
    {
        $yt = new YouTubeCode();
        $this->assertSame('w4d5O4O8TxU', $yt->getCode("https://www.youtube.com/watch?v=w4d5O4O8TxU"));
        $this->assertSame('w4d5O4O8TxU', $yt->getCode("https://youtu.be/w4d5O4O8TxU"));
        $this->assertSame('w4d5O4O8TxU', $yt->getCode("https://youtube.com/embed/w4d5O4O8TxU"));
        $this->assertSame(
            'kkKR-R6QmRA',
            $yt->getCode('https://www.youtube.com/embed/kkKR-R6QmRA?wmode=opaque&controls=&modestbranding=1')
        );
    }
}
