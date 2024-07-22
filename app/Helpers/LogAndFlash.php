<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

class LogAndFlash
{
    public static function warning($message, $data = [])
    {
        $user = static::getCurrentUser();
        $caller = static::getCallerInfo();

        $data = [
            'user_id' => $user->id ?? 0,
            'user_name' => $user->name ?? '',
            'page' => Request::fullUrl(),
            'method' => $caller['method'],
            'line' => $caller['line'],
            'message' => $message,
            'extra_data' => $data,
        ];

        Log::warning($message, $data);
        flash()->warning($message, $data);
    }

    public static function error($message, $data = [])
    {
        $user = static::getCurrentUser();
        $caller = static::getCallerInfo();

        $data = [
            'user_id' => $user->id ?? 0,
            'user_name' => $user->name ?? '',
            'page' => Request::fullUrl(),
            'method' => $caller['method'],
            'line' => $caller['line'],
            'message' => $message,
            'extra_data' => $data,
        ];

        Log::error($message, $data);
        flash()->error($message, $data);
    }

    public static function info($message, $data = [])
    {
        $user = static::getCurrentUser();
        $caller = static::getCallerInfo();

        $data = [
            'user_id' => $user->id ?? 0,
            'user_name' => $user->name ?? '',
            'page' => Request::fullUrl(),
            'method' => $caller['method'],
            'line' => $caller['line'],
            'message' => $message,
            'extra_data' => $data,
        ];

        Log::info($message, $data);
        flash()->info($message, $data);
    }

    public static function success($message, $data = [])
    {
        $user = static::getCurrentUser();
        $caller = static::getCallerInfo();

        $data = [
            'user_id' => $user->id ?? 0,
            'user_name' => $user->name ?? '',
            'page' => Request::fullUrl(),
            'method' => $caller['method'],
            'line' => $caller['line'],
            'message' => $message,
            'extra_data' => $data,
        ];

        Log::info($message, $data);
        flash()->success($message, $data);
    }

    protected static function getCurrentUser()
    {
        return Auth::user();
    }

    protected static function getCallerInfo()
    {
        $debug_backtrace = debug_backtrace();
        $caller['method'] = $debug_backtrace[2]['class'] . '::' . $debug_backtrace[2]['function'];
        $caller['line'] = $debug_backtrace[2]['line'];
        return $caller;
    }
}
