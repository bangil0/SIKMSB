<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class PesertaController extends Controller
{
    public function rekening(Request $r)
    {
        $usr=Auth::user();
        $usr->no_rek=$r->no;
        $usr->save();
        return redirect('/home');
    }
}
