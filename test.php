<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php

    if(isset($_POST['am'])) {
    echo "1"; }
    else{
    echo "0";


}
 ?>
 <form class="mn" action="test.php" method="post">


<input type="checkbox" name="am" value="1" /> A.M.
 </form>

  </body>
</html>
