@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<dir class='container'>
    <div class='row'>
        <form action='{{route(Upload.File)}}' method="post" class="form-horizonta" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="file" name="file">
            <input type="submit" name="">
        </form>
    </div>
</dir>
