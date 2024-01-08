<html>
    <head>
        <meta charset="utf-8" />
    </head>
    <body>
        <!-- <h1>My Route Page</h1> -->
        <!-- <h1>{{ $myinput }}</h1> -->
        <center>
            <?php $multi_x = 2; ?>
        <h1 style="color:blue">ตารางสูตรคูณแม่ <?php echo $myinput ?></h1>
        <div>
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
                overflow: scroll;
            }
        </style>
    </body>
</html>
