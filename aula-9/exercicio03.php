
<!DOCTYPE html>
<html>
    <head>
        <meta content="UTF-8" />
        <title>Curso de PHP - CursoEmVideo.com</title>
    </head>
    <body>
        <div>
            <?php
                $nota1 = isset($_GET["nota2"]) ? $_GET["nota1"]: 0;
                $nota2 = isset($_GET["nota2"]) ? $_GET["nota2"]: 1900;
                $media = number_format((($nota1+$nota2)/2),1);
                echo "Voce tirou $nota1 e $nota2 sua média é $media.";
                
                if($media < 5){
                    $situacao = "REPROVADO";
                }
                elseif ($media >= 5 && $media < 7) {
                    $situacao = "RECUPERACAO";
                }
                else{
                    $situacao = "APROVADO";
                }
                echo "<br />Nesse caso você esta $situacao.";

            ?>
        </div>
    </body>
</html>