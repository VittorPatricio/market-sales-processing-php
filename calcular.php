<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Supermercado</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>
<body>
    <div class="container">
      <h1 style="text-align: center;">Processamento de vendas</h1>
      
      <?php 
      $valorcompra = $_POST["compra"];

      $cartao = $_POST["cartao"];

      $entrega = $_POST["entregar"];
      

      if ($cartao = "sim"){
        $descontocartao = $valorcompra * 5/100; //calculo 5% da compra

      }
      else{
        $descontocartao = 0;
      }

      if ($entrega = "sim"){
        $custoentrega = $valorcompra * 2/100; 
      }
      else{
        $custoentrega = 0;
      }
      
      echo "total da compra R$ $valorcompra <br>
              Desconto com cartão R$ $descontocartao <br> ";
              $valorfinal = $valorcompra - $descontocartao + $custoentrega;

      ?>

    </div>
</body>
</html>