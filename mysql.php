<?php require_once 'Navbar.php'?>
    <!-- mid part -->
    <nav class="mt-5 pt-1 w-100">
        <div class="text-center " style="font-size: 5vh; font-weight: 900;padding-top:2vh">
            <img src="../img/mysql-icon.svg" alt="" /> MYSQL cheatsheet
        </div>
    </nav>
    <div class="container">
        <div class="p-5 mb-4 bg-light rounded-3 jumbo mt-2">
            <div class="container-fluid py-3">
                <h1 class="display-5 fw-bold">MYSQL</h1>
                <div class="row">
                    <div class="col-md-8">
                        <p class="fs-4">
                            SQL is the standard language for dealing with Relational Databases. SQL is used to insert, search, update, and delete database records.
                            </h3>
                    </div>
                    <div class="col-md-4">
                        <img src="../img/mysql-icon.svg" alt="" style="width:100% ;" />
                    </div>
                </div>
                <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#o1" aria-controls="o1">
                    Read More...
                </button>
                <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="o1" aria-labelledby="offcanvasWithBothOptionsLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">
                            Reactjs
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <h3>
                            Features of React.js: There are unique features are available on React because that it is widely popular.
                            <br><br>
                            <ul>
                                <li>
                                    Use sql: It is faster than normal JavaScript as it performs optimizations while translating to regular JavaScript. It makes it easier for us to create templates.</li>
                                <li>
                                    Virtual DOM: Virtual DOM exists which is like a lightweight copy of the actual DOM. So for every object that exists in the original DOM, there is an object for that in React Virtual DOM. It is exactly the same, but it does not have the power to directly
                                    change the layout of the document. Manipulating DOM is slow, but manipulating Virtual DOM is fast as nothing gets drawn on the screen.</li>
                                <li>
                                    One-way Data Binding: This feature gives you better control over your application.
                                </li>
                                <li>
                                    Component: A Component is one of the core building blocks of React. In other words, we can say that every application you will develop in React will be made up of pieces called components. Components make the task of building UIs much easier. You can
                                    see a UI broken down into multiple individual pieces called components and work on them independently and merge them all in a parent component which will be your final UI.</li>
                                <li>
                                    Performance: React.js use sql, which is faster compared to normal JavaScript and HTML. Virtual DOM is a less time taking procedure to update webpages content.</li>
                            </ul>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
        <ol>
            <!-- offcanvas -->
            <li>
                SELECT Statement<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom2" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom2" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">SELECT Statement</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        The SELECT statement is used to select data from a database.
                        <br> The data returned is stored in a result table, called the result-set.
                    </div>
                </div>
                <pre class="language-sql">
                <code>
                    SELECT column1, column2, ...
                    FROM table_name;
                </code>
            </pre>
                <h3>select all the fields available in the table</h3>
                <pre class="language-sql">
                <code>
                    SELECT * FROM table_name;
                </code>
            </pre>
            </li>
            <li>SELECT DISTINCT Statement<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom2" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom1" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">SELECT DISTINCT Statement</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        The SELECT DISTINCT statement is used to return only distinct (different) values.
                        <br> Inside a table, a column often contains many duplicate values; and sometimes you only want to list the different (distinct) values
                    </div>
                </div>
                <pre class="language-sql">
                                    <code>  SELECT DISTINCT column1, column2, ...
                                        FROM table_name;
                                        </code>
        </pre>
            </li>
            <li>
                For counts of unique entry
                <pre class="language-sql">
            <code>     SELECT COUNT(DISTINCT Country) FROM Custome</code>
        </pre>
            </li>
            <li>WHERE Clause<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom4" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom4" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">WHERE Clause</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        The WHERE clause is used to filter records.
                        <br> It is used to extract only those records that fulfill a specified condition.
                    </div>
                </div>
                <pre class="language-sql">
    <code>
        SELECT column1, column2, ...
        FROM table_name
        WHERE condition;
</code>
</pre>
            </li>
            <li>Operators in The WHERE Clause<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom5" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom5" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Operators in The WHERE Clause</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        <table class="ws-table-all notranslate">
                            <tbody>
                                <tr>
                                    <th style="width:20%">Operator</th>
                                    <th style="width:80%">Description</th>
                                </tr>
                                <tr>
                                    <td>=</td>
                                    <td>Equal</td>
                                </tr>
                                <tr>
                                    <td>&gt;</td>
                                    <td>Greater than</td>
                                </tr>
                                <tr>
                                    <td>&lt;</td>
                                    <td>Less than</td>
                                </tr>
                                <tr>
                                    <td>&gt;=</td>
                                    <td>Greater than or equal</td>
                                </tr>
                                <tr>
                                    <td>&lt;=</td>
                                    <td>Less than or equal</td>
                                </tr>
                                <tr>
                                    <td>&lt;&gt;</td>
                                    <td>Not equal. <b>Note:</b> In some versions of SQL this operator may be written as !=
                                    </td>
                                </tr>
                                <tr>
                                    <td>BETWEEN</td>
                                    <td>Between a certain range</td>
                                </tr>
                                <tr>
                                    <td>LIKE</td>
                                    <td>Search for a pattern</td>
                                </tr>
                                <tr>
                                    <td>IN</td>
                                    <td>To specify multiple possible values for a column</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </li>
            <li>
                AND, OR and NOT Operators<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas2" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvas2" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">AND, OR and NOT Operators</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        TThe WHERE clause can be combined with AND, OR, and NOT operators.
                        <br> The AND and OR operators are used to filter records based on more than one condition:
                        <br>
                        <ol>
                            <li>
                                The AND operator displays a record if all the conditions separated by AND are TRUE.</li>
                            <li>
                                The OR operator displays a record if any of the conditions separated by OR is TRUE.</li>
                            <li>
                                The NOT operator displays a record if the condition(s) is NOT TRUE.</li>
                        </ol>
                    </div>
                </div>
                <h3>AND Operator</h3>
                <pre class="language-sql">
    <code>
        SELECT column1, column2, ...
        FROM table_name
        WHERE condition1 AND condition2 AND condition3 ...;
</code>
</pre>
                <h3>OR Operator</h3>
                <pre class="language-sql">
    <code>
        SELECT column1, column2, ...
FROM table_name
WHERE condition1 OR condition2 OR condition3 ...;
</code>
</pre>
                <h3>NOT Operator</h3>
                <pre class="language-sql">
    <code>
        SELECT column1, column2, ...
FROM table_name
WHERE NOT condition;
</code>
</pre>
            </li>
            <li>
                ORDER BY Keyword<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom7" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom7" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">ORDER BY Keyword</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        The ORDER BY keyword is used to sort the result-set in ascending or descending order.
                        <br> The ORDER BY keyword sorts the records in ascending order by default. To sort the records in descending order, use the DESC keyword.
                    </div>
                </div>
                <pre class="language-sql">
    <code>
        SELECT column1, column2, ...
        FROM table_name
        ORDER BY column1, column2, ... ASC|DESC;
</code>
</pre>
            </li>
            <li>
                INSERT INTO Statement<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom8" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom8" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">INSERT INTO Statement</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        INSERT INTO statement is used to insert new records in a table.
                        <br> It is possible to write the INSERT INTO statement in two ways:
                        <br><br> 1. Specify both the column names and the values to be inserted:
                        <br> 2. If you are adding values for all the columns of the table, you do not need to specify the column names in the SQL query. However, make sure the order of the values is in the same order as the columns in the table.
                    </div>
                </div>
                <pre class="language-sql">
    <code>
        INSERT INTO table_name (column1, column2, column3, ...)
VALUES (value1, value2, value3, ...);
</code>
</pre>
                <pre class="language-sql">
    <code>
        INSERT INTO table_name
VALUES (value1, value2, value3, ...);
</code>
</pre>
            </li>
            <li>
                NULL Value<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom9" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom9" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Null value</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        A field with a NULL value is a field with no value.
                        <br> If a field in a table is optional, it is possible to insert a new record or update a record without adding a value to this field. Then, the field will be saved with a NULL value.
                        <br> Note: A NULL value is different from a zero value or a field that contains spaces. A field with a NULL value is one that has been left blank during record creation! <br><br> How to Test for NULL Values? <br> It is not possible
                        to test for NULL values with comparison operators, such as =,
                        <, or <>.
                            <br> We will have to use the IS NULL and IS NOT NULL operators instead.
                    </div>
                </div>
                <h3>IS NULL Syntax</h3>
                <pre class="language-sql">
    <code>
        SELECT column_names
FROM table_name
WHERE column_name IS NULL;
</code>
</pre>
                <h3>IS NOT NULL Syntax/h3>
                    <pre class="language-sql">
    <code>
        SELECT column_names
FROM table_name
WHERE column_name IS NOT NULL;
</code>
</pre>
            </li>
            <li>
                UPDATE Statement<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom10" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom10" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">UPDATE Statement</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        The UPDATE statement is used to modify the existing records in a table. Notice the WHERE clause in the UPDATE statement. <br> The WHERE clause specifies which record(s) that should be updated. If you omit the WHERE clause, all
                        records in the table will be updated!
                    </div>
                </div>
                <pre class="language-sql">
    <code>
        UPDATE table_name
        SET column1 = value1, column2 = value2, ...
        WHERE condition;
</code>
</pre>
            </li>
            <li>
                DELETE Statement<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom11" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom11" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">DELETE Statement</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        The DELETE statement is used to delete existing records in a table. <br> The WHERE clause specifies which record(s) should be deleted. If you omit the WHERE clause, all records in the table will be deleted!
                    </div>
                </div>
                <pre class="language-sql">
    <code>
        DELETE FROM table_name WHERE condition;
</code>
</pre>
                <h3>
                    Delete all rows in a table without deleting the table
                </h3>
                <pre class="language-sql">
    <code>
        DELETE FROM table_name;
</code>
</pre>
            </li>
            <li>
                LIMIT Clause<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom12" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom12" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">LIMIT Clause</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        The LIMIT clause is used to specify the number of records to return.
                        <br> The LIMIT clause is useful on large tables with thousands of records. Returning a large number of records can impact performance.
                    </div>
                </div>
                <pre class="language-sql">
    <code>
        SELECT column_name(s)
FROM table_name
WHERE condition
LIMIT number;
</code>
</pre>
            </li>
            <li>
                MIN() and MAX() Functions<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom13" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom13" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">MIN() and MAX() Functions</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        The LIMIT clause is used to specify the number of records to return.
                        <br> The LIMIT clause is useful on large tables with thousands of records. Returning a large number of records can impact performance.
                    </div>
                </div>
                <h3>MIN() Syntax</h3>
                <pre class="language-sql">
    <code>
        SELECT MIN(column_name)
FROM table_name
WHERE condition;
</code>
</pre>
                <pre class="language-sql">
    <code>
        SELECT MIN(Price) AS SmallestPrice
FROM Products;
</code>
</pre>
                <h3>MAX() Syntax</h3>
                <pre class="language-sql">
    <code>
        SELECT MAX(column_name)
FROM table_name
WHERE condition;
</code>
</pre>
                <pre class="language-sql">
    <code>
        SELECT MAX(Price) AS LargestPrice
        FROM Products;
</code>
</pre>
                <li>
                    COUNT()<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom14" aria-controls="offcanvasBottom">Read more...</button>
                    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom14" aria-labelledby="offcanvasBottomLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasBottomLabel">COUNT()</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body small">
                            The COUNT() function returns the number of rows that matches a specified criterion.
                        </div>
                    </div>
                    <pre class="language-sql">
<code>
    SELECT COUNT(column_name)
    FROM table_name
    WHERE condition;
</code>
</pre>
                </li>
                <li>
                    AVG()<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom16" aria-controls="offcanvasBottom">Read more...</button>
                    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom16" aria-labelledby="offcanvasBottomLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasBottomLabel">AVG()</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body small">
                            The AVG() function returns the average value of a numeric column.
                        </div>
                    </div>
                    <pre class="language-sql">
<code>
    SELECT AVG(column_name)
FROM table_name
WHERE condition;
</code>
</pre>
                </li>
                <li>
                    SUM()<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom18" aria-controls="offcanvasBottom">Read more...</button>
                    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom18" aria-labelledby="offcanvasBottomLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasBottomLabel">SUM()</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body small">
                            The SUM() function returns the total sum of a numeric column.
                        </div>
                    </div>
                    <pre class="language-sql">
<code>
    SELECT SUM(column_name)
FROM table_name
WHERE condition;
</code>
</pre>
                </li>
                <li>
                    LIKE Operator<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom19" aria-controls="offcanvasBottom">Read more...</button>
                    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom19" aria-labelledby="offcanvasBottomLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasBottomLabel">LIKE Operator</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body small">
                            The LIKE operator is used in a WHERE clause to search for a specified pattern in a column.
                            <br> There are two wildcards often used in conjunction with the LIKE operator:
                            <br>
                            <ol>
                                <li>
                                    The percent sign (%) represents zero, one, or multiple characters</li>
                                <li>The underscore sign (_) represents one, single character</li>
                                <li>The percent sign and the underscore can also be used in combinations!</li>
                            </ol><br> Tip: You can also combine any number of conditions using AND or OR operators.
                            <br>
                            <table class="ws-table-all notranslate table-bordered">
                                <tbody>
                                    <tr>
                                        <th>LIKE Operator</th>
                                        <th>Description</th>
                                    </tr>
                                    <tr>
                                        <td>WHERE CustomerName LIKE 'a%'</td>
                                        <td>Finds any values that start with "a"</td>
                                    </tr>
                                    <tr>
                                        <td>WHERE CustomerName LIKE '%a'</td>
                                        <td>Finds any values that end with "a"</td>
                                    </tr>
                                    <tr>
                                        <td>WHERE CustomerName LIKE '%or%'</td>
                                        <td>Finds any values that have "or" in any position</td>
                                    </tr>
                                    <tr>
                                        <td>WHERE CustomerName LIKE '_r%'</td>
                                        <td>Finds any values that have "r" in the second position</td>
                                    </tr>
                                    <tr>
                                        <td>WHERE CustomerName LIKE 'a_%'</td>
                                        <td>Finds any values that start with "a" and are at least 2 characters in length
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>WHERE CustomerName LIKE 'a__%'</td>
                                        <td>Finds any values that start with "a" and are at least 3 characters in length
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>WHERE ContactName LIKE 'a%o'</td>
                                        <td>Finds any values that start with "a" and ends with "o"</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <pre class="language-sql">
<code>
    SELECT column1, column2, ...
    FROM table_name
    WHERE columnN LIKE pattern;
</code>
</pre>
                    <pre class="language-sql">
    <code>
        SELECT * FROM Customers
        WHERE CustomerName LIKE 'a%';
    </code>
    </pre>
                </li>
                <li>
                    Wildcard Characters<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom21" aria-controls="offcanvasBottom">Read more...</button>
                    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom21" aria-labelledby="offcanvasBottomLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasBottomLabel">Wildcard Characters</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body small">
                            A wildcard character is used to substitute one or more characters in a string.
                            <br> Wildcard characters are used with the LIKE operator. The LIKE operator is used in a WHERE clause to search for a specified pattern in a column.
                            <br>
                            <table class="ws-table-all notranslate table-bordered">
                                <tbody>
                                    <tr>
                                        <th>Symbol</th>
                                        <th>Description</th>
                                        <th>Example</th>
                                    </tr>
                                    <tr>
                                        <td>%</td>
                                        <td>Represents zero or more characters</td>
                                        <td>bl% finds bl, black, blue, and blob</td>
                                    </tr>
                                    <tr>
                                        <td>_</td>
                                        <td>Represents a single character</td>
                                        <td>h_t finds hot, hat, and hit</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <pre class="language-sql">
<code>
    SELECT * FROM Customers
WHERE City LIKE '%es%';
</code>
</pre>
                    <pre class="language-sql">
    <code>
        SELECT * FROM Customers
WHERE City LIKE 'L_n_on';
    </code>
    </pre>
                </li>
                <li>
                    IN Operator<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom22" aria-controls="offcanvasBottom">Read more...</button>
                    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom22" aria-labelledby="offcanvasBottomLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasBottomLabel">IN Operator</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body small">
                            The IN operator allows you to specify multiple values in a WHERE clause.
                            <br> The IN operator is a shorthand for multiple <b> OR conditions.</b>
                        </div>
                    </div>
                    <pre class="language-sql">
<code>
    SELECT column_name(s)
    FROM table_name
    WHERE column_name IN (value1, value2, ...);
</code>
</pre>
                    <pre class="language-sql">
    <code>
        SELECT column_name(s)
FROM table_name
WHERE column_name IN (SELECT STATEMENT);
    </code>
    </pre>
                </li>
                <li>
                    BETWEEN Operator<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom23" aria-controls="offcanvasBottom">Read more...</button>
                    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom23" aria-labelledby="offcanvasBottomLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasBottomLabel">BETWEEN Operator</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body small">
                            The BETWEEN operator selects values within a given range. The values can be numbers, text, or dates.
                            <br> The BETWEEN operator is inclusive: begin and end values are included.
                        </div>
                    </div>
                    <pre class="language-sql">
<code>
    SELECT column_name(s)
FROM table_name
WHERE column_name BETWEEN value1 AND value2;
</code>
</pre>
                </li>
                <li>
                    Aliases<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom24" aria-controls="offcanvasBottom">Read more...</button>
                    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom24" aria-labelledby="offcanvasBottomLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasBottomLabel">Aliases</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body small">
                            <ul>
                                <li> Aliases are used to give a table, or a column in a table, a temporary name.</li>
                                <li>Aliases are often used to make column names more readable.</li>
                                <li>An alias only exists for the duration of that query.</li>
                                <li>An alias is created with the AS keyword.</li>
                            </ul>
                            <br> Note: Single or double quotation marks are required if the alias name contains spaces
                            <pre class="language-sql">
                <code>
SELECT CustomerName AS Customer, 
ContactName AS "Contact Person"
FROM Customers;
                </code>
                </pre>
                        </div>
                    </div>
                    <h3>Alias Column Syntax</h3>
                    <pre class="language-sql">
<code>
    SELECT column_name AS alias_name
FROM table_name;
</code>
</pre>
                    <h3>Alias Table Syntax</h3>
                    <pre class="language-sql">
    <code>
        SELECT column_name(s)
FROM table_name AS alias_name;
    </code>
    </pre>
                </li>
                <li>
                    Joining Tables<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom25" aria-controls="offcanvasBottom">Read more...</button>
                    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom25" aria-labelledby="offcanvasBottomLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasBottomLabel">Joining Tables</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body small">
                            A JOIN clause is used to combine rows from two or more tables, based on a related column between them.
                            <br> Supported Types of Joins in MySQL: <br>
                            <ul>
                                <li>INNER JOIN: Returns records that have matching values in both tables
                                    <img src="https://www.w3schools.com/mysql/img_innerjoin.gif" alt="">
                                </li>
                                <li> LEFT JOIN: Returns all records from the left table, and the matched records from the right table
                                    <img src="https://www.w3schools.com/mysql/img_leftjoin.gif" alt="">
                                </li>
                                <li> RIGHT JOIN: Returns all records from the right table, and the matched records from the left table
                                    <img src="https://www.w3schools.com/mysql/img_rightjoin.gif" alt="">
                                </li>
                                <li> CROSS JOIN: Returns all records from both tables
                                    <img src="https://www.w3schools.com/mysql/img_crossjoin.png" alt=""> Note: CROSS JOIN can potentially return very large result-sets!
                                </li>
                                <li> Self Join: A self join is a regular join, but the table is joined with itself. Note:T1 and T2 are different table aliases for the same table.
                                </li>
                            </ul>
                        </div>
                    </div>
                    <h3>INNER JOIN Syntax
                    </h3>
                    <pre class="language-sql">
<code>
    SELECT column_name(s)
FROM table1
INNER JOIN table2
ON table1.column_name = table2.column_name;
</code>
</pre>
                    <h3>LEFT JOIN Syntax</h3>
                    <pre class="language-sql">
    <code>
        SELECT column_name(s)
FROM table1
LEFT JOIN table2
ON table1.column_name = table2.column_name;
    </code>
    </pre>
                    <h3>RIGHT JOIN Syntax</h3>
                    <pre class="language-sql">
        <code>
            SELECT column_name(s)
FROM table1
RIGHT JOIN table2
ON table1.column_name = table2.column_name;
        </code>
        </pre>
                    <h3>CROSS JOIN Syntax</h3>
                    <pre class="language-sql">
            <code>
                SELECT column_name(s)
FROM table1
CROSS JOIN table2;
            </code>
            </pre>
                    <h3>Self Join Syntax</h3>
                    <pre class="language-sql">
                <code>
                    SELECT column_name(s)
                    FROM table1 T1, table1 T2
                    WHERE condition;
                </code>
                </pre>
                </li>
                <li>
                    UNION Operator<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom26" aria-controls="offcanvasBottom">Read more...</button>
                    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom26" aria-labelledby="offcanvasBottomLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasBottomLabel">UNION Operator</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body small">
                            The UNION operator is used to combine the result-set of two or more SELECT statements. <br>
                            <ul>
                                <li> Every SELECT statement within UNION must have the same number of columns</li>
                                <li>The columns must also have similar data types</li>
                                <li>The columns in every SELECT statement must also be in the same order</li>
                            </ul>
                            <br> Note: The column names in the result-set are usually equal to the column names in the first SELECT statement. <br><br> The UNION operator selects only distinct values by default. To allow duplicate values, use
                            <b>UNION ALL</b>
                        </div>
                    </div>
                    <h3>UNION Syntax</h3>
                    <pre class="language-sql">
                    <code>
                        SELECT column_name(s) FROM table1
                        UNION
                        SELECT column_name(s) FROM table2;
                    </code>
                    </pre>
                    <h3>UNION ALL Syntax</h3>
                    <pre class="language-sql">
    <code>
        SELECT column_name(s) FROM table1
        UNION ALL
        SELECT column_name(s) FROM table2;
    </code>
    </pre>
                </li>
                <li>
                    GROUP BY Statement<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom27" aria-controls="offcanvasBottom">Read more...</button>
                    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom27" aria-labelledby="offcanvasBottomLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasBottomLabel">GROUP BY Statement</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body small">
                            The GROUP BY statement groups rows that have the same values into summary rows, like "find the number of customers in each country".
                            <br> The GROUP BY statement is often used with aggregate functions (COUNT(), MAX(), MIN(), SUM(), AVG()) to group the result-set by one or more columns.<br>
                        </div>
                    </div>
                    <h3>GROUP BY Syntax</h3>
                    <pre class="language-sql">
                    <code>
                        SELECT column_name(s)
FROM table_name
WHERE condition
GROUP BY column_name(s)
ORDER BY column_name(s);
                    </code>
                    </pre>
                    <h3>Example:</h3>
                    <pre class="language-sql">
    <code>
        SELECT COUNT(CustomerID), Country
FROM Customers
GROUP BY Country;
    </code>
    </pre>
                </li>
                <li>
                    HAVING Clause<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom28" aria-controls="offcanvasBottom">Read more...</button>
                    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom28" aria-labelledby="offcanvasBottomLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasBottomLabel">HAVING Clause</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body small">
                            The HAVING clause was added to SQL because the WHERE keyword cannot be used with aggregate functions.
                        </div>
                    </div>
                    <h3>HAVING Syntax</h3>
                    <pre class="language-sql">
                    <code>
                        SELECT column_name(s)
                        FROM table_name
                        WHERE condition
                        GROUP BY column_name(s)
                        HAVING condition
                        ORDER BY column_name(s);
                    </code>
                    </pre>
                    <h3>Example:</h3>
                    <pre class="language-sql">
    <code>
        SELECT COUNT(CustomerID), Country
FROM Customers
GROUP BY Country
HAVING COUNT(CustomerID) > 5;
    </code>
    </pre>
                </li>
                <li>
                    EXISTS Operator<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom29" aria-controls="offcanvasBottom">Read more...</button>
                    <div class="offcanvas offcanvas-start " tabindex="-1" id="offcanvasBottom29" aria-labelledby="offcanvasBottomLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasBottomLabel">EXISTS Operator</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body small">
                            The EXISTS operator is used to test for the existence of any record in a subquery.
                            <br> The EXISTS operator returns TRUE if the subquery returns one or more records.
                        </div>
                    </div>
                    <h3>EXISTS Syntax</h3>
                    <pre class="language-sql">
                    <code>
                        SELECT column_name(s)
                        FROM table_name
                        WHERE EXISTS
                        (SELECT column_name FROM table_name WHERE condition);
                    </code>
                    </pre>
                    <h3>Example:</h3>
                    <pre class="language-sql">
    <code>
        SELECT SupplierName
FROM Suppliers
WHERE EXISTS (SELECT ProductName FROM Products WHERE Products.SupplierID = Suppliers.supplierID AND Price < 20);
    </code>
    </pre>
                </li>
                <li>
                    ANY Operator<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom30" aria-controls="offcanvasBottom">Read more...</button>
                    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom30" aria-labelledby="offcanvasBottomLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasBottomLabel">ANY Operator</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body small">
                            The ANY operator:
                            <br>
                            <ul>
                                <li>
                                    returns a boolean value as a result </li>
                                <li>
                                    returns TRUE if ANY of the subquery values meet the condition</li>
                                <li>
                                    ANY means that the condition will be true if the operation is true for any of the values in the range.</li>
                            </ul>
                            <br> Note: The operator must be a standard comparison operator (=,
                            <>, !=, >, >=,
                                <, or <=). </div>
                        </div>
                        <h3>ANY Syntax</h3>
                        <pre class="language-sql">
                    <code>
                        SELECT column_name(s)
                        FROM table_name
                        WHERE column_name operator ANY
                          (SELECT column_name
                          FROM table_name
                          WHERE condition);
                    </code>
                    </pre>
                        <h3>Example:</h3>
                        <pre class="language-sql">
    <code>
        SELECT COUNT(CustomerID), Country
FROM Customers
GROUP BY Country
HAVING COUNT(CustomerID) > 5;
    </code>
    </pre>
                </li>
                <li>
                    ALL Operator<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom31" aria-controls="offcanvasBottom">Read more...</button>
                    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom31" aria-labelledby="offcanvasBottomLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasBottomLabel">ALL Operator</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body small">
                            The ALL operator: <br>
                            <ul>
                                <li>
                                    returns a boolean value as a result </li>
                                <li>
                                    returns TRUE if ALL of the subquery values meet the condition</li>
                                <li>
                                    is used with SELECT, WHERE and HAVING statements</li>
                            </ul>
                            <br> ALL means that the condition will be true only if the operation is true for all values in the range.
                            <br><br> Note: The operator must be a standard comparison operator (=,
                            <>, !=, >, >=,
                                <, or <=). </div>
                        </div>
                        <h3>ALL Syntax With SELECT</h3>
                        <pre class="language-sql">
                    <code>
                        SELECT ALL column_name(s)
FROM table_name
WHERE condition;
                    </code>
                    </pre>
                        <h3>ALL Syntax With WHERE or HAVING</h3>
                        <pre class="language-sql">
                        <code>
                            SELECT column_name(s)
                            FROM table_name
                            WHERE column_name operator ALL
                              (SELECT column_name
                              FROM table_name
                              WHERE condition);
                        </code>
                        </pre>
                        <h3>Example:</h3>
                        <pre class="language-sql">
    <code>
        SELECT COUNT(CustomerID), Country
FROM Customers
GROUP BY Country
HAVING COUNT(CustomerID) > 5;
    </code>
    </pre>
                </li>
                <li>
                    INSERT INTO SELECT Statement<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom32" aria-controls="offcanvasBottom">Read more...</button>
                    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom32" aria-labelledby="offcanvasBottomLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasBottomLabel">INSERT INTO SELECT Statement</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body small">
                            The INSERT INTO SELECT statement copies data from one table and inserts it into another table.
                            <br><br> The INSERT INTO SELECT statement requires that the data types in source and target tables matches.
                            <br><br> Note: The existing records in the target table are unaffected.
                        </div>
                    </div>
                    <h3>INSERT INTO SELECT Syntax(Copy all columns from one table to another table)</h3>
                    <pre class="language-sql">
                    <code>
                        INSERT INTO table2
                        SELECT * FROM table1
                        WHERE condition;
                    </code>
                    </pre>
                    <h3>Copy only some columns from one table into another table</h3>
                    <pre class="language-sql">
    <code>
        INSERT INTO table2 (column1, column2, column3, ...)
        SELECT column1, column2, column3, ...
        FROM table1
        WHERE condition;
    </code>
    </pre>
                </li>
                <li>
                    CASE Statement<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom33" aria-controls="offcanvasBottom">Read more...</button>
                    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom33" aria-labelledby="offcanvasBottomLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasBottomLabel">CASE Statement</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body small">
                            The CASE statement goes through conditions and returns a value when the first condition is met (like an if-then-else statement). So, once a condition is true, it will stop reading and return the result. If no conditions are true, it returns the value
                            in the ELSE clause.
                            <br><br> If there is no ELSE part and no conditions are true, it returns NULL.
                        </div>
                    </div>
                    <h3>CASE Syntax</h3>
                    <pre class="language-sql">
                    <code>
                        CASE
    WHEN condition1 THEN result1
    WHEN condition2 THEN result2
    WHEN conditionN THEN resultN
    ELSE result
END;
                    </code>
                    </pre>
                    <h3>Example:</h3>
                    <pre class="language-sql">
    <code>
        SELECT OrderID, Quantity,
CASE
    WHEN Quantity > 30 THEN 'The quantity is greater than 30'
    WHEN Quantity = 30 THEN 'The quantity is 30'
    ELSE 'The quantity is under 30'
END AS QuantityText
FROM OrderDetails;
    </code>
    </pre>
                </li>
                <li>
                    IFNULL()<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom34" aria-controls="offcanvasBottom">Read more...</button>
                    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom34" aria-labelledby="offcanvasBottomLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasBottomLabel">CASE Statement</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body small">
                            The MySQL IFNULL() function lets you return an alternative value if an expression is NULL.
                        </div>
                    </div>
                    <h3>CASE Syntax</h3>
                    <pre class="language-sql">
                    <code>
                        CASE
    WHEN condition1 THEN result1
    WHEN condition2 THEN result2
    WHEN conditionN THEN resultN
    ELSE result
END;
                    </code>
                    </pre>
                    <h3>Example:</h3>
                    <pre class="language-sql">
    <code>
        SELECT OrderID, Quantity,
CASE
    WHEN Quantity > 30 THEN 'The quantity is greater than 30'
    WHEN Quantity = 30 THEN 'The quantity is 30'
    ELSE 'The quantity is under 30'
END AS QuantityText
FROM OrderDetails;
    </code>
    </pre>
                </li>
                <li>
                    COALESCE() Function
                    <pre class="language-sql">
                    <code>
                        CASE
                        SELECT ProductName, UnitPrice * (UnitsInStock + COALESCE(UnitsOnOrder, 0))
                        FROM Products;
                    </code>
                    </pre>
                </li>
                <li>
                    MySQL Comments<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom35" aria-controls="offcanvasBottom">Read more...</button>
                    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom35" aria-labelledby="offcanvasBottomLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasBottomLabel">MySQL Comments</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body small">
                            Comments are used to explain sections of SQL statements, or to prevent execution of SQL statements.
                            <ul>
                                <li>Single Line Comments:Single line comments start with --.
                                    <br> Any text between -- and the end of the line will be ignored (will not be executed).
                                </li>
                                <li>Multi-line Comments: Multi-line comments start with /* and end with */.
                                    <br> Any text between /* and */ will be ignored.
                                </li>
                            </ul>
                        </div>
                    </div>
                    <h3>Single Line Comments</h3>
                    <pre class="language-sql">
                    <code>
                        -- Select all:
                    </code>
                    </pre>
                    <h3>Multi-line Comments</h3>
                    <pre class="language-sql">
    <code>
        /*Select all the columns
of all the records
in the Customers table:*/
    </code>
    </pre>
                </li>
                <li>
                    MySQL Operators
                    <br>
                    <ul>
                        <li>
                            Arithmetic Operators<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom36" aria-controls="offcanvasBottom">Read more...</button>
                            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom36" aria-labelledby="offcanvasBottomLabel">
                                <div class="offcanvas-header">
                                    <h5 class="offcanvas-title" id="offcanvasBottomLabel">Arithmetic Operators</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                </div>
                                <div class="offcanvas-body small">
                                    <table class="ws-table-all notranslate table-bordered">
                                        <tbody>
                                            <tr>
                                                <th style="width:20%">Operator</th>
                                                <th style="width:80%">Description</th>
                                            </tr>
                                            <tr>
                                                <td>+</td>
                                                <td>Add</td>
                                            </tr>
                                            <tr>
                                                <td>-</td>
                                                <td>Subtract</td>
                                            </tr>
                                            <tr>
                                                <td>*</td>
                                                <td>Multiply</td>
                                            </tr>
                                            <tr>
                                                <td>/</td>
                                                <td>Divide</td>
                                            </tr>
                                            <tr>
                                                <td>%</td>
                                                <td>Modulo</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <br>
                        </li>
                        <li>
                            Bitwise Operators<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom37" aria-controls="offcanvasBottom">Read more...</button>
                            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom37" aria-labelledby="offcanvasBottomLabel">
                                <div class="offcanvas-header">
                                    <h5 class="offcanvas-title" id="offcanvasBottomLabel">Bitwise Operators</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                </div>
                                <div class="offcanvas-body small">
                                    <table class="ws-table-all notranslate table-bordered">
                                        <tbody>
                                            <tr>
                                                <th style="width:20%">Operator</th>
                                                <th style="width:80%">Description</th>
                                            </tr>
                                            <tr>
                                                <td>&amp;</td>
                                                <td>Bitwise AND</td>
                                            </tr>
                                            <tr>
                                                <td>|</td>
                                                <td>Bitwise OR</td>
                                            </tr>
                                            <tr>
                                                <td>^</td>
                                                <td>Bitwise exclusive OR</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <br>
                        </li>
                        <li>
                            Comparison Operators<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom38" aria-controls="offcanvasBottom">Read more...</button>
                            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom38" aria-labelledby="offcanvasBottomLabel">
                                <div class="offcanvas-header">
                                    <h5 class="offcanvas-title" id="offcanvasBottomLabel">Comparison Operators</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                </div>
                                <div class="offcanvas-body small">
                                    <table class="ws-table-all notranslate table-bordered">
                                        <tbody>
                                            <tr>
                                                <th style="width:20%">Operator</th>
                                                <th style="width:80%">Description</th>
                                            </tr>
                                            <tr>
                                                <td>=</td>
                                                <td>Equal to</td>
                                            </tr>
                                            <tr>
                                                <td>&gt;</td>
                                                <td>Greater than</td>
                                            </tr>
                                            <tr>
                                                <td>&lt;</td>
                                                <td>Less than</td>
                                            </tr>
                                            <tr>
                                                <td>&gt;=</td>
                                                <td>Greater than or equal to</td>
                                            </tr>
                                            <tr>
                                                <td>&lt;=</td>
                                                <td>Less than or equal to</td>
                                            </tr>
                                            <tr>
                                                <td>&lt;&gt;</td>
                                                <td>Not equal to</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div> <br>
                        </li>
                        <li>
                            Compound Operators<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom39" aria-controls="offcanvasBottom">Read more...</button>
                            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom39" aria-labelledby="offcanvasBottomLabel">
                                <div class="offcanvas-header">
                                    <h5 class="offcanvas-title" id="offcanvasBottomLabel">Compound Operators</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                </div>
                                <div class="offcanvas-body small">
                                    <table class="ws-table-all notranslate table-bordered">
                                        <tbody>
                                            <tr>
                                                <th style="width:20%">Operator</th>
                                                <th style="width:80%">Description</th>
                                            </tr>
                                            <tr>
                                                <td>+=</td>
                                                <td>Add equals</td>
                                            </tr>
                                            <tr>
                                                <td>-=</td>
                                                <td>Subtract equals</td>
                                            </tr>
                                            <tr>
                                                <td>*=</td>
                                                <td>Multiply equals</td>
                                            </tr>
                                            <tr>
                                                <td>/=</td>
                                                <td>Divide equals</td>
                                            </tr>
                                            <tr>
                                                <td>%=</td>
                                                <td>Modulo equals</td>
                                            </tr>
                                            <tr>
                                                <td>&amp;=</td>
                                                <td>Bitwise AND equals</td>
                                            </tr>
                                            <tr>
                                                <td>^-=</td>
                                                <td>Bitwise exclusive equals</td>
                                            </tr>
                                            <tr>
                                                <td>|*=</td>
                                                <td>Bitwise OR equals</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div> <br>
                        </li>
                        <li>
                            Logical Operators<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom40" aria-controls="offcanvasBottom">Read more...</button>
                            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom40" aria-labelledby="offcanvasBottomLabel">
                                <div class="offcanvas-header">
                                    <h5 class="offcanvas-title" id="offcanvasBottomLabel">Logical Operators</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                </div>
                                <div class="offcanvas-body small">
                                    <table class="ws-table-all notranslate table-bordered">
                                        <tbody>
                                            <tr>
                                                <th style="width:20%">Operator</th>
                                                <th style="width:80%">Description</th>
                                            </tr>
                                            <tr>
                                                <td>ALL</td>
                                                <td>TRUE if all of the subquery values meet the condition</td>
                                            </tr>
                                            <tr>
                                                <td>AND</td>
                                                <td>TRUE if all the conditions separated by AND is TRUE</td>
                                            </tr>
                                            <tr>
                                                <td>ANY</td>
                                                <td>TRUE if any of the subquery values meet the condition</td>
                                            </tr>
                                            <tr>
                                                <td>BETWEEN</td>
                                                <td>TRUE if the operand is within the range of comparisons</td>
                                            </tr>
                                            <tr>
                                                <td>EXISTS</td>
                                                <td>TRUE if the subquery returns one or more records</td>
                                            </tr>
                                            <tr>
                                                <td>IN</td>
                                                <td>TRUE if the operand is equal to one of a list of expressions</td>
                                            </tr>
                                            <tr>
                                                <td>LIKE</td>
                                                <td>TRUE if the operand matches a pattern</td>
                                            </tr>
                                            <tr>
                                                <td>NOT</td>
                                                <td>Displays a record if the condition(s) is NOT TRUE</td>
                                            </tr>
                                            <tr>
                                                <td>OR</td>
                                                <td>TRUE if any of the conditions separated by OR is TRUE</td>
                                            </tr>
                                            <tr>
                                                <td>SOME</td>
                                                <td>TRUE if any of the subquery values meet the condition</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                    </ul>
                    </li>
                    <li>
                        CREATE DATABASE Statement<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom41" aria-controls="offcanvasBottom">Read more...</button>
                        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom41" aria-labelledby="offcanvasBottomLabel">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasBottomLabel">CREATE DATABASE Statement</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body small">
                                The CREATE DATABASE statement is used to create a new SQL database.
                            </div>
                        </div>
                        <pre class="language-sql">
                    <code>
                        CREATE DATABASE databasename;
                    </code>
                    </pre>
                    </li>
                    <li>
                        list of databases
                        <pre class="language-sql">
                    <code>
                        SHOW DATABASES;
                    </code>
                    </pre>
                    </li>
                    <li>
                        DROP DATABASE Statement<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom42" aria-controls="offcanvasBottom">Read more...</button>
                        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom42" aria-labelledby="offcanvasBottomLabel">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasBottomLabel">DROP DATABASE databasename;</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body small">
                                The DROP DATABASE statement is used to drop an existing SQL database.
                                <br> Note: Be careful before dropping a database. Deleting a database will result in loss of complete information stored in the database!
                            </div>
                        </div>
                        <pre class="language-sql">
                    <code>
                        DROP DATABASE databasename;
                    </code>
                    </pre>
                    </li>
                    <li>
                        CREATE TABLE Statement<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom43" aria-controls="offcanvasBottom">Read more...</button>
                        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom43" aria-labelledby="offcanvasBottomLabel">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasBottomLabel">CREATE TABLE Statement</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body small">
                                The CREATE TABLE statement is used to create a new table in a database.
                            </div>
                        </div>
                        <pre class="language-sql">
                    <code>
                        CREATE TABLE table_name (
                            column1 datatype,
                            column2 datatype,
                            column3 datatype,
                           ....
                        );
                    </code>
                    </pre>
                    </li>
                    <li>
                        Create Table Using Another Table<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom44" aria-controls="offcanvasBottom">Read more...</button>
                        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom44" aria-labelledby="offcanvasBottomLabel">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasBottomLabel">Create Table Using Another Table</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body small">
                                A copy of an existing table can also be created using CREATE TABLE.
                                <br> The new table gets the same column definitions. All columns or specific columns can be selected.
                                <br> If you create a new table using an existing table, the new table will be filled with the existing values from the old table.
                            </div>
                        </div>
                        <pre class="language-sql">
                    <code>
                        CREATE TABLE new_table_name AS
                        SELECT column1, column2,...
                        FROM existing_table_name
                        WHERE ....;
                        );
                    </code>
                    </pre>
                    </li>
                    <li>
                        TRUNCATE TABLE<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom46" aria-controls="offcanvasBottom">Read more...</button>
                        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom46" aria-labelledby="offcanvasBottomLabel">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasBottomLabel">TRUNCATE TABLE</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body small">
                                The DROP TABLE statement is used to drop an existing table in a database.
                            </div>
                        </div> <pre class="language-sql">
                    <code>
                        TRUNCATE TABLE table_name;
                    </code>
                    </pre>
                    </li>
                    <li>
                        <ul>
                            <li>
                                <h3>ALTER TABLE - ADD</h3>
                                <pre class="language-sql">
                    <code>
                        ALTER TABLE table_name
                        ADD column_name datatype;
                    </code>
                    </pre>
                            </li>
                            <li>
                                <h3>ALTER TABLE - DROP</h3>
                                <pre class="language-sql">
                        <code>
                            ALTER TABLE table_name
                            DROP COLUMN column_name;
                        </code>
                        </pre>
                            </li>
                            <li>
                                <h3>ALTER TABLE - MODIFY</h3>
                                <pre class="language-sql">
                            <code>
                                ALTER TABLE table_name
                                MODIFY COLUMN column_name datatype;
                            </code>
                            </pre>
                            </li>
                        </ul>
                    </li>
                    <li>MySQL Constraints<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom48" aria-controls="offcanvasBottom">Read more...</button>
                        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom48" aria-labelledby="offcanvasBottomLabel">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasBottomLabel">MySQL Constraints</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body small">
                                SQL constraints are used to specify rules for the data in a table.
                                <br> Constraints are used to limit the type of data that can go into a table. This ensures the accuracy and reliability of the data in the table. If there is any violation between the constraint and the data action, the
                                action is aborted.
                                <br> Constraints can be column level or table level. Column level constraints apply to a column, and table level constraints apply to the whole table.
                                <br> The following constraints are commonly used in SQL:
                                <br>
                                <ul>
                                    <li>
                                        NOT NULL - Ensures that a column cannot have a NULL value</li>
                                    <li>
                                        UNIQUE - Ensures that all values in a column are different</li>
                                    <li>
                                        PRIMARY KEY - A combination of a NOT NULL and UNIQUE. Uniquely identifies each row in a table
                                    </li>
                                    <li>
                                        FOREIGN KEY - Prevents actions that would destroy links between tables</li>
                                    <li>
                                        CHECK - Ensures that the values in a column satisfies a specific condition</li>
                                    <li>
                                        DEFAULT - Sets a default value for a column if no value is specified</li>
                                    <li>
                                        CREATE INDEX - Used to create and retrieve data from the database very quickly</li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>NOT NULL Constraint<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom49" aria-controls="offcanvasBottom">Read more...</button>
                        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom49" aria-labelledby="offcanvasBottomLabel">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasBottomLabel">NOT NULL Constraint</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body small">
                                By default, a column can hold NULL values.
                                <br> The NOT NULL constraint enforces a column to NOT accept NULL values.
                                <br> This enforces a field to always contain a value, which means that you cannot insert a new record, or update a record without adding a value to this field.
                            </div>
                        </div>
                        <pre class="language-sql">
                                <code>
                                    CREATE TABLE Persons (
                                        ID int NOT NULL,
                                        LastName varchar(255) NOT NULL,
                                        FirstName varchar(255) NOT NULL,
                                        Age int
                                    );
                                </code>
                                </pre>
                    </li>
                    <li>UNIQUE Constraint<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom50" aria-controls="offcanvasBottom">Read more...</button>
                        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom50" aria-labelledby="offcanvasBottomLabel">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasBottomLabel">UNIQUE Constraint</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body small">
                                The UNIQUE constraint ensures that all values in a column are different.
                                <br> Both the UNIQUE and PRIMARY KEY constraints provide a guarantee for uniqueness for a column or set of columns. <br> A PRIMARY KEY constraint automatically has a UNIQUE constraint.
                                <br> However, you can have many UNIQUE constraints per table, but only one PRIMARY KEY constraint per table.
                            </div>
                        </div>
                        <pre class="language-sql">
                                        <code>
                                            CREATE TABLE Persons (
    ID int NOT NULL,
    LastName varchar(255) NOT NULL,
    FirstName varchar(255),
    Age int,
    UNIQUE (ID)
);
                                        </code>
                                        </pre>
                    </li>
                    <li>PRIMARY KEY Constraint<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom52" aria-controls="offcanvasBottom">Read more...</button>
                        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom52" aria-labelledby="offcanvasBottomLabel">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasBottomLabel">PRIMARY KEY Constraint</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body small">
                                The PRIMARY KEY constraint uniquely identifies each record in a table.
                                <br> Primary keys must contain UNIQUE values, and cannot contain NULL values.
                                <br> A table can have only ONE primary key; and in the table, this primary key can consist of single or multiple columns (fields).
                            </div>
                        </div>
                        <pre class="language-sql">
                                    <code>
                                        CREATE TABLE Persons (
    ID int NOT NULL,
    LastName varchar(255) NOT NULL,
    FirstName varchar(255),
    Age int,
    PRIMARY KEY (ID)
);
                                    </code>
                                    </pre>
                    </li>
                    <li> FOREIGN KEY Constraint<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom53" aria-controls="offcanvasBottom">Read more...</button>
                        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom53" aria-labelledby="offcanvasBottomLabel">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasBottomLabel"> FOREIGN KEY Constraint</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body small">
                                The FOREIGN KEY constraint is used to prevent actions that would destroy links between tables.
                                <br> A FOREIGN KEY is a field (or collection of fields) in one table, that refers to the PRIMARY KEY in another table.
                                <br> The table with the foreign key is called the child table, and the table with the primary key is called the referenced or parent table.
                            </div>
                        </div>
                        <pre class="language-sql">
                                <code>
                                    CREATE TABLE Orders (
                                        OrderID int NOT NULL,
                                        OrderNumber int NOT NULL,
                                        PersonID int,
                                        PRIMARY KEY (OrderID),
                                        FOREIGN KEY (PersonID) REFERENCES Persons(PersonID)
                                    );
                                </code>
                                </pre>
                    </li>
                    <li>CHECK Constraint<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom54" aria-controls="offcanvasBottom">Read more...</button>
                        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom54" aria-labelledby="offcanvasBottomLabel">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasBottomLabel">CHECK Constraint</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body small">
                                The CHECK constraint is used to limit the value range that can be placed in a column.
                                <br> If you define a CHECK constraint on a column it will allow only certain values for this column.
                                <br> If you define a CHECK constraint on a table it can limit the values in certain columns based on values in other columns in the row.
                            </div>
                        </div>
                        <pre class="language-sql">
                            <code>
                                CREATE TABLE Persons (
                                    ID int NOT NULL,
                                    LastName varchar(255) NOT NULL,
                                    FirstName varchar(255),
                                    Age int,
                                    CHECK (Age>=18)
                                );
                            </code>
                            </pre>
                    </li>
                    <li>DEFAULT Constraint<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom55" aria-controls="offcanvasBottom">Read more...</button>
                        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom55" aria-labelledby="offcanvasBottomLabel">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasBottomLabel">DEFAULT Constraint</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body small">
                                The DEFAULT constraint is used to set a default value for a column.
                                <br> The default value will be added to all new records, if no other value is specified.
                            </div>
                        </div>
                        <pre class="language-sql">
                        <code>
                            CREATE TABLE Persons (
                                ID int NOT NULL,
                                LastName varchar(255) NOT NULL,
                                FirstName varchar(255),
                                Age int,
                                City varchar(255) DEFAULT 'Sandnes'
                            );
                        </code>
                        </pre>
                    </li>
                    <li>CREATE INDEX Statement<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom56" aria-controls="offcanvasBottom">Read more...</button>
                        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom56" aria-labelledby="offcanvasBottomLabel">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasBottomLabel">CREATE INDEX Statement</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body small">
                                The CREATE INDEX statement is used to create indexes in tables.
                                <br> Indexes are used to retrieve data from the database more quickly than otherwise. The users cannot see the indexes, they are just used to speed up searches/queries.
                                <br> Note: Updating a table with indexes takes more time than updating a table without (because the indexes also need an update). So, only create indexes on columns that will be frequently searched against.
                            </div>
                        </div>
                        <pre class="language-sql">
                        <code>
                            CREATE INDEX index_name
                            ON table_name (column1, column2, ...);
                        </code>
                        </pre>
                    </li>
                    <li>AUTO_INCREMENT Keyword<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom57" aria-controls="offcanvasBottom">Read more...</button>
                        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom57" aria-labelledby="offcanvasBottomLabel">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasBottomLabel">AUTO_INCREMENT Keyword</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body small">
                                MySQL uses the AUTO_INCREMENT keyword to perform an auto-increment feature.
                                <br> By default, the starting value for AUTO_INCREMENT is 1, and it will increment by 1 for each new record.
                            </div>
                        </div>
                        <pre class="language-sql">
                        <code>
                            CREATE TABLE Persons (
                                Personid int NOT NULL AUTO_INCREMENT,
                                LastName varchar(255) NOT NULL,
                                FirstName varchar(255),
                                Age int,
                                PRIMARY KEY (Personid)
                            );
                        </code>
                        </pre>
                    </li>
                    <li>Date Data Types<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom58" aria-controls="offcanvasBottom">Read more...</button>
                        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom58" aria-labelledby="offcanvasBottomLabel">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasBottomLabel">Date Data Types</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body small">
                                MySQL comes with the following data types for storing a date or a date/time value in the database:
                                <br> DATE - format YYYY-MM-DD <br> DATETIME - format: YYYY-MM-DD HH:MI:SS <br> TIMESTAMP - format: YYYY-MM-DD HH:MI:SS <br> YEAR - format YYYY or YY <br> Note: The date data type are set for a column when you create a new
                                table in your database!
                            </div>
                        </div>
                        <pre class="language-sql">
                        <code>
                            SELECT * FROM Orders WHERE OrderDate='2008-11-11'
                        </code>
                        </pre>
                    </li>
                    <li>CREATE VIEW Statement<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom59" aria-controls="offcanvasBottom">Read more...</button>
                        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom59" aria-labelledby="offcanvasBottomLabel">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasBottomLabel">CREATE VIEW Statement</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body small">
                                In SQL, a view is a virtual table based on the result-set of an SQL statement.
                                <br> A view contains rows and columns, just like a real table. The fields in a view are fields from one or more real tables in the database.
                                <br> You can add SQL statements and functions to a view and present the data as if the data were coming from one single table.
                                <br> A view is created with the CREATE VIEW statement.
                            </div>
                        </div>
                        <h3>CREATE VIEW Syntax</h3>
                        <pre class="language-sql">
                    <code>
                        CREATE VIEW view_name AS
                        SELECT column1, column2, ...
                        FROM table_name
                        WHERE condition;
                    </code>
                    </pre>
                        <h3>Example:</h3>
                        <pre class="language-sql">
                            <code>
                                CREATE VIEW [Brazil Customers] AS
SELECT CustomerName, ContactName
FROM Customers
WHERE Country = 'Brazil';
                            </code>
                            </pre>
                    </li>
        </ol>
        </div>
        </div>
        <?php require_once 'Footer.php'?>