@extends('partial.front-master')

@section('content')
    <main>
        <div class="container">
            <div class="col-md-12  col-lg-12">
                <div class="post  post--fullsize  post--page">
                    <div class="post__image">
                        <img src="{{ asset('img/rupak.png') }}" alt="About Me" class="img-fluid"
                             style="width: 30%; display: block; margin: auto; border-radius: 50%">
                    </div>
                    <div class="post__title">
                        <h1>About Me</h1>
                    </div>
                    <div class="post__content">
                        <p>
                            Afraz Ul Haque. An Optimistic, Passionate, Creative, well-organized, thoughtful,
                            enthusiastic, and speedy learner in short words about me. I am looking for an opportunity to
                            connect with a group. So, I can completely use my ability of critical thinking,
                            problem-solving, information of Data Science, Machine Learning, and Artificial Intelligence
                            to make an essential expansion to the association alongside lifting my profession. I prefer
                            to adapt to new ideas and advancements, am passionate, and work well alone or in groups. I
                            always love to work on projects which make human life easier.
                        </p>
                    </div>
                    {{--                    <div class="post__footer">--}}
                    {{--                        <div class="post__footer-social">--}}
                    {{--                            <span>Share:</span>--}}
                    {{--                            <div class="post__footer-social-icons">--}}
                    {{--                                <a href="#">--}}
                    {{--                                    <svg>--}}
                    {{--                                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-facebook"></use>--}}
                    {{--                                    </svg>--}}
                    {{--                                </a>--}}
                    {{--                                <a href="#">--}}
                    {{--                                    <svg>--}}
                    {{--                                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-twitter"></use>--}}
                    {{--                                    </svg>--}}
                    {{--                                </a>--}}
                    {{--                                <a href="#">--}}
                    {{--                                    <svg>--}}
                    {{--                                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-google"></use>--}}
                    {{--                                    </svg>--}}
                    {{--                                </a>--}}
                    {{--                                <a href="#">--}}
                    {{--                                    <svg>--}}
                    {{--                                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-pinterest"></use>--}}
                    {{--                                    </svg>--}}
                    {{--                                </a>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                </div>
            </div>
        </div>
    </main>

@endsection
