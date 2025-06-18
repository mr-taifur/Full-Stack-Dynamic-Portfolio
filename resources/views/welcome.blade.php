<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAIFUR</title>
    <style>
        body {
            padding: 0;
            margin: 0;
            background-image: url('assets/images/bg.jpg');
            background-size: cover;
            background-position: center center;
            background-attachment: fixed;
        }

        .disp-flex {
            display: flex;
        }

        .flex-justify-space {
            justify-content: space-between;
        }

        .p-10 {
            padding: 5px;
        }

        nav {
            background-color: aquamarine;
        }

        .no-decor {
            text-decoration: none;
        }

        .no-decor:hover {}

        img {
            width: 50px;
            height: auto;
            margin-right: 10px;
        }

        h3 {
            display: flex;
            align-items: center;
        }

        section>.disp-flex.flex-justify-space>div {
            color: white;
        }
    </style>
</head>

<body>
    <nav>
        <div class="disp-flex flex-justify-space">
            <div>
                <h3>

                    <img src="{{ 'assets/images/taifur.png' }}" alt="">
                    Taifur
                </h3>
            </div>
            <div class="nav-links">
                <a class="p-10 no-decor" href="#">About</a>
                <a class="p-10 no-decor" href="#">Research Projects</a>
                <a class="p-10 no-decor" href="#">Blog</a>
                <a class="p-10 no-decor" href="#">Contact</a>
                <a class="p-10 no-decor" href="#">Linkedin</a>
                <a class="p-10 no-decor" href="#">Git</a>
                <a class="p-10 no-decor" href="#">Resume</a>
            </div>
        </div>
    </nav>
    <section>
        <div class="disp-flex flex-justify-space">
            <div>
                About
            </div>
        </div>
        <div class="disp-flex flex-justify-space">
            <div>
                More About
            </div>
            <div>
                <h1 class="title">My Projects</h1>
                <p id="test">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, velit.</p>
            </div>
        </div>
    </section>
    <script src="{{ asset('js/script.js') }}"></script>

</body>

</html>
