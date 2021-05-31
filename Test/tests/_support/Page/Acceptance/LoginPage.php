<?php
namespace Page\Acceptance;
/**
 * страница Login 
 */
class LoginPage
{
    /**
     * URL авторизации
     */
    public static $URL = '';
    public static  $ERROR_USERUSERNAME = 'locked_out_user';
    public static  $ERROR_PASSWORD = 'locked222';
    public static  $LOGIN_INPUT = '//input[@id="user-name"]';
    public static  $PASSWORD_INPUT = '//input[@id="password"]';
    public static  $ERROR_MESSAGE = 'Epic sadface: Username and password do not match any user in this service';

    

    
    /**
     * Declare UI map for this page here. CSS or XPath allowed.
     * public static $usernameField = '#username';
     * public static $formSubmitButton = "#mainForm input[type=submit]";
     */

    /**
     * Basic route example for your current URL
     * You can append any additional parameter to URL
     * and use it in tests like: Page\Edit::route('/123-post');
     */
    public static function route($param)
    {
        return static::$URL.$param;
    }

    /**
     * @var \AcceptanceTester;
     */
    protected $acceptanceTester;

    public function __construct(\AcceptanceTester $I)
    {
        $this->acceptanceTester = $I;
    }

}
