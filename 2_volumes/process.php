<?php
  //Recebe a mensagem do formulário
  $message = $_POST["message"];

  //Cria um arquivo com o nome msg-<numero de arquivos na pasta>.txt
  $files = scandir("./messages");
  //Conta quantos arquivos tem na pasta e subtrai 2 (. e ..) que são arquivos padrão
  $num_files = count($files) - 2; // . e ..  
  //Cria o nome do arquivo
  $fileName = "msg-{$num_files}.txt";

  //Cria o arquivo
  $file = fopen("./messages/{$fileName}", "x");

  //Escreve a mensagem no arquivo
  fwrite($file, $message);
  //Fecha o arquivo  
  fclose($file);
  //Redireciona para a página inicial
  header("Location: index.php");