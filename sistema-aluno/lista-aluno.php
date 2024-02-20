<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="lista-aluno.css" />
    <title>Professor</title>
</head>

<body>
    <div class="container">
        <header>
            <img src="img.jpg" alt="giannis" />
            <nav>
                <a href="aluno.html">Aluno</a>
                <a href="professor.html">Professor</a>
            </nav>
            <img src="img.jpg" alt="giannis" />
        </header>
        <article class="main">
            <section>Lista de Alunos</section>
            <table>
                <tr>
                    <th>Nome</th>
                    <th>Idade</th>
                    <th>Senha</th>
                    <th>Endereço</th>
                </tr>
                <?php
                $nome = $_GET["nome"];
                $idade = $_GET["idade"];
                $senha = $_GET["senha"];
                $endereco = $_GET["endereço"];

                echo "<td>$nome</td>";
                echo "<td>$idade</td>";
                echo "<td>$senha</td>";
                echo "<td>$endereco</td>";
                ?>
                </tr>
            </table>

        </article>
        <footer>
            <p>Rodapé</p>
        </footer>
</body>

</html>