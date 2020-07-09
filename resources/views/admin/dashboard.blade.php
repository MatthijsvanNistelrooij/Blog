@extends('layouts.app')

@section('content')

<div class="row">
    <div class="column col-md-4" >
        <div class="card card-info" style="margin-top: 35px">
            <div class="card-header text-center"
            style="background-color: rgb(131, 129, 238); color: white">Posted</div>
            <div class="card-body">
            <h1 class="text-center">{{ $posts_count}}</h1>
            </div>
        </div>
    </div>

    <div class="column col-md-4">
        <div class="card card-danger" style="margin-top: 35px">
            <div class="card-header text-center"
            style="background-color: rgb(253, 122, 122); color: white"> Trashed </div>
            <div class="card-body">
            <h1 class="text-center">{{ $trashed_count }}</h1>
            </div>
        </div>
    </div>

    <div class="column col-md-4">
        <div class="card card-success" style="margin-top: 35px">
            <div class="card-header text-center"
            style="background-color: rgb(238, 129, 238); color: white">Users</div>
            <div class="card-body">
            <h1 class="text-center">{{ $users_count }}</h1>
            </div>
        </div>
    </div>

    <div class="column col-md-4">
        <div class="card card-info" style="margin-top: 35px">
            <div class="card-header text-center"
            style="background-color: rgb(129, 238, 129); color: white">Categories</div>
            <div class="card-body">
            <h1 class="text-center">{{ $categories_count }}</h1>
            </div>
        </div>
    </div>

</div>




@endsection
