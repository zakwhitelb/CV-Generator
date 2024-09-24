var button = document.querySelectorAll('.button');

console.log(button);

button.forEach(item => {
    item.addEventListener("click",(fd) =>{
        const box = document.querySelectorAll('.box');
        box.innerHTML = "ggggggg";
    })
});