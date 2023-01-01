if ($("#id").html() == 18) {
  $(document).change(function () {
    if ($("#mycalibre option:selected").text() == "100g") {
      $("#trtm").html("");
      var inputVal1 = $("#p1").val();
      $("#prc").html(inputVal1);
      $("#product_price").val(inputVal1);
      $("#currency").html("DH");
      $("svg").hide();
      $("#add").attr("disabled", false);
      $("#myselection").css("border", "1px solid black");
    } else if ($("#mycalibre option:selected").text() == "500g") {
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
