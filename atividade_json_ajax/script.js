//ENVIANDO DADOS DO FORMULÁRIO PARA O CONSOLE

document.getElementById("formulario").addEventListener("submit", function(enviar) {
    enviar.preventDefault(); // impede o recarregamento

    const form = new FormData(this);

    fetch("main.php", {
      method: "POST",
      body: form
    })
    .then(response => response.json())
    .then(data => {
      alert("Aluno Cadastrado:\n" + JSON.stringify(data, null, 2));
      console.log(data);
    })
    .catch(error => {
      console.error("Erro:", error);
    });
  });



/*const form = document.querySelector('#formulario');

form.addEventListener('submit', event =>{
  event.preventDefault();
  const formData = new FormData(form);

  fetch('informacoes.php', {
    method: 'POST',
    body: formData
  })
  .then(response => {
    if(!response.ok){
      throw new Error('Erro na requisição: ' + response.status);
    }
    return response.json();
  })
  .then(data => {
    console.log(data);

    document.body.innerHTML += `<p>Nome: ${data.nome}</p>`;
    document.body.innerHTML += `<p>Sobrenome: ${data.sobrenome}</p>`;
    document.body.innerHTML += `<p>E-mail: ${data.email}</p>`;
    document.body.innerHTML += `<p>Período: ${data.periodo}</p>`;
    document.body.innerHTML += `<p>Semestre: ${data.semestre}</p>`;
    document.body.innerHTML += `<p>Curso: ${data.curso}</p>`;
    document.body.innerHTML += `<p>Experiência: ${data.experiencia}</p>`;
  })
  .catch(error => {
    console.error('Erro: ', error);
  })

});
  //console.log("Dados do Formulário:");
  //for (let pair of formData.entries()) {
    //  console.log(pair[0]+ ': ' + pair[1]);
  //}*/
  



/*const form = document.querySelector('#formulario');

form.addEventListener('submit', event =>{
  event.preventDefault();
  const formData = new FormData(form);
  //formData.append('nome', document.querySelector('#nome').value);

  console.log(formData);
} )*/













  