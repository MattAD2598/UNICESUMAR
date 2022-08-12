<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rita Marmitex</title>
    <link rel="stylesheet" href="css/page.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/contato.css">
    <link rel="stylesheet" href="css/home.css">
</head>
<body>
    <header>
        <font color="#842410" size="9">
        <p>Rita Marmitex</p>
        </font>
        
        <a href="index.php">
            <img src="images/logoritamarmitex.png" alt="Logo" class="logo">
        </a>        
    </header>
    <nav>
        <ul>
            <li>
                <a href="index.php"><font color="ffffff">Home</font></a>
            </li>
            <li>
                <a href="index.php?page=quem_somos"><font color="ffffff">Quem somos</font></a>
            </li>
            <li>
                <a href="index.php?page=contato"><font color="ffffff">Contato</font></a>    
            </li>
            
        </ul>
    </nav>
    <div class="content">
        <div class="container">
            <?php
                $page = "home";

                if(isset($_GET['page'])){

                    if(file_exists("pages/".$_GET['page'].".php")){
                        $page = $_GET['page'];
                    }
                }

                include("pages/$page.php");
            ?>
        </div>
    </div>
    <footer>
    <font color="ffffff">
        <p class="rodape"> Rita Marmitex<br><br>
        Fone: (66) 6666-6666<br>
        Endereço: Rua das Milanesas  bairro: Marmitolandia <br>
        Sabor de amor! </p>
    <div align="center" >
        <p>    2022 | MAPA | Aluno: Matheus Alves Duarte  | RA: 21020297-5 | Curso: SISTEMAS PARA INTERNET</p>
    </div>
    </font>
    </footer>
</body>
</html>