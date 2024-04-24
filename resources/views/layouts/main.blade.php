<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{--<!-- <link rel="stylesheet" href="{{asset('resources/sass/app.scss')}}"> -->--}}


    <title>Document</title>
    <!-- Scripts -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    {{--
    <script type="module" src="http://[::]:5173/@vite/client"></script><link rel="stylesheet" href="http://[::]:5173/resources/css/app.css" />

    <script type="module" src="http://[::]:5173/@vite/client"></script><script type="module" src="http://[::]:5173/resources/js/app.js"></script>
--}}
    {{--<script src="{{asset('node_modules/dropzone/dist/dropzone.js')}}"></script>--}}

    {{--
        <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/dropzone.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    --}}


</head>
<body class=" m-0 border-0 bd-example m-0 border-0 bd-example-cols">


<div class="container  p-4 align-self-center  w-75">
    <div class="row  align-items-center  ">
        <div class="float-md-right align-items-center  col " style="width: 30%;">
            <a class="" href="{{route('start.index')}}"><img src="{{asset('/images/logo2.svg')}}" width="100%"></a>
            <!--            <img src="{{asset('/images/logo2.svg')}}" width="371" height="70">-->
        </div>
        <div class="text-center d-flex col align-items-center " style="width: 10%;">
            <a class="" href="{{route('start.index')}}"><img src="{{asset('/images/logo3.svg')}}" width="50%"
                                                             class="mx-auto "></a>
            <!--            <img src="{{asset('/images/logo3.svg')}}" width="129" height="104" class="mx-auto ">-->
        </div>
        <div class="text-center d-flex align-items-center col  d-sm-none d-md-block  d-none d-sm-block" style="width: 50%;">
            <a class="" href="{{route('start.index')}}"><img src="{{asset('/images/titletext2.svg')}}" width="100%"
                                                             class="align-middle"></a>
            <!--            <img src="{{asset('/images/titletext2.svg')}}" width="365" height="61" class="align-middle">-->
        </div>
    </div>
</div>

{{--<div class="mt-1 mb-3">
    <ul class="nav me-auto mb-2 mb-lg-0 justify-content-center nav-underline ">
        <!--        <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Active</a>
                </li>-->
        <li class="nav-item">
            <a class="nav-link" href="{{route('about.index')}}">О нас</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('product.index')}}">Ассортимент и цены</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('delivery.index')}}">Оплата и доставка</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('guarantee.index')}}">Гарантия</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('docs.index')}}">Документы</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('partner.index')}}">Стать поставщиком</a>
        </li>

    </ul>
</div>--}}


<nav class="navbar navbar-expand-sm  sticky-top border-bottom" style="background-color: #e3f2fd;">
    <div class="container">
        <a class="navbar-brand d-md-none" href="#">
            <svg class="bi" width="24" height="24">
                <use xlink:href="#aperture"></use>
            </svg>

        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas"
                aria-controls="offcanvas" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvas" aria-labelledby="offcanvasLabel">
            <div class="offcanvas-header">
                {{--<h5 class="offcanvas-title" id="offcanvasLabel">Вверх</h5>--}}
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav flex-grow-1 justify-content-between">
                    <li class="nav-item"><a class="nav-link" href="#">
                            <svg class="bi" width="24" height="24">
                                <use xlink:href="#aperture"></use>
                            </svg>
                        </a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('about.index')}}">О нас</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('product.index')}}">Ассортимент</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('delivery.index')}}">Оплата и доставка</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{route('guarantee.index')}}">Гарантия</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('docs.index')}}">Документы</a></li>
                    {{--<li class="nav-item"><a class="nav-link" href="{{route('partner.index')}}">Сотрудничество</a></li>--}}
                    <li class="nav-item"><a class="nav-link" href="#">
                            <svg class="bi" width="24" height="24">
                                <use xlink:href="#cart"></use>
                            </svg>
                        </a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>





@yield('pagecontent')
<div class=" " style="background: #163649 center no-repeat ; width: 100%; height: 90px; padding-top: 10px;">

    <div class="row justify-content-md-center"
         style="background: url(/images/bg003.svg) center no-repeat;  width: 100%; height: 70px;">
    </div>


</div>

<style>
    h6 {
        font-family: sans-serif;
        color: #fff;
        font-size: 1.2rem;
        padding-left: 1rem;

    }

    .h-40px {
        height: 40px !important;
    }

    img, svg {
        vertical-align: middle;
    }

    .nav-link-b {
        display: block;
        padding: var(--bs-nav-link-padding-y) var(--bs-nav-link-padding-x);
        font-size: 0.938rem;;
        font-weight: 500;
        color: #c5c6cc;
        background: none;
        border: 0;
        -webkit-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out;
        transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out;
        text-decoration: none;

    }

    .nav-link-b:hover {
        text-decoration: none;
        color: #e07979;
    }
</style>


<footer class="bg-dark position-relative overflow-hidden pb-0 pt-6 pt-lg-8" data-bs-theme="dark"
        style="background: url({{asset('/images/botbg.svg')}}) #163649 center  repeat-x ; ">


    <div class="container position-relative mt-5">
        <div class="row g-4 justify-content-between">

            <!-- Widget 1 START -->
            <div class="col-lg-3">
                <!-- logo -->
                <a class="me-0" href="{{route('start.index')}}">
                    <img class="h-40px" src="images/botlogo.svg" alt="logo">
                    {{--<img class="dark-mode-item h-40px" src="images/botlogo.svg" alt="logo">--}}
                </a>

                <p class="mt-4 mb-2" style="color: var(--bs-body-color);">
                    Ваш надежный агент по закупкам лифтовых запчастей.

                </p>
            </div>
            <!-- Widget 1 END -->

            <!-- Widget 2 START -->
            <div class="col-lg-8 col-xxl-7">
                <div class="row g-3">
                    <!-- Link block -->
                    <div class="col-6 col-md-4">
                        <h6 class="mb-2 mb-md-4">Навигация</h6>
                        <ul class="nav flex-column">
                            <li class="nav-item"><a class="nav-link-b pt-0" href="{{route('about.index')}}">О нас</a>
                            </li>
                            <li class="nav-item"><a class="nav-link-b" href="{{route('product.index')}}">Ассортимент и
                                    цены</a></li>
                            <li class="nav-item"><a class="nav-link-b" href="{{route('delivery.index')}}">Оплата и
                                    доставка</a></li>
                            <li class="nav-item"><a class="nav-link-b" href="{{route('guarantee.index')}}">Гарантия</a>
                            </li>
                            <li class="nav-item"><a class="nav-link-b" href="{{route('docs.index')}}">Документы</a></li>
                            <li class="nav-item"><a class="nav-link-b" href="{{route('partner.index')}}">Стать
                                    поставщиком</a></li>

                        </ul>
                    </div>

                    <div class="col-md-5">
                        <h6 class="mb-2 mb-md-4">Связаться с нами</h6>
                        <div class="" style="padding-left: 1rem; color: #c5c6cc;">
                            <p>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                    <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
                                </svg> : +7 (495) 123-45-67
                            </p>
                            <p>

                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"/>
                                </svg> : <a class="nav-link-b" style="display: inline !important;" href="mailto:info@partleader.ru">info@partleader.ru</a>

                            </p>
                            <p>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                                    <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A32 32 0 0 1 8 14.58a32 32 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10"/>
                                    <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                                </svg> : 127549 Москва, ул. Бибиревская 4
                            </p>
                        </div>

                        <!-- Link block -->
                        {{-- <div class="col-6 col-md-4">
                             <h6 class="mb-2 mb-md-4" style="color: var(--bs-body-color);">Community</h6>
                             <ul class="nav flex-column">
                                 <li class="nav-item"><a class="nav-link pt-0" href="#">Documents</a></li>
                                 <li class="nav-item"><a class="nav-link" href="#">Supports <i class="bi bi-box-arrow-up-right small ms-1"></i></a></li>
                                 <li class="nav-item"><a class="nav-link" href="faq.html">Faqs</a></li>
                                 <li class="nav-item"><a class="nav-link" href="#">Privacy Policy</a></li>
                                 <li class="nav-item"><a class="nav-link" href="blog-grid.html">News and blogs</a></li>
                                 <li class="nav-item"><a class="nav-link" href="#">Terms &amp; condition</a></li>
                             </ul>
                         </div>--}}

                        <!-- Link block -->
                        {{--                  <div class="col-md-4">
                                              <h6 class="mb-2 mb-md-4">App available on</h6>
                                              <div class="row g-2 mt-2 mb-4 mb-sm-5">
                                                  <!-- Google play store button -->
                                                  <div class="col-5 col-sm-4 col-md-6">
                                                      <a href="#"> <img src="assets/images/elements/google-play.svg" alt=""> </a>
                                                  </div>
                                                  <!-- App store button -->
                                                  <div class="col-5 col-sm-4 col-md-6">
                                                      <a href="#"> <img src="assets/images/elements/app-store.svg" alt="app-store"> </a>
                                                  </div>
                                              </div>

                                              <!-- Social buttons -->
                                              <h6 class="mb-2 mb-md-4" style="color: var(--bs-body-color);">Follow on</h6>

                                              <ul class="list-inline mb-0 mt-3">
                                                  <li class="list-inline-item"> <a class="btn btn-xs btn-icon btn-light" href="#"><i class="fab fa-fw fa-facebook-f lh-base"></i></a> </li>
                                                  <li class="list-inline-item"> <a class="btn btn-xs btn-icon btn-light" href="#"><i class="fab fa-fw fa-instagram lh-base"></i></a> </li>
                                                  <li class="list-inline-item"> <a class="btn btn-xs btn-icon btn-light" href="#"><i class="fab fa-fw fa-twitter lh-base"></i></a> </li>
                                                  <li class="list-inline-item"> <a class="btn btn-xs btn-icon btn-light" href="#"><i class="fab fa-fw fa-linkedin-in lh-base"></i></a> </li>
                                                  <li class="list-inline-item"> <a class="btn btn-xs btn-icon btn-light" href="#"><i class="fab fa-fw fa-youtube lh-base"></i></a> </li>
                                              </ul>
                                          </div>--}}

                    </div>
                </div>
                <!-- Widget 2 END -->
            </div>

            <!-- Divider -->
            <hr class="mt-4 mb-0" style="color: #85878a;">

            <!-- Bottom footer -->
            <div class="d-md-flex justify-content-between align-items-center text-center text-lg-start py-4">
                <!-- copyright text -->
                <div class="text-body"> <i class="bi bi-0-circle"></i> Все права защищены <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-c-circle" viewBox="0 0 16 16">
                        <path d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.146 4.992c-1.212 0-1.927.92-1.927 2.502v1.06c0 1.571.703 2.462 1.927 2.462.979 0 1.641-.586 1.729-1.418h1.295v.093c-.1 1.448-1.354 2.467-3.03 2.467-2.091 0-3.269-1.336-3.269-3.603V7.482c0-2.261 1.201-3.638 3.27-3.638 1.681 0 2.935 1.054 3.029 2.572v.088H9.875c-.088-.879-.768-1.512-1.729-1.512"/>
                    </svg> 2024</div>
                <!-- copyright links-->
                <!-- Language selector -->
                {{--<div class="dropdown dropup text-center text-md-end mt-3 mt-md-0">
                    <a class="dropdown-toggle btn btn-sm btn-light mb-0" href="#" role="button" id="languageSwitcher" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-globe me-2"></i>Language
                    </a>
                    <ul class="dropdown-menu min-w-auto" aria-labelledby="languageSwitcher">
                        <li><a class="dropdown-item me-4" href="#"><img class="fa-fw me-2" src="assets/images/flags/uk.svg" alt="">English</a></li>
                        <li><a class="dropdown-item me-4" href="#"><img class="fa-fw me-2" src="assets/images/flags/gr.svg" alt="">German </a></li>
                        <li><a class="dropdown-item me-4" href="#"><img class="fa-fw me-2" src="assets/images/flags/sp.svg" alt="">French</a></li>
                    </ul>
                </div>--}}
            </div>
        </div>
    </div>
</footer>


{{--

<div class="row justify-content-md-center  m-0 p-0 w-100 " style="background: url(/images/botbg.svg) #163649 center repeat-x ; width: 100%; height: 400px;" >


    <div class="row d-flex  justify-content-md-center m-0 p-0">
        <div class="col col-lg   h-100 d-inline-block d-flex align-items-center col-xs-12 col-sm-8 col-md-8">
            <div class=" align-items-center p-5">
            <p class="text-light w-100">
            +7 (495) 222-22-22
            </p>

            <p class="text-light w-100">
                e-mail: info@partleader.ru
            </p>
            </div>
        </div>
        <div class="col col-lg d-flex align-items-center" style="background: url(/images/botlogo.svg)  center no-repeat ; width: 20%; max-width: 25%;">
<!--            <img src="/images/botlogo.svg">-->
        </div>

        <div class="col col-lg d-flex align-items-center p-5  col-xs-12 col-sm-8 col-md-8" >
            <nav class="navbar  ms-5 border-body" data-bs-theme="navbar-light">
            <ul class="nav flex-column ms-5" >
                <!--        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Active</a>
                        </li>-->
                <li class="nav-item">
                    <a class="nav-link text-light fs-6" href="{{route('about.index')}}">О нас</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light fs-6" href="{{route('product.index')}}">Ассортимент и цены</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light fs-6" href="{{route('delivery.index')}}">Оплата и доставка</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light fs-6" href="{{route('guarantee.index')}}">Гарантия</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light fs-6" href="{{route('docs.index')}}">Документы</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light fs-6" href="{{route('partner.index')}}">Стать поставщиком</a>
                </li>

            </ul>
</nav>

        </div>
    </div>



</div>

--}}


</body>
</html>
