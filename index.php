<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="weekendIcon.png" type="image/icon type">
    <title>It's Weekend ? </title>
    <style>
        
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&display=swap');
        *{
            font-family: 'Open Sans Condensed', sans-serif;
            color: #ffffff;
        }
        html{
            height: 99%;
        }
        .dark-layer {
        background-color: rgba(255, 255, 255, 0.35);
        position: fixed;
        height: 100%;
        width: 100%;
        z-index: 2;
        }
        body
        {
            background-image: url(bg_hero_10.jpg);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
            padding: 0 auto;
            margin: 0 auto;
            height: 97%;
        }
        h1{
            display:none;
            padding-top: 12px;
            margin-top: -100px;
            font-weight: bold;
            font-size: 45px;
        }
        #tittle
        {
            font: 75px "Caveat", sans-serif  !important;
        }
        #textInFooter ,#textInHeader ,#msgWeekend
        {
            text-align: center;
        }
        *:before, *:after {
        content: "";
        position: absolute;
        }
        #tittle::before
        {
            content: url(underline.png);
            padding-left: 2%;
            padding-top: 3%;
        }
        button {
        font-family: 'Open Sans Condensed', sans-serif  !important;
        background: #ffc83d9e;
        color: #ffffff;
        border: 2px solid #ffc83d;
        border-radius: 50px;
        padding: 0.8rem 2rem;
        font: 30px "Open Sans Condensed", sans-serif;
        font-weight: bold;
        outline: none;
        cursor: pointer;
        position: relative;
        transition: 0.2s ease-in-out;
        letter-spacing: 2px;
        }
        .button-hand button:before {
        content: "👇";
        font-size: 60px;
        transform: scaleX(-1);
        right: 0px;
        top: -68px;
        animation: up-down 1s infinite;
        }
        .button-hand button .hands:before, .button-hand button .hands:after {
        content: "👇";
        font-size: 40px;
        opacity: 0;
        transition: 0.4s ease-in-out;
        }
        .button-hand button .hands:before {
        transform: rotate(-60deg);
        left: -45px;
        top: -10px;
        }
        .button-hand button .hands:after {
        transform: rotate(170deg);
        right: 30px;
        top: 50px;
        }
        .button-hand button:hover .hands:before {
        opacity: 1;
        left: -35px;
        }
        .button-hand button:hover .hands:after {
        opacity: 1;
        top: 40px;
        }
        @keyframes up-down {
        50% {
            margin-top: -20px;
        }
        }
        .btnArea
        {
            margin: 10%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        #textInHeader
        {
            margin-top: 4%;
        }
        
        #textInFooter
        {
            position: absolute;
            bottom: 0;
            margin: auto ;
            margin-bottom: -5px;
            margin-right: 15px;
            right: 0px;
            font-size: 20px;
        }
        /* responsive */
        /* @media only screen and (min-width: 320 ) {

            #tittle
            {
                font: 55px "Caveat", sans-serif  !important;
            }
            #tittle::before
            {
                padding-top: 4%  !important; 
            }
            button 
            {
                font: 22px "Open Sans Condensed", sans-serif;
                margin-top: 57px  !important;
            }
            h1
            {
                margin-top: -40px  !important;
                font-size: 25px  !important;
            }
            h4
            {
                font-size: 13px  !important;
            }
        } */
    </style>
</head>
<body>
    <div class="dark-layer">
        <header id="textInHeader">
            <span id="tittle"> It's Weekend ?</span>
        </header>
        <div class="item button-hand btnArea" >
        <button onclick="weekend();">What day is today ?
            <div class="hands"></div>
        </button>
        <!-- <div class="name">Handsy</div> -->
        </div>
        <div id="msgWeekend" >
            <h1 id="writeDate"></h1>
        </div>
        <footer>
            <div id="textInFooter">
                <h4>
                    © 2021 . It's Weekend ? . All Rights Reserved Powered by Mayar Araby
                </h4>
            </div>
        </footer>
    </div>

    
    <script>
        function displayStatment() {
            document.getElementById("writeDate").style.display = "block";
            document.getElementById("msgWeekend").style.display = "block";
        }
        function weekend() {
            var day;
            switch (new Date().getDay()) {
            case 0:
                document.writeln("hh");
                day = "No its Sunday, You have to wait for 5 days";
                displayStatment();
                break;
            case 1:
                day = "No its Monday, You have to wait for 4 days";
                displayStatment();
                break;
            case 2:
                day = "No its Tuesday, You have to wait for 3 days";
                displayStatment();
                break;
            case 3:
                day = "No its Wednesday, You have to wait for 2 days";
                displayStatment();
                break;
            case 4:
                day = "No its Thursday, Tomorrow is your weekend";
                displayStatment();
                break;
            case 5:
                day = "Yahhh Its Friday , Happy Weekend";
                displayStatment();
                break;
            case  6:
                day = "No its Saturday, You have to wait for 6 days";
                displayStatment();
                break;
            }
            document.getElementById("writeDate").innerHTML = day;
        }
    </script>
    
</body>
</html>