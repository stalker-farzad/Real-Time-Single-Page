<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <meta name="csrf_token" content="{{csrf_token()}}">
    <title>Real Time | وب اپلیکیشن  </title>
  </head>
  <body>
    <div id="app">
      <v-app>
        <home></home>
     </v-app>
    </div>
    <hr>
    <h1 style="text-align:center">
      @php
        /* Passing By Value */

        function Multiplection(&$bahrami){
            return $bahrami .= "My Name Is "  ;
        }


          $str = "Parya";
          echo Multiplection($str);
      @endphp
    </h1>

    <script src="{{asset('js/app.js')}}"></script>
  </body>
</html>
