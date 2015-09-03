<!DOCTYPE html>

<html lang="et">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Kadri's homepage</title>
    <style>

        body {
            background-color: #311804;
        }
        #text {
            color: yellow;
            position: absolute;
            display: block;
            margin-top: 350px;
            margin-left: 400px;
        }
        li {
            color: lawngreen;
            font-size: 20px;
        }
        table {
            color: lightpink;
        }

        #pics img {

            position: fixed;
            margin-bottom: 20px;
        }

        #image	{
            /*float: right;*/
            margin-left: 440px;
            width: 380px;

            /*-webkit-box-reflect: below 0*/
            /*-webkit-gradient(linear, left top, left bottom, from(transparent), color-stop(0.2, transparent), to(white));*/
        }

        #image2 {
            /*position: fixed;*/
            /*display: inline-block;*/
            width: 400px;
        }

    </style>

</head>
<body>
    <div id="pics">
    <img id="image2" src="kadri2.jpg">
    <img id="image" src="kadri.jpg">

    </div>


    <div id="text">
        <ul>
            <li>Nimi: Kadri</li>
            <li>Elukoht: Tartu</li>
            <li>Lemmikloom: Must kõrvepiiretega krants Jimmi</li>
            <li>Elu- ja koolikaaslane: Martin</li>
            <li>Kodulinn: Pärnu</li>
            <li>Lemmikvärv: pruun</li>
            <li>Lemmikmaius: Tupla</li>
            <li>Meeldib: "kõvasti ja valesti" laulda...</li>
            <li>Ei meeldi: vihm ja remont</li>
        </ul>
    </div>

    <audio autoplay>
        <source src="06%20Gin%20Wigmore%20-%20If%20Only.mp3">
    </audio>

</body>
</html>
<?php
