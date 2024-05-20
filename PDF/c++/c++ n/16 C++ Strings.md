# Introduction

![](https://i.imgur.com/XBIXgMT.png)

`string` Class available in C++ `Standard Template Library`.

+ Contiguous in memory.
+ Dynamic size can grow & shrink during run time.
+ Better than character arrays, due to fixed size of char arrays.
+ Support a lot of useful member functions, no need to write functions from scratch.
+ Support operators like (+, =, <, <=, !=, `[]`, ......)
+ Safer, provide methods for bound checking.

![](https://i.imgur.com/qKtqPK1.png)

```cpp
#include <iostream>
#include <string>
using namespace std;

int main()
{
    string s1 = "Hello";
    char s2[6] = "Hello";

    // In strings, s[x] is equals to s.at(x)
    // Searching at 0th index
    cout << "String: " << s1.at(0) << endl;
    cout << "Character Array: " << s2[0] << endl;

    // Searching at 0th index
    cout << "String: " << s1.at(12) << endl; // This gives an error
    cout << "Character Array: " << s2[12] << endl; // While char array don't

    return 0;
}
```


# String Initialization

```cpp
#include <iostream>
#include <string>
using namespace std;

int main()
{
    string s1{"Hello"};
    string s2 = "Hello World";
    string s3(s2);
    string s4{s2};
    string s5(8, 'O');   // 8 times O
    string s6(8, 65);    // 8 times A
    string s7(s2, 0, 4); // String slicing
    string s8 = "Hi";
    s8 = "Bye";
    string s9 = s1 + s2 + s5 + "Jay Shri Ram" + s8;
    cout << s1 << endl;
    cout << s2 << endl;
    cout << s3 << endl;
    cout << s4 << endl;
    cout << s5 << endl;
    cout << s6 << endl;
    cout << s7 << endl;
    cout << s8 << endl;
    cout << s9 << endl;

    return 0;
}
```

# Input using `getline()`

```cpp
#include <iostream>
#include <string>
using namespace std;

int main()
{
    string name;

    // User Input
    // cin >> name; Doesn't work with strings containing spaces
    // getline(cin, name); Doesn't work with strings containing different lines
    getline(cin, name, '$');

    cout << "Hi " + name << endl;
    return 0;
}
```

# String Operations

```cpp
#include <iostream>
#include <string>
using namespace std;

int main()
{
    string s1, s2;
    cin >> s1 >> s2;

    if (s1 == s2)
    {
    }
    else if (s1 > s2)
    {
        cout << s1 + " comes after " + s2 << endl;
    }
    else
    {
        cout << s1 + " comes before " + s2 << endl;
    }

    cout << endl;

    string firstName = "Dhananjay";
    string lastName = "Porwal";
    string completeName = firstName;
    completeName += lastName;
    cout << completeName << endl;
    return 0;
}
```

>🤔 Here string comparison is based on `ASCII` values.

# String Traversal

```cpp
#include <bits/stdc++.h>
using namespace std;

int main()
{
    // Traversal of character array
    char name[100];
    strcpy(name, "Dhananjay Porwal");

    // M-1: Traversal using length
    for (int i = 0; i < strlen(name); i++)
    {
        cout << name[i] << ",";
    }

    cout << endl;

    // M-2: Traversal till null character
    for (int i = 0; name[i] != '\0'; i++)
    {
        cout << name[i] << ",";
    }

    cout << endl;

    // String Traversal
    string name1 = "Dhananjay Porwal";

    // M-1: Using .length() method
    for (int i = 0; i < name1.length(); i++)
    {
        cout << name1[i] << ",";
    }

    cout << endl;

    // M-2: for each loop
    for (char x : name1)
    {
        cout << x << ",";
    }

    cout << endl;

    // Ascii values of each character
    for (int x : name1)
    {
        cout << x << ",";
    }

    return 0;
}
```

# String Documentation

[cplusplus.com](https://cplusplus.com/reference/string/string/)

# String Methods

```cpp
#include <bits/stdc++.h>
using namespace std;

int main()
{
    char a[1000] = "apple";
    char b[1000];

    // calculate length
    cout << strlen(a) << endl;

    // concatenation
    cout << strcat(b, a) << endl;

    // compare : if equal return 0 ,else return positive or negative
    cout << strcmp(b, a) << endl;

    return 0;
}
``` 

# Find Method

```cpp
#include <bits/stdc++.h>
using namespace std;

int main()
{
    string paragraph = "We are learning about STL strings. STL string class is quite powerful.";
    cout << paragraph << endl;

    string word;
    cin >> word;

    // find function
    int index = paragraph.find(word);

    cout << " first occurrence : " << index << endl;

    index = paragraph.find(word, index + 1);

    if (index -= 1)
    {
        cout << "second occurrence: " << index << endl;
    }

    return 0;
}
```


#### Find all the Occurrence

**Code:**

```cpp
#include <bits/stdc++.h>
using namespace std;

int main()
{
    string paragraph = "We are learning about STL strings. STL string class is quite powerful.";
    cout << paragraph << endl;

    string word;
    cin >> word;

    // find function
    int index = 0;
    int number = 0;

    while (index != -1)
    {
        index = paragraph.find(word, number);
        cout << index << endl;
        number = index + 1;
        if (index == -1)
        {
            cout << "That's it, no index found/left." << endl;
        }
    }
    return 0;
}
```

# Challenge: Uncomment String

![](https://i.imgur.com/fjz6EY4.png)

**Code:**

```cpp
#include <bits/stdc++.h>
using namespace std;

string uncomment(string s)
{
    int idx1 = s.find("/*");
    int idx2 = s.find("*/");

    cout << idx1 << endl;
    cout << idx2 << endl;

    int start = idx1 + 2;
    int length = idx2 - start;

    return s.substr(start, length);
}

int main()
{
    string s = "        /* Hello World,  Shri Ram Janki Bethe he mere sine me  */     ";
    cout << uncomment(s) << endl;
    return 0;
}
```

---

Next Section ⇾
[[17 Dynamic Memory Allocation]]