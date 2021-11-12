<?php
/**
 * Sanitizer class for filter sanitizing
 * @author Aniss Nahim
 * @license MIT 
 */

 namespace App\Libraries\Validation;

 class Sanitizer{

    /**
     * Constructor 
     */
    public function __construct(){

    }

    /**
     * URL sanitizer
     * @param string
     * @param array
     * @return string
     */
    public static function sanitizeUrl($url){
        return filter_var($url, FILTER_SANITIZE_URL);
    }

    /**
     * Email sanitizer
     * @param string
     * @return string
     */
    public static function sanitizeEmail($email){
        return filter_var($email, FILTER_SANITIZE_EMAIL);
    }

    
    /**
     * String sanitizer
     * @param string
     * @param array
     * @return string
     */
    public static function sanitizeString($string, $options = []){
        return filter_var($string, FILTER_SANITIZE_STRING, $options);
    }

    /**
     * Integer sanitizer
     * @param string
     * @return string
     */
    public static function sanitizeInteger($int){
        return filter_var($int, FILTER_SANITIZE_NUMBER_INT);
    }

    /**
     * Float sanitizer
     * @param string
     * @param array
     * @return string
     */
    public static function sanitizeFloat($float, $options = []){
        return filter_var($float, FILTER_SANITIZE_NUMBER_FLOAT, $options);
    }

    /**
     * Float sanitizer
     * @param string
     * @param array
     * @return string
     */
    public static function sanitizeSpecialChars($float, $options = []){
        return filter_var($float, FILTER_SANITIZE_SPECIAL_CHARS, $options);
    }
 }