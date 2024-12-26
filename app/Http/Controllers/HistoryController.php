<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SearchHistory;

class HistoryController extends Controller
{
    public function index(){
        
        $data = SearchHistory::paginate(10);
        return view('users.history.index', compact('data'));

    }
}
