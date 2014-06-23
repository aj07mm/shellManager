document.addEventListener("DOMContentLoaded", function(){
	script_tags = document.getElementsByClassName('script-tag');	
	for(var i=0; i<=script_tags.length-1;i++ ){
		script_tags[i].addEventListener('click',function(){
			document.getElementById('script-content').innerHTML = 'foo';
		});
	}	
});