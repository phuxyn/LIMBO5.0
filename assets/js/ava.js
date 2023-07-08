document.getElementById('profile-form').addEventListener('submit', function(event) {
  event.preventDefault(); // Impede o envio do formulário

  // Obtém os valores dos campos do formulário
  var name = document.getElementById('name').value;
  var email = document.getElementById('email').value;
  var bio = document.getElementById('bio').value;

  // Atualiza as informações do perfil na página
  document.getElementById('profile-name').textContent = name;
  document.getElementById('profile-email').textContent = email;
  document.getElementById('profile-bio').textContent = bio;
});
