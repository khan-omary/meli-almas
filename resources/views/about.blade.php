@extends('layouts.app')

@section('title', 'About')

@section('css')
@vite([
    'resources/css/about.css',
])
@endsection()


@section('content')

    <section id="about_me">
        <h2 class="section-title">زما په اړه</h2>
        <p>زه محمد فهیم (عمری) یو سافټویر انجینر چی په مدیریتي سیستمونه، ډیسکټاپ اپلیکیشنونه،، ویبسایټونه او د سافټویر
            پروژو کی کافی تجربی په درلودلو سره کولی شم تاسو هر ډول مدیریتي سیستمونه، ډیسکټاپ اپلیکیشنونه،،
            ویبسایټونه جوړ او د سافټویر پروژو مربوط مشوری درکړم. </p>
    </section>
@endsection()

@section('js')
    <script src="{{asset('js/Hambergar.js')}}"></script>
@endsection()