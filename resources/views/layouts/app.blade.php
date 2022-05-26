<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title-block')</title>
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
        

        <!-- Styles -->
        <style>
            html, body {

             
                font-family: 'Raleway', sans-serif;
                font-weight: 100;g
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>

    </head>
    <body>
   		@include('inc.header')
   		
   		@if(Request::is('/'))
 			@include('inc.hero')
 		@endif
 		
	 		
 		   
    	<div class="container mt-5">
    	
    	@include('inc.messages')
    		<div class="row">
    			<div class="col-12">
        				@yield('content')     				
    			</div>
  <!--  			<div class="col-4">
        			@include('inc.aside')     				
    			</div>     	-->		    		
    		</div>

       
		    		
    	</div>

    </body>
</html>
