
@extends('layouts.app')

@section('title', 'Project')

@section('css')
@vite([
    'resources/css/project_page.css',
])
@endsection()


@section('content')

    <div class="projects-section">
        <div class="section-header">
            <h1>✦ زما پروژې ✦</h1>
            <p>هره پروژه د دوو انځورونو یو لنډی پیژندنی سره</p>
        </div>

        <div class="projects-grid">

            <div class="project-card" id="course_section">
                <div class="project-images">
                    <div class="project-img">
                        <img src="/image/personal_finance_management/1 (2).png">
                    </div>
                    <div class="project-img">
                        <img src="/image/personal_finance_management/2.png">
                    </div>
                    <div class="project-img">
                        <img src="/image/personal_finance_management/2 (1).png">
                    </div>
                    <div class="project-img">
                        <img src="/image/personal_finance_management/2 (2).png">
                    </div>
                    <div class="project-img">
                        <img src="/image/personal_finance_management/1 (1).png">
                    </div>
                    <div class="project-img">
                        <img src="/image/personal_finance_management/2 (3).png">
                    </div>
                </div>
                <div class="project-info">
                    <h3 class="project-title">د Personal Finance management System<span class="project-category">ویب بیسډ مدیریتي
                            سیستم</span></h3>
                    <p class="project-description">دی سیستم پواسطه تاسو کولی شی کولی شخصی مالی کاربارونه منظم او مدیریت   کړی، دا سیستم دغه مشخصات لری »»» د خپلو اکونټو ثبت »»» ټول معاملاتو ثبت  د ټول مشخصاتو سره لکه کټګوری اکونټ وخت »»» د قرضونو ثبت د ټولو مشخصاتو سره   یو ځای ، په هغو کی سرچ د ټولو مشخصاتو په اساس لکه کس، تاریخ ، باقیات ، ما چاته قرض ورکړی او ما له چا اخبیستی دی هر یوی ټوټل معلومول ، »»» بله برخه پکی د سپما او د هغو تادیه د وخت او ټولو مشخضاتو سره   »»» د بیلونو برخه چی پکی بیل ثبت تادیه او اتومات بیرته په همغه تاریخ جوړیدل شامل دی »»» بله مهم برخه کولی د هر سه راپور د خاصو کالمونو د انتخاب په اساس جوړ هغه هم په pdf, excil and print فارمټونو کی »»»د خبر ورکولو برخه چی پکی د هر سه خبر لکه نوی بیل تادیه د نوی ریپورت جوړول او د هر ضروری شی خبر درکوی . »»» multi user  مطلب په یو وخت مختلف کسان پکی اکونټ جوړولی شی چی هر یوازی د خپل د  کارن نوم او فاسورډ په اساس داخلیدای شی</p>
                    <div class="project-tech">
                        <span class="tech-tag">HTML, CSS, JavaCript</span>
                        <span class="tech-tag">Node.js</span>
                        <span class="tech-tag">MySQL</span>
                    </div>
                </div>
            </div>

            <div class="project-card" id="khan_section">
                <div class="project-images">
                    <div class="project-img">
                        <img src="image/project/constraction1.jpeg">
                    </div>
                    <div class="project-img">
                        <img src="image/project/constraction2.jpeg">
                    </div>
                </div>
                <div class="project-info">
                    <h3 class="project-title">خان مدیریت سیستم<span class="project-category">مدیریتی سیستم</span></h3>
                    <p class="project-description">دا شرکت چی د ساختمانی موادو ټسټونه کوی ، نو ددی شرکت لپاره لاندی
                        خدمات وړاندی کوی ، د ټولو قراردادونو مدیریت ، د کارمندان مدیریت ، مصارف مدیریت ، د ټول مالی
                        کارونو مدیریت یی کوی . </p>
                    <div class="project-tech">
                        <span class="tech-tag">Python</span>
                        <span class="tech-tag">tkinter</span>
                        <span class="tech-tag">PostgreSQL</span>
                    </div>
                </div>
            </div>

            <div class="project-card" id="course_section">
                <div class="project-images">
                    <div class="project-img">
                        <img src="image/project/course1.jpeg">
                    </div>
                    <div class="project-img">
                        <img src="image/project/course2.png">
                    </div>
                </div>
                <div class="project-info">
                    <h3 class="project-title">د کورس مدیریت سیستم<span class="project-category">ویب بیسډ مدیریتي
                            سیستم</span></h3>
                    <p class="project-description">ددی مدیریتي سیستم پواسطه د کورس ټول کارونو مدیریت کیدای شی ، لکه د
                        استادانو مدیریت ، زده کوونکو مدیریتو، نمرات مدیریت، د سرټیفکیټ ساتل او مدیریت کیژی.</p>
                    <div class="project-tech">
                        <span class="tech-tag">HTML, CSS, JavaCript</span>
                        <span class="tech-tag">Node.js</span>
                        <span class="tech-tag">MySQL</span>
                    </div>
                </div>
            </div>

            <div class="project-card" id="hostal_section">
                <div class="project-images">
                    <div class="project-img">
                        <img src="image/project/hostal1.jpeg">
                    </div>
                    <div class="project-img">
                        <img src="image/project/hostel2.jpg">
                    </div>
                </div>
                <div class="project-info">
                    <h3 class="project-title">د لیلی مدیریت سیستم<span class="project-category">مدیریت سیستم</span>
                    </h3>
                    <p class="project-description">ددی مدیریتی سیستم پواسطه کولی شی د لیلیی ټول کارونو مدیریت کړی ، د
                        محصلینو مدیریت د اطاقونو ثبت او مدیریت ، کارمندان مدیریت، مصارف مدیریت ...</p>
                    <div class="project-tech">
                        <span class="tech-tag">Java</span>
                        <span class="tech-tag">JavaSwing</span>
                        <span class="tech-tag">MySQL</span>
                    </div>
                </div>
            </div>


            <div class="project-card" id="pashto_typing_game">
                <div class="project-images">
                    <div class="project-img">
                        <img src="image/project/type.png">
                    </div>
                    <div class="project-img">
                        <img src="image/project/game.png">
                    </div>
                </div>
                <div class="project-info">
                    <h3 class="project-title">پښتو ټایپینګ</h3><span class="project-category">ویب بیسډ ډیسکټاپ
                        اپلیکیشن</span>
                    </h3>
                    <p class="project-description">"دا ګیم چی دری مرحلی لری
                        (ساده، متوسط، سخت) کږلی شی پکی پښتو ټایپنګ زده کړی
                        چی د هری مرحلی له پای ته رسیدو بله شروع کیږی .</p>
                    <div class="project-tech">
                        <span class="tech-tag">HTML</span>
                        <span class="tech-tag">CSS</span>
                        <span class="tech-tag">JavaCript</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
    @endsection()


    @section('js')
        <script src="{{ asset('js/Hambergar.js')}}"></script>
        <script src="{{asset('js/project_grid.js')}}"></script>
    @endsection()

