@extends('layouts.app')
@section('content')

@include('admin.includes.errors')




    <div class="card" style="margin-top:35px">
        <div class="card-header">
            Create a new post
        </div>

        <div class="card-body">
            <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="title" style="font-weight: bold">Title</label>
                    <input type="text" name="title" class="form-control">
                </div>
                <div class="form-group">
                    <label for="featured" style="font-weight: bold">Featured image</label>
                    <input type="file" name="featured" class="form-control">
                </div>
                <div class="form-group">
                    <label for="category" style="font-weight: bold">Select a Category</label>
                    <select name="category_id" id="category_id" class="form-control">
                        @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="tags" style="font-weight: bold"> Select tags</label>
                    @foreach($tags as $tag)
                   <div class="checkbox">
                   <label><input type="checkbox" name="tags[]" value="{{ $tag->id }}"> {{ $tag->tag}}</label>
                   </div>
                   @endforeach
                </div>
                <div class="form-group" >
                    <label for="content" style="font-weight: bold">Content</label>

                   <textarea name="content" id="summernote" cols="5" rows="5" class="form-control">
                   </textarea>
                </div>

                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">
                            Store post
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection

@section('styles')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@stop

@section('scripts')

<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

<script>
    $(document).ready(function() {
  $('#summernote').summernote();
    });
</script>


@stop
