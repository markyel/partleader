
@extends('layouts.main')
@section('pagecontent')
<style>

    .feature-icon {
        width: 4rem;
        height: 4rem;
        border-radius: .75rem;
    }

    .icon-square {
        width: 3rem;
        height: 3rem;
        border-radius: .75rem;
    }

    .text-shadow-1 { text-shadow: 0 .125rem .25rem rgba(0, 0, 0, .25); }
    .text-shadow-2 { text-shadow: 0 .25rem .5rem rgba(0, 0, 0, .25); }
    .text-shadow-3 { text-shadow: 0 .5rem 1.5rem rgba(0, 0, 0, .25); }

    .card-cover {
        background-repeat: no-repeat;
        background-position: center center;
        background-size: cover;
    }

    .feature-icon-small {
        width: 3rem;
        height: 3rem;
    }


    .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 0.5em 1.5em rgba(0, 0, 0, .1), inset 0 0.125em 0.5em rgba(0, 0, 0, .15);
    }
</style>
    <div class="">
        <div class="px-4 py-5 text-start bg-body-tertiary">
            <div class="container-fluid py-1">
                <h1 class="text-body-emphasis col-lg-8 mx-auto ">Оплата</h1>
                <p class="col-lg-8 mx-auto lead">
                    Мы принимаем оплату по безналичному расчету, что обеспечивает удобство и безопасность транзакций для наших клиентов. Вместе с товаром мы всегда отгружаем необходимые закрывающие документы, которые подтверждают законность и прозрачность сделки. Кроме того, мы работаем по ЭДО, что позволяет нам обрабатывать документы электронно, ускоряя процесс и снижая вероятность ошибок, связанных с бумажной работой.</p>
            </div>
        </div>
    </div>

<div class="b-example-divider"></div>

<div class="container px-4 py-5 col-lg-8 mx-auto" id="featured-3">
    <h1 class="pb-2 border-bottom">Способы Доставки</h1>
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
        <div class="feature col">
            <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary  bg-gradient fs-2 mb-3">
                <i class="bi bi-truck"></i>
            </div>
            <h3 class="fs-2 text-body-emphasis">Транспортная компания</h3>
            <p>Доставка осуществляется транспортной компание "до двери".
            До адреса Вашего нахождения или объекта, для которого заказаны запчасти.</p>
        </div>
        <div class="feature col">
            <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
                <i class="bi bi-geo-alt-fill"></i>
            </div>
            <h3 class="fs-2 text-body-emphasis">Пункт выдачи заказов</h3>
            <p>Вы можете заказать доставку до ПВЗ в Вашем городе. В этом случае не прийдется ждать курьера транспортной компании. Заказ можно забрать в удобное для Вас время.</p>
        </div>
        <div class="feature col">
            <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
                <i class="bi bi-building"></i>
            </div>
            <h3 class="fs-2 text-body-emphasis">Самовывоз</h3>
            <p>Вы можете забрать заказ из офиса нашей компании по факту его готовности к отгрузке.</p>
        </div>
    </div>
</div>

                <div class="b-example-divider"></div>











@endsection
