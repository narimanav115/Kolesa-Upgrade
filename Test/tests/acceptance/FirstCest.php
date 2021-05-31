<?php

class FirstCest
{
    /*
        Проверка товара Blouse 
     */
    public function testBlouse(AcceptanceTester $I)
    {
        $I->amOnPage('');
        $I->seeElement('#homefeatured > li:nth-child(2)');
        $I->click('#homefeatured > li:nth-child(2) > div > div.left-block > div > a.quick-view');
        $I->see('Blouse');
    }
}
