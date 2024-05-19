<?php require_once 'Navbar.php'?>
    <!-- mid part -->
    <nav class="mt-5 p-2 headline" style="background:linear-gradient(to top right, #fb5475 0%, #f77b50 59%);">
        <div class="text-center " style="margin-top:5vh;"><img style="margin-right:2vh;" src="../../assets/img/pocoo_flask-icon.svg" alt="" /> Flask cheatsheet
        </div>
    </nav>
    <div class="container">
        <div class="p-5 mb-4 bg-light rounded-3 jumbo mt-2">
            <div class="container-fluid py-3">
                <h1 class="display-5 fw-bold">Flask</h1>
                <div class="row">
                    <div class="col-md-8">
                        <p class="fs-4">
                            Flask is a web application framework written in Python. Armin Ronacher, who leads an international group of Python enthusiasts named Pocco, develops it. Flask is based on Werkzeug WSGI toolkit and Jinja2 template engine. Both are Pocco projects. </p>
                    </div>
                    <div class="col-md-4">
                        <img src="../../assets/img/pocoo_flask-icon.svg" alt="" style="width:100% ;" />
                    </div>
                </div>
                <button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#o1" aria-controls="o1">
          Read More...
        </button>
                <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="o1" aria-labelledby="offcanvasWithBothOptionsLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">
                            Flask
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <p>
                            What is Flask?<br> Flask is a web application framework written in Python. It is developed by Armin Ronacher, who leads an international group of Python enthusiasts named Pocco. Flask is based on the Werkzeug WSGI toolkit and
                            Jinja2 template engine. Both are Pocco projects.
                            <br><br><br> WSGI
                            <br> Web Server Gateway Interface (WSGI) has been adopted as a standard for Python web application development. WSGI is a specification for a universal interface between the web server and the web applications.
                            <br><br><br> Werkzeug
                            <br> It is a WSGI toolkit, which implements requests, response objects, and other utility functions. This enables building a web framework on top of it. The Flask framework uses Werkzeug as one of its bases.
                            <br><br><br> Jinja2
                            <br> Jinja2 is a popular templating engine for Python. A web templating system combines a template with a certain data source to render dynamic web pages.
                            <br><br> Flask is often referred to as a micro framework. It aims to keep the core of an application simple yet extensible. Flask does not have built-in abstraction layer for database handling, nor does it have form a validation
                            support. Instead, Flask supports the extensions to add such functionality to the application.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <ol>
            <!-- offcanvas -->
            <li>
                Install virtualenv for development environment<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom1" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom1" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">virtualenv </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        virtualenv is considered as the virtual python environment builder which is used to create the multiple python virtual environment side by side.
                    </div>
                </div>
                <pre class="language-sh">
                <code>
                    pip install virtualenv
                </code>
            </pre>
            </li>
            <li>setup project
                <pre class="language-sh">
                                    <code>    
                                        mkdir newproj
                                        cd newproj
                                        virtualenv venv
                                        </code>
        </pre>
                <pre class="language-sh">
            <code>
                virtualenv venv
            </code>
        </pre></li>
            <li>
                activate virtualenv

                <pre class="language-sh">
                                    <code>     
                                        venv\scripts\activate
                                        </code>
        </pre>
            </li>
            <li>install flask
                <pre class="language-py">
    <code>
        pip install Flask
</code>
</pre>
            </li>
            <li>
                create app.py and add<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom2" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom2" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel"> app.py</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        To build the python web application, we need to import the Flask module.<br><br> An object of the Flask class is considered as the WSGI application. We need to pass the name of the current module, i.e. __name__ as the argument
                        into the Flask constructor.
                    </div>
                </div>
                <pre class="language-py">
    <code>
        from flask import Flask
        app = Flask(__name__)
        
        @app.route('/')
        def hello_world():
           return 'Hello World'
        
        if __name__ == '__main__':
            app.run(debug = True)
</code>
</pre>
            </li>






            <li>
                route() function<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom3" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom3" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel"> route() function</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        The route() function of the Flask class defines the URL mapping of the associated function.<br><br> It accepts the following parameters.
                        <br> rule: It represents the URL binding with the function.<br><br> options: It represents the list of parameters to be associated with the rule object
                    </div>
                </div>
                <pre class="language-py">
    <code>
        app.route(rule, options)  
</code>
</pre>
            </li>








            <li>
                app.run() <button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom4" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom4" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel"> app.run() </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        As we can see here, the / URL is bound to the main function which is responsible for returning the server response. It can return a string to be printed on the browser's window or we can use the HTML template to return the HTML file as a response from
                        the server.
                        <br><br> Finally, the run method of the Flask class is used to run the flask application on the local development server.
                        <br><br>
                        <table class="alt table-bordered">
                            <tbody>
                                <tr>
                                    <th>SN</th>
                                    <th>Option</th>
                                    <th>Description</th>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>host</td>
                                    <td>The default hostname is 127.0.0.1, i.e. localhost.</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>port</td>
                                    <td>The port number to which the server is listening to. The default port number is 5000.</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>debug</td>
                                    <td>The default is false. It provides debug information if it is set to true.</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>options</td>
                                    <td>It contains the information to be forwarded to the server.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <pre class="language-py">
    <code>
        app.run(host, port, debug, options)
</code>
</pre>
            </li>




            <li>Debug mode<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom6" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom6" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel"> Debug mode</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">

                        A Flask application is started by calling the run() method. However, while the application is under development, it should be restarted manually for each change in the code. To avoid this inconvenience, enable debug support. The server will then reload
                        itself if the code changes. It will also provide a useful debugger to track the errors if any, in the application.
                        <br><br> The Debug mode is enabled by setting the debug property of the application object to True before running or passing the debug parameter to the run() method.
                    </div>
                </div>
                <pre class="language-py">
    <code>
        app.run(debug = True)
</code>
</pre>
            </li>


            <li>
                Flask App routing<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom2" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom2" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel"> Flask App routing</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        App routing is used to map the specific URL with the associated function that is intended to perform some task. It is used to access some particular page like Flask Tutorial in the web application.
                        <br><br> In our first application, the URL ('/') is associated with the home function that returns a particular string displayed on the web page.
                        <br><br> In other words, we can say that if we visit the particular URL mapped to some particular function, the output of that function is rendered on the browser's screen.
                    </div>
                </div>
                <pre class="language-py">
    <code>
        @app.route('/home')  
def home():  
    return "hello, welcome to our website";  
</code>
</pre>
            </li>

            <li>
                converter in routing<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom10" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom10" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel"> converter in routing</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        The converter can also be used in the URL to map the specified variable to the particular data type. For example, we can provide the integers or float like age or salary respectively<br><br> The following converters are used to
                        convert the default string type to the associated data type.
                        <br><br> string: default<br> int: used to convert the string to the integer<br> float: used to convert the string to the float.<br> path: It can accept the slashes given in the URL.<br>
                    </div>
                </div>
                <pre class="language-py">
    <code>
        @app.route('/home/&lt;int:age&gt;')  
            def home(age):  
                return "Age = %d"%age;  
</code>
</pre>
            </li>



            <li>
                The add_url_rule() function<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom11" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom11" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel"> The add_url_rule() function</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        There is one more approach to perform routing for the flask web application that can be done by using the add_url() function of the Flask class.<br><br> This function is mainly used in the case if the view function is not given
                        and we need to connect a view function to an endpoint externally by using this function.
                    </div>
                </div>
                <pre class="language-py">
    <code>
        add_url_rule(&lt;url rule&gt;, &lt;endpoint&gt;, &lt;view function&gt;)    
</code>
</pre>
                <pre class="language-py">
    <code>
    def about():  
        return "This is about page";  
    app.add_url_rule("/about","about",about)    
</code>
</pre>
            </li>
            <li>
                Flask URL Building<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom12" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom12" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel"> Flask URL Building</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        The url_for() function is used to build a URL to the specific function dynamically. The first argument is the name of the specified function, and then we can pass any number of keyword argument corresponding to the variable part of the URL.
                        <br><br> This function is useful in the sense that we can avoid hard-coding the URLs into the templates by dynamically building them using this function.
                        <br><br> The above script simulates the library management system which can be used by the three types of users, i.e., admin, librarion, and student. There is a specific function named user() which recognizes the user the redirect
                        the user to the exact function which contains the implementation for this particular function.
                        <br><br><br> Benefits of the Dynamic URL Building<br><br> It avoids hard coding of the URLs.<br> We can change the URLs dynamically instead of remembering the manually changed hard-coded URLs.<br> URL building handles the escaping
                        of special characters and Unicode data transparently.<br> The generated paths are always absolute, avoiding unexpected behavior of relative paths in browsers.<br> If your application is placed outside the URL root, for example,
                        in /myapplication instead of /, url_for() properly handles that for you.
                        <br><br>
                    </div>
                </div>
                <pre class="language-py">
    <code>
        @app.route('/user/<name>')  
            def user(name):  
                if name == 'admin':  
                    return redirect(url_for('admin'))  
                if name == 'librarion':  
                    return redirect(url_for('librarion'))  
                if name == 'student':  
                    return redirect(url_for('student'))  
</code>
</pre>
            </li>



            <li>
                Flask HTTP methods( GET() )<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom13" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom13" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel"> Flask HTTP methods( GET() )</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        HTTP is the hypertext transfer protocol which is considered as the foundation of the data transfer in the world wide web. All web frameworks including flask need to provide several HTTP methods for data communication.<br><br>
                        <br><br> We can specify which HTTP method to be used to handle the requests in the route() function of the Flask class. By default, the requests are handled by the GET() method.
                        <br><br>


                        <table class="alt table-bordered">
                            <tbody>
                                <tr>
                                    <th>SN</th>
                                    <th>Method</th>
                                    <th>Description</th>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>GET</td>
                                    <td>It is the most common method which can be used to send data in the unencrypted form to the server.</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>HEAD</td>
                                    <td>It is similar to the GET but used without the response body.</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>POST</td>
                                    <td>It is used to send the form data to the server. The server does not cache the data transmitted using the post method.</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>PUT</td>
                                    <td>It is used to replace all the current representation of the target resource with the uploaded content.</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>DELETE</td>
                                    <td>It is used to delete all the current representation of the target resource specified in the URL.</td>
                                </tr>
                            </tbody>
                        </table>
                        <br><br> We can specify which HTTP method to be used to handle the requests in the route() function of the Flask class. By default, the requests are handled by the GET() method.
                    </div>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne1" aria-expanded="false" aria-controls="collapseOne">
                                POST Method
                            </button>
                        </h2>
                        <div id="collapseOne1" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-html">
                                    <code>
                                        &lt;form action = "http://localhost:5000/login" method = "post"&gt;  
    &lt;table&gt;  
   &lt;tr&gt;&lt;td&gt;Name&lt;/td&gt;  
   &lt;td&gt;&lt;input type ="text" name ="uname"&gt;&lt;/td&gt;&lt;/tr&gt;  
   &lt;tr&gt;&lt;td&gt;Password&lt;/td&gt;  
   &lt;td&gt;&lt;input type ="password" name ="pass"&gt;&lt;/td&gt;&lt;/tr&gt;  
   &lt;tr&gt;&lt;td&gt;&lt;input type = "submit"&gt;&lt;/td&gt;&lt;/tr&gt;  
&lt;/table&gt;  
 &lt;/form&gt; 
                                    </code>
                                    </pre>
                                <pre class="language-python">
                                        <code>
                                            @app.route('/login',methods = ['POST'])  
                                            def login():  
                                                  uname=request.form['uname']  
                                                  passwrd=request.form['pass']  
                                                  if uname=="ayush" and passwrd=="google":  
                                                      return "Welcome %s" %uname  
                                        </code>
                                        </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo1" aria-expanded="false" aria-controls="collapseTwo">
                                GET Method
                            </button>
                        </h2>
                        <div id="collapseTwo1" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-html">
                                    <code>
                                        &lt;form action = "http://localhost:5000/login" method = "get"&gt;  
                                        &lt;table&gt;  
                                       &lt;tr&gt;&lt;td&gt;Name&lt;/td&gt;  
                                       &lt;td&gt;&lt;input type ="text" name ="uname"&gt;&lt;/td&gt;&lt;/tr&gt;  
                                       &lt;tr&gt;&lt;td&gt;Password&lt;/td&gt;  
                                       &lt;td&gt;&lt;input type ="password" name ="pass"&gt;&lt;/td&gt;&lt;/tr&gt;  
                                       &lt;tr&gt;&lt;td&gt;&lt;input type = "submit"&gt;&lt;/td&gt;&lt;/tr&gt;  
                                    &lt;/table&gt;  
                                     &lt;/form&gt;  
                                    </code>
                                    </pre>

                                <pre class="language-python">
                                        <code>
                                           
                                        </code>
                                        </pre>
                            </div>
                        </div>
                    </div>
                </div>
            </li>


            <li>
                Flask Templates<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom15" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom15" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel"> Flask Templates</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        flask facilitates us to return the response in the form of HTML templates.The following flask script contains a view function, i.e., the message() which is associated with the URL '/'.<br>
                        <br><br> Rendering external HTML files <br><br>Flask facilitates us to render the external HTML file instead of hardcoding the HTML in the view function. Here, we can take advantage of the jinja2 template engine on which the flask
                        is based.Flask provides us the render_template() function which can be used to render the external HTML file to be returned as the response from the view function.
                    </div>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne2" aria-expanded="false" aria-controls="collapseOne">
                                Flask Templates
                            </button>
                        </h2>
                        <div id="collapseOne2" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-python">
                                        <code>
                                            @app.route('/')  
                                            def message():  
                                                  return " &lt;html&gt;&lt;body&gt;&lt;h1&gt;Hi, welcome to the website&lt;/h1&gt;&lt;/body&gt;&lt;/html&gt;"  
                                        </code>
                                        </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo">
                                Rendering external HTML files
                            </button>
                        </h2>
                        <div id="collapseTwo2" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">

                                <pre class="language-python">
                                        <code>
                                            @app.route('/')  
                                            def message():  
                                                  return render_template('message.html')    
                                        </code>
                                        </pre>
                            </div>
                        </div>
                    </div>
                </div>
            </li>




            <li>
                Delimiters<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom16" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom16" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel"> Delimiters</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        Jinga 2 template engine provides some delimiters which can be used in the HTML to make it capable of dynamic data representation. The template system provides some HTML syntax which are placeholders for variables and expressions that are replaced by their
                        actual values when the template is rendered.<br><br><br> The jinga2 template engine provides the following delimiters to escape from the HTML<br><br> a) {% ... %} for statements <br> b) {{ ... }} for expressions
                        to print to the template output<br> c) {# ... #} for the comments that are not included in the template output<br> d) # ... ## for line statements
                    </div>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne4" aria-expanded="false" aria-controls="collapseOne">
                                message.html
                            </button>
                        </h2>
                        <div id="collapseOne4" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-html">
                                    <code>
                                        &lt;html&gt;  
    &lt;head&gt;  
    &lt;title&gt;Message&lt;/title&gt;  
    &lt;/head&gt;  
    &lt;body&gt;  
    &lt;h1&gt;hi, {{ name }}&lt;/h1&gt;  
    &lt;/body&gt;  
    &lt;/html&gt;
                                    </code>
                                    </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo4" aria-expanded="false" aria-controls="collapseTwo">
                                app.py
                            </button>
                        </h2>
                        <div id="collapseTwo4" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-python">
                                    <code>
                                        @app.route('/user/&lt;uname&gt;')  
                                            def message(uname):  
                                                  return render_template('message.html',name=uname)  
                                    </code>
                                    </pre>
                            </div>
                        </div>
                    </div>
                </div>
            </li>




            <li>
                Embedding Python statements in HTML<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom17" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom17" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel"> Embedding Python statements in HTML</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        Due to the fact that HTML is a mark-up language and purely used for the designing purpose, sometimes, in the web applications, we may need to execute the statements for the general-purpose computations. For this purpose, Flask facilitates us the delimiter
                        {%...%} which can be used to embed the simple python statements into the HTML.
                    </div>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne4" aria-expanded="false" aria-controls="collapseOne">
                                message.html
                            </button>
                        </h2>
                        <div id="collapseOne4" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-html">
                                    <code>
                                        &lt;html&gt;  
                                        &lt;head&gt;  
                                        &lt;title&gt;print table&lt;/title&gt;  
                                        &lt;/head&gt;  
                                        &lt;body&gt;  
                                        &lt;h2&gt; printing table of {{n}}&lt;/h2&gt;  
                                        {% for i  in range(1,11): %}  
                                            &lt;h3&gt;{{n}} X {{i}} = {{n * i}} &lt;/h3&gt;  
                                        {% endfor %}  
                                        &lt;/body&gt;  
                                        &lt;/html&gt;    
                                    </code>
                                    </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo6" aria-expanded="false" aria-controls="collapseTwo">
                                app.py
                            </button>
                        </h2>
                        <div id="collapseTwo6" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-python">
                                    <code>
                                        @app.route('/table/&lt;int:num&gt;')  
def table(num):  
      return render_template('print-table.html',n=num)  
                                    </code>
                                    </pre>
                            </div>
                        </div>
                    </div>
                </div>
            </li>



            <li>
                Referring Static files in HTML
                <pre class="language-py">
    <code>
        &lt;link rel="stylesheet" href="{{ url_for('static', filename='css/style.css') }}"&gt;
</code>
</pre>
            </li>


            <li>
                Flask Request Object<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom19" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom19" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel"> Flask Request Object</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        In the client-server architecture, the request object contains all the data that is sent from the client to the server. As we have already discussed in the tutorial, we can retrieve the data at the server side using the HTTP methods.
                        <table class="alt table-bordered">
                            <tbody>
                                <tr>
                                    <th>SN</th>
                                    <th>Attribute</th>
                                    <th>Description</th>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Form</td>
                                    <td>It is the dictionary object which contains the key-value pair of form parameters and their values.</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>args</td>
                                    <td>It is parsed from the URL. It is the part of the URL which is specified in the URL after question mark (?).</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Cookies</td>
                                    <td>It is the dictionary object containing cookie names and the values. It is saved at the client-side to track the user session.</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>files</td>
                                    <td>It contains the data related to the uploaded file. </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>method</td>
                                    <td>It is the current request method (get or post).</td>
                                </tr>
                            </tbody>
                        </table>

                        <br><br><br> Form data retrieval on the template<br> In the following example, the / URL renders a web page customer.html that contains a form which is used to take the customer details as the input from the customer.<br><br> The
                        data filled in this form is posted to the /success URL which triggers the print_data() function. The print_data() function collects all the data from the request object and renders the result_data.html file which shows all the
                        data on the web page.
                    </div>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne6" aria-expanded="false" aria-controls="collapseOne">
                                message.html
                            </button>
                        </h2>
                        <div id="collapseOne6" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-html">
                                    <code>
                                        &lt;html&gt;  
                                        &lt;body&gt;  
                                            &lt;h3&gt;Register the customer, fill the following form.&lt;/h3&gt;  
                                           &lt;form action = "http://localhost:5000/success" method = "POST"&gt;  
                                              &lt;p&gt;Name &lt;input type = "text" name = "name" /&gt;&lt;/p&gt;  
                                              &lt;p&gt;Email &lt;input type = "email" name = "email" /&gt;&lt;/p&gt;  
                                              &lt;p&gt;Contact &lt;input type = "text" name = "contact" /&gt;&lt;/p&gt;  
                                              &lt;p&gt;Pin code &lt;input type ="text" name = "pin" /&gt;&lt;/p&gt;  
                                              &lt;p&gt;&lt;input type = "submit" value = "submit" /&gt;&lt;/p&gt;  
                                           &lt;/form&gt;  
                                        &lt;/body&gt;  
                                     &lt;/html&gt;  
                                    </code>
                                    </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo6" aria-expanded="false" aria-controls="collapseTwo">
                                app.py
                            </button>
                        </h2>
                        <div id="collapseTwo6" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-python">
                                    <code>
                                        @app.route('/success',methods = ['POST', 'GET'])  
                                        def print_data():  
                                           if request.method == 'POST':  
                                              result = request.form  
                                              return render_template("result_data.html",result = result)    
                                    </code>
                                    </pre>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo7" aria-expanded="false" aria-controls="collapseTwo">
                                result_data.html
                            </button>
                        </h2>
                        <div id="collapseTwo7" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-html">
                                    <code>
                                        &lt;p&gt;&lt;strong&gt;Thanks for the registration. Confirm your details&lt;/strong&gt;&lt;/p&gt;  
      &lt;table border = 1&gt;  
         {% for key, value in result.items() %}  
            &lt;tr&gt;  
               &lt;th&gt; {{ key }} &lt;/th&gt;  
               &lt;td&gt; {{ value }} &lt;/td&gt;  
            &lt;/tr&gt;  
         {% endfor %}  
      &lt;/table&gt;   
                                    </code>
                                    </pre>
                            </div>
                        </div>
                    </div>
                </div>
            </li>


            <li>
                Flask Cookies<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom16" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom16" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel"> Flask Cookies</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        The cookies are stored in the form of text files on the client's machine. Cookies are used to track the user's activities on the web and reflect some suggestions according to the user's choices to enhance the user's experience.<br><br>                        Cookies are set by the server on the client's machine which will be associated with the client's request to that particular server in all future transactions until the lifetime of the cookie expires or it is deleted by the specific
                        web page on the server.
                        <br> <br> In flask, the cookies are associated with the Request object as the dictionary object of all the cookie variables and their values transmitted by the client. Flask facilitates us to specify the expiry time, path, and
                        the domain name of the website.
                        <br> <br> In Flask, the cookies are set on the response object by using the set_cookie() method on the response object. The response object can be formed by using the make_response() method in the view function.
                    </div>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne10" aria-expanded="false" aria-controls="collapseOne">
                                syntax
                            </button>
                        </h2>
                        <div id="collapseOne10" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-html">
                                    <code>
                                        response.setCookie(&lt;title&gt;, &lt;content&gt;, &lt;expiry time&gt;) 
                                    </code>
                                    </pre>
                                <br>
                                <h3>read the cookies</h3>

                                <pre class="language-html">
                                        <code>
                                            request.cookies.get(&lt;title&gt;)  
                                        </code>
                                        </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo10" aria-expanded="false" aria-controls="collapseTwo">
                                app.py
                            </button>
                        </h2>
                        <div id="collapseTwo10" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-python">
                                    <code>
                                        @app.route('/cookie')  
def cookie():  
    res = make_response("&lt;h1&gt;cookie is set&lt;/h1&gt;")  
    res.set_cookie('foo','bar')  
    return res   
                                    </code>
                                    </pre>
                            </div>
                        </div>
                    </div>
                </div>
            </li>





            <li>
                Login application in Flask<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom19" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom19" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel"> Login application in Flask</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        Here, we will create a login application in the flask where a login page (login.html) is shown to the user which prompts to enter the email and password. If the password is "jtp", then the application will redirect the user to the success page (success.html)
                        where the message and a link to the profile (profile.html) is given otherwise it will redirect the user to the error page.<br><br> The controller python flask script (login.py) controls the behaviour of
                        the application. It contains the view functions for the various cases. The email of the user is stored on the browser in the form of the cookie. If the password entered by the user is "jtp", then the application stores the email
                        id of the user on the browser as the cookie which is later read in the profile page to show some message to the user.
                    </div>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne10" aria-expanded="false" aria-controls="collapseOne">
                              login.py
                            </button>
                        </h2>
                        <div id="collapseOne10" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-python">
                                    <code>
                                        from flask import *  
  
                                        app = Flask(__name__)  
                                         
                                        @app.route('/error')  
                                        def error():  
                                            return "&lt;p&gt;&lt;strong&gt;Enter correct password&lt;/strong&gt;&lt;/p&gt;"  
                                         
                                        @app.route('/')  
                                        def login():  
                                            return render_template("login.html")  
                                         
                                        @app.route('/success',methods = ['POST'])  
                                        def success():  
                                            if request.method == "POST":  
                                                email = request.form['email']  
                                                password = request.form['pass']  
                                              
                                            if password=="jtp":  
                                                resp = make_response(render_template('success.html'))  
                                                resp.set_cookie('email',email)  
                                                return resp  
                                            else:  
                                                return redirect(url_for('error'))  
                                         
                                        @app.route('/viewprofile')  
                                        def profile():  
                                            email = request.cookies.get('email')  
                                            resp = make_response(render_template('profile.html',name = email))  
                                            return resp  
                                          
                                        if __name__ == "__main__":  
                                            app.run(debug = True)  
                                    </code>
                                    </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo21" aria-expanded="false" aria-controls="collapseTwo">
                                login.html
                            </button>
                        </h2>
                        <div id="collapseTwo21" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-html">
                                    <code>
                                        &lt;html&gt;  
                                        &lt;head&gt;  
                                            &lt;title&gt;login&lt;/title&gt;  
                                        &lt;/head&gt;  
                                        &lt;body&gt;  
                                            &lt;form method = "post" action = "http://localhost:5000/success"&gt;  
                                                &lt;table&gt;  
                                                    &lt;tr&gt;&lt;td&gt;Email&lt;/td&gt;&lt;td&gt;&lt;input type = 'email' name = 'email'&gt;&lt;/td&gt;&lt;/tr&gt;  
                                                    &lt;tr&gt;&lt;td&gt;Password&lt;/td&gt;&lt;td&gt;&lt;input type = 'password' name = 'pass'&gt;&lt;/td&gt;&lt;/tr&gt;  
                                                    &lt;tr&gt;&lt;td&gt;&lt;input type = "submit" value = "Submit"&gt;&lt;/td&gt;&lt;/tr&gt;  
                                                &lt;/table&gt;  
                                            &lt;/form&gt;  
                                        &lt;/body&gt;  
                                        &lt;/html&gt;  
                                    </code>
                                    </pre>
                            </div>
                        </div>
                    </div>






                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo22" aria-expanded="false" aria-controls="collapseTwo">
                                success.html
                            </button>
                        </h2>
                        <div id="collapseTwo22" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-html">
                                    <code>
                                        &lt;html&gt;  
                                        &lt;head&gt;  
                                        &lt;title&gt;success&lt;/title&gt;  
                                        &lt;/head&gt;  
                                        &lt;body&gt;  
                                            &lt;h2&gt;Login successful&lt;/h2&gt;  
                                            &lt;a href="/viewprofile"&gt;View Profile&lt;/a&gt;  
                                        &lt;/body&gt;  
                                        &lt;/html&gt;    
                                    </code>
                                    </pre>
                            </div>
                        </div>
                    </div>



                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo26" aria-expanded="false" aria-controls="collapseTwo">
                                profile.html
                            </button>
                        </h2>
                        <div id="collapseTwo26" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-html">
                                    <code>
                                        &lt;html&gt;  
&lt;head&gt;  
    &lt;title&gt;profile&lt;/title&gt;  
&lt;/head&gt;  
&lt;body&gt;  
    &lt;h3&gt;Hi, {{name}}&lt;/h3&gt;  
&lt;/body&gt;  
&lt;/html&gt;     
                                    </code>
                                    </pre>
                            </div>
                        </div>
                    </div>
                </div>
            </li>


















            <li>
                Flask Session<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom19" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom19" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel"> Flask Session</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        The concept of a session is very much similar to that of a cookie. However, the session data is stored on the server.
                        <br><br> The session can be defined as the duration for which a user logs into the server and logs out. The data which is used to track this session is stored into the temporary directory on the server.
                        <br><br> The session data is stored on the top of cookies and signed by the server cryptographically.
                        <br><br> In the flask, a session object is used to track the session data which is a dictionary object that contains a key-value pair of the session variables and their associated values.
                    </div>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne101" aria-expanded="false" aria-controls="collapseOne">
                           Syntax  (  set the session )
                            </button>
                        </h2>
                        <div id="collapseOne101" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-python">
                                    <code>
                                        Session[variable-name] = value   
                                    </code>
                                    </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo211" aria-expanded="false" aria-controls="collapseTwo">
                                Syntax  (  remove the session )
                            </button>
                        </h2>
                        <div id="collapseTwo211" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-python">
                                    <code>
                                        session.pop(variable-name, none)  
                                    </code>
                                    </pre>
                            </div>
                        </div>
                    </div>
                </div>
            </li>


            <li>
                Login application in Flask with session<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom19" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom19" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel"> Login application in Flask with session</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        Here, we will create a login application in the flask where a login page (login.html) is shown to the user which prompts to enter the email and password. If the password is "jtp", then the application will redirect the user to the success page (success.html)
                        where the message and a link to the profile (profile.html) is given otherwise it will redirect the user to the error page.<br><br> The controller python flask script (login.py) controls the behaviour of
                        the application. It contains the view functions for the various cases. The email of the user is stored on the browser in the form of the cookie. If the password entered by the user is "jtp", then the application stores the email
                        id of the user on the browser as the cookie which is later read in the profile page to show some message to the user.
                    </div>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne312" aria-expanded="false" aria-controls="collapseOne">
                              login.py
                            </button>
                        </h2>
                        <div id="collapseOne312" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-python">
                                    <code>
                                        from flask import *  
                                        app = Flask(__name__)  
                                        app.secret_key = "ayush"  
                                         
                                        @app.route('/')  
                                        def home():  
                                            return render_template("home.html")  
                                         
                                        @app.route('/login')  
                                        def login():  
                                            return render_template("login.html")  
                                         
                                        @app.route('/success',methods = ["POST"])  
                                        def success():  
                                            if request.method == "POST":  
                                                session['email']=request.form['email']  
                                            return render_template('success.html')  
                                         
                                        @app.route('/logout')  
                                        def logout():  
                                            if 'email' in session:  
                                                session.pop('email',None)  
                                                return render_template('logout.html');  
                                            else:  
                                                return '&lt;p&gt;user already logged out&lt;/p&gt;'  
                                         
                                        @app.route('/profile')  
                                        def profile():  
                                            if 'email' in session:  
                                                email = session['email']  
                                                return              render_template('profile.html',name=email)  
                                            else:  
                                                return '&lt;p&gt;Please login first&lt;/p&gt;'  
                                          
                                        if __name__ == '__main__':  
                                            app.run(debug = True) 
                                    </code>
                                    </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo41" aria-expanded="false" aria-controls="collapseTwo">
                                login.html
                            </button>
                        </h2>
                        <div id="collapseTwo41" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-html">
                                    <code>
                                        &lt;html&gt;  
&lt;head&gt;  
    &lt;title&gt;login&lt;/title&gt;  
&lt;/head&gt;  
&lt;body&gt;  
    &lt;form method = "post" action = "http://localhost:5000/success"&gt;  
        &lt;table&gt;  
            &lt;tr&gt;&lt;td&gt;Email&lt;/td&gt;&lt;td&gt;&lt;input type = 'email' name = 'email'&gt;&lt;/td&gt;&lt;/tr&gt;  
            &lt;tr&gt;&lt;td&gt;Password&lt;/td&gt;&lt;td&gt;&lt;input type = 'password' name = 'pass'&gt;&lt;/td&gt;&lt;/tr&gt;  
            &lt;tr&gt;&lt;td&gt;&lt;input type = "submit" value = "Submit"&gt;&lt;/td&gt;&lt;/tr&gt;  
        &lt;/table&gt;  
    &lt;/form&gt;  
&lt;/body&gt;  
&lt;/html&gt;  
                                    </code>
                                    </pre>
                            </div>
                        </div>
                    </div>



                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo51" aria-expanded="false" aria-controls="collapseTwo">
                                home.html
                            </button>
                        </h2>
                        <div id="collapseTwo51" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-html">
                                    <code>
                                        &lt;html&gt;  
&lt;head&gt;  
&lt;title&gt;home&lt;/title&gt;  
&lt;/head&gt;  
&lt;body&gt;  
&lt;h3&gt;Welcome to the website&lt;/h3&gt;  
&lt;a href = "/login"&gt;login&lt;/a&gt;&lt;br&gt;  
&lt;a href = "/profile"&gt;view profile&lt;/a&gt;&lt;br&gt;  
&lt;a href = "/logout"&gt;Log out&lt;/a&gt;&lt;br&gt;  
&lt;/body&gt;  
&lt;/html&gt;   
                                    </code>
                                    </pre>
                            </div>
                        </div>
                    </div>


                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo22" aria-expanded="false" aria-controls="collapseTwo">
                                success.html
                            </button>
                        </h2>
                        <div id="collapseTwo22" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-html">
                                    <code>
                                        &lt;html&gt;  
&lt;head&gt;  
&lt;title&gt;success&lt;/title&gt;  
&lt;/head&gt;  
&lt;body&gt;  
    &lt;h2&gt;Login successful&lt;/h2&gt;  
    &lt;a href="/profile"&gt;View Profile&lt;/a&gt;  
&lt;/body&gt;  
&lt;/html&gt;     
                                    </code>
                                    </pre>
                            </div>
                        </div>
                    </div>



                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo264" aria-expanded="false" aria-controls="collapseTwo">
                                logout.html
                            </button>
                        </h2>
                        <div id="collapseTwo264" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-html">
                                    <code>
                                        &lt;html&gt;  
                                        &lt;head&gt;  
                                            &lt;title&gt;logout&lt;/title&gt;  
                                        &lt;/head&gt;  
                                          
                                        &lt;body&gt;  
                                        &lt;p&gt;logout successful, click &lt;a href="/login"&gt;here&lt;/a&gt; to login again&lt;/p&gt;  
                                        &lt;/body&gt;  
                                          
                                        &lt;/html&gt; 
                                    </code>
                                    </pre>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
























            <li>
                app.py
                <pre class="language-py">
    <code>
        from flask import Flask
        app = Flask(__name__)
        
        @app.route('/')
        def hello_world():
           return 'Hello World'
        
        if __name__ == '__main__':
            app.run(debug = True)
</code>
</pre>
            </li>









            <li>
                add about , contact , 404 , 500
                <pre class="language-sh">
    <code>
        app.route('/about')
        def home():
            return render_template('about.html')
        
        @app.route('/contact')
        def home():
            return render_template('contact.html')
        
        
        #create error handler for pages
        #Invalid URL
        @app.errorhandler(404)
        def page_not_found(e):
             return render_template("404.html"), 404
        
        #Invalid URL
        @app.errorhandler(500)
        def internal_server_error(e):
             return render_template("500.html"), 500
        
        
</code>
</pre>
            </li>
            <li>
                import request , jsonify,render_template
                <pre class="language-sh">
    <code>
        from flask import Flask, request, jsonify, render_template
</code>
</pre>
            </li>


            <li>
                run server
                <pre class="language-sh">
    <code>
      python app.py
</code>
</pre>
            </li>
            <li>
                import react-router-dom
                <pre class="language-py">
    <code>
      npm i react-router-dom
</code>
</pre>
            </li>
            <li>
                import router and routes
                <pre class="language-py">
    <code>
      import { BrowserRouter as Router, Routes, Route } from 'react-router-dom';
</code>
</pre>
                <pre class="language-py">
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
                create nested routes
                <pre class="language-py">
    <code>
      import { BrowserRouter as Router, Routes, Route } from 'react-router-dom';
</code>
</pre>
                <pre class="language-py">
  <code>
    
    &lt;Router&gt;
    &lt;Routes&gt;
      &lt;Route path="/" element={&lt;Home /&gt;}&gt;
        &lt;Route path="about" element={&lt;About /&gt;} /&gt;
        &lt;Route path="contact" element={&lt;Contact /&gt;} /&gt;
        &lt;Route path="*" element={&lt;Errorpage /&gt;} /&gt;
      &lt;/Route&gt;
    &lt;/Routes&gt;
  &lt;/Router&gt;
</code>
</pre>
                <p>add outlet in parent route in above ex: home.js</p>
                <pre class="language-py">
  <code>
    
    import { Outlet } from 'react-router-dom'
</code>
</pre>
                <pre class="language-py">
  <code>
   &lt;Outlet/&gt;
</code>
</pre>
            </li>
            <li>create go back button feature
                <pre class="language-py">
          <code>
            import { useNavigate } from 'react-router-dom'
        </code>
        </pre>
                <pre class="language-py">
          <code>
            &lt;button onClick={()=>{navigate(-1);}}&gt;Go back&lt;/button&gt;
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
                <pre class="language-py">
          <code>
            import { useParams } from 'react-router-dom'
      </code>
      </pre>
                <pre class="language-py">
    <code>
      const { id }=useParams();
</code>
</pre>
            </li>
            <li>
                React useContext Hook<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#o4" aria-controls="o4">
          Read More...
        </button>
                <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="o4" aria-labelledby="offcanvasWithBothOptionsLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">
                            React useContext Hook
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <p>
                            React Context is a way to manage state globally.
                            <br> It can be used together with the useState Hook to share state between deeply nested components more easily than with useState alone.
                            <br><br> Context provides a way to pass data or state through the component tree without having to pass props down manually through each nested component. It is designed to share data that can be considered as global data for
                            a tree of React components, such as the current authenticated user or theme(e.g. color, paddings, margins, font-sizes).
                            <br><br> Context API uses Context. Provider and Context. Consumer Components pass down the data but it is very cumbersome to write the long functional code to use this Context API. So useContext hook helps to make the code
                            more readable, less verbose and removes the need to introduce Consumer Component. The useContext hook is the new addition in React 16.8.
                        </p>
                    </div>
                </div>
                <pre class="language-py">
          <code>
import React, { useContext } from "react";
      </code>
      </pre>
                <p>For Create context value</p>
                <pre class="language-py">
  <code>
    const AppContext = React.createContext();
</code>
</pre>
                <p>For set provider value</p>
                <pre class="language-py">
<code>
  return &lt;AppContext.Provider  value="soham"&gt;{children}&lt;/AppContext.Provider&gt;
</code>
</pre>
                <p>For access value</p>
                <pre class="language-py">
    <code>
      const auth = useContext(AuthContext);
</code>
</pre>
                <p>add appprovider in index.js</p>
                <pre class="language-py">
<code>
&lt;AppProvider&gt;         &lt;/AppProvider&gt;
</code>
</pre>
            </li>
            <li>create props
                <br>
                <p>
                    <a class="btn btn1" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Create props</a>
                    <button class="btn btn1" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">pass props</button>
                    <button class="btn btn1" type="button" data-bs-toggle="collapse" data-bs-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">both</button>
                </p>
                <div class="row">
                    <div class="col">
                        <div class="collapse multi-collapse" id="multiCollapseExample1">
                            <div class="card card-body">
                                <pre class="language-py">
                  <code>
                    function Avatar(props) {
                      let person = props.person;
                      let size = props.size;
                      // ...
                    }
                  </code>
                  </pre>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="collapse multi-collapse" id="multiCollapseExample2">
                            <div class="card card-body">
                                <pre class="language-py">
                  <code>
                    function Avatar({ person, size }) {
                      // ...
                    }
                  </code>
                  </pre>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li> useState is a React Hook that lets you add a state variable to your component.
                <pre class="language-py">
          <code>
            const [state, setState] = useState(initialState)
          </code>
          </pre>
            </li>
            <li> Enable dark mode (create onClick toogle fuction in buuton and mode input to style)
                <pre class="language-py">
          <code>
            const [statebtn, setbtn] = useState("Enable dark mode");
            const [mode, setMode] = useState({
              color: "black",
              backcolor: "white",
            });
            const toogle = () => {
              if (mode.color === "black") {
                setMode({
                  color: "white",
                  backgroundColor: "black",
                });
                setbtn("Enable light mode");
              } else {
                setMode({
                  color: "black",
                  backgroundColor: "white",
                });
                setbtn("Enable dark mode");
              }
            };
          </code>
          </pre>
            </li>
        </ol>
    </div>
    </div>
    <?php require_once 'Footer.php'?>