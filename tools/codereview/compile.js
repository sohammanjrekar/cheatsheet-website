//HTML Code Textarea
var _html = document.getElementById('html-editor')
//CSS Code Textarea
var _css = document.getElementById('css-editor')
//JS Code Textarea
var _js = document.getElementById('js-editor')
// Preview Iframe
var preview_panel = document.getElementById('preview-panel').contentWindow.document
// Run or Execute button
var _compile = document.getElementById('execute_code')


// Compiling and Execute Code
_compile.addEventListener('click', function(){
    preview_panel.open()
    preview_panel.writeln(`<style>${_css.value}</style>`)
    preview_panel.writeln(`${_html.value}`)
    preview_panel.writeln(`<script>${_js.value}</script>`)

    preview_panel.close()
})