<?php require_once 'Navbar.php'?>
    <!-- mid part -->
    <nav class="mt-5 p-2 headline" style="background:linear-gradient(to top right, #fb5475 0%, #f77b50 59%);">
        <div class="text-center " style="margin-top:5vh;"><img style="margin-right:2vh;" src="../../assets/img/c++.svg" alt="" /> C++ cheatsheet
        </div>
    </nav>
    <div class="container">
        <div class="p-5 mb-4 bg-light rounded-3 jumbo mt-2">
            <div class="container-fluid py-3">
                <h1 class="display-5 fw-bold">C++</h1>
                <div class="row">
                    <div class="col-md-8">
                        <p class="fs-4">
                            C++ is a cross-platform language that can be used to create high-performance applications.
                            <br><br> C++ was developed by Bjarne Stroustrup, as an extension to the C language.
                            <br><br> C++ gives programmers a high level of control over system resources and memory.
                            <br><br> The language was updated 4 major times in 2011, 2014, 2017, and 2020 to C++11, C++14, C++17, C++20.
                        </p>
                    </div>
                    <div class="col-md-4">
                        <img src="../../assets/img/c++.svg" alt="" style="width:100% ;" />
                    </div>
                </div>
                <button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#o1" aria-controls="o1">
                    Read More...
                </button>
                <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="o1" aria-labelledby="offcanvasWithBothOptionsLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">
                            Java
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        Why Use C++<br> C++ is one of the world's most popular programming languages.
                        <br><br> C++ can be found in today's operating systems, Graphical User Interfaces, and embedded systems.
                        <br><br> C++ is an object-oriented programming language which gives a clear structure to programs and allows code to be reused, lowering development costs.
                        <br><br> C++ is portable and can be used to develop applications that can be adapted to multiple platforms.
                        <br><br> C++ is fun and easy to learn!
                        <br><br> As C++ is close to C, C# and Java, it makes it easy for programmers to switch to C++ or vice versa.
                        <br><br><br><br> Difference between C and C++<br> C++ was developed as an extension of C, and both languages have almost the same syntax.
                        <br><br> The main difference between C and C++ is that C++ support classes and objects, while C does not.
                    </div>
                </div>
            </div>
        </div>
        <ol>
            <!-- offcanvas -->
            <li>
                C++ Syntax<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom2" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom2" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">C++ Syntax</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        <br> Line 1: #include &lt;iostream&gt; is a header file library that lets us work with input and output objects, such as cout (used in line 5). Header files add functionality to C++ programs.
                        <br><br> Line 2: using namespace std means that we can use names for objects and variables from the standard library.
                        <br> Don't worry if you don't understand how #include &lt;iostream&gt; and using namespace std works. Just think of it as something that (almost) always appears in your program.
                        <br><br> Line 3: A blank line. C++ ignores white space. But we use it to make the code more readable.
                        <br><br> Line 4: Another thing that always appear in a C++ program, is int main(). This is called a function. Any code inside its curly brackets {} will be executed.
                        <br><br> Line 5: cout (pronounced "see-out") is an object used together with the insertion operator (
                        <<) to output/print text. In our example it will output "Hello World" . <br><br> Note: Every C++ statement ends with a semicolon ;.
                            <br><br><br> Note: The body of int main() could also been written as: int main () { cout
                            << "Hello World! " ; return 0; } <br><br> Remember: The compiler ignores white spaces. However, multiple lines makes the code more readable.
                                <br><br> Line 6: return 0 ends the main function.
                                <br><br> Line 7: Do not forget to add the closing curly bracket } to actually end the main function.
                    </div>
                </div>
                <pre class="language-cpp">
                    <code> 
                        #include &lt;iostream&gt;
                            using namespace std;
                            
                            int main() {
                              cout << "Hello World!";
                              return 0;
                            }
                        </code>
                </pre>
            </li>
            <li>
                Print Text<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom3" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom3" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Print Text</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        The cout object, together with the
                        << operator, is used to output values/print text </div>
                    </div>
                    <pre class="language-cpp">
            <code>     
                cout << "Hello World!";
            </code>
        </pre>
                    <h3>print on New Lines</h3>
                    <pre class="language-cpp">
            <code>     
  cout << "Hello World!" << endl;
            </code>
        </pre>
            </li>
            <li>C++ Comments
                <button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom4" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom4" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">C++ Comments</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        Comments can be used to explain C++ code, and to make it more readable. It can also be used to prevent execution when testing alternative code. Comments can be singled-lined or multi-lined.
                        <br><br> Single-line Comments<br> Single-line comments start with two forward slashes (//).
                        <br><br> Any text between // and the end of the line is ignored by the compiler (will not be executed).
                    </div>
                </div>
                <h3>single linecomment</h3>
                <pre class="language-cpp">
    <code>
        // This is a comment
</code>
</pre>
                <h3>Multi-Line comments</h3>
                <pre class="language-cpp">
    <code>
        /* The code below will print the words Hello World
to the screen, and it is amazing */
</code>
</pre>
            </li>
            <li>C++ Variables<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom5" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom5" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">C++ Variables</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        Variables are containers for storing data values.
                        <br><br> In C++, there are different types of variables, for example:
                        <br>
                        <ol>
                            <li>String - stores text, such as "Hello". String values are surrounded by double quotes
                            </li>
                            <li>int - stores integers (whole numbers), without decimals, such as 123 or -123
                            </li>
                            <li>double - stores floating point numbers, with decimals, such as 19.99 or -19.99
                            </li>
                            <li>char - stores single characters, such as 'a' or 'B'. Char values are surrounded by single quotes</li>
                            <li>bool - stores values with two states: true or false
                            </li>
                        </ol>
                    </div>
                </div>
                <h3>Declaring (Creating) Variables (Syntax)</h3>
                <pre class="language-cpp">
    <code>
        type variableName = value;
</code>
</pre>
                <pre class="language-cpp">
<code>
    int myNum = 15;
cout << myNum;
</code>
</pre>
            </li>
            <li>
                Identifiers<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas2" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvas2" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Identifiers</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        All C++ variables must be identified with unique names.<br><br> These unique names are called identifiers.
                        <br><br> Identifiers can be short names (like x and y) or more descriptive names (age, sum, totalVolume).
                        <br><br><br> Note: It is recommended to use descriptive names in order to create understandable and maintainable code <br>The general rules for naming variables are:
                        <br><br><br> Names can contain letters, digits and underscores
                        <br><br> Names must begin with a letter or an underscore (_)<br><br> Names are case sensitive (myVar and myvar are different variables)<br><br> Names cannot contain whitespaces or special characters like !, #, %, etc.<br><br> Reserved
                        words (like C++ keywords, such as int) cannot be used as names
                    </div>
                </div>
            </li>
            <li>Constants
                <button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom9" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom9" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Constants</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        When you do not want others (or yourself) to change existing variable values, use the const
                        <br><br> keyword (this will declare the variable as "constant", which means unchangeable and read-only)
                        <br>
                    </div>
                </div>
                <pre class="language-cpp">
                        <code>
                            const int myNum = 15;  // myNum will always be 15   
                    </code>
                    </pre>
            </li>
            <li>
                C++ User Input<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom10" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom10" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">C++ User Input</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        You have already learned that cout is used to output (print) values. Now we will use cin to get user input.
                        <br><br> cin is a predefined variable that reads data from the keyboard with the extraction operator (>>).
                        <br><br> In the following example, the user can input a number, which is stored in the variable x. Then we print the value of x <br><br><br><br>cout is pronounced "see-out". Used for output, and uses the insertion operator (
                        <<) <br><br> cin is pronounced "see-in". Used for input, and uses the extraction operator (>>)
                    </div>
                </div>
                <pre class="language-cpp">
                            <code>
                                cin >> x; // Get user input from the keyboard
                        </code>
                        </pre>
            </li>
            <li>C++ Data Types<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom12" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom12" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">C++ Data Types</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        <table class="ws-table-all notranslate table-bordered">
                            <tbody>
                                <tr>
                                    <th style="width:15%">Data Type</th>
                                    <th style="width:15%">Size</th>
                                    <th style="width:70%">Description</th>
                                </tr>
                                <tr>
                                    <td><code class="w3-codespan" style="padding-left:0;">boolean</code></td>
                                    <td>1 byte</td>
                                    <td>Stores true or false values</td>
                                </tr>
                                <tr>
                                    <td><code class="w3-codespan" style="padding-left:0">char</code></td>
                                    <td>1 byte</td>
                                    <td>Stores a single character/letter/number, or ASCII values</td>
                                </tr>
                                <tr>
                                    <td><code class="w3-codespan" style="padding-left:0">int</code></td>
                                    <td>2 or 4 bytes</td>
                                    <td>Stores whole numbers, without decimals</td>
                                </tr>
                                <tr>
                                    <td><code class="w3-codespan" style="padding-left:0;background-color:white">float</code></td>
                                    <td>4 bytes</td>
                                    <td>Stores fractional numbers, containing one or more decimals. Sufficient for storing 6-7 decimal digits</td>
                                </tr>
                                <tr>
                                    <td><code class="w3-codespan" style="padding-left:0">double</code></td>
                                    <td>8 bytes</td>
                                    <td>Stores fractional numbers, containing one or more decimals. Sufficient for storing 15 decimal digits</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </li>
            <li>
                C++ Operators<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom13" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom13" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">C++ Operators</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        C++ Operators<br> Operators are used to perform operations on variables and values.
                        <br><br> Although the + operator is often used to add together two values, like in the example above, it can also be used to add together a variable and a value, or a variable and another variable
                        <br><br> Arithmetic Operators<br> Arithmetic operators are used to perform common mathematical operations.
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
                        </table> <br><br> Assignment Operators<br> Assignment operators are used to assign values to variables.
                        <table class="ws-table-all notranslate table-bordered">
                            <tbody>
                                <tr>
                                    <th style="width:30%">Operator</th>
                                    <th style="width:30%">Example</th>
                                    <th style="width:40%">Same As</th>
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
                        </table>
                        <br><br> Comparison Operators<br> Comparison operators are used to compare two values (or variables). This is important in programming, because it helps us to find answers and make decisions.
                        <table class="ws-table-all notranslate">
                            <tbody>
                                <tr>
                                    <th style="width:25%">Operator</th>
                                    <th style="width:35%">Name</th>
                                    <th style="width:40%">Example</th>
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
                        <br><br> Logical Operators<br> As with comparison operators, you can also test for true or false values with logical operators.
                        <table class="ws-table-all notranslate table-bordered">
                            <tbody>
                                <tr>
                                    <th style="width:15%">Operator</th>
                                    <th style="width:15%">Name</th>
                                    <th style="width:47%">Description</th>
                                    <th style="width:23%">Example</th>
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
                        </table> <br><br> In the example below, we use the + operator to add together two values
                    </div>
                </div>
            </li>
            <li>
                C++ Strings<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom14" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom14" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">C++ Strings</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        Strings are used for storing text.
                        <br> A string variable contains a collection of characters surrounded by double quotes
                    </div>
                </div>
                <h3>Include the string library</h3>
                <pre class="language-cpp">
                    <code>
#include &lt;string&gt;     
                </code>
                </pre>
                <br>
                <pre class="language-cpp">
                    <code>
                        string greeting = "Hello";     
                </code>
                </pre>
            </li>
            <li>
                C++ String Concatenation
                <button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom18" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom18" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">C++ String Concatenation</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        String Concatenation<br> The + operator can be used between strings to add them together to make a new string. This is called concatenation
                    </div>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne7" aria-expanded="false" aria-controls="collapseOne">
                                + operator
                            </button>
                        </h2>
                        <div id="collapseOne7" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="accordion-body">
                                    <pre class="language-cpp">
                                        <code>
                                            string firstName = "John ";
string lastName = "Doe";
string fullName = firstName + lastName;
cout << fullName;
                                    </code>
                                    </pre>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo7" aria-expanded="false" aria-controls="collapseTwo">
                                    append() function
                                </button>
                            </h2>
                            <div id="collapseTwo7" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <pre class="language-cpp">
                                    <code>
                                        string firstName = "John ";
string lastName = "Doe";
string fullName = firstName.append(lastName);
cout << fullName;
                                </code>
                                </pre>
                                </div>
                            </div>
                        </div>
                    </div>
            </li>
            <li>
                C++ String Length<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom21" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom21" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">C++ String Length</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        To get the length of a string, use the length() function<br><br> You might see some C++ programs that use the size() function to get the length of a string. This is just an alias of length(). It is completely up to you if you want
                        to use length() or size()
                    </div>
                </div>
                <pre class="language-cpp">
                    <code>
                        string txt = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
                        cout << "The length of the txt string is: " << txt.length();
                    </code>
                    </pre>
            </li>
            <li>
                C++ Access Strings<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom22" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom22" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">C++ Access Strings</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        Access Strings<br> You can access the characters in a string by referring to its index number inside square brackets [].
                        <br><br> This example prints the first character in myString
                    </div>
                </div>
                <pre class="language-cpp">
                    <code>
                        string myString = "Hello";
cout << myString[0];
// Outputs H
                    </code>
                    </pre>
            </li>
            <li>
                escape characters in C++<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom23" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom23" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">escape characters in C++</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        The solution to avoid this problem, is to use the backslash escape character.
                        <br> The backslash (\) escape character turns special characters into string characters
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
                        <table class="ws-table-all notranslate table-bordered">
                            <tbody>
                                <tr>
                                    <th width="27%">Escape Character</th>
                                    <th>Result</th>
                                </tr>
                                <tr>
                                    <td>\n</td>
                                    <td>New Line</td>
                                </tr>
                                <tr>
                                    <td>\t</td>
                                    <td>Tab</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </li>
            <li>
                C++ Math<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom24" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom24" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">C++ Math</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        C++ Math<br> C++ has many functions that allows you to perform mathematical tasks on numbers.
                        <br><br> Other Math Functions<br>
                        <table class="ws-table-all notranslate table-bordered" style="margin:0">
                            <tbody>
                                <tr>
                                    <th style="width:23%">Function</th>
                                    <th style="width:77%">Description</th>
                                </tr>
                                <tr>
                                    <td>abs(x)</td>
                                    <td>Returns the absolute value of x</td>
                                </tr>
                                <tr>
                                    <td>acos(x)</td>
                                    <td>Returns the arccosine of x</td>
                                </tr>
                                <tr>
                                    <td>asin(x)</td>
                                    <td>Returns the arcsine of x</td>
                                </tr>
                                <tr>
                                    <td>atan(x)</td>
                                    <td>Returns the arctangent of x</td>
                                </tr>
                                <tr>
                                    <td>cbrt(x)</td>
                                    <td>Returns the cube root of x</td>
                                </tr>
                                <tr>
                                    <td>ceil(x)</td>
                                    <td>Returns the value of x rounded up to its nearest integer</td>
                                </tr>
                                <tr>
                                    <td>cos(x)</td>
                                    <td>Returns the cosine of x</td>
                                </tr>
                                <tr>
                                    <td>cosh(x)</td>
                                    <td>Returns the hyperbolic cosine of x</td>
                                </tr>
                                <tr>
                                    <td>exp(x)</td>
                                    <td>Returns the value of E<sup>x</sup></td>
                                </tr>
                                <tr>
                                    <td>expm1(x)</td>
                                    <td>Returns e<sup>x</sup> -1</td>
                                </tr>
                                <tr>
                                    <td>fabs(x)</td>
                                    <td>Returns the absolute value of a floating x</td>
                                </tr>
                                <tr>
                                    <td>fdim(x, y)</td>
                                    <td>Returns the positive difference between x and y</td>
                                </tr>
                                <tr>
                                    <td>floor(x)</td>
                                    <td>Returns the value of x rounded down to its nearest integer</td>
                                </tr>
                                <tr>
                                    <td>hypot(x, y)</td>
                                    <td>Returns sqrt(x<sup>2</sup> +y<sup>2</sup>) without intermediate overflow or underflow
                                    </td>
                                </tr>
                                <tr>
                                    <td>fma(x, y, z)</td>
                                    <td>Returns x*y+z without losing precision</td>
                                </tr>
                                <tr>
                                    <td>fmax(x, y)</td>
                                    <td>Returns the highest value of a floating x and y</td>
                                </tr>
                                <tr>
                                    <td>fmin(x, y)</td>
                                    <td>Returns the lowest value of a floating x and y</td>
                                </tr>
                                <tr>
                                    <td>fmod(x, y)</td>
                                    <td>Returns the floating point remainder of x/y</td>
                                </tr>
                                <tr>
                                    <td>pow(x, y)</td>
                                    <td>Returns the value of x to the power of y</td>
                                </tr>
                                <tr>
                                    <td>sin(x)</td>
                                    <td>Returns the sine of x (x is in radians)</td>
                                </tr>
                                <tr>
                                    <td>sinh(x)</td>
                                    <td>Returns the hyperbolic sine of a double value</td>
                                </tr>
                                <tr>
                                    <td>tan(x)</td>
                                    <td>Returns the tangent of an angle</td>
                                </tr>
                                <tr>
                                    <td>tanh(x)</td>
                                    <td>Returns the hyperbolic tangent of a double value</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo20" aria-expanded="false" aria-controls="collapseTwo">
                                import cmath
                            </button>
                        </h2>
                        <div id="collapseTwo20" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-cpp">
                                    <code>
                                        #include &lt;cmath&gt;
                                    </code>
                                    </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne20" aria-expanded="false" aria-controls="collapseOne">
                                Max and min
                            </button>
                        </h2>
                        <div id="collapseOne20" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-cpp">
                                    <code>
                                        cout << max(5, 10);
                                    </code>
                                    </pre>
                                <pre class="language-cpp">
                                        <code>
                                            cout << min(5, 10);
                                        </code>
                                        </pre>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>Conditional statements
                <button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom52" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom52" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Conditional statements
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        The if Statement<br><br> Use the if statement to specify
                        <br> a block of C++ code to be executed if a condition is true. <br><br><br> The else Statement
                        <br> Use the else statement to specify a block of code to be executed if the condition is false. <br><br><br> The else if Statement<br> Use the else if statement to specify a new condition if the first condition is false. <br><br><br>                        Short Hand If...Else (Ternary Operator)
                        <br> There is also a short-hand if else, which is known as the ternary operator because it consists of three operands. It can be used to replace multiple lines of code with a single line. It is often used to replace simple if else
                        statements <br><br><br> C++ Switch Statements<br> Use the switch statement to select one of many code blocks to be executed.<br><br><br> The break Keyword<br> When C++ reaches a break keyword, it breaks out of the switch block.
                        <br> This will stop the execution of more code and case testing inside the block.
                        <br> When a match is found, and the job is done, it's time for a break. There is no need for more testing.<br><br><br> The default Keyword<br> The default keyword specifies some code to run if there is no case match
                    </div>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne30" aria-expanded="false" aria-controls="collapseOne">
                                if Statement
                            </button>
                        </h2>
                        <div id="collapseOne30" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-cpp">
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
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo30" aria-expanded="false" aria-controls="collapseTwo">
                                The else Statement
                            </button>
                        </h2>
                        <div id="collapseTwo30" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-cpp">
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
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree30" aria-expanded="false" aria-controls="collapseThree">
                                The else if Statement
                            </button>
                        </h2>
                        <div id="collapseThree30" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-cpp">
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
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree31" aria-expanded="false" aria-controls="collapseThree">
                                Short Hand If...Else (Ternary Operator)
                            </button>
                        </h2>
                        <div id="collapseThree31" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-cpp">
                                              <code>
                                                variable = (condition) ? expressionTrue : expressionFalse;
                                              </code>
                                              </pre>
                                <pre class="language-cpp">
                                                <code>
                                                    string result = (time < 18) ? "Good day." : "Good evening.";
                                                </code>
                                                </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree32" aria-expanded="false" aria-controls="collapseThree">
                                C++ Switch Statements
                            </button>
                        </h2>
                        <div id="collapseThree32" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-cpp">
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
            </li>
            <li>C++ Loops<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom54" aria-controls="offcanvasBottom">Read
                    more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom54" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">C++ Loops</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        C++ Loops<br> Loops can execute a block of code as long as a specified condition is reached.
                        <br><br> Loops are handy because they save time, reduce errors, and they make code more readable.
                        <br><br><br> C++ While Loop<br> The while loop loops through a block of code as long as a specified condition is true <br><br><br> The Do/While Loop<br> The do/while loop is a variant of the while loop. This loop will execute the
                        code block once, before checking if the condition is true, then it will repeat the loop as long as the condition is true.
                        <br><br><br> C++ For Loop<br> When you know exactly how many times you want to loop through a block of code, use the for loop instead of a while loop <br><br><br> C++ Break<br> You have already seen the break statement used in
                        an earlier chapter of this tutorial. It was used to "jump out" of a switch statement.
                        <br><br> The break statement can also be used to jump out of a loop.
                        <br><br><br> C++ Continue<br> The continue statement breaks one iteration (in the loop), if a specified condition occurs, and continues with the next iteration in the loop.
                    </div>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne35" aria-expanded="false" aria-controls="collapseOne">
                                While Loop
                            </button>
                        </h2>
                        <div id="collapseOne35" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-cpp">
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
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo455" aria-expanded="false" aria-controls="collapseTwo">
                                Do/While Loop
                            </button>
                        </h2>
                        <div id="collapseTwo455" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-cpp">
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
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree425" aria-expanded="false" aria-controls="collapseThree">
                                For Loop
                            </button>
                        </h2>
                        <div id="collapseThree425" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-cpp">
                                            <code>
                                                for (statement 1; statement 2; statement 3) {
                                                    // code block to be executed
                                                  }
                                            </code>
                                            </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree45" aria-expanded="false" aria-controls="collapseThree">
                                The foreach Loop
                            </button>
                        </h2>
                        <div id="collapseThree45" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-cpp">
                                              <code>
                                                for (type variableName : arrayName) {
                                                    // code block to be executed
                                                  }
                                              </code>
                                              </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree47" aria-expanded="false" aria-controls="collapseThree">
                                C++ Break
                            </button>
                        </h2>
                        <div id="collapseThree47" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-cpp">
                                              <code>
                                                break;
                                              </code>
                                              </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree49" aria-expanded="false" aria-controls="collapseThree">
                                C++ Continue
                            </button>
                        </h2>
                        <div id="collapseThree49" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-cpp">
                                              <code>
                                                continue;
                                              </code>
                                              </pre>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>C++ Arrays<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom55" aria-controls="offcanvasBottom">Read
                    more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom55" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">C++ Arrays</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        C++ Arrays<br> Arrays are used to store multiple values in a single variable, instead of declaring separate variables for each value.
                        <br><br> To declare an array, define the variable type, specify the name of the array followed by square brackets and specify the number of elements it should store
                        <br><br><br> Access the Elements of an Array<br> You access an array element by referring to the index number inside square brackets [].
                        <br><br> This statement accesses the value of the first element in cars<br><br> Note: Array indexes start with 0: [0] is the first element. [1] is the second element, etc.
                    </div>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne355" aria-expanded="false" aria-controls="collapseOne">
                                Access the Elements of an Array
                            </button>
                        </h2>
                        <div id="collapseOne355" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-cpp">
                                            <code>
 string cars[4] = {"Volvo", "BMW", "Ford", "Mazda"};
 cout << cars[0];
                                            </code>
                                            </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo4555" aria-expanded="false" aria-controls="collapseTwo">
                                Change an Array Element
                            </button>
                        </h2>
                        <div id="collapseTwo4555" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-cpp">
                                            <code>                                        
                                                cars[0] = "Opel";
   
                                            </code>
                                            </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo45551" aria-expanded="false" aria-controls="collapseTwo">
                                Get the Size of an Array
                            </button>
                        </h2>
                        <div id="collapseTwo45551" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-cpp">
                                            <code>                                        
                                                int myNumbers[5] = {10, 20, 30, 40, 50};
                                                cout << sizeof(myNumbers);
                                            </code>
                                            </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo45552" aria-expanded="false" aria-controls="collapseTwo">
                                Multi-Dimensional Arrays
                            </button>
                        </h2>
                        <div id="collapseTwo45552" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-cpp">
                                            <code>                                        
                                                string letters[2][4] = {
                                                    { "A", "B", "C", "D" },
                                                    { "E", "F", "G", "H" }
                                                  };
                                                  
                                                  cout << letters[0][2];  // Outputs "C"                                       </code>
                                            </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo45552" aria-expanded="false" aria-controls="collapseTwo">
                                Multi-Dimensional Array ACCESS
                            </button>
                        </h2>
                        <div id="collapseTwo45552" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-cpp">
                                            <code>                                        
                                                for (int i = 0; i < 2; i++) {
                                                    for (int j = 0; j < 4; j++) {
                                                      cout << letters[i][j] << "\n";
                                                    }
                                                  }                       </code>
                                            </pre>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>C++ Structures<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom56" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom56" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">C++ Structures</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        C++ Structures
                        <BR> Structures (also called structs) are a way to group several related variables into one place. Each variable in the structure is known as a member of the structure.
                        <BR>
                        <BR> Unlike an array, a structure can contain many different data types (int, string, bool, etc.).
                        <BR>
                        <BR>
                        <BR> Create a Structure
                        <BR> To create a structure, use the struct keyword and declare each of its members inside curly braces.
                        <BR>
                        <BR> After the declaration, specify the name of the structure variable (myStructure in the example below)
                    </div>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne358" aria-expanded="false" aria-controls="collapseOne">
                                Create a Structure
                            </button>
                        </h2>
                        <div id="collapseOne358" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-cpp">
                                            <code>
                                                struct {             // Structure declaration
                                                    int myNum;         // Member (int variable)
                                                    string myString;   // Member (string variable)
                                                  } myStructure;       // Structure variable
                                            </code>
                                            </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo4558" aria-expanded="false" aria-controls="collapseTwo">
                                Access Structure Members
                            </button>
                        </h2>
                        <div id="collapseTwo4558" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <h3>To access members of a structure, use the dot syntax (.)</h3>
                                <pre class="language-cpp">
                                            <code>
                                                // Create a structure variable called myStructure
struct {
  int myNum;
  string myString;
} myStructure;// Assign values to members of myStructure
myStructure.myNum = 1;
myStructure.myString = "Hello World!";// Print members of myStructure
cout << myStructure.myNum << "\n";
cout << myStructure.myString << "\n";
                                            </code>
                                            </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo4555285" aria-expanded="false" aria-controls="collapseTwo">
                                One Structure in Multiple Variables
                            </button>
                        </h2>
                        <div id="collapseTwo4555285" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <h3>You can use a comma (,) to use one structure in many variables</h3>
                                <pre class="language-cpp">
                                            <code>                                        
                                                struct {
                                                    int myNum;
                                                    string myString;
                                                  } myStruct1, myStruct2, myStruct3;                                 </code>
                                            </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo455582" aria-expanded="false" aria-controls="collapseTwo">
                                Named Structures
                            </button>
                        </h2>
                        <div id="collapseTwo455582" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-cpp">
                                            <code>                                        
                                                struct myDataType { // This structure is named "myDataType"
                                                int myNum;
                                                string myString;
                                              }; </code>
                                            </pre>
                                <pre class="language-cpp">
                                                <code>                                        
                                                    myDataType myVar; </code>
                                                </pre>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>C++ References<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom57" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom57" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">C++ References</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        Creating References A reference variable is a "reference" to an existing variable, and it is created with the & operator
                    </div>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree42589" aria-expanded="false" aria-controls="collapseThree">
                                Creating References
                            </button>
                        </h2>
                        <div id="collapseThree42589" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-cpp">
                                <code>
                                    string food = "Pizza";  // food variable
string &meal = food;    // reference to food
                                </code>
                                </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne3586" aria-expanded="false" aria-controls="collapseOne">
                                use reference
                            </button>
                        </h2>
                        <div id="collapseOne3586" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-cpp">
                                <code>
                                    cout << food << "\n";  // Outputs Pizza
                                    cout << meal << "\n";  // Outputs Pizza
                                </code>
                                </pre>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>C++ Pointers<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom6093" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom6093" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">C++ Pointers</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        Creating Pointers<br> You learned from the previous chapter, that we can get the memory address of a variable by using the & operator
                        <br><br> A pointer however, is a variable that stores the memory address as its value.
                        <br><br> A pointer variable points to a data type (like int or string) of the same type, and is created with the * operator. The address of the variable you're working with is assigned to the pointer <br><br><br> Get Memory Address
                        and Value<br> In the example from the previous page, we used the pointer variable to get the memory address of a variable (used together with the & reference operator). However, you can also use the pointer to get the value of
                        the variable, by using the * operator (the dereference operator)
                        <br><br><br> Note that the * sign can be confusing here, as it does two different things in our code:
                        <br><br> When used in declaration (string* ptr), it creates a pointer variable. When not used in declaration, it act as a dereference operator.
                    </div>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree425899" aria-expanded="false" aria-controls="collapseThree">
                                Creating Pointers
                            </button>
                        </h2>
                        <div id="collapseThree425899" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-cpp">
                                <code>
                                    string food = "Pizza"; // A food variable of type string                                    cout << food;  // Outputs the value of food (Pizza)
                                    cout << &food; // Outputs the memory address of food (0x6dfed4)
                                </code>
                                </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne35864" aria-expanded="false" aria-controls="collapseOne">
                                Get Memory Address and Value
                            </button>
                        </h2>
                        <div id="collapseOne35864" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-cpp">
                                <code>
                                    string food = "Pizza";  // Variable declaration
                                    string* ptr = &food;    // Pointer declaration
                                    
                                    // Reference: Output the memory address of food with the pointer (0x6dfed4)
                                    cout << ptr << "\n";
                                    
                                    // Dereference: Output the value of food with the pointer (Pizza)
                                    cout << *ptr << "\n";
                                </code>
                                </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree4258932" aria-expanded="false" aria-controls="collapseThree">
                                Modify the Pointer Value
                            </button>
                        </h2>
                        <div id="collapseThree4258932" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-cpp">
                                <code>
                                    // Change the value of the pointer
                                    *ptr = "Hamburger";
                                    
                                    // Output the new value of the pointer (Hamburger)
                                    cout << *ptr << "\n";
                                    
                                    // Output the new value of the food variable (Hamburger)
                                    cout << food << "\n";
                                </code>
                                </pre>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>C++ Functions<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom60935" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom60935" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">C++ Functions</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        A function is a block of code which only runs when it is called.<br>
                        <br> You can pass data, known as parameters, into a function.
                        <br><br> Functions are used to perform certain actions, and they are important for reusing code: Define the code once, and use it many times.<br><br><br> Create a Function<br> C++ provides some pre-defined functions, such as main(),
                        which is used to execute code. But you can also create your own functions to perform certain actions.
                        <br><br> To create (often referred to as declare) a function, specify the name of the function, followed by parentheses () <br><br><br> Call a Function<br> Declared functions are not executed immediately. They are "saved for later
                        use", and will be executed later, when they are called.
                        <br><br> To call a function, write the function's name followed by two parentheses () and a semicolon ;
                        <br><br> In the following example, myFunction() is used to print a text (the action), when it is called
                        <br><br><br> Function Declaration and Definition<br> A C++ function consist of two parts:
                        <br><br> Declaration: the return type, the name of the function, and parameters (if any)<br><br> Definition: the body of the function (code to be executed)
                        <br><br> <br> Note: If a user-defined function, such as myFunction() is declared after the main() function, an error will occur However, it is possible to separate the declaration and the definition of the function - for code optimization.
                        <br><br> You will often see C++ programs that have function declaration above main(), and function definition below main(). This will make the code better organized and easier to read
                        <br><br><br> Parameters and Arguments<br> Information can be passed to functions as a parameter. Parameters act as variables inside the function.
                        <br><br> Parameters are specified after the function name, inside the parentheses. You can add as many parameters as you want, just separate them with a comma
                        <br><br><br> When a parameter is passed to the function, it is called an argument.
                        <br><br><br> Default Parameter Value<br> You can also use a default parameter value, by using the equals sign (=).A parameter with a default value, is often known as an "optional parameter".
                        <br><br><br> Return Values<br> The void keyword, used in the previous examples, indicates that the function should not return a value. If you want the function to return a value, you can use a data type (such as int, string, etc.)
                        instead of void, and use the return keyword inside the function
                    </div>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree4258991" aria-expanded="false" aria-controls="collapseThree">
                                Create a Function
                            </button>
                        </h2>
                        <div id="collapseThree4258991" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-cpp">
                                <code>
                                    void myFunction() {
                                        // code to be executed
                                      }
                                </code>
                                </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne358642" aria-expanded="false" aria-controls="collapseOne">
                                Call a Function
                            </button>
                        </h2>
                        <div id="collapseOne358642" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-cpp">
                                <code>
                                    // Create a function
                                    void myFunction() {
                                      cout << "I just got executed!";
                                    }
                                    
                                    int main() {
                                      myFunction(); // call the function
                                      return 0;
                                    }
                                    
                                </code>
                                </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree42589323" aria-expanded="false" aria-controls="collapseThree">
                                Basic syntax of function declaration
                            </button>
                        </h2>
                        <div id="collapseThree42589323" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-cpp">
                                <code>
                                    // Function declaration
void myFunction();// The main method
int main() {
  myFunction();  // call the function
  return 0;
}// Function definition
void myFunction() {
  cout << "I just got executed!";
}
                                </code>
                                </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree42589324" aria-expanded="false" aria-controls="collapseThree">
                                Parameters and Arguments
                            </button>
                        </h2>
                        <div id="collapseThree42589324" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-cpp">
                                <code>
                                    void functionName(parameter1, parameter2, parameter3) {
                                        // code to be executed
                                      }
                                </code>
                                </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree425893238" aria-expanded="false" aria-controls="collapseThree">
                                Default Parameter Value
                            </button>
                        </h2>
                        <div id="collapseThree425893238" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-cpp">
                                <code>
                                    void myFunction(string country = "Norway") {
                                        cout << country << "\n";
                                      }
                                      
                                      int main() {
                                        myFunction("Sweden");
                                        myFunction("India");
                                        myFunction();
                                        myFunction("USA");
                                        return 0;
                                      }
                                      
                                      // Sweden
                                      // India
                                      // Norway
                                      // USA
                                </code>
                                </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree42589323" aria-expanded="false" aria-controls="collapseThree">
                                Return values
                            </button>
                        </h2>
                        <div id="collapseThree42589323" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-cpp">
                                <code>
                                    int myFunction(int x) {
                                        return 5 + x;
                                      }
                                </code>
                                </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree425893239" aria-expanded="false" aria-controls="collapseThree">
                                Pass By Reference
                            </button>
                        </h2>
                        <div id="collapseThree425893239" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-cpp">
                                <code>
                                    void swapNums(int &x, int &y) {
                                        int z = x;
                                        x = y;
                                        y = z;
                                      }
                                      
                                      int main() {
                                        int firstNum = 10;
                                        int secondNum = 20;
                                      
                                        cout << "Before swap: " << "\n";
                                        cout << firstNum << secondNum << "\n";
                                      
                                        // Call the function, which will change the values of firstNum and secondNum
                                        swapNums(firstNum, secondNum);
                                      
                                        cout << "After swap: " << "\n";
                                        cout << firstNum << secondNum << "\n";
                                      
                                        return 0;
                                      }
                                </code>
                                </pre>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>Function Overloading<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom6093859" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom6093859" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Function Overloading</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        With function overloading, multiple functions can have the same name with different parameters
                        <br>
                        <br>
                        <br> Note: Multiple functions can have the same name as long as the number and/or type of parameters are different.
                    </div>
                </div>
                <pre class="language-cpp">
                                <code>
                                    int plusFunc(int x, int y) {
                                        return x + y;
                                      }
                                      
                                      double plusFunc(double x, double y) {
                                        return x + y;
                                      }
                                      
                                      int main() {
                                        int myNum1 = plusFunc(8, 5);
                                        double myNum2 = plusFunc(4.3, 6.26);
                                        cout << "Int: " << myNum1 << "\n";
                                        cout << "Double: " << myNum2;
                                        return 0;
                                      }
                                </code>
                                </pre>
            </li>
            <li>C++ Recursion<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom609385" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom609385" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">C++ Recursion</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        Recursion<br> Recursion is the technique of making a function call itself. This technique provides a way to break complicated problems down into simple problems which are easier to solve.
                        <br><br><br> Recursion may be a bit difficult to understand. The best way to figure out how it works is to experiment with it.
                        <br><br><br> Recursion Example<br> Adding two numbers together is easy to do, but adding a range of numbers is more complicated. In the following example, recursion is used to add a range of numbers together by breaking it down
                        into the simple task of adding two numbers
                    </div>
                </div>
                <pre class="language-cpp">
                                <code>
                                    int sum(int k) {
                                        if (k > 0) {
                                          return k + sum(k - 1);
                                        } else {
                                          return 0;
                                        }
                                      }
                                      
                                      int main() {
                                        int result = sum(10);
                                        cout << result;
                                        return 0;
                                      }
                                </code>
                                </pre>
            </li>
            <li>C++ OOP<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom60939" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom60939" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">C++ OOP</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        OOP stands for Object-Oriented Programming.
                        <br><br> Procedural programming is about writing procedures or functions that perform operations on the data, while object-oriented programming is about creating objects that contain both data and functions.
                        <br><br> Object-oriented programming has several advantages over procedural programming:
                        <br><br><br> OOP is faster and easier to execute<br> OOP provides a clear structure for the programs
                        <br> OOP helps to keep the C++ code DRY "Don't Repeat Yourself", and makes the code easier to maintain, modify and debug<br> OOP makes it possible to create full reusable applications with less code and shorter development time
                        <br><br><br> Tip: The "Don't Repeat Yourself" (DRY) principle is about reducing the repetition of code. You should extract out the codes that are common for the application, and place them at a single place and reuse them instead
                        of repeating it.<br><br><br> C++ What are Classes and Objects?<br> Classes and objects are the two main aspects of object-oriented programming.
                        <br><br> Look at the following illustration to see the difference between class and objects
                        <br><br><br> Create an Object<br><br> In C++, an object is created from a class. We have already created the class named MyClass, so now we can use this to create objects.<br><br> To create an object of MyClass, specify the class
                        name, followed by the object name.
                        <br><br> To access the class attributes (myNum and myString), use the dot syntax (.) on the object
                        <br><br>
                        <div class="flex-container">
                            <div class="box">
                                <h2>class</h2>
                                <p>Fruit</p>
                            </div>
                            <div class="box">
                                <h2>objects</h2>
                                <p>Apple</p>
                                <p>Banana</p>
                                <p>Mango</p>
                            </div>
                        </div> <br><br><br> Class Methods<br> Methods are functions that belongs to the class.
                        <br><br> There are two ways to define functions that belongs to a class:
                        <br><br> Inside class definition<br> Outside class definition<br> In the following example, we define a function inside the class, and we name it "myMethod".
                        <br><br> Note: You access methods just like you access attributes; by creating an object of the class and using the dot syntax (.)
                    </div>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree4258919" aria-expanded="false" aria-controls="collapseThree">
                                Create a Class
                            </button>
                        </h2>
                        <div id="collapseThree4258919" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-cpp">
                                <code>
                                    class MyClass {       // The class
                                        public:             // Access specifier
                                          int myNum;        // Attribute (int variable)
                                          string myString;  // Attribute (string variable)
                                      };
                                </code>
                                </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne35864" aria-expanded="false" aria-controls="collapseOne">
                                Create an Object
                            </button>
                        </h2>
                        <div id="collapseOne35864" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-cpp">
                                <code>
                                    class MyClass {       // The class
                                        public:             // Access specifier
                                          int myNum;        // Attribute (int variable)
                                          string myString;  // Attribute (string variable)
                                      };
                                      
                                      int main() {
                                        MyClass myObj;  // Create an object of MyClass
                                      
                                        // Access attributes and set values
                                        myObj.myNum = 15; 
                                        myObj.myString = "Some text";
                                      
                                        // Print attribute values
                                        cout << myObj.myNum << "\n";
                                        cout << myObj.myString;
                                        return 0;
                                      }
                                </code>
                                </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree425893278" aria-expanded="false" aria-controls="collapseThree">
                                Class Methods
                            </button>
                        </h2>
                        <div id="collapseThree425893278" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <h3>Inside class definition</h3>
                                <pre class="language-cpp">
                                <code>
                                    class MyClass {        // The class
                                        public:              // Access specifier
                                          void myMethod() {  // Method/function defined inside the class
                                            cout << "Hello World!";
                                          }
                                      };
                                      
                                      int main() {
                                        MyClass myObj;     // Create an object of MyClass
                                        myObj.myMethod();  // Call the method
                                        return 0;
                                      }  
                                </code>
                                </pre>
                                <br>
                                <h3>Outside class definition</h3>
                                <pre class="language-cpp">
                                    <code>
                                        class MyClass {        // The class
                                            public:              // Access specifier
                                              void myMethod();   // Method/function declaration
                                          };
                                          
                                          // Method/function definition outside the class
                                          void MyClass::myMethod() {
                                            cout << "Hello World!";
                                          }
                                          
                                          int main() {
                                            MyClass myObj;     // Create an object of MyClass
                                            myObj.myMethod();  // Call the method
                                            return 0;
                                          }  
                                    </code>
                                    </pre>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>C++ Constructors<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom60938590" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom60938590" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">C++ Constructors</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        Constructors<br> A constructor in C++ is a special method that is automatically called when an object of a class is created.
                        <br><br><br> To create a constructor, use the same name as the class, followed by parentheses ()
                        <br><br><br> Constructor Parameters<br> Constructors can also take parameters (just like regular functions), which can be useful for setting initial values for attributes.
                        <br><br><br> The following class have brand, model and year attributes, and a constructor with different parameters. Inside the constructor we set the attributes equal to the constructor parameters (brand=x, etc). When we call
                        the constructor (by creating an object of the class), we pass parameters to the constructor, which will set the value of the corresponding attributes to the same
                    </div>
                </div>
                <pre class="language-cpp">
                                <code>
                                    class MyClass {     // The class
                                        public:           // Access specifier
                                          MyClass() {     // Constructor
                                            cout << "Hello World!";
                                          }
                                      };
                                      
                                      int main() {
                                        MyClass myObj;    // Create an object of MyClass (this will call the constructor)
                                        return 0;
                                      }  
                                </code>
                                </pre>
                <pre class="language-cpp">
                                    <code>
                                        class Car {        // The class
                                            public:          // Access specifier
                                              string brand;  // Attribute
                                              string model;  // Attribute
                                              int year;      // Attribute
                                              Car(string x, string y, int z); // Constructor declaration
                                          };
                                          
                                          // Constructor definition outside the class
                                          Car::Car(string x, string y, int z) {
                                            brand = x;
                                            model = y;
                                            year = z;
                                          }
                                          
                                          int main() {
                                            // Create Car objects and call the constructor with different values
                                            Car carObj1("BMW", "X5", 1999);
                                            Car carObj2("Ford", "Mustang", 1969);
                                          
                                            // Print values
                                            cout << carObj1.brand << " " << carObj1.model << " " << carObj1.year << "\n";
                                            cout << carObj2.brand << " " << carObj2.model << " " << carObj2.year << "\n";
                                            return 0;
                                          }
                                    </code>
                                    </pre>
            </li>
            <li>Access Specifiers<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom609385901" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom609385901" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Access Specifiers</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        Access Specifiers<br> By now, you are quite familiar with the public keyword that appears in all of our class examples
                        <br><br><br> In C++, there are three access specifiers:
                        <br><br><br> public - members are accessible from outside the class<br><br> private - members cannot be accessed (or viewed) from outside the class
                        <br><br>protected - members cannot be accessed from outside the class, however, they can be accessed in inherited classes.
                    </div>
                </div>
                <pre class="language-cpp">
                                <code>
                                    class MyClass {  // The class
                                        public:        // Access specifier
                                          // class members goes here
                                      };
                                </code>
                                </pre>
                <pre class="language-cpp">
                                    <code>
                                        class MyClass {
                                            public:    // Public access specifier
                                              int x;   // Public attribute
                                            private:   // Private access specifier
                                              int y;   // Private attribute
                                          };
                                          
                                          int main() {
                                            MyClass myObj;
                                            myObj.x = 25;  // Allowed (public)
                                            myObj.y = 50;  // Not allowed (private)
                                            return 0;
                                          }
                                    </code>
                                    </pre>
            </li>
            <li>C++ Encapsulation<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom609385909" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom609385909" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">C++ Encapsulation</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        Encapsulation<br> The meaning of Encapsulation, is to make sure that "sensitive" data is hidden from users. To achieve this, you must declare class variables/attributes as private (cannot be accessed from outside the class). If
                        you want others to read or modify the value of a private member, you can provide public get and set methods.
                        <br><br><br> Access Private Members<br> To access a private attribute, use public "get" and "set" methods <br><br><br> Why Encapsulation?<br> 1) It is considered good practice to declare your class attributes as private (as often
                        as you can). Encapsulation ensures better control of your data, because you (or others) can change one part of the code without affecting other parts<br>2)Increased security of data
                    </div>
                </div>
                <pre class="language-cpp">
                                <code>
                                    class Employee {
                                        private:
                                          // Private attribute
                                          int salary;
                                      
                                        public:
                                          // Setter
                                          void setSalary(int s) {
                                            salary = s;
                                          }
                                          // Getter
                                          int getSalary() {
                                            return salary;
                                          }
                                      };
                                      
                                      int main() {
                                        Employee myObj;
                                        myObj.setSalary(50000);
                                        cout << myObj.getSalary();
                                        return 0;
                                      }
                                </code>
                                </pre>
            </li>
            <li>C++ Inheritance<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom60938590" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom60938590" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">C++ Inheritance</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        Inheritance<br> In C++, it is possible to inherit attributes and methods from one class to another. We group the "inheritance concept" into two categories<br><br> <br> It is useful for code reusability: reuse attributes and methods
                        of an existing class when you create a new class. <br> <br> 1) derived class (child) - the class that inherits from another class<br><br> 2) base class (parent) - the class being inherited from
                        <br><br>To inherit from a class, use the : symbol.
                    </div>
                </div>
                <pre class="language-cpp">
                                <code>
                                    // Base class
class Vehicle {
  public:
    string brand = "Ford";
    void honk() {
      cout << "Tuut, tuut! \n" ;
    }
};// Derived class
class Car: public Vehicle {
  public:
    string model = "Mustang";
};int main() {
  Car myCar;
  myCar.honk();
  cout << myCar.brand + " " + myCar.model;
  return 0;
}
                                </code>
                                </pre>
                <h3>Multilevel Inheritance</h3>
                <h5>A class can also be derived from one class, which is already derived from another class.</h5>
                <pre class="language-cpp">
                                    <code>
                                        // Base class (parent)
                                        class MyClass {
                                          public:
                                            void myFunction() {
                                              cout << "Some content in parent class." ;
                                            }
                                        };
                                        
                                        // Derived class (child)
                                        class MyChild: public MyClass {
                                        };
                                        
                                        // Derived class (grandchild)
                                        class MyGrandChild: public MyChild {
                                        };
                                        
                                        int main() {
                                          MyGrandChild myObj;
                                          myObj.myFunction();
                                          return 0;
                                        }
                                    </code>
                                    </pre>
                <h3>Multiple Inheritance</h3>
                <h5>A class can also be derived from more than one base class, using a comma-separated list</h5>
                <pre class="language-cpp">
                                    <code>
                                        // Base class
class MyClass {
  public:
    void myFunction() {
      cout << "Some content in parent class." ;
    }
};// Another base class
class MyOtherClass {
  public:
    void myOtherFunction() {
      cout << "Some content in another class." ;
    }
};// Derived class
class MyChildClass: public MyClass, public MyOtherClass {
};int main() {
  MyChildClass myObj;
  myObj.myFunction();
  myObj.myOtherFunction();
  return 0;
}
                                    </code>
                                    </pre>
            </li>
            <li>C++ Inheritance Access<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom6093859082" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom6093859082" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">C++ Inheritance Access</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        Access Specifiers<br> You learned from the Access Specifiers chapter that there are three specifiers available in C++. Until now, we have only used public (members of a class are accessible from outside the class) and private (members
                        can only be accessed within the class). The third specifier, protected, is similar to private, but it can also be accessed in the inherited class
                    </div>
                </div>
            </li>
            <li>C++ Polymorphism<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom6093859054" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom6093859054" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">C++ Polymorphism</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        Polymorphism<br> Polymorphism means "many forms", and it occurs when we have many classes that are related to each other by inheritance.
                        <br><br> Like we specified in the previous chapter; Inheritance lets us inherit attributes and methods from another class. Polymorphism uses those methods to perform different tasks. This allows us to perform a single action in
                        different ways.
                        <br><br> For example, think of a base class called Animal that has a method called animalSound(). Derived classes of Animals could be Pigs, Cats, Dogs, Birds - And they also have their own implementation of an animal sound (the
                        pig oinks, and the cat meows, etc.)
                    </div>
                </div>
                <pre class="language-cpp">
                                <code>
                                    // Base class
class Animal {
  public:
    void animalSound() {
      cout << "The animal makes a sound \n";
    }
};// Derived class
class Pig : public Animal {
  public:
    void animalSound() {
      cout << "The pig says: wee wee \n";
    }
};// Derived class
class Dog : public Animal {
  public:
    void animalSound() {
      cout << "The dog says: bow wow \n";
    }
};int main() {
  Animal myAnimal;
  Pig myPig;
  Dog myDog;  myAnimal.animalSound();
  myPig.animalSound();
  myDog.animalSound();
  return 0;
}
                                </code>
                                </pre>
            </li>
            <li>C++ Files<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom60938590171" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom60938590171" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">C++ Files</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        The fstream library allows us to work with files.<br> To use the fstream library, include both the standard &lt;iostream&gt; AND the &lt;fstream&gt; header file
                        <table class="ws-table-all notranslate">
                            <tbody>
                                <tr>
                                    <th style="width:26%">Class</th>
                                    <th style="width:74%">Description</th>
                                </tr>
                                <tr>
                                    <td><code class="w3-codespan">ofstream</code></td>
                                    <td>Creates and writes to files</td>
                                </tr>
                                <tr>
                                    <td><code class="w3-codespan">ifstream</code></td>
                                    <td>Reads from files</td>
                                </tr>
                                <tr>
                                    <td><code class="w3-codespan">fstream</code></td>
                                    <td>A combination of ofstream and ifstream: creates, reads, and writes to files</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree42589197" aria-expanded="false" aria-controls="collapseThree">
                                import header file
                            </button>
                        </h2>
                        <div id="collapseThree42589197" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-cpp">
                                <code>
                                    #include &lt;iostream&gt;
                                    #include &lt;fstream&gt;
                                </code>
                                </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne358649" aria-expanded="false" aria-controls="collapseOne">
                                Create and Write To a File
                            </button>
                        </h2>
                        <div id="collapseOne358649" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-cpp">
                                <code>
                                    int main() {
                                        // Create and open a text file
                                        ofstream MyFile("filename.txt");
                                      
                                        // Write to the file
                                        MyFile << "Files can be tricky, but it is fun enough!";
                                      
                                        // Close the file
                                        MyFile.close();
                                      }   
                                </code>
                                </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree4258932788" aria-expanded="false" aria-controls="collapseThree">
                                Read a File
                            </button>
                        </h2>
                        <div id="collapseThree4258932788" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-cpp">
                                    <code>
                                        // Create a text string, which is used to output the text file
                                        string myText;
                                        
                                        // Read from the text file
                                        ifstream MyReadFile("filename.txt");
                                        
                                        // Use a while loop together with the getline() function to read the file line by line
                                        while (getline (MyReadFile, myText)) {
                                          // Output the text from the file
                                          cout << myText;
                                        }
                                        
                                        // Close the file
                                        MyReadFile.close();
                                    </code>
                                    </pre>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>C++ Exceptions<button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom6093859049" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom6093859049" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">C++ Exceptions</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        When executing C++ code, different errors can occur: coding errors made by the programmer, errors due to wrong input, or other unforeseeable things.
                        <br><br> When an error occurs, C++ will normally stop and generate an error message. The technical term for this is: C++ will throw an exception (throw an error). <br><br><br> C++ try and catch<br> Exception handling in C++ consist
                        of three keywords: try, throw and catch:
                        <br><br><br> The try statement allows you to define a block of code to be tested for errors while it is being executed.
                        <br><br><br> The throw keyword throws an exception when a problem is detected, which lets us create a custom error.
                        <br><br><br> The catch statement allows you to define a block of code to be executed, if an error occurs in the try block.
                    </div>
                </div>
                <pre class="language-cpp">
                                <code>
                                    try {
                                        // Block of code to try
                                        throw exception; // Throw an exception when a problem arise
                                      }
                                      catch () {
                                        // Block of code to handle errors
                                      }
                                </code>
                                </pre>
                <h3>Handle Any Type of Exceptions (...)</h3>
                <pre class="language-cpp">
                                    <code>
                                        try {
                                            int age = 15;
                                            if (age >= 18) {
                                              cout << "Access granted - you are old enough.";
                                            } else {
                                              throw 505;
                                            }
                                          }
                                          catch (...) {
                                            cout << "Access denied - You must be at least 18 years old.\n";
                                          }
                                    </code>
                                    </pre>
            </li>
        </ol>
        </div>
        </div>
        <?php require_once 'Footer.php'?>