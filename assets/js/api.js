const url = "http://127.0.0.1:5500/game2/index.html";  // URL da API com a URL do site que deve ser lido como parâmetro
fetch(url)  // Faz uma requisição GET para a API
  .then(response => response.text())  // Converte a resposta da API para texto
  .then(data => {
    const textoSite = data;  // Armazena o texto retornado pela API em uma variável
    document.getElementById("texto-site").innerText = textoSite;  // Exibe o texto retornado na página
  })
  .catch(error => console.error(error));  // Trata erros de requisição HTTP
