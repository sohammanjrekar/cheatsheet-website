<?php require_once 'Navbar.php'?>
    <!-- mid part -->
    <nav class="mt-5 p-2 headline" style="background:linear-gradient(to top right, #fb5475 0%, #f77b50 59%);">
        <div class="text-center " style="margin-top:5vh;"><img style="margin-right:2vh;" src="../../assets/img/python-icon.svg" alt="" /> Python cheatsheet
        </div>
    </nav>
    <div class="container">
        <div class="p-5 mb-4 bg-light rounded-3 jumbo mt-2">
            <div class="container-fluid py-3">
                <h1 class="display-5 fw-bold">Python</h1>
                <div class="row">
                    <div class="col-md-8">
                        <p class="fs-4">
                            Python is a popular programming language. It was created by Guido van Rossum, and released in 1991.
                            <br><br> It is used for:<br> web development (server-side),<br> software development,<br> mathematics,
                            <br> system scripting.<br>
                        </p>
                    </div>
                    <div class="col-md-4">
                        <img src="../../assets/img/python-icon.svg" alt="" style="width:100%;height:100%;" />
                    </div>
                </div>
                <button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#o1" aria-controls="o1">
                    Read More...
                </button>
                <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="o1" aria-labelledby="offcanvasWithBothOptionsLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">
                            Python
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        What can Python do?
                        <br><br> Python can be used on a server to create web applications.<br> Python can be used alongside software to create workflows.<br> Python can connect to database systems. It can also read and modify files.<br> Python can be
                        used to handle big data and perform complex mathematics.<br> Python can be used for rapid prototyping, or for production-ready software development.
                        <br><br><br> Why Python?<br><br> Python works on different platforms (Windows, Mac, Linux, Raspberry Pi, etc).<br> Python has a simple syntax similar to the English language.<br> Python has syntax that allows developers to write
                        programs with fewer lines than some other programming languages.<br> Python runs on an interpreter system, meaning that code can be executed as soon as it is written. This means that prototyping can be very quick.<br> Python can
                        be treated in a procedural way, an object-oriented way or a functional way.
                        <br><br><br> Good to know<br> The most recent major version of Python is Python 3, which we shall be using in this tutorial. However, Python 2, although not being updated with anything other than security updates, is still quite
                        popular.
                        <br> In this tutorial Python will be written in a text editor. It is possible to write Python in an Integrated Development Environment, such as Thonny, Pycharm, Netbeans or Eclipse which are particularly useful when managing larger
                        collections of Python files. Python Syntax compared to other programming languages<br> Python was designed for readability, and has some similarities to the English language with influence from mathematics.<br> Python uses new
                        lines to complete a command, as opposed to other programming languages which often use semicolons or parentheses.<br> Python relies on indentation, using whitespace, to define scope; such as the scope of loops, functions and classes.
                        Other programming languages often use curly-brackets for this purpose.
                        <br>
                    </div>
                </div>
            </div>
        </div>
        <ol>
            <!-- offcanvas -->
            <li>
                Python Comments<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom2" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom2" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel"> Python Comments</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        Comments can be used to explain Python code.
                        <br> Comments can be used to make the code more readable.
                        <br> Comments can be used to prevent execution when testing code.
                    </div>
                </div>
                <pre class="language-python">
                    <code> 
                        """
                        This is a comment
                        written in
                        more than just one line
                        """
                        </code>
</pre>
                <pre class="language-python">
    <code> 
        print("Hello, World!")        #This is a comment
        </code>
</pre>
            </li>
            <li>
                Python Variables<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom3" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom3" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Python Variables</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        Variables <br><br> Variables are containers for storing data values.<br>
                        <br><br> Creating Variables<br> Python has no command for declaring a variable.<br><br> A variable is created the moment you first assign a value to it.
                        <br>
                        <br><br> Casting <br> If you want to specify the data type of a variable, this can be done with casting. <br> <br>
                        <br>
                    </div>
                </div>
                <h3>Get the Type</h3>
                <pre class="language-python">
            <code>     
                print(type(x))
            </code>
        </pre>
                <h3>variables</h3>
                <pre class="language-python">
            <code>     
                x = 5
y = "John"
            </code>
        </pre>
            </li>
            <li>Variable Names
                <button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom4" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom4" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Variable Names</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        Variable Names <br> A variable can have a short name (like x and y) or a more descriptive name (age, carname, total_volume). Rules for Python variables:<br><br> A variable name must start with a letter or the underscore character<br>                        A variable name cannot start with a number<br> A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )<br> Variable names are case-sensitive (age, Age and AGE are three different variables)<br><br><br>                        Multi Words Variable Names <br> Variable names with more than one word can be difficult to read.
                        <br> There are several techniques you can use to make them more readable:<br><br> Camel Case<br> Each word, except the first, starts with a capital letter:
                        <br><br> Pascal Case<br> Each word starts with a capital letter:
                        <br><br> Snake Case<br> Each word is separated by an underscore character:
                    </div>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsOne" aria-expanded="false" aria-controls="collapseOne">
                                Many Values to Multiple Variables
                            </button>
                        </h2>
                        <div id="collapsOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-python">
                                <code>
                                    x, y, z = "Orange", "Banana", "Cherry"
                            </code>
                            </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsTwo" aria-expanded="false" aria-controls="collapseTwo">
                                One Value to Multiple Variables
                            </button>
                        </h2>
                        <div id="collapsTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-python">
                                <code>
                                    x = y = z = "Orange"
                            </code>
                            </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThre" aria-expanded="false" aria-controls="collapseThree">
                                Unpack a Collection
                            </button>
                        </h2>
                        <div id="collapseThre" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-python">
                                <code>
                                    fruits = ["apple", "banana", "cherry"]
                                    x, y, z = fruits
                            </code>
                            </pre>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>Output Variables<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom5" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom5" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Output Variables</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        Normally, when you create a variable inside a function, that variable is local, and can only be used inside that function.
                        <br><br> To create a global variable inside a function, you can use the global keyword.
                    </div>
                </div>
                <pre class="language-python">
                    <code>
                        global x  
                </code>
                </pre>
            </li>
            <li>
                Python Data Types<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas2" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvas2" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Python Data Types</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        Built-in Data Types <br> In programming, data type is an important concept.
                        <br><br> Variables can store data of different types, and different types can do different things.
                        <br><br> Python has the following data types built-in by default, in these categories:<br> Text Type: str
                        <br> Numeric Types: int, float, complex<br> Sequence Types: list, tuple, range<br> Mapping Type: dict<br> Set Types: set, frozenset<br> Boolean Type: bool<br> Binary Types: bytes, bytearray, memoryview<br> None Type: NoneType<br>
                    </div>
                </div>
            </li>
            <li>Python Numbers
                <button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom9" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom9" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Python Numbers</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        Python Numbers <br> There are three numeric types in Python:
                        <br> int
                        <br> float
                        <br> complex
                        <br><br><br> Variables of numeric types are created when you assign a value to them
                        <br><br><br> Int
                        <br> Int, or integer, is a whole number, positive or negative, without decimals, of unlimited length.
                        <br><br> Float
                        <br> Float, or "floating point number" is a number, positive or negative, containing one or more decimals.
                        <br><br> Complex
                        <br> Complex numbers are written with a "j" as the imaginary part<br><br> Random Number<br> Python does not have a random() function to make a random number, but Python has a built-in module called random that can be used to make
                        random numbers<br><br>
                    </div>
                </div>
                <h3>Random Number</h3>
                <pre class="language-python">
                        <code>
                            import random                            print(random.randrange(1, 10))
                    </code>
                    </pre>
            </li>
            <li>
                Python Casting<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom10" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom10" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Python Casting</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        Specify a Variable Type <br> There may be times when you want to specify a type on to a variable. This can be done with casting. Python is an object-orientated language, and as such it uses classes to define data types, including
                        its primitive types.
                        <br> <br> Casting in python is therefore done using constructor functions:
                        <br> <br> int() - constructs an integer number from an integer literal, a float literal (by removing all decimals), or a string literal (providing the string represents a whole number) <br> float() - constructs a float number from
                        an integer literal, a float literal or a string literal (providing the string represents a float or an integer) <br> str() - constructs a string from a wide variety of data types, including strings, integer literals and float literals
                    </div>
                </div>
                <h3>Casting</h3>
                <pre class="language-python">
                            <code>
                                x = int(1)   # x will be 1
y = int(2.8) # y will be 2
z = int("3") # z will be 3 
                        </code>
                        </pre>
            </li>
            <li>Python Strings<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom1396" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom1396" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Python Strings</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        Strings Strings in python are surrounded by either single quotation marks, or double quotation marks. 'hello' is the same as "hello".
                    </div>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne386" aria-expanded="false" aria-controls="collapseOne">
                                Assign String to a Variable
                            </button>
                        </h2>
                        <div id="collapseOne386" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-python">
                <code>
                    a = "Hello"
            </code>
            </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo386" aria-expanded="false" aria-controls="collapseTwo">
                                Multiline Strings
                            </button>
                        </h2>
                        <div id="collapseTwo386" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-python">
                <code>
                    a = """Lorem ipsum dolor sit amet,
consectetur adipiscing elit,
sed do eiusmod tempor incididunt
ut labore et dolore magna aliqua."""
</code>
            </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo387" aria-expanded="false" aria-controls="collapseTwo">
                                Strings are Arrays
                            </button>
                        </h2>
                        <div id="collapseTwo387" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-python">
                <code>
                    a = "Hello, World!"
                    print(a[1])
</code>
            </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo388" aria-expanded="false" aria-controls="collapseTwo">
                                Looping Through a String
                            </button>
                        </h2>
                        <div id="collapseTwo388" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-python">
                <code>
                    for x in "banana":
                    print(x)
</code>
            </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo390" aria-expanded="false" aria-controls="collapseTwo">
                                String Length
                            </button>
                        </h2>
                        <div id="collapseTwo390" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-python">
                <code>
                   len(a)
</code>
            </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo391" aria-expanded="false" aria-controls="collapseTwo">
                                Check String
                            </button>
                        </h2>
                        <div id="collapseTwo391" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-python">
                <code>
                    txt = "The best things in life are free!"
                    if "free" in txt:
                      print("Yes, 'free' is present.")
</code>
            </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo392" aria-expanded="false" aria-controls="collapseTwo">
                                Check if NOT
                            </button>
                        </h2>
                        <div id="collapseTwo392" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-python">
                <code>
                    txt = "The best things in life are free!"
                    if "expensive" not in txt:
                      print("No, 'expensive' is NOT present.")
</code>
            </pre>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>Slicing<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom1389" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom1389" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Slicing</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        You can return a range of characters by using the slice syntax.
                        <br><br> Specify the start index and the end index, separated by a colon, to return a part of the string.
                    </div>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne3868" aria-expanded="false" aria-controls="collapseOne">
                                slicing
                            </button>
                        </h2>
                        <div id="collapseOne3868" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-python">
            <code>
                b = "Hello, World!"
                print(b[2:5])
        </code>
        </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo38678" aria-expanded="false" aria-controls="collapseTwo">
                                Slice From the Start
                            </button>
                        </h2>
                        <div id="collapseTwo38678" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-python">
            <code>
                b = "Hello, World!"
                print(b[:5])
</code>
        </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo38745" aria-expanded="false" aria-controls="collapseTwo">
                                Slice To the End
                            </button>
                        </h2>
                        <div id="collapseTwo38745" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-python">
            <code>
                b = "Hello, World!"
                print(b[2:])
</code>
        </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo85" aria-expanded="false" aria-controls="collapseTwo">
                                Negative Indexing
                            </button>
                        </h2>
                        <div id="collapseTwo85" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-python">
            <code>
                b = "Hello, World!"
print(b[-5:-2])
</code>
        </pre>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>Modify Strings<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom139" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom13" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Modify Strings</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        Python has a set of built-in methods that you can use on strings.
                        <br><br> format strings <br> we can combine strings and numbers by using the format() method!
                        <br> The format() method takes the passed arguments, formats them, and places them in the string where the placeholders {} are
                    </div>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne38611" aria-expanded="false" aria-controls="collapseOne">
                                Upper Case
                            </button>
                        </h2>
                        <div id="collapseOne38611" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-python">
        <code>
          a.upper()
    </code>
    </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo38612" aria-expanded="false" aria-controls="collapseTwo">
                                Lower Case
                            </button>
                        </h2>
                        <div id="collapseTwo38612" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-python">
        <code>
        a.lower()
</code>
    </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo38713" aria-expanded="false" aria-controls="collapseTwo">
                                Remove Whitespace
                            </button>
                        </h2>
                        <div id="collapseTwo38713" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-python">
        <code>
print(a.strip()) # returns "Hello, World!"
</code>
    </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo38814" aria-expanded="false" aria-controls="collapseTwo">
                                Replace String
                            </button>
                        </h2>
                        <div id="collapseTwo38814" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-python">
        <code>
            print(a.replace("H", "J"))
</code>
    </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo39015" aria-expanded="false" aria-controls="collapseTwo">
                                Split String
                            </button>
                        </h2>
                        <div id="collapseTwo39015" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-python">
        <code>
            print(a.split(",")) # returns ['Hello', ' World!']
</code>
    </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo391162" aria-expanded="false" aria-controls="collapseTwo">
                                String Concatenation
                            </button>
                        </h2>
                        <div id="collapseTwo391162" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-python">
        <code>
c = "Hello" + "World"
</code>
    </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo392" aria-expanded="false" aria-controls="collapseTwo">
                                Format - Strings
                            </button>
                        </h2>
                        <div id="collapseTwo392" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-python">
        <code>
            quantity = 3
itemno = 567
price = 49.95
myorder = "I want to pay {2} dollars for {0} pieces of item {1}."
print(myorder.format(quantity, itemno, price))
</code>
    </pre>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                Escape Character<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom145" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom145" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Escape Character</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        <table class="ws-table-all notranslate table-bordered">
                            <tbody>
                                <tr>
                                    <th width="25%">Code</th>
                                    <th>Result</th>
                                </tr>
                                <tr>
                                    <td>\'</td>
                                    <td>Single Quote</td>
                                </tr>
                                <tr>
                                    <td>\\</td>
                                    <td>Backslash</td>
                                </tr>
                                <tr>
                                    <td>\n</td>
                                    <td>New Line</td>
                                </tr>
                                <tr>
                                    <td>\r</td>
                                    <td>Carriage Return</td>
                                </tr>
                                <tr>
                                    <td>\t</td>
                                    <td>Tab</td>
                                </tr>
                                <tr>
                                    <td>\b</td>
                                    <td>Backspace</td>
                                </tr>
                                <tr>
                                    <td>\f</td>
                                    <td>Form Feed</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>\ooo</td>
                                    <td>Octal value</td>
                                </tr>
                                <tr>
                                    <td>\xhh</td>
                                    <td>Hex value</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </li>
            <li>
                String Methods<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom14523" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom14523" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">String Methods</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        <table class="ws-table-all notranslate table-bordered">
                            <tbody>
                                <tr>
                                    <th>Method</th>
                                    <th>Description</th>
                                </tr>
                                <tr>
                                    <td><a href="ref_string_capitalize.asp">capitalize()</a></td>
                                    <td>Converts the first character to upper case</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_string_casefold.asp">casefold()</a></td>
                                    <td>Converts string into lower case</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_string_center.asp">center()</a></td>
                                    <td>Returns a centered string
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="ref_string_count.asp">count()</a></td>
                                    <td>Returns the number of times a specified value occurs in a string</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_string_encode.asp">encode()</a></td>
                                    <td>Returns an encoded version of the string</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_string_endswith.asp">endswith()</a></td>
                                    <td>Returns true if the string ends with the specified value</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_string_expandtabs.asp">expandtabs()</a></td>
                                    <td>Sets the tab size of the string</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_string_find.asp">find()</a></td>
                                    <td>Searches the string for a specified value and returns the position of where it was found</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_string_format.asp">format()</a></td>
                                    <td>Formats specified values in a string</td>
                                </tr>
                                <tr>
                                    <td>format_map()</td>
                                    <td>Formats specified values in a string</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_string_index.asp">index()</a></td>
                                    <td>Searches the string for a specified value and returns the position of where it was found</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_string_isalnum.asp">isalnum()</a></td>
                                    <td>Returns True if all characters in the string are alphanumeric</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_string_isalpha.asp">isalpha()</a></td>
                                    <td>Returns True if all characters in the string are in the alphabet</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_string_isdecimal.asp">isdecimal()</a></td>
                                    <td>Returns True if all characters in the string are decimals</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_string_isdigit.asp">isdigit()</a></td>
                                    <td>Returns True if all characters in the string are digits</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_string_isidentifier.asp">isidentifier()</a></td>
                                    <td>Returns True if the string is an identifier</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_string_islower.asp">islower()</a></td>
                                    <td>Returns True if all characters in the string are lower case</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_string_isnumeric.asp">isnumeric()</a></td>
                                    <td>Returns True if all characters in the string are numeric</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_string_isprintable.asp">isprintable()</a></td>
                                    <td>Returns True if all characters in the string are printable</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_string_isspace.asp">isspace()</a></td>
                                    <td>Returns True if all characters in the string are whitespaces</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_string_istitle.asp">istitle()</a></td>
                                    <td>Returns True if the string follows the rules of a title
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="ref_string_isupper.asp">isupper()</a></td>
                                    <td>Returns True if all characters in the string are upper case</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_string_join.asp">join()</a></td>
                                    <td>Joins the elements of an iterable to the end of the string</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_string_ljust.asp">ljust()</a></td>
                                    <td>Returns a left justified version of the string</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_string_lower.asp">lower()</a></td>
                                    <td>Converts a string into lower case</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_string_lstrip.asp">lstrip()</a></td>
                                    <td>Returns a left trim version of the string</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_string_maketrans.asp">maketrans()</a></td>
                                    <td>Returns a translation table to be used in translations</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_string_partition.asp">partition()</a></td>
                                    <td>Returns a tuple where the string is parted into three parts</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_string_replace.asp">replace()</a></td>
                                    <td>Returns a string where a specified value is replaced with a specified value</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_string_rfind.asp">rfind()</a></td>
                                    <td>Searches the string for a specified value and returns the last position of where it was found</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_string_rindex.asp">rindex()</a></td>
                                    <td>Searches the string for a specified value and returns the last position of where it was found</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_string_rjust.asp">rjust()</a></td>
                                    <td>Returns a right justified version of the string</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_string_rpartition.asp">rpartition()</a></td>
                                    <td>Returns a tuple where the string is parted into three parts</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_string_rsplit.asp">rsplit()</a></td>
                                    <td>Splits the string at the specified separator, and returns a list</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_string_rstrip.asp">rstrip()</a></td>
                                    <td>Returns a right trim version of the string</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_string_split.asp">split()</a></td>
                                    <td>Splits the string at the specified separator, and returns a list</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_string_splitlines.asp">splitlines()</a></td>
                                    <td>Splits the string at line breaks and returns a list</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_string_startswith.asp">startswith()</a></td>
                                    <td>Returns true if the string starts with the specified value</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_string_strip.asp">strip()</a></td>
                                    <td>Returns a trimmed version of the string</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_string_swapcase.asp">swapcase()</a></td>
                                    <td>Swaps cases, lower case becomes upper case and vice versa</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_string_title.asp">title()</a></td>
                                    <td>Converts the first character of each word to upper case</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_string_translate.asp">translate()</a></td>
                                    <td>Returns a translated string</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_string_upper.asp">upper()</a></td>
                                    <td>Converts a string into upper case</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_string_zfill.asp">zfill()</a></td>
                                    <td>Fills the string with a specified number of 0 values at the beginning</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </li>
            <li>
                Python Booleans
                <button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom185" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom185" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Python Booleans</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        Booleans represent one of two values: True or False.
                        <br><br> Boolean Values<br> In programming you often need to know if an expression is True or False.
                        <br><br> You can evaluate any expression in Python, and get one of two answers, True or False.<br><br> Evaluate Values and Variables <br> The bool() function allows you to evaluate any value, and give you True or False in return,
                        <br><br><br> Most Values are True<br> Almost any value is evaluated to True if it has some sort of content.
                        <br> Any string is True, except empty strings.
                        <br> Any number is True, except 0.
                        <br> Any list, tuple, set, and dictionary are True, except empty ones.
                    </div>
                </div>
                <pre class="language-python">
                                        <code>
                                            bool("abc")
                                            bool(123)
                                            bool(["apple", "cherry", "banana"])
                                    </code>
                                    </pre>
            </li>
            <li>
                Python Operators<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom21" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom21" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Python Operators</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        Operators are used to perform operations on variables and values.
                        <br> <br> Python divides the operators in the following groups:
                        <br> Arithmetic operators <br> Assignment operators <br> Comparison operators <br> Logical operators <br> Identity operators <br> Membership operators <br> Bitwise operators <br> <br> <br> Python Arithmetic Operators <br>
                        <table class="ws-table-all notranslate table-bordered">
                            <tbody>
                                <tr>
                                    <th style="width:25%">Operator</th>
                                    <th style="width:35%">Name</th>
                                    <th style="width:30%">Example</th>
                                </tr>
                                <tr>
                                    <td>+</td>
                                    <td>Addition</td>
                                    <td>x + y</td>
                                </tr>
                                <tr>
                                    <td>-</td>
                                    <td>Subtraction</td>
                                    <td>x - y</td>
                                </tr>
                                <tr>
                                    <td>*</td>
                                    <td>Multiplication</td>
                                    <td>x * y</td>
                                </tr>
                                <tr>
                                    <td>/</td>
                                    <td>Division</td>
                                    <td>x / y</td>
                                </tr>
                                <tr>
                                    <td>%</td>
                                    <td>Modulus</td>
                                    <td>x % y</td>
                                </tr>
                                <tr>
                                    <td>**</td>
                                    <td>Exponentiation</td>
                                    <td>x ** y</td>
                                </tr>
                                <tr>
                                    <td>//</td>
                                    <td>Floor division</td>
                                    <td>x // y</td>
                                </tr>
                            </tbody>
                        </table>
                        <br><br> Python Assignment Operators
                        <table class="ws-table-all notranslate table-bordered">
                            <tbody>
                                <tr>
                                    <th style="width:25%">Operator</th>
                                    <th style="width:45%">Example</th>
                                    <th style="width:30%">Same As</th>
                                </tr>
                                <tr>
                                    <td>=</td>
                                    <td>x = 5</td>
                                    <td>x = 5</td>
                                </tr>
                                <tr>
                                    <td>+=</td>
                                    <td>x += 3</td>
                                    <td>x = x + 3</td>
                                </tr>
                                <tr>
                                    <td>-=</td>
                                    <td>x -= 3</td>
                                    <td>x = x - 3</td>
                                </tr>
                                <tr>
                                    <td>*=</td>
                                    <td>x *= 3</td>
                                    <td>x = x * 3</td>
                                </tr>
                                <tr>
                                    <td>/=</td>
                                    <td>x /= 3</td>
                                    <td>x = x / 3</td>
                                </tr>
                                <tr>
                                    <td>%=</td>
                                    <td>x %= 3</td>
                                    <td>x = x % 3</td>
                                </tr>
                                <tr>
                                    <td>//=</td>
                                    <td>x //= 3</td>
                                    <td>x = x // 3</td>
                                </tr>
                                <tr>
                                    <td>**=</td>
                                    <td>x **= 3</td>
                                    <td>x = x ** 3</td>
                                </tr>
                                <tr>
                                    <td>&amp;=</td>
                                    <td>x &amp;= 3</td>
                                    <td>x = x &amp; 3</td>
                                </tr>
                                <tr>
                                    <td>|=</td>
                                    <td>x |= 3</td>
                                    <td>x = x | 3</td>
                                </tr>
                                <tr>
                                    <td>^=</td>
                                    <td>x ^= 3</td>
                                    <td>x = x ^ 3</td>
                                </tr>
                                <tr>
                                    <td>&gt;&gt;=</td>
                                    <td>x &gt;&gt;= 3</td>
                                    <td>x = x &gt;&gt; 3</td>
                                </tr>
                                <tr>
                                    <td>&lt;&lt;=</td>
                                    <td>x &lt;&lt;= 3</td>
                                    <td>x = x &lt;&lt; 3</td>
                                </tr>
                            </tbody>
                        </table>
                        <br><br> Python Comparison Operators
                        <table class="ws-table-all notranslate table-bordered">
                            <tbody>
                                <tr>
                                    <th style="width:25%">Operator</th>
                                    <th style="width:45%">Name</th>
                                    <th style="width:30%">Example</th>
                                </tr>
                                <tr>
                                    <td>==</td>
                                    <td>Equal</td>
                                    <td>x == y</td>
                                </tr>
                                <tr>
                                    <td>!=</td>
                                    <td>Not equal</td>
                                    <td>x != y</td>
                                </tr>
                                <tr>
                                    <td>&gt;</td>
                                    <td>Greater than</td>
                                    <td>x &gt; y</td>
                                </tr>
                                <tr>
                                    <td>&lt;</td>
                                    <td>Less than</td>
                                    <td>x &lt; y</td>
                                </tr>
                                <tr>
                                    <td>&gt;=</td>
                                    <td>Greater than or equal to</td>
                                    <td>x &gt;= y</td>
                                </tr>
                                <tr>
                                    <td>&lt;=</td>
                                    <td>Less than or equal to</td>
                                    <td>x &lt;= y</td>
                                </tr>
                            </tbody>
                        </table>
                        <br><br> Python Logical Operators
                        <table class="ws-table-all notranslate table-bordered">
                            <tbody>
                                <tr>
                                    <th style="width:25%">Operator</th>
                                    <th style="width:45%">Description</th>
                                    <th style="width:30%">Example</th>
                                </tr>
                                <tr>
                                    <td>and&nbsp;</td>
                                    <td>Returns True if both statements are true</td>
                                    <td>x &lt; 5 and&nbsp; x &lt; 10</td>
                                </tr>
                                <tr>
                                    <td>or</td>
                                    <td>Returns True if one of the statements is true</td>
                                    <td>x &lt; 5 or x &lt; 4</td>
                                </tr>
                                <tr>
                                    <td>not</td>
                                    <td>Reverse the result, returns False if the result is true</td>
                                    <td>not(x &lt; 5 and x &lt; 10)</td>
                                </tr>
                            </tbody>
                        </table>
                        <br><br> Python Identity Operators
                        <table class="ws-table-all notranslate table-bordered">
                            <tbody>
                                <tr>
                                    <th style="width:25%">Operator</th>
                                    <th style="width:55%">Description</th>
                                    <th style="width:30%">Example</th>
                                </tr>
                                <tr>
                                    <td>is&nbsp;</td>
                                    <td>Returns True if both variables are the same object</td>
                                    <td>x is y</td>
                                </tr>
                                <tr>
                                    <td>is not</td>
                                    <td>Returns True if both variables are not the same object</td>
                                    <td>x is not y</td>
                                </tr>
                            </tbody>
                        </table>
                        Python Membership Operators
                        <table class="ws-table-all notranslate table-bordered">
                            <tbody>
                                <tr>
                                    <th style="width:25%">Operator</th>
                                    <th style="width:45%">Description</th>
                                    <th style="width:30%">Example</th>
                                </tr>
                                <tr>
                                    <td>in&nbsp;</td>
                                    <td>Returns True if a sequence with the specified value is present in the object
                                    </td>
                                    <td>x in y</td>
                                </tr>
                                <tr>
                                    <td>not in</td>
                                    <td>Returns True if a sequence with the specified value is not present in the object
                                    </td>
                                    <td>x not in y</td>
                                </tr>
                            </tbody>
                        </table>
                        Python Bitwise Operators
                        <table class="ws-table-all notranslate table-bordered">
                            <tbody>
                                <tr>
                                    <th style="width:10%">Operator</th>
                                    <th style="width:15%">Name</th>
                                    <th style="width:75%">Description</th>
                                </tr>
                                <tr>
                                    <td>&amp;&nbsp;</td>
                                    <td>AND</td>
                                    <td>Sets each bit to 1 if both bits are 1</td>
                                </tr>
                                <tr>
                                    <td>|</td>
                                    <td>OR</td>
                                    <td>Sets each bit to 1 if one of two bits is 1</td>
                                </tr>
                                <tr>
                                    <td>^</td>
                                    <td>XOR</td>
                                    <td>Sets each bit to 1 if only one of two bits is 1</td>
                                </tr>
                                <tr>
                                    <td>~</td>
                                    <td>NOT</td>
                                    <td>Inverts all the bits</td>
                                </tr>
                                <tr>
                                    <td>&lt;&lt;</td>
                                    <td>Zero fill left shift</td>
                                    <td>Shift left by pushing zeros in from the right and let the leftmost bits fall off
                                    </td>
                                </tr>
                                <tr>
                                    <td>&gt;&gt;</td>
                                    <td>Signed right shift</td>
                                    <td>Shift right by pushing copies of the leftmost bit in from the left, and let the rightmost bits fall off</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </li>
            <li>
                Python Collections (Arrays)<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom228" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom228" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Python Collections (Arrays)</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        There are four collection data types in the Python programming language:
                        <br><br> List is a collection which is ordered and changeable. Allows duplicate members.<br> Tuple is a collection which is ordered and unchangeable. Allows duplicate members.<br> Set is a collection which is unordered, unchangeable*,
                        and unindexed. No duplicate members.<br> Dictionary is a collection which is ordered** and changeable. No duplicate members.<br>
                    </div>
                </div>
            </li>
            <li>
                Python Lists<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom22" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom22" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Python Lists</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        Lists are used to store multiple items in a single variable.
                        <br><br> Lists are one of 4 built-in data types in Python used to store collections of data, the other 3 are Tuple, Set, and Dictionary, all with different qualities and usage.<br><br><br> List Items<br> List items are ordered,
                        changeable, and allow duplicate values.
                        <br> List items are indexed, the first item has index [0], the second item has index [1] etc.
                        <br><br> Ordered
                        <br> When we say that lists are ordered, it means that the items have a defined order, and that order will not change.
                        <br> If you add new items to a list, the new items will be placed at the end of the list.
                        <br><br> Changeable
                        <br> The list is changeable, meaning that we can change, add, and remove items in a list after it has been created.
                        <br><br> Allow Duplicates<br> Since lists are indexed, lists can have items with the same value:
                        <br><br> List Length<br> To determine how many items a list has, use the len() function
                        <br><br><br> Negative Indexing <br> Negative indexing means start from the end
                        <br> -1 refers to the last item, -2 refers to the second last item etc.
                    </div>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne101" aria-expanded="false" aria-controls="collapseOne">
                                Python Lists
                            </button>
                        </h2>
                        <div id="collapseOne101" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="accordion-body">
                                    <pre class="language-python">
                                        <code>
                                            thislist = ["apple", "banana", "cherry"]
print(thislist)   
                                    </code>
                                    </pre>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo102" aria-expanded="false" aria-controls="collapseTwo">
                                    List Length
                                </button>
                            </h2>
                            <div id="collapseTwo102" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <pre class="language-python">
                                    <code>
                                        len(thislist)
                                </code>
                                </pre>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree103" aria-expanded="false" aria-controls="collapseThree">
                                    type()
                                </button>
                            </h2>
                            <div id="collapseThree103" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="accordion-body">
                                        <pre class="language-python">
                                        <code>
                                            type(mylist) 
                                    </code>
                                    </pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree104" aria-expanded="false" aria-controls="collapseThree">
                                    list() Constructor
                                </button>
                            </h2>
                            <div id="collapseThree104" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="accordion-body">
                                        <pre class="language-python">
                                        <code>
                                            thislist = list(("apple", "banana", "cherry"))    # note the double round-brackets
                                    </code>
                                    </pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree105" aria-expanded="false" aria-controls="collapseThree">
                                    Access List Items
                                </button>
                            </h2>
                            <div id="collapseThree105" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="accordion-body">
                                        <pre class="language-python">
                                        <code>
                                            thislist = ["apple", "banana", "cherry"]
                                            print(thislist[1])
                                         </code>
                                    </pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree106" aria-expanded="false" aria-controls="collapseThree">
                                    Negative Indexing
                                </button>
                            </h2>
                            <div id="collapseThree106" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="accordion-body">
                                        <pre class="language-python">
                                        <code>
                                            thislist = ["apple", "banana", "cherry"]
                                            print(thislist[-1])
                                    </code>
                                    </pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree108" aria-expanded="false" aria-controls="collapseThree">
                                    Check if Item Exists
                                </button>
                            </h2>
                            <div id="collapseThree108" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="accordion-body">
                                        <pre class="language-python">
                                        <code>
                                            thislist = ["apple", "banana", "cherry"]
if "apple" in thislist:
  print("Yes, 'apple' is in the fruits list")
 </code>
                                    </pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree109" aria-expanded="false" aria-controls="collapseThree">
                                    Change List Items
                                </button>
                            </h2>
                            <div id="collapseThree109" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="accordion-body">
                                        <pre class="language-python">
                                        <code>
                                            thislist = ["apple", "banana", "cherry", "orange", "kiwi", "mango"]
                                            thislist[1:3] = ["blackcurrant", "watermelon"]
                                    </code>
                                    </pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree110" aria-expanded="false" aria-controls="collapseThree">
                                    Insert Items
                                </button>
                            </h2>
                            <div id="collapseThree110" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="accordion-body">
                                        <pre class="language-python">
                                        <code>
                                            thislist = ["apple", "banana", "cherry"]
thislist.insert(2, "watermelon")                              #Insert "watermelon" as the third item
                                    </code>
                                    </pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree111" aria-expanded="false" aria-controls="collapseThree">
                                    Append Items
                                </button>
                            </h2>
                            <div id="collapseThree111" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="accordion-body">
                                        <pre class="language-python">
                                        <code>
                                            thislist = ["apple", "banana", "cherry"]
thislist.append("orange")
                                    </code>
                                    </pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree112" aria-expanded="false" aria-controls="collapseThree">
                                    Extend List
                                </button>
                            </h2>
                            <div id="collapseThree112" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="accordion-body">
                                        <pre class="language-python">
                                        <code>
                                            thislist = ["apple", "banana", "cherry"]
tropical = ["mango", "pineapple", "papaya"]
thislist.extend(tropical)       #To append elements from another list to the current list
                                    </code>
                                    </pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree113" aria-expanded="false" aria-controls="collapseThree">
                                    Remove Specified Item
                                </button>
                            </h2>
                            <div id="collapseThree113" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="accordion-body">
                                        <pre class="language-python">
                                        <code>
                                            thislist.remove("banana")
                                    </code>
                                    </pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree114" aria-expanded="false" aria-controls="collapseThree">
                                    Remove Specified Index
                                </button>
                            </h2>
                            <div id="collapseThree114" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="accordion-body">
                                        <pre class="language-python">
                                        <code>
                                            thislist = ["apple", "banana", "cherry"]
thislist.pop(1)
                                    </code>
                                    </pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree115" aria-expanded="false" aria-controls="collapseThree">
                                    delete the list
                                </button>
                            </h2>
                            <div id="collapseThree115" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="accordion-body">
                                        <pre class="language-python">
                                        <code>
                                            del thislist
                                    </code>
                                    </pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree116" aria-expanded="false" aria-controls="collapseThree">
                                    Clear the list
                                </button>
                            </h2>
                            <div id="collapseThree116" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="accordion-body">
                                        <pre class="language-python">
                                        <code>
                                            thislist.clear()
                                    </code>
                                    </pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree117" aria-expanded="false" aria-controls="collapseThree">
                                    Loop Through a List
                                </button>
                            </h2>
                            <div id="collapseThree117" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="accordion-body">
                                        <pre class="language-python">
                                        <code>
                                            for x in thislist:
                                            print(x)
                                    </code>
                                    </pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree118" aria-expanded="false" aria-controls="collapseThree">
                                    Loop Through the Index Numbers
                                </button>
                            </h2>
                            <div id="collapseThree118" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="accordion-body">
                                        <pre class="language-python">
                                        <code>
                                            for i in range(len(thislist)):
                                            print(thislist[i])
                                    </code>
                                    </pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree120" aria-expanded="false" aria-controls="collapseThree">
                                    List Comprehension
                                </button>
                            </h2>
                            <div id="collapseThree120" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="accordion-body">
                                        <pre class="language-python">
                                        <code>
                                            fruits = ["apple", "banana", "cherry", "kiwi", "mango"]
newlist = []for x in fruits:
  if "a" in x:
    newlist.append(x)                                    </code>
                                    </pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree122" aria-expanded="false" aria-controls="collapseThree">
                                    Reverse Order
                                </button>
                            </h2>
                            <div id="collapseThree122" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="accordion-body">
                                        <pre class="language-python">
                                        <code>
                                            thislist.reverse()
                                    </code>
                                    </pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree123" aria-expanded="false" aria-controls="collapseThree">
                                    Customize Sort Function
                                </button>
                            </h2>
                            <div id="collapseThree123" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="accordion-body">
                                        <pre class="language-python">
                                        <code>
                                            def myfunc(n):
                                            return abs(n - 50)
                                          
                                          thislist = [100, 50, 65, 82, 23]
                                          thislist.sort(key = myfunc)
                                    </code>
                                    </pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree124" aria-expanded="false" aria-controls="collapseThree">
                                    Sort List Alphanumerically
                                </button>
                            </h2>
                            <div id="collapseThree124" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="accordion-body">
                                        <pre class="language-python">
                                        <code>
                                            thislist.sort()
                                    </code>
                                    </pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree125" aria-expanded="false" aria-controls="collapseThree">
                                    Sort Descending
                                </button>
                            </h2>
                            <div id="collapseThree125" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="accordion-body">
                                        <pre class="language-python">
                                        <code>
                                            thislist.sort(reverse = True)
                                    </code>
                                    </pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree126" aria-expanded="false" aria-controls="collapseThree">
                                    Copy a List
                                </button>
                            </h2>
                            <div id="collapseThree126" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="accordion-body">
                                        <pre class="language-python">
                                        <code>
                                            mylist = thislist.copy()
                                    </code>
                                    </pre>
                                        <pre class="language-python">
                                        <code>
                                            mylist = list(thislist)
                                    </code>
                                    </pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree128" aria-expanded="false" aria-controls="collapseThree">
                                    Join Two Lists
                                </button>
                            </h2>
                            <div id="collapseThree128" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="accordion-body">
                                        <pre class="language-python">
                                        <code>
                                            list1 = ["a", "b", "c"]
                                            list2 = [1, 2, 3]
                                            
                                            list3 = list1 + list2
                                    </code>
                                    </pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br> List Methods<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom235" aria-controls="offcanvasBottom">Read more...</button>
                    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom235" aria-labelledby="offcanvasBottomLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasBottomLabel">List Methods</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body small">
                            <table class="ws-table-all notranslate table-bordered">
                                <tbody>
                                    <tr>
                                        <th>Method</th>
                                        <th>Description</th>
                                    </tr>
                                    <tr>
                                        <td><a href="ref_list_append.asp">append()</a></td>
                                        <td>Adds an element at the end of the list</td>
                                    </tr>
                                    <tr>
                                        <td><a href="ref_list_clear.asp">clear()</a></td>
                                        <td>Removes all the elements from the list</td>
                                    </tr>
                                    <tr>
                                        <td><a href="ref_list_copy.asp">copy()</a></td>
                                        <td>Returns a copy of the list
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="ref_list_count.asp">count()</a></td>
                                        <td>Returns the number of elements with the specified value</td>
                                    </tr>
                                    <tr>
                                        <td><a href="ref_list_extend.asp">extend()</a></td>
                                        <td>Add the elements of a list (or any iterable), to the end of the current list</td>
                                    </tr>
                                    <tr>
                                        <td><a href="ref_list_index.asp">index()</a></td>
                                        <td>Returns the index of the first element with the specified value</td>
                                    </tr>
                                    <tr>
                                        <td><a href="ref_list_insert.asp">insert()</a></td>
                                        <td>Adds an element at the specified position</td>
                                    </tr>
                                    <tr>
                                        <td><a href="ref_list_pop.asp">pop()</a></td>
                                        <td>Removes the element at the specified position</td>
                                    </tr>
                                    <tr>
                                        <td><a href="ref_list_remove.asp">remove()</a></td>
                                        <td>Removes the item with the specified value</td>
                                    </tr>
                                    <tr>
                                        <td><a href="ref_list_reverse.asp">reverse()</a></td>
                                        <td>Reverses the order of the list</td>
                                    </tr>
                                    <tr>
                                        <td><a href="ref_list_sort.asp">sort()</a></td>
                                        <td>Sorts the list</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
            </li>
            <li>
                Python Tuples<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom289" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom289" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Python Tuples</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        Tuples are used to store multiple items in a single variable.
                        <br><br> Tuple is one of 4 built-in data types in Python used to store collections of data, the other 3 are List, Set, and Dictionary, all with different qualities and usage.<br><br> A tuple is a collection which is ordered and
                        unchangeable.
                        <br><br> Tuples are written with round brackets.
                        <br><br><br> Tuple Items<br> Tuple items are ordered, unchangeable, and allow duplicate values.
                        <br> Tuple items are indexed, the first item has index [0], the second item has index [1] etc.
                        <br><br><br> Ordered
                        <br> When we say that tuples are ordered, it means that the items have a defined order, and that order will not change.<br><br><br> Unchangeable<br> Tuples are unchangeable, meaning that we cannot change, add or remove items after
                        the tuple has been created.
                        <br><br><br> Allow Duplicates<br> Since tuples are indexed, they can have items with the same value
                        <br><br><br> Change Tuple Values <br> Once a tuple is created, you cannot change its values. Tuples are unchangeable, or immutable as it also is called.
                        <br><br> But there is a workaround. You can convert the tuple into a list, change the list, and convert the list back into a tuple.
                        <br><br><br> Remove Items <br> Note: You cannot remove items in a tuple.<br><br>Tuples are unchangeable, so you cannot remove items from it, but you can use the same workaround as we used for changing and adding tuple items
                        <br><br><br> we are also allowed to extract the values back into variables. This is called "unpacking"
                    </div>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne121" aria-expanded="false" aria-controls="collapseOne">
                                Python Tuples
                            </button>
                        </h2>
                        <div id="collapseOne121" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="accordion-body">
                                    <pre class="language-python">
                                        <code>
                                            thistuple = ("apple", "banana", "cherry")
                                            print(thistuple)
                                    </code>
                                    </pre>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo122" aria-expanded="false" aria-controls="collapseTwo">
                                    Tuple Length
                                </button>
                            </h2>
                            <div id="collapseTwo122" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <pre class="language-python">
                                    <code>
                                        len(thistuple)
                                </code>
                                </pre>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree123" aria-expanded="false" aria-controls="collapseThree">
                                    Create Tuple With One Item
                                </button>
                            </h2>
                            <div id="collapseThree123" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="accordion-body">
                                        <pre class="language-python">
                                        <code>
                                            thistuple = ("apple",)
                                    </code>
                                    </pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree124" aria-expanded="false" aria-controls="collapseThree">
                                    The tuple() Constructor
                                </button>
                            </h2>
                            <div id="collapseThree124" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="accordion-body">
                                        <pre class="language-python">
                                        <code>
                                            thistuple = tuple(("apple", "banana", "cherry")) # note the double round-brackets
                                    </code>
                                    </pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree125" aria-expanded="false" aria-controls="collapseThree">
                                    Access tuple Items
                                </button>
                            </h2>
                            <div id="collapseThree125" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="accordion-body">
                                        <pre class="language-python">
                                        <code>
                                            thistuple = ("apple", "banana", "cherry")
                                            print(thistuple[1])
                                         </code>
                                    </pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree126" aria-expanded="false" aria-controls="collapseThree">
                                    Negative Indexing
                                </button>
                            </h2>
                            <div id="collapseThree126" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="accordion-body">
                                        <pre class="language-python">
                                        <code>
                                            thistuple = ("apple", "banana", "cherry")
print(thistuple[-1])
                                    </code>
                                    </pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree128" aria-expanded="false" aria-controls="collapseThree">
                                    Check if Item Exists
                                </button>
                            </h2>
                            <div id="collapseThree128" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="accordion-body">
                                        <pre class="language-python">
                                        <code>
                                            thistuple = ("apple", "banana", "cherry")
if "apple" in thistuple:
  print("Yes, 'apple' is in the fruits tuple")
 </code>
                                    </pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree129" aria-expanded="false" aria-controls="collapseThree">
                                    Change tuple Items
                                </button>
                            </h2>
                            <div id="collapseThree129" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="accordion-body">
                                        <pre class="language-python">
                                        <code>
                                            x = ("apple", "banana", "cherry")
                                            y = list(x)
                                            y[1] = "kiwi"
                                            x = tuple(y)
                                            
                                            print(x)
                                    </code>
                                    </pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree130" aria-expanded="false" aria-controls="collapseThree">
                                    Add tuple to a tuple
                                </button>
                            </h2>
                            <div id="collapseThree130" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="accordion-body">
                                        <pre class="language-python">
                                        <code>
                                            thislist = ["apple", "banana", "cherry"]
thislist.insert(2, "watermelon")            
thistuple = ("apple", "banana", "cherry")
y = ("orange",)
thistuple += yprint(thistuple)                  #Insert "watermelon" as the third item
                                    </code>
                                    </pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree131" aria-expanded="false" aria-controls="collapseThree">
                                    Remove Items
                                </button>
                            </h2>
                            <div id="collapseThree131" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="accordion-body">
                                        <pre class="language-python">
                                        <code>
                                            thistuple = ("apple", "banana", "cherry")
                                            y = list(thistuple)
                                            y.remove("apple")
                                            thistuple = tuple(y)
                                    </code>
                                    </pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree132" aria-expanded="false" aria-controls="collapseThree">
                                    Unpacking a Tuple
                                </button>
                            </h2>
                            <div id="collapseThree132" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="accordion-body">
                                        <pre class="language-python">
                                        <code>
                                            fruits = ("apple", "banana", "cherry","clory")(green, yellow, red) = fruitsprint(green)
print(yellow)
print(red)
                                    </code>
                                    </pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree133" aria-expanded="false" aria-controls="collapseThree">
                                    Loop Through a Tuple
                                </button>
                            </h2>
                            <div id="collapseThree133" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="accordion-body">
                                        <pre class="language-python">
                                        <code>
                                            thistuple = ("apple", "banana", "cherry")
for x in thistuple:
  print(x)
                                    </code>
                                    </pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree134" aria-expanded="false" aria-controls="collapseThree">
                                    Join Two Tuples
                                </button>
                            </h2>
                            <div id="collapseThree134" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="accordion-body">
                                        <pre class="language-python">
                                        <code>
                                            tuple1 = ("a", "b" , "c")
tuple2 = (1, 2, 3)tuple3 = tuple1 + tuple2
                                    </code>
                                    </pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree135" aria-expanded="false" aria-controls="collapseThree">
                                    Multiply Tuples
                                </button>
                            </h2>
                            <div id="collapseThree135" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="accordion-body">
                                        <pre class="language-python">
                                        <code>
                                            fruits = ("apple", "banana", "cherry")
                                            mytuple = fruits * 2
                                    </code>
                                    </pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br> Tuple Methods<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom2345" aria-controls="offcanvasBottom">Read more...</button>
                    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom2435" aria-labelledby="offcanvasBottomLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasBottomLabel">Tuple Methods</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body small">
                            <table class="ws-table-all notranslate table-bordered">
                                <tbody>
                                    <tr>
                                        <th style="width:20%">Method</th>
                                        <th>Description</th>
                                    </tr>
                                    <tr>
                                        <td><a href="ref_tuple_count.asp">count()</a></td>
                                        <td>Returns the number of times a specified value occurs in a tuple</td>
                                    </tr>
                                    <tr>
                                        <td><a href="ref_tuple_index.asp">index()</a></td>
                                        <td>Searches the tuple for a specified value and returns the position of where it was found</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
            </li>
            <li>
                Python Sets<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom225" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom225" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Python Sets</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        Set <br> Sets are used to store multiple items in a single variable.
                        <br><br> Set is one of 4 built-in data types in Python used to store collections of data, the other 3 are List, Tuple, and Dictionary, all with different qualities and usage.<br><br> A set is a collection which is unordered, unchangeable*,
                        and unindexed.<br> * Note: Set items are unchangeable, but you can remove items and add new items.<br><br> Set Items<br> Set items are unordered, unchangeable, and do not allow duplicate values.<br><br> Unordered
                        <br> Unordered means that the items in a set do not have a defined order.<br><br> Set items can appear in a different order every time you use them, and cannot be referred to by index or key.
                        <br><br> Unchangeable
                        <br> Set items are unchangeable, meaning that we cannot change the items after the set has been created.
                        <br><br> Once a set is created, you cannot change its items, but you can remove items and add new items.
                        <br><br> Duplicates Not Allowed<br> Sets cannot have two items with the same value.
                    </div>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne151" aria-expanded="false" aria-controls="collapseOne">
                                Python Lists
                            </button>
                        </h2>
                        <div id="collapseOne151" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="accordion-body">
                                    <pre class="language-python">
                                        <code>
                                            thisset = {"apple", "banana", "cherry"}
                                            print(thisset)
                                    </code>
                                    </pre>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo152" aria-expanded="false" aria-controls="collapseTwo">
                                    List Length
                                </button>
                            </h2>
                            <div id="collapseTwo152" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <pre class="language-python">
                                    <code>
                                        len(thislist)
                                </code>
                                </pre>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree153" aria-expanded="false" aria-controls="collapseThree">
                                    type()
                                </button>
                            </h2>
                            <div id="collapseThree153" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="accordion-body">
                                        <pre class="language-python">
                                        <code>
                                            type(mylist) 
                                    </code>
                                    </pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree154" aria-expanded="false" aria-controls="collapseThree">
                                    The set() Constructor
                                </button>
                            </h2>
                            <div id="collapseThree154" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="accordion-body">
                                        <pre class="language-python">
                                        <code>
                                            thisset = set(("apple", "banana", "cherry")) # note the double round-brackets
                                    </code>
                                    </pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree155" aria-expanded="false" aria-controls="collapseThree">
                                    Access Items
                                </button>
                            </h2>
                            <div id="collapseThree155" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="accordion-body">
                                        <pre class="language-python">
                                        <code>
                                            thisset = {"apple", "banana", "cherry"}for x in thisset:
  print(x)
                                         </code>
                                    </pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree156" aria-expanded="false" aria-controls="collapseThree">
                                    Add Items
                                </button>
                            </h2>
                            <div id="collapseThree156" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="accordion-body">
                                        <pre class="language-python">
                                        <code>
                                            thisset = {"apple", "banana", "cherry"}thisset.add("orange")
                                    </code>
                                    </pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree158" aria-expanded="false" aria-controls="collapseThree">
                                    Add Sets
                                </button>
                            </h2>
                            <div id="collapseThree158" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="accordion-body">
                                        <pre class="language-python">
                                        <code>
                                            thisset = {"apple", "banana", "cherry"}
                                            tropical = {"pineapple", "mango", "papaya"}
                                            thisset.update(tropical)
 </code>
                                    </pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree159" aria-expanded="false" aria-controls="collapseThree">
                                    Remove Item
                                </button>
                            </h2>
                            <div id="collapseThree159" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="accordion-body">
                                        <pre class="language-python">
                                            <code>
                                                thisset = {"apple", "banana", "cherry"}                                                
                                                thisset.remove("banana")
                                                
                                        </code>
                                        </pre>
                                        <pre class="language-python">
                                        <code>
                                            thisset = {"apple", "banana", "cherry"}thisset.discard("banana")
                                    </code>
                                    </pre>
                                        <h3>Note: If the item to remove does not exist, discard() will NOT raise an error.
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree160" aria-expanded="false" aria-controls="collapseThree">
                                    Remove the last item by using the pop()
                                </button>
                            </h2>
                            <div id="collapseThree160" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="accordion-body">
                                        <pre class="language-python">
                                        <code>
                                            thisset = {"apple", "banana", "cherry"}
                                            x = thisset.pop()
                                    </code>
                                    </pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree161" aria-expanded="false" aria-controls="collapseThree">
                                    clear()
                                </button>
                            </h2>
                            <div id="collapseThree161" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="accordion-body">
                                        <pre class="language-python">
                                            <code>
                                                thisset = {"apple", "banana", "cherry"}
                                                thisset.clear()
                                        </code>
                                        </pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree162" aria-expanded="false" aria-controls="collapseThree">
                                    del keyword will delete the set completely
                                </button>
                            </h2>
                            <div id="collapseThree162" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="accordion-body">
                                        <pre class="language-python">
                                        <code>
                                            thisset = {"apple", "banana", "cherry"}
                                            del thisset
                                            print(thisset)
                                    </code>
                                    </pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree163" aria-expanded="false" aria-controls="collapseThree">
                                    Loop Items
                                </button>
                            </h2>
                            <div id="collapseThree163" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="accordion-body">
                                        <pre class="language-python">
                                        <code>
                                            thisset = {"apple", "banana", "cherry"}for x in thisset:
  print(x)
                                    </code>
                                    </pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree164" aria-expanded="false" aria-controls="collapseThree">
                                    Join Two Sets
                                </button>
                            </h2>
                            <div id="collapseThree164" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="accordion-body">
                                        <pre class="language-python">
                                        <code>
                                            set1 = {"a", "b" , "c"}
                                            set2 = {1, 2, 3}
                                            
                                            set3 = set1.union(set2)
                                    </code>
                                    </pre>
                                        <pre class="language-python">
                                        <code>
                                            set1 = {"a", "b" , "c"}
                                            set2 = {1, 2, 3}
                                            
                                            set1.update(set2)
                                    </code>
                                    </pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree165" aria-expanded="false" aria-controls="collapseThree">
                                    Keep ONLY the Duplicates
                                </button>
                            </h2>
                            <div id="collapseThree165" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="accordion-body">
                                        <pre class="language-python">
                                        <code>
                                            x = {"apple", "banana", "cherry"}
y = {"google", "microsoft", "apple"}x.intersection_update(y)
                                    </code>
                                    </pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree166" aria-expanded="false" aria-controls="collapseThree">
                                    Keep All, But NOT the Duplicates
                                </button>
                            </h2>
                            <div id="collapseThree166" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="accordion-body">
                                        <pre class="language-python">
                                        <code>
                                            x = {"apple", "banana", "cherry"}
                                            y = {"google", "microsoft", "apple"}
                                            
                                            x.symmetric_difference_update(y)
                                    </code>
                                    </pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br> Set Methods<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom2355" aria-controls="offcanvasBottom">Read more...</button>
                    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom2355" aria-labelledby="offcanvasBottomLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasBottomLabel">Set Methods</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body small">
                            <table class="ws-table-all notranslate table-bordered">
                                <tbody>
                                    <tr>
                                        <th>Method</th>
                                        <th>Description</th>
                                    </tr>
                                    <tr>
                                        <td><a href="ref_set_add.asp">add()</a></td>
                                        <td>Adds an element to the set
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="ref_set_clear.asp">clear()</a></td>
                                        <td>Removes all the elements from the set</td>
                                    </tr>
                                    <tr>
                                        <td><a href="ref_set_copy.asp">copy()</a></td>
                                        <td>Returns a copy of the set</td>
                                    </tr>
                                    <tr>
                                        <td><a href="ref_set_difference.asp">difference()</a></td>
                                        <td>Returns a set containing the difference between two or more sets</td>
                                    </tr>
                                    <tr>
                                        <td><a href="ref_set_difference_update.asp">difference_update()</a></td>
                                        <td>Removes the items in this set that are also included in another, specified set</td>
                                    </tr>
                                    <tr>
                                        <td><a href="ref_set_discard.asp">discard()</a></td>
                                        <td>Remove the specified item
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="ref_set_intersection.asp">intersection()</a></td>
                                        <td>Returns a set, that is the intersection of two other sets</td>
                                    </tr>
                                    <tr>
                                        <td><a href="ref_set_intersection_update.asp">intersection_update()</a></td>
                                        <td>
                                            Removes the items in this set that are not present in other, specified set(s)
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="ref_set_isdisjoint.asp">isdisjoint()</a></td>
                                        <td>Returns whether two sets have a intersection or not</td>
                                    </tr>
                                    <tr>
                                        <td><a href="ref_set_issubset.asp">issubset()</a></td>
                                        <td>Returns whether another set contains this set or not</td>
                                    </tr>
                                    <tr>
                                        <td><a href="ref_set_issuperset.asp">issuperset()</a></td>
                                        <td>Returns whether this set contains another set or not</td>
                                    </tr>
                                    <tr>
                                        <td><a href="ref_set_pop.asp">pop()</a></td>
                                        <td>Removes an element from the set
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="ref_set_remove.asp">remove()</a></td>
                                        <td>Removes the specified element</td>
                                    </tr>
                                    <tr>
                                        <td><a href="ref_set_symmetric_difference.asp">symmetric_difference()</a></td>
                                        <td>Returns a set with the symmetric differences of two sets</td>
                                    </tr>
                                    <tr>
                                        <td><a href="ref_set_symmetric_difference_update.asp">symmetric_difference_update()</a>
                                        </td>
                                        <td>
                                            inserts the symmetric differences from this set and another</td>
                                    </tr>
                                    <tr>
                                        <td><a href="ref_set_union.asp">union()</a></td>
                                        <td>Return a set containing the union of sets</td>
                                    </tr>
                                    <tr>
                                        <td><a href="ref_set_update.asp">update()</a></td>
                                        <td>Update the set with the union of this set and others</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
            </li>







































            <li>
                Python Dictionaries<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom2258" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom2258" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Python Dictionaries</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        Dictionary<br> Dictionaries are used to store data values in key:value pairs.
                        <br><br> A dictionary is a collection which is ordered*, changeable and do not allow duplicates.
                        <br><br> As of Python version 3.7, dictionaries are ordered. In Python 3.6 and earlier, dictionaries are unordered.
                        <br><br> Dictionaries are written with curly brackets, and have keys and values Dictionary Items Dictionary items are ordered, changeable, and does not allow duplicates.
                        <br><br> Dictionary items are presented in key:value pairs, and can be referred to by using the key name. Ordered or Unordered? As of Python version 3.7, dictionaries are ordered. In Python 3.6 and earlier, dictionaries are unordered.
                        <br><br> When we say that dictionaries are ordered, it means that the items have a defined order, and that order will not change.
                        <br><br> Unordered means that the items does not have a defined order, you cannot refer to an item by using an index.
                        <br><br> Changeable Dictionaries are changeable, meaning that we can change, add or remove items after the dictionary has been created.
                        <br><br> Duplicates Not Allowed Dictionaries cannot have two items with the same key:
                        <br><br>
                    </div>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne15191" aria-expanded="false" aria-controls="collapseOne">
                                Python Dictionaries
                            </button>
                        </h2>
                        <div id="collapseOne15192" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="accordion-body">
                                    <pre class="language-python">
                                        <code>
                                            thisdict = {
                                                "brand": "Ford",
                                                "model": "Mustang",
                                                "year": 1964
                                              }
                                              print(thisdict)
                                    </code>
                                    </pre>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo15292" aria-expanded="false" aria-controls="collapseTwo">
                                    Dictionaries Length
                                </button>
                            </h2>
                            <div id="collapseTwo15292" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <pre class="language-python">
                                    <code>
                                        len(thislist)
                                </code>
                                </pre>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree15393" aria-expanded="false" aria-controls="collapseThree">
                                    type()
                                </button>
                            </h2>
                            <div id="collapseThree15393" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="accordion-body">
                                        <pre class="language-python">
                                        <code>
                                            type(mylist) 
                                    </code>
                                    </pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree15495" aria-expanded="false" aria-controls="collapseThree">
                                    The dict() Constructor
                                </button>
                            </h2>
                            <div id="collapseThree15495" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="accordion-body">
                                        <pre class="language-python">
                                        <code>
                                            thisdict = dict(name = "John", age = 36, country = "Norway")
                                    </code>
                                    </pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree15594" aria-expanded="false" aria-controls="collapseThree">
                                    Access Items
                                </button>
                            </h2>
                            <div id="collapseThree15594" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="accordion-body">
                                        <pre class="language-python">
                                        <code>
                                            x = thisdict.get("model")
                                         </code>
                                    </pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree15692" aria-expanded="false" aria-controls="collapseThree">
                                    Get Keys
                                </button>
                            </h2>
                            <div id="collapseThree15692" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="accordion-body">
                                        <pre class="language-python">
                                        <code>
                                            x = thisdict.keys()
                                    </code>
                                    </pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree15891" aria-expanded="false" aria-controls="collapseThree">
                                    Get Values
                                </button>
                            </h2>
                            <div id="collapseThree15891" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="accordion-body">
                                        <pre class="language-python">
                                        <code>
                                            x = thisdict.values()
 </code>
                                    </pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree15991" aria-expanded="false" aria-controls="collapseThree">
                                    Get Items
                                </button>
                            </h2>
                            <div id="collapseThree15991" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="accordion-body">
                                        <pre class="language-python">
                                            <code>
                                                x = thisdict.items()
                                        </code>
                                        </pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree16098" aria-expanded="false" aria-controls="collapseThree">
                                    Check if Key Exists
                                </button>
                            </h2>
                            <div id="collapseThree16098" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="accordion-body">
                                        <pre class="language-python">
                                        <code>
                                            thisdict = {
                                                "brand": "Ford",
                                                "model": "Mustang",
                                                "year": 1964
                                              }
                                              if "model" in thisdict:
                                                print("Yes, 'model' is one of the keys in the thisdict dictionary")              
                                    </code>
                                    </pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree16136" aria-expanded="false" aria-controls="collapseThree">
                                    Change Values
                                </button>
                            </h2>
                            <div id="collapseThree16136" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="accordion-body">
                                        <pre class="language-python">
                                            <code>
                                                thisdict = {
                                                    "brand": "Ford",
                                                    "model": "Mustang",
                                                    "year": 1964
                                                  }
                                                  thisdict["year"] = 2018
                                        </code>
                                        </pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree16296" aria-expanded="false" aria-controls="collapseThree">
                                    Update Dictionary
                                </button>
                            </h2>
                            <div id="collapseThree162" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="accordion-body">
                                        <pre class="language-python">
                                        <code>
                                            thisdict = {
                                                "brand": "Ford",
                                                "model": "Mustang",
                                                "year": 1964
                                              }
                                              thisdict.update({"year": 2020})
                                    </code>
                                    </pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree16369" aria-expanded="false" aria-controls="collapseThree">
                                    Adding Items
                                </button>
                            </h2>
                            <div id="collapseThree163" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="accordion-body">
                                        <pre class="language-python">
                                        <code>
                                            thisdict = {
                                                "brand": "Ford",
                                                "model": "Mustang",
                                                "year": 1964
                                              }
                                              thisdict["color"] = "red"
                                    </code>
                                    </pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree16469" aria-expanded="false" aria-controls="collapseThree">
                                    Removing Items
                                </button>
                            </h2>
                            <div id="collapseThree16469" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="accordion-body">
                                        <pre class="language-python">
                                        <code>
                                            thisdict = {
                                                "brand": "Ford",
                                                "model": "Mustang",
                                                "year": 1964
                                              }
                                              thisdict.pop("model")
                                              print(thisdict)
                                    </code>
                                    </pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree16591" aria-expanded="false" aria-controls="collapseThree">
                                    delete the dictionary completely
                                </button>
                            </h2>
                            <div id="collapseThree16591" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="accordion-body">
                                        <pre class="language-python">
                                        <code>
                                            thisdict = {
                                                "brand": "Ford",
                                                "model": "Mustang",
                                                "year": 1964
                                              }
                                              del thisdict
                                    </code>
                                    </pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree16698" aria-expanded="false" aria-controls="collapseThree">
                                    clear() method empties the dictionary
                                </button>
                            </h2>
                            <div id="collapseThree16698" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="accordion-body">
                                        <pre class="language-python">
                                        <code>
                                            thisdict = {
                                                "brand": "Ford",
                                                "model": "Mustang",
                                                "year": 1964
                                              }
                                              thisdict.clear()
                                    </code>
                                    </pre>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree166981" aria-expanded="false" aria-controls="collapseThree">
                                    Loop Through a Dictionary
                                </button>
                            </h2>
                            <div id="collapseThree166981" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="accordion-body">
                                        <pre class="language-python">
                                        <code>
                                            for x in thisdict:
                                            print(x)
                                    </code>
                                    </pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree166982" aria-expanded="false" aria-controls="collapseThree">
                                    Copy a Dictionary
                                </button>
                            </h2>
                            <div id="collapseThree166982" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="accordion-body">
                                        <pre class="language-python">
                                        <code>
                                            thisdict = {
                                                "brand": "Ford",
                                                "model": "Mustang",
                                                "year": 1964
                                              }
                                              mydict = thisdict.copy()
                                              print(mydict)
                                                             </code>
                                    </pre>
                                        <pre class="language-python">
                                        <code>
                                            thisdict = {
                                                "brand": "Ford",
                                                "model": "Mustang",
                                                "year": 1964
                                              }
                                              mydict = dict(thisdict)
                                              print(mydict)
                                        </code>
                                    </pre>
                                    </div>
                                </div>
                            </div>
                        </div>






                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree1669823" aria-expanded="false" aria-controls="collapseThree">
                                    Nested Dictionaries
                                </button>
                            </h2>
                            <div id="collapseThree1669823" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="accordion-body">
                                        <pre class="language-python">
                                        <code>
                                            child1 = {
                                                "name" : "Emil",
                                                "year" : 2004
                                              }
                                              child2 = {
                                                "name" : "Tobias",
                                                "year" : 2007
                                              }
                                              child3 = {
                                                "name" : "Linus",
                                                "year" : 2011
                                              }
                                              
                                              myfamily = {
                                                "child1" : child1,
                                                "child2" : child2,
                                                "child3" : child3
                                              }
                                                             </code>
                                    </pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br> Dictionary Methods<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom23559" aria-controls="offcanvasBottom">Read more...</button>
                    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom23559" aria-labelledby="offcanvasBottomLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasBottomLabel">Dictionary Methods</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body small">
                            <table class="ws-table-all notranslate table-bordered">
                                <tbody>
                                    <tr>
                                        <th>Method</th>
                                        <th>Description</th>
                                    </tr>
                                    <tr>
                                        <td><a href="ref_dictionary_clear.asp">clear()</a></td>
                                        <td>Removes all the elements from the dictionary</td>
                                    </tr>
                                    <tr>
                                        <td><a href="ref_dictionary_copy.asp">copy()</a></td>
                                        <td>Returns a copy of the dictionary</td>
                                    </tr>
                                    <tr>
                                        <td><a href="ref_dictionary_fromkeys.asp">fromkeys()</a></td>
                                        <td>Returns a dictionary with the specified keys and value</td>
                                    </tr>
                                    <tr>
                                        <td><a href="ref_dictionary_get.asp">get()</a></td>
                                        <td>Returns the value of the specified key</td>
                                    </tr>
                                    <tr>
                                        <td><a href="ref_dictionary_items.asp">items()</a></td>
                                        <td>Returns a list containing a tuple for each key value pair</td>
                                    </tr>
                                    <tr>
                                        <td><a href="ref_dictionary_keys.asp">keys()</a></td>
                                        <td>Returns a list containing the dictionary's keys</td>
                                    </tr>
                                    <tr>
                                        <td><a href="ref_dictionary_pop.asp">pop()</a></td>
                                        <td>Removes the element with the specified key</td>
                                    </tr>
                                    <tr>
                                        <td><a href="ref_dictionary_popitem.asp">popitem()</a></td>
                                        <td>Removes the last inserted key-value pair</td>
                                    </tr>
                                    <tr>
                                        <td><a href="ref_dictionary_setdefault.asp">setdefault()</a></td>
                                        <td>Returns the value of the specified key. If the key does not exist: insert the key, with the specified value</td>
                                    </tr>
                                    <tr>
                                        <td><a href="ref_dictionary_update.asp">update()</a></td>
                                        <td>Updates the dictionary with the specified key-value pairs</td>
                                    </tr>
                                    <tr>
                                        <td><a href="ref_dictionary_values.asp">values()</a></td>
                                        <td>Returns a list of all the values in the dictionary</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
            </li>

            <li>
                If ..elif.. Else<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom235" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom235" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Java Continue</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        Python Conditions and If statements <br> Python supports the usual logical conditions from mathematics:
                        <br><br> Equals: a == b<br> Not Equals: a != b<br> Less than: a
                        < b<br>
                            Less than or equal to: a
                            <=b <br>
                                Greater than: a > b<br> Greater than or equal to: a >= b<br> These conditions can be used in several ways, most commonly in "if statements" and loops.
                                <br> An "if statement" is written by using the if keyword.<br>
                    </div>
                </div>
                <pre class="language-python">
                    <code>
                        a = 200
                        b = 33
                        if b > a:
                          print("b is greater than a")
                        elif a == b:
                          print("a and b are equal")
                        else:
                          print("a is greater than b")
                    </code>
                    </pre>
            </li>
            <li>
                The pass Statement<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom24" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom24" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">The pass Statement</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        if statements cannot be empty, but if you for some reason have an if statement with no content, put in the pass statement to avoid getting an error.
                    </div>
                </div>
                <pre class="language-python">
<code>
    a = 33
b = 200

if b > a:
  pass
</code>
</pre>
            </li>
            <li>
                While Loops<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom25" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom25" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">While Loops</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        With the while loop we can execute a set of statements as long as a condition is true.
                    </div>
                </div>
                <pre class="language-python">
                    <code>
                        i = 1
while i < 6:
  print(i)
  i += 1
                    </code>
                    </pre>
            </li>
            <li>
                The break Statement<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom27" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom27" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">The break Statement</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        The break Statement
                    </div>
                </div>
                <pre class="language-python">
                    <code>
                        i = 1
while i < 6:
  print(i)
  if i == 3:
    break
  i += 1
                    </code>
                    </pre>
            </li>
            <li>
                The continue Statement<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom28" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom28" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">The continue Statement</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        With the continue statement we can stop the current iteration, and continue with the next
                    </div>
                </div>
                <pre class="language-python">
                    <code>
                        i = 0
                        while i < 6:
                          i += 1
                          if i == 3:
                            continue
                          print(i)
                    </code>
                    </pre>
            </li>
            <li>
                Python For Loops<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom29" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start " tabindex="-1" id="offcanvasBottom29" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">Python For Loops</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        A for loop is used for iterating over a sequence (that is either a list, a tuple, a dictionary, a set, or a string).
                        <br><br> This is less like the for keyword in other programming languages, and works more like an iterator method as found in other object-orientated programming languages.
                        <br><br> With the for loop we can execute a set of statements, once for each item in a list, tuple, set etc.
                    </div>
                </div>
                <pre class="language-python">
                    <code>
                        fruits = ["apple", "banana", "cherry"]
                        for x in fruits:
                          print(x)
                    </code>
                    </pre>
            </li>
            <li>
                The range() Function<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom49" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start " tabindex="-1" id="offcanvasBottom49" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">The range() Function</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        To loop through a set of code a specified number of times, we can use the range() function,
                        <br><br> The range() function returns a sequence of numbers, starting from 0 by default, and increments by 1 (by default), and ends at a specified number.
                    </div>
                </div>
                <pre class="language-python">
            <code>
                for x in range(2,6):
                    print(x)
            </code>
        </pre>
            </li>
            <li>
                Python Functions<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom30" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom30" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Python Functions</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        A function is a block of code which only runs when it is called.
                        <br> You can pass data, known as parameters, into a function.
                        <br> A function can return data as a result.
                        <br><br> Creating a Function In Python a function is defined using the def keyword
                        <br><br> Arguments <br> Information can be passed into functions as arguments.
                        <br><br> Arguments are specified after the function name, inside the parentheses. You can add as many arguments as you want, just separate them with a comma.
                        <br><br> The following example has a function with one argument (fname). When the function is called, we pass along a first name, which is used inside the function to print the full name
                    </div>
                </div>
                <pre class="language-python">
                    <code>
                        def my_function():
                        print("Hello from a function")
                    </code>
                    </pre>
                <pre class="language-python">
                        <code>
                            def my_function(fname):
  print(fname + " Refsnes")
my_function("Emil")
                        </code>
                        </pre>
            </li>
            <li>
                Arbitrary Arguments, *args<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom32" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom32" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Arbitrary Arguments, *args</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        If you do not know how many arguments that will be passed into your function, add a * before the parameter name in the function definition.
                        <br><br> This way the function will receive a tuple of arguments, and can access the items accordingly
                    </div>
                </div>
                <pre class="language-python">
                    <code>
                        def my_function(*kids):
                        print("The youngest child is " + kids[2])
                      
                      my_function("Emil", "Tobias", "Linus")
                    </code>
                    </pre>
            </li>
            <li>
                Recursion<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom33" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom33" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Recursion</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        Python also accepts function recursion, which means a defined function can call itself.
                        <br><br> Recursion is a common mathematical and programming concept. It means that a function calls itself. This has the benefit of meaning that you can loop through data to reach a result.
                        <br><br> The developer should be very careful with recursion as it can be quite easy to slip into writing a function which never terminates, or one that uses excess amounts of memory or processor power. However, when written correctly
                        recursion can be a very efficient and mathematically-elegant approach to programming.
                        <br><br> In this example, tri_recursion() is a function that we have defined to call itself ("recurse"). We use the k variable as the data, which decrements (-1) every time we recurse. The recursion ends when the condition is not
                        greater than 0 (i.e. when it is 0).
                        <br><br> To a new developer it can take some time to work out how exactly this works, best way to find out is by testing and modifying it.
                    </div>
                </div>
                <pre class="language-python">
                    <code>
                        def tri_recursion(k):
  if(k > 0):
    result = k + tri_recursion(k - 1)
    print(result)
  else:
    result = 0
  return result

print("\n\nRecursion Example Results")
tri_recursion(6)
                    </code>
                    </pre>
            </li>
            <li>
                Python Lambda<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom34" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom34" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Python Lambda</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        A lambda function is a small anonymous function.
                        <br><br> A lambda function can take any number of arguments, but can only have one expression.
                        <br><br> Why Use Lambda Functions?<br> The power of lambda is better shown when you use them as an anonymous function inside another function.
                        <br><br> Say you have a function definition that takes one argument, and that argument will be multiplied with an unknown number
                        <br><br> Use lambda functions when an anonymous function is required for a short period of time.
                    </div>
                </div>
                <pre class="language-python">
                    <code>
                        lambda arguments : expression
                    </code>
                    </pre>

                <pre class="language-python">
                    <code>
                        def myfunc(n):
  return lambda a : a * n
                    </code>
                    </pre>
            </li>
            <li>
                Arrays<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom35" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom35" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Arrays</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        Note: Python does not have built-in support for Arrays, but Python Lists can be used instead.
                        <br> Note: This page shows you how to use LISTS as ARRAYS, however, to work with arrays in Python you will have to import a library, like the NumPy library.
                        <br> Arrays are used to store multiple values in one single variable
                        <br><br> What is an Array?<br><br> An array is a special variable, which can hold more than one value at a time.
                        <br><br> If you have a list of items (a list of car names, for example), storing the cars in single variables could look like this:
                        <br><br> car1 = "Ford" car2 = "Volvo" car3 = "BMW" However, what if you want to loop through the cars and find a specific one? And what if you had not 3 cars, but 300?
                        <br><br> The solution is an array!
                        <br><br> An array can hold many values under a single name, and you can access the values by referring to an index number.
                        <br><br> Access the Elements of an Array You refer to an array element by referring to the index number.
                    </div>
                </div>
                <pre class="language-python">
                    <code>
                        cars = ["Ford", "Volvo", "BMW"]
                    </code>
                    </pre>

            </li>
            <li>
                Array Methods<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom36" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom36" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Array Methods</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        Python has a set of built-in methods that you can use on lists/arrays.
                        <table class="ws-table-all notranslate table-bordered">
                            <tbody>
                                <tr>
                                    <th>Method</th>
                                    <th>Description</th>
                                </tr>
                                <tr>
                                    <td><a href="ref_list_append.asp">append()</a></td>
                                    <td>Adds an element at the end of the list</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_list_clear.asp">clear()</a></td>
                                    <td>Removes all the elements from the list</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_list_copy.asp">copy()</a></td>
                                    <td>Returns a copy of the list
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="ref_list_count.asp">count()</a></td>
                                    <td>Returns the number of elements with the specified value</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_list_extend.asp">extend()</a></td>
                                    <td>Add the elements of a list (or any iterable), to the end of the current list</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_list_index.asp">index()</a></td>
                                    <td>Returns the index of the first element with the specified value</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_list_insert.asp">insert()</a></td>
                                    <td>Adds an element at the specified position</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_list_pop.asp">pop()</a></td>
                                    <td>Removes the element at the specified position</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_list_remove.asp">remove()</a></td>
                                    <td>Removes the first item with the specified value</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_list_reverse.asp">reverse()</a></td>
                                    <td>Reverses the order of the list</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_list_sort.asp">sort()</a></td>
                                    <td>Sorts the list</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </li>
            <li>
                Python Classes/Objects<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom37" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom37" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Python Classes/Objects
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">

                        Python is an object oriented programming language. Almost everything in Python is an object, with its properties and methods. A Class is like an object constructor, or a "blueprint" for creating objects.
                    </div>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne901" aria-expanded="false" aria-controls="collapseOne">
                                Create a Class
                            </button>
                        </h2>
                        <div id="collapseOne901" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                class MyClass: x = 5
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo901" aria-expanded="false" aria-controls="collapseTwo">
                                Create Object
                            </button>
                        </h2>
                        <div id="collapseTwo901" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                p1 = MyClass() print(p1.x)
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                The __init__() Function<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom38" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom38" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">The __init__() Function</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        The examples above are classes and objects in their simplest form, and are not really useful in real life applications.
                        <br><br> To understand the meaning of classes we have to understand the built-in __init__() function.
                        <br><br> All classes have a function called __init__(), which is always executed when the class is being initiated.
                        <br><br> Use the __init__() function to assign values to object properties, or other operations that are necessary to do when the object is being created
                        <br> Note: The __init__() function is called automatically every time the class is being used to create a new object.
                    </div>
                </div>
                <pre class="language-python">
                            <code>
                                class Person:
                                def __init__(self, name, age):
                                  self.name = name
                                  self.age = age
                              
                              p1 = Person("John", 36)
                              
                              print(p1.name)
                              print(p1.age)
                            </code>
                            </pre>
            </li>
            <li>
                The __str__() Function<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom39" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom39" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">The __str__() Function</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        The __str__() function controls what should be returned when the class object is represented as a string.
                        <br><br> If the __str__() function is not set, the string representation of the object is returned
                        <br><br> Note: The self parameter is a reference to the current instance of the class, and is used to access variables that belong to the class.
                    </div>
                </div>
                <pre class="language-python">
                            <code>
                                class Person:
  def __init__(self, name, age):
    self.name = name
    self.age = age

  def __str__(self):
    return f"{self.name}({self.age})"

p1 = Person("John", 36)

print(p1)
                            </code>
                            </pre>
            </li>
            <li>
                Object Methods<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom40" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom40" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Object Methods
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        Objects can also contain methods. Methods in objects are functions that belong to the object.
                        <br><br> Let us create a method in the Person class
                        <br><br> The self Parameter<br> The self parameter is a reference to the current instance of the class, and is used to access variables that belongs to the class.
                        <br><br> It does not have to be named self , you can call it whatever you like, but it has to be the first parameter of any function in the class
                    </div>
                </div>
                <pre class="language-python">
                            <code>
                                class Person:
  def __init__(self, name, age):
    self.name = name
    self.age = age

  def myfunc(self):
    print("Hello my name is " + self.name)

p1 = Person("John", 36)
p1.myfunc()
                            </code>
                            </pre>
            </li>
            <li>
                Python Inheritance<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom41" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom41" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Python Inheritance</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        Inheritance allows us to define a class that inherits all the methods and properties from another class.
                        <br><br> Parent class is the class being inherited from, also called base class.
                        <br><br> Child class is the class that inherits from another class, also called derived class.
                        <br><br> Create a Parent Class Any class can be a parent class, so the syntax is the same as creating any other class
                    </div>
                </div>
                <br>
                <!-- <pre class="language-python">
                    <code>
                            
                    </code>
                    </pre> -->
            </li>
            <li>
                the super() Function
                <button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom42" aria-controls="offcanvasBottom">Read
                    more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom42" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel"> the super() Function</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        Python also has a super() function that will make the child class inherit all the methods and properties from its parent
                        <br>By using the super() function, you do not have to use the name of the parent element, it will automatically inherit the methods and properties from its parent
                    </div>
                </div>
                <pre class="language-python">
                    <code>
                        class Student(Person):
                        def __init__(self, fname, lname):
                          super().__init__(fname, lname)                 }
                    </code>
                    </pre>
            </li>
            <li>
                Python Iterators<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom43" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom43" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Python Iterators</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        An iterator is an object that contains a countable number of values.
                        <br><br> An iterator is an object that can be iterated upon, meaning that you can traverse through all the values.
                        <br><br> Technically, in Python, an iterator is an object which implements the iterator protocol, which consist of the methods __iter__() and __next__().
                        <br><br> Iterator vs Iterable Lists, tuples, dictionaries, and sets are all iterable objects. They are iterable containers which you can get an iterator from.
                        <br><br> All these objects have a iter() method which is used to get an iterator
                        <br><br><br> Create an Iterator To create an object/class as an iterator you have to implement the methods __iter__() and __next__() to your object.
                        <br><br> As you have learned in the Python Classes/Objects chapter, all classes have a function called __init__(), which allows you to do some initializing when the object is being created.
                        <br><br> The __iter__() method acts similar, you can do operations (initializing etc.), but must always return the iterator object itself.
                        <br><br> The __next__() method also allows you to do operations, and must return the next item in the sequence.
                    </div>
                </div>
                <h3>Return an iterator from a tuple</h3>
                <pre class="language-python">
                    <code>
                        mytuple = ("apple", "banana", "cherry")
                        myit = iter(mytuple)
                        
                        for x in mytuple:
  print(x)               
                    </code>
                    </pre>
                <h3>Create an Iterator</h3>
                <pre class="language-python">
                    <code>
                        class MyNumbers:
  def __iter__(self):
    self.a = 1
    return self

  def __next__(self):
    x = self.a
    self.a += 1
    return x

myclass = MyNumbers()
myiter = iter(myclass)

print(next(myiter))
print(next(myiter))
                    </code>
                    </pre>
            </li>
            <li>
                StopIteration<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom44" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom44" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">StopIteration

                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        The example above would continue forever if you had enough next() statements, or if it was used in a for loop.
                        <br> To prevent the iteration to go on forever, we can use the StopIteration statement.
                        <br> In the __next__() method, we can add a terminating condition to raise an error if the iteration is done a specified number of times
                    </div>
                </div>
                <pre class="language-python">
                    <code>
                        class MyNumbers:
                        def __iter__(self):
                          self.a = 1
                          return self
                      
                        def __next__(self):
                          if self.a <= 20:
                            x = self.a
                            self.a += 1
                            return x
                          else:
                            raise StopIteration
                      
                      myclass = MyNumbers()
                      myiter = iter(myclass)
                      
                      for x in myiter:
                        print(x)
                    </code>
                    </pre>
            </li>
            <li>
                Python Scope<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom46" aria-controls="offcanvasBottom">Read
                    more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom46" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Python Scope</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        A variable is only available from inside the region it is created. This is called scope.
                        <br><br> Local Scope<br> A variable created inside a function belongs to the local scope of that function, and can only be used inside that function.
                        <br><br> Function Inside Function<br> As explained in the example above, the variable x is not available outside the function, but it is available for any function inside the function
                        <br><br> Global Scope<br> A variable created in the main body of the Python code is a global variable and belongs to the global scope.
                        <br> Global variables are available from within any scope, global and local.
                        <br><br><br> Naming Variables<br> If you operate with the same variable name inside and outside of a function, Python will treat them as two separate variables, one available in the global scope (outside the function) and one available
                        in the local scope (inside the function)
                        <br><br><br> Global Keyword<br> If you need to create a global variable, but are stuck in the local scope, you can use the global keyword.
                        <br> The global keyword makes the variable global.
                    </div>
                </div>
                <h3>Global Keyword</h3>
                <pre class="language-python">
                    <code>
                        def myfunc():
                        global x
                        x = 300
                      myfunc()      
                      print(x)
                    </code>
                    </pre>
            </li>
            <li>Python Modules<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom48" aria-controls="offcanvasBottom">Read
                    more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom48" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Python Modules</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        What is a Module?<br> Consider a module to be the same as a code library.
                        <br><br> A file containing a set of functions you want to include in your application.
                        <br><br><br> Create a Module To create a module just save the code you want in a file with the file extension .py<br><br><br> Use a Module<br> Now we can use the module we just created, by using the import statement
                        <br><br><br> Note: When using a function from a module, use the syntax: module_name.function_name.
                        <br><br><br> Variables in Module<br> The module can contain functions, as already described, but also variables of all types (arrays, dictionaries, objects etc):
                    </div>
                </div>
                <pre class="language-python">
                                <code>
                                    import mymodule
                                </code>
                                </pre>
                <h3>Re-naming a Module</h3>
                <pre class="language-python">
                                    <code>
                                        import mymodule as mx
                                    </code>
                                    </pre>
            </li>
            <li>Python Dates<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom49" aria-controls="offcanvasBottom">Read
                    more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom49" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Python Dates</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        A date in Python is not a data type of its own, but we can import a module named datetime to work with dates as date objects.
                    </div>
                </div>
                <pre class="language-python">
                                <code>
                                    import datetime

x = datetime.datetime.now()
print(x)
                                </code>
                                </pre>
            </li>
            <li>The strftime() Method<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom50" aria-controls="offcanvasBottom">Read
                    more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom50" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">The strftime() Method</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        The datetime object has a method for formatting date objects into readable strings. The method is called strftime(), and takes one parameter, format, to specify the format of the returned string
                        <table class="ws-table-all notranslate table-bordered">
                            <tbody>
                                <tr>
                                    <th style="width:25%">Directive</th>
                                    <th style="width:45%">Description</th>
                                    <th style="width:30%">Example</th>
                                </tr>
                                <tr>
                                    <td>%a</td>
                                    <td>Weekday, short version</td>
                                    <td>Wed</td>

                                </tr>
                                <tr>
                                    <td>%A</td>
                                    <td>Weekday, full version</td>
                                    <td>Wednesday</td>

                                </tr>
                                <tr>
                                    <td>%w</td>
                                    <td>Weekday as a number 0-6, 0 is Sunday</td>
                                    <td>3</td>

                                </tr>
                                <tr>
                                    <td>%d</td>
                                    <td>Day of month 01-31</td>
                                    <td>31</td>

                                </tr>
                                <tr>
                                    <td>%b</td>
                                    <td>Month name, short version</td>
                                    <td>Dec</td>

                                </tr>
                                <tr>
                                    <td>%B</td>
                                    <td>Month name, full version</td>
                                    <td>December</td>

                                </tr>
                                <tr>
                                    <td>%m</td>
                                    <td>Month as a number 01-12</td>
                                    <td>12</td>

                                </tr>
                                <tr>
                                    <td>%y</td>
                                    <td>Year, short version, without century</td>
                                    <td>18</td>

                                </tr>
                                <tr>
                                    <td>%Y</td>
                                    <td>Year, full version</td>
                                    <td>2018</td>

                                </tr>
                                <tr>
                                    <td>%H</td>
                                    <td>Hour 00-23</td>
                                    <td>17</td>

                                </tr>
                                <tr>
                                    <td>%I</td>
                                    <td>Hour 00-12</td>
                                    <td>05</td>

                                </tr>
                                <tr>
                                    <td>%p</td>
                                    <td>AM/PM</td>
                                    <td>PM</td>

                                </tr>
                                <tr>
                                    <td>%M</td>
                                    <td>Minute 00-59</td>
                                    <td>41</td>

                                </tr>
                                <tr>
                                    <td>%S</td>
                                    <td>Second 00-59</td>
                                    <td>08</td>

                                </tr>
                                <tr>
                                    <td>%f</td>
                                    <td>Microsecond 000000-999999</td>
                                    <td>548513</td>

                                </tr>
                                <tr>
                                    <td>%z</td>
                                    <td>UTC offset</td>
                                    <td>+0100</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>%Z</td>
                                    <td>Timezone</td>
                                    <td>CST</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>%j</td>
                                    <td>Day number of year 001-366</td>
                                    <td>365</td>

                                </tr>
                                <tr>
                                    <td>%U</td>
                                    <td>Week number of year, Sunday as the first day of week, 00-53</td>
                                    <td>52</td>

                                </tr>
                                <tr>
                                    <td>%W</td>
                                    <td>Week number of year, Monday as the first day of week, 00-53</td>
                                    <td>52</td>

                                </tr>
                                <tr>
                                    <td>%c</td>
                                    <td>Local version of date and time</td>
                                    <td>Mon Dec 31 17:41:00 2018</td>

                                </tr>
                                <tr>
                                    <td>%C</td>
                                    <td>Century</td>
                                    <td>20</td>

                                </tr>
                                <tr>
                                    <td>%x</td>
                                    <td>Local version of date</td>
                                    <td>12/31/18</td>

                                </tr>
                                <tr>
                                    <td>%X</td>
                                    <td>Local version of time</td>
                                    <td>17:41:00</td>

                                </tr>
                                <tr>
                                    <td>%%</td>
                                    <td>A % character</td>
                                    <td>%</td>
                                </tr>
                                <tr>
                                    <td>%G</td>
                                    <td>ISO 8601 year</td>
                                    <td>2018</td>

                                </tr>
                                <tr>
                                    <td>%u</td>
                                    <td>ISO 8601 weekday (1-7)</td>
                                    <td>1</td>

                                </tr>
                                <tr>
                                    <td>%V</td>
                                    <td>ISO 8601 weeknumber (01-53)</td>
                                    <td>01</td>

                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
                <pre class="language-python">
                                        <code>
                                            import datetime
x = datetime.datetime(2018, 6, 1)
print(x.strftime("%B"))
                                        </code>
                                        </pre>
            </li>
            <li>Python Math
                <button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom52" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom52" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Python Math
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        Python has a set of built-in math functions, including an extensive math module, that allows you to perform mathematical tasks on numbers.
                        <br><br><br> Built-in Math Functions<br> The min() and max() functions can be used to find the lowest or highest value in an iterable
                        <br><br>
                        <table class="ws-table-all notranslate table-bordered" style="margin:0">
                            <tbody>
                                <tr>
                                    <th style="width:30%">Method</th>
                                    <th style="width:70%">Description</th>
                                </tr>
                                <tr>
                                    <td><a href="ref_math_acos.asp">math.acos()</a></td>
                                    <td>Returns the arc cosine of a number</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_math_acosh.asp">math.acosh()</a></td>
                                    <td>Returns the inverse hyperbolic cosine of a number</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_math_asin.asp">math.asin()</a></td>
                                    <td>Returns the arc sine of a number</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_math_asinh.asp">math.asinh()</a></td>
                                    <td>Returns the inverse hyperbolic sine of a number</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_math_atan.asp">math.atan()</a></td>
                                    <td>Returns the arc tangent of a number in radians</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_math_atan2.asp">math.atan2()</a></td>
                                    <td>Returns the arc tangent of y/x in radians </td>
                                </tr>
                                <tr>
                                    <td><a href="ref_math_atanh.asp">math.atanh()</a></td>
                                    <td>Returns the inverse hyperbolic tangent of a number</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_math_ceil.asp">math.ceil()</a></td>
                                    <td>Rounds a number up to the nearest integer</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_math_comb.asp">math.comb()</a></td>
                                    <td>Returns the number of ways to choose k items from n items without repetition and order
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="ref_math_copysign.asp">math.copysign()</a></td>
                                    <td>Returns a float consisting of the value of the first parameter and the sign of the second parameter</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_math_cos.asp">math.cos()</a></td>
                                    <td>Returns the cosine of a number</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_math_cosh.asp">math.cosh()</a></td>
                                    <td>Returns the hyperbolic cosine of a number</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_math_degrees.asp">math.degrees()</a></td>
                                    <td>Converts an angle from radians to degrees</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_math_dist.asp">math.dist()</a></td>
                                    <td>Returns the Euclidean distance between two points (p and q), where p and q are the coordinates of that point</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_math_erf.asp">math.erf()</a></td>
                                    <td>Returns the error function of a number</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_math_erfc.asp">math.erfc()</a></td>
                                    <td>Returns the complementary error function of a number</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_math_exp.asp">math.exp()</a></td>
                                    <td>Returns E raised to the power of x</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_math_expm1.asp">math.expm1()</a></td>
                                    <td>Returns E<sup>x</sup> - 1</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_math_fabs.asp">math.fabs()</a></td>
                                    <td>Returns the absolute value of a number</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_math_factorial.asp">math.factorial()</a></td>
                                    <td>Returns the factorial of a number</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_math_floor.asp">math.floor()</a></td>
                                    <td>Rounds a number down to the nearest integer</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_math_fmod.asp">math.fmod()</a></td>
                                    <td>Returns the remainder of x/y</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_math_frexp.asp">math.frexp()</a></td>
                                    <td>Returns the mantissa and the exponent, of a specified number</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_math_fsum.asp">math.fsum()</a></td>
                                    <td>Returns the sum of all items in any iterable (tuples, arrays, lists, etc.)</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_math_gamma.asp">math.gamma()</a></td>
                                    <td>Returns the gamma function at x</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_math_gcd.asp">math.gcd()</a></td>
                                    <td>Returns the greatest common divisor of two integers</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_math_hypot.asp">math.hypot()</a></td>
                                    <td>Returns the Euclidean norm</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_math_isclose.asp">math.isclose()</a></td>
                                    <td>Checks whether two values are close to each other, or not</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_math_isfinite.asp">math.isfinite()</a></td>
                                    <td>Checks whether a number is finite or not</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_math_isinf.asp">math.isinf()</a></td>
                                    <td>Checks whether a number is infinite or not</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_math_isnan.asp">math.isnan()</a></td>
                                    <td>Checks whether a value is NaN (not a number) or not</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_math_isqrt.asp">math.isqrt()</a></td>
                                    <td>Rounds a square root number downwards to the nearest integer</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_math_ldexp.asp">math.ldexp()</a></td>
                                    <td>Returns the inverse of <a href="ref_math_frexp.asp">math.frexp()</a> which is x * (2**i) of the given numbers x and i</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_math_lgamma.asp">math.lgamma()</a></td>
                                    <td>Returns the log gamma value of x</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_math_log.asp">math.log()</a></td>
                                    <td>Returns the natural logarithm of a number, or the logarithm of number to base
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="ref_math_log10.asp">math.log10()</a></td>
                                    <td>Returns the base-10 logarithm of x</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_math_log1p.asp">math.log1p()</a></td>
                                    <td>Returns the natural logarithm of 1+x</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_math_log2.asp">math.log2()</a></td>
                                    <td>Returns the base-2 logarithm of x</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_math_perm.asp">math.perm()</a></td>
                                    <td>Returns the number of ways to choose k items from n items with order and without repetition
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="ref_math_pow.asp">math.pow()</a></td>
                                    <td>Returns the value of x to the power of y</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_math_prod.asp">math.prod()</a></td>
                                    <td>Returns the product of all the elements in an iterable</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_math_radians.asp">math.radians()</a></td>
                                    <td>Converts a degree value into radians</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_math_remainder.asp">math.remainder()</a></td>
                                    <td>Returns the closest value that can make numerator completely divisible by the denominator
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="ref_math_sin.asp">math.sin()</a></td>
                                    <td>Returns the sine of a number</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_math_sinh.asp">math.sinh()</a></td>
                                    <td>Returns the hyperbolic sine of a number</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_math_sqrt.asp">math.sqrt()</a></td>
                                    <td>Returns the square root of a number</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_math_tan.asp">math.tan()</a></td>
                                    <td>Returns the tangent of a number</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_math_tanh.asp">math.tanh()</a></td>
                                    <td>Returns the hyperbolic tangent of a number</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_math_trunc.asp">math.trunc()</a></td>
                                    <td>Returns the truncated integer parts of a number</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </li>
            <li>Python JSON<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom53" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom53" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Python JSON</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        JSON is a syntax for storing and exchanging data.<br>
                        <br><br> JSON is text, written with JavaScript object notation.<br> JSON in Python<br> Python has a built-in package called json, which can be used to work with JSON data.<br>
                    </div>
                </div>
                <h3>Convert from JSON to Python</h3>
                <pre class="language-python">
                                            <code>
                                                import json

                                                # some JSON:
                                                x =  '{ "name":"John", "age":30, "city":"New York"}'
                                                
                                                # parse x:
                                                y = json.loads(x)
                                                
                                                # the result is a Python dictionary:
                                                print(y["age"])    
                                            </code>
                                            </pre>
                <h3>Convert from Python to JSON</h3>
                <pre class="language-python">
                                            <code>
                                                import json

# a Python object (dict):
x = {
  "name": "John",
  "age": 30,
  "city": "New York"
}

# convert into JSON:
y = json.dumps(x)

# the result is a JSON string:
print(y)    
                                            </code>
                                            </pre>
            </li>
          
            <li>Python RegEx<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom54" aria-controls="offcanvasBottom">Read
                    more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom54" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Python RegEx</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        A RegEx, or Regular Expression, is a sequence of characters that forms a search pattern.
                        <br><br> RegEx can be used to check if a string contains the specified search pattern.
                        <br><br> RegEx Module Python has a built-in package called re, which can be used to work with Regular Expressions.
                        <br><br> Import the re module
                        <br><br> RegEx Functions
                        <table class="ws-table-all notranslate table-bordered">
                            <tbody>
                                <tr>
                                    <th style="width:120px">Function</th>
                                    <th>Description</th>
                                </tr>
                                <tr>
                                    <td><a href="#findall">findall</a></td>
                                    <td>Returns a list containing all matches</td>
                                </tr>
                                <tr>
                                    <td><a href="#search">search</a></td>
                                    <td>Returns a <a href="#matchobject">Match object</a> if there is a match anywhere in the string</td>
                                </tr>
                                <tr>
                                    <td><a href="#split">split</a></td>
                                    <td>Returns a list where the string has been split at each match </td>
                                </tr>
                                <tr>
                                    <td><a href="#sub">sub</a></td>
                                    <td>Replaces one or many matches with a string</td>
                                </tr>
                            </tbody>
                        </table>
                        <br> Metacharacters
                        <table class="ws-table-all notranslate table-bordered">
                            <tbody>
                                <tr>
                                    <th style="width:120px">Character</th>
                                    <th>Description</th>
                                    <th style="width:150px">Example</th>
                                </tr>
                                <tr>
                                    <td>[]</td>
                                    <td>A set of characters</td>
                                    <td>"[a-m]"</td>
                                </tr>
                                <tr>
                                    <td>\</td>
                                    <td>Signals a special sequence (can also be used to escape special characters)</td>
                                    <td>"\d"</td>
                                </tr>
                                <tr>
                                    <td>.</td>
                                    <td>Any character (except newline character)</td>
                                    <td>"he..o"</td>
                                </tr>
                                <tr>
                                    <td>^</td>
                                    <td>Starts with</td>
                                    <td>"^hello"</td>
                                </tr>
                                <tr>
                                    <td>$</td>
                                    <td>Ends with</td>
                                    <td>"planet$"</td>
                                </tr>
                                <tr>
                                    <td>*</td>
                                    <td>Zero or more occurrences</td>
                                    <td>"he.*o"</td>
                                </tr>
                                <tr>
                                    <td>+</td>
                                    <td>One or more occurrences</td>
                                    <td>"he.+o"</td>
                                </tr>
                                <tr>
                                    <td>?</td>
                                    <td>Zero or one occurrences</td>
                                    <td>"he.?o"</td>
                                </tr>
                                <tr>
                                    <td>{}</td>
                                    <td>Exactly the specified number of occurrences</td>
                                    <td>"he.{2}o"</td>
                                </tr>
                                <tr>
                                    <td>|</td>
                                    <td>Either or</td>
                                    <td>"falls|stays"</td>
                                    ]
                                </tr>
                                <tr>
                                    <td>()</td>
                                    <td>Capture and group</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>
                            </tbody>
                        </table>
                        <br> Special Sequences
                        <table class="ws-table-all notranslate table-bordered">
                            <tbody>
                                <tr>
                                    <th style="width:120px">Character</th>
                                    <th>Description</th>
                                    <th style="width:150px">Example</th>
                                </tr>
                                <tr>
                                    <td>\A</td>
                                    <td>Returns a match if the specified characters are at the beginning of the string
                                    </td>
                                    <td>"\AThe"</td>
                                </tr>
                                <tr>
                                    <td>\b</td>
                                    <td>Returns a match where the specified characters are at the beginning or at the end of a word<br>(the "r" in the beginning is making sure that the string is being treated as a "raw string")</td>
                                    <td>r"\bain"<br>r"ain\b"</td>
                                </tr>
                                <tr>
                                    <td>\B</td>
                                    <td>Returns a match where the specified characters are present, but NOT at the beginning (or at the end) of a word<br>(the "r" in the beginning is making sure that the string is being treated as a "raw string")</td>
                                    <td>r"\Bain"<br>r"ain\B"</td>
                                </tr>
                                <tr>
                                    <td>\d</td>
                                    <td>Returns a match where the string contains digits (numbers from 0-9)</td>
                                    <td>"\d"</td>
                                </tr>
                                <tr>
                                    <td>\D</td>
                                    <td>Returns a match where the string DOES NOT contain digits</td>
                                    <td>"\D"</td>
                                </tr>
                                <tr>
                                    <td>\s</td>
                                    <td>Returns a match where the string contains a white space character</td>
                                    <td>"\s"</td>
                                </tr>
                                <tr>
                                    <td>\S</td>
                                    <td>Returns a match where the string DOES NOT contain a white space character</td>
                                    <td>"\S"</td>
                                </tr>
                                <tr>
                                    <td>\w</td>
                                    <td>Returns a match where the string contains any word characters (characters from a to Z, digits from 0-9, and the underscore _ character)</td>
                                    <td>"\w"</td>
                                </tr>
                                <tr>
                                    <td>\W</td>
                                    <td>Returns a match where the string DOES NOT contain any word characters</td>
                                    <td>"\W"</td>
                                </tr>
                                <tr>
                                    <td>\Z</td>
                                    <td>Returns a match if the specified characters are at the end of the string</td>
                                    <td>"Spain\Z"</td>
                                </tr>
                            </tbody>
                        </table>
                        <br> Sets
                        <table class="ws-table-all notranslate">
                            <tbody>
                                <tr>
                                    <th style="width:120px">Set</th>
                                    <th>Description</th>
                                </tr>
                                <tr>
                                    <td>[arn]</td>
                                    <td>Returns a match where one of the specified characters (<code class="w3-codespan">a</code>,
                                        <code class="w3-codespan">r</code>, or <code class="w3-codespan">n</code>) is present
                                    </td>
                                </tr>
                                <tr>
                                    <td>[a-n]</td>
                                    <td>Returns a match for any lower case character, alphabetically between
                                        <code class="w3-codespan">a</code> and <code class="w3-codespan">n</code>
                                    </td>
                                </tr>
                                <tr>
                                    <td>[^arn]</td>
                                    <td>Returns a match for any character EXCEPT <code class="w3-codespan">a</code>,
                                        <code class="w3-codespan">r</code>, and <code class="w3-codespan">n</code>
                                    </td>
                                </tr>
                                <tr>
                                    <td>[0123]</td>
                                    <td>Returns a match where any of the specified digits (<code class="w3-codespan">0</code>,
                                        <code class="w3-codespan">1</code>, <code class="w3-codespan">2</code>, or <code class="w3-codespan">
                                        3</code>) are present
                                    </td>
                                </tr>
                                <tr>
                                    <td>[0-9]</td>
                                    <td>Returns a match for any digit between
                                        <code class="w3-codespan">0</code> and <code class="w3-codespan">9</code>
                                    </td>
                                </tr>
                                <tr>
                                    <td>[0-5][0-9]</td>
                                    <td>Returns a match for any two-digit numbers from <code class="w3-codespan">00</code> and <code class="w3-codespan">
                                        59</code></td>
                                </tr>
                                <tr>
                                    <td>[a-zA-Z]</td>
                                    <td>Returns a match for any character alphabetically between
                                        <code class="w3-codespan">a</code> and <code class="w3-codespan">z</code>, lower case OR upper case
                                    </td>
                                </tr>
                                <tr>
                                    <td>[+]</td>
                                    <td>In sets, <code class="w3-codespan">+</code>, <code class="w3-codespan">*</code>,
                                        <code class="w3-codespan">.</code>, <code class="w3-codespan">|</code>,
                                        <code class="w3-codespan">()</code>, <code class="w3-codespan">$</code>,<code class="w3-codespan">{}</code> has no special meaning, so <code class="w3-codespan">[+]</code> means: return a match for any
                                        <code class="w3-codespan">+</code> character in the string
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne35" aria-expanded="false" aria-controls="collapseOne">
                                Import the re module
                            </button>
                        </h2>
                        <div id="collapseOne35" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-python">
                                            <code>
                                                import re
                                            </code>
                                            </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo455" aria-expanded="false" aria-controls="collapseTwo">
                                Search the string to see if it starts with "The" and ends with "Spain"
                            </button>
                        </h2>
                        <div id="collapseTwo455" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-python">
                                            <code>
                                                import re

txt = "The rain in Spain"
x = re.search("^The.*Spain$", txt)
                                            </code>
                                            </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree425" aria-expanded="false" aria-controls="collapseThree">
                                The findall() Function
                            </button>
                        </h2>
                        <div id="collapseThree425" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <h3>The findall() function returns a list containing all matches.</h3>
                                <pre class="language-python">
                                            <code>
                                                import re

txt = "The rain in Spain"
x = re.findall("ai", txt)
print(x)
                                            </code>
                                            </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree45" aria-expanded="false" aria-controls="collapseThree">
                                The search() Function
                            </button>
                        </h2>
                        <div id="collapseThree45" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <h3>The search() function searches the string for a match, and returns a Match object if there is a match.
                                    <br> If there is more than one match, only the first occurrence of the match will be returned
                                </h3>
                                <pre class="language-python">
                                              <code>
                                                import re

txt = "The rain in Spain"
x = re.search("\s", txt)

print("The first white-space character is located in position:", x.start())
                                              </code>
                                              </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree47" aria-expanded="false" aria-controls="collapseThree">
                                The split() Function
                            </button>
                        </h2>
                        <div id="collapseThree47" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <h3>The split() function returns a list where the string has been split at each match
                                </h3>
                                <pre class="language-python">
                                              <code>
                                                import re

                                                txt = "The rain in Spain"
                                                x = re.split("\s", txt)
                                                print(x)
                                              </code>
                                              </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree49" aria-expanded="false" aria-controls="collapseThree">
                                The sub() Function
                            </button>
                        </h2>
                        <div id="collapseThree49" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <h3>The sub() function replaces the matches with the text of your choice</h3>
                                <pre class="language-python">
                                              <code>
                                                import re

txt = "The rain in Spain"
x = re.sub("\s", "9", txt)
print(x)
                                              </code>
                                              </pre>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>Python Try Except<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom55" aria-controls="offcanvasBottom">Read
                    more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom55" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Python Try Except</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        The try block lets you test a block of code for errors.
                        <br><br> The except block lets you handle the error.
                        <br><br> The else block lets you execute code when there is no error.
                        <br><br> The finally block lets you execute code, regardless of the result of the try- and except blocks.
                        <br><br> Exception Handling When an error occurs, or exception as we call it, Python will normally stop and generate an error message.
                        <br><br> These exceptions can be handled using the try statement
                    </div>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne355" aria-expanded="false" aria-controls="collapseOne">
                                Python Try Except
                            </button>
                        </h2>
                        <div id="collapseOne355" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-python">
                                            <code>
                                                try:
                                                print(x)
                                              except:
                                                print("An exception occurred")
                                            </code>
                                            </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo4555" aria-expanded="false" aria-controls="collapseTwo">
                                Finally
                            </button>
                        </h2>
                        <div id="collapseTwo4555" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <h3>The finally block, if specified, will be executed regardless if the try block raises an error or not.</h3>
                                <pre class="language-python">
                                            <code>                                        
                                                try:
                                                print(x)
                                              except:
                                                print("Something went wrong")
                                              finally:
                                                print("The 'try except' is finished")
   
                                            </code>
                                            </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree4255" aria-expanded="false" aria-controls="collapseThree">
                                Raise an exception
                            </button>
                        </h2>
                        <div id="collapseThree4255" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <h3>As a Python developer you can choose to throw an exception if a condition occurs. To throw (or raise) an exception, use the raise keyword.</h3>
                                <pre class="language-python">
                                            <code>
                                                x = -1

                                                if x < 0:
                                                    raise Exception("Sorry, no numbers below zero"      
                                            </code>
                                            </pre>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>Python String Formatting<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom56" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom56" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Python String Formatting</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        To make sure a string will display as expected, we can format the result with the format() method.
                        <br><br> String format()<br> The format() method allows you to format selected parts of a string.
                        <br><br> Sometimes there are parts of a text that you do not control, maybe they come from a database, or user input?
                        <br><br> To control such values, add placeholders (curly brackets {}) in the text, and run the values through the format() method
                    </div>
                </div>
                <pre class="language-python">
                    <code>
                        price = 49
txt = "The price is {} dollars"
print(txt.format(price))
                    </code>
                    </pre>
            </li>
            <li>Python File handling<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom59" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom59" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Python File handling</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        File handling is an important part of any web application.
                        <br><br> Python has several functions for creating, reading, updating, and deleting files.
                        <br><br> File Handling<br><br> The key function for working with files in Python is the open() function.<br><br> The open() function takes two parameters; filename, and mode.<br><br> There are four different methods (modes) for
                        opening a file:<br><br> "r" - Read - Default value. Opens a file for reading, error if the file does not exist<br><br> "a" - Append - Opens a file for appending, creates the file if it does not exist<br><br> "w" - Write - Opens
                        a file for writing, creates the file if it does not exist<br><br> "x" - Create - Creates the specified file, returns an error if the file exists<br><br> In addition you can specify if the file should be handled as binary or text
                        mode
                        <br><br> "t" - Text - Default value. Text mode<br><br> "b" - Binary - Binary mode (e.g. images)<br><br> Create a New File To create a new file in Python, use the open() method, with one of the following parameters: "x" - Create
                        - will create a file, returns an error if the file exist "a" - Append - will create a file if the specified file does not exist "w" - Write - will create a file if the specified file does not exist Write to an Existing File To
                        write to an existing file, you must add a parameter to the open() function: "a" - Append - will append to the end of the file "w" - Write - will overwrite any existing content
                    </div>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne601" aria-expanded="false" aria-controls="collapseOne">
                                Python File Open
                            </button>
                        </h2>
                        <div id="collapseOne601" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-python">
                                <code>
                                    f = open("demofile.txt", "r")
                                </code>
                                </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo601" aria-expanded="false" aria-controls="collapseTwo">
                                read file
                            </button>
                        </h2>
                        <div id="collapseTwo601" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-python">
                                <code>
                                    f = open("demofile.txt", "r")
                                    print(f.read())
                                </code>
                                </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree602" aria-expanded="false" aria-controls="collapseThree">
                                Read Lines
                            </button>
                        </h2>
                        <div id="collapseThree602" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-python">
                                <code>
                                    f = open("demofile.txt", "r")
                                    print(f.readline())
                                </code>
                                </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree601" aria-expanded="false" aria-controls="collapseThree601">
                                Close Files
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-python">
                                  <code>
                                    f.close()
                                  </code>
                                  </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree601" aria-expanded="false" aria-controls="collapseThree601">
                                write file
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-python">
                                  <code>
                                    f.write("Woops! I have deleted the content!")
                                  </code>
                                  </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree605" aria-expanded="false" aria-controls="collapseThree601">
                                Create a new file if it does not exist
                            </button>
                        </h2>
                        <div id="collapseThree605" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-python">
                                  <code>
                                    f = open("myfile.txt", "w")
                                  </code>
                                  </pre>
                            </div>
                        </div>
                    </div>




                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree606" aria-expanded="false" aria-controls="collapseThree601">
                                Delete a File
                            </button>
                        </h2>
                        <div id="collapseThree606" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-python">
                                  <code>
                                    import os
                                    os.remove("demofile.txt")
                                  </code>
                                  </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree607" aria-expanded="false" aria-controls="collapseThree601">
                                Delete Folder
                            </button>
                        </h2>
                        <div id="collapseThree607" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <h3>Note: You can only remove empty folders.</h3>
                                <pre class="language-python">
                                  <code>
                                    import os
                                    os.rmdir("myfolder")
                                  </code>
                                  </pre>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ol>
        </div>
        </div>
        <?php require_once 'Footer.php'?>