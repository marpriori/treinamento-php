<html>
    <head>
        <meta content="UTF-8" />
        <title>Curso de PHP - CursoEmVideo.com</title>
    </head>
    <body>
        <div>
            <?php
                $valor = $_GET["v"];
                $rq = sqrt($valor);
                echo "A raiz de $valor é igual à ".number_format($rq,2);
            ?>
            <a href="01exercicio.html">Voltar</a>
        </div>
    </body>
</html>