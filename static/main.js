$("#editClass").on("show.bs.modal", function (event) {
  var button = $(event.relatedTarget);
  var recipient = button.data("whatever");
  var modal = $(this);
  // modal.find(".modal-title").text("New message to " + recipient)
  var class_ = $("#class_id_" + recipient);
  var new_class_name= class_.find(".class_name").text();
  var new_class_course = class_.find(".course_name").text();
  var new_class_room = class_.find(".class_room").text();
  var new_class_code = class_.find(".class_code").text();
  modal.find(".class_name_update").val(new_class_name);
  modal.find(".class_course_update").val(new_class_course);
  modal.find(".class_room_update").val(new_class_room);
  modal.find(".class_code_update").val(new_class_code);
  modal.find(".id_class").val(recipient);
  
});


$("#editFeed").on("show.bs.modal", function (event) {
  var button = $(event.relatedTarget);
  var recipient = button.data("whatever");
  var modal = $(this);
  // modal.find(".modal-title").text("New message to " + recipient)
  var feed = $("#feed_id_" + recipient);
  var feed_title = feed.find(".feed_title").text().trim();
  var feed_content = feed.find(".feed_content").text().trim();
  modal.find(".feed_title").val(feed_title);
  modal.find(".feed_content").val(feed_content);
  
});

$("#confirmDeleteClass").on("show.bs.modal", function (event) {
  var button = $(event.relatedTarget);
  var recipient = button.data("whatever");
  var modal = $(this);
  // modal.find(".modal-title").text("New message to " + recipient);
  var class_ = $("#class_id_" + recipient);
  modal.find(".id_class_delete").val(recipient);
});

$("#confirmKickStudent").on("show.bs.modal", function (event) {
  var button = $(event.relatedTarget);
  var recipient = button.data("whatever");
  var modal = $(this);
  modal.find(".modal-title").text("New message to " + recipient);
});

$(".open-extend-controll").on("click", function(e) {
  if($(e.target).next().hasClass("active")) {
    $(e.target).next().removeClass("active");
  } else {
    $(e.target).next().addClass("active");
  }
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

