<?php

include_once("./model/Aluno.php");

    $cadastro = new Aluno("Sabrina Nery", 23);

    $stringJsonCadastro = json_encode($cadastro);

    echo $stringJsonCadastro;
