@extends('admin-master')

@section('content')

    <h4>About</h4>
    <hr>

    <table id="example" class="display" style="width:100%">
        <thead>
        <tr>
            <th>Serial</th>
            <th>title</th>
            <th>content</th>
            <th>image</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>

        <?php $id = 0 ?>


        @foreach($blogs as $blog)

            <tr>
                <td>{{ $id }}</td>
                <td>{{ $blog->title }}</td>
                <td>{!!  $blog->content !!}</td>
                <td><img src="{{ asset('storage/'.$blog->image) }}" alt="" style="width: 100px"></td>
                <td><a href="{{ route('blog.edit',$blog->id) }}" class="btn btn-info">Update</a></td>

                {{--                <td><img src="{{ asset('storage/'.$about->image) }}" alt="" style="width: 100px"></td>--}}
                {{--                <td><a href="{{ route('about.edit',$about->id) }}" class="btn btn-info">Update</a></td>--}}
                                <td>
                                    <form action="{{ route('blog.destroy',$blog->id) }}" method="post">
                                        {{ csrf_field() }}
                                        @method('delete')
                                        <input type="submit" value="Delete" class="btn btn-danger">
                                    </form>
                                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
