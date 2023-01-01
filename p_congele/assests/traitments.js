//  Poulpe Traitement

if ($("#id").html() == 19) {
  $(document).change(function () {
    if (
      $("#mycalibre option:selected").text() == "Moyenne" &&
      $("#myselection option:selected").text() == "Carton de 12 Kg"
    ) {
      $("#trtm").html("");
      var inputVal1 = $("#p1").val();
      $("#prc").html(inputVal1);
      $("#product_price").val(inputVal1);
      $("#currency").html("DH");
      $("svg").hide();
      $("#add").attr("disabled", false);
      $("#myselection").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() == "Moyenne" &&
      $("#myselection option:selected").text() == "Carton de 20 Kg"
    ) {
      $("#trtm").html("");
      var inputVal2 = $("#p2").val();
      $("#prc").html(inputVal2);
      $("#product_price").val(inputVal2);
      $("#currency").html("DH");
      $("svg").hide();
      $("#add").attr("disabled", false);
      $("#myselection").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() == "Mixte" &&
      $("#myselection option:selected").text() == "Carton de 12 Kg"
    ) {
      $("#trtm").html("");
      var inputVal1 = $("#p1").val();
      $("#prc").html(inputVal1);
      $("#product_price").val(inputVal1);
      $("#currency").html("DH");
      $("svg").hide();
      $("#add").attr("disabled", false);
      $("#myselection").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() == "Mixte" &&
      $("#myselection option:selected").text() == "Carton de 20 Kg"
    ) {
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

// Bâtonnets de surimi traitement (there's other traitement of this product in the product page!!!!)

if ($("#id").html() == 20) {
  $(document).change(function () {
    if (
      $("#mycalibre option:selected").text() == "1kg" &&
      $("#myselection option:selected").text() == "orange"
    ) {
      $("#trtm").html("");
      var inputVal1 = $("#p1").val();
      $("#prc").html(inputVal1);
      $("#product_price").val(inputVal1);
      $("#currency").html("DH");
      $("svg").hide();
      $("#add").attr("disabled", false);
      $("#myselection").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() == "1kg" &&
      $("#myselection option:selected").text() == "rouge"
    ) {
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

// TUBE CALAMAR
if ($("#id").html() == 21) {
  $(document).change(function () {
    if ($("#mycalibre option:selected").text() == "1kg") {
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

// RONDELLE CALAMAR

if ($("#id").html() == 22) {
  $(document).change(function () {
    if ($("#mycalibre option:selected").text() == "1Kg") {
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

// LAMELLE CALAMAR

if ($("#id").html() == 23) {
  $(document).change(function () {
    if ($("#mycalibre option:selected").text() == "1kg") {
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

// BROCHETTE DE POISSON

if ($("#id").html() == 24) {
  $(document).change(function () {
    if (
      $("#mycalibre option:selected").text() == "1kg" &&
      $("#myselection option:selected").text() == "Brochette de requin"
    ) {
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

// LAMELLE CALAMAR

if ($("#id").html() == 25) {
  $(document).change(function () {
    if ($("#mycalibre option:selected").text() == "1Kg") {
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
