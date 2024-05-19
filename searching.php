<?php require_once 'Navbar.php'?>
    <!-- mid part -->
    <nav class="mt-5 p-2 headline" style="background:linear-gradient(to top right, #fb5475 0%, #f77b50 59%);">
        <div class="text-center " style="margin-top:5vh;"><img style="margin-right:2vh;"
                src="../../assets/img/mainlogo.jpg" alt="" /> Searching Algorithms cheatsheet
        </div>
    </nav>
    <div class="container">
        <div class="p-5 mb-4 bg-light rounded-3 jumbo mt-2">
            <div class="container-fluid py-3">
                <h1 class="display-5 fw-bold">Searching Algorithms</h1>
                <div class="row">
                    <div class="col-md-6">
                        <p class="fs-4">
                            Searching Algorithms are designed to check for an element or retrieve an element from any
                            data structure where it is stored.
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
                            Searching Algorithms
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        Based on the type of search operation, these algorithms are generally classified into two
                        categories:
                        <br><br>
                        1) Sequential Search: In this, the list or array is traversed sequentially and every element is
                        checked. For example: Linear Search.
                        Linear Search to find the element “20” in a given list of numbers
                        <br><br>

                        2) Interval Search: These algorithms are specifically designed for searching in sorted
                        data-structures. These type of searching algorithms are much more efficient than Linear Search
                        as they repeatedly target the center of the search structure and divide the search space in
                        half.
                    </div>
                </div>
            </div>
        </div>
        <ol>
            <li>
                Linear Search Algorithm
                <button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#o2"
                    aria-controls="o1">
                    Read More...
                </button>
                <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="o2"
                    aria-labelledby="offcanvasWithBothOptionsLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">
                            Linear Search Algorithm
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        Linear Search is defined as a sequential search algorithm that starts at one end and goes
                        through each element of a list until the desired element is found, otherwise the search
                        continues till the end of the data set. It is the easiest searching algorithm
                        <br><br>
                        Iterate from 0 to N-1 and compare the value of every index with x if they match return index
                        <br><br>
                        Follow the given steps to solve the problem:<br><br>

                        Set the first element of the array as the current element.<br>
                        If the current element is the target element, return its index.<br>
                        If the current element is not the target element and if there are more elements in the array,
                        set the current element to the next element and repeat step 2.<br>
                        If the current element is not the target element and there are no more elements in the array,
                        return -1 to indicate that the element was not found.<br>
                    </div>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#a1" aria-expanded="false" aria-controls="collapseOne">
                                Algorithm
                            </button>
                        </h2>
                        <div id="a1" class="accordion-collapse collapse" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">

                                Step 1: Start <br><br>
                                Step 2: Declare an array and search element as key.<br><br>
                                Step 3: Traverse the array until the number is found.<br><br>
                                Step 4: If the key element is found, return the index position of the array
                                element<br><br>
                                Step 5: If the key element is not found, return -1<br><br>
                                Step 6: Stop.<br><br>


                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#b1" aria-expanded="false" aria-controls="collapseOne">
                                Pseudocode
                            </button>
                        </h2>
                        <div id="b1" class="accordion-collapse collapse" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">

                                <pre>
PROCEDURE LINEAR_SEARCH (LIST, VALUE)
  FOR EACH ITEM IN THE LIST
     IF SAME ITEM == VALUE
          RETURN THE ITEM’S LOCATION
     END IF
  END FOR
END PROCEDURE
</pre>


                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#c1" aria-expanded="false" aria-controls="collapseTwo">
                                Diagram
                            </button>
                        </h2>
                        <div id="c1" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <img src="https://media.geeksforgeeks.org/wp-content/cdn-uploads/Linear-Search.png"
                                    alt="" style="width: 100%;">
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="d1" aria-expanded="false" aria-controls="collapseThree">
                                Code
                            </button>
                        </h2>
                        <div id="d1" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-java">
                                    <code>
                                        
class LinearSearch {
	static int search(int arr[], int n, int x)
	{
		for (int i = 0; i < n; i++) {
			if (arr[i] == x)
				return i;
		}
		return -1;
	}
	public static void main(String[] args)
	{
		int[] arr = { 3, 4, 1, 7, 5 };
		int n = arr.length;
		int x = 4;
		int index = search(arr, n, x);
		if (index == -1)
			System.out.println("Element is not present in the array");
		else
			System.out.println("Element found at position " + index);
	}
}
                                    </code>
                                </pre>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree3" aria-expanded="false" aria-controls="collapseThree">
                                Complexity
                            </button>
                        </h2>
                        <div id="collapseThree3" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Time complexity: O(N) <br><br>
                                Auxiliary Space: O(1)
                                <br><br><br>
                                Time Complexity :<br><br>

                                BEST CASE COMPLEXITY <br><br>
                                In linear search, the best-case occurs when the search element is present at the first
                                location of the array. So the best-case time complexity of the linear search is o(1).
                                <br><br>
                                The best-case time complexity of the linear search is o(1).
                                <br><br><br>
                                AVERAGE CASE COMPLEXITY <br><br>
                                In linear search average case occurs when the search element is present at the random
                                location of the array.so the average case time complexity of the linear search is
                                o(1).<br><br>
                                The average case time complexity of the linear search is o(n).
                                <br><br><br>
                                WORST-CASE COMPLEXITY<br><br>
                                In linear search, the worst case occurs when the search element is present at the last
                                location of the array So the worst-case time complexity of the linear search is o(1).In
                                the worst case in if the search element is not present in the given array then we need
                                to traverse the entire array to search element. So the worst-case time complexity of the
                                linear search is o(n).<br><br>
                                The worst-case time complexity of the linear search is o(n)
                                <br><br><br><br>
                                SPACE COMPLEXITY: <br><br>
                                The SPACE complexity of the linear search is o(1)
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne1" aria-expanded="false" aria-controls="collapseOne">
                                Uses
                            </button>
                        </h2>
                        <div id="collapseOne1" class="accordion-collapse collapse" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                we use linear search in following things:<br><br>
                                • for search item in the smaller array.<br>
                                • For fast searching <br>
                            </div>
                        </div>
                    </div>
                </div>
            </li>

        </ol>
    </div>
    </div>
    <?php require_once 'Footer.php'?>