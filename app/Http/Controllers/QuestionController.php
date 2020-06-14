<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;

class QuestionController extends Controller
{
    public function index(){
        return view('questions/index');
    }
    public function show($id){
        $question = Question::findOrFail($id);
        return view('questions/show', compact('question'));
    }
}
