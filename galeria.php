<?php
    error_reporting(E_ERROR | E_PARSE);
    $pagina = $_GET['pag'];
    if ($pagina != 1){
        if ($pagina == null or is_numeric($pagina) == false or $pagina < 1 or file_exists("galeria/" . 1 + (4*($pagina-1)) . ".jpg") == false){
            include("invalido.html");
            exit();
        }
    }
    else if (file_exists("galeria/" . 1 + (4*($pagina-1)) . ".jpg") == false){
        include("nocontent.html");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galería</title>
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
    <nav>
        <h1>test</h1>
        <ul>
            <li><a href="#">Galería</a></li>
            <li><a href="subir.html">Subir</a></li>
        </ul>
    </nav>
    <header>
        <?php
            echo "<h1>Página " . $pagina . "</h1>";
        ?>
        <div class="contenido">
            <div class="contenido-grupo">
                <div class="contenido-bloque">
                    <?php
                        if ($pagina == 1){
                            echo "<a href='post.php?id=" . 1 . "'><img src='galeria/" . 1 . ".jpg' alt=''></a>";
                            echo "<p>Post #" . 1 . "</p>";
                        }
                        else if (file_exists("galeria/" . 1 + (4*($pagina-1)) . ".jpg")){
                            echo "<a href='post.php?id=" . 1 + (4*($pagina-1)) . "'><img src='galeria/" . 1 + (4*($pagina-1)) . ".jpg' alt=''></a>";
                            echo "<p>Post #" . 1 + (4*($pagina-1)) . "</p>";
                        }
                    ?>
                </div>
                <?php
                    if ($pagina == 1){
                        if (file_exists("galeria/" . 2 + (4*($pagina-1)) . ".jpg")){
                            echo "<div class='contenido-bloque'>";
                            echo "<a href='post.php?id=" . 2 . "'><img src='galeria/" . 2 . ".jpg' alt=''></a>";
                            echo "<p>Post #" . 2 . "</p>";
                            echo "</div>";
                        }
                    }
                    else if (file_exists("galeria/" . 2 + (4*($pagina-1)) . ".jpg")){
                        echo "<div class='contenido-bloque'>";
                        echo "<a href='post.php?id=" . 2 + (4*($pagina-1)) . "'><img src='galeria/" . 2 + (4*($pagina-1)) . ".jpg' alt=''></a>";
                        echo "<p>Post #" . 2 + (4*($pagina-1)) . "</p>";
                        echo "</div>";
                    }
                ?>
            </div>
            <div class="contenido-grupo">
                <?php
                    if ($pagina == 1){
                        if (file_exists("galeria/" . 3 + (4*($pagina-1)) . ".jpg")){
                            echo "<div class='contenido-bloque'>";
                            echo "<a href='post.php?id=" . 3 . "'><img src='galeria/" . 3 . ".jpg' alt=''></a>";
                            echo "<p>Post #" . 3 . "</p>";
                            echo "</div>";
                        }
                    }
                    else if (file_exists("galeria/" . 3 + (4*($pagina-1)) . ".jpg")){
                        echo "<div class='contenido-bloque'>";
                        echo "<a href='post.php?id=" . 3 + (4*($pagina-1)) . "'><img src='galeria/" . 3 + (4*($pagina-1)) . ".jpg' alt=''></a>";
                        echo "<p>Post #" . 3 + (4*($pagina-1)) . "</p>";
                        echo "</div>";
                    }
                ?>
                <?php
                    if ($pagina == 1){
                        if (file_exists("galeria/" . 4 + (4*($pagina-1)) . ".jpg")){
                            echo "<div class='contenido-bloque'>";
                            echo "<a href='post.php?id=" . 4 . "'><img src='galeria/" . 4 . ".jpg' alt=''></a>";
                            echo "<p>Post #" . 4 . "</p>";
                            echo "</div>";
                        }
                    }
                    else if (file_exists("galeria/" . 4 + (4*($pagina-1)) . ".jpg")){
                        echo "<div class='contenido-bloque'>";
                        echo "<a href='post.php?id=" . 4 + (4*($pagina-1)) . "'><img src='galeria/" . 4 + (4*($pagina-1)) . ".jpg' alt=''></a>";
                        echo "<p>Post #" . 4 + (4*($pagina-1)) . "</p>";
                        echo "</div>";
                    }
                ?>
            </div>
            <div class="contenido-botones">
                <div class="contenido-botones-izquierda">
                    <?php
                        if ($pagina > 1){
                            echo "<a class='boton' href='galeria.php?pag=" . $pagina-1 . "'>Anterior Pág.</a>";
                        }
                        else{
                            echo "<button class='boton' disabled>Anterior Pág.</button>";
                        }
                    ?>
                </div>
                <div class="contenido-botones-derecha">
                    <?php
                        if (file_exists("galeria/" . 1 + (4*($pagina)) . ".jpg")){
                            echo "<a class='boton' href='galeria.php?pag=" . $pagina+1 . "'>Siguiente Pág.</a>";      
                        }
                        else{
                            echo "<button class='boton' disabled>Siguiente Pág.</button>";
                        }
                    ?>
                </div>
            </div>
        </div>
    </header>
</body>
</html>
