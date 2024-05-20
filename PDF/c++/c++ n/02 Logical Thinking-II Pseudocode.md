# Pseudocode - Notation
Human readable description of an algorithm

Why it is required?
+  Language Independent
+ Structure of your code before writing it.
+ Fastest way to verify/ get a review.

**Notations**:

```markdown
+ Input [read N]
+ Assignment [sum = 0]
+ Output [print sum]
+ If else
	+ [if I < N then ... end else then ... end]
+ While loop
	+ [while I < N do ... end]
+ Exit [exit]
```

# Pseudocode - Simple Interest
```markdown
read P, R, T
SI = (P * R * T) / 100
print SI
exit
```

# Pseudocode - Sum 1 to N

```markdown
read N
i = 1
sum = 0
while i <= N {
	sum = sum + i
	i = i + 1
}
print sum
exit
```

# Pseudocode - Sum of N Numbers

```markdown
read N
sum = 0
i = 1
while i <= N {
	read temp
	sum = sum + temp
	i = i + 1
}
print sum
exit
```

# Pseudocode - Prime or Not

```markdown
read N
i = 2
while i <= N {
	if N % i == 0 {
		print "Not Prime"
		exit
	}
	i = i + 1
}
print "Prime"
exit
```

# Pseudocode - GCD
```markdown
read A, B
i = 1
GCD = 1
while i <= min(A,B) {
	if A % i == 0 and B % i == 0 {
		GCD = i
	}
	i = i + 1
}
print GCD
exit
```

# Pseudocode - Star Pattern
N = 3
```markdown
#
##
###
```

Observations:
> There are N rows.
> In i<sup>th</sup> row there are i no of stars.

```markdown
read N
i = 1
while i <= N {
	stars = 1
	while stars <= i {
		print "#"
		stars = stars + 1
	}
	print "\n"
	i = i + 1
}
exit
```

# Pseudocode - Star Pyramid
N = 3
```markdown
  #
 ###
#####
```

Observations:
> There are N rows.
> There are N-i spaces followed (2i - 1) stars in i<sup>th</sup> row.

```markdown
read N
i = 1
while i <= N {
	space = 1
	while space <= N-i {
		print " "
		space = space + 1
	}
	stars = 1
	while stars <= 2 * i - 1 {
		print "#"
		stars = stars + 1
	}
	print "\n"
	i = i + 1
}
exit
```

# Pseducode Assignment
1. Pseudocode to find sum of first N even numbers starting from 2.  
Example N = 4  
Output = 20  (2 + 4 + 6 + 8)  

```markdown
N = 4
i = 2
j = 0
sum = 0
while j < N {
	if i % 2 == 0 {
		sum = sum + i
		j = j + 1
	}
	i = i + 2
}
exit
```

2. Pseudocode to input marks in 5 subjects and find their average.  


```markdown
read m1, m2, m3, m4, m5
sum = m1 + m2 + m3 + m4 + m5
avg = sum / 5
exit
```

3. Pseudocode of find LCM of two numbers A and B. You may use the formula - LCM * GCD = Product (A,B)  

```markdown
read A, B
GCD = 0
i = 1
while i <= min(A,B) {
	if A % i == 0 and B % i == 0 {
		GCD = i
	}
	i = i + 1
}
product = A * B
LCM = product / GCD
exit
```
  
4.Pseudocode to print table of a given Number upto 10.  
N = 5  
Output: 5, 10,15,20,25,30,35,40,45,50  


```markdown
N = 5
i = 1
while i <= 10 {
	Print N * i
	i = i + 1
}
exit
```

5. Pseudocode that prints the numbers from 1 to 100 and for multiples of ‘3’ print “Fizz” instead of the number and for the multiples of ‘5’ print “Buzz”.  
Sample Output

1, 2, Fizz, 4, Buzz, Fizz, 7, 8, Fizz, Buzz, 11, Fizz, 13, 14, 
Fizz Buzz, 16, 17, Fizz, 19, Buzz, Fizz, 22, 23, Fizz, Buzz, 26, 
Fizz, 28, 29, Fizz Buzz, 31, 32, Fizz, 34, Buzz, Fizz, ...


```markdown
i = 1
while i <= 100 {
	if i % 3 == 0 {
		Print "Fizz"
	}
	else if i % 5 == 0 {
		Print "Buzz"
	}
	else {
		Print i
	}
	i = i + 1
}
exit
```

6. Pseudocode to find factorial of a number.  
N = 5  
Output : 120 (1*2*3*4*5)


```markdown
read N
i = 2
fact = 1
while i <= N {
	fact = fact * i
	i = i + 1
}
exit
```


---

Next Section ⇾
[[03 C++ Getting started]]