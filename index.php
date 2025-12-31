<?php
include "koneksi.php";
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="icon" href="img/logo.png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <style>
        .avatar img{
            border: 4px solid #3A58B7;
            transition: transform .2s;
        }

        .avatar img:hover {
            transform: scale(1.1) rotateZ(10deg);
            filter: grayscale(0.5);
        }

        .profile-table {
            border-collapse: separate;
            border-spacing: 0 8px;
        }

        .profile-table th {
            font-weight: 600;
            color: #2C2F48;
            width: 35%;
            padding: 6px 0;
        }

        .profile-table td {
            color: #4B4B4B;
            vertical-align: middle;
        }

        .card-schedule {
            border-color: #3A58B7;
            background-color: #FBF8FD;
            transition: transform .2s;
            font-family: "Inter", sans-serif;
        }

        .card-schedule:hover {
            transform: scale(1.025);
        }
        
        .card-schedule-header {
            background-color: #3A58B7;
            color: white;
            font-size: 18px;
            font-weight: 600;
        }

        .card-schedule-tag {
            background-color: #DEE1F9;
            display: inline;
            padding: 4px 8px;
            border-radius: 4px;
            font-size: 16px;
            font-weight: 500;
            color: #161B2C;
        }
    </style>
</head>

<body id="body" style="background-color: #FBF8FD;" onload="init()">
    <nav id="nav" class="navbar navbar-expand-lg sticky-top">
        <div class="container">
            <a class="navbar-brand" style="color: #3A58B7;" href="#">Javier Gavra</a>
            <button class="navbar-toggler" style="color: #3A58B7;" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-dark">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#profile">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#schedule">Schedule</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#article">Article</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#gallery">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php" target="_blank">Login</a>
                </li>
                <li class="nav-item">
                    <button id="light_mode" onclick="lightMode()" type="button" class="btn btn-warning"><i class="bi bi-sun"></i></button>
                    <button id="dark_mode" onclick="darkMode()" type="button" class="btn btn-dark"><i class="bi bi-moon"></i></button>
                </li>
            </ul>
            </div>
        </div>
    </nav>

    <!-- hero -->
    <section id="hero" class="text-center p-5 text-md-start" style="background-color: #3A58B7;">
        <div class="container">
            <div class="d-md-flex flex-sm-row-reverse align-items-center justify-content-between">
                <img src="img/hero.jpg" class="img-fluid rounded-3" width="300">
                <div>
                    <h1 class="fw-bold display-4 text-white">Javier Gavra Abhinaya</h1>
                    <h4 class="lead display-6" style="color: #E2E1EC;">The Best Android/Flutter/Mobile Programmer in<br>Indonesia Since 2025</h4>
                </div>
            </div>
        </div>
    </section>

    <!-- Profile -->
    <section id="profile" class="text-center py-5">
        <div class="container">
            <h1 class="fw-bold display-4 pb-3" style="color: #3A58B7;">Profil Mahasiswa</h1>
            <div class="row justify-content-center align-items-center">
                <div class="col-md-4 mb-4">
                    <div class="position-relative d-inline-block avatar">
                        <img src="img/profil.png" class="rounded-circle shadow-lg object-fit-cover" width="220" height="220">
                        <span class="position-absolute bottom-0 end-0 translate-middle badge rounded-pill fs-6" style="background-color: #3A58B7;">
                            <i class="bi bi-code-slash"></i>
                        </span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card rounded-4" style="background-color: #EFEDF1;">
                        <div class="card-body p-4 justify-content-center">
                            <h3 class="card-title fw-bold" style="color: #3A58B7;">Javier Gavra Abhinaya</h3>
                            <h6 class="card-subtitle mb-3">Mahasiswa Teknik Informatika 💻</h6>
                            <table class="profile-table mx-auto w-100">
                                <tr>
                                    <th class="text-end">NIM</th>
                                    <td class="px-2 text-muted">:</td>
                                    <td class="text-start">A11.2024.15771</td>
                                </tr>
                                <tr>
                                    <th class="text-end">Program Studi</th>
                                    <td class="px-2 text-muted">:</td>
                                    <td class="text-start">Teknik Informatika</td>
                                </tr>
                                <tr>
                                    <th class="text-end">Email</th>
                                    <td class="px-2 text-muted">:</td>
                                    <td class="text-start">javier@mhs.dinus.ac.id</td>
                                </tr>
                                <tr>
                                    <th class="text-end">Telepon</th>
                                    <td class="px-2 text-muted">:</td>
                                    <td class="text-start">+62 858 6647 8673</td>
                                </tr>
                                <tr>
                                    <th class="text-end">Alamat</th>
                                    <td class="px-2 text-muted">:</td>
                                    <td class="text-start">Margorejo, RT 03/RW 10, Dawe, Kudus</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Schedule -->
    <section id="schedule" class="text-center p-5" style="background-color: #E2E1EC;">
        <div class="container">
            <h1 id="schedule_title" class="fw-bold display-4 pb-3">Jadwal Kuliah & Kegiatan Mahasiswa</h1>
            <div class="row row-cols-1 row-cols-md-4 g-4 justify-content-center">
                <div class="col">
                    <div class="card h-100 card-schedule">
                        <div class="card-header card-schedule-header">Senin</div>
                        <div class="card-body">
                            <div class="py-1">
                                <h5 class="card-title fs-6 fw-semibold mb-1">Loogika Informatika</h5>
                                <p class="card-text fs-6">09:30 - 12:00</p>
                                <p class="card-schedule-tag">H.5.12</p>
                            </div>
                            <hr>
                            <div class="py-1">
                                <h5 class="card-title fs-6 fw-semibold mb-1">Basis Data</h5>
                                <p class="card-text fs-6">14:10 - 15:50</p>
                                <p class="card-schedule-tag">H.5.10</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 card-schedule">
                        <div class="card-header card-schedule-header">Selasa</div>
                        <div class="card-body">
                            <div class="py-1">
                                <h5 class="card-title fs-6 fw-semibold mb-1">Rekayasa Perangkat Lunak</h5>
                                <p class="card-text fs-6">12:30 - 15:00</p>
                                <p class="card-schedule-tag">H.5.10</p>
                            </div>
                            <hr>
                            <div class="py-1">
                                <h5 class="card-title fs-6 fw-semibold mb-1">Sistem Operasi</h5>
                                <p class="card-text fs-6">15:30 - 18:00</p>
                                <p class="card-schedule-tag">H.3.2</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 card-schedule">
                        <div class="card-header card-schedule-header">Rabu</div>
                        <div class="card-body">
                            <div class="py-1">
                                <h5 class="card-title fs-6 fw-semibold mb-1">Kriptografi</h5>
                                <p class="card-text fs-6">09:30 - 12:00</p>
                                <p class="card-schedule-tag">H.5.13</p>
                            </div>
                            <hr>
                            <div class="py-1">
                                <h5 class="card-title fs-6 fw-semibold mb-1">Pemrograman Berbasis Web</h5>
                                <p class="card-text fs-6">12:30 - 14:10</p>
                                <p class="card-schedule-tag">D.2.J</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 card-schedule">
                        <div class="card-header card-schedule-header">Kamis</div>
                        <div class="card-body">
                            <div class="py-1">
                                <h5 class="card-title fs-6 fw-semibold mb-1">Basis Data</h5>
                                <p class="card-text fs-6">14:10 - 15:50</p>
                                <p class="card-schedule-tag">D.2.K</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 card-schedule">
                        <div class="card-header card-schedule-header">Jumat</div>
                        <div class="card-body">
                            <div class="py-1">
                                <h5 class="card-title fs-6 fw-semibold mb-1">Propabilitas dan Statistik</h5>
                                <p class="card-text fs-6">09:30 - 12:00</p>
                                <p class="card-schedule-tag">H.3.2</p>
                            </div>
                            <hr>
                            <div class="py-1">
                                <h5 class="card-title fs-6 fw-semibold mb-1">Penambangan Data</h5>
                                <p class="card-text fs-6">12:30 - 15:00</p>
                                <p class="card-schedule-tag">H.4.3</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 card-schedule">
                        <div class="card-header card-schedule-header">Sabtu</div>
                        <div class="card-body">
                            <div class="py-1">
                                <p class="card-text">Tidak ada jadwal</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 card-schedule">
                        <div class="card-header card-schedule-header">Minggu</div>
                        <div class="card-body">
                            <div class="py-1">
                                <p class="card-text">Tidak ada jadwal</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- article begin -->
    <section id="article" class="text-center p-5">
        <div class="container">
            <h1 class="fw-bold display-4 pb-3">article</h1>
            <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
            <?php
            $sql = "SELECT * FROM article ORDER BY tanggal DESC";
            $hasil = $conn->query($sql); 

            while($row = $hasil->fetch_assoc()){
            ?>
                <div class="col">
                    <div class="card h-100">
                        <img src="img/<?= $row["gambar"]?>" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title"><?= $row["judul"]?></h5>
                            <p class="card-text">
                                <?= $row["isi"]?>
                            </p>
                        </div>
                        <div class="card-footer">
                            <small class="text-body-secondary">
                                <?= $row["tanggal"]?>
                            </small>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?> 
            </div>
        </div>
    </section>
    <!-- article end -->
    
    <!-- gallery -->
    <section id="gallery" class="text-center p-5" style="background-color: #3A58B7;">
        <div class="container">
            <h1 class="fw-bold display-4 pb-3 text-white">Gallery</h1>
            <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/me1.jpg" class="d-block w-100 object-fit-cover" alt="..." height="520">
                    </div>
                    <div class="carousel-item">
                        <img src="img/me2.jpg" class="d-block w-100 object-fit-cover" alt="..." height="520">
                    </div>
                    <div class="carousel-item">
                        <img src="img/me3.webp" class="d-block w-100 object-fit-cover" alt="..." height="520">
                    </div>
                    <div class="carousel-item">
                        <img src="img/me4.jpg" class="d-block w-100 object-fit-cover" alt="..." height="520">
                    </div>
                    <div class="carousel-item">
                        <img src="img/me5.jpg" class="d-block w-100 object-fit-cover" alt="..." height="520">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

    <!-- footer -->
    <footer class="text-center p-5">
        <div id="social_media">
            <a href="https://www.instagram.com/jarganaya.exe/"><i class="bi bi-instagram h2 p-2 text-dark"></i></a>
            <a href="https://www.linkedin.com/in/javier-gavra-abhinaya-b55998247/"><i class="bi bi-linkedin h2 p-2 text-dark"></i></a>
            <a href="https://github.com/JavierGavra"><i class="bi bi-github h2 p-2 text-dark"></i></a>
        </div>
        <div id="copyright">
            Javier Gavra Abhinaya &copy;2025
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>

    <script>
        const primaryContainer = "#DEE1F9"
        const onPrimaryContainer = "#161B2C"
        const surface = "#FBF8FD"
        const surfaceVariant = "#E2E1EC"
        const surfaceContainer = "#EFEDF1"
        
        const darkPrimaryContainer = "#1D3F9E"
        const darkOnPrimaryContainer = "#DCE1FF"
        const darkSurface = "#131316"
        const darkSurfaceVariant = "#343438"
        const darkSurfaceContainer = "#1F1F23"

        function init() {
            lightMode()

            const cards = document.querySelectorAll(".card-schedule");
            const colorOfDays = ["#2C30A5", "#3A58B7", "#0096C7", "#2D6A4F", "#75546F", "#6C757D", "#D62828"];
            for (let i = 0; i < cards.length; i++) {
                cards[i].style.borderColor = colorOfDays[i];
                cards[i].querySelector(".card-schedule-header").style.backgroundColor = colorOfDays[i];
            }
        }

        function lightMode() {
            console.log("Light")
            document.body.style.backgroundColor = surface

            // Nav
            document.getElementById('nav').style.backgroundColor = surface
            const navItems = document.getElementsByClassName("nav-link");
            for (let i = 0; i < navItems.length; i++) {
                navItems[i].classList.remove("text-white")
                navItems[i].classList.add("text-dark")
            }

            // Profile
            const profileCard = document.querySelector("#profile .card");
            if (profileCard) {
                profileCard.style.backgroundColor = surfaceContainer;
                profileCard.querySelector(".card-subtitle").style.color = "#6C757D";
                const table = profileCard.querySelector(".profile-table");
                if (table) {
                    table.querySelectorAll("th").forEach(th => th.style.color = onPrimaryContainer);
                    table.querySelectorAll("td").forEach(td => td.style.color = "#4B4B4B");
                }
            }
            
            // Schedule
            document.getElementById('schedule_title').style.color = "black"
            document.getElementById('schedule').style.backgroundColor = surfaceVariant;
            const scheduleCards = document.querySelectorAll(".card-schedule");
            scheduleCards.forEach(card => {
                card.style.backgroundColor = surfaceContainer
                card.querySelectorAll('.card-title').forEach(title => {
                    title.classList.remove('text-white')
                    title.classList.add('text-dark')
                });
                card.querySelectorAll('.card-text').forEach(text => {
                    text.classList.remove('text-white')
                    text.classList.add('text-dark')
                });
                card.querySelectorAll('.card-schedule-tag').forEach(tag => {
                    tag.style.backgroundColor = primaryContainer;
                    tag.style.color = onPrimaryContainer;
                });
            });
            
            // Article
            document.getElementById('article_title').style.color = "black"
            const articleCards = document.querySelectorAll("#article .card-article");
            articleCards.forEach(card => {
                card.style.backgroundColor = surfaceContainer;
                card.querySelectorAll('.card-title').forEach(title => {
                    title.classList.remove('text-white')
                    title.classList.add('text-dark')
                });
                card.querySelectorAll('.card-text').forEach(text => {
                    text.classList.remove('text-white')
                    text.classList.add('text-dark')
                });
                card.querySelector(".card-footer").style.backgroundColor = surfaceVariant;
            });
            
            // Footer
            const icons = document.getElementById("social_media").querySelectorAll('i')
            icons.forEach(icon => {
                icon.classList.remove("text-white")
                icon.classList.add("text-dark")
            })
            document.getElementById('copyright').style.color = "black"
        }
        
        function darkMode() {
            console.log("Dark");
            document.body.style.backgroundColor = darkSurface;
            
            // Nav
            document.getElementById('nav').style.backgroundColor = darkSurface;
            const navItems = document.getElementsByClassName("nav-link");
            for (let i = 0; i < navItems.length; i++) {
                navItems[i].classList.remove("text-dark");
                navItems[i].classList.add("text-white");
            }

            // Profile
            const profileCard = document.querySelector("#profile .card");
            if (profileCard) {
                profileCard.style.backgroundColor = darkSurfaceContainer;
                profileCard.querySelector(".card-subtitle").style.color = "#A9A9A9";
                const table = profileCard.querySelector(".profile-table");
                if (table) {
                    table.querySelectorAll("th").forEach(th => th.style.color = darkOnPrimaryContainer);
                    table.querySelectorAll("td").forEach(td => td.style.color = "#C9C9C9");
                }
            }
            
            // Schedule
            document.getElementById('schedule_title').style.color = "white"
            document.getElementById('schedule').style.backgroundColor = darkSurfaceVariant;
            const scheduleCards = document.querySelectorAll(".card-schedule");
            scheduleCards.forEach(card => {
                card.style.backgroundColor = darkSurfaceContainer
                card.querySelectorAll('.card-title').forEach(title => {
                    title.classList.remove('text-dark')
                    title.classList.add('text-white')
                });
                card.querySelectorAll('.card-text').forEach(text => {
                    text.classList.remove('text-dark')
                    text.classList.add('text-white')
                });
                card.querySelectorAll('.card-schedule-tag').forEach(tag => {
                    tag.style.backgroundColor = darkPrimaryContainer;
                    tag.style.color = darkOnPrimaryContainer;
                });
            });

            // Article
            document.getElementById('article_title').style.color = "white";
            const articleCards = document.querySelectorAll("#article .card-article");
            articleCards.forEach(card => {
                card.style.backgroundColor = darkSurfaceContainer;
                card.querySelectorAll('.card-title').forEach(title => {
                    title.classList.remove('text-dark')
                    title.classList.add('text-white')
                });
                card.querySelectorAll('.card-text').forEach(text => {
                    text.classList.remove('text-dark')
                    text.classList.add('text-white')
                });
                card.querySelector(".card-footer").style.backgroundColor = darkSurfaceVariant;
            });
            
            // Footer
            const icons = document.getElementById("social_media").querySelectorAll('i')
            icons.forEach(icon => {
                icon.classList.remove("text-dark")
                icon.classList.add("text-white")
            })
            document.getElementById('copyright').style.color = "white"
        }
    </script>
</body>

</html>