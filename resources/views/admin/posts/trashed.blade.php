@extends('layouts.app')

@section('content')

<div class="card card-default" style="margin-top:35px">
    <div class="card-header">Trashed posts</div>
    <div class="card-body">

        <table class="table table-hover">

            <thead>
                <th>
                    Image
                </th>

                <th>
                    <i class="fa fa-window-restore" style="color: rgb(0, 217, 255)"></i>
                </th>
                <th>
                    <i class="fa fa-minus-circle" style="color: red"></i>
                 </th>
                <tbody>
                    @if($posts->count() > 0)

@foreach($posts as $post)

<tr>
<td>
<img src="{{ $post->featured }}" width="150px" height="90px">
</td>
{{-- <td>{{ $post->title }}</td> --}}

<td>
<a href="{{ route('post.restore', ['id' => $post->id])}}" class="btn btn-sm btn-success">Restore </i></a>
</td>
<td>
    <a href="{{ route('post.kill', ['id' => $post->id])}}" class="btn btn-sm btn-danger">Delete </i></a>
    </td>
</tr>
@endforeach
@else
<tr><th colspan="5" class="text-center">No trashed posts</th></tr>
@endif
                </tbody>
            </thead>
        </table>
    </div>
</div>

@stop
