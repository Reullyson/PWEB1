<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Curriculo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <?php
            $nomeCompleto = "SEU NOME COMPLETO"; 
            $idade = 0;
            $fotoPerfil = "imagens/sua_foto.jpg"; 
        ?>
        <div class = "perfil">
            <img src="<?php print $fotoPerfil; ?>" alt="foto do perfil">
            <h1> <?php print $nomeCompleto; ?></h1>
            <p> idade: <?php print $idade; ?> anos</p>
        </div>


    </header>
    <section id="experiencia">
        <h2>Experiencia profissional</h2>
    </section>
    <section id ="cursos">
        <h2>Cursos e Formação</h2>
    </section>
    <section id="habilidades">
        <h2>Habilidades</h2>
    </section>
    <footer>
        <p><? php echo date("y"); ?> seu nome</p>
    </footer>
    Ç
</body>
</html>