@extends('partial.front-master')

@section('content')

    <main>
        <div class="container">
            <div class="col-md-8 col-lg-9">


                <div class="category-title">
                    <h1>Blog</h1>
                </div>

                {{-- ----------------------------- Posts block --------------------------- --}}

                @foreach($blogs as $blog)

                    <div class="post  post--list">
                        <div class="row">
                            <div class="col-sm-6  col-md-6  post__image">
                                <a href="{{ route('blog.single', $blog->id) }}"><img src="{{ asset('storage/'.$blog->image) }}"
                                                                alt="Very Kind and Beautiful Cat"></a>
                            </div>
                            <div class="col-sm-6  col-md-6  post__list-content">
                                <div class="post__info  post__info--date">
                                    <span>{{ $blog->created_at->format('d-M-Y') }}</span>
                                    <span><a href="{{ route('blog.single', $blog->id) }}">{{ $blog->tag }}</a></span>
                                </div>
                                <div class="post__title">
                                    <h2><a href="{{ route('blog.single', $blog->id) }}">{{ $blog->title }}</a></h2>
                                </div>
                                <div class="post__content">
                                    <p>{{ $blog->description }}</p>
                                </div>
                                <div class="post__content-more-link">
                                    <a href="{{ route('blog.single', $blog->id) }}">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach

                {{-- ----------------------------- Posts block --------------------------- --}}


                <div style="display: flex; justify-content: center">
                    {{ $blogs->links() }}

                </div>

            </div>

            <x-front-master-about></x-front-master-about>
        </div>


    </main>

@endsection
