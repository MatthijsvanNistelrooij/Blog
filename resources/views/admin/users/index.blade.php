@extends('layouts.app')

@section('content')

<div class="card card-default" style="margin-top: 35px">
    <div class="card-header">Users</div>
    <div class="card-body">

        <table class="table table-hover">

            <thead>
                <th>
                    Image
                </th>
                <th>
                   Name
                </th>
                <th>

                    Permissions
                </th>
                <th>
                    Delete
                </th>
                <tbody>
                    @if($users->count() > 0)

                    @foreach($users as $user)
                    <tr>
                        <td>
                        <img src="https://cdn.britannica.com/67/19367-050-885866B4/Valley-Taurus-Mountains-Turkey.jpg" alt="" width="60px" height="60px" style="border-radius: 50%">
                        </td>
                        <td>
                            {{ $user->name }}
                        </td>
                        <td>
                            @if($user->admin)
                            <a href="{{ route('user.not.admin', ['id' => $user->id]) }}" class="btn btn-sm btn-danger">Remove permissions</a>

                            @else
                            <a href="{{ route('user.admin', ['id' => $user->id]) }}" class="btn btn-sm btn-success">Make admin</a>

                            @endif
                        </td>
                        <td>
                            @if(Auth::id() !== $user->id)
                            <a href="{{ route('user.delete', ['id' => $user->id]) }}" class="btn btn-sm btn-danger">Delete</a>

                            @endif
                        </td>
                    </tr>
                    @endforeach
                    @else
                    <tr><th colspan="5" class="text-center">No users </th></tr>
                    @endif
                </tbody>
            </thead>
        </table>
    </div>
</div>

<div class="d-flex justify-content-end mb-2" style="margin-top: 15px">
    <a href="{{ route('post.create') }}" class="btn btn-success float-right btn-sm">
    Add Post
    </a>
    </div>
@stop
