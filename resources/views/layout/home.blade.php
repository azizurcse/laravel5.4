@extends('layout.app')

@section('body')
    <div class="row">
        <div class="col-lg-4 col-lg-offset-4">
            <br><br>
            <a href="insertview/create" class="btn btn-info">Add Post</a>
            <h1>Insert Your Post</h1>
            <ul class="list-group">
                @foreach($posts as $post)
                <li class="list-group-item">
                    {{$post->post}}
                    <span class="pull-right">{{$post->created_at->diffForHumans()}}</span>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection