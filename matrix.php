<?php require_once 'Navbar.php'?>    
<!-- mid part -->
    <nav class="mt-5 p-2 headline" style="background:linear-gradient(to top right, #fb5475 0%, #f77b50 59%);">
        <div class="text-center " style="margin-top:5vh;"><img style="margin-right:2vh;"
                src="../../assets/img/java-icon.svg" alt="" /> Java cheatsheet
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
                        <img src="../../assets/img/java-icon.svg" alt="" style="height:100%;width:100%;" />
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
            <li>
                Java Syntax<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom2" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom2"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Java Syntax</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        The curly braces {} marks the beginning and the end of a block of code.
                        <br><br> System is a built-in Java class that contains useful members, such as out, which is
                        short for "output". The println() method, short for "print line", is used to print a value to
                        the screen (or a file).
                        <br><br> Don't worry too much about System, out and println(). Just know that you need them
                        together to print stuff to the screen.
                        <br><br> You should also note that each code statement must end with a semicolon (;).
                    </div>
                </div>
                <pre class="language-java">
                    <code> 
                        public class Main {
                            public static void main(String[] args) {
                              System.out.println("Hello World");
                            }
                          }
                        </code>
</pre>
            </li>
            <li>Convert .java file to .class byte code file
                <pre class="language-sh">
                    <code> 
                       javac  Main.java
                        </code>
</pre>
            </li>
            <li>Run .class byte code file
                <pre class="language-sh">
                    <code> 
                       java  Main
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


            <li>
                Java Scope<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom30" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom30"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Java Scope</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        In Java, variables are only accessible inside the region they are created. This is called scope.
                        <br><br> 1) Method Scope : <br> Variables declared directly inside a method are available
                        anywhere in the method following the line of code in which they were declared <br><br> 2) Block
                        Scope : <br> A block of code refers to all
                        of the code between curly braces {}. Variables declared inside blocks of code are only
                        accessible by the code between the curly braces, which follows the line in which the variable
                        was declared
                    </div>
                </div>
            </li>
            <li>
                Java Recursion<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom31" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom31"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Java Recursion</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        Recursion is the technique of making a function call itself. This technique provides a way to
                        break complicated problems down into simple problems which are easier to solve.
                        <br><br> Recursion may be a bit difficult to understand. The best way to figure out how it works
                        is to experiment with it.
                    </div>
                </div>
            </li>
            <li>
                Halting Condition<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom32" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom32"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Halting Condition</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        Just as loops can run into the problem of infinite looping, recursive functions can run into the
                        problem of infinite recursion. Infinite recursion is when the function never stops calling
                        itself. Every recursive function should have a halting condition,
                        which is the condition where the function stops calling itself.
                    </div>
                </div>
            </li>
            <li>
                Java OOP<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom33" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom33"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Java OOP</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        OOP stands for Object-Oriented Programming.
                        <br> Procedural programming is about writing procedures or methods that perform operations on
                        the data, while object-oriented programming is about creating objects that contain both data and
                        methods.
                        <br><br> Object-oriented programming has several advantages over procedural programming:
                        <br>
                        <ol type="i">
                            <li>OOP is faster and easier to execute</li>
                            <li>OOP provides a clear structure for the programs</li>
                            <li>OOP makes it possible to create full reusable applications with less code and shorter
                                development time</li>
                            <li>OOP helps to keep the Java code DRY "Don't Repeat Yourself", and makes the code easier
                                to maintain, modify and debug
                            </li>
                        </ol>
                        <br><br>OOP helps to keep the Java code DRY "Don't Repeat Yourself", and makes the code easier
                        to maintain, modify and debug
                    </div>
                </div>
            </li>
            <li>
                Java Classes/Objects<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom34" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom34"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Java Classes/Objects</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        Java is an object-oriented programming language.
                        <br><br> Everything in Java is associated with classes and objects, along with its attributes
                        and methods. For example: in real life, a car is an object. The car has attributes, such as
                        weight and color, and methods, such as drive
                        and brake.
                    </div>
                </div>
                <h3>Create a Class</h3>
                <pre class="language-java">
                    <code>
                      public class Main {
                        
                      }
                    </code>
                    </pre>
                <h3>Create a object</h3>
                <pre class="language-java">
                    <code>
                        Main myObj = new Main();
                    </code>
                    </pre>
            </li>
            <li>
                Static vs. Public<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom35" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom35"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Static vs. Public</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        You will often see Java programs that have either static or public attributes and methods.
                        <br><br> In the example above, we created a static method, which means that it can be accessed
                        without creating an object of the class, unlike public, which can only be accessed by objects
                    </div>
                </div>
                <h3>Static method</h3>
                <pre class="language-java">
                    <code>
                        // Static method
  static void myStaticMethod() {
    
  }
                    </code>
                    </pre>
                <h3>Public method</h3>
                <pre class="language-java">
                        <code>
                            // Public method
  public void myPublicMethod() {
    
  }
                        </code>
                        </pre>
                <h3>Main method</h3>
                <pre class="language-java">
                            <code>
                                // Main method
  public static void main(String[] args) {
   
  }
                            </code>
                            </pre>
            </li>
            <li>
                Java Constructors<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom36" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom36"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Java Constructors</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        A constructor in Java is a special method that is used to initialize objects. The constructor is
                        called when an object of a class is created. It can be used to set initial values for object
                        attributes <br><br> Note that the constructor
                        name must match the class name, and it cannot have a return type (like void).
                        <br><br> Also note that the constructor is called when the object is created.
                        <br><br> All classes have constructors by default: if you do not create a class constructor
                        yourself, Java creates one for you. However, then you are not able to set initial values for
                        object attributes.
                    </div>
                </div>
            </li>
            <li>
                Java Modifiers<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom37" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom37"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Java Modifiers
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        The text-align-last property specifies how to align the last line of a text. <br><br> We divide
                        modifiers into two groups:
                        <br> 1) Access Modifiers - controls the access level <br> 2) Non-Access Modifiers - do not
                        control access level, but provides other functionality <br><br> 1) Access Modifiers <br> For
                        classes, you can use either public or default
                        <br><br>
                        <table class="ws-table-all notranslate table-bordered">
                            <tbody>
                                <tr>
                                    <th style="width:20%">Modifier</th>
                                    <th style="width:80%">Description</th>
                                </tr>
                                <tr>
                                    <td><code class="w3-codespan">public</code></td>
                                    <td>The class is accessible by any other class</td>

                                </tr>
                                <tr>
                                    <td><em>default</em></td>
                                    <td>The class is only accessible by classes in the same package. This is used when
                                        you don't specify a modifier.
                                    </td>

                                </tr>
                            </tbody>
                        </table>
                        For attributes, methods and constructors, you can use the one of the following:
                        <table class="ws-table-all notranslate table-bordered">
                            <tbody>
                                <tr>
                                    <th style="width:20%">Modifier</th>
                                    <th style="width:80%">Description</th>
                                </tr>
                                <tr>
                                    <td><code class="w3-codespan">public</code></td>
                                    <td>The code is accessible for all classes</td>

                                </tr>
                                <tr>
                                    <td><code class="w3-codespan">private</code></td>
                                    <td>The code is only accessible within the declared class</td>

                                </tr>
                                <tr>
                                    <td><em>default</em></td>
                                    <td>The code is only accessible in the same package. This is used when you don't
                                        specify a modifier.</td>

                                </tr>
                                <tr>
                                    <td><code class="w3-codespan">protected</code></td>
                                    <td>The code is accessible in the same package and <strong>subclasses</strong></td>

                                </tr>
                            </tbody>
                        </table>
                        <br><br> Non-Access Modifiers For classes, you can use either final or abstract
                        <table class="ws-table-all notranslate table-bordered">
                            <tbody>
                                <tr>
                                    <th style="width:20%">Modifier</th>
                                    <th style="width:80%">Description</th>
                                </tr>
                                <tr>
                                    <td><code class="w3-codespan">final</code></td>
                                    <td>The class cannot be inherited by other classes </td>

                                </tr>
                                <tr>
                                    <td><code class="w3-codespan">abstract</code></td>
                                    <td>The class cannot be used to create objects </td>
                                </tr>
                            </tbody>
                        </table>
                        <br> For attributes and methods, you can use the one of the following:
                        <table class="ws-table-all notranslate table-bordered">
                            <tbody>
                                <tr>
                                    <th style="width:20%">Modifier</th>
                                    <th style="width:80%">Description</th>
                                </tr>
                                <tr>
                                    <td><code class="w3-codespan">final</code></td>
                                    <td>Attributes and methods cannot be overridden/modified</td>
                                </tr>
                                <tr>
                                    <td><code class="w3-codespan">static</code></td>
                                    <td>Attributes and methods belongs to the class, rather than an object</td>
                                </tr>
                                <tr>
                                    <td><code class="w3-codespan">abstract</code></td>
                                    <td>Can only be used in an abstract class, and can only be used on methods. The
                                        method does not have a body, for example
                                        <strong>abstract void run();</strong>. The body is provided by the subclass
                                        (inherited from)
                                    </td>
                                </tr>
                                <tr>
                                    <td><code class="w3-codespan">transient</code></td>
                                    <td>Attributes and methods are skipped when serializing the object containing them
                                    </td>
                                </tr>
                                <tr>
                                    <td><code class="w3-codespan">synchronized</code></td>
                                    <td>Methods can only be accessed by one thread at a time</td>
                                </tr>
                                <tr>
                                    <td><code class="w3-codespan">volatile</code></td>
                                    <td>The value of an attribute is not cached thread-locally, and is always read from
                                        the "main memory"</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne20" aria-expanded="false" aria-controls="collapseOne">
                                Final
                            </button>
                        </h2>
                        <div id="collapseOne20" class="accordion-collapse collapse" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-java">
                                    <code>
                                        final double PI = 3.14;
                                    </code>
                                    </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo20" aria-expanded="false" aria-controls="collapseTwo">
                                Static
                            </button>
                        </h2>
                        <div id="collapseTwo20" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-java">
                                    <code>
                                        static void myStaticMethod() {

                                        }
                                    </code>
                                    </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree20" aria-expanded="false" aria-controls="collapseThree">
                                Abstract
                            </button>
                        </h2>
                        <div id="collapseThree20" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-java">
                                    <code>
                                        public abstract void study(); // abstract method
                                        </code>
                                    </pre>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                Encapsulation<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom38" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom38"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Encapsulation</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        The meaning of Encapsulation, is to make sure that "sensitive" data is hidden from users. To
                        achieve this, you must:
                        <br> 1) declare class variables/attributes as private <br> 2) provide public get and set methods
                        to access and update the value of a private variable
                        <br><br> Why Encapsulation? <br> 1) Better control of class attributes and methods <br> 2) Class
                        attributes can be made read-only (if you only use the get method), or write-only (if you only
                        use the set method)<br> 3_ Flexible:
                        the programmer can change one part of the code without affecting other parts Increased security
                        of data<br><br><br> Get and Set <br> You learned from the previous chapter that private
                        variables can only be accessed within the same
                        class (an outside class has no access to it). However, it is possible to access them if we
                        provide public get and set methods.
                        <br> The get method returns the variable value, and the set method sets the value.
                    </div>
                </div>
                <pre class="language-java">
                            <code>
                                public class Person {
                                    private String name; // private = restricted access
                                  
                                    // Getter
                                    public String getName() {
                                      return name;
                                    }
                                  
                                    // Setter
                                    public void setName(String newName) {
                                      this.name = newName;
                                    }
                                  }
                            </code>
                            </pre>
            </li>
            <li>
                Java Packages & API<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom39" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom39"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Java Packages & API</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        A package in Java is used to group related classes. Think of it as a folder in a file directory.
                        We use packages to avoid name conflicts, and to write a better maintainable code. Packages are
                        divided into two categories: <br>
                        <br> 1) Built-in Packages (packages from the Java API) <br> 2) User-defined Packages (create
                        your own packages)<br><br><br> 1) Built-in Packages<br> The Java API is a library of prewritten
                        classes, that are free to use, included
                        in the Java Development Environment.
                        <br> The library contains components for managing input, database programming, and much much
                        more. The complete list can be found at Oracles website:
                        https://docs.oracle.com/javase/8/docs/api/.
                        <br> The library is divided into packages and classes. Meaning you can either import a single
                        class (along with its methods and attributes), or a whole package that contain all the classes
                        that belong to the specified package.
                    </div>
                </div>
                <pre class="language-java">
                            <code>
                                import package.name.Class;   // Import a single class
                                import package.name.*;   // Import the whole package
                            </code>
                            </pre>
            </li>
            <li>
                User-defined Packages<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom40" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom40"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">User-defined Packages
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        To create a package, use the package keyword
                    </div>
                </div>
                <pre class="language-java">
                            <code>
                                package mypack;
                            </code>
                            </pre>
            </li>
            <li>
                Java Inheritance<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom41" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom41"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Java Inheritance</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        In Java, it is possible to inherit attributes and methods from one class to another. We group
                        the "inheritance concept" into two categories:
                        <br><br> 1) subclass (child) - the class that inherits from another class <br> 2) superclass
                        (parent) - the class being inherited from To inherit from a class, use the extends keyword.<br>
                    </div>
                </div>
                <br>
                <img class="mx-auto d-block"
                    src="https://simplesnippets.tech/wp-content/uploads/2018/04/java-types-of-inheritance.jpg" alt=""
                    style="height: 40vw;">
                <br>
                <pre class="language-java">
                    <code>
                        class Vehicle {
                            
                          }
                          class Car extends Vehicle {

                          }
                    </code>
                    </pre>
            </li>
            <li>
                Java Polymorphism
                <button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom42"
                    aria-controls="offcanvasBottom">Read
                    more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom42"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Java Polymorphism</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        Polymorphism means "many forms", and it occurs when we have many classes that are related to
                        each other by inheritance.
                        <br><br> Like we specified in the previous chapter; Inheritance lets us inherit attributes and
                        methods from another class. Polymorphism uses those methods to perform different tasks. This
                        allows us to perform a single action in
                        different ways.
                    </div>
                </div>
            </li>
            <li>
                Java Inner Classes<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom43" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom43"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Java Inner Classes</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        In Java, it is also possible to nest classes (a class within a class). The purpose of nested
                        classes is to group classes that belong together, which makes your code more readable and
                        maintainable.
                        <br><br> To access the inner class, create an object of the outer class, and then create an
                        object of the inner class
                    </div>
                </div>
            </li>
            <li>
                Java Abstraction<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom44" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom44"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Java Abstraction
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        Abstract Classes and Methods: <br> Data abstraction is the process of hiding certain details and
                        showing only essential information to the user. Abstraction can be achieved with either abstract
                        classes or interfaces. <br><br> The
                        abstract keyword is a non-access modifier, used for classes and methods: <br> Abstract class: is
                        a restricted class that cannot be used to create objects (to access it, it must be inherited
                        from another class).
                        <br><br> Abstract method: can only be used in an abstract class, and it does not have a body.
                        The body is provided by the subclass (inherited from). <br>
                    </div>
                </div>
                <pre class="language-java">
                    <code>
                        abstract class Animal {
                            public abstract void animalSound();
                           
                             
                            }
                          }
                    </code>
                    </pre>
            </li>
            <li>
                Java Interface<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom46" aria-controls="offcanvasBottom">Read
                    more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom46"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Java Interface</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        Another way to achieve abstraction in Java, is with interfaces.
                        <br> An interface is a completely "abstract class" that is used to group related methods with
                        empty bodies
                        <br><br> To access the interface methods, the interface must be "implemented" (kinda like
                        inherited) by another class with the implements keyword (instead of extends). The body of the
                        interface method is provided by the "implement"
                        class <br> Notes on Interfaces:<br>
                        <ul>
                            <li>Like abstract classes, interfaces cannot be used to create objects</li>
                            <li>Interface methods do not have a body - the body is provided by the "implement" class
                            </li>
                            <li>On implementation of an interface, you must override all of its methods</li>
                            <li>Interface methods are by default abstract and public</li>
                            <li>Interface attributes are by default public, static and final</li>
                            <li>An interface cannot contain a constructor</li>
                        </ul>
                        <br><br> Why And When To Use Interfaces? <br> 1) To achieve security - hide certain details and
                        only show the important details of an object (interface).
                        <br><br> 2) Java does not support "multiple inheritance" (a class can only inherit from one
                        superclass). However, it can be achieved with interfaces, because the class can implement
                        multiple interfaces. Note: To implement multiple
                        interfaces, separate them with a comma
                    </div>
                </div>
            </li>
            <li>Java Enums<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom48" aria-controls="offcanvasBottom">Read
                    more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom48"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Java Enums</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        An enum is a special "class" that represents a group of constants (unchangeable variables, like
                        final variables).
                        <br><br> To create an enum, use the enum keyword (instead of class or interface), and separate
                        the constants with a comma. Note that they should be in uppercase letters
                        <br><br><br> Enum is short for "enumerations", which means "specifically listed".
                        <br><br><br> Difference between Enums and Classes <br> An enum can, just like a class, have
                        attributes and methods. The only difference is that enum constants are public, static and final
                        (unchangeable - cannot be overridden).
                        <br><br> An enum cannot be used to create objects, and it cannot extend other classes (but it
                        can implement interfaces).
                        <br><br> Why And When To Use Enums? <br> Use enums when you have values that you know aren't
                        going to change, like month days, days, colors, deck of cards, etc.
                    </div>
                </div>
                <pre class="language-java">
                                <code>
                                    enum Level {
                                        LOW,
                                        MEDIUM,
                                        HIGH
                                      } 
                                </code>
                                </pre>
            </li>
            <li>Java User Input<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom49" aria-controls="offcanvasBottom">Read
                    more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom49"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Java User Input</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        The Scanner class is used to get user input, and it is found in the java.util package.
                        <br><br> To use the Scanner class, create an object of the class and use any of the available
                        methods found in the Scanner class documentation. In our example, we will use the nextLine()
                        method, which is used to read Strings
                        <br><br> Input Types <br>
                        <table class="ws-table-all notranslate table-bordered">
                            <tbody>
                                <tr>
                                    <th style="width:26%">Method</th>
                                    <th style="width:74%">Description</th>
                                </tr>
                                <tr>
                                    <td><code class="w3-codespan">nextBoolean()</code></td>
                                    <td>Reads a <code class="w3-codespan">boolean</code> value from the user</td>

                                </tr>
                                <tr>
                                    <td><code class="w3-codespan">nextByte()</code></td>
                                    <td>Reads a <code class="w3-codespan">byte</code> value from the user</td>

                                </tr>
                                <tr>
                                    <td><code class="w3-codespan">nextDouble()</code></td>
                                    <td>Reads a <code class="w3-codespan">double</code> value from the user</td>

                                </tr>
                                <tr>
                                    <td><code class="w3-codespan">nextFloat()</code></td>
                                    <td>Reads a <code class="w3-codespan">float</code> value from the user</td>

                                </tr>
                                <tr>
                                    <td><code class="w3-codespan">nextInt()</code></td>
                                    <td>Reads a <code class="w3-codespan">int</code> value from the user</td>

                                </tr>
                                <tr>
                                    <td><code class="w3-codespan">nextLine()</code></td>
                                    <td>Reads a <code class="w3-codespan">String</code> value from the user</td>

                                </tr>
                                <tr>
                                    <td><code class="w3-codespan">nextLong()</code></td>
                                    <td>Reads a <code class="w3-codespan">long</code> value from the user</td>

                                </tr>
                                <tr>
                                    <td><code class="w3-codespan">nextShort()</code></td>
                                    <td>Reads a <code class="w3-codespan">short</code> value from the user</td>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <pre class="language-java">
                                <code>
                                    import java.util.Scanner;  // Import the Scanner class

                                    class Main {
                                      public static void main(String[] args) {
                                        Scanner myObj = new Scanner(System.in);  // Create a Scanner object

                                        String userName = myObj.nextLine();  // Read user input
                                    
                                      }
                                    } 
                                </code>
                                </pre>
            </li>
            <li>Java Date and Time<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom50" aria-controls="offcanvasBottom">Read
                    more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom50"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Java Date and Time</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        Java does not have a built-in Date class, but we can import the java.time package to work with
                        the date and time API.
                        <table class="ws-table-all notranslate">
                            <tbody>
                                <tr>
                                    <th style="width:25%">Class</th>
                                    <th style="width:75%">Description</th>
                                </tr>
                                <tr>
                                    <td><code class="w3-codespan">LocalDate</code></td>
                                    <td>Represents a date (year, month, day (yyyy-MM-dd))</td>

                                </tr>
                                <tr>
                                    <td><code class="w3-codespan">LocalTime</code></td>
                                    <td>Represents a time (hour, minute, second and nanoseconds (HH-mm-ss-ns))</td>

                                </tr>
                                <tr>
                                    <td><code class="w3-codespan">LocalDateTime</code></td>
                                    <td>Represents both a date and a time (yyyy-MM-dd-HH-mm-ss-ns)</td>

                                </tr>
                                <tr>
                                    <td><code class="w3-codespan">DateTimeFormatter</code></td>
                                    <td>Formatter for displaying and parsing date-time objects</td>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <h3>Display Current Date</h3>
                <pre class="language-java">
                                        <code>
                                            import java.time.LocalDate; // import the LocalDate class

                                            public class Main {
                                              public static void main(String[] args) {
                                                LocalDate myObj = LocalDate.now(); // Create a date object
                                                System.out.println(myObj); // Display the current date
                                              }
                                            }
                                        </code>
                                        </pre>
            </li>
            <li>Java ArrayList
                <button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom52"
                    aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom52"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Java ArrayList
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        The ArrayList class is a resizable array, which can be found in the java.util package. <br><br>
                        The difference between a built-in array and an ArrayList in Java, is that the size of an array
                        cannot be modified (if you want to add
                        or remove elements to/from an array, you have to create a new one). While elements can be added
                        and removed from an ArrayList whenever you want. The syntax is also slightly different
                    </div>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne30" aria-expanded="false" aria-controls="collapseOne">
                                Create an ArrayList object
                            </button>
                        </h2>
                        <div id="collapseOne30" class="accordion-collapse collapse" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-java">
                                            <code>
                                                import java.util.ArrayList; // import the ArrayList class
        
                                                ArrayList&lt;String&gt; cars = new ArrayList&lt;String&gt;(); // Create an ArrayList object
                                            </code>
                                            </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo30" aria-expanded="false" aria-controls="collapseTwo">
                                Add Items
                            </button>
                        </h2>
                        <div id="collapseTwo30" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-java">
                                            <code>
                                                cars.add("Volvo");
                                            </code>
                                            </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree30" aria-expanded="false" aria-controls="collapseThree">
                                Access an Item
                            </button>
                        </h2>
                        <div id="collapseThree30" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-java">
                                            <code>
                                                cars.get(0);
                                            </code>
                                            </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree31" aria-expanded="false" aria-controls="collapseThree">
                                Change an Item
                            </button>
                        </h2>
                        <div id="collapseThree31" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-java">
                                              <code>
                                                cars.set(0, "Opel");
                                              </code>
                                              </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree32" aria-expanded="false" aria-controls="collapseThree">
                                Remove an Item
                            </button>
                        </h2>
                        <div id="collapseThree32" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-java">
                                              <code>
                                                cars.remove(0);
                                              </code>
                                              </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree34" aria-expanded="false" aria-controls="collapseThree">
                                remove all the elements
                            </button>
                        </h2>
                        <div id="collapseThree34" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-java">
                                              <code>
                                                cars.clear();
                                              </code>
                                              </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree35" aria-expanded="false" aria-controls="collapseThree">
                                ArrayList Size
                            </button>
                        </h2>
                        <div id="collapseThree35" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-java">
                                              <code>
                                                cars.size();
                                              </code>
                                              </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree36" aria-expanded="false" aria-controls="collapseThree">
                                Loop Through an ArrayList
                            </button>
                        </h2>
                        <div id="collapseThree36" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-java">
                                              <code>
                                                for (int i = 0; i < cars.size(); i++) {
                                                    System.out.println(cars.get(i));
                                                  }
                                              </code>
                                              </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree37" aria-expanded="false" aria-controls="collapseThree">
                                Sort an ArrayList
                            </button>
                        </h2>
                        <div id="collapseThree37" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-java">
                                              <code>
                                                Collections.sort(cars);  // Sort cars
                                              </code>
                                              </pre>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>Java LinkedList<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom53" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom53"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Java LinkedList</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        ArrayList vs. LinkedList The LinkedList class is a collection which can contain many objects of
                        the same type, just like the ArrayList.
                        <br><br> The LinkedList class has all of the same methods as the ArrayList class because they
                        both implement the List interface. This means that you can add items, change items, remove items
                        and clear the list in the same way.
                        <br><br> However, while the ArrayList class and the LinkedList class can be used in the same
                        way, they are built very differently.
                        <br><br> How the ArrayList works The ArrayList class has a regular array inside it. When an
                        element is added, it is placed into the array. If the array is not big enough, a new, larger
                        array is created to replace the old one and
                        the old one is removed.
                        <br><br> How the LinkedList works The LinkedList stores its items in "containers." The list has
                        a link to the first container and each container has a link to the next container in the list.
                        To add an element to the list, the element
                        is placed into a new container and that container is linked to one of the other containers in
                        the list.
                        <br><br> When To Use Use an ArrayList for storing and accessing data, and LinkedList to
                        manipulate data.
                        <br><br> LinkedList Methods <br><br>
                        <table class="ws-table-all notranslate">
                            <tbody>
                                <tr>
                                    <th style="width:35%">Method</th>
                                    <th style="width:60%">Description</th>
                                </tr>
                                <tr>
                                    <td>addFirst()</td>
                                    <td>Adds an item to the beginning of the list.</td>

                                </tr>
                                <tr>
                                    <td>addLast()</td>
                                    <td>Add an item to the end of the list</td>

                                </tr>

                                <tr>
                                    <td>removeFirst()</td>
                                    <td>Remove an item from the beginning of the list.</td>

                                </tr>

                                <tr>
                                    <td>removeLast()</td>
                                    <td>Remove an item from the end of the list</td>

                                </tr>

                                <tr>
                                    <td>getFirst()</td>
                                    <td>Get the item at the beginning of the list</td>

                                </tr>

                                <tr>
                                    <td>getLast()</td>
                                    <td>Get the item at the end of the list</td>

                                </tr>

                            </tbody>
                        </table>

                    </div>
                </div>

                <pre class="language-java">
                                            <code>
                                                // Import the LinkedList class
                                                import java.util.LinkedList;
                                                
                                                public class Main {
                                                  public static void main(String[] args) {
                                                    LinkedList<String> cars = new LinkedList<String>();
                                                   
                                                  }
                                                }
                                            </code>
                                            </pre>

            </li>
            </li>
            <li>Java HashMap<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom54" aria-controls="offcanvasBottom">Read
                    more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom54"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Java HashMap</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        In the ArrayList chapter, you learned that Arrays store items as an ordered collection, and you
                        have to access them with an index number (int type). A HashMap however, store items in
                        "key/value" pairs, and you can access them by an index of another type
                        (e.g. a String).
                        <br><br> One object is used as a key (index) to another object (value). It can store different
                        types: String keys and Integer values, or the same type, like: String keys and String values
                    </div>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne35" aria-expanded="false" aria-controls="collapseOne">
                                Create a HashMap object
                            </button>
                        </h2>
                        <div id="collapseOne35" class="accordion-collapse collapse" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-java">
                                            <code>
                                                import java.util.HashMap; // import the HashMap class

HashMap&lt;String, String&gt; capitalCities = new HashMap&lt;String, String&gt;();
                                            </code>
                                            </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo455" aria-expanded="false" aria-controls="collapseTwo">
                                Add Items
                            </button>
                        </h2>
                        <div id="collapseTwo455" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-java">
                                            <code>
                                                capitalCities.put("England", "London");
                                            </code>
                                            </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree425" aria-expanded="false" aria-controls="collapseThree">
                                Access an Item
                            </button>
                        </h2>
                        <div id="collapseThree425" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-java">
                                            <code>
                                                capitalCities.get("England");
                                            </code>
                                            </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree45" aria-expanded="false" aria-controls="collapseThree">
                                Remove an Item
                            </button>
                        </h2>
                        <div id="collapseThree45" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-java">
                                              <code>
                                                capitalCities.remove("England");
                                              </code>
                                              </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree47" aria-expanded="false" aria-controls="collapseThree">
                                remove all the elements
                            </button>
                        </h2>
                        <div id="collapseThree47" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-java">
                                              <code>
                                                capitalCities.clear();
                                              </code>
                                              </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree49" aria-expanded="false" aria-controls="collapseThree">
                                HashMap Size
                            </button>
                        </h2>
                        <div id="collapseThree49" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-java">
                                              <code>
                                                capitalCities.size();
                                              </code>
                                              </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree48" aria-expanded="false" aria-controls="collapseThree">
                                Loop Through an HashMap
                            </button>
                        </h2>
                        <div id="collapseThree48" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-java">
                                              <code>
                                                // Print keys
                                                for (String i : capitalCities.keySet()) {
                                                  System.out.println(i);
                                                }
                                              </code>
                                              </pre>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>Java HashSet<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom55" aria-controls="offcanvasBottom">Read
                    more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom55"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Java HashSet</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        A HashSet is a collection of items where every item is unique, and it is found in the java.util
                        package
                    </div>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne355" aria-expanded="false" aria-controls="collapseOne">
                                Create a Hashset object
                            </button>
                        </h2>
                        <div id="collapseOne355" class="accordion-collapse collapse" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-java">
                                            <code>
                                                import java.util.HashSet; // Import the HashSet class

HashSet&lt;String&gt;  cars = new HashSet&lt;String&gt;();
                                            </code>
                                            </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo4555" aria-expanded="false" aria-controls="collapseTwo">
                                Add Items
                            </button>
                        </h2>
                        <div id="collapseTwo4555" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-java">
                                            <code>                                        
    cars.add("Volvo");
   
                                            </code>
                                            </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree4255" aria-expanded="false" aria-controls="collapseThree">
                                Check If an Item Exists
                            </button>
                        </h2>
                        <div id="collapseThree4255" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-java">
                                            <code>
                                                cars.contains("Mazda");
                                            </code>
                                            </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree458" aria-expanded="false" aria-controls="collapseThree">
                                Remove an Item
                            </button>
                        </h2>
                        <div id="collapseThree458" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-java">
                                              <code>
                                                cars.remove("Volvo");
                                              </code>
                                              </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree475" aria-expanded="false" aria-controls="collapseThree">
                                remove all the elements
                            </button>
                        </h2>
                        <div id="collapseThree475" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-java">
                                              <code>
                                                capitalCities.clear();
                                              </code>
                                              </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree495" aria-expanded="false" aria-controls="collapseThree">
                                HashSet Size
                            </button>
                        </h2>
                        <div id="collapseThree495" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-java">
                                              <code>
                                                cars.size();
                                              </code>
                                              </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree489" aria-expanded="false" aria-controls="collapseThree">
                                Loop Through a HashSet
                            </button>
                        </h2>
                        <div id="collapseThree489" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-java">
                                              <code>
                                                for (String i : cars) {
                                                    System.out.println(i);
                                                  }
                                              </code>
                                              </pre>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>Java Iterator<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom56" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom56"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Java Iterator</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        An Iterator is an object that can be used to loop through collections, like ArrayList and
                        HashSet. It is called an "iterator" because "iterating" is the technical term for looping.
                        <br><br> To use an Iterator, you must import it from the java.util package.
                        <br><br><br>Note: Trying to remove items using a for loop or a for-each loop would not work
                        correctly because the collection is changing size at the same time that the code is trying to
                        loop.

                    </div>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne358" aria-expanded="false" aria-controls="collapseOne">
                                Getting an Iterator
                            </button>
                        </h2>
                        <div id="collapseOne358" class="accordion-collapse collapse" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-java">
                                            <code>
                                                import java.util.Iterator;
                                                // Get the iterator
    Iterator&lt;String&gt; it = cars.iterator();

    // Print the first item
    System.out.println(it.next());
                                            </code>
                                            </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo4558" aria-expanded="false" aria-controls="collapseTwo">
                                Looping Through a Collection
                            </button>
                        </h2>
                        <div id="collapseTwo4558" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-java">
                                            <code>
                                                while(it.hasNext()) {
                                                   
                                                    
                                                  }
                                            </code>
                                            </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree4258" aria-expanded="false" aria-controls="collapseThree">
                                remove an Item
                            </button>
                        </h2>
                        <div id="collapseThree4258" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-java">
                                            <code>
                                                while(it.hasNext()) {
                                                    Integer i = it.next();
                                                    if(i < 10) {
                                                      it.remove();
                                                    }
                                                  }
                                            </code>
                                            </pre>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>Java Wrapper Classes<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom57" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom57"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Java Wrapper Classes</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        Wrapper classes provide a way to use primitive data types (int, boolean, etc..) as objects.
                        <br><br> The table below shows the primitive type and the equivalent wrapper class:
                        <table class="ws-table-all notranslate table-bordered">
                            <tbody>
                                <tr>
                                    <th style="width:50%">Primitive Data Type</th>
                                    <th>Wrapper Class</th>
                                </tr>
                                <tr>
                                    <td>byte</td>
                                    <td>Byte</td>
                                </tr>
                                <tr>
                                    <td>short</td>
                                    <td>Short</td>
                                </tr>
                                <tr>
                                    <td>int</td>
                                    <td>Integer</td>
                                </tr>
                                <tr>
                                    <td>long</td>
                                    <td>Long</td>
                                </tr>
                                <tr>
                                    <td>float</td>
                                    <td>Float</td>
                                </tr>
                                <tr>
                                    <td>double</td>
                                    <td>Double</td>
                                </tr>
                                <tr>
                                    <td>boolean</td>
                                    <td>Boolean</td>
                                </tr>
                                <tr>
                                    <td>char</td>
                                    <td>Character</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>

            </li>
            <li>Java Exceptions<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom58" aria-controls="offcanvasBottom">Read
                    more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom58"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Java Exceptions</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        When executing Java code, different errors can occur: coding errors made by the programmer,
                        errors due to wrong input, or other unforeseeable things.
                        <br><br> When an error occurs, Java will normally stop and generate an error message. The
                        technical term for this is: Java will throw an exception (throw an error).
                        <br><br><br> Java try and catch <br> The try statement allows you to define a block of code to
                        be tested for errors while it is being executed.
                        <br><br> The catch statement allows you to define a block of code to be executed, if an error
                        occurs in the try block.
                        <br><br><br> Finally
                        <br> The finally statement lets you execute code, after try...catch, regardless of the result
                    </div>
                </div>
                <pre class="language-java">
                        <code>
                            try {
                                //  Block of code to try
                              }
                              catch(Exception e) {
                                //  Block of code to handle errors
                              }finally {
                                // After 'try catch' is finished 
                              }
                        </code>
                        </pre>
            </li>
            <li>The throw keyword<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom59" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom59"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">The throw keyword</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        The throw statement allows you to create a custom error.
                        <br><br> The throw statement is used together with an exception type. There are many exception
                        types available in Java: ArithmeticException, FileNotFoundException,
                        ArrayIndexOutOfBoundsException, SecurityException, etc
                    </div>
                </div>
                <pre class="language-java">
                    <code>
                        throw new ArithmeticException("Access denied - You must be at least 18 years old.");
                    </code>
                    </pre>

            </li>
            <li>Java Regular Expressions<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom69" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom69"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Java Regular Expressions</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        A regular expression is a sequence of characters that forms a search pattern. When you search
                        for data in a text, you can use this search pattern to describe what you are searching for.
                        <br> <br> A regular expression can be a single character, or a more complicated pattern.
                        <br> <br> Regular expressions can be used to perform all types of text search and text replace
                        operations.
                        <br> <br> Java does not have a built-in Regular Expression class, but we can import the
                        java.util.regex package to work with regular expressions. The package includes the following
                        classes:
                        <br> <br><br> Pattern Class - Defines a pattern (to be used in a search)<br> Matcher Class -
                        Used to search for the pattern<br> PatternSyntaxException Class - Indicates syntax error in a
                        regular expression pattern
                        <br> <br> <br> Flags
                        <br> Flags in the compile() method change how the search is performed. Here are a few of them:
                        <br> <br> Pattern.CASE_INSENSITIVE - The case of letters will be ignored when performing a
                        search.<br> Pattern.LITERAL - Special characters in the pattern will not have any special
                        meaning and will be treated as ordinary characters
                        when performing a search.<br> Pattern.UNICODE_CASE - Use it together with the CASE_INSENSITIVE
                        flag to also ignore the case of letters outside of the English alphabet<br> <br> <br> Regular
                        Expression Patterns<br> The first parameter
                        of the Pattern.compile() method is the pattern. It describes what is being searched for.
                        <br> Brackets are used to find a range of character<br>
                        <table class="ws-table-all notranslate">
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
                                    <td>Find one character NOT between the brackets</td>
                                </tr>
                                <tr>
                                    <td>[0-9]</td>
                                    <td>Find one character from the range 0 to 9</td>
                                </tr>
                            </tbody>
                        </table>
                        Metacharacters Metacharacters are characters with a special meaning:
                        <table class="ws-table-all notranslate">
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
                                    <td>Find a match at the beginning of a word like this: \bWORD, or at the end of a
                                        word like this: WORD\b</td>
                                </tr>
                                <tr>
                                    <td>\uxxxx</td>
                                    <td>Find the Unicode character specified by the hexadecimal number xxxx</td>
                                </tr>
                            </tbody>
                        </table>
                        Quantifiers Quantifiers define quantities:
                        <table class="ws-table-all notranslate">
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
                <pre class="language-java">
                <code>
                    import java.util.regex.Matcher;
import java.util.regex.Pattern;

public class Main {
  public static void main(String[] args) {
    Pattern pattern = Pattern.compile("w3schools", Pattern.CASE_INSENSITIVE);
    Matcher matcher = pattern.matcher("Visit W3Schools!");
    boolean matchFound = matcher.find();
    if(matchFound) {
      System.out.println("Match found");
    } else {
      System.out.println("Match not found");
    }
  }
}
                </code>
                </pre>

            </li>



            <li>Java Threads<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom64" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom64"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Java Threads</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        Threads allows a program to operate more efficiently by doing multiple things at the same time.
                        <br><br> Threads can be used to perform complicated tasks in the background without interrupting
                        the main program.
                        <br><br>

                    </div>
                </div>
                <h3>created by extending the Thread class</h3>
                <pre class="language-java">
            <code>
                public class Main extends Thread {
                    public void run() {
                      System.out.println("This code is running in a thread");
                    }
                  }
            </code>
            </pre>
                <h3>create a thread is to implement the Runnable interface</h3>
                <pre class="language-java">
                <code>
                    public class Main implements Runnable {
                        public void run() {
                          System.out.println("This code is running in a thread");
                        }
                      }
                </code>
                </pre>
                <h3>Running Threads</h3>
                <pre class="language-java">
                <code>
                    Main thread = new Main();
                    thread.start();
                </code>
                </pre>
            </li>






            <li>Java Files<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom56" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom56"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Java Files</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        File handling is an important part of any application.
                        <br><br> Java has several methods for creating, reading, updating, and deleting
                        files.<br><br><br> Java File Handling: <br> The File class from the java.io package, allows us
                        to work with files.
                        <br><br> To use the File class, create an object of the class, and specify the filename or
                        directory name <br><br> The File class has many useful methods for creating and getting
                        information about files. For example:
                        <table class="ws-table-all notranslate">
                            <tbody>
                                <tr>
                                    <th style="width:25%">Method</th>
                                    <th style="width:15%">Type</th>
                                    <th style="width:60%">Description</th>
                                </tr>
                                <tr>
                                    <td><code class="w3-codespan">canRead()</code></td>
                                    <td>Boolean</td>
                                    <td>Tests whether the file is readable or not</td>

                                </tr>
                                <tr>
                                    <td><code class="w3-codespan">canWrite()</code></td>
                                    <td>Boolean</td>
                                    <td>Tests whether the file is writable or not</td>

                                </tr>
                                <tr>
                                    <td><code class="w3-codespan">createNewFile()</code></td>
                                    <td>Boolean</td>
                                    <td>Creates an empty file</td>

                                </tr>
                                <tr>
                                    <td><code class="w3-codespan">delete()</code></td>
                                    <td>Boolean</td>
                                    <td>Deletes a file</td>

                                </tr>
                                <tr>
                                    <td><code class="w3-codespan">exists()</code></td>
                                    <td>Boolean</td>
                                    <td>Tests whether the file exists</td>

                                </tr>
                                <tr>
                                    <td><code class="w3-codespan">getName()</code></td>
                                    <td>String</td>
                                    <td>Returns the name of the file</td>

                                </tr>
                                <tr>
                                    <td><code class="w3-codespan">getAbsolutePath()</code></td>
                                    <td>String</td>
                                    <td>Returns the absolute pathname of the file</td>

                                </tr>
                                <tr>
                                    <td><code class="w3-codespan">length()</code></td>
                                    <td>Long</td>
                                    <td>Returns the size of the file in bytes</td>

                                </tr>
                                <tr>
                                    <td><code class="w3-codespan">list()</code></td>
                                    <td>String[]</td>
                                    <td>Returns an array of the files in the directory</td>

                                </tr>
                                <tr>
                                    <td><code class="w3-codespan">mkdir()</code></td>
                                    <td>Boolean</td>
                                    <td>Creates a directory</td>

                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree42589" aria-expanded="false"
                                aria-controls="collapseThree">
                                Java File Handling
                            </button>
                        </h2>
                        <div id="collapseThree42589" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-java">
                                <code>
                                    import java.io.File;  // Import the File class

                                    File myObj = new File("filename.txt"); // Specify the filename
                                </code>
                                </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne3586" aria-expanded="false" aria-controls="collapseOne">
                                Create a File
                            </button>
                        </h2>
                        <div id="collapseOne3586" class="accordion-collapse collapse" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-java">
                                <code>
                                    import java.io.File;  // Import the File class
                                    import java.io.IOException;  // Import the IOException class to handle errors
                                    
                                    public class CreateFile {
                                      public static void main(String[] args) {
                                        try {
                                          File myObj = new File("filename.txt");
                                          if (myObj.createNewFile()) {
                                            System.out.println("File created: " + myObj.getName());
                                          } else {
                                            System.out.println("File already exists.");
                                          }
                                        } catch (IOException e) {
                                          System.out.println("An error occurred.");
                                          e.printStackTrace();
                                        }
                                      }
                                    }
                                </code>
                                </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo45583" aria-expanded="false" aria-controls="collapseTwo">
                                Write To a File
                            </button>
                        </h2>
                        <div id="collapseTwo45583" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-java">
                                <code>
                                    import java.io.FileWriter;   // Import the FileWriter class
                                    import java.io.IOException;  // Import the IOException class to handle errors
                                    
                                    public class WriteToFile {
                                      public static void main(String[] args) {
                                        try {
                                          FileWriter myWriter = new FileWriter("filename.txt");
                                          myWriter.write("Files in Java might be tricky, but it is fun enough!");
                                          myWriter.close();
                                          System.out.println("Successfully wrote to the file.");
                                        } catch (IOException e) {
                                          System.out.println("An error occurred.");
                                          e.printStackTrace();
                                        }
                                      }
                                    }
                                </code>
                                </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo45589" aria-expanded="false" aria-controls="collapseTwo">
                                Read a File
                            </button>
                        </h2>
                        <div id="collapseTwo45589" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-java">
                                <code>
                                    import java.io.File;  // Import the File class
import java.io.FileNotFoundException;  // Import this class to handle errors
import java.util.Scanner; // Import the Scanner class to read text files

public class ReadFile {
  public static void main(String[] args) {
    try {
      File myObj = new File("filename.txt");
      Scanner myReader = new Scanner(myObj);
      while (myReader.hasNextLine()) {
        String data = myReader.nextLine();
        System.out.println(data);
      }
      myReader.close();
    } catch (FileNotFoundException e) {
      System.out.println("An error occurred.");
      e.printStackTrace();
    }
  }
}              </code>
                                </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo455835" aria-expanded="false" aria-controls="collapseTwo">
                                Get File Information
                            </button>
                        </h2>
                        <div id="collapseTwo455835" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-java">
                                <code>
                                    import java.io.File;  // Import the File class

                                    public class GetFileInfo { 
                                      public static void main(String[] args) {
                                        File myObj = new File("filename.txt");
                                        if (myObj.exists()) {
                                          System.out.println("File name: " + myObj.getName());
                                          System.out.println("Absolute path: " + myObj.getAbsolutePath());
                                          System.out.println("Writeable: " + myObj.canWrite());
                                          System.out.println("Readable " + myObj.canRead());
                                          System.out.println("File size in bytes " + myObj.length());
                                        } else {
                                          System.out.println("The file does not exist.");
                                        }
                                      }
                                    }
                                </code>
                                </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo4553" aria-expanded="false" aria-controls="collapseTwo">
                                Delete a File
                            </button>
                        </h2>
                        <div id="collapseTwo4553" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-java">
                                <code>
                                    import java.io.File;  // Import the File class

                                    public class DeleteFile {
                                      public static void main(String[] args) { 
                                        File myObj = new File("filename.txt"); 
                                        if (myObj.delete()) { 
                                          System.out.println("Deleted the file: " + myObj.getName());
                                        } else {
                                          System.out.println("Failed to delete the file.");
                                        } 
                                      } 
                                    }
                                </code>
                                </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo45530" aria-expanded="false" aria-controls="collapseTwo">
                                Delete a Folder
                            </button>
                        </h2>
                        <div id="collapseTwo45530" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-java">
                                <code>
                                    import java.io.File; 

                                    public class DeleteFolder {
                                      public static void main(String[] args) { 
                                        File myObj = new File("C:\\Users\\MyName\\Test"); 
                                        if (myObj.delete()) { 
                                          System.out.println("Deleted the folder: " + myObj.getName());
                                        } else {
                                          System.out.println("Failed to delete the folder.");
                                        } 
                                      } 
                                    }
                                </code>
                                </pre>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>Java Reserved Keywords<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom6093" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom6093"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Java Reserved Keywords</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        <table class="ws-table-all notranslate table-bordered">
                            <tbody>
                                <tr>
                                    <th style="width:20%">Keyword</th>
                                    <th>Description</th>
                                </tr>
                                <tr>
                                    <td><a href="ref_keyword_abstract.asp">abstract</a></td>
                                    <td>A non-access modifier. Used for classes and methods: An abstract class cannot be
                                        used to create objects (to access it, it must be inherited from another class).
                                        An abstract method can only be used in an abstract class,
                                        and it does not have a body. The body is provided by the subclass (inherited
                                        from)</td>
                                </tr>
                                <tr>
                                    <td>assert</td>
                                    <td>For debugging</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_keyword_boolean.asp">boolean</a></td>
                                    <td>A data type that can only store true and false values</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_keyword_break.asp">break</a></td>
                                    <td>Breaks out of a loop or a switch block</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_keyword_byte.asp">byte</a></td>
                                    <td>A data type that can store whole numbers from -128 and 127</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_keyword_case.asp">case</a></td>
                                    <td>Marks a block of code in switch statements</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_keyword_catch.asp">catch</a></td>
                                    <td>Catches exceptions generated by try statements</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_keyword_char.asp">char</a></td>
                                    <td>A data type that is used to store a single character</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_keyword_class.asp">class</a></td>
                                    <td>Defines a class</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_keyword_break.asp">continue</a></td>
                                    <td>Continues to the next iteration of a loop</td>
                                </tr>
                                <tr>
                                    <td>const</td>
                                    <td>Defines a constant. <span class="deprecated">Not in use</span> - use <a
                                            href="ref_keyword_final.asp">final</a> instead</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_keyword_default.asp">default</a></td>
                                    <td>Specifies the default block of code in a switch statement</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_keyword_do.asp">do</a></td>
                                    <td>Used together with while to create a do-while loop</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_keyword_double.asp">double</a></td>
                                    <td>A data type that can store whole numbers from 1.7e−308 to 1.7e+308</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_keyword_else.asp">else</a></td>
                                    <td>Used in conditional statements</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_keyword_enum.asp">enum</a></td>
                                    <td>Declares an enumerated (unchangeable) type</td>
                                </tr>
                                <tr>
                                    <td>exports</td>
                                    <td>Exports a package with a module. New in Java 9</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_keyword_extends.asp">extends</a></td>
                                    <td>Extends a class (indicates that a class is inherited from another class)</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_keyword_final.asp">final</a></td>
                                    <td>A non-access modifier used for classes, attributes and methods, which makes them
                                        non-changeable (impossible to inherit or override)</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_keyword_finally.asp">finally</a></td>
                                    <td>Used with exceptions, a block of code that will be executed no matter if there
                                        is an exception or not</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_keyword_float.asp">float</a></td>
                                    <td>A data type that can store whole numbers from 3.4e−038 to 3.4e+038</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_keyword_for.asp">for</a></td>
                                    <td>Create a for loop</td>
                                </tr>
                                <tr>
                                    <td>goto</td>
                                    <td><span class="deprecated">Not in use, and has no function</span></td>
                                </tr>
                                <tr>
                                    <td><a href="ref_keyword_if.asp">if</a></td>
                                    <td>Makes a conditional statement</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_keyword_implements.asp">implements</a></td>
                                    <td>Implements an interface</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_keyword_import.asp">import</a></td>
                                    <td>Used to import a package, class or interface</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_keyword_instanceof.asp">instanceof</a></td>
                                    <td>Checks whether an object is an instance of a specific class or an interface</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_keyword_int.asp">int</a></td>
                                    <td>A data type that can store whole numbers from -2147483648 to 2147483647</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_keyword_interface.asp">interface</a></td>
                                    <td>Used to declare a special type of class that only contains abstract methods</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_keyword_long.asp">long</a></td>
                                    <td>A data type that can store whole numbers from -9223372036854775808 to
                                        9223372036854775808</td>
                                </tr>
                                <tr>
                                    <td>module</td>
                                    <td>Declares a module. New in Java 9</td>
                                </tr>
                                <tr>
                                    <td>native</td>
                                    <td>Specifies that a method is not implemented in the same Java source file (but in
                                        another language)</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_keyword_new.asp">new</a></td>
                                    <td>Creates new objects</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_keyword_package.asp">package</a></td>
                                    <td>Declares a package</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_keyword_private.asp">private</a></td>
                                    <td>An access modifier used for attributes, methods and constructors, making them
                                        only accessible within the declared class</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_keyword_protected.asp">protected</a></td>
                                    <td>An access modifier used for attributes, methods and constructors, making them
                                        accessible in the same package and subclasses</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_keyword_public.asp">public</a></td>
                                    <td>An access modifier used for classes, attributes, methods and constructors,
                                        making them accessible by any other class</td>
                                </tr>
                                <tr>
                                    <td>requires</td>
                                    <td>Specifies required libraries inside a module. New in Java 9</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_keyword_return.asp">return</a></td>
                                    <td>Finished the execution of a method, and can be used to return a value from a
                                        method</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_keyword_short.asp">short</a></td>
                                    <td>A data type that can store whole numbers from -32768 to 32767</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_keyword_static.asp">static</a></td>
                                    <td>A non-access modifier used for methods and attributes. Static methods/attributes
                                        can be accessed without creating an object of a class</td>
                                </tr>
                                <tr>
                                    <td>strictfp</td>
                                    <td>Restrict the precision and rounding of floating point calculations</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_keyword_super.asp">super</a></td>
                                    <td>Refers to superclass (parent) objects</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_keyword_switch.asp">switch</a></td>
                                    <td>Selects one of many code blocks to be executed</td>
                                </tr>
                                <tr>
                                    <td>synchronized</td>
                                    <td>A non-access modifier, which specifies that methods can only be accessed by one
                                        thread at a time</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_keyword_this.asp">this</a></td>
                                    <td>Refers to the current object in a method or constructor</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_keyword_throw.asp">throw</a></td>
                                    <td>Creates a custom error</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_keyword_throws.asp">throws</a></td>
                                    <td>Indicates what exceptions may be thrown by a method</td>
                                </tr>
                                <tr>
                                    <td>transient</td>
                                    <td>A non-accesss modifier, which specifies that an attribute is not part of an
                                        object's persistent state</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_keyword_try.asp">try</a></td>
                                    <td>Creates a try...catch statement</td>
                                </tr>
                                <tr>
                                    <td>var</td>
                                    <td>Declares a variable. New in Java 10</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_keyword_void.asp">void</a></td>
                                    <td>Specifies that a method should not have a return value</td>
                                </tr>
                                <tr>
                                    <td>volatile</td>
                                    <td>Indicates that an attribute is not cached thread-locally, and is always read
                                        from the "main memory"</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_keyword_while.asp">while</a></td>
                                    <td>Creates a while loop</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </li>

            <li>Java String Methods<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom7093" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom7093"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Java String Methods</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        <table class="ws-table-all notranslate table-bordered" style="margin:0">
                            <tbody>
                                <tr>
                                    <th style="width:22%">Method</th>
                                    <th style="width:62%">Description</th>
                                    <th style="width:16%">Return Type</th>
                                </tr>
                                <tr>
                                    <td><a href="ref_string_charat.asp">charAt()</a></td>
                                    <td>Returns the character at the specified index (position)</td>
                                    <td>char</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_string_codepointat.asp">codePointAt()</a></td>
                                    <td>Returns the Unicode of the character at the specified index</td>
                                    <td>int</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_string_codepointbefore.asp">codePointBefore()</a></td>
                                    <td>Returns the Unicode of the character before the specified index</td>
                                    <td>int</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_string_codepointcount.asp">codePointCount()</a></td>
                                    <td>Returns the number of Unicode values found in a string.</td>
                                    <td>int</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_string_compareto.asp">compareTo()</a></td>
                                    <td>Compares two strings lexicographically</td>
                                    <td>int</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_string_comparetoignorecase.asp">compareToIgnoreCase()</a></td>
                                    <td>Compares two strings lexicographically, ignoring case differences</td>
                                    <td>int</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_string_concat.asp">concat()</a></td>
                                    <td>Appends a string to the end of another string</td>
                                    <td>String</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_string_contains.asp">contains()</a></td>
                                    <td>Checks whether a string contains a sequence of characters</td>
                                    <td>boolean</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_string_contentequals.asp">contentEquals()</a></td>
                                    <td>Checks whether a string contains the exact same sequence of characters of the
                                        specified CharSequence or StringBuffer</td>
                                    <td>boolean</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_string_copyvalueof.asp">copyValueOf()</a></td>
                                    <td>Returns a String that represents the characters of the character array</td>
                                    <td>String</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_string_endswith.asp">endsWith()</a></td>
                                    <td>Checks whether a string ends with the specified character(s)</td>
                                    <td>boolean</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_string_equals.asp">equals()</a></td>
                                    <td>Compares two strings. Returns true if the strings are equal, and false if not
                                    </td>
                                    <td>boolean</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_string_equalsignorecase.asp">equalsIgnoreCase()</a></td>
                                    <td>Compares two strings, ignoring case considerations</td>
                                    <td>boolean</td>
                                </tr>
                                <tr>
                                    <td>format()</td>
                                    <td>Returns a formatted string using the specified locale, format string, and
                                        arguments</td>
                                    <td>String</td>
                                </tr>
                                <tr>
                                    <td>getBytes()</td>
                                    <td>Encodes this String into a sequence of bytes using the named charset, storing
                                        the result into a new byte array</td>
                                    <td>byte[]</td>
                                </tr>
                                <tr>
                                    <td>getChars()</td>
                                    <td>Copies characters from a string to an array of chars</td>
                                    <td>void</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_string_hashcode.asp">hashCode()</a></td>
                                    <td>Returns the hash code of a string</td>
                                    <td>int</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_string_indexof.asp">indexOf()</a></td>
                                    <td>Returns the position of the first found occurrence of specified characters in a
                                        string</td>
                                    <td>int</td>
                                </tr>
                                <tr>
                                    <td>intern()</td>
                                    <td>Returns the canonical representation for the string object</td>
                                    <td>String</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_string_isempty.asp">isEmpty()</a></td>
                                    <td>Checks whether a string is empty or not</td>
                                    <td>boolean</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_string_lastindexof.asp">lastIndexOf()</a></td>
                                    <td>Returns the position of the last found occurrence of specified characters in a
                                        string</td>
                                    <td>int</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_string_length.asp">length()</a></td>
                                    <td>Returns the length of a specified string</td>
                                    <td>int</td>
                                </tr>
                                <tr>
                                    <td>matches()</td>
                                    <td>Searches a string for a match against a regular expression, and returns the
                                        matches</td>
                                    <td>boolean</td>
                                </tr>
                                <tr>
                                    <td>offsetByCodePoints()</td>
                                    <td>Returns the index within this String that is offset from the given index by
                                        codePointOffset code points</td>
                                    <td>int</td>
                                </tr>
                                <tr>
                                    <td>regionMatches()</td>
                                    <td>Tests if two string regions are equal</td>
                                    <td>boolean</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_string_replace.asp">replace()</a></td>
                                    <td>Searches a string for a specified value, and returns a new string where the
                                        specified values are replaced</td>
                                    <td>String</td>
                                </tr>
                                <tr>
                                    <td>replaceFirst()</td>
                                    <td>Replaces the first occurrence of a substring that matches the given regular
                                        expression with the given replacement</td>
                                    <td>String</td>
                                </tr>
                                <tr>
                                    <td>replaceAll()</td>
                                    <td>Replaces each substring of this string that matches the given regular expression
                                        with the given replacement</td>
                                    <td>String</td>
                                </tr>
                                <tr>
                                    <td>split()</td>
                                    <td>Splits a string into an array of substrings</td>
                                    <td>String[]</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_string_startswith.asp">startsWith()</a></td>
                                    <td>Checks whether a string starts with specified characters</td>
                                    <td>boolean</td>
                                </tr>
                                <tr>
                                    <td>subSequence()</td>
                                    <td>Returns a new character sequence that is a subsequence of this sequence</td>
                                    <td>CharSequence</td>
                                </tr>
                                <tr>
                                    <td>substring()</td>
                                    <td>Returns a new string which is the substring of a specified string</td>
                                    <td>String</td>
                                </tr>
                                <tr>
                                    <td>toCharArray()</td>
                                    <td>Converts this string to a new character array</td>
                                    <td>char[]</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_string_tolowercase.asp">toLowerCase()</a></td>
                                    <td>Converts a string to lower case letters</td>
                                    <td>String</td>
                                </tr>
                                <tr>
                                    <td>toString()</td>
                                    <td>Returns the value of a String object</td>
                                    <td>String</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_string_touppercase.asp">toUpperCase()</a></td>
                                    <td>Converts a string to upper case letters</td>
                                    <td>String</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_string_trim.asp">trim()</a></td>
                                    <td>Removes whitespace from both ends of a string</td>
                                    <td>String</td>
                                </tr>
                                <tr>
                                    <td>valueOf()</td>
                                    <td>Returns the string representation of the specified value</td>
                                    <td>String</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </li>

            <li>Java Math Methods<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom609342" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom609342"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Java Math Methods</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        <table class="ws-table-all notranslate table-bordered" style="margin:0">
                            <tbody>
                                <tr>
                                    <th style="width:22%">Method</th>
                                    <th style="width:57%">Description</th>
                                    <th style="width:21%">Return Type</th>
                                </tr>
                                <tr>
                                    <td><a href="ref_math_abs.asp">abs(x)</a></td>
                                    <td>Returns the absolute value of x</td>
                                    <td>double|float|int|long</td>
                                </tr>
                                <tr>
                                    <td><a href="ref_math_acos.asp">acos(x)</a></td>
                                    <td>Returns the arccosine of x, in radians</td>
                                    <td>double</td>
                                </tr>
                                <tr>
                                    <td>asin(x)</td>
                                    <td>Returns the arcsine of x, in radians</td>
                                    <td>double</td>
                                </tr>
                                <tr>
                                    <td>atan(x)</td>
                                    <td>Returns the arctangent of x as a numeric value between -PI/2 and PI/2 radians
                                    </td>
                                    <td>double</td>
                                </tr>
                                <tr>
                                    <td>atan2(y,x)</td>
                                    <td>Returns the angle theta from the conversion of rectangular coordinates (x, y) to
                                        polar coordinates (r, theta).</td>
                                    <td>double</td>
                                </tr>
                                <tr>
                                    <td>cbrt(x)</td>
                                    <td>Returns the cube root of x</td>
                                    <td>double</td>
                                </tr>
                                <tr>
                                    <td>ceil(x)</td>
                                    <td>Returns the value of x rounded up to its nearest integer</td>
                                    <td>double</td>
                                </tr>
                                <tr>
                                    <td>copySign(x, y)</td>
                                    <td>Returns the first floating point x with the sign of the second floating point y
                                    </td>
                                    <td>double</td>
                                </tr>
                                <tr>
                                    <td>cos(x)</td>
                                    <td>Returns the cosine of x (x is in radians)</td>
                                    <td>double</td>
                                </tr>
                                <tr>
                                    <td>cosh(x)</td>
                                    <td>Returns the hyperbolic cosine of a double value</td>
                                    <td>double</td>
                                </tr>
                                <tr>
                                    <td>exp(x)</td>
                                    <td>Returns the value of E<sup>x</sup></td>
                                    <td>double</td>
                                </tr>
                                <tr>
                                    <td>expm1(x)</td>
                                    <td>Returns e<sup>x</sup> -1</td>
                                    <td>double</td>
                                </tr>
                                <tr>
                                    <td>floor(x)</td>
                                    <td>Returns the value of x rounded down to its nearest integer</td>
                                    <td>double</td>
                                </tr>
                                <tr>
                                    <td>getExponent(x)</td>
                                    <td>Returns the unbiased exponent used in x</td>
                                    <td>int</td>
                                </tr>
                                <tr>
                                    <td>hypot(x, y)</td>
                                    <td>Returns sqrt(x<sup>2</sup> +y<sup>2</sup>) without intermediate overflow or
                                        underflow</td>
                                    <td>double</td>
                                </tr>
                                <tr>
                                    <td>IEEEremainder(x, y)</td>
                                    <td>Computes the remainder operation on x and y as prescribed by the IEEE 754
                                        standard</td>
                                    <td>double</td>
                                </tr>
                                <tr>
                                    <td>log(x)</td>
                                    <td>Returns the natural logarithm (base E) of x</td>
                                    <td>double</td>
                                </tr>
                                <tr>
                                    <td>log10(x)</td>
                                    <td>Returns the base 10 logarithm of x</td>
                                    <td>double</td>
                                </tr>
                                <tr>
                                    <td>log1p(x)</td>
                                    <td>Returns the natural logarithm (base E) of the sum of x and 1</td>
                                    <td>double</td>
                                </tr>
                                <tr>
                                    <td>max(x, y)</td>
                                    <td>Returns the number with the highest value</td>
                                    <td>double|float|int|long</td>
                                </tr>
                                <tr>
                                    <td>min(x, y)</td>
                                    <td>Returns the number with the lowest value</td>
                                    <td>double|float|int|long</td>
                                </tr>
                                <tr>
                                    <td>nextAfter(x, y)</td>
                                    <td>Returns the floating point number adjacent to x in the direction of y</td>
                                    <td>double|float</td>
                                </tr>
                                <tr>
                                    <td>nextUp(x)</td>
                                    <td>Returns the floating point value adjacent to x in the direction of positive
                                        infinity</td>
                                    <td>double|float</td>
                                </tr>
                                <tr>
                                    <td>pow(x, y)</td>
                                    <td>Returns the value of x to the power of y</td>
                                    <td>double</td>
                                </tr>
                                <tr>
                                    <td>random()</td>
                                    <td>Returns a random number between 0 and 1</td>
                                    <td>double</td>
                                </tr>
                                <tr>
                                    <td>round(x)</td>
                                    <td>Returns the value of x rounded to its nearest integer</td>
                                    <td>int</td>
                                </tr>
                                <tr>
                                    <td>rint(x)</td>
                                    <td>Returns the double value that is closest to x and equal to a mathematical
                                        integer</td>
                                    <td>double</td>
                                </tr>
                                <tr>
                                    <td>signum(x)</td>
                                    <td>Returns the sign of x</td>
                                    <td>double</td>
                                </tr>
                                <tr>
                                    <td>sin(x)</td>
                                    <td>Returns the sine of x (x is in radians)</td>
                                    <td>double</td>
                                </tr>
                                <tr>
                                    <td>sinh(x)</td>
                                    <td>Returns the hyperbolic sine of a double value</td>
                                    <td>double</td>
                                </tr>
                                <tr>
                                    <td>sqrt(x)</td>
                                    <td>Returns the square root of x</td>
                                    <td>double</td>
                                </tr>
                                <tr>
                                    <td>tan(x)</td>
                                    <td>Returns the tangent of an angle</td>
                                    <td>double</td>
                                </tr>
                                <tr>
                                    <td>tanh(x)</td>
                                    <td>Returns the hyperbolic tangent of a double value</td>
                                    <td>double</td>
                                </tr>
                                <tr>
                                    <td>toDegrees(x)</td>
                                    <td>Converts an angle measured in radians to an approx. equivalent angle measured in
                                        degrees</td>
                                    <td>double</td>
                                </tr>
                                <tr>
                                    <td>toRadians(x)</td>
                                    <td>Converts an angle measured in degrees to an approx. angle measured in radians
                                    </td>
                                    <td>double</td>
                                </tr>
                                <tr>
                                    <td>ulp(x)</td>
                                    <td>Returns the size of the unit of least precision (ulp) of x</td>
                                    <td>double|float</td>
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