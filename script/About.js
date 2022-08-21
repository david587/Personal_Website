//Access home js themefunctions
import {getElement,changetheme,getLocalTheme} from "./Home.js";



//inner html ---------- reduce
window.addEventListener("DOMContentLoaded", function () {
   //Viwe resume
elements();
// media();
// a_myFunction(a); // Call listener function at run time
//  a.addListener(a_myFunction); // Attach listener function on state changes

//  b_myFunction(b); 
//  b.addListener(a_myFunction); 



  });

//functions
function elements(){
    const resumeBtn = document.querySelector(".cv_btn");
    resumeBtn.addEventListener("click",openResume);
};
function openResume(){
    window.open("https://github.com/david587/Resume/blob/main/Bar%C3%A1th%20D%C3%A1vid%20%C3%B6n%C3%A9letrajz.pdf",'_blank'); 
};

// function media(){
//     const line = document.getElementById("work_spn");
//     window.innerWidth<400
//     ?(line.innerHTML="-----")
//     :(line.innerHTML="--------------------------");

//     window.innerWidth>400 &&  window.innerWidth<500
//     ?(line.innerHTML="---")
//     :(line.innerHTML="--------------------------");
// };

let lista =[""]
lista.forEach(element => {
    const line = document.getElementById("work_spn");
    // var full = window.matchMedia("(max-width: 1284px)");
    let el = "-";
    let actual = window.innerWidth;
    if(actual>actual){
        lista.append(el);
    }
    console.log(lista);
    
    
});

