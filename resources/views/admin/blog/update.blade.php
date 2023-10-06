@extends('admin-master')

@section('content')

    <div>
        <form action="{{ route('blog.update', $blog->id) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            @method('put')
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Enter title</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                           placeholder="" name="title" class="@error('title') is-invalid @enderror" value="{{ $blog->title }}">
                    @error('title')
                    <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="exampleFormControlFile1">Enter image</label>
                    <input type="file" class="form-control-file @error('image') is-invalid @enderror"
                           id="exampleFormControlFile1" name="image">
                </div>

                @error('image')
                <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                @enderror

                <img src="{{ asset('storage/'.$blog->image) }}" alt="" width="100px">

                <div class="form-group">
                    <label for="exampleInputEmail1">Short Description</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                           placeholder="" name="description" class="@error('description') is-invalid @enderror" value="{{ $blog->description }}">
                    @error('description')
                    <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Enter Content</label>
                    <textarea class="form-control @error('content') is-invalid @enderror"
                              id="exampleFormControlTextarea1"
                              rows="12" name="content">{{ $blog->content }}</textarea>
                    @error('content')
                    <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Enter Tag</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                           placeholder="" name="tag" class="@error('tag') is-invalid @enderror" value="{{ $blog->tag }}">
                    @error('tag')
                    <div class="alert alert-danger" style="margin-top: 10px">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>
        </form>
    </div>

@endsection
