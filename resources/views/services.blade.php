@extends('layouts.app')

@section('title', 'index')

@section('css')
@vite([
'resources/css/services.css',
])
@endsection()


@section('content')
<h2 class="service_title">زموږ خدمات</h2>

<section id="services">

    <!-- <div id="Hero-div"></div> -->
    <div id="Desghin-map" class="service">

        <img src="{{ asset('image/services/design2.png')}} " alt="">

        <div class="service-info">
            <h4 class="service-name">انجینری ډیزاین او نقشه جوړونه</h4>
            <p class="service-real-info">موژ مسلکی انجینری ډیزاین او نقشه جوړوو چی ستا پروژه خوندی ، معیاری او عصری
                وی.</p>
        </div>
    </div>

    <div id="constraction" class="service">
        <img src="{{ asset('image/services/c1.png')}} " alt="">
        <div class="service-info">
            <h3 class="service-name"> ودانیز پروژو جوړول</h3>
            <p class="service-real-info"> موژ د کورونو، تجارتی ودانیو او نورو ساختمانی پروژو بشپړ جوړول ترسره کوو،
                له بنسټ څخه تر پای پوری په لوړ کیفیت.</p>
        </div>
    </div>



    <div id="renovation" class="service">

        <img src="{{ asset('image/services/renovation.png')}} " alt="">

        <div class="service-info">
            <h3 class="service-name"> او رینویشن</h3>
            <p class="service-real-info">که ته غواړی خپله زړه ودانی نوی کړی، موژ ستا لپاره بشپړ ترمیم او عصری کول
                ترسره کوو.</p>
        </div>
    </div>

    <div id="constraction-consulting" class="service">

        <img src="{{ asset('image/services/consulting.png')}} " alt="">

        <div class="service-info">
            <h3 class="service-name">ساختمانی مشوره</h3>
            <p class="service-real-info">که ته پروژه پیل کوی ، موژ درته مسلکی مشوره درکوو تر څو ښه پلان ، کم مصرف او
                ښه نتیجه ولری.</p>
        </div>
    </div>

</section>
@endsection()

@section('js')
<script src="{{ asset('js/header_hambergarMenu.js')}}"></script>
@endsection()