<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <meta name="csrf_token" content="{{csrf_token()}}">
    <title>Real Time | وب اپلیکیشن  </title>
  </head>
  <body>
    <?php

    session_start();
 

    print (session_status());


?>
      <h1 id="var" style="text-align:center; margin-top:50px"></h1>
      <script>
          var projects = {
            firstName : "Farzad",
            lastName:"Esmaeili",
            age:28,
            degree : "Master",
            fullName : function() {
              return this.firstName + " " + this.lastName;
              },
            get fullName() {
              return this.degree.toUpperCase();
            }
          } ;

          var methods =projects.fullName;

          document.getElementById("var").innerHTML=methods ;
      </script>
      <hr>
      <h1 id="regex" style="text-align:center; margin-top:50px"></h1>
      <script>

      var name= "Farzad" ;

      var regex = /fa\wzaD/i ; 

      document.getElementById("regex").innerHTML = regex.test(name);


      </script>
    </div>
    <hr>
    <h1 style="text-align:center">
      @php
        
        // $cars = array('Mazda','Toyota','Benz','BMW',100,2.6,'123');

        $cars1 = range(1,50,2);

        
        

        // print_r($cars1); 

       
      @endphp
    </h1>

    <script src="{{asset('js/app.js')}}"></script>

    
  </body>
</html>
