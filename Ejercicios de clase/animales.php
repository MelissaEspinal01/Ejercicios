<?php
include("gato.php");
include("perro.php");
include("vaca.php");

class Animal 
{
  public function roar()
  {
    echo "El";
  }
}

function RoarAnimal($animal)
{
  $animal->roar();
}

$gato = new Gato("Pelusa");
$perro = new perro("Kaizer");
$vaca = new Vaca("Lola");

if (isset($_POST['gato'])) 
{
?>
  <script>
    var msg  = new SpeechSynthesisUtterance("<?php RoarAnimal($gato); ?>");
    window.speechSynthesis.speak(msg);
  </script>
<?php
}
else if (isset($_POST['vaca']))
{
?>
  <script>
    var msg  = new SpeechSynthesisUtterance("<?php RoarAnimal($vaca); ?>");
    window.speechSynthesis.speak(msg);
  </script>
<?php
}
else if (isset($_POST['perro']))
{
?>
  <script>
    var msg  = new SpeechSynthesisUtterance("<?php RoarAnimal($perro); ?>");
    window.speechSynthesis.speak(msg);
  </script>
<?php
}
?>
<?php
// Color para todas las letras
$color = "#ff0000";

$letras = range('A', 'Z');

echo "<span style='color: " . $color . "'>" . implode(' ', $letras) . "</span>";
?>


