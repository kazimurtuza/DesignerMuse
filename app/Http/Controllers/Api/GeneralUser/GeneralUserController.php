<?php

namespace App\Http\Controllers\Api\GeneralUser;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class GeneralUserController extends Controller
{
    public function deleteAccount()
    {
        $userId = auth()->user()->id;
        User::where('id', $userId)->update([
            'is_deleted' => 1
        ]);
        $data = [
            'status' => 200,
            'message' => 'Successfully Account Deleted',
        ];
        return response()->json($data);
    }

    public function profileUpdate(Request $request)
    {
       $request->validate([
           'name'=>'required',
       ]);

        $user = Auth::user();
        $user->name = $request->name;
        if ($request->phone) {
            $user->phone = $request->phone;
        }
        if ($request->country) {
            $user->country_name = $request->country;
        }
        $user->save();

        $data = [
            'status' => 200,
            'message' => 'Successfully profile updated',
        ];
        return response()->json($data);
    }

    public function profileInfo(Request $request)
    {
        return Auth::user();
    }
}
