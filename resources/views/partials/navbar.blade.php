<div class="container sticky-top" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="700">
    <div class="navbar-wrapper bg-body shadow px-2 rounded-pill mt-3">

        <nav class="navbar navbar-expand-lg">

            <div class="container px-0">
                <div class="d-flex justify-content-center align-items-center gap-2">
                    <img src="{{ asset('img/profil.jpg') }}" class="rounded-circle object-fit-cover" width="36"
                        height="36" alt="Profil">
                    <a class="navbar-brand" href="/">B4tor.</a>
                </div>

                <div class="d-flex align-items-center gap-1 order-lg-last">
                    <!-- Language -->
                    <button class="btn btn-link nav-link p-2 fw-bold text-decoration-none" id="langToggle"
                        type="button" aria-label="Ganti Bahasa" style="font-size: 13px;">
                        EN
                    </button>

                    <!-- Theme -->
                    <button class="btn btn-link nav-link p-2" id="themeToggle" type="button" aria-label="Ganti Tema">
                        <i class="bi bi-moon-stars-fill" id="themeIcon"></i>
                    </button>

                    <!-- Hamburger -->
                    <button class="navbar-toggler border-0 shadow-none p-2 nav-link" type="button"
                        data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-label="Menu Navigasi">
                        <i class="bi bi-list fs-3"></i>
                    </button>
                </div>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <!-- Header Mobile -->
                    <div class="d-flex d-lg-none justify-content-between align-items-center w-100">

                        <a class="navbar-brand fs-3" href="/">
                            B4tor.
                        </a>

                        <button class="btn-close mt-5" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNav">
                        </button>

                    </div>

                    <!-- Menu -->
                    <ul class="navbar-nav mx-auto fw-bold gap-lg-3" style="font-size: 15px">

                        <li class="nav-item">
                            <a class="nav-link nav-hover" href="#about">About</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link nav-hover" href="#skills">Skills</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link nav-hover" href="#tools">Tools</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link nav-hover" href="#projects">Projects</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link nav-hover" href="#contact">Contact</a>
                        </li>

                    </ul>

                    <!-- Footer Mobile -->
                    <div class="mobile-footer mt-auto d-lg-none">
                        <p class="text-center text-muted mb-0">
                            &copy; {{ now()->year }} <a href="https://instagram.com/gilbertsmbln"
                                style="text-decoration: none;" class="text-black">bolonsite.</a> All rights reserved.
                        </p>
                    </div>

                </div>

            </div>

        </nav>

    </div>
</div>
