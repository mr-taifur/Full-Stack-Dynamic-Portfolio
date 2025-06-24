<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>taifur's Portfolio</title>
    <style>
         body {
            padding: 0;
            margin: 0;
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

        .p {
            padding: 10px;
        }

       nav {
    background-color: aquamarine;
    padding: 5px 15px;
}

h3 {
    display: flex;
    align-items: center; 
    margin: 0;
}

img {
    width: 50px;
    height: auto;
    margin-right: 10px;
    vertical-align: middle; 
}

    </style>
</head>

<body>
     <nav>
    <div class="disp-flex flex-justify-space">
        <div>
            <h3>
                <img id="avatar" src="{{ asset('assets/images/taifur.png') }}" alt="logo">
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
    </nav>
    <section>
            <h1 class="title">Hello I am Taifur</h1>
            <p id="test">Welcome to My portfolio</p>
        </div>
    </section>

    <script src="{{ asset('assets/script.js') }}"></script>
</body>

</html>