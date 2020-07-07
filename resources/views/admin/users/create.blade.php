@extends('layouts.app')
@section('content')

@include('admin.includes.errors')




    <div class="card" style="margin-top:35px">
        <div class="card-header">
            Create a new user
        </div>

        <div class="card-body">
            <form action="{{ route('user.store') }}" method="post">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="name" style="font-weight: bold">User</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="name" style="font-weight: bold">Email</label>
                    <input type="email" name="email" class="form-control">
                </div>
            <div class="form-group">
                <div class="text-center">
                    <button class="btn btn-success" type="submit">
                        Add user
                    </button>
                </div>

                </div>

        </div>
    </div>

@endsection
