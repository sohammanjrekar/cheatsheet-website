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

# Binary Search

**Approach**:
```bash
start = 0, end = n -1
while (start <- end)
{
	find mid
	do comparision at mid
	{
		equal to mid
		greater than mid
		smaller than mid
	}
}
```

**Time Complexity**:
$$O(N)=log_2k$$

**Advantage**:
+ Fast and efficient.
+ Search space is monotonic.
> Monotonic means `non-increasing` or `non-decreasing`.

![](https://i.imgur.com/QGUjB1K.png)

# Binary Search Code

**Code**:
```cpp
#include <bits/stdc++.h>
using namespace std;

int binary_search(int arr[], int n, int key)
{
	int s = 0;
	int e = n - 1;

	while (s <= e)
	{
		int mid = (s + e) / 2;

		if (arr[mid] == key)
		{
			return mid;
		}
		else if (arr[mid] > key)
		{
			e = mid - 1;
		}
		else
		{
			s = mid + 1;
		}
	}
	return -1;
}

int main()
{
	int arr[] = {10, 20, 30, 40, 50, 60, 70, 80};
	int n = sizeof(arr) / sizeof(int);

	int key;
	cin >> key;

	int index = binary_search(arr, n, key);
	if (index != -1)
	{
		cout << key << " is found at index " << index << endl;
	}
	else
	{
		cout << key << " is not found" << endl;
	}
	return 0;
}
```

# Bubble Sort

It is a sorting algorithm which sort array into ascending or descending order. Works on the adjacent elements. We do `n-1` iterations to sort an array. It uses two loops to sort an array. Hence, time complexity is
$$O(n^2)$$

**Code**:
```cpp
#include <bits/stdc++.h>
using namespace std;

void bubbleSort(int arr[], int n)
{
	for (int times = 1; times <= n - 1; times++)
	{
		for (int j = 0; j <= n - times - 1; j++)
		{
			if (arr[j] > arr[j + 1])
			{
				swap(arr[j], arr[j + 1]);
			}
		}
	}
}

int main()
{
	int arr[] = {-2, 1, -3, 4, -1, 2, 1, -5, 4};
	int n = sizeof(arr) / sizeof(int);

	bubbleSort(arr, n);

	for (auto x : arr)
		cout << x << " ";

	return 0;
}
```

# Selection Sort

In this sorting algorithm, we have to select minimum element and put it to the starting of unsorted array. By doing this, we can sort the array in `n-1` iterations.
$$O(n^2)$$
**Code:**
```cpp
#include <bits/stdc++.h>
using namespace std;

void selectionSort(int arr[], int n)
{
    for (int pos = 0; pos <= n - 2; pos++)
    {
        int current = arr[pos];
        int min_pos = pos;
        for (int j = pos; j < n; j++)
        {
            if (arr[j] < arr[min_pos])
            {
                min_pos = j;
            }
        }
        swap(arr[min_pos], arr[pos]);
    }
}

int main()
{
    int arr[] = {-2, 1, -3, 4, -1, 2, 1, -5, 4};
    int n = sizeof(arr) / sizeof(int);

    selectionSort(arr, n);

    for (auto x : arr)
        cout << x << " ";

    return 0;
}
```

# Insertion Sort

In this algorithm, we have to pick element from LR and compare it with all previous elements and place it. It is like sorting a deck of cards. Here, we can sort the array in `n-1` iterations.

$$O(n^2)$$

**Code:**
```cpp
#include <bits/stdc++.h>
using namespace std;

void insertionSort(int arr[], int n)
{
    for (int i = 0; i < n; i++)
    {
        int currentElement = arr[i];
        int previousElement = i - 1;
        while (previousElement >= 0 and arr[previousElement] > currentElement)
        {
            arr[previousElement + 1] = arr[previousElement];
            previousElement--;
        }
        arr[previousElement + 1] = currentElement;
    }
}

int main()
{
    int arr[] = {-2, 1, -3, 4, -1, 2, 1, -5, 4};
    int n = sizeof(arr) / sizeof(int);
    
    insertionSort(arr, n);

    for (auto x : arr)
        cout << x << " ";

    return 0;
}
```


---

Next Section ⇾
[[13 2D Arrays]]