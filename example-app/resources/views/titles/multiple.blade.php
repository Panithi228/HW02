@extends('layouts.default')

@section('title', 'Multiplication')

@section('content')
    <!DOCTYPE html>
    <html>
        <body>
            <br>
            <center>
                <div>
                    <input type="number" id="mul_number" value="2" class="text text-center">
                    <button onclick="multiple()"> Calculate !</button>
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
                </div>
                <script>
                    $(document).ready(function(){
                         console.log("ready");
                    });
                    function multiple(){
                        $('.my_gen_number').remove();
                        let mul_number = parseInt($('#mul_number').val());
                        $('#number').after(`<h1 class="my_gen_number , myh1"> ${"สูตรคูณแม่ : " + mul_number} </h1>`);
                        for (let i = 1; i <= 24; i++) {
                            $('#myh1').before(`<h4 class="my_gen_number ,myh1"> ${mul_number + " x " + i + " = " + (i) * mul_number }</h4>`);
                        }
                        console.log(document.getElementById("เลขที่กรอก : " + 'mul_number').value);
                    }
                </script>
                <br>
                <h1 id="myh1"></h1>
            </center>
        </body>
    </html>
@endsection
