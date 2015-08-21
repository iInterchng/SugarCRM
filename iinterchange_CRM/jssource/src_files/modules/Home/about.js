/*********************************************************************************
 
 
 
 
 
 
 
 
 
 
 
 
 
 *

 
 

 
 *
 
 
 
 
 ********************************************************************************/

var abouter = function(){
	return {
		display:function(){
			abouter.div = document.getElementById('abouterdiv');
			abouter.div.style.display ='';
			abouter.div.src = "index.php?module=Home&action=PopupSugar&to_pdf=true&style=" + abouter.style;
		},
		ab:function(index, style){
			if(abouter.starter == 3){
				abouter.style = style;
				abouter.display();
			}else{
				if(index == abouter.starter + 1){
					abouter.starter++;
				}else{
					abouter.starter= 0;
				}
			}

		}



	}



}();
abouter.starter = 0;
abouter.style = 'inc';
