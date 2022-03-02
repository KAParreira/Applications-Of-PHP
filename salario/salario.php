
 <?php


$salario = $_POST['nome'];
$departamento = $_POST['departamento'];

if ($departamento == "operacional")
      
    echo ("O salrio atual é " . $salario + ($salario * 0.15) . " Reais");

    else if ($salario == 1500 or $salario <1750)
        echo  ("O salrio atual é " . $salario + ($salario * 0.12) . " Reais");
    else if  ($salario >1750 or $salario < 2000)
    echo  ("O salrio atual é " . $salario + ($salario * 0.10) . " Reais");
    else if ($salario >2000 or $salario < 3000)
    echo  ("O salrio atual é " . $salario + ($salario * 0.07) . " Reais");
    else 
    echo  ("O salrio atual é " . $salario + ($salario * 0.05) . " Reais");
    
    ?>