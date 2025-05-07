<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="style.css">

    <title>Atividade Ajax_Json</title>

</head>
<body>

    <div>
        <h1>Cadastro de Alunos</h1>
        <p>Complete suas informações</p>
        <br>

      <main>  
        <form id="formulario">
        <fieldset class="grupo">  <!-- Agrupador de campos "label" dentro de uma "caixa" -->
            <div class="campo">
               <label for="nome">Nome</label><!-- descrição do campo --> 
                <input type="text" name="nome" id="nome" require><!--Entrada de dados/valor -->
            </div>

            <div class="campo">
                <label for="sobrenome">Sobrenome</label>
                <input type="text" name="sobrenome" id="sobrenome" required>
            </div>
        </fieldset>

        <div class="campo">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" required>
        </div>

        <div class="campo">
           <label>Qual período de aula?</label>
           <label>
                <input type="radio" name="periodo" value="Manhã" checked>Manhã
           </label>
            <label>
                <input type="radio" name="periodo" value="Tarde"> Tarde
            </label>
            <label>
                <input type="radio" name="periodo" value="Noite"> Noite
            </label>
        </div>

            <div class="campo">
                <label for="semestre">Qual semestre</label>
                <select name="semestre" id="semestre">
                    <option selected disabled>Selecione</option>
                    <option value="1º semestre">1º Sem</opºtion>
                    <option value="2º semestre">2º Sem</option>
                    <option value="3º semestre">3º Sem</option>
                </select>
            </div>

            <fieldset class="grupo">
                <div id="check">
                    <label>Qual curso?</label><br><br>
                    <input type="checkbox" id="curso" name="curs1" value="Desenvolvimento De Sistemas">
                    <label for="curso1">Desenvolvimento de Sistemas</label>
                    <input type="checkbox" id="curso" name="curso2" value="administracao">
                    <label for="curso2">Administração</label>
                    <input type="checkbox" id="curso" name="curso3" value="logistica">
                    <label for="curso3">Logística</label>
                    <input type="checkbox" id="curso" name="curso4" value="recursosHumanos">
                    <label for="curso4">Recursos Humanos</label>
                    <input type="checkbox" id="curso" name="curso5" value="contabilidade">
                    <label for="curso5">Contabilidade</label>
                    <input type="checkbox" id="curso" name="curso6" value="eletronica">
                    <label for="curso6">Eletrônica</label>
                    <input type="checkbox" id="curso" name="curso7" value="marketing">
                    <label for="curso7">Marketing</label>    
                </div>
            </fieldset>

            <div class="campo">
                <br>
                <label>Conte um pouco sobre você:</label>
                <textarea row="6" style="width: 26em" id="experiencia" name="experiencia"></textarea>
            </div>

            <button type="submit" class="botao">Enviar</button>
        
        </form>
      </main>
    </div>
    <script src="script.js"></script>
</body>
</html>