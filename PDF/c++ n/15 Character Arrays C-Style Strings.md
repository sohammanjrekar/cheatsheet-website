# Character Array Basics

+ Sequence of characters stored in contiguous memory (character array).
+ Need to explicitly terminate by a null character.
+ Character Arrays support `read`, `write` and `update`.

## String Literals

+ Sequence of characters written in double quotes.
+ Stored in `read only memory`.
+ Terminated by a `Null Character`.

```cpp
#include <bits/stdc++.h>
using namespace std;

int main()
{
    cout << "This is String Literal" << endl;
    return 0;
}
```

## Creating String Variables (Char Array)

```cpp
#include <bits/stdc++.h>
using namespace std;

int main()
{
    // Note: strlen() function doesn't count the null character \0 while calculating the length.

    // C++ Style String
    char name[]{"Shree Ram"};
    char company[] = "Jay Shri Ram";

    // C Style String
    char intern_name[] = {'A', 'M', 'A', 'R', '\0'};

    cout << strlen(name) << endl;
    cout << strlen(intern_name) << endl;

    cout << name << endl;
    cout << company << endl;
    cout << intern_name << endl;

    return 0;
}
```

> Can't add more letters to an array.

# `getline()`

```cpp
#include <bits/stdc++.h>
using namespace std;

int main()
{
    char greeting[100];
    cin >> greeting;
    cout << greeting << endl;

    cout << endl;

    char greetingParagraph[100];
    cin.getline(greetingParagraph, 100, '.'); // cin.getline(variableName, size, terminatingCharacter)
    cout << greetingParagraph << endl;

    return 0;
}
```

# `cstring` Library Functions

```cpp
#include <iostream>
#include <cstring>
using namespace std;

int main()
{
    char name[100];
    // name = "Ram"; Not possible assigning to the address

    // This is correct way
    name[0] = 'R';
    name[1] = 'a';
    name[2] = 'm';
    name[3] = '\0';
    cout << name << endl;

    // Or
    strcpy(name, "Ram Ji Ram");
    cout << name << endl;

    // Concatenate Strings
    char greet[100];

    strcpy(greet, "Hari");
    strcat(greet, " Om");
    cout << greet << endl;

    // Sub-String Search 
    char sentence[100] = "I love reading books";
    char word[100];

    cin >> word;
    char *output = strstr(sentence, word);
    if (output == NULL)
    {
        cout << "Not Found" << endl;
    }
    else
    {
        cout << output << endl;
    }
    cout << strstr(sentence, word) << endl;

    return 0;
}
```

# Challenge Password Checker

```cpp
#include <bits/stdc++.h>
using namespace std;

bool checkPassword(char *password, char *expected)
{
    int index = 0;
    while (password[index] != '\0')
    {
        if (password[index] != expected[index])
        {
            return false;
        }
        index++;
    }
    return true;
}

int main()
{
    char *expectedPassword = "214@RaMji"; // Read only memory
    char password[100];                   // Stored in stack
    cin >> password;

    if (checkPassword(password, expectedPassword))
    {
        cout << "Login Successful" << endl;
    }
    else
    {
        cout << "Invalid Password" << endl;
    }
    return 0;
}
```

# String Comparison 

```cpp
#include <iostream>
#include <cstring>
using namespace std;

int main()
{
    char word1[100];
    char word2[100];

    cin >> word1 >> word2;

    cout << strcmp(word1, word2) << endl;
    if (strcmp(word1, word2) == 0)
    {
        cout << "Same String" << endl;
    }
    else
    {
        cout << "Different String" << endl;
    }

    return 0;
}
```

# Challenge Count Letter Types

Take input a string terminated with a `$`. Count the number of letters, digits, whitespace, and other special symbols before `$`.

**Input:**

```bash
hello5 world $
```

**Code:**

```cpp
#include <iostream>
#include <cctype>
#include <cstring>

using namespace std;

int main()
{
    char input[1000];
    cin.getline(input, 1000, '$');

    cout << input << endl;

    // Count Variables
    int alphabets = 0;
    int digits = 0;
    int symbols = 0;
    int whitespaces = 0;

    // Iterate over the array
    for (int i = 0; input[i] != '\0'; i++)
    {
        char ch = input[i];

        if (isalpha(ch))
        {
            alphabets++;
        }
        else if (isspace(ch))
        {
            whitespaces++;
        }
        else if (isdigit(ch))
        {
            digits++;
        }
    }

    cout << endl;

    cout << "Alphabet: " << alphabets << endl;
    cout << "Digit: " << digits << endl;
    cout << "Whitespace: " << whitespaces << endl;
    cout << "Special Symbols: " << strlen(input) - alphabets - digits - whitespaces << endl;

    return 0;
}
```

# 2D Character Arrays

```cpp
#include <bits/stdc++.h>
using namespace std;

int main()
{
    char number[][10] = {
        "one",
        "two",
        "three",
        "four",
        "five",
        "six",
        "seven"};

    // This will print particular character with specific index
    cout << number[6][0] << endl;

    cout << endl;

    // This will print complete row
    for (int i = 0; i <= 6; i++)
        cout << number[i] << endl;

    return 0;
}
```


---

Next Section ⇾
[[16 C++ Strings]]