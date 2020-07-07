@extends('layouts.app')

@section('content')

<div class="card card-default" style="margin-top: 35px">
    <div class="card-header">Categories</div>
    <div class="card-body">

        <table class="table table-hover">

            <thead>
                <th>
                    Category Name
                </th>
                <th>
                    <i class="fa fa-edit"></i>
                </th>
                <th>
                    <i class="fa fa-trash"></i>
                </th>
                <tbody>
                    @if($categories->count() > 0 )
                    @foreach($categories as $category)
                    <tr>
                        <td>
                            {{ $category->name }}
                        </td>
                        <td>
                        <a href="{{ route('category.edit', ['id' => $category->id ]) }}" class="btn btn-sm btn-info" style="color:white">
                     Edit
                        </a>
                    </td>
                    <td>
                        <a href="{{ route('category.delete', ['id' => $category->id ]) }}" class="btn btn-sm btn-danger">
                      Delete
                        </a>
                    </td>
                    </tr>
                    @endforeach
                    @else
<tr><th colspan="5" class="text-center">No categories yet</th></tr>
@endif
                </tbody>
            </thead>
        </table>
    </div>
</div>
<div class="d-flex justify-content-end mb-2" style="margin-top: 15px">
    <a href="{{ route('category.create') }}" class="btn btn-success float-right btn-sm">
    Create new category
    </a>
    </div>
@stop
