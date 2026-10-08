@extends('layouts.app')

@section('title', 'index')


@section('css')
@vite([
'resources/css/style.css',
'resources/css/images.css',
'resources/css/Hero_section.css',
'resources/css/faq_section.css',
'resources/css/card-3.css',
'resources/css/Poeple_idea.css',
])
@endsection();


@section('content')

<section id="Hero_section">
    <div class="hero_div">

        <div class="company-name-image">
            <div id="company-name">
                <h1><b>ملی الماس ودانیز شرکت</b></h1>
            </div>
            <img src="{{ asset('image/hero_section/77.png')}} " alt="">
        </div>
        <br>
        <div id="company_ifno">
            <h2><b>موږ ستاسو راتلونکی په باور، کیفیت او نوښت سره جوړوو</b></h2>
            <p>
                موږ یو مخکښ او باور وړ ساختماني شرکت یو چې د لوړ کیفیت، قوي جوړښتونو او عصري ډیزاینونو په وړاندې
                کولو کې ځانګړی مقام لرو. زموږ هدف دا دی چې ستاسو خیالونه، نظریات او خوبونه په داسې واقعي پروژو
                بدل کړو چې نه یوازې ښکلي وي، بلکې کلونه کلونه دوام وکړي.

                زموږ تجربه لرونکی او مسلکي ټیم د هرې پروژې په هر پړاو کې له تاسو سره ولاړ وي — له پلان جوړونې او
                نړیوالو اصولو په کارولو سره داسې ودانۍ جوړوو چې د کیفیت، خوندیتوب او ښکلا بشپړ انعکاس وي.

                راځئ یوځای داسې راتلونکی جوړ کړو چې هم قوي وي، هم ښکلی، او هم د باور وړ.
            </p>
        </div>
    </div>

</section>

<!-- This is feature section  -->
<section id="cr_tech_sec_cln_section">

</section>

<section id="video-demo">
    <h3>ویبسایټ ډیمو</h3>
    <p>که چیری تاسو ددی ویبسایټ د کارکرد نه وی بلد نو دغه ویدیو ستاسو سره مرته کوی چی ددی ویبسایټ په هر برخه پوه شی.
    </p>

    <div class="video-container">
        <iframe src="https://www.youtube.com/embed/ybw27zB2SMw" title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen>
        </iframe>
    </div>
</section>

<section id="FAQ-section"></section>
<section id="new-section"></section>
<section id="People_Ideas"></section>
@endsection()


@vite('resources/js/featureSection.js')
@vite('resources/js/faq_sec.js')
@vite('resources/js/News.js')
@vite('resources/js/header_hambergarMenu.js')
@vite('resources/js/Poeple_Ideas.js')
