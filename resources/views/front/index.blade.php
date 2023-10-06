<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>Leopold. Home</title>
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}"/>
    <link
        href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700"
        rel="stylesheet"
    />
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/style.min.css') }}" rel="stylesheet"/>
</head>
<body>
<svg style="display: none">
    <symbol viewBox="0 0 512 512" id="icon-search">
        <path
            d="M448.3,424.7L335,311.3c20.8-26,33.3-59.1,33.3-95.1c0-84.1-68.1-152.2-152-152.2c-84,0-152,68.2-152,152.2
	s68.1,152.2,152,152.2c36.2,0,69.4-12.7,95.5-33.8L425,448L448.3,424.7z M120.1,312.6c-25.7-25.7-39.8-59.9-39.8-96.3
	s14.2-70.6,39.8-96.3S180,80,216.3,80c36.3,0,70.5,14.2,96.2,39.9s39.8,59.9,39.8,96.3s-14.2,70.6-39.8,96.3
	c-25.7,25.7-59.9,39.9-96.2,39.9C180,352.5,145.8,338.3,120.1,312.6z"
        />
    </symbol>
    <symbol viewBox="0 0 512 512" id="icon-close">
        <polygon
            class="st0"
            points="340.2,160 255.8,244.3 171.8,160.4 160,172.2 244,256 160,339.9 171.8,351.6 255.8,267.8 340.2,352
	352,340.3 267.6,256 352,171.8 "
        />
    </symbol>
    <symbol viewBox="0 0 512 512" id="icon-facebook">
        <path
            d="M288,192v-38.1c0-17.2,3.8-25.9,30.5-25.9H352V64h-55.9c-68.5,0-91.1,31.4-91.1,85.3V192h-45v64h45v192h83V256h56.4l7.6-64
	H288z"
        />
    </symbol>
    <symbol viewBox="0 0 512 512" id="icon-twitter">
        <path
            d="M492,109.5c-17.4,7.7-36,12.9-55.6,15.3c20-12,35.4-31,42.6-53.6c-18.7,11.1-39.4,19.2-61.5,23.5
	C399.8,75.8,374.6,64,346.8,64c-53.5,0-96.8,43.4-96.8,96.9c0,7.6,0.8,15,2.5,22.1c-80.5-4-151.9-42.6-199.6-101.3
	c-8.3,14.3-13.1,31-13.1,48.7c0,33.6,17.2,63.3,43.2,80.7C67,210.7,52,206.3,39,199c0,0.4,0,0.8,0,1.2c0,47,33.4,86.1,77.7,95
	c-8.1,2.2-16.7,3.4-25.5,3.4c-6.2,0-12.3-0.6-18.2-1.8c12.3,38.5,48.1,66.5,90.5,67.3c-33.1,26-74.9,41.5-120.3,41.5
	c-7.8,0-15.5-0.5-23.1-1.4C62.8,432,113.7,448,168.3,448C346.6,448,444,300.3,444,172.2c0-4.2-0.1-8.4-0.3-12.5
	C462.6,146,479,129,492,109.5z"
        />
    </symbol>
    <symbol viewBox="0 0 512 512" id="icon-google">
        <path
            d="M242.1,275.6l-18.2-13.7l-0.1-0.1c-5.8-4.6-10-8.3-10-14.7c0-7,5-11.8,10.9-17.4l0.5-0.4c20-15.2,44.7-34.3,44.7-74.6
		c0-26.9-11.9-44.7-23.3-57.7h13L320,64H186.5c-25.3,0-62.7,3.2-94.6,28.6l-0.1,0.3C70,110.9,57,137.4,57,163.5
		c0,21.2,8.7,42.2,23.9,57.4c21.4,21.6,48.3,26.1,67.1,26.1c1.5,0,3,0,4.5-0.1c-0.8,3-1.2,6.3-1.2,10.3c0,10.9,3.6,19.3,8.1,26.2
		c-24,1.9-58.1,6.5-84.9,22.3C35.1,328.4,32,361.7,32,371.3c0,38.2,35.7,76.8,115.5,76.8c91.6,0,139.5-49.8,139.5-99
		C287,312,264.2,293.5,242.1,275.6z M116.7,139.9c0-13.4,3-23.5,9.3-30.9c6.5-7.9,18.2-13.1,29-13.1c19.9,0,32.9,15,40.4,27.6
		c9.2,15.5,14.9,36.1,14.9,53.6c0,4.9,0,20-10.2,29.8c-7,6.7-18.7,11.4-28.6,11.4c-20.5,0-33.5-14.7-40.7-27
		C120.4,173.5,116.7,153.1,116.7,139.9z M237.8,368c0,27.4-25.2,44.5-65.8,44.5c-48.1,0-80.3-20.6-80.3-51.3
		c0-26.1,21.5-36.8,37.8-42.5c18.9-6.1,44.3-7.3,50.1-7.3c3.9,0,6.1,0,8.7,0.2C224.9,336.8,237.8,347.7,237.8,368z"
        />
        <polygon
            points="402,142 402,64 368,64 368,142 288,142 288,176 368,176 368,257 402,257 402,176 480,176 480,142 	"
        />
    </symbol>
    <symbol viewBox="0 0 512 512" id="icon-pinterest">
        <path
            d="M256,32C132.3,32,32,132.3,32,256c0,91.7,55.2,170.5,134.1,205.2c-0.6-15.6-0.1-34.4,3.9-51.4
		c4.3-18.2,28.8-122.1,28.8-122.1s-7.2-14.3-7.2-35.4c0-33.2,19.2-58,43.2-58c20.4,0,30.2,15.3,30.2,33.6
		c0,20.5-13.1,51.1-19.8,79.5c-5.6,23.8,11.9,43.1,35.4,43.1c42.4,0,71-54.5,71-119.1c0-49.1-33.1-85.8-93.2-85.8
		c-67.9,0-110.3,50.7-110.3,107.3c0,19.5,5.8,33.3,14.8,43.9c4.1,4.9,4.7,6.9,3.2,12.5c-1.1,4.1-3.5,14-4.6,18
		c-1.5,5.7-6.1,7.7-11.2,5.6c-31.3-12.8-45.9-47-45.9-85.6c0-63.6,53.7-139.9,160.1-139.9c85.5,0,141.8,61.9,141.8,128.3
		c0,87.9-48.9,153.5-120.9,153.5c-24.2,0-46.9-13.1-54.7-27.9c0,0-13,51.6-15.8,61.6c-4.7,17.3-14,34.5-22.5,48
		c20.1,5.9,41.4,9.2,63.5,9.2c123.7,0,224-100.3,224-224C480,132.3,379.7,32,256,32z"
        />
    </symbol>
    <symbol viewBox="0 0 512 512" id="icon-instagram">
        <path
            fill="#231F20"
            d="M448.5,112c0-26.233-21.267-47.5-47.5-47.5H112c-26.233,0-47.5,21.267-47.5,47.5v289
	c0,26.233,21.267,47.5,47.5,47.5h289c26.233,0,47.5-21.267,47.5-47.5V112z M257,175.833c44.182,0,80,35.816,80,80s-35.818,80-80,80
	s-80-35.816-80-80S212.818,175.833,257,175.833z M416.5,160.5c0,8.836-7.163,16-16,16h-48c-8.837,0-16-7.164-16-16v-48
	c0-8.836,7.163-16,16-16h48c8.837,0,16,7.164,16,16V160.5z M401.5,416.5h-288c-8.822,0-17-8.178-17-17v-175h53.072
	c-3.008,10-4.572,20.647-4.572,31.583C145,286,156.65,314,177.805,335.154s49.279,32.741,79.195,32.741s58.041-11.681,79.195-32.835
	S369,286.016,369,256.099c0-10.936-1.563-21.599-4.572-31.599H416.5v175C416.5,408.322,410.322,416.5,401.5,416.5z"
        />
    </symbol>
    <symbol viewBox="0 0 512 512" id="icon-toggle">
        <g>
            <rect x="96" y="241" width="320" height="32"/>
            <rect x="96" y="145" width="320" height="32"/>
            <rect x="96" y="337" width="320" height="32"/>
        </g>
    </symbol>
</svg>
<header class="header">
    <nav class="nav">
        <div class="nav__container container">
            <ul class="nav__list">
                <li class="nav__item nav__item--active">
                    <a href="index.html">Home</a>
                    <ul class="nav__list-submenu">
                        <li class="nav__item-submenu">
                            <a href="index-fullsize.html">Home Fullsize</a>
                        </li>
                        <li class="nav__item-submenu">
                            <a href="index-grid.html">Home Grid</a>
                            <ul class="nav__list-submenu">
                                <li class="nav__item-submenu">
                                    <a href="index-grid-fullsize.html">Home Grid Fullsize</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav__item-submenu">
                            <a href="index-list.html">Home List</a>
                            <ul class="nav__list-submenu">
                                <li class="nav__item-submenu">
                                    <a href="index-list-fullsize.html">Home List Fullsize</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav__item-submenu">
                            <a href="404.html">404 Page</a>
                        </li>
                        <li class="nav__item-submenu">
                            <a href="single-post.html">Single Post</a>
                            <ul class="nav__list-submenu">
                                <li class="nav__item-submenu">
                                    <a href="single-post-fullsize.html"
                                    >Single Post Fullsize</a
                                    >
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

            </ul>
            <div class="nav__search search">
                <svg>
                    <use
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        xlink:href="#icon-search"
                    ></use>
                </svg>
            </div>
        </div>
    </nav>
    <div class="col-md-12 nav-toggle">
        <svg class="nav-toggle__icon">
            <use
                xmlns:xlink="http://www.w3.org/1999/xlink"
                xlink:href="#icon-toggle"
            ></use>
        </svg>
    </div>
    <div class="col-md-12 header__logo">
        <div class="logo">
            <h1><a class="logo__link" href="index.html">
                    <img src="{{ asset('img/analytical_Toolkit.png') }}" alt="" class="img-fluid">
                </a></h1>
            <div class="logo__description">By Afraz Ul Haque Rupak</div>
        </div>
    </div>
</header>
<main>
    <div class="container">
        <div class="col-md-8 col-lg-9">

            {{-- ----------------------------- Posts block --------------------------- --}}

            @foreach($blogs as $blog)

                <div class="post">
                    <div class="" style="margin-bottom: -10px">
                        Date : <span>{{ $blog->created_at->format('d-m-Y') }}</span>
                    </div>
                    <div class="">
                        <h2>
                            <a href="single-post.html" style="color: black">{{ $blog->title }}</a>
                        </h2>
                    </div>
                    <div class="post__info--category">
                        <span><a href="#">{{ $blog->tag }}</a></span>
                    </div>

                    {{--  ------------------------------- post position ------------------------------- --}}

                    <div>
                        <div class="row">

                            <div class="col"></div>

                            <div class="col-md-3">
                                <div class="post__image">
                                    <a href="single-post.html"
                                    ><img src="{{ asset('storage/'.$blog->image ) }}" alt="Very Kind and Beautiful Cat"
                                        /></a>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="post__content">
                                    <p>
                                        {{ $blog->description }}
                                    </p>
                                </div>
                            </div>
                            <div class="col"></div>

                        </div>

                        <div class="post__content-more-link">
                            <a href="single-post.html">Read more</a>
                        </div>
                        <div class="post__footer">
                            <div class="post__info post__info--author">
                                <span>By <a href="#">Leopold</a></span>
                                {{--                            <span><a href="#"></a></span>--}}
                            </div>
                            <div class="post__footer-social">
                                <span></span>
                                <div class="post__footer-social-icons">
                                    <a href="#">
                                        <svg>
                                            <use
                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                xlink:href="#icon-facebook"
                                            ></use>
                                        </svg>
                                    </a>
                                    <a href="#">
                                        <svg>
                                            <use
                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                xlink:href="#icon-twitter"
                                            ></use>
                                        </svg>
                                    </a>
                                    <a href="#">
                                        <svg>
                                            <use
                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                xlink:href="#icon-google"
                                            ></use>
                                        </svg>
                                    </a>
                                    <a href="#">
                                        <svg>
                                            <use
                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                xlink:href="#icon-pinterest"
                                            ></use>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>


                    {{--  ------------------------------- post position ------------------------------- --}}


                </div>

            @endforeach

            {{-- ----------------------------- Posts block --------------------------- --}}


{{--            <nav class="blog-pagination">--}}
{{--                <ul class="blog-pagination__items">--}}
{{--                    <li class="blog-pagination__item blog-pagination__item--active">--}}
{{--                        <a>1</a>--}}
{{--                    </li>--}}
{{--                    <li class="blog-pagination__item">--}}
{{--                        <a href="#">2</a>--}}
{{--                    </li>--}}
{{--                    <li class="blog-pagination__item">--}}
{{--                        <a href="#">Next Page</a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </nav>--}}

            <div style="display: flex; justify-content: center">
                {{ $blogs->links() }}

            </div>


        </div>
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
                        <a href="#">
                            <svg>
                                <use
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="#icon-facebook"
                                ></use>
                            </svg>
                        </a>


                        <a href="#">
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
            {{--            <div class="sidebar-widget">--}}
            {{--                <div class="sidebar-widget__banner">--}}
            {{--                    <a href="#"><img src="img/banner.jpg" alt="Banner"/></a>--}}
            {{--                </div>--}}
            {{--            </div>--}}
            <div class="sidebar-widget">
                <h3>Recent Posts</h3>
                <div class="sidebar-widget__popular">
                    <div class="sidebar-widget__popular-item">
                        <div class="sidebar-widget__popular-item-image">
                            <a href="single-post.html"
                            ><img src="img/sidebar1.jpg" alt="New Flower in the Pot"
                                /></a>
                        </div>
                        <div class="sidebar-widget__popular-item-info">
                            <div class="sidebar-widget__popular-item-content">
                                <a href="single-post.html">New Flower in the Pot</a>
                            </div>
                            <div class="sidebar-widget__popular-item-date">
                                <span>March 7, 2017</span>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-widget__popular-item">
                        <div class="sidebar-widget__popular-item-image">
                            <a href="single-post.html"
                            ><img src="img/sidebar2.jpg" alt="Easy Walk in the Park"
                                /></a>
                        </div>
                        <div class="sidebar-widget__popular-item-info">
                            <div class="sidebar-widget__popular-item-content">
                                <a href="single-post.html">Easy Walk in the Park</a>
                            </div>
                            <div class="sidebar-widget__popular-item-date">
                                <span>March 1, 2017</span>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-widget__popular-item">
                        <div class="sidebar-widget__popular-item-image">
                            <a href="single-post.html"
                            ><img src="img/sidebar3.jpg" alt="The Bridge on the River"
                                /></a>
                        </div>
                        <div class="sidebar-widget__popular-item-info">
                            <div class="sidebar-widget__popular-item-content">
                                <a href="single-post.html">The Bridge on the River</a>
                            </div>
                            <div class="sidebar-widget__popular-item-date">
                                <span>February 10, 2017</span>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-widget__popular-item">
                        <div class="sidebar-widget__popular-item-image">
                            <a href="single-post.html"
                            ><img src="img/sidebar4.jpg" alt="Best Cooking Lessons"
                                /></a>
                        </div>
                        <div class="sidebar-widget__popular-item-info">
                            <div class="sidebar-widget__popular-item-content">
                                <a href="single-post.html">Best Cooking Lessons</a>
                            </div>
                            <div class="sidebar-widget__popular-item-date">
                                <span>February 16, 2017</span>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-widget__popular-item">
                        <div class="sidebar-widget__popular-item-image">
                            <a href="single-post.html"
                            ><img src="img/sidebar5.jpg" alt="My Favorite Drink"
                                /></a>
                        </div>
                        <div class="sidebar-widget__popular-item-info">
                            <div class="sidebar-widget__popular-item-content">
                                <a href="single-post.html">My Favorite Drink</a>
                            </div>
                            <div class="sidebar-widget__popular-item-date">
                                <span>February 7, 2017</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{--            <div class="sidebar-widget">--}}
            {{--                <h3>Instagram</h3>--}}
            {{--                <div class="sidebar-widget__instagram">--}}
            {{--                    <a href="#"><img src="img/instagram9.jpg" alt="Instagram"/></a>--}}
            {{--                    <a href="#"><img src="img/instagram8.jpg" alt="Instagram"/></a>--}}
            {{--                    <a href="#"><img src="img/instagram7.jpg" alt="Instagram"/></a>--}}
            {{--                    <a href="#"><img src="img/instagram6.jpg" alt="Instagram"/></a>--}}
            {{--                    <a href="#"><img src="img/instagram5.jpg" alt="Instagram"/></a>--}}
            {{--                    <a href="#"><img src="img/instagram4.jpg" alt="Instagram"/></a>--}}
            {{--                    <a href="#"><img src="img/instagram3.jpg" alt="Instagram"/></a>--}}
            {{--                    <a href="#"><img src="img/instagram2.jpg" alt="Instagram"/></a>--}}
            {{--                    <a href="#"><img src="img/instagram1.jpg" alt="Instagram"/></a>--}}
            {{--                </div>--}}
            {{--            </div>--}}
            <div class="sidebar-widget">
                <h3>Tags</h3>
                <div class="sidebar-widget__tag-cloud">
                    <a href="#">Travel</a>
                    <a href="#">Music</a>
                    <a href="#">Arts</a>
                    <a href="#">Creative</a>
                    <a href="#">Fashion</a>
                </div>
            </div>
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
    </div>
</main>
<footer class="footer">
    <div class="container footer__top">
        <div class="col-sm-5 col-md-5">
            <div class="footer__top-about">
                <h4>Analytical Toolkit</h4>
                {{--                <p>--}}
                {{--                    Suspendisse lobortis commodo ullamcorper. Duis pretium convallis--}}
                {{--                    odio non varius.--}}
                {{--                </p>--}}

                {{--                <p>Phone: +123.456.789</p>--}}


                <p>Email: <a href="mailto:afrazulhaque865@gmail.com">afrazulhaque865@gmail.com</a></p>
            </div>
        </div>
        <div class="col-sm-3 col-md-3">
            <h4>Categories</h4>
            <nav class="footer__nav">
                <ul class="footer__nav-items">
                    <li class="footer__nav-item">
                        <a href="category.html">Lifestyle</a>
                    </li>
                    <li class="footer__nav-item">
                        <a href="category.html">Journey</a>
                    </li>
                    <li class="footer__nav-item">
                        <a href="category.html">Inspiration</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="col-sm-4 col-md-4">
            <h4>Recent Posts</h4>
            <div class="footer__recent-post">
                <div class="footer__recent-post-info">
                    <div class="footer__recent-post-content">
                        <a href="single-post.html">Very Kind and Beautiful Cat</a>
                    </div>
                    <div class="footer__recent-post-date">
                        <span>March 28, 2017</span>
                    </div>
                </div>
            </div>
            <div class="footer__recent-post">
                <div class="footer__recent-post-info">
                    <div class="footer__recent-post-content">
                        <a href="single-post.html">Morning Cup of Coffee</a>
                    </div>
                    <div class="footer__recent-post-date">
                        <span>March 20, 2017</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container footer__bottom">
        <div class="col-sm-8 col-md-8 footer__bottom-copyright">
            <p>2023 © All Right Reserved.</p>
        </div>
        <div class="col-sm-4 col-md-4 footer__bottom-social">
            <a href="#">
                <svg>
                    <use
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        xlink:href="#icon-facebook"
                    ></use>
                </svg>
            </a>
            <a href="#">
                <svg>
                    <use
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        xlink:href="#icon-twitter"
                    ></use>
                </svg>
            </a>
            <a href="#">
                <svg>
                    <use
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        xlink:href="#icon-google"
                    ></use>
                </svg>
            </a>
            <a href="#">
                <svg>
                    <use
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        xlink:href="#icon-pinterest"
                    ></use>
                </svg>
            </a>
            <a href="#">
                <svg>
                    <use
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        xlink:href="#icon-instagram"
                    ></use>
                </svg>
            </a>
        </div>
    </div>
</footer>
<div class="search-popup">
    <svg class="search-popup__close">
        <use
            xmlns:xlink="http://www.w3.org/1999/xlink"
            xlink:href="#icon-close"
        ></use>
    </svg>
    <div class="search-popup__container container">
        <form action="index.html">
            <input type="text" size="32" placeholder="Search"/>
        </form>
    </div>
</div>
<div class="content-overlay"></div>
<script src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
<script src="{{ asset('js/jquery.slicknav.min.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
