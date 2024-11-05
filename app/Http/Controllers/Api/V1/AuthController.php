<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register( Request $request ) {
        
        $fields = $request->validate([
            'name' => ['required', 'min:3', 'max:50'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'confirmed'],
        ]);
        
        $user = User::create( $fields ); 
        
        // now create user token
        $token = $user->createToken( $request->input('name') );
        
        return [
            'user' => $user,
            'token' => $token,
            'plainTextToken' => $token->plainTextToken,
        ];
        
    }
    public function login( Request $request ) {
        $request->validate([
            'email' => ['required', 'email', 'exists:users'],
            'password' => ['required'],
        ]);        
        
        // check user exist or not 
        $user = User::where( 'email', '=', $request->input('email') )->first();
        
        if ( ! $user || ! Hash::check( $request->input('password') , $user->password ) ) {
            return [
                'message' => 'The provided credentials are incorrect'
            ];
        }
        
        // regenerate user token
        $token = $user->createToken( $user->name );
        
        return [
            'user' => $user,
            'token' => $token,
            'plainTextToken' => $token->plainTextToken,
        ];
    }
    
    public function logout( Request $request ) {
        $request->user()->tokens()->delete();
        return [
            'message' => 'You are logged out.'
        ];        
    } 
}
