<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <?php
  include($_SERVER['DOCUMENT_ROOT'] . '/bootstrap/autoload.php');
  $path = $_SERVER['REQUEST_URI'];
  Template::load('head');
  ?>

  <body>
    <?php
    Template::load('body', array('path'=>$path));
    ?>
  </body>
</html>
