# 2D Arrays

When we are representing data in an array, we generally use 1D array (till now) but in real world scenarios we have much - much complex data which can have `n-Dimensions` . For example, If we are talking about an image, It is 3D `n = 3`. Similarly, for a video, we have 4D.
Consider an example, we have to store data of 3 subjects. Then,$$n*m$$

| Subject1 | Subject2 | Subject3 |
| -------- | -------- | -------- |
| 89       | 45       | 45       |
| 78       | 44       | 99       |
| 77       | 75       | 100         |


![](https://i.imgur.com/Sqe3eBS.png)

# 2D Array Storage

## Input & Output

**Code:**
```cpp
#include <bits/stdc++.h>
using namespace std;

void print(int arr[][100], int n, int m)
{
    for (int i = 0; i < n; i++)
    {
        for (int j = 0; j < m; j++)
        {
            cout << arr[i][j] << " ";
        }
        cout << endl;
    }
}

int main()
{
    // Constrain
    int arr[100][100];

    // N: rows and M Columns
    int n, m;
    cin >> n >> m;

    // Taking Input
    for (int i = 0; i < n; i++)
    {
        for (int j = 0; j < m; j++)
        {
            cin >> arr[i][j];
        }
    }

    // Print the array
    print(arr, n, m);

    return 0;
}
```

## Storage

In memory, everything must be linearised. Tow common ways of storing the arrays:

1. Row Major Form
2. Column Major Form

![](https://i.imgur.com/3MPFxtb.png)

>🔥 In maximum cases, `Row Major Form` is used. Very few `CPU architecture` use `Column Major Form.

## Spiral Print

Write a function that takes in `n x m` 2D array, and prints the all array elements in a spiral order. Start from top left corner goes to right, proceeds in a spiral pattern until every element in visited.

**Input**: 
```bash
1 2 3 4
5 6 7 8
9 10 11 12
13 14 15 16
```

**Output**:

```bash
1 2 3 4 8 12 16 15 14 13 9 5 6 7 11 10
```

**Approach**:

![](https://i.imgur.com/1zOJ2Cq.png)

$$O(n^2)$$

**Code**:

```cpp
#include <bits/stdc++.h>
using namespace std;

void spiralPrint(int arr[][10], int n, int m)
{
    // Variables

    int startRow = 0;
    int endRow = n - 1;
    int startCol = 0;
    int endCol = m - 1;

    // Outer Loop ( Traverse Array Boundary)
    while (startCol <= endCol and startRow <= endRow)
    {
        //  Start Row
        for (int col = startCol; col <= endCol; col++)
        {
            cout << arr[startRow][col] << " ";
        }

        // End Column
        for (int row = startRow + 1; row <= endRow; row++)
        {
            cout << arr[row][endCol] << " ";
        }

        // End Row
        for (int col = endCol - 1; col >= startRow; col--)
        // Avoid Duplicate Printing of elements
        {
            if (startCol == endCol)
            {
                break;
            }

            cout << arr[endRow][col] << " ";
        }

        // Start Column
        for (int row = endRow - 1; row >= startRow + 1; row--)
        {
            // Avoid Duplicate Printing of elements

            if (startCol == endCol)
            {
                break;
            }
            cout << arr[row][startCol] << " ";
        }

        // Update the variables to point inner spiral
        startRow++;
        endRow--;
        startCol++;
        endCol--;
    }
}

int main()
{
    int arr[][10] = {
        {1, 2, 3, 4},
        {12, 13, 14, 5},
        {11, 16, 15, 6},
        {10, 9, 8, 7}};
    int n = 4, m = 4;

    spiralPrint(arr, n, m);

    return 0;
}
```

## Staircase Search

Write a function that searches for an element in row wise and column wise sorted 2D Array.

**Input**: 

```bash
10 20 30 40
15 25 35 45
27 29 37 48
32 33 39 50
```

**Output**:

```bash
33
```

**Approach:**

As the array shows, all the elements are sorted from left to right and top to bottom. One thing we can do here is apply binary search for each row, but it has to iterate all the rows in worst case. 
Another approach we can use is, iterating all the element throughout the array.
Optimal approach is to search like stairs, i.e. start from last column of first row and keep checking condition till the element is found, meanwhile if key element is greater than current element, then we increment row number by 1 and if it is less than current element we can decrement column number by 1. 
$$O(n+m)$$

**Code:**

```cpp
#include <bits/stdc++.h>
using namespace std;

pair<int, int> staircaseSearch(int arr[][4], int n, int m, int key)
{
    // If element is not present in the array
    if (key < arr[0][0] or key > arr[n - 1][m - 1])
    {
        return {-1, -1};
    }

    // StairCase Search
    int i = 0;
    int j = m - 1;

    while (i <= n - 1 and j >= 0)
    {
        if (arr[i][j] == key)
        {
            return {i, j};
        }

        else if (arr[i][j] > key)
        {
            j--;
        }
        else
        {
            i++;
        }
    }

    return {-1, -1};
}

int main()
{
    int arr[][4] = {
        {10, 20, 30, 40},
        {15, 25, 35, 45},
        {27, 29, 37, 48},
        {32, 33, 39, 50}};
    int n = 4, m = 4;
    int key = 33;
    pair<int, int> coords = staircaseSearch(arr, n, m, key);
    cout << coords.first << "," << coords.second << endl;

    return 0;
}
```

> This algorithm is known as `Stair Case Algorithm `.


---

Next Section ⇾
[[14 Character Data Type]]