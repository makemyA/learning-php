let container2= document.getElementById("container-2");
let buttonRetour=document.getElementById("button-retour");
let buttonValider=document.getElementById("button-valider");
/* buttonValider.addEventListener("click",submitForm); */
buttonRetour.addEventListener("click",resetForm);
function submitForm(){
  /*   container2.innerHTML=""; */
    document.getElementById("form").submit();
    toggleHide();
/*     container2.classList.remove("hide"); */
}
function resetForm(){
    
     document.getElementById("form").reset();
 
   /*  container2.classList.add("hide"); */
}

/* container2.classList.add("hide"); */ 
