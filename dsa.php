<?php require_once 'Navbar.php'?>
    <!-- mid part -->
    <nav class="mt-5 p-2 headline" style="background:linear-gradient(to top right, #fb5475 0%, #f77b50 59%);">
        <div class="text-center " style="margin-top:5vh;"><img style="margin-right:2vh;" src="../../assets/img/dsa.jpg"
                alt="" /> DSA cheatsheet
        </div>
    </nav>
    <div class="container">
        <div class="p-5 mb-4 bg-light rounded-3 jumbo mt-2">
            <div class="container-fluid py-3">
                <h1 class="display-5 fw-bold">C++</h1>
                <div class="row">
                    <div class="col-md-6">
                        <p class="fs-4">
                            C++ is a cross-platform language that can be used to create high-performance applications.
                            <br><br> C++ was developed by Bjarne Stroustrup, as an extension to the C language.
                            <br><br> C++ gives programmers a high level of control over system resources and memory.
                            <br><br> The language was updated 4 major times in 2011, 2014, 2017, and 2020 to C++11,
                            C++14, C++17, C++20.
                        </p>
                    </div>
                    <div class="col-md-6">
                        <img src="../../assets/img/dsa/dsamain.png" alt="" style="width:100% ;height:100% ;" />
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
                            Java
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        Why Use C++<br> C++ is one of the world's most popular programming languages.
                        <br><br> C++ can be found in today's operating systems, Graphical User Interfaces, and embedded
                        systems.
                        <br><br> C++ is an object-oriented programming language which gives a clear structure to
                        programs and allows code to be reused, lowering development costs.

                    </div>
                </div>
            </div>
        </div>
        <h1 class="text-center my-3">All languages cheatsheet</h1>
        <ul id="myTab" role="tablist"
            class="mytab nav bg-dark nav-tabs nav-pills flex-column flex-sm-row text-center bg-light border-0 rounded-nav"
            style="--bs-nav-link-color: rgb(249, 249, 253); --bs-nav-pills-link-active-color: white; --bs-nav-pills-link-active-bg: #f77b50;">
            <li class="nav-item flex-sm-fill">
                <a id="home-tab" data-toggle="tab" href="#cpp1" role="tab" aria-controls="home" aria-selected="true"
                    class="nav-link border-0 text-uppercase  active">C++</a>
            </li>
            <li class="nav-item flex-sm-fill">
                <a id="profile-tab" data-toggle="tab" href="#c1" role="tab" aria-controls="profile"
                    aria-selected="false" class="nav-link border-0 text-uppercase ">C</a>
            </li>
            <li class="nav-item flex-sm-fill">
                <a id="contact-tab" data-toggle="tab" href="#python1" role="tab" aria-controls="contact"
                    aria-selected="false" class="nav-link border-0 text-uppercase ">Python</a>
            </li>
            <li class="nav-item flex-sm-fill">
                <a id="contact-tab" data-toggle="tab" href="#java1" role="tab" aria-controls="contact"
                    aria-selected="false" class="nav-link border-0 text-uppercase ">Java</a>
            </li>
            <li class="nav-item flex-sm-fill">
                <a id="contact-tab" data-toggle="tab" href="#js1" role="tab" aria-controls="contact"
                    aria-selected="false" class="nav-link border-0 text-uppercase ">JavaScript</a>
            </li>
        </ul>
        <div id="myTabContent" class="tab-content">
            <div id="cpp1" role="tabpanel" aria-labelledby="home-tab" class="tab-pane fade px-2 py-3 show active">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/array.png" class="card-img-top mt-3" alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center">Array</h5>
                                <a href="../dsa/array.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/linkedlist.png" class="card-img-top mt-3" alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center">Linked List</h5>
                                <a href="../dsa/linckedlist.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/stack.png" class="card-img-top mt-3" alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center">Stack</h5>
                                <a href="../dsa/stack.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/Queue.jpg" class="card-img-top mt-3" alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center">Queue</h5>
                                <a href="../dsa/queue.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/binarytree.jpg" class="card-img-top mt-3" alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center">Tree</h5>
                                <a href="../dsa/binarytree.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/string.png" class="card-img-top mt-3" alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center">String</h5>
                                <a href="../dsa/bst.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/heap.png" class="card-img-top mt-3" alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center">Heap</h5>
                                <a href="../dsa/heap.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/Hashing.png" class="card-img-top mt-3" alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center">Hash</h5>
                                <a href="../dsa/hashing.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/graph.png" class="card-img-top mt-3" alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center">Graph</h5>
                                <a href="../dsa/graph.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/matrix.png" class="card-img-top mt-3" alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center">Matrix</h5>
                                <a href="../dsa/matrix.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <hr>
                <br>
                <h1 class="text-center my-3">Algorithms cheatsheet</h1>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/search.gif" class="card-img-top mt-3" alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center"> Searching Algorithm </h5>
                                <a href="../dsa/array.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/sorting.jpg" class="card-img-top mt-3" alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center">Sorting Algorithm</h5>
                                <a href="../dsa/linckedlist.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/divide.png" class="card-img-top mt-3" alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center">Divide and Conquer Algorithm</h5>
                                <a href="../dsa/stack.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/greedy-algorithm.png" class="card-img-top mt-3" alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center">Greedy Algorithms</h5>
                                <a href="../dsa/queue.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/recursion.png" class="card-img-top mt-3" alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center"> Recursion Algorithm</h5>
                                <a href="../dsa/binarytree.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/backtracking.png" class="card-img-top mt-3" alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center">Backtracking Algorithm</h5>
                                <a href="../dsa/bst.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/dynamic.png" class="card-img-top mt-3" alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center">Dynamic Programming</h5>
                                <a href="../dsa/heap.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/pattern.png" class="card-img-top mt-3" alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center">Pattern Searching</h5>
                                <a href="../dsa/hashing.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/mathematical.jfif" class="card-img-top mt-3" alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center"> Mathematical Algorithms</h5>
                                <a href="../dsa/graph.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/geometry.png" class="card-img-top mt-3" alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center">Geometric Algorithms</h5>
                                <a href="../dsa/matrix.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/Bitwise-Operators.png" class="card-img-top mt-3" alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center">Bitwise Algorithms</h5>
                                <a href="../dsa/matrix.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/randomized-algorithm.jpg" class="card-img-top mt-3"
                                alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center">Randomized Algorithms</h5>
                                <a href="../dsa/matrix.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/bab.jpg" class="card-img-top mt-3" alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center">Branch and Bound Algorithm</h5>
                                <a href="../dsa/matrix.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="c1" role="tabpanel" aria-labelledby="profile-tab" class="tab-pane fade px-2 py-3">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/array.png" class="card-img-top mt-3" alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center">Array</h5>
                                <a href="../dsa/array.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/linkedlist.png" class="card-img-top mt-3" alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center">Linked List</h5>
                                <a href="../dsa/linckedlist.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/stack.png" class="card-img-top mt-3" alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center">Stack</h5>
                                <a href="../dsa/stack.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/Queue.jpg" class="card-img-top mt-3" alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center">Queue</h5>
                                <a href="../dsa/queue.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/binarytree.jpg" class="card-img-top mt-3" alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center">Tree</h5>
                                <a href="../dsa/binarytree.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/string.png" class="card-img-top mt-3" alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center">String</h5>
                                <a href="../dsa/bst.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/heap.png" class="card-img-top mt-3" alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center">Heap</h5>
                                <a href="../dsa/heap.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/Hashing.png" class="card-img-top mt-3" alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center">Hash</h5>
                                <a href="../dsa/hashing.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/graph.png" class="card-img-top mt-3" alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center">Graph</h5>
                                <a href="../dsa/graph.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/matrix.png" class="card-img-top mt-3" alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center">Matrix</h5>
                                <a href="../dsa/matrix.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <hr>
                <br>
                <h1 class="text-center my-3">Algorithms cheatsheet</h1>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/search.gif" class="card-img-top mt-3" alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center"> Searching Algorithm </h5>
                                <a href="../dsa/array.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/sorting.jpg" class="card-img-top mt-3" alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center">Sorting Algorithm</h5>
                                <a href="../dsa/linckedlist.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/divide.png" class="card-img-top mt-3" alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center">Divide and Conquer Algorithm</h5>
                                <a href="../dsa/stack.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/greedy-algorithm.png" class="card-img-top mt-3" alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center">Greedy Algorithms</h5>
                                <a href="../dsa/queue.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/recursion.png" class="card-img-top mt-3" alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center"> Recursion Algorithm</h5>
                                <a href="../dsa/binarytree.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/backtracking.png" class="card-img-top mt-3" alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center">Backtracking Algorithm</h5>
                                <a href="../dsa/bst.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/dynamic.png" class="card-img-top mt-3" alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center">Dynamic Programming</h5>
                                <a href="../dsa/heap.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/pattern.png" class="card-img-top mt-3" alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center">Pattern Searching</h5>
                                <a href="../dsa/hashing.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/mathematical.jfif" class="card-img-top mt-3" alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center"> Mathematical Algorithms</h5>
                                <a href="../dsa/graph.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/geometry.png" class="card-img-top mt-3" alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center">Geometric Algorithms</h5>
                                <a href="../dsa/matrix.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/Bitwise-Operators.png" class="card-img-top mt-3" alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center">Bitwise Algorithms</h5>
                                <a href="../dsa/matrix.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/randomized-algorithm.jpg" class="card-img-top mt-3"
                                alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center">Randomized Algorithms</h5>
                                <a href="../dsa/matrix.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/bab.jpg" class="card-img-top mt-3" alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center">Branch and Bound Algorithm</h5>
                                <a href="../dsa/matrix.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="python1" role="tabpanel" aria-labelledby="contact-tab" class="tab-pane fade px-2 py-3">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/array.png" class="card-img-top mt-3" alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center">Array</h5>
                                <a href="../dsa/array.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/linkedlist.png" class="card-img-top mt-3" alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center">Linked List</h5>
                                <a href="../dsa/linckedlist.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/stack.png" class="card-img-top mt-3" alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center">Stack</h5>
                                <a href="../dsa/stack.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/Queue.jpg" class="card-img-top mt-3" alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center">Queue</h5>
                                <a href="../dsa/queue.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/binarytree.jpg" class="card-img-top mt-3" alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center">Tree</h5>
                                <a href="../dsa/binarytree.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/string.png" class="card-img-top mt-3" alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center">String</h5>
                                <a href="../dsa/bst.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/heap.png" class="card-img-top mt-3" alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center">Heap</h5>
                                <a href="../dsa/heap.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/Hashing.png" class="card-img-top mt-3" alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center">Hash</h5>
                                <a href="../dsa/hashing.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/graph.png" class="card-img-top mt-3" alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center">Graph</h5>
                                <a href="../dsa/graph.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/matrix.png" class="card-img-top mt-3" alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center">Matrix</h5>
                                <a href="../dsa/matrix.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <hr>
                <br>
                <h1 class="text-center my-3">Algorithms cheatsheet</h1>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/search.gif" class="card-img-top mt-3" alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center"> Searching Algorithm </h5>
                                <a href="../dsa/array.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/sorting.jpg" class="card-img-top mt-3" alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center">Sorting Algorithm</h5>
                                <a href="../dsa/linckedlist.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/divide.png" class="card-img-top mt-3" alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center">Divide and Conquer Algorithm</h5>
                                <a href="../dsa/stack.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/greedy-algorithm.png" class="card-img-top mt-3" alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center">Greedy Algorithms</h5>
                                <a href="../dsa/queue.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/recursion.png" class="card-img-top mt-3" alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center"> Recursion Algorithm</h5>
                                <a href="../dsa/binarytree.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/backtracking.png" class="card-img-top mt-3" alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center">Backtracking Algorithm</h5>
                                <a href="../dsa/bst.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/dynamic.png" class="card-img-top mt-3" alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center">Dynamic Programming</h5>
                                <a href="../dsa/heap.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/pattern.png" class="card-img-top mt-3" alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center">Pattern Searching</h5>
                                <a href="../dsa/hashing.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/mathematical.jfif" class="card-img-top mt-3" alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center"> Mathematical Algorithms</h5>
                                <a href="../dsa/graph.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/geometry.png" class="card-img-top mt-3" alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center">Geometric Algorithms</h5>
                                <a href="../dsa/matrix.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/Bitwise-Operators.png" class="card-img-top mt-3" alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center">Bitwise Algorithms</h5>
                                <a href="../dsa/matrix.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/randomized-algorithm.jpg" class="card-img-top mt-3"
                                alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center">Randomized Algorithms</h5>
                                <a href="../dsa/matrix.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/bab.jpg" class="card-img-top mt-3" alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center">Branch and Bound Algorithm</h5>
                                <a href="../dsa/matrix.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- java start -->
            <div id="java1" role="tabpanel" aria-labelledby="contact-tab" class="tab-pane fade px-2 py-3">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/array.png" class="card-img-top mt-3" alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center">Array</h5>
                                <a href="../dsajava/array.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/linkedlist.png" class="card-img-top mt-3" alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center">Linked List</h5>
                                <a href="../dsajava/linckedlist.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/stack.png" class="card-img-top mt-3" alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center">Stack</h5>
                                <a href="../dsajava/stack.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/Queue.jpg" class="card-img-top mt-3" alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center">Queue</h5>
                                <a href="../dsajava/queue.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/binarytree.jpg" class="card-img-top mt-3" alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center">Tree</h5>
                                <a href="../dsa/binarytree.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/string.png" class="card-img-top mt-3" alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center">String</h5>
                                <a href="../dsa/bst.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/heap.png" class="card-img-top mt-3" alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center">Heap</h5>
                                <a href="../dsa/heap.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/Hashing.png" class="card-img-top mt-3" alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center">Hash</h5>
                                <a href="../dsa/hashing.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/graph.png" class="card-img-top mt-3" alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center">Graph</h5>
                                <a href="../dsa/graph.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/matrix.png" class="card-img-top mt-3" alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center">Matrix</h5>
                                <a href="../dsa/matrix.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <hr>
                <br>
                <h1 class="text-center my-3">Algorithms cheatsheet</h1>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/search.gif" class="card-img-top mt-3" alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center"> Searching Algorithm </h5>
                                <a href="../dsa/array.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/sorting.jpg" class="card-img-top mt-3" alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center">Sorting Algorithm</h5>
                                <a href="../dsa/linckedlist.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/divide.png" class="card-img-top mt-3" alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center">Divide and Conquer Algorithm</h5>
                                <a href="../dsa/stack.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/greedy-algorithm.png" class="card-img-top mt-3" alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center">Greedy Algorithms</h5>
                                <a href="../dsa/queue.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/recursion.png" class="card-img-top mt-3" alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center"> Recursion Algorithm</h5>
                                <a href="../dsa/binarytree.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/backtracking.png" class="card-img-top mt-3" alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center">Backtracking Algorithm</h5>
                                <a href="../dsa/bst.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/dynamic.png" class="card-img-top mt-3" alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center">Dynamic Programming</h5>
                                <a href="../dsa/heap.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/pattern.png" class="card-img-top mt-3" alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center">Pattern Searching</h5>
                                <a href="../dsa/hashing.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/mathematical.jfif" class="card-img-top mt-3" alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center"> Mathematical Algorithms</h5>
                                <a href="../dsa/graph.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/geometry.png" class="card-img-top mt-3" alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center">Geometric Algorithms</h5>
                                <a href="../dsa/matrix.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/Bitwise-Operators.png" class="card-img-top mt-3" alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center">Bitwise Algorithms</h5>
                                <a href="../dsa/matrix.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/randomized-algorithm.jpg" class="card-img-top mt-3"
                                alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center">Randomized Algorithms</h5>
                                <a href="../dsa/matrix.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/bab.jpg" class="card-img-top mt-3" alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center">Branch and Bound Algorithm</h5>
                                <a href="../dsa/matrix.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="js1" role="tabpanel" aria-labelledby="contact-tab" class="tab-pane fade px-2 py-3">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/array.png" class="card-img-top mt-3" alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center">Array</h5>
                                <a href="../dsa/array.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/linkedlist.png" class="card-img-top mt-3" alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center">Linked List</h5>
                                <a href="../dsa/linckedlist.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/stack.png" class="card-img-top mt-3" alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center">Stack</h5>
                                <a href="../dsa/stack.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/Queue.jpg" class="card-img-top mt-3" alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center">Queue</h5>
                                <a href="../dsa/queue.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/binarytree.jpg" class="card-img-top mt-3" alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center">Tree</h5>
                                <a href="../dsa/binarytree.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/string.png" class="card-img-top mt-3" alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center">String</h5>
                                <a href="../dsa/bst.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/heap.png" class="card-img-top mt-3" alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center">Heap</h5>
                                <a href="../dsa/heap.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/Hashing.png" class="card-img-top mt-3" alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center">Hash</h5>
                                <a href="../dsa/hashing.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/graph.png" class="card-img-top mt-3" alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center">Graph</h5>
                                <a href="../dsa/graph.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/matrix.png" class="card-img-top mt-3" alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center">Matrix</h5>
                                <a href="../dsa/matrix.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <hr>
                <br>
                <h1 class="text-center my-3">Algorithms cheatsheet</h1>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/search.gif" class="card-img-top mt-3" alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center"> Searching Algorithm </h5>
                                <a href="../dsa/array.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/sorting.jpg" class="card-img-top mt-3" alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center">Sorting Algorithm</h5>
                                <a href="../dsa/linckedlist.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/divide.png" class="card-img-top mt-3" alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center">Divide and Conquer Algorithm</h5>
                                <a href="../dsa/stack.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/greedy-algorithm.png" class="card-img-top mt-3" alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center">Greedy Algorithms</h5>
                                <a href="../dsa/queue.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/recursion.png" class="card-img-top mt-3" alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center"> Recursion Algorithm</h5>
                                <a href="../dsa/binarytree.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/backtracking.png" class="card-img-top mt-3" alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center">Backtracking Algorithm</h5>
                                <a href="../dsa/bst.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/dynamic.png" class="card-img-top mt-3" alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center">Dynamic Programming</h5>
                                <a href="../dsa/heap.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/pattern.png" class="card-img-top mt-3" alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center">Pattern Searching</h5>
                                <a href="../dsa/hashing.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/mathematical.jfif" class="card-img-top mt-3" alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center"> Mathematical Algorithms</h5>
                                <a href="../dsa/graph.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/geometry.png" class="card-img-top mt-3" alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center">Geometric Algorithms</h5>
                                <a href="../dsa/matrix.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/Bitwise-Operators.png" class="card-img-top mt-3" alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center">Bitwise Algorithms</h5>
                                <a href="../dsa/matrix.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/randomized-algorithm.jpg" class="card-img-top mt-3"
                                alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center">Randomized Algorithms</h5>
                                <a href="../dsa/matrix.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../../assets/img/dsa/bab.jpg" class="card-img-top mt-3" alt="..." />
                            <div class="card-body text-center">
                                <h5 class="card-title text-center">Branch and Bound Algorithm</h5>
                                <a href="../dsa/matrix.html" class="btn btn1 mt-3">Cheatsheet</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <?php require_once 'Footer.php'?>