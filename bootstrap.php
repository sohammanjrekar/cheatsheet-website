<?php require_once 'Navbar.php'?>
    <!-- mid part -->
    <nav class="mt-5 p-2 headline" style="background:linear-gradient(to top right, #fb5475 0%, #f77b50 59%);">
        <div class="text-center " style="margin-top:5vh;"><img style="margin-right:2vh;" src="../../assets/img/bootstrap.svg" alt="" /> Bootstrap cheatsheet
        </div>
    </nav>
    <div class="container">
        <div class="p-5 mb-4 bg-light rounded-3 jumbo mt-2">
            <div class="container-fluid py-3">
                <h1 class="display-5 fw-bold">Bootstrap</h1>
                <div class="row">
                    <div class="col-md-8">
                        <p class="fs-4">
                            Bootstrap is a free front-end framework for faster and easier web development
                            <br> Bootstrap includes HTML and CSS based design templates for typography, forms, buttons, tables, navigation, modals, image carousels and many other, as well as optional JavaScript plugins <br> Bootstrap also gives you the
                            ability to easily create responsive designs
                        </p>
                    </div>
                    <div class="col-md-4">
                        <img src="../../assets/img/bootstrap.svg" alt="" style="width:100% ;" />
                    </div>
                </div>
                <button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#o1" aria-controls="o1">
                    Read More...
                </button>
                <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="o1" aria-labelledby="offcanvasWithBothOptionsLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">
                            Bootstrap
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        Advantages of Bootstrap:
                        <br><br><br> Easy to use: Anybody with just basic knowledge of HTML and CSS can start using Bootstrap<br><br> Responsive features: Bootstrap's responsive CSS adjusts to phones, tablets, and desktops<br><br> Mobile-first approach:
                        In Bootstrap, mobile-first styles are part of the core framework<br><br> Browser compatibility: Bootstrap 5 is compatible with all modern browsers (Chrome, Firefox, Edge, Safari, and Opera). <br><br>Note that if you need support
                        for IE11 and down, you must use either BS4 or BS3.
                    </div>
                </div>
            </div>
        </div>
        <ol>
            <!-- offcanvas -->
            <li>
                Stater Template<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom2" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom2" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Stater Template</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        One advantage of using the Bootstrap 5 CDN:<br><br> Many users already have downloaded Bootstrap 5 from jsDelivr when visiting another site. As a result, it will be loaded from cache when they visit your site, which leads to faster
                        loading time. Also, most CDN's will make sure that once a user requests a file from it, it will be served from the server closest to them, which also leads to faster loading time.
                        <br><br><br><br> JavaScript? Bootstrap 5 uses JavaScript for different components (like modals, tooltips, popovers etc). However, if you just use the CSS part of Bootstrap, you don't need them.
                    </div>
                </div>
                <pre class="language-html">
                    <code> 
                        &lt;!DOCTYPE html&gt;
                        &lt;html lang="en"&gt;
                          &lt;head&gt;
                            &lt;meta charset="UTF-8" /&gt;
                            &lt;meta http-equiv="X-UA-Compatible" content="IE=edge" /&gt;
                            &lt;meta name="viewport" content="width=device-width, initial-scale=1.0" /&gt;
                            &lt;title&gt;Document&lt;/title&gt;
                            &lt;!-- Bootstrap CSS --&gt;
                            &lt;link
                              href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
                              rel="stylesheet"
                              integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
                              crossorigin="anonymous"
                            /&gt;
                          &lt;/head&gt;
                          &lt;body&gt;
                        
                        
                        
                        
                            &lt;!-- Bootstrap JS --&gt;
                            &lt;script
                              src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
                              integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
                              crossorigin="anonymous"
                            &gt;&lt;/script&gt;
                          &lt;/body&gt;
                        &lt;/html&gt;
                        
                        </code>
</pre>
            </li>
            <li>Separate css and js cdn
                <pre class="language-html">
                                    <code> 
                                        <!-- Latest compiled and minified CSS -->
&lt;link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"&gt;
                                        </code>
        </pre>
                <pre class="language-html">
            <code> 
                <!-- Latest compiled and minified CSS -->
<!-- Latest compiled JavaScript -->
&lt;script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"&gt;&lt;/script&gt;
                </code>
</pre>
            </li>
            <li>
                Containers<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom3" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom3" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Containers</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        Containers are used to pad the content inside of them, and there are two container classes available:
                        <br><br> The .container class provides a responsive fixed width container <br> The .container-fluid class provides a full width container, spanning the entire width of the viewport
                        <br><br>
                        <ol type="A">
                            <li>Fixed Container:Use the .container class to create a responsive, fixed-width container. Note that its width (max-width) will change on different screen sizes:
                                <table class="w3-table ws-table-all table-bordered">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>
                                                Extra small<br> &lt;576px
                                            </th>
                                            <th>
                                                Small<br> ≥576px
                                            </th>
                                            <th>
                                                Medium<br> ≥768px
                                            </th>
                                            <th>
                                                Large<br> ≥992px
                                            </th>
                                            <th>
                                                Extra Large<br> ≥1200px
                                            </th>
                                            <th>
                                                XXL<br> ≥1400px
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>max-width</td>
                                            <td>100%</td>
                                            <td>540px</td>
                                            <td>720px</td>
                                            <td>960px</td>
                                            <td>1140px</td>
                                            <td>1320px</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </li>
                            <li>Fluid Container: Use the .container-fluid class to create a full width container, that will always span the entire width of the screen (width is always 100%)</li>
                        </ol>
                    </div>
                </div>
                <h3>Fixed container</h3>
                <pre class="language-html">
            <code>     
                &lt;div class="container"&gt;
    
  &lt;/div&gt;

            </code>
        </pre>
                <h3>fluid container</h3>
                <pre class="language-html">
            <code>     
                &lt;div class="container-fluid"&gt;
    
                &lt;/div&gt;
            </code>
        </pre>
            </li>
            <li>Grid System
                <button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom4" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom4" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Grid System</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        Bootstrap's grid system is built with flexbox and allows up to 12 columns across the page.
                        <br> If you do not want to use all 12 columns individually, you can group the columns together to create wider columns
                        <br><br> The grid system is responsive, and the columns will re-arrange automatically depending on the screen size.
                        <br> Make sure that the sum adds up to 12 or fewer (it is not required that you use all 12 available columns).
                        <br><br><br> The Bootstrap 5 grid system has six classes:
                        <br><br> .col- (extra small devices - screen width less than 576px)<br> .col-sm- (small devices - screen width equal to or greater than 576px)<br> .col-md- (medium devices - screen width equal to or greater than 768px)<br> .col-lg-
                        (large devices - screen width equal to or greater than 992px)<br> .col-xl- (xlarge devices - screen width equal to or greater than 1200px)<br> .col-xxl- (xxlarge devices - screen width equal to or greater than 1400px)<br> The classes
                        above can be combined to create more dynamic and flexible layouts.<br>
                        <br> Tip: Each class scales up, so if you want to set the same widths for sm and md, you only need to specify sm.
                    </div>
                </div> <br> <br>
                <table class="table grid table-bordered text-center">
                    <tbody>
                        <tr>
                            <td>span 1</td>
                            <td>span 1</td>
                            <td>span 1</td>
                            <td>span 1</td>
                            <td>span 1</td>
                            <td>span 1</td>
                            <td>span 1</td>
                            <td>span 1</td>
                            <td>span 1</td>
                            <td>span 1</td>
                            <td>span 1</td>
                            <td>span 1</td>
                        </tr>
                        <tr>
                            <td colspan="4">&nbsp;span 4</td>
                            <td colspan="4">&nbsp;span 4</td>
                            <td colspan="4">&nbsp;span 4</td>
                        </tr>
                        <tr>
                            <td colspan="4">span 4</td>
                            <td colspan="8">span 8</td>
                        </tr>
                        <tr>
                            <td colspan="6">span 6</td>
                            <td colspan="6">span 6</td>
                        </tr>
                        <tr>
                            <td colspan="12">span 12</td>
                        </tr>
                    </tbody>
                </table>
                <pre class="language-html">
    <code>
        &lt;div class="row"&gt;
    &lt;div class="col"&gt;&lt;/div&gt;
    &lt;div class="col"&gt;&lt;/div&gt;
    &lt;div class="col"&gt;&lt;/div&gt;
  &lt;/div&gt;

</code>
</pre>
            </li>
            <li>Text/Typography<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom5" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom5" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Text/Typography</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        Bootstrap 5 Default Settings<br> Bootstrap 5 uses a default font-size of 1rem (16px by default), and its line-height is 1.5.
                        <br><br> In addition, all
                        <p> elements have margin-top: 0 and margin-bottom: 1rem (16px by default).
                            <table class="ws-table-all notranslate table-bordered">
                                <tbody>
                                    <tr>
                                        <th style="width:30%;">Class</th>
                                        <th style="width:70%;">Description</th>
                                    </tr>
                                    <tr>
                                        <td><code class="w3-codespan">.lead</code></td>
                                        <td>Makes a paragraph stand out</td>

                                    </tr>
                                    <tr>
                                        <td><code class="w3-codespan">.text-start</code></td>
                                        <td>Indicates left-aligned text</td>

                                    </tr>
                                    <tr>
                                        <td><code class="w3-codespan">.text-break</code></td>
                                        <td>Prevents long text from breaking layout</td>

                                    </tr>
                                    <tr>
                                        <td><code class="w3-codespan">.text-center</code></td>
                                        <td>Indicates center-aligned text</td>

                                    </tr>
                                    <tr>
                                        <td><code class="w3-codespan">.text-decoration-none</code></td>
                                        <td>Removes the underline from a link</td>

                                    </tr>
                                    <tr>
                                        <td><code class="w3-codespan">.text-end</code></td>
                                        <td>Indicates right-aligned text</td>

                                    </tr>
                                    <tr>
                                        <td><code class="w3-codespan">.text-nowrap</code></td>
                                        <td>Indicates no wrap text</td>

                                    </tr>
                                    <tr>
                                        <td><code class="w3-codespan">.text-lowercase</code></td>
                                        <td>Indicates lowercased text</td>

                                    </tr>
                                    <tr>
                                        <td><code class="w3-codespan">.text-uppercase</code></td>
                                        <td>Indicates uppercased text</td>

                                    </tr>
                                    <tr>
                                        <td><code class="w3-codespan">.text-capitalize</code></td>
                                        <td>Indicates capitalized text</td>

                                    </tr>
                                    <tr>
                                        <td><code class="w3-codespan">.initialism</code></td>
                                        <td>Displays the text inside an <code class="w3-codespan">&lt;abbr&gt;</code> element in a slightly smaller font size</td>

                                    </tr>
                                    <tr>
                                        <td><code class="w3-codespan">.list-unstyled</code></td>
                                        <td>Removes the default list-style and left margin on list items (works on both <code class="w3-codespan">&lt;ul&gt;</code> and <code class="w3-codespan">&lt;ol&gt;</code>). This class only applies to immediate children
                                            list items (to remove the default list-style from any nested lists, apply this class to any nested lists as well)</td>
                                    </tr>
                                    <tr>
                                        <td><code class="w3-codespan">.list-inline</code></td>
                                        <td>Places all list items on a single line (used together with
                                            <code class="w3-codespan">.list-inline-item</code> on each &lt;li&gt; elements)</td>

                                    </tr>
                                </tbody>
                            </table>
                    </div>
                </div>
                <pre class="language-html">
    <code>
       
&lt;p class="h1"&gt;h1 Bootstrap heading&lt;/p&gt;
&lt;p class="h2"&gt;h2 Bootstrap heading&lt;/p&gt;
&lt;p class="h3"&gt;h3 Bootstrap heading&lt;/p&gt;
&lt;p class="h4"&gt;h4 Bootstrap heading&lt;/p&gt;
&lt;p class="h5"&gt;h5 Bootstrap heading&lt;/p&gt;
&lt;p class="h6"&gt;h6 Bootstrap heading&lt;/p&gt;
</code>
</pre>
            </li>
            <li>
                Colours<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas2" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvas2" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Colours</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        <br> Text Colors:.text-muted, .text-primary, .text-success, .text-info, .text-warning, .text-danger, .text-secondary, .text-white, .text-dark, .text-body (default body color/often black) and .text-light
                        <br><br><br> Background Colors: .bg-primary, .bg-success, .bg-info, .bg-warning, .bg-danger, .bg-secondary, .bg-dark and .bg-light.
                        <br><br><br>.text-bg-color used for background colors </div>
                </div>
                <div class="row mt-2">

                    <div class="col-md-4">
                        <div class="p-3 mb-3 bg-primary text-white">Primary</div>
                    </div>

                    <div class="col-md-4">
                        <div class="p-3 mb-3 bg-secondary text-white">Secondary</div>
                    </div>

                    <div class="col-md-4">
                        <div class="p-3 mb-3 bg-success text-white">Success</div>
                    </div>

                    <div class="col-md-4">
                        <div class="p-3 mb-3 bg-danger text-white">Danger</div>
                    </div>

                    <div class="col-md-4">
                        <div class="p-3 mb-3 bg-warning text-dark">Warning</div>
                    </div>

                    <div class="col-md-4">
                        <div class="p-3 mb-3 bg-info text-dark">Info</div>
                    </div>

                    <div class="col-md-4">
                        <div class="p-3 mb-3 bg-light text-dark">Light</div>
                    </div>

                    <div class="col-md-4">
                        <div class="p-3 mb-3 bg-dark text-white">Dark</div>
                    </div>

                </div>
                <h3>text colour</h3>
                <pre class="language-html">
    <code>
        &lt;div class="text-primary"&gt;&lt;/div&gt;
</code>
</pre>
                <h3>background colour</h3>
                <pre class="language-html">
    <code>
        &lt;div class="bg-primary"&gt;&lt;/div&gt;
</code>
</pre>
                <h3>text background colour</h3>
                <pre class="language-html">
<code>
    &lt;div class="text-bg-color"&gt;&lt;/div&gt;
</code>
</pre>
            </li>

        </ol>
    </div>
    </div>
     <?php require_once 'Footer.php'?>