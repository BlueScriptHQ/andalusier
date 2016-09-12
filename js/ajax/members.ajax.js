$(document).ready(function(){
  window.loadTable = function loadTable(string){
    $.ajax({
      url: "php/members.php",
      data: "requestMembersTable=true",
      method: "POST",
      success: function(result){
        $(".members-tableHead").nextAll().remove();
        $(result).insertAfter(".members-tableHead");
        alignMenu();
      }
    });
  }

  $("#add-members-btn").on("click", function(){
    $day = ($("#add-day").val().length < 2) ? "0" + $("#add-day").val() : $("#add-day").val();
    $sendway = ($("#sendway_email_add").is(':checked')) ? 1 : 0;

    $dataArray = {
      members_title : $("#add-title").val(),
      members_name : $("#add-name").val(),
      members_tussenvoegsel : $("#add-prefix").val(),
      members_lastname: $("#add-lastname").val(),
      members_residence_street: $("#add-street").val() + $("#add-streetnr").val(),
      members_residence_zip: $("#add-zip").val(),
      members_residence_place: $("#add-place").val(),
      members_residence_country: $("#add-country").val(),
      members_birthdate: $day + "/" + $("#add-month").val() + "/" + $("#add-year").val(),
      members_phonenr: $("#add-phonenr").val(),
      members_phonenr2: $("#add-phonenr2").val(),
      members_mobnr: $("#add-mobnr").val(),
      members_email: $("#add-email").val(),
      members_email2: $("#add-email2").val(),
      members_types_id: $("#add-mem-type").val(),
      members_stable: $("#add-stable").val(),
      members_bank: $("#add-bank").val(),
      members_newsletter: $("#add-newsletter").attr("checked"),
      members_sendway: $sendway,
      members_comment: $("#add-comment").val()
    };
    if($("#add-newsletter").is(':checked')){
      $dataArray['members_newsletter'] = 1;
    } else {
      $dataArray['members_newsletter'] = 0;
    }
    addMember($dataArray);
  });

  function addMember(dataArray){
    $.ajax({
      url: "php/members.php",
      data: "requestMemberAdd=" + JSON.stringify(dataArray),
      method: "POST",
      success: function(result){
        $("#page-overlay").fadeOut(500);
        $("#members-popup-add").fadeOut(500);
        loadTable();
      }
    });
  }


  window.editUser = function editUser(customerID){
    $.ajax({
      url: "php/members.php",
      data: "requestMembersInfo=" + customerID,
      method: "POST",
      success: function(result){
        $result = JSON.parse(result);
        setInfoMembers($result);
        $("#page-overlay").fadeIn(500);
        $("#members-popup-edit").fadeIn(500);
        alignMenu();
      }
    });
  }

  function setInfoMembers(data){
    $("#edit-members-id").val(data['members_id']);

    // reset
    $("#edit-title").prop('selectedIndex','-1');
    $('#edit-title option[value='+ data['members_titles_content'].toLowerCase()+']').attr('selected','selected');

    $("#edit-name").val(data['members_name']);
    $("#edit-prefix").val(data['members_tussenvoegsel']);
    $("#edit-lastname").val(data['members_lastname']);

    $streetName = data['members_residence_street'].replace(/[0-9]/g, '');
    $("#edit-street").val($streetName);
    $streetNr = data['members_residence_street'].match(/\d+$/)[0];
    $("#edit-streetnr").val($streetNr);
    $("#edit-zip").val(data['members_residence_zip']);

    $("#edit-place").val(data['members_residence_place']);

    $("#edit-country").prop('selectedIndex','-1');
    $('#edit-country option[value='+ data['members_residence_country'].toLowerCase()+']').attr('selected','selected');

    $("#edit-birthdate").val(data['members_birthdate']);

    $("#edit-phonenr").val(data['members_phonenr']);
    $("#edit-phonenr2").val(data['members_phonenr2']);
    $("#edit-mobnr").val(data['members_mobnr']);

    $("#edit-email").val(data['members_email']);
    $("#edit-email2").val(data['members_email2']);

    $("#edit-startdate").text(data['members_startdate']);

    $("#edit-mem-type").prop('selectedIndex','-1');
    $('#edit-mem-type option[value='+ data['members_types_id'].toLowerCase()+']').attr('selected','selected');

    $("#edit-stable").val(data['members_stable']);

    $("#edit-bank").val(data['members_bank']);

    if(data['members_newsletter'] == 1){
      $("#edit-newsletter").attr("checked", true);
    } else { $("#edit-newsletter").attr("checked", false); }

    if(data['members_mail'] == 1){
      $("#members-popup-edit input:radio[name=sendway]:not(:first)").prop('checked', true);
    } else { $("#members-popup-edit input:radio[name='sendway']:first").prop('checked', true); }

    if(data['members_gift'] == 1){
      $("#members-popup-edit #status_gift").attr("checked", true);
    } else { $("#members-popup-edit #status_gift").attr("checked", false); }
    if(data['members_paid'] == 1){
      $("#members-popup-edit #status_paid").attr("checked", true);
    } else { $("#members-popup-edit #status_paid").attr("checked", false); }
    if(data['members_reminder'] == 1){
      $("#members-popup-edit #status_reminder").attr("checked", true);
    } else { $("#members-popup-edit #status_reminder").attr("checked", false); }

    $("#edit-comment").val(data['members_comment']);
  }

  $("#edit-members-btn").on("click", function(){
    $sendway = '';
    if($("#members-popup-edit #sendway_email").is(":checked")){
      $sendway = 1;
    } else {
      $sendway = 0;
    }
    $dataArray = {
      members_id : $("#edit-members-id").val(),
      members_title : $("#edit-title").val(),
      members_name : $("#edit-name").val(),
      members_tussenvoegsel : $("#edit-prefix").val(),
      members_lastname: $("#edit-lastname").val(),
      members_residence_street: $("#edit-street").val() + $("#edit-streetnr").val(),
      members_residence_zip: $("#edit-zip").val(),
      members_residence_place: $("#edit-place").val(),
      members_residence_country: $("#edit-country").val(),
      members_birthdate: $("#edit-birthdate").val(),
      members_phonenr: $("#edit-phonenr").val(),
      members_phonenr2: $("#edit-phonenr2").val(),
      members_mobnr: $("#edit-mobnr").val(),
      members_email: $("#edit-email").val(),
      members_email2: $("#edit-email2").val(),
      members_types_id: $("#edit-mem-type").val(),
      members_stable: $("#edit-stable").val(),
      members_bank: $("#edit-bank").val(),
      members_gift: $("#status_gift").prop("checked") ? 1 : 0,
      members_paid: $("#status_paid").prop("checked") ? 1 : 0,
      members_sendway: $sendway,
      members_reminder: $("#status_reminder").prop("checked") ? 1 : 0,
      members_comment: $("#edit-comment").val()
    };
    if($("#edit-newsletter").is(':checked')){
      $dataArray['members_newsletter'] = 1;
    } else {
      $dataArray['members_newsletter'] = 0;
    }
    updateInfoMembers($dataArray);
  });

  function updateInfoMembers(dataArray){
    $.ajax({
      url: "php/members.php",
      data: "requestMembersUpdate=" + JSON.stringify(dataArray),
      method: "POST",
      success: function(result){
        $("#page-overlay").fadeOut(500);
        $("#members-popup-edit").fadeOut(500);
        loadTable();
      }
    });
  }
});
