var element ;
var tapa;
window.onload = ()=>{
	btn_des = document.querySelector(".despliege_mini");
    btn_des.addEventListener("click",clicks);
     tapa = document.querySelector(".capa");
    tapa.addEventListener("click",clicks_dos);
     document.getElementById("cog").addEventListener("click",config);
    document.getElementById("modal").addEventListener("click",configcerrar);
    document.getElementsByClassName("cont_modal").item(0).addEventListener("click",changecerrar);;

}

var cierre = true;


function config (){
		document.getElementById('modal').style.display="flex";
     
}

function configcerrar (){
  if(cierre){
	document.getElementById('modal').style.display="none"
   }
   cierre = true;
}

function changecerrar(){
   cierre = false;
}




window.onresize = (e)=>{

	if(e.currentTarget.innerWidth > 700){
     move_trans(".menu","translateX(0%)");
      tapa.style.display="none";
	}
	
}

function move_trans(x,y){
  document.querySelector(x).style.transform = y;
}

function clicks(){

    move_trans(".hr_1","translateY(0%) rotate(45deg)");
    move_trans(".hr_2","rotate(45deg)");
    move_trans(".hr_3","translateY(0%) rotate(-45deg)");
   move_trans(".menu","translateX(0%)");
    btn_des.removeEventListener("click",clicks);
    btn_des.addEventListener("click",clicks_dos);

    tapa.style.display="block";

} 



function clicks_dos(){

	move_trans(".hr_1","translateY(-180%) rotate(0deg)");
    move_trans(".hr_2","rotate(0deg)");
    move_trans(".hr_3","translateY(180%) rotate(0deg)");
    move_trans(".menu","translateX(-100%)");

    btn_des.removeEventListener("click",clicks_dos);
    btn_des.addEventListener("click",clicks);

    tapa.style.display="none";

}





