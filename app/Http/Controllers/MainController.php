<?php

namespace App\Http\Controllers;

use App\Models\Crios;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $crioses = Crios::all();
        return view('crioses.index', [
            'crioses' => $crioses
        ]);
    }
}
