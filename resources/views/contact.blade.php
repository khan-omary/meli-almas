@extends('layouts.app')

@section('title', 'jobs')


@section('css')
@vite([
'resources/css/contact.css',
])
@endsection()



@section('content')

    <section id="Title-backround">
        <div id="title">
            <h1>زموژ سره اړیکه</h1>
        </div>
         <img src="{{ asset('image/contact/c1.png')}} " alt="">
    </section>

    <section id="contact-card">
        <h2 class="contect_form">له دغو لارو زموږ سره اړیکه ونیسی </h2>
        <div id="contact-card-div">

            <div class="card"> <!-- customare contact -->
                <div class="card-image">
                    <svg width="60" height="60" viewBox="0 0 24 24" fill="white">
                        <path
                            d="M6.6 10.8c1.5 3 3.6 5.1 6.6 6.6l2.2-2.2c.3-.3.7-.4 1.1-.3 1.2.4 2.5.6 3.8.6.6 0 1 .4 1 1V21c0 .6-.4 1-1 1C10.3 22 2 13.7 2 3c0-.6.4-1 1-1h4.5c.6 0 1 .4 1 1 0 1.3.2 2.6.6 3.8.1.4 0 .8-.3 1.1l-2.2 2.2z" />
                    </svg>
                </div>
                <br>

                <div class="overlay">
                    <p>که چیری غواړی زموږ سره مستقیمآ په اړیکه کی شی د موبایل نمبر یا یا بلی ټولنیزی رسنی له
                        طریقه تر څو وکولی شو په وخت ځواب درکړو نو دلته کلیک
                    </p>
                    <a href="#Hero_section" class="btn">اړیکه</a>
                </div>
            </div>

            <div class="card">
                <div class="card-image">
                    <svg width="60" height="60" viewBox="0 0 24 24" fill="white">
                        <path
                            d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4-8 5-8-5V6l8 5 8-5v2z" />
                    </svg>
                </div>

                <div class="overlay">
                    <p>که چیری غواړی موږ ته ایمیل پریژدی تر ځو په یو مناسب وخت کی ځواب درکړو نو دلته کلیک وکړی.</p>
                    <a href="#Form-section" class="btn">اړیکه</a>
                </div>
            </div>
        </div>
    </section>

    <section id="Form-section">
        <h3 id="form-name">فورم:</h3>
        <form action="">
            <div id="form">
                <div id="input-data">
                    <input type="text" name="" id="firstname" placeholder="نوم" required>
                    <input type="email" name="" id="Email" placeholder="بریښنالیک">
                    <input type="number" name="" id="Phone-number" placeholder="موبایل نمبر" required>
                </div>
                <textarea name="comment" id="comment" cols="30" rows="10" placeholder="خبل نظر ولیکی  ... "
                    required></textarea>
                <input type="submit" name="" id="submit-btn" onclick="saveData()">
            </div>
        </form>
    </section>

    <section id="Hero_section">
        <div id="main-contact">
            <h2>زموژ سره اړیکه:</h2>
            <p>پته: افغانستان، کابل،کوته سنګی، ساختمان</p>
            <p>د جواب ورکولو وخت د سهار له ۸ بجو د ماښام تر ۸ بجو </p>
            <p>بریښنالیک: khan@gamil.com</p>
            <p>موبایل نمبر: ۰۷۰۰۰۰۰۰۰۰</p>
        </div>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d14736.595775882663!2d69.09952923257555!3d34.51870258609114!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1skabul%20kuta%20sangi!5e0!3m2!1sen!2s!4v1775670591969!5m2!1sen!2s"
            width="750" height="400" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
@endsection()

@section('js')
<script src="{{ asset('js/ContactForm.js')}}"></script>
<script src="{{ asset('js/load_contact_data.js')}}"></script>
<script src=" {{ asset('js/ContactForm_local_storage.js')}}"></script>
<script src="{{ asset('js/header_hambergarMenu.js')}}"></script>
@endsection()

<!-- 
@vite('resources/js/ContactForm.js')
@vite('resources/js/load_contact_data.js')
@vite('resources/js/ContactForm_local_storage.js')
@vite('resources/js/header_hambergarMenu.js') -->