<?php
include("index.php");

?>


<style>
    #block {

        position: absolute; /* Абсолютное позиционирование */
        left: 378px;
        top: 170px;
        width: 1123px;
        height: 700px;
        background: white;
        border: 20px ridge grey;
    }

    #block2 {
        position: absolute; /* Абсолютное позиционирование */
        left: 375px;
        top: 100px;
    }

    #text {
        font-family: "BeauSans", sans-serif ;
        color: #000000;
        font-size: 35px;
        text-indent: 20px;
        position: absolute; /* Абсолютное позиционирование */
        left: 40px;
        top: 20px;
        width: 1000px;
        height: 700px;
    }

    #imagee {
        position: absolute; /* Абсолютное позиционирование */
        left: 400px;
        top: 440px;
    }

    @font-face {
        font-family: BeauSans;
        src: url(css/Fonts/norm.ttf);
        font-style: normal;
    }

</style>
<div id ="block" >
   <div id ="text" >
       <p> Все началось с идеи, затем я сделал картинку для фона 26 марта 2020 г. В следующее время мне было лень делать
           сайт и я занимался интересными для себя вещами, либо обязаловом для прохождения практики. В конце мая в России были произведены
           "реформы" в образовательной системе, из-за опасности распространения вируса, обучение студентам сделали дистанционным,
           это дало мне больше свободного времени, большую часть которого, я не занимался ничем полезным. Но в яркие моменты
           бурной деятельности собирал по кусочкам данный сайт.<br>
           P.S. Пока это вся информация на момент 6.04.2020</p>
   </div>
    <div id ="imagee">
        <img src="css/images/bodyaga.jpg" width="300" height="250" >
    </div>
</div>
<div id ="block2">
    <img src="css/images/35.png" width="1163" height="70" >
</div>

