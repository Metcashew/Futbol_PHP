const temBlack = () =>{
    document.querySelector("body").setAttribute("data-bs-theme","dark");
}
const temLight = () =>{
    document.querySelector("body").setAttribute("data-bs-theme","light");
}
const cambiarTema = () => {
    document.querySelector("body").getAttribute("data-bs-theme") === "light" ? temBlack() : temLight();
}