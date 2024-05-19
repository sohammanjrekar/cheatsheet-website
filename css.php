<?php require_once 'Navbar.php'?>
    <!-- mid part -->
    <nav class="mt-5 p-2 headline" style="background:linear-gradient(to top right, #fb5475 0%, #f77b50 59%);">
        <div class="text-center " style="margin-top:5vh;"><img style="margin-right:2vh;" src="../../assets/img/css.svg" alt="" /> CSS cheatsheet
        </div>
    </nav>
    <div class="container" id="main">
        <div class="p-5 mb-4 bg-light rounded-3 jumbo mt-2">
            <div class="container-fluid py-3">
                <h1 class="display-5 fw-bold">CSS</h1>
                <div class="row">
                    <div class="col-md-6">
                        <p class="fs-4">
                            <ul>
                                <li>
                                    CSS is the language we use to style a Web page.
                                </li>
                                <li>
                                    CSS is the language we use to style an HTML document. </li>
                                <li>
                                    CSS describes how HTML elements should be displayed. </li>
                                <li>
                                    CSS stands for Cascading Style Sheets</li>
                                <li>
                                    CSS describes how HTML elements are to be displayed on screen, paper, or in other media
                                </li>
                                <li> CSS saves a lot of work. It can control the layout of multiple web pages all at once
                                </li>
                            </ul>
                            </h3>
                    </div>
                    <div class="col-md-6">
                        <img src="../../assets/img/css.svg" alt="" style="width:100% ;height:60%;" />
                    </div>
                </div>
                <button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#o1" aria-controls="o1" onclick='window.open("../../../PDF/css.pdf", "_blank")'>Open PDF</button>

                </button>
                <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="o1" aria-labelledby="offcanvasWithBothOptionsLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">
                            CSS
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        The selector points to the HTML element you want to style.
                        <br> The declaration block contains one or more declarations separated by semicolons.
                        <br> Each declaration includes a CSS property name and a value, separated by a colon.
                        <br> Multiple CSS declarations are separated with semicolons, and declaration blocks are surrounded by curly braces.
                        <br>
                        <br><br>
                        <img src="https://www.w3schools.com/css/img_selector.gif" alt="" style="width: 90%;">
                    </div>
                </div>
            </div>
        </div>
        <ol>
            <!-- offcanvas -->
            <li>
                CSS Selectors<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom2" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom2" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">CSS Selectors</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        CSS selectors are used to "find" (or select) the HTML elements you want to style.
                        <br><br> We can divide CSS selectors into five categories:
                        <br>
                        <ul>
                            <li>Simple selectors (select elements based on name, id, class)</li>
                            <li>Combinator selectors (select elements based on a specific relationship between them)
                            </li>
                            <li>Pseudo-class selectors (select elements based on a certain state)</li>
                            <li>Pseudo-elements selectors (select and style a part of an element)</li>
                            <li>Attribute selectors (select elements based on an attribute or attribute value)</li>
                        </ul>
                    </div>
                </div>
            </li>
            <li>CSS id Selector<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom2" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom1" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">CSS id Selector</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        The id selector uses the id attribute of an HTML element to select a specific element.
                        <br> The id of an element is unique within a page, so the id selector is used to select one unique element!
                        <br> To select an element with a specific id, write a hash (#) character,
                    </div>
                </div>
                <pre class="language-css">
                                    <code> 
                                        #para1 {
                                            
                                          }
                                        </code>
        </pre>
            </li>
            <li>
                CSS class Selector<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom3" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom3" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel"> CSS class Selector</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        The class selector selects HTML elements with a specific class attribute.
                        <br> To select elements with a specific class, write a period (.) character,
                    </div>
                </div>
                <pre class="language-css">
            <code>     
                .center {
                    
                  }
            </code>
        </pre>
            </li>
            <li>CSS Universal Selector<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom4" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom4" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">CSS Universal Selector</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        The universal selector (*) selects all HTML elements on the page.
                    </div>
                </div> <pre class="language-css">
    <code>
        * {
            
          }
</code>
</pre>
            </li>
            <li>CSS Grouping Selector<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom5" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom5" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">CSS Grouping Selector</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        The grouping selector selects all the HTML elements with the same style definitions.
                    </div>
                </div>
                <pre class="language-css">
    <code>
        h1, h2, p {
            
          }
</code>
</pre>
            </li>
            <li>
                Three Ways to Insert CSS<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas2" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvas2" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Three Ways to Insert CSS</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        There are three ways of inserting a style sheet:
                        <ul>
                            <li>External CSS:With an external style sheet, you can change the look of an entire website by changing just one file!
                                <br> Each HTML page must include a reference to the external style sheet file inside the &lt;link &gt; element, inside the head section.
                            </li>
                            <li>Internal CSS: An internal style sheet may be used if one single HTML page has a unique style. The internal style is defined inside the &lt;style&gt; element, inside the head section.
                            </li>
                            <li>Inline CSS : An inline style may be used to apply a unique style for a single element.
                                <br> To use inline styles, add the style attribute to the relevant element. The style attribute can contain any CSS property.
                            </li>
                        </ul>
                    </div>
                </div>
                <ol type="i">
                    <li>External CSS
                        <pre class="language-html">
                            <code>
                                &lt;link rel="stylesheet" href="mystyle.css"&gt;
                        </code>
                        </pre>
                    </li>
                    <li>Internal CSS
                        <pre class="language-css">
                            <code>
                                &lt;style&gt;
                          body {
                            background-color: linen;
                          }
                          &lt;/style&gt;
                        </code>
                        </pre>
                    </li>
                    <li>Inline CSS
                        <pre class="language-html">
                            <code>
                                &lt;h1 style="color:blue;text-align:center;"&gt;&lt;/h1&gt;
                            </code>
                            </pre>
                    </li>
                    <li></li>
                </ol>
            </li>
            <li>
                CSS Comments
                <pre class="language-css">
                    <code>
                        /* This is a single-line comment */
                </code>
                </pre>
            </li>
            <li>CSS Colors
                <button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom9" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom9" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">CSS Colors</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        Colors are specified using predefined color names, or RGB, HEX, HSL, RGBA, HSLA values.
                        <br>
                        <ul>
                            <li>RGB Value: <br> In CSS, a color can be specified as an RGB value, using this formula:
                                <br> rgb(red, green, blue)
                                <br> Each parameter (red, green, and blue) defines the intensity of the color between 0 and 255.</li>
                            <li>RGBA Value: <br> RGBA color values are an extension of RGB color values with an alpha channel - which specifies the opacity for a color.
                                <br> An RGBA color value is specified with:
                                <br> rgba(red, green, blue, alpha)</li>
                            <li>HEX Value : <br> In CSS, a color can be specified using a hexadecimal value in the form:
                                <br> #rrggbb
                                <br> Where rr (red), gg (green) and bb (blue) are hexadecimal values between 00 and ff (same as decimal 0-255).</li>
                            <li>HSL Value : <br> In CSS, a color can be specified using hue, saturation, and lightness (HSL) in the form:
                                <br> hsl(hue, saturation, lightness)
                                <br> Hue is a degree on the color wheel from 0 to 360.</li>
                            <li>HSLA Value : <br> HSLA color values are an extension of HSL color values with an alpha channel - which specifies the opacity for a color. <br> An HSLA color value is specified with:
                                <br> hsla(hue, saturation, lightness, alpha)
                                <br> The alpha parameter is a number between 0.0 (fully transparent) and 1.0 (not transparent at all)</li>
                        </ul>
                    </div>
                </div>
                <ol type="i">
                    <li>CSS Background Color
                        <pre class="language-css">
                            <code>
                                background-color:DodgerBlue;
                        </code>
                        </pre>
                    </li>
                    <li>CSS Text Color
                        <pre class="language-css">
                            <code>
                                color:DodgerBlue;
                        </code>
                        </pre>
                    </li>
                    <li>CSS Border Color
                        <pre class="language-css">
                        <code>
                           border:2px solid Violet;
                    </code>
                    </pre></li>
                    <li>CSS Color Values (RGB, HEX, HSL, RGBA and HSLA )
                        <pre class="language-css">
                            <code>
                                background-color:rgb(255, 99, 71);
                                background-color:#ff6347;
                                background-color:hsl(9, 100%, 64%);
                                background-color:rgba(255, 99, 71, 0.5);
                                background-color:hsla(9, 100%, 64%, 0.5);
                        </code>
                        </pre>
                    </li>
                </ol>
            </li>
            <li>CSS Backgrounds
                <ol type="i">
                    <li>
                        CSS background-color<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom10" aria-controls="offcanvasBottom">Read more...</button>
                        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom10" aria-labelledby="offcanvasBottomLabel">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasBottomLabel">CSS background-color</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body small">
                                The background-color property specifies the background color of an element.
                            </div>
                        </div>
                        <pre class="language-css">
                            <code>
                                    background-color: lightblue;
                        </code>
                        </pre>
                    </li>
                    <li>
                        CSS background-image<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom12" aria-controls="offcanvasBottom">Read more...</button>
                        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom12" aria-labelledby="offcanvasBottomLabel">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasBottomLabel">CSS background-image</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body small">
                                The background-image property specifies an image to use as the background of an element. </div>
                        </div>

                        <pre class="language-css">
                        <code>
                                background-image: url("paper.gif");
                    </code>
                    </pre>

                    </li>
                    <li>
                        CSS background-repeat<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom13" aria-controls="offcanvasBottom">Read more...</button>
                        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom13" aria-labelledby="offcanvasBottomLabel">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasBottomLabel">CSS background-repeat</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body small">
                                By default, the background-image property repeats an image both horizontally and vertically.
                            </div>
                        </div> <pre class="language-css">
    <code>
            background-repeat: no-repeat;
</code>
</pre>
                    </li>
                    <li>
                        CSS background-attachment<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom14" aria-controls="offcanvasBottom">Read more...</button>
                        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom14" aria-labelledby="offcanvasBottomLabel">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasBottomLabel">CSS background-repeat</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body small">
                                The background-attachment property specifies whether the background image should scroll or be fixed (will not scroll with the rest of the page)
                            </div>
                        </div>


                        <pre class="language-css">
                        <code>
                                background-attachment: fixed;
                        </code>
                        </pre>
                    </li>
                    <li>
                        CSS background - Shorthand property<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom16" aria-controls="offcanvasBottom">Read more...</button>
                        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom16" aria-labelledby="offcanvasBottomLabel">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasBottomLabel">CSS background - Shorthand property</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body small">
                                To shorten the code, it is also possible to specify all the background properties in one single property. This is called a shorthand property.
                                <br> then using the shorthand property the order of the property values is:
                                <ol type="I">
                                    <li>background-color</li>
                                    <li>background-image</li>
                                    <li>background-repeat</li>
                                    <li>background-attachment</li>
                                    <li>background-position</li>
                                </ol>
                            </div>
                        </div>
                        <pre class="language-css">
                    <code>
                        body {
                            background: #ffffff url("img_tree.png") no-repeat right top;
                          }
                    </code>
                    </pre>
                    </li>
                </ol>
            </li>
            <li>
                CSS Borders
                <ol type="i">
                    <li>Border Style<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom18" aria-controls="offcanvasBottom">Read more...</button>
                        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom18" aria-labelledby="offcanvasBottomLabel">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasBottomLabel">Border Style</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body small">
                                The border-style property specifies what kind of border to display.
                                <br><br> The following values are allowed:
                                <br>
                                <ul>
                                    <li>dotted - Defines a dotted border</li>
                                    <li>dashed - Defines a dashed border</li>
                                    <li>solid - Defines a solid border</li>
                                    <li>double - Defines a double border</li>
                                    <li>groove - Defines a 3D grooved border. The effect depends on the border-color value</li>
                                    <li>ridge - Defines a 3D ridged border. The effect depends on the border-color value</li>
                                    <li>inset - Defines a 3D inset border. The effect depends on the border-color value</li>
                                    <li>outset - Defines a 3D outset border. The effect depends on the border-color value</li>
                                    <li>none - Defines no border</li>
                                    <li>hidden - Defines a hidden border</li>
                                </ul>
                                <br> The border-style property can have from one to four values (for the top border, right border, bottom border, and the left border).
                            </div>
                        </div>
                        <pre class="language-css">
                    <code>
                        border-style: dotted;
                    </code>
                    </pre>
                    </li>
                    <li>
                        Border Width<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom19" aria-controls="offcanvasBottom">Read more...</button>
                        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom19" aria-labelledby="offcanvasBottomLabel">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasBottomLabel">Border Width</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body small">
                                The border-width property specifies the width of the four borders.
                                <br><br> The width can be set as a specific size (in px, pt, cm, em, etc) or by using one of the three pre-defined values: thin, medium, or thick
                            </div>
                        </div>
                        <pre class="language-css">
                    <code>
                        border-width: 5px;
                    </code>
                    </pre>
                        <pre class="language-css">
                        <code>
                            border-width: 25px 10px 4px 35px; /* 25px top, 10px right, 4px bottom and 35px left */
                        </code>
                        </pre>
                    </li>
                    <li>
                        Border Color<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom21" aria-controls="offcanvasBottom">Read more...</button>
                        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom21" aria-labelledby="offcanvasBottomLabel">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasBottomLabel">Border Color</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body small">
                                The border-color property is used to set the color of the four borders.
                                <br> The color can be set by:
                                <br>
                                <ul>
                                    <li>name - specify a color name, like "red"</li>
                                    <li>HEX - specify a HEX value, like "#ff0000"</li>
                                    <li>RGB - specify a RGB value, like "rgb(255,0,0)"</li>
                                    <li>HSL - specify a HSL value, like "hsl(0, 100%, 50%)"</li>
                                </ul>
                                <br> Note: If border-color is not set, it inherits the color of the element.
                            </div>
                        </div>
                        <pre class="language-css">
                    <code>
                        border-color: red;
                    </code>
                    </pre>
                        <pre class="language-css">
                        <code>
                            border-color: red green blue yellow; /* red top, green right, blue bottom and yellow left */
                        </code>
                        </pre>
                    </li>
                    <li>
                        Border - Shorthand Property<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom22" aria-controls="offcanvasBottom">Read more...</button>
                        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom22" aria-labelledby="offcanvasBottomLabel">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasBottomLabel">Border - Shorthand Property</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body small">
                                To shorten the code, it is also possible to specify all the individual border properties in one property.
                                <br><br> The border property is a shorthand property for the following individual border properties:
                                <br>
                                <ul>
                                    <li>border-width</li>
                                    <li>border-style (required)</li>
                                    <li>border-color</li>
                                </ul>
                            </div>
                        </div>
                        <pre class="language-css">
                    <code>
                        border: 5px solid red;
                    </code>
                    </pre>
                    </li>
                    <li>
                        border-radius<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom23" aria-controls="offcanvasBottom">Read more...</button>
                        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom23" aria-labelledby="offcanvasBottomLabel">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasBottomLabel">border-radius</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body small">
                                The border-radius property is used to add rounded borders to an element
                            </div>
                        </div>
                        <pre class="language-css">
                    <code>
                        border-radius: 5px;
                    </code>
                    </pre>
                    </li>
                </ol>
            </li>
            <li>
                CSS Margins<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom24" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom24" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">CSS Margins</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        The CSS margin properties are used to create space around elements, outside of any defined borders.
                        <br>br With CSS, you have full control over the margins. There are properties for setting the margin for each side of an element (top, right, bottom, and left).CSS has properties for specifying the margin for each side of an element:
                        <br><br> margin-top <br> margin-right <br> margin-bottom
                        <br> margin-left
                        <br><br><br> All the margin properties can have the following values:
                        <br> auto - the browser calculates the margin<br> length - specifies a margin in px, pt, cm, etc.<br> % - specifies a margin in % of the width of the containing element<br> inherit - specifies that the margin should be inherited
                        from the parent element<br>
                        <br>
                        <br> All CSS Margin Properties
                        <table class="ws-table-all notranslate table-bordered">
                            <tbody>
                                <tr>
                                    <th style="width:20%">Property</th>
                                    <th>Description</th>
                                </tr>
                                <tr>
                                    <td><a href="/cssref/pr_margin.asp">margin</a></td>
                                    <td>A shorthand property for setting all the margin properties in one declaration</td>
                                </tr>
                                <tr>
                                    <td><a href="/cssref/pr_margin-bottom.asp">margin-bottom</a></td>
                                    <td>Sets the bottom margin of an element</td>
                                </tr>
                                <tr>
                                    <td><a href="/cssref/pr_margin-left.asp">margin-left</a></td>
                                    <td>Sets the left margin of an element</td>
                                </tr>
                                <tr>
                                    <td><a href="/cssref/pr_margin-right.asp">margin-right</a></td>
                                    <td>Sets the right margin of an element</td>
                                </tr>
                                <tr>
                                    <td><a href="/cssref/pr_margin-top.asp">margin-top</a></td>
                                    <td>Sets the top margin of an element</td>
                                </tr>
                            </tbody>
                        </table>
                        <br> Tip: Negative values are allowed. </div>
                </div>
                <pre class="language-css">
<code>
    margin-top: 100px; 
</code>
</pre>
                <pre class="language-css">
    <code>
        margin-bottom: 100px;
    </code>
    </pre>
                <pre class="language-css">
        <code>
            margin-right: 150px;
        </code>
        </pre>
                <pre class="language-css">
            <code>
            margin-left: 80px;  
            </code>
            </pre>
                <pre class="language-css">
                <code>
                    margin: 25px 50px 75px 100px;
                </code>
                </pre>
            </li>
            <li>
                CSS Padding<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom25" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom25" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">CSS Padding</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        Padding is used to create space around an element's content, inside of any defined borders.
                        <br> The CSS padding properties are used to generate space around an element's content, inside of any defined borders.
                        <br><br> With CSS, you have full control over the padding. There are properties for setting the padding for each side of an element (top, right, bottom, and left).
                        <br> Padding - Individual Sides CSS has properties for specifying the padding for each side of an element:
                        <br> padding-top <br> padding-right
                        <br> padding-bottom
                        <br> padding-left
                        <br><br> All the padding properties can have the following values:
                        <br> length - specifies a padding in px, pt, cm, etc.<br> % - specifies a padding in % of the width of the containing element<br> inherit - specifies that the padding should be inherited from the parent element<br> Note: Negative
                        values are not allowed.
                        <br>
                        <br>
                        <table class="ws-table-all notranslate table-bordered">
                            <tbody>
                                <tr>
                                    <th style="width:30%">Property</th>
                                    <th>Description</th>
                                </tr>
                                <tr>
                                    <td><a href="/cssref/pr_padding.asp">padding</a></td>
                                    <td>A shorthand property for setting all the padding properties in one declaration</td>
                                </tr>
                                <tr>
                                    <td><a href="/cssref/pr_padding-bottom.asp">padding-bottom</a></td>
                                    <td>Sets the bottom padding of an element</td>
                                </tr>
                                <tr>
                                    <td><a href="/cssref/pr_padding-left.asp">padding-left</a></td>
                                    <td>Sets the left padding of an element</td>
                                </tr>
                                <tr>
                                    <td><a href="/cssref/pr_padding-right.asp">padding-right</a></td>
                                    <td>Sets the right padding of an element</td>
                                </tr>
                                <tr>
                                    <td><a href="/cssref/pr_padding-top.asp">padding-top</a></td>
                                    <td>Sets the top padding of an element</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <pre class="language-css">
                    <code>
                        padding-top: 50px;
                    </code>
                    </pre>
                <pre class="language-css">
                        <code>
                            padding-bottom: 50px;
                        </code>
                        </pre>
                <pre class="language-css">
                            <code>
                                padding-left: 80px;
                            </code>
                            </pre>
                <pre class="language-css">
                                <code>
                                    padding-right: 30px;
                                </code>
                                </pre>
                <pre class="language-css">
                                    <code>
                                        padding: 25px 50px 75px 100px;
                                    </code>
                                    </pre>
            </li>
            <li>
                height and width<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom27" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom27" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">height and width</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        The height and width properties are used to set the height and width of an element.
                        <br><br> The height and width properties do not include padding, borders, or margins. It sets the height/width of the area inside the padding, border, and margin of the element <br><br> The height and width properties may have
                        the following values:
                        <br> auto - This is default. The browser calculates the height and width<br> length - Defines the height/width in px, cm, etc.<br> % - Defines the height/width in percent of the containing block<br> initial - Sets the height/width
                        to its default value<br> inherit - The height/width will be inherited from its parent value<br>
                        <br><br>
                        <table class="ws-table-all notranslate table-bordered">
                            <tbody>
                                <tr>
                                    <th style="width:20%">Property</th>
                                    <th>Description</th>
                                </tr>
                                <tr>
                                    <td><a href="/cssref/pr_dim_height.asp">height</a></td>
                                    <td>Sets the height of an element</td>
                                </tr>
                                <tr>
                                    <td><a href="/cssref/pr_dim_max-height.asp">max-height</a></td>
                                    <td>Sets the maximum height of an element</td>
                                </tr>
                                <tr>
                                    <td><a href="/cssref/pr_dim_max-width.asp">max-width</a></td>
                                    <td>Sets the maximum width of an element</td>
                                </tr>
                                <tr>
                                    <td><a href="/cssref/pr_dim_min-height.asp">min-height</a></td>
                                    <td>Sets the minimum height of an element</td>
                                </tr>
                                <tr>
                                    <td><a href="/cssref/pr_dim_min-width.asp">min-width</a></td>
                                    <td>Sets the minimum width of an element</td>
                                </tr>
                                <tr>
                                    <td><a href="/cssref/pr_dim_width.asp">width</a></td>
                                    <td>Sets the width of an element</td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
                <pre class="language-css">
                    <code>
                        height: 200px;
                    </code>
                    </pre>

                <pre class="language-css">
    <code>
        width: 50%;
    </code>
    </pre>
            </li>
            <li>
                Box Model<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom28" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom28" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Box Model</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        In CSS, the term "box model" is used when talking about design and layout.
                        <br><br> The CSS box model is essentially a box that wraps around every HTML element. It consists of: margins, borders, padding, and the actual content. The image below illustrates the box model
                        <br><br> Explanation of the different parts:
                        <br> Content - The content of the box, where text and images appear<br> Padding - Clears an area around the content. The padding is transparent<br> Border - A border that goes around the padding and content<br> Margin - Clears
                        an area outside the border. The margin is transparent<br> The box model allows us to add a border around elements<br>
                        <br><br>Important: When you set the width and height properties of an element with CSS, you just set the width and height of the content area. To calculate the full size of an element, you must also add padding, borders and margins.
                    </div>
                </div><br>
                <img src="https://cdncontribute.geeksforgeeks.org/wp-content/uploads/box-model-1.png" alt="" style="width: 80vw;">
            </li>
            <li>
                CSS Outline<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom29" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start " tabindex="-1" id="offcanvasBottom29" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">CSS Outline</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        An outline is a line that is drawn around elements, OUTSIDE the borders, to make the element "stand out". <br><br> CSS has the following outline properties:
                        <br> outline-style
                        <br> outline-color
                        <br> outline-width
                        <br> outline-offset
                        <br> outline
                        <br>
                    </div>
                </div>
                <br>
                <img src="https://lectii-virtuale.ro/images/upload/files/css_outline1.jpg" alt="" style="width: 80vw;">
                <ol type="i">
                    <li>
                        CSS Outline Style<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom30" aria-controls="offcanvasBottom">Read more...</button>
                        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom30" aria-labelledby="offcanvasBottomLabel">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasBottomLabel">CSS Outline Style</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body small">
                                The outline-style property specifies the style of the outline, and can have one of the following values:
                                <br><br> dotted - Defines a dotted outline<br> dashed - Defines a dashed outline<br> solid - Defines a solid outline<br> double - Defines a double outline<br> groove - Defines a 3D grooved outline<br> ridge - Defines a
                                3D ridged outline<br> inset - Defines a 3D inset outline<br> outset - Defines a 3D outset outline<br> none - Defines no outline<br> hidden - Defines a hidden outline </div>
                        </div>

                        <pre class="language-css">
                    <code>
                        outline-style: dotted;
                    </code>
            </li>
            <li>
                CSS Outline Width<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom31" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom31"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">CSS Outline Width</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        The outline-width property specifies the width of the outline, and can have one of the following values:
<br><br>
thin (typically 1px)<br>
medium (typically 3px)<br>
thick (typically 5px)<br>
A specific size (in px, pt, cm, em, etc)</div>
                    </div>
                    <pre class="language-css">
                    <code>
                        outline-width: thin;
                    </code>
                    </pre>
                    </li>
                    <li>
                        CSS Outline Color<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom32" aria-controls="offcanvasBottom">Read more...</button>
                        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom32" aria-labelledby="offcanvasBottomLabel">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasBottomLabel">CSS Outline Color</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body small">
                                The outline-color property is used to set the color of the outline.
                                <br><br><br> The color can be set by:
                                <br> name - specify a color name, like "red"<br> HEX - specify a hex value, like "#ff0000"<br> RGB - specify a RGB value, like "rgb(255,0,0)"<br> HSL - specify a HSL value, like "hsl(0, 100%, 50%)"<br> invert - performs
                                a color inversion (which ensures that the outline is visible, regardless of color background)<br>
                            </div>
                        </div>
                        <pre class="language-css">
                    <code>
                        outline-color: red;
                    </code>
                    </pre>
                    </li>
                    <li>
                        CSS Outline - Shorthand<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom33" aria-controls="offcanvasBottom">Read more...</button>
                        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom33" aria-labelledby="offcanvasBottomLabel">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasBottomLabel">CSS Outline - Shorthand</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body small">
                                The outline property is a shorthand property for setting the following individual outline properties:
                                <br><br> outline-width
                                <br> outline-style (required)<br> outline-color
                                <br> The outline property is specified as one, two, or three values from the list above. The order of the values does not matter.
                                <br>
                                <br>
                                <table class="ws-table-all notranslate table-bordered">
                                    <tbody>
                                        <tr>
                                            <th style="width:20%">Property</th>
                                            <th>Description</th>
                                        </tr>
                                        <tr>
                                            <td><a href="/cssref/pr_outline.asp">outline</a></td>
                                            <td>A shorthand property for setting outline-width, outline-style, and outline-color in one declaration</td>
                                        </tr>
                                        <tr>
                                            <td><a href="/cssref/pr_outline-color.asp">outline-color</a></td>
                                            <td>Sets the color of an outline</td>
                                        </tr>
                                        <tr>
                                            <td><a href="/cssref/css3_pr_outline-offset.asp">outline-offset</a></td>
                                            <td>Specifies the space between an outline and the edge or border of an element</td>
                                        </tr>
                                        <tr>
                                            <td><a href="/cssref/pr_outline-style.asp">outline-style</a></td>
                                            <td>Sets the style of an outline</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="/cssref/pr_outline-width.asp">outline-width</a></td>
                                            <td>Sets the width of an outline</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <pre class="language-css">
                    <code>
                        outline: 5px solid yellow;
                    </code>
                    </pre>
                    </li>
                    <li>
                        CSS Outline Offset<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom34" aria-controls="offcanvasBottom">Read more...</button>
                        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom34" aria-labelledby="offcanvasBottomLabel">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasBottomLabel">CSS Outline Offset</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body small">
                                The outline-offset property adds space between an outline and the edge/border of an element. The space between an element and its outline is transparent.
                            </div>
                        </div>
                        <pre class="language-css">
                    <code>
                        outline-offset: 15px;
                    </code>
                    </pre>

                    </li>
                </ol>
            </li>
            <li>
                CSS Text
                <ol type="i">
                    <li>
                        Text Color<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom35" aria-controls="offcanvasBottom">Read more...</button>
                        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom35" aria-labelledby="offcanvasBottomLabel">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasBottomLabel">Text Color</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body small">
                                The color property is used to set the color of the text. The color is specified by:
                                <br><br> a color name - like "red"<br> a HEX value - like "#ff0000"<br> an RGB value - like "rgb(255,0,0)"<br>
                            </div>
                        </div>
                        <pre class="language-css">
                    <code>
                        color: blue;
                    </code>
                    </pre>
                    </li>
                    <li>
                        Text Alignment<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom36" aria-controls="offcanvasBottom">Read more...</button>
                        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom36" aria-labelledby="offcanvasBottomLabel">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasBottomLabel">Text Alignment</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body small">
                                The text-align property is used to set the horizontal alignment of a text.
                                <br> A text can be left or right aligned, centered, or justified
                                <br><br>
                                <table class="ws-table-all notranslate table-bordered">
                                    <tbody>
                                        <tr>
                                            <th style="width:30%">Property</th>
                                            <th>Description</th>
                                        </tr>
                                        <tr>
                                            <td><a href="/cssref/pr_text_direction.asp">direction</a></td>
                                            <td>Specifies the text direction/writing direction</td>
                                        </tr>
                                        <tr>
                                            <td><a href="/cssref/pr_text_text-align.asp">text-align</a></td>
                                            <td>Specifies the horizontal alignment of text</td>
                                        </tr>
                                        <tr>
                                            <td><a href="/cssref/css3_pr_text-align-last.asp">text-align-last</a></td>
                                            <td>Specifies how to align the last line of a text</td>
                                        </tr>
                                        <tr>
                                            <td><a href="/cssref/pr_text_unicode-bidi.asp">unicode-bidi</a></td>
                                            <td>Used together with the <a href="/cssref/pr_text_direction.asp">direction</a> property to set or return whether the text should be overridden to support multiple languages in the same document</td>
                                        </tr>
                                        <tr>
                                            <td><a href="/cssref/pr_pos_vertical-align.asp">vertical-align</a></td>
                                            <td>Sets the vertical alignment of an element</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <pre class="language-css">
                            <code>
                                text-align: center;
                            </code>
                            </pre>

                    </li>
                    <li>
                        Text Align Last<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom37" aria-controls="offcanvasBottom">Read more...</button>
                        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom37" aria-labelledby="offcanvasBottomLabel">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasBottomLabel">Text Align Last</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body small">
                                The text-align-last property specifies how to align the last line of a text.
                            </div>
                        </div>
                        <pre class="language-css">
                            <code>
                                text-align-last: right;
                            </code>
                            </pre>
                    </li>
                    <li>
                        Text Direction<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom38" aria-controls="offcanvasBottom">Read more...</button>
                        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom38" aria-labelledby="offcanvasBottomLabel">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasBottomLabel">Text Direction</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body small">
                                The direction and unicode-bidi properties can be used to change the text direction of an element
                            </div>
                        </div>
                        <pre class="language-css">
                            <code>
                                direction: rtl;
                                unicode-bidi: bidi-override;
                            </code>
                            </pre>
                    </li>
                    <li>
                        Vertical Alignment<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom39" aria-controls="offcanvasBottom">Read more...</button>
                        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom39" aria-labelledby="offcanvasBottomLabel">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasBottomLabel">Vertical Alignment</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body small">
                                The vertical-align property sets the vertical alignment of an element.
                            </div>
                        </div> <pre class="language-css">
                            <code>
                                vertical-align: text-top;
                            </code>
                            </pre>
                    </li>
                    <li>
                        Text Decoration
                        <ol type="a">
                            <li>
                                Add a Decoration Line to Text<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom40" aria-controls="offcanvasBottom">Read more...</button>
                                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom40" aria-labelledby="offcanvasBottomLabel">
                                    <div class="offcanvas-header">
                                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Add a Decoration Line to Text</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                    </div>
                                    <div class="offcanvas-body small">
                                        The text-decoration-line property is used to add a decoration line to text.
                                        <br><br> Tip: You can combine more than one value, like overline and underline to display lines both over and under a text.
                                    </div>
                                </div>
                                <pre class="language-css">
                            <code>
                                text-decoration-line: overline underline;
                            </code>
                            </pre>
                            </li>
                            <li>
                                Specify a Color for the Decoration Line<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom41" aria-controls="offcanvasBottom">Read more...</button>
                                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom41" aria-labelledby="offcanvasBottomLabel">
                                    <div class="offcanvas-header">
                                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Specify a Color for the Decoration Line</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                    </div>
                                    <div class="offcanvas-body small">
                                        The text-decoration-color property is used to set the color of the decoration line.
                                    </div>
                                </div>
                                <pre class="language-css">
                    <code>
                        text-decoration-color: red;
                    </code>
                    </pre>
                            </li>
                            <li>
                                Specify a Style for the Decoration Line
                                <button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom42" aria-controls="offcanvasBottom">Read more...</button>
                                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom42" aria-labelledby="offcanvasBottomLabel">
                                    <div class="offcanvas-header">
                                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Specify a Style for the Decoration Line</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                    </div>
                                    <div class="offcanvas-body small">
                                        The text-decoration-style property is used to set the style of the decoration line.
                                    </div>
                                </div>
                                <pre class="language-css">
                    <code>
                        text-decoration-style: solid;
                    </code>
                    </pre>
                            </li>

                        </ol>
    </div>
    </div>
    <?php require_once 'Footer.php'?>