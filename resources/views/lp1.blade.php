<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>LP1</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f3f3f3;
      display: flex;
      flex-direction: column;
      align-items: center;
      height: 100vh;
      padding-top: 50px;
    }

    .card {
      background-color: white;
      width: 300px;
      padding: 20px;
      border-radius: 15px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
      transition: all 0.3s ease;
      cursor: pointer;
      text-align: center;
    }

    .card:hover {
      box-shadow: 0 8px 16px rgba(0,0,0,0.2);
      transform: scale(1.03);
    }

    .card img {
      width: 100%;
      border-radius: 10px;
      margin-bottom: 15px;
    }

    .card-title {
      font-size: 24px;
      font-weight: bold;
      margin-bottom: 10px;
    }

    .card-desc {
      display: none;
      font-size: 16px;
      color: #444;
      margin-top: 15px;
    }

    .card.open + .card-desc {
      display: block;
    }
  </style>
</head>
<body>

  <div class="card" id="infoCard">
    <img src="taifur.png" alt="Image">
    <div class="card-title">lp-1</div>
  </div>

  <div class="card-desc" id="cardText">Hello there</div>

  <script>
    document.getElementById("infoCard").addEventListener("click", function () {
      this.classList.toggle("open");
    });
  </script>

</body>
</html>
