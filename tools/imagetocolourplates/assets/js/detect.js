var img = _('.pic img'),
cs = _('#cs'),
res = _('.result'),
pview = _('.preview'),
x = '', y = ''

img.addEventListener('click', function(e) {
    if (e.offsetX) {
        x = e.offsetX
        y = e.offsetY
    }
    else if (e.layerX) {
        x = e.layerX
        y = e.layerY
    }
    useCanvas(cs, img, function() {
        var p = cs.getContext('2d')
        .getImageData(x, y, 1, 1).data
        res.innerHTML = '<span>HEX: '+rgbToHex(p[0], p[1], p[2])+'</span>'+
        '<span>RGB:  rgb('+
        p[0]+','+
        p[1]+','+
        p[2]+')</span>'
    })
}, false)
img.addEventListener('mousemove', function(e) {
    if (e.offsetX) {
        x = e.offsetX
        y = e.offsetY
    }
    else if (e.layerX) {
        x = e.layerX
        y = e.layerY
    }
    useCanvas(cs, img, function() {
        var p = cs.getContext('2d')
        .getImageData(x, y, 1, 1).data
        pview.style.background = rgbToHex(p[0], p[1], p[2])
    })
}, false)

function useCanvas(el, img, callback) {
    el.width = img.width
    el.height = img.height
    el.getContext('2d')
    .drawImage(img,
        0,
        0,
        img.width,
        img.height)
    return callback()
}
function _(el) {
    return document.querySelector(el)
}
function componentToHex(c) {
    var hex = c.toString(16)
    return hex.length == 1 ? "0" + hex: hex
}
function rgbToHex(r, g, b) {
    return "#" + componentToHex(r) + componentToHex(g) + componentToHex(b)
}
