@extends('backend.layouts.master')
@section('title', 'create quiz')
@section('content')
<div class="span9">
    <div class="content">
        @if(Session::has('message'))
        <div class="alert alert-success">{{Session::get('message')}}</div>
        @endif
        <form action="{{route('quiz.update', [$quiz->id] )}}" method="POST">@csrf
        {{method_field('PUT')}}
        <div class="module">
            <div class="module-head">
                <h3>Create quiz</h3>
            </div>
            <div class="module-body">
                <div class="control-group">
                    <label class="control-label">Quiz Name</label>
                    <div class="controls">
                        <input type="text" name="name" class="span8"
                        placeholder="name of a quiz" value="{{$quiz->name}}">
                        <br/>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                    <label class="control-label">Quiz Description</label>
                    <div class="controls">
                        <textarea name="description" class="span8">
                            {{$quiz->description}}
                        </textarea>
                        <br/>
                        @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                    <label class="control-label">Time</label>
                    <div class="controls">
                        <input type="text" name="minutes" class="span8"
                        placeholder="in minutes" value="{{$quiz->minutes}}">
                        <br/>
                        @error('minutes')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                    <br/>
                    <div class="controls">
                    <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection