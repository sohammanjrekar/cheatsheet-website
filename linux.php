<?php require_once 'Navbar.php'?>
    <!-- mid part -->
    <nav class="mt-5 p-2 headline" style="background:linear-gradient(to top right, #fb5475 0%, #f77b50 59%);">
        <div class="text-center " style="margin-top:5vh;"><img style="margin-right:2vh;"
                src="../../assets/img/linux-icon.svg" alt="" /> Linux cheatsheet
        </div>
    </nav>
    <div class="container">
        <div class="p-5 mb-4 bg-light rounded-3 jumbo mt-2">
            <div class="container-fluid py-3">
                <h1 class="display-5 fw-bold">Linux</h1>
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
                        <img src="../../assets/img/linux-icon.svg" alt="" style="height:100%;width:100%;" />
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
                WSL Setup<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom2" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom2"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">WSL Setup</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                    The WSL (Windows Subsystem for Linux) feature allows a user to install a Linux distro and execute Linux commands in Windows. WSL 2 is the current version of WSL which uses the latest and greatest virtualization technology. It has faster file system performance, is more compatible, and uses a real Linux kernel. 
                    </div>
                </div>
                Step 01: Enable WSL in Windows
                <pre class="language-powershell">
                    <code> 
                    dism.exe /online /enable-feature /featurename:Microsoft-Windows-Subsystem-Linux /all /norestart
                        </code>
</pre> Step 02: Make WSL 2 Default
                <pre class="language-powershell">
                    <code> 
                    wsl --set-default-version 2
                        </code>
</pre> Step 03: Install Ubuntu in WSL 2
<pre class="language-powershell">
                    <code> 
                    wsl --list --online
                        </code>
</pre>                <pre class="language-powershell">
                    <code> 
                    wsl --install -d Ubuntu-22.04
                        </code>
</pre>
Step 4: Check list od Distros
                <pre class="language-powershell">
                    <code> 
                    wsl --list
                        </code>
</pre>
            </li>
           
        </ol>
    </div>
    </div>
    <?php require_once 'Footer.php'?>