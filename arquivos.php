<!DOCTYPE HTML>
<!--
	Prologue by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
    <?php
    include("checkcadastro.php");
     $paginaatual="arquivos";
    include("conecxao.php");
    
    ?>
	<head>
		<title>Cript c</title>
		<meta charset="utf-8" />
		
		<link rel="stylesheet" href="css/cs1.css" />
        <script src="js/main.js"></script>
	</head>
	<body id="bd">
        <?php
        
        include("atualizadadoscliente.php");
       
        ?>
        <div id="botescondido" onclick="funabrir()">
            <div id="botescondidofaix0"></div>
            <div id="botescondidofaix1"></div>
            <div id="botescondidofaix1"></div>
        </div>
    <!-- menu -->
        <div id="telazul">
        <div class="menuprincipal" id="menuprinc">

            <p class="p1"><?php echo $nick;?></p>
            <p class="p2"> CFCriptografia online</p>

            <li id="esp">
                <a style="color:white;text-decoration:none ;"><ul class="select"><p class="p3" >Todos os Arquivos </p> <img src="imagem/branco.png" class="imagem"></ul></a>
                <a href="fotos.php" style="color:white;text-decoration:none ;"> <ul class="ulmenu"><p class="p3"> Fotos </p> <img src="imagem/branco.png" class="imagem"></ul></a>
                <a href="trabalho.php" style="color:white;text-decoration:none ;"> <ul class="ulmenu"><p class="p3"> Trabalho </p> <img src="imagem/branco.png" class="imagem"></ul></a>
                <a href="jogos.php" style="color:white;text-decoration:none ;"> <ul class="ulmenu"><p class="p3"> Jogos </p> <img src="imagem/branco.png" class="imagem"></ul></a>
                <a href="compartilhados.php" style="color:white;text-decoration:none ;"> <ul class="ulmenu"><p class="p3"> Compartilhados </p> <img src="imagem/branco.png" class="imagem"></ul></a>
                <a href="planos.html" style="color:white;text-decoration:none ;"><ul class="ulmenu"><p class="p3"> Planos </p> <img src="imagem/branco.png" class="imagem"></ul></a>
            
            </li>
            <hr style="width: 80%;margin-top: 15px;">
            
        </div>
    </div>
        


        </div>
    <!-- principal -->

    <div id="principal">
        <p style="font-size:36px ;margin-bottom: 25px;">Todos os Arquivos </p>
        <p style="display:inline;">Barra de pesquisa </p>

        <form name="pesquisa" method="post" enctype="multipart/form-data" action="http://www.localhost/teste/pesquisa.php" style="display:inline;">
        <input type="text" name="pesc" style="margin-left:15px;">
        <input  type="text" name="nick" value="<?php echo $nick;?>" style="display:none;">
		<input  type="text" name="senha" value="<?php echo $senha;?>" style="display:none;"> 
        <button type="submit">pesquisar</button>
        </form>
    
    <hr class="hrprincipal">
    <p style="display:inline;">Arquivos</p>
    
    <button class="botupload" onclick="mostrarenvarqu()">Fazer upload de arquivos</button>

    <div class="enviaarquivos" id="enviaarquivostela">
        <form name="formarquivos" method="post" enctype="multipart/form-data" action="http://www.localhost/teste/enviaarq.php">
            <p style="position:relative;top:7px;font-size:18px;margin-left:15px;">Escolha o arquivo</p><br>
            <input type="file" name="arq" style="margin-left:15px;" required><br>
            <p style="margin-left:15px;" >selecione a classe :</p>
                 <select style="margin-left:15px;" required name="classe">
                        <option value="todos">Todos os arquivos</option>
                        <option value="fotos">Fotos</option>
                        <option value="trabalho">Trabalho</option>
                        <option value="jogos">Jogos</option>
                        <option value="compartilhados">Compartilhados</option>
                </select>
                <input  type="text" name="nick" value="<?php echo $nick;?>" style="display:none;">
				<input  type="text" name="senha" value="<?php echo $senha;?>" style="display:none;"> 
                
            <input type="submit" style="margin-left:15px;" name="sub">
        </form>
    </div>
    
    

    <br>
    <ul class="ullista" style="display:<?php echo $displayarquivo[1];?>"><div class="divisor"><br><p class="plista"><?php echo $nomearquivo[1];?></p><p style="display:none" id="identificador1"><?php echo $identificador["1"];?></p></div> <form style="display:inline;" action="http://www.localhost/teste/baixar.php" method="post">
                                                                                                                                                                                                                                     <button class="botbaixar" type="submit" name="botbaixar" value="baixar">Baixar</button>
                                                                                                                                                                                                                                     <input  type="text" name="nick" value="<?php echo $nick;?>" style="display:none;">
				                                                                                                                                                                                                                     <input  type="text" name="senha" value="<?php echo $senha;?>" style="display:none;">
                                                                                                                                                                                                                                     <input  type="text" name="nomearq" value="<?php echo $nomearquivo[1];?>" style="display:none;">
                                                                                                                                                                                                                                     </form>
                                                                                                                                                                                                                                     
                                                                                                                                                                                                                                     <form style="display:inline;" action="http://www.localhost/teste/delet.php" method="post">
                                                                                                                                                                                                                                     <button class="botexcluir" type="submit" name="botexcluir" value="excluir">Excluir</button>
                                                                                                                                                                                                                                     <input  type="text" name="nick" value="<?php echo $nick;?>" style="display:none;">
				                                                                                                                                                                                                                     <input  type="text" name="senha" value="<?php echo $senha;?>" style="display:none;">
                                                                                                                                                                                                                                     <input  type="text" name="nomearq" value="<?php echo $nomearquivo[1];?>" style="display:none;">
                                                                                                                                                                                                                                     </form></ul>



        <ul class="ullista" style="display:<?php echo $displayarquivo[2];?>"><div class="divisor"><br><p class="plista"><?php echo $nomearquivo[2];?></p><p style="display:none" id="identificador2"><?php echo $identificador["2"];?></p></div> <form style="display:inline;" action="http://www.localhost/teste/baixar.php" method="post">
                                                                                                                                                                                                                                     <button class="botbaixar" type="submit" name="botbaixar" value="baixar">Baixar</button>
                                                                                                                                                                                                                                     <input  type="text" name="nick" value="<?php echo $nick;?>" style="display:none;">
				                                                                                                                                                                                                                     <input  type="text" name="senha" value="<?php echo $senha;?>" style="display:none;">
                                                                                                                                                                                                                                     <input  type="text" name="nomearq" value="<?php echo $nomearquivo[2];?>" style="display:none;">
                                                                                                                                                                                                                                     </form>
                                                                                                                                                                                                                                     <form style="display:inline;" action="http://www.localhost/teste/delet.php" method="post">
                                                                                                                                                                                                                                     <button class="botexcluir" type="submit" name="botexcluir" value="excluir">Excluir</button>
                                                                                                                                                                                                                                     <input  type="text" name="nick" value="<?php echo $nick;?>" style="display:none;">
				                                                                                                                                                                                                                     <input  type="text" name="senha" value="<?php echo $senha;?>" style="display:none;">
                                                                                                                                                                                                                                     <input  type="text" name="nomearq" value="<?php echo $nomearquivo[2];?>" style="display:none;">
				                                                                                                                                                                                                                     </form></ul>



        <ul class="ullista" style="display:<?php echo $displayarquivo[3];?>"><div class="divisor"><br><p class="plista"><?php echo $nomearquivo[3];?></p><p style="display:none" id="identificador3"><?php echo $identificador["3"];?></p></div><form style="display:inline;" action="http://www.localhost/teste/baixar.php" method="post">
                                                                                                                                                                                                                                     <button class="botbaixar" type="submit" name="botbaixar" value="baixar">Baixar</button>
                                                                                                                                                                                                                                     <input  type="text" name="nick" value="<?php echo $nick;?>" style="display:none;">
				                                                                                                                                                                                                                     <input  type="text" name="senha" value="<?php echo $senha;?>" style="display:none;">
                                                                                                                                                                                                                                     <input  type="text" name="nomearq" value="<?php echo $nomearquivo[3];?>" style="display:none;">
                                                                                                                                                                                                                                     </form>
                                                                                                                                                                                                                                     <form style="display:inline;" action="http://www.localhost/teste/delet.php" method="post">
                                                                                                                                                                                                                                     <button class="botexcluir" type="submit" name="botexcluir" value="excluir">Excluir</button>
                                                                                                                                                                                                                                     <input  type="text" name="nick" value="<?php echo $nick;?>" style="display:none;">
				                                                                                                                                                                                                                     <input  type="text" name="senha" value="<?php echo $senha;?>" style="display:none;">
                                                                                                                                                                                                                                     <input  type="text" name="nomearq" value="<?php echo $nomearquivo[3];?>" style="display:none;">
				                                                                                                                                                                                                                     </form></ul>



        <ul class="ullista" style="display:<?php echo $displayarquivo[4];?>"><div class="divisor"><br><p class="plista"><?php echo $nomearquivo[4];?></p><p style="display:none" id="identificador4"><?php echo $identificador["4"];?></p></div><form style="display:inline;" action="http://www.localhost/teste/baixar.php" method="post">
                                                                                                                                                                                                                                     <button class="botbaixar" type="submit" name="botbaixar" value="baixar">Baixar</button>
                                                                                                                                                                                                                                     <input  type="text" name="nick" value="<?php echo $nick;?>" style="display:none;">
				                                                                                                                                                                                                                     <input  type="text" name="senha" value="<?php echo $senha;?>" style="display:none;">
                                                                                                                                                                                                                                     <input  type="text" name="nomearq" value="<?php echo $nomearquivo[4];?>" style="display:none;">
                                                                                                                                                                                                                                     </form>
                                                                                                                                                                                                                                    
				                                                                                                                                                                                                                    <form style="display:inline;" action="http://www.localhost/teste/delet.php" method="post">
                                                                                                                                                                                                                                     <button class="botexcluir" type="submit" name="botexcluir" value="excluir">Excluir</button>
                                                                                                                                                                                                                                     <input  type="text" name="nick" value="<?php echo $nick;?>" style="display:none;">
				                                                                                                                                                                                                                     <input  type="text" name="senha" value="<?php echo $senha;?>" style="display:none;">
                                                                                                                                                                                                                                     <input  type="text" name="nomearq" value="<?php echo $nomearquivo[4];?>" style="display:none;">
				                                                                                                                                                                                                                     </form></ul>



        <ul class="ullista" style="display:<?php echo $displayarquivo[5];?>"><div class="divisor"><br><p class="plista"><?php echo $nomearquivo[5];?></p><p style="display:none" id="identificador5"><?php echo $identificador["5"];?></p></div><form style="display:inline;" action="http://www.localhost/teste/baixar.php" method="post">
                                                                                                                                                                                                                                     <button class="botbaixar" type="submit" name="botbaixar" value="baixar">Baixar</button>
                                                                                                                                                                                                                                     <input  type="text" name="nick" value="<?php echo $nick;?>" style="display:none;">
				                                                                                                                                                                                                                     <input  type="text" name="senha" value="<?php echo $senha;?>" style="display:none;">
                                                                                                                                                                                                                                     <input  type="text" name="nomearq" value="<?php echo $nomearquivo[5];?>" style="display:none;">
                                                                                                                                                                                                                                     </form>
				                                                                                                                                                                                                                     <form style="display:inline;" action="http://www.localhost/teste/delet.php" method="post">
                                                                                                                                                                                                                                     <button class="botexcluir" type="submit" name="botexcluir" value="excluir">Excluir</button>
                                                                                                                                                                                                                                     <input  type="text" name="nick" value="<?php echo $nick;?>" style="display:none;">
				                                                                                                                                                                                                                     <input  type="text" name="senha" value="<?php echo $senha;?>" style="display:none;">
                                                                                                                                                                                                                                     <input  type="text" name="nomearq" value="<?php echo $nomearquivo[5];?>" style="display:none;">
				                                                                                                                                                                                                                     </form></ul>



        <ul class="ullista" style="display:<?php echo $displayarquivo[6];?>"><div class="divisor"><br><p class="plista"><?php echo $nomearquivo[6];?></p><p style="display:none" id="identificador6"><?php echo $identificador["6"];?></p></div><form style="display:inline;" action="http://www.localhost/teste/baixar.php" method="post">
                                                                                                                                                                                                                                     <button class="botbaixar" type="submit" name="botbaixar" value="baixar">Baixar</button>
                                                                                                                                                                                                                                     <input  type="text" name="nick" value="<?php echo $nick;?>" style="display:none;">
				                                                                                                                                                                                                                     <input  type="text" name="senha" value="<?php echo $senha;?>" style="display:none;">
                                                                                                                                                                                                                                     <input  type="text" name="nomearq" value="<?php echo $nomearquivo[6];?>" style="display:none;">
                                                                                                                                                                                                                                     </form>
				                                                                                                                                                                                                                     <form style="display:inline;" action="http://www.localhost/teste/delet.php" method="post">
                                                                                                                                                                                                                                     <button class="botexcluir" type="submit" name="botexcluir" value="excluir">Excluir</button>
                                                                                                                                                                                                                                     <input  type="text" name="nick" value="<?php echo $nick;?>" style="display:none;">
				                                                                                                                                                                                                                     <input  type="text" name="senha" value="<?php echo $senha;?>" style="display:none;">
                                                                                                                                                                                                                                     <input  type="text" name="nomearq" value="<?php echo $nomearquivo[6];?>" style="display:none;">
				                                                                                                                                                                                                                     </form></ul>



        <ul class="ullista" style="display:<?php echo $displayarquivo[7];?>"><div class="divisor"><br><p class="plista"><?php echo $nomearquivo[7];?></p><p style="display:none" id="identificador7"><?php echo $identificador["7"];?></p></div> <form style="display:inline;" action="http://www.localhost/teste/baixar.php" method="post">
                                                                                                                                                                                                                                     <button class="botbaixar" type="submit" name="botbaixar" value="baixar">Baixar</button>
                                                                                                                                                                                                                                     <input  type="text" name="nick" value="<?php echo $nick;?>" style="display:none;">
				                                                                                                                                                                                                                     <input  type="text" name="senha" value="<?php echo $senha;?>" style="display:none;">
                                                                                                                                                                                                                                     <input  type="text" name="nomearq" value="<?php echo $nomearquivo[7];?>" style="display:none;">
                                                                                                                                                                                                                                     </form>
				                                                                                                                                                                                                                     <form style="display:inline;" action="http://www.localhost/teste/delet.php" method="post">
                                                                                                                                                                                                                                     <button class="botexcluir" type="submit" name="botexcluir" value="excluir">Excluir</button>
                                                                                                                                                                                                                                     <input  type="text" name="nick" value="<?php echo $nick;?>" style="display:none;">
				                                                                                                                                                                                                                     <input  type="text" name="senha" value="<?php echo $senha;?>" style="display:none;">
                                                                                                                                                                                                                                     <input  type="text" name="nomearq" value="<?php echo $nomearquivo[7];?>" style="display:none;">
				                                                                                                                                                                                                                     </form></ul>



        <ul class="ullista" style="display:<?php echo $displayarquivo[8];?>"><div class="divisor"><br><p class="plista"><?php echo $nomearquivo[8];?></p><p style="display:none" id="identificador8"><?php echo $identificador["8"];?></p></div> <form style="display:inline;" action="http://www.localhost/teste/baixar.php" method="post">
                                                                                                                                                                                                                                     <button class="botbaixar" type="submit" name="botbaixar" value="baixar">Baixar</button>
                                                                                                                                                                                                                                     <input  type="text" name="nick" value="<?php echo $nick;?>" style="display:none;">
				                                                                                                                                                                                                                     <input  type="text" name="senha" value="<?php echo $senha;?>" style="display:none;">
                                                                                                                                                                                                                                     <input  type="text" name="nomearq" value="<?php echo $nomearquivo[8];?>" style="display:none;">
                                                                                                                                                                                                                                     </form>
				                                                                                                                                                                                                                     <form style="display:inline;" action="http://www.localhost/teste/delet.php" method="post">
                                                                                                                                                                                                                                     <button class="botexcluir" type="submit" name="botexcluir" value="excluir">Excluir</button>
                                                                                                                                                                                                                                     <input  type="text" name="nick" value="<?php echo $nick;?>" style="display:none;">
				                                                                                                                                                                                                                     <input  type="text" name="senha" value="<?php echo $senha;?>" style="display:none;">
                                                                                                                                                                                                                                     <input  type="text" name="nomearq" value="<?php echo $nomearquivo[8];?>" style="display:none;">
				                                                                                                                                                                                                                     </form></ul>



        <ul class="ullista" style="display:<?php echo $displayarquivo[9];?>"><div class="divisor"><br><p class="plista"><?php echo $nomearquivo[9];?></p><p style="display:none" id="identificador9"><?php echo $identificador["9"];?></p></div> <form style="display:inline;" action="http://www.localhost/teste/baixar.php" method="post">
                                                                                                                                                                                                                                     <button class="botbaixar" type="submit" name="botbaixar" value="baixar">Baixar</button>
                                                                                                                                                                                                                                     <input  type="text" name="nick" value="<?php echo $nick;?>" style="display:none;">
				                                                                                                                                                                                                                     <input  type="text" name="senha" value="<?php echo $senha;?>" style="display:none;">
                                                                                                                                                                                                                                     <input  type="text" name="nomearq" value="<?php echo $nomearquivo[9];?>" style="display:none;">
                                                                                                                                                                                                                                     </form>
				                                                                                                                                                                                                                     <form style="display:inline;" action="http://www.localhost/teste/delet.php" method="post">
                                                                                                                                                                                                                                     <button class="botexcluir" type="submit" name="botexcluir" value="excluir">Excluir</button>
                                                                                                                                                                                                                                     <input  type="text" name="nick" value="<?php echo $nick;?>" style="display:none;">
				                                                                                                                                                                                                                     <input  type="text" name="senha" value="<?php echo $senha;?>" style="display:none;">
                                                                                                                                                                                                                                     <input  type="text" name="nomearq" value="<?php echo $nomearquivo[9];?>" style="display:none;">
				                                                                                                                                                                                                                     </form></ul>



        <ul class="ullista" style="display:<?php echo $displayarquivo[10];?>"><div class="divisor"><br><p class="plista"><?php echo $nomearquivo[10];?></p><p style="display:none" id="identificador10"><?php echo $identificador["10"];?></p></div> <form style="display:inline;" action="http://www.localhost/teste/baixar.php" method="post">
                                                                                                                                                                                                                                     <button class="botbaixar" type="submit" name="botbaixar" value="baixar">Baixar</button>
                                                                                                                                                                                                                                     <input  type="text" name="nick" value="<?php echo $nick;?>" style="display:none;">
				                                                                                                                                                                                                                     <input  type="text" name="senha" value="<?php echo $senha;?>" style="display:none;">
                                                                                                                                                                                                                                     <input  type="text" name="nomearq" value="<?php echo $nomearquivo[10];?>" style="display:none;">
                                                                                                                                                                                                                                     </form>
				                                                                                                                                                                                                                     <form style="display:inline;" action="http://www.localhost/teste/delet.php" method="post">
                                                                                                                                                                                                                                     <button class="botexcluir" type="submit" name="botexcluir" value="excluir">Excluir</button>
                                                                                                                                                                                                                                     <input  type="text" name="nick" value="<?php echo $nick;?>" style="display:none;">
				                                                                                                                                                                                                                     <input  type="text" name="senha" value="<?php echo $senha;?>" style="display:none;">
                                                                                                                                                                                                                                     <input  type="text" name="nomearq" value="<?php echo $nomearquivo[10];?>" style="display:none;">
				                                                                                                                                                                                                                     </form></ul>



        <ul class="ullista" style="display:<?php echo $displayarquivo[11];?>"><div class="divisor"><br><p class="plista"><?php echo $nomearquivo[11];?></p><p style="display:none" id="identificador11"><?php echo $identificador["11"];?></p></div> <form style="display:inline;" action="http://www.localhost/teste/baixar.php" method="post">
                                                                                                                                                                                                                                     <button class="botbaixar" type="submit" name="botbaixar" value="baixar">Baixar</button>
                                                                                                                                                                                                                                     <input  type="text" name="nick" value="<?php echo $nick;?>" style="display:none;">
				                                                                                                                                                                                                                     <input  type="text" name="senha" value="<?php echo $senha;?>" style="display:none;">
                                                                                                                                                                                                                                     <input  type="text" name="nomearq" value="<?php echo $nomearquivo[11];?>" style="display:none;">
                                                                                                                                                                                                                                     </form>
				                                                                                                                                                                                                                     <form style="display:inline;" action="http://www.localhost/teste/delet.php" method="post">
                                                                                                                                                                                                                                     <button class="botexcluir" type="submit" name="botexcluir" value="excluir">Excluir</button>
                                                                                                                                                                                                                                     <input  type="text" name="nick" value="<?php echo $nick;?>" style="display:none;">
				                                                                                                                                                                                                                     <input  type="text" name="senha" value="<?php echo $senha;?>" style="display:none;">
                                                                                                                                                                                                                                     <input  type="text" name="nomearq" value="<?php echo $nomearquivo[11];?>" style="display:none;">
				                                                                                                                                                                                                                     </form></ul>



        <ul class="ullista" style="display:<?php echo $displayarquivo[12];?>"><div class="divisor"><br><p class="plista"><?php echo $nomearquivo[12];?></p><p style="display:none" id="identificador12"><?php echo $identificador["12"];?></p></div><form style="display:inline;" action="http://www.localhost/teste/baixar.php" method="post">
                                                                                                                                                                                                                                     <button class="botbaixar" type="submit" name="botbaixar" value="baixar">Baixar</button>
                                                                                                                                                                                                                                     <input  type="text" name="nick" value="<?php echo $nick;?>" style="display:none;">
				                                                                                                                                                                                                                     <input  type="text" name="senha" value="<?php echo $senha;?>" style="display:none;">
                                                                                                                                                                                                                                     <input  type="text" name="nomearq" value="<?php echo $nomearquivo[12];?>" style="display:none;">
                                                                                                                                                                                                                                     </form>
				                                                                                                                                                                                                                     <form style="display:inline;" action="http://www.localhost/teste/delet.php" method="post">
                                                                                                                                                                                                                                     <button class="botexcluir" type="submit" name="botexcluir" value="excluir">Excluir</button>
                                                                                                                                                                                                                                     <input  type="text" name="nick" value="<?php echo $nick;?>" style="display:none;">
				                                                                                                                                                                                                                     <input  type="text" name="senha" value="<?php echo $senha;?>" style="display:none;">
                                                                                                                                                                                                                                     <input  type="text" name="nomearq" value="<?php echo $nomearquivo[12];?>" style="display:none;">
				                                                                                                                                                                                                                     </form></ul>



        <ul class="ullista" style="display:<?php echo $displayarquivo[13];?>"><div class="divisor"><br><p class="plista"><?php echo $nomearquivo[13];?></p><p style="display:none" id="identificador13"><?php echo $identificador["13"];?></p></div> <form style="display:inline;" action="http://www.localhost/teste/baixar.php" method="post">
                                                                                                                                                                                                                                     <button class="botbaixar" type="submit" name="botbaixar" value="baixar">Baixar</button>
                                                                                                                                                                                                                                     <input  type="text" name="nick" value="<?php echo $nick;?>" style="display:none;">
				                                                                                                                                                                                                                     <input  type="text" name="senha" value="<?php echo $senha;?>" style="display:none;">
                                                                                                                                                                                                                                     <input  type="text" name="nomearq" value="<?php echo $nomearquivo[13];?>" style="display:none;">
                                                                                                                                                                                                                                     </form>
				                                                                                                                                                                                                                     <form style="display:inline;" action="http://www.localhost/teste/delet.php" method="post">
                                                                                                                                                                                                                                     <button class="botexcluir" type="submit" name="botexcluir" value="excluir">Excluir</button>
                                                                                                                                                                                                                                     <input  type="text" name="nick" value="<?php echo $nick;?>" style="display:none;">
				                                                                                                                                                                                                                     <input  type="text" name="senha" value="<?php echo $senha;?>" style="display:none;">
                                                                                                                                                                                                                                     <input  type="text" name="nomearq" value="<?php echo $nomearquivo[13];?>" style="display:none;">
				                                                                                                                                                                                                                     </form></ul>



        <ul class="ullista" style="display:<?php echo $displayarquivo[14];?>"><div class="divisor"><br><p class="plista"><?php echo $nomearquivo[14];?></p><p style="display:none" id="identificador14"><?php echo $identificador["14"];?></p></div> <form style="display:inline;" action="http://www.localhost/teste/baixar.php" method="post">
                                                                                                                                                                                                                                     <button class="botbaixar" type="submit" name="botbaixar" value="baixar">Baixar</button>
                                                                                                                                                                                                                                     <input  type="text" name="nick" value="<?php echo $nick;?>" style="display:none;">
				                                                                                                                                                                                                                     <input  type="text" name="senha" value="<?php echo $senha;?>" style="display:none;">
                                                                                                                                                                                                                                     <input  type="text" name="nomearq" value="<?php echo $nomearquivo[14];?>" style="display:none;">
                                                                                                                                                                                                                                     </form>
				                                                                                                                                                                                                                     <form style="display:inline;" action="http://www.localhost/teste/delet.php" method="post">
                                                                                                                                                                                                                                     <button class="botexcluir" type="submit" name="botexcluir" value="excluir">Excluir</button>
                                                                                                                                                                                                                                     <input  type="text" name="nick" value="<?php echo $nick;?>" style="display:none;">
				                                                                                                                                                                                                                     <input  type="text" name="senha" value="<?php echo $senha;?>" style="display:none;">
                                                                                                                                                                                                                                     <input  type="text" name="nomearq" value="<?php echo $nomearquivo[14];?>" style="display:none;">
				                                                                                                                                                                                                                     </form></ul>



        <ul class="ullista" style="display:<?php echo $displayarquivo[15];?>"><div class="divisor"><br><p class="plista"><?php echo $nomearquivo[15];?></p><p style="display:none" id="identificador15"><?php echo $identificador["15"];?></p></div> <form style="display:inline;" action="http://www.localhost/teste/baixar.php" method="post">
                                                                                                                                                                                                                                     <button class="botbaixar" type="submit" name="botbaixar" value="baixar">Baixar</button>
                                                                                                                                                                                                                                     <input  type="text" name="nick" value="<?php echo $nick;?>" style="display:none;">
				                                                                                                                                                                                                                     <input  type="text" name="senha" value="<?php echo $senha;?>" style="display:none;">
                                                                                                                                                                                                                                     <input  type="text" name="nomearq" value="<?php echo $nomearquivo[15];?>" style="display:none;">
                                                                                                                                                                                                                                     </form>
				                                                                                                                                                                                                                     <form style="display:inline;" action="http://www.localhost/teste/delet.php" method="post">
                                                                                                                                                                                                                                     <button class="botexcluir" type="submit" name="botexcluir" value="excluir">Excluir</button>
                                                                                                                                                                                                                                     <input  type="text" name="nick" value="<?php echo $nick;?>" style="display:none;">
				                                                                                                                                                                                                                     <input  type="text" name="senha" value="<?php echo $senha;?>" style="display:none;">
                                                                                                                                                                                                                                     <input  type="text" name="nomearq" value="<?php echo $nomearquivo[15];?>" style="display:none;">
				                                                                                                                                                                                                                     </form></ul>
       
        <form style="display:inline;" action="" method="post">
        <button class="botpasspagina" type="submit" name="bot0" value="bot0"> Pagina anterior</button>
        </form><form style="display:inline;" action="" method="post">
        <button class="botpasspagina" type="submit" name="bot1" value="bot1"> Proxima pagina</button></form>
        <br><br><br><br><br><p style="text-align:right;margin-right:50%;"><?php echo $valordapagina ?></p>
    </div>
   
	</body>
</html>