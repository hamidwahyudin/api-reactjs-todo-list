<?php

namespace App\Http\Controllers;

use App\Idea;
use Illuminate\Http\Request;

class IdeaController extends Controller
{
    public function index()
    {
        $ideas = Idea::orderBy('id', 'desc')->get();
        return response()->json($ideas);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title'   => 'required',
            'content' => 'required'
        ]);

        $idea =  Idea::create($request->all());
        return response()->json($idea);
    }
}