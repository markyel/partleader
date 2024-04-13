

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link rel="stylesheet" href="{{asset('resources/sass/app.scss')}}"> -->


    <title>Document</title>
    <!-- Scripts -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
{{--<script src="{{asset('node_modules/dropzone/dist/dropzone.js')}}"></script>--}}

{{--
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/dropzone.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
--}}



</head>
<body class=" m-0 border-0 bd-example m-0 border-0 bd-example-cols">


<div class="container  p-4 align-self-center  w-75">
    <div class="row  align-items-center  " >
        <div class="float-md-right align-items-center  col "  style="width: 30%;">
            <a class="" href="{{route('start.index')}}"><img src="{{asset('/images/logo2.svg')}}" width="100%" ></a>
<!--            <img src="{{asset('/images/logo2.svg')}}" width="371" height="70">-->
        </div>
        <div  class="text-center d-flex col align-items-center "  style="width: 10%;">
            <a class="" href="{{route('start.index')}}"><img src="{{asset('/images/logo3.svg')}}" width="50%"  class="mx-auto "></a>
<!--            <img src="{{asset('/images/logo3.svg')}}" width="129" height="104" class="mx-auto ">-->
        </div>
        <div class="text-center d-flex align-items-center col  " style="width: 50%;">
            <a class="" href="{{route('start.index')}}"><img src="{{asset('/images/titletext2.svg')}}" width="100%"  class="align-middle"></a>
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



<nav class="navbar navbar-expand-md  sticky-top border-bottom" style="background-color: #e3f2fd;" >
    <div class="container">
        <a class="navbar-brand d-md-none" href="#">
            <svg class="bi" width="24" height="24"><use xlink:href="#aperture"></use></svg>

        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas" aria-controls="offcanvas" aria-label="Toggle navigation">
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
                            <svg class="bi" width="24" height="24"><use xlink:href="#aperture"></use></svg>
                        </a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('about.index')}}">О нас</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('product.index')}}">Ассортимент</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('delivery.index')}}">Оплата и доставка</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('guarantee.index')}}">Гарантия</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('docs.index')}}">Документы</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('partner.index')}}">Сотрудничество</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">
                            <svg class="bi" width="24" height="24"><use xlink:href="#cart"></use></svg>
                        </a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>



<div class=" " style="background: #163649 center no-repeat ; width: 100%; height: 90px; padding-top: 10px;">

    <div class="row justify-content-md-center"
         style="background: url(/images/bg003.svg) center no-repeat;  width: 100%; height: 70px;">
    </div>


</div>














        @yield('pagecontent')






<div class="row justify-content-md-center  m-0 p-0 w-100 bg-dark" style="background: url(/images/botbg.svg) #163649 center repeat-x ; width: 100%; height: 400px;" >


    <div class="row d-flex  justify-content-md-center m-0 p-0">
        <div class="col col-lg  h-100 d-inline-block d-flex align-items-center col-xs-12 col-sm-8 col-md-8">
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





</body>
</html>
