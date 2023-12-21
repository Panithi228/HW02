<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <form method ="post">
            <input type="text" name ="My_val" />
            <button type ="submit">บันทึก</button>
        </form>
        <h1><?php if(isset($_POST['My_val'])){
            echo $_POST['My_val'];
        } ?></h1>
    </body>
</html>