<?php
$txt = "PHP";
echo ((float)"55.6")
?>
<?php

   
$dish = 'Arroz Carreteiro';
switch($dish){
	case 'Arroz Carreteiro':
    	$origin = 'Este prato é típico do Rio Grande do Sul!';
        break;
    case 'Baião de dois':
    	$origin = 'Este prato é típico do nordeste!';
      break;
    case 'Feijão Tropeiro':
    	$origin = 'Este prato é típico de Minas Gerais!';
        break;
   	default:
        $origin = 'Prato de origem desconhecida!';
        break;
}
echo "Origem do Prato: $origin"
?>


<?php
$array = array(0 => "react", 1 => "angular", 2 => "vue", 3 => "footer");

if (in_array("vue", $array))
  {
  echo "O elemento vue está no array";
  }
else
  {
  echo "O elemento vue está não array";
  }
?>


<?php
$array = array("MARCA" => "Xaiomi", "MODELO" => "Redmi Note 8", 'COR' => 'Preto');

if (array_key_exists("MODELO", $array))
  {
  echo "A key MODELO foi encontrada no array";
  }
else
  {
  echo "A key MODELO nao foi encontrada no array";
  }
?>

// Return Pares

<?php

   $numbers = array (2, 5, 7, 8, 1, 3, 10);
   
   foreach ($numbers as $valor) {
   
    if(($valor%2) === 0)
       
       echo "$valor <br>";
      }
?>

// Return Impares

<?php

   $numbers = array (2, 5, 7, 8, 1, 3, 10);
   
   foreach ($numbers as $valor) {
   
    if(($valor%2) !== 0)
       
       echo "$valor <br>";
      }
?>


<?php
try {
    public function getFornecedor(){
   $query = "INSERT INTO FORNECEDOR
   (ID, NOME, CNPJ, NOMEfANTASIA) VALUES
   (5, SADIA LTDA, '14.288.3794/0001-45' SADIA);";
   }
}
catch (Exception $e) {
    echo $e->getMessage();
}
catch (InvalidArgumentException $e) {
    echo $e->getMessage();
}
     
?>