<?php require_once 'Navbar.php'?>
    <!-- mid part -->
    <nav class="mt-5 p-2 headline" style="background:linear-gradient(to top right, #fb5475 0%, #f77b50 59%);">
        <div class="text-center " style="margin-top:5vh;"><img style="margin-right:2vh;"
                src="../../assets/img/django.svg" alt="" /> Django cheatsheet
        </div>
    </nav>
    <div class="container">
        <div class="p-5 mb-4 bg-light rounded-3 jumbo mt-2">
            <div class="container-fluid py-3">
                <h1 class="display-5 fw-bold">Django</h1>
                <div class="row">
                    <div class="col-md-8">
                        <p class="fs-4">
                            Django is a Python framework that makes it easier to create web sites using Python.
                            <br> Django takes care of the difficult stuff so that you can concentrate on building your
                            web applications.
                            <br> Django emphasizes reusability of components, also referred to as DRY (Don't Repeat
                            Yourself), and comes with ready-to-use features like login system, database connection and
                            CRUD operations (Create Read Update Delete).
                        </p>
                    </div>
                    <div class="col-md-4">
                        <img src="../../assets/img/django.svg" alt="" style="width:100% ;" />
                    </div>
                </div>
                <button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#o1"
                    aria-controls="o1">
                    Read More...
                </button>
                <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="o1"
                    aria-labelledby="offcanvasWithBothOptionsLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">
                            Django
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        Django is especially helpful for database driven websites.
                        <br><br> How does Django Work?<br> Django follows the MVT design pattern (Model View Template).
                        <br><br> Model - The data you want to present, usually data from a database.<br> View - A
                        request handler that returns the relevant template and content - based on the request from the
                        user.
                        <br> Template - A text file (like an HTML file) containing the layout of the web page, with
                        logic on how to display the data.<br><br> Model
                        <br> The model provides data from the database.
                        <br> In Django, the data is delivered as an Object Relational Mapping (ORM), which is a
                        technique designed to make it easier to work with databases.<br><br> The most common way to
                        extract data from a database is SQL. One problem
                        with SQL is that you have to have a pretty good understanding of the database structure to be
                        able to work with it.
                        <br><br> Django, with ORM, makes it easier to communicate with the database, without having to
                        write complex SQL statements.
                        <br><br> The models are usually located in a file called models.py.
                        <br><br><br> View
                        <br> A view is a function or method that takes http requests as arguments, imports the relevant
                        model(s), and finds out what data to send to the template, and returns the final result. The
                        views are usually located in a file called
                        views.py.
                        <br><br><br> Template
                        <br> A template is a file where you describe how the result should be represented.
                        <br> Templates are often .html files, with HTML code describing the layout of a web page, but it
                        can also be in other file formats to present other results, but we will concentrate on .html
                        files.
                        <br><br><br> URLs
                        <br> Django also provides a way to navigate around the different pages in a website.
                        <br><br> When a user requests a URL, Django decides which view it will send it to. This is done
                        in a file called urls.py.
                    </div>
                </div>
            </div>
        </div>
        <ol>
            <!-- offcanvas -->
            <li>
                Create Virtual Environment<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom2" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom2"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Create Virtual Environment</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        Virtual Environment<br> It is suggested to have a dedicated virtual environment for each Django
                        project, and one way to manage a virtual environment is venv, which is included in Python.
                        <br><br> The name of the virtual environment is your choice, in this tutorial we will call it
                        myworld.
                        <br><br> Type the following in the command prompt, remember to navigate to where you want to
                        create your project
                    </div>
                </div>
                <pre class="language-py">
                    <code> 
                        virtualenv env
                        </code>
</pre>
                <br>
                <h5>activate the environment</h5>
                <pre class="language-py">
    <code> 
        ./env/Scripts/activate
        </code>
</pre>
            </li>
            <li>Installation of Django
                <pre class="language-py">
        <code> 
            py -m pip install Django
            </code>
</pre>
            </li>
            <li>Check Django Version
                <pre class="language-py">
        <code> 
            django-admin --version
            </code>
</pre>
            </li>
            <li>Create Requirements (Create a requirements.txt)
                <pre class="language-py">
        <code> 
            py -m pip freeze > requirements.txt
            </code>
</pre>
            </li>
            <li>install requirements.txt
                <pre class="language-py">
        <code> 
            pip install -r requirements.txt
            </code>
</pre>
            </li>
            <li>Create django project
                <pre class="language-py">
        <code> 
            django-admin startproject my_project
            </code>
</pre>
            </li>
            <li>Go in the project
                <pre class="language-py">
        <code> 
            cd my_project
            </code>
</pre>
            </li>
            <li>Run the Django Project
                <pre class="language-py">
        <code> 
            python manage.py runserver
            </code>
</pre>
            </li>
            <li>Create Migrate
                <pre class="language-py">
        <code> 
            py manage.py makemigrations
            </code>
</pre>
            </li>
            <li>Migrate changes
                <pre class="language-py">
        <code> 
            py manage.py migrate
            </code>
</pre>
            </li>
            <li>open a Python shell
                <pre class="language-py">
        <code> 
            py manage.py shell
            </code>
</pre>
            </li>
            <li>
                Django Create App<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom3" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom3"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">Django Create App</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        What is an App? An app is a web application that has a specific meaning in your project, like a
                        home page, a contact form, or a members database. In this tutorial we will create an app that
                        allows us to list and register members in a database. But first,
                        let's just create a simple Django app that displays "Hello World!".
                    </div>
                </div>
                <pre class="language-py">
                                  <code>                   
                                    python manage.py startapp app_name
                                      </code>
                          </pre>
            </li>
            <li>
                Django Views<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom352" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom352"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">Django Views</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        Views<br> Django views are Python functions that takes http requests and returns http response,
                        like HTML documents.
                        <br><br> A web page that uses Django is full of views with different tasks and missions.
                        <br><br> Views are usually put in a file called views.py located on your app's folder.
                        <br><br> There is a views.py in your app folder
                    </div>
                </div>
                <h5>views.py</h5>
                <pre class="language-py">
                                  <code>                   
                                    from django.shortcuts import render
                                    from django.http import HttpResponse
                                    
                                    def members(request):
                                        return HttpResponse("Hello world!")
                                      </code>
                          </pre>
            </li>
            <li>Django URLs
                <button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom4"
                    aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom4"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Django URLs</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        URLs<br> Create a file named urls.py in the same folder as the views.py file, and type this code
                        in it
                    </div>
                </div>
                <pre class="language-py">
    <code>
        from django.contrib import admin
        from django.urls import path, include
        from django.conf import settings
        from django.conf.urls.static import static
        
        urlpatterns = [
            path('admin/', admin.site.urls),
            path('', include('app_name.urls')),
        
        ]  + static(settings.MEDIA_URL, document_root=settings.MEDIA_ROOT)
</code>
</pre>
            </li>
            <li>View SQL<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom5" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom5"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">View SQL</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        As a side-note: you can view the SQL statement that were executed from the migration above. All
                        you have to do is to run this command, with the migration number
                    </div>
                </div>
                <pre class="language-py">
    <code>
        py manage.py sqlmigrate app_name migrate_number
</code>
</pre>
            </li>
            <li>
                Django Models<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvas2" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvas2"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Django Models</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        A Django model is a table in your database.
                        <br><br> Django Models<br> Up until now in this tutorial, output has been static data from
                        Python or HTML templates.
                        <br><br> Now we will see how Django allows us to work with data, without having to change or
                        upload files in the prosess.
                        <br><br> In Django, data is created in objects, called Models, and is actually tables in a
                        database.
                        <br><br><br> Create Table (Model)<br> To create a model, navigate to the models.py file in the
                        /members/ folder.
                        <br><br> Open it, and add a Member table by creating a Member class, and describe the table
                        fields in it
                    </div>
                </div>
                <pre class="language-py">
<code>
    from django.db import models
    class Member(models.Model):
        firstname = models.CharField(max_length=255)
        lastname = models.CharField(max_length=255)
</code>
</pre>
            </li>



            <li>
                run our application by using apache server <button class="btn btn1" type="button"
                    data-bs-toggle="offcanvas" data-bs-target="#offcanvas202" aria-controls="offcanvasBottom">Read
                    more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvas202"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel"> run our application by using apache
                            server </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        if we want to run our application by using apache server rather than built-in development
                        server, we need to configure apache2.conf file located at /etc/apache directory. Add the
                        following code into this file.
                        <br><br> After adding these lines, restart apache server by using the service apache2 restart
                        command and then type localhost to the browser's address bar. This time, project will run on
                        apache server rather than a built-in server. See, it shows the home page of the application.
                    </div>
                </div>
                apache2.conf
                <pre class="language-py">
<code>
    WSGIScriptAlias / /var/www/html/django7/django7/wsgi.py  
    WSGIPythonPath /var/www/html/django7/  
      
    &lt;Directory /var/www/html/django7&gt;  
       &lt;Files wsgi.py&gt;  
                    Require all granted  
       &lt;/Files&gt;  
    &lt;/Directory&gt;  
</code>
</pre>
            </li>



            <li>
                Django MVT<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvas203" aria-controls="offcanvasBottom">Read
                    more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvas203"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Django MVT</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        The MVT (Model View Template) is a software design pattern. It is a collection of three
                        important components Model View and Template. The Model helps to handle database. It is a data
                        access layer which handles the data.

                        The Template is a presentation layer which handles User Interface part completely. The View is
                        used to execute the business logic and interact with a model to carry data and renders a
                        template.

                        Although Django follows MVC pattern but maintains it?s own conventions. So, control is handled
                        by the framework itself.

                        There is no separate controller and complete application is based on Model View and Template.
                        That?s why it is called MVT application.
                        <img src="https://www.javatpoint.com/django/images/django-mvt-based-control-flow.png" alt="">
                        Here, a user requests for a resource to the Django, Django works as a controller and check to
                        the available resource in URL.

                        If URL maps, a view is called that interact with model and template, it renders a template.

                        Django responds back to the user and sends a template as a response.


                    </div>
                </div>
            </li>



            <li>
                Django Model Fields<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom3023" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom3023"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">Django Model Fields</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        The fields defined inside the Model class are the columns name of the mapped table. The fields
                        name should not be python reserve words like clean, save or delete etc.
                        <br><br>
                        Django provides various built-in fields types.
                        <table class="alt table-bordered">
                            <tbody>
                                <tr>
                                    <th>Field Name</th>
                                    <th>Class</th>
                                    <th>Particular</th>
                                </tr>
                                <tr>
                                    <td>AutoField</td>
                                    <td>class AutoField(**options)</td>
                                    <td>It An IntegerField that automatically increments.</td>
                                </tr>
                                <tr>
                                    <td>BigAutoField</td>
                                    <td>class BigAutoField(**options)</td>
                                    <td>It is a 64-bit integer, much like an AutoField except that it is guaranteed to
                                        fit numbers from 1 to 9223372036854775807.</td>
                                </tr>
                                <tr>
                                    <td>BigIntegerField</td>
                                    <td>class BigIntegerField(**options)</td>
                                    <td>It is a 64-bit integer, much like an IntegerField except that it is guaranteed
                                        to fit numbers from -9223372036854775808 to 9223372036854775807.</td>
                                </tr>
                                <tr>
                                    <td>BinaryField</td>
                                    <td>class BinaryField(**options)</td>
                                    <td>A field to store raw binary data. </td>
                                </tr>
                                <tr>
                                    <td>BooleanField</td>
                                    <td>class BooleanField(**options)</td>
                                    <td>A true/false field.
                                        The default form widget for this field is a CheckboxInput.</td>
                                </tr>
                                <tr>
                                    <td>CharField</td>
                                    <td>class DateField(auto_now=False, auto_now_add=False, **options)</td>
                                    <td>It is a date, represented in Python by a datetime.date instance.</td>
                                </tr>
                                <tr>
                                    <td>DateTimeField</td>
                                    <td>class DateTimeField(auto_now=False, auto_now_add=False, **options)</td>
                                    <td>It is a date, represented in Python by a datetime.date instance.</td>
                                </tr>
                                <tr>
                                    <td>DateTimeField</td>
                                    <td>class DateTimeField(auto_now=False, auto_now_add=False, **options)</td>
                                    <td>It is used for date and time, represented in Python by a datetime.datetime
                                        instance.</td>
                                </tr>
                                <tr>
                                    <td>DecimalField</td>
                                    <td>class DecimalField(max_digits=None, decimal_places=None, **options)</td>
                                    <td>It is a fixed-precision decimal number, represented in Python by a Decimal
                                        instance.</td>
                                </tr>
                                <tr>
                                    <td>DurationField</td>
                                    <td>class DurationField(**options)</td>
                                    <td>A field for storing periods of time.</td>
                                </tr>
                                <tr>
                                    <td>EmailField</td>
                                    <td>class EmailField(max_length=254, **options)</td>
                                    <td>It is a CharField that checks that the value is a valid email address.</td>
                                </tr>
                                <tr>
                                    <td>FileField</td>
                                    <td>class FileField(upload_to=None, max_length=100, **options)</td>
                                    <td>It is a file-upload field.</td>
                                </tr>
                                <tr>
                                    <td>FloatField</td>
                                    <td>class FloatField(**options)</td>
                                    <td>It is a floating-point number represented in Python by a float instance.</td>
                                </tr>
                                <tr>
                                    <td>ImageField</td>
                                    <td>class ImageField(upload_to=None, height_field=None, width_field=None,
                                        max_length=100, **options)</td>
                                    <td>It inherits all attributes and methods from FileField, but also validates that
                                        the uploaded object is a valid image.</td>
                                </tr>
                                <tr>
                                    <td>IntegerField</td>
                                    <td>class IntegerField(**options)</td>
                                    <td>It is an integer field. Values from -2147483648 to 2147483647 are safe in all
                                        databases supported by Django.</td>
                                </tr>
                                <tr>
                                    <td>NullBooleanField</td>
                                    <td>class NullBooleanField(**options)</td>
                                    <td>Like a BooleanField, but allows NULL as one of the options.</td>
                                </tr>
                                <tr>
                                    <td>PositiveIntegerField</td>
                                    <td>class PositiveIntegerField(**options)</td>
                                    <td>Like an IntegerField, but must be either positive or zero (0). Values from 0 to
                                        2147483647 are safe in all databases supported by Django.</td>
                                </tr>
                                <tr>
                                    <td>SmallIntegerField</td>
                                    <td>class SmallIntegerField(**options)</td>
                                    <td>It is like an IntegerField, but only allows values under a certain
                                        (database-dependent) point.</td>
                                </tr>
                                <tr>
                                    <td>TextField</td>
                                    <td>class TextField(**options)</td>
                                    <td>A large text field. The default form widget for this field is a Textarea.</td>
                                </tr>
                                <tr>
                                    <td>TimeField</td>
                                    <td>class TimeField(auto_now=False, auto_now_add=False, **options)</td>
                                    <td>A time, represented in Python by a datetime.time instance.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </li>
            <li>
                Field Options<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom303" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom303"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">Field Options</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        Each field requires some arguments that are used to set column attributes. For example,
                        CharField requires mac_length to specify varchar database.
                        <br><br>
                        Common arguments available to all field types. All are optional
                        <table class="alt table-bordered">
                            <tbody>
                                <tr>
                                    <th>Field Options</th>
                                    <th>Particulars</th>
                                </tr>
                                <tr>
                                    <td>Null</td>
                                    <td>Django will store empty values as NULL in the database.</td>
                                </tr>
                                <tr>
                                    <td>Blank</td>
                                    <td>It is used to allowed field to be blank.</td>
                                </tr>
                                <tr>
                                    <td>Choices</td>
                                    <td>An iterable (e.g., a list or tuple) of 2-tuples to use as choices for this
                                        field.</td>
                                </tr>
                                <tr>
                                    <td>Default</td>
                                    <td>The default value for the field. This can be a value or a callable object.</td>
                                </tr>
                                <tr>
                                    <td>help_text</td>
                                    <td>Extra "help" text to be displayed with the form widget. It's useful for
                                        documentation even if your field isn't used on a form.</td>
                                </tr>
                                <tr>
                                    <td>primary_key</td>
                                    <td>This field is the primary key for the model.</td>
                                </tr>
                                <tr>
                                    <td>Unique</td>
                                    <td>This field must be unique throughout the table.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </li>





            <li>Django Insert Data
                <button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom9"
                    aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom9"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Django Insert Data</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        Add Records The Members table created in the previous chapter is empty. We will use the Python
                        interpreter (Python shell) to add some members to it.</div>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne155" aria-expanded="false" aria-controls="collapseOne">
                                open a Python shell
                            </button>
                        </h2>
                        <div id="collapseOne155" class="accordion-collapse collapse" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-py">
                                <code>
                                    py manage.py shell
                            </code>
                            </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo55" aria-expanded="false" aria-controls="collapseTwo">
                                open model table
                            </button>
                        </h2>
                        <div id="collapseTwo55" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-py">
                                <code>
                                    from members.models import Member
                            </code>
                            </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree55" aria-expanded="false" aria-controls="collapseThree">
                                look at the empty Member table
                            </button>
                        </h2>
                        <div id="collapseThree55" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-py">
                                <code>
                                    Member.objects.all()
                            </code>
                            </pre>
                                <h5>Output:&lt;QuerySet []&gt;<br>A QuerySet is a collection of data from a database.
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree855" aria-expanded="false" aria-controls="collapseThree">
                                Add a record to the table
                            </button>
                        </h2>
                        <div id="collapseThree855" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-py">
                                <code>
                                    member = Member(firstname='Emil', lastname='Refsnes')
                            </code>
                            </pre>
                                <pre class="language-py">
                                <code>
                                    member.save()
                            </code>
                            </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree5589" aria-expanded="false" aria-controls="collapseThree">
                                see if the Member table got a member
                            </button>
                        </h2>
                        <div id="collapseThree5589" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-py">
                                <code>
                                    Member.objects.all().values()
                            </code>
                            </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree585" aria-expanded="false" aria-controls="collapseThree">
                                Add Multiple Records
                            </button>
                        </h2>
                        <div id="collapseThree585" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-py">
                                <code>
member1 = Member(firstname='Tobias', lastname='Refsnes')
 member2 = Member(firstname='Linus', lastname='Refsnes')
member3 = Member(firstname='Lene', lastname='Refsnes')
 member4 = Member(firstname='Stale', lastname='Refsnes')
 member5 = Member(firstname='Jane', lastname='Doe')
 members_list = [member1, member2, member3, member4, member5]
for x in members_list:
    x.save()
                            </code>
                            </pre>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                Django Update Data<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom10" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom10"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Django Update Data</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        Update Records<br> To update records that are already in the database, we first have to get the
                        record we want to update
                    </div>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne156" aria-expanded="false" aria-controls="collapseOne">
                                Update Records
                            </button>
                        </h2>
                        <div id="collapseOne156" class="accordion-collapse collapse" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-py">
                                <code>
                                    from members.models import Member
                            </code>
                            </pre>
                                <pre class="language-py">
                                <code>
                                    x = Member.objects.all()[4]
                            </code>
                            </pre>
                                <h5>x will now represent the member at index 4</h5>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo56" aria-expanded="false" aria-controls="collapseTwo">
                                update values
                            </button>
                        </h2>
                        <div id="collapseTwo56" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-py">
                                <code>
                                    x.firstname = "Stalikken"
                            </code>
                            </pre>
                                <pre class="language-py">
                                <code>
                                    x.save()
                            </code>
                            </pre>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                Django Delete Data<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom1058" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom1058"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Django Delete Data</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        Delete Records<br> To delete a record in a table, start by getting the record you want to delete
                    </div>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne15653" aria-expanded="false" aria-controls="collapseOne">
                                Delete Records
                            </button>
                        </h2>
                        <div id="collapseOne15653" class="accordion-collapse collapse" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-py">
                                <code>
                                    from members.models import Member
                            </code>
                            </pre>
                                <pre class="language-py">
                                <code>
                                    x = Member.objects.all()[4]
                            </code>
                            </pre>
                                <h5>x will now represent the member at index 4</h5>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo5648" aria-expanded="false" aria-controls="collapseTwo">
                                delete record
                            </button>
                        </h2>
                        <div id="collapseTwo5648" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-py">
                                <code>
                                    x.delete()
                            </code>
                            </pre>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                Django Update Model<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom13" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom13"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Django Update Model</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        Add Fields in the Model<br> To add a field to a table after it is created, open the models.py
                        file, and make your changes
                    </div>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne3" aria-expanded="false" aria-controls="collapseOne">
                                models.py
                            </button>
                        </h2>
                        <div id="collapseOne3" class="accordion-collapse collapse" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-py">
                <code>
                    from django.db import models
class Member(models.Model):
    firstname = models.CharField(max_length=255)
    lastname = models.CharField(max_length=255)
    phone = models.IntegerField(null=True)
    joined_date = models.DateField(null=True)
    email      = models.EmailField(max_length=50)  
    age        = models.IntegerField()  
            </code>
            </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo3" aria-expanded="false" aria-controls="collapseTwo">
                                Insert Data
                            </button>
                        </h2>
                        <div id="collapseTwo3" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-py">
                <code>
                    py manage.py shell
</code>
            </pre>
                                <pre class="language-py">
                <code>
                    from members.models import Member
x = Member.objects.all()[0]
x.phone = 5551234
x.joined_date = '2022-01-05'
x.save()
</code>
            </pre>
                            </div>
                        </div>
                    </div>
                </div>
            </li>





            <li>
                various built-in error classes in views<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom3010" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom3010"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header"> various built-in error classes in views</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        <table class="alt table-bordered">
                            <tbody>
                                <tr>
                                    <th>Class</th>
                                    <th>Description</th>
                                </tr>
                                <tr>
                                    <td>class HttpResponseNotModified</td>
                                    <td>It is used to designate that a page hasn't been modified since the user's last
                                        request (status code 304).</td>
                                </tr>
                                <tr>
                                    <td>class HttpResponseBadRequest</td>
                                    <td>It acts just like HttpResponse but uses a 400 status code.</td>
                                </tr>
                                <tr>
                                    <td>class HttpResponseNotFound</td>
                                    <td>It acts just like HttpResponse but uses a 404 status code.</td>
                                </tr>
                                <tr>
                                    <td>class HttpResponseNotAllowed</td>
                                    <td>It acts just like HttpResponse but uses a 410 status code.</td>
                                </tr>
                                <tr>
                                    <td>HttpResponseServerError</td>
                                    <td>It acts just like HttpResponse but uses a 500 status code.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </li>


            <li>
                Django Http Decorator <button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom30200" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom30200"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">Django Http Decorator </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        These decorators are listed in django.views.decorators.http and return a
                        django.http.HttpResponseNotAllowed if the conditions are not met.
                    </div>
                </div>
                <pre class="language-py">
                                  <code>                   
                                    from django.shortcuts import render  
                                    # Create your views here.  
                                    from django.http import HttpResponse, HttpResponseNotFound  
                                    from django.views.decorators.http import require_http_methods  
                                    @require_http_methods(["GET"])  
                                    def show(request):  
                                        return HttpResponse('&lt;h1&gt;This is Http GET request.&lt;/h1&gt;')  
                                      </code>
                          </pre>
            </li>


            <li>
                Django URL Functions<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom3011" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom3011"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">Django URL Functions</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        <table class="alt table-bordered">
                            <tbody>
                                <tr>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Example</th>
                                </tr>
                                <tr>
                                    <td>path(route, view, kwargs=None, name=None)</td>
                                    <td>It returns an element for inclusion in urlpatterns.</td>
                                    <td>path('index/', views.index, name='main-view')</td>
                                </tr>
                                <tr>
                                    <td>re_path(route, view, kwargs=None, name=None)</td>
                                    <td>It returns an element for inclusion in urlpatterns.</td>
                                    <td>re_path(r'^index/$', views.index, name='index'),</td>
                                </tr>
                                <tr>
                                    <td>include(module, namespace=None)</td>
                                    <td>It is a function that takes a full Python import path to another URLconf module
                                        that should be "included" in this place.</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>register_converter(converter, type_name)</td>
                                    <td>It is used for registering a converter for use in path() routes.</td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </li>



            <li>
                Django Static Files Handling<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom501" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom501"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">Django Static Files Handling</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        In a web application, apart from business logic and data handling, we also need to handle and
                        manage static resources like CSS, JavaScript, images etc.
                        <br><br>
                        It is important to manage these resources so that it does not affect our application
                        performance.
                        <br><br>
                        Django deals with it very efficiently and provides a convenient manner to use resources.
                        <br><br>
                        The django.contrib.staticfiles module helps to manage them
                    </div>
                </div>
                </br>
                1. Include the django.contrib.staticfiles in INSTALLED_APPS.
                <pre class="language-py">
                                  <code>                   
                                   INSTALLED_APPS = [  
    'django.contrib.staticfiles',  
]  
                                      </code>
                          </pre>

                2. Define STATIC_URL in settings.py file as given below.
                <pre class="language-py">
                                  <code>                   
                                    STATIC_URL = 'static/'
                                    STATICFILES_DIRS = [
                                        BASE_DIR / "static",
                                    ]
                                    STATIC_ROOT = "/static/" 
                                      </code>
                          </pre>
                3. Load static files in the templates by using the below expression.
                <pre class="language-py">
                                  <code>                   
                                {% load static %}  
                                      </code>
                          </pre>
                4.In urls , add path for static
                <pre class="language-py">
                                            <code>                   
                                                urlpatterns = [
    path('admin/', admin.site.urls),
    path('', include('app_name.urls'))
] + static(settings.MEDIA_URL, document_root=settings.MEDIA_ROOT)
                                                </code>
                                    </pre>
                5. Store all images, JavaScript, CSS files in a static folder of the application. First create a
                directory static, store the files inside it.


            </li>
            <li>
                Django - Sending E-mails<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom3040" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom3040"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">Django - Sending E-mails</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        Django comes with a ready and easy-to-use light engine to send e-mail. Similar to Python you
                        just need an import of smtplib. In Django you just need to import django.core.mail. To start
                        sending e-mail, edit your project settings.py file and set the following options :
                        </br> </br>
                        EMAIL_HOST − smtp server.
                        </br> </br>
                        EMAIL_HOST_USER − Login credential for the smtp server.
                        </br> </br>
                        EMAIL_HOST_PASSWORD − Password credential for the smtp server.
                        </br> </br>
                        EMAIL_PORT − smtp server port.
                        </br> </br>
                        EMAIL_USE_TLS or _SSL − True if secure connection.
                        </br> </br> </br>
                        Parameters details for the EmailMessage class creation −
                        </br> </br>
                        Subject − E-mail subject.
                        </br> </br>
                        message − E-mail body in HTML.
                        </br> </br>
                        from_email − E-mail from.
                        </br> </br>
                        to − List of receivers’ e-mail address.
                        </br> </br>
                        bcc − List of “Bcc” receivers’ e-mail address.
                        </br> </br>
                        connection − E-mail backend.
                    </div>
                </div>
                <pre class="language-py">
                                  <code>                   
                                    from django.core.mail import EmailMessage
                                    from django.http import HttpResponse
                                    
                                    def sendHTMLEmail(request , emailto):
                                       html_content = "&lt;strong&gt;Comment tu vas?&lt;/strong&gt;"
                                       email = EmailMessage("my subject", html_content, "paul@polo.com", [emailto])
                                       email.content_subtype = "html"
                                       res = email.send()
                                       return HttpResponse('%s'%res)
                                      </code>
                          </pre>
            </li>
            <li>
                Django - Cookies Handling<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom3051" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom3051"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">Django - Cookies Handling</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        cookies are saved on the client side and depending on your client browser security level,
                        setting cookies can at times work and at times might not.
                        </br> </br>
                        To illustrate cookies handling in Django, let's create a system using the login system we
                        created before. The system will keep you logged in for X minute of time, and beyond that time,
                        you will be out of the app.
                        </br> </br>
                        For this, you will need to set up two cookies, last_connection and username. </br> </br>
                        setting cookie is done by the set_cookie method called on the response not the request, and also
                        note that all cookies values are returned as string.
                    </div>
                </div>
                <pre class="language-py">
                                  <code>                   
                                    from django.template import RequestContext

                                    def login(request):
                                       username = "not logged in"
                                       
                                       if request.method == "POST":
                                          #Get the posted form
                                          MyLoginForm = LoginForm(request.POST)
                                       
                                       if MyLoginForm.is_valid():
                                          username = MyLoginForm.cleaned_data['username']
                                       else:
                                          MyLoginForm = LoginForm()
                                       
                                       response = render_to_response(request, 'loggedin.html', {"username" : username}, 
                                          context_instance = RequestContext(request))
                                       
                                       response.set_cookie('last_connection', datetime.datetime.now())
                                       response.set_cookie('username', datetime.datetime.now())
                                        
                                       return response
                                      </code>
                          </pre>
                <pre class="language-py">
                            <code>                   
                                def formView(request):
                                if 'username' in request.COOKIES and 'last_connection' in request.COOKIES:
                                   username = request.COOKIES['username']
                                   
                                   last_connection = request.COOKIES['last_connection']
                                   last_connection_time = datetime.datetime.strptime(last_connection[:-7], 
                                      "%Y-%m-%d %H:%M:%S")
                                   
                                   if (datetime.datetime.now() - last_connection_time).seconds < 10:
                                      return render(request, 'loggedin.html', {"username" : username})
                                   else:
                                      return render(request, 'login.html', {})
                                         
                                else:
                                   return render(request, 'login.html', {})
                                </code>
                            </pre>
                <pre class="language-py">
                                    <code>   
                             from django.conf.urls import patterns, url
                             from django.views.generic import TemplateView
                             
                             urlpatterns = patterns('myapp.views',
                                url(r'^connection/','formView', name = 'loginform'),
                                url(r'^login/', 'login', name = 'login'))
                              </code>
                    </pre>
            </li>
            <li>
                Django - Sessions<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom355" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom355"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">Django - Sessions</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        we can use client side cookies to store a lot of useful data for the web app. We have seen
                        before that we can use client side cookies to store various data useful for our web app. This
                        leads to lot of security holes depending on the importance of the data you want to save.
                        </br></br>
                        For security reasons, Django has a session framework for cookies handling. Sessions are used to
                        abstract the receiving and sending of cookies, data is saved on server side (like in database),
                        and the client side cookie just has a session ID for identification. Sessions are also useful to
                        avoid cases where the user browser is set to ‘not accept’ cookies.
                        </br></br> By default, Django saves session information in database (django_session table or
                        collection), but you can configure the engine to store information using other ways like: in
                        file or in cache.
                        </br></br>
                        When session is enabled, every request (first argument of any view in Django) has a session
                        (dict) attribute.
                        </br></br></br>
                        Some More Possible Actions Using Sessions
                        We have seen how to store and access a session, but it's good to know that the session attribute
                        of the request have some other useful actions like −</br></br>

                        set_expiry (value) − Sets the expiration time for the session.
                        </br></br>
                        get_expiry_age() − Returns the number of seconds until this session expires.
                        </br></br>
                        get_expiry_date() − Returns the date this session will expire.
                        </br></br>
                        clear_expired() − Removes expired sessions from the session store.
                        </br></br>
                        get_expire_at_browser_close() − Returns either True or False, depending on whether the user’s
                        session cookies have expired when the user’s web browser is closed.
                    </div>
                </div></br>
                1) Adding some lines to the MIDDLEWARE_CLASSES
                <pre class="language-py">
                                  <code>                   
                                    'django.contrib.sessions.middleware.SessionMiddleware'
                                      </code>
                          </pre>
                2) Adding some lines to the INSTALLED_APPS
                <pre class="language-py">
                                            <code>                   
                                                'django.contrib.sessions'
                                                </code>
                                    </pre>
                3) Adding some lines to the views.py
                <pre class="language-py">
                                                                <code>                   
                                                                    def login(request):
                                                                    username = 'not logged in'
                                                                    
                                                                    if request.method == 'POST':
                                                                       MyLoginForm = LoginForm(request.POST)
                                                                       
                                                                       if MyLoginForm.is_valid():
                                                                          username = MyLoginForm.cleaned_data['username']
                                                                          request.session['username'] = username
                                                                       else:
                                                                          MyLoginForm = LoginForm()
                                                                             
                                                                    return render(request, 'loggedin.html', {"username" : username})
                                                                    </code>
                                                        </pre>
                <pre class="language-py">
                                                            <code>                   
                                                                def formView(request):
   if request.session.has_key('username'):
      username = request.session['username']
      return render(request, 'loggedin.html', {"username" : username})
   else:
      return render(request, 'login.html', {})
                                                                </code>
                                                    </pre>
                5) logout code
                <pre class="language-py">
                                                        <code>                   
                                                            def logout(request):
                                                            try:
                                                               del request.session['username']
                                                            except:
                                                               pass
                                                            return HttpResponse("You are logged out.")
                                                            </code>
                                                </pre>
            </li>
            <li>
                Django - Caching<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom3888" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom3888"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">Django - Caching</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        Django comes with its own caching system that lets you save your dynamic pages, to avoid
                        calculating them again when needed. The good point in Django Cache framework is that you can
                        cache
                        </br></br>
                        1) The output of a specific view.</br></br>
                        2) A part of a template.</br></br>
                        3) Your entire site.</br></br></br>
                        To use cache in Django, first thing to do is to set up where the cache will stay. The cache
                        framework offers different possibilities - cache can be saved in database, on file system or
                        directly in memory. Setting is done in the settings.py file of your project.
                    </div>
                </div>
                1) Setting Up Cache in Database
                <pre class="language-py">
                                  <code>                   
                                    CACHES = {
                                        'default': {
                                           'BACKEND': 'django.core.cache.backends.db.DatabaseCache',
                                           'LOCATION': 'my_table_name',
                                        }
                                     }
                                      </code>
                          </pre>
                create the cache table 'my_table_name'.
                <pre class="language-py">
                            <code>                   
                                python manage.py createcachetable  
                                </code>
                    </pre>


                2) Setting Up Cache in File System
                <pre class="language-py">
                                  <code>                   
                                    CACHES = {
                                        'default': {
                                           'BACKEND': 'django.core.cache.backends.filebased.FileBasedCache',
                                           'LOCATION': '/var/tmp/django_cache',
                                        }
                                     }
                                      </code>
                          </pre>
                3) Setting Up Cache in Memory
                <pre class="language-py">
                            <code>                   
                                CACHES = {
                                    'default': {
                                       'BACKEND': 'django.core.cache.backends.memcached.MemcachedCache',
                                       'LOCATION': '127.0.0.1:11211',
                                    }
                                 }
                                </code>
                    </pre>

                4) Caching the Entire Site
                <pre class="language-py">
                      <code>                   
                        MIDDLEWARE_CLASSES += (
                            'django.middleware.cache.UpdateCacheMiddleware',
                            'django.middleware.common.CommonMiddleware',
                            'django.middleware.cache.FetchFromCacheMiddleware',
                         )
                          </code>
              </pre>
            </li>





            <li>
                Django - Caching<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom3887" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom3887"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">Django - Caching</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        Ajax essentially is a combination of technologies that are integrated together to reduce the
                        number of page loads. We generally use Ajax to ease end-user experience. Using Ajax in Django
                        can be done by directly using an Ajax library like JQuery or others. Let's say you want to use
                        JQuery, then you need to download and serve the library on your server through Apache or others.
                        Then use it in your template, just like you might do while developing any Ajax-based
                        application.
                        </br></br>
                        Another way of using Ajax in Django is to use the Django Ajax framework. The most commonly used
                        is django-dajax which is a powerful tool to easily and super-quickly develop asynchronous
                        presentation logic in web applications, using Python and almost no JavaScript source code. It
                        supports four of the most popular Ajax frameworks: Prototype, jQuery, Dojo and MooTools.
                    </div>
                </div>
                Using Django-dajax
                <pre class="language-py">
                                  <code>                   
                                    pip install django_dajax
                                      </code>
                          </pre>
                Add dajax and dajaxice in your project settings.py in INSTALLED_APPS
                <pre class="language-py">
                            <code>                   
                                INSTALLED_APPS += (
                                    'dajaxice',
                                    'dajax'
                                 )
                                </code>
                    </pre>
                Setting.py
                <pre class="language-py">
                                  <code>                   
                                    TEMPLATE_LOADERS = (
                                        'django.template.loaders.filesystem.Loader',
                                        'django.template.loaders.app_directories.Loader',
                                        'django.template.loaders.eggs.Loader',
                                     )
                                     
                                     TEMPLATE_CONTEXT_PROCESSORS = (
                                        'django.contrib.auth.context_processors.auth',
                                        'django.core.context_processors.debug',
                                        'django.core.context_processors.i18n',
                                        'django.core.context_processors.media',
                                        'django.core.context_processors.static',
                                        'django.core.context_processors.request',
                                        'django.contrib.messages.context_processors.messages'
                                     )
                                     
                                     STATICFILES_FINDERS = (
                                        'django.contrib.staticfiles.finders.FileSystemFinder',
                                        'django.contrib.staticfiles.finders.AppDirectoriesFinder',
                                        'dajaxice.finders.DajaxiceFinder',
                                     )
                                     
                                     DAJAXICE_MEDIA_PREFIX = 'dajaxice'
                                      </code>
                          </pre>
                Now go to the myapp/url.py file
                <pre class="language-py">
                            <code>                   
                                from dajaxice.core import dajaxice_autodiscover, dajaxice_config
from django.contrib.staticfiles.urls import staticfiles_urlpatterns
from django.conf import settings

Then dajax urls:

urlpatterns += patterns('',
   url(r'^%s/' % settings.DAJAXICE_MEDIA_PREFIX, include('dajaxice.urls')),)
	
urlpatterns += staticfiles_urlpatterns()
                                </code>
                    </pre>

                myapp/form.py
                <pre class="language-py">
                      <code>                   
                        class DreamrealForm(forms.Form):
                        website = forms.CharField(max_length = 100)
                        name = forms.CharField(max_length = 100)
                        phonenumber = forms.CharField(max_length = 50)
                        email = forms.CharField(max_length = 100)
                          </code>
              </pre>



                myapp/ajax.py
                <pre class="language-py">
                <code>                   
                    from dajaxice.utils import deserialize_form
                    from myapp.form import DreamrealForm
                    from dajax.core import Dajax
                    from myapp.models import Dreamreal
                    
                    @dajaxice_register
                    def send_form(request, form):
                       dajax = Dajax()
                       form = DreamrealForm(deserialize_form(form))
                       
                       if form.is_valid():
                          dajax.remove_css_class('#my_form input', 'error')
                          dr = Dreamreal()
                          dr.website = form.cleaned_data.get('website')
                          dr.name = form.cleaned_data.get('name')
                          dr.phonenumber = form.cleaned_data.get('phonenumber')
                          dr.save()
                          
                          dajax.alert("Dreamreal Entry %s was successfully saved." % 
                             form.cleaned_data.get('name'))
                       else:
                          dajax.remove_css_class('#my_form input', 'error')
                          for error in form.errors:
                             dajax.add_css_class('#id_%s' % error, 'error')
                                
                       return dajax.json()
                    </code>
        </pre>


                create the dreamreal.html
                <pre class="language-html">
          <code>                   
            &lt;html&gt;
   &lt;head&gt;&lt;/head&gt;
   &lt;body&gt;
   
      &lt;form action = "" method = "post" id = "my_form" accept-charset = "utf-8"&gt;
         {{ form.as_p }}
         &lt;p&gt;&lt;input type = "button" value = "Send" onclick = "send_form();"&gt;&lt;/p&gt;
      &lt;/form&gt;
      
   &lt;/body&gt;
&lt;/html&gt;
              </code>
  </pre>
                myapp/views.py
                <pre class="language-py">
    <code>                   
        def dreamreal(request):
        form = DreamrealForm()
        return render(request, 'dreamreal.html', locals())
        </code>
</pre>
                At the top of the file add
                <pre class="language-html">
    <code>                   
        {% load static %}
{% load dajaxice_templatetags %}
        </code>
</pre>

                the JQuery library for this example
                <pre class="language-html">
    <code>                   
        &lt;script src = "{% static '/static/jquery-1.11.3.min.js' %}" 
        type = "text/javascript" charset = "utf-8"&gt;&lt;/script&gt;
     &lt;script src = "{% static '/static/dajax/jquery.dajax.core.js' %}"&gt;&lt;/script&gt;
     &lt;script&gt;

    function send_form(){
       Dajaxice.myapp.send_form(Dajax.process,{'form':$('#my_form').serialize(true)});
    }
 &lt;/script&gt;
        </code>
</pre>

                <pre class="language-sh">
    <code>                   
        python manage.py collectstatic
        </code>
</pre>
            </li>

            <li>
                Django Prepare Template<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom14" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom14"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Django Prepare Template</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        Create Template<br> After creating Models, with the fields and data we want in them, it is time
                        to display the data in a web page.
                        <br><br><br> Start by creating an HTML file named all_members.html and place it in the
                        /templates/ folder<br>
                    </div>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo376" aria-expanded="false" aria-controls="collapseTwo">
                                Django tags for loop
                            </button>
                        </h2>
                        <div id="collapseTwo376" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-django">
            <code>
                {% for x in mymembers %}
                <li>{{ x.firstname }} {{ x.lastname }}</li>
              {% endfor %}
</code>
        </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo3651" aria-expanded="false" aria-controls="collapseTwo">
                                Modify view
                            </button>
                        </h2>
                        <div id="collapseTwo3651" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-django">
            <code>
             
</code>
        </pre>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                Add Master Template
                <button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom18"
                    aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom18"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Add Master Template</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        The extends Tag<br> In the previous pages we created two templates, one for listing all members,
                        and one for details about a member.
                        <br><br> The templates have a set of HTML code that are the same for both templates.
                        <br><br> Django provides a way of making a "parent template" that you can include in all pages
                        to for the stuff that are the same in all pages.
                        <br><br> Start by creating a template called master.html, with all the necessary HTML elements
                    </div>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne780" aria-expanded="false" aria-controls="collapseOne">
                                master.html
                            </button>
                        </h2>
                        <div id="collapseOne780" class="accordion-collapse collapse" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="accordion-body">
                                    <pre class="language-django">
                                        <code>
                                            &lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;meta http-equiv="X-UA-Compatible" content="IE=edge"&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;
    &lt;head&gt;
        &lt;title&gt;{% block title %}{% endblock %}&lt;/title&gt;
        {% block css %}{% endblock %}
      &lt;/head&gt;
      &lt;body&gt;
      
      {% block content %}{% endblock %}
      
    
      {% block js %}{% endblock %}
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
                Django 404 (page not found)<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom21" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom21"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Django 404 (page not found)</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        Page Not Found<br> If you try to access a page that does not exist (a 404 error), Django directs
                        you to a built-in view that handles 404 errors.
                        <br><br><br> If you got the first result, you got directed to the built-in Django 404 template.
                        <br><br><br> If you got the second result, then DEBUG is set to True in your settings, and you
                        must set it to False to get directed to the 404 template.
                        <br><br><br> This is done in the settings.py file, which is located in the project folder, in
                        our case the my_tennis_club folder, where you also have to specify the host name from where your
                        project runs from <br><br> Important:
                        When DEBUG = False, Django requires you to specify the hosts you will allow this Django project
                        to run from.
                        <br><br> In production, this should be replaced with a proper domain name:
                        <br><br> ALLOWED_HOSTS = ['yourdomain.com'] <br><br> Customize the 404 Template<br> Django will
                        look for a file named 404.html in the templates folder, and display it when there is a 404
                        error.
                        <br><br> If no such file exists, Django shows the "Not Found" that you saw in the example above.
                        <br><br> To customize this message, all you have to do is to create a file in the templates
                        folder and name it 404.html, and fill it with write whatever you want
                    </div>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne10" aria-expanded="false" aria-controls="collapseOne">
                                a
                            </button>
                        </h2>
                        <div id="collapseOne10" class="accordion-collapse collapse" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="accordion-body">
                                    <pre class="language-django">
                                        <code>
                                            
                                    </code>
                                    </pre>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo11" aria-expanded="false" aria-controls="collapseTwo">
                                    b
                                </button>
                            </h2>
                            <div id="collapseTwo11" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <pre class="language-django">
                                    <code>
                                       
                                </code>
                                </pre>
                                </div>
                            </div>
                        </div>
                    </div>
            </li>
            <li>
                Add Test View<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom22" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom22"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Add Test View</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        Test View<br> When testing different aspects of Django, it can be a good idea to have somewhere
                        to test code without destroying the main project.<br><br> This is optional off course, but if
                        you like to follow all steps in this
                        tutorial, you should add a test view that is excactly like the one we create below. Then you can
                        follow the examples and try them out on your own computer.
                        <br><br><br> Add View<br> Start by adding a view called "testing" in the views.py file
                    </div>
                </div>
            </li>
            <li>
                Django Admin<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom23" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom23"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Django Admin</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        Django Admin<br> Django Admin is a really great tool in Django, it is actually a CRUD* user
                        interface of all your models!
                        <br><br><br> *CRUD stands for Create Read Update Delete.
                    </div>
                </div>
            </li>
            <li>
                Admin - Create User<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom24" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom24"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Admin - Create User</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        Create User<br> To be able to log into the admin application, we need to create a user.
                        <br><br> This is done by typing this command in the command view
                    </div>
                </div>
                <pre class="language-py">
<code>
    py manage.py createsuperuser
</code>
</pre>
            </li>
            <li>
                Admin - Include Member<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom25" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom25"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Admin - Include Member</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        Include Member in the Admin Interface<br> To include the Member model in the admin interface, we
                        have to tell Django that this model should be visible in the admin interface.<br><br><br> This
                        is done in a file called admin.py,
                        and is located in your app's folder, which in our case is the members folder.
                    </div>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne4210" aria-expanded="false" aria-controls="collapseOne">
                                import admin
                            </button>
                        </h2>
                        <div id="collapseOne4210" class="accordion-collapse collapse" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-py">
                                  <code>
                                    from django.contrib import admin
                          </code>
                      </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne421" aria-expanded="false" aria-controls="collapseOne">
                                Register your models here
                            </button>
                        </h2>
                        <div id="collapseOne421" class="accordion-collapse collapse" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-py">
                                <code>
                                    admin.site.register(Member)
                        </code>
                    </pre>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                Admin - Set Fields to Display<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom27" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom27"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Admin - Set Fields to Display</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        Make the List Display More Reader-Friendly<br><br> When you display a Model as a list, Django
                        displays each record as the string representation of the record object, which in our case is
                        "Member object (1)", "Member object(2)"
                        etc. <br><br><br> We can control the fields to display by specifying them in in a list_display
                        property in the admin.py file.
                        <br><br> First create a MemberAdmin() class and specify the list_display tuple, like this
                    </div>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne2021" aria-expanded="false" aria-controls="collapseOne">
                                Change the String Representation Function
                            </button>
                        </h2>
                        <div id="collapseOne2021" class="accordion-collapse collapse" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <h5>models.py</h5>
                                <pre class="language-py">
                                    <code>
                                        def __str__(self):
    return f"{self.firstname} {self.lastname}"
                                    </code>
                                    </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo2022" aria-expanded="false" aria-controls="collapseTwo">
                                Set list_display
                            </button>
                        </h2>
                        <div id="collapseTwo2022" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <h5>admin.py</h5>
                                <pre class="language-py">
                                    <code>
                                        class MemberAdmin(admin.ModelAdmin):
  list_display = ("firstname", "lastname", "joined_date",)
  
admin.site.register(Member, MemberAdmin)
                                    </code>
                                    </pre>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                Django Template Variables<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom331" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom331"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Django Template Variables</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        Template Variables<br> In Django templates, you can render variables by putting them inside {{
                        }} brackets<br><br>
                    </div>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne20211" aria-expanded="false" aria-controls="collapseOne">
                                Template Variables
                            </button>
                        </h2>
                        <div id="collapseOne20211" class="accordion-collapse collapse" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-django">
                                    <code>
                                        &lt;h1&gt;Hello {{ firstname }}, how are you?&lt;/h1&gt;
                                    </code>
                                    </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo20221" aria-expanded="false" aria-controls="collapseTwo">
                                Create Variable in View
                            </button>
                        </h2>
                        <div id="collapseTwo20221" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-py">
                                    <code>
                                        context = {
                                            'firstname': 'Linus',
                                          }
                                    </code>
                                    </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree20231" aria-expanded="false"
                                aria-controls="collapseThree">
                                Create Variables in Template
                            </button>
                        </h2>
                        <div id="collapseThree20231" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <h5>You can also create variables directly in the template, by using the {% with %}
                                    template tag</h5>
                                <pre class="language-django">
                                    <code>
                                        {% with firstname="Tobias" %}
                                        &lt;h1&gt;Hello {{ firstname }}, how are you?&lt;/h1&gt;
                                        </code>
                                    </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree20243" aria-expanded="false"
                                aria-controls="collapseThree">
                                Data From a Model
                            </button>
                        </h2>
                        <div id="collapseThree20243" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-py">
                                    <code>
                                        from .models import Member
                                        </code>
                                    </pre>
                                <pre class="language-py">
                                        <code>
                                            mymembers = Member.objects.all().values()
  context = {
    'mymembers': mymembers,
  }
                                            </code>
                                        </pre>
                                <br>
                                <h5>We use the Django template tag {% for %} to loop through the members.</h5>
                                <pre class="language-django">
                                            <code>
                                                {% for x in mymembers %}
    &lt;li&gt;{{ x.firstname }}&lt;/li&gt;
  {% endfor %}
                                                </code>
                                            </pre>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                Django Template Tags<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom3354" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom3354"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Django Template Tags</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        Template Tags<br> In Django templates, you can perform programming logic like executing if
                        statements and for loops.
                        <br><br><br> These keywords, if and for, are called "template tags" in Django.
                        <br><br> To execute template tags, we surround them in {% %} brackets.
                        <br><br><br> Django Code<br> The template tags are a way of telling Django that here comes
                        something else than plain HTML.
                        <br><br> The template tags allows us to to do some programming on the server before sending HTML
                        to the client. Tag Reference
                        <table class="ws-table-all notranslate table-bordered">
                            <tbody>
                                <tr>
                                    <th>Tag</th>
                                    <th>Description</th>
                                </tr>
                                <tr>
                                    <td><a href="ref_tags_autoescape.php">autoescape</a></td>
                                    <td>Specifies if autoescape mode is on or off</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_tags_block.php">block</a></td>
                                    <td>Specifies a block section</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_tags_comment.php">comment</a></td>
                                    <td>Specifies a comment section</td>
                                </tr>
                                <tr>
                                    <td>csrf_token</td>
                                    <td>Protects forms from Cross Site Request Forgeries</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_tags_cycle.php">cycle</a></td>
                                    <td>Specifies content to use in each cycle of a loop</td>
                                </tr>
                                <tr>
                                    <td>debug</td>
                                    <td>Specifies debugging information</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_tags_extends.php">extends</a></td>
                                    <td>Specifies a parent template</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_tags_filter.php">filter</a></td>
                                    <td>Filters content before returning it</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_tags_firstof.php">firstof</a></td>
                                    <td>Returns the first not empty variable</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_tags_for.php">for</a></td>
                                    <td>Specifies a for loop</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_tags_if.php">if</a></td>
                                    <td>Specifies a if statement</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_tags_ifchanged.php">ifchanged</a></td>
                                    <td>Used in for loops. Outputs a block only if a value has changed since the last
                                        iteration
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="ref_tags_include.php">include</a></td>
                                    <td>Specifies included content/template</td>
                                </tr>
                                <tr>
                                    <td>load</td>
                                    <td>Loads template tags from another library</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_tags_lorem.php">lorem</a></td>
                                    <td>Outputs random text</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_tags_now.php">now</a></td>
                                    <td>Outputs the current date/time</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_tags_regroup.php">regroup</a></td>
                                    <td>Sorts an object by a group</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_tags_resetcycle.php">resetcycle</a></td>
                                    <td>Used in cycles. Resets the cycle</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_tags_spaceless.php">spaceless</a></td>
                                    <td>Removes whitespace between HTML tags</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_tags_templatetag.php">templatetag</a></td>
                                    <td>Outputs a specified template tag</td>
                                </tr>
                                <tr>
                                    <td>url</td>
                                    <td>Returns the absolute URL part of a URL</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_tags_verbatim.php">verbatim</a></td>
                                    <td>Specifies contents that should not be rendered by the template engine</td>
                                </tr>
                                <tr>
                                    <td>widthratio</td>
                                    <td>Calculates a width value based on the ratio between a given value and a max
                                        value
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="ref_tags_with.php">with</a></td>
                                    <td>Specifies a variable to use in the block</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </li>
            <li>
                Django if Tag<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom33542" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom33542"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Django if Tag</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        If Statement An if statement evaluates a variable and executes a block of code if the value is
                        true. Elif The elif keyword says "if the previous conditions were not true, then try this
                        condition". Else The else keyword catches anything which isn't caught
                        by the preceding conditions.
                    </div>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne20210" aria-expanded="false" aria-controls="collapseOne">
                                If Statement
                            </button>
                        </h2>
                        <div id="collapseOne20210" class="accordion-collapse collapse" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-django">
                                    <code>
                                        {% if greeting == 1 %}
                                        
                                      {% endif %} 
                                    </code>
                                    </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo20221" aria-expanded="false" aria-controls="collapseTwo">
                                Elif
                            </button>
                        </h2>
                        <div id="collapseTwo20221" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-django">
                                    <code>
                                        {% if greeting == 1 %}
                                       
                                      {% elif greeting == 2 %}
                                        
                                      {% endif %} 
                                    </code>
                                    </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree20239" aria-expanded="false"
                                aria-controls="collapseThree">
                                Else
                            </button>
                        </h2>
                        <div id="collapseThree20239" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-django">
                                    <code>
                                        {% if greeting == 1 %}
                                       
                                      {% elif greeting == 2 %}
                                        
                                      {% else %}
                                       
                                      {% endif %} 
                                        </code>
                                    </pre>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                Operators
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree20245" aria-expanded="false"
                                aria-controls="collapseThree">
                                == Is equal to
                            </button>
                        </h2>
                        <div id="collapseThree20245" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-django">
                                    <code>
                                        {% if greeting == 2 %}
                                        
                                      {% endif %}
                                        </code>
                                    </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree20245" aria-expanded="false"
                                aria-controls="collapseThree">
                                == Is equal to
                            </button>
                        </h2>
                        <div id="collapseThree20245" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-django">
                                    <code>
                                        {% if greeting == 2 %}
                                        
                                      {% endif %}
                                        </code>
                                    </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree202458" aria-expanded="false"
                                aria-controls="collapseThree">
                                ! = Is not equal to.
                            </button>
                        </h2>
                        <div id="collapseThree202458" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-django">
                                    <code>
                                        {% if greeting ! = 2 %}
                                        
                                      {% endif %}
                                        </code>
                                    </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree2024571" aria-expanded="false"
                                aria-controls="collapseThree">
                                &lt; Is less than.
                            </button>
                        </h2>
                        <div id="collapseThree2024571" class="accordion-collapse collapse"
                            aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <h5>
                                    &gt; Is less than.<br> &lt;= Is less than, or equal to.<br> &gt;= Is greater than,
                                    or equal to.</h5>
                                <pre class="language-django">
                                    <code>
                                        {% if greeting &lt; 2 %}
                                        
                                      {% endif %}
                                        </code>
                                    </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree2024572" aria-expanded="false"
                                aria-controls="collapseThree">
                                and
                            </button>
                        </h2>
                        <div id="collapseThree2024572" class="accordion-collapse collapse"
                            aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <h5>To check if more than one condition is true.</h5>
                                <pre class="language-django">
                                    <code>
                                        {% if greeting == 1 and day == "Friday" %}
                                        
                                      {% endif %}
                                        </code>
                                    </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree2024574" aria-expanded="false"
                                aria-controls="collapseThree">
                                == Is equal to
                            </button>
                        </h2>
                        <div id="collapseThree2024574" class="accordion-collapse collapse"
                            aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-django">
                                    <code>
                                        {% if greeting == 2 %}
                                        
                                      {% endif %}
                                        </code>
                                    </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree2024575" aria-expanded="false"
                                aria-controls="collapseThree">
                                or
                            </button>
                        </h2>
                        <div id="collapseThree2024575" class="accordion-collapse collapse"
                            aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <h5>To check if one of the conditions is true.</h5>
                                <pre class="language-django">
                                    <code>
                                        {% if greeting == 1 or greeting == 5 %}
                                        
                                      {% endif %}
                                        </code>
                                    </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree2024578" aria-expanded="false"
                                aria-controls="collapseThree">
                                in
                            </button>
                        </h2>
                        <div id="collapseThree2024578" class="accordion-collapse collapse"
                            aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <h5>To check if a certain item is present in an object.</h5>
                                <pre class="language-django">
                                    <code>
                                        {% if 'Banana' in fruits %}
                                        
                                      {% endif %}
                                        </code>
                                    </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree2024579" aria-expanded="false"
                                aria-controls="collapseThree">
                                not in
                            </button>
                        </h2>
                        <div id="collapseThree2024579" class="accordion-collapse collapse"
                            aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <h5>To check if a certain item is not present in an object.</h5>
                                <pre class="language-django">
                                    <code>
                                        {% if 'Banana' not in fruits %}
                                        
                                      {% endif %}
                                        </code>
                                    </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree2024585" aria-expanded="false"
                                aria-controls="collapseThree">
                                is
                            </button>
                        </h2>
                        <div id="collapseThree2024585" class="accordion-collapse collapse"
                            aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <h5>Check if two objects are the same. This operator is different from the == operator,
                                    because the == operator checks the values of two objects, but the is operator checks
                                    the identity of two objects.</h5>
                                <pre class="language-django">
                                    <code>
                                        {% if x is y %}
  
{% else %}
  
{% endif %}
                                        </code>
                                    </pre>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                Django for Tag<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom33542" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom33542"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Django for Tag</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        For Loops<br> A for loop is used for iterating over a sequence, like looping over items in an
                        array, a list, or a dictionary.
                        <br><br><br> Reversed
                        <br> The reversed keyword is used when you want to do the loop in reversed order. <br><br><br>
                        Empty
                        <br> The empty keyword can be used if you want to do something special if the object is empty.
                    </div>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne202101" aria-expanded="false" aria-controls="collapseOne">
                                For loop
                            </button>
                        </h2>
                        <div id="collapseOne202101" class="accordion-collapse collapse" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-django">
                                    <code>
                                        {% for x in fruits %}{% endfor %}
                                    </code>
                                    </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo202212" aria-expanded="false" aria-controls="collapseTwo">
                                Reversed
                            </button>
                        </h2>
                        <div id="collapseTwo202212" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-django">
                                    <code>
                                        {% for x in members reversed %}
  
{% endfor %} 
                                    </code>
                                    </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree202398" aria-expanded="false"
                                aria-controls="collapseThree">
                                Empty
                            </button>
                        </h2>
                        <div id="collapseThree202398" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-django">
                                    <code>
                                        {% for x in emptytestobject %}
   
  {% empty %}  {% endfor %}
                                        </code>
                                    </pre>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                Loop Variables<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom33543" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom33543"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Loop Variables</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        Django has some variables that are available for you inside a loop:<br>
                        <br><br> forloop.counter
                        <br><br> forloop.counter0
                        <br><br> forloop.first
                        <br><br> forloop.last
                        <br><br> forloop.parentloop
                        <br><br> forloop.revcounter
                        <br><br> forloop.revcounter0
                        <br><br>
                    </div>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne202101" aria-expanded="false" aria-controls="collapseOne">
                                forloop.counter
                            </button>
                        </h2>
                        <div id="collapseOne202101" class="accordion-collapse collapse" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <h5>The current iteration, starting at 1.</h5>
                                <pre class="language-django">
                                    <code>
                                        {% for x in fruits %}   {{ forloop.counter }}  {% endfor %}
                                    </code>
                                    </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo2022112" aria-expanded="false" aria-controls="collapseTwo">
                                forloop.counter0
                            </button>
                        </h2>
                        <div id="collapseTwo2022112" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <h5>The current iteration, starting at 0.</h5>
                                <pre class="language-django">
                                    <code>
                                        {% for x in fruits %}                                        {{ forloop.counter0 }}                                      {% endfor %}
                                    </code>
                                    </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree2023981" aria-expanded="false"
                                aria-controls="collapseThree">
                                forloop.first
                            </button>
                        </h2>
                        <div id="collapseThree2023981" class="accordion-collapse collapse"
                            aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <h5>Allows you to test if the loop is on its first iteration.</h5>
                                <pre class="language-django">
                                    <code>
                                        {% for x in fruits %}
    &lt;li
      {% if forloop.first %}
        style='background-color:lightblue;'
      {% endif %}
    &gt;{{ x }}&lt;/li&gt;
  {% endfor %}
                                        </code>
                                    </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree20239812" aria-expanded="false"
                                aria-controls="collapseThree">
                                forloop.last
                            </button>
                        </h2>
                        <div id="collapseThree20239812" class="accordion-collapse collapse"
                            aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <h5>Allows you to test if the loop is on its last iteration.</h5>
                                <pre class="language-django">
                                    <code>
                                        {% for x in fruits %}
    &lt;li
      {% if forloop.last %}
        style='background-color:lightblue;'
      {% endif %}
    &gt;{{ x }}&lt;/li&gt;
  {% endfor %}
                                        </code>
                                    </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree202398185" aria-expanded="false"
                                aria-controls="collapseThree">
                                forloop.revcounter
                            </button>
                        </h2>
                        <div id="collapseThree202398185" class="accordion-collapse collapse"
                            aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <h5>The current iteration if you start at the end and count backwards, ending up at 1.
                                </h5>
                                <pre class="language-django">
                                    <code>
                                        {% for x in fruits %}
{{ forloop.revcounter }}
                                      {% endfor %}
                                        </code>
                                    </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree202398156" aria-expanded="false"
                                aria-controls="collapseThree">
                                forloop.revcounter0
                            </button>
                        </h2>
                        <div id="collapseThree202398156" class="accordion-collapse collapse"
                            aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <h5>The current iteration if you start at the end and count backwards, ending up at 0.
                                </h5>
                                <pre class="language-django">
                                    <code>
                                        {% for x in fruits %}
   {{ forloop.revcounter0 }}
  {% endfor %}        </code>
                                    </pre>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                Django comment Tag<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom3354212" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom3354212"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Django comment Tag</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        Comments<br> Comments allows you to have sections of code that should be ignored.
                        <br><br><br> Comment Description<br> You can add a message to your comment, to help you remember
                        why you wrote the comment, or as message to other people reading the code.
                    </div>
                </div>
                <pre class="language-django">
                                    <code>
                                        {% comment %}
  
{% endcomment %}
                                    </code>
                                    </pre>
                <br>
                <pre class="language-django">
                                        <code>
                                            {% comment "this was the original welcome message" %}
  
{% endcomment %}
                                        </code>
                                        </pre>
                <br>
                <pre class="language-django">
                                            <code>
                         &lt;h1&gt;Welcome{# Everyone#}&lt;/h1&gt;
                                            </code>
                                            </pre>
            </li>
            <li>
                Django include Tag<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom33542120" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom33542120"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Django include Tag</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        Include<br> The include tag allows you to include a template inside the current template.
                        <br><br> This is useful when you have a block of content that is the same for many pages.
                        <br><br><br> Variables in Include<br> You can send variables into the template by using the with
                        keyword.
                        <br><br> In the include file, you refer to the variables by using the {{ variablename }} syntax
                    </div>
                </div>
                <pre class="language-django">
                                    <code>
                                        {% include 'footer.html' %} 
                                    </code>
                                    </pre>
                <br>
                <h5>Variables in Include</h5>
                <pre class="language-django">
                                        <code>
{% include "mymenu.html" with me="TOBIAS" sponsor="W3SCHOOLS" %}
                                        </code>
                                        </pre>
                <br>
                <h5>mymenu.html</h5>
                <pre class="language-django">
                                            <code>
                                                &lt;div&gt;HOME | {{ me }} | ABOUT | FORUM | {{ sponsor }}&lt;/div&gt;
                                            </code>
                                            </pre>
            </li>
            <li>
                Django QuerySet<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom335421205" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom335421205"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Django QuerySet</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        Django QuerySet<br> A QuerySet is a collection of data from a database.<br><br> A QuerySet is
                        built up as a list of objects.
                        <br><br> QuerySets makes it easier to get the data you actually need, by allowing you to filter
                        and order the data at an early stage.
                    </div>
                </div>
            </li>
            <li>
                QuerySet - Get Data<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom3354325" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom3354325"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">QuerySet - Get Data</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        Get Data There are different methods to get data from a model into a QuerySet. The values()
                        Method The values() method allows you to return each object as a Python dictionary, with the
                        names and values as key/value pairs Return Specific Columns The values_list()
                        method allows you to return only the columns that you specify.
                    </div>
                </div>
            </li>
            <li>
                Django QuerySet - Filter<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom33543255" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom33543255"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Django QuerySet - Filter</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        QuerySet Filter<br> The filter() method is used to filter your search, and allows you to return
                        only the rows that matches the search term.
                        <br><br><br> AND
                        <br> The filter() method takes the arguments as **kwargs (keyword arguments), so you can filter
                        on more than one field by sepearting them by a comma.
                        <br><br><br> OR
                        <br> To return records where firstname is Emil or firstname is Tobias (meaning: returning
                        records that matches either query, not necessarily both) is not as easy as the AND example
                        above.
                        <br><br> We can use multiple filter() methods, separated by a pipe | character. The results will
                        merge into one model.
                        <br><br><br> Field Lookups<br> Django has its own way of specifying SQL statements and WHERE
                        clauses.
                        <br> To make specific where clasuses in Django, use "Field lookups".
                        <br> Field lookups are keywords that represents specific SQL keywords.
                    </div>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne202101501" aria-expanded="false"
                                aria-controls="collapseOne">
                                filter()
                            </button>
                        </h2>
                        <div id="collapseOne202101501" class="accordion-collapse collapse" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <h5>In SQL, the above statement would be written like this:
                                    <br> SELECT * FROM members WHERE firstname = 'Emil';
                                </h5>
                                <pre class="language-django">
                                    <code>
mydata = Member.objects.filter(firstname='Emil').values()
                                    </code>
                                    </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo2022112565" aria-expanded="false"
                                aria-controls="collapseTwo">
                                AND filter
                            </button>
                        </h2>
                        <div id="collapseTwo2022112565" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <h5>In SQL, the above statement would be written like this:<br> SELECT * FROM members
                                    WHERE lastname = 'Refsnes' AND id = 2;</h5>
                                <pre class="language-django">
                                    <code>
 mydata = Member.objects.filter(lastname='Refsnes', id=2).values()
                                    </code>
                                    </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree2023981991" aria-expanded="false"
                                aria-controls="collapseThree">
                                Or filter
                            </button>
                        </h2>
                        <div id="collapseThree2023981991" class="accordion-collapse collapse"
                            aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <h5>In SQL, the above statement would be written like this: <br> SELECT * FROM members
                                    WHERE firstname = 'Emil' OR firstname = 'Tobias';</h5>
                                <pre class="language-django">
                                    <code>
mydata = Member.objects.filter(firstname='Emil').values() | Member.objects.filter(firstname='Tobias').values()
                                        </code>
                                    </pre>
                                <pre class="language-django">
                                        <code>
 from django.db.models import Qmydata = Member.objects.filter(Q(firstname='Emil') | Q(firstname='Tobias')).values()
                                            </code>
                                        </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo202211256585" aria-expanded="false"
                                aria-controls="collapseTwo">
                                Field Lookups
                            </button>
                        </h2>
                        <div id="collapseTwo202211256585" class="accordion-collapse collapse"
                            aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <h5>Is the same as the SQL statment:
                                    <br> WHERE firstname LIKE 'L%'
                                </h5>
                                <pre class="language-django">                                   <code>                                        .filter(firstname__startswith='L');
                                    </code>
                                    </pre>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                Field Lookups Reference<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom335432559" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom335432559"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Field Lookups Reference</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        <table class="ws-table-all notranslate table-bordered">
                            <tbody>
                                <tr>
                                    <th>Keyword</th>
                                    <th>Description</th>
                                </tr>
                                <tr>
                                    <td><a href="ref_lookups_contains.php">contains</a></td>
                                    <td>Contains the phrase</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_lookups_icontains.php">icontains</a></td>
                                    <td>Same as contains, but case-insensitive</td>
                                </tr>
                                <tr>
                                    <td>date</td>
                                    <td>Matches a date</td>
                                </tr>
                                <tr>
                                    <td>day</td>
                                    <td>Matches a date (day of month, 1-31) (for dates)</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_lookups_endswith.php">endswith</a></td>
                                    <td>Ends with</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_lookups_iendswith.php">iendswith</a></td>
                                    <td>Same as endswidth, but case-insensitive</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_lookups_exact.php">exact</a></td>
                                    <td>An exact match</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_lookups_iexact.php">iexact</a></td>
                                    <td>Same as exact, but case-insensitive</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_lookups_in.php">in</a></td>
                                    <td>Matches one of the values</td>
                                </tr>
                                <tr>
                                    <td>isnull</td>
                                    <td>Matches NULL values</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_lookups_gt.php">gt</a></td>
                                    <td>Greater than</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_lookups_gte.php">gte</a></td>
                                    <td>Greater than, or equal to</td>
                                </tr>
                                <tr>
                                    <td>hour</td>
                                    <td>Matches an hour (for datetimes)</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_lookups_lt.php">lt</a></td>
                                    <td>Less than</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_lookups_lte.php">lte</a></td>
                                    <td>Less than, or equal to</td>
                                </tr>
                                <tr>
                                    <td>minute</td>
                                    <td>Matches a minute (for datetimes)</td>
                                </tr>
                                <tr>
                                    <td>month</td>
                                    <td>Matches a month (for dates)</td>
                                </tr>
                                <tr>
                                    <td>quarter</td>
                                    <td>Matches a quarter of the year (1-4) (for dates)</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_lookups_range.php">range</a></td>
                                    <td>Match between</td>
                                </tr>
                                <tr>
                                    <td>regex</td>
                                    <td>Matches a regular expression</td>
                                </tr>
                                <tr>
                                    <td>iregex</td>
                                    <td>Same as regex, but case-insensitive</td>
                                </tr>
                                <tr>
                                    <td>second</td>
                                    <td>Matches a second (for datetimes)</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_lookups_startswith.php">startswith</a></td>
                                    <td>Starts with</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_lookups_istartswith.php">istartswith</a></td>
                                    <td>Same as startswith, but case-insensitive</td>
                                </tr>
                                <tr>
                                    <td>time</td>
                                    <td>Matches a time (for datetimes)</td>
                                </tr>
                                <tr>
                                    <td>week</td>
                                    <td>Matches a week number (1-53) (for dates)</td>
                                </tr>
                                <tr>
                                    <td>week_day</td>
                                    <td>Matches a day of week (1-7) 1 is sunday</td>
                                </tr>
                                <tr>
                                    <td>iso_week_day</td>
                                    <td>Matches a ISO 8601 day of week (1-7) 1 is monday</td>
                                </tr>
                                <tr>
                                    <td>year</td>
                                    <td>Matches a year (for dates)</td>
                                </tr>
                                <tr>
                                    <td>iso_year</td>
                                    <td>Matches an ISO 8601 year (for dates)</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </li>
            <li>
                QuerySet - Order By<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom335432558" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom335432558"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">QuerySet - Order By</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        Order By<br> To sort QuerySets, Django uses the order_by() method <br><br><br> Descending Order
                        <br> By default, the result is sorted ascending (the lowest value first), to change the
                        direction to descending (the highest value first), use the minus sign (NOT), - in front of the
                        field name
                        <br><br><br> Multiple Order Bys<br> To order by more than one field, separate the fieldnames
                        with a comma in the order_by() method
                    </div>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne20210150819" aria-expanded="false"
                                aria-controls="collapseOne">
                                order_by()
                            </button>
                        </h2>
                        <div id="collapseOne20210150819" class="accordion-collapse collapse"
                            aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <h5>In SQL, the above statement would be written like this:
                                    <br> SELECT * FROM members ORDER BY firstname;
                                </h5>
                                <pre class="language-django">
                                    <code>
mydata = Member.objects.all().order_by('firstname').values()
                                    </code>
                                    </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo202211256554" aria-expanded="false"
                                aria-controls="collapseTwo">
                                Descending Order
                            </button>
                        </h2>
                        <div id="collapseTwo202211256554" class="accordion-collapse collapse"
                            aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <h5>In SQL, the above statement would be written like this:<br> SELECT * FROM members
                                    ORDER BY firstname DESC;</h5>
                                <pre class="language-django">
                                    <code>
                                        mydata = Member.objects.all().order_by('-firstname').values()
                                    </code>
                                    </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree20239819981" aria-expanded="false"
                                aria-controls="collapseThree">
                                Multiple Order Bys
                            </button>
                        </h2>
                        <div id="collapseThree20239819981" class="accordion-collapse collapse"
                            aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <h5>In SQL, the above statement would be written like this: <br> SELECT * FROM members
                                    ORDER BY lastname ASC, id DESC;</h5>
                                <pre class="language-django">
                                    <code>
mydata = Member.objects.all().order_by('lastname', '-id').values()
                                        </code>
                                    </pre>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                Django QuerySet - Filter<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom33543255" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom33543255"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Django QuerySet - Filter</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        Create Static Folder<br> When building web applications, you probably want to add some static
                        files like images or css files.
                        <br><br><br> Start by creating a folder named static in your project, the same place where you
                        created the templates folder:
                        <br><br> The name of the folder has to be static.
                        <br><br> Add a CSS file in the static folder, the name is your choice, we will call it
                        myfirst.css
                        <br><br><br> Didn't Work?<br> Just testing? If you just want to play around, and not going to
                        deploy your work, you can set DEBUG = True in the settings.py file, and the example above will
                        work.
                        <br><br> Plan to deploy? If you plan to deploy your work, you should set DEBUG = False in the
                        settings.py file. The example above will fail, because Django has no built-in solution for
                        serving static files, but there are other
                        ways to serve static files
                    </div>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne2021015016" aria-expanded="false"
                                aria-controls="collapseOne">
                                load static file in html
                            </button>
                        </h2>
                        <div id="collapseOne2021015016" class="accordion-collapse collapse" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-django">
                                    <code>
                                        {% load static %}
                                    </code>
                                    </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo20221125655" aria-expanded="false"
                                aria-controls="collapseTwo">
                                Add css file
                            </button>
                        </h2>
                        <div id="collapseTwo20221125655" class="accordion-collapse collapse"
                            aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-django">
                                    <code>
 &lt;link rel="stylesheet" href="{% static 'myfirst.css' %}"&gt;
                                    </code>
                                    </pre>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                Django Installing WhiteNoise<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom3354325565" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom3354325565"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Django Installing WhiteNoise</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        WhiteNoise<br> Django does not have a built-in solution for serving static files, at least not
                        in production when DEBUG has to be False.
                        <br><br> We have to use a third-party solution to accomplish this.
                        <br><br> In this Tutorial we will use WhiteNoise, which is a Python library, built for serving
                        static files.
                        <br><br><br> Modify Settings<br> To make Django aware of you wanting to run WhitNoise, you have
                        to specify it in the MIDDLEWARE list in settings.py file
                        <br><br><br> Handle Static Files<br> Static files in your project, like stylesheets,
                        JavaScripts, and images, are not handled automatically by Django when DEBUG = False.
                        <br><br> When DEBUG = True, this worked fine, all we had to do was to put them in the static
                        folder of the application.
                        <br><br> When DEBUG = False, static files have to be collected and put in a specified folder
                        before we can use it.
                        <br><br><br> Collect Static Files<br> To collect all necessary static files for your project,
                        start by specifying a STATIC_ROOT property in the settings.py file.
                        <br><br> This specifies a folder where you want to collect your static files.
                        <br><br> You can call the folder whatever you like, we will call it productionfiles
                        <br><br><br>
                    </div>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne20210150165" aria-expanded="false"
                                aria-controls="collapseOne">
                                Install WhiteNoise
                            </button>
                        </h2>
                        <div id="collapseOne20210150165" class="accordion-collapse collapse"
                            aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-py">
                                    <code>
                                        pip install whitenoise
                                    </code>
                                    </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo202211256557" aria-expanded="false"
                                aria-controls="collapseTwo">
                                settings.py
                            </button>
                        </h2>
                        <div id="collapseTwo202211256557" class="accordion-collapse collapse"
                            aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-django">
                                    <code>
MIDDLEWARE = [
                        'whitenoise.middleware.WhiteNoiseMiddleware',
                                    ]
STATIC_ROOT = BASE_DIR / 'productionfiles'STATIC_URL = 'static/'
                                    </code>
                                    </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo202211256557" aria-expanded="false"
                                aria-controls="collapseTwo">
                                Django has a command collect static
                            </button>
                        </h2>
                        <div id="collapseTwo202211256557" class="accordion-collapse collapse"
                            aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-py">
                                    <code>
                                        py manage.py collectstatic
                                    </code>
                                    </pre>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                Django - Global Static Files<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom33543255648" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom33543255648"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Django - Global Static Files</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        Add a Global File<br> We have learned how to add a static file in the application's static
                        folder, and how to use it in the application.
                        <br><br> But what if other applications in your project wants to use the file?
                        <br><br> Then we have to create a folder on the root directory and put the file(s) there.
                        <br><br> It is not enough to create a static folder in the root directory, and Django will fix
                        the rest. We have to tell Django where to look for these static files.
                        <br><br> Add a CSS file in the mystaticfiles folder, the name is your choice, we will call it
                        myglobal.css <br><br> In the STATICFILES_DIRS list, you can list all the directories where
                        Django should look for static files.
                        <br><br> The BASE_DIR keyword represents the root directory of the project, and together with
                        the / "mystaticfiles", it means the mystaticfiles folder in the root directory.
                        <br><br> Search Order<br> If you have files with the same name, Django will use the first
                        occurrence of the file.
                        <br><br> The search starts in the directories listed in STATICFILES_DIRS, using the order you
                        have provided. Then, if the file is not found, the search continues in the static folder of each
                        application.
                        <br><br> Modify the Template<br> Now you have a global CSS file for the entire project, which
                        can be accessed from all your applications.
                        <br><br> To use it in a template, use the same syntax as you did for the myfirst.css file:
                    </div>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne202101501615" aria-expanded="false"
                                aria-controls="collapseOne">
                                in settings.py
                            </button>
                        </h2>
                        <div id="collapseOne202101501615" class="accordion-collapse collapse"
                            aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-py">
                                    <code>
                                        #Add this in your settings.py file:
STATICFILES_DIRS = [
    BASE_DIR / 'mystaticfiles'
]
                                    </code>
                                    </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo2022112565572" aria-expanded="false"
                                aria-controls="collapseTwo">
                                in HTML
                            </button>
                        </h2>
                        <div id="collapseTwo2022112565572" class="accordion-collapse collapse"
                            aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-django">
                                    <code>
                                        {% load static %}
                                    </code>
                                    </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo20221125655749" aria-expanded="false"
                                aria-controls="collapseTwo">
                                link to global css
                            </button>
                        </h2>
                        <div id="collapseTwo20221125655749" class="accordion-collapse collapse"
                            aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-django">
                                    <code>
    &lt;link rel="stylesheet" href="{% static 'myglobal.css' %}"&gt;
                                    </code>
                                    </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo202211256557494" aria-expanded="false"
                                aria-controls="collapseTwo">
                                Collect Static Files
                            </button>
                        </h2>
                        <div id="collapseTwo202211256557494" class="accordion-collapse collapse"
                            aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-py">
                                    <code>
                                        py manage.py collectstatic
                                    </code>
                                    </pre>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                Django with PostgreSQL<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom400" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom400"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Django with PostgreSQL</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        PostgreSQL database is an open source relational database, which should cover most demands you
                        have when creating a database for a Django project.
                        <br><br> It has a good reputation, it is reliable, and it perform well under most circumstances.
                        <br><br> We will add a PostgreSQL database to our Django project.
                        <br><br> To be able to use PostgreSQL in Django we have to install a package called psycopg2.
                        <br><br> The psycopg2 package is a driver that is necessary for PostgreSQL to work in Python.
                        <br><br> We also need a server where we can host the database.
                    </div>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne500" aria-expanded="false" aria-controls="collapseOne">
                                Install psycopg2
                            </button>
                        </h2>
                        <div id="collapseOne500" class="accordion-collapse collapse" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-py">
                                    <code>
                                        pip install psycopg2-binary
                                    </code>
                                    </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo501" aria-expanded="false" aria-controls="collapseTwo">
                                in Settings.py
                            </button>
                        </h2>
                        <div id="collapseTwo501" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-py">
                                    <code>
                                        DATABASES = {
                                            'default': {
                                                'ENGINE': 'django.db.backends.postgresql',
                                                'NAME': 'postgres',
                                                'USER': 'masteruser',
                                                'PASSWORD': '12345678',
                                                'HOST': 'w3-django-project.cdxmgq9zqqlr.us-east-1.rds.amazonaws.com',
                                                'PORT': '5432'
                                            }
                                        }
                                        .
                                        
                                    </code>
                                    </pre>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                Deploy Django - django.config<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom405" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom405"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Deploy Django - django.config</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        Provider-Specific Settings We have chosen AWS as our hosting provider, and Elastic Beanstalk as
                        a service to deploy the Django project, and it has some specific requirements. .ebextension
                        Folder It requires that you create a folder on the root level of
                        your project called .ebextensions Create django.config File In the .ebextensions folder, create
                        a file called django.config
                    </div>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne505" aria-expanded="false" aria-controls="collapseOne">
                                create folder
                            </button>
                        </h2>
                        <div id="collapseOne505" class="accordion-collapse collapse" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-py">
                                    <code>
                                        mkdir .ebextensions
                                    </code>
                                    </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo506" aria-expanded="false" aria-controls="collapseTwo">
                                in django.config
                            </button>
                        </h2>
                        <div id="collapseTwo506" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-py">
                                    <code>
                                        option_settings:
  aws:elasticbeanstalk:container:python:
    WSGIPath: my_tennis_club.wsgi:application
                                    </code>
                                    </pre>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                Django Template Tags Reference
                <button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom4052"
                    aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom4052"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Django Template Tags Reference
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        <table class="ws-table-all notranslate table-bordered">
                            <tbody>
                                <tr>
                                    <th>Tag</th>
                                    <th>Description</th>
                                </tr>
                                <tr>
                                    <td><a href="ref_tags_autoescape.php">autoescape</a></td>
                                    <td>Specifies if autoescape mode is on or off</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_tags_block.php">block</a></td>
                                    <td>Specifies a block section</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_tags_comment.php">comment</a></td>
                                    <td>Specifies a comment section</td>
                                </tr>
                                <tr>
                                    <td>csrf_token</td>
                                    <td>Protects forms from Cross Site Request Forgeries</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_tags_cycle.php">cycle</a></td>
                                    <td>Specifies content to use in each cycle of a loop</td>
                                </tr>
                                <tr>
                                    <td>debug</td>
                                    <td>Specifies debugging information</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_tags_extends.php">extends</a></td>
                                    <td>Specifies a parent template</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_tags_filter.php">filter</a></td>
                                    <td>Filters content before returning it</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_tags_firstof.php">firstof</a></td>
                                    <td>Returns the first not empty variable</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_tags_for.php">for</a></td>
                                    <td>Specifies a for loop</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_tags_if.php">if</a></td>
                                    <td>Specifies a if statement</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_tags_ifchanged.php">ifchanged</a></td>
                                    <td>Used in for loops. Outputs a block only if a value has changed since the last
                                        iteration
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="ref_tags_include.php">include</a></td>
                                    <td>Specifies included content/template</td>
                                </tr>
                                <tr>
                                    <td>load</td>
                                    <td>Loads template tags from another library</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_tags_lorem.php">lorem</a></td>
                                    <td>Outputs random text</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_tags_now.php">now</a></td>
                                    <td>Outputs the current date/time</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_tags_regroup.php">regroup</a></td>
                                    <td>Sorts an object by a group</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_tags_resetcycle.php">resetcycle</a></td>
                                    <td>Used in cycles. Resets the cycle</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_tags_spaceless.php">spaceless</a></td>
                                    <td>Removes whitespace between HTML tags</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_tags_templatetag.php">templatetag</a></td>
                                    <td>Outputs a specified template tag</td>
                                </tr>
                                <tr>
                                    <td>url</td>
                                    <td>Returns the absolute URL part of a URL</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_tags_verbatim.php">verbatim</a></td>
                                    <td>Specifies contents that should not be rendered by the template engine</td>
                                </tr>
                                <tr>
                                    <td>widthratio</td>
                                    <td>Calculates a width value based on the ratio between a given value and a max
                                        value
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="ref_tags_with.php">with</a></td>
                                    <td>Specifies a variable to use in the block</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </li>
            <li>
                Filter Reference
                <button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom40525"
                    aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom40525"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Filter Reference
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        <table class="ws-table-all notranslate table-bordered">
                            <tbody>
                                <tr>
                                    <th>Keyword</th>
                                    <th>Description</th>
                                </tr>
                                <tr>
                                    <td><a href="ref_filters_add.php">add</a></td>
                                    <td>Adds a specified value.</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_filters_addslashes.php">addslashes</a></td>
                                    <td>Adds a slash before any quote characters, to escape strings.</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_filters_capfirst.php">capfirst</a></td>
                                    <td>Returns the first letter in uppercase.</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_filters_center.php">center</a></td>
                                    <td>Centers the value in the middle of a specified width.</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_filters_cut.php">cut</a></td>
                                    <td>Removes any specified character or phrases.</td>
                                </tr>
                                <tr>
                                    <td>date</td>
                                    <td>Returns dates in the specified format.</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_filters_default.php">default</a></td>
                                    <td>Returns a specified value if the value is False.</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_filters_default_if_none.php">default_if_none</a></td>
                                    <td>Returns a specified value if the value is None.</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_filters_dictsort.php">dictsort</a></td>
                                    <td>Sorts a dictionary by the given value.</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_filters_dictsortreversed.php">dictsortreversed</a></td>
                                    <td>Sorts a dictionary reversed, by the given value.</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_filters_divisibleby.php">divisibleby</a></td>
                                    <td>Returns True if the value can be divided by the specified number, otherwise it
                                        returns False.</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_filters_escape.php">escape</a></td>
                                    <td>Escapes HTML code from a string.</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_filters_escapejs.php">escapejs</a></td>
                                    <td>Escapes JavaScript code from a string.</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_filters_filesizeformat.php">filesizeformat</a></td>
                                    <td>Returns a number into a file size format.</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_filters_first.php">first</a></td>
                                    <td>Returns the first item of an object (for Strings, the first character is
                                        returned).
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="ref_filters_floatformat.php">floatformat</a></td>
                                    <td>Rounds floating numbers to a specified number of decimals, default one decimal.
                                    </td>
                                </tr>
                                <tr>
                                    <td>force_escape</td>
                                    <td>Escapes HTML code from a string.</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_filters_get_digit.php">get_digit</a></td>
                                    <td>Returns a specific digit of a number.</td>
                                </tr>
                                <tr>
                                    <td>iriencode</td>
                                    <td>Convert an IRI into a URL friendly string.</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_filters_join.php">join</a></td>
                                    <td>Returns the items of a list into a string.</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_filters_json_script.php">json_script</a></td>
                                    <td>Returns an object into a JSON object surrounded by &lt;script&gt;&lt;/script&gt;
                                        tags. </td>
                                </tr>
                                <tr>
                                    <td><a href="ref_filters_last.php">last</a></td>
                                    <td>Returns the last item of an object (for Strings, the last character is
                                        returned).
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="ref_filters_length.php">length</a></td>
                                    <td>Returns the number of items in an object, or the number of characters in a
                                        string.
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="ref_filters_length_is.php">length_is</a></td>
                                    <td>Returns True if the length is the same as the specified number</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_filters_linebreaks.php">linebreaks</a></td>
                                    <td>Returns the text with &lt;br&gt; instead of line breaks, and &lt;p&gt; instead
                                        of more than one line break.</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_filters_linebreaksbr.php">linebreaksbr</a></td>
                                    <td>Returns the text with &lt;br&gt; instead of line breaks.</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_filters_linenumbers.php">linenumbers</a></td>
                                    <td>Returns the text with line numbers for each line.</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_filters_ljust.php">ljust</a></td>
                                    <td>Left aligns the value according to a specified width</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_filters_lower.php">lower</a></td>
                                    <td>Returns the text in lower case letters.</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_filters_make_list.php">make_list</a></td>
                                    <td>Converts a value into a list object.</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_filters_phone2numeric.php">phone2numeric</a></td>
                                    <td>Converts phone numbers with letters into numeric phone numbers.</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_filters_pluralize.php">pluralize</a></td>
                                    <td>Adds a 's' at the end of a value if the specified numeric value is not 1.</td>
                                </tr>
                                <tr>
                                    <td>pprint</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_filters_random.php">random</a></td>
                                    <td>Returns a random item of an object</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_filters_rjust.php">rjust</a></td>
                                    <td>Right aligns the value according to a specified width</td>
                                </tr>
                                <tr>
                                    <td>safe</td>
                                    <td>Marks that this text is safe and should not be HTML escaped.</td>
                                </tr>
                                <tr>
                                    <td>safeseq</td>
                                    <td>Marks each item of an object as safe and the item should not be HTML escaped.
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="ref_filters_slice.php">slice</a></td>
                                    <td>Returns a specified slice of a text or object.</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_filters_slugify.php">slugify</a></td>
                                    <td>Converts text into one long alphanumeric-lower-case word.</td>
                                </tr>
                                <tr>
                                    <td>stringformat</td>
                                    <td>Converts the value into a specified format.</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_filters_striptags.php">striptags</a></td>
                                    <td>Removes HTML tags from a text.</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_filters_time.php">time</a></td>
                                    <td>Returns a time in the specified format.</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_filters_timesince.php">timesince</a></td>
                                    <td>Returns the difference between two datetimes.</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_filters_timeuntil.php">timeuntil</a></td>
                                    <td>Returns the difference between two datetimes.</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_filters_title.php">title</a></td>
                                    <td>Upper cases the first character of each word in a text, all other characters are
                                        converted to lower case.</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_filters_truncatechars.php">truncatechars</a></td>
                                    <td>Shortens a string into the specified number of characters.</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_filters_truncatechars_html.php">truncatechars_html</a></td>
                                    <td>Shortens a string into the specified number of characters, not considering the
                                        length of any HTML tags.</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_filters_truncatewords.php">truncatewords</a></td>
                                    <td>Shortens a string into the specified number of words.</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_filters_truncatewords_html.php">truncatewords_html</a></td>
                                    <td>Shortens a string into the specified number of words, not considering any HTML
                                        tags.
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="ref_filters_unordered_list.php">unordered_list</a></td>
                                    <td>Returns the items of an object as an unordered HTML list.</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_filters_upper.php">upper</a></td>
                                    <td>Returns the text in upper case letters.</td>
                                </tr>
                                <tr>
                                    <td>urlencode</td>
                                    <td>URL encodes a string.</td>
                                </tr>
                                <tr>
                                    <td>urlize</td>
                                    <td>Returns any URLs in a string as HTML links.</td>
                                </tr>
                                <tr>
                                    <td>urlizetrunc</td>
                                    <td>Returns any URLs in a string as HTML links, but shortens the links into the
                                        specified number of characters.</td>
                                </tr>
                                <tr>
                                    <td>wordcount</td>
                                    <td>Returns the number of words in a text.</td>
                                </tr>
                                <tr>
                                    <td>wordwrap</td>
                                    <td>Wrap words at a specified number of characters.</td>
                                </tr>
                                <tr>
                                    <td>yesno</td>
                                    <td>Converts Booleans values into specified values.</td>
                                </tr>
                                <tr>
                                    <td>i18n</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>l10n</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>tz</td>
                                    <td>&nbsp;</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </li>
            <li>
                QuerySet Field Lookups Reference
                <button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom40528"
                    aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom40528"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">QuerySet Field Lookups Reference
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        <table class="ws-table-all notranslate table-bordered">
                            <tbody>
                                <tr>
                                    <th>Keyword</th>
                                    <th>Description</th>
                                </tr>
                                <tr>
                                    <td><a href="ref_lookups_contains.php">contains</a></td>
                                    <td>Contains the phrase</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_lookups_icontains.php">icontains</a></td>
                                    <td>Same as contains, but case-insensitive</td>
                                </tr>
                                <tr>
                                    <td>date</td>
                                    <td>Matches a date</td>
                                </tr>
                                <tr>
                                    <td>day</td>
                                    <td>Matches a date (day of month, 1-31) (for dates)</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_lookups_endswith.php">endswith</a></td>
                                    <td>Ends with</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_lookups_iendswith.php">iendswith</a></td>
                                    <td>Same as endswidth, but case-insensitive</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_lookups_exact.php">exact</a></td>
                                    <td>An exact match</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_lookups_iexact.php">iexact</a></td>
                                    <td>Same as exact, but case-insensitive</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_lookups_in.php">in</a></td>
                                    <td>Matches one of the values</td>
                                </tr>
                                <tr>
                                    <td>isnull</td>
                                    <td>Matches NULL values</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_lookups_gt.php">gt</a></td>
                                    <td>Greater than</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_lookups_gte.php">gte</a></td>
                                    <td>Greater than, or equal to</td>
                                </tr>
                                <tr>
                                    <td>hour</td>
                                    <td>Matches an hour (for datetimes)</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_lookups_lt.php">lt</a></td>
                                    <td>Less than</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_lookups_lte.php">lte</a></td>
                                    <td>Less than, or equal to</td>
                                </tr>
                                <tr>
                                    <td>minute</td>
                                    <td>Matches a minute (for datetimes)</td>
                                </tr>
                                <tr>
                                    <td>month</td>
                                    <td>Matches a month (for dates)</td>
                                </tr>
                                <tr>
                                    <td>quarter</td>
                                    <td>Matches a quarter of the year (1-4) (for dates)</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_lookups_range.php">range</a></td>
                                    <td>Match between</td>
                                </tr>
                                <tr>
                                    <td>regex</td>
                                    <td>Matches a regular expression</td>
                                </tr>
                                <tr>
                                    <td>iregex</td>
                                    <td>Same as regex, but case-insensitive</td>
                                </tr>
                                <tr>
                                    <td>second</td>
                                    <td>Matches a second (for datetimes)</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_lookups_startswith.php">startswith</a></td>
                                    <td>Starts with</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_lookups_istartswith.php">istartswith</a></td>
                                    <td>Same as startswith, but case-insensitive</td>
                                </tr>
                                <tr>
                                    <td>time</td>
                                    <td>Matches a time (for datetimes)</td>
                                </tr>
                                <tr>
                                    <td>week</td>
                                    <td>Matches a week number (1-53) (for dates)</td>
                                </tr>
                                <tr>
                                    <td>week_day</td>
                                    <td>Matches a day of week (1-7) 1 is sunday</td>
                                </tr>
                                <tr>
                                    <td>iso_week_day</td>
                                    <td>Matches a ISO 8601 day of week (1-7) 1 is monday</td>
                                </tr>
                                <tr>
                                    <td>year</td>
                                    <td>Matches a year (for dates)</td>
                                </tr>
                                <tr>
                                    <td>iso_year</td>
                                    <td>Matches an ISO 8601 year (for dates)</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </li>
        </ol>
    </div>
    </div>
    <?php require_once 'Footer.php'?>