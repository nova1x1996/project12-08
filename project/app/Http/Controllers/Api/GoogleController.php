<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{

    public function redirectGoogle()
    {
        // return Socialite::driver('google')
        //     ->with(
        //         ['client_id' => '866685114769-kvo4g5l534t7b9jr62c0g3cgsgb2nr4m.apps.googleusercontent.com'],
        //         ['client_secret' => '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'],
        //         ['redirect' => 'http://127.0.0.1:8000/google/callback']
        //     )
        //     ->redirect();
        return Socialite::driver('google')->redirect();
    }
    public function handleGoogleCallBack()
    {
        $user1 = Socialite::driver('google')->user();

        $user = Customer::where('google_id', $user1->id)->first();

        if (!empty($user)) {
            Auth::guard('client')->login($user);
            return redirect()->route("Home");
        } else {
            $data = Customer::create([
                "name" => $user1->name,
                "email" => $user1->email,
                "google_id" => $user1->id,
                "password" => "",
                "address" => "",
                "phone" => ""

            ]);
            Auth::guard("client")->login($data);
            return redirect()->route("Home");
        }
    }
    // public function getGoogleSignInUrl()
    // {
    //     try {
    //         $url = Socialite::driver('google')->stateless()
    //             ->redirect()->getTargetUrl();
    //         return response()->json([
    //             'url' => $url,
    //         ])->setStatusCode(Response::HTTP_OK);
    //     } catch (\Exception $exception) {
    //         return $exception;
    //     }
    // }

    // public function loginCallback(Request $request)
    // {
    //     try {
    //         $state = $request->input('state');

    //         parse_str($state, $result);
    //         $googleUser = Socialite::driver('google')->stateless()->user();

    //         $user = Customer::where('email', $googleUser->email)->first();
    //         if ($user) {
    //             throw new \Exception(__('google sign in email existed'));
    //         }
    //         $user = Customer::create(
    //             [
    //                 'email' => $googleUser->email,
    //                 'name' => $googleUser->name,
    //                 'google_id' => $googleUser->id,
    //                 'password' => '123',
    //             ]
    //         );
    //         return response()->json([
    //             'status' => __('google sign in successful'),
    //             'data' => $user,
    //         ], Response::HTTP_CREATED);
    //     } catch (\Exception $exception) {
    //         return response()->json([
    //             'status' => __('google sign in failed'),
    //             'error' => $exception,
    //             'message' => $exception->getMessage()
    //         ], Response::HTTP_BAD_REQUEST);
    //     }
    // }
}
