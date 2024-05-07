# ASCII Encoding

## Introduction

+ The `char` datatype is used to store a single character.
+ The character must be surrounded by a single quote, like 'A' or 'c'.


```cpp
#include <bits/stdc++.h>
using namespace std;

int main()
{
    char ch = 'A';
    char newLineChar = '\n';
    char symbol = '@';

    cout << ch << endl;
    cout << newLineChar << endl;
    cout << symbol << endl;
    return 0;
}
```

## Character Mapping 

+ ASCII was the first character set(encoding standard) used between computers on the Internet.
+ ASCII is a 7-bit character set containing 128 characters.
+ It contains the numbers from `0-9` the upper and lower case English letters from A to Z and some special characters.

> ASCII : **American Standard Code for Information Interchange**

![](https://i.imgur.com/OhHO0ei.png)

> The minimum allocation of memory offered by the compiler is `1 Byte`.
$$1Byte=8Bits$$

```cpp
#include <bits/stdc++.h>
using namespace std;

int main()
{
    char ch = 'A';
    char newLineChar = '\n';
    char symbol = '@';

    cout << ch << " " << "Size of ch" << sizeof(ch) << endl;

    cout << newLineChar << " " << "Size of newLineChar" << sizeof(newLineChar) << endl;
    cout << symbol << " " << "Size of symbol" << sizeof(symbol) << endl;
    return 0;
}
```


```cpp
#include <bits/stdc++.h>
using namespace std;

int main()
{
    int integer = 65;
    char character = integer;

    cout << integer << endl;
    cout << character << endl;

    return 0;
}
```

+ Print Letters using ASCII
```cpp
#include <bits/stdc++.h>
using namespace std;

int main()
{
    // Capital Letters
    for (int i = 65; i < 65 + 26; i++)
    {
        cout << char(i) << " ";
    }

    cout << endl;

    // Small Letters
    for (int i = 97; i < 97 + 26; i++)
    {
        cout << char(i) << " ";
    }

    return 0;
}
```

# Input using `cin.get()`

Take input a letter and Identify if it is a:
+ White Space
+ Letter `0 - 9`
+ Upper Case Letter or Lower Case Letter
+ Special Symbol


```cpp
#include <bits/stdc++.h>
using namespace std;

int main()
{
    char ch;
    ch = cin.get();

    if (ch == ' ' || ch == '\n')
    {
        cout << "White Space" << endl;
    }
    else if (ch >= 'A' && ch <= 'Z' || ch >= 'a' && ch <= 'z')
    {
        cout << "Alphabet" << endl;
    }
    else if (ch >= '0' && ch <= '9')
    {
        cout << "Numeric" << endl;
    }
    else
    {
        cout << "Symbol" << endl;
    }
    return 0;
}
```

# `cin.get()`

+ `cin.get()` reads all possible type of characters, including whitespace.
+ Generally, `cin` with an extraction operator (>>) ignores when whitespace is found. However, `cin.get()` reads a string with the whitespace.

# `<cctype>`

Testing Functions:

```cpp
isalphs(c)
isdigit(c)
islower(c)
isupper(c)
isspace(c)
```

Conversion Functions:

```cpp
toupper(c)
tolower(c)
```

```cpp
#include <iostream>
#include <cctype>
using namespace std;

int main()
{
    char ch;
    ch = cin.get();

    if (islower(ch))
    {
        cout << "It is a Lower Case" << endl;
    }
    else if (isupper(ch))
    {
        cout << "It is a upper Case" << endl;
    }
    else if (isdigit(ch))
    {
        cout << "It is a digit" << endl;
    }
    else
    {
        cout << "It is a symbol" << endl;
    }
    return 0;
}
```

# Shortest Path

Suppose you want to go to a location, located at (X, Y)starting from origin (0,0). Your friend tells you a long way by telling the steps you should walk in each direction (N, W, E, or S). Find the shortest path. 
*Input & Output is a string.* 
*Example*:

**Input**:
```bash
NNNEEWS
```
**Output:**
```bash
NNE
```

**Approach:** 

First, we move through the given path and for `North/South` movement, we modify `y axis` and `x axis` for  `East/West`.

![](https://i.imgur.com/OwmWXjQ.png)

**Code:**

```cpp
#include <bits/stdc++.h>
using namespace std;

int main()
{
    char ch = cin.get();
    int x = 0, y = 0;

    while (ch != '\n')
    {
        cout << ch << " ";
        switch (ch)
        {
        case 'N':
            y++;
            break;
        case 'S':
            y--;
            break;
        case 'E':
            x++;
            break;
        case 'W':
            x--;
            break;
        }
        ch = cin.get();
    }
    cout << endl;

    //  Final Displacement
    cout << "X, Y : " << x << "," << y << endl;

    // 4 Cases

    if (x >= 0 && y >= 0)
    {
        for (int count = 1; count <= x; count++)
        {
            cout << "E";
        }
        for (int count = 1; count <= y; count++)
        {
            cout << "N";
        }
    }
    else if (x < 0 && y >= 0)
    {
        x = x * -1;
        for (int count = 1; count <= x; count++)
        {
            cout << "W";
        }
        for (int count = 1; count <= y; count++)
        {
            cout << "N";
        }
    }
    else if (x < 0 && y < 0)
    {
        x = x * -1;
        y = y * -1;

        for (int count = 1; count <= x; count++)
        {
            cout << "W";
        }
        for (int count = 1; count <= y; count++)
        {
            cout << "S";
        }
    }
    else
    {
        y = y * -1;

        for (int count = 1; count <= x; count++)
        {
            cout << "E";
        }
        for (int count = 1; count <= y; count++)
        {
            cout << "S";
        }
    }

    return 0;
}
```

# ABCD Pattern

Print a pattern of the following form.

```bash
AA
ABBA
ABCCBA
ABCDDCBA
```

**Approach:**
+ Every row begins with `A`.
+ We have some number of letters in every row.
+ Then from the second row, letters are increasing and then decreasing.
+ In i<sup>th</sup> row, First `i` characters are increasing, then next `i` characters are decreasing.  

**Code:**

```cpp
#include <bits/stdc++.h>
using namespace std;

int main()
{
    int n;
    cin >> n;

    for (int i = 0; i <= n; i++)
    {
        char val = 'A';
        //  i letters in increasing order starting from
        for (int count = 1; count <= i; count++)
        {
            cout << val;
            val++;
        }

        //  i letters in decreasing order starting from
        val--;
        for (int count = 1; count <= i; count++)
        {
            cout << val;
            val--;
        }

        cout << endl;
    }
    return 0;
}
```

# Guess the Output

**Code:**
```cpp
#include <bits/stdc++.h>
using namespace std;

int main()
{
    char ch = 'A';

    cout << ch + 1<<endl;

    ch = ch + 1;

    cout << ch  <<endl;

    return 0;
}
```

**Solution:**

```bash
66
B
```

**Why?**

When we perform operation between different datatype, the resultant will be the datatype of higher precedence. For example:

| Precedence | Datatype |
| ---------- | -------- |
| 1          | Float    |
| 2          | Integer  |
| 3          | Character         |


---

Next Section ⇾
[[15 Character Arrays C-Style Strings]]