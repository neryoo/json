<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="alunos.js"></script>
    <script>

        function resposta(obj){
            obj.json().then(function(obj){

                let aluno = new Aluno(obj.nome, obj.idade);



            })
        }

        fetch("/main.php").then(resposta);


    </script>

</head>
<body>

    <h1>Gerenciar Alunos</h1>
    
</body>
</html>