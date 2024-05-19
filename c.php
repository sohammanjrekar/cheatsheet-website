<?php require_once 'Navbar.php'?>
    <!-- mid part -->
    <nav class="mt-5 p-2 headline" style="background:linear-gradient(to top right, #fb5475 0%, #f77b50 59%);">
        <div class="text-center " style="margin-top:5vh;"><img style="margin-right:2vh;" src="../../assets/img/c.svg" alt="" /> C cheatsheet
        </div>
    </nav>
    <div class="container">
        <div class="p-5 mb-4 bg-light rounded-3 jumbo mt-2">
            <div class="container-fluid py-3">
                <h1 class="display-5 fw-bold">C programming language</h1>
                <div class="row">
                    <div class="col-md-8">
                        <p class="fs-4">
                            <ul>
                                <li> Learning any other popular programming language such as Python or C++ becomes a cakewalk already if you know C.</li>
                                <li> C is a flexible language and that gets proven by the fact that it can be used in a variety of applications as well as technologies.</li>
                                <li> C is very fast when compared to other programming languages be it Java or Python.</li>
                            </ul>
                        </p>
                    </div>
                    <div class="col-md-4">
                        <img src="../../assets/img/c.svg" alt="" style="width:100% ;" />
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
                            Since the late 19th century, C has been a popular programming language for general-purpose use.⁣
                            <br> Its applications are very diverse. It ranges from developing operating systems to databases and all.⁣ <br> Even if it’s old, it is still a very popular programming language.⁣<br> As the whole UNIX operating system was
                            written in C, it has a strong association with the operating system⁣ C has also been used widely while creating iOS and Android kernels.⁣<br> MySQL database is written using C.⁣<br> Ruby and Pearl are mostly written using C.⁣<br>                            Most part of Apache and NGINX is written using C.⁣<br> Embedded Systems are created using C⁣<br>
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
                            Basic Structure & Syntax
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <p> Programming in C involves following a basic structure throughout. Heres what it can be broken down to.
                            <ul>
                                <li>Pre-processor commands</li>
                                <li> Functions</li>
                                <li>Variables</li>
                                <li>Statements</li>
                                <li>Expressions</li>
                                <li>Comments</li>
                            </ul>
                        </p>
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        Pre-processor commands
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Pre-processor commands are commands which tell our program that before its execution, it must include the file name mentioned in it because we are using some of the commands or codes from this file.
                                        <br>#include&lt;filename.h&gt; is how we include them into our programs. <br> They add functionalities to a program.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c2" aria-expanded="false" aria-controls="c2">
                                        tokens
                                    </button>
                                </h2>
                                <div id="c2" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <ul>
                                            <li>Keywords
                                            </li>
                                            <li>Identifiers</li>
                                            <li>Constants</li>
                                            <li>String Literal</li>
                                            <li>Symbols</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c3" aria-expanded="false" aria-controls="c3">
                                        Keywords
                                    </button>
                                </h2>
                                <div id="c3" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Keywords are reserved words that can not be used elsewhere in the program for naming a variable or a function. They have a specific function or task and they are solely used for that. Their functionalities are pre-defined.
                                        <br> One such example of a keyword could be return which is used to build return statements for functions. Other examples are auto, if, default, etc.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="h4">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c4" aria-expanded="false" aria-controls="c4">
                                        Identifiers
                                    </button>
                                </h2>
                                <div id="c4" class="accordion-collapse collapse" aria-labelledby="h4" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Identifiers are names given to variables or functions to differentiate them from one another. Their definitions are solely based on our choice but there are a few rules that we have to follow while naming identifiers. One such rule says that the name
                                        can not contain special symbols such as @, -, *, &lt;, etc.
                                        <br> C is a case-sensitive language so an identifier containing a capital letter and another one containing a small letter in the same place will be different. For example, the three words: Code, code, and cOde
                                        can be used as three different identifiers.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c5" aria-expanded="false" aria-controls="c5">
                                        Constants
                                    </button>
                                </h2>
                                <div id="c5" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Constants are very similar to a variable and they can also be of any data type. The only difference between a constant and a variable is that a constant’s value never changes.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="h6">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c6" aria-expanded="false" aria-controls="c6">
                                        String Literal
                                    </button>
                                </h2>
                                <div id="c6" class="accordion-collapse collapse" aria-labelledby="h6" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        String literals or string constants are a sequence of characters enclosed in double quotation marks. For example, “This is a string literal!” is a string literal. C method printf() utilizes the same to format the output.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="h7">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c7" aria-expanded="false" aria-controls="c7">
                                        Symbols
                                    </button>
                                </h2>
                                <div id="c7" class="accordion-collapse collapse" aria-labelledby="h7" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Symbols are special characters reserved to perform certain actions. Using them lets the compiler know what specific tasks should be performed on the given data. Several examples of symbols are arithmetical operators such as +, *, or bitwise operators
                                        such as ^, &.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <pre class="language-c">
                <code>           
                    #include &lt;stdio.h&gt;
                    int main()
                    {
                        return 0;
                    }</code>
            </pre>
            </li>
            <li>
                C Comments<button class="btn btn1 mx-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#o3" aria-controls="o3">
                    Read More...
                </button>
                <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="o3" aria-labelledby="offcanvasWithBothOptionsLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">
                            C Comments
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        Comments can be used to insert any informative piece which a programmer does not wish to be executed. It could be either to explain a piece of code or to make it more readable. In addition, it can be used to prevent the execution of alternative code when
                        the process of debugging is done.
                        <br> Comments can be singled-lined or multi-lined.
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        Single Line Comments
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Single-line comments start with two forward slashes (//). <br> Any information after the slashes // lying on the same line would be ignored (will not be executed).</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c2" aria-expanded="false" aria-controls="c2">
                                        Multi-line comments
                                    </button>
                                </h2>
                                <div id="c2" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        A multi-line comment starts with /* and ends with */. <br> Any information between /* and */ will be ignored by the compiler.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><br> Single Line Comments
                <pre class="language-c">
                <code>  //This is a single line comment</code>
            </pre><br> Multi-line Comments
                <pre class="language-c">
            <code>  /* This is a
    multi-line
    comment */</code>
        </pre>
            </li>
            <li>
                C Variables<button class="btn btn1 mx-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#o4" aria-controls="o4">
                    Read More...
                </button>
                <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="o4" aria-labelledby="offcanvasWithBothOptionsLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">
                            C Variables
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        Variables are containers for storing data values. <br> In C, there are different types of variables. For example
                        <br> an integer variable defined with the keyword int stores integers (whole numbers), without decimals, such as 91 or -13. <br> a floating point variable defined with keyword float stores floating point numbers, with decimals,
                        such as 99.98 or -1.23. <br> a character variable defined with the keyword char stores single characters, such as 'A' or 'z'. Char values are bound to be surrounded by single quotes.
                        <br> Comments can be singled-lined or multi-lined.
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        Declaration
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        We cannot declare a variable without specifying its data type. The data type of a variable depends on what we want to store in the variable and how much space we want it to hold. The syntax for declaring a variable is simple:
                                        <br> data_type variable_name;
                                        <br> OR
                                        <br> data_type variable_name = value;
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c2" aria-expanded="false" aria-controls="c2">
                                        Naming a Variable
                                    </button>
                                </h2>
                                <div id="c2" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        There is no limit to what we can call a variable. Yet there are specific rules we must follow while naming a variable:
                                        <br>
                                        <ul>
                                            <li>A variable name can only contain alphabets, digits, and underscores(_).
                                            </li>
                                            <li> A variable cannot start with a digit.</li>
                                            <li> A variable cannot include any white space in its name.</li>
                                            <li>The name should not be a reserved keyword or any special character.</li>
                                        </ul>
                                        <br> A variable, as its name is defined, can be altered, or its value can be changed, but the same is not true for its type. If a variable is of integer type, then it will only store an integer value through a program.
                                        We cannot assign a character type value to an integer variable. We can not even store a decimal value into an integer variable.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                C Data Types & Constants<button class="btn btn1 mx-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#o5" aria-controls="o5">
                    Read More...
                </button>
                <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="o5" aria-labelledby="offcanvasWithBothOptionsLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">
                            C Data Types & Constants
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        As explained previously, a variable in C must be a specified data type, and you must use a format specifier inside the printf function to display it.
                        <br> The data type specifies the size and type of information the variable will store.
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        Datatypes types
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <table style="border-collapse: collapse; width: 20.8344%; border-width: 1.5px;" border="1">
                                            <colgroup>
                                                <col style="width: 10.8065%;" width="104">
                                                <col style="width: 15.5298%;" width="108">
                                                <col style="width: 25.1555%;" width="211">
                                                <col style="width: 30.5081%;" width="130">
                                            </colgroup>
                                            <tbody>
                                                <tr>
                                                    <td style="border-width: 1.5px;">
                                                        <p dir="ltr"><strong>Data Type</strong></p>
                                                    </td>
                                                    <td style="border-width: 1.5px;">
                                                        <p dir="ltr"><strong>Size</strong></p>
                                                    </td>
                                                    <td style="border-width: 1.5px;">
                                                        <p dir="ltr"><strong>Description</strong></p>
                                                    </td>
                                                    <td style="border-width: 1.5px;">
                                                        <p dir="ltr"><strong>Format Specifier</strong></p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border-width: 1.5px;">
                                                        <p dir="ltr">int</p>
                                                    </td>
                                                    <td style="border-width: 1.5px;">
                                                        <p dir="ltr">2 or 4 bytes</p>
                                                    </td>
                                                    <td style="border-width: 1.5px;">
                                                        <p dir="ltr">Stores whole numbers, without decimals</p>
                                                    </td>
                                                    <td style="border-width: 1.5px;">
                                                        <p dir="ltr">%d or %i</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border-width: 1.5px;">
                                                        <p dir="ltr">float</p>
                                                    </td>
                                                    <td style="border-width: 1.5px;">
                                                        <p dir="ltr">4 bytes</p>
                                                    </td>
                                                    <td style="border-width: 1.5px;">
                                                        <p dir="ltr">Stores fractional numbers, containing one or more decimals. Sufficient for storing 7 decimal digits</p>
                                                    </td>
                                                    <td style="border-width: 1.5px;">
                                                        <p dir="ltr">%f</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border-width: 1.5px;">
                                                        <p dir="ltr">double</p>
                                                    </td>
                                                    <td style="border-width: 1.5px;">
                                                        <p dir="ltr">8 bytes</p>
                                                    </td>
                                                    <td style="border-width: 1.5px;">
                                                        <p dir="ltr">Stores fractional numbers, containing one or more decimals. Sufficient for storing 15 decimal digits</p>
                                                    </td>
                                                    <td style="border-width: 1.5px;">
                                                        <p dir="ltr">%lf</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border-width: 1.5px;">
                                                        <p dir="ltr">char</p>
                                                    </td>
                                                    <td style="border-width: 1.5px;">
                                                        <p dir="ltr">1 byte</p>
                                                    </td>
                                                    <td style="border-width: 1.5px;">
                                                        <p dir="ltr">Stores a single character/letter/number, or ASCII values
                                                        </p>
                                                    </td>
                                                    <td style="border-width: 1.5px;">
                                                        <p dir="ltr">%c</p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c2" aria-expanded="false" aria-controls="c2">
                                        Constants
                                    </button>
                                </h2>
                                <div id="c2" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <ul>
                                            <li>When you don't want the variables you declare to get modified intentionally or mistakenly in the later part of your program by you or others, you use the const keyword (this will declare the variable as "constant",
                                                which means unchangeable and read-only).
                                            </li>
                                            <li>You should always declare the variable as constant when you have values that are unlikely to change, like any mathematical constant as PI.</li>
                                            <li>When you declare a constant variable, it must be assigned a value.
                                            </li>
                                        </ul>
                                        <br> A variable, as its name is defined, can be altered, or its value can be changed, but the same is not true for its type. If a variable is of integer type, then it will only store an integer value through a program.
                                        We cannot assign a character type value to an integer variable. We can not even store a decimal value into an integer variable.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br> Data types
                <pre class="language-c">
                <code>  // Creating variables having different data types
                    int integer = 26;
                    float floating = 39.32;
                    char character = 'A';
                    // Printing variables with the help of their respective format specifiers
                    printf("%d\n", integer);
                    printf("%f\n", floating);
                    printf("%c\n", character);</code>
            </pre><br> Constants
                <pre class="language-c">
            <code> const int MOD = 10000007;
               </code>
        </pre>
            </li>
            <li>
                C Operators<button class="btn btn1 mx-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#o6" aria-controls="o6">
                    Read More...
                </button>
                <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="o6" aria-labelledby="offcanvasWithBothOptionsLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">
                            C Operators
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        Special symbols that are used to perform actions or operations are known as operators. They could be both unary or binary.
                        <br> For example, the symbol asterisk (*) is used to perform multiplication in C so it is an operator and it is a binary operator.
                        <br> This section covers all types of operators
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        Arithmetic Operators
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Arithmetic operators are used to perform mathematical operations such as addition, subtraction, etc. A few of the simple arithmetic operators are
                                        <table style="border-collapse: collapse; width: 25%; border-width: 3px;" border="1">
                                            <colgroup>
                                                <col style="width: 43.4836%;">
                                                <col style="width: 56.6468%;">
                                            </colgroup>
                                            <tbody>
                                                <tr>
                                                    <td style="border-width: 3px;">
                                                        <p dir="ltr"><strong>Operator</strong></p>
                                                    </td>
                                                    <td style="border-width: 3px;">
                                                        <p dir="ltr"><strong>Description</strong></p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border-width: 3px;">
                                                        <p dir="ltr">+</p>
                                                    </td>
                                                    <td style="border-width: 3px;">
                                                        <p dir="ltr">Addition</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border-width: 3px;">
                                                        <p dir="ltr">-</p>
                                                    </td>
                                                    <td style="border-width: 3px;">
                                                        <p dir="ltr">Subtraction</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border-width: 3px;">
                                                        <p dir="ltr">*</p>
                                                    </td>
                                                    <td style="border-width: 3px;">
                                                        <p dir="ltr">Multiplication</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border-width: 3px;">
                                                        <p dir="ltr">/</p>
                                                    </td>
                                                    <td style="border-width: 3px;">
                                                        <p dir="ltr">Division</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border-width: 3px;">
                                                        <p dir="ltr">%</p>
                                                    </td>
                                                    <td style="border-width: 3px;">
                                                        <p dir="ltr">Modulus</p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c2" aria-expanded="false" aria-controls="c2">
                                        Relational Operators
                                    </button>
                                </h2>
                                <div id="c2" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Relational operators are used for the comparison between two or more numbers or even expressions in cases. Same as Java, C also has six relational operators and their return value is of a Boolean type that is, either True or False (1 or 0).
                                        <br>
                                        <table style="border-collapse: collapse; width: 25%; border-width: 3px; border-spacing: 15px;" border="1">
                                            <colgroup>
                                                <col>
                                                <col>
                                            </colgroup>
                                            <tbody>
                                                <tr>
                                                    <td style="border-width: 3px; padding: 5px;">
                                                        <p dir="ltr"><strong>Operator</strong></p>
                                                    </td>
                                                    <td style="border-width: 3px; padding: 5px;">
                                                        <p dir="ltr"><strong>Description</strong></p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border-width: 3px; padding: 5px;">
                                                        <p dir="ltr">&gt;</p>
                                                    </td>
                                                    <td style="border-width: 3px; padding: 5px;">
                                                        <p dir="ltr">Greater than</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border-width: 3px; padding: 5px;">
                                                        <p dir="ltr">&lt;</p>
                                                    </td>
                                                    <td style="border-width: 3px; padding: 5px;">
                                                        <p dir="ltr">Less than</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border-width: 3px; padding: 5px;">
                                                        <p dir="ltr">&gt;=</p>
                                                    </td>
                                                    <td style="border-width: 3px; padding: 5px;">
                                                        <p dir="ltr">Greater than or equal to</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border-width: 3px; padding: 5px;">
                                                        <p dir="ltr">&lt;=</p>
                                                    </td>
                                                    <td style="border-width: 3px; padding: 5px;">
                                                        <p dir="ltr">Less than or equal to</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border-width: 3px; padding: 5px;">
                                                        <p dir="ltr">==</p>
                                                    </td>
                                                    <td style="border-width: 3px; padding: 5px;">
                                                        <p dir="ltr">Is equal to</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border-width: 3px; padding: 5px;">
                                                        <p dir="ltr">!=</p>
                                                    </td>
                                                    <td style="border-width: 3px; padding: 5px;">
                                                        <p dir="ltr">Is not equal to</p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c3" aria-expanded="false" aria-controls="c3">
                                        Logical Operators
                                    </button>
                                </h2>
                                <div id="c3" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        There are three logical operators i.e. AND, OR, and NOT. They can be used to compare Boolean values but are mostly used to compare conditions to see whether they are satisfying or not.
                                        <br>
                                        <ul>
                                            <li>AND: it returns true when both operators are true or 1.</li>
                                            <li>OR: it returns true when either operator is true or 1.</li>
                                            <li>NOT: it is used to reverse the logical state of the operand.</li>
                                        </ul>
                                        <table style="border-collapse: collapse; border-width: 3px; border-spacing: 15px;" border="1">
                                            <colgroup>
                                                <col>
                                                <col>
                                            </colgroup>
                                            <tbody>
                                                <tr>
                                                    <td style="border-width: 3px; padding: 5px;">
                                                        <p dir="ltr"><strong>Operator</strong></p>
                                                    </td>
                                                    <td style="border-width: 3px; padding: 5px;">
                                                        <p dir="ltr"><strong>Description</strong></p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border-width: 3px; padding: 5px;">
                                                        <p dir="ltr">&amp;&amp;</p>
                                                    </td>
                                                    <td style="border-width: 3px; padding: 5px;">
                                                        <p dir="ltr">AND Operator</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border-width: 3px; padding: 5px;">
                                                        <p dir="ltr">||</p>
                                                    </td>
                                                    <td style="border-width: 3px; padding: 5px;">
                                                        <p dir="ltr">OR Operator</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border-width: 3px; padding: 5px;">
                                                        <p dir="ltr">!</p>
                                                    </td>
                                                    <td style="border-width: 3px; padding: 5px;">
                                                        <p dir="ltr">NOT Operator</p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c4" aria-expanded="false" aria-controls="c4">
                                        Bitwise Operators
                                    </button>
                                </h2>
                                <div id="c4" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        A bitwise operator is used to performing operations at the bit level. To obtain the results, they convert our input values into binary format and then process them using whatever operator they are being used with.
                                        <table style="border-collapse: collapse; border-width: 3px; border-spacing: 15px;" border="1">
                                            <colgroup>
                                                <col>
                                                <col>
                                            </colgroup>
                                            <tbody>
                                                <tr>
                                                    <td style="border-width: 3px; padding: 5px;">
                                                        <p dir="ltr"><strong>Operator</strong></p>
                                                    </td>
                                                    <td style="border-width: 3px; padding: 5px;">
                                                        <p dir="ltr"><strong>Description</strong></p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border-width: 3px; padding: 5px;">
                                                        <p dir="ltr">&amp;</p>
                                                    </td>
                                                    <td style="border-width: 3px; padding: 5px;">
                                                        <p dir="ltr">Bitwise AND</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border-width: 3px; padding: 5px;">
                                                        <p dir="ltr">|</p>
                                                    </td>
                                                    <td style="border-width: 3px; padding: 5px;">
                                                        <p dir="ltr">Bitwise OR</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border-width: 3px; padding: 5px;">
                                                        <p dir="ltr">^</p>
                                                    </td>
                                                    <td style="border-width: 3px; padding: 5px;">
                                                        <p dir="ltr">Bitwise XOR</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border-width: 3px; padding: 5px;">
                                                        <p dir="ltr">~</p>
                                                    </td>
                                                    <td style="border-width: 3px; padding: 5px;">
                                                        <p dir="ltr">Bitwise Complement</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border-width: 3px; padding: 5px;">
                                                        <p dir="ltr">&gt;&gt;</p>
                                                    </td>
                                                    <td style="border-width: 3px; padding: 5px;">
                                                        <p dir="ltr">Shift Right Operator</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border-width: 3px; padding: 5px;">
                                                        <p dir="ltr">&lt;&lt;</p>
                                                    </td>
                                                    <td style="border-width: 3px; padding: 5px;">
                                                        <p dir="ltr">Shift Left Operator</p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c5" aria-expanded="false" aria-controls="c5">
                                        Assignment Operators
                                    </button>
                                </h2>
                                <div id="c5" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Assignment operators are used to assign values. We will use them in almost every program we develop.
                                        <br> int a = 0;
                                        <br> Equal to (=) is the assignment operator here. It is assigning 0 to a and 1 to b in the above example.
                                        <table style="border-collapse: collapse; border-width: 3px; border-spacing: 15px;" border="1">
                                            <colgroup>
                                                <col width="88">
                                                <col width="416">
                                            </colgroup>
                                            <tbody>
                                                <tr>
                                                    <td style="border-width: 3px; padding: 5px;">
                                                        <p dir="ltr"><strong>Operator</strong></p>
                                                    </td>
                                                    <td style="border-width: 3px; padding: 5px;">
                                                        <p dir="ltr"><strong>Description</strong></p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border-width: 3px; padding: 5px;">
                                                        <p dir="ltr">=</p>
                                                    </td>
                                                    <td style="border-width: 3px; padding: 5px;">
                                                        <p dir="ltr">It assigns the right side operand value to the left side operand.</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border-width: 3px; padding: 5px;">
                                                        <p dir="ltr">+=</p>
                                                    </td>
                                                    <td style="border-width: 3px; padding: 5px;">
                                                        <p dir="ltr">It adds the right operand to the left operand and assigns the result to the left operand.</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border-width: 3px; padding: 5px;">
                                                        <p dir="ltr">-=</p>
                                                    </td>
                                                    <td style="border-width: 3px; padding: 5px;">
                                                        <p dir="ltr">It subtracts the right operand from the left operand and assigns the result to the left operand.</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border-width: 3px; padding: 5px;">
                                                        <p dir="ltr">*=</p>
                                                    </td>
                                                    <td style="border-width: 3px; padding: 5px;">
                                                        <p dir="ltr">It multiplies the right operand with the left operand and assigns the result to the left operand.</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border-width: 3px; padding: 5px;">
                                                        <p dir="ltr">/=</p>
                                                    </td>
                                                    <td style="border-width: 3px; padding: 5px;">
                                                        <p dir="ltr">It divides the left operand with the right operand and assigns the result to the left operand.</p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ol>
    </div>
    </div>
    <?php require_once 'Footer.php'?>