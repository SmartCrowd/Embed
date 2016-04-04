<?php
/**
 * Created by PhpStorm.
 * User: nikolaev
 * Date: 04.04.16
 * Time: 12:50
 */

class RybinskcityTest extends TestCaseBase
{
    public function testOne()
    {
        $this->assertEmbed(
            'http://rybinskcity.ru/news/2016/03/14/Yaroslavl-prinimaet-kinoforum-mira-i-soglasiya/',
            [
                'title' => 'Ярославль принимает кинофорум мира и согласия - Рыбинск Сити',
                'description' => 'Ярославль принимает кинофорум мира и согласия - новости Рыбинска - Рыбинск Сити',
            ]
        );
    }
}
