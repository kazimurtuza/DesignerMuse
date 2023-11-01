<?php

namespace App\Http\Controllers\ShopKeeper;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminPanelController extends Controller
{
    public function adminDashboard(){
        return view('shopkeeper.index');
    }
}
