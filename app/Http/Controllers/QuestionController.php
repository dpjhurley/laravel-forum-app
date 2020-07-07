<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Answer;

class QuestionController extends Controller
{
    public function index()
    {
        $questions = Question::with('answers')->get();
        return view('questions.index', compact('questions'));
    } 

    public function show($id)
    {
        $question = Question::findOrFail($id);
        $answers = Answer::where('question_id', $id)->get();
        return view('questions.show', compact('question', 'answers'));
    }
}
