
@extends('layouts.app')

@section('title', 'index')

@section('css')
@vite([
    'resources/css/style.css',
    'resources/css/can_do.css',
    'resources/css/technology.css',
    'resources/css/project.css',
])
@endsection()


@section('content')

    <section id="hero_section">
        <div id="info" class="hero_item">
            <h2>سلام زه <span>محمد فهیم</span></h2>
            <h4>یو سافټویر انجینر او د سافټویر پواسطه مشکل حل کوونکی، چې کولی شم مدیریتي سیستمونه، ډیسکټاپ اپلیکیشنونه،
                ویبسایټونه او د ماشین زده کړې ماډلونه (AI) جوړ کړم.</h4>
        </div>
        <div id="image" class="hero_item">
            <div class="hero-avatar">
                <img id="heroImage" src="image/hero_section/8.jpg" alt="محمد فهیم">
            </div>
        </div>
    </section>


    <section class="cards-section">
        <div class="section-badge">
            <h2>✦ زموږ خدمات چی تاسو ته یی وړاندی کوو✦</h2>
        </div>

        <div class="cards-grid">

        </div>
    </section>

    <section id="projects">
        <h2 class="section-title">✦ پروژې ✦</h2>

        <div class="projects-grid">
        </div>
    </section>

    <section id="skills-section">
        <div class="section-title">
            <h2>✦ زموږ تخنیکي مهارتونه ✦</h2>
            <h6>د لاندی تکنالوژیو په استفاده مو پروژې ډيولپ کوو ، چی پدی برخه شی تجربی په لرلو سره کار کوو.</h6>
        </div>
        <div class="skills-grid">
        </div>
    </section>
@endsection()

@section('js')
    <script src="{{ asset('js/Home_Service.js')}}"></script>
    <script src="{{ asset('js/Skill_cards.js')}}"></script>
    <script src=" {{ asset('js/projects.js')}}"></script>
    <script src="{{ asset('js/Hambergar.js')}}"></script>
    <script src="{{ asset('js/Hero_Image.js')}}"></script>
@endsection()

