const colors = [
    '#2F1E2E',
    '#41323F',
    '#4F424C',
    '#776E71',
    '#8D8687',
    '#A39E9B',
    '#B9B6B0',
    '#E7E9DB',
    '#EF6155',
    '#F99B15',
    '#FEC418',
    '#48B685',
    '#5BC4BF',
    '#06B6EF',
    '#815BA4',
    '#E96BA8'
]

const boxes = [...document.querySelectorAll(".box")];
const tooltips = [...document.querySelectorAll(".tooltip")];
const tooltip = document.createElement("span");
tooltip.classList.add("tooltip")

for (let i = 0; i < boxes.length; i++) {
    boxes[i].style.backgroundColor = colors[i];
    boxes[i].textContent = colors[i];

    if (i < boxes.length / 4) {
        boxes[i].style.color = "#e7e9db"
    }
    else {
        boxes[i].style.color = "#2f1e2e"
    }

}

boxes.forEach(box =>
    box.addEventListener("click", function (e) {
        navigator.clipboard.writeText(e.currentTarget.textContent);
        box.appendChild(tooltip);
        tooltip.textContent = `COPIED!`;
    }))