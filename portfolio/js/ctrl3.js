// Ajax modifier comp:

$(".modif-etab").click(function (e) {
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
$("#modif-etab").submit(function (e) {
  e.preventDefault();

  let donnees = {
    id: $("#id").val(),
    nom: $("#nom").val(),
    domaine: $("#ville").val(),
    description: $("#secteur").val(),
    // modif: "",
  };

  let request = $.ajax({
    type: "POST",
    url: "ModifEtab.php",
    data: donnees,
    dataType: "html",
  });

  request.done(function (response) {
    // $("#loader").hide();
    listEtab();

  });

  request.fail(function (http_error) {
    let server_msg = http_error.responseText;
    let code = http_error.status;
    let code_label = http_error.statusText;
    alert("Erreur " + code + " (" + code_label + ") : " + server_msg);
  });
});

//listecomp ajax:

function listEtab() {
  let request = $.ajax({
    type: "GET",
    url: "listEtab.php",
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