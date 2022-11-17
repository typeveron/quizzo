@extends('backend.layouts.master')
@section('title', 'create quiz')
@section('content')

<div class="span9">
    <div class="content">
        
        <div class="module">
            <div class="module-head">
                <h3>All Quizzes</h3>
            </div>

            <div class="module-body">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>Description</th>
                      <th>Minutes</th>
                      <th></th>
                      <th></th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    {{-- get all quizzes  --}}
                    @if(count($quizzes)>0)
                    @foreach($quizzes as $key=>$quiz)
                    <tr>
                      <td>{{$key+1}}</td>
                      <td>{{$quiz->name}}</td>
                      <td>{{$quiz->description}}</td>
                      <td>{{$quiz->minutes}}</td>
                      <td>
                        <a href="{{route('quiz.edit',[
                            $quiz->id])}}">
                        <button class="btn btn-primary">
                         Edit
                        </button>
                       </a>
                      </td>
                      <td>
                        {{-- delete --}}
                        <form id="delete-form{{$quiz->id}}" method="POST"
                            action="{{route('quiz.destroy', [$quiz->id])}}">@csrf
                        {{method_field('DELETE')}}
                        </form>
                        <a href="#" onclick="if(confirm('Do you want to delete?'))
                        {
                            event.preventDefault();
                            document.getElementById('delete-form{{$quiz->id}}')
                            .submit()
                        } else {
                            event.preventDefault();
                        }
                        ">
                        <input type="submit" value="Delete" class="btn btn-danger">
                        </a>
                      </td>
                    </tr>
                    @endforeach
                    @else
                    <td>No quizzes to display</td>
                    @endif
                  </tbody>
                </table>
               </div>
           </div>
        
        </div>
        
       </div>
</div> 

@endsection