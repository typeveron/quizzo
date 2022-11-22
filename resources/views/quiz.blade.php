@extends('layouts.app')
@section('content')

<quiz-component
:times="{{$quiz->minutes}}"
:quizId="{{$quiz->id}}"
:quiz-questions="{{$quizQuestions}}"
:has-quiz-played="{{$authUserHasPlayedQuiz}}"
>

</quiz-component>

{{-- disable right click button --}}
{{-- <script type="text/javascript">
    window.oncontextmenu = function () {
        console.log("Right click disabled");
        return false;
    }
</script> --}}

@endsection