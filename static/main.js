$("#editClass").on("show.bs.modal", function (event) {
  var button = $(event.relatedTarget);
  var recipient = button.data("whatever");
  var modal = $(this);
  //   modal.find(".modal-title").text("New message to " + recipient);
});

$("#confirmDeleteClass").on("show.bs.modal", function (event) {
  var button = $(event.relatedTarget);
  var recipient = button.data("whatever");
  var modal = $(this);
  // modal.find(".modal-title").text("New message to " + recipient);
});

$("#confirmKickStudent").on("show.bs.modal", function (event) {
  var button = $(event.relatedTarget);
  var recipient = button.data("whatever");
  var modal = $(this);
  modal.find(".modal-title").text("New message to " + recipient);
});
