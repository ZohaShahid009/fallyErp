

    {{-- @include('frontend.header')
    @yield('content')
    @include('frontend.footer') --}}



    <!DOCTYPE html>
    <html lang="en">
   
        <head>
            <meta charset="UTF-8" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <title>Fally ERP</title>
            <link rel="stylesheet" href="{{asset('assets/frontendcss/style.css')}}"/>
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
              integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
            <link rel="preconnect" href="https://fonts.googleapis.com" />
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
            <link
              href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&family=Inter:wght@400;500;600;700&family=Lato&family=Poppins:wght@300;400;500;600;700&display=swap"
              rel="stylesheet" />
            <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
          </head>
   
    <body>
        {{View::make('frontend.layout.header')}}
        @yield('content')
        {{View::make('frontend.layout.footer')}}
    
    </body>

    </html>

