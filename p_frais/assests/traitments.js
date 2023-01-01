// DORADE TRAITEMENT

if ($("#id").html() == 1) {
  $(document).change(function () {
    if (
      $("#mycalibre option:selected").text() == "400/600gr" &&
      $("#myselection option:selected").text() == "Entier"
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
      $("#mycalibre option:selected").text() == "400/600gr" &&
      $("#myselection option:selected").text() == "Entier caisse de 6Kg+"
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
      $("#mycalibre option:selected").text() == "400/600gr" &&
      $("#myselection option:selected").text() == "Filets écaillés désarêté"
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
      $("#mycalibre option:selected").text() == "400/600gr" &&
      $("#myselection option:selected").text() == "Filets désarêté"
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
      $("#mycalibre option:selected").text() == "400/600gr" &&
      $("#myselection option:selected").text() == "Vidé"
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
      $("#mycalibre option:selected").text() == "600/800gr" &&
      $("#myselection option:selected").text() == "Entier"
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
      $("#mycalibre option:selected").text() == "600/800gr" &&
      $("#myselection option:selected").text() == "Entier caisse de 6Kg+"
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
      $("#mycalibre option:selected").text() == "600/800gr" &&
      $("#myselection option:selected").text() == "Filets écaillés désarêté"
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
      $("#mycalibre option:selected").text() == "600/800gr" &&
      $("#myselection option:selected").text() == "Filets désarêté"
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
      $("#mycalibre option:selected").text() == "600/800gr" &&
      $("#myselection option:selected").text() == "Vidé"
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
      $("#mycalibre option:selected").text() == "800/1000gr" &&
      $("#myselection option:selected").text() == "Entier"
    ) {
      $("#trtm").html("");
      var inputVal3 = $("#p3").val();
      $("#prc").html(inputVal3);
      $("#product_price").val(inputVal3);
      $("#currency").html("DH");
      $("svg").hide();

      $("#add").attr("disabled", false);
      $("#myselection").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() == "800/1000gr" &&
      $("#myselection option:selected").text() == "Entier caisse de 10Kg+"
    ) {
      $("#trtm").html("");
      var inputVal3 = $("#p3").val();
      $("#prc").html(inputVal3);
      $("#product_price").val(inputVal3);
      $("#currency").html("DH");
      $("svg").hide();

      $("#add").attr("disabled", false);
      $("#myselection").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() == "800/1000gr" &&
      $("#myselection option:selected").text() == "Filets écaillés désarêté"
    ) {
      $("#trtm").html("");
      var inputVal3 = $("#p3").val();
      $("#prc").html(inputVal3);
      $("#product_price").val(inputVal3);
      $("#currency").html("DH");
      $("svg").hide();

      $("#add").attr("disabled", false);
      $("#myselection").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() == "800/1000gr" &&
      $("#myselection option:selected").text() == "Filets désarêté"
    ) {
      $("#trtm").html("");
      var inputVal3 = $("#p3").val();
      $("#prc").html(inputVal3);
      $("#product_price").val(inputVal3);
      $("#currency").html("DH");
      $("svg").hide();

      $("#add").attr("disabled", false);
      $("#myselection").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() == "800/1000gr" &&
      $("#myselection option:selected").text() == "Vidé"
    ) {
      $("#trtm").html("");
      var inputVal3 = $("#p3").val();
      $("#prc").html(inputVal3);
      $("#product_price").val(inputVal3);
      $("#currency").html("DH");
      $("svg").hide();

      $("#add").attr("disabled", false);
      $("#myselection").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() == "1000/1500gr" &&
      $("#myselection option:selected").text() == "Entier"
    ) {
      $("#trtm").html("");
      $("svg").hide();
      var inputVal4 = $("#p4").val();
      $("#prc").html(inputVal4);
      $("#product_price").val(inputVal4);
      $("#currency").html("DH");
      $("#add").attr("disabled", false);
      $("#myselection").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() == "1000/1500gr" &&
      $("#myselection option:selected").text() == "Entier caisse de 10Kg+"
    ) {
      $("#trtm").html("");
      var inputVal4 = $("#p4").val();
      $("#prc").html(inputVal4);
      $("#product_price").val(inputVal4);
      $("#currency").html("DH");
      $("svg").hide();

      $("#add").attr("disabled", false);
      $("#myselection").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() == "1000/1500gr" &&
      $("#myselection option:selected").text() == "Filets écaillés désarêté"
    ) {
      $("#trtm").html("");
      var inputVal4 = $("#p4").val();
      $("#prc").html(inputVal4);
      $("#product_price").val(inputVal4);
      $("#currency").html("DH");
      $("svg").hide();

      $("#add").attr("disabled", false);
      $("#myselection").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() == "1000/1500gr" &&
      $("#myselection option:selected").text() == "Filets désarêté"
    ) {
      $("#trtm").html("");
      var inputVal4 = $("#p4").val();
      $("#prc").html(inputVal4);
      $("#product_price").val(inputVal4);
      $("#currency").html("DH");
      $("svg").hide();

      $("#add").attr("disabled", false);
      $("#myselection").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() == "1000/1500gr" &&
      $("#myselection option:selected").text() == "Vidé"
    ) {
      $("#trtm").html("");
      var inputVal4 = $("#p4").val();
      $("#prc").html(inputVal4);
      $("#product_price").val(inputVal4);
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

// LOUPBAR TRAITEMENT

if ($("#id").html() == 2) {
  $(document).change(function () {
    if (
      $("#mycalibre option:selected").text() == "400/600gr" &&
      $("#myselection option:selected").text() == "Entier caisse de 6Kg+"
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
      $("#mycalibre option:selected").text() == "400/600gr" &&
      $("#myselection option:selected").text() == "Entier"
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
      $("#mycalibre option:selected").text() == "400/600gr" &&
      $("#myselection option:selected").text() == "Filets écaillés désarêté"
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
      $("#mycalibre option:selected").text() == "400/600gr" &&
      $("#myselection option:selected").text() == "Filets désarêté"
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
      $("#mycalibre option:selected").text() == "400/600gr" &&
      $("#myselection option:selected").text() == "Vidé"
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
      $("#mycalibre option:selected").text() == "600/800gr" &&
      $("#myselection option:selected").text() == "Entier"
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
      $("#mycalibre option:selected").text() == "600/800gr" &&
      $("#myselection option:selected").text() == "Entier caisse de 6Kg+"
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
      $("#mycalibre option:selected").text() == "600/800gr" &&
      $("#myselection option:selected").text() == "Filets écaillés désarêté"
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
      $("#mycalibre option:selected").text() == "600/800gr" &&
      $("#myselection option:selected").text() == "Filets désarêté"
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
      $("#mycalibre option:selected").text() == "600/800gr" &&
      $("#myselection option:selected").text() == "Vidé"
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
      $("#mycalibre option:selected").text() == "800/1000gr" &&
      $("#myselection option:selected").text() == "Entier"
    ) {
      $("#trtm").html("");
      var inputVal3 = $("#p3").val();
      $("#prc").html(inputVal3);
      $("#product_price").val(inputVal3);
      $("#currency").html("DH");
      $("svg").hide();

      $("#add").attr("disabled", false);
      $("#myselection").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() == "800/1000gr" &&
      $("#myselection option:selected").text() == "Entier caisse de 10Kg+"
    ) {
      $("#trtm").html("");
      var inputVal3 = $("#p3").val();
      $("#prc").html(inputVal3);
      $("#product_price").val(inputVal3);
      $("#currency").html("DH");
      $("svg").hide();

      $("#add").attr("disabled", false);
      $("#myselection").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() == "800/1000gr" &&
      $("#myselection option:selected").text() == "Filets écaillés désarêté"
    ) {
      $("#trtm").html("");
      var inputVal3 = $("#p3").val();
      $("#prc").html(inputVal3);
      $("#product_price").val(inputVal3);
      $("#currency").html("DH");
      $("svg").hide();

      $("#add").attr("disabled", false);
      $("#myselection").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() == "800/1000gr" &&
      $("#myselection option:selected").text() == "Filets désarêté"
    ) {
      $("#trtm").html("");
      var inputVal3 = $("#p3").val();
      $("#prc").html(inputVal3);
      $("#product_price").val(inputVal3);
      $("#currency").html("DH");
      $("svg").hide();

      $("#add").attr("disabled", false);
      $("#myselection").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() == "800/1000gr" &&
      $("#myselection option:selected").text() == "Vidé"
    ) {
      $("#trtm").html("");
      var inputVal3 = $("#p3").val();
      $("#prc").html(inputVal3);
      $("#product_price").val(inputVal3);
      $("#currency").html("DH");
      $("svg").hide();

      $("#add").attr("disabled", false);
      $("#myselection").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() == "1Kg+" &&
      $("#myselection option:selected").text() == "Entier"
    ) {
      $("#trtm").html("");
      var inputVal4 = $("#p4").val();
      $("#prc").html(inputVal4);
      $("#product_price").val(inputVal4);
      $("#currency").html("DH");
      $("svg").hide();

      $("#add").attr("disabled", false);
      $("#myselection").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() == "1Kg+" &&
      $("#myselection option:selected").text() == "Filets écaillés désarêté"
    ) {
      $("#trtm").html("");
      var inputVal4 = $("#p4").val();
      $("#prc").html(inputVal4);
      $("#product_price").val(inputVal4);
      $("#currency").html("DH");
      $("svg").hide();

      $("#add").attr("disabled", false);
      $("#myselection").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() == "1Kg+" &&
      $("#myselection option:selected").text() == "Filets désarêté"
    ) {
      $("#trtm").html("");
      var inputVal4 = $("#p4").val();
      $("#prc").html(inputVal4);
      $("#product_price").val(inputVal4);
      $("#currency").html("DH");
      $("svg").hide();

      $("#add").attr("disabled", false);
      $("#myselection").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() == "1Kg+" &&
      $("#myselection option:selected").text() == "Vidé"
    ) {
      $("#trtm").html("");
      var inputVal4 = $("#p4").val();
      $("#prc").html(inputVal4);
      $("#product_price").val(inputVal4);
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

//  LOTTE TRAITEMENT

if ($("#id").html() == 3) {
  $(document).change(function () {
    if (
      $("#mycalibre option:selected").text() == "1Kg+" &&
      $("#myselection option:selected").text() == "Entier"
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
      $("#mycalibre option:selected").text() == "1Kg+" &&
      $("#myselection option:selected").text() == "Filets"
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

// TURBOT TRAITEMENT

if ($("#id").html() == 4) {
  $(document).change(function () {
    if (
      $("#mycalibre option:selected").text() == "800/1000gr" &&
      $("#myselection option:selected").text() == "Entier"
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
      $("#mycalibre option:selected").text() == "1300/2000gr" &&
      $("#myselection option:selected").text() == "Entier"
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
      $("#mycalibre option:selected").text() == "1500/2100gr" &&
      $("#myselection option:selected").text() == "Entier"
    ) {
      $("#trtm").html("");
      var inputVal3 = $("#p3").val();
      $("#prc").html(inputVal3);
      $("#product_price").val(inputVal3);
      $("#currency").html("DH");
      $("svg").hide();
      $("#add").attr("disabled", false);
      $("#myselection").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() == "800/1000gr" &&
      $("#myselection option:selected").text() == "Fiets de turbot"
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
      $("#mycalibre option:selected").text() == "1300/2000gr" &&
      $("#myselection option:selected").text() == "Fiets de turbot"
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
      $("#mycalibre option:selected").text() == "1500/2100gr" &&
      $("#myselection option:selected").text() == "Fiets de turbot"
    ) {
      $("#trtm").html("");
      var inputVal3 = $("#p3").val();
      $("#prc").html(inputVal3);
      $("#product_price").val(inputVal3);
      $("#currency").html("DH");
      $("svg").hide();
      $("#add").attr("disabled", false);
      $("#myselection").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() == "800/1000gr" &&
      $("#myselection option:selected").text() == "Pavé de turbot"
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
      $("#mycalibre option:selected").text() == "1300/2000gr" &&
      $("#myselection option:selected").text() == "Pavé de turbot"
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
      $("#mycalibre option:selected").text() == "1500/2100gr" &&
      $("#myselection option:selected").text() == "Pavé de turbot"
    ) {
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

// ESPADON TRAITEMENT

if ($("#id").html() == 5) {
  $(document).change(function () {
    if ($("#myselection option:selected").text() == "Entier") {
      $("#trtm").html("");
      var inputVal1 = $("#p1").val();
      $("#prc").html(inputVal1);
      $("#product_price").val(inputVal1);
      $("#currency").html("DH");
      $("svg").hide();
      $("#add").attr("disabled", false);
      $("#myselection").css("border", "1px solid black");
    } else if ($("#myselection option:selected").text() == "Filet") {
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

// OMBRINETTE TRAITEMENT

if ($("#id").html() == 6) {
  $(document).change(function () {
    if (
      $("#mycalibre option:selected").text() == "800/2000gr" &&
      $("#myselection option:selected").text() == "Entier"
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
      $("#mycalibre option:selected").text() == "2100/4000gr" &&
      $("#myselection option:selected").text() == "Entier"
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
      $("#mycalibre option:selected").text() == "800/2000gr" &&
      $("#myselection option:selected").text() == "Filet"
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
      $("#mycalibre option:selected").text() == "2100/4000gr" &&
      $("#myselection option:selected").text() == "Filet"
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

//  SAUMON FRAIS TRAITEMENT

if ($("#id").html() == 7) {
  $(document).change(function () {
    if ($("#mycalibre option:selected").text() == "1Kg/2Kg") {
      $("#trtm").html("");
      var inputVal1 = $("#p1").val();
      $("#prc").html(inputVal1);
      $("#product_price").val(inputVal1);
      $("#currency").html("DH");
      $("svg").hide();
      $("#add").attr("disabled", false);
      $("#myselection").css("border", "1px solid black");
    } else if ($("#mycalibre option:selected").text() == "2Kg/3Kg") {
      $("#trtm").html("");
      var inputVal2 = $("#p2").val();
      $("#prc").html(inputVal2);
      $("#product_price").val(inputVal2);
      $("#currency").html("DH");
      $("svg").hide();
      $("#add").attr("disabled", false);
      $("#myselection").css("border", "1px solid black");
    } else if ($("#mycalibre option:selected").text() == "3Kg/4Kg") {
      $("#trtm").html("");
      var inputVal3 = $("#p3").val();
      $("#prc").html(inputVal3);
      $("#product_price").val(inputVal3);
      $("#currency").html("DH");
      $("svg").hide();
      $("#add").attr("disabled", false);
      $("#myselection").css("border", "1px solid black");
    } else if ($("#mycalibre option:selected").text() == "4Kg/5Kg") {
      $("#trtm").html("");
      var inputVal4 = $("#p4").val();
      $("#prc").html(inputVal4);
      $("#product_price").val(inputVal4);
      $("#currency").html("DH");
      $("svg").hide();
      $("#add").attr("disabled", false);
      $("#myselection").css("border", "1px solid black");
    } else if ($("#mycalibre option:selected").text() == "5Kg/6Kg") {
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

// MIETTE TRAITEMENT

if ($("#id").html() == 8) {
  $(document).change(function () {
    if (
      $("#mycalibre option:selected").text() == "500gr" &&
      $("#myselection option:selected").text() == "Frais"
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
      $("#mycalibre option:selected").text() == "500gr" &&
      $("#myselection option:selected").text() == "Surgelé"
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

// BANDES DE SAUMONS TRAITEMENT

if ($("#id").html() == 9) {
  $(document).change(function () {
    if (
      $("#mycalibre option:selected").text() == "1Kg" &&
      $("#myselection option:selected").text() == "Frais"
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

// PAVE DE SAUMONS TRAITEMENET

if ($("#id").html() == 10) {
  $(document).change(function () {
    if (
      $("#mycalibre option:selected").text() == "100/120gr" &&
      $("#myselection option:selected").text() == "Frais"
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
      $("#mycalibre option:selected").text() == "150/170gr" &&
      $("#myselection option:selected").text() == "Frais"
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
      $("#mycalibre option:selected").text() == "170/190gr" &&
      $("#myselection option:selected").text() == "Frais"
    ) {
      $("#trtm").html("");
      var inputVal3 = $("#p3").val();
      $("#prc").html(inputVal3);
      $("#product_price").val(inputVal3);
      $("#currency").html("DH");
      $("svg").hide();
      $("#add").attr("disabled", false);
      $("#myselection").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() == "100/120gr" &&
      $("#myselection option:selected").text() == "Surgelé"
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
      $("#mycalibre option:selected").text() == "150/170gr" &&
      $("#myselection option:selected").text() == "Surgelé"
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
      $("#mycalibre option:selected").text() == "170/190gr" &&
      $("#myselection option:selected").text() == "Surgelé"
    ) {
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

// SAINT PIERRE TRAITEMENT

if ($("#id").html() == 11) {
  $(document).change(function () {
    if (
      $("#mycalibre option:selected").text() == "700/1200gr" &&
      $("#myselection option:selected").text() == "Entier"
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
      $("#mycalibre option:selected").text() == "1200gr" &&
      $("#myselection option:selected").text() == "Entier"
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
      $("#mycalibre option:selected").text() == "700/1200gr" &&
      $("#myselection option:selected").text() == "Filet"
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
      $("#mycalibre option:selected").text() == "1200gr" &&
      $("#myselection option:selected").text() == "Filet"
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

// SEPIA TRAITEMENT

if ($("#id").html() == 12) {
  $(document).change(function () {
    if ($("#mycalibre option:selected").text() == "300/1500gr") {
      $("#trtm").html("");
      var inputVal1 = $("#p1").val();
      $("#prc").html(inputVal1);
      $("#product_price").val(inputVal1);
      $("#currency").html("DH");
      $("svg").hide();
      $("#add").attr("disabled", false);
      $("#myselection").css("border", "1px solid black");
    } else if ($("#mycalibre option:selected").text() == "1500gr") {
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

// CALAMAR FRAIT TRAITEMENT

if ($("#id").html() == 13) {
  $(document).change(function () {
    if (
      $("#mycalibre option:selected").text() == "3P/4P (Petite)" &&
      $("#myselection option:selected").text() == "Entier"
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
      $("#mycalibre option:selected").text() == "2P/P (Moyenne)" &&
      $("#myselection option:selected").text() == "Entier"
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
      $("#mycalibre option:selected").text() == "3P/4P (Petite)" &&
      $("#myselection option:selected").text() == "Tube"
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
      $("#mycalibre option:selected").text() == "2P/P (Moyenne)" &&
      $("#myselection option:selected").text() == "Tube"
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

// Vrai Merou

if ($("#id").html() == 14) {
  $(document).change(function () {
    if (
      $("#mycalibre option:selected").text() == "1kg/2kg" &&
      $("#myselection option:selected").text() == "Entier"
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
      $("#mycalibre option:selected").text() == "2kg+" &&
      $("#myselection option:selected").text() == "Entier"
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
      $("#mycalibre option:selected").text() == "1kg/2kg" &&
      $("#myselection option:selected").text() == "Filet"
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
      $("#mycalibre option:selected").text() == "2kg+" &&
      $("#myselection option:selected").text() == "Filet"
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

// Dorade Royal

if ($("#id").html() == 15) {
  $(document).change(function () {
    if (
      $("#mycalibre option:selected").text() == "1kg++" &&
      $("#myselection option:selected").text() == "Vidé"
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
      $("#mycalibre option:selected").text() == "1kg++" &&
      $("#myselection option:selected").text() == "Entier"
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

// Rascasse (le chapon)

if ($("#id").html() == 16) {
  $(document).change(function () {
    if (
      $("#mycalibre option:selected").text() == "800/1000g" &&
      $("#myselection option:selected").text() == "Entier"
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
      $("#mycalibre option:selected").text() == "1kg++" &&
      $("#myselection option:selected").text() == "Entier"
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
      $("#mycalibre option:selected").text() == "800/1000g" &&
      $("#myselection option:selected").text() == "Filet"
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
      $("#mycalibre option:selected").text() == "1kg++" &&
      $("#myselection option:selected").text() == "Filet"
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

// Pageot Chama

if ($("#id").html() == 17) {
  $(document).change(function () {
    if (
      $("#mycalibre option:selected").text() == "1kg/2kg" &&
      $("#myselection option:selected").text() == "Vidé"
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
      $("#mycalibre option:selected").text() == "2kg+" &&
      $("#myselection option:selected").text() == "Vidé"
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
      $("#mycalibre option:selected").text() == "1kg/2kg" &&
      $("#myselection option:selected").text() == "Entier"
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
      $("#mycalibre option:selected").text() == "2kg+" &&
      $("#myselection option:selected").text() == "Entier"
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
      $("#mycalibre option:selected").text() == "1kg/2kg" &&
      $("#myselection option:selected").text() == "Filet"
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
      $("#mycalibre option:selected").text() == "2kg+" &&
      $("#myselection option:selected").text() == "Filet"
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
