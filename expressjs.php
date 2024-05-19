<?php require_once 'Navbar.php'?>
    <!-- mid part -->
    <nav class="mt-5 p-2 headline" style="background:linear-gradient(to top right, #fb5475 0%, #f77b50 59%);">
        <div class="text-center " style="margin-top:5vh;"><img style="margin-right:2vh;" src="../../assets/img/express-js.svg" alt="" /> ExpressJS cheatsheet
        </div>
    </nav>
    <div class="container">
        <div class="p-5 mb-4 bg-light rounded-3 jumbo mt-2">
            <div class="container-fluid py-3">
                <h1 class="display-5 fw-bold">ExpressJS</h1>
                <div class="row">
                    <div class="col-md-6">
                        <p class="fs-4">
                            The word hypertext markup language comprises the words “hypertext” and “markup language”. The term "hypertext" refers to the linking of text with other documents and “markup language” refers to a language that uses a set of tags. So, HTML is the linking
                            of text with other documents using some set of tags.
                        </p>
                    </div>
                    <div class="col-md-6 text-center">
                        <img src="../../assets/img/express-js.svg" alt="" style="height:100%;" />
                    </div>
                </div>
                <button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#o1" aria-controls="o1">
          Read More...
        </button>
                <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="o1" aria-labelledby="offcanvasWithBothOptionsLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">
                            ExpressJS
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <p>
                            1) HTML is an initialism for "HyperText Markup Language". <br /> 2) It is the language of the web.<br /> 3) It is used to create websites.<br /> 4) It is used to define a page layout, meaning it is a barebone page structure.<br
                            /> 5) HTML is used for making pages of the website also called webpages that we see on the internet<br /> 6) It consists of a set of tags.<br /> 7) This set of tags is interpreted by web browsers.<br /> 8) This set of tags
                            is written in HTML Document.<br /> 9) It is case-insensitive.<br /> 10) ".html" or ".htm" is the extension.<br /> 11) There are so many versions of HTML but HTML5 is the latest version.
                            <br />
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <ol>
            <!-- offcanvas -->
            <li>
                starter template<button class="btn btn1 mx-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#o2" aria-controls="o2">
          Read More...
        </button>
                <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="o2" aria-labelledby="offcanvasWithBothOptionsLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">
                            starter template
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <p>
                            NOTE: These are the five must-use tags for HTML &lt;!DOCTYPE html&gt;, &lt;html&gt;, &lt;head&gt;, &lt;title&gt;, &lt;body&gt;
                        </p>
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    &lt;!DOCTYPE html&gt;
                  </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        The &lt;!DOCTYPE&gt; declaration tag is used by the web browser to understand the version of the HTML used in the document. The current version is 5 i.e. HTML 5.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c2" aria-expanded="false" aria-controls="c2">
                    &lt;html&gt; & &lt;/html&gt;
                  </button>
                                </h2>
                                <div id="c2" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        The &lt;html&gt; tag is the root of an HTML page. <br /> The &lt;/html&gt; tag is closing of &lt;html&gt; tag. Every HTML page needs at least these 8 lines to define a layout of a page.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c3" aria-expanded="false" aria-controls="c3">
                    &lt;head&gt; & &lt;/head&gt;
                  </button>
                                </h2>
                                <div id="c3" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        The &lt;head&gt; tag contains page metadata.
                                        <br /> The &lt;/head&gt; tag is closing of &lt;head&gt; tag.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="h4">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c4" aria-expanded="false" aria-controls="c4">
                    &lt;title&gt; & &lt;/title&gt;
                  </button>
                                </h2>
                                <div id="c4" class="accordion-collapse collapse" aria-labelledby="h4" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        The &lt;title&gt; tag contains the title of a page and is shown in the browser title bar.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c5" aria-expanded="false" aria-controls="c5">
                    &lt;body&gt; & &lt;/body&gt;
                  </button>
                                </h2>
                                <div id="c5" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        &lt;body&gt; tag is the main tag of HTML. It contains the main body of the page and is shown in the white part of the browser. <br /> The &lt;/body&gt; tag is closing of &lt;body&gt; tag.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <pre class="language-html">
                <code>
                    &lt;!DOCTYPE html&gt;
                    &lt;html lang="en"&gt;
                    &lt;head&gt;
                        &lt;meta charset="UTF-8"&gt;
                        &lt;meta http-equiv="X-UA-Compatible" content="IE=edge"&gt;
                        &lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;
                        &lt;title&gt;Document&lt;/title&gt;
                    &lt;/head&gt;
                    &lt;body&gt;
                        
                    &lt;/body&gt;
                    &lt;/html&gt;
                </code>
            </pre>
            </li>
            <li>
                Heading tags <br />
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                &lt;h1&gt; tag: “define heading of an HTML page but with first
                level”
              </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-html">
                <code>
                    &lt;h1&gt;
                    //heading content
                    &lt;/h1&gt;
            </code>
            </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                &lt;h2&gt; tag: “define heading of an HTML page but with
                second level”
              </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-html">
                                    <code>    &lt;h2&gt;
                                //heading content
                                &lt;/h2&gt;</code>
                            </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                &lt;h3&gt; tag: “define heading of an HTML page but with third
                level”
              </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-html">
                                    <code> &lt;h3&gt;
                                //heading content
                                &lt;/h3&gt;</code>
                            </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingfour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                &lt;h4&gt; tag: “define heading of an HTML page but with
                fourth level”
              </button>
                        </h2>
                        <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-html">
                                    <code>   &lt;h4&gt;
                                //heading content
                                &lt;/h4&gt;</code>
                            </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingfive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                &lt;h5&gt; tag: “define heading of an HTML page but with fifth
                level”
              </button>
                        </h2>
                        <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="headingfive" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-html">
                                    <code>       &lt;h5&gt;
            //heading content
            &lt;/h5&gt;</code>
        </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingsix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                &lt;h6&gt; tag: “define heading of an HTML page but with sixth
                level”
              </button>
                        </h2>
                        <div id="collapsesix" class="accordion-collapse collapse" aria-labelledby="headingsix" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-html">
                                    <code>        &lt;h6&gt;
                                        //heading content
                                        &lt;/h6&gt;</code>
        </pre>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                &lt;p&gt; tag: “defines a paragraph on an HTML page”
                <pre class="language-html">
    <code>
        &lt;p&gt;              &lt;/p&gt;
</code>
</pre>
            </li>
            <li>
                &lt;br /&gt; tag: “used to break two lines or paragraph on an HTML page”
                <pre class="language-html">
    <code>
        &lt;br /&gt;
</code>
</pre>
            </li>
            <li>
                &lt;hr /&gt; tag: “defines a horizontal line on an HTML page”
                <pre class="language-html">
    <code>
        &lt;hr /&gt;
</code>
</pre>
            </li>

            <li>
                HTML Attributes<button class="btn btn1 mx-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#o22" aria-controls="o22">
          Read More...
        </button>
                <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="o22" aria-labelledby="offcanvasWithBothOptionsLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">
                            HTML Attributes
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    What is an HTML Attribute?
                  </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        It is used to define the characteristics of an HTML element. <br> It is placed in the opening tag of the HTML element.<br> All attributes are made up of two parts: Name and Value.<br><br> Name: It is used to set
                                        the property for that element.<br><br> Value: It is used to set the value of that property for that element.<br>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c2" aria-expanded="false" aria-controls="c2">
                    What are the different types of HTML Attributes?
                  </button>
                                </h2>
                                <div id="c2" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        There are three types of HTML attributes:<br> 1) Core Attributes<br> 2) Internationalization Attributes<br> 3) Generic Attributes<br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </li>
            <li>
                HTML Core Attributes<button class="btn btn1 mx-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#o23" aria-controls="o23">
          Read More...
        </button>
                <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="o23" aria-labelledby="offcanvasWithBothOptionsLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">
                            HTML Core Attributes
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <p>
                            The most widely used attribute is core attributes. There are 4 types of core attributes: <br>
                            <ul>
                                <li>Id</li>
                                <li>Class</li>
                                <li>Title</li>
                                <li>Style</li>
                            </ul>
                        </p>
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="h4">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c4" aria-expanded="false" aria-controls="c4">
                    The Id Attribute
                  </button>
                                </h2>
                                <div id="c4" class="accordion-collapse collapse" aria-labelledby="h4" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        This is the most widely used attribute. The id attribute is used to give a unique id to an HTML element. Each element in HTML with an id attribute has its own unique identity, just as each of us has our own unique identity. Multiple elements can’t share
                                        the same id.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="h5">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c5" aria-expanded="false" aria-controls="c5">
                    The class Attribute
                  </button>
                                </h2>
                                <div id="c5" class="accordion-collapse collapse" aria-labelledby="h5" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        The class attribute is used to specify a class to an HTML element. It is not unique like the id attribute. Multiple elements can share the same class. It is used to associate an element with a stylesheet, JS.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="h6">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c6" aria-expanded="false" aria-controls="c6">
                    The title Attribute
                  </button>
                                </h2>
                                <div id="c6" class="accordion-collapse collapse" aria-labelledby="h6" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        The id attribute is used to give a title to an HTML element. When the HTML element is loading, a tooltip of the cursor comes and shows the written title. </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="h7">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c7" aria-expanded="false" aria-controls="c7">
                    The style Attribute
                  </button>
                                </h2>
                                <div id="c7" class="accordion-collapse collapse" aria-labelledby="h7" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        The style attribute is used to give styling to an HTML element. It is a property of CSS (Cascading Style Sheet). It is mainly used by the CSS. It is the inline property of an element. In CSS, if we want to style within an HTML element we use the style
                                        attribute in inline of an HTML element. </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>

        </ol>
        </div>
    </div>
    <?php require_once 'Footer.php'?>