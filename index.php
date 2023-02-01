<html>
  <head>
    <title>Hello World!</title>
    <style>
      h1 {
        text-align: center;
      }
      h2 {
        text-align: left;
      }
      h3 {
        text-align: right;
      }
</style>
  </head>
  <body>
    <?php
  print "Hello from " . gethostname() ." (" . $_SERVER['SERVER_ADDR'] . ")" . "\n";
    ?>
  </body>
</html>
