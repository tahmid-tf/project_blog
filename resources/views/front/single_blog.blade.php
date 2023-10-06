@extends('partial.front-master')

@section('content')

    <main>
        <div class="container">
            <div class="col-md-8  col-lg-9">
                <div class="post">
                    <div class="post__info  post__info--date">
                        <span>{{ $blog->created_at->format('d-M-y') }}</span>
                    </div>
                    <div class="post__title">
                        <h1><a href="single-post.html">{{ $blog->title }}</a></h1>
                    </div>
                    <div class="post__info  post__info--category">
                        <span><a href="#">Lifestyle</a></span>
                    </div>
                    <div class="post__image">
                        <a href="single-post.html"><img src="{{ asset('storage/'.$blog->image) }}" alt="Very Kind and Beautiful Cat"></a>
                    </div>
                    <div class="post__content">
                        {!!  $blog->content !!}
                    </div>


                </div>
            </div>

            <x-front-master-about></x-front-master-about>

        </div>
    </main>

@endsection
