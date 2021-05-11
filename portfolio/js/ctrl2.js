// Ajax modifier comp:

$(".modif-comp").click(function (e) {
  e.preventDefault();

  let request = $.ajax({
    type: "GET",
    url: $(this).attr("href"),
    dataType: "html",
  });

  request.done(function (reponse) {
    $(".modal-modif .modal-body").html(reponse); // utiliser la console log pour visualiser le retour de la requette
  });

  request.fail(function (http_error) {
    //Code à jouer en cas d'éxécution en erreur du script du PHP

    let server_msg = http_error.responseText;
    let code = http_error.status;
    let code_label = http_error.statusText;
    alert("Erreur " + code + " (" + code_label + ") : " + server_msg);
  });
});

//formmodifcomp:
$("#modif_comp").submit(function (e) {
  e.preventDefault();
  let donnees = {
    id: $("#id").val(),
    nom: $("#nom").val(),
    domaine: $("#domaine").val(),
    description: $("#description").val(),
    niveau: $("#niveau").val(),
    modif: "",
  };

  let request = $.ajax({
    type: "POST",
    url: "ModifComp.php",
    data: donnees,
    dataType: "html",
  });

  request.done(function (response) {
    listeComp();

  });

  request.fail(function (http_error) {
    let server_msg = http_error.responseText;
    let code = http_error.status;
    let code_label = http_error.statusText;
    alert("Erreur " + code + " (" + code_label + ") : " + server_msg);
  });
});

//listecomp ajax:

function listeComp() {
  let request = $.ajax({
    type: "GET",
    url: "listeComp.php",
    dataType: "html",
  });

  request.done(function (response) {
    $("body").html(response);
  });

  request.fail(function (http_error) {
    let server_msg = http_error.responseText;
    let code = http_error.status;
    let code_label = http_error.statusText;
    alert("Erreur " + code + " (" + code_label + ") : " + server_msg);
  });
}