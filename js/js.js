function validaLogin(){
	// Variavel que armazena o conteúdo dos campos
	var usuario = login.usuario.value;
	var senha = login.senha.value;

	// teste de condição se vazio chama um alert
	if(usuario == "") {
		alert("Preencha o email de login");
		login.usuario.focus();
		return false;
	} else  if (senha == "") {
		alert("Preencha a senha de login");
		login.senha.focus();
		return false;
	}

}

jQuery(function ($) {

    $(".sidebar-dropdown > a").click(function() {
  $(".sidebar-submenu").slideUp(200);
  if (
    $(this)
      .parent()
      .hasClass("active")
  ) {
    $(".sidebar-dropdown").removeClass("active");
    $(this)
      .parent()
      .removeClass("active");
  } else {
    $(".sidebar-dropdown").removeClass("active");
    $(this)
      .next(".sidebar-submenu")
      .slideDown(200);
    $(this)
      .parent()
      .addClass("active");
  }
});

$("#close-sidebar").click(function() {
  $(".page-wrapper").removeClass("toggled");
});
$("#show-sidebar").click(function() {
  $(".page-wrapper").addClass("toggled");
});
  
});