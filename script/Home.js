//Theme
getElement();
getLocalTheme();

//Input data
getElementMsg();
localValue();


//functions
 export function getElement(){
    //elements
    const themeBtn = document.getElementById("themebtn");
    //events
    themeBtn.addEventListener("click",changetheme);
    }
 export function changetheme(){
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
    //set localstorage
    localStorage.setItem("PageTheme", JSON.stringify(theme)); 
    };
 export function getLocalTheme(){
    //get theme locale
    let getTheme = JSON.parse(localStorage.getItem("PageTheme"));
    if(getTheme === "BLUE"){
        document.body.classList.toggle("changetheme")
    };
}

//-------------------------------------------------------------


//Get the messages from user
function getElementMsg(){
const textBtn = document.getElementById("send");
textBtn.addEventListener("click",takeMsg);
};
function takeMsg(){
    const textArea = document.querySelector("#input");
    const InputValue=textArea.value;
    const value = {InputValue}; 
    let items = localStorage.getItem("InputValue")? //->null cause the first value  will not be there
    JSON.parse(localStorage.getItem("InputValue"))
    : [];
    items.push(value);
    localStorage.setItem("InputValue",JSON.stringify(items)); 
};

function localValue(){
//get input value from local
let getInput=JSON.parse(localStorage.getItem("InputValue"));
if(getInput.length>5){
    localStorage.removeItem("InputValue");
}
};








    





