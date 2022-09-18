
//Theme
barButton();
getElement();
getLocalTheme();
// modaltheme();
//Input data
getElementMsg();
localValue();
// label();


//functions
export function getElement() {
    //elements
    const themeBtn = document.getElementById("themebtn");
    const Modalbtn = document.getElementById("modal_btn");
    
    //events
    themeBtn.addEventListener("click", changetheme);
    Modalbtn.addEventListener("click", change);
};

export function changetheme() {
    let settheme = document.body;
    settheme
        .classList
        .toggle("changetheme");
    var theme;

    if (settheme.classList.contains("changetheme")) {
        console.log("BLUE");
        theme = "BLUE";
    }
    else {
        console.log("NORMAL");
        theme = "NORMAL";
    }
    //set localstorage
    localStorage.setItem("PageTheme", JSON.stringify(theme));
};

    function change(){
        let getTheme = JSON.parse(localStorage.getItem("PageTheme"));
        const Modalbtn = document.getElementById("modal_btn");
        if(getTheme==="BLUE"){
            var theme="NORMAL";
            var modal;
            document.body.classList.toggle("changetheme");
            Modalbtn.classList.remove("m_btn");
            Modalbtn.classList.add("modalbtn");
            if (Modalbtn.classList.contains("modalbtn")){
                modal ="blue"
            } 
            else{
                modal ="normal"
            }
            localStorage.setItem("modaltheme", JSON.stringify(modal));
            localStorage.setItem("PageTheme", JSON.stringify(theme)); 
            
        }
        else if(getTheme==="NORMAL"){
            var theme="BLUE";
            document.body.classList.toggle("changetheme");
            Modalbtn.classList.remove("modalbtn");
            Modalbtn.classList.add("m_btn");
            if (Modalbtn.classList.contains("m_btn")){
                modal ="normal"
            } 
            else{
                modal ="blue"
            }
            localStorage.setItem("modaltheme", JSON.stringify(modal));
            localStorage.setItem("PageTheme", JSON.stringify(theme));
            }
        // if(document.body.classList.contains("changetheme")){
        //     Modalbtn.classList.remove("m_btn");
        //     Modalbtn.classList.add("modalbtn");
        // }
    };
export function getLocalTheme() {
    const Modalbtn = document.getElementById("modal_btn");
    //get theme locale
    let getTheme = JSON.parse(localStorage.getItem("PageTheme"));
    let getmodal = JSON.parse(localStorage.getItem("modaltheme"));
    if (getTheme === "BLUE" ) {
        document
            .body
            .classList
            .toggle("changetheme");
        }
    else if(getmodal ==="blue"){
        Modalbtn.classList.add("modalbtn");
            Modalbtn.classList.remove("m_btn");
    }
       
};

// -------------------------------------------------------------

//Get the messages from user
function getElementMsg() {
    const textBtn = document.getElementById("send");
    //this if needs cause other html pages will drop error beacuse import
    if (document.body.contains(textBtn)) {
        textBtn.addEventListener("click", takeMsg);
    }
};
function takeMsg() {
    const textArea = document.querySelector("#input");
    const InputValue = textArea.value;
    const value = {
        InputValue
    };
    let items = localStorage.getItem("InputValue")
        ? //->null cause the first value  will not be there
        JSON.parse(localStorage.getItem("InputValue"))
        : [];
    items.push(value);
    localStorage.setItem("InputValue", JSON.stringify(items));
};

function localValue() {
    //get input value from local
    let getInput = JSON.parse(localStorage.getItem("InputValue"));
    if (getInput.length > 5) {
        localStorage.removeItem("InputValue");
    }
};

function barButton() {
    // if(document.classList.contains("bar")){
    const barbtn = document.getElementById("bar");
    if (document.body.classList.contains("")) {}
    const x = document.getElementById("x");
    barbtn.addEventListener("click", openmodal)
    x.addEventListener("click", closeModal);

    function openmodal() {
        const modal = document.getElementsByClassName("modal");
        // const body = document.getElementsByClassName("body");
        modal[0].classList.toggle("open-modal");
        // body[0].classList.toggle("blur");
        // modal[0].classList.add("remblur");
    }
    function closeModal() {
        const modal = document.getElementsByClassName("modal");
        modal[0]
            .classList
            .toggle("open-modal");
    }
    };

// function label(){
//     document.querySelectorAll(".text-input").forEach((Element)=>{
//         Element.addEventListener("blur", (event)=>{
//             if(event.target.value= ""){
//                 event.target.nextElementSibling.classList.add("filled"); 
//             }
//             else{
//                 event.target.nextElementSibling.classList.remove("filled");
//             }
//         })
//     })
//     };