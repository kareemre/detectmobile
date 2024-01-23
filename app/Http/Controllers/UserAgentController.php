<?php

namespace App\Http\Controllers;

use App\Traits\UserAgentTrait;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;

class UserAgentController extends Controller
{
    
    /**
     * Detecting user's operating system type
     *
     * @param  mixed $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function userOsType(Request $request)
    {
        $response = [];

        $userAgent = $request->header('User-Agent');
        dd($userAgent);

        if (str::contains($userAgent, 'Android', true)) {

             $response['message'] = 'You are in google play';

        } elseif (Str::contains($userAgent, ['ipad', 'iphone'], true)) {

             $response['message'] = 'You are in App Store';
        }

        return Response()->json([
            $response
        ], 200);     
    }
       
}
