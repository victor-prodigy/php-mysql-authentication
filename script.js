// NOTE: para mostrar um formulário, chame a função showForm com o ID do formulário desejado.
function showForm(formId) {
  // obtendo elementos html
  document.querySelectorAll(".form-box").forEach((form) => form.classList.remove("active"));
  document.getElementById(formId).classList.add("active");
}