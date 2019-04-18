@extends('layouts.master')

@section('content')
    <p id="power">0</p>
@stop

@section('footer')
    <script src="{{ asset('js/socket.io.js') }}"></script>
    <script>
        var socket = io('http://laravel-echo.local:3000'); // config virtual host
        socket.on("test-channel:messageSent", function(message){
            $('#power').text(parseInt($('#power').text()) + parseInt(message.power));
        });
    </script>
@stop
