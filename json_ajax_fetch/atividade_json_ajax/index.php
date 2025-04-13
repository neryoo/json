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
        <h1 id="titulo">Cadastro de DEVs</h1>
        <p id="subtitulo">Complete suas informações</p>
        <br>

      <main>  
        <form>
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
            <input type="email" nome="email" id="email" required>
        </div>

        <div class="campo">
           <label>De qual lado da aplicação você desenvolve?</label>
           <label>
                <input type="radio" name="escolha" value="frontend" checked>Front-end
           </label>
            <label>
                <input type="radio" name="escolha" value="backend"> Back-end
            </label>
            <label>
                <input type="radio" name="escolha" value="fullstack">Fullstack
            </label>
        </div>

            <div class="campo">
                <label for="senioridade">Senioridade</label>
                <select id="senioridade">
                    <option selected disabled value="">Selecione</option>
                    <option>Junior</option>
                    <option>Pleno</option>
                    <option>Senior</option>
                </select>
            </div>

            <fieldset class="grupo">
                <div id="check">
                    <label>Selecione as tecnologias que utiliza:</label><br><br>
                    <input type="checkbox" id="tecnologia1" name="tecnologia1" value="HTML">
                    <label for="tecnologia1">HTML</label>
                    <input type="checkbox" id="tecnologia2" name="tecnologia2" value="CSS">
                    <label for="tecnologia2">CSS</label>
                    <input type="checkbox" id="tecnologia3" name="tecnologia3" value="JavaScript">
                    <label for="tecnologia3">JavaScript</label>
                    <input type="checkbox" id="tecnologia4" name="tecnologia4" value="PHP">
                    <label for="tecnologia4">PHP</label>
                    <input type="checkbox" id="tecnologia5" name="tecnologia5" value="C#">
                    <label for="tecnologia5">C#</label>
                    <input type="checkbox" id="tecnologia6" name="tecnologia6" value="Python">
                    <label for="tecnologia6">Python</label>
                    <input type="checkbox" id="tecnologia7" name="tecnologia7" value="Java">
                    <label for="tecnologia7">Java</label>    
                </div>
            </fieldset>

            <div class="campo">
                <br>
                <label>Conte um pouco da sua experiência:</label>
                <textarea row="6" style="width: 26em" id="experiencia" name="experiencia"></textarea>
            </div>

            <button type="submit" class="botao">Enviar</button>
        
        </form>
      </main>
    </div>
</body>
</html>