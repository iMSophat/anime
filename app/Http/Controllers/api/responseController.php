<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class responseController extends Controller
{
    // class reponse  success
    public static function success($result)
    {
        return response()->json(
            [
                'status' => 200,
                'result'=> $result
            ],200
        );
    }

    // class reponse  client error
    public static function client($result){

        return response()->json(
            [
                'status' => 400,
                'result'=> $result
            ],400
        );
    }

    // class reponse  code  error
    public static function error($result){

        return response()->json(
            [
                'status' => 500,
                'result'=> $result
            ],500
        );
    }

    //class reponse  code  error when detail data
    public static function errorDetail($result){

        $data   = array(['error'=>'ID Not Found : '.$result]);
        return response()->json(
            [
                'status' => 400,
                'result'=> $data
            ],400
        );
    }

    public static function errorString($result)
    {
        $sm     = array(['error'=>'The id must be a number : '.$result]);
        return response()->json(
            [
                'stastu' => 400,
                'result' =>$sm
            ],400
        );
    }
    public static function errorUnique($result)
    {
        $sm     = array(['error'=> "The '$result' has already been taken."]);
        return response()->json(
            [
                'stastu' => 400,
                'result' =>$sm
            ],400
        );
    }
}
