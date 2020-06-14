@extends('layouts.layout')

 @section('show')
     
 
<section id="banner">
    <div class="container">
        <h1>{Question}</h1>
    </div>
</section>

<section id="question">
    <div class="container"> 
        <div class="question-left">
            <h2>{{$question->title}}</h2>
            <p>{{$question->text}}</p>
        </div>
        <div class="question-right">
            <div class="user-avatar">
                <img class="img-fluid" src="http://icons.iconarchive.com/icons/paomedia/small-n-flat/1024/user-male-icon.png"/>
            </div>
            <div class="user-name">by <a href="">slavo</a></div>
        </div>
    </div>
</section>

<section id="answers">
    <div class="container">
        <h2>3 Answers</h2>

        <div class="answer">
            <div class="answer-right">
                <p>I also tried using pymysql (on my Win7 x64 machine, Python 3.3), without too much luck. I downloaded
                the .tar.gz, extract, ran "setup.py install", and everything seemed fine. Until I tried connecting
                to a database, and got "KeyError [56]". An error which I was unable to find documented anywhere.</p>
            </div>
            <div class="answer-left">
                <div class="user-avatar">
                    <img class="img-fluid" src="http://icons.iconarchive.com/icons/paomedia/small-n-flat/1024/user-male-icon.png"/>
                </div>
                <div class="user-name">by <a href="">slavo</a></div>
            </div>
        </div>
    </div>
</section>
@endsection