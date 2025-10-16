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
        // 2 - USANDO UM RECURSO DO PHP ($_GET)
        // Verificamos se um 'nome' foi passado na URL. Ex: ?nome=Maria
        // A função htmlspecialchars() é uma medida de segurança para evitar ataques XSS.
        if (isset($_GET['nome'])) {
            $nome_visitante = htmlspecialchars($_GET['nome']);
        } else {
            $nome_visitante = "Visitante";
        }
    ?>

    <header>
        <h1>Bem-vindo(a) à minha página, <?php echo $nome_visitante; ?>!</h1>
    </header>

    <div class="container">
        <div class="content">
            <section id="sobre-mim">
                <h2>Sobre Mim</h2>
                <p>Olá! Meu nome é Laís Saraiva, sou estudante de Sistemas de Informação no Centro de Informática (CIn) da UFPE.</p>
                <p>Estou no 2º período e tenho grande interesse por Desenvolvimento Web, Inteligência Artificial, Desing e Dados.</p>
            </section>

            <section id="interesses">
                <h2>Meus Interesses</h2>
                <ul>
                    <li> Interesse 1 (ex: Programação em Python)</li>
                    <li> Interesse 2 (ex: Design de Interfaces)</li>
                    <li> Interesse 3 (ex: Análise de Dados)</li>
                    <li> Interesse 4 (ex: Gatos, cachorros ou outro hobby)</li>
                </ul>
            </section>

            <section id="contato">
                <h2>Contato</h2>
                <p>Você pode me encontrar nas seguintes redes:</p>
                <ul>
                    <li><strong>E-mail:</strong> lspc@cin.ufpe.br</li>
                    <li><strong>LinkedIn:</strong> (link para seu perfil)</li>
                    <li><strong>GitHub:</strong> (link para seu perfil)</li>
                </ul>
            </section>
        </div>
    </div>

    <footer>
        <p>Página criada para a disciplina de Desenvolvimento de Software - &copy; <?php echo date("Y"); ?></p>
    </footer>

</body>
</html>