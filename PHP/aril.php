<?php 

if (isset($_POST['nome']) && !empty($_POST['nome']) && isset($_POST['salario']) && !empty($_POST['salario']) && isset($_POST['cargo']) && !empty($_POST['cargo'])) {
    
$_nome = $_POST['nome'];
echo "Nome: $_nome"; 

$_salario = $_POST['salario'];
echo "Salário Bruto: R$ $_salario";

$_cargo = strtolower($_POST['cargo']); 

//Benefícios
$_beneficio1 = ($_salario / 100 * 30);
$_beneficio2 = ($_salario / 100 * 20);
$_beneficio3 = ($_salario / 100 * 10);

//Tributos
$_transport = ($_salario / 100 * 6);
$_IRRF = ($_salario / 100 * 7.5);
$_INSS = ($_salario / 100 * 9);

//Salario liquido
$_tributos = $_INSS + $_IRRF + $_transport;
$_salarioliquido = $_salario - $_tributos;


//Salário Líquido  com benefício (Diretor): R$ 3875,00 + R$1500(30% de R$ 5000,00 ) é igual a : R$ 5375,00 

if ($_cargo == "diretor" ){
     echo "Cargo: $_cargo";
     $_salarioliquido_com_beneficio = $_salarioliquido + $_beneficio1; 
     echo "Salário liquido com benefícios (Diretor): R$ $_salarioliquido + R$ $_beneficio1 (30% de $_salario) é igual a : $_salarioliquido_com_beneficio";
 }

 elseif ($_cargo == "gerente"){
     echo "Cargo: $_cargo";
      $_salarioliquido_com_beneficio = $_salarioliquido + $_beneficio2;
     echo "Salário liquido com benefícios (Gerente): R$ $_salarioliquido + R$ $_beneficio2 (20% de $_salario) é igual a : $_salarioliquido_com_beneficio";
 }

 elseif ( $_cargo == "engenheiro"){
     echo "Cargo: $_cargo";
    $_salarioliquido_com_beneficio = $_salarioliquido + $_beneficio3;
    echo "Salário liquido com benefícios (Engenheiro): R$ $_salarioliquido + R$ $_beneficio3 (10% de $_salario) é igual a : $_salarioliquido_com_beneficio";
 }
 
else  {
     echo "Cargo: Dado incorreto, tente novamente";
}

echo "IRRF: R$ " . $_IRRF;
echo "INSS: R$ " . $_INSS;
echo "Vale transporte: R$" . $_transport;
echo "Salário líquido sem benefícios: R$" . $_salarioliquido;

   }
?>
