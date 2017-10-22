
var btn_des;
var tapa;
var array_item = [];
window.onload = ()=>{

	btn_des = document.querySelector(".despliege_mini");
    btn_des.addEventListener("click",clicks);
    tapa = document.querySelector(".tapa_nav");
    tapa.addEventListener("click",clicks_dos);
   
    var items = document.querySelectorAll('.class_form');

    for (var i = 0; i < items.length; i++) {
    	array_item.push(items[i]);
    }

    var items = document.querySelectorAll('nav ul li');

    for (var i = 0; i < items.length; i++) {
    	items[i].addEventListener("click",cambio,false);
    }

}

function move_trans(x,y){
  document.querySelector(x).style.transform = y;
}

function clicks(){

    move_trans(".hr_1","translateY(3px) rotate(45deg)");
    move_trans(".hr_2","rotate(45deg)");
    move_trans(".hr_3","translateY(-3px) rotate(-45deg)");
    move_trans(".nav_mini","translateX(0%)");

    btn_des.removeEventListener("click",clicks);
    btn_des.addEventListener("click",clicks_dos);

    tapa.style.display="block";

} 



function clicks_dos(){

	move_trans(".hr_1","translateY(-180%) rotate(0deg)");
    move_trans(".hr_2","rotate(0deg)");
    move_trans(".hr_3","translateY(180%) rotate(0deg)");
    move_trans(".nav_mini","translateX(-100%)");

    btn_des.removeEventListener("click",clicks_dos);
    btn_des.addEventListener("click",clicks);

    tapa.style.display="none";

}

var index = 0;

function cambio(){
	
     var data = this.dataset.index;
	if(index != data){
		array_item[index].style.display="none";
       array_item[this.dataset.index].style.display="block";
	   array_item[index].style.transform="translateX(-100%)";
       array_item[this.dataset.index].style.transform="translateX(0%)";
       index = data;
	}
  
  
}