@extends('layouts.layout', [
    'title' => 'List of questions'
])

@section('content') 

    <section id="banner">
        <div class="container">
            <h1>Questions</h1>
        </div>
    </section>

    <section id="questions">
        <div class="container">
            @foreach ($questions as $question)
                <div class="question">
                    <div class="question-left">
                        <div class="question-name">
                            <a href="{{ route('question_id', $question->id) }}">{{ $question->title }}</a>
                        </div>
                        <div class="question-info">
                            asked at {{ $question->created_at }} <a href="">slavo</a>
                        </div>
                    </div>
                    <div class="question-right">
                        <div class="question-stat"> 
                            <span>{{ count($question->answers) }}</span>
                            <label>responses</label>
                        </div>
                    </div> 
                </div>
            @endforeach 
        </div>
    </section>

@endsection

