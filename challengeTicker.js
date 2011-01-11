collidr=4
function suprcollidr(){
	if (collidr==0){
		collidr=4;
		window.location="javascript:var%20s%20=%20document.createElement('script');s.type='text/javascript';document.body.appendChild(s);s.src='http://erkie.github.com/asteroids.min.js';void(0);";
	}
	else{
		collidr=collidr-1;
	}
}