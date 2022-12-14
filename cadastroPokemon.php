<?php
if (isset($_POST['submit'])) {
    $nomePokemon = $_POST['nomePokemon'];
    $idPokemon = $_POST['idPokemon'];
    $pesoPokemon = $_POST['pesoPokemon'];
    $alturaPokemon = $_POST['alturaPokemon'];
    $habilidadesPokemon = $_POST['habilidadesPokemon'];
    $tipoPokemon = $_POST['tipoPokemon'];

    echo "<script>console.log('Usuário enviou a seguinte indicação de pokemon, Nome:$nomePokemon, Id:$idPokemon, Peso:$pesoPokemon, Altura:$alturaPokemon, Habilidades:$habilidadesPokemon, Tipo:$tipoPokemon'); </script>";
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cadastro de Pokemon</title>
    <link href="css/cadastroPokemon.css" rel="stylesheet">
    <link rel="shortcut icon" type="imagex/png" href="https://img.icons8.com/color/48/000000/psyduck.png">

</head>

<body>

    <!-- indica que o que está dentro dele faz parte do cabeçalho-->

    <header class="cabeçalho">
        <img class="cabeçalho-imagem" src="imagens/pokeball.png" onclick="window.location='home.html';">
        <nav class="cabeçalho-menu">
            <a class="cabeçalho-menu-item" href="pokedex.html"> Pokédex </a>
            <a class="cabeçalho-menu-item" href="cadastroPokemon.php"> Cadastrar pokémon </a>
            <a class="cabeçalho-menu-item" href="https://www.pokemon.com/br/"> Comunidade pokémon</a>
        </nav>
    </header>

    <!-- é a parte principal da pagina-->

    <main>
        <h1 class="textoCadastro">Nos mande algum Pokémon que você queira ver!</h1>
        <br>
        <form action="cadastroPokemon.php" class="formulario-itens" method="POST">
            <div class="form-group">
                <input type="text" class="form-control teste" name="nomePokemon" id="nomePokemon" placeholder="Nome do Pokemon">
            </div>
            <br>
            <div class="form-group">
                <input type="text" class="form-control" name="idPokemon" id="idPokemon" placeholder="Número do Pokemon">
            </div>
            <br>
            <div class="form-group">
                <input type="text" class="form-control" name="pesoPokemon" id="pesoPokemon" placeholder="Peso do Pokemon">
            </div>
            <br>
            <div class="form-group">
                <input type="text" class="form-control" name="alturaPokemon" id="alturaPokemon" placeholder="Altura do Pokemon">
            </div>
            <br>
            <div class="form-group">
                <input type="text" class="form-control" name="habilidadesPokemon" id="habilidadesPokemon" placeholder="Habilidades do Pokemon">
            </div>
            <br>
            <div class="form-group">
                <input type="text" class="form-control" name="tipoPokemon" id="tipoPokemon" placeholder="Tipo do Pokemon">
            </div>
            <br>
            <input type="submit" name="submit" id="submit">
        </form>

    </main>

    <!-- é o rodapé da pagina -->

    <footer class="rodape">
        <img class="rodape-imagem" src="imagens/pokeball.png">
    </footer>

    <script src="js/cadastro.js"></script>
</body>

<!-- CSS Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

<!-- JavaScript Bundle with Popper Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</html>