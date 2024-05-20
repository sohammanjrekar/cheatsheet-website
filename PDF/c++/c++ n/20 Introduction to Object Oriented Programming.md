# Introduction

+ Objects?
These are the real world entities.

```bash
penObject:
	color: black # Property/Attribute
	thinkness: 5px # Property/Attribute
	setColor("Red") # Method
	battery(67) # Method
# So, Instead of making different variable, we are going to warp them into a single class.
```

# Classes & Objects

$$Class = BLuePrint$$
The blueprint tells the compiler how to make an actual object.

$$Object = InstanceOfClass$$
So, Classes are needed to make objects in memory.

```cpp
class Car
{
	// private: (By default) Data Hiding
	int price;
	int model_id;
	char name[100];

public:
	void show()
	{
	cout << "Name " << name << "Model " << model;
	}
	void update_price()
	{
	// Logic....
	}
};
```

# Basic Program

**Code:**

```cpp
#include <bits/stdc++.h>
using namespace std;

class Product
{
private:
    int id;
    char name[100];

public:
    int costPrice;
    int sellingPrice;
};

int main()
{
    Product camera;
    cout << sizeof(camera) << endl; // 4 + 100 + 4 + 4 = 112

    // sellingPrice <= costPrice
    camera.costPrice = 50000;
    camera.sellingPrice = 60000;

    cout << "Cost Price: " << camera.costPrice << endl;
    cout << "Selling Price: " << camera.sellingPrice << endl;
    return 0;
}
```

# Getters & Setters

```cpp
#include <bits/stdc++.h>
using namespace std;

class Product
{
private:
    int id;
    char name[100];
    int costPrice;
    int sellingPrice;

public:
    // Setters
    void setCostPrice(int price)
    {
        if (price > 0)
        {
            costPrice = price;
        }
    }
    void setSellingPrice(int price)
    {
        // Additionl Checks
        if (price > costPrice)
        {
            sellingPrice = price;
        }
        else
        {
            sellingPrice = costPrice;
        }
    }

    // Getters
    int getCostPrice()
    {
        return costPrice;
    }
    int getSellingPrice()
    {
        return sellingPrice;
    }
};

int main()
{
    Product camera;
    cout << sizeof(camera) << endl; // 4 + 100 + 4 + 4 = 112

    camera.setCostPrice(50000);
    camera.setSellingPrice(5000);

    cout << "Cost Price: " << camera.getCostPrice() << endl;
    cout << "Selling Price: " << camera.getSellingPrice() << endl;
    return 0;
}
```

# Constructor

```bash
Default Methods/ Functions
+ Constructor
+ Copy Constructor
+ Copy Assignment Operator
+ Destructor
```

## Constructor

+ Constructor Name = Class Name
+ Called automatically when an object is created.
+ Memory allocation happens when constructor is called.
+ Constructor is called only once for each object.

![](https://i.imgur.com/WME42Db.png)


```cpp
#include <bits/stdc++.h>
using namespace std;

class Product
{
private:
    int id;
    char name[100];
    int costPrice;
    int sellingPrice;

public:
    // Constructor
    Product()
    {
        cout << "First Constructor" << endl;
        cout << "Inside Constructor" << endl;
        cout << "Called Automatically" << endl;
        cout << endl;
    }

    // Constructor with parameter
    Product(int id, char *n, int costPrice, int sellingPrice)
    {
        cout << "Second Constructor" << endl;
        this->id = id;
        strcpy(name, n);
        this->costPrice = costPrice;
        this->sellingPrice = sellingPrice;
    }

    // As we defined 2 constructor, it created constructor overloading.
    // Only one will be called i.e. first constructor

    // Setters
    void setCostPrice(int price)
    {
        if (price > 0)
        {
            costPrice = price;
        }
    }
    void setSellingPrice(int price)
    {
        // Additionl Checks
        if (price > costPrice)
        {
            sellingPrice = price;
        }
        else
        {
            sellingPrice = costPrice;
        }
    }

    // Getters
    int getCostPrice()
    {
        return costPrice;
    }
    int getSellingPrice()
    {
        return sellingPrice;
    }
};

int main()
{
    cout << "First Constructor, calling from main function" << endl;
    Product FirstCamera;
    // cout << sizeof(camera) << endl; // 4 + 100 + 4 + 4 = 112

    // camera.setCostPrice(50000);
    // camera.setSellingPrice(5000);
    Product camera(214, "GoPro11", 32000, 35000);

    cout << "Cost Price: " << camera.getCostPrice() << endl;
    cout << "Selling Price: " << camera.getSellingPrice() << endl;
    return 0;
}
```

**Parametrized Constructor:** Constructors can also take parameters, which can be useful for setting initial values for data members.

$$Overloading = Multiple Functions With Same Name $$


# Copy Constructor

+ Creates a copy of given object
+ Initialize an object using another object of the same class.

```cpp
className(const className &objectName)
```

```cpp
#include <bits/stdc++.h>
using namespace std;

class Product
{
private:
    int id;
    char name[100];
    int costPrice;
    int sellingPrice;

public:
    // Constructor
    Product()
    {
        cout << "First Constructor" << endl;
        cout << "Inside Constructor" << endl;
        cout << "Called Automatically" << endl;
        cout << endl;
    }

    // Constructor with parameter
    Product(int id, char *n, int costPrice, int sellingPrice)
    {
        cout << "Second Constructor" << endl;
        this->id = id;
        strcpy(name, n);
        this->costPrice = costPrice;
        this->sellingPrice = sellingPrice;
    }

    // As we defined 2 constructor, it created constructor overloading.
    // Only one will be called i.e. first constructor if there is no parameter

    // Copy Constructor
    // When we define copy constructor manually, we have to write logic to copy the values.
    // Otherwise it will return garbage values.
    Product(Product &x)
    {
        id = x.id;
        costPrice = x.costPrice;
        sellingPrice = x.sellingPrice;
    }

    // Setters
    void setCostPrice(int price)
    {
        if (price > 0)
        {
            costPrice = price;
        }
    }
    void setSellingPrice(int price)
    {
        // Additionl Checks
        if (price > costPrice)
        {
            sellingPrice = price;
        }
        else
        {
            sellingPrice = costPrice;
        }
    }

    // Getters
    int getCostPrice()
    {
        return costPrice;
    }
    int getSellingPrice()
    {
        return sellingPrice;
    }
    void showDetails()
    {
        cout << endl;
        cout << "ID: " << id << endl;
        cout << "Name: " << name << endl;
        cout << "Cost Price: " << costPrice << endl;
        cout << "Selling Price: " << sellingPrice << endl;
    }
};

int main()
{
    Product camera(214, "GoPro11", 32000, 35000);

    // camera.showDetails();
	
	// Method 1
    Product webcam(camera);
    camera.showDetails();
    webcam.showDetails();

	// Method 2
	Product phoneCamera = camera;
	phoneCamera.showDetails();
    return 0;
}
```

> When we define copy constructor manually, character and string shows errors, because array name is `read-only` object.

Copying character or string to the copy constructor, we have to use `strcpy()` function.

#### When to create user defined copy constructor?

The compiler created copy constructor works fine for most cases.
We need to define our own copy constructor only if an object has pointers to dynamically allocated objects, i.e. is a **deep copy** of an object is needed.

![](https://i.imgur.com/xrSFC6I.png)


> ✨ When we are copying the constructor, the address of a dynamically allocated variable is copied, it is called shallow copy. When we update this copied variable, it will reflect the changes to the original.

> ✨ When we are copying the constructor and the value of the variable is copied, it is called deep copy. When we update the copied variable, it will not reflect the changes into the original variable.

```cpp
#include <bits/stdc++.h>
using namespace std;

class Product
{
private:
    int id;
    char *name;
    int costPrice;
    int sellingPrice;

public:
    // Constructor
    Product()
    {
        cout << "First Constructor" << endl;
        cout << "Inside Constructor" << endl;
        cout << "Called Automatically" << endl;
        cout << endl;
    }

    // Constructor with parameter
    Product(int id, char *n, int costPrice, int sellingPrice)
    {
        cout << "Second Constructor" << endl;
        this->id = id;
        this->costPrice = costPrice;
        this->sellingPrice = sellingPrice;
        name = new char[strlen(n) + 1];
        strcpy(name, n);
    }

    // As we defined 2 constructor, it created constructor overloading.
    // Only one will be called i.e. first constructor if there is no parameter

    // Copy Constructor
    // When we define copy constructor manually, we have to write logic to copy the values.
    // Otherwise it will return garbage values.

    Product(Product &x)
    {
        id = x.id;
        name = new char[strlen(x.name) + 1];
        strcpy(name, x.name);
        costPrice = x.costPrice;
        sellingPrice = x.sellingPrice;
    }

    // Setters
    void setCostPrice(int price)
    {
        if (price > 0)
        {
            costPrice = price;
        }
    }
    void setSellingPrice(int price)
    {
        // Additionl Checks
        if (price > costPrice)
        {
            sellingPrice = price;
        }
        else
        {
            sellingPrice = costPrice;
        }
    }
    void setName(char *name)
    {
        strcpy(this->name, name);
    }

    // Getters
    int getCostPrice()
    {
        return costPrice;
    }
    int getSellingPrice()
    {
        return sellingPrice;
    }
    void showDetails()
    {
        cout << endl;
        cout << "ID: " << id << endl;
        cout << "Name: " << name << endl;
        cout << "Cost Price: " << costPrice << endl;
        cout << "Selling Price: " << sellingPrice << endl;
    }
};

int main()
{
    Product camera(214, "GoPro11", 32000, 35000);
    Product old_camera(camera);

    old_camera.setName("GoPro8");

    old_camera.showDetails();
    camera.showDetails();

    return 0;
}
```

> Deep copy is possible only with user defined copy constructor.


# Copy Assignment Operator =

The assignment operator is called when an already initialized object is assigned a new value from another existing object.

This operator copy shallow copy, Thus we need to define our own 

```cpp
#include <bits/stdc++.h>
using namespace std;

class Product
{
private:
    int id;
    char *name;
    int costPrice;
    int sellingPrice;

public:
    // Constructor
    Product()
    {
        cout << "First Constructor" << endl;
        cout << "Inside Constructor" << endl;
        cout << "Called Automatically" << endl;
        cout << endl;
    }

    // Constructor with parameter
    Product(int id, char *n, int costPrice, int sellingPrice)
    {
        cout << "Second Constructor" << endl;
        this->id = id;
        this->costPrice = costPrice;
        this->sellingPrice = sellingPrice;
        name = new char[strlen(n) + 1];
        strcpy(name, n);
    }

    // As we defined 2 constructor, it created constructor overloading.
    // Only one will be called i.e. first constructor if there is no parameter

    // Copy Constructor
    // When we define copy constructor manually, we have to write logic to copy the values.
    // Otherwise it will return garbage values.

    Product(Product &x)
    {
        id = x.id;
        name = new char[strlen(x.name) + 1];
        strcpy(name, x.name);
        costPrice = x.costPrice;
        sellingPrice = x.sellingPrice;
    }

    // Setters
    void setCostPrice(int price)
    {
        if (price > 0)
        {
            costPrice = price;
        }
    }
    void setSellingPrice(int price)
    {
        // Additionl Checks
        if (price > costPrice)
        {
            sellingPrice = price;
        }
        else
        {
            sellingPrice = costPrice;
        }
    }
    void setName(char *name)
    {
        strcpy(this->name, name);
    }

    // Copy Assignment Operator
    void operator=(Product &x)
    {
        cout << "Inside Copy Assignment Operator's Logic" << endl;
        cout << "Deep Copy inside Copy Assignment Operator" << endl;
        id = x.id;
        name = new char[strlen(x.name) + 1];
        strcpy(name, x.name);
        costPrice = x.costPrice;
        sellingPrice = x.sellingPrice;
    }

    // Getters
    int getCostPrice()
    {
        return costPrice;
    }
    int getSellingPrice()
    {
        return sellingPrice;
    }
    void showDetails()
    {
        cout << endl;
        cout << "ID: " << id << endl;
        cout << "Name: " << name << endl;
        cout << "Cost Price: " << costPrice << endl;
        cout << "Selling Price: " << sellingPrice << endl;
    }
};

int main()
{
    Product camera(214, "GoPro11", 32000, 35000);
    Product old_camera;

    // Copy Assignment Operator
    old_camera = camera;

    old_camera.setName("GoPro8");
    old_camera.showDetails();
    camera.showDetails();

    return 0;
}
```

# Destructor

+ Function that is called Automatically when an object is destroyed, i.e. object goes out of scope or destroyed explicitly by call to **delete**.
+ The compiler provides a default destructor.
+ A user defined destructor is needed when the class contains pointers to dynamically allocated.

```cpp
class Car
{
	public:
		// Destructor
		~Car()
		{
			// Logic to clear dynamically allocated memory
		}
};
```


```cpp
#include <bits/stdc++.h>
using namespace std;

class Product
{
private:
    int id;
    char *name; // Dynamically Allocated
    int costPrice;
    int sellingPrice;

public:
    // Constructor
    Product()
    {
        cout << "First Constructor" << endl;
        cout << "Inside Constructor" << endl;
        cout << "Called Automatically" << endl;
        cout << endl;
    }

    // Constructor with parameter
    Product(int id, char *n, int costPrice, int sellingPrice)
    {
        cout << "Second Constructor" << endl;
        this->id = id;
        this->costPrice = costPrice;
        this->sellingPrice = sellingPrice;
        name = new char[strlen(n) + 1];
        strcpy(name, n);
    }

    // As we defined 2 constructor, it created constructor overloading.
    // Only one will be called i.e. first constructor if there is no parameter

    // Copy Constructor
    // When we define copy constructor manually, we have to write logic to copy the values.
    // Otherwise it will return garbage values.

    Product(Product &x)
    {
        id = x.id;
        name = new char[strlen(x.name) + 1];
        strcpy(name, x.name);
        costPrice = x.costPrice;
        sellingPrice = x.sellingPrice;
    }

    // Setters
    void setCostPrice(int price)
    {
        if (price > 0)
        {
            costPrice = price;
        }
    }
    void setSellingPrice(int price)
    {
        // Additionl Checks
        if (price > costPrice)
        {
            sellingPrice = price;
        }
        else
        {
            sellingPrice = costPrice;
        }
    }
    void setName(char *name)
    {
        strcpy(this->name, name);
    }

    // Copy Assignment Operator
    void operator=(Product &x)
    {
        cout << "Inside Copy Assignment Operator's Logic" << endl;
        cout << "Deep Copy inside Copy Assignment Operator" << endl;
        id = x.id;
        name = new char[strlen(x.name) + 1];
        strcpy(name, x.name);
        costPrice = x.costPrice;
        sellingPrice = x.sellingPrice;
    }

    // Getters
    int getCostPrice()
    {
        return costPrice;
    }
    int getSellingPrice()
    {
        return sellingPrice;
    }
    void showDetails()
    {
        cout << endl;
        cout << "ID: " << id << endl;
        cout << "Name: " << name << endl;
        cout << "Cost Price: " << costPrice << endl;
        cout << "Selling Price: " << sellingPrice << endl;
    }

    ~Product()
    {
        cout << endl;
        cout << "Deleting: " << name << endl;
    }
};

int main()
{
    Product camera(214, "GoPro11", 32000, 35000);
    Product old_camera;

    // Copy Assignment Operator
    old_camera = camera;

    old_camera.setName("GoPro8");
    old_camera.showDetails();
    camera.showDetails();

    return 0;
}
```

# Memory Leak

![](https://i.imgur.com/eCxZFJ0.png)
When we call the destructor, it deletes the address of the dynamically allocated variable, but doesn't delete the variable itself. This situation is called **Memory Leaks**. To solve this problem, user have to delete the dynamically allocated variable.

```cpp
#include <bits/stdc++.h>
using namespace std;

class Product
{
private:
    int id;
    char *name; // Dynamically Allocated
    int costPrice;
    int sellingPrice;

public:
    // Constructor
    Product()
    {
        cout << "First Constructor" << endl;
        cout << "Inside Constructor" << endl;
        cout << "Called Automatically" << endl;
        cout << endl;
    }

    // Constructor with parameter
    Product(int id, char *n, int costPrice, int sellingPrice)
    {
        cout << "Second Constructor" << endl;
        this->id = id;
        this->costPrice = costPrice;
        this->sellingPrice = sellingPrice;
        name = new char[strlen(n) + 1];
        strcpy(name, n);
    }

    // As we defined 2 constructor, it created constructor overloading.
    // Only one will be called i.e. first constructor if there is no parameter

    // Copy Constructor
    // When we define copy constructor manually, we have to write logic to copy the values.
    // Otherwise it will return garbage values.

    Product(Product &x)
    {
        id = x.id;
        name = new char[strlen(x.name) + 1];
        strcpy(name, x.name);
        costPrice = x.costPrice;
        sellingPrice = x.sellingPrice;
    }

    // Setters
    void setCostPrice(int price)
    {
        if (price > 0)
        {
            costPrice = price;
        }
    }
    void setSellingPrice(int price)
    {
        // Additionl Checks
        if (price > costPrice)
        {
            sellingPrice = price;
        }
        else
        {
            sellingPrice = costPrice;
        }
    }
    void setName(char *name)
    {
        strcpy(this->name, name);
    }

    // Copy Assignment Operator
    void operator=(Product &x)
    {
        cout << "Inside Copy Assignment Operator's Logic" << endl;
        cout << "Deep Copy inside Copy Assignment Operator" << endl;
        id = x.id;
        name = new char[strlen(x.name) + 1];
        strcpy(name, x.name);
        costPrice = x.costPrice;
        sellingPrice = x.sellingPrice;
    }

    // Getters
    int getCostPrice()
    {
        return costPrice;
    }
    int getSellingPrice()
    {
        return sellingPrice;
    }
    void showDetails()
    {
        cout << endl;
        cout << "ID: " << id << endl;
        cout << "Name: " << name << endl;
        cout << "Cost Price: " << costPrice << endl;
        cout << "Selling Price: " << sellingPrice << endl;
    }

    ~Product()
    {
        cout << endl;
        cout << "Deleting: " << name << endl;

		// Removing Memory Leaks
        if (name != NULL)
        {
            delete[] name;
            name = NULL;
        }
    }
};

int main()
{
    Product camera(214, "GoPro11", 32000, 35000);
    Product old_camera;

    // Copy Assignment Operator
    old_camera = camera;

    old_camera.setName("GoPro8");
    old_camera.showDetails();
    camera.showDetails();

    return 0;
}
```

---
