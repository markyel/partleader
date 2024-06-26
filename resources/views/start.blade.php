
@extends('layouts.main')
@section('pagecontent')
    {{--padding: 50px 150px;--}}

    <div class="container my-5">
        <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
            <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
                <h1 class="display-5 fw-bold lh-1 text-body-emphasis">Запчасти для лифитов и эскалаторов</h1>
                <p class="lead">
                    ПартЛидер специализиется на продаже запчастей для лифтов и эскалаторов, предлагает широкий ассортимент продукции для обслуживания и ремонта подъемного оборудования различных марок.
                    </p>

            </div>
            <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg ">
                <img class="rounded-lg-3" src="images/illustr002.jpg" alt="" width="675">
            </div>
        </div>
    </div>

   {{-- <style>
        .icon-lg {
            width: 3.5rem;
            height: 3.5rem;
            line-height: 3.5rem;
            text-align: center;
            font-size: 1.2rem;
        }

        .rounded-circle {
            border-radius: 50% !important;
        }
        @media (min-width: 992px)
        .step-process > *:not(:last-child):before {
            display: block;
        }

        .step-process > *::before {
            content: "";
            border: 1px dashed var(--bs-gray);
            width: 90%;
            position: absolute;
            top: 50px;
            -webkit-transform: translateX(50%);
            transform: translateX(50%);
            z-index: -1;
            display: block;
        }
        .inner-container-small {
            max-width: 700px;
            margin-right: auto;
            margin-left: auto;
        }

        .step-process > * {
            position: relative;
        }

        @media (min-width: 992px)
        .col-lg-3 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 25%;
        }

        .col-sm-6 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: 50%;
        }

        *, *::before, *::after {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }




    </style>--}}

    <style>
        .stepper-wrapper {
            margin-top: auto;
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }
        .stepper-item {
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            flex: 1;

            @media (max-width: 768px) {
                font-size: 16px;
            }
        }

        .stepper-item::before {
            position: absolute;
            content: "";
            border-bottom: 7px dotted #ccc;
            width: 100%;
            top: 35px;
            left: -50%;
            z-index: 2;
        }

        .stepper-item::after {
            position: absolute;
            content: "";
            border-bottom: 7px dotted #ccc;
            width: 100%;
            top: 35px;
            left: 50%;
            z-index: 2;
        }

        .stepper-item .step-counter {
            position: relative;
            z-index: 5;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background: #ccc;
            margin-bottom: 13px;
        }

        .stepper-item.active {
            font-weight: bold;
        }

        .stepper-item.completed .step-counter {
            background-color: #a23838;
        }

        .stepper-item.completed::after {
            position: absolute;
            content: "";
            border-bottom: 7px dotted #a23838;
            width: 100%;
            top: 35px;
            left: 50%;
            z-index: 3;
        }

        .stepper-item:first-child::before {
            content: none;
        }
        .stepper-item:last-child::after {
            content: none;
        }

        .fa-lg{
            width: 6.5rem;
            height: 6.5rem;
            font-size: 2.25em;
            line-height: .5em;
            vertical-align: -.475em;
            box-sizing: border-box;
        }
        .rounded-circle {
            border-radius: 50% !important;
        }

        .icon-lg {
            width: 4rem;
            height: 4rem;
            line-height: 3.0rem;
            text-align: center;
            font-size: 0.8rem;
            background-color: #0082de;
        }
    </style>

    {{--<div class="stepper-wrapper">
        <div class="stepper-item completed">
            <div class="step-counter">
                <div class="icon-lg  text-white rounded-circle mb-3 mx-auto">

                    <i class="bi bi-gear-fill fa-lg" ></i>
                    --}}{{--<i class="bi bi-search fa-lg" ></i>--}}{{--
                </div>
            </div>
            <div class="step-name">Вы присылаете заявку</div>
        </div>

     --}}{{--   <div class="stepper-item completed">
            <div class="step-counter">
                <div class="icon-lg  text-white rounded-circle mb-3 mx-auto">
                    <i class="bi bi-search fa-lg"></i>

                </div>
            </div>
            <div class="step-name">Мы собираем предложения</div>
        </div>--}}{{--

        <div class="stepper-item  completed">
            <div class="step-counter">
                <div class="icon-lg  text-white rounded-circle mb-3 mx-auto">
                    <i class="bi bi-bar-chart-fill fa-lg"></i>
                </div>
            </div>
            <div class="step-name">Сбор информации и анализ рынка</div>
        </div>
        <div class="stepper-item completed">
            <div class="step-counter">
                <div class="icon-lg  text-white rounded-circle mb-3 mx-auto">
                    <i class="bi bi-receipt fa-lg"></i>
                </div>
            </div>
            <div class="step-name">Оптимальное предложение</div>
        </div>
    </div>--}}






    <div class="" style="background-image: url(/images/bg1.png); background-color: #163649;  width: 100%;   ">







        <div class="p-5 text-start ">
            <div class="container py-5">

                <h1 style="color: white;" class=" col-lg-8 mx-auto ">
                    Широкий ассортимент запчастей</h1>

                <p style="color: white;" class="col-lg-8 mx-auto lead">
            ПартЛидер предлагает широкий ассортимент продукции для обслуживания и ремонта подъемного оборудования различных марок. ПартЛидер обеспечивает поставку оригинальныъ комплектующиъ и аналогов, подходящим для моделей от ведущих мировых производителей, таких как Otis, Kone, Mitsubishi Electric и других.
                    Это позволяет своевременно проводить техническое обслуживание и предотвращать серьезные поломки, что способствует безопасности и долговечности оборудования.
                    Компания ПартЛидер также предлагает услуги доставки по всей стране, что делает процесс приобретения запчастей удобным и эффективным.
        </p>

            </div>
        </div>
    </div>


    <section>
        <div class="container mt-5">
            <!-- Title -->
            <div class="inner-container-small text-center mb-4 mb-md-6">
                <h2>Как работает ПартЛидер </h2>
            </div>

            <div class="row ">
                <!-- Step item -->
                <div class="col-sm-6 col-lg-3 ">
                    <div class="card card-body bg-transparent text-center border-0">
                        <!-- Icon -->
                        <div class="icon-lg  text-white rounded-circle mb-3 mx-auto">
                            <i class="bi bi-patch-question-fill fa-lg"></i>
                        </div>
                        <h5>Заявка</h5>
                        <p>Вы присылаете заявку на интересующие Вас лифтовые запчасти</p>
                    </div>
                </div>

                <!-- Step item -->
                <div class="col-sm-6 col-lg-3">
                    <div class="card card-body bg-transparent text-center border-0">
                        <!-- Icon -->
                        <div class="icon-lg  text-white rounded-circle mb-3 mx-auto">
                            <i class="bi bi-search fa-lg"></i>
                        </div>
                        <h5>Сбор предложений</h5>
                        <p>Мы ищем и собираем информацию о наличии запрошенных запчастей у различных поставщиков</p>
                    </div>
                </div>

                <!-- Step item -->
                <div class="col-sm-6 col-lg-3">
                    <div class="card card-body bg-transparent text-center border-0">
                        <!-- Icon -->
                        <div class="icon-lg  text-white rounded-circle mb-3 mx-auto">
                            <i class="bi bi-bar-chart-fill fa-lg"></i>
                        </div>
                        <h5>Анализ</h5>
                        <p>Мы анализируем собранные данные и выбираем оптимальных поставщиков по запрошенной номенклатуре</p>
                    </div>
                </div>

                <!-- Step item -->
                <div class="col-sm-6 col-lg-3 ">

                    <div class="card card-body bg-transparent text-center border-0">
                        <!-- Icon -->
                        <div class="icon-lg  text-white rounded-circle mb-3 mx-auto">
                            <i class="bi bi-receipt fa-lg"></i>
                        </div>
                        <h5>Продажа</h5>
                        <p>Вы получаете запрошенную номенклатуру по оптмальным ценам </p>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <div class="p-5 text-start bg-body-tertiary">
        <div class="container py-5">
            <h1 class="text-body-emphasis col-lg-8 mx-auto ">Как найти наиболее выгодное предложение на поставку нужных запчастей для лифта или эскалатора?</h1>
            <p class="col-lg-8 mx-auto lead">

                Оформите заявку на получение ценового предложения от ПартЛидер. От Вас больше ничего не требуется. Все остальные действия сделает ПартЛидер.
            </p>
            <p class="col-lg-8 mx-auto lead">
                Для каждой позиции Вашей заявки будет найдено оптимальное ценовое предложение от одного из наших партнеров. Затем предложения по всем запчастям консолидируются и Вы получаете оптимальное по сроку и цене коммерческое предложение.
            </p>
        </div>
    </div>






@endsection
