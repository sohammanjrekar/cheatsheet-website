# Arrays Introduction
An array is a collection of elements of the same type placed in contiguous memory locations. All elements must be of the same `datatype`.

Types of operation in array:
+ Creation
+ Input
+ Output
+ Update

```cpp
#include <bits/stdc++.h>
using namespace std;

int main()
{
	int a[10];
	
	int a[10] = {0};

	int a[10] = {1,2,3};

	int a[] = {1,2,3};

	string fruits[3] = {"apple","banana","orange"};

	return 0;
}
```

> PS:  `char array` must be ended with `NULL character`.

# Array Code

```cpp
#include <bits/stdc++.h>
using namespace std;

int main()
{
	int marks[100] = {0};
	int n;
	cout << "Enter teh no. of students : ";
	cin >> n;

	marks[0] = 214;

	for (int i = 1; i <= n; i++)
	{
		cin >> marks[i];
	}

	for (int i = 0; i <= n; i++)
	{
		cout << marks[i] << " ";
	}
	return 0;
}
```

# Passing Arrays to Function

Common myth: `Both will return same result`.

```cpp
#include <bits/stdc++.h>
using namespace std;

void printArray(int arr[])
{
	cout << "Size in function() " << sizeof(arr) << endl;

	int n = sizeof(arr) / sizeof(int);
	for (int i = 0; i < n; i++)
	{
		cout << arr[i] << " ";
	}
	cout << endl;
}

int main()
{
	int arr[] = {1, 2, 3, 4, 5, 6, 7, 8, 9, 10};

	int n = sizeof(arr) / sizeof(int);

	cout << "Size in main() " << sizeof(arr) << endl;
	for (int i = 0; i < n; i++)
	{
		cout << arr[i] << " ";
	}
	cout << endl;

	printArray(arr);

	return 0;
}
```

**Output**:
```bash
Size in main() 40
1 2 3 4 5 6 7 8 9 10
Size in function() 4
1
```

#### Why this is??
This is happens because of `pass by reference`. We are passing the array by its reference, results in the address of the first element of the array only.

#### Solution to this??

By passing the value of `n` in the function can eradicate this issue.

```cpp
#include <bits/stdc++.h>
using namespace std;

void printArray(int arr[], int n)
{
	cout << "Size in function() " << sizeof(arr) << endl;

	for (int i = 0; i < n; i++)
	{
		cout << arr[i] << " ";
	}
	cout << endl;
}

int main()
{
	int arr[] = {1, 2, 3, 4, 5, 6, 7, 8, 9, 10};

	int n = sizeof(arr) / sizeof(int);

	cout << "Size in main() " << sizeof(arr) << endl;
	for (int i = 0; i < n; i++)
	{
		cout << arr[i] << " ";
	}
	cout << endl;

	printArray(arr, n);

	return 0;
}
```

# Linear Search

Searching algorithm to find index of the element.
```cpp
#include <bits/stdc++.h>
using namespace std;

int linearSearch(int arr[], int n, int key)
{
	for (int i = 0; i < n; i++)
	{
		if (arr[i] == key)
		{
			return i;
		}
	}
	return -1;
}

int main()
{
	int arr[] = {1, 2, 3, 4, 5, 6, 7, 8, 9, 10};
	int key = 77;

	int n = sizeof(arr) / sizeof(int);

	int result = linearSearch(arr, n, key);
	if (result != -1)
	{
		cout << "Element found at index " << result << endl;
	}
	else
	{
		cout << "Element not found";
	}

	return 0;
}
```


---

Next Section ⇾
[[12 Searching & Sorting]]