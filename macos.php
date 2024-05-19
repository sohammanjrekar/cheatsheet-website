<?php require_once 'Navbar.php'?>    <!-- mid part -->
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
            </ol>
    </div>
    </div>
    <?php require_once 'Footer.php'?>