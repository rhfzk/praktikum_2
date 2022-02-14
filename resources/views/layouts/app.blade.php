<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Templating Blade Laravel</title>
</head>
<body>
    <header>
        <h2>WELCOME TO WEBSITE RPL</h2>
        <nav>
            <a href="/rpl">HOME</a>
            |
            <a href="/rpl/tentang">TENTANG</a>
            |
            <a href="/rpl/kontak">KONTAK</a>
        </nav>
    </header>

    <hr/>
    <br/>
    <br/>

    <!-- bagian judul halaman blog -->
    <h3> @yield('judul_halaman') </h3>

    <!-- bagian konten blog -->
    @yield('konten')

    <br/>
    <br/>
    <hr/>
    <footer>
        <p>&copy; <a href="#"></a></p>
    </footer>
</body>
</html>
