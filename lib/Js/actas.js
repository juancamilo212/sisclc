$(document).ready(function () {
    Vercertificado();
  });

var Vercertificado = () => {
    $("#fmrcedula").on("submit", function(e) {
        e.preventDefault();
        var datos = new FormData($("#fmrcedula")[0]);
        console.log(datos);
        console.log("HOLALALALALA");
    });
};

//-----------------------------ver
var verActa = function (body, table) {
    $(body).on("click", "button.ver", function () {
      var data = table.row($(this).parents("tr")).data();
      console.log(data);
      let key = 000000000;
      if (data.act_id == 1) {
        let direccion = `vero/actas/institucional?key=${key}`;
        window.open(direccion, "_blank");
      } else if (data.act_id == 2) {
        let direccion = `vero/actas/generica?key=${key}`;
        window.open(direccion, "_blank");
      }
    });
  };