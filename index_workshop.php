<html>
    <body>
        <h1>This is PHP <?php echo 'Hello World!'; ?></h1>
        <div>
            <p>1</p>
            <?php
            $Var_a = 1;
            $Var_a = "1$Var_a";
            print_r($Var_a);
            echo"<br>";
            #var_dump($Var_a);
            echo $Var_a + 2;
            $arry = array();
            $arry[] = [];
            $arry[] = 1;
            $arry[] = 2;
            $arry[0] = 3;
            print_r($arry);
            // count
            // sizeof
            for($i = 0; $i < count($arry); $i++)
            {
                echo "<h1>my h1</h1>";
                ?>
                <p>2</p>
                <?php 
            }
            ?>
            <p>3</p>
        </div>
    </body>
</html>