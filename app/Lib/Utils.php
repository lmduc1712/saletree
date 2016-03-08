<?php
/**
 * Class Utils contains common logic functions
 * Functions writed here should be static
 * Only write common logic function which not relate to DB
 *
 * @package Lib
 * @author hungnq
 **/
class Utils extends Object {
    /**
     * Check if input string is phone number
     *
     * @param $input string
     * @return void
     * @author hungnq
     **/
    public static function isPhoneNumber($input) {
        if (!preg_match('/^[0-9]{2,4}-[0-9]{2,4}-[0-9]{3,4}$/', $input)) {
            return false;
        }
        return true;
    }

    /**
     * Check if input string is email address
     *
     * @param $input string
     * @return void
     * @author hungnq
     **/
    public static function isEmail($input) {
        if (!preg_match('|^[0-9a-z_./?-]+@([0-9a-z-]+\.)+[0-9a-z-]+$|', $input)) {
            return false;
        }

        return true;
    }

    /**
     * Check if input string is email address
     *
     * @param $input string
     * @return void
     **/
    public static function isPostcode($input) {
        if (!preg_match('/^[0-9]{3}-[0-9]{4}$/', $input)) {
            return false;
        }
        
        return true;
    }

    /**
     * Check captcha answer
     *
     * @param $input string
     * @return void
     * @author hungnq
     **/
    public static function checkReCaptcha($recaptchaChallengeField, $recaptchaResponseField) {
        require_once(APP . 'Vendor' . DS . 'recaptchalib.php');
        
    }
}