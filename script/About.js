//Access home js themefunctions
import {getElement,changetheme,getLocalTheme} from "./Home.js";
const theme = new theme();
theme.getElement();
theme.changetheme();
theme.getLocalTheme();

//Viwe resume
elements();
function elements(){
    const resumeBtn = document.querySelector(".cv_btn");
    resumeBtn.addEventListener("click",openResume);
};
function openResume(){
    location.href = "https://github.com/david587/Resume/blob/main/Bar%C3%A1th%20D%C3%A1vid%20%C3%B6n%C3%A9letrajz.pdf";
};