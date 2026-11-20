<?php

namespace App\Traits;

use Illuminate\Support\Str;

class ResponseHelper
{
    public static function jsonResponse($data, $message = '', $status = 200)
    {
        return response()->json([
            'data' => $data,
            'message' => $message,
            'status' => $status,
        ], $status);
    }
}