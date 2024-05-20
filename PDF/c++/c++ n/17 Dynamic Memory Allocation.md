# Introduction

 Every time we run a program, its local variables are stored in `stack memory`, which are destroyed when the compilation is over. This constant size memory is called `static memory` and it is allocated by the compiler. In certain cases, we may need to work with dynamic memory, it is allocated during run time.  This dynamic memory is located in `Heap`.

## Memory Leak

When we don't have any pointer which points towards the dynamic memory, and we don't delete that dynamically allocated variable or array, then it is called memory leak. 

# 1D Dynamic Array

```cpp

#include <bits/stdc++.h>
using namespace std;

int main()
{
    int n;
    cin >> n;

    // Dynamic array
    int *arr = new int[n];

    cout << arr << endl;

    // Assigning values to the dynamic array
    for (int i = 0; i < n; i++)
    {
        arr[i] = i;
        cout << arr[i] << " ";
    }

    cout << endl;

    // Delete dynamic array
    delete[] arr;

    // Address of dynamic memory is still exist in local variable till the function execution.
    cout << arr << endl;

    // Not predictable behaviour
    cout << arr[2] << endl;
    cout << arr[6] << endl;

    return 0;
}

```

# 2D Dynamic Array

![Uploading file...k4qu2]()

```cpp
#include <bits/stdc++.h>
using namespace std;

int **create2DArray(int row, int col)
{
    int **arr = new int *[row];

    // Allocate memory for each row
    for (int i = 0; i < row; i++)
    {
        arr[i] = new int[col];
    }

    // Initialize the array with increasing list of numbers
    int value = 0;
    for (int i = 0; i < row; i++)
    {
        for (int j = 0; j < col; j++)
        {
            arr[i][j] = value;
            value++;
        }
    }
    return arr;
}

int main()
{
    int row, column;
    cin >> row >> column;

    int **arr = create2DArray(row, column);

    for (int i = 0; i < row; i++)
    {
        for (int j = 0; j < column; j++)
        {
            cout << arr[i][j] << " ";
        }
        cout << endl;
    }
    return 0;
}
```


---

Next Section ⇾
[[18 Bitmasking Techniques]]