<?php
/**
 * Created by PhpStorm.
 * User: ToXaHo
 * Date: 22.04.2017
 * Time: 17:01
 */

namespace App\Http\Controllers;

use Socialite;
use App\User;
use Auth;

class AuthController extends Controller
{

    public function login($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function callback($provider)
    {
        $user = json_decode(json_encode(Socialite::driver($provider)->user()));
        if(isset($user->returnUrl)) return redirect('/');
        $user = $user->user;
        $user = $this->createOrGetUser($user, $provider);
        Auth::login($user, true);
        return redirect()->intended('/');
    }

    public function createOrGetUser($user, $provider)
    {
        session_start();
        $ref = NULL;
        if (isset($_SESSION['ref'])) {
            $ref = $_SESSION['ref'];
        }
        if ($provider == 'vkontakte') {
            $u = User::where('user_id', $user->uid)->first();
            if ($u) {
                $username = $user->last_name.' '.$user->first_name;
                if (!is_null($u->affiliate_use)) $ref = $u->affiliate_use;
                User::where('user_id', $user->uid)->update([
                    'name' => $username,
                    'avatar' => $user->photo_big,
                    'affiliate_use' => $ref
                ]);
                $user = $u;
            } else {
                $code = '';
                for ($i = 0; $i <= 4; $i++) {
                    $code .= mt_rand(0,9);
                }
                $username = $user->last_name.' '.$user->first_name;
                $user = User::create([
                    'user_id' => $user->uid,
                    'name' => $username,
                    'avatar' => $user->photo_big,
                    'affiliate_code' => $code,
                    'affiliate_use' => $ref
                ]);
            }
        } else if ($provider == 'steam') {
            $u = User::where('user_id', $user->steamid)->first();
            if ($u) {
                if (!is_null($u->affiliate_use)) $ref = $u->affiliate_use;
                User::where('user_id', $user->steamid)->update([
                    'name' => $user->personaname,
                    'avatar' => $user->avatarfull,
                    'affiliate_use' => $ref
                ]);
                $user = $u;
            } else {
                $code = '';
                for ($i = 0; $i < 4; $i++) {
                    $code .= mt_rand(0,9);
                }
                $user = User::create([
                    'user_id' => $user->steamid,
                    'name' => $user->personaname,
                    'avatar' => $user->avatarfull,
                    'affiliate_code' => $code,
                    'affiliate_use' => $ref
                ]);
            }
        }
        return $user;
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->intended('/');
    }

}