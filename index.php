<?php

   function egySor( $sor,$_oSzam ) {

      $paros    = '';
      $paratlan = '';
      
      if( $sor % 2 == 1 ) {

         $paratlan = '<img src="fekete.jpg">';           
      }
      else{

         $paros    = '<img src="fekete.jpg">';
      }

      for ( $oszlop = 1; $oszlop <= $_oSzam; $oszlop++) {
         
         print "<td>";
      
            if( $oszlop % 2 == 1 ) {

               print $paratlan;

            }else{
               
               print $paros;

            }

         print "</td>";
      
      }

   }

   function sakktabla( $_oSzam,$_sSzam ) {

      print "<table>";

         for ( $sor=1; $sor<= $_sSzam; $sor++) {
         
            print "<tr>";
         
               egySor( $sor,$_oSzam ); /* egy sor megjelenítése */
         
            print "</tr>";
         
         }

      print "</table>";

   }

   if( isset( $_GET['oSzam'] ) && isset( $_GET['sSzam'] ) ) {

      $_oSzam = ( int )$_GET['oSzam'];
      $_sSzam = ( int )$_GET['sSzam'];

      sakktabla( $_oSzam,$_sSzam );

   }

?>
<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
   <title>Sakktábla</title>
</head>
<style>
   table{border-collapse:collapse;border:solid 1px black}
   td{padding:0}
</style>
<body>

   <h2>Sakktábla rajzolása</h2>

   <form action="index.php" method="get">

      <input name="oSzam" placeholder="Oszlopok száma..." autofocus>
      <input name="sSzam" placeholder="Sorok száma...">

      <input type="submit" value="Mutasd!">

   </form>
   
</body>
</html>