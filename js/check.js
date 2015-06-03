$( document ).ready(function() {
	var $result_container = $('#result');
	var result = [];
	if(is.windows()){
		result.push('OS : Windows');
	}
	if(is.ios()){
		result.push('OS : iOS');
	}
	if(is.android()){
		result.push('OS : android');
	}
	if(is.blackberry()){
		result.push('OS : blackberry');
	}
	if(is.mac()){
		result.push('OS : mac');
	}
	if(is.linux()){
		result.push('OS : linux');
	}
	if(is.touchDevice()){
		result.push('touch device');
	}
	if(is.mobile()){
		result.push('Your device is Mobile');
	}
	if(is.tablet()){
		result.push('Your device is tablet');
	}
	if(is.desktop()){
		result.push('Your device is desktop');
	}
	if(is.ipad()){
		result.push('Your device is ipad');
	}
	if(is.ipad()){
		result.push('Your device is iphone');
	}
	if(is.ipad()){
		result.push('Your device is ipod');
	}
	if(is.chrome()){
		result.push('Browser is chrome');
	}
	if(is.firefox()){
		result.push('Browser is firefox');
	}
	if(is.opera()){
		result.push('Browser is opera');
	}
	if(is.safari()){
		result.push('Browser is safari');
	}
	$result_container.append('<ul>');
	for(var index = 0; index< result.length; index++){
		$result_container.append("<li>" + result[index] + "</li>");
	}
	$result_container.append('</ul>');
});