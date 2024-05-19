<?php require_once 'Navbar.php'?>
    <!-- mid part -->
    <nav class="mt-5 p-2 headline" style="background:linear-gradient(to top right, #fb5475 0%, #f77b50 59%);">
        <div class="text-center " style="margin-top:5vh;"><img style="margin-right:2vh;"
                src="../../assets/img/mainlogo.jpg" alt="" /> Array cheatsheet
        </div>
    </nav>
    <div class="container">
        <div class="p-5 mb-4 bg-light rounded-3 jumbo mt-2">
            <div class="container-fluid py-3">
                <h1 class="display-5 fw-bold">Array</h1>
                <div class="row">
                    <div class="col-md-6">
                        <p class="fs-4">
                            An array is a collection of items of the same variable type stored that are stored at
                            contiguous memory locations. It's one of the most popular and simple data structures and is
                            often used to implement other data structures. Each item in an array is indexed starting
                            with 0.
                        </p>
                    </div>
                    <div class="col-md-6 text-center">
                        <img src="../../assets/img/dsa/array.png" alt="" style="height:100%;width:100%;" />
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
                            Array
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        Basic terminologies of array <br><br>
                        Array Index: In an array, elements are identified by their indexes. Array index starts from
                        0.<br>
                        Array element: Elements are items stored in an array and can be accessed by their index.<br>
                        Array Length: The length of an array is determined by the number of elements it can contain.
                        <br><br><br>
                        Representation of Array<br><br>
                        The representation of an array can be defined by its declaration. A declaration means allocating
                        memory for an array of a given size.
                        <br><br><br>
                        Types of Array operations:<br><br>
                        Traversal: Traverse through the elements of an array.<br>
                        Insertion: Inserting a new element in an array.<br>
                        Deletion: Deleting element from the array.<br>
                        Searching: Search for an element in the array.<br>
                        Sorting: Maintaining the order of elements in the array.<br><br><br>
                        Advantages of using Arrays:<br><br>
                        Arrays allow random access to elements. This makes accessing elements by position faster.<br>
                        Arrays have better cache locality which makes a pretty big difference in performance.<br>
                        Arrays represent multiple data items of the same type using a single name.<br>
                        Arrays store multiple data of similar types with the same name.<br>
                        Array data structures are used to implement the other data structures like linked lists, stacks,
                        queues, trees, graphs, etc.<br><br><br>
                        Disadvantages of Array:<br><br>
                        As arrays have a fixed size, once the memory is allocated to them, it cannot be increased or
                        decreased, making it impossible to store extra data if required. An array of fixed size is
                        referred to as a static array. <br>
                        Allocating less memory than required to an array leads to loss of data.<br>
                        An array is homogeneous in nature so, a single array cannot store values of different data
                        types. <br>
                        Arrays store data in contiguous memory locations, which makes deletion and insertion very
                        difficult to implement. This problem is overcome by implementing linked lists, which allow
                        elements to be accessed sequentially. <br><br><br>
                        Application of Array:<br><br>
                        They are used in the implementation of other data structures such as array lists, heaps, hash
                        tables, vectors, and matrices.<br>
                        Database records are usually implemented as arrays.<br>
                        It is used in lookup tables by computer.<br>
                        It is used for different sorting algorithms such as bubble sort insertion sort, merge sort, and
                        quick sort.<br>
                    </div>
                </div>
            </div>
        </div>
        <ol>
            <!-- offcanvas -->
            <li>
                Array Syntax
        
            </li>


            <li>
                Types of arrays
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne1" aria-expanded="false" aria-controls="collapseOne">
                                One-dimensional array (1-D arrays)
                            </button>
                        </h2>
                        <div id="collapseOne1" class="accordion-collapse collapse" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <h4>You can imagine a 1d array as a row, where elements are stored one after another.
                                </h4>
                                <img src="https://media.geeksforgeeks.org/wp-content/uploads/20220721112600/1Darray.png"
                                    alt="" style="width: 100%;">
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo">
                                Two-dimensional array
                            </button>
                        </h2>
                        <div id="collapseTwo2" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <h4>2-D Multidimensional arrays can be considered as an array of arrays or as a matrix
                                    consisting of rows and columns.</h4>
                                <img src="https://media.geeksforgeeks.org/wp-content/uploads/20220721112715/2Darray.png"
                                    alt="" style="width: 100%;">
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree3" aria-expanded="false" aria-controls="collapseThree">
                                Three-dimensional array
                            </button>
                        </h2>
                        <div id="collapseThree3" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <h4>A 3-D Multidimensional array contains three dimensions, so it can be considered an
                                    array of two-dimensional arrays.</h4>
                                <img src="https://media.geeksforgeeks.org/wp-content/uploads/20220721112920/3Darray.png"
                                    alt="" style="width: 100%;">
                            </div>
                        </div>
                    </div>
                </div>
            </li>

        </ol>
    </div>
    </div>
    <?php require_once 'Footer.php'?>