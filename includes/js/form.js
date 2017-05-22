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

var step2_tempemploy,
	step2_fullemply,
	step2_weekends,
	step2_evenings,
	step2_shiftwork,
	step2_overtime;
	
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
			
		if(step1_firstname.length > 2 
		   && step1_lastname.length > 2 
		   && step1_phone.length > 9
		   && step1_email.length > 2
		   && step1_address.length > 2
		   && step1_provstate.length > 1
		   && step1_city.length > 2
		   && step1_postal.length > 2
		   && step1_eligible.length > 1
		   && step1_prevemployed.length > 1){
			_("ResumeStep1").style.display = "none";
			_("ResumeStep2").style.display = "block";
		} 
		
		else {
			_("step1_error").style.display = "block";
		}
	}

	function processStep2() {
		step2_tempemploy = _("step2_TempEmploy").value;
		step2_fullemploy = _("step2_FullEmploy").value;
		step2_weekends = _("step2_Weekends").value;
		step2_evenings = _("step2_Evenings").value;
		step2_overtime = _("step2_Overtime").value;
		step2_shiftwork = _("step2_ShiftWork").value;
		
		if( step2_tempemploy.length > 1 
			&& step2_fullemploy.length > 1 
			&& step2_weekends.length > 1 
			&& step2_evenings.length > 1 
			&& step2_overtime.length > 1 
			&& step2_shiftwork.length > 1 
		  
		  
		  ) {
			_("ResumeStep2").style.display = "none";
			_("ResumeStep3").style.display = "block";
		}
		else {
			_("step2_error").style.display = "block";
		}
	}

	function processStep3() {
		step3_ = _("step3_").value;
		
		if( step3_.length > 1 
			&& step3_.length > 1 
		  
		  
		  ) {
			_("ResumeStep3").style.display = "none";
			_("ResumeStep4").style.display = "block";
		}
		else {
			_("step3_error").style.display = "block";
		}
	}

function back1(){
	_("ResumeStep1").style.display = "block";
	_("ResumeStep2").style.display = "none";
}
function back2(){
	_("ResumeStep2").style.display = "block";
	_("ResumeStep3").style.display = "none";
}
function submitForm(){
	_("Resume").method = "post";
	_("Resume").action = "submit.php";
	_("Resume").submit();
}