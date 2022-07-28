//localStorage.removeItem("color");
const themeBtn = document.getElementById("themebtn");
//events
themeBtn.addEventListener("click",changetheme);
//functions
function changetheme(){
    let settheme = document.body;
    settheme.classList.toggle("changetheme");
   
    var theme;

    if(settheme.classList.contains("changetheme")){
        console.log("blue");
        theme="BLUE";
    }
    else{
        console.log("NORMAL");
        theme = "NORMAL";
    }
    //localstorage
    localStorage.setItem("PageTheme", JSON.stringify(theme)); 
};

let getTheme = JSON.parse(localStorage.getItem("PageTheme"));

if(getTheme === "BLUE"){
    document.body.classList.toggle("changetheme")
}

    





