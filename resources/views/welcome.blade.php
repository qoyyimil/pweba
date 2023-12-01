<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Blog - 5026221115</title>
    <link id="icon-web" href="icon-web.png" rel="icon">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap-icons/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="function.js"></script>
</head>

<body>
    <!--Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-logo" href="#home"><img src="navlogo.png" width="65px"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav mr-auto">
                    <a class="nav-item nav-link" href="#home">Home</a>
                    <a class="nav-item nav-link" href="#about">About</a>
                    <a class="nav-item nav-link" href="#education">Education</a>
                    <a class="nav-item nav-link" href="#experiences">Experiences</a>
                    <a class="nav-item nav-link" href="#contact">Contact</a>
                </div>
                {{-- <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link" href="#learned">What I Learned?</a>
                </div> --}}
                <div class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="webADropdown" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            P.Web A
                        </a>
                        <div class="dropdown-menu" aria-labelledby="webADropdown">
                            <a class="dropdown-item" href="hello.blade.php" target="_blank">Hello</a>
                            <a class="dropdown-item" href="javascript.blade.php" target="_blank">Javascript</a>
                            <a class="dropdown-item" href="link.blade.php" target="_blank">Belajar Link</a>
                            <a class="dropdown-item" href="responsive.blade.php" target="_blank">Responsive Web</a>
                            <a class="dropdown-item" href="style.blade.php" target="_blank">Belajar CSS</a>
                            <a class="dropdown-item" href="form.blade.php" target="_blank">Form Validation</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="webATugasDropdown" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            P.Web A Tugas
                        </a>
                        <div class="dropdown-menu" aria-labelledby="webATugasDropdown">
                            <a class="dropdown-item" href="linktree.blade.php" target="_blank">Linktree</a>
                            <a class="dropdown-item" href="layout.blade.php" target="_blank">Layout</a>
                            <a class="dropdown-item" href="carousel.blade.php" target="_blank">BS4 Carousel</a>
                        </div>
                    </li>
                </div>
            </div>
        </div>
    </nav>
    <!--Batas Navigation-->

    <!--Home-->
    <section id="home" class="d-flex flex-column justify-content-center">
        <div class="container">
            <div class="row">
                <div class="col-8 home-name">
                    <h1><b>Qoyyimil Jamilah</b></h1>
                    <p>Undergraduate <span>Information Systems</span> Student</p>

                    <div class="social-links">
                        <a href="https://instagram.com/qoyyimill" class="instagram"><i class="bi bi-instagram"></i></a>
                        <a href="https://www.linkedin.com/in/qoyyimiljamilah/" class="linkedin"><i
                                class="bi bi-linkedin"></i></a>
                    </div>
                </div>
                <div class="col-4">
                    <img src="homepicture.png" class="home-picture">
                </div>
            </div>
        </div>
    </section>
    <!--Batas Home-->

    <!--About-->
    <section id="about" class="d-flex flex-column justify-content-center">
        <div class="container">

            <div class="section-title">
                <h2>About</h2>
                <p>I am an enthusiastic student deeply passionate about exploring the realm of technology. I am
                    currently pursuing a Bachelor's degree in Information Systems and always eager to delve into the
                    digital world.</p>
            </div>

            <div class="row about-detail">
                <!--Profile-->
                <div class="col-4 text-left">
                    <img src="profile.png" class="profile img-fluid">
                </div>
                <!--Data diri-->
                <div class="col-8 data-diri">

                    <div class="row">
                        <div class="col-6">
                            <p><b>- Birthday: </b>12 November 2003</p>
                            <p><b>- Phone: </b>+6285259385981</p>
                            <p><b>- Email: </b>qoyyimillj@gmail.com</p>
                            <p><b>- City: </b>Surabaya, Indonesia</p>
                        </div>
                        <div class="col-6">
                            <p><b>- Instagram: </b>@qoyyimill</p>
                            <p><b>- Line: </b>qoyyimil</p>
                            <p><b>- LinkedIn: </b>Qoyyimil Jamilah</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--Batas About-->

    <!--Education-->
    <section id="education" class="d-flex flex-column justify-content-center">
        <div class="container">

            <div class="section-title">
                <h2>Education</h2>
            </div>

            <div class="row education-detail">
                <div class="col-4 border-right border-dark text-center">
                    <h4>SDIT Al-Hidayah Sumenep</h4>
                    <p><span>2010 - 2016</span></p>
                </div>
                <div class="col-4 border-left border-right border-dark text-center">
                    <h4>SMPN 1 Sumenep</h4>
                    <p><span>2016 - 2019</span></p>
                </div>
                <div class="col-4 border-left border-dark text-center">
                    <h4>SMA Al-Hikmah Surabaya</h4>
                    <p><span>2019 - 2022</span></p>
                </div>
            </div>
            <div class="row education-detail">
                <div class="col-12 text-center">
                    <br>
                    <h4>Institut Teknologi Sepuluh Nopember</h4>
                    <h6><i>Bachelor of Information Systems</i></h6>
                    <p><span>2022 - Now</span></p>
                </div>
            </div>

        </div>
    </section>
    <!--Batas Education-->

    <!--Experiences-->
    <section id="experiences" class="d-flex flex-column justify-content-center">
        <div class="container-fluid">

            <div class="section-title">
                <h2>Experiences</h2>
            </div>

            <div class="row experiences-detail">
                <h5>Committee Experiences</h5>
            </div>
            <div class="row">
                <div class="col-6 committee-detail text-center">
                    <img src="fokus.png" class="logo-experiences">
                    <h5>Fokus Expo 2023</h5>
                    <h6>2022 - Staff Acara</h6>
                </div>
                <div class="col-6 committee-detail text-center">
                    <img src="ise.png" class="logo-experiences-ise">
                    <h5>ISE! 2023</h5>
                    <h6>2023 - Staff Admin & LO</h6>
                </div>
            </div>

            <div class="row experiences-detail">
                <h5>Organizational Experiences</h5>
            </div>
            <div class="row">
                <div class="col-12 organizational-detail text-center">
                    <img src="fokus.png" class="logo-experiences">
                    <h5>Forum Komunal Mahasiswa Sumenep ITS (FOKUS ITS)</h5>
                    <h6>2022 - Staff Departemen SOSMAS</h6>
                </div>
            </div>
        </div>
    </section>
    <!--Batas Experiences-->

    <!--What I Learned?-->
    {{-- <section id="learned" class="d-flex flex-column justify-content-center">
        <div class="container">

            <div class="section-title">
                <h2>What I Learned?</h2>
            </div>

            <div class="row portfolio-detail">

            </div>
        </div>
    </section> --}}
    <!--Batas What I Learned-->

    <!--Contact-->
    <section id="contact" class="d-flex flex-column justify-content-center">
        <div class="container">

            <div class="section-title">
                <h2>Contact</h2>
            </div>

            <div class="row">
                <div class="col-4">

                    <div class="contact-info">
                        <div class="address">
                            <h4>Kost:</h4>
                            <p>Keputih Timur Jaya E-01, Surabaya</p>
                            <br>
                        </div>

                        <div class="email">
                            <h4>Email:</h4>
                            <p>qoyyimillj@gmail.com</p>
                            <br>
                        </div>

                        <div class="phone">
                            <h4>Call:</h4>
                            <p>+62 8525 9385 981</p>
                        </div>
                    </div>
                </div>

                <div class="col-8">
                    <form action="https://wa.me/6285259385981" onsubmit="return validateForm();">
                        <div class="row">
                            <div class="col-6 form-group">
                                <input id="nama-awal" type="text" class="form-control"
                                    placeholder="First Name" />
                            </div>
                            <div class="col-6 form-group">
                                <input id="nama-akhir" type="text" class="form-control"
                                    placeholder="Last Name" />
                            </div>
                        </div>
                        <div class="form-group">
                            <input id="email" type="text" class="form-control" placeholder="Your Email" />
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" rows="5" placeholder="Message"></textarea>
                        </div>
                        <div class="button"><button type="submit">Send Message</button></div>
                    </form>
                </div>
            </div>

        </div>
    </section>
    <!--Batas Contact-->

    <!--Footer-->
    <footer id="footer">
        <div class="copyright">
            &copy; 2023 Qoyyimil Jamilah | ETS Pemrograman Web [A]
        </div>
    </footer>
    <!--Batas Footer-->
</body>

</html>
