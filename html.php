<?php require_once 'Navbar.php'?>
    <!-- mid part -->
    <nav class="mt-5 p-2 headline" style="background:linear-gradient(to top right, #fb5475 0%, #f77b50 59%);">
        <div class="text-center " style="margin-top:5vh;"><img style="margin-right:2vh;" src="../../assets/img/html.svg" alt="" /> HTML cheatsheet
        </div>
    </nav>
    <div class="container">
        <div class="p-5 mb-4 bg-light rounded-3 jumbo mt-2">
            <div class="container-fluid py-3">
                <h1 class="display-5 fw-bold">HTML</h1>
                <div class="row">
                    <div class="col-md-6">
                        <p class="fs-4">
                            The word hypertext markup language comprises the words “hypertext” and “markup language”. The term "hypertext" refers to the linking of text with other documents and “markup language” refers to a language that uses a set of tags. So, HTML is the linking
                            of text with other documents using some set of tags.
                        </p>
                    </div>
                    <div class="col-md-6 text-center">
                        <img src="../../assets/img/html.svg" alt="" style="height:100%;" />
                    </div>
                </div>
                <button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#o1" aria-controls="o1">
                    Read More...
                </button>
                <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="o1" aria-labelledby="offcanvasWithBothOptionsLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">
                            HTML
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
                &lt;center&gt; tag: “used to put content in the center on an HTML page”
                <pre class="language-html">
    <code>
        &lt;center&gt;            &lt;/center&gt;
</code>
</pre>
            </li>
            <li>
                &lt;pre&gt; tag: “used to put the exact code on an HTML page”
                <pre class="language-html">
    <code>
        &lt;pre&gt;                    &lt;/pre&gt;
</code>
</pre>
            </li>
            <li>
                &lt;b&gt; tag: “used to make text bold on an HTML page”
                <pre class="language-html">
    <code>
        &lt;b&gt;                      &lt;/b&gt;
</code>
</pre>
            </li>
            <li>
                &lt;strong&gt; tag: “used to make text important and bold on an HTML page”
                <pre class="language-html">
    <code>
        &lt;strong&gt;          &lt;/strong&gt;
</code>
</pre>
            </li>
            <li>
                &lt;i&gt; tag: “used to represent a change in mood or quality of text on an HTML page”
                <pre class="language-html">
    <code>
        &lt;i&gt;              &lt;/i&gt;
</code>
</pre>
            </li>
            <li>
                &lt;em&gt; tag: “used to display emphasized text on an HTML page”
                <pre class="language-html">
<code>
    &lt;em&gt;                    &lt;/em&gt;
</code>
</pre>
            </li>
            <li>
                &lt;u&gt; tag: “used for underline misspelled words on an HTML page”
                <pre class="language-html">
    <code>
        &lt;u&gt;                    &lt;/u&gt;
    
    </code>
    </pre>
            </li>
            <li>
                &lt;strike&gt; tag: “used to make a thin line through text on an HTML page”
                <pre class="language-html">
        <code>
        
            &lt;strike&gt;                &lt;/strike&gt;
        </code>
        </pre>
            </li>
            <li>
                &lt;sup&gt; tag: “used to display a text above other text with half of its height on an HTML page”
                <pre class="language-html">
            <code>
                &lt;sup&gt;                  &lt;/sup&gt; 
            
            </code>
            </pre>
            </li>
            <li>
                &lt;sub&gt; tag: “used to display a text beneath other text with half of its height on an HTML page”
                <pre class="language-html">
                <code>
                    &lt;sub&gt;               &lt;/sub&gt;  
                
                </code>
                </pre>
            </li>
            <li>
                &lt;mark&gt; tag: “used to display highlighted text on an HTML page”
                <pre class="language-html">
                    <code>
                        &lt;mark&gt;           &lt;/mark&gt;   
                    
                    </code>
                    </pre>
            </li>
            <li>
                &lt;tt&gt; tag: “used to display each letter with same width on an HTML page”
                <pre class="language-html">
                        <code>
                            &lt;tt&gt;         &lt;/tt&gt;
                        
                        </code>
                        </pre>
            </li>
            <li>
                &lt;ins&gt; tag: “used to display an inserted text on an HTML page”
                <pre class="language-html">
                            <code>
                                &lt;ins&gt;          &lt;/ins&gt;
                            
                            </code>
                            </pre>
            </li>
            <li>
                &lt;del&gt; tag: “used to display a deleted text on an HTML page”
                <pre class="language-html">
                                <code>
                                
                                    &lt;del&gt;           &lt;/del&gt;
                                </code>
                                </pre>
            </li>
            <li>
                &lt;big&gt; tag: “used to display a larger text on an HTML page”
                <pre class="language-html">
                                    <code>
                                        &lt;big&gt;      &lt;/big&gt;
                                    
                                    </code>
                                    </pre>
            </li>
            <li>
                &lt;small&gt; tag: “used to display a smaller text on an HTML page”
                <pre class="language-html">
                                        <code>
                                            &lt;small&gt;       &lt;/small&gt;
                                        
                                        </code>
                                        </pre>
            </li>
            <li>
                &lt;abbr&gt; tag: “used to define abbreviation form of an element”
                <pre class="language-html">
                                            <code>
                                                &lt;abbr&gt;         &lt;/abbr&gt;
                                            
                                            </code>
                                            </pre>
            </li>
            <li>
                &lt;acronym&gt; tag: “used to define acronym”
                <pre class="language-html">
                                                <code>
                                                    &lt;acronym&gt;   &lt;/acronym&gt;
                                                
                                                </code>
                                                </pre>
            </li>
            <li>
                &lt;blockquote&gt; tag: “used to insert long quote on an HTML page”
                <pre class="language-html">
                                                    <code>
                                                        &lt;blockquote&gt;   &lt;/blockquote&gt;
                                                    
                                                    </code>
                                                    </pre>
            </li>
            <li>
                &lt;q&gt; tag: “used to insert a short quote or to add a double quote on an HTML page”
                <pre class="language-html">
                                                        <code>
                                                            &lt;q&gt;    &lt;/q&gt;             
                                                        
                                                        </code>
                                                        </pre>
            </li>
            <li>&lt;cite&gt; tag: “used to provide a reference or defines the title of a creative work on an HTML page”
                <pre class="language-html">
                                                        <code>
                                                            &lt;cite&gt;       &lt;/cite&gt;          
                                                        </code>
                                                        </pre>
            </li>
            <li>&lt;bdo&gt; tag: “used to override the current direction of text on an HTML page”
                <pre class="language-html">
                                                        <code>
                                                            &lt;bdo&gt;        &lt;/bdo&gt;    
                                                        
                                                        </code>
                                                        </pre>
            </li>
            <li>&lt;address&gt; tag: “used to show contact information on an HTML page”
                <pre class="language-html">
                                                        <code>
                                      
&lt;address&gt;             &lt;/address&gt;                  
                                                        
                                                        </code>
                                                        </pre>
            </li>
            <li>
                &lt;code&gt; tag: “used to show programming code on an HTML page”
                <pre class="language-html">
                                                        <code>
                                                            &lt;code&gt;           &lt;/code&gt;                                 
                                                        
                                                        </code>
                                                        </pre>
            </li>
            <!-- offcanvas -->
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
                            The most widely used attribute is core attributes. There are 4 types of core attributes:
                            <br>
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
                                        The id attribute is used to give a title to an HTML element. When the HTML element is loading, a tooltip of the cursor comes and shows the written title.
                                    </div>
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
            <li>
                HTML Internationalization Attributes<button class="btn btn1 mx-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#o24" aria-controls="o24">
                    Read More...
                </button>
                <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="o24" aria-labelledby="offcanvasWithBothOptionsLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">
                            HTML Internationalization Attributes
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <p>
                            There are three types of internationalization attributes i.e. dir, lang, xml:lang<br>
                            <ul>
                                <li>The dir Attribute</li>
                                <li>The lang Attribute</li>
                                <li>The xml:lang Attribute</li>
                            </ul>
                        </p>
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="h4">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c4" aria-expanded="false" aria-controls="c4">
                                        The dir Attribute
                                    </button>
                                </h2>
                                <div id="c4" class="accordion-collapse collapse" aria-labelledby="h4" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        The dir attribute tells the browser in which direction should the text flow. There are two types of dir attributes:
                                        <br> ltr: Left to right
                                        <br> rtl: Right to left
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="h5">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c5" aria-expanded="false" aria-controls="c5">
                                        The lang Attribute
                                    </button>
                                </h2>
                                <div id="c5" class="accordion-collapse collapse" aria-labelledby="h5" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        This attribute is replaced by xml:lang attribute. Earlier it was used to indicate the language for the web page.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="h6">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c6" aria-expanded="false" aria-controls="c6">
                                        The xml:lang Attribute
                                    </button>
                                </h2>
                                <div id="c6" class="accordion-collapse collapse" aria-labelledby="h6" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Value for the xml:lang should be ISO-639 country code.</div>
                                </div>
                            </div>
                        </div>
                    </div>
            </li>
            <li>
                HTML Generic Attributes<button class="btn btn1 mx-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#o25" aria-controls="o25">
                    Read More...
                </button>
                <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="o25" aria-labelledby="offcanvasWithBothOptionsLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">
                            HTML Generic Attributes
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <p>
                            Generic attributes include various attributes which are mostly used. Some common generic attributes are:
                            <br>
                            <ul>
                                <li>The “align” Attribute</li>
                                <li>The “valign” Attribute</li>
                                <li>The “bgcolor” Attribute</li>
                                <li>The “width” Attribute</li>
                                <li>The “height” Attribute</li>
                                <li>The “src” Attribute</li>
                                <li>The “alt” Attribute</li>
                            </ul>
                        </p>
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="h4">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c4" aria-expanded="false" aria-controls="c4">
                                        The “align” Attribute
                                    </button>
                                </h2>
                                <div id="c4" class="accordion-collapse collapse" aria-labelledby="h4" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        align attribute uses align name for HTML element and uses left, right, and center values to indicate the text accordingly. It is used for horizontal aligns tags.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="h5">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c5" aria-expanded="false" aria-controls="c5">
                                        The “valign” Attribute
                                    </button>
                                </h2>
                                <div id="c5" class="accordion-collapse collapse" aria-labelledby="h5" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        valign attribute uses valign name for HTML element and uses top, middle, and bottom values to indicate the text accordingly. It is used for vertical aligns tags.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="h6">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c6" aria-expanded="false" aria-controls="c6">
                                        The “bgcolor” Attribute
                                    </button>
                                </h2>
                                <div id="c6" class="accordion-collapse collapse" aria-labelledby="h6" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        bgcolor attribute uses bgcolor name to HTML element and uses numeric, hexadecimal, RGB code values to change the element's background color accordingly. </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="h7">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c7" aria-expanded="false" aria-controls="c7">
                                        The “width” Attribute
                                    </button>
                                </h2>
                                <div id="c7" class="accordion-collapse collapse" aria-labelledby="h7" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        The width attribute uses the width name of the HTML element and uses numeric values to change the element’s width according to the numeric given </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="h8">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c8" aria-expanded="false" aria-controls="c8">
                                        The “height” Attribute
                                    </button>
                                </h2>
                                <div id="c8" class="accordion-collapse collapse" aria-labelledby="h8" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        The height attribute uses the height name of the HTML element and uses numeric values to change the element’s height according to the numeric given. </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="h9">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c9" aria-expanded="false" aria-controls="c9">
                                        The “src” Attribute
                                    </button>
                                </h2>
                                <div id="c9" class="accordion-collapse collapse" aria-labelledby="h9" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        The src attribute is mostly used by the img element that we’ll be going to discuss later. This src attribute specifies the URL path to that element that is to be displayed. We can choose any of the two paths:
                                        <ol>
                                            <li> Absolute path: This path contains the path of the external content.
                                            </li>
                                            <li>Relative path: This path contains the path of the internal content only. Relative paths are mostly used because content cannot be suddenly removed or changed. These are placed within a separate folder and that
                                                path is very well known to us</li>
                                        </ol>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="h10">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c10" aria-expanded="false" aria-controls="c10">
                                            The “alt” Attribute
                                        </button>
                                    </h2>
                                    <div id="c10" class="accordion-collapse collapse" aria-labelledby="h10" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            The alt attribute is mostly used by the img element. This alt attribute specifies the alternate text to that image that is to be displayed. For some issues, if that image is not visible then alt text helps to tell us about the description of that image.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </li>
            <li>
                HTML Links
                <button class="btn btn1 mx-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#o26" aria-controls="o26">
                    Read More...
                </button>
                <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="o26" aria-labelledby="offcanvasWithBothOptionsLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">
                            HTML Links </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <p>HTML Link uses two attributes <br>
                            <ul>
                                <li>href attribute</li>
                                <li>target attribute</li>
                            </ul>
                        </p>
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="h4">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c4" aria-expanded="false" aria-controls="c4">
                                        href attribute
                                    </button>
                                </h2>
                                <div id="c4" class="accordion-collapse collapse" aria-labelledby="h4" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Without this tag, we are unable to go to the next page or the next document. This attribute is compulsorily used by the &lt;a&gt; tag. This attribute contains a URL path.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="h5">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c5" aria-expanded="false" aria-controls="c5">
                                        target attribute
                                    </button>
                                </h2>
                                <div id="c5" class="accordion-collapse collapse" aria-labelledby="h5" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        The link tag uses another attribute which is the target attribute. By default, if we open any link then the page will be displayed in the current browser window. But if we wish to change these settings then we use the target attribute. It tells us where
                                        we want our linked document to be opened.
                                        <br> This target attribute can use any of the values:
                                        <br>
                                        <ul>
                                            <li>
                                                _blank: Opens linked document in a new window</li>
                                            <li>
                                                _top: Opens document in the full body of the window</li>
                                            <li>
                                                _self: Opens document in the same window</li>
                                            <li>
                                                _parent: Opens linked document in a parent frame</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="h6">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c6" aria-expanded="false" aria-controls="c6">
                                        Link to a Page section
                                    </button>
                                </h2>
                                <div id="c6" class="accordion-collapse collapse" aria-labelledby="h6" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        To link to a particular section of a webpage:
                                        <br>
                                        <ul>
                                            <li>
                                                use the name attribute or id attribute</li>
                                            <li>
                                                use hyperlink with # place where you want to go on a webpage.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="h7">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c7" aria-expanded="false" aria-controls="c7">
                                        Link Colors
                                    </button>
                                </h2>
                                <div id="c7" class="accordion-collapse collapse" aria-labelledby="h7" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Three types of links are there: <span style="color: red;"> active</span>, <span style="color: purple;">visited</span>, and<span style="color:blue;">
                                            unvisited.</span>
                                        <br>
                                        <ul>
                                            <li>
                                                Active: It is in <span style="color: red;"> red</span> with an underline.
                                            </li>
                                            <li>
                                                Visited: It is <span style="color: purple;">purple</span> and underlined.
                                            </li>
                                            <li>
                                                Unvisited: It is <span style="color:blue;">blue</span> and underlined.
                                            </li>
                                        </ul>
                                        By CSS we can change the color of the links.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <pre class="language-html"><code>
          &lt; href= "Your specified path" &gt;             &lt;/a&gt;
        </code></pre>
            </li>
            <li>
                HTML Comments
                <button class="btn btn1 mx-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#o27" aria-controls="o27">
                    Read More...
                </button>
                <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="o27" aria-labelledby="offcanvasWithBothOptionsLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">
                            HTML Comments </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <p>HTML Comments<br>
                            <ul>
                                <li>Comments are a piece of code that is ignored by a web browser.</li>
                                <li>Comments help us to understand the code.</li>
                                <li>All programming language has their commenting style.</li>
                                <li> In HTML, we use &lt;!-- content --&gt; tag. Any content placed in these brackets will be treated as a comment.
                                </li>
                                <li>Shortcut Keys are "Ctrl + /" . This will automatically put our selected content as a comment
                                </li>
                                <li> There are two types of comments: Single comments and Multiline comments.</li>
                            </ul>
                        </p>
                    </div>
                </div><br> Single comments
                <pre class="language-html"><code>
           &lt;!-- Single line Comment --&gt;
        </code></pre><br> Multi-line comments
                <pre class="language-html"><code>
        &lt;!--
        This is a multiline comment.
        You can add as many as lines you want.
        --&gt;
        </code></pre>
            </li>
            <li>
                HTML Images
                <button class="btn btn1 mx-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#o28" aria-controls="o28">
                    Read More...
                </button>
                <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="o28" aria-labelledby="offcanvasWithBothOptionsLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">
                            HTML Images </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <p>To represent HTML pages beautifully and to explain content, we use images for that. Our ability to comprehend complex things is aided by visual representations to do that we use images. <br> &lt;img&gt; tag uses the height or width
                            attribute to set the height or width of an image. Values for height or width attribute must be in pixel or percentage and value should be placed in double quotes otherwise we can see an error.
                        </p>
                    </div>
                </div>
                <pre class="language-html"><code>
          &lt;img src="images/profile_pic" alt="Testing Image" /&gt;
        </code></pre>
            </li>
            <li>
                HTML Lists
                <button class="btn btn1 mx-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#o29" aria-controls="o29">
                    Read More...
                </button>
                <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="o29" aria-labelledby="offcanvasWithBothOptionsLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">
                            HTML Lists </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <p>Our day-to-day lives revolve around lists. For example, We purchase items while shopping. A list of all our items is included on the bill we receive from the shopkeeper. Similarly, web developers use lists to display the data.
                            <br> HTML lists are used to display the data in an ordered and unordered form. List contains one or more list elements. The HTML list is of three types:
                            <br>
                            <ul>
                                <li>An unordered list</li>
                                <li>An ordered list</li>
                                <li>A definition list</li>
                            </ul>
                        </p>
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="h4">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c4" aria-expanded="false" aria-controls="c4">
                                        An Unordered List
                                    </button>
                                </h2>
                                <div id="c4" class="accordion-collapse collapse" aria-labelledby="h4" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        This list will list items using bullets. <br> Unordered lists have no sequence.
                                        <br> They are more like bullet points.
                                        <br> Setting type attribute: Type attribute used to specify the type of bullet.
                                        <br> There are three types of bullets: <br>
                                        <ul>
                                            <li>disc</li>
                                            <li>square</li>
                                            <li>circle</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="h5">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c5" aria-expanded="false" aria-controls="c5">
                                        An Ordered List
                                    </button>
                                </h2>
                                <div id="c5" class="accordion-collapse collapse" aria-labelledby="h5" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        This list will list items using numbers. We can use different types of numbers like roman numerals etc. <br> Ordered lists have a sequence. <br> They are a more like numbered list. <br>the type attribute is used
                                        to specify the type of numbering we want. There are five options:
                                        <ol>
                                            <li>Uppercase Roman Numerals</li>
                                            <li>Lowercase Roman Numerals</li>
                                            <li>Numerals</li>
                                            <li>Lowercase Letters</li>
                                            <li> Uppercase Letters</li>
                                        </ol> <br> the start attribute is used to specify the starting type of numbering. (start="3")
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="h6">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c6" aria-expanded="false" aria-controls="c6">
                                        A Definition List
                                    </button>
                                </h2>
                                <div id="c6" class="accordion-collapse collapse" aria-labelledby="h6" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        This list will arrange list items like a dictionary. <br> Definition List is also known as Description List. <br> Definition List works the same as a dictionary works. <br> Dictionary is used for describing the
                                        term similarly in HTML we use a Definition List or Description List to define a term. <br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br> unordered list
                <pre class="language-html"><code>
          &lt;ul&gt;
          &lt;li&gt;Pen&lt;/li&gt;
          &lt;/ul&gt;
        </code></pre>
                <br> ordered list
                <pre class="language-html"><code>
          &lt;ol&gt;
          &lt;li&gt;Pen&lt;/li&gt;
          &lt;/ol&gt;
        </code></pre>
                <br>Definition list
                <pre class="language-html"><code>
          &lt;dl&gt;
            &lt;dt&gt;//definition term&lt;/dt&gt;
            &lt;dd&gt;//describing term&lt;/dd&gt;
            &lt;/dl&gt;
        </code></pre>
            </li>
            <li>
                HTML Tables
                <button class="btn btn1 mx-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#o210" aria-controls="o210">
                    Read More...
                </button>
                <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="o210" aria-labelledby="offcanvasWithBothOptionsLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">
                            HTML Tables </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul>
                            <li>&lt;table&gt; tag is used to define the start of a table.</li>
                            <li>&lt;table&gt; tag also has its corresponding &lt;/table&gt; tag.</li>
                            <li>we can arrange our data in rows and columns of a table.</li>
                            <li>&lt;th&gt; tag is used for heading in a table.</li>
                            <li>For rows, &lt;tr&gt; tag is used.</li>
                            <li>For columns, &lt;td&gt; tag is used</li>
                            <li>NOTE: &lt;td&gt; tag also referred to as data cell.</li>
                        </ul>
                        </p>
                    </div>
                </div>
                <pre class="language-html"><code>
          &lt;table&gt;
        &lt;tr&gt;
        &lt;th&gt;Name&lt;/th&gt;
        &lt;th&gt;Age&lt;/th&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
        &lt;td&gt;Harry&lt;/td&gt;
        &lt;td&gt;100&lt;/td&gt;
        &lt;/tr&gt;
        &lt;/table&gt;
          
        </code></pre>
            </li>
            <li>
                HTML Block Elements
                <button class="btn btn1 mx-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#o211" aria-controls="o211">
                    Read More...
                </button>
                <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="o211" aria-labelledby="offcanvasWithBothOptionsLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">
                            HTML Block Elements
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        You already know about tags all those tags have some displaying value i.e. Either they are block-level elements or they are Inline elements. <br> Now, let's discuss block-level elements.
                        <br> Block-level elements are those elements that start in a new line and take the entire width of the screen.
                        <br> Block-level Elements:
                        <br>
                        <ul>
                            <li>&lt;h1&gt;,&lt;h2&gt;,&lt;h3&gt;,&lt;h4&gt;,&lt;h5&gt;,&lt;h6&gt;</li>
                            <li>&lt;p&gt;</li>
                            <li> &lt;hr&gt;</li>
                            <li> &lt;address&gt; </li>
                            <li> &lt;article&gt;</li>
                            <li> &lt;aside&gt;</li>
                            <li> &lt;blockquote&gt;</li>
                            <li> &lt;canvas&gt;</li>
                            <li> &lt;dd&gt;</li>
                            <li> &lt;div&gt;</li>
                            <li> &lt;dl&gt;</li>
                            <li> &lt;dt&gt;</li>
                            <li> &lt;fieldset&gt;</li>
                            <li> &lt;figcaption&gt;</li>
                            <li> &lt;figure&gt;</li>
                            <li> &lt;footer&gt;</li>
                            <li> &lt;form&gt;</li>
                            <li> &lt;header&gt;</li>
                            <li> &lt;li&gt;</li>
                            <li> &lt;main&gt;</li>
                            <li> &lt;nav&gt;</li>
                            <li> &lt;noscript&gt;</li>
                            <li> &lt;ol&gt;</li>
                            <li> &lt;ul&gt;</li>
                            <li> &lt;pre&gt;</li>
                            <li> &lt;section&gt;</li>
                            <li> &lt;table&gt;</li>
                            <li> &lt;video&gt;</li>
                        </ul>
                        </p>
                    </div>
                </div>
            </li>
            <li>
                HTML Inline Elements
                <button class="btn btn1 mx-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#o212" aria-controls="o212">
                    Read More...
                </button>
                <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="o212" aria-labelledby="offcanvasWithBothOptionsLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">
                            HTML Inline Elements
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        Inline Elements don't start on a new line. It only takes the width required to cover the content. <br> Inline Elements: <br>
                        <ul>
                            <li> &lt;a&gt;</li>
                            <li> &lt;abbr&gt;</li>
                            <li> &lt;acronym&gt;</li>
                            <li> &lt;button&gt;</li>
                            <li> &lt;br&gt;</li>
                            <li> &lt;big&gt;</li>
                            <li> &lt;bdo&gt;</li>
                            <li> &lt;b&gt;</li>
                            <li> &lt;cite&gt;</li>
                            <li> &lt;code&gt;</li>
                            <li> &lt;dfn&gt;</li>
                            <li> &lt;i&gt;</li>
                            <li> &lt;em&gt;</li>
                            <li> &lt;img&gt;</li>
                            <li> &lt;input&gt;</li>
                            <li> &lt;kbd&gt;</li>
                            <li> &lt;label&gt;</li>
                            <li> &lt;map&gt;</li>
                            <li> &lt;object&gt;</li>
                            <li> &lt;output&gt;</li>
                            <li> &lt;tt&gt;</li>
                            <li> &lt;time&gt;</li>
                            <li> &lt;samp&gt;</li>
                            <li> &lt;script&gt;</li>
                            <li> &lt;select&gt;</li>
                            <li> &lt;small&gt;</li>
                            <li> &lt;span&gt;</li>
                            <li> &lt;strong&gt;</li>
                            <li> &lt;sub&gt;</li>
                            <li> &lt;sup&gt;</li>
                            <li> &lt;textarea&gt;</li>
                        </ul>
                        </p>
                    </div>
                </div>
            </li>
        </ol>
        </div>
        </div>
        <?php require_once 'Footer.php'?>