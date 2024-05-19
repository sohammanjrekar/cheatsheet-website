<?php require_once 'Navbar.php'?>
    <!-- mid part -->
    <nav class="mt-5 p-2 headline" style="background:linear-gradient(to top right, #fb5475 0%, #f77b50 59%);">
        <div class="text-center " style="margin-top:5vh;"><img style="margin-right:2vh;" src="../../assets/img/angular-icon.svg" alt="" /> AngularJS cheatsheet
        </div>
    </nav>
    <div class="container">
        <div class="p-5 mb-4 bg-light rounded-3 jumbo mt-2">
            <div class="container-fluid py-3">
                <h1 class="display-5 fw-bold">AngularJS</h1>
                <div class="row">
                    <div class="col-md-8">
                        <p class="fs-4">
                            React is a declarative, efficient, and flexible JavaScript library for building user interfaces. It’s ‘V’ in MVC. ReactJS is an open-source, component-based front-end library responsible only for the view layer of the application. It is maintained by
                            Facebook. <br> React uses a declarative paradigm that makes it easier to reason about your application and aims to be both efficient and flexible.
                        </p>
                    </div>
                    <div class="col-md-4">
                        <img src="../../assets/img/angular-icon.svg" alt="" style="width:100% ;" />
                    </div>
                </div>
                <button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#o1" aria-controls="o1">
          Read More...
        </button>
                <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="o1" aria-labelledby="offcanvasWithBothOptionsLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">
                            Reactjs
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <p>
                            Features of React.js: There are unique features are available on React because that it is widely popular.
                            <br><br>
                            <ul>
                                <li>
                                    Use JSX: It is faster than normal JavaScript as it performs optimizations while translating to regular JavaScript. It makes it easier for us to create templates.</li>
                                <li>
                                    Virtual DOM: Virtual DOM exists which is like a lightweight copy of the actual DOM. So for every object that exists in the original DOM, there is an object for that in React Virtual DOM. It is exactly the same, but it does not have the power to directly
                                    change the layout of the document. Manipulating DOM is slow, but manipulating Virtual DOM is fast as nothing gets drawn on the screen.</li>
                                <li>
                                    One-way Data Binding: This feature gives you better control over your application.</li>
                                <li>
                                    Component: A Component is one of the core building blocks of React. In other words, we can say that every application you will develop in React will be made up of pieces called components. Components make the task of building UIs much easier. You can
                                    see a UI broken down into multiple individual pieces called components and work on them independently and merge them all in a parent component which will be your final UI.</li>
                                <li>
                                    Performance: React.js use JSX, which is faster compared to normal JavaScript and HTML. Virtual DOM is a less time taking procedure to update webpages content.</li>
                            </ul>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <ol>
            <!-- offcanvas -->
            <li>
                Create a new React project
                <pre class="language-jsx">
                <code>
                    npx create-react-app myapp
                </code>
            </pre>
            </li>
            <li>class based component
                <pre class="language-jsx">
                                    <code>    import React, { Component } from 'react'                                     
                                        export class Contact extends Component {
                                        render() {
                                          return (
                                            <div>Contact</div>
                                          )
                                        }
                                      }
                                      
                                      export default Contact
                                        </code>
        </pre></li>
            <li>
                fuction based component

                <pre class="language-jsx">
                                    <code>     import React from 'react'                                      
                                        const Contact = () => {
                                        return (
                                          <div>Contact</div>
                                        )
                                      }
                                      
                                      export default Contact
                                        </code>
        </pre>
            </li>
            <li>start reactjs app
                <pre class="language-jsx">
    <code>
        npm start
</code>
</pre>
            </li>
            <li>
                File structure in src folder (use cmd)
                <pre class="language-jsx">
    <code>
      mkdir Utils Assets Components Config Layouts Middleware Pages Routes Services Utils
</code>
</pre>
            </li>
            <li>
                ADD blank many js files
                <pre class="language-jsx">
    <code>
      type NUL > sideBar.js 
      type NUL > Footer.js 
      type NUL > header.js
</code>
</pre>
            </li>
            <li>
                import react-router-dom
                <pre class="language-jsx">
    <code>
      npm i react-router-dom
</code>
</pre>
            </li>
            <li>
                import router and routes
                <pre class="language-jsx">
    <code>
      import { BrowserRouter as Router, Routes, Route } from 'react-router-dom';
</code>
</pre>
                <pre class="language-jsx">
  <code>
    
    &lt;Router&gt;
      &lt;Routes&gt;
        &lt;Route path="/" element={&lt;Home /&gt;}/&gt;
        &lt;Route path="" element={&lt;Singlemovie /&gt;}/&gt;
        &lt;Route path="*" element={&lt;Errorpage /&gt;}/&gt;
      &lt;/Routes&gt;
      &lt;/Router&gt;
</code>
</pre>
            </li>

            <li>
                for fetch id from link(route)<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#o3" aria-controls="o3">
          Read More...
        </button>
                <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="o3" aria-labelledby="offcanvasWithBothOptionsLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">
                            useParams();
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <p>
                            According to the definition in React Router doc, useParams returns: an object of key/value pairs of URL parameters. Use it to access match.params of the current route
                            <br><br>
                            <ul>
                                <li>
                                    What does it mean in plain English?</li>
                                <li>
                                    It means whatever you set up in useParams(ex: title), your params have to match with the &lt; Route path='/path/:title' &gt; .</li>
                            </ul>
                        </p>
                    </div>
                </div>
                <pre class="language-jsx">
          <code>
            import { useParams } from 'react-router-dom'
      </code>
      </pre>
                <pre class="language-jsx">
    <code>
      const { id }=useParams();
</code>
</pre>
            </li>

        </ol>
    </div>
    </div>
    <?php require_once 'Footer.php'?>