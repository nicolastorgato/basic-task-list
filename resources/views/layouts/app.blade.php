<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Basic Task List</title>

        <!-- Fonts -->
        <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
        {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'> --}}



        <style>
            .center{
                display: flex;
                justify-content: center;
                align-items: center;
            }



        </style>
    </head>

    <body>
        
        <section class="hero is-dark">
            <div class="hero-body">
                <div class="container center">
                    <h1 class="title is-1"> Tasks List </h1>
                </div>
            </div>
        </section>

       
        @yield('content')

    </body>
</html>