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
        background: dimgray;
        border: 20px ridge grey;
    }
    #text {
        font-family: "BeauSans", sans-serif ;
        color: #000000;
        font-size: 50px;
        text-indent: 20px;
        position: absolute; /* Абсолютное позиционирование */
        left: 40px;
        top: 20px;
        width: 1000px;
        height: 700px;
        font-weight: 800;
    }

    @font-face {
        font-family: BeauSans;
        src: url(css/Fonts/slova.ttf);
        font-style: normal;
    }

    #block2 {
        position: absolute; /* Абсолютное позиционирование */
        left: 375px;
        top: 100px;
    }


</style>
<div id ="block">
    <div id ="text">
    <p> Мы предоставляем услуги бесплатного просмотра картин, платного приобретения самодельных кистей.
        На данном сайте вы можете посмотреть картины известных и не очень художников, дополнить свой
        набор для создание шедевров, освежить знания в области истории.</p>
    </div>
</div>
<div id ="block2">
    <img src="css/images/35.png" width="1163" height="70" >
</div>
