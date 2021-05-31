<?php

class FuncCest
{
    /*
        Поиск карточек
    */
    public function searchTest(FunctionalTester $I)
    {
        $I->amOnPage('/');
        $I->seeElement('#search_query_top');
        $I->click('#search_query_top');
        $I->fillField('#search_query_top', 'Printed dress');
        $I->click('#searchbox > button');
        $I->seeNumberOfElements('#center_column > ul > li.ajax_block_product.col-xs-12.col-sm-6.col-md-4.first-in-line.first-item-of-tablet-line.first-item-of-mobile-line > div', 5);
    }
}
