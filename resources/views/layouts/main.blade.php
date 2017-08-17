<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
    	<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="_token" content="{!! csrf_token() !!}"/>
        <title>@yield('title')</title>
        <link href="{{ asset('/css/app.css') }}" rel="stylesheet" type="text/css" >
        <link href="{{ asset('/css/style.css') }}" rel="stylesheet" type="text/css" >
        
        @yield('head')
    </head>
    <body>
        <div class="flex-center position-ref full-height">
        	@yield('content')
        </div>
  
        
        <script type="text/javascript" src="{{ asset('/js/app.js') }}"></script>
        @yield('footer')
    </body>
</html>
