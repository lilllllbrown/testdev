<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
     function hourGreetings ($hours) {
         if ($hours < 12) {
             return 'Good Morning';
         }
         elseif ($hours >= 12 && $hours <18){
             return 'Good Afternoon';
         }
         elseif ($hours >= 18 && $hours <21){
             return 'Good Evening';
         }
         elseif ($hours >= 21){
             return 'Goodnight';
         }
     }
        print hourGreetings (15);
        ?>
    </body>
</html>
