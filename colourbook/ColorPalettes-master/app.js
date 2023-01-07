function copyColor(item) {
    navigator.clipboard.writeText(item.nextElementSibling.innerHTML)
    alert("Color copied!")
}

const colorsArr = [
    {
        colors: [
            "#DCCBDD",
            "#EE92C2",
            "#A5BDDA",
            "#F1A4BC",
        ]
    },
    {
        colors: [
            "#D5D1E4",
            "#B7799D",
            "#4A7CAB",
            "#585176",
        ]
    },
    {
        colors: [
            "#E0C7DD",
            "#543C69",
            "#8E7AC6",
            "#814865",
        ]
    },
    {
        colors: [
            "#3A80B7",
            "#995B95",
            "#81A5D5",
            "#C78090",
        ]
    },
    {
        colors: [
            "#6E456D",
            "#ECE6EC",
            "#B38BB7",
            "#7E7174",
        ]
    },
    {
        colors: [
            "#E7DBF5",
            "#BFCBF0",
            "#BEAADA",
            "#D4B8E2",
        ]
    }
]

function popularPalettes() {
    let popularPaletteDiv = document.getElementById("popular-palettes")

    colorsArr.map((item, index) => {popularPaletteDiv.innerHTML += 
        `<div class="col-lg-4 col-md-6 my-4">
        <div class="card border-0 w-90 border-20 shadow" >
            <div class="card-body ps-4 d-flex align-items-center justify-content-around">
                <div class="d-flex flex-column">
                    <div class="palette-color palette-color-border" style="background-color: ${item.colors[0]};" alt="" onclick="copyColor(this)"></div>
                    <small class="card-text text-center pt-2" style="font-size: 10px; color: ${item.colors[0]};">${item.colors[0]}</small>
                </div>
                <div class="d-flex flex-column">
                    <div class="palette-color ms-1 palette-color-border" style="background-color: ${item.colors[1]};" alt="" onclick="copyColor(this)"></div>
                    <small class="card-text text-center pt-2" style="font-size: 10px; color: ${item.colors[1]};">${item.colors[1]}</small>
                </div>
                <div class="d-flex flex-column">
                    <div class="palette-color ms-1 palette-color-border" style="background-color: ${item.colors[2]};" alt="" onclick="copyColor(this)"></div>
                    <small class="card-text text-center pt-2" style="font-size: 10px; color: ${item.colors[2]};">${item.colors[2]}</small>
                </div>
                <div class="d-flex flex-column">
                    <div class="palette-color ms-1 palette-color-border" style="background-color: ${item.colors[3]};" alt="" onclick="copyColor(this)"></div>
                    <small class="card-text text-center pt-2" style="font-size: 10px; color: ${item.colors[3]};">${item.colors[3]}</small>
                </div>
            </div>
        </div>
    </div>`
    })
}

popularPalettes()