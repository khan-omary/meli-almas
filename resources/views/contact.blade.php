@extends('layouts.app')

@section('title', 'Contact')

@section('css')
@vite([
    'resources/css/contact.css',
])
@endsection()


@section('content')
    <section id="contact_section">
        <h2 class="section-title">اړیکه</h2>
        <div class="contact-form">
            <div class="input-group">
                <label>نوم</label>
                <input type="text" placeholder="ستاسو نوم ...">
            </div>
            <div class="input-group">
                <label>برېښنالیک</label>
                <input type="email" placeholder="example@mail.com">
            </div>
            <div class="input-group">
                <label>پیغام</label>
                <textarea rows="3" placeholder="دلته ولیکئ ..."></textarea>
            </div>
            <button class="submit-btn">لیږل</button>
        </div>
    </section>

    <section id="social-contact">
        <h2 class="section-title">✦ ټولنیزې اړیکې ✦</h2>

        <div class="social-grid">
            <a href="#" class="social-card">
                <div class="social-icon">
                    <i class="fa-solid fa-phone"></i>
                </div>
                <div class="social-info">
                    <h3>اړیکه</h3>
                    <p>0795741648</p>
                </div>
            </a>

            <a href="https://wa.me/93795741648" class="social-card">
                <div class="social-icon">
                    <i class="fa-brands fa-whatsapp"></i>
                </div>
                <div class="social-info">
                    <h3>WhatsApp</h3>
                    <p>په واتساپ اړیکه ونیسئ</p>
                </div>
            </a>

            <a href="https://t.me/khan_omary" class="social-card" target="_blank">
                <div class="social-icon">
                    <i class="fa-brands fa-telegram"></i>
                </div>
                <div class="social-info">
                    <h3>Telegram</h3>
                    <p>زما تلګرام اکونټ</p>
                </div>
            </a>

            <a href="https://www.facebook.com/profile.php?id=61589091702572" class="social-card">
                <div class="social-icon">
                    <i class="fa-brands fa-facebook-f"></i>
                </div>
                <div class="social-info">
                    <h3>Facebook</h3>
                    <p>د سافټویر مربوط پوسټونو صفحه</p>
                </div>
            </a>

            <a href="https://www.facebook.com/profile.php?id=61589091702572" class="social-card">
                <div class="social-icon">
                    <i class="fa-brands fa-facebook-f"></i>
                </div>
                <div class="social-info">
                    <h3>Facebook</h3>
                    <p>زما شخصی فیسبوک</p>
                </div>
            </a>



            <a href="https://www.linkedin.com/in/mohammadfahim-omary-8917773b3?utm_source=share_via&utm_content=profile&utm_medium=member_android"
                class="social-card">
                <div class="social-icon">
                    <i class="fa-brands fa-linkedin-in"></i>
                </div>
                <div class="social-info">
                    <h3>LinkedIn</h3>
                    <p>زما د لینک ډین اکونټ</p>
                </div>
            </a>

            <a href="https://www.facebook.com/profile.php?id=61589091702572" class="social-card">
                <div class="social-icon">
                    <i class="fa-brands fa-github"></i>
                </div>
                <div class="social-info">
                    <h3>GitHub</h3>
                    <p>زما په ګیټ هب کی نوری </p>
                </div>
            </a>
        </div>
    </section>
@endsection()


@section('js')
        <script src="{{ asset(js/Hambergar.js)}}"></script>
@endsection()