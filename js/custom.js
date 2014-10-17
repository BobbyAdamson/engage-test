function outputUpdate(vol) {
		document.querySelector('#amount').value = vol;
	};
$(document).ready(function(){
	window.ParsleyValidator
	.addValidator('zip', function (value, requirement) {
		 var isValidZip = /(^\d{5}$)|(^\d{5}-\d{4}$)/.test(value);
	     return isValidZip;
	}, 32);
	window.ParsleyValidator.addValidator('state', function (value, requirement) {
		var isValidState = /^(?:A[KLRZ]|C[AOT]|D[CE]|FL|GA|HI|I[ADLN]|K[SY]|LA|M[ADEINOST]|N[CDEHJMVY]|O[HKR]|PA|RI|S[CD]|T[NX]|UT|V[AT]|W[AIVY])*$/.test(value);
		return isValidState;
		console.log(isValidState);
	}, 32);
	
	$('#company').change(function(){
		if($(this).prop('checked')){
			console.log('test2');
			$('#thirdparties').removeAttr('disabled');
		} else {
			console.log('test3');
			$('#thirdparties').addAttr('disabled');
		}
	});
	$('#termslink').on('click', function(){
		$('#overlay').fadeIn();
	});
	$('#overlay, #closewindow').on('click', function(){
			$('#overlay').fadeOut();
		});
});
