<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\registration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Flash;
use Response;

class RegistrationController extends Controller {
    public $successStatus = 200;

    public function getAllRegisters(Request $request) {
        $token = $request['t']; // t = token
        $userid = $request['u']; // u = userid

        $user = User::where('id', $userid)->where('remember_token', $token)->first();

        if ($user != null) {
            $reg = registration::all();

            return response()->json($reg, $this->successStatus);
        } else {
            return response()->json(['response' => 'Bad Call'], 501);
        }        
    }  
    
    public function getRegister(Request $request) {
        $id = $request['rid']; // rid = reg id
        $token = $request['t']; // t = token
        $userid = $request['u']; // u = userid

        $user = User::where('id', $userid)->where('remember_token', $token)->first();

        if ($user != null) {
            $reg = registration::where('id', $id)->first();

            if ($reg != null) {
                return response()->json($reg, $this->successStatus);
            } else {
                return response()->json(['response' => 'Registration not found!'], 404);
            }            
        } else {
            return response()->json(['response' => 'Bad Call'], 501);
        }  
    }

    public function searchRegister(Request $request) {
        $params = $request['p']; // p = params
        $token = $request['t']; // t = token
        $userid = $request['u']; // u = userid

        $user = User::where('id', $userid)->where('remember_token', $token)->first();

        if ($user != null) {
            $reg = registration::where('firstname', 'LIKE', '%' . $params . '%')
                ->orWhere('address', 'LIKE', '%' . $params . '%')
                ->get();
            // SELECT * FROM Registration WHERE description LIKE '%params%' OR title LIKE '%params%'
            if ($reg != null) {
                return response()->json($reg, $this->successStatus);
            } else {
                return response()->json(['response' => 'Registration not found!'], 404);
            }            
        } else {
            return response()->json(['response' => 'Bad Call'], 501);
        }  
    }
}