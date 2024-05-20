# Check Odd Even

Write an expression to check if a number is odd or even.

$$2^0 = 1$$

| Number | Binary Form |
| ------ | ----------- |
| 1      | 0000001     |
| 2      | 0000010     |
| 3      | 0000011     |
| 4      | 0000100     |
| 5      | 0000101     |


![](https://i.imgur.com/OYLIagt.png)

```cpp
#include <bits/stdc++.h>
using namespace std;

int main()
{
    int x;
    cin >> x;

    if (x & 1)
    {
        cout << "Odd" << endl;
    }
    else
    {
        cout << "Even" << endl;
    }

    return 0;
}
```

# Bit Manipulation

Write function to:

- Get i<sup>th</sup> Bit

![](https://i.imgur.com/4GCpvb0.png)

**Code:**

```cpp
#include <bits/stdc++.h>
using namespace std;

int getIthBit(int n, int i)
{
    int mask = (1 << i);
    return (n & mask) > 0 ? 1 : 0;
}

int main()
{
    int n = 5;
    int i;
    cin >> i;

    cout << getIthBit(n, i) << endl;
    return 0;
}
```

> Left Shift Operator `<<`: A left shift operator shift x bits towards left.

For example:

+ Left Shift

```bash
n = 10 # We need to apply operation on this number
x = 2 # How many bits we want to shift
# Binary Represenation of n = 1010
n << x 
# Answer: 40 which is 101000
```

+ Right Shift

```bash
n = 10 # We need to apply operation on this number
x = 2 # How many bits we want to shift
# Binary Represenation of n = 1010
n >> x 
# Ans: 0010
```

#### Mathematical Logic Behind shifting

+ Left Shift

```bash
n = 10
# Binary Represenation of n = 1010
x = 3

10*2 = 20
20*2 = 40
40*2 = 80 # Answer: 80
```

+ Right Shift

```bash
n = 10
# Binary Represenation of n = 1010
x = 3

10/2 = 5
5/2 = 2
2/2 = 1 # Answer: 1
```

> ✨ Left shift operator increase the value whereas Right shift operator decrease the value.

- Set i<sup>th</sup> Bit

![](https://i.imgur.com/NexpUKp.png)

**Code:**

```cpp
#include <bits/stdc++.h>
using namespace std;

// int setIthBit(int n, int i)
// {
//     int mask = (i << i);
//     n = (n | mask);
//     return n;
// }

void setIthBit(int &n, int i)
{
    int mask = (1 << i);
    n = n | mask;
}

int main()
{
    int n = 5;
    int i;
    cin >> i;

    // cout << setIthBit(n, i) << endl;
    
    setIthBit(n, i);
    cout << n << endl;

    return 0;
}
```


- Clear i<sup>th</sup> Bit

![](https://i.imgur.com/MZiwyqu.png)

**Code:**

```cpp
#include <bits/stdc++.h>
using namespace std;

// int clearIthBit(int &n, int i)
// {
//     int mask = ~(1 << i);
//     n = n & mask;
//     return n;
// }

void clearIthBit(int &n, int i)
{
    int mask = ~(1 << i);
    n = n & mask;
}

int main()
{
    int n = 5;
    int i;
    cin >> i;
    
    // cout << clearIthBit(n, i) << endl;

    clearIthBit(n, i);
    cout << n << endl;

    return 0;
}

```

+ Update i<sup>th</sup> Bit

![](https://i.imgur.com/E7Rlmgy.png)

![](https://i.imgur.com/6srTiox.png)

**Code:**

```cpp
#include <bits/stdc++.h>
using namespace std;

void clearIthBit(int &n, int i)
{
    int mask = ~(1 << i);
    n = n & mask;
}

void updateIthBit(int &n, int i, int v)
{
    clearIthBit(n, i);
    int mask = (v << i);
    n = n | mask;
}

int main()
{
    int n = 5;
    int i;
    cin >> i;


    updateIthBit(n, i, 1);
    cout << n << endl;

    return 0;
}

```

+ Clear last i<sup>th</sup> Bits

![](https://i.imgur.com/k4o4uvy.png)

**Code:**

```cpp
#include <bits/stdc++.h>
using namespace std;

void clearLastIthBit(int &n, int i)
{
    int mask = (-1 << i);
    // -1 = ~0 = 1111111
    n = n & mask;
}

int main()
{
    int n = 15;
    int i = 2;

    clearLastIthBit(n, i);
    cout << n << endl;

    return 0;
}
```

+ Clear bits in range

![](https://i.imgur.com/osUNP5N.png)

**Code:**

```cpp
#include <bits/stdc++.h>
using namespace std;

void clearBitsInRange(int &n, int i, int j)
{
    int a = (~0) << (j + 1);
    int b = (1 << i) - 1;
    int mask = a | b;
    n = n & mask;
}

int main()
{
    int n = 31;
    int i = 1;
    int j = 3;

    clearBitsInRange(n, i, j);
    cout << n << endl;

    return 0;
}
```

# Challenge: Replace Bits

You are given tow 32-bit number, i.e. `N` and `M`, and two bit positions `i` and `j`. Write a method to set all bits between `i` and `j` in N equal to M. (M, becomes a substring of N locationed at and starting at j)

Example
```bash
# Input:

N = 10000000000;
M = 10101;
i = 2;
j = 6;

# Output:
1001010100
```

**Approach:**

![](https://i.imgur.com/YdbwwY7.png)

**Code:**

```cpp
#include <bits/stdc++.h>
using namespace std;

void clearBitsInRange(int &n, int i, int j)
{
    int a = (~0) << (j + 1);
    int b = (1 << i) - 1;
    int mask = a | b;
    n = n & mask;
}

void replaceBits(int &n, int m, int i, int j)
{
    clearBitsInRange(n, i, j);
    int mask = (m << i);
    n = n | mask;
}

int main()
{
    int n = 15;
    int m = 2;
    int i = 1;
    int j = 3;

    replaceBits(n, m, i, j);
    cout << n << endl;

    return 0;
}
```

![](https://i.imgur.com/rtx8ach.png)

# Challenge: Power of 2

**Approach:**

![](https://i.imgur.com/jCwqwiR.png)

**Code:**

```cpp
#include <bits/stdc++.h>
using namespace std;

int main()
{
    int n;
    cin >> n;

    if ((n & (n - 1)) == 0)
    {
        cout << "Power of 2" << endl;
    }
    else
    {
        cout << "Not a power of 2" << endl;
    }
    return 0;
}
```

# Counting Set Bits

Write a function to count a set of bits in a number.

Set Bits?

![](https://i.imgur.com/F8B62QX.png)

**Approach:**

![](https://i.imgur.com/KDsvTCv.png)

![](https://i.imgur.com/fF3vu0t.png)

**Code:**

```cpp
#include <bits/stdc++.h>
using namespace std;

int count_bits(int n)
{
    int count = 0;
    while (n > 0)
    {
        int last_bit = (n & 1);
        count += last_bit;

        n = n >> 1;
    }
    return count;
}

int main()
{
    int n;
    cin >> n;
    cout << count_bits(n) << endl;
    return 0;
}
```

# Fast Exponentiation

**Approach:**

![](https://i.imgur.com/HFPWNIr.png)

**Time Complexity:**

$$O(log_2n)$$

**Code:**

```cpp
#include <bits/stdc++.h>
using namespace std;

int fastExpo(int a, int n)
{
    int ans = 1;
    while (n > 0)
    {
        int lastBit = (n & 1);
        if (lastBit)
        {
            ans = ans * a;
        }
        a = a * a;
        n = n >> 1;
    }

    return ans;
}

int main()
{
    int a, n;
    cin >> a >> n;

    cout << fastExpo(a, n) << endl;
    return 0;
}
```

Decimal to Binary

**Approach:**

![](https://i.imgur.com/hWG9gvI.png)

**Code:**

```cpp
#include <bits/stdc++.h>
using namespace std;

int convertToBinary(int n)
{
    int ans = 0;
    int power = 1;
    while (n > 0)
    {
        int lastBit = (n & 1);
        ans += power * lastBit;
        power *= 10;
        n = n >> 1;
    }
    return ans;
}

int main()
{
    int n;
    cin >> n;
    cout << convertToBinary(n) << endl;
    return 0;
}
```

---

Next Section ⇾
[[19 Recursion Introduction]]