# C++ Boilerplate

![](https://i.imgur.com/1YYMYN5.png)

# Setup
+ Install GCC Compiler
	+ For Linux and Mac
```bash
sudo apt install build-essential
```

+ Install Code Editor
1. Sublime
You can download & Install Sublime Text from here: [https://www.sublimetext.com](https://www.sublimetext.com/)

2. VS Code
```bash
sudo apt-get install wget gpg

wget -qO- https://packages.microsoft.com/keys/microsoft.asc | gpg --dearmor > packages.microsoft.gpg

sudo install -o root -g root -m 644 packages.microsoft.gpg /etc/apt/trusted.gpg.d/

sudo sh -c 'echo "deb [arch=amd64,arm64,armhf signed-by=/etc/apt/trusted.gpg.d/packages.microsoft.gpg] https://packages.microsoft.com/repos/code stable main" > /etc/apt/sources.list.d/vscode.list'

rm -f packages.microsoft.gpg

sudo apt install apt-transport-https

sudo apt update

sudo apt install code # or code-insiders
```

# Building & Running Code

+ CPP Code

```cpp
#include <iostream>
using namespace std;
int main()
{
    cout << "Hello World" << endl;
    return 0;
}
```

+ Save file before compiling
+ Compilation Process

```bash
# Compiling
g++ fileName.cpp

# Run executable output file
./a.out

# Change name of output file
g++ -o outputFileName.out fileName.cpp
```

> To reflect modifications in the program, we need to compile it again.

# Input & Output

```cpp
#include <iostream>
using namespace std;
int main()
{
    // User Input
    cout << "Enter marks of Physics, chemistry and Maths";
    int physics, chem, maths;
    cin >> physics >> chem >> maths;

    // Calculations
    float average = (physics + chem + maths) / 3.0;

    // Output
    cout << "Average marks: " << average << endl;

    return 0;
}
```


---

Next Section ⇾
[[04 C++ Diving Deeper]]