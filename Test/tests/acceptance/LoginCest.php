<?php

use Page\Acceptance\LoginPage;

class LoginCest
{
    /*
        Проверка товара Blouse 
     */
    public function testErrorUsername(AcceptanceTester $I)
    {
        $I->amOnPage(LoginPage::$URL);
        $I->fillField(LoginPage::$LOGIN_INPUT, LoginPage::$ERROR_USERUSERNAME);
        $I->fillField(LoginPage::$PASSWORD_INPUT, LoginPage::$ERROR_PASSWORD);
        $I->waitForText(LoginPage::$ERROR_MESSAGE);
    }
}
