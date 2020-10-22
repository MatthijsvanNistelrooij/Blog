@extends('layouts.app')

@section('content')

<div class="card card-default" style="margin-top: 35px">
    <div class="card-header">Posts</div>
    <div class="card-body">

        <table class="table table-hover">

            <thead>
                <th>
                    Image
                </th>
                <th>
                   title
                </th>
                <th>
  Edit
                </th>
                <th>
                    Trash
                </th>
                <tbody>
                    @if($posts->count() > 0)

                    @foreach($posts as $post)


                    <tr>

                        <td>

                            <img src="{{ $post->featured }}" width="140px" height="80px">

                        </td>

                        <td>{{ $post->title }}</td>

                        <td>

                            <a href="{{ route('post.edit', ['id' => $post->id])}}" class="btn btn-sm btn-info" style="color: white">
                                <i class="fa fa-pencil"></i>
                            </i></a>

                        </td>

                        <td>

                            <a href="{{ route('post.delete', ['id' => $post->id])}}" class="btn btn-sm btn-danger">

                                <i class="fa fa-trash"></i>

                            </i></a>

                        </td>

                    </tr>

                    @endforeach

                    @else

                    <tr><th colspan="5" class="text-center">No posts yet</th></tr>

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
