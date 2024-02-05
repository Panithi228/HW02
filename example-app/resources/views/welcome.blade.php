<!doctype html>
<html>
    <head>
        <title>Javascript 101</title>
    </head>

    <body>
        <h1>Before</h1>
        <h1 id="myh1">
            <h1>Prepend</h1>Javascript<h1>Append</h1>
        </h1>
        <h1>After</h1>
        <button onclick="alert('Hello World!')">Click me</button>
        <input type="text" id="my_number">
        <button onclick="myFunction()">submit number</button>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                console.log("Hello World - document.ready");
                console.log($('#myh1').text());
                console.log($('#my_number').text());
                $('#myh1').text("Javascript 101");
                $('#my_number').val(100);
                setTimeout(function(){
                    $('.my_gen_number').each(function(index, val){
                    $(val).remove();
                });
                }, 2000);
            })
        </script>
        <script>
            function myFunction2(){
                let my_number = parseInt($('#my_number').val());
                let my_code_tr = ``
                for(let i = 0; i < my_number; i++){

                }
                $('#my_tbody').html(my_code_tr)
            }
            function myFunction() {
                let my_number = parseInt($('#my_number').val());
                for(let i = 0; i < my_number; i++){
                    $('#myh1').after(`<h1 class="my_gen_number">${i}</h1>`)
                }
                console.log(document.getElementsById('my_number').value);
                console.log('Click submit number');
            }
            console.log("Hello World!");
            let myval;

            console.log(typeof myval);
            myval = '10';
            myval2 = '2';
            console.log(myval, myval2);
            myval3 = parseInt(myval) + parseInt(myval2);
            console.log(myval3);
            myval3 = myval - myval2;
            console.log(myval3);
            myval3 = myval * myval2;
            console.log(myval3);
            myval3 = myval / myval2;
            console.log(myval3);
        </script>
        <script>
            let myval4 = [1,2,3,4];

            myval4[5] = 5;
            myval4[6] = 6;
            console.log(myval4);

            for(i = 0; i < myval4.lemgth; i++){
                console.log(myval4[i]);
            }
            myval4.forEach(function(value, index) {
                console.log("in forEach", value, index);
            });

            /*
            php
            foreach(myval4 as $index => $value){

            }
            */
        </script>
    </body>
</html>
