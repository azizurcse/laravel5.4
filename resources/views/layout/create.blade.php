@extends('layout.app')

@section('body')
    <div class="row">
        <div class="col-lg-4 col-lg-offset-4">
            <br><br>
            <a href="/insertview" class="btn btn-info">Back</a>
            <h1>Insert New Post</h1>

            <form class="form-horizontal" action="/insertview" method="post">
                <fieldset>
                    <div class="form-group">
                        {{csrf_field()}}
                        <div class="col-lg-10">
                            <textarea class="form-control" name="post" id="textarea" rows="5"></textarea>
                        </div>

                        <br>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>

                </fieldset>
            </form>
            @if (count($errors)>0)
                <div class="alert alert-warning">
                @foreach($errors->all() as $error)
                   {{$error}}
                @endforeach
                </div>
            @endif
        </div>
    </div>

@endsection