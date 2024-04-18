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
                <a href="professor.html">Professor</a>
                <a href="aluno.html">Aluno</a>
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

                require_once "class\aluno.php";
                $nome = $_GET["nome"] ?? "";
                $idade = $_GET["idade"] ?? "";
                $senha = $_GET["senha"] ?? "";
                $endereco = $_GET["endereco"] ?? "";

                $a = new aluno($nome, $idade, $senha, $endereco);

                echo "<td>" . $a->getNome() . "</td>";
                echo "<td>" . $a->getIdade() . "</td>";
                echo "<td>" . $a->getSenha() . "</td>";
                echo "<td>" . $a->getEndereco() . "</td>";

                ?>
                </tr>
            </table>

        </article>
        <footer>
            <p>Rodapé</p>
        </footer>
</body>

</html>