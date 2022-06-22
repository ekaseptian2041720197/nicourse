<!DOCTYPE html>
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

                <a href="/lms" class="navbar-brand"><img
                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRKrOVu1IA3RvbaB-pFPPFIe-HKTodltqzJNw&usqp=CAU"
                        alt="" height="35"></a>

                {{-- CSS HEADER --}}
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
                    {{-- CSS HEADER --}}

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

                                @foreach($kategori as $k)
                                <li class="has-children">
                                    <a href="javascript:;" class="py-2"
                                        onclick="redirect_to('#')">
                                        <span class="icon"><i class="fab fa-accessible-icon"></i></span>
                                        <span>{{ $k->name }}</span>
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
                                                href="#">PHP</a>
                                        </li>
                                    </ul>
                                </li>
                                @endforeach
                                <li class="all-category-devided mb-0 p-0">
                                    <a href="#" class="py-3">
                                        <span class="icon"><i class="fa fa-align-justify"></i></span>
                                        <span>All courses</span>
                                    </a>
                                </li>

                            </ul>
                        </li>

                        <div class="mobile-menu-helper-bottom"></div>
                    </ul>
                </div>

                <form class="inline-form me-auto" action="#"
                    method="#">
                </form>

                <span class="signin-box-move-desktop-helper"></span>
                <div class="sign-in-box btn-group">
                    <select class="language_selector" onchange="switch_language(this.value)">
                        <option value="indonesia">Indonesia</option>
                    </select>
                    <a href="/notifedit" class="btn btn-sign-in">Edit Profile</a>

                    <a href="/logout" class="btn btn-sign-up">Logout</a>

                </div> <!--  sign-in-box end -->
            </nav>
        </div>
    </section>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/eu-cookie/purecookie.css') }}" async />

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
      localStorage.setItem("accept_cookie_time", "06/14/2022");
      $('#cookieConsentContainer').fadeOut(1200);
    }
  }
    </script>
    <section class="home-banner-area" id="home-banner-area"
        style="background-image: url('https://blog.paper.li/wp-content/uploads/2020/02/LinkedIn-banner-4-1024x256.png'); background-position: right; background-repeat: no-repeat; padding: 100px 0 75px; background-size: auto 100%; color: #fff;">
        <div class="cropped-home-banner"></div>
        <div class="container-xl">
            <div class="row">
                <div class="col position-relative">
                    <div class="home-banner-wrap">
                        <h2 class="fw-bold text-light">Selamat Datang <hr> {{ auth()->user()->name }}</h2>
                        <br><p class="text-light">Temukan passion mu dalam bidang IT dan raih kesuksesan anda <br>bersama
                            Nicourse</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="home-fact-area">
        <div class="container-lg">
            <div class="row">
                <div class="col-md-4 d-flex">
                    <div class="home-fact-box mr-md-auto mr-auto">
                        <i class="fas fa-bullseye float-start"></i>
                        <div class="text-box">
                            <h4>3 Online courses</h4>
                            <p>Explore a variety of fresh topics</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 d-flex">
                    <div class="home-fact-box mr-md-auto mr-auto">
                        <i class="fa fa-check float-start"></i>
                        <div class="text-box">
                            <h4>Expert instruction</h4>
                            <p>Find the right course for you</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 d-flex">
                    <div class="home-fact-box mr-md-auto mr-auto">
                        <i class="fa fa-clock float-start"></i>
                        <div class="text-box">
                            <h4>Lifetime access</h4>
                            <p>Learn on your schedule</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-5">
        <div class="container-lg">
            <h1>Apa yang ingin anda pelajari sekarang ?</h1>
            <p>Nicourse merupakan platform pembelajaran daring (online learning)
                bagi masyarakat Indonesia yang ingin belajar IT dari basic hingga advance. Sehingga diharapkan dapat
                memajukan sumber daya manusia di Indonesia terkait teknologi
                Nicourse menyediakan berbagai kursus IT dengan modul dan video pembelajaran lengkap yang memudahkan
                pemahaman pengguna terkait materi yang diajarkan.<img xss="removed"></p>
            <p><br></p>
            <p style="text-align: center"><img xss="removed"><img xss="removed"
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRKrOVu1IA3RvbaB-pFPPFIe-HKTodltqzJNw&usqp=CAU">
            </p>
            <p><br></p>
            <p><br></p>
        </div>
        <div class="container-lg">
            <h3 class="course-carousel-title my-4">Top categories</h3>
            <div class="row justify-content-center">
                @foreach($kategori as $k)
                <div class="col-md-6 col-lg-4 col-xl-3 mb-3">
                    <a href="#" class="top-categories">
                        <div class="category-icon">
                            <i class="fab fa-earlybirds"></i>
                        </div>
                        <div class="category-title">
                            {{ $k->name }}   <p>2 Courses</p>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="course-carousel-area">
        <div class="container-lg">
            <div class="row">
                <div class="col">
                    <h3 class="course-carousel-title mb-4">Top courses</h3>

                    <!-- page loader -->
                    <div class="animated-loader">
                        <div class="spinner-border text-secondary" role="status"></div>
                    </div>

                    <div class="course-carousel shown-after-loading" style="display: none;">
                        <div class="course-box-wrap">
                            <a onclick="return check_action(this);"
                                href="http://dutatechnology.com:2280/lmsbaru/home/course/pemrograman-web/16"
                                class="has-popover">
                                <div class="course-box">
                                    <div class="course-image">
                                        <img src="http://dutatechnology.com:2280/lmsbaru/assets/frontend/default/img/course_thumbnail_placeholder.jpg"
                                            alt="" class="img-fluid">
                                    </div>
                                    <div class="course-details">
                                        <h5 class="title">Pemrograman Web</h5>
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <div class="d-inline-block">
                                                <span class="text-dark ms-1 text-15px">(0)</span>
                                                <span class="text-dark text-12px text-muted ms-2">(0 Reviews)</span>
                                            </div>
                                        </div>
                                        <div class="d-flex text-dark">
                                            <div class="">
                                                <i class="far fa-clock text-14px"></i>
                                                <span class="text-muted text-12px">00:01:00 Hours</span>
                                            </div>
                                            <div class="ms-3">
                                                <i class="far fa-list-alt text-14px"></i>
                                                <span class="text-muted text-12px">5 Lectures</span>
                                            </div>
                                        </div>

                                        <div class="row mt-3">
                                            <div class="col-6">
                                                <span class="badge badge-sub-warning text-11px">Beginner</span>
                                            </div>
                                            <div class="col-6 text-end">
                                                <button class="brn-compare-sm"
                                                    onclick="return check_action(this, 'http://dutatechnology.com:2280/lmsbaru/home/compare?course-1=pemrograman-web&&course-id-1=16');"><i
                                                        class="fas fa-balance-scale"></i> Compare</button>
                                            </div>
                                        </div>

                                        <hr class="divider-1">

                                        <div class="d-block">
                                            <div class="floating-user d-inline-block">
                                                <img style="margin-left: 0px;" class="position-absolute"
                                                    src="http://dutatechnology.com:2280/lmsbaru/uploads/user_image/placeholder.png"
                                                    width="30px" data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="luqman affandi"
                                                    onclick="return check_action(this,'http://dutatechnology.com:2280/lmsbaru/home/instructor_page/1');">
                                                <img style="margin-left: 17px;" class="position-absolute"
                                                    src="http://dutatechnology.com:2280/lmsbaru/uploads/user_image/placeholder.png"
                                                    width="30px" data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Nasrul  Firdaus"
                                                    onclick="return check_action(this,'http://dutatechnology.com:2280/lmsbaru/home/instructor_page/2');">
                                            </div>



                                            <p class="price text-right d-inline-block float-end">Free</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <div class="webui-popover-content">
                                <div class="course-popover-content">
                                    <div class="last-updated">Last updated Mon, 30-May-2022</div>

                                    <div class="course-title">
                                        <a class="text-decoration-none text-15px"
                                            href="http://dutatechnology.com:2280/lmsbaru/home/course/pemrograman-web/16">Pemrograman
                                            Web</a>
                                    </div>
                                    <div class="course-meta">
                                        <span class=""><i class="fas fa-play-circle"></i>
                                            5 Lessons </span>
                                        <span class=""><i class="far fa-clock"></i>
                                            00:01:00 Hours </span>
                                        <span class=""><i class="fas fa-closed-captioning"></i>English</span>
                                    </div>
                                    <div class="course-subtitle"></div>
                                    <div class="what-will-learn">
                                        <ul>
                                        </ul>
                                    </div>
                                    <div class="popover-btns">
                                        <a href="#" class="btn green radius-10" onclick="handleEnrolledButton()">Get
                                            enrolled</a>
                                        <button type="button" class="wishlist-btn " title="Add to wishlist"
                                            onclick="handleWishList(this)" id="16"><i class="fas fa-heart"></i></button>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="course-box-wrap">
                            <a onclick="return check_action(this);"
                                href="http://dutatechnology.com:2280/lmsbaru/home/course/pwl/17" class="has-popover">
                                <div class="course-box">
                                    <div class="course-image">
                                        <img src="http://dutatechnology.com:2280/lmsbaru/assets/frontend/default/img/course_thumbnail_placeholder.jpg"
                                            alt="" class="img-fluid">
                                    </div>
                                    <div class="course-details">
                                        <h5 class="title">PWL</h5>
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <div class="d-inline-block">
                                                <span class="text-dark ms-1 text-15px">(0)</span>
                                                <span class="text-dark text-12px text-muted ms-2">(0 Reviews)</span>
                                            </div>
                                        </div>
                                        <div class="d-flex text-dark">
                                            <div class="">
                                                <i class="far fa-clock text-14px"></i>
                                                <span class="text-muted text-12px">00:33:51 Hours</span>
                                            </div>
                                            <div class="ms-3">
                                                <i class="far fa-list-alt text-14px"></i>
                                                <span class="text-muted text-12px">3 Lectures</span>
                                            </div>
                                        </div>

                                        <div class="row mt-3">
                                            <div class="col-6">
                                                <span class="badge badge-sub-warning text-11px">Beginner</span>
                                            </div>
                                            <div class="col-6 text-end">
                                                <button class="brn-compare-sm"
                                                    onclick="return check_action(this, 'http://dutatechnology.com:2280/lmsbaru/home/compare?course-1=pwl&&course-id-1=17');"><i
                                                        class="fas fa-balance-scale"></i> Compare</button>
                                            </div>
                                        </div>

                                        <hr class="divider-1">

                                        <div class="d-block">
                                            <div class="floating-user d-inline-block">
                                                <img src="http://dutatechnology.com:2280/lmsbaru/uploads/user_image/placeholder.png"
                                                    width="30px" data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="luqman affandi"
                                                    onclick="return check_action(this,'http://dutatechnology.com:2280/lmsbaru/home/instructor_page/1');">
                                            </div>



                                            <p class="price text-right d-inline-block float-end">Free</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <div class="webui-popover-content">
                                <div class="course-popover-content">
                                    <div class="last-updated">Last updated Mon, 30-May-2022</div>

                                    <div class="course-title">
                                        <a class="text-decoration-none text-15px"
                                            href="http://dutatechnology.com:2280/lmsbaru/home/course/pwl/17">PWL</a>
                                    </div>
                                    <div class="course-meta">
                                        <span class=""><i class="fas fa-play-circle"></i>
                                            3 Lessons </span>
                                        <span class=""><i class="far fa-clock"></i>
                                            00:33:51 Hours </span>
                                        <span class=""><i class="fas fa-closed-captioning"></i>English</span>
                                    </div>
                                    <div class="course-subtitle">PWL</div>
                                    <div class="what-will-learn">
                                        <ul>
                                            <li>Membuat Web</li>
                                        </ul>
                                    </div>
                                    <div class="popover-btns">
                                        <a href="#" class="btn green radius-10" onclick="handleEnrolledButton()">Get
                                            enrolled</a>
                                        <button type="button" class="wishlist-btn " title="Add to wishlist"
                                            onclick="handleWishList(this)" id="17"><i class="fas fa-heart"></i></button>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="course-box-wrap">
                            <a onclick="return check_action(this);"
                                href="http://dutatechnology.com:2280/lmsbaru/home/course/pemrograman-mobile/18"
                                class="has-popover">
                                <div class="course-box">
                                    <div class="course-image">
                                        <img src="http://dutatechnology.com:2280/lmsbaru/assets/frontend/default/img/course_thumbnail_placeholder.jpg"
                                            alt="" class="img-fluid">
                                    </div>
                                    <div class="course-details">
                                        <h5 class="title">Pemrograman Mobile</h5>
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <div class="d-inline-block">
                                                <span class="text-dark ms-1 text-15px">(0)</span>
                                                <span class="text-dark text-12px text-muted ms-2">(0 Reviews)</span>
                                            </div>
                                        </div>
                                        <div class="d-flex text-dark">
                                            <div class="">
                                                <i class="far fa-clock text-14px"></i>
                                                <span class="text-muted text-12px">00:01:01 Hours</span>
                                            </div>
                                            <div class="ms-3">
                                                <i class="far fa-list-alt text-14px"></i>
                                                <span class="text-muted text-12px">2 Lectures</span>
                                            </div>
                                        </div>

                                        <div class="row mt-3">
                                            <div class="col-6">
                                                <span class="badge badge-sub-warning text-11px">Beginner</span>
                                            </div>
                                            <div class="col-6 text-end">
                                                <button class="brn-compare-sm"
                                                    onclick="return check_action(this, 'http://dutatechnology.com:2280/lmsbaru/home/compare?course-1=pemrograman-mobile&&course-id-1=18');"><i
                                                        class="fas fa-balance-scale"></i> Compare</button>
                                            </div>
                                        </div>

                                        <hr class="divider-1">

                                        <div class="d-block">
                                            <div class="floating-user d-inline-block">
                                                <img src="http://dutatechnology.com:2280/lmsbaru/uploads/user_image/placeholder.png"
                                                    width="30px" data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="luqman affandi"
                                                    onclick="return check_action(this,'http://dutatechnology.com:2280/lmsbaru/home/instructor_page/1');">
                                            </div>



                                            <p class="price text-right d-inline-block float-end">Free</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <div class="webui-popover-content">
                                <div class="course-popover-content">
                                    <div class="last-updated">Last updated Thu, 09-Jun-2022</div>

                                    <div class="course-title">
                                        <a class="text-decoration-none text-15px"
                                            href="http://dutatechnology.com:2280/lmsbaru/home/course/pemrograman-mobile/18">Pemrograman
                                            Mobile</a>
                                    </div>
                                    <div class="course-meta">
                                        <span class=""><i class="fas fa-play-circle"></i>
                                            2 Lessons </span>
                                        <span class=""><i class="far fa-clock"></i>
                                            00:01:01 Hours </span>
                                        <span class=""><i class="fas fa-closed-captioning"></i>English</span>
                                    </div>
                                    <div class="course-subtitle">Pemrograman Mobile</div>
                                    <div class="what-will-learn">
                                        <ul>
                                            <li>Biasa membuat aplikasi Mbile</li>
                                        </ul>
                                    </div>
                                    <div class="popover-btns">
                                        <a href="#" class="btn green radius-10" onclick="handleEnrolledButton()">Get
                                            enrolled</a>
                                        <button type="button" class="wishlist-btn " title="Add to wishlist"
                                            onclick="handleWishList(this)" id="18"><i class="fas fa-heart"></i></button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="course-carousel-area">
        <div class="container-lg">
            <div class="row">
                <div class="col">
                    <h3 class="course-carousel-title mb-4">Top 10 Latest courses</h3>

                    <!-- page loader -->
                    <div class="animated-loader">
                        <div class="spinner-border text-secondary" role="status"></div>
                    </div>

                    <div class="course-carousel shown-after-loading" style="display: none;">
                        <div class="course-box-wrap">
                            <a onclick="return check_action(this);"
                                href="http://dutatechnology.com:2280/lmsbaru/home/course/pemrograman-mobile/18"
                                class="has-popover">
                                <div class="course-box">
                                    <div class="course-image">
                                        <img src="http://dutatechnology.com:2280/lmsbaru/assets/frontend/default/img/course_thumbnail_placeholder.jpg"
                                            alt="" class="img-fluid">
                                    </div>
                                    <div class="course-details">
                                        <h5 class="title">Pemrograman Mobile</h5>
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <div class="d-inline-block">
                                                <span class="text-dark ms-1 text-15px">(0)</span>
                                                <span class="text-dark text-12px text-muted ms-2">(0 Reviews)</span>
                                            </div>
                                        </div>
                                        <div class="d-flex text-dark">
                                            <div class="">
                                                <i class="far fa-clock text-14px"></i>
                                                <span class="text-muted text-12px">00:01:01 Hours</span>
                                            </div>
                                            <div class="ms-3">
                                                <i class="far fa-list-alt text-14px"></i>
                                                <span class="text-muted text-12px">2 Lectures</span>
                                            </div>
                                        </div>

                                        <div class="row mt-3">
                                            <div class="col-6">
                                                <span class="badge badge-sub-warning text-11px">Beginner</span>
                                            </div>
                                            <div class="col-6 text-end">
                                                <button class="brn-compare-sm"
                                                    onclick="return check_action(this, 'http://dutatechnology.com:2280/lmsbaru/home/compare?course-1=pemrograman-mobile&&course-id-1=18');"><i
                                                        class="fas fa-balance-scale"></i> Compare</button>
                                            </div>
                                        </div>

                                        <hr class="divider-1">

                                        <div class="d-block">
                                            <div class="floating-user d-inline-block">
                                                <img src="http://dutatechnology.com:2280/lmsbaru/uploads/user_image/placeholder.png"
                                                    width="30px" data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="luqman affandi"
                                                    onclick="return check_action(this,'http://dutatechnology.com:2280/lmsbaru/home/instructor_page/1');">
                                            </div>



                                            <p class="price text-right d-inline-block float-end">Free</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <div class="webui-popover-content">
                                <div class="course-popover-content">
                                    <div class="last-updated">Last updated Thu, 09-Jun-2022</div>

                                    <div class="course-title">
                                        <a class="text-decoration-none text-15px"
                                            href="http://dutatechnology.com:2280/lmsbaru/home/course/pemrograman-mobile/18">Pemrograman
                                            Mobile</a>
                                    </div>
                                    <div class="course-meta">
                                        <span class=""><i class="fas fa-play-circle"></i>
                                            2 Lessons </span>
                                        <span class=""><i class="far fa-clock"></i>
                                            00:01:01 Hours </span>
                                        <span class=""><i class="fas fa-closed-captioning"></i>English</span>
                                    </div>
                                    <div class="course-subtitle">Pemrograman Mobile</div>
                                    <div class="what-will-learn">
                                        <ul>
                                            <li>Biasa membuat aplikasi Mbile</li>
                                        </ul>
                                    </div>
                                    <div class="popover-btns">
                                        <a href="#" class="btn green radius-10" onclick="handleEnrolledButton()">Get
                                            enrolled</a>
                                        <button type="button" class="wishlist-btn " title="Add to wishlist"
                                            onclick="handleWishList(this)" id="18"><i class="fas fa-heart"></i></button>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="course-box-wrap">
                            <a onclick="return check_action(this);"
                                href="http://dutatechnology.com:2280/lmsbaru/home/course/pwl/17" class="has-popover">
                                <div class="course-box">
                                    <div class="course-image">
                                        <img src="http://dutatechnology.com:2280/lmsbaru/assets/frontend/default/img/course_thumbnail_placeholder.jpg"
                                            alt="" class="img-fluid">
                                    </div>
                                    <div class="course-details">
                                        <h5 class="title">PWL</h5>
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <div class="d-inline-block">
                                                <span class="text-dark ms-1 text-15px">(0)</span>
                                                <span class="text-dark text-12px text-muted ms-2">(0 Reviews)</span>
                                            </div>
                                        </div>
                                        <div class="d-flex text-dark">
                                            <div class="">
                                                <i class="far fa-clock text-14px"></i>
                                                <span class="text-muted text-12px">00:33:51 Hours</span>
                                            </div>
                                            <div class="ms-3">
                                                <i class="far fa-list-alt text-14px"></i>
                                                <span class="text-muted text-12px">3 Lectures</span>
                                            </div>
                                        </div>

                                        <div class="row mt-3">
                                            <div class="col-6">
                                                <span class="badge badge-sub-warning text-11px">Beginner</span>
                                            </div>
                                            <div class="col-6 text-end">
                                                <button class="brn-compare-sm"
                                                    onclick="return check_action(this, 'http://dutatechnology.com:2280/lmsbaru/home/compare?course-1=pwl&&course-id-1=17');"><i
                                                        class="fas fa-balance-scale"></i> Compare</button>
                                            </div>
                                        </div>

                                        <hr class="divider-1">

                                        <div class="d-block">
                                            <div class="floating-user d-inline-block">
                                                <img src="http://dutatechnology.com:2280/lmsbaru/uploads/user_image/placeholder.png"
                                                    width="30px" data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="luqman affandi"
                                                    onclick="return check_action(this,'http://dutatechnology.com:2280/lmsbaru/home/instructor_page/1');">
                                            </div>



                                            <p class="price text-right d-inline-block float-end">Free</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <div class="webui-popover-content">
                                <div class="course-popover-content">
                                    <div class="last-updated">Last updated Mon, 30-May-2022</div>

                                    <div class="course-title">
                                        <a class="text-decoration-none text-15px"
                                            href="http://dutatechnology.com:2280/lmsbaru/home/course/pwl/17">PWL</a>
                                    </div>
                                    <div class="course-meta">
                                        <span class=""><i class="fas fa-play-circle"></i>
                                            3 Lessons </span>
                                        <span class=""><i class="far fa-clock"></i>
                                            00:33:51 Hours </span>
                                        <span class=""><i class="fas fa-closed-captioning"></i>English</span>
                                    </div>
                                    <div class="course-subtitle">PWL</div>
                                    <div class="what-will-learn">
                                        <ul>
                                            <li>Membuat Web</li>
                                        </ul>
                                    </div>
                                    <div class="popover-btns">
                                        <a href="#" class="btn green radius-10" onclick="handleEnrolledButton()">Get
                                            enrolled</a>
                                        <button type="button" class="wishlist-btn " title="Add to wishlist"
                                            onclick="handleWishList(this)" id="17"><i class="fas fa-heart"></i></button>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="course-box-wrap">
                            <a onclick="return check_action(this);"
                                href="http://dutatechnology.com:2280/lmsbaru/home/course/pemrograman-web/16"
                                class="has-popover">
                                <div class="course-box">
                                    <div class="course-image">
                                        <img src="http://dutatechnology.com:2280/lmsbaru/assets/frontend/default/img/course_thumbnail_placeholder.jpg"
                                            alt="" class="img-fluid">
                                    </div>
                                    <div class="course-details">
                                        <h5 class="title">Pemrograman Web</h5>
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <div class="d-inline-block">
                                                <span class="text-dark ms-1 text-15px">(0)</span>
                                                <span class="text-dark text-12px text-muted ms-2">(0 Reviews)</span>
                                            </div>
                                        </div>
                                        <div class="d-flex text-dark">
                                            <div class="">
                                                <i class="far fa-clock text-14px"></i>
                                                <span class="text-muted text-12px">00:01:00 Hours</span>
                                            </div>
                                            <div class="ms-3">
                                                <i class="far fa-list-alt text-14px"></i>
                                                <span class="text-muted text-12px">5 Lectures</span>
                                            </div>
                                        </div>

                                        <div class="row mt-3">
                                            <div class="col-6">
                                                <span class="badge badge-sub-warning text-11px">Beginner</span>
                                            </div>
                                            <div class="col-6 text-end">
                                                <button class="brn-compare-sm"
                                                    onclick="return check_action(this, 'http://dutatechnology.com:2280/lmsbaru/home/compare?course-1=pemrograman-web&&course-id-1=16');"><i
                                                        class="fas fa-balance-scale"></i> Compare</button>
                                            </div>
                                        </div>

                                        <hr class="divider-1">

                                        <div class="d-block">
                                            <div class="floating-user d-inline-block">
                                                <img style="margin-left: 0px;" class="position-absolute"
                                                    src="http://dutatechnology.com:2280/lmsbaru/uploads/user_image/placeholder.png"
                                                    width="30px" data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="luqman affandi"
                                                    onclick="return check_action(this,'http://dutatechnology.com:2280/lmsbaru/home/instructor_page/1');">
                                                <img style="margin-left: 17px;" class="position-absolute"
                                                    src="http://dutatechnology.com:2280/lmsbaru/uploads/user_image/placeholder.png"
                                                    width="30px" data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Nasrul  Firdaus"
                                                    onclick="return check_action(this,'http://dutatechnology.com:2280/lmsbaru/home/instructor_page/2');">
                                            </div>



                                            <p class="price text-right d-inline-block float-end">Free</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <div class="webui-popover-content">
                                <div class="course-popover-content">
                                    <div class="last-updated">Last updated Mon, 30-May-2022</div>

                                    <div class="course-title">
                                        <a class="text-decoration-none text-15px"
                                            href="http://dutatechnology.com:2280/lmsbaru/home/course/pemrograman-web/16">Pemrograman
                                            Web</a>
                                    </div>
                                    <div class="course-meta">
                                        <span class=""><i class="fas fa-play-circle"></i>
                                            5 Lessons </span>
                                        <span class=""><i class="far fa-clock"></i>
                                            00:01:00 Hours </span>
                                        <span class=""><i class="fas fa-closed-captioning"></i>English</span>
                                    </div>
                                    <div class="course-subtitle"></div>
                                    <div class="what-will-learn">
                                        <ul>
                                        </ul>
                                    </div>
                                    <div class="popover-btns">
                                        <a href="#" class="btn green radius-10" onclick="handleEnrolledButton()">Get
                                            enrolled</a>
                                        <button type="button" class="wishlist-btn " title="Add to wishlist"
                                            onclick="handleWishList(this)" id="16"><i class="fas fa-heart"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script type="text/javascript">
        function handleWishList(elem) {

        $.ajax({
            url: 'http://dutatechnology.com:2280/lmsbaru/home/handleWishList',
            type: 'POST',
            data: {
                course_id: elem.id
            },
            success: function(response) {
                if (!response) {
                    window.location.replace("http://dutatechnology.com:2280/lmsbaru/login");
                } else {
                    if ($(elem).hasClass('active')) {
                        $(elem).removeClass('active')
                    } else {
                        $(elem).addClass('active')
                    }
                    $('#wishlist_items').html(response);
                }
            }
        });
    }

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
                if ($(elem).hasClass('addedToCart')) {
                    $('.big-cart-button-' + elem.id).removeClass('addedToCart')
                    $('.big-cart-button-' + elem.id).text("Add to cart");
                } else {
                    $('.big-cart-button-' + elem.id).addClass('addedToCart')
                    $('.big-cart-button-' + elem.id).text("Added to cart");
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

    function handleEnrolledButton() {
        $.ajax({
            url: 'http://dutatechnology.com:2280/lmsbaru/home/isLoggedIn',
            success: function(response) {
                if (!response) {
                    window.location.replace("http://dutatechnology.com:2280/lmsbaru/login");
                }
            }
        });
    }

    $(document).ready(function() {
        if (!/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
            if ($(window).width() >= 840) {
                $('a.has-popover').webuiPopover({
                    trigger: 'hover',
                    animation: 'pop',
                    placement: 'horizontal',
                    delay: {
                        show: 500,
                        hide: null
                    },
                    width: 330
                });
            } else {
                $('a.has-popover').webuiPopover({
                    trigger: 'hover',
                    animation: 'pop',
                    placement: 'vertical',
                    delay: {
                        show: 100,
                        hide: null
                    },
                    width: 335
                });
            }
        }

        if ($(".course-carousel")[0]) {
            $(".course-carousel").slick({
                dots: false,
                infinite: false,
                speed: 300,
                slidesToShow: 4,
                slidesToScroll: 4,
                swipe: false,
                touchMove: false,
                responsive: [
                    { breakpoint: 840, settings: { slidesToShow: 3, slidesToScroll: 3, }, },
                    { breakpoint: 620, settings: { slidesToShow: 2, slidesToScroll: 2, }, },
                    { breakpoint: 480, settings: { slidesToShow: 1, slidesToScroll: 1, }, },
                ],
            });
        }

        if ($(".top-istructor-slick")[0]) {
            $(".top-istructor-slick").slick({
                dots: false
            });
        }
    });
    </script>

    {{-- FOOTER --}}
    @include('home.layouts.footer')


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

    <script src="{{ asset('assets/frontend/js/modernizr-3.5.0.min.js') }}">
    </script>
    <script src="{{ asset('assets/frontend/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('assets/frontend/js/slick.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/jquery.webui-popover.min.js') }}">
    </script>


    <script src="{{ asset('assets/frontend/js/main.js') }}"></script>
    <script src="{{ asset('assets/global/toastr/toastr.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/jquery.form.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/jQuery.tagify.js') }}"></script>

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