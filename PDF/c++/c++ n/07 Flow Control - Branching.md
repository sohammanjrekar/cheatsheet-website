# If Statement

```cpp
#include <bits/stdc++.h>
using namespace std;
int main()
{
    int marks = 90;

    if (marks > 80)
    {
        cout << "Let's Party" << endl;
    }
    return 0;
}
```

+ We can also use `if` statement without brackets. I will consider one line as a part of it.

```cpp
#include <bits/stdc++.h>
using namespace std;
int main()
{
    int marks;
    cin >> marks;

    if (marks > 80)
        cout << "This will executed" << endl;
        cout << "This will always executed" << endl;
    return 0;
}
```

> For more clarity about code, we must use brackets.

# If-Else

```cpp
#include <bits/stdc++.h>
using namespace std;
int main()
{
    int marks = 90;

    if (marks > 80)
    {
        cout << "Let's Party" << endl;
    }
    else
    {
	    cout << "Work Hard" << endl;
    }
    return 0;
}
```
> `else` can't be use independently.

# If Else-if Else

```cpp
#include <bits/stdc++.h>
using namespace std;
int main()
{
    int marks = 90;

    if (marks > 80)
    {
        cout << "Let's Party" << endl;
    }
    else if (marks > 70)
    {
	    cout << "You can do better" <<endl;
    }
    else
    {
	    cout << "Work Hard" << endl;
    }
    return 0;
}
```

> We can put multiple `else if` statements in a loop. In case of more than one `else if` conditions are true, the top one would be executed.

# Multiple If Blocks

```cpp
#include <bits/stdc++.h>
using namespace std;
int main()
{
    int weather = 1;
    if (weather == 1)
    {
        cout << "Enjoy the day" << endl;
    }

    int marks = 90;
    if (marks >= 90)
    {
        cout << "Good Job" << endl;
    }
    return 0;
}
```

# Problem - Electricity Bill Calculator

Electricity Bill Calculator: Given total consumption of a household in units, write a program to estimate the total bill amount as per the table.

| Units            | Charges      |
| ---------------- | ------------ |
| 1 to 100 units   | Free         |
| 100 to 200 units | Rs. 5/unit   |
| 200 to 300 units | Rs. 10/unit |
| 300+ units       | Rs. 12/unit             |

**Code:**

```cpp
#include <bits/stdc++.h>
using namespace std;
int main()
{
    int units, bill;
    cin >> units;

    if (units <= 100)
    {
        bill = 0;
    }
    else if (units <= 200)
    {
        bill = (units - 100) * 5;
    }
    else if (units <= 300)
    {
        bill = 100 * 5 + (units - 200) * 10;
    }
    else
    {
        bill = 100 * 5 + 100 * 10 + (units - 300) * 12;
    }

    cout << "Your Electricity Bill: Rs. " << bill << endl;
    return 0;
}
```

# Ternary Operator 

```cpp
#include <bits/stdc++.h>
using namespace std;
int main()
{
    int x;
    cin >> x;

    x % 2 == 0 ? cout << "Even\n" : cout << "Odd\n";

    string weather = x > 30 ? "Hot" : "Cold";
    cout << weather << endl;

    return 0;
}
```

# Switch Case

```cpp
#include <bits/stdc++.h>
using namespace std;
int main()
{
    int day;
    cin >> day;

    switch (day)
    {
    case 1:
        cout << "Monday";
        break;
    case 2:
        cout << "Tuesday";
        break;
    case 3:
        cout << "Wednesday";
        break;
    case 4:
        cout << "Thursday";
        break;
    case 5:
        cout << "Friday";
        break;
    case 6:
        cout << "Saturday";
        break;
    case 7:
        cout << "Sunday";
        break;
    default:
        cout << "Invalid Input";
        break;
    }

    return 0;
}
```

# Problem - Simple Calculator

```cpp
#include <bits/stdc++.h>
using namespace std;
int main()
{
    int a, b;
    char op;
    cin >> a >> op >> b;
    switch (op)
    {
    case '+':
        cout << a + b;
        break;
    case '-':
        cout << a - b;
        break;
    case '*':
        cout << a * b;
        break;
    case '%':
        cout << a % b;
        break;
    default:
        cout << "Invalid operator";
    }

    return 0;
}
```


---

Next Section ⇾
[[08 Flow Control - Loops]]