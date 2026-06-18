<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- DATA AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body class="font-sans antialiased">
    <div class="container">
        <!-- Navbar -->
        <div class="shadow px-4 object-fit-fill rounded-pill mt-3" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="700">

            <nav class="navbar navbar-expand-lg">

                <div class="container-fluid">
                    <a class="navbar-brand" href="/">bolonsite.</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav nav justify-content-center w-100 fw-bold gap-3" style="font-size: 13px">
                            <li class="nav-item">
                                <a class="nav-link nav-hover" aria-current="page" href="#home">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-hover" aria-current="page" href="#about">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-hover" aria-current="page" href="#skills">Skills</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-hover" aria-current="page" href="#projects">Projects</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-hover" aria-current="page" href="#contact">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>

            </nav>

        </div>

        
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Data AOS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        AOS.init();
    </script>
</body>

</html>
