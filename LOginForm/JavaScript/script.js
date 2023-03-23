let inputs = document.querySelectorAll("#txt");
let main = document.querySelector(".container");
let contain = document.querySelector(".siForm");
let clciked = false;

const change = click => {
    let clickAtr = click.getAttribute("data-num");

    inputs.forEach(input =>{
        input.style.backgroundColor = "rgba(" + 126 + "," + 130 + "," + 158 + "," + 0.747 + ")";
    });

    inputs.forEach(input => {
        if(input.getAttribute("data-num").includes(clickAtr)){
            input.style.backgroundColor = "rgba(" + 60 + "," + 63 + "," + 85 + "," + 0.527 + ")";
            input.style.backdropFilter = "blur(2px)"; 
        }
    });

    main.classList.add("blur");
    contain.classList.add("unBlur");
}

window.addEventListener("click", function(event) {
    inputs.forEach(input => {
        if(event.target == input){
            clciked = true;
        }
    });
    if(clciked === false){
        main.classList.remove("blur");
        contain.classList.remove("unBlur");
        inputs.forEach(input =>{
            input.style.backgroundColor = "rgba(" + 126 + "," + 130 + "," + 158 + "," + 0.747 + ")";
        });
    }
    clciked = false;
});