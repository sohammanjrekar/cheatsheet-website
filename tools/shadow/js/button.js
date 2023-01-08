function changeColor(){
    let color = document.getElementById('colorInputColor').value;
    let body = document.querySelector("#box")

    body.style.backgroundColor = color;
    document.getElementById('colorInputText').value = color;
}

// let button = document.getElementById('colorButton').addEventListener('click', ()=> {
//     let container = document.getElementById('box')
//     let color = document.getElementById('colorInputColor').value;
//     document.body.style.backgroundColor = color;
//     document.getElementById('colorInputText').value = color;
// })
