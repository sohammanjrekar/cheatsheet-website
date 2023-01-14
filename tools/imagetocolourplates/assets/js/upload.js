const file = document.querySelector('#file')
file.addEventListener("change", function() {
    const r = new FileReader()
    r.addEventListener("load", () => {
        document.querySelector("#image").src = r.result
    })
    r.readAsDataURL(this.files[0])
})
