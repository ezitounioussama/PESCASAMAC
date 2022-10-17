// DORADE TRAITEMENT

if ($("#id").html() == 1) {
  $(document).change(function () {
    if (
      $("#mycalibre option:selected").text() == "400/600" &&
      $("#myselection option:selected").text() == "Entier caisse de 6Kg+"
    ) {
      $("#trtm").html("400/600 / Entier caisse de 6Kg+");
    } else if (
      $("#mycalibre option:selected").text() == "400/600" &&
      $("#myselection option:selected").text() == "Filets écaillés désarêté"
    ) {
      $("#trtm").html("400/600 / Filets écaillés désarêté");
    } else if (
      $("#mycalibre option:selected").text() == "400/600" &&
      $("#myselection option:selected").text() == "Filets désarêté"
    ) {
      $("#trtm").html("400/600 / Filets désarêté");
    } else if (
      $("#mycalibre option:selected").text() == "400/600" &&
      $("#myselection option:selected").text() == "Vidé"
    ) {
      $("#trtm").html("400/600 / Vidé");
    } else if (
      $("#mycalibre option:selected").text() == "600/800" &&
      $("#myselection option:selected").text() == "Entier caisse de 6Kg+"
    ) {
      $("#trtm").html("600/800 / Entier caisse de 6Kg+");
    } else if (
      $("#mycalibre option:selected").text() == "600/800" &&
      $("#myselection option:selected").text() == "Filets écaillés désarêté"
    ) {
      $("#trtm").html("600/800 / Filets écaillés désarêté");
    } else if (
      $("#mycalibre option:selected").text() == "600/800" &&
      $("#myselection option:selected").text() == "Filets désarêté"
    ) {
      $("#trtm").html("600/800 / Filets désarêté");
    } else if (
      $("#mycalibre option:selected").text() == "600/800" &&
      $("#myselection option:selected").text() == "Vidé"
    ) {
      $("#trtm").html("600/800 / Vidé");
    } else if (
      $("#mycalibre option:selected").text() == "800/1000" &&
      $("#myselection option:selected").text() == "Entier caisse de 10Kg+"
    ) {
      $("#trtm").html("800/1000 / Entier caisse de 10Kg+");
    } else if (
      $("#mycalibre option:selected").text() == "800/1000" &&
      $("#myselection option:selected").text() == "Filets écaillés désarêté"
    ) {
      $("#trtm").html("800/1000 / Filets écaillés désarêté");
    } else if (
      $("#mycalibre option:selected").text() == "800/1000" &&
      $("#myselection option:selected").text() == "Filets désarêté"
    ) {
      $("#trtm").html("800/1000 / Filets désarêté");
    } else if (
      $("#mycalibre option:selected").text() == "800/1000" &&
      $("#myselection option:selected").text() == "Vidé"
    ) {
      $("#trtm").html("800/1000 / Vidé");
    } else if (
      $("#mycalibre option:selected").text() == "1000/1500" &&
      $("#myselection option:selected").text() == "Entier caisse de 10Kg+"
    ) {
      $("#trtm").html("1000/1500 / Entier caisse de 10Kg+");
    } else if (
      $("#mycalibre option:selected").text() == "1000/1500" &&
      $("#myselection option:selected").text() == "Filets écaillés désarêté"
    ) {
      $("#trtm").html("1000/1500 / Filets écaillés désarêté");
    } else if (
      $("#mycalibre option:selected").text() == "1000/1500" &&
      $("#myselection option:selected").text() == "Filets désarêté"
    ) {
      $("#trtm").html("1000/1500 / Filets désarêté");
    } else if (
      $("#mycalibre option:selected").text() == "1000/1500" &&
      $("#myselection option:selected").text() == "Vidé"
    ) {
      $("#trtm").html("1000/1500 / Vidé");
    } else if (
      $("#mycalibre option:selected").text() == "1000/1500" &&
      $("#myselection option:selected").text() == "Entier caisse de 10Kg+"
    ) {
      $("#trtm").html("true");
    } else {
      $("#trtm").html("false");
    }
  });
}

// LOUPBAR TRAITEMENT

if ($("#id").html() == 2) {
  $(document).change(function () {
    if (
      $("#mycalibre option:selected").text() == "400/600" &&
      $("#myselection option:selected").text() == "Entier caisse de 6Kg+"
    ) {
      $("#trtm").html("true");
    } else if (
      $("#mycalibre option:selected").text() == "400/600" &&
      $("#myselection option:selected").text() == "Filets écaillés désarêté"
    ) {
      $("#trtm").html("400/600 / Filets écaillés désarêté");
    } else if (
      $("#mycalibre option:selected").text() == "400/600" &&
      $("#myselection option:selected").text() == "Filets désarêté"
    ) {
      $("#trtm").html("400/600 / Filets désarêté");
    } else if (
      $("#mycalibre option:selected").text() == "400/600" &&
      $("#myselection option:selected").text() == "Vidé"
    ) {
      $("#trtm").html("400/600 / Vidé");
    } else if (
      $("#mycalibre option:selected").text() == "600/800" &&
      $("#myselection option:selected").text() == "Entier caisse de 6Kg+"
    ) {
      $("#trtm").html("600/800 / Entier caisse de 6Kg+");
    } else if (
      $("#mycalibre option:selected").text() == "600/800" &&
      $("#myselection option:selected").text() == "Filets écaillés désarêté"
    ) {
      $("#trtm").html("600/800 / Filets écaillés désarêté");
    } else if (
      $("#mycalibre option:selected").text() == "600/800" &&
      $("#myselection option:selected").text() == "Filets désarêté"
    ) {
      $("#trtm").html("600/800 / Filets désarêté");
    } else if (
      $("#mycalibre option:selected").text() == "600/800" &&
      $("#myselection option:selected").text() == "Vidé"
    ) {
      $("#trtm").html("600/800 / Vidé");
    } else if (
      $("#mycalibre option:selected").text() == "800/1000" &&
      $("#myselection option:selected").text() == "Entier caisse de 10Kg+"
    ) {
      $("#trtm").html("800/1000 / Entier caisse de 10Kg+");
    } else if (
      $("#mycalibre option:selected").text() == "800/1000" &&
      $("#myselection option:selected").text() == "Filets écaillés désarêté"
    ) {
      $("#trtm").html("800/1000 / Filets écaillés désarêté");
    } else if (
      $("#mycalibre option:selected").text() == "800/1000" &&
      $("#myselection option:selected").text() == "Filets désarêté"
    ) {
      $("#trtm").html("800/1000 / Filets désarêté");
    } else if (
      $("#mycalibre option:selected").text() == "800/1000" &&
      $("#myselection option:selected").text() == "Vidé"
    ) {
      $("#trtm").html("800/1000 / Vidé");
    } else if (
      $("#mycalibre option:selected").text() == "1Kg+" &&
      $("#myselection option:selected").text() == "Filets écaillés désarêté"
    ) {
      $("#trtm").html("1Kg+ / Filets écaillés désarêté");
    } else if (
      $("#mycalibre option:selected").text() == "1Kg+" &&
      $("#myselection option:selected").text() == "Filets désarêté"
    ) {
      $("#trtm").html("1Kg+ / Filets désarêté");
    } else if (
      $("#mycalibre option:selected").text() == "1Kg+" &&
      $("#myselection option:selected").text() == "Vidé"
    ) {
      $("#trtm").html("1Kg+ / Vidé");
    } else {
      $("#trtm").html("false");
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
      $("#trtm").html("Entier");
    } else if (
      $("#mycalibre option:selected").text() == "1Kg+" &&
      $("#myselection option:selected").text() == "Filets"
    ) {
      $("#trtm").html("Filets");
    } else {
      $("#trtm").html("false");
    }
  });
}

// TURBOT TRAITEMENT

if ($("#id").html() == 4) {
  $(document).change(function () {
    if (
      $("#mycalibre option:selected").text() == "800/1000" &&
      $("#myselection option:selected").text() == "Entier"
    ) {
      $("#trtm").html("800/1000 / Entier");
    } else if (
      $("#mycalibre option:selected").text() == "1300/2000" &&
      $("#myselection option:selected").text() == "Entier"
    ) {
      $("#trtm").html("1300/2000 / Entier");
    } else if (
      $("#mycalibre option:selected").text() == "1500/2100" &&
      $("#myselection option:selected").text() == "Entier"
    ) {
      $("#trtm").html("1500/2100 / Entier");
    } else if (
      $("#mycalibre option:selected").text() == "800/1000" &&
      $("#myselection option:selected").text() == "Fiets de turbot"
    ) {
      $("#trtm").html("800/1000 / Fiets de turbot");
    } else if (
      $("#mycalibre option:selected").text() == "1300/2000" &&
      $("#myselection option:selected").text() == "Fiets de turbot"
    ) {
      $("#trtm").html("1300/2000 / Fiets de turbot");
    } else if (
      $("#mycalibre option:selected").text() == "1500/2100" &&
      $("#myselection option:selected").text() == "Fiets de turbot"
    ) {
      $("#trtm").html("1500/2100 / Fiets de turbot");
    } else if (
      $("#mycalibre option:selected").text() == "800/1000" &&
      $("#myselection option:selected").text() == "Pavé de turbot"
    ) {
      $("#trtm").html("800/1000 / Pavé de turbot");
    } else if (
      $("#mycalibre option:selected").text() == "1300/2000" &&
      $("#myselection option:selected").text() == "Pavé de turbot"
    ) {
      $("#trtm").html("1300/2000 / Pavé de turbot");
    } else if (
      $("#mycalibre option:selected").text() == "1500/2100" &&
      $("#myselection option:selected").text() == "Pavé de turbot"
    ) {
      $("#trtm").html("1500/2100 / Pavé de turbot");
    } else {
      $("#trtm").html("false");
    }
  });
}

// ESPADON TRAITEMENT

if ($("#id").html() == 5) {
  $(document).change(function () {
    if ($("#myselection option:selected").text() == "Entier") {
      $("#trtm").html("Entier");
    } else if ($("#myselection option:selected").text() == "Filet") {
      $("#trtm").html("Filet");
    } else {
      $("#trtm").html("false");
    }
  });
}

// OMBRINETTE TRAITEMENT

if ($("#id").html() == 6) {
  $(document).change(function () {
    if (
      $("#mycalibre option:selected").text() == "800/2000" &&
      $("#myselection option:selected").text() == "Entier"
    ) {
      $("#trtm").html("Entier / 800/2000");
    } else if (
      $("#mycalibre option:selected").text() == "2100/4000" &&
      $("#myselection option:selected").text() == "Entier"
    ) {
      $("#trtm").html("Entier / 2100/4000");
    } else if (
      $("#mycalibre option:selected").text() == "800/2000" &&
      $("#myselection option:selected").text() == "Filet"
    ) {
      $("#trtm").html("Filet / 800/2000");
    } else if (
      $("#mycalibre option:selected").text() == "2100/4000" &&
      $("#myselection option:selected").text() == "Filet"
    ) {
      $("#trtm").html("Filet / 2100/4000");
    } else {
      $("#trtm").html("false");
    }
  });
}

//  SAUMON FRAIS TRAITEMENT

if ($("#id").html() == 7) {
  $(document).change(function () {
    if ($("#mycalibre option:selected").text() == "1Kg/2Kg") {
      $("#trtm").html("1Kg/2Kg");
    } else if ($("#mycalibre option:selected").text() == "2Kg/3Kg") {
      $("#trtm").html("2Kg/3Kg");
    } else if ($("#mycalibre option:selected").text() == "3Kg/4Kg") {
      $("#trtm").html("3Kg/4Kg");
    } else if ($("#mycalibre option:selected").text() == "4Kg/5Kg") {
      $("#trtm").html("4Kg/5Kg");
    } else if ($("#mycalibre option:selected").text() == "5Kg/6Kg") {
      $("#trtm").html("5Kg/6Kg");
    } else {
      $("#trtm").html("false");
    }
  });
}

// MIETTE TRAITEMENT

if ($("#id").html() == 8) {
  $(document).change(function () {
    if (
      $("#mycalibre option:selected").text() == "500g" &&
      $("#myselection option:selected").text() == "Frais"
    ) {
      $("#trtm").html("500g / Frais");
    } else if (
      $("#mycalibre option:selected").text() == "500g" &&
      $("#myselection option:selected").text() == "Surgelé"
    ) {
      $("#trtm").html("500g / Surgelé");
    } else {
      $("#trtm").html("false");
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
      $("#trtm").html("1KG / Frais");
    } else {
      $("#trtm").html("false");
    }
  });
}

// PAVE DE SAUMONS TRAITEMENET

if ($("#id").html() == 10) {
  $(document).change(function () {
    if (
      $("#mycalibre option:selected").text() == "100g/120g" &&
      $("#myselection option:selected").text() == "Frais"
    ) {
      $("#trtm").html("100g/120g / Frais");
    } else if (
      $("#mycalibre option:selected").text() == "150g/170g" &&
      $("#myselection option:selected").text() == "Frais"
    ) {
      $("#trtm").html("150g/170g / Frais");
    } else if (
      $("#mycalibre option:selected").text() == "170g/190g" &&
      $("#myselection option:selected").text() == "Frais"
    ) {
      $("#trtm").html("170g/190g / Frais");
    } else if (
      $("#mycalibre option:selected").text() == "100g/120g" &&
      $("#myselection option:selected").text() == "Surgelé"
    ) {
      $("#trtm").html("100g/120g / Surgelé");
    } else if (
      $("#mycalibre option:selected").text() == "150g/170g" &&
      $("#myselection option:selected").text() == "Surgelé"
    ) {
      $("#trtm").html("150g/170g / Surgelé");
    } else if (
      $("#mycalibre option:selected").text() == "170g/190g" &&
      $("#myselection option:selected").text() == "Surgelé"
    ) {
      $("#trtm").html("170g/190g / Surgelé");
    } else {
      $("#trtm").html("false");
    }
  });
}

// SAINT PIERRE TRAITEMENT

if ($("#id").html() == 11) {
  $(document).change(function () {
    if (
      $("#mycalibre option:selected").text() == "700/1200" &&
      $("#myselection option:selected").text() == "Entier"
    ) {
      $("#trtm").html("Entier / 700/1200");
    } else if (
      $("#mycalibre option:selected").text() == "1200" &&
      $("#myselection option:selected").text() == "Entier"
    ) {
      $("#trtm").html("Entier / 1200");
    } else if (
      $("#mycalibre option:selected").text() == "700/1200" &&
      $("#myselection option:selected").text() == "Filet"
    ) {
      $("#trtm").html("Filet / 700/1200");
    } else if (
      $("#mycalibre option:selected").text() == "1200" &&
      $("#myselection option:selected").text() == "Filet"
    ) {
      $("#trtm").html("Filet / 1200");
    } else {
      $("#trtm").html("false");
    }
  });
}

// SEPIA TRAITEMENT

if ($("#id").html() == 12) {
  $(document).change(function () {
    if ($("#mycalibre option:selected").text() == "300/1500") {
      $("#trtm").html("300/1500");
    } else if ($("#mycalibre option:selected").text() == "1500") {
      $("#trtm").html("1500");
    } else {
      $("#trtm").html("false");
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
      $("#trtm").html("Entier / 3P/4P (Petite)");
    } else if (
      $("#mycalibre option:selected").text() == "2P/P (Moyenne)" &&
      $("#myselection option:selected").text() == "Entier"
    ) {
      $("#trtm").html("Entier / 2P/P (Moyenne)");
    } else if (
      $("#mycalibre option:selected").text() == "3P/4P (Petite)" &&
      $("#myselection option:selected").text() == "Tube"
    ) {
      $("#trtm").html("Tube / 3P/4P (Petite)");
    } else if (
      $("#mycalibre option:selected").text() == "2P/P (Moyenne)" &&
      $("#myselection option:selected").text() == "Tube"
    ) {
      $("#trtm").html("Tube / 2P/P (Moyenne)");
    } else {
      $("#trtm").html("false");
    }
  });
}
