//  Caviar noir (les oeufs en truite)

if ($("#id").html() == 41) {
  $(document).change(function () {
    if ($("#mycalibre option:selected").text() == "boîte de 50g") {
      $("#trtm").html("");
      var inputVal1 = $("#p1").val();
      $("#prc").html(inputVal1);
      $("#product_price").val(inputVal1);
      $("#currency").html("DH");
      $("svg").hide();
      $("#add").attr("disabled", false);
      $("#myselection").css("border", "1px solid black");
    } else if ($("#mycalibre option:selected").text() == "boîte de 100g") {
      $("#trtm").html("");
      var inputVal2 = $("#p2").val();
      $("#prc").html(inputVal2);
      $("#product_price").val(inputVal2);
      $("#currency").html("DH");
      $("svg").hide();
      $("#add").attr("disabled", false);
      $("#myselection").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() == "Choisir une option" ||
      $("#myselection option:selected").text() == "Choisir une option"
    ) {
      $("#trtm").html("");
      $("#currency").html("");
      $("svg").hide();
      $("#prc").html("");
      $("#add").attr("disabled", true);
      $("#myselection").css("border", "1px solid black");
    } else {
      $("#svg").show();
      $("#trtm").html(" : Cet élément N'éxiste plus");
      $("#prc").html("");
      $("#currency").html("");
      $("#add").attr("disabled", true);
      $("#myselection").css("border", "2px red solid");
    }
  });
}

//  Caviar Rouge (les oeufs en truite)

if ($("#id").html() == 42) {
  $(document).change(function () {
    if ($("#mycalibre option:selected").text() == "boîte de 50g") {
      $("#trtm").html("");
      var inputVal1 = $("#p1").val();
      $("#prc").html(inputVal1);
      $("#product_price").val(inputVal1);
      $("#currency").html("DH");
      $("svg").hide();
      $("#add").attr("disabled", false);
      $("#myselection").css("border", "1px solid black");
    } else if ($("#mycalibre option:selected").text() == "boîte de 100g") {
      $("#trtm").html("");
      var inputVal2 = $("#p2").val();
      $("#prc").html(inputVal2);
      $("#product_price").val(inputVal2);
      $("#currency").html("DH");
      $("svg").hide();
      $("#add").attr("disabled", false);
      $("#myselection").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() == "Choisir une option" ||
      $("#myselection option:selected").text() == "Choisir une option"
    ) {
      $("#trtm").html("");
      $("#currency").html("");
      $("svg").hide();
      $("#prc").html("");
      $("#add").attr("disabled", true);
      $("#myselection").css("border", "1px solid black");
    } else {
      $("#svg").show();
      $("#trtm").html(" : Cet élément N'éxiste plus");
      $("#prc").html("");
      $("#currency").html("");
      $("#add").attr("disabled", true);
      $("#myselection").css("border", "2px red solid");
    }
  });
}

//  Frites

if ($("#id").html() == 43) {
  $(document).change(function () {
    if (
      $("#mycalibre option:selected").text() ==
      "1Kg Frites Semi-cuites 7/7 (Origine:E.U)"
    ) {
      $("#trtm").html("");
      var inputVal1 = $("#p1").val();
      $("#prc").html(inputVal1);
      $("#product_price").val(inputVal1);
      $("#currency").html("DH");
      $("svg").hide();
      $("#add").attr("disabled", false);
      $("#mycalibre").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() ==
      "Frites Semi-cuites 10/10 (Origine : E.U)"
    ) {
      $("#trtm").html("");
      var inputVal2 = $("#p2").val();
      $("#prc").html(inputVal2);
      $("#product_price").val(inputVal2);
      $("#currency").html("DH");
      $("svg").hide();
      $("#add").attr("disabled", false);
      $("#mycalibre").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() == "Choisir une option" ||
      $("#mycalibre option:selected").text() == "Choisir une option"
    ) {
      $("#trtm").html("");
      $("#currency").html("");
      $("svg").hide();
      $("#prc").html("");
      $("#add").attr("disabled", true);
      $("#mycalibre").css("border", "1px solid black");
    } else {
      $("#svg").show();
      $("#trtm").html(" : Cet élément N'éxiste plus");
      $("#prc").html("");
      $("#currency").html("");
      $("#add").attr("disabled", true);
      $("#mycalibre").css("border", "2px red solid");
    }
  });
}

// Tobiko

if ($("#id").html() == 44) {
  $(document).change(function () {
    if ($("#mycalibre option:selected").text() == "Carton  24 Boite de 500g") {
      $("#trtm").html("");
      var inputVal1 = $("#p1").val();
      $("#prc").html(inputVal1);
      $("#product_price").val(inputVal1);
      $("#currency").html("DH");
      $("svg").hide();
      $("#add").attr("disabled", false);
      $("#myselection").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() == "Choisir une option" ||
      $("#myselection option:selected").text() == "Choisir une option"
    ) {
      $("#trtm").html("");
      $("#currency").html("");
      $("svg").hide();
      $("#prc").html("");
      $("#add").attr("disabled", true);
      $("#myselection").css("border", "1px solid black");
    } else {
      $("#svg").show();
      $("#trtm").html(" : Cet élément N'éxiste plus");
      $("#prc").html("");
      $("#currency").html("");
      $("#add").attr("disabled", true);
      $("#myselection").css("border", "2px red solid");
    }
  });
}

// Harenges Fumes
if ($("#id").html() == 45) {
  $("#trtm").html("");
  var inputVal1 = $("#p1").val();
  $("#prc").html(inputVal1);
  $("#product_price").val(inputVal1);
  $("#currency").html("DH");
  $("#add").attr("disabled", false);
}
//  Rilettes De Saumon Au Citron Confit

if ($("#id").html() == 46) {
  $("#trtm").html("");
  var inputVal1 = $("#p1").val();
  $("#prc").html(inputVal1);
  $("#product_price").val(inputVal1);
  $("#currency").html("DH");
  $("#add").attr("disabled", false);
}

// Rillettes De Maquereaux Aux Condiments

if ($("#id").html() == 47) {
  $("#trtm").html("");
  var inputVal1 = $("#p1").val();
  $("#prc").html(inputVal1);
  $("#product_price").val(inputVal1);
  $("#currency").html("DH");
  $("#add").attr("disabled", false);
}

// Tapenade D'olives Noires

if ($("#id").html() == 48) {
  $("#trtm").html("");
  var inputVal1 = $("#p1").val();
  $("#prc").html(inputVal1);
  $("#product_price").val(inputVal1);
  $("#currency").html("DH");
  $("#add").attr("disabled", false);
}

// Anchois salé

if ($("#id").html() == 52) {
  $(document).change(function () {
    if ($("#mycalibre option:selected").text() == "250g") {
      $("#trtm").html("");
      var inputVal1 = $("#p1").val();
      $("#prc").html(inputVal1);
      $("#product_price").val(inputVal1);
      $("#currency").html("DH");
      $("svg").hide();
      $("#add").attr("disabled", false);
      $("#myselection").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() == "Choisir une option" ||
      $("#myselection option:selected").text() == "Choisir une option"
    ) {
      $("#trtm").html("");
      $("#currency").html("");
      $("svg").hide();
      $("#prc").html("");
      $("#add").attr("disabled", true);
      $("#myselection").css("border", "1px solid black");
    } else {
      $("#svg").show();
      $("#trtm").html(" : Cet élément N'éxiste plus");
      $("#prc").html("");
      $("#currency").html("");
      $("#add").attr("disabled", true);
      $("#myselection").css("border", "2px red solid");
    }
  });
}

// Calamar farcis

if ($("#id").html() == 53) {
  $(document).change(function () {
    if ($("#mycalibre option:selected").text() == "250g") {
      $("#trtm").html("");
      var inputVal1 = $("#p1").val();
      $("#prc").html(inputVal1);
      $("#product_price").val(inputVal1);
      $("#currency").html("DH");
      $("svg").hide();
      $("#add").attr("disabled", false);
      $("#myselection").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() == "Choisir une option" ||
      $("#myselection option:selected").text() == "Choisir une option"
    ) {
      $("#trtm").html("");
      $("#currency").html("");
      $("svg").hide();
      $("#prc").html("");
      $("#add").attr("disabled", true);
      $("#myselection").css("border", "1px solid black");
    } else {
      $("#svg").show();
      $("#trtm").html(" : Cet élément N'éxiste plus");
      $("#prc").html("");
      $("#currency").html("");
      $("#add").attr("disabled", true);
      $("#myselection").css("border", "2px red solid");
    }
  });
}

// Saumons mariné

if ($("#id").html() == 56) {
  $(document).change(function () {
    if ($("#mycalibre option:selected").text() == "250g") {
      $("#trtm").html("");
      var inputVal1 = $("#p1").val();
      $("#prc").html(inputVal1);
      $("#product_price").val(inputVal1);
      $("#currency").html("DH");
      $("svg").hide();
      $("#add").attr("disabled", false);
      $("#myselection").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() == "Choisir une option" ||
      $("#myselection option:selected").text() == "Choisir une option"
    ) {
      $("#trtm").html("");
      $("#currency").html("");
      $("svg").hide();
      $("#prc").html("");
      $("#add").attr("disabled", true);
      $("#myselection").css("border", "1px solid black");
    } else {
      $("#svg").show();
      $("#trtm").html(" : Cet élément N'éxiste plus");
      $("#prc").html("");
      $("#currency").html("");
      $("#add").attr("disabled", true);
      $("#myselection").css("border", "2px red solid");
    }
  });
}

//  Poulpe mariné

if ($("#id").html() == 57) {
  $(document).change(function () {
    if ($("#mycalibre option:selected").text() == "250g") {
      $("#trtm").html("");
      var inputVal1 = $("#p1").val();
      $("#prc").html(inputVal1);
      $("#product_price").val(inputVal1);
      $("#currency").html("DH");
      $("svg").hide();
      $("#add").attr("disabled", false);
      $("#myselection").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() == "Choisir une option" ||
      $("#myselection option:selected").text() == "Choisir une option"
    ) {
      $("#trtm").html("");
      $("#currency").html("");
      $("svg").hide();
      $("#prc").html("");
      $("#add").attr("disabled", true);
      $("#myselection").css("border", "1px solid black");
    } else {
      $("#svg").show();
      $("#trtm").html(" : Cet élément N'éxiste plus");
      $("#prc").html("");
      $("#currency").html("");
      $("#add").attr("disabled", true);
      $("#myselection").css("border", "2px red solid");
    }
  });
}

// Clams et vernis farcis

if ($("#id").html() == 58) {
  $(document).change(function () {
    if ($("#mycalibre option:selected").text() == "250g") {
      $("#trtm").html("");
      var inputVal1 = $("#p1").val();
      $("#prc").html(inputVal1);
      $("#product_price").val(inputVal1);
      $("#currency").html("DH");
      $("svg").hide();
      $("#add").attr("disabled", false);
      $("#myselection").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() == "Choisir une option" ||
      $("#myselection option:selected").text() == "Choisir une option"
    ) {
      $("#trtm").html("");
      $("#currency").html("");
      $("svg").hide();
      $("#prc").html("");
      $("#add").attr("disabled", true);
      $("#myselection").css("border", "1px solid black");
    } else {
      $("#svg").show();
      $("#trtm").html(" : Cet élément N'éxiste plus");
      $("#prc").html("");
      $("#currency").html("");
      $("#add").attr("disabled", true);
      $("#myselection").css("border", "2px red solid");
    }
  });
}

// coquilles ST-jacques à la bretonne

if ($("#id").html() == 59) {
  $(document).change(function () {
    if ($("#mycalibre option:selected").text() == "250g") {
      $("#trtm").html("");
      var inputVal1 = $("#p1").val();
      $("#prc").html(inputVal1);
      $("#product_price").val(inputVal1);
      $("#currency").html("DH");
      $("svg").hide();
      $("#add").attr("disabled", false);
      $("#myselection").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() == "Choisir une option" ||
      $("#myselection option:selected").text() == "Choisir une option"
    ) {
      $("#trtm").html("");
      $("#currency").html("");
      $("svg").hide();
      $("#prc").html("");
      $("#add").attr("disabled", true);
      $("#myselection").css("border", "1px solid black");
    } else {
      $("#svg").show();
      $("#trtm").html(" : Cet élément N'éxiste plus");
      $("#prc").html("");
      $("#currency").html("");
      $("#add").attr("disabled", true);
      $("#myselection").css("border", "2px red solid");
    }
  });
}

// lasagne de poisson

if ($("#id").html() == 60) {
  $(document).change(function () {
    if ($("#mycalibre option:selected").text() == "250g") {
      $("#trtm").html("");
      var inputVal1 = $("#p1").val();
      $("#prc").html(inputVal1);
      $("#product_price").val(inputVal1);
      $("#currency").html("DH");
      $("svg").hide();
      $("#add").attr("disabled", false);
      $("#myselection").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() == "Choisir une option" ||
      $("#myselection option:selected").text() == "Choisir une option"
    ) {
      $("#trtm").html("");
      $("#currency").html("");
      $("svg").hide();
      $("#prc").html("");
      $("#add").attr("disabled", true);
      $("#myselection").css("border", "1px solid black");
    } else {
      $("#svg").show();
      $("#trtm").html(" : Cet élément N'éxiste plus");
      $("#prc").html("");
      $("#currency").html("");
      $("#add").attr("disabled", true);
      $("#myselection").css("border", "2px red solid");
    }
  });
}

// lasagne

if ($("#id").html() == 61) {
  $(document).change(function () {
    if ($("#mycalibre option:selected").text() == "250g") {
      $("#trtm").html("");
      var inputVal1 = $("#p1").val();
      $("#prc").html(inputVal1);
      $("#product_price").val(inputVal1);
      $("#currency").html("DH");
      $("svg").hide();
      $("#add").attr("disabled", false);
      $("#myselection").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() == "Choisir une option" ||
      $("#myselection option:selected").text() == "Choisir une option"
    ) {
      $("#trtm").html("");
      $("#currency").html("");
      $("svg").hide();
      $("#prc").html("");
      $("#add").attr("disabled", true);
      $("#myselection").css("border", "1px solid black");
    } else {
      $("#svg").show();
      $("#trtm").html(" : Cet élément N'éxiste plus");
      $("#prc").html("");
      $("#currency").html("");
      $("#add").attr("disabled", true);
      $("#myselection").css("border", "2px red solid");
    }
  });
}

//  parmentier de poisson

if ($("#id").html() == 62) {
  $(document).change(function () {
    if ($("#mycalibre option:selected").text() == "250g") {
      $("#trtm").html("");
      var inputVal1 = $("#p1").val();
      $("#prc").html(inputVal1);
      $("#product_price").val(inputVal1);
      $("#currency").html("DH");
      $("svg").hide();
      $("#add").attr("disabled", false);
      $("#myselection").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() == "Choisir une option" ||
      $("#myselection option:selected").text() == "Choisir une option"
    ) {
      $("#trtm").html("");
      $("#currency").html("");
      $("svg").hide();
      $("#prc").html("");
      $("#add").attr("disabled", true);
      $("#myselection").css("border", "1px solid black");
    } else {
      $("#svg").show();
      $("#trtm").html(" : Cet élément N'éxiste plus");
      $("#prc").html("");
      $("#currency").html("");
      $("#add").attr("disabled", true);
      $("#myselection").css("border", "2px red solid");
    }
  });
}
