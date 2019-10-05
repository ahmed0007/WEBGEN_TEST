<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">



        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
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
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .avatar{

                width: 150px;
                height: 150px;
            }

            img{

            width: 100px !important;
            height: 100px !important;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            
            <div class="content" id="app">
                {{-- <div class="title m-b-md">
                    <a href="{{ route('githubLogin') }}">
                    search github users shall goes here
                    </a>

                </div> --}}



            <p> 
                
                
                <a  

										

                class="avatar avatar-sm fit" 

                    data-toggle="tooltip" 

                        >


                    <img 

                    alt="Image placeholder" 

                        
                            src=" {{ $authUser->avatar }}" 


                            class="rounded-circle">

             

              </a>
              
              Welcome {{ $authUser->name }} </p>



                <p>search github users</p>

                <search></search>

                
            </div>
        </div>



    <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
