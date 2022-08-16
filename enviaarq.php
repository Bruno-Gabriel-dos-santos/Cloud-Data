<?php
    include("checkcadastro.php");
    include("conecxao.php");

    // carrega o upload e faz o salvamento na pagina correta
    $dadosfurmularioarq= filter_input_array(INPUT_POST,FILTER_DEFAULT);
    if (!empty($dadosfurmularioarq["sub"])) {
    $arquivobrutoformulario=$_FILES['arq'];
    $nome_arquivo_bruto=$arquivobrutoformulario['name'];
    $nome_classe=$dadosfurmularioarq['classe'];
    // salva os nomes do arquivo no banco dados dados
    $sqldados="INSERT INTO `dados`(`idarq`, `nome`, `formato`, `classe`, `nick`) VALUES ('0','$nome_arquivo_bruto','0','$nome_classe','$nick');";
    
    
        if(mysqli_query($conecxao,$sqldados)){
           
            
               
           // deu certo
        
        }else{
            echo"0"; //deu errado apaga os dados
            mysqli_close($conecxao);
            die();
        }
    // utiliza o idpasta do usuario ja captado no include checkcadastro
    // pega o id do arquivo idarq utilizando o nome e o nick para nomear o arquivo
    $sqldados="SELECT MAX(`idarq`) FROM `dados` WHERE nick='$nick';";
    if(mysqli_query($conecxao,$sqldados)){
           
        $resultado = mysqli_query($conecxao,$sqldados);
        $dados= mysqli_fetch_array($resultado);
        $idnome=$dados[0];
               
        // deu certo
     
     }else{
         echo"0"; //deu errado apaga os dados
         mysqli_close($conecxao);
         die();
     }
    // move o arquivo para a pasta do usuario pelo id do usuario
    $diretorio = "arquivos/$idpasta/";
    // renomeia o arquivo para o nome numerico correto
    // Upload do arquivo
    $nome_arquivo = $arquivobrutoformulario['name'];
    $saidanome_arq=$diretorio.$nome_arquivo;

    move_uploaded_file($arquivobrutoformulario['tmp_name'], $diretorio.$nome_arquivo );

    
    // apaga o formulario

    }
    
    if($nome_classe=="todos"){
    header('Location: /teste/arquivos.php');}
    if($nome_classe=="fotos"){
        header('Location: /teste/fotos.php');}
    if($nome_classe=="trabalho"){
        header('Location: /teste/trabalho.php');}
    if($nome_classe=="jogos"){
        header('Location: /teste/jogos.php');}
    if($nome_classe=="compartilhados"){
        header('Location: /teste/compartilhados.php');}
    ?>