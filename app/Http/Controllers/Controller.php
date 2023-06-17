<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    /**
     * @param array $result
     * @return JsonResponse
     */
    public static function success(array $result): JsonResponse
    {
        return response()->json($result);
    }

    /**
     * @param Exception $exception
     * @param int $code
     * @return JsonResponse
     */
    public static function error(Exception $exception, int $code = 500): JsonResponse
    {
        return response()->json([
            'error' => $exception->getCode(),
            'error_description' => $exception->getMessage()
        ], $code);
    }

}
