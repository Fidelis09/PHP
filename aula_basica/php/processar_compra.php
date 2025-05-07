<?php

// Verificando se os dados do formulário foram enviados​

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Receber os dados do formulário​

    $nome = $_POST['nome'];

    $telefone = $_POST['telefone'];

    $email = $_POST['email'];

    $motocicleta = $_POST['motocicleta'];

    $cor = $_POST['cor'];
      // Definir o logo com base na motocicleta selecionada​

      $logo = "";

      switch ($motocicleta) {
  
          case "Honda":
  
              $logo = "honda.jpg"; // Logo Honda​
  
              break;

          case "Yamaha":
  
              $logo = "yamaha.jpg"; // Logo Yamaha​
  
              break;
  
          case "BMW":
  
              $logo = "bmw.jpg"; // Logo BMW​
  
              break;
  
          default:
  
              $logo = "";
  
              break;

      }
  
  }
  
  ?>

<!DOCTYPE html>

<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Resumo da Compra</title>

</head>
<body>

    <h1>Resumo da Compra</h1>


    <p><strong>Nome:</strong> <?php echo $nome; ?></p>

    <p><strong>Telefone:</strong> <?php echo $telefone; ?></p>

    <p><strong>E-mail:</strong> <?php echo $email; ?></p>

    <p><strong>Motocicleta Selecionada:</strong> <?php echo $motocicleta; ?></p>

    <p><strong>Cor Selecionada:</strong> <?php echo $cor; ?></p>
    <!-- Exibindo o logo da motocicleta escolhida -->

    <p><strong>Logo da Motocicleta:</strong></p>

    <img src="../imagens/<?php echo $logo; ?>" alt="Logo da motocicleta" style="width:200px; height:auto;"><br><br>


    <p><strong>Valor: </strong>

        <?php

        switch ($motocicleta) {

            case "Honda":

                echo "R$ 20.000";

                break;

            case "Yamaha":

                echo "R$ 22.000";

                break;

           case "BMW":

           echo "R$ 40.000";

           break;

       default:

           echo "Preço não disponível";

           break;

   }

   ?></p>

</body>

</html>