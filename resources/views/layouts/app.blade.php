
<!DOCTYPE html>
<html lang="ps" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite([
        'resources/css/header.css',
        'resources/css/footer.css',
        'resources/css/app.css'
    ])

    @yield('css')

    <title>@yield('title', 'محمد فهیم')</title>
</head>

<body>


    <header>
        <div class="menu-overlay"></div>
        <nav>
            <div class="navigation">
                <div class="logo">
                    <img src="{{ asset('image/logo/Logo-removebg-preview.png')}} " alt="">
                </div>
                <div class="hamburger">
                    <i class="fa-solid fa-bars"></i>
                </div>
                <div class="menu-bar">
                    <ul class="menu-list">
                        <li><a href="{{ url('/') }}">کور پاڼه</a></li>
                        <li><a href="{{ url('/about') }}">زموژ په اړه</a></li>
                        <li><a href="{{ url('/services') }}">خدمات</a></li>
                        <li><a href="{{ url('/project') }}">پروژی</a></li>
                        <li><a href="{{ url('/team') }}">کاری ټیم</a></li>
                        <li><a href="{{ url('/job') }}">دندی</a></li>
                        <li><a href="{{ url('/contact') }}">اړیکه</a></li>
                        <li><a href="{{ url('/Post_comment') }}">پوسټونه او کمنټونه</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>


    @yield('content')


    <footer>

        <div class="footer-about">
            <h3>constraction company</h3>
            <p>موژ د وادنیو د جوړولو مسلکی خدمات وړاندی کوو
                .موژ د وادنیو د جوړولو مسلکی خدمات وړاندی کوو.
                موژ د وادنیو د جوړولو مسلکی خدمات وړاندی کوو.
                موژ د وادنیو د جوړولو مسلکی خدمات وړاندی کوو.
            </p>
        </div>

        <div class="link-contact-secial-link">
            <div class="footer-link">
                <h3>Quick links</h3>
                <ul>
                    <li><a href="index.html">کور پاڼه</a></li>
                    <li><a href="about.html">زموژ په اړه</a></li>
                    <li><a href="services.html">خدمات</a></li>
                    <li><a href="project.html">پروژی</a></li>
                    <li><a href="team.html">کاری ټیم</a></li>
                    <li><a href="job.html">دندی</a></li>
                    <li><a href="contact.html">اړیکه</a></li>
                    <li><a href="Post_comment.html">پوسټونه او کمنټونه</a></li>
                </ul>
            </div>

            <div class="footer-contact">
                <h3>اړیکه</h3>
                <p>موبایل: 07000000000</p>
                <p>بریښنالیک: khan@gamil.com</p>
                <p> پته: کابل، افغانستان</p>
            </div>

            <div class="social_media_link">
                <a href="#" style="color: rgb(125, 125, 125);"><i class="fa-brands fa-facebook"></i></a>
                <a href="#" style="color: rgb(125, 125, 125);"><i class="fa-brands fa-telegram"></i></a>
                <a href="#" style="color: rgb(125, 125, 125);"><i class="fa-brands fa-instagram"></i></a>
                <a href="#" style="color: rgb(125, 125, 125);"><i class="fa-brands fa-twitter"></i></a>
            </div>
        </div>
        </div>
        <div class="copy-right">
            <p>© 2026 Construction Company | ټول حقونه خوندي دي</p>
        </div>
        </div>
    </footer>
    @yield('js')
</body>
</html>