/**
 * Class representing a text component
 */
class SimplegenTextComponent {
  /**
   * Create a SimplegenTextComponent
   * @param {Sting} name Component name
   * @param {Sting} text Component text
   * @param {String} color Text color in hex
   * @param {String} fontFamily Text font family
   * @param {String} fontWeight Text font weight
   * @param {Number} fontSize Text font size
   * @param {Number} letterSpacing Letter Spacing
   */
  constructor(
    name,
    text,
    color,
    fontFamily,
    fontWeight,
    fontSize,
    letterSpacing = 0
  ) {
    this.name = name;
    this.text = text;
    this.color = color;
    this.fontFamily = fontFamily;
    this.fontWeight = fontWeight;
    this.fontSize = fontSize;
    this.letterSpacing = letterSpacing;
  }

  init() {
    $('input[data-component="' + this.name + '"][data-param="text"]').val(
      this.text
    );
    $('input[data-component="' + this.name + '"][data-param="color"]').val(
      this.color
    );
    $(
      'select[data-component="' + this.name + '"][data-param="fontFamily"]'
    ).val(this.fontFamily);
    setSelectFont(
      $(
        'select[data-component="' + this.name + '"][data-param="fontFamily"]'
      )[0]
    );
    $(
      'input[data-component="' + this.name + '"][data-param="font_weight"]'
    ).bootstrapToggle(this.fontWeight == "bold" ? "on" : "off");
    var fontSize_input = $(
      'input[data-component="' + this.name + '"][data-param="fontSize"]'
    );
    fontSize_input.val(this.fontSize);
    fontSize_input
      .siblings('.input-group-append[data-display="value"]')
      .children("span")
      .html(this.fontSize);
    var letterSpacing_input = $(
      'input[data-component="' + this.name + '"][data-param="letter_space"]'
    );
    letterSpacing_input.val(this.letterSpacing);
    letterSpacing_input
      .siblings('.input-group-append[data-display="value"]')
      .children("span")
      .html(this.letterSpacing);
  }

  /**
   * Sync component form object
   * @param {Object} object Object with properties to sync
   */
  sync(object) {
    this.text = object.text;
    this.color = object.color;
    this.fontFamily = object.fontFamily;
    this.fontWeight = object.fontWeight;
    this.fontSize = object.fontSize;
    this.letterSpacing = object.letterSpacing;
  }

  /**
   * Get text with the letter spacing
   * @returns {String} Text with letter spacing
   */
  getText() {
    return this.text
      .split("")
      .join(String.fromCharCode(8202).repeat(this.letterSpacing));
  }

  /**
   * Get CSS font property
   * @returns {String} CSS font property
   */
  getFont() {
    return this.fontWeight + " " + this.fontSize + "px " + this.fontFamily;
  }
}

/* DEFAULT PARAMETERS */
var canvas_logo = document.getElementById("logo-canvas");
canvas_logo.width = 5;
canvas_logo.height = 5;
var ctx_logo = canvas_logo.getContext("2d");

var canvas_fav = document.getElementById("fav-canvas");
canvas_fav.width = 5;
canvas_fav.height = 5;
var ctx_fav = canvas_fav.getContext("2d");

let icon = new SimplegenTextComponent(
  "icon",
  window
    .getComputedStyle(document.querySelector("#icp-component i"), ":before")
    .content.replace(/['"]/g, ""),
  "#000000",
  window.getComputedStyle(
    document.querySelector("#icp-component i")
  ).fontFamily,
  window.getComputedStyle(
    document.querySelector("#icp-component i")
  ).fontWeight,
  48
);
let main = new SimplegenTextComponent(
  "main",
  "",
  "#000000",
  "Arial",
  "bold",
  48
);
let accent = new SimplegenTextComponent(
  "accent",
  "",
  "#cccccc",
  "Arial",
  "bold",
  48
);

var components = {
  icon: icon,
  main: main,
  accent: accent,
};

const padding = {
  width: 7,
  height: 7,
  internal:{
    x: 3,
    y: 5
  }
};
Object.freeze(padding);

var global = {
  offset: {
    size: 0,
    color: "#e2e2e2",
  },
  layout: "HORIZONTAL",
  shapes: true,
};

/* SETTINGS */
$(document).ready(function () {
  $('.widget[role="md2html"]').each(function (_index, widget) {
    var request = new XMLHttpRequest();
    request.open("GET", $(widget).attr("data-widget"), true);
    request.send(null);
    request.onreadystatechange = function () {
      if (request.readyState === 4 && request.status === 200) {
        var converter = new showdown.Converter();
        $(widget).html(converter.makeHtml(request.responseText));
      }
    };
  });

  $("#icp").iconpicker({});

  bsCustomFileInput.init();

  var fonts = [
    "Arial",
    "Montez",
    "Lobster",
    "Josefin Sans",
    "Shadows Into Light",
    "Pacifico",
    "Amatic SC",
    "Orbitron",
    "Rokkitt",
    "Righteous",
    "Dancing Script",
    "Bangers",
    "Chewy",
    "Sigmar One",
    "Architects Daughter",
    "Abril Fatface",
    "Covered By Your Grace",
    "Kaushan Script",
    "Gloria Hallelujah",
    "Satisfy",
    "Lobster Two",
    "Comfortaa",
    "Cinzel",
    "Courgette",
    "Annie Use Your Telescope",
    "Baloo",
    "Bowlby One SC",
    "Bungee Inline",
    "Cabin Sketch",
    "Caveat",
    "Contrail One",
    "Damion",
    "Economica",
    "Fascinate Inline",
    "Faster One",
    "Fredericka the Great",
    "Gabriela",
    "Just Another Hand",
    "Kodchasan",
    "Love Ya Like A Sister",
    "Megrim",
    "Monoton",
    "Mouse Memoirs",
    "Podkova",
    "Pompiere",
    "Quicksand",
    "Reenie Beanie",
    "Rokkitt",
    "Six Caps",
    "Source Sans Pro",
    "Special Elite",
    "Spicy Rice",
    "VT323",
    "Wire One",
  ];
  for (const font of fonts) {
    var opt = document.createElement("option");
    opt.value = opt.innerHTML = font;
    opt.style.fontFamily = font;
    document.getElementById("main_font-select").add(opt.cloneNode(true));
    document.getElementById("accent_font-select").add(opt.cloneNode(true));
  }

  refreshGUI();
  render();
});

/* LISTENERS */
$("#icp").on("iconpickerSelected", function (_e) {
  $("#icp-component i").attr("style", "").html("");
  icon.text = window
    .getComputedStyle(document.querySelector("#icp-component i"), ":before")
    .content.replace(/['"]/g, "");
  icon.fontFamily = window.getComputedStyle(
    document.querySelector("#icp-component i")
  ).fontFamily;
  icon.fontWeight = window.getComputedStyle(
    document.querySelector("#icp-component i")
  ).fontWeight;
  render();
});

$(".collapsible").on("hidden.bs.collapse", function () {
  $(
    'button[data-toggle="collapse"][data-target="#' + $(this).attr("id") + '"]'
  ).html('<i class="fas fa-chevron-down"></i>');
});

$(".collapsible").on("shown.bs.collapse", function () {
  $(
    'button[data-toggle="collapse"][data-target="#' + $(this).attr("id") + '"]'
  ).html('<i class="fas fa-chevron-up"></i>');
});

$('input[type="text"][data-param="text"]').on("input", function (_e) {
  components[$(this).attr("data-component")].text = $(this).val();
  render();
});

$('input[type="range"][data-param="offsetSize"]').on("input", function (_e) {
  global.offset.size = parseFloat($(this).val());
  $(this)
    .siblings('.input-group-append[data-display="value"]')
    .children("span")
    .html(global.offset.size.toFixed(1));
  render();
});

$("#compliment_color-btn").on("click", function () {
  accent.color = hexToComplimentary(main.color);
  accent.init();
  render();
});

$('input[data-toggle="toggle"][data-param="layout"]').on(
  "change",
  function (_e) {
    if ($(this).prop("checked")) {
      global.layout = "HORIZONTAL";
      accent.fontSize = 48;
    } else {
      global.layout = "VERTICAL";
      accent.fontSize = 12;
    }
    refreshGUI(["layout"]);
    render();
  }
);

$('input[data-toggle="toggle"][data-param="font_weight"]').on(
  "change",
  function (_e) {
    components[$(this).attr("data-component")].fontWeight = $(this).prop(
      "checked"
    )
      ? "bold"
      : "normal";
    render();
  }
);

$('input[data-toggle="toggle"][data-param="shapes"]').on(
  "change",
  function (_e) {
    global.shapes = $(this).prop("checked");
    render();
  }
);

$('input[type="color"][data-param="color"]').on("input", function (_e) {
  components[$(this).attr("data-component")].color = $(this).val();
  render();
});

$('input[type="color"][data-param="offsetColor"]').on("input", function (_e) {
  global.offset.color = $(this).val();
  render();
});

$('input[type="range"][data-param="fontSize"]').on("input", function (_e) {
  components[$(this).attr("data-component")].fontSize = parseInt($(this).val());
  $(this)
    .siblings('.input-group-append[data-display="value"]')
    .children("span")
    .html($(this).val());
  render();
});

$('input[type="range"][data-param="letter_space"]').on("input", function (_e) {
  components[$(this).attr("data-component")].letterSpacing = parseInt(
    $(this).val()
  );
  $(this)
    .siblings('.input-group-append[data-display="value"]')
    .children("span")
    .html($(this).val());
  render();
});

$('select[data-param="fontFamily"]').on("input", function (_e) {
  components[$(this).attr("data-component")].fontFamily = $(this).val();
  setSelectFont($(this)[0]);
  render();
});

$("#fav_download-btn").on("click", function (_e) {
  exportCanva($(this)[0], canvas_fav, "favicon", renderFav);
});

$("#logo_download-btn").on("click", function (_e) {
  exportCanva($(this)[0], canvas_logo, "logo", renderLogo);
});

$("#conf_download-btn").on("click", function (_e) {
  var conf = {
    version: "v1.0.0",
    components: components,
    global: global,
  };
  $(this).attr(
    "href",
    "data:application/json;charset=utf-8," +
      encodeURIComponent(JSON.stringify(conf))
  );
});

$("#conf_upload-fs").on("change", function (e) {
  var fileSelector = $(this);
  var reader = new FileReader();
  reader.onload = function (event) {
    try {
      var conf = JSON.parse(event.target.result);
      if (conf.version == "v1.0.0") {
        icon.sync(conf.components.icon);
        main.sync(conf.components.main);
        accent.sync(conf.components.accent);
        global.offset.size = conf.global.offset.size;
        global.offset.color = conf.global.offset.color;
        global.layout = conf.global.layout;
        global.shapes = conf.global.shapes;
      } else {
        throw new DOMException("Version not supported", "VersionError");
      }

      $(fileSelector).addClass("is-valid").removeClass("is-invalid");
      $(fileSelector).parent().children(".feedback").remove();
      $(fileSelector)
        .parent()
        .append(
          $("<div></div>")
            .addClass("feedback valid-feedback")
            .html("Nice! We load the config.")
        );
      refreshGUI();
    } catch (error) {
      var message;
      if (error.name == "VersionError") {
        message = "Ouups! File version not supported.";
      } else {
        message = "Ouups! We can't parse the config.";
      }

      $(fileSelector).addClass("is-invalid").removeClass("is-valid");
      $(fileSelector).parent().children(".feedback").remove();
      $(fileSelector)
        .parent()
        .append(
          $("<div></div>").addClass("feedback invalid-feedback").html(message)
        );
    }
    render();
  };
  reader.readAsText(e.target.files[0]);
});

/* FUNCTIONS */
/**
 * Set the selected font family to the selector
 * @param {HTMLSelectElement} select : HTML select element to change font family
 */
function setSelectFont(select) {
  if (select) {
    select.style.fontFamily = select.value;
  }
}

/**
 * Refresh GUI data from JS objects
 * @param {Array} ignore : Components to not refresh
 */
function refreshGUI(ignore = []) {
  ignore = ignore.map((component) => {
    return component.toLowerCase();
  });
  // Layout
  if (!ignore.includes("layout")) {
    var layout_toggle = $('input[data-toggle="toggle"][data-param="layout"]');
    switch (global.layout.toUpperCase()) {
      case "HORIZONTAL":
        layout_toggle.bootstrapToggle("on");
        break;
      case "VERTICAL":
        layout_toggle.bootstrapToggle("off");
        break;
      default:
        global.layout = "HORIZONTAL";
        layout_toggle.bootstrapToggle("on");
        break;
    }
  }

  // Shapes
  if (!ignore.includes("shapes")) {
    var shapes_toggle = $('input[data-toggle="toggle"][data-param="shapes"]');
    global.shapes
      ? shapes_toggle.bootstrapToggle("on")
      : shapes_toggle.bootstrapToggle("off");
  }

  // Offset
  if (!ignore.includes("offset")) {
    var offsetSize_input = $(
      'input[data-component="global"][data-param="offsetSize"]'
    );
    offsetSize_input.val(global.offset.size);
    offsetSize_input
      .siblings('.input-group-append[data-display="value"]')
      .children("span")
      .html(global.offset.size.toFixed(1));
    $('input[data-component="global"][data-param="offsetColor"]').val(
      global.offset.color
    );
  }

  // Components
  if (!ignore.includes("icon")) {
    icon.init();
    $("#icp-component").children("i").remove();
    $("#icp-component").append(
      $("<i></i>")
        .attr(
          "style",
          "font-style: normal; font-weight: " +
            icon.fontWeight +
            "; font-family: " +
            icon.fontFamily
        )
        .html(icon.text)
    );
  }
  if (!ignore.includes("main")) {
    main.init();
  }
  if (!ignore.includes("accent")) {
    accent.init();
  }
}

/**
 * Render favicon and logo canvas
 */
function render() {
  document.fonts.ready.then((_) => {
    renderFav(ctx_fav, canvas_fav);
    renderLogo(ctx_logo, canvas_logo);
  });
}

/**
 * Render favicon
 * @param {CanvasRenderingContext2D} ctx : Context for drawing favicon
 * @param {HTMLCanvasElement} canvas : Painting canvas element
 */
function renderFav(ctx, canvas) {
  ctx.font = icon.getFont();
  canvas.width = ctx.measureText(icon.text).width + 2 * padding.width;
  canvas.height = icon.fontSize + 2 * padding.height;
  ctx.textBaseline = "middle";
  ctx.font = icon.getFont();
  ctx.fillStyle = icon.color;
  ctx.fillText(icon.text, padding.width, canvas.height / 2);
}

/**
 * Render logo
 * @param {CanvasRenderingContext2D} ctx : Context for drawing logo
 * @param {HTMLCanvasElement} canvas : Painting canvas element
 */
function renderLogo(ctx, canvas) {
  if (global.layout.toUpperCase() == "HORIZONTAL") {
    renderLogoHorizontal(ctx, canvas);
  } else {
    renderLogoVertical(ctx, canvas);
  }
}

/**
 * Render Logo in horizontal layout
 * @param {CanvasRenderingContext2D} ctx : Context for drawing logo
 * @param {HTMLCanvasElement} canvas : Painting canvas element
 */
function renderLogoHorizontal(ctx, canvas) {
  ctx.font = icon.getFont();
  var icon_w = ctx.measureText(icon.text).width;

  ctx.font = main.getFont();
  var main_w = ctx.measureText(main.getText()).width;

  ctx.font = accent.getFont();
  var accent_w = ctx.measureText(accent.getText()).width;

  var max_h = Math.max(icon.fontSize, main.fontSize, accent.fontSize);
  var icon_start = padding.width;
  var main_start =
    icon_start + icon_w + (main.text != "" ? padding.internal.x : 0);
  var accent_start =
    main_start +
    main_w +
    (accent.text != "" ? padding.internal.x : 0) +
    (accent.text != "" && global.shapes ? 2 * padding.internal.x : 0);

  canvas.width =
    icon_w +
    (main.text != "" ? padding.internal.x : 0) +
    main_w +
    (accent.text != "" ? padding.internal.x : 0) +
    (accent.text != "" && global.shapes ? 4 * padding.internal.x : 0) +
    accent_w +
    2 * padding.width;
  canvas.height =
    max_h +
    (accent.text != "" && global.shapes ? 2 * padding.internal.y : 0) +
    2 * padding.height;

  var baseline = canvas.height / 2;
  ctx.textBaseline = "middle";

  // Offset drawing
  if (global.offset.size != 0) {
    ctx.font = icon.getFont();
    ctx.fillStyle = global.offset.color;
    ctx.fillText(
      icon.text,
      icon_start + global.offset.size,
      baseline + global.offset.size
    );

    ctx.font = main.getFont();
    ctx.fillStyle = global.offset.color;
    ctx.fillText(
      main.getText(),
      main_start + global.offset.size,
      baseline + global.offset.size
    );

    if (!global.shapes) {
      ctx.font = accent.getFont();
      ctx.fillStyle = global.offset.color;
      ctx.fillText(
        accent.getText(),
        accent_start + global.offset.size,
        baseline + global.offset.size
      );
    }
  }

  // Shape Drawing
  if (accent.text != "" && global.shapes) {
    ctx.strokeStyle = main.color;
    ctx.fillStyle = main.color;
    var pos = new Object();
    pos.x = accent_start - 2 * padding.internal.x;
    pos.y = padding.height;
    var dim = new Object();
    dim.width = accent_w + 4 * padding.internal.x;
    dim.height = canvas.height - 2 * padding.height;
    roundRect(ctx, pos, dim, 5, true, true);
  }

  // Text drawing
  ctx.font = icon.getFont();
  ctx.fillStyle = icon.color;
  ctx.fillText(icon.text, icon_start, baseline);

  ctx.font = main.getFont();
  ctx.fillStyle = main.color;
  ctx.fillText(main.getText(), main_start, baseline);

  ctx.font = accent.getFont();
  ctx.fillStyle = accent.color;
  ctx.fillText(accent.getText(), accent_start, baseline);
}

/**
 * Render Logo in vertical layout
 * @param {CanvasRenderingContext2D} ctx : Context for drawing logo
 * @param {HTMLCanvasElement} canvas : Painting canvas element
 */
function renderLogoVertical(ctx, canvas) {
  ctx.font = icon.getFont();
  var icon_w = ctx.measureText(icon.text).width;

  ctx.font = main.getFont();
  var main_w = ctx.measureText(main.getText()).width;

  ctx.font = accent.getFont();
  var accent_w = ctx.measureText(accent.getText()).width;

  var max_w = Math.max(icon_w, main_w, accent_w);
  var center = (max_w + 2 * padding.width) / 2;

  var icon_start = padding.height + icon.fontSize / 2;
  var main_start =
    icon_start + icon.fontSize / 2 + padding.internal.y + main.fontSize / 2;
  var accent_start =
    main_start + main.fontSize / 2 + padding.internal.y + accent.fontSize / 2;

  canvas.width = max_w + 2 * padding.width;
  canvas.height =
    icon.fontSize +
    padding.internal.y +
    main.fontSize +
    padding.internal.y +
    accent.fontSize +
    2 * padding.height;

  ctx.textAlign = "center";
  ctx.textBaseline = "middle";

  // Shape drawing
  if (accent.text != "" && global.shapes) {
    ctx.strokeStyle = main.color;
    ctx.moveTo(
      center - main_w / 2,
      main_start + main.fontSize / 2 + padding.internal.y / 2
    );
    ctx.lineTo(
      center + main_w / 2,
      main_start + main.fontSize / 2 + padding.internal.y / 2
    );
    ctx.lineWidth = 2;
    ctx.stroke();
  }

  // Offset Drawing
  if (global.offset.size != 0) {
    ctx.font = icon.getFont();
    ctx.fillStyle = global.offset.color;
    ctx.fillText(
      icon.text,
      center + global.offset.size,
      icon_start + global.offset.size
    );

    ctx.font = main.getFont();
    ctx.fillStyle = global.offset.color;
    ctx.fillText(
      main.getText(),
      center + global.offset.size,
      main_start + global.offset.size
    );

    ctx.font = accent.getFont();
    ctx.fillStyle = global.offset.color;
    ctx.fillText(
      accent.getText(),
      center + global.offset.size,
      accent_start + global.offset.size
    );
  }

  // Text Drawing
  ctx.font = icon.getFont();
  ctx.fillStyle = icon.color;
  ctx.fillText(icon.text, center, icon_start);

  ctx.font = main.getFont();
  ctx.fillStyle = main.color;
  ctx.fillText(main.getText(), center, main_start);

  ctx.font = accent.getFont();
  ctx.fillStyle = accent.color;
  ctx.fillText(accent.getText(), center, accent_start);
}

/**
 * Draws a rounded rectangle using the current state of the canvas.
 * If you omit the last three params, it will draw a rectangle
 * outline with a 5 pixel border radius
 * @author Juan Mendes (https://stackoverflow.com/a/3368118)
 * @param {CanvasRenderingContext2D} ctx
 * @param {Object} position coordinates for the top left corner
 * @param {Number} [position.x] The top left x coordinate
 * @param {Number} [position.y] The top left y coordinate
 * @param {Object} dimention rectangle dimentions
 * @param {Number} [dimention.width] The width of the rectangle
 * @param {Number} [dimention.height] The height of the rectangle
 * @param {Number} [radius = 5] The corner radius; It can also be an object
 *                 to specify different radius for corners
 * @param {Number} [radius.tl = 0] Top left
 * @param {Number} [radius.tr = 0] Top right
 * @param {Number} [radius.br = 0] Bottom right
 * @param {Number} [radius.bl = 0] Bottom left
 * @param {Boolean} [fill = false] Whether to fill the rectangle.
 * @param {Boolean} [stroke = true] Whether to stroke the rectangle.
 */
function roundRect(
  ctx,
  position,
  dimention,
  radius = 5,
  fill = false,
  stroke = true
) {
  if (typeof radius === "number") {
    radius = { tl: radius, tr: radius, br: radius, bl: radius };
  } else {
    radius = { ...{ tl: 0, tr: 0, br: 0, bl: 0 }, ...radius };
  }
  ctx.beginPath();
  ctx.moveTo(position.x + radius.tl, position.y);
  ctx.lineTo(position.x + dimention.width - radius.tr, position.y);
  ctx.quadraticCurveTo(
    position.x + dimention.width,
    position.y,
    position.x + dimention.width,
    position.y + radius.tr
  );
  ctx.lineTo(
    position.x + dimention.width,
    position.y + dimention.height - radius.br
  );
  ctx.quadraticCurveTo(
    position.x + dimention.width,
    position.y + dimention.height,
    position.x + dimention.width - radius.br,
    position.y + dimention.height
  );
  ctx.lineTo(position.x + radius.bl, position.y + dimention.height);
  ctx.quadraticCurveTo(
    position.x,
    position.y + dimention.height,
    position.x,
    position.y + dimention.height - radius.bl
  );
  ctx.lineTo(position.x, position.y + radius.tl);
  ctx.quadraticCurveTo(
    position.x,
    position.y,
    position.x + radius.tl,
    position.y
  );
  ctx.closePath();
  if (fill) {
    ctx.fill();
  }
  if (stroke) {
    ctx.stroke();
  }
}

/**
 *
 * @param {HTMLAnchorElement} btn_download : Anchor element for downloading
 * @param {HTMLCanvasElement} canvas : Canvas element to export
 * @param {String} filename : Downloading filename without extension
 * @param {Function} renderFunction : Canvas render function
 */
function exportCanva(btn_download, canvas, filename, renderFunction) {
  var selectFormat = document.getElementById("export_format-select");
  var mimetype = selectFormat.options[selectFormat.selectedIndex].value;
  var extension = selectFormat.options[selectFormat.selectedIndex].text;

  var canvas_temp = canvas.cloneNode(true);
  var ctx_temp;
  var dataURL;
  switch (mimetype) {
    case "image/png":
      dataURL = canvas.toDataURL(mimetype);
      break;
    case "image/webp":
      dataURL = canvas.toDataURL(mimetype);
      break;
    case "image/jpeg":
      ctx_temp = canvas_temp.getContext("2d");
      ctx_temp.fillStyle = "#FFF";
      ctx_temp.fillRect(0, 0, canvas_temp.width, canvas_temp.height);
      ctx_temp.drawImage(canvas, 0, 0);
      dataURL = canvas.toDataURL(mimetype);
      break;
    case "image/svg+xml":
      ctx_temp = new C2S(canvas_temp.width, canvas_temp.height);
      renderFunction(ctx_temp, canvas_temp);
      var svgfonts = "<style>\r\n";
      svgfonts +=
        '@import url("https://fonts.googleapis.com/css?family=Montez|Lobster|Josefin+Sans|Shadows+Into+Light|Pacifico|Amatic+SC:700|Orbitron:400,900|Rokkitt|Righteous|Dancing+Script:700|Bangers|Chewy|Sigmar+One|Architects+Daughter|Abril+Fatface|Covered+By+Your+Grace|Kaushan+Script|Gloria+Hallelujah|Satisfy|Lobster+Two:700|Comfortaa:700|Cinzel|Courgette|Annie+Use+Your+Telescope|Baloo|Bowlby+One+SC|Bungee+Inline|Cabin+Sketch|Caveat|Contrail+One|Damion|Economica|Fascinate+Inline|Faster+One|Fredericka+the+Great|Gabriela|Just+Another+Hand|Kodchasan|Love+Ya+Like+A+Sister|Megrim|Monoton|Mouse+Memoirs|Podkova|Pompiere|Quicksand|Reenie+Beanie|Rokkitt|Six+Caps|Source+Sans+Pro|Special+Elite|Spicy+Rice|VT323|Wire+One");\r\n';
      svgfonts +=
        '@import url("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css");\r\n';
      var svg = ctx_temp
        .getSerializedSvg()
        .replace("<defs/>", svgfonts + "</style>\r\n<defs/>");
      dataURL =
        "data:image/svg+xml;charset=utf-8," +
        encodeURIComponent('<?xml version="1.0" standalone="no"?>\r\n' + svg);
      break;
    default:
      break;
  }
  btn_download.setAttribute("download", filename + "." + extension);
  btn_download.href = dataURL;
}

/**
 * hexToComplimentary : Converts hex value to HSL, shifts
 * hue by 180 degrees and then converts hex, giving complimentary color
 * as a hex value
 * @param  {String} hex : hex value
 * @return {String} : complimentary color as hex value
 */
function hexToComplimentary(hex) {
  // Convert hex to rgb
  // Credit to Denis http://stackoverflow.com/a/36253499/4939630
  var rgb =
    "rgb(" +
    (hex = hex.replace("#", ""))
      .match(new RegExp("(.{" + hex.length / 3 + "})", "g"))
      .map(function (l) {
        return parseInt(hex.length % 2 ? l + l : l, 16);
      })
      .join(",") +
    ")";

  // Get array of RGB values
  rgb = rgb.replace(/[^\d,]/g, "").split(",");

  var r = rgb[0],
    g = rgb[1],
    b = rgb[2];

  // Convert RGB to HSL
  // Adapted from answer by 0x000f http://stackoverflow.com/a/34946092/4939630
  r /= 255.0;
  g /= 255.0;
  b /= 255.0;
  var max = Math.max(r, g, b);
  var min = Math.min(r, g, b);
  var h,
    s,
    l = (max + min) / 2.0;

  if (max == min) {
    h = s = 0; //achromatic
  } else {
    var d = max - min;
    s = l > 0.5 ? d / (2.0 - max - min) : d / (max + min);

    if (max == r && g >= b) {
      h = (1.0472 * (g - b)) / d;
    } else if (max == r && g < b) {
      h = (1.0472 * (g - b)) / d + 6.2832;
    } else if (max == g) {
      h = (1.0472 * (b - r)) / d + 2.0944;
    } else if (max == b) {
      h = (1.0472 * (r - g)) / d + 4.1888;
    }
  }

  h = (h / 6.2832) * 360.0 + 0;

  // Shift hue to opposite side of wheel and convert to [0-1] value
  h += 180;
  if (h > 360) {
    h -= 360;
  }
  h /= 360;

  // Convert h s and l values into r g and b values
  // Adapted from answer by Mohsen http://stackoverflow.com/a/9493060/4939630
  if (s === 0) {
    r = g = b = l; // achromatic
  } else {
    var hue2rgb = function hue2rgb(p, q, t) {
      if (t < 0) t += 1;
      if (t > 1) t -= 1;
      if (t < 1 / 6) return p + (q - p) * 6 * t;
      if (t < 1 / 2) return q;
      if (t < 2 / 3) return p + (q - p) * (2 / 3 - t) * 6;
      return p;
    };

    var q = l < 0.5 ? l * (1 + s) : l + s - l * s;
    var p = 2 * l - q;

    r = hue2rgb(p, q, h + 1 / 3);
    g = hue2rgb(p, q, h);
    b = hue2rgb(p, q, h - 1 / 3);
  }

  r = Math.round(r * 255);
  g = Math.round(g * 255);
  b = Math.round(b * 255);

  // Convert r b and g values to hex
  rgb = b | (g << 8) | (r << 16);
  return "#" + (0x1000000 | rgb).toString(16).substring(1);
}
