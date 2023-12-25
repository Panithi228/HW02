<html>

<head>
    <meta charset="utf-8">
</head>

<body>
    <?php $multi_x = 2; ?>
    <h1>ตารางสูตรคูณแม่ <?php echo $multi_x ?></h1>
    <div>
        <?php for($i = 1; $i <= 24; $i++) { ?>
            <?php echo $multi_x ?> x <?php echo $i ?> = <?php echo $multi_x*$i ?>
            <br>
        <?php } ?>       
    </div>
    
    <style>
        div{
            width: 200;
            height: 350;
            border: 50px;
            overflow: scroll;
        }
    </style>
</body>

</html>