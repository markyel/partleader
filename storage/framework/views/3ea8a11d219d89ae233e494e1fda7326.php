

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link rel="stylesheet" href="<?php echo e(asset('resources/sass/app.scss')); ?>"> -->


    <title>Document</title>
    <!-- Scripts -->

    <?php echo app('Illuminate\Foundation\Vite')(['resources/sass/app.scss', 'resources/js/app.js']); ?>




</head>
<body class=" m-0 border-0 bd-example m-0 border-0 bd-example-cols">


<div class="container  p-4 align-self-center  w-75">
    <div class="row  align-items-center  " >
        <div class="float-md-right align-items-center  col "  style="width: 30%;">
            <a class="" href="<?php echo e(route('start.index')); ?>"><img src="<?php echo e(asset('/images/logo2.svg')); ?>" width="100%" ></a>
<!--            <img src="<?php echo e(asset('/images/logo2.svg')); ?>" width="371" height="70">-->
        </div>
        <div  class="text-center d-flex col align-items-center "  style="width: 10%;">
            <a class="" href="<?php echo e(route('start.index')); ?>"><img src="<?php echo e(asset('/images/logo3.svg')); ?>" width="50%"  class="mx-auto "></a>
<!--            <img src="<?php echo e(asset('/images/logo3.svg')); ?>" width="129" height="104" class="mx-auto ">-->
        </div>
        <div class="text-center d-flex align-items-center col  " style="width: 50%;">
            <a class="" href="<?php echo e(route('start.index')); ?>"><img src="<?php echo e(asset('/images/titletext2.svg')); ?>" width="100%"  class="align-middle"></a>
<!--            <img src="<?php echo e(asset('/images/titletext2.svg')); ?>" width="365" height="61" class="align-middle">-->
        </div>
    </div>
</div>

<div class="mt-1 mb-3">
    <ul class="nav me-auto mb-2 mb-lg-0 justify-content-center nav-underline ">
        <!--        <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Active</a>
                </li>-->
        <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('about.index')); ?>">О нас</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('product.index')); ?>">Ассортимент и цены</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('delivery.index')); ?>">Оплата и доставка</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('guarantee.index')); ?>">Гарантия</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('docs.index')); ?>">Документы</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('partner.index')); ?>">Стать поставщиком</a>
        </li>

    </ul>
</div>


<div class=" " style="background: #163649 center no-repeat ; width: 100%; height: 90px; padding-top: 10px;">

    <div class="row justify-content-md-center"
         style="background: url(/images/bg003.svg) center no-repeat;  width: 100%; height: 70px;">
    </div>


</div>














        <?php echo $__env->yieldContent('pagecontent'); ?>









<div class="row justify-content-md-center  m-0 p-0 w-100 bg-dark" style="background: url(/images/botbg.svg) #163649 center repeat-x ; width: 100%; height: 400px;" >


    <div class="row d-flex  justify-content-md-center m-0 p-0">
        <div class="col col-lg  h-100 d-inline-block d-flex align-items-center ">
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

        <div class="col col-lg d-flex align-items-center p-5  " >
            <nav class="navbar  ms-5 border-body" data-bs-theme="navbar-light">
            <ul class="nav flex-column ms-5" >
                <!--        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Active</a>
                        </li>-->
                <li class="nav-item">
                    <a class="nav-link text-light fs-6" href="<?php echo e(route('about.index')); ?>">О нас</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light fs-6" href="<?php echo e(route('product.index')); ?>">Ассортимент и цены</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light fs-6" href="<?php echo e(route('delivery.index')); ?>">Оплата и доставка</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light fs-6" href="<?php echo e(route('guarantee.index')); ?>">Гарантия</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light fs-6" href="<?php echo e(route('docs.index')); ?>">Документы</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light fs-6" href="<?php echo e(route('partner.index')); ?>">Стать поставщиком</a>
                </li>

            </ul>
</nav>

        </div>
    </div>



</div>






</body>
</html>
<?php /**PATH C:\Work\PartLeader\PartLeader-app\resources\views/layouts/main.blade.php ENDPATH**/ ?>