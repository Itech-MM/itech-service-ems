<?php
namespace App\Common\Utils;

class ResponseUtils{
    public static function responseData($data, $response){
        $resp = [];
        
        $resp['code'] = $response['code'];
        if($response['success']){
            $resp['ok'] = true;
            $resp['message'] = $response['message'];
        }else{
            $resp['ok'] = false;
            $resp['errors'] = $response['message'];
        }
        $resp['data'] = $data;
        return $resp;
    }
}