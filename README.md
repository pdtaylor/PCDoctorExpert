<h2>Overview</h2>
The PC Doctor Expert System is an expert system designed to diagnose the most common computer problems that you may encounter and suggest next steps to repair them. It was built with PHP and the CLIPS rulebase, using a PHP-CLIPS implementation called PHLIPS. It was developed at the <a href='http://www.utech.edu.jm/' target='_blank'>University of Technology, Jamaica</a> by <a href='https://thequietinnovator.com/'>Paul D. Taylor</a>, Richard Brown, and Gerald Ritchie. It is an ideal subject for examining how to create web-based expert systems using PHP and CLIPS. For more information on the Research documentation for this project. Feel free to contact me thequietinnovator@gmail.com.

<h3>INSTALLATION INSTRUCTIONS</h3>
To begin installing the PC Doctor Expert System on your computer, please verify
that you have downloaded the following files:
- wamp5_1.3.1 installation file
- php_clips-0.5.0.dll file
- CLIPSWin Zip file
- pcdocbckup20080514.sql file
- PCDOC folder containing source code files.
<p>The installation files are also provided in the installation_files folder. Once you have verified that you have all five (5) components you can begin.</p>

<h3>Installing WAMP</h3>
Firstly, install the WAMP server on a computer running Windows by simply
running the wamp5_1.3.1 installation file. This will install the Apache 1.3 web
server, the MySQL DBMS, and PHP 5 on your Windows machine. Also, ensure that you configure PHP to allow URL includes (i.e. allow_url_include=On in the php.ini file). 
Once you have finished installing WAMP, copy the PCDOC folder to the www
subdirectory of your wamp folder on your computer (i.e. wamp/www).

<h3>Installing PHLIPS</h3>
Secondly, install PHLIPS extensions by copying the php_clips-0.5.0.dll file to
the ext subdirectory in the php folder under the wamp directory on your
computer (i.e. wamp/php/ext). Once you have done that, modify the php.ini file and add the php_clips-0.5.0.dll file as an extension. The php.ini can be accessed using the WAMP menu under
Config Files (NB. The WAMP menu is accessed by clicking on the WAMP icon
on the lower right hand corner of your task bar.), or you can access it by simply
going to php folder under the WAMP directory (i.e. wamp/php). 

When you have finished, restart the server. To ensure that the server is reading
the extension, after restarting the server, browse to http://localhost/ (which is the
WAMP home page on your computer.) and click on phpinfo() and check the
configuration listing presented to see if the CLIPS extension is installed. 

For further information about installing and using PHLIPS go to
http://phlips.sourceforge.net .
<br/><br/>After you have finished installing WAMP, copying over the PCDOC folder, and
installing the PHLIPS extension, CONGRATULATIONS! You are almost there!
Just one thing left to do:

<h3>Copying over the Database</h3>
When you installed WAMP, you also installed the MySQL DBMS, because
MySQL is a part of the WAMP bundle of applications. To access it, simply go to
the WAMP menu mentioned earlier and select phpMyAdmin, or browse to
http://localhost/phpmyadmin/. Once you have accessed it, create a new
database named pcdoc (NB. Ensure that the root user has a blank password.
You can check this by using the config.php in the WAMP folder, but don’t worry;
I think it is set that way by default.).

Once you have created the pcdoc database, DO NOT CREATE ANY TABLES
YET! I will tell you how to do that. Open the pcdocbckup20080514.sql file and copy its entire contents (i.e. Select All, then Copy), and
paste it under the section labeled SQL in phpMyAdmin (this is the section that
allows you to run SQL queries), then run the queries (i.e. Click “Go”).

When this is finished you should see all the tables you need to run the
application (NB. You should see 4 tables tblpages, tblquestions, tblproblems,
and tblrecommend), and lots and lots of data already stored in them!

Now you are fully ready to run the PC Doctor Expert System, HAVE FUN!!
NB. We included a version of CLIPS on the Repo, but that’s only if you want to
view the knowledgebase or run the command-line version of the system.
