<?php
include("index.php");
?>

<script>
    function copyToClipboard(text){
        var copytext=document.createElement('input')
        if(typeof text=='undefined') copytext.value="dicter777@mail.ru"
        else copytext.value=text
        document.body.appendChild(copytext)
        copytext.select()
        document.execCommand('copy')
        document.body.removeChild(copytext)
    }
</script>
<style>
    #block {
        position: absolute; /* Абсолютное позиционирование */
        left: 378px;
        top: 170px;
        width: 1163px;
        height: 765px;
        text-align: center;
    }
    #block2 {
        position: absolute; /* Абсолютное позиционирование */
        left: 375px;
        top: 100px;
    }
    #block_logo {
        position: fixed; /* Абсолютное позиционирование */
        left: 378px;
        top: 170px;
        width: 1163px;
        height: 765px;
        background: none;
        text-align: center;
    }
    #block_image {
        position: absolute; /* Абсолютное позиционирование */
        left: 630px;
        top: 170px;
        width: 0;
        height: 0;
        border-style: solid;
        border-width: 180px 320px 0 420px;
        border-color: #ffffff transparent transparent transparent;
    }
    #block_address {
        position: absolute; /* Абсолютное позиционирование */
        left: 1000px;
        top: 380px;
        background: none;
    }
    #krovyaka {
        position: fixed; /* Абсолютное позиционирование */
        left: 390px; /* Положение от левого края */
        top: 820px;
    }
    p1 {
        color: #000000; /* Цвет текста */
        font-family: 'Franklin Gothic Book', sans-serif; /* Рубленый шрифт */
        font-size: 180%; /* Размер текста */
    }
    #block_black{
        position: absolute; /* Абсолютное позиционирование */
        left: 980px;
        top: 370px;
        background: #0e0e0e;
        width: 490px;
        height: 60px;
    }
    p2 {
        background: none;
        color: #ffeef5; /* Цвет текста */
        font-family: 'Franklin Gothic Book', sans-serif; /* Рубленый шрифт */
        font-size: 170%; /* Размер текста */
    }



</style>

<div id ="block_image">
</div>
<div id ="block">
    <p1>КОНТАКТЫ</p1>
</div>
<div id ="block_logo">
    <img src="css/images/logo.png">
</div>
<div id ="block2">
    <img src="css/images/35.png" width="1163" height="70" >
</div>
<div id ="block_black">
</div>
<div id ="block_address">
    <p2>email: dicter777@mail.ru</p2><button onClick="copyToClipboard()">Copy</button>
    </button>
</div>
<div id ="krovyaka">
    <img src="css/images/arm1.png" width="1110 " height="100" >
</div>




