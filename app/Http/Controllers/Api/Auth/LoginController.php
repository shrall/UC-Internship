<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Laravel\Passport\Client;
use GuzzleHttp\Client as GuzzleHttpClient;

class LoginController extends Controller
{
    private $client;

    public function __construct()
    {
        $this->client = Client::find(2);
    }

    public function login(Request $request)
    {

        $http = new GuzzleHttpClient;

        $admin = [
            'email' => $request->email,
            'password' => $request->password,
            'role_id' => 1,
        ];
        $supervisor = [
            'email' => $request->email,
            'password' => $request->password,
            'role_id' => 2,
        ];
        $student = [
            'email' => $request->email,
            'password' => $request->password,
            'role_id' => 3,
        ];

        $check = DB::table('uci_users')->where('email', $request->email)->first();

        if (Auth::attempt($student)) {
            // $this->is_login(Auth::id());
            $response = $http->post('http://jurnalmagang.com/oauth/token', [
                'form_params' => [
                    'grant_type' => 'password',
                    'client_id' => $this->client->id,
                    'client_secret' => $this->client->secret,
                    'username' => $request->email,
                    'password' => $request->password,
                    'scope' => '*',
                ]
            ]);
            $var = json_decode((string) $response->getBody(), true);
            $var = collect($var);
            $var->put("user_id", $check->id);
            $var->put("role", $check->detailable_type);
            $var = json_decode((string) $var, true);
            return $var;
        } else if (Auth::attempt($supervisor)) {
            // $this->is_login(Auth::id());
            $response = $http->post('http://jurnalmagang.com/oauth/token', [
                'form_params' => [
                    'grant_type' => 'password',
                    'client_id' => $this->client->id,
                    'client_secret' => $this->client->secret,
                    'username' => $request->email,
                    'password' => $request->password,
                    'scope' => '*',
                ]
            ]);
            $var = json_decode((string) $response->getBody(), true);
            $var = collect($var);
            $var->put("user_id", $check->id);
            $var->put("role", $check->detailable_type);
            $var = json_decode((string) $var, true);
            return $var;
        } else if (Auth::attempt($admin)) {
            // $this->is_login(Auth::id());
            $response = $http->post('http://jurnalmagang.com/oauth/token', [
                'form_params' => [
                    'grant_type' => 'password',
                    'client_id' => $this->client->id,
                    'client_secret' => $this->client->secret,
                    'username' => $request->email,
                    'password' => $request->password,
                    'scope' => '*',
                ]
            ]);
            $var = json_decode((string) $response->getBody(), true);
            $var = collect($var);
            $var->put("user_id", $check->id);
            $var->put("role", $check->detailable_type);
            $var = json_decode((string) $var, true);
            return $var;
        } else {
            return response([
                'message' => 'Login Failed'
            ], 401);
        }
    }

    private function is_login(int $id)
    {
        $user = User::findOrFail($id);
        return $user->update([
            'is_login' => '1',
        ]);
    }

    public function refresh(Request $request)
    {
        $this->validate($request, [
            'refresh_token' => 'required',
        ], [
            'refresh_token' => 'refresh token is required'
        ]);

        $http = new GuzzleHttpClient;

        $response = $http->post('http://192.168.1.4/UC-internship/public/oauth/token', [
            'form_params' => [
                'grant_type' => 'refresh_token',
                'client_id' => $this->client->id,
                'client_secret' => $this->client->secret,
                'refresh_token' => $request->refresh_token,
                'scope' => '*',
            ]
        ]);
        return json_decode((string) $response->getBody(), true);
    }

    public function logout()
    {
        $user = Auth::user();
        $accesstoken = Auth::user()->token();
        DB::table('oauth_refresh_tokens')->where('access_token_id', $accesstoken->id)->update(['revoked' => true]);

        $user->update([
            'is_login' => '0',
        ]);

        $accesstoken->revoke();

        return response([
            'message' => 'Logged Out.'
        ]);
    }
}
