// DORADE TRAITEMENT

if ($("#id").html() == 1) {
  $(document).change(function () {
    if (
      $("#mycalibre option:selected").text() == "400/600gr" &&
      $("#myselection option:selected").text() == "Entier"
    ) {
      $("#trtm").html("");
      $("svg").hide();
      $("#myselection").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() == "400/600gr" &&
      $("#myselection option:selected").text() == "Entier caisse de 6Kg+"
    ) {
      $("#trtm").html("");
      $("svg").hide();

      $("#myselection").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() == "400/600gr" &&
      $("#myselection option:selected").text() == "Filets écaillés désarêté"
    ) {
      $("#trtm").html("");
      $("svg").hide();

      $("#myselection").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() == "400/600gr" &&
      $("#myselection option:selected").text() == "Filets désarêté"
    ) {
      $("#trtm").html("");
      $("svg").hide();

      $("#myselection").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() == "400/600gr" &&
      $("#myselection option:selected").text() == "Vidé"
    ) {
      $("#trtm").html("");
      $("svg").hide();

      $("#myselection").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() == "600/800gr" &&
      $("#myselection option:selected").text() == "Entier"
    ) {
      $("#trtm").html("");
      $("svg").hide();

      $("#myselection").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() == "600/800gr" &&
      $("#myselection option:selected").text() == "Entier caisse de 6Kg+"
    ) {
      $("#trtm").html("");
      $("svg").hide();

      $("#myselection").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() == "600/800gr" &&
      $("#myselection option:selected").text() == "Filets écaillés désarêté"
    ) {
      $("#trtm").html("");
      $("svg").hide();

      $("#myselection").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() == "600/800gr" &&
      $("#myselection option:selected").text() == "Filets désarêté"
    ) {
      $("#trtm").html("");
      $("svg").hide();

      $("#myselection").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() == "600/800gr" &&
      $("#myselection option:selected").text() == "Vidé"
    ) {
      $("#trtm").html("");
      $("svg").hide();

      $("#myselection").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() == "800/1000gr" &&
      $("#myselection option:selected").text() == "Entier"
    ) {
      $("#trtm").html("");
      $("svg").hide();

      $("#myselection").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() == "800/1000gr" &&
      $("#myselection option:selected").text() == "Entier caisse de 10Kg+"
    ) {
      $("#trtm").html("");
      $("svg").hide();

      $("#myselection").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() == "800/1000gr" &&
      $("#myselection option:selected").text() == "Filets écaillés désarêté"
    ) {
      $("#trtm").html("");
      $("svg").hide();

      $("#myselection").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() == "800/1000gr" &&
      $("#myselection option:selected").text() == "Filets désarêté"
    ) {
      $("#trtm").html("");
      $("svg").hide();

      $("#myselection").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() == "800/1000gr" &&
      $("#myselection option:selected").text() == "Vidé"
    ) {
      $("#trtm").html("");
      $("svg").hide();

      $("#myselection").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() == "1000/1500gr" &&
      $("#myselection option:selected").text() == "Entier"
    ) {
      $("#trtm").html("");
      $("svg").hide();

      $("#myselection").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() == "1000/1500gr" &&
      $("#myselection option:selected").text() == "Entier caisse de 10Kg+"
    ) {
      $("#trtm").html("");
      $("svg").hide();

      $("#myselection").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() == "1000/1500gr" &&
      $("#myselection option:selected").text() == "Filets écaillés désarêté"
    ) {
      $("#trtm").html("");
      $("svg").hide();

      $("#myselection").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() == "1000/1500gr" &&
      $("#myselection option:selected").text() == "Filets désarêté"
    ) {
      $("#trtm").html("");
      $("svg").hide();

      $("#myselection").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() == "1000/1500gr" &&
      $("#myselection option:selected").text() == "Vidé"
    ) {
      $("#trtm").html("");
      $("svg").hide();

      $("#myselection").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() == "Choisir une option" ||
      $("#myselection option:selected").text() == "Choisir une option"
    ) {
      $("#trtm").html("");
      $("svg").hide();

      $("#myselection").css("border", "1px solid black");
    } else {
      $("#svg").show();
      $("#trtm").html(" : Cet élément N'éxiste plus");

      $("#myselection").css("border", "2px red solid");
    }
  });
}

// LOUPBAR TRAITEMENT

if ($("#id").html() == 2) {
  $(document).change(function () {
    if (
      $("#mycalibre option:selected").text() == "400/600gr" &&
      $("#myselection option:selected").text() == "Entier caisse de 6Kg+"
    ) {
      $("#trtm").html("");
      $("svg").hide();

      $("#myselection").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() == "400/600gr" &&
      $("#myselection option:selected").text() == "Entier"
    ) {
      $("#trtm").html("");
      $("svg").hide();

      $("#myselection").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() == "400/600gr" &&
      $("#myselection option:selected").text() == "Filets écaillés désarêté"
    ) {
      $("#trtm").html("");
      $("svg").hide();

      $("#myselection").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() == "400/600gr" &&
      $("#myselection option:selected").text() == "Filets désarêté"
    ) {
      $("#trtm").html("");
      $("svg").hide();

      $("#myselection").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() == "400/600gr" &&
      $("#myselection option:selected").text() == "Vidé"
    ) {
      $("#trtm").html("");
      $("svg").hide();

      $("#myselection").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() == "600/800gr" &&
      $("#myselection option:selected").text() == "Entier"
    ) {
      $("#trtm").html("");
      $("svg").hide();

      $("#myselection").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() == "600/800gr" &&
      $("#myselection option:selected").text() == "Entier caisse de 6Kg+"
    ) {
      $("#trtm").html("");
      $("svg").hide();

      $("#myselection").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() == "600/800gr" &&
      $("#myselection option:selected").text() == "Filets écaillés désarêté"
    ) {
      $("#trtm").html("");
      $("svg").hide();

      $("#myselection").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() == "600/800gr" &&
      $("#myselection option:selected").text() == "Filets désarêté"
    ) {
      $("#trtm").html("");
      $("svg").hide();

      $("#myselection").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() == "600/800gr" &&
      $("#myselection option:selected").text() == "Vidé"
    ) {
      $("#trtm").html("");
      $("svg").hide();

      $("#myselection").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() == "800/1000gr" &&
      $("#myselection option:selected").text() == "Entier"
    ) {
      $("#trtm").html("");
      $("svg").hide();

      $("#myselection").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() == "800/1000gr" &&
      $("#myselection option:selected").text() == "Entier caisse de 10Kg+"
    ) {
      $("#trtm").html("");
      $("svg").hide();

      $("#myselection").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() == "800/1000gr" &&
      $("#myselection option:selected").text() == "Filets écaillés désarêté"
    ) {
      $("#trtm").html("");
      $("svg").hide();

      $("#myselection").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() == "800/1000gr" &&
      $("#myselection option:selected").text() == "Filets désarêté"
    ) {
      $("#trtm").html("");
      $("svg").hide();

      $("#myselection").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() == "800/1000gr" &&
      $("#myselection option:selected").text() == "Vidé"
    ) {
      $("#trtm").html("");
      $("svg").hide();

      $("#myselection").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() == "1Kg+" &&
      $("#myselection option:selected").text() == "Entier"
    ) {
      $("#trtm").html("");
      $("svg").hide();

      $("#myselection").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() == "1Kg+" &&
      $("#myselection option:selected").text() == "Filets écaillés désarêté"
    ) {
      $("#trtm").html("");
      $("svg").hide();

      $("#myselection").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() == "1Kg+" &&
      $("#myselection option:selected").text() == "Filets désarêté"
    ) {
      $("#trtm").html("");
      $("svg").hide();

      $("#myselection").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() == "1Kg+" &&
      $("#myselection option:selected").text() == "Vidé"
    ) {
      $("#trtm").html("");
      $("svg").hide();

      $("#myselection").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() == "Choisir une option" ||
      $("#myselection option:selected").text() == "Choisir une option"
    ) {
      $("#trtm").html("");
      $("svg").hide();

      $("#myselection").css("border", "1px solid black");
    } else {
      $("#svg").show();
      $("#trtm").html(" : Cet élément N'éxiste plus");

      $("#myselection").css("border", "2px red solid");
    }
  });
}

//  LOTTE TRAITEMENT

if ($("#id").html() == 3) {
  $(document).change(function () {
    if (
      $("#mycalibre option:selected").text() == "1Kg+" &&
      $("#myselection option:selected").text() == "Entier"
    ) {
      $("#trtm").html("");
      $("svg").hide();

      $("#myselection").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() == "1Kg+" &&
      $("#myselection option:selected").text() == "Filets"
    ) {
      $("#trtm").html("");
      $("svg").hide();

      $("#myselection").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() == "Choisir une option" ||
      $("#myselection option:selected").text() == "Choisir une option"
    ) {
      $("#trtm").html("");
      $("svg").hide();

      $("#myselection").css("border", "1px solid black");
    } else {
      $("#svg").show();
      $("#trtm").html(" : Cet élément N'éxiste plus");

      $("#myselection").css("border", "2px red solid");
    }
  });
}

// TURBOT TRAITEMENT

if ($("#id").html() == 4) {
  $(document).change(function () {
    if (
      $("#mycalibre option:selected").text() == "800/1000gr" &&
      $("#myselection option:selected").text() == "Entier"
    ) {
      $("#trtm").html("");
      $("svg").hide();

      $("#myselection").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() == "1300/2000gr" &&
      $("#myselection option:selected").text() == "Entier"
    ) {
      $("#trtm").html("");
      $("svg").hide();

      $("#myselection").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() == "1500/2100gr" &&
      $("#myselection option:selected").text() == "Entier"
    ) {
      $("#trtm").html("");
      $("svg").hide();

      $("#myselection").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() == "800/1000gr" &&
      $("#myselection option:selected").text() == "Fiets de turbot"
    ) {
      $("#trtm").html("");
      $("svg").hide();

      $("#myselection").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() == "1300/2000gr" &&
      $("#myselection option:selected").text() == "Fiets de turbot"
    ) {
      $("#trtm").html("");
      $("svg").hide();

      $("#myselection").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() == "1500/2100gr" &&
      $("#myselection option:selected").text() == "Fiets de turbot"
    ) {
      $("#trtm").html("");
      $("svg").hide();

      $("#myselection").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() == "800/1000gr" &&
      $("#myselection option:selected").text() == "Pavé de turbot"
    ) {
      $("#trtm").html("");
      $("svg").hide();

      $("#myselection").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() == "1300/2000gr" &&
      $("#myselection option:selected").text() == "Pavé de turbot"
    ) {
      $("#trtm").html("");
      $("svg").hide();

      $("#myselection").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() == "1500/2100gr" &&
      $("#myselection option:selected").text() == "Pavé de turbot"
    ) {
      $("#trtm").html("");
      $("svg").hide();

      $("#myselection").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() == "Choisir une option" ||
      $("#myselection option:selected").text() == "Choisir une option"
    ) {
      $("#trtm").html("");
      $("svg").hide();

      $("#myselection").css("border", "1px solid black");
    } else {
      $("#svg").show();
      $("#trtm").html(" : Cet élément N'éxiste plus");

      $("#myselection").css("border", "2px red solid");
    }
  });
}

// ESPADON TRAITEMENT

if ($("#id").html() == 5) {
  $(document).change(function () {
    if ($("#myselection option:selected").text() == "Entier") {
      $("#trtm").html("");
      $("svg").hide();

      $("#myselection").css("border", "1px solid black");
    } else if ($("#myselection option:selected").text() == "Filet") {
      $("#trtm").html("");
      $("svg").hide();

      $("#myselection").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() == "Choisir une option" ||
      $("#myselection option:selected").text() == "Choisir une option"
    ) {
      $("#trtm").html("");
      $("svg").hide();

      $("#myselection").css("border", "1px solid black");
    } else {
      $("#svg").show();
      $("#trtm").html(" : Cet élément N'éxiste plus");

      $("#myselection").css("border", "2px red solid");
    }
  });
}

// OMBRINETTE TRAITEMENT

if ($("#id").html() == 6) {
  $(document).change(function () {
    if (
      $("#mycalibre option:selected").text() == "800/2000gr" &&
      $("#myselection option:selected").text() == "Entier"
    ) {
      $("#trtm").html("");
      $("svg").hide();

      $("#myselection").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() == "2100/4000gr" &&
      $("#myselection option:selected").text() == "Entier"
    ) {
      $("#trtm").html("");
      $("svg").hide();

      $("#myselection").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() == "800/2000gr" &&
      $("#myselection option:selected").text() == "Filet"
    ) {
      $("#trtm").html("");
      $("svg").hide();

      $("#myselection").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() == "2100/4000gr" &&
      $("#myselection option:selected").text() == "Filet"
    ) {
      $("#trtm").html("");
      $("svg").hide();

      $("#myselection").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() == "Choisir une option" ||
      $("#myselection option:selected").text() == "Choisir une option"
    ) {
      $("#trtm").html("");
      $("svg").hide();

      $("#myselection").css("border", "1px solid black");
    } else {
      $("#svg").show();
      $("#trtm").html(" : Cet élément N'éxiste plus");

      $("#myselection").css("border", "2px red solid");
    }
  });
}

//  SAUMON FRAIS TRAITEMENT

if ($("#id").html() == 7) {
  $(document).change(function () {
    if ($("#mycalibre option:selected").text() == "1Kg/2Kg") {
      $("#trtm").html("");
      $("svg").hide();

      $("#myselection").css("border", "1px solid black");
    } else if ($("#mycalibre option:selected").text() == "2Kg/3Kg") {
      $("#trtm").html("");
      $("svg").hide();

      $("#myselection").css("border", "1px solid black");
    } else if ($("#mycalibre option:selected").text() == "3Kg/4Kg") {
      $("#trtm").html("");
      $("svg").hide();

      $("#myselection").css("border", "1px solid black");
    } else if ($("#mycalibre option:selected").text() == "4Kg/5Kg") {
      $("#trtm").html("");
      $("svg").hide();

      $("#myselection").css("border", "1px solid black");
    } else if ($("#mycalibre option:selected").text() == "5Kg/6Kg") {
      $("#trtm").html("");
      $("svg").hide();

      $("#myselection").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() == "Choisir une option" ||
      $("#myselection option:selected").text() == "Choisir une option"
    ) {
      $("#trtm").html("");
      $("svg").hide();

      $("#myselection").css("border", "1px solid black");
    } else {
      $("#svg").show();
      $("#trtm").html(" : Cet élément N'éxiste plus");

      $("#myselection").css("border", "2px red solid");
    }
  });
}

// MIETTE TRAITEMENT

if ($("#id").html() == 8) {
  $(document).change(function () {
    if (
      $("#mycalibre option:selected").text() == "500gr" &&
      $("#myselection option:selected").text() == "Frais"
    ) {
      $("#trtm").html("");
      $("svg").hide();

      $("#myselection").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() == "500gr" &&
      $("#myselection option:selected").text() == "Surgelé"
    ) {
      $("#trtm").html("");
      $("svg").hide();

      $("#myselection").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() == "Choisir une option" ||
      $("#myselection option:selected").text() == "Choisir une option"
    ) {
      $("#trtm").html("");
      $("svg").hide();

      $("#myselection").css("border", "1px solid black");
    } else {
      $("#svg").show();
      $("#trtm").html(" : Cet élément N'éxiste plus");

      $("#myselection").css("border", "2px red solid");
    }
  });
}

// BANDES DE SAUMONS TRAITEMENT

if ($("#id").html() == 9) {
  $(document).change(function () {
    if (
      $("#mycalibre option:selected").text() == "1Kg" &&
      $("#myselection option:selected").text() == "Frais"
    ) {
      $("#trtm").html("");
      $("svg").hide();

      $("#myselection").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() == "Choisir une option" ||
      $("#myselection option:selected").text() == "Choisir une option"
    ) {
      $("#trtm").html("");
      $("svg").hide();

      $("#myselection").css("border", "1px solid black");
    } else {
      $("#svg").show();
      $("#trtm").html(" : Cet élément N'éxiste plus");

      $("#myselection").css("border", "2px red solid");
    }
  });
}

// PAVE DE SAUMONS TRAITEMENET

if ($("#id").html() == 10) {
  $(document).change(function () {
    if (
      $("#mycalibre option:selected").text() == "100/120gr" &&
      $("#myselection option:selected").text() == "Frais"
    ) {
      $("#trtm").html("");
      $("svg").hide();

      $("#myselection").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() == "150/170gr" &&
      $("#myselection option:selected").text() == "Frais"
    ) {
      $("#trtm").html("");
      $("svg").hide();

      $("#myselection").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() == "170/190gr" &&
      $("#myselection option:selected").text() == "Frais"
    ) {
      $("#trtm").html("");
      $("svg").hide();

      $("#myselection").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() == "100/120gr" &&
      $("#myselection option:selected").text() == "Surgelé"
    ) {
      $("#trtm").html("");
      $("svg").hide();

      $("#myselection").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() == "150/170gr" &&
      $("#myselection option:selected").text() == "Surgelé"
    ) {
      $("#trtm").html("");
      $("svg").hide();

      $("#myselection").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() == "170/190gr" &&
      $("#myselection option:selected").text() == "Surgelé"
    ) {
      $("#trtm").html("");
      $("svg").hide();

      $("#myselection").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() == "Choisir une option" ||
      $("#myselection option:selected").text() == "Choisir une option"
    ) {
      $("#trtm").html("");
      $("svg").hide();

      $("#myselection").css("border", "1px solid black");
    } else {
      $("#svg").show();
      $("#trtm").html(" : Cet élément N'éxiste plus");

      $("#myselection").css("border", "2px red solid");
    }
  });
}

// SAINT PIERRE TRAITEMENT

if ($("#id").html() == 11) {
  $(document).change(function () {
    if (
      $("#mycalibre option:selected").text() == "700/1200gr" &&
      $("#myselection option:selected").text() == "Entier"
    ) {
      $("#trtm").html("");
      $("svg").hide();

      $("#myselection").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() == "1200gr" &&
      $("#myselection option:selected").text() == "Entier"
    ) {
      $("#trtm").html("");
      $("svg").hide();

      $("#myselection").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() == "700/1200gr" &&
      $("#myselection option:selected").text() == "Filet"
    ) {
      $("#trtm").html("");
      $("svg").hide();

      $("#myselection").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() == "1200gr" &&
      $("#myselection option:selected").text() == "Filet"
    ) {
      $("#trtm").html("");
      $("svg").hide();

      $("#myselection").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() == "Choisir une option" ||
      $("#myselection option:selected").text() == "Choisir une option"
    ) {
      $("#trtm").html("");
      $("svg").hide();

      $("#myselection").css("border", "1px solid black");
    } else {
      $("#svg").show();
      $("#trtm").html(" : Cet élément N'éxiste plus");

      $("#myselection").css("border", "2px red solid");
    }
  });
}

// SEPIA TRAITEMENT

if ($("#id").html() == 12) {
  $(document).change(function () {
    if ($("#mycalibre option:selected").text() == "300/1500gr") {
      $("#trtm").html("");
      $("svg").hide();

      $("#myselection").css("border", "1px solid black");
    } else if ($("#mycalibre option:selected").text() == "1500gr") {
      $("#trtm").html("");
      $("svg").hide();

      $("#myselection").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() == "Choisir une option" ||
      $("#myselection option:selected").text() == "Choisir une option"
    ) {
      $("#trtm").html("");
      $("svg").hide();

      $("#myselection").css("border", "1px solid black");
    } else {
      $("#svg").show();
      $("#trtm").html(" : Cet élément N'éxiste plus");

      $("#myselection").css("border", "2px red solid");
    }
  });
}

// CALAMAR FRAIT TRAITEMENT

if ($("#id").html() == 13) {
  $(document).change(function () {
    if (
      $("#mycalibre option:selected").text() == "3P/4P (Petite)" &&
      $("#myselection option:selected").text() == "Entier"
    ) {
      $("#trtm").html("");
      $("svg").hide();

      $("#myselection").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() == "2P/P (Moyenne)" &&
      $("#myselection option:selected").text() == "Entier"
    ) {
      $("#trtm").html("");
      $("svg").hide();

      $("#myselection").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() == "3P/4P (Petite)" &&
      $("#myselection option:selected").text() == "Tube"
    ) {
      $("#trtm").html("");
      $("svg").hide();

      $("#myselection").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() == "2P/P (Moyenne)" &&
      $("#myselection option:selected").text() == "Tube"
    ) {
      $("#trtm").html("");
      $("svg").hide();

      $("#myselection").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() == "Choisir une option" ||
      $("#myselection option:selected").text() == "Choisir une option"
    ) {
      $("#trtm").html("");

      $("#myselection").css("border", "1px solid black");
    } else {
      $("#svg").show();
      $("#trtm").html(" : Cet élément N'éxiste plus");

      $("#myselection").css("border", "2px red solid");
    }
  });
}
