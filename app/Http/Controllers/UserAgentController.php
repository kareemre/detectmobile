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

        if (str::contains($userAgent, 'Android')) {

             $response['message'] = 'You are in google play';

        } elseif (Str::contains($userAgent, ['ipad', 'iphone'])) {

             $response['message'] = 'You are in App Store';
        }
       
        return Response()->json([
            $response['message']
        ], 200);
        
    }

    
}
