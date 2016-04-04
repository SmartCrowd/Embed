<?php
/**
 * Created by PhpStorm.
 * User: nikolaev
 * Date: 04.04.16
 * Time: 16:49
 */

class NNRuTest extends TestCaseBase
{

    public function testOne()
    {
        $this->assertEmbed(
            'http://www.nn.ru/news/more/zoozaschitniki_soobschili_o_pokupayuschikh_dvornyazhek_zhivodyorakh/26253503/',
            [
                'title' => 'Неизвестные скупают беспородных собак для пыток - зоозащитники — Новости NN.RU',
                'description' => 'Нижегородское сообщество помощи животным «Дай лапку» распространило тревожную информацию. В газетах появляются объявления о том, что некий приют покупает беспородных собак. По сведениям зоозащитников, на самом деле авторы объявления не просто содержат «бездомышей», а используют их для пыток.',
            ]
        );
    }

}