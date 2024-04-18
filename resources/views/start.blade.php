
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

    <section>
        <div class="container">
            <!-- Title -->
            <div class="inner-container-small text-center mb-4 mb-md-6">
                <h2>How it works in <span class="text-primary">4</span> easy steps</h2>
            </div>

            <div class="row step-process">
                <!-- Step item -->
                <div class="col-sm-6 col-lg-3">
                    <div class="card card-body bg-transparent text-center">
                        <!-- Icon -->
                        <div class="icon-lg bg-dark text-white rounded-circle mb-3 mx-auto">
                            <i class="bi bi-search fa-lg"></i>
                        </div>
                        <h5>Discovery and Consultation</h5>
                        <p>We begin by getting to know your unique requirements, goals, and challenges. </p>
                    </div>
                </div>

                <!-- Step item -->
                <div class="col-sm-6 col-lg-3">
                    <div class="card card-body bg-transparent text-center">
                        <!-- Icon -->
                        <div class="icon-lg bg-dark text-white rounded-circle mb-3 mx-auto">
                            <i class="bi bi-bullseye fa-lg"></i>
                        </div>
                        <h5>Planning and Strategy</h5>
                        <p>We define project milestones and deliverables to keep the process on track.</p>
                    </div>
                </div>

                <!-- Step item -->
                <div class="col-sm-6 col-lg-3">
                    <div class="card card-body bg-transparent text-center">
                        <!-- Icon -->
                        <div class="icon-lg bg-dark text-white rounded-circle mb-3 mx-auto">
                            <i class="bi bi-rocket-takeoff fa-lg"></i>
                        </div>
                        <h5>Deployment and Launch</h5>
                        <p>We ensure a smooth transition to the live, providing support every step of the way.</p>
                    </div>
                </div>

                <!-- Step item -->
                <div class="col-sm-6 col-lg-3">
                    <div class="card card-body bg-transparent text-center">
                        <!-- Icon -->
                        <div class="icon-lg bg-dark text-white rounded-circle mb-3 mx-auto">
                            <i class="bi bi-headset fa-lg"></i>
                        </div>
                        <h5>Support and Maintenance</h5>
                        <p>We offer ongoing support and maintenance services to keep your software running.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

{{--

<main class="container mt-5">
    <div class="row mb-2">
        <div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">

                    <h3 class="mb-0">Запчасти для лфитов и эскалаторов</h3>

                    <p class="card-text mb-auto">
                        ПартЛидер предлагает запасные части для любых лифтов и эскалаторов
                    </p>
                    <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
                        Оставить заявку

                    </a>
                </div>
                <div class="col-auto d-none d-lg-block p-3">
                     <img src="images/illustr001.jpg" style="max-height: 250px;"  class="object-fit-fill border rounded" alt="...">

                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">

                    <h3 class="mb-0">Запчасти для лфитов и эскалаторов</h3>

                    <p class="card-text mb-auto">
                        ПартЛидер предлагает запасные части для любых лифтов и эскалаторов
                    </p>
                    <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
                        Оставить заявку

                    </a>
                </div>
                <div class="col-auto d-none d-lg-block p-3">
                    <img src="images/illustr001.jpg" style="max-height: 250px;"  class="object-fit-fill border rounded" alt="...">

                </div>
            </div>
        </div>
    </div>
</main>

--}}

    <div class="" style="background-image: url(/images/bg1.png); background-color: #163649;  width: 100%;   ">




       {{-- <div class="row g-0  position-relative bg-transparent">
            <div class="col-md-3 mb-md-0 p-md-4 ">
                <img src="images/illustr001.jpg"  class="object-fit-fill border rounded" alt="...">
            </div>
            <div class="col-md-8 p-4 ps-md-0 mx-auto">
                <h1 style="color: white;" class=" col-lg-8 mx-auto ">Запчасти для любых лифтов и эскалаторов</h1>

                <p style="color: white;" class="col-lg-8 mx-auto lead">
                    Компания, специализирующаяся на продаже запчастей для лифтов и эскалаторов, предлагает широкий ассортимент продукции для обслуживания и ремонта подъемного оборудования различных марок. Она обеспечивает доступ к оригинальным комплектующим и заменителям, подходящим для моделей от ведущих мировых производителей, таких как Otis, Kone, Mitsubishi Electric и других. Это позволяет своевременно проводить техническое обслуживание и предотвращать серьезные поломки, что способствует безопасности и долговечности оборудования. Компания также предлагает услуги доставки по всей стране, что делает процесс приобретения запчастей удобным и эффективным.
                </p>
            </div>
        </div>--}}


        <div class="p-5 text-start ">
            <div class="container py-5">

                <h1 style="color: white;" class=" col-lg-8 mx-auto ">Запчасти для любых лифтов и эскалаторов</h1>

                <p style="color: white;" class="col-lg-8 mx-auto lead">
            Компания, специализирующаяся на продаже запчастей для лифтов и эскалаторов, предлагает широкий ассортимент продукции для обслуживания и ремонта подъемного оборудования различных марок. Она обеспечивает доступ к оригинальным комплектующим и заменителям, подходящим для моделей от ведущих мировых производителей, таких как Otis, Kone, Mitsubishi Electric и других. Это позволяет своевременно проводить техническое обслуживание и предотвращать серьезные поломки, что способствует безопасности и долговечности оборудования. Компания также предлагает услуги доставки по всей стране, что делает процесс приобретения запчастей удобным и эффективным.
        </p>

            </div>
        </div>
    </div>





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
