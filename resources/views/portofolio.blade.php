<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="{{ asset('portofolio/style.css') }}">

    <title>Title</title>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var cards = document.querySelectorAll('.cardService');

            cards.forEach(function(card) {
                card.style.transition = 'transform 0.2s ease, box-shadow 0.2s ease';

                card.addEventListener('mousemove', function(e) {

                    var x = e.clientX - card.getBoundingClientRect().left - card.clientWidth / 2;
                    var y = e.clientY - card.getBoundingClientRect().top - card.clientHeight / 2;

                    card.style.transform = 'rotateX(' + -y / 10 + 'deg) rotateY(' + x / 10 + 'deg)';

                    card.style.boxShadow = x / 10 + 'px ' + y / 10 + 'px 15px #1988ff49';
                });

                card.addEventListener('mouseout', function(e) {
                    card.style.transform = '';
                    card.style.boxShadow = '';
                });
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var cards = document.querySelectorAll('.cardPage');

            cards.forEach(function(card) {
                card.style.transition = 'transform 0.2s ease, box-shadow 0.2s ease';

                card.addEventListener('mousemove', function(e) {

                    var x = e.clientX - card.getBoundingClientRect().left - card.clientWidth / 2;
                    var y = e.clientY - card.getBoundingClientRect().top - card.clientHeight / 2;

                    card.style.transform = 'rotateX(' + -y / 30 + 'deg) rotateY(' + x / 30 + 'deg)';

                    card.style.boxShadow = x / 30 + 'px ' + y / 30 + 'px 15px #1988ff49';
                });

                card.addEventListener('mouseout', function(e) {
                    card.style.transform = '';
                    card.style.boxShadow = '';
                });
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var cards = document.querySelectorAll('.cardService');

            cards.forEach(function(card) {
                card.style.transition = 'transform 0.2s ease, box-shadow 0.2s ease';

                card.addEventListener('mousemove', function(e) {

                    var x = e.clientX - card.getBoundingClientRect().left - card.clientWidth / 2;
                    var y = e.clientY - card.getBoundingClientRect().top - card.clientHeight / 2;

                    card.style.transform = 'rotateX(' + -y / 10 + 'deg) rotateY(' + x / 20 + 'deg)';

                    card.style.boxShadow = x / 10 + 'px ' + y / 10 + 'px 15px #1988ff49';
                });

                card.addEventListener('mouseout', function(e) {
                    card.style.transform = '';
                    card.style.boxShadow = '';
                });
            });
        });
    </script>

</head>

<body>
    <script>
        // Function to update the active navigation item
        function updateActiveNavItem() {
            const sections = document.querySelectorAll("section");
            const navLinks = document.querySelectorAll(".navbar-nav a.nav-link");

            sections.forEach((section, index) => {
                const rect = section.getBoundingClientRect();
                if (rect.top <= 150 && rect.bottom >= 150) {
                    navLinks[index].classList.add("active");
                } else {
                    navLinks[index].classList.remove("active");
                }
            });
        }

        // Event listener for scroll
        window.addEventListener("scroll", updateActiveNavItem);

        // Initial call to set the active item on page load
        updateActiveNavItem();
    </script>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container-xl">
            <img src="{{ asset('portofolio/Assets/Logo.png') }}" alt="Logo" width="150" height="auto">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item mx-3 ">
                        <a class="nav-link active px-4" href="#home">Home</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link px-4" href="#aboutMe">About</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link px-4" href="#servicePage">Service</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link px-4" href="#blogPage">Blog</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link px-4" href="#EAS">Evaluasi Akhir Semester</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <section id="home" class="homePage bg-light">
        <div class="container">
            <div class="row ">
                <div class="col-7 intro-page ">
                    <div class="container mt-5 pt-5 ">

                        <h3 class="text-greeting">Hello mate&#128075;</h3>
                        <h1 class="text-describe">I'm Alif Faturrohman</h1=>
                            <h1 class="text-describe">a <span class="text-primary">Web Developer</span></h1>
                            <div class="mt-5 mb-lg-5">
                                <button class="btn btn-primary mr-3">Get to Know</button>
                                <button class="btn btn-secondary">Download CV </button>
                            </div>
                    </div>
                </div>
                <div class="col-5 intro-page  ">
                    <img class="img" src="{{ asset('portofolio/Assets/profilePhoto.png') }}" alt="profile photo">
                    <img src="{{ asset('portofolio/Assets/css.png') }}"
                        class="img-icon icon-1 animate__animated animate__shakeY animate__infinite" alt="">
                    <img src="{{ asset('portofolio/Assets/javascript.png') }}"
                        class="img-icon icon-2 animate__animated animate__shakeY animate__infinite" alt="">
                    <img src="{{ asset('portofolio/Assets/html.png') }}"
                        class="img-icon icon-3 animate__animated animate__shakeY animate__infinite" alt="">
                </div>
            </div>
        </div>
        </div>
    </section>

    <section id="aboutMe" class="pt-5">
        <div class="container pt-xl-5 ">

            <div class="row mt-4 pt-4">
                <div class="col-xl-6">
                    <img src="{{ asset('portofolio/Assets/photoProfile2.png') }}" class="img2" alt="">
                </div>

                <div class="col-6 pl-5 ">
                    <div class="container  aboutMe p-5">
                        <h1 class="text-primary my-0">My Intro</h1>
                        <h3 class="display-4 font-weight-bolder mt-0">About Me</h3>
                        <p>I am a student of ITS Information Systems, and as a youth from Central Java, I have a strong
                            enthusiasm for IT</p>
                        <table>
                            <tr>
                                <td class="pr-3 font-weight-bold">Name :</td>
                                <td class="pl-5">Alif Faturrohman</td>
                            </tr>
                            <tr>
                                <td class="pr-3 font-weight-bold">Date of Birth :</td>
                                <td class="pl-5">23 February 1504</td>
                            </tr>
                            <tr>
                                <td class="pr-3 font-weight-bold">Address :</td>
                                <td class="pl-5">Surabaya, East Java</td>
                            </tr>
                            <tr>
                                <td class="pr-3 font-weight-bold">Zip Code : </td>
                                <td class="pl-5">60111</td>
                            </tr>
                            <tr>
                                <td class="pr-3 font-weight-bold">Email :</td>
                                <td class="pl-5">aliffaturrohman11@gmail.com</td>
                            </tr>
                            <tr>
                                <td class="pr-3 font-weight-bold">Phone :</td>
                                <td class="pl-5">+62 836-5711-0027</td>
                            </tr>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="servicePage" class="service bg-light pb-5">
        <div class="container  pt-5">
            <h3 class="display-4 font-weight-bolder text-center text-capitalize">Service</h3>
            <h1 class="text-primary text-center mb-5">What i do for my clients?</h1>
            <div class="row text-center">
                <div class="col part">
                    <div class="cardService card pt-4">
                        <div class="card-body">
                            <img src="{{ asset('portofolio/Assets/web-icon.png') }}" class="imgService w-50"
                                alt="">
                            <h5 class="py-4 px-3">Website Development</h5>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="cardService card pt-4">
                        <div class="card-body">
                            <img src="{{ asset('portofolio/Assets/curve.png') }}" class="imgService w-50"
                                alt="">
                            <h5 class="py-4 mt-3">Graphic Design</h5>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="cardService card pt-4">
                        <div class="card-body">
                            <img src="{{ asset('portofolio/Assets/bar-chart.png') }}" class="imgService w-50"
                                alt="">
                            <h5 class="py-4 mt-3">Data Management</h5>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="cardService card pt-4">
                        <div class="card-body">
                            <img src="{{ asset('portofolio/Assets/camera.png') }}" class="imgService w-50"
                                alt="">
                            <h5 class="py-4 mt-3">Photography</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-center mt-4 mx-auto">
                <div class="col-3"></div>
                <div class="col-3">
                    <div class="cardService card pt-4">
                        <div class="card-body">
                            <img src="{{ asset('portofolio/Assets/video.png') }}" class="imgService w-50"
                                alt="">
                            <h5 class="py-4 mt-3">Videography</h5>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="cardService card pt-4">
                        <div class="card-body">
                            <img src="{{ asset('portofolio/Assets/consultant.png') }}" class="imgService w-50"
                                alt="">
                            <h5 class="py-4 mt-3">IT Consultant</h5>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="blogPage" class="blog">
        <div class="container">
            <h1 class="display-3 font-weight-bolder text-primary text-capitalize mt-5">Blog</h1>
            <h2>Our Latest Blogs</h2>

            <div id="carouselExampleControls" class="carouselColumn carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row pt-4 px-4 pb-5">
                            <div class="card col mx-3 px-0 h-100 cardPage">
                                <div class="card-img px-0">
                                    <img src="{{ asset('portofolio/Assets/samsungGalaxy.png') }}" class="img-fluid"
                                        style="border-radius: 30px 30px 0px 0px;" alt="">
                                </div>
                                <div class="card-body">
                                    <h4>Review Samsung Galaxy S22</h4>
                                    <p class="pb-3">Smartphone flagship terbaru dari Samsung yang memiliki fitur
                                        canggih
                                        seperti
                                        kamera 108 MP, baterai 5000 mAh, dan layar 120 Hz.</p>
                                    <button class="btn btn-primary text-capitalize mt-5">read more &nbsp; <i
                                            class="fa-solid fa-chevron-right" style="color: #ffffff;"></i></button>
                                </div>
                            </div>
                            <div class="card col mx-3 px-0 h-100 cardPage">
                                <div class="card-img px-0">
                                    <img src="{{ asset('portofolio/Assets/machineLearning.png') }}" class="img-fluid"
                                        style="border-radius: 30px 30px 0px 0px;" alt="">
                                </div>
                                <div class="card-body">
                                    <h4>Pengenalan Machine Learning untuk Pemula</h4>
                                    <p class="pb-3 mb-3">Apa itu machine learning? Bagaimana cara kerjanya? Dan apa
                                        manfaatnya bagi dunia?
                                        Temukan jawabannya di blog ini</p>
                                    <button class="btn btn-primary text-capitalize mt-5">read more &nbsp; <i
                                            class="fa-solid fa-chevron-right" style="color: #ffffff;"></i></button>
                                </div>
                            </div>
                            <div class="card col mx-3 px-0 h-100 cardPage">
                                <div class="card-img px-0">
                                    <img src="{{ asset('portofolio/Assets/blockchain.png') }}" class="img-fluid"
                                        style="border-radius: 30px 30px 0px 0px;" alt="">
                                </div>
                                <div class="card-body ">
                                    <h4>Perkembangan Teknologi Blockchain dan Aplikasinya di Berbagai Bidang</h4>
                                    <p class="pb-2"> Blockchain adalah teknologi yang mampu menyimpan data secara
                                        terdesentralisasi
                                        dan transparan</p>
                                    <button class="btn btn-primary text-capitalize mt-4">read more &nbsp; <i
                                            class="fa-solid fa-chevron-right" style="color: #ffffff;"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row pt-4 px-4 pb-5">
                            <div class="card col mx-3 px-0 h-100 cardPage">
                                <div class="card-img px-0">
                                    <img src="{{ asset('portofolio/Assets/laptopGaming.png') }}" class="img-fluid"
                                        style="border-radius: 30px 30px 0px 0px;" alt="">
                                </div>
                                <div class="card-body">
                                    <h4>Tips Memilih Laptop Gaming yang Sesuai dengan Kebutuhan</h4>
                                    <p class="pb-3">Anda suka bermain game di laptop? Jika ya, maka Anda perlu
                                        memilih
                                        laptop gaming yang sesuai dengan kebutuhan Anda.</p>
                                    <button class="btn btn-primary text-capitalize mt-3">read more &nbsp; <i
                                            class="fa-solid fa-chevron-right" style="color: #ffffff;"></i></button>
                                </div>
                            </div>
                            <div class="card col mx-3 px-0 h-100 cardPage">
                                <div class="card-img px-0">
                                    <img src="{{ asset('portofolio/Assets/editVideo.png') }}" class="img-fluid"
                                        style="border-radius: 30px 30px 0px 0px;" alt="">
                                </div>
                                <div class="card-body">
                                    <h4>Tips dan Trik Editing Video untuk Pemula</h4>
                                    <p class="pb-3">Jika Anda baru mulai belajar editing video, blog ini cocok untuk
                                        Anda. Blog ini berisi tips dan trik untuk membuat video Anda lebih keren</p>
                                    <button class="btn btn-primary text-capitalize mt-5">read more &nbsp; <i
                                            class="fa-solid fa-chevron-right" style="color: #ffffff;"></i></button>
                                </div>
                            </div>
                            <div class="card col mx-3 px-0 h-100 cardPage">
                                <div class="card-img px-0">
                                    <img src="{{ asset('portofolio/Assets/website.png') }}" class="img-fluid"
                                        style="border-radius: 30px 30px 0px 0px;" alt="">
                                </div>
                                <div class="card-body px-3">
                                    <h4>Cara Mudah Membuat Website</h4>
                                    <p class="pb-3"> Apakah Anda ingin membuat website sendiri tanpa harus menguasai
                                        bahasa pemrograman? Temukan jawabannya di blog ini</p>
                                    <button class="btn btn-primary text-capitalize mt-5">read more &nbsp; <i
                                            class="fa-solid fa-chevron-right" style="color: #ffffff;"></i></button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>

    <section id="contact" class="mt-5">
        <div class="container">
            <div class="card h-100 mb-5">
                <div class="row pb-5">
                    <div class="col-6 pl-5">
                        <h1 class="display-4 font-weight-bolder text-primary text-capitalize mt-5">Contact Us</h1>
                        <p>Please use our contact form for all information requests or contact us directly using the
                            contact information below. All information will be treated with complete confidentiality.
                        </p>
                        <form id="myForm" class="mt-4">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <input type="text" name="firstName" id="firstName" class="form-control"
                                            placeholder="First Name">
                                        <small id="firstNameAlert" class="form-text text-danger"></small>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <input type="text" name="lastName" id="lastName" class="form-control"
                                            placeholder="Last Name">
                                        <small id="lastNameAlert" class="form-text text-danger"></small>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" id="email"
                                            placeholder="Email">
                                        <small id="emailAlert" class="form-text text-danger"></small>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <input type="text" name="company" id="company" class="form-control"
                                            placeholder="Company Name">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <input type="text" name="position" id="position" class="form-control"
                                            placeholder="Position">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <label for="exampleFormControlTextarea1" class="form-label"></label>
                                    <textarea class="form-control" name="message" id="message" rows="3" placeholder="Message"></textarea>
                                    <small id="messageAlert" class="form-text text-danger"></small>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-12">
                                    <button type="button" id="submitButton" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                        <script>
                            document.getElementById('submitButton').addEventListener('click', function() {
                                document.getElementById('firstNameAlert').textContent = '';
                                document.getElementById('lastNameAlert').textContent = '';
                                document.getElementById('emailAlert').textContent = '';
                                document.getElementById('messageAlert').textContent = '';

                                const firstName = document.getElementById('firstName').value;
                                if (firstName === '') {
                                    document.getElementById('firstNameAlert').textContent = 'Please fill the form';
                                } else if (!/^[A-Za-z]+$/.test(firstName)) {
                                    document.getElementById('firstNameAlert').textContent = 'Form cannot be filled with numbers';
                                }

                                const lastName = document.getElementById('lastName').value;
                                if (lastName === '') {
                                    document.getElementById('lastNameAlert').textContent = 'Please fill the form';
                                } else if (!/^[A-Za-z]+$/.test(lastName)) {
                                    document.getElementById('lastNameAlert').textContent = 'Form cannot be filled with numbers';
                                }

                                const email = document.getElementById('email').value;
                                if (email === '') {
                                    document.getElementById('emailAlert').textContent = 'Please fill the form';
                                } else if (!email.includes('@')) {
                                    document.getElementById('emailAlert').textContent = 'Please fill with an email address';
                                }

                                const message = document.getElementById('message').value;
                                if (message === '') {
                                    document.getElementById('messageAlert').textContent = 'Please fill the form';
                                }
                            });
                        </script>
                    </div>
                    <div class="col-6 d-flex justify-content-center align-items-center">
                        <img src="{{ asset('portofolio/Assets/contact.png') }}" class="w-75" alt=""
                            style="filter: drop-shadow(0px 8px 75px 13px rgb(0, 153, 255));">
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section>
        <center>
            <div class="container">
                <ul id="EAS" class="list-unstyled">
                    <li class="d-md-inline d-block p-3"><a class="btn btn-danger" href="{{ route('file1') }}"
                            role="button">Item 1</a></li>
                    <li class="d-md-inline d-block p-3"><a class="btn btn-danger" href="{{ route('file2') }}"
                            role="button">Item 2</a></li>
                    <li class="d-md-inline d-block p-3"><a class="btn btn-danger" href="{{ route('file3') }}"
                            role="button">Item 3</a></li>
                    <li class="d-md-inline d-block p-3"><a class="btn btn-danger" href="{{ route('file4') }}"
                            role="button">Item 4</a></li>
                    <li class="d-md-inline d-block p-3"><a class="btn btn-danger" href="{{ route('file5') }}"
                            role="button">Item 5</a></li>
                    <li class="d-md-inline d-block p-3"><a class="btn btn-danger" href="{{ route('file6') }}"
                            role="button">Item 6</a></li>
                </ul>
                <ul class="list-unstyled">
                    <li class="d-md-inline d-block p-3"><a class="btn btn-warning" href="/mahasiswa"
                            role="button">Mahasiswa</a></li>
                    <li class="d-md-inline d-block p-3"><a class="btn btn-warning" href="/baju"
                            role="button">Baju</a></li>
                    <li class="d-md-inline d-block p-3"><a class="btn btn-warning" href="/nilaikuliah"
                            role="button">Nilai Kuliah</a></li>
                    <li class="d-md-inline d-block p-3"><a class="btn btn-warning" href="/pegawai"
                            role="button">Pegawai</a></li>
                </ul>
            </div>
        </center>


    </section>

    <footer class="text-white text-lg-start bg-primary">
        <div class="container p-4">
            <div class="row mt-4">
                <div class="col-lg-4 mb-4">
                    <h5 class="text-uppercase mb-4">About</h5>

                    <p>
                        I am a student of ITS Information Systems, and as a youth from Central Java, I have a strong
                        enthusiasm for IT
                    </p>


                    <div class="mt-4">
                        <a type="button" class="btn btn-floating btn-warning btn-lg"><i
                                class="fab fa-facebook-f"></i></a>
                        <a type="button" class="btn btn-floating btn-warning btn-lg"><i
                                class="fab fa-dribbble"></i></a>
                        <a type="button" class="btn btn-floating btn-warning btn-lg"><i
                                class="fab fa-twitter"></i></a>
                        <a type="button" class="btn btn-floating btn-warning btn-lg"><i
                                class="fab fa-google-plus-g"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 mb-4 pl-5">
                    <h5 class="text-uppercase mb-4">Service</h5>
                    <ul class="fa-ul mt-4 ml-0">
                        <li>Website Development</li>
                        <li>Graphic Design</li>
                        <li>Data Management</li>
                        <li>Photography</li>
                        <li>Videography</li>
                        <li>IT Consultant</li>
                    </ul>
                </div>

                <div class="col-4 mb-4">
                    <h5 class="text-uppercase">Have a Question?</h5>
                    <ul class="fa-ul mt-4 ml-4">
                        <li class="mb-3">
                            <span class="fa-li"><i class="fas fa-home"></i></span>
                            Surabaya, East Java 60111
                        </li>
                        <li class="mb-3">
                            <span class="fa-li"><i class="fas fa-envelope"></i></span>aliffaturrohman11@gmail.com
                        </li>
                        <li class="mb-3">
                            <span class="fa-li"><i class="fas fa-phone"></i></span><span class="ms-2">+62
                                836-5711-0027
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2023 Copyright:
            <a class="text-white" href="https://aliffaturrohman.github.io/">aliffaturrohman.github.io</a>
        </div>
    </footer>

</body>

</html>
