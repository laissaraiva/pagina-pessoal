<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Pessoal de [Seu Nome]</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

    <?php
        // Bloco PHP para saudação
        if (isset($_GET['nome'])) {
            $nome_visitante = htmlspecialchars($_GET['nome']);
        } else {
            $nome_visitante = "Visitante";
        }
    ?>

    <header>
        <div class="header-content">
            <img src="assets/logo-cin.png" alt="Logo do CIn-UFPE">
            
            <h1>Laís Saraiva</h1>
        </div>
    </header>

    <div class="container">
        <div class="content">
            <p class="saudacao">Olá, <?php echo $nome_visitante; ?>! Bem-vindo(a) à minha página.</p>
            <div class="profile-picture-container">
                <img src="assets/IMG_3042_" alt="Foto de perfil de Lais" class="profile-picture">">

            <section id="sobre-mim">
                <h2>Sobre Mim</h2>
                <p>Sou estudante de Sistemas de Informação no Centro de Informática (CIn) da UFPE. Estou no 2º período e tenho grande interesse por Desenvolvimento Web, Desing e Dados.</p>
            </section>

            <section id="interesses">
                <h2>Meus Interesses</h2>
                <ul>
                    <li>Interesse 1 (ex: Programação em Python)</li>
                    <li>Interesse 2 (ex: Design de Interfaces)</li>
                    <li>Interesse 3 (ex: Análise de Dados)</li>
                </ul>
            </section>

            <section id="contato">
                <h2>Contato</h2>
                <div class="social-buttons">
                    <a href="[SEU LINK DO LINKEDIN]" target="_blank" class="button linkedin">LinkedIn</a>
                    <a href="[SEU LINK DO GITHUB]" target="_blank" class="button github">GitHub</a>
                    <a href="mailto:[SEU-LOGIN]@cin.ufpe.br" class="button email">E-mail</a>
                </div>
            </section>
        </div>
    </div>

    <footer>
        <p>Página criada para a disciplina de Desenvolvimento de Software - &copy; <?php echo date("Y"); ?></p>
    </footer>

</body>
</html>