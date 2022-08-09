<?php

namespace App\Utils;

use Symfony\Component\HttpFoundation\JsonResponse;

class globals
{
public function success( array $data = null ,string $message = 'success',int $codeHttp= 200):JsonResponse
{
    return new JsonResponse([
        'status' =>1,
        'message' =>$message,
        'data' => $data
    ], $codeHttp);
}

public function error(array  $error = ErrorHttp::ERROR):JsonResponse
{
    return new JsonResponse([
        'status' =>0,
        'message' =>$error ['message']?? 'error',

    ], $error['code']?? 500);
}

}