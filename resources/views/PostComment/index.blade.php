@extends('layouts.app')

@section('title', 'index')

@section('css')
@vite([
'resources/css/Post_comment.css',
'resources/css/contact.css',
])
@endsection()


@section('content')
<main class="container">
    <div id="post-info">
        <div class="posts-header">
            <h1><i class="fas fa-newspaper"></i> تازه پوستونه</h1>
            <p>د شرکت لخوا تازه معلومات، پروژې او اعلانونه — تاسو خپل نظر او وړاندیزونه دلته شریکولی شئ</p>
            <p><i class="fas fa-hard-hat"></i> د کیفیت، اعتبار او خلاصو نظرونو ژمنه — ستاسو نظر زموږ لپاره ارزښت لري
            </p>
        </div>
    </div>

    <div class="post-comment">
        <h2>د کابل کندهار دوهم لاټ سرک هم شروع کوو </h2>
        <p class="post-number" id="1">1</p>
        <div class="time-comment-num">
            <p>12-2-2026</p>
            <p>دوه کمنټونه</p>
        </div>

        <p class="project-info">دا پروژه یو د ډیرو مهمو پروژو څخه ده چی په ۱ کال کی به ختمه شی ستاسو ځه نظر دی.</p>
        <hr>
        <h2 class="idea-title">نظریات</h2>

        <div class="all-commnets">
            <div class="one-comments">
                <div class="commenter-info">
                    <h2 class="commenter-name">محمد زبیر</h2>
                    <p class="commented-time">12-2-2026</p>
                </div>
                <p class="comment">بیخی شه کار دی او انشاالله تګ راتګ به ډیر اسانه شی</p>
            </div>

            <div class="one-comments">
                <div class="commenter-info">
                    <h2 class="commenter-name">محمد زبیر</h2>
                    <p class="commented-time">12-2-2026</p>
                </div>
                <p class="comment">بیخی شه کار دی او انشاالله تګ راتګ به ډیر اسانه شی</p>
            </div>
        </div>
        <a href="#Form-section" class="give-coment">کمنټ ورکول</a>

    </div>


    <div class="post-comment">
        <h2>د تور غونډی بندر کارونه هم زموږ شرکت ته وسپارل شول </h2>
        <p class="post-number" id="2">2</p>
        <div class="time-comment-num">
            <p>12-2-2026</p>
            <p>دوه کمنټونه</p>
        </div>

        <p class="project-info">دا پروژه یو د ډیرو مهمو پروژو څخه ده چی په ۱ کال کی به ختمه شی ستاسو ځه نظر دی.</p>
        <hr>
        <h2 class="idea-title">نظریات</h2>

        <div class="all-commnets">

            <div class="one-comments">
                <div class="commenter-info">
                    <h2 class="commenter-name">محمد زبیر</h2>
                    <p class="commented-time">12-2-2026</p>
                </div>
                <p class="comment">بیخی شه کار دی او انشاالله تګ راتګ به ډیر اسانه شی</p>
            </div>

            <div class="one-comments">
                <div class="commenter-info">
                    <h2 class="commenter-name">محمد زبیر</h2>
                    <p class="commented-time">12-2-2026</p>
                </div>
                <p class="comment">بیخی شه کار دی او انشاالله تګ راتګ به ډیر اسانه شی</p>
            </div>
        </div>
        <a href="#Form-section" class="give-coment">کمنټ ورکول</a>
    </div>

</main>

<section id="Form-section">
    <h3 id="form-name">فورم:</h3>
    <form action="">
        <div id="form">
            <div id="input-data">
                <input type="text" name="" id="firstname" placeholder="نوم" required>
                <input type="number" name="" id="post-number" placeholder="پوسټ نمبر " required>
            </div>
            <textarea name="comment" id="comment" cols="30" rows="10" placeholder=" ددی په اړه خبل نظر ولیکی  ... "
                required></textarea>
            <input type="submit" name="" id="submit-btn">
        </div>
    </form>
</section>
@endsection()

@section('js')
<script src="{{ asset('js/Post_forms.js')}}"></script>
<script src="{{ asset('js/header_hambergarMenu.js')}}"></script>
@endsection()