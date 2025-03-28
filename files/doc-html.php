<h3>Background</h3>
We have been assigned a project where we need to design and implement a student register application in a programming language of our choosing. We will be using our knowledge in advance database systems learned during this course to code and design a fully functional application which in theory could be used by a smaller school or faculty. <br /><br />


<h3>Goal</h3>
Our goal is to create a versatile application for student and course management with as high compatibility between systems as possible. Our goal is to achieve this by using new (if not the latest) tools out there for database management as we seamlessly integrate these with a front end the user is familiar with.<br /><br />


<h3>Problems</h3>
Due to our choice of using a web based application we need to make sure that all major browsers are supported and all web standards followed. There’s a major transition now where HTML and CSS are getting updated with all new features which really improves the overall experience in using web based applications and sites. The downside to this is that older browsers won’t support these new features at all so we need to carefully implement constrains and functions that work on both new and old software.<br /><br />


<h2>Project description</h2>

<h2>EER model</h2>
<div style="font-size:11px;">
	<img alt="This is the EER-model" src="img/documentation/eer-model.png" />
	<a href="files/model.pdf">PDF-version of model</a> ||
	<a href="sql_used.php">See the SQL we used to create the database.</a>
</div><br />

The table Student is of course the crème de la crème of all modules because everything is connected to the students in some way. All students have a social security number and this is always unique ant therefore it’s a perfect candidate to be a primary key in our table.<br /><br />

The student table has connections from either the has studied or studies depending of the student’s current situation. This allows us to easily find out if a student is currently attending courses as well as a detailed history about past students. The history is also necessary to find out the grades of the students’ in certain courses.<br /><br />

Student section is the table that lists all sections a student has been assigned to. It saves all the points for the specific sections as well as the grades. The Section inherits from the table Course which is the second most vital module. This one is a parent table to many other tables which inherits from it. We have made a separate modul for all required courses to be <br /><br />


<h3>System description and requirements</h3>
For the front end application we are using a live webpage built with HTML and CSS. The dynamic connections between all the different pages as well with the database is achieved using PHP scripting. We are using MySQL as our database because it offers a free and lightweight solution for this particular project.<br /><br />

PHP has built in functions for managing a MySQL server which is achieved with the function prefix ”mysqli_”, but due to the security vulnerability with SQL injections we’ve chosen to use the newer, much improved, function called PDO. PDO offers a much safer implementation with SQL connection and with almost no vulnerability to SQL injections as compared to the older way. PDO also offers support for a wide numbers of different database server, for example Oracle, Microsoft SQL Server and of course MySQL. This offers a possibility to change the underlying database server without having to make time consuming changes of the PHP code.<br /><br />

The environment needed to run our application is a web server preferably running Apache but lighttpd or similar should work too. The only requirement is that the server supports PHP and MySQL. Older versions like PHP3 should work fine but the latest is always preferred due to security and stability reasons.<br /><br />


<h3>Hardware and software used</h3>
During our design and testing phases we have used different hardware as well as server operating system for a better compatibility and portability.<br /><br />

Our first testing server is a dedicated Ubuntu Server running Apache2, PHP5 and MySQL 4. Hosting has been made possible over the Internet, http, to simulate a real world scenario. The second environment we designed our application in was a MacBook Pro −07 with OS X 10.7 running same software as described above but with only localhost access.<br /><br />


<h3>Response times</h3>
We are using our application both over the Internet and locally. When accessing our homepage over the Internet the load time for the all page is 200 -400 ms which is really great for a home server set up in one of our apartments.<br /><br />

When running locally we get between 20 and 200 ms which also is great.<br /><br />


<h3>Shortcomings of the project</h3>
As always when working with large-scale projects as this one it’s just a matter of time until we’d encounter some problems with our implementation.<br /><br />

Unfortunately MySQL doesn’t support ”EXCEPT” which we wanted to use in our code. First this was a problem but we managed to use other questions in our query to achieve the same functionality. For example we could use a combination with UNION to get the same result.<br /><br />


<h2>Result and reflection</h2>
Compared to other groups we have chosen another approach with our implementation. Instead of creating a local application, a program which has to be compiled on an operating system, we use a web application. In our liking this is a nice way to use our knowledge in databases because a lot of the way to use computers today is with the "cloud". So creating a way for the user to access this management service through the Internet is a huge advantage today.<br /><br />

With a finished result using only free software and with a functionality as good as any other implementation out there is a great way to really prove that free software has come along way today and really can compete against the big companies like Microsoft and Oracle (Oracle DB).