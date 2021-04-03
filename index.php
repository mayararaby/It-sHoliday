<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="weekendIcon.png" type="image/icon type">
    <link rel="stylesheet" href="style.css" />
    <title>Is it The Weekend ?</title>
    <style>
    </style>
</head>
<body>
    <div class="dark-layer">
        <div class="pyro" >
            <div class="before" id="before" style="display: none;"></div>
            <header id="textInHeader">
                <span id="tittle"> Is it The Weekend ?</span>
            </header>
            <div class="item button-hand btnArea" >
            <button onclick="weekend();">What day is today ?
                <div class="hands"></div>
            </button>
            </div>
            <div id="msgWeekend" >
                <h1 id="writeDate"></h1>
            </div>
            <div class="after" id="after" style="display: none;"></div>
        </div>
        <footer>
            <div id="textInFooter">
                <h4>
                    © 2021 . Is it The Weekend ? . All Rights Reserved Powered by Mayar Araby
                </h4>
            </div>
        </footer>
    </div>
    <script src="script.js"></script>
</body>
</html>