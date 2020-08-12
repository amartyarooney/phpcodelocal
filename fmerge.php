
<html>
   
   <head>
      <title>Writing PHP Function which returns value</title>
   </head>
   
   <body>
      
      <?php
         function printMe($param = NULL) {
            print $param;
         }
         
         printMe("This is test <br>");
         printMe("no");
      ?>
      
   </body>
</html>