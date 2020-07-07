@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">


            <div class="card card-default" style="margin-top:35px">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Welcome!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
