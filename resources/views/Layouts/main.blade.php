<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Harmonica</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
    <link rel="icon" href="img/icon-logo.png">
</head>

<body>
    <header class='cabecalho'>

        @yield('nav')

    </header>

    <section class='conteudo'>

        @yield('content')

    </section>


    <section class='conteudo2'>

        @yield('content2')

    </section>

    <section class='conteudo3'>

        @yield('content3')

    </section>

    <section class='conteudo4'>

        @yield('content4')

    </section>

    <section class='conteudo5'>

        @yield('content5')

    </section>
    <section class='conteudo6'>

        @yield('content6')

    </section>
    <section class='conteudo7'>

        @yield('content7')

    </section>
    <!-- <section class='conteudo8'>

        @yield('content8')

    </section> -->
    <footer class='conteudo9'>

        @yield('content9')

    </footer>

    <div class="chat-whats hide" id="chat-whats">
        <header>
            <div class="user-whats"></div>
            <p>Harmônica Atomação</p>
            <button class="close-whats" id="close-whats"><i class="fa-solid fa-xmark"></i></button>
        </header>
        <section>
            <div class="chat">

            </div>
        </section>
        <footer>
            <div class="box-chat">
                <input type="text" name="" id="">
                <button><i class="fa-solid fa-paper-plane"></i></button>
            </div>
        </footer>

    </div>

    <button href='#' class='whats hide' id="open-whats"><i class="fa-brands fa-whatsapp"></i></button>

    <script src="js/myJS.js"></script>
</body>

</html>
