<html>
    <head>
        <?php
            $txt = isset($_GET["t"]) ? $_GET["t"] : "Texto Genérico";
            $tam = isset($_GET["tam"]) ? $_GET["tam"]: "12";
            $cor = isset($_GET["cor"])? $_GET["cor"] : "#000";
        ?>
        <meta content="UTF-8" />
        <title>Curso de PHP - CursoEmVideo.com</title>
        <style>
        span.texto{
            font-size: <?php echo $tam; ?>;
            color:  <?= $cor ?>;
        }
        </style>

    </head>
    <body>
        <div>
            <?php
              echo "<span class='texto'>$txt</span>";
            ?>
            <a href="03exercicio.html">Voltar</a>
        </div>
    </body>
</html>