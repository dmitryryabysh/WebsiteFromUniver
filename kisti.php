<?php
include("index.php");
$link=mysqli_connect('localhost','root','','сайттен');
if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}
print_r($_POST);
if(isset($_POST['send'])){
    mysqli_query(
        $link,
            "INSERT INTO
                'paintbrush'
            SET
            'id'='".$_POST['id']."',
            'price'='".$_POST['price']."',
            'quantity'='".$_POST['quantity']."',
            'picture'='".$_POST['picture']."',
            'information'='".$_POST['information']."'
            "
    );

}
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/jquery.mousewheel.js"></script>
<style>


    #block {
        user-select: auto;
        overflow-x: scroll;
        position: absolute; /* Абсолютное позиционирование */
        left: 378px;
        top: 170px;
        width: 1163px;
        height: 700px;
        background: white;
    }

    #input{
        text-align: center;
        margin-top: 240px;
        margin-left: auto;
        margin-right: 2.5em;
        width: 240px;
        height: 400px;
        background: #7d7d7d;
    }
    #block2 {
        position: absolute; /* Абсолютное позиционирование */
        left: 375px;
        top: 100px;
    }

    #text_1{
        display: none;
        position: fixed; /* Абсолютное позиционирование */
        top: 633px;
        left: 478px;
        width: 963px;
        height: 205px;
        text-indent: 60px;
        font-size: 17px;

    }
    #text_2{
        display: none;
        position: fixed; /* Абсолютное позиционирование */
        top: 633px;
        left: 478px;
        width: 963px;
        height: 205px;
        text-indent: 60px;
        font-size: 17px;

    }
    #text_3{
        display: none;
        position: fixed; /* Абсолютное позиционирование */
        top: 633px;
        left: 478px;
        width: 963px;
        height: 205px;
        text-indent: 60px;
        font-size: 17px;
    }
    #text_4{
        display: none;
        position: fixed; /* Абсолютное позиционирование */
        top: 633px;
        left: 478px;
        width: 963px;
        height: 205px;
        text-indent: 60px;
        font-size: 17px;
    }
    #text_5{
        display: none;
        position: fixed; /* Абсолютное позиционирование */
        top: 633px;
        left: 478px;
        width: 963px;
        height: 205px;
        text-indent: 60px;
        font-size: 17px;
    }

    table {

        border-spacing: 50px 70px;
        font-weight: bold;
        position: absolute;
    }


    td {
        vertical-align: middle;
        font-size: 14px;
        text-align: center;
        border-top: 2px solid #56433D;
        border-bottom: 2px solid #56433D;
        border-right: 2px solid #56433D;
        border-left: 2px solid #56433D;
    }



</style>
<script>
    $(document).ready(function () {
        $('#block').mousedown(function (event) {
            $(this)
                .data('down', true) // индикатор того, что мышь нажата
                .data('x', event.clientX) // текущая X-координата мышки
                .data('scrollLeft', this.scrollLeft); // текущая позиция скролла

            // вернуть false, чтобы избежать выделение текста и перетаскивания ссылок
            //внутри окна прокрутки
            return false;
        }).mouseup(function (event) {
            $(this).data('down', false);
        }).mousemove(function (event) {
            if ($(this).data('down') == true) {
                this.scrollLeft = $(this).data('scrollLeft') + $(this).data('x') - event.clientX;
            }
        }).mousewheel(function (event, delta) {
            this.scrollLeft -= (delta * 90);
        })
    });
    $(window).mouseout(function (event) {
        if ($('#block').data('down')) {
            try {
                if (event.originalTarget.nodeName == 'BODY' || event.originalTarget.nodeName == 'HTML') {
                    $('#block').data('down', false);
                }
            } catch (e) {}
        }
    });
</script>
<script>
    function viewDiv(id,max) {
        if ( document.getElementById("text_" + id) !== null ) {
            document.getElementById("text_" + id).style.display = "block";
        }
        for(i=1; i < max+1;i++){
            if(i !=id){
                document.getElementById("text_" + i).style.display = "none";
            }
        }
    }
</script>

<div id ="block" >
    <table>

        <tr> <?php $paintbrush = get_image();?>
            <?php foreach ($paintbrush as $paintb):?>
            <td><a href="#" class="button3" onclick="viewDiv(<?= $paintb['id'] ?>,<?=(count($paintbrush))?>)"> <?=$paintb['picture']?>
                    <br>Цена: <?=$paintb['price']?><br>Есть в наличии: <?= $paintb['quantity'] ?></a></td>
                <div id="text_<?= $paintb['id'] ?>" ><?=$paintb['information']?></div>
            <?php endforeach; ?>



        </tr>

    </table>

</div>
<form action="" method="POST">
<div id="input">
    Номер<br><input type="text" name="id"><br>Цена:<br><input type="text" name="price"><br>Есть в наличии?<input type="text" name="quantity">
    Картинка<br><input type="text" name="picture"><br>Информация<textarea name="information"></textarea><br>
    <input type="submit" name="send" value="Add" />
</div>
</form>
<div id ="block2">
    <img src="css/images/33.png" width="1163" height="70" >
</div>


