<?php
require_once('../classes/vaga.php');

$nomesVagas = $_POST['nomeVaga'];
var_dump($nomesVagas);
foreach( $nomesVagas as $nomevaga) :
  echo $nomevaga.'<br><br>';
endforeach;

$funcaoVagas = $_POST['funcaoVaga'];
var_dump($funcaoVagas);
foreach( $funcaoVagas as $funcvaga) :
  echo $funcvaga.'<br><br>';
endforeach;

$salarioVagas = $_POST['salarioVaga'];
var_dump($salarioVagas);
foreach( $salarioVagas as $salvaga) :
  echo $salvaga.'<br><br>';
endforeach;


/*

$menu = getElementsByClassName('todasvagas');
$todasVagas = $_POST['vagas'];
var_dump($menu);


*/


















/*

echo
'<script>
let todasVagas = document.getElementsByClassName(".todasVagas");
console.log(todasVagas);
valor=3;
function teste(valor){
    console.log("AAAAAAAAAAAAAAAAAAA");
}
teste(valor);
</script>';

$dom = new DOMDocument();
$dom->loadHTML("../cadastros/vagas.php");
$todasVagas = $dom->getElementsByClassName('.todasVagas');
var_dump($todasVagas);
foreach ($div->attributes as $attr) {
$name = $attr->nodeName;
$value = $attr->nodeValue;
echo "Attribute '$name' :: '$value'<br />";
}
function teste()
{
   echo "Your test function on button click is working";
}
if(array_key_exists('cadastrar',$_POST)){
   teste();
   $todasVagas = new array();
}

//$novaVaga = new Vaga($_POST['nomeVaga'], $_POST['funcaoVaga'],$_POST['salarioVaga']);
//var_dump($novaVaga);
require_once('../navegacao/projetos.php');
*/
?>
