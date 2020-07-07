@extends('layouts.app')
@section('content')

@include('admin.includes.errors')




    <div class="card" style="margin-top:35px">
        <div class="card-header">
            Edit blog settings
        </div>

        <div class="card-body">
            <form action="{{ route('settings.update') }}" method="post">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="name" style="font-weight: bold">Site name</label>
                <input type="text" name="site_name" value="{{ $settings->site_name }}" class="form-control" >
                </div>
                <div class="form-group">
                    <label for="name" style="font-weight: bold">Address</label>
                <input type="text" name="address" class="form-control" value="{{ $settings->address}}">
                </div>
                <div class="form-group">
                    <label for="name" style="font-weight: bold">Contact number</label>
                <input type="text" name="contact_number" class="form-control" value="{{ $settings->contact_number}}">
                </div>
                <div class="form-group">
                    <label for="name" style="font-weight: bold">Contact email</label>
                <input type="email" name="contact_email"  id="contact_email" class="form-control" value="{{ $settings->contact_email}}">
                </div>
            <div class="form-group">
                <div class="text-center">
                    <button class="btn btn-success" type="submit">
                        Update site settings
                    </button>
                </div>

                </div>

        </div>
    </div>

@endsection
