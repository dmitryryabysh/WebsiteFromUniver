<?php
include("index.php");
?>
<style>
    #block {
        position: absolute; /* Абсолютное позиционирование */
        left: 378px;
        top: 170px;
        width: 1163px;
        height: 700px;
        background: rgba(255, 255, 255, 0.58);

    }
    #block2 {
        position: absolute; /* Абсолютное позиционирование */
        left: 375px;
        top: 100px;
    }


</style>

<div id ="block">

    <section class="karini"></section>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/foldscroll.js"></script>
    <script src="js/pack.js"></script>
    <script type="text/javascript">

        $(function() {

            var limit = 100;
            var $container = $( '.karini' );

            // Populate
            for (var i = 0, n = Math.min( limit, pack_img.length ); i < n; i++ ) {

                $container.append(
                    '<article>' +
                    '<p>' + pack_img[i].img + '</p>' +
                    '<em>' + pack_img[i].author + '</em>' +
                    '</article>');
            }

            // Call the foldscroll plugin
            $container.foldscroll({
                perspective: 900,
                margin: '220px'
            });
        });

    </script>
</div>
</pre>
</div>
<div id ="block2">
    <img src="css/images/33.png" width="1163" height="70" >
</div>


