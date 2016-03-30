<?php

class SpbdnevnikTest extends TestCaseBase
{
    public function testOne()
    {
        $this->assertEmbed(
            'http://www.spbdnevnik.ru/news/2016-03-30/v-sotsialnykh-setyakh-rastyat-armiyu-klonov-peterburzhtsev/',
            [
                'title' => 'В социальных сетях растят армию клонов петербуржцев',
                'description' => 'Все чаще петербуржцы сталкиваются с мошенниками, создающими дубликаты страниц в социальных сетях. Злоумышленники используют личную информацию пользователей, чтобы, прикрываясь чужим именем, проворачивать свои махинации.',
            ]
        );
    }
}
