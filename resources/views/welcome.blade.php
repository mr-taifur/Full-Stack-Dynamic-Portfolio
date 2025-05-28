<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAIFUR</title>
    <style>
        body{
            padding: 0;
            margin: 0;
        }
        .disp-flex {
            display: flex;
        }
        .flex-justify-space {
            justify-content: space-between;

        }
        .p-10{
            padding: 10px;
        }
        nav{
            background-color: aquamarine
        }
        .no-decor{
            text-decoration: none;
        }
        .no-decor:hover{

        }
       
    </style>
</head>
<body>
    <nav>
        <div class="disp-flex flex-justify-space">
            <div>
                <h3>
                    Taifur
                </h3>
            </div>
            <div>
                <a class="p-10 no-decor" href="#">About</a>
                <a class="p-10 no-decor" href="#">Research Projects</a>
                <a class="p-10 no-decor" href="#">Blog</a>
                <a class="p-10 no-decor" href="#">Contact</a>
                <a class="p-10 no-decor" href="#">Linked IN</a>
                <a class="p-10 no-decor" href="#">Git</a>
                <a class="p-10 no-decor" href="#">Resume</a>
            </div>
        </div>
    </nav>
    <section>
        <div class="disp-flex flex-justify-space">
            <div>
                <img src="{{('assets/images/taifur.png')}}" alt="">
            </div>
            <div class="">
                About
            </div>
        </div>
        <div class="disp-flex flex-justify-space">
            <div>
                More About
            </div>
            <div>
                My Projects
            </div>
        </div>
    </section>
</body>
</html>
