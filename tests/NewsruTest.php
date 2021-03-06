<?php
/**
 * Created by PhpStorm.
 * User: nikolaev
 * Date: 04.04.16
 * Time: 16:54
 */

class NewsruTest extends TestCaseBase
{

    public function testOne()
    {
        $this->assertEmbed(
            'http://www.newsru.com/russia/04apr2016/rusarc.html',
            [
                'title' => 'Путин переподчинил себе Росархив из-за "особой ценности" его материалов',
                'description' => 'Президент вывел Федеральное архивное агентство из подчинения Минкульта, оказавшегося в центре громкого коррупционного скандала. Между тем недавно в отставку был отправлен многолетний руководитель Госархива, развенчавший миф о героях-панфиловцах. Впрочем, на встрече Путина с руководителем Росархива Андреем Артизовым речь шла о другом.'
            ]
        );
    }


}