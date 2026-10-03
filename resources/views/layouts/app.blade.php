
<!DOCTYPE html>
<html lang="ps" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite([
        'resources/css/header.css',
        'resources/css/footer.css'
    ])

    @yield('css')
    <title>@yield('title', 'محمد فهیم')</title>
</head>

<body>

    <nav>
        <div class="menu">
            <div class="logo"><img src="{{ asset('image/logo/logo2.png') }}" alt=""></div>
            <div class="hamburger"><i class="fa-solid fa-bars"></i></div>
            <ul class="nav-links">
                <li><a href="{{ url('/') }}">کورپاڼه</a></li>
                <li><a href="{{ url('/projects') }}">پروژې</a></li>
                <li><a href="{{ url('/about') }}">زما په اړه</a></li>
                <li><a href="{{ url('/contact') }}">اړیکه</a></li>
            </ul>

        </div>
    </nav>


    @yield('content')

    <footer id="footer">
        <div class="footer-container">
            <div class="footer-box">
                <h2 class="footer-logo">Khan Omary</h2>
                <p>
                    عصري ویب‌سایټونه، مدیریتي سیستمونه،
                    ډیسکټاپ اپلیکیشنونه او مسلکي سافټویر حلونه.
                </p>
            </div>


            <div class="footer-box">
                <h3>چټک لینکونه</h3>
                <ul class="footer-links">
                    <li><a href="{{ url('/') }}">کورپاڼه</a></li>
                    <li><a href="{{ url('/projects') }}">پروژې</a></li>
                    <li><a href="{{ url('/about') }}">زما په اړه</a></li>
                    <li> <a href="{{ url('/contact') }}">اړیکه</a></li>
                </ul>
            </div>


            <div class="footer-box">
                <h3>ټولنیزې اړیکې</h3>
                <div class="footer-socials">
                    <a href="https://www.facebook.com/profile.php?id=61589091702572"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="https://wa.me/93795741648"><i class="fa-brands fa-whatsapp"></i></a>
                    <a href="https://t.me/khan_omary"><i class="fa-brands fa-telegram"></i></a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p> © 2026 Khan Omary | ټول حقونه خوندي دي </p>
        </div>
    </footer>
    @yield('js')
</body>
</html>