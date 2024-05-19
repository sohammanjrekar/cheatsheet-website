<?php require_once 'Navbar.php'?>
    <!-- mid part -->
    <nav class="mt-5 p-2 headline" style="background:linear-gradient(to top right, #fb5475 0%, #f77b50 59%);">
        <div class="text-center " style="margin-top:5vh;"><img style="margin-right:2vh;"
                src="../../assets/img/redis.svg" alt="" /> Redis cheatsheet
        </div>
    </nav>
    <div class="container">
        <div class="p-5 mb-4 bg-light rounded-3 jumbo mt-2">
            <div class="container-fluid py-3">
                <h1 class="display-5 fw-bold">Java</h1>
                <div class="row">
                    <div class="col-md-6">
                        <p class="fs-4">
                            Java is a popular programming language, created in 1995.
                            <br> It is owned by Oracle, and more than 3 billion devices run Java.
                            <br> It is used for:
                            <br>
                        <ul>
                            <li>
                                Mobile applications (specially Android apps)</li>
                            <li> Desktop applications</li>
                            <li> Web applications</li>
                            <li> Web servers and application servers</li>
                        </ul>
                        </p>
                    </div>
                    <div class="col-md-6 text-center">
                        <img src="../../assets/img/redis.svg" alt="" style="height:100%;width:100%;" />
                    </div>
                </div>
                <button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#o1"
                    aria-controls="o1">
                    Read More...
                </button>
                <a href="https://docs.oracle.com/en/java/javase/11/docs/api/index.html">
                    <div class="button btn1 mx-1 text-center" style="font-size: 1em;width:5em;">Docs</div>
                </a>
                <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="o1"
                    aria-labelledby="offcanvasWithBothOptionsLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">
                            Java
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ol type="a">
                            <li>Java works on different platforms (Windows, Mac, Linux, Raspberry Pi, etc.)</li>
                            <li>It is one of the most popular programming language in the world</li>
                            <li> It has a large demand in the current job market</li>
                            <li> It is easy to learn and simple to use</li>
                            <li> It is open-source and free</li>
                            <li>It is secure, fast and powerful</li>
                            <li>It has a huge community support (tens of millions of developers)</li>
                            <li>Java is an object oriented language which gives a clear structure to programs and allows
                                code to be reused, lowering development costs</li>
                            <li>As Java is close to C++ and C#, it makes it easy for programmers to switch to Java or
                                vice versa</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <ol>
            <!-- offcanvas -->
           
            <li>Install Redis Stack in Docker
                <br>
                1. redis/redis-stack-server
                <pre class="language-sh">
                    <code> 
                     docker run -d --name redis-stack-server -p 6379:6379 redis/redis-stack-server:latest
                        </code>
</pre>
<br>
                2. redis/redis-stack
                <pre class="language-sh">
                    <code> 
                    docker run -d --name redis-stack -p 6379:6379 -p 8001:8001 redis/redis-stack:latest
                        </code>
</pre>
            </li>
            <li>Connect with redis-cli
                <pre class="language-sh">
                    <code> 
                    docker exec -it c8cfa46e8843 bash
                        </code>
</pre>
            </li>
            <li>
                Print Text<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom3" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom3"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Print Text</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        1) The Print() Method<br> There is also a print() method, which is similar to println(). <br>
                        The only difference is that it does not insert a new line at the end of the output
                        <br><br><br>2) Println() <br> You can add as many println() methods as you want. Note that it
                        will add a new line for each method
                    </div>
                </div>
                <h3>Print()</h3>
                <pre class="language-java">
            <code>     
                System.out.print("I will print on the same line.");
            </code>
        </pre>
                <h3>Println()</h3>
                <pre class="language-java">
            <code>     
                System.out.println("Hello World!");
            </code>
        </pre>
            </li>
            <li>Take inputs
                <pre class="language-java">
                    <code> 
                        Scanner input=new Scanner(System.in);
                        float marks =input.nextFloat();
                        </code>
</pre>
            </li>
            <li>Java Comments
                <button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom4"
                    aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom4"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Java Comments</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        Comments can be used to explain Java code, and to make it more readable. It can also be used to
                        prevent execution when testing alternative code.
                        <br><br> Single-line Comments<br> Single-line comments start with two forward slashes (//).
                        <br> Any text between // and the end of the line is ignored by Java (will not be executed).
                        <br><br>Java Multi-line Comments<br> Multi-line comments start with /* and ends with */.
                        <br> Any text between /* and */ will be ignored by Java.
                    </div>
                </div>
                <h3>single linecomment</h3>
                <pre class="language-java">
    <code>
        // This is a comment
</code>
</pre>
                <h3>Multi-Line comments</h3>
                <pre class="language-java">
    <code>
        /* The code below will print the words Hello World
to the screen, and it is amazing */
</code>
</pre>
            </li>
            <li>Java Variables<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom5" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom5"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Java Variables</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        Variables are containers for storing data values.
                        <br><br> In Java, there are different types of variables, for example:
                        <br>
                        <ol>
                            <li>String - stores text, such as "Hello". String values are surrounded by double quotes
                            </li>
                            <li>int - stores integers (whole numbers), without decimals, such as 123 or -123
                            </li>
                            <li>float - stores floating point numbers, with decimals, such as 19.99 or -19.99
                            </li>
                            <li>char - stores single characters, such as 'a' or 'B'. Char values are surrounded by
                                single quotes</li>
                            <li>boolean - stores values with two states: true or false
                            </li>
                        </ol><br><br> Final Variables <br> If you don't want others (or yourself) to overwrite existing
                        values, use the final keyword (this will declare the variable as "final" or "constant", which
                        means unchangeable and read-only)
                    </div>
                </div>
                <h3>Declaring (Creating) Variables (Syntax)</h3>
                <pre class="language-java">
    <code>
        type variableName = value;
</code>
</pre>
                <h3>Final Variables</h3>
                <pre class="language-java">
<code>
    final int myNum = 15;
</code>
</pre>
            </li>
            <li>
                Identifiers<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvas2" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvas2"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Identifiers</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        All Java variables must be identified with unique names.
                        <br> These unique names are called identifiers.
                        <br> Identifiers can be short names (like x and y) or more descriptive names (age, sum,
                        totalVolume).
                        <br><br> Note: It is recommended to use descriptive names in order to create understandable and
                        maintainable code
                        <br><br> The general rules for naming variables are:
                        <br> Names can contain letters, digits, underscores, and dollar signs<br> Names must begin with
                        a letter<br> Names should start with a lowercase letter and it cannot contain whitespace<br>
                        Names can also begin with $ and _ (but
                        we will not use it in this tutorial)<br> Names are case sensitive ("myVar" and "myvar" are
                        different variables)<br> Reserved words (like Java keywords, such as int or boolean) cannot be
                        used as names <br>
                    </div>
                </div>
            </li>

            <li>Java Data Types
                <button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom9"
                    aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom9"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Java Data Types</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        Data types are divided into two groups:
                        <br> <br> 1)Primitive data types - includes byte, short, int, long, float, double, boolean and
                        char
                        <br> 2)Non-primitive data types - such as String, Arrays and Classes (you will learn more about
                        these in a later chapter) <br>Non-primitive data types are called reference types because they
                        refer to objects.
                        <br> The main difference between primitive and non-primitive data types are:
                        <br> Primitive types are predefined (already defined) in Java. Non-primitive types are created
                        by the programmer and is not defined by Java (except for String).
                        <br>Non-primitive types can be used to call methods to perform certain operations, while
                        primitive types cannot.<br> A primitive type has always a value, while non-primitive types can
                        be null.
                        <br>A primitive type starts with a lowercase letter, while non-primitive types starts with an
                        uppercase letter.<br> The size of a primitive type depends on the data type, while non-primitive
                        types have all the same size. <br> <br> 1) Primitive Data Types <br> A primitive data type
                        specifies the size and type of variable values, and it has no additional methods.
                        <br> There are eight primitive data types in Java: <br> <br>
                        <table class="ws-table-all notranslate table-bordered">
                            <tbody>
                                <tr>
                                    <th style="width:20%">Data Type</th>
                                    <th style="width:17%">Size</th>
                                    <th style="width:63%">Description</th>
                                </tr>
                                <tr>
                                    <td><code class="w3-codespan">byte</code></td>
                                    <td>1 byte</td>
                                    <td>Stores whole numbers from -128 to 127</td>
                                </tr>
                                <tr>
                                    <td><code class="w3-codespan">short</code></td>
                                    <td>2 bytes</td>
                                    <td>Stores whole numbers from -32,768 to 32,767</td>
                                </tr>
                                <tr>
                                    <td><code class="w3-codespan">int</code></td>
                                    <td>4 bytes</td>
                                    <td>Stores whole numbers from -2,147,483,648 to 2,147,483,647</td>
                                </tr>
                                <tr>
                                    <td><code class="w3-codespan">long</code></td>
                                    <td>8 bytes</td>
                                    <td>Stores whole numbers from -9,223,372,036,854,775,808 to
                                        9,223,372,036,854,775,807
                                    </td>
                                </tr>
                                <tr>
                                    <td><code class="w3-codespan">float</code></td>
                                    <td>4 bytes</td>
                                    <td>Stores fractional numbers. Sufficient for storing 6 to 7 decimal digits</td>
                                </tr>
                                <tr>
                                    <td><code class="w3-codespan">double</code></td>
                                    <td>8 bytes</td>
                                    <td>Stores fractional numbers. Sufficient for storing 15 decimal digits</td>
                                </tr>
                                <tr>
                                    <td><code class="w3-codespan">boolean</code></td>
                                    <td>1 bit</td>
                                    <td>Stores true or false values</td>
                                </tr>
                                <tr>
                                    <td><code class="w3-codespan">char</code></td>
                                    <td>2 bytes</td>
                                    <td>Stores a single character/letter or ASCII values</td>
                                </tr>

                            </tbody>
                        </table>
                        <br><br> Primitive number types are divided into two groups:
                        <br><br> A) Integer types stores whole numbers, positive or negative (such as 123 or -456),
                        without decimals. Valid types are byte, short, int and long. Which type you should use, depends
                        on the numeric value.
                        <br> <br><br> B) Floating point types represents numbers with a fractional part, containing one
                        or more decimals. There are two types: float and double.
                        <br><br>3)Boolean Types:Very often in programming, you will need a data type that can only have
                        one of two values, like:
                        <br><br> YES / NO<br> ON / OFF<br> TRUE / FALSE<br> For this, Java has a boolean data type,
                        which can only take the values true or false
                        <br><br> 4)Characters: <br> The char data type is used to store a single character. The
                        character must be surrounded by single quotes, like 'A' or 'c' <br><br> 5)Strings: <br> The
                        String data type is used to store a sequence of
                        characters (text). String values must be surrounded by double quotes
                    </div>
                </div>
                <h3>Premitive number type : Integer type</h3>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne1" aria-expanded="false" aria-controls="collapseOne">
                                byte
                            </button>
                        </h2>
                        <div id="collapseOne1" class="accordion-collapse collapse" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-java">
                                <code>
                                    byte myNum = 100;    
                            </code>
                            </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo1" aria-expanded="false" aria-controls="collapseTwo">
                                short
                            </button>
                        </h2>
                        <div id="collapseTwo1" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-java">
                                <code>
                                    short myNum = 5000;
                            </code>
                            </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree1" aria-expanded="false" aria-controls="collapseThree">
                                int
                            </button>
                        </h2>
                        <div id="collapseThree1" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-java">
                                <code>
                                    int myNum = 100000;      
                            </code>
                            </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapsefour1" aria-expanded="false" aria-controls="collapseThree">
                                long
                            </button>
                        </h2>
                        <div id="collapsefour1" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-java">
                                  <code>
                                    long myNum = 15000000000L;     
                              </code>
                              </pre>
                            </div>
                        </div>
                    </div>
                </div>

                <br><br>

                <h3>Premitive number type : Floating Point Types</h3>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne2" aria-expanded="false" aria-controls="collapseOne">
                                float
                            </button>
                        </h2>
                        <div id="collapseOne2" class="accordion-collapse collapse" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-java">
                                  <code>
                                    float myNum = 5.75f;    
                              </code>
                              </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo">
                                double
                            </button>
                        </h2>
                        <div id="collapseTwo2" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-java">
                                  <code>
                                    double d1 = 12E4d;
                              </code>
                              </pre>
                            </div>
                        </div>
                    </div>
                </div>
                <br><br>
                <h3>Boolean Types</h3>
                <pre class="language-java">
                        <code>
                            boolean isJavaFun = true;    
                    </code>
                    </pre>
                <br>
                <h3>Characters</h3>
                <pre class="language-java">
                        <code>
                            char myGrade = 'B';   
                    </code>
                    </pre>
                <br>
                <h3>Strings</h3>
                <pre class="language-java">
                        <code>
                            String greeting = "Hello World";    
                    </code>
                    </pre>
            </li>
            <li>
                Java Type Casting<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom10" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom10"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Java Type Casting</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        Type casting is when you assign a value of one primitive data type to another type.
                        <br> In Java, there are two types of casting:
                        <br> Widening Casting (automatically) - converting a smaller type to a larger type size byte ->
                        short -> char -> int -> long -> float -> double
                        <br><br> Narrowing Casting (manually) - converting a larger type to a smaller size type double
                        -> float -> long -> int -> char -> short -> byte
                    </div>
                </div>
                <h3>Widening Casting</h3>
                <pre class="language-java">
                            <code>
                                int myInt = 9;
                                double myDouble = myInt; // Automatic casting: int to double  
                        </code>
                        </pre>
                <h3>Narrowing Casting</h3>
                <pre class="language-java">
                            <code>
                                double myDouble = 9.78d;
    int myInt = (int) myDouble; // Manual casting: double to int
                        </code>
                        </pre>
            </li>
            <li>Java Operators<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom12" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom12"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Java Operators</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        Operators are used to perform operations on variables and values.
                        <br><br> Java divides the operators into the following groups:
                        <br> 1) Arithmetic operators<br> 2) Assignment operators<br> 3) Comparison operators<br> 4)
                        Logical operators<br> 5) Bitwise operators <br><br><br> 1)Arithmetic Operators <br> Arithmetic
                        operators are used to perform common mathematical
                        operations.
                        <table class="ws-table-all notranslate table-bordered">
                            <tbody>
                                <tr>
                                    <th style="width:15%">Operator</th>
                                    <th style="width:18%">Name</th>
                                    <th style="width:50%">Description</th>
                                    <th style="width:17%;">Example</th>
                                </tr>
                                <tr>
                                    <td>+</td>
                                    <td>Addition</td>
                                    <td>Adds together two values</td>
                                    <td>x + y</td>

                                </tr>
                                <tr>
                                    <td>-</td>
                                    <td>Subtraction</td>
                                    <td>Subtracts one value from another</td>
                                    <td>x - y</td>

                                </tr>
                                <tr>
                                    <td>*</td>
                                    <td>Multiplication</td>
                                    <td>Multiplies two values</td>
                                    <td>x * y</td>

                                </tr>
                                <tr>
                                    <td>/</td>
                                    <td>Division</td>
                                    <td>Divides one value by another</td>
                                    <td>x / y</td>

                                </tr>
                                <tr>
                                    <td>%</td>
                                    <td>Modulus</td>
                                    <td>Returns the division remainder</td>
                                    <td>x % y</td>

                                </tr>
                                <tr>
                                    <td>++</td>
                                    <td>Increment</td>
                                    <td>Increases the value of a variable by 1</td>
                                    <td>++x</td>

                                </tr>
                                <tr>
                                    <td>--</td>
                                    <td>Decrement</td>
                                    <td>Decreases the value of a variable by 1</td>
                                    <td>--x</td>

                                </tr>
                            </tbody>
                        </table>
                        <br><br> 2) Java Assignment Operators <br> Assignment operators are used to assign values to
                        variables. <br><br>
                        <table class="ws-table-all notranslate table-bordered">
                            <tbody>
                                <tr>
                                    <th style="width:30%">Operator</th>
                                    <th style="width:35%">Example</th>
                                    <th style="width:35%">Same As</th>
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
                        </table><br><br> 3) Java Comparison Operators <br> Comparison operators are used to compare two
                        values (or variables). This is important in programming, because it helps us to find answers and
                        make decisions.
                        <br><br> The return value of a comparison is either true or false. <br>
                        <table class="ws-table-all notranslate table-bordered">
                            <tbody>
                                <tr>
                                    <th style="width:25%">Operator</th>
                                    <th style="width:45%">Name</th>
                                    <th style="width:30%">Example</th>
                                </tr>
                                <tr>
                                    <td>==</td>
                                    <td>Equal to</td>
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
                        <br><br>4)Java Logical Operators <br> You can also test for true or false values with logical
                        operators. <br>
                        <table class="ws-table-all notranslate table-bordered">
                            <tbody>
                                <tr>
                                    <th style="width:15%">Operator</th>
                                    <th style="width:20%">Name</th>
                                    <th style="width:45%">Description</th>
                                    <th style="width:20%">Example</th>
                                </tr>
                                <tr>
                                    <td>&amp;&amp;&nbsp;</td>
                                    <td>Logical and</td>
                                    <td>Returns true if both statements are true</td>
                                    <td>x &lt; 5 &amp;&amp;&nbsp; x &lt; 10</td>

                                </tr>
                                <tr>
                                    <td>||&nbsp;</td>
                                    <td>Logical or</td>
                                    <td>Returns true if one of the statements is true</td>
                                    <td>x &lt; 5 || x &lt; 4</td>

                                </tr>
                                <tr>
                                    <td>!</td>
                                    <td>Logical not</td>
                                    <td>Reverse the result, returns false if the result is true</td>
                                    <td>!(x &lt; 5 &amp;&amp; x &lt; 10)</td>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </li>
            <li>
                Java Strings<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom13" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom13"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Java Strings</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        Strings are used for storing text.
                        <br><br> A String variable contains a collection of characters surrounded by double quotes
                        <br>
                    </div>
                </div>
                <h3>String declare</h3>
                <pre class="language-java">
    <code>
        String greeting = "Hello";
</code>
</pre>

                <h3>String Length</h3>
                <pre class="language-java">
    <code>
        String txt = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
System.out.println("The length of the txt string is: " + txt.length());
</code>
</pre>

                <h3>Finding a Character in a String</h3>
                <pre class="language-java">
    <code>
        String txt = "Please locate where 'locate' occurs!";
        System.out.println(txt.indexOf("locate")); // Outputs 7
</code>
</pre>
                <h3>String Concatenation</h3>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne3" aria-expanded="false" aria-controls="collapseOne">
                                String Concatenation using +
                            </button>
                        </h2>
                        <div id="collapseOne3" class="accordion-collapse collapse" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-java">
                <code>
System.out.println("Doe" + " " + "John");
            </code>
            </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo3" aria-expanded="false" aria-controls="collapseTwo">
                                String Concatenation using .concat()
                            </button>
                        </h2>
                        <div id="collapseTwo3" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-java">
                <code>
                    System.out.println("Doe" + " " +.concat("John"));</code>
            </pre>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                Java Special Characters<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom14" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom14"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Java Special Characters</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        <table class="ws-table-all notranslate table-bordered">
                            <tbody>
                                <tr>
                                    <th width="35%">Escape character</th>
                                    <th>Result</th>
                                    <th>Description</th>
                                </tr>
                                <tr>
                                    <td>\'</td>
                                    <td>'</td>
                                    <td>Single quote</td>
                                </tr>
                                <tr>
                                    <td>\"</td>
                                    <td>"</td>
                                    <td>Double quote</td>
                                </tr>
                                <tr>
                                    <td>\\</td>
                                    <td>\</td>
                                    <td>Backslash</td>
                                </tr>
                            </tbody>
                        </table>
                        <br><br>
                        <table class="ws-table-all notranslate table-bordered">
                            <tbody>
                                <tr>
                                    <th width="35%">Code</th>
                                    <th>Result</th>
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
                            </tbody>
                        </table>
                    </div>
                </div>
            </li>
            <li>
                Java Math
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne4" aria-expanded="false" aria-controls="collapseOne">
                                Math.max(x,y)
                            </button>
                        </h2>
                        <div id="collapseOne4" class="accordion-collapse collapse" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="accordion-body">
                                    <pre class="language-java">
                                    <code>
                                        Math.max(5, 10);     
                                </code>
                                </pre>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo4" aria-expanded="false" aria-controls="collapseTwo">
                                    Math.min(x,y)
                                </button>
                            </h2>
                            <div id="collapseTwo4" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <pre class="language-java">
                                <code>
                                    Math.min(5, 10);
                            </code>
                            </pre>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree4" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    Math.sqrt(x)
                                </button>
                            </h2>
                            <div id="collapseThree4" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="accordion-body">
                                        <pre class="language-java">
                                    <code>
                                        Math.sqrt(64);    
                                </code>
                                </pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree5" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    Math.abs(x)
                                </button>
                            </h2>
                            <div id="collapseThree5" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="accordion-body">
                                        <pre class="language-java">
                                    <code>
                                        Math.abs(-4.7);  
                                </code>
                                </pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree6" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    Random Numbers
                                </button>
                            </h2>
                            <div id="collapseThree6" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="accordion-body">
                                        <pre class="language-java">
                                    <code>
                                        Math.random();
                                </code>
                                </pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </li>
            <li>
                Java Conditions and If Statements
                <button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom18"
                    aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom18"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Java Conditions and If Statements</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        Java has the following conditional statements:
                        <br><br> 1) Use if to specify a block of code to be executed, if a specified condition is true
                        <br> 2) Use else to specify a block of code to be executed, if the same condition is false <br>
                        3) Use else if to specify a new condition
                        to test, if the first condition is false <br> 4) Use switch to specify many alternative blocks
                        of code to be executed<br>
                        <br>
                        <br> Switch: <br> This is how it works:
                        <br> The switch expression is evaluated once. The value of the expression is compared with the
                        values of each case. If there is a match, the associated block of code is executed. The break
                        and default keywords are optional, and
                        will be described later in this chapter
                    </div>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne7" aria-expanded="false" aria-controls="collapseOne">
                                If Statement
                            </button>
                        </h2>
                        <div id="collapseOne7" class="accordion-collapse collapse" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="accordion-body">
                                    <pre class="language-java">
                                        <code>
                                            if (condition) {
                                                // block of code to be executed if the condition is true
                                              }
                                    </code>
                                    </pre>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo7" aria-expanded="false" aria-controls="collapseTwo">
                                    If .... else
                                </button>
                            </h2>
                            <div id="collapseTwo7" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <pre class="language-java">
                                    <code>
                                        if (condition) {
                                            // block of code to be executed if the condition is true
                                          } else {
                                            // block of code to be executed if the condition is false
                                          }
                                </code>
                                </pre>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree9" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    If ... else if ... else
                                </button>
                            </h2>
                            <div id="collapseThree9" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="accordion-body">
                                        <pre class="language-java">
                                        <code>
                                            if (condition1) {
                                                // block of code to be executed if condition1 is true
                                              } else if (condition2) {
                                                // block of code to be executed if the condition1 is false and condition2 is true
                                              } else {
                                                // block of code to be executed if the condition1 is false and condition2 is false
                                              }  
                                    </code>
                                    </pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree7" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    Short Hand If...Else
                                </button>
                            </h2>
                            <div id="collapseThree7" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="accordion-body">
                                        <pre class="language-java">
                                        <code>
                                            variable = (condition) ? expressionTrue :  expressionFalse;
                                    </code>
                                    </pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree8" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    Switch statement
                                </button>
                            </h2>
                            <div id="collapseThree8" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="accordion-body">
                                        <pre class="language-java">
                                        <code>
                                            switch(expression) {
                                                case x:
                                                  // code block
                                                  break;
                                                case y:
                                                  // code block
                                                  break;
                                                default:
                                                  // code block
                                              }
                                    </code>
                                    </pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </li>

            <li>
                Loops<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom21" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom21"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Loops</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        Loops can execute a block of code as long as a specified condition is reached.
                        <br> Loops are handy because they save time, reduce errors, and they make code more readable.
                        <br><br> 1) Java While Loop <br> The while loop loops through a block of code as long as a
                        specified condition is true
                        <br><br> 2) The Do/While Loop <br> The do/while loop is a variant of the while loop. This loop
                        will execute the code block once, before checking if the condition is true, then it will repeat
                        the loop as long as the condition is
                        true.
                        <br><br> 3) Java For Loop <br> When you know exactly how many times you want to loop through a
                        block of code, use the for loop instead of a while loop
                    </div>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne10" aria-expanded="false" aria-controls="collapseOne">
                                Java While Loop
                            </button>
                        </h2>
                        <div id="collapseOne10" class="accordion-collapse collapse" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="accordion-body">
                                    <pre class="language-java">
                                        <code>
                                            while (condition) {
                                                // code block to be executed
                                              }     
                                    </code>
                                    </pre>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo11" aria-expanded="false" aria-controls="collapseTwo">
                                    Do/While Loop
                                </button>
                            </h2>
                            <div id="collapseTwo11" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <pre class="language-java">
                                    <code>
                                        do {
                                            // code block to be executed
                                          }
                                          while (condition);
                                </code>
                                </pre>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree4" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    Java For Loop
                                </button>
                            </h2>
                            <div id="collapseThree4" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="accordion-body">
                                        <pre class="language-java">
                                        <code>
                                            for (int i = 0; i < 5; i++) {
                                                

                                              }   
                                    </code>
                                    </pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree5" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    For-Each Loop
                                </button>
                            </h2>
                            <div id="collapseThree5" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="accordion-body">
                                        <pre class="language-java">
                                        <code>
                                            for (type variableName : arrayName) {
                                                // code block to be executed
                                              }  
                                    </code>
                                    </pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </li>
            <li>
                Java Break<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom22" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom22"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Java Break</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        You have already seen the break statement used in an earlier chapter of this tutorial. It was
                        used to "jump out" of a switch statement.
                        <br><br> The break statement can also be used to jump out of a loop.
                    </div>
                </div>
                <pre class="language-java">
                    <code>
                        break;
                    </code>
                    </pre>
            </li>
            <li>
                Java Continue<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom23" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom23"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Java Continue</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        The continue statement breaks one iteration (in the loop), if a specified condition occurs, and
                        continues with the next iteration in the loop.</div>
                </div>
                <pre class="language-java">
                    <code>
                        continue;
                    </code>
                    </pre>
            </li>
            <li>
                Java Arrays<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom24" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom24"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Java Arrays</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        Arrays are used to store multiple values in a single variable, instead of declaring separate
                        variables for each value.
                        <br><br> To declare an array, define the variable type with square brackets
                    </div>
                </div>
                <pre class="language-java">
<code>
    String[] cars = {"Volvo", "BMW", "Ford", "Mazda"};
</code>
</pre>

            </li>
            <li>
                Multidimensional Arrays<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom25" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom25"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Multidimensional Arrays</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        A multidimensional array is an array of arrays.
                        <br> Multidimensional arrays are useful when you want to store data as a tabular form, like a
                        table with rows and columns.
                    </div>
                </div>
                <pre class="language-java">
                    <code>
                        int[][] myNumbers = { {1, 2, 3, 4}, {5, 6, 7} };
                    </code>
                    </pre>

            </li>
            <li>
                Java Methods<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom27" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom27"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Java Methods</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        A method is a block of code which only runs when it is called.You can pass data, known as
                        parameters, into a method.
                        <br> Methods are used to perform certain actions, and they are also known as functions.
                        <br><br> Create a Method: <br> A method must be declared within a class. It is defined with the
                        name of the method, followed by parentheses (). Java provides some pre-defined methods, such as
                        System.out.println(), but you can also
                        create your own methods to perform certain actions
                        <br><br> Explained <br> 1) myMethod() is the name of the method<br> 2) static means that the
                        method belongs to the Main class and not an object of the Main class.
                        <br> 3) void means that this method does not have a return value. <br>

                    </div>
                </div>
                <pre class="language-java">
                    <code>
                        public class Main {
                            static void myMethod() {
                              // code to be executed
                            }
                          }
                    </code>
                    </pre>
            </li>
            <li>
                Parameters and Arguments<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom28" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom28"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Parameters and Arguments</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        Information can be passed to methods as parameter. Parameters act as variables inside the
                        method.
                        <br><br> Parameters are specified after the method name, inside the parentheses. You can add as
                        many parameters as you want, just separate them with a comma.
                        <br><br> When a parameter is passed to the method, it is called an argument.
                        <br><br><br> Multiple Parameters:
                        <br> Note that when you are working with multiple parameters, the method call must have the same
                        number of arguments as there are parameters, and the arguments must be passed in the same order.
                    </div>
                </div>
            </li>
            <li>
                Return Values<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom29" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start " tabindex="-1" id="offcanvasBottom29"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">Return Values</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        The void keyword, used in the examples above, indicates that the method should not return a
                        value. If you want the method to return a value, you can use a primitive data type (such as int,
                        char, etc.) instead of void, and use the return keyword inside
                        the method
                    </div>
                </div>

            </li>
            <li>
                Method Overloading<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom49" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start " tabindex="-1" id="offcanvasBottom49"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">Method Overloading</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        With method overloading, multiple methods can have the same name with different parameters <br>
                        <br> Note: Multiple methods can have the same name as long as the number and/or type of
                        parameters are different.
                    </div>
                </div>
                <pre class="language-java">
            <code>
int myMethod(int x)
float myMethod(float x)
double myMethod(double x, double y)
            </code>
        </pre>
            </li>


           
        </ol>
    </div>
    </div>
    <?php require_once 'Footer.php'?>