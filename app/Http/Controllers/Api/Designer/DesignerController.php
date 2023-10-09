<?php

namespace App\Http\Controllers\Api\Designer;

use App\Http\Controllers\Controller;
use App\Models\Designer;
use Illuminate\Http\Request;

class DesignerController extends Controller
{
    public function accountDelete(){
        $designerId= auth()->user()->id;
        Designer::where('id',$designerId)->update(['is_deleted'=>1]);
        $data = [
            'status' => 200,
            'message' => 'Successfully Account Delete',
        ];
        return $data;

    }
}
