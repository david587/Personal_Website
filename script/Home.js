//Theme
barButton();
getElement();
getLocalTheme();

//Input data
getElementMsg();
localValue();

//functions
export function getElement() {
    //elements
    const themeBtn = document.getElementById("themebtn");
    //events
    themeBtn.addEventListener("click", changetheme);
}
export function changetheme() {
    let settheme = document.body;
    settheme
        .classList
        .toggle("changetheme");

    var theme;

    if (settheme.classList.contains("changetheme")) {
        console.log("blue");
        theme = "BLUE";
    } else {
        console.log("NORMAL");
        theme = "NORMAL";
    }
    //set localstorage
    localStorage.setItem("PageTheme", JSON.stringify(theme));
};
export function getLocalTheme() {
    //get theme locale
    let getTheme = JSON.parse(localStorage.getItem("PageTheme"));
    if (getTheme === "BLUE") {
        document
            .body
            .classList
            .toggle("changetheme")
    };
}

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
}
// }
