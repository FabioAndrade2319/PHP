<?php

$teste = 'primeiro teste';
$teste1 = 125;
echo $teste;
echo $teste1;
?>

<p> testando agora com paragrafo <?= $teste ?> , <?= $teste1 ?></p>

<form action="teste.php" method="POST">
  First name:<br>
  <input type="text" name="firstname" value="Mickey">
  <br>
  Last name:<br>
  <input type="text" name="lastname" value="Mouse">
  <br><br>
  <input type="submit" value="Submit">
</form> 