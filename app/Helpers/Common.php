<?php


namespace App\Helpers;

class Common{

    //custom
    public static function json_response($message, $status, $code)
    {
        return response()->json([
            'message' => $message,
            'status' => $status,
        ], $code);
    }

    //will check if model is updated created or deleted successfully will return response based on it
    public static function store_or_update_or_delete_json_response($message, $status, $code, $success)
    {
        if($success)
        {
            return response()->json([
                'message' => $message,
                'status' => $status,
            ], $code);
        }
        else
        {
            return response()->json([
                'message' => 'Some Error Occured While Processing your request',
                'status' => $status,
                
            ], $code);
        }
    }
}