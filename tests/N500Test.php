<?php

class N500Test extends TestCaseBase
{
    public function testPhoto()
    {
        $this->assertEmbed(
            'https://500px.com/photo/127505793/nude-girl-retro-by-david-dubnitskiy',
            [
                'imageWidth' => 274,
                'image' => 'https://500px.com/graphics/nude/img_3.png',
                'imageHeight' => 274,
                'type' => 'photo',
            ]
        );
    }
}
