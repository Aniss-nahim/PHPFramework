<?php
/**
 * Validator class for data validation
 * @author Aniss Nahim
 * @license MIT 
 */

 namespace App\Libraries\Validation;

 class Validator{
    /**
     * Sanitizer object
     * @param Sanitize
     */
    private Sanitizer $sanitizer;

    /**
     * Constructor
     * 
     */
    public function __construct(){
        // Not sure 
        $this->sanitizer = new Sanitizer;
    }

    public static function validate($data, $specifications=[]){
        foreach($specifications as $key => $rules){
            foreach($rules as $rule){
                call_user_func([Validator::class, $rule], $data[$key]);
            }
        }
    }

    /**
     * Email validation
     * @param string
     * @return boolean
     */
    public static function email($email){
        $email = Sanitizer::sanitizeEmail($email);
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            return $email;
        }
    }

    /**
     * Required validation
     * @param string
     * @return boolean
     */
    public static function required($value){
        strlen($value) > 0 ? $value:false;
    }
    // Validator::validate($data, [
    //     "email" // key => 'email, required, max=zkef, min=kzje'... 
    // ])

 }