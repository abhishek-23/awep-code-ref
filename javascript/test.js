var logo = document.getElementById("hplogo");

logo.style.position = "absolute";

var i = 0;
var flag = true;

setInterval(function(){
	if(flag){
		i++;
	}else{
		i--;
	}
	
	if(i === 0){
		flag = true;
	}
	
	if(i === 800){
		flag = false;
	}
	
	logo.style.left = i + "px";
	
}, 10);