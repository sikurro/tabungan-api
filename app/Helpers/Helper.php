<?php

if (!function_exists('response_success')) {
    function response_success($data, $message = 'OK') {
        return response()->json([
            'success' =>  true,
            'code' => 200,
            'message' => $message,
            'data' => $data
        ]);
    }
}

if (!function_exists('response_error')) {
    function response_error($message = 'ERROR', $data = null) {
        $response = [
            'success' =>  false,
            'code' => 400,
            'message' => $message,
            'data' => null
        ];

        if (env('APP_DEBUG') == true) {
            $response['data'] = $data;
        } else {
            $response['data'] = 'Error: please contact administrator';
        }

        return response()->json($response);
    }
}

if (!function_exists('response_unauthenticated')) {
    function response_unauthenticated($message = 'UNAUTHENTICATED', $data = null) {

        $response = [
            'success' =>  false,
            'code' => 401,
            'message' => $message,
            'data' => null
        ];

        if (env('APP_DEBUG') == true) {
            $response['data'] = $data;
        }

        return response()->json($response);
    }
}

if (!function_exists('getAppName')) {
    function getAppName() {
        return env('APP_NAME');
    }
}
