<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="..\css\lista-aluno.css" />
    <title>Lista de Alunos</title>
</head>

<body>
    <div class="container">
        <header>
            <h1>Lista de Alunos</h1>
            <nav>
                <a id="esquerda" href="../../index.html">Inicio</a>
                <a id="meio" href="../html/aluno.html">Aluno</a>
                <a id="direita" href="professor.html">Professor</a>
            </nav>
        </header>
        <main>
            <div class="conteudo">
                <table>
                    <tr>
                        <th>Nome</th>
                        <th>Endereço</th>
                        <th>Senha</th>
                        <th>Idade</th>
                    </tr>
                    <?php
                    require_once "class/aluno.php";
                    $a = new aluno($_GET["nome"], $_GET["endereco"], $_GET["senha"], $_GET["idade"]);
                    echo "
                    <tr>
                        <td>" . $a->getNome() . "</td>
                        <td>" . $a->getEndereco() . "</td>
                        <td>" . $a->getSenha() . "</td>
                        <td>" . $a->getIdade() . "</td>
                    </tr>";
                    echo "
                    <tr>
                        <td>" . $a->getNome() . "</td>
                        <td>" . $a->getEndereco() . "</td>
                        <td>" . $a->getSenha() . "</td>
                        <td>" . $a->getIdade() . "</td>
                    </tr>";
                    echo "
                    <tr>
                        <td>" . $a->getNome() . "</td>
                        <td>" . $a->getEndereco() . "</td>
                        <td>" . $a->getSenha() . "</td>
                        <td>" . $a->getIdade() . "</td>
                    </tr>"; ?>
                </table>
            </div>
        </main>
        <footer></footer>
</body>

</html>