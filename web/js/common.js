function toastalert(option){

	if(option.color==undefined){
		option.color='green';
	}
	
	$().toastmessage('showToast',{
		text: option.message,
	    sticky: false,
	    position : option.color,
		type: 'notice'
	});
	
}