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
    '#E96BA8',
    // Add more colors here...
    '#C678DD',
    '#61AFEF',
    '#98C379',
    '#E06C75',
    '#D19A66',
    '#E5C07B',
    '#3B4252',
    '#BF616A',
    '#88C0D0',
    '#D8DEE9',
    '#4C566A',
    '#BF616A',
    '#A3BE8C',
    '#EBCB8B',
    '#88C0D0',
    '#D8DEE9',
    '#5E81AC',
    '#ECEFF4',
    '#D08770',
    '#8FBCBB',
    '#5E81AC',
    '#ECEFF4',
    '#2E3440',
    '#8FBCBB',
    '#88C0D0',
    '#D8DEE9',
    '#4C566A',
    '#2E3440',
    // Add more colors here...
    '#434C5E',
    '#A3BE8C',
    '#EBCB8B',
    '#88C0D0',
    '#D8DEE9',
    '#5E81AC',
    '#ECEFF4',
    '#2E3440',
    '#8FBCBB',
    '#88C0D0',
    '#D8DEE9',
    '#4C566A',
    // Add more colors as needed...
];

const boxes = [...document.querySelectorAll(".box")];
const tooltips = [...document.querySelectorAll(".tooltip")];
const tooltip = document.createElement("span");
tooltip.classList.add("tooltip");

for (let i = 0; i < boxes.length; i++) {
    boxes[i].style.backgroundColor = colors[i % colors.length];
    boxes[i].textContent = colors[i % colors.length];

    if (i < boxes.length / 4) {
        boxes[i].style.color = "#e7e9db";
    } else {
        boxes[i].style.color = "#2f1e2e";
    }
}

boxes.forEach((box) =>
    box.addEventListener("click", function (e) {
        navigator.clipboard.writeText(e.currentTarget.textContent);
        box.appendChild(tooltip);
        box.innerText = `COPIED!`;
    })
);
