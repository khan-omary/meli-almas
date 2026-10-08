@extends('layouts.app')

@section('title', 'index')

@section('css')
@vite([
'resources/css/about.css',
])
@endsection()


@section('content')

    <section id="Hero_section">
        <div id="hero-info-image">
            <div id="hero-info">
                <h2>ملی الماس ودانیز شرکت</h2>
                <p><b>ملی الماس ودانیز شرکت</b> یو ساختمانی شرکت چی د افغانستان په مخکښو شرکتونه کی شمیرل کیژی چی د
                    لوړ کیفیت کورونو، تجارتی ودانیو او زیربنا پروژو په جوړولو کی تخصص لری.
                    زموژ شرکت چی په <b>۲۰۱۸</b>
                    کی تاسیس شوی او هدف یی د عصری معماری او پرمختللو ودانیزو ټکنالو‌ژیو په مرسته
                    د خلکو ژوند آسانه او خوندی کوی.
                    ددی شرکت موسس <b>انجینر محمد کریم (عمری) </b> یو تکړه ساختمانی انجینر او د پروژی مدیریت کوونکی دی .
                    د افغانستان په هره نقطه کی ملی الماس ودانیز شرکت ستاسو ساختمانی کارونه مخته وړلی شی.</p>
            </div>
            <div id="image-karim-name">
                <div id="hero-image">
                    <img src="{{ asset('image/about/1.png')}} " alt="">
                </div>
                <div id="creat">
                    <h3>انجینر محمد کریم(عمری)</h3>
                    <p>د ملی الماس ودانیز شرکت موسس</p>
                </div>
            </div>
            <!-- <div id="hero-image">
                    <img src="./images/about/1.png" alt="">
                </div> -->
        </div>
    </section>

    <section id="goul">
        <div id="full-goal-div">
            <div id="goal-image" class="goal-items">
                <img src="{{ asset('image/about/77.png')}} " alt="">
            </div>

            <div id="goal-info" class="goal-items">
                <h2>زموژ موخی:</h2>
                <p>ولی زموژ شرکت باید انتخاب کړی ، او موژ سه ته ارښت ورکوو!</p>
                <p>موژ باور لرو چی هره پروژه باید د کیفیت، شفافیت، او د پیردونکو رضایت په اصولو ترسره شی.
                    زموژ ارزشتونه عبارت دی له:
                </p>
                <ul id="do_list">
                    <li>کیفیت لرونکی مواد او پرمختللی تخنیکونه</li>
                    <li>د نوو تیکنالوژیو استفاده</li>
                    <li>دقیق پلان جوړونه </li>
                    <li>د وخت پابندی</li>
                    <li>دوامداره ودانیز حلونه</li>
                    <li>د مشتریانو سره شفافه اړیکه</li>
                </ul>
            </div>
        </div>
    </section>

    <section id="history">
        <div id="history-div" class="history-items">
            <div id="history-info">
                <h2>زموژ مخکی کارونه او تجربی</h2>
                <p> تر دی دمه، موژ له <b>۱۰+</b> ودانیزو پروژو سره کار کړی، چی پکی د کورونو،دفترونه، پلونه، او عامه
                    ودانیو جوړول شامل دي. زموژ ټیم د <b>۵</b> ماهر انجینرانو، معمارانو او کارګرانو څخه جوړ دی.
                    چی د هری پروژی د بریالیتوب لپاره ژمن دي.
                </p>
            </div>
            <div id="history-image" class="history-items">
                <img src="{{ asset('image/about/77.png')}} " alt="">
            </div>
        </div>
    </section>

    <section id="extra-info-section">
        <div id="extra-info">

            <div id="ex_title">
                <h3>موژ یوازی دیوالونه نه پورته کوو بلکی </h3><br>
                <h2>موژ د سوکالی، امن او شه ژوند لپاره ساختمان جوړوو.</h2>
            </div>

            <div id="four-card">

                <div class="ex-card">
                    <div class="ex-card-image">
                        <svg width="80" height="80" viewBox="0 0 24 24" fill="none" stroke="#2c3e50" stroke-width="2">
                            <circle cx="12" cy="12" r="3" />
                            <path
                                d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 1 1-2.83 2.83l-.06-.06A1.65 1.65 0 0 0 15 19.4a1.65 1.65 0 0 0-1 .6 1.65 1.65 0 0 0-.33 1v.1a2 2 0 1 1-4 0v-.1a1.65 1.65 0 0 0-.33-1 1.65 1.65 0 0 0-1-.6 1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 1 1-2.83-2.83l.06-.06A1.65 1.65 0 0 0 4.6 15a1.65 1.65 0 0 0-.6-1 1.65 1.65 0 0 0-1-.33h-.1a2 2 0 1 1 0-4h.1a1.65 1.65 0 0 0 1-.33 1.65 1.65 0 0 0 .6-1 1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 1 1 2.83-2.83l.06.06A1.65 1.65 0 0 0 9 4.6c.3 0 .7-.2 1-.6a1.65 1.65 0 0 0 .33-1V3a2 2 0 1 1 4 0v.1c0 .4.1.7.33 1 .3.4.7.6 1 .6.5 0 1-.2 1.4-.6l.06-.06a2 2 0 1 1 2.83 2.83l-.06.06c-.4.4-.6.9-.6 1.4 0 .3.2.7.6 1 .4.3.7.3 1 .33h.1a2 2 0 1 1 0 4h-.1c-.4 0-.7.1-1 .33-.4.3-.6.7-.6 1z" />
                            <path d="M9 12l2 2 4-4" stroke="#27ae60" />
                        </svg>
                    </div>
                    <h4>د شه تخنیکونو په استفادی کار کوو</h4>
                </div>

                <div class="ex-card">
                    <div class="ex-card-image">
                        <svg width="80" height="80" viewBox="0 0 24 24" fill="none" stroke="#2c3e50" stroke-width="2">
                            <circle cx="12" cy="12" r="10" />
                            <path d="M12 6v12" />
                            <path d="M16 9c0-1.5-2-2-4-2s-4 .5-4 2 2 2 4 2 4 .5 4 2-2 2-4 2-4-.5-4-2" />
                        </svg>
                    </div>
                    <h4>په مناسبه پانګونه یی سرته رسوو</h4>
                </div>

                <div class="ex-card">
                    <div class="ex-card-image">
                        <svg width="80" height="80" viewBox="0 0 24 24" fill="none" stroke="#2c3e50" stroke-width="2">
                            <circle cx="12" cy="12" r="10" />
                            <path d="M2 12h20M12 2a15 15 0 0 1 0 20M12 2a15 15 0 0 0 0 20" />
                            <path d="M8 12l2 2 4-4" stroke="#27ae60" />
                        </svg>
                    </div>
                    <h4>په نړیوالو معیارونو سره سم مخته ځو </h4>
                </div>

                <div class="ex-card">
                    <div class="ex-card-image">
                        <svg width="80" height="80" viewBox="0 0 24 24" fill="none" stroke="#2c3e50" stroke-width="2">
                            <path d="M3 17l6-6 4 4 7-7" />
                            <path d="M14 4h6v6" />
                            <path d="M3 3v18h18" />
                        </svg>
                    </div>
                    <h4>په هر ځه کی کیفیت په نظر کی نیسو</h4>
                </div>

            </div>
        </div>
    </section>

@endsection()

@section('js')
<script src="{{ asset('js/header_hambergarMenu.js')}}"></script>
@endsection()
