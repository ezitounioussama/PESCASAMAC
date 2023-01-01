if ($("#id").html() == 28) {
  $("#legend").html("Conditionnement :");
} else {
  $("#legend").html("Taille :");
}

// Crevettes gries
if ($("#id").html() == 26) {
  $(document).change(function () {
    if ($("#mycalibre option:selected").text() == "20/30") {
      $("#trtm").html("");
      var inputVal1 = $("#p1").val();
      $("#prc").html(inputVal1);
      $("#product_price").val(inputVal1);
      $("#currency").html("DH");
      $("svg").hide();
      $("#add").attr("disabled", false);
      $("#myselection").css("border", "1px solid black");
    } else if ($("#mycalibre option:selected").text() == "30/40") {
      $("#trtm").html("");
      var inputVal2 = $("#p2").val();
      $("#prc").html(inputVal2);
      $("#product_price").val(inputVal2);
      $("#currency").html("DH");
      $("svg").hide();
      $("#add").attr("disabled", false);
      $("#myselection").css("border", "1px solid black");
    } else if ($("#mycalibre option:selected").text() == "40/50") {
      $("#trtm").html("");
      var inputVal3 = $("#p3").val();
      $("#prc").html(inputVal3);
      $("#product_price").val(inputVal3);
      $("#currency").html("DH");
      $("svg").hide();
      $("#add").attr("disabled", false);
      $("#myselection").css("border", "1px solid black");
    } else if ($("#mycalibre option:selected").text() == "50/60") {
      $("#trtm").html("");
      var inputVal4 = $("#p4").val();
      $("#prc").html(inputVal4);
      $("#product_price").val(inputVal4);
      $("#currency").html("DH");
      $("svg").hide();
      $("#add").attr("disabled", false);
      $("#myselection").css("border", "1px solid black");
    } else if ($("#mycalibre option:selected").text() == "60/70") {
      $("#trtm").html("");
      var inputVal5 = $("#p5").val();
      $("#prc").html(inputVal5);
      $("#product_price").val(inputVal5);
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

//  Crevettes Grises (2KG Net)

if ($("#id").html() == 27) {
  $(document).change(function () {
    if ($("#mycalibre option:selected").text() == "20/30") {
      $("#trtm").html("");
      var inputVal1 = $("#p1").val();
      $("#prc").html(inputVal1);
      $("#product_price").val(inputVal1);
      $("#currency").html("DH");
      $("svg").hide();
      $("#add").attr("disabled", false);
      $("#myselection").css("border", "1px solid black");
    } else if ($("#mycalibre option:selected").text() == "40/50") {
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

// LANGOUSTINE
if ($("#id").html() == 28) {
  $(document).change(function () {
    if ($("#mycalibre option:selected").text() == "4/7Kg (La bte)") {
      $("#trtm").html("");
      var inputVal1 = $("#p1").val();
      $("#prc").html(inputVal1);
      $("#product_price").val(inputVal1);
      $("#currency").html("DH");
      $("svg").hide();
      $("#add").attr("disabled", false);
      $("#myselection").css("border", "1px solid black");
    } else if ($("#mycalibre option:selected").text() == "8/12Kg (La bte)") {
      $("#trtm").html("");
      var inputVal2 = $("#p2").val();
      $("#prc").html(inputVal2);
      $("#product_price").val(inputVal2);
      $("#currency").html("DH");
      $("svg").hide();
      $("#add").attr("disabled", false);
      $("#myselection").css("border", "1px solid black");
    } else if ($("#mycalibre option:selected").text() == "13/15Kg (L bte)") {
      $("#trtm").html("");
      var inputVal3 = $("#p3").val();
      $("#prc").html(inputVal3);
      $("#product_price").val(inputVal3);
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

// Crevettes Rose (Décortiquées)

if ($("#id").html() == 29) {
  $(document).change(function () {
    if ($("#mycalibre option:selected").text() == "30/50") {
      $("#trtm").html("");
      var inputVal1 = $("#p1").val();
      $("#prc").html(inputVal1);
      $("#product_price").val(inputVal1);
      $("#currency").html("DH");
      $("svg").hide();
      $("#add").attr("disabled", false);
      $("#myselection").css("border", "1px solid black");
    } else if ($("#mycalibre option:selected").text() == "50/70") {
      $("#trtm").html("");
      var inputVal2 = $("#p2").val();
      $("#prc").html(inputVal2);
      $("#product_price").val(inputVal2);
      $("#currency").html("DH");
      $("svg").hide();
      $("#add").attr("disabled", false);
      $("#myselection").css("border", "1px solid black");
    } else if ($("#mycalibre option:selected").text() == "70/100") {
      $("#trtm").html("");
      var inputVal3 = $("#p3").val();
      $("#prc").html(inputVal3);
      $("#product_price").val(inputVal3);
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
