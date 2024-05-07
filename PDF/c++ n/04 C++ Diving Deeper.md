# Preprocessor Directive

+ The pre-processors are the directives, which give instructions to the compiler to pre-process some code before actual compilation starts.
+ The directive begins with '#'
+ The actual code is compiled by compiler only.

`#include`
Directive tells the compiler to include the header file in the source code.

```cpp
#include<iostream>
#include<algorithm>
#include<stack>

int main(){
	// Code goes here
}
```

`#define`
The directive tells the compiler to create symbolic constants. The symbolic constant is called a **macro**.

All subsequent occurrences of a macro in that source code will be replaced by its replacement text before the program is complied.

```cpp
#define PI 3.14

int main(){
	// Area of Circle
	int r = 5;
	float area = PI * r * r;
	// area = 3.14 * r * r

	return 0;
}
```

# Identifiers
+ Both an identifier and a variable are the names allotted by users to a particular entity in a program.
+ The identifier is only used to identify an entity uniquely in a program at the time of execution whereas, a variable is a name given to a memory location, that is used to hold a value.

#### Identify the Identifier

```cpp
float calculateMarks(int p, int c, int m){
	float average = (p + c + m) / 3;
	return average;
}
```

```bash
Identifier: calculateMarks, p, c, m, average
```

```bash
Keywords: float, return
```

# Keywords

+ Keywords are the word that have a special meaning for the compiler.
+ These keywords can't be used as an identifier.
+ C++ has about 95 reserved words.

Here is a list of all these reserved words −

![](https://i.imgur.com/biqcQlv.png)

#### Identify the Keywords

```cpp
int factorial(int n){
	if(n<0){
		cout<< "Invalid Input";
		return -1;
	}

	int ans = 1;
	for(int i = 1; i <= n; i++){
		ans = ans * i;
	}

	return ans;
}
```

```bash
Keywords: int, if, return, for
```

# Main
#### main( ) function
+ Every C/C++ Program starts executing with main.
+ There is exactly 1 main function.
+ return 0, indicates successful execution of main.

##### Most common way

```cpp
int main(){
	//Execution starts from here
	return 0;
}
```

##### Command Line Apps

```cpp
int main(int argc, char *argv[]){
	// Logic
	return 0;
}
```

#### Main Recap
+ `main` is **not a keyword** in C/C++.
+ `main` is not predefined, but it is **predeclared**.
+ In C++, your code is linked against a **small runtime library** that constitutes the true starting point of your program.
+ It is a small library calls a function called main-- it's **hard-coded** to do so.
+ Your code runs because you supply the code inside main, also called function definition.

# Namespaces
+ Naming conflicts can arise if you multiple 3rd party libraries in the same program.
+ Namespaces are used to resolve naming conflicts.
+ `std` is the name for the standard C++ namespace.
+ Writing `std::cout` will tell the compiler to use "cout" from the standard namespace.

##### Third party Namespace

`using namespace cv;`
To avoid data structure and function name conflicts with other libraries, OpenCV has its own `namespace: cv`.

# Comments

+ Comment is text that is normally used to annotate code for further reference.
+ Comment is ignored by compiler, but that is useful for programmers.
+ You can use comments in testing to make certain lines of code inactive.
+ We can write **single line or multi-line** comments in a C++ program.

```cpp
#include<iostream>
using namespace std;

int main(){
	// Single-line Comment
	cout<<"Jay Shri Ram"<<endl;
	/*
	  This
	  is
	  multi-line
	  comment
	 */
}
```

# Summary
+ Keywords have special meaning for the compiler.
+ Identifiers are used to name an entity, a variable name is also a type of identifier.
+ Header files include some pre-written code required to execute our program.
+ Program execution always starts with main( ).
+ { } are used to enclose a block(function, if, while, etc..).
+ C++ compiler ignores whitespace (space, carriage returns, line feeds, tabs, vertical tabs, etc...).
+ Output using cout.
+ Input using cin.
+ Comments `//` or `/**/`.
+ Every statement must end with a semicolon `;`.


---

Next Section ⇾
[[05 Variables, Datatypes & Storage]]