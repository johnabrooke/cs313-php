function clicked () {
    alert("Clicked!");
}

function changeColor () {
    const backgroundColor = document.querySelector("#one");
    const color = document.querySelector("#color").value;
    backgroundColor.style.backgroundColor = color;
}