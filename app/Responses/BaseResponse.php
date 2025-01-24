<?php

namespace App\Responses;

use Illuminate\Http\JsonResponse;

class BaseResponse {

    public function baseResponse($message,$object): JsonResponse
    {
        return response()->json([
            'success' => true,
            'message' => $message,
            'object' => $object
        ],200);
    }

}
