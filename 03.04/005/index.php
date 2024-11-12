<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="pag">
        <h1> Médias Escolares </h1>
        <hr>
        <form action="#" method="post">
                <p>
                    <label for="nome"> Nome </label>
                    <input type="text" name="nome" required>
                </p>
                <p>
                    <label for="disciplina"> Disciplina </label>
                    <input type="text" name="disciplina" required>
                </p>
    
                <p>
                    <label for="nota1"> Nota 1 </label>
                    <input type="number" name="nota1" required step="1.0">
                </p>
                <p>
                    <label for="nota2"> Nota 2 </label>
                    <input type="number" name="nota2" required step="1.0">
                </p>
                <p>
                    <label for="nota3"> Nota 3 </label>
                    <input type="number" name="nota3" required step="1.0">
                </p>
                <p>
                    <label for="nota4"> Nota 4 </label>
                    <input type="number" name="nota4" required step="1.0">
                </p>

                <p> <input type="submit" value="Verificar"> </p>
            </form>
        
            <hr>

            <div class="resultado">
                <?php
                    if(isset($_REQUEST['nome'])){
                        //entrada
                            $nome = $_REQUEST['nome'];
                            $disciplina = $_REQUEST['disciplina'];
                            $nota1 = $_REQUEST['nota1'];
                            $nota2 = $_REQUEST['nota2'];
                            $nota3 = $_REQUEST['nota3'];
                            $nota4 = $_REQUEST['nota4'];
                            
                        //processamento
                            $media = ($nota1 + $nota2 + $nota3 + $nota4)/4;
                            if($media < 5){
                                $sit = "Reprovado";
                            }else if($media < 7){
                                $sit = "Recuperação";
                            }else{
                                $sit = "Aprovado";
                            }
                            
                        //saída
                        echo " <p> Aluno: $nome </p>"; 
                        echo " <p> Disciplina: $disciplina </p>"; 
                        echo " <p> Nota 1: $nota1 </p>"; 
                        echo " <p> Nota 2: $nota2 </p>"; 
                        echo " <p> Nota 3: $nota3 </p>"; 
                        echo " <p> Nota 4: $nota4 </p>"; 
                        echo " <p> Média: $media </p>"; 
                        echo " <p> Situação: $sit </p>"; 
                    }else{
                       echo "Informe os dados para o processamento";     
                    }

                ?>
            </div>
    </div>
</body>
</html>