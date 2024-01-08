<body>
    <center>
         <h1>My Folder and My Page</h1>
        <!-- <h1>
            <?php echo $val_a . ' ' . $val_b; ?>
        </h1> -->
        <!-- <h1>{{$val_a}} {{$val_b}}</h1> -->
        <!-- <h1>{{$val_a . ' ' . $val_b}}</h1> -->
        <form method="post" action="/my-route">
            <p style="color: white">input number</p>
            @csrf
            <input type="text" name="myinput">
            <button type="submit">Submit</button>
        </form>
    </center>
</body>

<style>
    body{
        background-color: black;
    }

    h1{
        color: rgb(23, 221, 145);
    }
</style>
