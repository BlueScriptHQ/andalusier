$(document).ready(function(){

	window.openAdvert = function openAdvert(id){
  	$id = id;

		callHandler.addInvoked("getOldAdvertInfo", function(result){
    	$obj = JSON.parse(result);
				$(".advertsnumber").val($obj.adverts_id);
				$(".advertsname").val($obj.adverts_name);
				$(".advertstype").val($obj.adverts_type);
				$(".advertsowner").val($obj.adverts_owner);
				$(".advertscontact").val($obj.adverts_contact);
				$(".advertsaddress").val($obj.adverts_address);
				$(".advertspostalcode").val($obj.adverts_postalcode);
				$(".advertscity").val($obj.adverts_city);
				$(".advertscountry").val($obj.adverts_country);
				$(".advertsemail").val($obj.adverts_email);
				$(".advertsphone").val($obj.adverts_telephone);
				$(".advertsbank").val($obj.adverts_bank);
				$(".advertsbillingnumber").val($obj.adverts_billingnumber);
				$(".advertsdate").val($obj.adverts_date);
				addDisable("#popupAdvertExtraInfo");

				$("#page-overlay").fadeIn(400);
				$("#popupAdvertExtraInfo").fadeIn(400);
    }, $id);
  };

	$(".btn_edit").on("click", function(){
		removeDisable("#popupAdvertExtraInfo");
		$(".btn_edit").hide();
		$(".btn_save").show();
	});

	$("#page-overlay, .popup_close").on("click", function(){
		$(".btn_edit").show();
		$(".btn_save").hide();
		addDisable("#popupAdvertExtraInfo");
	});

	$(".btn_save").on("click", function(){
		$(".btn_save").hide();
		$(".btn_edit").show();
		addDisable("#popupAdvertExtraInfo");
		var object = buildObject("#popupAdvertExtraInfo");
		callHandler.addInvoked("advertsExtraInfoHandler", function(result){
			alert(result);
		}, object);
	});
});
