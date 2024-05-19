<?php require_once 'Navbar.php'?>   <!-- mid part -->
    <nav class="mt-5 p-2 headline" style="background:linear-gradient(to top right, #fb5475 0%, #f77b50 59%);">
        <div class="text-center " style="margin-top:5vh;"><img style="margin-right:2vh;" src="../../assets/img/php-icon.svg" alt="" /> PHP cheatsheet
        </div>
    </nav>
    <div class="container">
        <div class="p-5 mb-4 bg-light rounded-3 jumbo mt-2">
            <div class="container-fluid py-3">
                <h1 class="display-5 fw-bold">PHP</h1>
                <div class="row">
                    <div class="col-md-8">
                        <p class="fs-4">
                            What is PHP?
                            <ul>
                                <li>
                                    PHP is an acronym for "PHP: Hypertext Preprocessor" </li>
                                <li>
                                    PHP is a widely-used, open source scripting language </li>
                                <li>
                                    PHP scripts are executed on the server </li>
                                <li>
                                    PHP is free to download and use </li>
                                <li>
                                    It is also easy enough to be a beginner's first server side language</li>
                            </ul>
                        </p>
                    </div>
                    <div class="col-md-4">
                        <img src="../../assets/img/php-icon.svg" alt="" style="width:100%;" />
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
                    <div class="offcanvas-body"> What is a PHP File? <br>
                        <ul>
                            <li>
                                PHP files can contain text, HTML, CSS, JavaScript, and PHP code</li>
                            <li>
                                PHP code is executed on the server, and the result is returned to the browser as plain HTML
                            </li>
                            <li>
                                PHP files have extension ".php" </li>
                            <li>
                                PHP can generate dynamic page content </li>
                            <li>
                                PHP can create, open, read, write, delete, and close files on the server </li>
                            <li>
                                PHP can collect form data</li>
                            <li>
                                PHP can send and receive cookies </li>
                            <li>
                                PHP can add, delete, modify data in your database </li>
                            <li>
                                PHP can be used to control user-access </li>
                            <li>
                                PHP can encrypt data</li>
                            <li>
                                With PHP you are not limited to output HTML. You can output images, PDF files, and even Flash movies. You can also output any text, such as XHTML and XML.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <ol>
            <!-- offcanvas -->
            <li>
                Basic PHP Syntax<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom2" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom2" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Basic PHP Syntax</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        A PHP script can be placed anywhere in the document.
                        <br><br> A PHP script starts with
                        <?php and ends with ?>:
                        <br><br> The default file extension for PHP files is ".php".
                        <br> A PHP file normally contains HTML tags, and some PHP scripting code.
                        <br><br> Note: PHP statements end with a semicolon (;).
                    </div>
                </div>
                <pre class="language-php">
                    <code> &lt;?php
                        // PHP code goes here 
                        ?&gt;
                        </code>
</pre>
            </li>
            <li>Comments in PHP<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom2" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom1" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Comments in PHP</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        A comment in PHP code is a line that is not executed as a part of the program. Its only purpose is to be read by someone who is looking at the code.
                        <br><br> Comments can be used to:
                        <br> Let others understand your code <br> Remind yourself of what you did - Most programmers have experienced coming back to their own work a year or two later and having to re-figure out what they did. Comments can remind you
                        of what you were thinking when you wrote the code <br>
                    </div>
                </div>
                <pre class="language-php">
                                    <code> // This is a single-line comment
                                        # This is also a single-line comment
                                        </code>
        </pre>
            </li>
            <li>
                PHP Variables<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom3" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom3" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel"> PHP Variables</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        Variables are "containers" for storing information.
                        <br><br><br> A variable can have a short name (like x and y) or a more descriptive name (age, carname, total_volume).
                        <br><br> Rules for PHP variables:
                        <br> A variable starts with the $ sign, followed by the name of the variable <br> A variable name must start with a letter or the underscore character <br> A variable name cannot start with a number <br> A variable name can only
                        contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
                        <br><br> Variable names are case-sensitive ($age and $AGE are two different variables) <br>
                    </div>
                </div>
                <pre class="language-php">
            <code>     
                &lt;?php
$txt = "Hello world!";
$x = 5;
$y = 10.5;
?&gt;
            </code>
        </pre>
            </li>
            <li>PHP Variables Scope<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom4" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom4" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">PHP Variables Scope</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        In PHP, variables can be declared anywhere in the script.
                        <br> The scope of a variable is the part of the script where the variable can be referenced/used.
                        <br><br> PHP has three different variable scopes:
                        <br>
                        <ul>
                            <li>local</li>
                            <li>global</li>
                            <li>static</li>
                        </ul>
                        <br><br> Global and Local Scope <br> A variable declared outside a function has a GLOBAL SCOPE and can only be accessed outside a function <br><br> You can have local variables with the same name in different functions, because
                        local variables are only recognized by the function in which they are declared.
                        <br><br> PHP The global Keyword <br> The global keyword is used to access a global variable from within a function.
                        <br>
                        <br> The static Keyword <br> Normally, when a function is completed/executed, all of its variables are deleted. However, sometimes we want a local variable NOT to be deleted. We need it for a further job.
                    </div>
                </div>
                <ol type="i">
                    <li> global Keyword
                        <pre class="language-php">
            <code>
                    global $x, $y;
        </code>
        </pre></li>
                    <li>static Keyword
                        <pre class="language-php">
    <code>
        static $x = 0;
</code>
</pre>
                    </li>
                </ol>


            </li>
            <li>echo and print Statements<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom5" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom5" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">echo and print Statements</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        echo and print are more or less the same. They are both used to output data to the screen.
                        <br><br> The differences are small: echo has no return value while print has a return value of 1 so it can be used in expressions. echo can take multiple parameters (although such usage is rare) while print can take one argument.
                        echo is marginally faster than print. <br><br> The echo statement can be used with or without parentheses: echo or echo().
                        <br><br> The print statement can be used with or without parentheses: print or print()
                    </div>
                </div>
                <ol type="i">
                    <li>echo Statement
                        <pre class="language-php">
            <code>
                echo "&lt;h2&gt;PHP is Fun!&lt;/h2&gt;";
        </code>
        </pre></li>
                    <li>print Statement
                        <pre class="language-php">
            <code>
                print "I'm about to learn PHP!";
        </code>
        </pre></li>
                </ol>


            </li>
            <li>
                PHP Data Types<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas2" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvas2" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">PHP Data Types</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        Variables can store data of different types, and different data types can do different things.
                        <br><br> PHP supports the following data types:
                        <br>
                        <ul>
                            <li>
                                String: <br> A string is a sequence of characters, like "Hello world!".A string can be any text inside quotes. You can use single or double quote</li>
                            <li>
                                Integer: <br> An integer data type is a non-decimal number between -2,147,483,648 and 2,147,483,647.
                                <br><br> Rules for integers:
                                <br> An integer must have at least one digit <br> An integer must not have a decimal point <br> An integer can be either positive or negative <br> Integers can be specified in: decimal (base 10), hexadecimal (base 16),
                                octal (base 8), or binary (base 2) notation
                            </li>
                            <li>
                                Float (floating point numbers - also called double): <br> A float (floating point number) is a number with a decimal point or a number in exponential form.</li>
                            <li>
                                Boolean:A Boolean represents two possible states: TRUE or FALSE.</li>
                            <li>
                                Array:An array stores multiple values in one single variable.</li>
                            <li>
                                Object:Classes and objects are the two main aspects of object-oriented programming.
                                <br><br> A class is a template for objects, and an object is an instance of a class.
                                <br><br> When the individual objects are created, they inherit all the properties and behaviors from the class, but each object will have different values for the properties.
                            </li>
                            <li>
                                NULL:Null is a special data type which can have only one value: NULL.
                                <br> A variable of data type NULL is a variable that has no value assigned to it.
                                <br> Tip: If a variable is created without a value, it is automatically assigned a value of NULL.
                            </li>
                            <li>
                                Resource:The special resource type is not an actual data type. It is the storing of a reference to functions and resources external to PHP.
                                <br> A common example of using the resource data type is a database call.
                            </li>
                        </ul>
                    </div>
                </div>
                <ol type="i">
                    <li>
                        <p>PHP String</p>
                        <pre class="language-php">
            <code>
                $x = "Hello world!";
        </code>
        </pre></li>
                    <li>
                        <p>PHP Integer</p>
                        <pre class="language-php">
            <code>
                $x = 5985;
        </code>
        </pre></li>
                    <li>

                        <p>PHP Boolean</p>
                        <pre class="language-php">
            <code>
                $x = true;
        </code>
        </pre></li>
                    <li>
                        <p>PHP Array</p>
                        <pre class="language-php">
            <code>
                $cars = array("Volvo","BMW","Toyota");
        </code>
        </pre></li>
                    <li>
                        <p>PHP Object</p>
                        <pre class="language-php">
            <code>
                class Car {
                    public $color;
                    public $model;
                    public function __construct($color, $model) {
                      $this->color = $color;
                      $this->model = $model;
                    }
                    $myCar = new Car("black", "Volvo");
        </code>
        </pre></li>
                    <li>
                        <p>PHP NULL Value</p>
                        <pre class="language-php">
            <code>
                $x = null;
        </code>
        </pre></li>
                </ol>






            </li>
            <li>
                PHP String Functions<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom7" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom7" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">PHP String Functions</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        A string is a sequence of characters, like "Hello world!".
                    </div>
                </div>
                <ol type="i">
                    <li>
                        <p>strlen() - Return the Length of a String</p>
                        <pre class="language-php">
    <code>
        echo strlen("Hello world!"); // outputs 12
</code>
</pre>
                    </li>
                    <li>
                        <p>str_word_count() - Count Words in a String</p>
                        <pre class="language-php">
    <code>
        echo str_word_count("Hello world!"); // outputs 2
</code>
</pre>
                    </li>
                    <li>
                        <p>strrev() - Reverse a String</p>
                        <pre class="language-php">
    <code>
        echo strrev("Hello world!"); // outputs !dlrow olleH
</code>
</pre>
                    </li>
                    <li>
                        <p>strpos() - Search For a Text Within a String</p>
                        <pre class="language-php">
    <code>
        echo strpos("Hello world!", "world"); // outputs 6 otherwise FALSE
</code>
</pre>
                    </li>
                    <li>
                        <p>str_replace() - Replace Text Within a String</p>
                        <pre class="language-php">
    <code>
        echo str_replace("world", "Dolly", "Hello world!"); // outputs Hello Dolly!
</code>
</pre>
                    </li>
                </ol>
            </li>
            <li>
                PHP Math<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom8" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom8" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">PHP Math</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        PHP has a set of math functions that allows you to perform mathematical tasks on numbers.
                    </div>
                </div>
                <ol type="i">
                    <li>pi() Function
                        <pre class="language-php">
                    <code>
                        echo(pi()); // returns 3.1415926535898
                </code>
                </pre>
                    </li>
                    <li>min() and max() Functions
                        <pre class="language-php">
                <code>
                    echo(min(0, 150, 30, 20, -8, -200));  // returns -200
            echo(max(0, 150, 30, 20, -8, -200));  // returns 150
            </code>
            </pre>
                    </li>
                    <li>abs() Function
                        <pre class="language-php">
                <code>
                    echo(abs(-6.7));  // returns 6.7
            </code>
            </pre>
                    </li>
                    <li>sqrt() Function
                        <pre class="language-php">
                <code>
                    echo(sqrt(64));  // returns 8
            </code>
            </pre>
                    </li>
                    <li>round() Function
                        <pre class="language-php">
                <code>
                    echo(round(0.60));  // returns 1
            </code>
            </pre>
                    </li>
                    <li>Random Numbers
                        <pre class="language-php">
                <code>
                    echo(rand());
            </code>
            </pre>
                    </li>
                </ol>
            </li>
            <li>
                PHP Constants<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom9" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom9" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">PHP Constants</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        A constant is an identifier (name) for a simple value. The value cannot be changed during the script.
                        <br><br> A valid constant name starts with a letter or underscore (no $ sign before the constant name).
                        <br> Parameters: name: Specifies the name of the constant value: Specifies the value of the constant case-insensitive: Specifies whether the constant name should be case-insensitive. Default is false.
                    </div>
                </div>
                <p>Syntax</p>
                <pre class="language-php">
    <code>
        define(name, value, case-insensitive)
</code>
</pre>
                <p>Example</p>
                <pre class="language-php">
    <code>
        define("GREETING", "Welcome to W3Schools.com!", true);
echo greeting;
</code>
</pre>
            </li>
            <li>
                PHP Operators<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom10" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom10" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">PHP Operators</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        Operators are used to perform operations on variables and values.
                        <br><br> PHP divides the operators in the following groups:
                        <br>
                        <ul>
                            <li>Arithmetic operators</li>
                            <li>Assignment operators</li>
                            <li>Comparison operators</li>
                            <li>Increment/Decrement operators</li>
                            <li>Logical operators</li>
                            <li>String operators</li>
                            <li>Array operators</li>
                            <li>Conditional assignment operators</li>
                        </ul>
                    </div>
                </div>
                <br>
                <ol type="i">
                    <li>Arithmetic operators<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas10" aria-controls="offcanvasBottom">Read more...</button>
                        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvas10" aria-labelledby="offcanvasBottomLabel">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasBottomLabel">PHP Operators</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body small">
                                <table class="ws-table-all notranslate table-bordered">
                                    <tbody>
                                        <tr>
                                            <th style="width:15%">Operator</th>
                                            <th style="width:20%">Name</th>
                                            <th style="width:20%">Example</th>
                                            <th style="width:45%">Result</th>
                                        </tr>
                                        <tr>
                                            <td>+</td>
                                            <td>Addition</td>
                                            <td>$x + $y</td>
                                            <td>Sum of $x and $y</td>
                                        </tr>
                                        <tr>
                                            <td>-</td>
                                            <td>Subtraction</td>
                                            <td>$x - $y</td>
                                            <td>Difference of $x and $y</td>
                                        </tr>
                                        <tr>
                                            <td>*</td>
                                            <td>Multiplication</td>
                                            <td>$x * $y</td>
                                            <td>Product of $x and $y</td>
                                        </tr>
                                        <tr>
                                            <td>/</td>
                                            <td>Division</td>
                                            <td>$x / $y</td>
                                            <td>Quotient of $x and $y</td>
                                        </tr>
                                        <tr>
                                            <td>%</td>
                                            <td>Modulus</td>
                                            <td>$x % $y</td>
                                            <td>Remainder of $x divided by $y</td>
                                        </tr>
                                        <tr>
                                            <td>**</td>
                                            <td>Exponentiation</td>
                                            <td>$x ** $y</td>
                                            <td>Result of raising $x to the $y'th power</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </li>
                    <li>Assignment operators<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas11" aria-controls="offcanvasBottom">Read more...</button>
                        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvas11" aria-labelledby="offcanvasBottomLabel">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasBottomLabel">Assignment operators</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body small">
                                <table class="ws-table-all notranslate table-bordered">
                                    <tbody>
                                        <tr>
                                            <th style="width:15%">Assignment</th>
                                            <th style="width:20%">Same as... </th>
                                            <th style="width:65%">Description</th>
                                        </tr>
                                        <tr>
                                            <td>x = y</td>
                                            <td>x = y</td>
                                            <td>The left operand gets set to the value of the expression on the right
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>x += y</td>
                                            <td>x = x + y</td>
                                            <td>Addition</td>
                                        </tr>
                                        <tr>
                                            <td>x -= y</td>
                                            <td>x = x - y</td>
                                            <td>Subtraction</td>
                                        </tr>
                                        <tr>
                                            <td>x *= y</td>
                                            <td>x = x * y</td>
                                            <td>Multiplication</td>
                                        </tr>
                                        <tr>
                                            <td>x /= y</td>
                                            <td>x = x / y</td>
                                            <td>Division</td>
                                        </tr>
                                        <tr>
                                            <td>x %= y</td>
                                            <td>x = x % y</td>
                                            <td>Modulus</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </li>
                    <li>Comparison operators<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas12" aria-controls="offcanvasBottom">Read more...</button>
                        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvas12" aria-labelledby="offcanvasBottomLabel">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasBottomLabel">Comparison operators</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body small">
                                <table class="ws-table-all notranslate table-bordered">
                                    <tbody>
                                        <tr>
                                            <th style="width:15%">Operator</th>
                                            <th style="width:22%">Name</th>
                                            <th style="width:15%">Example</th>
                                            <th style="width:48%">Result</th>
                                        </tr>
                                        <tr>
                                            <td>==</td>
                                            <td>Equal</td>
                                            <td>$x == $y</td>
                                            <td>Returns true if $x is equal to $y</td>
                                        </tr>
                                        <tr>
                                            <td>===</td>
                                            <td>Identical</td>
                                            <td>$x === $y</td>
                                            <td>Returns true if $x is equal to $y, and they are of the same type</td>
                                        </tr>
                                        <tr>
                                            <td>!=</td>
                                            <td>Not equal</td>
                                            <td>$x != $y</td>
                                            <td>Returns true if $x is not equal to $y</td>
                                        </tr>
                                        <tr>
                                            <td>&lt;&gt;</td>
                                            <td>Not equal</td>
                                            <td>$x &lt;&gt; $y</td>
                                            <td>Returns true if $x is not equal to $y</td>
                                        </tr>
                                        <tr>
                                            <td>!==</td>
                                            <td>Not identical</td>
                                            <td>$x !== $y</td>
                                            <td>Returns true if $x is not equal to $y, or they are not of the same type
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>&gt;</td>
                                            <td>Greater than</td>
                                            <td>$x &gt; $y</td>
                                            <td>Returns true if $x is greater than $y</td>
                                        </tr>
                                        <tr>
                                            <td>&lt;</td>
                                            <td>Less than</td>
                                            <td>$x &lt; $y</td>
                                            <td>Returns true if $x is less than $y</td>
                                        </tr>
                                        <tr>
                                            <td>&gt;=</td>
                                            <td>Greater than or equal to</td>
                                            <td>$x &gt;= $y</td>
                                            <td>Returns true if $x is greater than or equal to $y</td>
                                        </tr>
                                        <tr>
                                            <td>&lt;=</td>
                                            <td>Less than or equal to</td>
                                            <td>$x &lt;= $y</td>
                                            <td>Returns true if $x is less than or equal to $y</td>
                                        </tr>
                                        <tr>
                                            <td>&lt;=&gt;</td>
                                            <td>Spaceship</td>
                                            <td>$x &lt;=&gt; $y</td>
                                            <td>Returns an integer less than, equal to, or greater than zero, depending on if $x is less than, equal to, or greater than $y. Introduced in PHP 7.
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </li>
                    <li>Increment/Decrement operators<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas13" aria-controls="offcanvasBottom">Read more...</button>
                        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvas13" aria-labelledby="offcanvasBottomLabel">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasBottomLabel">Increment/Decrement operators</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body small">
                                <table class="ws-table-all notranslate table-bordered" id="table1">
                                    <tbody>
                                        <tr>
                                            <th style="width:15%">Operator</th>
                                            <th style="width:20%">Name </th>
                                            <th style="width:65%">Description</th>
                                        </tr>
                                        <tr>
                                            <td>++$x</td>
                                            <td>Pre-increment</td>
                                            <td>Increments $x by one, then returns $x</td>
                                        </tr>
                                        <tr>
                                            <td>$x++</td>
                                            <td>Post-increment</td>
                                            <td>Returns $x, then increments $x by one</td>
                                        </tr>
                                        <tr>
                                            <td>--$x</td>
                                            <td>Pre-decrement</td>
                                            <td>Decrements $x by one, then returns $x</td>
                                        </tr>
                                        <tr>
                                            <td>$x--</td>
                                            <td>Post-decrement</td>
                                            <td>Returns $x, then decrements $x by one</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </li>
                    <li>Logical operators<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas14" aria-controls="offcanvasBottom">Read more...</button>
                        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvas14" aria-labelledby="offcanvasBottomLabel">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasBottomLabel">Logical operators</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body small">
                                <table class="ws-table-all notranslate table-bordered">
                                    <tbody>
                                        <tr>
                                            <th style="width:15%">Operator</th>
                                            <th style="width:20%">Name</th>
                                            <th style="width:20%">Example</th>
                                            <th style="width:45%">Result</th>
                                        </tr>
                                        <tr>
                                            <td>and</td>
                                            <td>And</td>
                                            <td>$x and $y</td>
                                            <td>True if both $x and $y are true</td>
                                        </tr>
                                        <tr>
                                            <td>or</td>
                                            <td>Or</td>
                                            <td>$x or $y</td>
                                            <td>True if either $x or $y is true</td>
                                        </tr>
                                        <tr>
                                            <td>xor</td>
                                            <td>Xor</td>
                                            <td>$x xor $y</td>
                                            <td>True if either $x or $y is true, but not both</td>
                                        </tr>
                                        <tr>
                                            <td>&amp;&amp;</td>
                                            <td>And</td>
                                            <td>$x &amp;&amp; $y</td>
                                            <td>True if both $x and $y are true</td>
                                        </tr>
                                        <tr>
                                            <td>||</td>
                                            <td>Or</td>
                                            <td>$x || $y</td>
                                            <td>True if either $x or $y is true</td>
                                        </tr>
                                        <tr>
                                            <td>!</td>
                                            <td>Not</td>
                                            <td>!$x</td>
                                            <td>True if $x is not true</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </li>
                    <li>String operators<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas15" aria-controls="offcanvasBottom">Read more...</button>
                        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvas15" aria-labelledby="offcanvasBottomLabel">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasBottomLabel">String operators</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body small">
                                <table class="ws-table-all notranslate table-bordered">
                                    <tbody>
                                        <tr>
                                            <th style="width:15%">Operator</th>
                                            <th style="width:25%">Name</th>
                                            <th style="width:25%">Example</th>
                                            <th style="width:25%">Result</th>
                                        </tr>
                                        <tr>
                                            <td>.</td>
                                            <td>Concatenation</td>
                                            <td>$txt1 . $txt2</td>
                                            <td>Concatenation of $txt1 and $txt2</td>
                                        </tr>
                                        <tr>
                                            <td>.=</td>
                                            <td>Concatenation assignment</td>
                                            <td>$txt1 .= $txt2</td>
                                            <td>Appends $txt2 to $txt1</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </li>
                    <li>Array operators<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas16" aria-controls="offcanvasBottom">Read more...</button>
                        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvas16" aria-labelledby="offcanvasBottomLabel">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasBottomLabel">Array operators</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body small">
                                <table class="ws-table-all notranslate table-bordered" id="table2">
                                    <tbody>
                                        <tr>
                                            <th style="width:15%">Operator</th>
                                            <th style="width:18%">Name</th>
                                            <th style="width:17%">Example</th>
                                            <th style="width:50%">Result</th>
                                        </tr>
                                        <tr>
                                            <td>+</td>
                                            <td>Union</td>
                                            <td>$x + $y</td>
                                            <td>Union of $x and $y</td>
                                        </tr>
                                        <tr>
                                            <td>==</td>
                                            <td>Equality</td>
                                            <td>$x == $y</td>
                                            <td>Returns true if $x and $y have the same key/value pairs</td>
                                        </tr>
                                        <tr>
                                            <td>===</td>
                                            <td>Identity</td>
                                            <td>$x === $y</td>
                                            <td>Returns true if $x and $y have the same key/value pairs in the same order and of the same types</td>
                                        </tr>
                                        <tr>
                                            <td>!=</td>
                                            <td>Inequality</td>
                                            <td>$x != $y</td>
                                            <td>Returns true if $x is not equal to $y</td>
                                        </tr>
                                        <tr>
                                            <td>&lt;&gt;</td>
                                            <td>Inequality</td>
                                            <td>$x &lt;&gt; $y</td>
                                            <td>Returns true if $x is not equal to $y</td>
                                        </tr>
                                        <tr>
                                            <td>!==</td>
                                            <td>Non-identity</td>
                                            <td>$x !== $y</td>
                                            <td>Returns true if $x is not identical to $y</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </li>
                    <li>Conditional assignment operators<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas17" aria-controls="offcanvasBottom">Read more...</button>
                        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvas17" aria-labelledby="offcanvasBottomLabel">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasBottomLabel">Conditional assignment operators
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body small">
                                <table class="ws-table-all notranslate table-bordered">
                                    <tbody>
                                        <tr>
                                            <th style="width:15%">Operator</th>
                                            <th style="width:22%">Name</th>
                                            <th style="width:15%">Example</th>
                                            <th style="width:48%">Result</th>
                                        </tr>
                                        <tr>
                                            <td>?:</td>
                                            <td>Ternary</td>
                                            <td>$x = <em>expr1</em> ? <em>expr2</em> : <em>expr3</em></td>
                                            <td>Returns the value of $x.<br>The value of $x is <em>expr2</em> if
                                                <em>expr1</em> = TRUE.<br>The value of $x is <em>expr3</em> if <em>expr1</em> = FALSE
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>??</td>
                                            <td>Null coalescing</td>
                                            <td>$x = <em>expr1</em> ?? <em>expr2</em></td>
                                            <td>Returns the value of $x.<br>The value of $x is <em>expr1</em> if
                                                <em>expr1</em> exists, and is not NULL.<br>If <em>expr1</em> does not exist, or is NULL, the value of $x is
                                                <em>expr2</em>.<br>Introduced in PHP 7
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </li>
                </ol>
            </li>
            <li>
                PHP Conditional Statements<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom11" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom11" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">DELETE Statement</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        In PHP we have the following conditional statements:
                        <br>
                        <ul>
                            <li>if statement - executes some code if one condition is true</li>
                            <li>if...else statement - executes some code if a condition is true and another code if that condition is false</li>
                            <li>if...elseif...else statement - executes different codes for more than two conditions
                            </li>
                            <li>switch statement - selects one of many blocks of code to be executed</li>
                        </ul>
                    </div>
                </div>
                <ol type="i">
                    <li>The if Statement
                        <pre class="language-php">
                            <code>
                                if (condition) {
                                    code to be executed if condition is true;
                                  }
                        </code>
                        </pre>
                    </li>
                    <li>The if...else Statement
                        <pre class="language-php">
                        <code>
                            if (condition) {
                                code to be executed if condition is true;
                              } else {
                                code to be executed if condition is false;
                              }
                    </code>
                    </pre>
                    </li>
                    <li>The if...elseif...else Statement
                        <pre class="language-php">
                        <code>
                            if (condition) {
                                code to be executed if this condition is true;
                              } elseif (condition) {
                                code to be executed if first condition is false and this condition is true;
                              } else {
                                code to be executed if all conditions are false;
                              }
                    </code>
                    </pre>
                    </li>
                    <li>switch Statement
                        <pre class="language-php">
                        <code>
                            switch (n) {
                                case label1:
                                  code to be executed if n=label1;
                                  break;
                                case label2:
                                  code to be executed if n=label2;
                                  break;
                                case label3:
                                  code to be executed if n=label3;
                                  break;
                                  ...
                                default:
                                  code to be executed if n is different from all labels;
                              }
                    </code>
                    </pre>
                    </li>
                </ol>
            </li>
            <li>
                PHP Loops<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom12" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom12" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">PHP Loops</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        Often when you write code, you want the same block of code to run over and over again a certain number of times. So, instead of adding several almost equal code-lines in a script, we can use loops. <br> Loops are used to execute
                        the same block of code again and again, as long as a certain condition is true.
                        <br> In PHP, we have the following loop types:
                        <br>
                        <ul>
                            <li>while - loops through a block of code as long as the specified condition is true</li>
                            <li>do...while - loops through a block of code once, and then repeats the loop as long as the specified condition is true</li>
                            <li>for - loops through a block of code a specified number of times <br><br> Parameters:
                                <br> init counter: Initialize the loop counter value<br><br> test counter: Evaluated for each loop iteration. If it evaluates to TRUE, the loop continues. If it evaluates to FALSE, the loop ends.<br><br> increment counter:
                                Increases the loop counter value<br> </li>
                            <li>foreach - loops through a block of code for each element in an array</li>
                            <li>Break- It was used to "jump out" of a switch statement.The break statement can also be used to jump out of a loop.</li>
                            <li>Continue - The continue statement breaks one iteration (in the loop), if a specified condition occurs, and continues with the next iteration in the loop.</li>
                        </ul>
                    </div>
                </div>
                <ol type="i">
                    <li>while Loop
                        <pre class="language-php">
                        <code>
                            while (condition is true) {
                                code to be executed;
                              }
                    </code>
                    </pre>
                    </li>
                    <li>do...while Loop
                        <pre class="language-php">
                        <code>
                            do {
                                code to be executed;
                              } while (condition is true);
                    </code>
                    </pre>
                    </li>
                    <li>for Loop
                        <pre class="language-php">
                        <code>
                            for (init counter; test counter; increment counter) {
                                code to be executed for each iteration;
                              }
                    </code>
                    </pre>
                    </li>
                    <li>foreach Loop
                        <pre class="language-php">
                        <code>
                            foreach ($array as $value) {
                                code to be executed;
                              }
                    </code>
                    </pre>
                    </li>
                    <li>Break
                        <pre class="language-php">
                        <code>
                            for ($x = 0; $x < 10; $x++) {
                                if ($x == 4) {
                                  break;
                                }
                                echo "The number is: $x <br>";
                              }
                    </code>
                    </pre>
                    </li>
                    <li>Continue
                        <pre class="language-php">
                        <code>
                            for ($x = 0; $x < 10; $x++) {
                                if ($x == 4) {
                                  continue;
                                }
                                echo "The number is: $x <br>";
                              }
                    </code>
                    </pre>
                    </li>
                </ol>
            </li>
            <li>
                User Defined Function<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom13" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom13" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">User Defined Function</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        Besides the built-in PHP functions, it is possible to create your own functions.
                        <br><br> A function is a block of statements that can be used repeatedly in a program.<br> A function will not execute automatically when a page loads.<br> A function will be executed by a call to the function.<br>
                    </div>
                </div> <pre class="language-php">
    <code>
        function functionName() {
            code to be executed;
          }
</code>
</pre>
            </li>
            <li>
                PHP Arrays<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom14" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom14" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">PHP Arrays</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        An array is a special variable, which can hold more than one value at a time.An array can hold many values under a single name, and you can access the values by referring to an index number.
                        <br><br> In PHP, there are three types of arrays:
                        <br> Indexed arrays - Arrays with a numeric index <br> Associative arrays - Arrays with named keys <br> Multidimensional arrays - Arrays containing one or more arrays <br>
                        <br><br><br> PHP - Sort Functions For Arrays <br> The elements in an array can be sorted in alphabetical or numerical order, descending or ascending. <br> <br> sort() - sort arrays in ascending order <br> rsort() - sort arrays
                        in descending order <br> asort() - sort associative arrays in ascending order, according to the value <br> ksort() - sort associative arrays in ascending order, according to the key <br> arsort() - sort associative arrays in descending
                        order, according to the value <br> krsort() - sort associative arrays in descending order, according to the key <br><br>
                        <table class="ws-table-all notranslate table-bordered">
                            <tbody>
                                <tr>
                                    <th style="width:25%">Function</th>
                                    <th style="width:75%">Description</th>
                                </tr>
                                <tr>
                                    <td><a href="func_array.asp">array()</a></td>
                                    <td>Creates an array</td>
                                </tr>
                                <tr>
                                    <td><a href="func_array_change_key_case.asp">array_change_key_case()</a></td>
                                    <td>Changes all keys in an array to lowercase or uppercase</td>
                                </tr>
                                <tr>
                                    <td><a href="func_array_chunk.asp">array_chunk()</a></td>
                                    <td>Splits an array into chunks of arrays</td>
                                </tr>
                                <tr>
                                    <td><a href="func_array_column.asp">array_column()</a></td>
                                    <td>Returns the values from a single column in the input array</td>
                                </tr>
                                <tr>
                                    <td><a href="func_array_combine.asp">array_combine()</a></td>
                                    <td>Creates an array by using the elements from one "keys" array and one "values" array
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="func_array_count_values.asp">array_count_values()</a></td>
                                    <td>Counts all the values of an array</td>
                                </tr>
                                <tr>
                                    <td><a href="func_array_diff.asp">array_diff()</a></td>
                                    <td>Compare arrays, and returns the differences (compare values only)</td>
                                </tr>
                                <tr>
                                    <td><a href="func_array_diff_assoc.asp">array_diff_assoc()</a></td>
                                    <td>Compare arrays, and returns the differences (compare keys and values)</td>
                                </tr>
                                <tr>
                                    <td><a href="func_array_diff_key.asp">array_diff_key()</a></td>
                                    <td>Compare arrays, and returns the differences (compare keys only)</td>
                                </tr>
                                <tr>
                                    <td><a href="func_array_diff_uassoc.asp">array_diff_uassoc()</a></td>
                                    <td>Compare arrays, and returns the differences (compare keys and values, using a user-defined key comparison function)</td>
                                </tr>
                                <tr>
                                    <td><a href="func_array_diff_ukey.asp">array_diff_ukey()</a></td>
                                    <td>Compare arrays, and returns the differences (compare keys only, using a user-defined key comparison function)</td>
                                </tr>
                                <tr>
                                    <td><a href="func_array_fill.asp">array_fill()</a></td>
                                    <td>Fills an array with values</td>
                                </tr>
                                <tr>
                                    <td><a href="func_array_fill_keys.asp">array_fill_keys()</a></td>
                                    <td>Fills an array with values, specifying keys</td>
                                </tr>
                                <tr>
                                    <td><a href="func_array_filter.asp">array_filter()</a></td>
                                    <td>Filters the values of an array using a callback function</td>
                                </tr>
                                <tr>
                                    <td><a href="func_array_flip.asp">array_flip()</a></td>
                                    <td>Flips/Exchanges all keys with their associated values in an array</td>
                                </tr>
                                <tr>
                                    <td><a href="func_array_intersect.asp">array_intersect()</a></td>
                                    <td>Compare arrays, and returns the matches (compare values only)</td>
                                </tr>
                                <tr>
                                    <td><a href="func_array_intersect_assoc.asp">array_intersect_assoc()</a></td>
                                    <td>Compare arrays and returns the matches (compare keys and values)</td>
                                </tr>
                                <tr>
                                    <td><a href="func_array_intersect_key.asp">array_intersect_key()</a></td>
                                    <td>Compare arrays, and returns the matches (compare keys only)</td>
                                </tr>
                                <tr>
                                    <td><a href="func_array_intersect_uassoc.asp">array_intersect_uassoc()</a></td>
                                    <td>Compare arrays, and returns the matches (compare keys and values, using a user-defined key comparison function)</td>
                                </tr>
                                <tr>
                                    <td><a href="func_array_intersect_ukey.asp">array_intersect_ukey()</a></td>
                                    <td>Compare arrays, and returns the matches (compare keys only, using a user-defined key comparison function)</td>
                                </tr>
                                <tr>
                                    <td><a href="func_array_key_exists.asp">array_key_exists()</a></td>
                                    <td>Checks if the specified key exists in the array</td>
                                </tr>
                                <tr>
                                    <td><a href="func_array_keys.asp">array_keys()</a></td>
                                    <td>Returns all the keys of an array</td>
                                </tr>
                                <tr>
                                    <td><a href="func_array_map.asp">array_map()</a></td>
                                    <td>Sends each value of an array to a user-made function, which returns new values
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="func_array_merge.asp">array_merge()</a></td>
                                    <td>Merges one or more arrays into one array</td>
                                </tr>
                                <tr>
                                    <td><a href="func_array_merge_recursive.asp">array_merge_recursive()</a></td>
                                    <td>Merges one or more arrays into one array recursively</td>
                                </tr>
                                <tr>
                                    <td><a href="func_array_multisort.asp">array_multisort()</a></td>
                                    <td>Sorts multiple or multi-dimensional arrays</td>
                                </tr>
                                <tr>
                                    <td><a href="func_array_pad.asp">array_pad()</a></td>
                                    <td>Inserts a specified number of items, with a specified value, to an array</td>
                                </tr>
                                <tr>
                                    <td><a href="func_array_pop.asp">array_pop()</a></td>
                                    <td>Deletes the last element of an array</td>
                                </tr>
                                <tr>
                                    <td><a href="func_array_product.asp">array_product()</a></td>
                                    <td>Calculates the product of the values in an array</td>
                                </tr>
                                <tr>
                                    <td><a href="func_array_push.asp">array_push()</a></td>
                                    <td>Inserts one or more elements to the end of an array</td>
                                </tr>
                                <tr>
                                    <td><a href="func_array_rand.asp">array_rand()</a></td>
                                    <td>Returns one or more random keys from an array</td>
                                </tr>
                                <tr>
                                    <td><a href="func_array_reduce.asp">array_reduce()</a></td>
                                    <td>Returns an array as a string, using a user-defined function</td>
                                </tr>
                                <tr>
                                    <td><a href="func_array_replace.asp">array_replace()</a></td>
                                    <td>Replaces the values of the first array with the values from following arrays
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="func_array_replace_recursive.asp">array_replace_recursive()</a></td>
                                    <td>Replaces the values of the first array with the values from following arrays recursively
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="func_array_reverse.asp">array_reverse()</a></td>
                                    <td>Returns an array in the reverse order</td>
                                </tr>
                                <tr>
                                    <td><a href="func_array_search.asp">array_search()</a></td>
                                    <td>Searches an array for a given value and returns the key</td>
                                </tr>
                                <tr>
                                    <td><a href="func_array_shift.asp">array_shift()</a></td>
                                    <td>Removes the first element from an array, and returns the value of the removed element
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="func_array_slice.asp">array_slice()</a></td>
                                    <td>Returns selected parts of an array</td>
                                </tr>
                                <tr>
                                    <td><a href="func_array_splice.asp">array_splice()</a></td>
                                    <td>Removes and replaces specified elements of an array</td>
                                </tr>
                                <tr>
                                    <td><a href="func_array_sum.asp">array_sum()</a></td>
                                    <td>Returns the sum of the values in an array</td>
                                </tr>
                                <tr>
                                    <td><a href="func_array_udiff.asp">array_udiff()</a></td>
                                    <td>Compare arrays, and returns the differences (compare values only, using a user-defined key comparison function)</td>
                                </tr>
                                <tr>
                                    <td><a href="func_array_udiff_assoc.asp">array_udiff_assoc()</a></td>
                                    <td>Compare arrays, and returns the differences (compare keys and values, using a built-in function to compare the keys and a user-defined function to compare the values)
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="func_array_udiff_uassoc.asp">array_udiff_uassoc()</a></td>
                                    <td>Compare arrays, and returns the differences (compare keys and values, using two user-defined key comparison functions)</td>
                                </tr>
                                <tr>
                                    <td><a href="func_array_uintersect.asp">array_uintersect()</a></td>
                                    <td>Compare arrays, and returns the matches (compare values only, using a user-defined key comparison function)</td>
                                </tr>
                                <tr>
                                    <td><a href="func_array_uintersect_assoc.asp">array_uintersect_assoc()</a></td>
                                    <td>Compare arrays, and returns the matches (compare keys and values, using a built-in function to compare the keys and a user-defined function to compare the values)
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="func_array_uintersect_uassoc.asp">array_uintersect_uassoc()</a></td>
                                    <td>Compare arrays, and returns the matches (compare keys and values, using two user-defined key comparison functions)</td>
                                </tr>
                                <tr>
                                    <td><a href="func_array_unique.asp">array_unique()</a></td>
                                    <td>Removes duplicate values from an array</td>
                                </tr>
                                <tr>
                                    <td><a href="func_array_unshift.asp">array_unshift()</a></td>
                                    <td>Adds one or more elements to the beginning of an array</td>
                                </tr>
                                <tr>
                                    <td><a href="func_array_values.asp">array_values()</a></td>
                                    <td>Returns all the values of an array</td>
                                </tr>
                                <tr>
                                    <td><a href="func_array_walk.asp">array_walk()</a></td>
                                    <td>Applies a user function to every member of an array</td>
                                </tr>
                                <tr>
                                    <td><a href="func_array_walk_recursive.asp">array_walk_recursive()</a></td>
                                    <td>Applies a user function recursively to every member of an array</td>
                                </tr>
                                <tr>
                                    <td><a href="func_array_arsort.asp">arsort()</a></td>
                                    <td>Sorts an associative array in descending order, according to the value</td>
                                </tr>
                                <tr>
                                    <td><a href="func_array_asort.asp">asort()</a></td>
                                    <td>Sorts an associative array in ascending order, according to the value</td>
                                </tr>
                                <tr>
                                    <td><a href="func_array_compact.asp">compact()</a></td>
                                    <td>Create array containing variables and their values</td>
                                </tr>
                                <tr>
                                    <td><a href="func_array_count.asp">count()</a></td>
                                    <td>Returns the number of elements in an array</td>
                                </tr>
                                <tr>
                                    <td><a href="func_array_current.asp">current()</a></td>
                                    <td>Returns the current element in an array</td>
                                </tr>
                                <tr>
                                    <td><a href="func_array_each.asp">each()</a></td>
                                    <td><span class="deprecated">Deprecated from PHP 7.2.</span> Returns the current key and value pair from an array</td>
                                </tr>
                                <tr>
                                    <td><a href="func_array_end.asp">end()</a></td>
                                    <td>Sets the internal pointer of an array to its last element</td>
                                </tr>
                                <tr>
                                    <td><a href="func_array_extract.asp">extract()</a></td>
                                    <td>Imports variables into the current symbol table from an array</td>
                                </tr>
                                <tr>
                                    <td><a href="func_array_in_array.asp">in_array()</a></td>
                                    <td>Checks if a specified value exists in an array</td>
                                </tr>
                                <tr>
                                    <td><a href="func_array_key.asp">key()</a></td>
                                    <td>Fetches a key from an array</td>
                                </tr>
                                <tr>
                                    <td><a href="func_array_krsort.asp">krsort()</a></td>
                                    <td>Sorts an associative array in descending order, according to the key</td>
                                </tr>
                                <tr>
                                    <td><a href="func_array_ksort.asp">ksort()</a></td>
                                    <td>Sorts an associative array in ascending order, according to the key</td>
                                </tr>
                                <tr>
                                    <td><a href="func_array_list.asp">list()</a></td>
                                    <td>Assigns variables as if they were an array</td>
                                </tr>
                                <tr>
                                    <td><a href="func_array_natcasesort.asp">natcasesort()</a></td>
                                    <td>Sorts an array using a case insensitive "natural order" algorithm</td>
                                </tr>
                                <tr>
                                    <td><a href="func_array_natsort.asp">natsort()</a></td>
                                    <td>Sorts an array using a "natural order" algorithm</td>
                                </tr>
                                <tr>
                                    <td><a href="func_array_next.asp">next()</a></td>
                                    <td>Advance the internal array pointer of an array</td>
                                </tr>
                                <tr>
                                    <td><a href="func_array_pos.asp">pos()</a></td>
                                    <td>Alias of <a href="func_array_current.asp">current()</a></td>
                                </tr>
                                <tr>
                                    <td><a href="func_array_prev.asp">prev()</a></td>
                                    <td>Rewinds the internal array pointer</td>
                                </tr>
                                <tr>
                                    <td><a href="func_array_range.asp">range()</a></td>
                                    <td>Creates an array containing a range of elements</td>
                                </tr>
                                <tr>
                                    <td><a href="func_array_reset.asp">reset()</a></td>
                                    <td>Sets the internal pointer of an array to its first element</td>
                                </tr>
                                <tr>
                                    <td><a href="func_array_rsort.asp">rsort()</a></td>
                                    <td>Sorts an indexed array in descending order</td>
                                </tr>
                                <tr>
                                    <td><a href="func_array_shuffle.asp">shuffle()</a></td>
                                    <td>Shuffles an array</td>
                                </tr>
                                <tr>
                                    <td><a href="func_array_sizeof.asp">sizeof()</a></td>
                                    <td>Alias of <a href="func_array_count.asp">count()</a></td>
                                </tr>
                                <tr>
                                    <td><a href="func_array_sort.asp">sort()</a></td>
                                    <td>Sorts an indexed array in ascending order</td>
                                </tr>
                                <tr>
                                    <td><a href="func_array_uasort.asp">uasort()</a></td>
                                    <td>Sorts an array by values using a user-defined comparison function</td>
                                </tr>
                                <tr>
                                    <td><a href="func_array_uksort.asp">uksort()</a></td>
                                    <td>Sorts an array by keys using a user-defined comparison function</td>
                                </tr>
                                <tr>
                                    <td><a href="func_array_usort.asp">usort()</a></td>
                                    <td>Sorts an array using a user-defined comparison function</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <ol type="i">
                    <li>PHP Indexed Arrays
                        <pre class="language-php">
                        <code>
                            $cars = array("Volvo", "BMW", "Toyota");
                        </code>
                        </pre>
                    </li>
                    <li>Associative Arrays
                        <pre class="language-php">
                        <code>
                            $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
                        </code>
                        </pre>
                    </li>
                    <li>Multidimensional Arrays
                        <pre class="language-php">
                            <code>
                                echo $cars[0][0]
                            </code>
                            </pre>
                    </li>
                </ol>
                <li>PHP - Sort Functions For Arrays
                    <ol type="a">
                        <li>Sort Array in Ascending Order - sort()
                            <pre class="language-php">
                                        <code>
                                            $cars = array("Volvo", "BMW", "Toyota");
                                            sort($cars);
                                        </code>
                                        </pre>
                        </li>
                        <li>Sort Array in Descending Order - rsort()
                            <pre class="language-php">
                                        <code>
                                            $cars = array("Volvo", "BMW", "Toyota");
rsort($cars);
                                        </code>
                                        </pre>
                        </li>
                        <li>Sort Array (Ascending Order), According to Value - asort()
                            <pre class="language-php">
                                        <code>
                                            $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
asort($age);
                                        </code>
                                        </pre>
                        </li>
                        <li>Sort Array (Ascending Order), According to Key - ksort()
                            <pre class="language-php">
                                        <code>
                                            $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
ksort($age);
                                        </code>
                                        </pre>
                        </li>
                        <li>Sort Array (Descending Order), According to Value - arsort()
                            <pre class="language-php">
                                        <code>
                                            $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
                                            arsort($age);
                                        </code>
                                        </pre>
                        </li>
                        <li>Sort Array (Descending Order), According to Key - krsort()
                            <pre class="language-php">
                                        <code>
                                            $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
                                            krsort($age);
                                        </code>
                                        </pre>
                        </li>
                    </ol>
                </li>

            </li>
            <li>
                Superglobals<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom16" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom16" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Superglobals</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        Some predefined variables in PHP are "superglobals", which means that they are always accessible, regardless of scope - and you can access them from any function, class or file without having to do anything special.
                        <br><br> The PHP superglobal variables are: <br><br> $_SERVER : $_SERVER is a PHP super global variable which holds information about headers, paths, and script locations. <br> $GLOBALS :$GLOBALS is a PHP super global variable
                        which is used to access global variables from anywhere in the PHP script (also from within functions or methods). <br> PHP stores all global variables in an array called $GLOBALS[index]. The index holds the name of the variable.
                        <br> $_REQUEST : PHP $_REQUEST is a PHP super global variable which is used to collect data after submitting an HTML form. <br> $_POST : PHP $_POST is a PHP super global variable which is used to collect form data after submitting
                        an HTML form with method="post". $_POST is also widely used to pass variables.<br> $_GET : PHP $_GET is a PHP super global variable which is used to collect form data after submitting an HTML form with method="get".$_GET can also
                        collect data sent in the URL. <br> $_FILES <br> $_ENV <br> $_COOKIE <br> $_SESSION <br>
                    </div>
                </div>
            </li>
            <li>
                Regular Expression<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom18" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom18" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Regular Expression</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        A regular expression is a sequence of characters that forms a search pattern. When you search for data in a text, you can use this search pattern to describe what you are searching for.
                        <br> A regular expression can be a single character, or a more complicated pattern.
                        <br> Regular expressions can be used to perform all types of text search and text replace operations.
                        <br><br> Regular Expression Functions
                        <br>
                        <table class="ws-table-all notranslate table-bordered">
                            <tbody>
                                <tr>
                                    <th style="width:20%">Function</th>
                                    <th style="width:80%">Description</th>
                                </tr>
                                <tr>
                                    <td>preg_match()</td>
                                    <td>Returns 1 if the pattern was found in the string and 0 if not</td>
                                </tr>
                                <tr>
                                    <td>preg_match_all()</td>
                                    <td>Returns the number of times the pattern was found in the string, which may also be 0</td>
                                </tr>
                                <tr>
                                    <td>preg_replace()</td>
                                    <td>Returns a new string where matched patterns have been replaced with another string
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <ol type="i">
                    <li>preg_match()
                        <pre class="language-php">
                        <code>
                            $str = "Visit W3Schools";
                        $pattern = "/w3schools/i";
                        echo preg_match($pattern, $str); // Outputs 1
                        </code>
                        </pre>
                    </li>
                    <li>preg_match_all()
                        <pre class="language-php">
                        <code>
                            $str = "The rain in SPAIN falls mainly on the plains.";
                        $pattern = "/ain/i";
                        echo preg_match_all($pattern, $str); // Outputs 4
                        </code>
                        </pre>
                    </li>
                    <li>preg_replace()
                        <pre class="language-php">
                        <code>
                            $str = "Visit Microsoft!";
                            $pattern = "/microsoft/i";
                            echo preg_replace($pattern, "W3Schools", $str); // Outputs "Visit W3Schools!"
                        </code>
                        </pre>
                    </li>
                </ol>
            </li>
            <li>
                Regular Expression Modifiers<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom19" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom19" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Regular Expression Modifiers</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        Modifiers can change how a search is performed. <br><br>
                        <table class="ws-table-all notranslate table-bordered">
                            <tbody>
                                <tr>
                                    <th style="width:22%">Modifier</th>
                                    <th>Description</th>
                                </tr>
                                <tr>
                                    <td>i</td>
                                    <td>Performs a case-insensitive search</td>
                                </tr>
                                <tr>
                                    <td>m</td>
                                    <td>Performs a multiline search (patterns that search for the beginning or end of a string will match the beginning or end of each line)</td>
                                </tr>
                                <tr>
                                    <td>u</td>
                                    <td>Enables correct matching of UTF-8 encoded patterns</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </li>
            <li>
                Regular Expression Patterns<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom21" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom21" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Regular Expression Patterns</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        <table class="ws-table-all notranslate table-bordered">
                            <tbody>
                                <tr>
                                    <th style="width:22%">Expression</th>
                                    <th>Description</th>
                                </tr>
                                <tr>
                                    <td>[abc]</td>
                                    <td>Find one character from the options between the brackets</td>
                                </tr>
                                <tr>
                                    <td>[^abc]</td>
                                    <td>Find any character NOT between the brackets</td>
                                </tr>
                                <tr>
                                    <td>[0-9]</td>
                                    <td>Find one character from the range 0 to 9</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </li>
            <li>
                Metacharacters<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom22" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom22" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Metacharacters</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        <table class="ws-table-all notranslate table-bordered">
                            <tbody>
                                <tr>
                                    <th style="width:22%">Metacharacter</th>
                                    <th>Description</th>
                                </tr>
                                <tr>
                                    <td>|</td>
                                    <td>Find a match for any one of the patterns separated by | as in: cat|dog|fish</td>
                                </tr>
                                <tr>
                                    <td>.</td>
                                    <td>Find just one instance of any character</td>
                                </tr>
                                <tr>
                                    <td>^</td>
                                    <td>Finds a match as the beginning of a string as in: ^Hello</td>
                                </tr>
                                <tr>
                                    <td>$</td>
                                    <td>Finds a match at the end of the string as in: World$</td>
                                </tr>
                                <tr>
                                    <td>\d</td>
                                    <td>Find a digit</td>
                                </tr>
                                <tr>
                                    <td>\s</td>
                                    <td>Find a whitespace character</td>
                                </tr>
                                <tr>
                                    <td>\b</td>
                                    <td>Find a match at the beginning of a word like this: \bWORD, or at the end of a word like this: WORD\b</td>
                                </tr>
                                <tr>
                                    <td>\uxxxx</td>
                                    <td>Find the Unicode character specified by the hexadecimal number xxxx</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </li>
            <li>
                Quantifiers<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom23" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom23" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Quantifiers</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        <table class="ws-table-all notranslate table-bordered">
                            <tbody>
                                <tr>
                                    <th style="width:22%">Quantifier</th>
                                    <th>Description</th>
                                </tr>
                                <tr>
                                    <td>n+</td>
                                    <td>Matches any string that contains at least one <em>n</em></td>
                                </tr>
                                <tr>
                                    <td>n*</td>
                                    <td>Matches any string that contains zero or more occurrences of <em>n</em></td>
                                </tr>
                                <tr>
                                    <td>n?</td>
                                    <td>Matches any string that contains zero or one occurrences of <em>n</em></td>
                                </tr>
                                <tr>
                                    <td>n{x}</td>
                                    <td>Matches any string that contains a sequence of <i>X</i> <i>n</i>'s</td>
                                </tr>
                                <tr>
                                    <td>n{x,y}</td>
                                    <td>Matches any string that contains a sequence of X to Y <i>n</i>'s</td>
                                </tr>
                                <tr>
                                    <td>n{x,}</td>
                                    <td>Matches any string that contains a sequence of at least X <i>n</i>'s</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </li>
            <li>
                PHP Form Handling<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom24" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom24" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">PHP Form Handling</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        The PHP superglobals $_GET and $_POST are used to collect form-data.
                        <br><br> GET vs. POST <br> Both GET and POST create an array (e.g. array( key1 => value1, key2 => value2, key3 => value3, ...)). This array holds key/value pairs, where keys are the names of the form controls and values are the
                        input data from the user. <br><br> Both GET and POST are treated as $_GET and $_POST. These are superglobals, which means that they are always accessible, regardless of scope - and you can access them from any function, class or
                        file without having to do anything special.
                        <br><br> $_GET is an array of variables passed to the current script via the URL parameters.
                        <br><br> $_POST is an array of variables passed to the current script via the HTTP POST method.
                        <br><br> When to use GET? Information sent from a form with the GET method is visible to everyone (all variable names and values are displayed in the URL). GET also has limits on the amount of information to send. The limitation
                        is about 2000 characters. However, because the variables are displayed in the URL, it is possible to bookmark the page. This can be useful in some cases.
                        <br> GET may be used for sending non-sensitive data.
                        <br> Note: GET should NEVER be used for sending passwords or other sensitive information!
                        <br><br> When to use POST? Information sent from a form with the POST method is invisible to others (all names/values are embedded within the body of the HTTP request) and has no limits on the amount of information to send.
                        <br> Moreover POST supports advanced functionality such as support for multi-part binary input while uploading files to server.
                        <br> However, because the variables are not displayed in the URL, it is not possible to bookmark the page.
                        <br> Developers prefer POST for sending form data. </div>
                </div>
                <pre class="language-php">
<code>
    &lt;html&gt;
&lt;body&gt;&lt;form action="welcome.php" method="post"&gt;
Name: &lt;input type="text" name="name"&gt;&lt;br&gt;
E-mail: &lt;input type="text" name="email"&gt;&lt;br&gt;
&lt;input type="submit"&gt;
&lt;/form&gt;&lt;/body&gt;
&lt;/html&gt;
</code>
</pre>
            </li>
            <li>
                PHP Form Validation<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom25" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom25" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">PHP Form Validation</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        The validation rules for the form above are as follows:
                        <br>
                        <table class="ws-table-all notranslate table-bordered">
                            <tbody>
                                <tr>
                                    <th style="width:25%">Field</th>
                                    <th style="width:75%">Validation Rules</th>
                                </tr>
                                <tr>
                                    <td>Name</td>
                                    <td>Required. + Must only contain letters and whitespace</td>
                                </tr>
                                <tr>
                                    <td>E-mail</td>
                                    <td>Required. + Must contain a valid email address (with @ and .)</td>
                                </tr>
                                <tr>
                                    <td>Website</td>
                                    <td>Optional. If present, it must contain a valid URL</td>
                                </tr>
                                <tr>
                                    <td>Comment</td>
                                    <td>Optional. Multi-line input field (textarea)</td>
                                </tr>
                                <tr>
                                    <td>Gender</td>
                                    <td>Required. Must select one</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <pre class="language-php">
                    <code>
                        &lt;!DOCTYPE HTML&gt;  
                        &lt;html&gt;
                        &lt;head&gt;
                        &lt;style&gt;
                        .error {color: #FF0000;}
                        &lt;/style&gt;
                        &lt;/head&gt;
                        &lt;body&gt;  
                        
                        &lt;?php
                        // define variables and set to empty values
                        $nameErr = $emailErr = $genderErr = $websiteErr = "";
                        $name = $email = $gender = $comment = $website = "";
                        
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                          if (empty($_POST["name"])) {
                            $nameErr = "Name is required";
                          } else {
                            $name = test_input($_POST["name"]);
                            // check if name only contains letters and whitespace
                            if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
                              $nameErr = "Only letters and white space allowed";
                            }
                          }
                          
                          if (empty($_POST["email"])) {
                            $emailErr = "Email is required";
                          } else {
                            $email = test_input($_POST["email"]);
                            // check if e-mail address is well-formed
                            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                              $emailErr = "Invalid email format";
                            }
                          }
                            
                          if (empty($_POST["website"])) {
                            $website = "";
                          } else {
                            $website = test_input($_POST["website"]);
                            // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
                            if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
                              $websiteErr = "Invalid URL";
                            }
                          }
                        
                          if (empty($_POST["comment"])) {
                            $comment = "";
                          } else {
                            $comment = test_input($_POST["comment"]);
                          }
                        
                          if (empty($_POST["gender"])) {
                            $genderErr = "Gender is required";
                          } else {
                            $gender = test_input($_POST["gender"]);
                          }
                        }
                        
                        function test_input($data) {
                          $data = trim($data);
                          $data = stripslashes($data);
                          $data = htmlspecialchars($data);
                          return $data;
                        }
                        ?&gt;
                        
                        &lt;h2&gt;PHP Form Validation Example&lt;/h2&gt;
                        &lt;p&gt;&lt;span class="error"&gt;* required field&lt;/span&gt;&lt;/p&gt;
                        &lt;form method="post" action="&lt;?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?&gt;"&gt;  
                          Name: &lt;input type="text" name="name" value="&lt;?php echo $name;?&gt;"&gt;
                          &lt;span class="error"&gt;* &lt;?php echo $nameErr;?&gt;&lt;/span&gt;
                          &lt;br&gt;&lt;br&gt;
                          E-mail: &lt;input type="text" name="email" value="&lt;?php echo $email;?&gt;"&gt;
                          &lt;span class="error"&gt;* &lt;?php echo $emailErr;?&gt;&lt;/span&gt;
                          &lt;br&gt;&lt;br&gt;
                          Website: &lt;input type="text" name="website" value="&lt;?php echo $website;?&gt;"&gt;
                          &lt;span class="error"&gt;&lt;?php echo $websiteErr;?&gt;&lt;/span&gt;
                          &lt;br&gt;&lt;br&gt;
                          Comment: &lt;textarea name="comment" rows="5" cols="40"&gt;&lt;?php echo $comment;?&gt;&lt;/textarea&gt;
                          &lt;br&gt;&lt;br&gt;
                          Gender:
                          &lt;input type="radio" name="gender" &lt;?php if (isset($gender) && $gender=="female") echo "checked";?&gt; value="female"&gt;Female
                          &lt;input type="radio" name="gender" &lt;?php if (isset($gender) && $gender=="male") echo "checked";?&gt; value="male"&gt;Male
                          &lt;input type="radio" name="gender" &lt;?php if (isset($gender) && $gender=="other") echo "checked";?&gt; value="other"&gt;Other  
                          &lt;span class="error"&gt;* &lt;?php echo $genderErr;?&gt;&lt;/span&gt;
                          &lt;br&gt;&lt;br&gt;
                          &lt;input type="submit" name="submit" value="Submit"&gt;  
                        &lt;/form&gt;
                        
                        &lt;?php
                        echo "&lt;h2&gt;Your Input:&lt;/h2&gt;";
                        echo $name;
                        echo "&lt;br&gt;";
                        echo $email;
                        echo "&lt;br&gt;";
                        echo $website;
                        echo "&lt;br&gt;";
                        echo $comment;
                        echo "&lt;br&gt;";
                        echo $gender;
                        ?&gt;
                        
                        &lt;/body&gt;
                        &lt;/html&gt;
                    </code>
                    </pre>
            </li>
        </ol>
    </div>
    </div>
    <?php require_once 'Footer.php'?>