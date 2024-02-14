@extends('layouts.default')

@section('title', 'Multiplication')

@section('content')
    <!DOCTYPE html>
    <html>
        <body>
            <br>
            <center>
                <input type="number" id="mul_number">
                <button onclick="multiple()"> Calculate !</button>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
                <script>
                    function multiple(){
                        let multiple_num = parseInt($('#mul_number').val());
                        for(let i = 1; i < 25; i++){
                            // console.log(multiple_num * i);
                            $('#myh1').before(`<center><h1 class="gen_number">${multiple_num} x ${i} = ${multiple_num * i}</h1></center>`)
                        }
                        // setTimeout(function(){
                        // $(document).getElementById("myh1").remove();
                        // }, 100);
                    }

                </script>
            </center>
            <br>
            <h1 id="myh1"></h1>
            <style>
                h1{
                    font-size: 20px;
                }
            </style>
        </body>
    </html>
@endsection
