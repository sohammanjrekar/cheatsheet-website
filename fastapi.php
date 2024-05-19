<?php require_once 'Navbar.php'?>
    <!-- mid part -->
    <nav class="mt-5 p-2 headline" style="background:linear-gradient(to top right, #fb5475 0%, #f77b50 59%);">
        <div class="text-center " style="margin-top:5vh;"><img style="margin-right:2vh;" src="../../assets/img/fastapi.svg" alt="" /> FastAPI cheatsheet
        </div>
    </nav>
    <div class="container">
        <div class="p-5 mb-4 bg-light rounded-3 jumbo mt-2">
            <div class="container-fluid py-3">
                <h1 class="display-5 fw-bold">FastAPI</h1>
                <div class="row">
                    <div class="col-md-8">
                        <p class="fs-4">
                            Django is a Python framework that makes it easier to create web sites using Python.
                            <br> Django takes care of the difficult stuff so that you can concentrate on building your web applications.
                            <br> Django emphasizes reusability of components, also referred to as DRY (Don't Repeat Yourself), and comes with ready-to-use features like login system, database connection and CRUD operations (Create Read Update Delete).
                        </p>
                    </div>
                    <div class="col-md-4">
                        <img src="../../assets/img/fastapi.svg" alt="" style="width:100% ;" />
                    </div>
                </div>
                <button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#o1" aria-controls="o1">
                    Read More...
                </button>
                <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="o1" aria-labelledby="offcanvasWithBothOptionsLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">
                            FastAPI
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        Django is especially helpful for database driven websites.
                        <br><br> How does Django Work?<br> Django follows the MVT design pattern (Model View Template).
                        <br><br> Model - The data you want to present, usually data from a database.<br> View - A request handler that returns the relevant template and content - based on the request from the user.
                        <br> Template - A text file (like an HTML file) containing the layout of the web page, with logic on how to display the data.<br><br> Model
                        <br> The model provides data from the database.
                        <br> In Django, the data is delivered as an Object Relational Mapping (ORM), which is a technique designed to make it easier to work with databases.<br><br> The most common way to extract data from a database is SQL. One problem
                        with SQL is that you have to have a pretty good understanding of the database structure to be able to work with it.
                        <br><br> Django, with ORM, makes it easier to communicate with the database, without having to write complex SQL statements.
                        <br><br> The models are usually located in a file called models.py.
                        <br><br><br> View
                        <br> A view is a function or method that takes http requests as arguments, imports the relevant model(s), and finds out what data to send to the template, and returns the final result. The views are usually located in a file called
                        views.py.
                        <br><br><br> Template
                        <br> A template is a file where you describe how the result should be represented.
                        <br> Templates are often .html files, with HTML code describing the layout of a web page, but it can also be in other file formats to present other results, but we will concentrate on .html files.
                        <br><br><br> URLs
                        <br> Django also provides a way to navigate around the different pages in a website.
                        <br><br> When a user requests a URL, Django decides which view it will send it to. This is done in a file called urls.py.
                    </div>
                </div>
            </div>
        </div>
        <ol>
            <!-- offcanvas -->
            <li>
                Create Virtual Environment<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom2" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom2" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Create Virtual Environment</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        Virtual Environment<br> It is suggested to have a dedicated virtual environment for each Django project, and one way to manage a virtual environment is venv, which is included in Python.
                        <br><br> The name of the virtual environment is your choice, in this tutorial we will call it myworld.
                        <br><br> Type the following in the command prompt, remember to navigate to where you want to create your project
                    </div>
                </div>
                <pre class="language-sh">
                    <code> 
                        py -m venv myworld
                        </code>
</pre>
                <br>
                <h3>activate the environment</h3>
                <pre class="language-sh">
    <code> 
        myworld\Scripts\activate.bat
        </code>
</pre>
            </li>

        </ol>
    </div>
    </div>
    <?php require_once 'Footer.php'?>