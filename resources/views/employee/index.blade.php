@extends('layouts.app')

@section('title', 'index')

@section('css')
@vite([
'resources/css/team.css',
])
@endsection()


@section('content')

<main class="container fade">
    <div class="team-header">
        <h1>زموږ مسلکي ټیم</h1>
        <p>تجربه لرونکي انجینران، ماهر کارګران او تخلیقي ډیزاینران ستاسو د پروژو لپاره چمتو دي.</p>
    </div>


    <div class="team-grid">
        <div class="team-card">
            <div class="team-img">
                <img src="{{ asset('image/about/1.png')}} " alt="">
            </div>
            <div class="team-info">
                <h3>انجینر محمد کریم</h3>
                <span class="team-role">د پروژې مدیریت</span>
                <p class="team-desc">له ۹ کلونو څخه زیاتې تجربې په لویو پروژو کې، د پروژو مدیریت او د ساحوي ستونزو
                    حل.</p>
                <div class="team-social">
                    <a href="#"><i class="fab fa-whatsapp"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-telegram"></i></a>
                </div>
            </div>
        </div>


        <div class="team-card">
            <div class="team-img">
                <img src="{{ asset('image/about/1.png')}} " alt="">
            </div>
            <div class="team-info">
                <h3>انجنیر محب الله</h3>
                <span class="team-role">د شرکت معاون</span>
                <p class="team-desc">سابټ انجنیر، ۵ کاله تجربه </p>
                <div class="team-social">
                    <a href="#"><i class="fab fa-whatsapp"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-telegram"></i></a>
                </div>
            </div>
        </div>

        <!-- غړی 3 - ساحوي انجینر -->
        <div class="team-card">
            <div class="team-img">
                <img src="{{ asset('image/about/1.png')}} " alt="">
            </div>
            <div class="team-info">
                <h3>انجنیر روح الله</h3>
                <span class="team-role">مالی او همکار</span>
                <p class="team-desc">د اقتصاد پوهنځی فارغ ، ۴ کاله تجربه ، نورو برخو هم همکار دی.</p>
                <div class="team-social">
                    <a href="#"><i class="fab fa-whatsapp"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-telegram"></i></a>
                </div>
            </div>
        </div>

</main>

<div class="values-section">
    <h2><i></i> زموږ مسلکي ژمنه</h2>
    <div class="values">
        <div class="value-item"><i class="fas fa-hard-hat"></i> خوندیتوب</div>
        <div class="value-item"><i class="fas fa-stopwatch"></i> پر وخت تحویلي</div>
        <div class="value-item"><i class="fas fa-medal"></i> کیفیت لرونکی کار</div>
        <div class="value-item"><i class="fas fa-users"></i> مسلکي ټیم کار</div>
    </div>
    <p style="margin-top: 1.5rem; color:#94a3b8;">زموږ ټیم له بېلابېلو برخو څخه غوره متخصصین راټول کړي — هر
        یو
        خپل مهارت سره مرسته کوي.</p>
</div>
@endsection()


@section('js')
<script src="{{ asset('js/header_hambergarMenu.js')}}"></script>
@endsection()