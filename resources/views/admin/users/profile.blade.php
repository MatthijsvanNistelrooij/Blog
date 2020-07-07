@extends('layouts.app')
@section('content')

@include('admin.includes.errors')




    <div class="card" style="margin-top:35px">
        <div class="card-header">
            Edit your profile
        </div>

        <div class="card-body">
            <form action="{{ route('user.profile.update') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="name" style="font-weight: bold">Username</label>
                <input type="text" name="name" value="{{ $user->name }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="name" style="font-weight: bold">Email</label>
                    <input type="email" name="email"  value="{{ $user->email }}" class="form-control">
                </div>

                <div class="form-group">
                    <label for="name" style="font-weight: bold">New password</label>
                    <input type="password" name="password" class="form-control">
                </div>

                <div class="form-group">
                    <label for="name" style="font-weight: bold">Upload new avatar</label>
                    <input type="file" name="avatar" class="form-control">
                </div>

                <div class="form-group">
                    <label for="name" style="font-weight: bold">Facebook profile</label>
                    <input type="text" name="facebook"  value="{{ $user->profile->facebook }}" class="form-control">
                </div>

                <div class="form-group">
                    <label for="name" style="font-weight: bold">Youtube profile</label>
                    <input type="text" name="youtube"  value="{{ $user->profile->youtube }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="about" style="font-weight: bold">About you</label>
                <textarea name="about" id="about" cols="6" rows="6" class="form-control">
                   {{ $user->profile->about }}
                </textarea>
                </div>
            <div class="form-group">
                <div class="text-center">
                    <button class="btn btn-success" type="submit">
                        Update profile
                    </button>
                </div>

                </div>

        </div>
    </div>

@endsection
