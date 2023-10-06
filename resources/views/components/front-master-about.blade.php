<div class="col-md-4 col-lg-3">
    <div class="sidebar-widget">
        <h3>About Me</h3>
        <div class="sidebar-widget__about-me">
            <div class="sidebar-widget__about-me-image">
                <img src="{{ asset('img/rupak.png') }}" alt="About Me" style="border-radius: 50%"/>
            </div>
            <p>
                <span style="font-weight: bold">Afraz Ul Haque Rupak</span> <br>
                <span>BSc in CSE</span> <br>
                <span>Daffodil International University</span>
            </p>


        </div>
    </div>
    <div class="sidebar-widget">
        <h3>Follow Me</h3>
        <div class="sidebar-widget__follow-me">
            <div class="sidebar-widget__follow-me-icons">
                <a href="https://www.facebook.com/afraz.rupak/">
                    <svg>
                        <use
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            xlink:href="#icon-facebook"
                        ></use>
                    </svg>
                </a>


                <a href="https://www.instagram.com/afraz.rupak/">
                    <svg>
                        <use
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            xlink:href="#icon-instagram"
                        ></use>
                    </svg>
                </a>
            </div>
        </div>
    </div>

    <div class="sidebar-widget">
        <h3>Recent Posts</h3>
        <div class="sidebar-widget__popular">

            @foreach(\App\Http\Controllers\FrontController::recent_blogs() as $blog)
                <div class="sidebar-widget__popular-item">
                    <div class="sidebar-widget__popular-item-image">
                        <a href="#"
                        ><img src="{{ asset('storage/'.$blog->image) }}" alt=""
                            /></a>
                    </div>
                    <div class="sidebar-widget__popular-item-info">
                        <div class="sidebar-widget__popular-item-content">
                            <a href="single-post.html">{{ $blog->title }}</a>
                        </div>
                        <div class="sidebar-widget__popular-item-date">
                            <span>{{ $blog->created_at->format('d-M-Y') }}</span>
                        </div>
                    </div>
                </div>

            @endforeach


        </div>
    </div>

    {{--    <div class="sidebar-widget">--}}
    {{--        <h3>Tags</h3>--}}
    {{--        <div class="sidebar-widget__tag-cloud">--}}
    {{--            <a href="#">Travel</a>--}}
    {{--            <a href="#">Music</a>--}}
    {{--            <a href="#">Arts</a>--}}
    {{--            <a href="#">Creative</a>--}}
    {{--            <a href="#">Fashion</a>--}}
    {{--        </div>--}}
    {{--    </div>--}}




    {{--            <div class="sidebar-widget">--}}
    {{--                <h3>Subscribe</h3>--}}
    {{--                <div class="sidebar-widget__subscribe">--}}
    {{--                    <p>Follow my latest news</p>--}}
    {{--                    <form action="index.html">--}}
    {{--                        <input type="text" placeholder="Your email"/>--}}
    {{--                        <input--}}
    {{--                            class="sidebar-widget__subscribe-submit"--}}
    {{--                            type="submit"--}}
    {{--                            value="Submit"--}}
    {{--                        />--}}
    {{--                    </form>--}}
    {{--                </div>--}}
    {{--            </div>--}}
</div>
