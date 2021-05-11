
typesTab2 = {
  nom: /^[a-zA-z\s\p{L}]{2,}$/u,
  domaine: /^[a-zA-z\s\p{L}]{2,}$/u,
  description: /^[a-zA-z\s\p{L}]{2,}$/u,
  niveau: /^[0-9]{,1}$/
};

// ajax validation competence modif voir code en bas
function validation2(str, type) {
  let valide = false;
  if (typesTab2[type].test(str)) {
    valide = true;
  }
  valide === true
    ? (message = "")
    : (message = "Le champ " + type + " n'est pas au format demandé.<br/>");
  errorsTab = [valide, message];
  return errorsTab;
}

function valider2(donnees, types, e) {
  let erreurs = "";

  for (i = 0; i < donnees.length; i++) {
    tab = validation2(donnees[i], types[i]);
    if (!tab[0]) {
      erreurs += tab[1];
    }
  }
  if (erreurs) {
    const html =
      '<div class="alert alert-danger" role="alert"> ' + erreurs + "</div>";
    $("#erreurs").html(html);
    e.preventDefault();
  }
}
//------------------------------------fin validation competence----------------



// Ajax modifier comp:

$(".modif-comp").click(function (e) {
  e.preventDefault();
  let request = $.ajax({
    type: "GET",
    url: "ModifComp.php",
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

//----------------------------------------------
// $("#modif_comp").submit(function (e) {
//   e.preventDefault();
  

//   let donnees = [
//     $("#id").val(),
//     $("#nom").val(),
//     $("#domaine").val(),
//     $("#description").val(),
//     $("#niveau").val()
//   ];
//   let types = ["id", "nom", "domaine", "description","niveau"];
//   valider2(donnees, types, e);
//   let donneesForm = $(this).serializeArray(); // cette fontion retourne un tab de la forme  Object { name: "id", value: "11" }
//   console.log(donneesForm);
//   if ($("#erreurs").is(":empty")) {
//     data = tabToObject(donneesForm);
//     data.modif = ""; // fait reference au buton submit et dc on rajoute une cle modif vide qui fait reference au buton
//     formmodifcomp(data);
//   }
// });
// function formmodifcomp(data) {
//   let request = $.ajax({
//     type: "POST",
//     url: "ModifComp.php",
//     data: data,
//     //Rq importante : ne faites pas la confusion entre le format json d'envoi de données et le type de retour
//     //format d'envoi de données : tjr objet json
//     dataType: "html",
//     //dataType : le format de la reponse du serveur (reception)
//   });

//   request.done(function (response) {
//     listeComp();
//   });

//   request.fail(function (http_error) {
//     let server_msg = http_error.responseText;
//     let code = http_error.status;
//     let code_label = http_error.statusText;
//     alert("Erreur " + code + " (" + code_label + ") : " + server_msg);
//   });
// }

$("#modif_comp").submit(function(e) {
  e.preventDefault();
  let donnees= {
      nom: $("#nom2").val(),
      domaine: $("#domaine2").val(),
     description: $("#description2").val(),
      niveau: $("#niveau2").val(),
  };
  console.log(donnees);
  let request =
      $.ajax({
          type: "POST",
          url: "ModifComp.php",
          data: donnees,
          dataType: 'html',
      });
  request.done(function(response) {
      // $("#modif_comp").html(response);
      $(".annuler").click();
      listeComp();
  });
  request.fail(function(http_error) {
      let server_msg = http_error.responseText;
      let code = http_error.status;
      let code_label = http_error.statusText;
      alert("Erreur " + code + " (" + code_label + ") : " + server_msg);
  });
});

function listeComp() {
  let request = $.ajax({
    type: "GET",
    url: "ListeComp.php",
    dataType: "html",
  });

  request.done(function (response) {
    $("body").html(response);
  });
}