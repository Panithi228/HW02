<html>
    <head>
        <meta charset="utf-8" />
    </head>
    <body style="background-color:black">
        <!-- <h1>My Route Page</h1> -->
        <!-- <h1>{{ $myinput }}</h1> -->
        <center>
            <?php $multi_x = 2; ?>
        <h1>ตารางสูตรคูณแม่ <?php echo $myinput ?></h1>
        <div class="tableFont">
            <?php for($i = 1; $i <= 24; $i++) { ?>
                <?php echo $myinput ?> x <?php echo $i ?> = <?php echo $myinput*$i ?>
                <br>
            <?php } ?>
        </div>
        </center>

        <style>
            div{
                width: 200;
                height: 350;
                border: 1px;
                text-align: left;
                overflow-y: scroll;
                color: white;
            }
            h1{
                background-image: linear-gradient(90deg, rgb(0, 255, 98), rgb(60, 255, 0));
                background-clip: text;
                -webkit-text-stroke-color: transparent;
                -webkit-text-stroke-width: calc(1em / 16);
                -webkit-background-clip: text;
                font-size: 45px;
            }
        </style>
    </body>
</html>
