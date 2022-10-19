if ($("#id").html() == 1) {
  $(document).change(function () {
    if (
      $("#mycalibre option:selected").text() == "Moyenne" &&
      $("#myselection option:selected").text() == "Carton de 12 Kg"
    ) {
      $("#trtm").html("");
      $("svg").hide();

      $("#myselection").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() == "Moyenne" &&
      $("#myselection option:selected").text() == "Carton de 20 Kg"
    ) {
      $("#trtm").html("");
      $("svg").hide();

      $("#myselection").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() == "Mixte" &&
      $("#myselection option:selected").text() == "Carton de 12 Kg"
    ) {
      $("#trtm").html("");
      $("svg").hide();

      $("#myselection").css("border", "1px solid black");
    } else if (
      $("#mycalibre option:selected").text() == "Mixte" &&
      $("#myselection option:selected").text() == "Carton de 20 Kg"
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
      $("#trtm").html(" : n'existe plus cette option");

      $("#myselection").css("border", "2px red solid");
    }
  });
}
