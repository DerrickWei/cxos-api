<?php

namespace App\Traits;

trait HttpResponseTrait {
    protected function success( array $data, string $message = null, int $code = 200 )
    {
        return response()->json([
            'message' => $message,
            'data'    => $data
        ], $code);
    }

    protected function failure( string $message = null, int $code )
    {
        return response()->json([
            'message' => $message,
        ], $code);
    }
}
