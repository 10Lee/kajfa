$("#family_group").hide();
$("#district_group").hide();
$("#area_group").hide();


$("#rank_select").on('change', function(data){
	var id = data.target.value;

	switch(id){
		case '1':
			$("#family_group").show();
			$("#district_group").hide();
			$("#area_group").hide();	
			break;
		case '2':
			$("#family_group").hide();
			$("#district_group").show();
			$("#area_group").hide();
			break;
		case '3':
			$("#family_group").hide();
			$("#district_group").hide();
			$("#area_group").show();
	}


	// if (id == 1)	{
	// 	$("#family_group").show();
	// 	$("#area_group").hide();
	// }

	// if (id == 2){
	// 	$("#area_group").show();	
	// 	$("#family_group").hide();
	// }
});


