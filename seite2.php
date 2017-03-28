<?php
session_start[];
if(!isset(§_SESSION["username"]) {
?>
<html>



   <meta charset="utf-8">



  



<link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Audiowide|Palanquin" rel="stylesheet">



  



  <style>



    



    .text {



      font-family: 'Abril Fatface', cursive;



      color: black;



      font-size: 150px;



      text-align: center;



    }



    .text2 {



      font-family: 'Abril Fatface', cursive;



      color: black;



      text-align: center;



    }



    .mitte {



      



    margin-left: 412px;



      padding: 20px;



      width: 30em;



    border-color: red;



    border-width: 10px;



    border-style: none;



      border-radius: 20px



  }



    .text3 {



      font-size: 60px;

      text-align: center;



    }

    .unten-mitte {

      text-align: center;

    }



    .text5 {



      text-align: center;



      font-family: 'Palanquin', sans-serif;



    }



    .hallo {



       text-align: justify;

      font-size: 30px;

      

      



    }

    

    

  </style>



    







<head>



  <title>MCG-News</title>



  <h2 class="text">



    MCG News



  </h2>



  <p class="text2">



     26.3.2017



  </p>



</head>



 







  <div>

    



    <div class="mitte">



<h2 class="text3">



  Test



    </h2>



        <p class="hallo"> 



Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.



    



    </p>

      

    </div>

<p class="unten-mitte">

   ©Mcg-news

    </p>

    <body>

</body>



</html>

<?php
} else {
	
?>
Fehler beim Login, <a href="index.php">Zum Login</a>.
<?php
}
?>