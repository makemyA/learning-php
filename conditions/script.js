let container2= document.getElementById("container-2");
let buttonRetour=document.getElementById("button-retour");
let buttonValider=document.getElementById("button-valider");
buttonValider.addEventListener("click",submit2);
buttonRetour.addEventListener("click",toggleHide);
function submit2(){
  /*   container2.innerHTML=""; */
    document.getElementById("form").submit();
    toggleHide();
/*     container2.classList.remove("hide"); */
}
function toggleHide(){
    
     document.getElementById("form").submit();
 
   /*  container2.classList.add("hide"); */
}

/* container2.classList.add("hide"); */ 
