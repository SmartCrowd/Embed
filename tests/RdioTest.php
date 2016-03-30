<?php

class RdioTest extends TestCaseBase
{
    public function testOne()
    {
        $this->assertEmbed(
            'http://www.rdio.com/artist/Various_Artists/album/50_Dance_Hits_2015/',
            [
                'title' => 'Farewell Rdio',
                'imageWidth' => 1200,
                'imageHeight' => 630,
                'type' => 'link',
            ]
        );
    }
}
