@extends('layouts.app')

@section('content')

<div class="card card-default" style="margin-top: 35px">
    <div class="card-header">Tags</div>
    <div class="card-body">

        <table class="table table-hover">

            <thead>
                <th>
                    Tag Name
                </th>
                <th>
                    <i class="fa fa-edit"></i>
                </th>
                <th>
                    <i class="fa fa-trash"></i>
                </th>
                <tbody>
                    @if($tags->count() > 0 )
                    @foreach($tags as $tag)
                    <tr>
                        <td>
                            {{ $tag->tag }}
                        </td>
                        <td>
                        <a href="{{ route('tag.edit', ['id' => $tag->id ]) }}" class="btn btn-sm btn-info" style="color:white">
                     Edit
                        </a>
                    </td>
                    <td>
                        <a href="{{ route('tag.delete', ['id' => $tag->id ]) }}" class="btn btn-sm btn-danger">
                      Delete
                        </a>
                    </td>
                    </tr>
                    @endforeach
                    @else
<tr><th colspan="5" class="text-center">No tags yet</th></tr>
@endif
                </tbody>
            </thead>
        </table>
    </div>
</div>
<div class="d-flex justify-content-end mb-2" style="margin-top: 15px">
    <a href="{{ route('tag.create') }}" class="btn btn-success float-right btn-sm">
    Create new tag
    </a>
    </div>
@stop
