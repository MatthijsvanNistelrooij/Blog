@extends('layouts.app')
@section('content')

@include('admin.includes.errors')




    <div class="card" style="margin-top:35px">
        <div class="card-header" >
            Create a new category
        </div>

        <div class="card-body">
            <form action="{{ route('category.store') }}" method="post">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="name" style="font-weight: bold">Name</label>
                    <input type="text" name="name" class="form-control">
                </div>
            <div class="form-group">
                <div class="text-center">
                    <button class="btn btn-success" type="submit">
                        Store category
                    </button>
                </div>

                </div>

        </div>
    </div>

@endsection
