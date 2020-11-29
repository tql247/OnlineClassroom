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

$('.set-role').on('change', function(e){
  let data = $(e.target).find('option:selected').val();
  const targetName = $(e.target).parent().find(".target_user").text().trim();
  const targetUserId = $(e.target).parent().find(".target_user").data("user-id");
  $("#confirmSetRole").find(".target-set-role").text(targetName);
  $("#confirmSetRole").find(".target-user").val(targetUserId);
  $("#confirmSetRole").find(".set-role-name").text(data);
  $("#confirmSetRole").modal()
});

