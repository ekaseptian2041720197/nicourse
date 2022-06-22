!DOCTYPE html>
<html lang="en">

<head>

    <title>NICOURSE</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="favicon" href="{{ asset('assets/images/favicon.ico') }}">
    <link rel="apple-touch-icon" href="{{ asset('assets/images/icons/icon.png') }}">

    <link rel="stylesheet" href="{{ asset('assets/frontend/css/jquery.webui-popover.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/slick-theme.css') }}">

    <!-- font awesome 5 -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/fontawesome-all.min.css') }}">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/frontend/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/tagify.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/global/toastr/toastr.css') }}">
    <script src="{{ asset('assets/backend/js/jquery-3.3.1.min.js') }}"></script>



</head>

<body class="gray-bg">
    </div>
    <section class="menu-area bg-white">
        <div class="container-xl">
            <nav class="navbar navbar-expand-lg bg-white">

                <ul class="mobile-header-buttons">
                    <li><a class="mobile-nav-trigger"
                            href="#mobile-primary-nav">http://dutatechnology.com:2280/lmsbaru/menu<span></span></a></li>
                    <li><a class="mobile-search-trigger"
                            href="#mobile-search">http://dutatechnology.com:2280/lmsbaru/search<span></span></a></li>
                </ul>

                <a href="http://dutatechnology.com:2280/lmsbaru/" class="navbar-brand" href="#"><img
                        src="http://dutatechnology.com:2280/lmsbaru/uploads/system/acfdb915545bf3f450e8e07dfe88a33d.png"
                        alt="" height="35"></a>

                <div class="main-nav-wrap">
                    <div class="mobile-overlay"></div>
                    <style type="text/css">
                        @media only screen and (max-width: 767px) {
                            .category.corner-triangle.top-left.pb-0.is-hidden {
                                display: none !important;
                            }

                            .sub-category.is-hidden {
                                display: none !important;
                            }
                        }
                    </style>

                    <ul class="mobile-main-nav">
                        <div class="mobile-menu-helper-top"></div>

                        <li class="has-children text-nowrap fw-bold">
                            <a href="">
                                <i class="fas fa-th d-inline text-20px"></i>
                                <span class="fw-500">Categories</span>
                                <span class="has-sub-category"><i class="fas fa-angle-right"></i></span>
                            </a>

                            <ul class="category corner-triangle top-left is-hidden pb-0">
                                <li class="go-back"><a href=""><i class="fas fa-angle-left"></i>Menu</a></li>

                                <li class="has-children">
                                    <a href="javascript:;" class="py-2"
                                        onclick="redirect_to('http://dutatechnology.com:2280/lmsbaru/home/courses?category=pemrograman')">
                                        <span class="icon"><i class="fab fa-accessible-icon"></i></span>
                                        <span>Pemrograman</span>
                                        <span class="has-sub-category"><i class="fas fa-angle-right"></i></span>
                                    </a>
                                    <ul class="sub-category is-hidden">
                                        <li class="go-back-menu"><a href=""><i class="fas fa-angle-left"></i>Menu</a>
                                        </li>
                                        <li class="go-back"><a href="">
                                                <i class="fas fa-angle-left"></i>
                                                <span class="icon"><i class="fab fa-accessible-icon"></i></span>
                                                Pemrograman </a></li>
                                        <li><a
                                                href="http://dutatechnology.com:2280/lmsbaru/home/courses?category=php">PHP</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-children">
                                    <a href="javascript:;" class="py-2"
                                        onclick="redirect_to('http://dutatechnology.com:2280/lmsbaru/home/courses?category=bisnis')">
                                        <span class="icon"><i class="fas fa-bold"></i></span>
                                        <span>Bisnis</span>
                                        <span class="has-sub-category"><i class="fas fa-angle-right"></i></span>
                                    </a>
                                    <ul class="sub-category is-hidden">
                                        <li class="go-back-menu"><a href=""><i class="fas fa-angle-left"></i>Menu</a>
                                        </li>
                                        <li class="go-back"><a href="">
                                                <i class="fas fa-angle-left"></i>
                                                <span class="icon"><i class="fas fa-bold"></i></span>
                                                Bisnis </a></li>
                                        <li><a
                                                href="http://dutatechnology.com:2280/lmsbaru/home/courses?category=framework">FrameWork</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="all-category-devided mb-0 p-0">
                                    <a href="http://dutatechnology.com:2280/lmsbaru/home/courses" class="py-3">
                                        <span class="icon"><i class="fa fa-align-justify"></i></span>
                                        <span>All courses</span>
                                    </a>
                                </li>

                            </ul>
                        </li>

                        <div class="mobile-menu-helper-bottom"></div>
                    </ul>
                </div>

                <form class="inline-form me-auto" action="http://dutatechnology.com:2280/lmsbaru/home/search"
                    method="get">
                    <div class="input-group search-box mobile-search">
                        <input type="text" name='query' class="form-control" placeholder="Search for courses">
                        <div class="input-group-append">
                            <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </form>


                <div class="cart-box menu-icon-box" id="cart_items">
                    <div class="icon">
                        <a href="http://dutatechnology.com:2280/lmsbaru/home/shopping_cart"><i
                                class="fas fa-shopping-cart"></i></a>
                        <span class="number">0</span>
                    </div>

                    <!-- Cart Dropdown goes here -->
                    <div class="dropdown course-list-dropdown corner-triangle top-right" style="display: none;">
                        <!-- Just remove the display none from the css to make it work -->
                        <div class="list-wrapper">
                            <div class="item-list">
                                <ul>
                                </ul>
                            </div>
                            <div class="dropdown-footer">
                                <div class="cart-total-price clearfix">
                                    <span>Total:</span>
                                    <div class="float-end">
                                        <span class="current-price"></span>
                                        <!-- <span class="original-price">$94.99</span> -->
                                    </div>
                                </div>
                                <a href="http://dutatechnology.com:2280/lmsbaru/home/shopping_cart">Go to cart</a>
                            </div>
                        </div>
                        <div class="empty-box text-center d-none">
                            <p>Your cart is empty.</p>
                            <a href="">Keep Shopping</a>
                        </div>
                    </div>
                </div>

                <span class="signin-box-move-desktop-helper"></span>
                <div class="sign-in-box btn-group">
                    <select class="language_selector" onchange="switch_language(this.value)">
                        <option value="english" selected>English</option>
                        <option value="indonesia">Indonesia</option>
                    </select>
                    <a href="http://dutatechnology.com:2280/lmsbaru/home/login" class="btn btn-sign-in">Log in</a>

                    <a href="http://dutatechnology.com:2280/lmsbaru/home/sign_up" class="btn btn-sign-up">Sign up</a>

                </div> <!--  sign-in-box end -->
            </nav>
        </div>
    </section>
    <link rel="stylesheet" type="text/css"
        href="http://dutatechnology.com:2280/lmsbaru/assets/frontend/eu-cookie/purecookie.css" async />

    <div class="cookieConsentContainer" id="cookieConsentContainer" style="opacity: .9; display: block; display: none;">
        <!-- <div class="cookieTitle">
    <a>Cookies.</a>
  </div> -->
        <div class="cookieDesc">
            <p>
                This website uses cookies to personalize content and analyse traffic in order to offer you a better
                experience. <a class="link-cookie-policy"
                    href="http://dutatechnology.com:2280/lmsbaru/home/cookie_policy">Cookie policy</a>
            </p>
        </div>
        <div class="cookieButton">
            <a onclick="cookieAccept();">Accept</a>
        </div>
    </div>
    <script>
        $(document).ready(function () {
    if (localStorage.getItem("accept_cookie_academy")) {
      //localStorage.removeItem("accept_cookie_academy");
    }else{
      $('#cookieConsentContainer').fadeIn(1000);
    }
  });

  function cookieAccept() {
    if (typeof(Storage) !== "undefined") {
      localStorage.setItem("accept_cookie_academy", true);
      localStorage.setItem("accept_cookie_time", "06/20/2022");
      $('#cookieConsentContainer').fadeOut(1200);
    }
  }
    </script>
    <section class="course-header-area">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="course-header-wrap">
                        <h1 class="title">Pemrograman Web</h1>
                        <p class="subtitle"></p>
                        <div class="rating-row">
                            <span class="course-badge best-seller">Beginner</span>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <span class="d-inline-block average-rating">0</span><span>(0 Ratings)</span>
                            <span class="enrolled-num">
                                2 Students enrolled </span>
                            <span class="comment"><i class="fas fa-comment"></i>English</span>
                        </div>
                        <div class="created-row">
                            <span class="created-by">
                                Created by <a class="text-14px fw-600 text-decoration-none"
                                    href="http://dutatechnology.com:2280/lmsbaru/home/instructor_page/1">luqman
                                    affandi</a>
                                , <a class="text-14px fw-600 text-decoration-none"
                                    href="http://dutatechnology.com:2280/lmsbaru/home/instructor_page/2">Nasrul
                                    Firdaus</a>
                            </span>
                            <br>
                            <span class="last-updated-date d-inline-block mt-2">Last updated Mon, 30-May-2022</span>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">

                </div>
            </div>
        </div>
    </section>

    <section class="course-content-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 order-last order-lg-first radius-10 mt-4 bg-white p-30-40">

                    <div class="description-box view-more-parent">
                        <div class="view-more" onclick="viewMore(this,'hide')">+ View more</div>
                        <div class="description-title">Course overview</div>
                        <div class="description-content-wrap">
                            <div class="description-content">
                            </div>
                        </div>
                    </div>

                    <h4 class="py-3">What will i learn?</h4>
                    <div class="what-you-get-box">
                        <ul class="what-you-get__items">
                        </ul>
                    </div>

                    <div class="requirements-box">
                        <div class="requirements-title">Requirements</div>
                        <div class="requirements-content">
                            <ul class="requirements__list">
                            </ul>
                        </div>
                    </div>

                    <div class="course-curriculum-box">
                        <div class="course-curriculum-title clearfix mt-5 mb-3">
                            <div class="title float-start">Curriculum for this course</div>
                            <div class="float-end mt-2">
                                <span class="total-lectures">
                                    5 Lessons </span>
                                <span class="total-time">
                                    00:01:00 Hours </span>
                            </div>
                        </div>
                        <div class="course-curriculum-accordion">
                            <div class="lecture-group-wrapper">


                                <div class="lecture-group-title clearfix" style="border-radius: 10px 10px 0px 0px;"
                                    data-bs-toggle="collapse" data-bs-target="#collapse22" aria-expanded="true">
                                    <div class="title float-start">
                                        php pertemuan ke 1 </div>
                                    <div class="float-end">
                                        <span class="total-lectures">
                                            2 Lessons </span>
                                        <span class="total-time">
                                            00:01:00 Hours </span>
                                    </div>
                                </div>

                                <div id="collapse22" class="lecture-list collapse show">
                                    <ul>
                                        <li class="lecture has-preview text-14px ">
                                            <span class="lecture-title text-primary"
                                                onclick="go_course_playing_page('16', '34')">Variable</span>

                                            <div class="lecture-info float-lg-end">
                                                <span class="lecture-preview"
                                                    onclick="lesson_preview('http://dutatechnology.com:2280/lmsbaru/home/preview_free_lesson/34', 'Lesson: Variable')">
                                                    <i class="fas fa-eye"></i>
                                                    Preview </span>

                                                <span class="lecture-time ps-2">
                                                    00:01:00 </span>
                                            </div>
                                        </li>
                                        <li class="lecture has-preview text-14px ">
                                            <span class="lecture-title "
                                                onclick="go_course_playing_page('16', '35')">Quiz Variable</span>

                                            <div class="lecture-info float-lg-end">

                                                <span class="lecture-time ps-2">
                                                    00:00:00 </span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="lecture-group-wrapper">


                                <div class="lecture-group-title clearfix" style="" data-bs-toggle="collapse"
                                    data-bs-target="#collapse23" aria-expanded="">
                                    <div class="title float-start">
                                        php pertemuan ke 2 </div>
                                    <div class="float-end">
                                        <span class="total-lectures">
                                            3 Lessons </span>
                                        <span class="total-time">
                                            00:00:00 Hours </span>
                                    </div>
                                </div>

                                <div id="collapse23" class="lecture-list collapse ">
                                    <ul>
                                        <li class="lecture has-preview text-14px ">
                                            <span class="lecture-title text-primary"
                                                onclick="go_course_playing_page('16', '40')">potofolio test</span>

                                            <div class="lecture-info float-lg-end">
                                                <span class="lecture-preview"
                                                    onclick="lesson_preview('http://dutatechnology.com:2280/lmsbaru/home/preview_free_lesson/40', 'Lesson: potofolio test')">
                                                    <i class="fas fa-eye"></i>
                                                    Preview </span>

                                                <span class="lecture-time ps-2">
                                                    <span class="opacity-0">.</span> </span>
                                            </div>
                                        </li>
                                        <li class="lecture has-preview text-14px ">
                                            <span class="lecture-title text-primary"
                                                onclick="go_course_playing_page('16', '43')">Test Document File</span>

                                            <div class="lecture-info float-lg-end">
                                                <span class="lecture-preview"
                                                    onclick="lesson_preview('http://dutatechnology.com:2280/lmsbaru/home/preview_free_lesson/43', 'Lesson: Test Document File')">
                                                    <i class="fas fa-eye"></i>
                                                    Preview </span>

                                                <span class="lecture-time ps-2">
                                                    <span class="opacity-0">.</span> </span>
                                            </div>
                                        </li>
                                        <li class="lecture has-preview text-14px ">
                                            <span class="lecture-title "
                                                onclick="go_course_playing_page('16', '44')">quiz kedua</span>

                                            <div class="lecture-info float-lg-end">

                                                <span class="lecture-time ps-2">
                                                    00:00:00 </span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="lecture-group-wrapper">


                                <div class="lecture-group-title clearfix" style="border-radius: 0px 0px 10px 10px;"
                                    data-bs-toggle="collapse" data-bs-target="#collapse26" aria-expanded="">
                                    <div class="title float-start">
                                        pertemuan ke 3 </div>
                                    <div class="float-end">
                                        <span class="total-lectures">
                                            0 Lessons </span>
                                        <span class="total-time">
                                            00:00:00 Hours </span>
                                    </div>
                                </div>

                                <div id="collapse26" class="lecture-list collapse ">
                                    <ul>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="compare-box view-more-parent">
                        <div class="view-more" onclick="viewMore(this)">+ View more</div>
                        <div class="compare-title">Other related courses</div>
                        <div class="compare-courses-wrap">
                            <div class="course-comparism-item-container this-course">
                                <div class="course-comparism-item clearfix">
                                    <div class="item-image float-start  mt-4 mt-md-0">
                                        <a
                                            href="http://dutatechnology.com:2280/lmsbaru/home/course/pemrograman-mobile/18"><img
                                                src="" alt="" class="img-fluid"></a>
                                        <div class="item-duration"><b>00:01:01 Hours</b></div>
                                    </div>
                                    <div class="item-title float-start">
                                        <div class="title"><a
                                                href="http://dutatechnology.com:2280/lmsbaru/home/course/pemrograman-mobile/18">Pemrograman
                                                Mobile</a></div>
                                        <div class="updated-time">Updated Thu, 09-Jun-2022</div>
                                    </div>
                                    <div class="item-details float-start">
                                        <span class="item-rating">
                                            <i class="fas fa-star"></i>
                                            <span class="d-inline-block average-rating">0</span>
                                        </span>
                                        <span class="enrolled-student">
                                            <i class="far fa-user"></i>
                                            1 </span>
                                        <span class="item-price mt-4 mt-md-0">
                                            <span class="current-price">Free</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="about-instructor-box">
                        <div class="about-instructor-title">
                            About instructor </div>

                        <div class="row justify-content-center mb-3">
                            <div class="col-md-4 top-instructor-img w-sm-100">
                                <a href="http://dutatechnology.com:2280/lmsbaru/home/instructor_page/1">
                                    <img src="http://dutatechnology.com:2280/lmsbaru/uploads/user_image/placeholder.png"
                                        width="100%">
                                </a>
                            </div>
                            <div class="col-md-8 top-instructor-details text-center text-md-start">
                                <h4 class="mb-1 fw-600 "><a class="text-decoration-none"
                                        href="http://dutatechnology.com:2280/lmsbaru/home/instructor_page/1">luqman
                                        affandi</a></h4>
                                <p class="fw-500 text-14px w-100 "></p>
                                <div class="rating ">
                                    <div class="d-inline-block">
                                        <span class="text-dark fw-800 text-muted ms-1 text-13px">0 Reviews</span>
                                        |
                                        <span class="text-dark fw-800 text-13px text-muted mx-1">
                                            3 Students </span>
                                        |
                                        <span class="text-dark fw-800 text-14px text-muted">
                                            3 Courses </span>
                                    </div>
                                </div>
                                <span class="badge badge-sub-warning text-12px my-1 py-2"></span>


                                <div class="description ">
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row justify-content-center mb-3">
                            <div class="col-md-4 top-instructor-img w-sm-100">
                                <a href="http://dutatechnology.com:2280/lmsbaru/home/instructor_page/2">
                                    <img src="http://dutatechnology.com:2280/lmsbaru/uploads/user_image/placeholder.png"
                                        width="100%">
                                </a>
                            </div>
                            <div class="col-md-8 top-instructor-details text-center text-md-start">
                                <h4 class="mb-1 fw-600 "><a class="text-decoration-none"
                                        href="http://dutatechnology.com:2280/lmsbaru/home/instructor_page/2">Nasrul
                                        Firdaus</a></h4>
                                <p class="fw-500 text-14px w-100 "></p>
                                <div class="rating ">
                                    <div class="d-inline-block">
                                        <span class="text-dark fw-800 text-muted ms-1 text-13px">0 Reviews</span>
                                        |
                                        <span class="text-dark fw-800 text-13px text-muted mx-1">
                                            2 Students </span>
                                        |
                                        <span class="text-dark fw-800 text-14px text-muted">
                                            1 Courses </span>
                                    </div>
                                </div>
                                <span class="badge badge-sub-warning text-12px my-1 py-2"></span>


                                <div class="description ">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="student-feedback-box mt-5 pb-3">
                        <div class="student-feedback-title">
                            Student feedback </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="average-rating ms-auto me-auto float-md-start mb-sm-4">
                                    <div class="num">
                                        0 </div>
                                    <div class="rating">
                                        <i class="fas fa-star" style="color: #abb0bb;"></i>
                                        <i class="fas fa-star" style="color: #abb0bb;"></i>
                                        <i class="fas fa-star" style="color: #abb0bb;"></i>
                                        <i class="fas fa-star" style="color: #abb0bb;"></i>
                                        <i class="fas fa-star" style="color: #abb0bb;"></i>
                                    </div>
                                    <div class="title text-15px fw-700">0 Reviews</div>
                                </div>
                                <div class="individual-rating">
                                    <ul>
                                        <li>
                                            <div>
                                                <span class="rating">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star filled"></i>

                                                </span>
                                            </div>
                                            <div class="progress ms-2 mt-1">
                                                <div class="progress-bar" style="width: 0%"></div>
                                            </div>
                                            <span class="d-inline-block ps-2 text-15px fw-500">
                                                (0)
                                            </span>
                                        </li>
                                        <li>
                                            <div>
                                                <span class="rating">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>

                                                </span>
                                            </div>
                                            <div class="progress ms-2 mt-1">
                                                <div class="progress-bar" style="width: 0%"></div>
                                            </div>
                                            <span class="d-inline-block ps-2 text-15px fw-500">
                                                (0)
                                            </span>
                                        </li>
                                        <li>
                                            <div>
                                                <span class="rating">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>

                                                </span>
                                            </div>
                                            <div class="progress ms-2 mt-1">
                                                <div class="progress-bar" style="width: 0%"></div>
                                            </div>
                                            <span class="d-inline-block ps-2 text-15px fw-500">
                                                (0)
                                            </span>
                                        </li>
                                        <li>
                                            <div>
                                                <span class="rating">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>

                                                </span>
                                            </div>
                                            <div class="progress ms-2 mt-1">
                                                <div class="progress-bar" style="width: 0%"></div>
                                            </div>
                                            <span class="d-inline-block ps-2 text-15px fw-500">
                                                (0)
                                            </span>
                                        </li>
                                        <li>
                                            <div>
                                                <span class="rating">
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>

                                                </span>
                                            </div>
                                            <div class="progress ms-2 mt-1">
                                                <div class="progress-bar" style="width: 0%"></div>
                                            </div>
                                            <span class="d-inline-block ps-2 text-15px fw-500">
                                                (0)
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="reviews mt-5">
                            <h3>Reviews</h3>
                            <ul>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 order-first order-lg-last">
                    <div class="course-sidebar natural">
                        <div class="course-sidebar-text-box">
                            <div class="price text-center">
                                <span class="current-price"><span class="current-price">Free</span></span>
                            </div>


                            <!-- WISHLIST BUTTON -->
                            <div class="buy-btns">
                                <button class="btn btn-add-wishlist " type="button" id="16"
                                    onclick="handleAddToWishlist(this)">
                                    Add to wishlist </button>
                            </div>

                            <div class="buy-btns">
                                <a href="javascript:void(0);" class="btn btn-buy-now"
                                    onclick="handleEnrolledButton()">Get enrolled</a>
                            </div>


                            <div class="includes">
                                <div class="title"><b>Includes:</b></div>
                                <ul>
                                    <li><i class="far fa-file-video"></i>
                                        00:01:00 Hours On demand videos </li>
                                    <li><i class="far fa-file"></i>5 Lessons</li>
                                    <li><i class="fas fa-mobile-alt"></i>Access on mobile and tv</li>
                                    <li><i class="far fa-compass"></i>Full lifetime access</li>
                                    <li class="text-center pt-3">
                                        <a class="badge-sub-warning text-decoration-none fw-600 hover-shadow-1 d-inline-block"
                                            href="http://dutatechnology.com:2280/lmsbaru/home/compare?course-1=pemrograman-web&&course-id-1=16"><i
                                                class="fas fa-balance-scale"></i> Compare this course with other</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal -->
    <!-- Modal -->

    <style media="screen">
        .embed-responsive-16by9::before {
            padding-top: 0px;
        }
    </style>
    <script type="text/javascript">
        function handleCartItems(elem) {
    url1 = 'http://dutatechnology.com:2280/lmsbaru/home/handleCartItems';
    url2 = 'http://dutatechnology.com:2280/lmsbaru/home/refreshWishList';
    $.ajax({
      url: url1,
      type: 'POST',
      data: {
        course_id: elem.id
      },
      success: function(response) {
        $('#cart_items').html(response);
        if ($(elem).hasClass('active')) {
          $(elem).removeClass('active')
          $(elem).text("Add to cart");
        } else {
          $(elem).addClass('active');
          $(elem).addClass('active');
          $(elem).text("Added to cart");
        }
        $.ajax({
          url: url2,
          type: 'POST',
          success: function(response) {
            $('#wishlist_items').html(response);
          }
        });
      }
    });
  }

  function handleBuyNow(elem) {

    url1 = 'http://dutatechnology.com:2280/lmsbaru/home/handleCartItemForBuyNowButton';
    url2 = 'http://dutatechnology.com:2280/lmsbaru/home/refreshWishList';
    urlToRedirect = 'http://dutatechnology.com:2280/lmsbaru/home/shopping_cart';
    var explodedArray = elem.id.split("_");
    var course_id = explodedArray[1];

    $.ajax({
      url: url1,
      type: 'POST',
      data: {
        course_id: course_id
      },
      success: function(response) {
        $('#cart_items').html(response);
        $.ajax({
          url: url2,
          type: 'POST',
          success: function(response) {
            $('#wishlist_items').html(response);
            toastr.success('Please wait....');
            setTimeout(
              function() {
                window.location.replace(urlToRedirect);
              }, 1000);
          }
        });
      }
    });
  }

  function handleEnrolledButton() {
    $.ajax({
      url: 'http://dutatechnology.com:2280/lmsbaru/home/isLoggedIn?url_history=aHR0cDovL2R1dGF0ZWNobm9sb2d5LmNvbToyMjgwL2xtc2JhcnUvaG9tZS9jb3Vyc2UvcGVtcm9ncmFtYW4td2ViLzE2',
      success: function(response) {
        if (!response) {
          window.location.replace("http://dutatechnology.com:2280/lmsbaru/login");
        }
      }
    });
  }

  function handleAddToWishlist(elem) {
    $.ajax({
      url: 'http://dutatechnology.com:2280/lmsbaru/home/isLoggedIn?url_history=aHR0cDovL2R1dGF0ZWNobm9sb2d5LmNvbToyMjgwL2xtc2JhcnUvaG9tZS9jb3Vyc2UvcGVtcm9ncmFtYW4td2ViLzE2',
      success: function(response) {
        if (!response) {
          window.location.replace("http://dutatechnology.com:2280/lmsbaru/login");
        }else{
          $.ajax({
            url: 'http://dutatechnology.com:2280/lmsbaru/home/handleWishList',
            type: 'POST',
            data: {
              course_id: elem.id
            },
            success: function(response) {
              if ($(elem).hasClass('active')) {
                $(elem).removeClass('active');
                $(elem).text("Add to wishlist");
              } else {
                $(elem).addClass('active');
                $(elem).text("Added to wishlist");
              }
              $('#wishlist_items').html(response);
            }
          });
        }
      }
    });
  }

  function pausePreview() {
    player.pause();
  }

  $('.course-compare').click(function(e) {
    e.preventDefault()
    var redirect_to = $(this).attr('redirect_to');
    window.location.replace(redirect_to);
  });

  function go_course_playing_page(course_id, lesson_id){
    var course_playing_url = "http://dutatechnology.com:2280/lmsbaru/home/lesson/pemrograman-web/"+course_id+'/'+lesson_id;

    $.ajax({
      url: 'http://dutatechnology.com:2280/lmsbaru/home/go_course_playing_page/'+course_id,
      type: 'POST',
      success: function(response) {
        if(response == 1){
          window.location.replace(course_playing_url);
        }
      }
    });
  }
    </script>
    <footer class="footer-area d-print-none bg-gray mt-5 pt-5">
        <div class="container-xl">
            <div class="row mb-3">
                <div class="col-6 col-sm-6 col-md-3">
                    <h5 class="text-muted mb-3">Top categories</h5>
                    <ul class="list-unstyled text-small">
                        <li class="mb-2">
                            <a class="link-secondary footer-hover-link"
                                href="http://dutatechnology.com:2280/lmsbaru/home/courses?category=php">
                                PHP
                                <!-- <span class="fw-700 text-end">()</span> -->
                            </a>
                        </li>
                        <li class="mb-2">
                            <a class="link-secondary footer-hover-link"
                                href="http://dutatechnology.com:2280/lmsbaru/home/courses?category=framework">
                                FrameWork
                                <!-- <span class="fw-700 text-end">()</span> -->
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-6 col-sm-6 col-md-3">
                    <h5 class="text-muted mb-3">Useful links</h5>
                    <ul class="list-unstyled text-small">
                        <li class="mb-2"><a class="link-secondary footer-hover-link"
                                href="http://dutatechnology.com:2280/lmsbaru/blog">Blog</a></li>
                        <li class="mb-2"><a class="link-secondary footer-hover-link"
                                href="http://dutatechnology.com:2280/lmsbaru/home/courses">All courses</a></li>
                        <li class="mb-2"><a class="link-secondary footer-hover-link"
                                href="http://dutatechnology.com:2280/lmsbaru/home/sign_up">Sign up</a></li>
                        <li class="mb-2"><a class="link-secondary footer-hover-link"
                                href="http://dutatechnology.com:2280/lmsbaru/home/login">Login</a></li>
                    </ul>
                </div>
                <div class="col-6 col-sm-6 col-md-3">
                    <h5 class="text-muted mb-3">Help</h5>
                    <ul class="list-unstyled text-small">
                        <li class="mb-2"><a class="link-secondary footer-hover-link"
                                href="http://dutatechnology.com:2280/lmsbaru/home/about_us">About us</a></li>
                        <li class="mb-2"><a class="link-secondary footer-hover-link"
                                href="http://dutatechnology.com:2280/lmsbaru/home/privacy_policy">Privacy policy</a>
                        </li>
                        <li class="mb-2"><a class="link-secondary footer-hover-link"
                                href="http://dutatechnology.com:2280/lmsbaru/home/terms_and_condition">Terms and
                                condition</a></li>
                        <li class="mb-2"><a class="link-secondary footer-hover-link"
                                href="http://dutatechnology.com:2280/lmsbaru/home/refund_policy">Refund policy</a></li>
                    </ul>
                </div>
                <div class="col-sm-12 col-md-3 order-sm-first">
                    <img src="http://dutatechnology.com:2280/lmsbaru/uploads/system/acfdb915545bf3f450e8e07dfe88a33d.png"
                        width="130">
                    <span class="d-block mb-1 mt-2 fw-600" style="font-size: 14.5px; line-height: 28px">BIM Learning
                        Management System</span>

                    <ul class="footer-social-link">
                        <li class="mb-1">
                            <a href="https://facebook.com"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li class="mb-1">
                            <a href="https://twitter.com"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li class="mb-1">
                            <a href="https://linkedin.com"><i class="fab fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <section class="border-top">
            <div class="container-xl">
                <div class="row mt-3 py-1">
                    <div class="col-6 col-sm-6 col-md-3 text-muted text-13px">
                        &copy; 2021 BIMLMS, All rights reserved </div>

                    <div class="col-6 col-sm-6 col-md-3 d-none d-md-block"></div>
                    <div class="col-6 col-sm-6 col-md-3 d-none d-md-block"></div>
                    <div class="col-6 col-sm-6 col-md-3 text-center text-md-start">
                        <!-- <select class="language_selector" onchange="switch_language(this.value)">
                                                <option value="english" selected>English</option>
                                                                <option value="indonesia" >Indonesia</option>
                                      </select> -->
                    </div>
                </div>
            </div>
        </section>
    </footer>

    <script type="text/javascript">
        function switch_language(language) {
        $.ajax({
            url: 'http://dutatechnology.com:2280/lmsbaru/home/site_language',
            type: 'post',
            data: {language : language},
            success: function(response) {
                setTimeout(function(){ location.reload(); }, 500);
            }
        });
    }
    </script>



    <!-- PAYMENT MODAL -->
    <!-- Modal -->

    <!-- Modal -->
    <div class="modal fade multi-step" id="EditRatingModal" tabindex="-1" role="dialog" aria-hidden="true"
        reset-on-close="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content edit-rating-modal">
                <div class="modal-header">
                    <h5 class="modal-title step-1" data-step="1">Step 1</h5>
                    <h5 class="modal-title step-2" data-step="2">Step 2</h5>
                    <h5 class="m-progress-stats modal-title">
                        &nbsp;of&nbsp;<span class="m-progress-total"></span>
                    </h5>

                    <button type="button" class="close" data-bs-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="m-progress-bar-wrapper">
                    <div class="m-progress-bar">
                    </div>
                </div>
                <div class="modal-body step step-1">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="modal-rating-box">
                                    <h4 class="rating-title">How would you rate this course overall?</h4>
                                    <fieldset class="your-rating">

                                        <input type="radio" id="star5" name="rating" value="5" />
                                        <label class="full" for="star5"></label>

                                        <!-- <input type="radio" id="star4half" name="rating" value="4 and a half" />
                  <label class="half" for="star4half"></label> -->

                                        <input type="radio" id="star4" name="rating" value="4" />
                                        <label class="full" for="star4"></label>

                                        <!-- <input type="radio" id="star3half" name="rating" value="3 and a half" />
                  <label class="half" for="star3half"></label> -->

                                        <input type="radio" id="star3" name="rating" value="3" />
                                        <label class="full" for="star3"></label>

                                        <!-- <input type="radio" id="star2half" name="rating" value="2 and a half" />
                  <label class="half" for="star2half"></label> -->

                                        <input type="radio" id="star2" name="rating" value="2" />
                                        <label class="full" for="star2"></label>

                                        <!-- <input type="radio" id="star1half" name="rating" value="1 and a half" />
                  <label class="half" for="star1half"></label> -->

                                        <input type="radio" id="star1" name="rating" value="1" />
                                        <label class="full" for="star1"></label>

                                        <!-- <input type="radio" id="starhalf" name="rating" value="half" />
                  <label class="half" for="starhalf"></label> -->

                                    </fieldset>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="modal-course-preview-box">
                                    <div class="card">
                                        <img class="card-img-top img-fluid" id="course_thumbnail_1" alt="">
                                        <div class="card-body">
                                            <h5 class="card-title" class="course_title_for_rating" id="course_title_1">
                                            </h5>
                                            <p class="card-text" id="instructor_details">

                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-body step step-2">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="modal-rating-comment-box">
                                    <h4 class="rating-title">Write a public review</h4>
                                    <textarea id="review_of_a_course" name="review_of_a_course"
                                        placeholder="Describe your experience what you got out of the course and other helpful highlights. What did the instructor do well and what could use some improvement?"
                                        maxlength="65000" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="modal-course-preview-box">
                                    <div class="card">
                                        <img class="card-img-top img-fluid" id="course_thumbnail_2" alt="">
                                        <div class="card-body">
                                            <h5 class="card-title" class="course_title_for_rating" id="course_title_2">
                                            </h5>
                                            <p class="card-text">
                                                -
                                                luqman affandi </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="course_id" id="course_id_for_rating" value="">
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary next step step-1" data-step="1"
                        onclick="sendEvent(2)">Next</button>
                    <button type="button" class="btn btn-primary previous step step-2 mr-auto" data-step="2"
                        onclick="sendEvent(1)">Previous</button>
                    <button type="button" class="btn btn-primary publish step step-2"
                        onclick="publishRating($('#course_id_for_rating').val())" id="">Publish</button>
                </div>
            </div>
        </div>
    </div><!-- Modal -->


    <script src="http://dutatechnology.com:2280/lmsbaru/assets/frontend/default/js/vendor/modernizr-3.5.0.min.js">
    </script>
    <script src="http://dutatechnology.com:2280/lmsbaru/assets/frontend/default/js/vendor/jquery-3.2.1.min.js"></script>
    <script src="http://dutatechnology.com:2280/lmsbaru/assets/frontend/default/js/popper.min.js"></script>
    <script src="http://dutatechnology.com:2280/lmsbaru/assets/frontend/default/js/bootstrap.min.js"></script>



    <script src="http://dutatechnology.com:2280/lmsbaru/assets/frontend/default/js/main.js"></script>
    <script src="http://dutatechnology.com:2280/lmsbaru/assets/global/toastr/toastr.min.js"></script>
    <script src="http://dutatechnology.com:2280/lmsbaru/assets/frontend/default/js/jquery.form.min.js"></script>
    <script src="http://dutatechnology.com:2280/lmsbaru/assets/frontend/default/js/jQuery.tagify.js"></script>

    <!-- SHOW TOASTR NOTIFIVATION -->


    <script type="text/javascript">
        $(function () {
      $('[data-bs-toggle="tooltip"]').tooltip()
    });
    if($('.tagify').height()){
    	$('.tagify').tagify();
    }
    </script>
    <script type="text/javascript">
        function showAjaxModal(url)
{
    // SHOWING AJAX PRELOADER IMAGE
    jQuery('#modal_ajax .modal-body').html('<div class="w-100 text-center pt-5"><img class="mt-5 mb-5" width="80px" src="http://dutatechnology.com:2280/lmsbaru/assets/global/gif/page-loader-2.gif"></div>');

    // LOADING THE AJAX MODAL
    jQuery('#modal_ajax').modal('show', {backdrop: 'true'});

    // SHOW AJAX RESPONSE ON REQUEST SUCCESS
    $.ajax({
        url: url,
        success: function(response)
        {
            jQuery('#modal_ajax .modal-body').html(response);
        }
    });
}

function lesson_preview(url, title){
    // SHOWING AJAX PRELOADER IMAGE
    jQuery('.lesson_preview_header').html(title);
    jQuery('#lesson_preview .modal-body').html('<div class="w-100 text-center pt-5"><img class="mt-5 mb-5" width="80px" src="http://dutatechnology.com:2280/lmsbaru/assets/global/gif/page-loader-2.gif"></div>');

    // LOADING THE AJAX MODAL
    jQuery('#lesson_preview').modal('show', {backdrop: 'true'});

    // SHOW AJAX RESPONSE ON REQUEST SUCCESS
    $.ajax({
        url: url,
        success: function(response)
        {
            jQuery('#lesson_preview .modal-body').html(response);
        }
    });
}
    </script>

    <!-- (Ajax Modal)-->
    <div class="modal fade" id="modal_ajax">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-bs-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body" style="overflow:auto;">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="lesson_preview" tabindex="-1" role="dialog" aria-hidden="true" data-keyboard="false"
        data-backdrop="static">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content course-preview-modal">
                <div class="modal-header">
                    <h5 class="lesson_preview_header"></h5>
                    <button type="button" class="close" data-bs-dismiss="modal" onclick="window.location.reload()">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                </div>
            </div>
        </div>
    </div>




    <script type="text/javascript">
        function confirm_modal(delete_url)
{
    jQuery('#modal-4').modal('show', {backdrop: 'static'});
    document.getElementById('delete_link').setAttribute('href' , delete_url);
}
    </script>

    <!-- (Normal Modal)-->
    <div class="modal fade" id="modal-4">
        <div class="modal-dialog">
            <div class="modal-content" style="margin-top:100px;">

                <div class="modal-header">
                    <h4 class="modal-title text-center">Are you sure ?</h4>
                    <button type="button" class="btn btn-outline-secondary px-1 py-0" data-bs-dismiss="modal"
                        aria-hidden="true"><i class="fas fa-times-circle"></i></button>
                </div>


                <div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
                    <a href="#" class="btn btn-danger btn-yes" id="delete_link">Yes</a>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                </div>
            </div>
        </div>
    </div>


    <script type="text/javascript">
        function async_modal() {
    const asyncModal = new Promise(function(resolve, reject){
        $('#modal-4').modal('show');
        $('#modal-4 .btn-yes').click(function(){
            resolve(true);
        });
        $('#modal-4 .btn-cancel').click(function(){
            resolve(false);
        });
    });
    return asyncModal;
}
    </script>
    <script type="text/javascript">
        function toggleRatingView(course_id) {
  $('#course_info_view_'+course_id).toggle();
  $('#course_rating_view_'+course_id).toggle();
  $('#edit_rating_btn_'+course_id).toggle();
  $('#cancel_rating_btn_'+course_id).toggle();
}

function publishRating(course_id) {
    var review = $('#review_of_a_course_'+course_id).val();
    var starRating = 0;
    starRating = $('#star_rating_of_course_'+course_id).val();
    if (starRating > 0) {
        $.ajax({
            type : 'POST',
            url  : 'http://dutatechnology.com:2280/lmsbaru/home/rate_course',
            data : {course_id : course_id, review : review, starRating : starRating},
            success : function(response) {
                location.reload();
            }
        });
    }else{

    }
}

function isTouchDevice() {
  return (('ontouchstart' in window) ||
     (navigator.maxTouchPoints > 0) ||
     (navigator.msMaxTouchPoints > 0));
}

function viewMore(element, visibility) {
  if (visibility == "hide") {
    $(element).parent(".view-more-parent").addClass("expanded");
    $(element).remove();
  } else if ($(element).hasClass("view-more")) {
    $(element).parent(".view-more-parent").addClass("expanded has-hide");
    $(element)
      .removeClass("view-more")
      .addClass("view-less")
      .html("- View less");
  } else if ($(element).hasClass("view-less")) {
    $(element).parent(".view-more-parent").removeClass("expanded has-hide");
    $(element)
      .removeClass("view-less")
      .addClass("view-more")
      .html("+ View more");
  }
}

function redirect_to(url){
  if(!isTouchDevice() && $(window).width() > 767){
    window.location.replace(url);
  }
}

//Event call after loading page
document.addEventListener('DOMContentLoaded', function() {
    setTimeout(function(){
        $('.animated-loader').hide();
        $('.shown-after-loading').show();
    });
}, false);


function check_action(e, url){
  var tag = $(e).prop("tagName").toLowerCase();
  if(tag == 'a'){
    return true;
  }else if(tag != 'a' && url){
    $(location).attr('href', url);
    return false;
  }else{
    return true;
  }
}
    </script>
</body>

</html>