<?php

/**
 * Response Class
 */

 namespace App\Libraries;

 class Response{

    /**
     * Set status code response
     * @param int
     */
    public function setStatus(int $code){
        http_response_code($code);
    }
 }