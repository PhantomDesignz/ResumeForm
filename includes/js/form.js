var step1_firstname, 
	step1_lastname, 
	step1_phone, 
	step1_altphone, 
	step1_email, 
	step1_address, 
	step1_provstate,
	step1_city,
	step1_postal,
	step1_eligible,
	step1_prevemployed;

var step2_tempemploy;
	
	function _(x) {
		return document.getElementById(x);
	}

	function processStep1(){
		step1_firstname = _("step1_Firstname").value;
		step1_lastname = _("step1_Lastname").value;
		step1_phone = _("step1_Phone").value;
		step1_altphone = _("step1_AltPhone").value;
		step1_email = _("step1_Email").value;
		step1_address = _("step1_Address").value;
		step1_altaddress = _("step1_AltAddress").value;
		step1_provstate = _("step1_ProvState").value;
		step1_city = _("step1_City").value;
		step1_postal = _("step1_Postal").value;
		step1_eligible = _("step1_Eligible").value;
		step1_prevemployed = _("step1_PrevEmployed").value;
		var step1_positions = document.getElementsByName('step1_Positions[]');
		var haschecked = false;
		
		for (var i=0; i < step1_Positions.length; i++)
			
		if(step1_firstname.length > 2 
		   && step1_lastname.length > 2 
		   && step1_phone.length > 9
		   && step1_email.length > 2
		   && step1_address.length > 2
		   && step1_provstate.length > 1
		   && step1_city.length > 2
		   && step1_postal.length > 2
		   && step1_eligible.length > 1
		   && step1_prevemployed.length > 1
		   && haschecked === true
		 
		  ){
			_("ResumeStep1").style.display = "none";
			_("ResumeStep2").style.display = "block";
		} 
		
		else {
			_("step1_error").style.display = "block";
		}
	}
	function processStep2() {
		step2_tempemploy = _("step2_TempEmploy").value;
		
		if( step2_tempemploy.length > 1 ) {
			_("ResumeStep2").style.display = "none";
			_("ResumeStep3").style.display = "block";
		}
		else {
			_("step2_error").style.display = "block";
		}
	}
function submitForm(){
	_("Resume").method = "post";
	_("Resume").action = "submit.php";
	_("Resume").submit();
}