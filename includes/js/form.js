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

var step3_school,
	step3_schoolcity,
	step3_yearscompleted,
	step3_graduate,
	step3_yeargraduated;

var step4_school,
	step4_schoolcity,
	step4_yearscompleted,
	step4_graduate,
	step4_diploma,
	step4_field,
	step4_yeargraduated;

var step5_school,
	step5_schoolcity,
	step5_yearscompleted,
	step5_graduate,
	step5_trade,
	step5_yeargraduated;
	
var step6_other;

var step7_businesstype,
	step7_city,
	step7_contactcurrent,
	step7_duties,
	step7_employed,
	step7_employername,
	step7_end,
	step7_leavingreason,
	step7_phone,
	step7_province,
	step7_start,
	step7_supervisor;

var step8_able,
	step8_injuries,
	step8_additionalinfo,
	step8_hobbiesinterests;

var step9_name1,
	step9_name2,
	step9_name3,
	step9_phone1,
	step9_phone2,
	step9_phone3,
	step9_rel1,
	step9_rel2,
	step9_rel3;

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
		step3_school = _("step3_School").value;
		step3_schoolcity = _("step3_SchoolCity").value;
		step3_yearscompleted = _("step3_YearsCompleted").value;
		step3_graduate = _("step3_Graduate").value;
		step3_yeargraduated = _("step3_YearGraduated").value;
		
		if( step3_school.length > 2 
			&& step3_schoolcity.length > 2 
			&& step3_yearscompleted.length > 0 
			&& step3_graduate.length > 1 
			&& step3_yeargraduated.length > 3 ) {
			_("ResumeStep3").style.display = "none";
			_("ResumeStep4").style.display = "block";
		}
		else {
			_("step3_error").style.display = "block";
		}
	}
	function processStep4() {
		step4_school = _("step4_School").value;
		step4_schoolcity = _("step4_SchoolCity").value;
		step4_yearscompleted = _("step4_YearsCompleted").value;
		step4_graduate = _("step4_Graduate").value;
		step4_field = _("step4_Field").value;
		step4_diploma = _("step4_Diploma").value;
		step4_yeargraduated = _("step4_YearGraduated").value;
		
		if( step4_school.length > 2 
			&& step4_schoolcity.length > 2 
			&& step4_yearscompleted.length > 0 
			&& step4_graduate.length > 1 
			&& step4_field.length > 1 
			&& step4_diploma.length > 1 
			&& step4_yeargraduated.length > 3 ) {
			_("ResumeStep4").style.display = "none";
			_("ResumeStep5").style.display = "block";
		}
		else {
			_("step4_error").style.display = "block";
		}
	}
	function processStep5() {
		step5_school = _("step5_School").value;
		step5_schoolcity = _("step5_SchoolCity").value;
		step5_yearscompleted = _("step5_YearsCompleted").value;
		step5_certified = _("step5_Certified").value;
		step5_trade = _("step5_Trade").value;
		step5_yeargraduated = _("step5_YearGraduated").value;
		
		if( step5_school.length > 2 
			&& step5_schoolcity.length > 2 
			&& step5_yearscompleted.length > 0 
			&& step5_certified.length > 1 
			&& step5_trade.length > 1 
			&& step5_yeargraduated.length > 3 ) {
			_("ResumeStep5").style.display = "none";
			_("ResumeStep6").style.display = "block";
		}
		else {
			_("step5_error").style.display = "block";
		}
	}
	function processStep6() {
		step6_other = _("step6_Other").value;
		
        _("ResumeStep6").style.display = "none";
        _("ResumeStep7").style.display = "block";        
	}

function processStep7() {
	step7_businesstype = _("step7_BusinessType").value;
	step7_city = _("step7_City").value;
	step7_contactcurrent = _("step7_ContactCurrent").value;
	step7_duties = _("step7_Duties").value;
	step7_employed = _("step7_Employed").value;
	step7_employername = _("step7_EmployerName").value;
	step7_end = _("step7_End").value;
	step7_leavingreason = _("step7_LeavingReason").value;
	step7_phone = _("step7_Phone").value;
	step7_province = _("step7_Province").value;
	step7_start = _("step7_Start").value;
	step7_supervisor = _("step7_Supervisor").value;
	
		
		if( step7_businesstype.length > 2
		  && step7_city.length > 2
		   && step7_contactcurrent.length > 2
		   && step7_duties.length > 2
		   && step7_employed.length > 2
		   && step7_employername.length > 2
		   && step7_end.length > 2
		   && step7_leavingreason.length > 2
		   && step7_phone.length > 9
		   && step7_province.length > 1
		   && step7_start.length > 2
		   && step7_supervisor.length > 2
		  ) {
			_("ResumeStep7").style.display = "none";
			_("ResumeStep8").style.display = "block";
		}
		else {
			_("step7_error").style.display = "block";
		}
}

function processStep8() {
	step8_able = _("step8_Able").value;
	step8_injuries = _("step8_Injuries").value;
	step8_additionalinfo = _("step8_AdditionalInfo").value;
	step8_hobbiesinterests = _("step8_HobbiesInterests").value;
	
	if( step8_able.length > 1
	    && step8_injuries.length > 1
	    && step8_additionalinfo.length > 2
	    && step8_hobbiesinterests.length > 2
		  ) {
			_("ResumeStep8").style.display = "none";
			_("ResumeStep9").style.display = "block";
		}
		else {
			_("step8_error").style.display = "block";
		}
}

function processStep9() {
	step9_name1 = _("step9_Name1").value;
	step9_name2 = _("step9_Name2").value;
	step9_name3 = _("step9_Name3").value;
	step9_phone1 = _("step9_Phone1").value;
	step9_phone2 = _("step9_Phone2").value;
	step9_phone3 = _("step9_Phone3").value;
	step9_rel1 = _("step9_Rel1").value;
	step9_rel2 = _("step9_Rel2").value;
	step9_rel3 = _("step9_Rel3").value;
	
	
	if( step9_name1.length > 2
	    && step9_name2.length > 2
	    && step9_name3.length > 2
	    && step9_phone1.length > 9
	    && step9_phone2.length > 9
	    && step9_phone3.length > 9
	    && step9_rel1.length > 2
	    && step9_rel2.length > 2
	    && step9_rel3.length > 2
		  ) {
			_("ResumeStep9").style.display = "none";
			_("ResumeStep10").style.display = "block";
		}
		else {
			_("step9_error").style.display = "block";
		}
}


function processStep11() {
	step11_other = _("step11_Other").value;
	step11_hearabout = _("step11_HearAbout").value;

	
	
	if( step9_name1.length > 1
	    && step9_name2.length > 2
		  ) {
			_("ResumeStep11").style.display = "none";
			_("ResumeStep12").style.display = "block";
		}
		else {
			_("step11_error").style.display = "block";
		}
}

function processStep10() {
	_("ResumeStep10").style.display = "none";
	_("ResumeStep11").style.display = "block";
}

function back1(){
	_("ResumeStep1").style.display = "block";
	_("ResumeStep2").style.display = "none";
	_("ResumeStep3").style.display = "none";
	_("ResumeStep4").style.display = "none";
}
function back2(){
	_("ResumeStep2").style.display = "block";
	_("ResumeStep1").style.display = "none";
	_("ResumeStep3").style.display = "none";
	_("ResumeStep4").style.display = "none";
}


$(function() {
        var checked = $("input[name=ResumeSubmitY]").prop('checked');
        console.log(checked);
        if(checked) { $("#Resume").show();  } 
        else { $("Resume").hide(); }
  });
function submitForm(){
	_("Resume").method = "post";
	_("Resume").name = "Resume";
	_("Resume").action = "submit.php";
	_("Resume").submit();
}