typesTab = {
  nom: /^[a-zA-z\s\p{L}]{2,}$/u,
  prenom: /^[a-zA-z\s\p{L}]{2,}$/u,
  tel: /^[0-9]{8,}$/,
  photo: /^[\w]{2,}(.jpg|.jpeg|.png|.gif)$/,
  test: /^[a-zA-Z]+$/,
  // email:/^[\w-.]+@([\w-]+.)+[\w-]{2,4}$/,
  libelle: /^[a-zA-z\s\p{L}]{2,}$/u,
};

function validation(str, type) {
  let valide = false;
  if (typesTab[type].test(str)) {
    valide = true;
  }
  valide === true
    ? (message = "")
    : (message = "Le champ " + type + " n'est pas au format demandé.<br/>");
  errorsTab = [valide, message];
  return errorsTab;
}

function valider(donnees, types, e) {
  let erreurs = "";

  for (i = 0; i < donnees.length; i++) {
    tab = validation(donnees[i], types[i]);
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

// $("#ajout_user").submit(function (e) {
//   let donnees = [$("#nom").val(), $("#prenom").val(), $("#tel").val()];
//   let types = ["nom", "prenom", "tel"];
//   valider(donnees, types, e);
// });

// // solution avec MAXENCE
// // function test(par1,par2) {
// //     switch (par1) {
// //         case $("#nom").attr("id"):
// //             reg = /^[\p{L}\s]{2,}$/u;
// //             break;
// //         case $("#prenom").attr("id"):
// //             reg = /^[\p{L}\s]{2,}$/u;
// //             break;
// //         default:
// //             reg = /^[+]?[0-9]{8,}$/;
// //             break;
// //     };
// //     let reponse = reg.test(par2);
// //     console.log(reponse);
// //     reponse ? console.log("c'est bron frere") : console.log("C'est naze");

// // }

// // AJAX pour supprimer dans listUser.php

// $(".supp-user").click(function () {
//   $(".lien-supp").attr("href", "SuppressionUser.php?id=" + $(this).attr("id"));
//   const id = $(this).attr("id");
// });

// $(".lien-supp").click(function (e) {
//   e.preventDefault();

//   let request = $.ajax({
//     type: "GET",
//     url: $(this).attr("href"),
//     dataType: "html",
//   });

//   request.done(function (response) {
//     //Code à jouer en cas d'éxécution sans erreur du script du PHP
//     $(".annuler").click();
//     listeUsers();
//   });

//   request.fail(function (http_error) {
//     //Code à jouer en cas d'éxécution en erreur du script du PHP

//     let server_msg = http_error.responseText;
//     let code = http_error.status;
//     let code_label = http_error.statusText;
//     alert("Erreur " + code + " (" + code_label + ") : " + server_msg);
//   });

//   request.always(function () {
//     //Code à jouer après done OU fail dans tous les cas
//   });
// });

// function listeUsers() {
//   let request = $.ajax({
//     type: "GET",
//     url: listeUsers.php,
//     dataType: "html",
//   });
//   request.done(function (response) {
//     $("body").html(response); // tout le code html généré
//   });
// }

// // AJAX modification ------------------------------------------------------------------------------

$("#modifier").click(function (e) {
 
  e.preventDefault();
  let request = $.ajax({
    type: "POST",
    url: $(this).attr("href"),
    dataType: "html",
  });

  request.done(function (response) {
    $(".modal-modif .modal-body").html(response);

    // valider le submit
    $("#modif_type_bien").submit(function (e) {
      
      // empecher redirection
      e.preventDefault();
      let donnees = [$("#libelle").val()]; // photo à ajouter
      let types = ["libelle"];
      valider(donnees, types, e);

      if ($("#erreurs").is(":empty")) {
              data = tabToObject($(this).serializeArray());
              data.valider = "";
              modifTypeBien(data);
            }
    });
  });
  request.fail(function (http_error) {
    let server_msg = http_error.responseText;
    let code = http_error.status;
    let code_label = http_error.statusText;
    alert("Erreur " + code + " (" + code_label + ") : " + server_msg);
  });
});

function modifTypeBien(data){
  
  let request = $.ajax({
    type: "POST",
    url: "modifTypeBien.php",
    dataType: "html",
    data: data,
  });

  request.done(function (response) {
    $(".modal-modif .modal-body").html(response);
    location.reload();
  });

  request.fail(function (http_error) {
    //Code à jouer en cas d'éxécution en erreur du script du PHP

    let server_msg = http_error.responseText;
    let code = http_error.status;
    let code_label = http_error.statusText;
    alert("Erreur " + code + " (" + code_label + ") : " + server_msg);
  });

  request.always(function () {
    //Code à jouer après done OU fail dans tous les cas
  });
};

// tentatives d'utiliser fetch()

function ajaxFetch(){
  
    alert("hi");
   fetch("suppressionTypeBien.php") 
  .then(response => response.json())
  .then(response => alert(JSON.stringify(response)))
  .catch(error => alert("Erreur : " + error));
  
  // };
};


//   $("#modif_user").submit(function (e) {
//     e.preventDefault();

//     let donnees = [
//       $("#id").val(),
//       $("#nom").val(),
//       $("#prenom").val(),
//       $("#tel").val(),
//     ];
//     let types = ["id", "nom", "prenom", "tel"];
//     //  valider(donnees, types, e);

//     if ($("#erreurs").is(":empty")) {
//       data = tabToObject($(this).serializeArray());
//       data.modif = "";
//       modifUser(data);
//     }
//   });

//   function modifUser(data) {
//     let request = $.ajax({
//       type: "POST",
//       url: "ModifProfilTest.php",
//       data: data,
//       dataType: "html",
//     });

//     request.done(function (response) {
//       listeUsers();
//     });

//     request.fail(function (http_error) {
//       let server_msg = http_error.responseText;
//       let code = http_error.status;
//       let code_label = http_error.statusText;
//       alert("Erreur " + code + " (" + code_label + ") : " + server_msg);
//     });
//   }

  function tabToObject(tab) {
    obj = {};

    for (i = 0; i < tab.length; i++) {
      cle = tab[i].name;
      valeur = tab[i].value;
      obj[cle] = valeur;
    }
    return obj;
  }

//   //tab[i] = { name: "id", value: "11" };
// // cle= tab[i].name  // id
// // valeur= tab[i].value // 11
// // obj.cle=valeur; // obj.id=11
// // {
//   // id : 11
// // }

// // $("#formConnexion").submit(function (e) {
// //
// //   let donnees = [$("#mail").val(), $("#password").val()];
// //   console.log(donnees);
// //   let types = ["email", "password"];
// //   valider(donnees, types, e);
// // });

// //-----------------------------------------------------
// // $("#formConnexion").submit(function (e) {

// //   let request = $.ajax({
// //     type: "POST",
// //     url: "Accueil.php",
// //     dataType: "html",
// //   });

// //   request.done(function (response) {
// //     // $("body").html(response);
// //     accueil();
// //   });

// //   request.fail(function (http_error) {
// //     //Code à jouer en cas d'éxécution en erreur du script du PHP

// //     let server_msg = http_error.responseText;
// //     let code = http_error.status;
// //     let code_label = http_error.statusText;
// //     alert("Erreur " + code + " (" + code_label + ") : " + server_msg);
// //   });
// // });

// // function accueil() {
// //   let request = $.ajax({
// //     type: "GET",
// //     url: Accueil.php,
// //     dataType: "html",
// //   });
// //   request.done(function (response) {
// //     $("body").html(response); // tout le code html généré
// //   });
// // }

// // ---------------------------------------------------------------

// $("#formConnexion").submit(function (e) {
//   e.preventDefault();

// let request = $.ajax({
//   type: "POST",
//   url: "loginTest.php",
//   dataType: "html",
// });

// request.done(function (response) {
//   $("#session").html(response);
// });

// request.fail(function (http_error) {
//   let server_msg = http_error.responseText;
//   let code = http_error.status;
//   let code_label = http_error.statusText;
//   alert("Erreur " + code + " (" + code_label + ") : " + server_msg);
// })});

// function listeComp() {
//   let request = $.ajax({
//     type: "GET",
//     url: "ListeComp.php",
//     dataType: "html",
//   });

//   request.done(function (response) {
//     $("body").html(response);
//   });

//   request.fail(function (http_error) {
//     let server_msg = http_error.responseText;
//     let code = http_error.status;
//     let code_label = http_error.statusText;
//     alert("Erreur " + code + " (" + code_label + ") : " + server_msg);
//   });
// }

function listeTypeBien(){
  let request = $.ajax({
        type: "GET",
        url: "listeTypeBien.php",
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

// //ajax modal viewcompt: suppression compt

$(".suppTypeBien").click(function () {
  // alert("ho");
  $(".btn-supp").attr("href", "suppressionTypeBien.php?id=" + $(this).attr("id"));
});
$(".btn-supp").click(function (e) {
  e.preventDefault();

  let request = $.ajax({
    type: "GET",
    url: $(this).attr("href"),
    dataType: "html",
  });

  request.done(function (reponse) {
    $(".annuler").trigger("click"); //je génère un clic artficiel sur le bouton annuler $(".annuler").click(); cette methode marche aussi
    listeTypeBien();
  });
  request.fail(function (http_error) {
    //Code à jouer en cas d'éxécution en erreur du script du PHP

    let server_msg = http_error.responseText;
    let code = http_error.status;
    let code_label = http_error.statusText;
    alert("Erreur " + code + " (" + code_label + ") : " + server_msg);
  });
});
