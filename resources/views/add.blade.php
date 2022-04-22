<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik+Moonrocks&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">

    <title>Cahyaning's Game</title>
</head>

<body>

    <audio>
        <source src="audio/bgm.mp3" type="audio/mpeg">
    </audio>

    <header>
        <div class="container">
            <h1>Math 4 Kids</h1>
            <ul>
                <li><a href="/">Home</a></li>
                <li class="current"><a href="/add">Add</a></li>
                <li><a href="/substract">Substract</a></li>
                <li><a href="/multiply">Multiply</a></li>
                <li><a href="/divide">Divide</a></li>
            </ul>
        </div>
    </header>

    <div class="wrapper">
        <div class="equation">
            <h1 id="num1" style="color: #fe4a49;">1</h1>
            <h1 style="color: #2ab7ca">+</h1>
            <h1 id="num2" style="color: #fed766">1</h1>
            <h1 style="color: #fe4a49">=</h1>
            <h1 style="color: gray;">?</h1>
        </div>

        <div class="answer-options">
            <h1 id="option1">1</h1>
            <h1 id="option2">2</h1>
            <h1 id="option3">3</h1>
        </div>
    </div>

    <div class="footer">
        <!-- <img src="rsc/Logo.jpg" alt=""> -->
        <center>
            <h3>2005046005</h3>
            <br>
            <h3>Fania Cahyaning Wulan</h3>
        </center>
    </div>
    <script src="/func/add.js"></script>
</body>

</html>