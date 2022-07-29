//Access home js themefunctions
import {getElement,changetheme,getLocalTheme} from "./Home.js";

//Viwe resume
elements();
function elements(){
    const resumeBtn = document.querySelector(".cv_btn");
    resumeBtn.addEventListener("click",openResume);
};
function openResume(){
    window.open("https://github.com/david587/Resume/blob/main/Bar%C3%A1th%20D%C3%A1vid%20%C3%B6n%C3%A9letrajz.pdf",'_blank'); 
};