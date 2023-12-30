
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- feather icon --}}
    <script src="https://unpkg.com/feather-icons"></script>

    {{-- css --}}
    <link rel="stylesheet" href="css/style.css">

    <title>Niki.play | Home</title>
</head>
<body>
    <nav class="navbar">
        <a class="navbar-logo" href="#">
            <img src="logo.jpg" alt="" width="200" />
        </a>

        <div class="navbar-nav">
            <a href="#home">Home</a>
            <a href="#tranding">Tranding</a>
            <a href="#recomend">Recomendasi</a>
        </div>

        <div class="navbar-extra">
            <a href="#" id="search"><i data-feather="search"></i></a>
            <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
            <a href="#" id="login"><i data-feather="log-in"></i></a>
        </div>
    </nav>
    
    {{-- nav end --}}
    <section class="hero" id="hero">
        <h1>Terbaru</h1>
    </section>

    {{-- hero section start --}}
    {{-- <section class="hero" id="home">
        <main class="content">

        </main>
    </section> --}}

    {{-- hero section end --}}

    <div class="row">
        <div class="card">
        <img src="img/terbaru/jung_e.png" >
        <p class="text">Jung_e</p>
        </div>
    </div>



    {{-- feather icons --}}
    <script>
        feather.replace();
      </script>


    {{-- JavaScript --}}

    <script src="js/script.js"></script>

</body>
</html>