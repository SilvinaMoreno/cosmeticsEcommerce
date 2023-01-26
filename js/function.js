

const buttonAceptCookies = document.getElementById("cookies-accept");
const cookiesAdvice = document.getElementById("cookies-advice");
const cookiesBackground = document.getElementById("cookies-advice-background");

if(!localStorage.getItem("cookiesAccepted")){
    cookiesAdvice.classList.add("active");
    cookiesBackground.classList.add("active");
}

buttonAceptCookies.addEventListener("click", () => {
    cookiesAdvice.classList.remove("active");
    cookiesBackground.classList.remove("active");

    localStorage.setItem("cookiesAccepted",true);
    //console-console.log("cookiesAccepted");

});