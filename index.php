<?php
// Home page for Yayasan Manbaul Huda Cihanjuang Blok C
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yayasan Manbaul Huda Cihanjuang Blok C</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', sans-serif;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            background: linear-gradient(to bottom, #c1e2c0, #4cc365);
            color: #222;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 40px;
        }

        .logo {
            display: flex;
            align-items: center;
        }

        .logo img {
            height: 60px;
            margin-right: 15px;
        }

        nav a {
            margin-left: 30px;
            text-decoration: none;
            color: #111;
            font-weight: 500;
            position: relative;
            transition: color 0.3s ease;
        }

        nav a::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: -5px;
            width: 0%;
            height: 2px;
            background-color: #007a33;
            transition: width 0.3s ease;
        }

        nav a:hover {
            color: #007a33;
        }

        nav a:hover::after {
            width: 100%;
        }

        nav a.clicked {
            background-color: #007a33;
            color: white !important;
            padding: 5px 10px;
            border-radius: 6px;
        }

        section {
            padding: 60px 40px;
        }

        .hero {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
        }

        .hero-text {
            max-width: 600px;
        }

        .hero-text h1 {
            font-size: 40px;
            margin: 10px 0;
            font-weight: bold;
        }

        .hero-text p {
            margin-top: 20px;
            line-height: 1.6;
        }

        .hero-img img {
            width: 400px;
            height: 400px;
            object-fit: cover;
            border-radius: 50%;
        }

        @media screen and (max-width: 768px) {
            .hero {
                flex-direction: column;
                align-items: flex-start;
            }

            .hero-img {
                margin-top: 30px;
                align-self: center;
            }
        }

        #tentang,
        #kontak {
            background-color: #ffffffb5;
            margin-top: 50px;
            border-radius: 15px;
        }

        #tentang h2,
        #kontak h2 {
            margin-bottom: 15px;
            color: #007a33;
        }
    </style>
</head>

<body>
    <header>
        <div class="logo">
            <img src="logo.png" alt="Logo Yayasan">
        </div>
        <nav>
            <a href="#home">Home</a>
            <a href="#tentang">Tentang Kami</a>
            <a href="infaq.php">Infaq</a>
            <a href="program.php">Program</a>
            <a href="#kontak">Kontak</a>
        </nav>
    </header>

    <!-- Section Home -->
    <section id="home" class="hero">
        <div class="hero-text">
            <p><strong>Assalamualaikum Warahmatullahi Wabarakatuh</strong></p>
            <h1>Selamat Datang</h1>
            <h2 style="font-size: 30px;">أَهْلًا وَسَهْلًا</h2>
            <p>
                Mari bersama menebar cahaya ilmu dan dakwah untuk umat, demi terwujudnya generasi
                yang beriman, berilmu, dan berakhlakul karimah.<br>
                Bersama Yayasan Manbaul Huda, kita bangun peradaban yang berlandaskan nilai-nilai Islam,
                melalui pendidikan, pengabdian, dan amal kebajikan.
            </p>
        </div>
        <div class="hero-img">
            <img src="image.png" alt="Menara Makkah">
        </div>
    </section>

    <!-- Section Tentang Kami -->
    <section id="tentang">
        <h2>Tentang Kami</h2>
        <p>
            Yayasan Manbaul Huda Cihanjuang Blok C merupakan lembaga sosial dan pendidikan
            yang berfokus pada pembinaan keagamaan dan pembangunan karakter Islami untuk masyarakat sekitar.
        </p>
    </section>

    <!-- Section Kontak -->
    <section id="kontak">
        <h2>Kontak</h2>
        <p>
            Alamat: Komplek Nusa Indah Raya Belakang, Cihanjuang Blok C, Cimahi, Jawa Barat<br>
            Telepon: 089652251225<br>
            Email: manbaulhuda17@gmail.com
        </p>
    </section>

    <script>
        document.querySelectorAll('nav a').forEach(link => {
            link.addEventListener('click', function () {
                document.querySelectorAll('nav a').forEach(a => a.classList.remove('clicked'));
                this.classList.add('clicked');
                setTimeout(() => {
                    this.classList.remove('clicked');
                }, 1000);
            });
        });
    </script>
</body>

</html>