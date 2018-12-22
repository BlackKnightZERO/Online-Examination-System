-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2017 at 08:45 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_exam_sys`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `hashed_password` int(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `hashed_password`) VALUES
(1, 'arif', 1234),
(2, 'kowshik', 1234);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` varchar(50) NOT NULL,
  `course_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_name`) VALUES
('html001', 'html'),
('java001', 'java'),
('php001', 'php'),
('XBOX001', 'XBOX001');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `subject_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `menu_name` varchar(50) NOT NULL,
  `position` int(11) NOT NULL,
  `visible` tinyint(1) NOT NULL,
  `content` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`subject_id`, `id`, `menu_name`, `position`, `visible`, `content`) VALUES
(1, 1, '', 0, 0, NULL),
(2, 2, 'Take a test', 1, 1, 'this is page content'),
(2, 3, 'Practice tests', 2, 1, 'this is page content'),
(2, 4, 'F.A.Q', 3, 1, 'this is page content'),
(3, 5, 'Our Mission', 1, 1, 'this is page content'),
(3, 6, 'Our Goal', 2, 1, 'this is page content'),
(3, 7, 'Our Vision', 3, 1, 'this is page content'),
(4, 8, 'service 1', 1, 1, 'this is page content'),
(4, 9, 'service 2', 2, 1, 'this is page content'),
(4, 10, 'service 3', 3, 1, 'this is page content');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `q_id` int(11) NOT NULL,
  `q_desc` varchar(200) NOT NULL,
  `ans1` varchar(100) NOT NULL,
  `ans2` varchar(100) NOT NULL,
  `ans3` varchar(100) NOT NULL,
  `ans4` varchar(100) NOT NULL,
  `true_ans` varchar(100) NOT NULL,
  `difficulty` tinyint(1) NOT NULL,
  `course_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`q_id`, `q_desc`, `ans1`, `ans2`, `ans3`, `ans4`, `true_ans`, `difficulty`, `course_id`) VALUES
(1, 'What does PHP stand for?', 'Personal Home Page', 'Hypertext Preprocessor', 'Pretext Hypertext Processor', 'Preprocessor Home Page', 'Preprocessor Home Page', 1, 'php001'),
(2, 'PHP files have a default file extension of', '.html', '.xml', '.php', '.ph', '.php', 1, 'php001'),
(3, 'Which version of PHP introduced Try/catch Exception?\r\n', 'PHP 4', 'PHP 5', 'PHP 5.3', 'PHP 6', 'PHP 5', 3, 'php001'),
(4, 'Which of the following php statement/statements will store 111 in variable num?\r\n', 'int $num = 111;', 'int mum = 111;', '$num = 111;', '111 = $num;', '$num = 111;', 3, 'php001'),
(5, 'Which of the below statements is equivalent to $add += $add ?', '$add = $add', '$add = $add +$add', '$add = $add + 1', '$add = $add + $add + 1', 'add ', 2, 'php001'),
(6, 'Which statement will output $x on the screen?\r\n', 'echo “\\$x”;\r\n', 'echo “$$x”;\r\n', 'echo “/$x”;\r\n', 'echo “$x;”;\r\n', 'echo “\\$x”;\r\n', 1, 'php001'),
(7, ' Which one of the following PHP functions can be used to build a function that accepts any number of arguments?\r\n', 'func_get_argv()', 'func_get_argc()', 'get_argv()', 'get_argc()', 'func_get_argc()', 3, 'php001'),
(8, 'Which one of the following PHP functions can be used to find files?', 'glob()', 'file()', 'fold()', 'get_file()', 'glob()', 1, 'php001'),
(9, 'Which of the following PHP functions can be used to get the current memory usage?', 'get_usage()', 'get_peak_usage()', 'get_memory_usage()', 'get_memory_peak_usage()', 'get_memory_usage()', 2, 'php001'),
(10, 'Which of the following PHP functions can be used for generating unique id’s?', 'uniqueid()\r\n', 'id()', 'md5()', 'mdid()', 'uniqueid()', 2, 'php001'),
(11, 'What is the description of Error level E_ERROR?\r\n', 'Fatal run-time error', 'Near-fatal error', 'Compile-time error', 'Fatal Compile-time error', 'Fatal run-time error\r\n', 1, 'php001'),
(12, 'Which character do the error_reporting directive use to represent the logical operator NOT?', '/', '!', '~', '^', '~', 2, 'php001'),
(13, 'Which function is responsible for sending a custom message to the system log?', 'systemlog()', 'syslog()', 'log_system()', 'sys_log()', 'syslog()', 1, 'php001'),
(14, 'Which directive determines whether PHP scripts on the server can accept file uploads?', 'file_uploads', 'file_upload', 'file_input', 'file_intake', 'file_uploads', 2, 'php001'),
(15, 'PHP’s numerically indexed array begin with position __.', '1', '2', '0', '-1', '0', 1, 'php001'),
(16, 'Which in-built function will add a value to the end of an array?', 'array_unshift()', 'into_array()', 'inend_array()', 'array_push()', 'array_push()', 3, 'php001'),
(17, 'Which function can be used to move the pointer to the previous array position?', 'lat()', 'before()', 'prev()', 'previous()', 'prev()', 2, 'php001'),
(18, 'Which function returns an array consisting of associative key/value pairs?', 'count()\r\n', 'array_count()\r\n', 'array_count_values()\r\n', 'count_values()\r\n', 'array_count_values()\r\n', 3, 'php001'),
(19, 'HTML is what type of language ? ', 'Scripting Language', 'Markup Language\r\n', 'Programming Language', 'Network Protocol', 'Markup Language\r\n', 1, 'html001'),
(20, 'HTML uses ', 'User defined tags\r\n', 'Pre-specified tags\r\n', 'Fixed tags defined by the language\r\n', 'Tags only for linking', 'Fixed tags defined by the language\r\n', 1, 'html001'),
(21, 'The year in which HTML was first proposed _______. ', '1990', '1980', '2000', '1995', '1990', 2, 'html001'),
(22, ' Fundamental HTML Block is known as ___________. ', 'HTML Body', 'HTML Tag', 'HTML Attribute', 'HTML Element', 'HTML Tag\r\n', 1, 'html001'),
(23, 'Apart from <b> tag, what other tag makes text bold ? ', '<fat>', '<strong>', '<black>', '<emp>', '<strong>', 2, 'html001'),
(24, 'What is the full form of HTML? ', 'HyperText Markup Language\r\n', 'Hyper Teach Markup Language\r\n', 'Hyper Tech Markup Language\r\n', '`None of these', 'HyperText Markup Language\r\n', 1, 'html001'),
(25, 'Who is Known as the father of World Wide Web (WWW)? ', 'Robert Cailliau\r\n', 'Tim Thompson\r\n', 'Charles Darwin', 'Tim Berners-Lee', 'Tim Berners-Lee', 3, 'html001'),
(26, 'What should be the first tag in any HTML document? ', '<document>', '<head>', '<title>', '<html>', '<html>', 1, 'html001'),
(27, 'How can you make a bulleted list with numbers? ', '<dl>', '<ol>', '<list>', '<ul>', '<ol>', 3, 'html001'),
(28, 'What tag is used to display a picture in a HTML page? ', 'picture', 'image', 'img', 'src', 'img', 1, 'html001'),
(29, 'HTML web pages can be read and rendered by _________. ', 'Compiler', 'Server\r\n', 'Web Browser', 'Interpreter', 'Web Browser', 2, 'html001'),
(30, 'Which HTML tag produces the biggest heading? ', '<h1>', '<h4>', '<h7>', '<h9>', '<h1>', 2, 'html001'),
(31, 'HTML tags are surrounded by which type of brackets. ', 'Curly', 'Round\r\n', 'Squart\r\n', 'Angle', 'Angle', 3, 'html001'),
(32, 'Tags and test that are not directly displayed on the page are written in _____ section. ', '<head>', '<title>', '<body>', '<html>', '<head>', 1, 'html001'),
(33, 'Who is known as father of Java Programming Language? ', 'James Gosling\r\n', 'M. P Java\r\n', 'Charel Babbage', 'Blais Pascal', 'James Gosling\r\n', 2, 'java001'),
(34, 'In java control statements break, continue, return, try-catch-finally and assert belongs to? ', 'Selection statements\r\n', 'Loop Statements\r\n', 'Transfer statements', 'Pause Statement', 'Transfer statements', 3, 'java001'),
(35, 'Which provides runtime environment for java byte code to be executed? ', 'JVM\r\n', 'JDK', 'JRE', 'JAVAC', 'JVM', 1, 'java001'),
(36, 'What is byte code in Java? ', 'Code generated by a Java compiler\r\n', 'Code generated by a Java Virtual Machine\r\n', 'Name of Java source code file', 'Block of code written inside a class', 'Code generated by a Java compiler\r\n', 2, 'java001'),
(37, 'Which of the following are not Java keywords ? ', 'double', 'switch', 'then', 'instanceof', 'then', 1, 'java001'),
(38, 'Which of these have highest precedence? ', '()', '++', '*', '>>', '()`', 2, 'java001'),
(39, 'Which of these is returned by operator ''&'' ? ', 'Integer\r\n', 'Character\r\n', 'Boolean', 'Float', 'Character\r\n', 1, 'java001'),
(40, ' Which variables are created when an object is created with the use of the keyword ''new'' and destroyed when the object is destroyed? ', 'Local variables\r\n', 'Instance variables\r\n', 'Class Variables', 'Static variables', 'Instance variables\r\n', 3, 'java001'),
(41, 'Java language was initially called as ________ ', 'sumatra', 'J++', 'Oak', 'Pine', 'Oak', 3, 'java001'),
(42, ' Which of these have highest precedence? ', '()', '++', '*', '>>', '()', 1, 'java001'),
(43, 'Which of these is returned by operator ''&'' ? ', 'Integer\r\n', 'Character\r\n', 'Boolean', 'Float', 'Character\r\n', 1, 'java001'),
(44, ' Which variables are created when an object is created with the use of the keyword ''new'' and destroyed when the object is destroyed? ', 'Local variables', 'Instance variables\r\n', 'Class Variables', 'Static variables', 'Instance variables', 3, 'java001'),
(45, 'Java language was initially called as ________ ', 'sumatra', 'J++', 'Oak', 'Pine', 'Oak', 3, 'java001'),
(46, 'Which provides runtime environment for java byte code to be executed? ', 'JDK', 'JVM', 'JRE', 'JAVAC', 'JVM', 1, 'java001'),
(47, 'Which of the following are not Java keywords ? ', 'double', 'then', 'instance of', 'switch', 'then', 1, 'java001'),
(48, 'What is garbage collection in the context of Java? ', 'Java deletes all unused java files on the system.\r\n', 'Memory used by the object with no reference is automatically reclaimed.\r\n', 'The JVM cleans output of Java program with error.', 'Any unused package in a program automatically gets deleted.', 'Memory used by the object with no reference is automatically reclaimed.\r\n', 2, 'java001'),
(52, 'Which one is a template for creating different objects ? ', 'An Array\r\n', 'A class\r\n', 'Interface', 'Method', 'A class\r\n', 2, 'java001'),
(53, 'Which one is true about a constructor ? ', 'A constructor must have the same name as the class it is declared within.\r\n', 'A constructor is used to create objects.\r\n', 'A constructor may be declared private\r\n', 'All of the above', 'All of the above', 1, 'java001'),
(54, 'Which of these operators is used to allocate memory to array variable in Java? ', 'alloc\r\n', 'malloc', 'new malloc', 'new', 'new', 1, 'java001'),
(55, 'Which symbol is used to contain the values of automatically initialized arrays? ', 'Brackets\r\n', 'Braces\r\n', 'Parentheses', 'Comma', 'Braces\r\n', 2, 'java001'),
(56, 'Which of these is returned by Greater Than, Less Than and Equal To (i.e Relational) operator ? ', 'Fload\r\n', 'Integer\r\n', 'Boolean', 'Double', 'Boolean', 2, 'java001'),
(57, 'Which statement transfer execution to different parts of your code based on the value of an expression? ', 'If\r\n', 'Switch\r\n', 'Nested-if\r\n', 'if-else-if', 'Switch\r\n', 1, 'java001'),
(58, 'What feature of OOP has a super-class sub-class concept? ', 'Hierarchical inheritance\r\n', 'Single inheritance\r\n', 'Multiple inheritances', 'Multilevel inheritance', 'Hierarchical inheritance\r\n', 1, 'java001'),
(59, 'Which of the following are not the methods of the Thread class? ', 'yield()\r\n', 'sleep(long msec)\r\n', 'go()', 'stop()', 'go()', 1, 'java001'),
(60, 'What is the full form of JVM ? \r\n', 'Java Very Large Machine\r\n', 'Java Verified Machine\r\n', 'Java Very Small Machine', 'Java Virtual Machine', 'Java Virtual Machine', 2, 'java001'),
(61, 'In Java code, the line that begins with /* and ends with */ is known as? \r\n', 'public\r\n', 'private\r\n', 'friendly', 'transient', 'friendly', 1, 'php001'),
(62, 'The command javac is used to ', 'debug a java program\r\n', 'compile a java program', 'interpret a java program', 'execute a java program', 'compile a java program', 1, 'java001'),
(63, 'Java servlets are an efficient and powerful solution for creating ………….. for the web.', 'Dynamic content', 'Static content', 'Hardware', 'Both a and b', 'Dynamic content', 2, 'java001'),
(64, 'Which is the root class of all AWT events', 'java.awt.ActionEvent\r\n', 'java.awt.AWTEvent', 'java.awt.event.AWTEvent', 'java.awt.event.Event', 'java.awt.AWTEvent', 3, 'java001'),
(65, 'Native – protocol pure Java converts ……….. into the ………… used by DBMSs directly.', 'JDBC calls, network protocol\r\n', 'ODBC class, network protocol', 'ODBC class, user call\r\n', 'JDBC calls, user call\r\n', 'JDBC calls, network protocol\r\n', 3, 'java001'),
(66, 'Which of the following is true about Java?', 'Java does not support overloading.\r\n', 'Java has replaced the destructor function of C++\r\n', 'There are no header files in Java.\r\n', 'All of the above.\r\n', 'All of the above.\r\n', 2, 'java001'),
(67, ' 3. ……………. are not machine instructions and therefore, Java interpreter generates machine code that can be directly executed by the machine that is running the Java program.', 'Compiled Instructions', 'Compiled code', 'byte code', 'Java mid code', 'byte code', 1, 'java001'),
(68, 'The command javac', 'Converts a java program into binary code\r\n', 'Converts a java program into bytecode\r\n', 'Converts a java program into machine language', 'None of the above.', 'Converts a java program into bytecode', 1, 'java001'),
(69, 'Inner classes are', 'anonymous classes\r\n', 'nested classes\r\n', 'sub classes\r\n', 'derived classes\r\n', 'nested classes\r\n', 2, 'java001'),
(70, 'How many times does the following code segment execute\r\nint x=1, y=10, z=1;\r\ndo{y--; x++; y-=2; y=z; z++} while (y>1 && z<10);', '1', '10', '5', 'infinite', '1', 2, 'java001'),
(71, 'The JDBC-ODBC bridge allows ……….. to be used as ………..', 'JDBC drivers, ODBC drivers\r\n', 'Drivers, Application\r\n', 'ODBC drivers, JDBC drivers\r\n', 'Application, drivers\r\n', 'JDBC drivers, ODBC drivers\r\n', 1, 'java001'),
(72, 'Which of the following variables is not a predefined variable? ', '$get', '$ask\r\n', '$request', '$post', '$ask\r\n', 2, 'php001'),
(73, 'When you need to obtain the ASCII value of a character which of the following function you apply in PHP? ', 'chr( );\r\n', 'asc( );\r\n', 'ord( );', 'val( );', 'ord( );', 3, 'php001'),
(74, 'Which of the following method sends input to a script via a URL? ', 'Get\r\n', 'Post\r\n', 'Both', 'None', 'Get\r\n', 1, 'php001'),
(75, 'Which of the following function returns a text in title case from a variable? \r\n', 'ucwords($var)\r\n', 'upper($var)\r\n', 'toupper($var)', 'ucword($var)', 'ucwords($var)\r\n', 3, 'php001'),
(76, 'Which of the following function returns the number of characters in a string variable? ', 'count($variable)\r\n', 'len($variable)\r\n', 'strcount($variable)', 'strlen($variable)', 'strlen($variable)', 2, 'php001'),
(77, 'The “father” of MySQL is________.', 'Mihael Widenius', 'Bill Joy', 'Bill Gates', 'Stephanie Wall', 'Mihael Widenius\r\n', 3, 'php001'),
(78, 'What MySQL property is used to create a surrogate key in MySQL?', 'UNIQUE\r\n', 'SEQUENCE', 'AUTO_INCREMENT', 'None of the above — Surrogate keys are not implemented in MySQL.', 'AUTO_INCREMENT', 2, 'php001'),
(79, 'MySQL runs on which operating systems? ', 'Linux and Mac OS-X only', 'Any operating system at all', 'Unix, Linux, Windows and others', 'Unix and Linux only', 'Unix, Linux, Windows and others', 1, 'php001'),
(80, 'To remove duplicate rows from the result set of a SELECT use the following keyword', 'NO DUPLICATE', 'UNIQUE', 'DISTINCT', 'None of the above', 'DISTINCT', 1, 'php001'),
(81, 'In a LIKE clause, you can could ask for any value ending in “qpt” by writing ', 'LIKE %qpt', 'LIKE *ton', 'LIKE ton$', 'LIKE ^.*ton$', 'LIKE %qpt', 2, 'php001'),
(82, 'In a LIKE clause, you can ask for any 6 letter value by writing? ', 'LIKE ??????\r\n', 'LIKE .{6} Answer 5: LIKE ^.{6}$\r\n', 'LIKE …… (that’s six dots)', 'LIKE ______ (that’s six underscore characters)', 'LIKE .{6} Answer 5: LIKE ^.{6}$\r\n', 3, 'php001'),
(83, 'Which function used to get the current time in mysql? ', 'getTime()', 'Time()', 'NOW()\r\n', 'none', 'NOW()\r\n', 2, 'php001'),
(84, 'Which of the following is not a valid aggregate function? ', 'COUNT', 'MIN', 'MAX', 'COMPUTE', 'COMPUTE', 1, 'php001'),
(85, 'What SQL clause is used to restrict the rows returned by a query? ', 'AND\r\n', 'WHERE\r\n', 'HAVING\r\n', 'FROM\r\n', 'WHERE\r\n', 1, 'php001'),
(86, 'Which of the following is used to delete an entire MYSQL database?', 'mysql_drop_database', 'mysql_drop_entiredb', 'mysql_drop_db', 'mysql_drop_dbase', 'mysql_drop_db', 2, 'php001'),
(87, 'How much character are allowed to create database name? ', '55', '72', '64', '40', '64', 3, 'php001'),
(88, 'The USE command', 'Is used to load code from another file\r\n', 'Has been deprecated and should be avoided for security reasons\r\n', 'Is a pseudonym for the SELECT command\r\n', 'Should be used to choose the database you want to use once you’ve connected to MySQL\r\n', 'Should be used to choose the database you want to use once you’ve connected to MySQL\r\n', 3, 'php001'),
(89, 'A SELECT command without a WHERE clause returns ', 'All the records from a table that match the previous WHERE clause\r\n', 'All the records from a table, or information about all the records', 'SELECT is invalid without a WHERE clause', 'Nothing', 'All the records from a table, or information about all the records', 1, 'php001'),
(90, 'MySQL Access security is controlled through? ', 'The ID that the user logged into the server through, and priveliges set up ', 'MySQL login accounts, and priveliges set for each account', 'normal login security is sufficient for MySQL it does not have extra controls of its own', 'A table of valid IP addresses, and priveliges set up for each IP address', 'MySQL login accounts, and priveliges set for each account', 3, 'php001'),
(91, 'Which array function checks if the specified key exists in the array?', 'array_key_exist()\r\n', 'array_key_exists()\r\n', 'array_keys_exists()\r\n', 'arrays_key_exists()\r\n', 'array_key_exists()\r\n', 2, 'php001'),
(92, 'Assume you would like to sort an array in ascending order by value while preserving key associations. Which of the following PHP sorting functions would you use?', 'ksort()', 'asort()', 'krsort()\r\n', 'sort()', 'asort()\r\n', 3, 'php001'),
(93, 'What functions count elements in an array?', 'count', 'Sizeof', 'Array_Count', 'Count_array', 'count', 1, 'php001'),
(94, 'What is internet?', 'a network of networks', 'an ocean of resources waiting to be mined', 'a cooperative anarchy', 'all of the above', 'all of the above', 1, 'html001'),
(95, 'How can you make an e-mail link?\r\n', '<a href="xxx@yyy">', '<mail href="xxx@yyy">', '<mail>xxx@yyy</mail>', '<a href="mailto:xxx@yyy">', '<a href="mailto:xxx@yyy">', 1, 'html001'),
(96, 'What is the correct HTML for adding a background color?', '<body color="yellow">\r\n', '<body bgcolor="yellow">', '<background>yellow</background>', '<body background="yellow">', '<body color="yellow">\r\n', 2, 'html001'),
(97, 'What does vlink attribute mean?', 'visited link', 'virtual link', 'very good link', 'active link', 'visited link', 3, 'html001'),
(98, 'Which tag creates a check box for a form in HTML?', '<checkbox>', '<input type="checkbox">', '<input=checkbox>', '<input checkbox>', '<input type="checkbox">', 2, 'html001'),
(99, 'To create a combo box (drop down box) which tag will you use?', '<select>', '<list>', '<input type="dropdown">', 'all of above', '<select>', 3, 'html001'),
(100, 'To create HTML document you require', 'web page editing software\r\n', 'High powered computer', 'Just a notepad can be used', 'None of above', 'Just a notepad can be used', 1, 'html001'),
(101, 'HTML documents are saved in', 'Special binary format', 'Machine language codes\r\n', 'ASCII text', 'None of above', 'ASCII text', 3, 'html001'),
(102, '25. The _____ character tells browsers to stop tagging the text', '?', '/', '>', '%', '/', 2, 'html001'),
(103, 'In HTML document the tags', 'Should be written in upper case\r\n', 'should be written in lower case\r\n', 'should be written in propercase', 'can be written in both uppercase or lowercase', 'can be written in both uppercase or lowercase', 1, 'html001'),
(104, 'There are ____ different of heading tags in HTML', '4', '5', '6', '7', '6', 3, 'html001'),
(105, 'To create a blank line in your web page', 'press Enter two times', 'press Shift + Enter', 'insert <BR> tag', 'insert <BLINE>', 'insert <BR> tag', 2, 'html001'),
(106, 'Which HTML Tag will use to scroll a text in web page?', '<marquee> … </marquee>\r\n', '<scroll> … </scroll>\r\n', '<round> … </round>\r\n', '<go> … </go>', '<marquee> … </marquee>', 2, 'html001'),
(107, 'For every Web document, you can add words that appear in the upper left bar area of your browser. What set of tags allows you to provide this information?', '<head></head>\r\n', '<head><head>\r\n', '<label><label>\r\n', '<title></title>', '<title></title>', 1, 'html001'),
(108, 'A Web document is broken into sections. What are the tags called that create these sections?', 'Structure tags\r\n', 'HTML tags\r\n', 'Heading tags\r\n', 'Body tags', 'Structure tags\r\n', 3, 'html001'),
(109, 'Which of the following web elements should you know about before building your web site?', 'The web audience\r\n', 'The operating environment of your ISP\r\n', 'The operating system of your visitor\r\n', 'Each consideration should determine your web design choices', 'The web audience\r\n', 1, 'html001'),
(110, 'What does an HTML tag do?', 'It specifies formatting and layout instructions for your web page.\r\n', 'it hides programming instructions from view.\r\n', 'It determines the organizational structure of your Web site.\r\n', 'It connects your web site to an operating environment.\r\n\r\n', 'It specifies formatting and layout instructions for your web page.\r\n', 2, 'html001'),
(111, 'Linking to another place in the same or another web page requires two A (Anchor) tags, the first with the ……………… attribute and the second the ……………….attribute.', 'bulleted & numbered\r\n', 'bulleted & tabular\r\n', 'tabular & numbered\r\n', 'numbered & bulleted', 'numbered & bulleted', 3, 'html001'),
(112, 'Comments in XML document is given by:', '<?-- _ _--?', '<!_ _ _ _!>', '<!_ _ _ _>', '</_ _ _ _>', '<!_ _ _ _>', 1, 'html001'),
(113, 'Choose the correct HTML tag for the largest heading?', '<H1>\r\n', '<H6>\r\n', '<H10>\r\n', '<HEAD>\r\n', '<H1>\r\n', 2, 'html001'),
(114, '<UL> … </UL> tag is used to ________', 'display the numbered list', 'underline the text', 'display the bulleted list', 'bold the text', 'display the bulleted list\r\n', 2, 'html001'),
(115, 'Which tag is used to display the numbered list?', '<OL></OL>', '<DL></DL>', '<UL></UL>', '<LI></LI>', '<OL></OL>', 3, 'html001'),
(116, 'Basic Fundamental Block is called as ___________', 'HTML Element', 'HTML Attribute', 'html bodY', 'HTML Tag', 'HTML Tag', 1, 'html001'),
(117, 'HTML document contain 1 root tag called __________', 'HTML', 'BODY', 'TITLE', 'HEAD', 'HTML', 2, 'html001'),
(118, 'HTML program can be read and rendered by _________.', 'Compiler', 'Web Browser', 'Server', 'Interpreter', 'Web Browser', 1, 'html001'),
(119, 'When was XBOX first introduced?', '1994', '1999', '2001', '2011', '2001', 2, 'XBOX001'),
(120, 'XBOX is created and owned by .... ?', 'Microsoft', 'Apple', 'Google', 'StuDevs', 'Microsoft', 1, 'XBOX001');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(11) NOT NULL,
  `test_id` bigint(20) NOT NULL,
  `user_id` int(11) NOT NULL,
  `q_id` int(11) NOT NULL,
  `q_iq2` int(11) NOT NULL,
  `q_iq3` int(11) NOT NULL,
  `q_iq4` int(11) NOT NULL,
  `q_iq5` int(11) NOT NULL,
  `q_iq6` int(11) NOT NULL,
  `q_iq7` int(11) NOT NULL,
  `q_iq8` int(11) NOT NULL,
  `q_iq9` int(11) NOT NULL,
  `q_iq10` int(11) NOT NULL,
  `user_answer1` varchar(50) NOT NULL,
  `user_answer2` varchar(50) NOT NULL,
  `user_answer3` varchar(50) NOT NULL,
  `user_answer4` varchar(50) NOT NULL,
  `user_answer5` varchar(50) NOT NULL,
  `user_answer6` varchar(50) NOT NULL,
  `user_answer7` varchar(50) NOT NULL,
  `user_answer8` varchar(50) NOT NULL,
  `user_answer9` varchar(50) NOT NULL,
  `user_answer10` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL,
  `mark` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `test_id`, `user_id`, `q_id`, `q_iq2`, `q_iq3`, `q_iq4`, `q_iq5`, `q_iq6`, `q_iq7`, `q_iq8`, `q_iq9`, `q_iq10`, `user_answer1`, `user_answer2`, `user_answer3`, `user_answer4`, `user_answer5`, `user_answer6`, `user_answer7`, `user_answer8`, `user_answer9`, `user_answer10`, `time`, `mark`) VALUES
(1, 3452, 1, 37, 39, 42, 43, 46, 47, 53, 54, 57, 58, 'double', 'Character\r\n', '++', 'Character\r\n', 'JVM', 'instance of', 'A constructor must have the same name as the class', 'new malloc', 'Switch\r\n', 'Hierarchical inheritance\r\n', '', 0),
(2, 3327, 1, 74, 79, 80, 84, 85, 89, 93, 94, 95, 100, 'Both', 'Any operating system at all', 'NO DUPLICATE', 'MIN', 'HAVING\r\n', 'All the records from a table that match the previo', 'Sizeof', 'a network of networks', '<a href="xxx@yyy">', 'web page editing software\r\n', '', 0),
(3, 1147, 1, 39, 42, 43, 46, 47, 53, 54, 57, 58, 59, 'Integer\r\n', '()', 'Integer\r\n', 'JDK', 'double', 'A constructor must have the same name as the class', 'alloc\r\n', 'If\r\n', 'Hierarchical inheritance\r\n', 'yield()\r\n', '', 0),
(4, 1141, 1, 5, 9, 10, 12, 14, 17, 21, 23, 29, 30, '$add = $add + 1', 'get_peak_usage()', 'uniqueid()\r\n', '~', 'file_uploads', 'before()', '1990', '<strong>', 'Compiler', '<h1>', '12/31/16 06:13:18 pm', 0),
(5, 3498, 1, 35, 37, 39, 42, 43, 46, 47, 53, 54, 57, 'JVM\r\n', 'switch', 'Integer\r\n', '()', 'Character\r\n', 'JDK', 'double', 'A constructor must have the same name as the class', 'alloc\r\n', 'If\r\n', '12/31/16 06:33:07 pm', 0),
(6, 3947, 1, 43, 46, 47, 53, 54, 57, 58, 59, 61, 62, 'Integer\r\n', 'JVM', 'then', 'A constructor must have the same name as the class', 'malloc', 'Nested-if\r\n', 'Single inheritance\r\n', 'go()', 'friendly', 'debug a java program\r\n', '12/31/16 08:58:20 pm', 0),
(7, 2391, 1, 84, 85, 89, 93, 94, 95, 100, 103, 107, 109, 'MAX', 'HAVING\r\n', 'All the records from a table that match the previo', 'Array_Count', 'an ocean of resources waiting to be mined', '<mail>xxx@yyy</mail>', 'High powered computer', 'should be written in lower case\r\n', '<head><head>\r\n', 'The operating environment of your ISP\r\n', '01/01/17 02:59:13 am', 0),
(8, 3162, 1, 37, 39, 42, 43, 46, 47, 53, 54, 57, 58, 'double', 'Character\r\n', '*', 'Character\r\n', 'JVM', 'instance of', 'A constructor must have the same name as the class', 'alloc\r\n', 'Switch\r\n', 'Hierarchical inheritance\r\n', '01/01/17 03:10:48 am', 0),
(9, 1194, 1, 79, 80, 84, 85, 89, 93, 94, 95, 100, 103, 'Any operating system at all', 'UNIQUE', 'COMPUTE', 'HAVING\r\n', 'Nothing', 'Array_Count', 'a network of networks', '<mail>xxx@yyy</mail>', 'High powered computer', 'should be written in lower case\r\n', '01/01/17 03:12:06 am', 0),
(10, 3376, 1, 35, 37, 39, 42, 43, 46, 47, 53, 54, 57, 'JVM\r\n', 'switch', 'Character\r\n', '()', 'Character\r\n', 'JDK', 'then', 'A constructor must have the same name as the class', 'alloc\r\n', 'If\r\n', '01/01/17 03:15:01 am', 0),
(11, 2080, 1, 67, 68, 71, 74, 79, 80, 84, 85, 89, 93, 'Compiled code', 'Converts a java program into bytecode\r\n', 'Drivers, Application\r\n', 'Both', 'Any operating system at all', 'NO DUPLICATE', 'MIN', 'WHERE\r\n', 'All the records from a table that match the previo', 'count', '01/01/17 03:19:31 am', 0),
(12, 3684, 1, 69, 70, 72, 76, 78, 81, 83, 86, 91, 96, 'nested classes\r\n', 'infinite', '$post', 'strlen($variable)', 'AUTO_INCREMENT', 'LIKE ton$', 'Time()', 'mysql_drop_database', 'array_key_exist()\r\n', '<background>yellow</background>', '01/01/17 03:28:01 am', 0),
(13, 4560, 1, 85, 89, 93, 94, 95, 100, 103, 107, 109, 112, 'AND\r\n', 'All the records from a table that match the previo', 'count', 'a network of networks', '<a href="xxx@yyy">', 'web page editing software\r\n', 'Should be written in upper case\r\n', '<head></head>\r\n', 'The web audience\r\n', '<?-- _ _--?', '01/01/17 03:29:00 am', 0),
(14, 3799, 1, 37, 39, 42, 43, 46, 47, 53, 54, 57, 58, 'double', 'Integer\r\n', '()', 'Integer\r\n', 'JDK', 'double', 'A constructor must have the same name as the class', 'alloc\r\n', 'If\r\n', 'Hierarchical inheritance\r\n', '01/01/17 03:30:11 am', 0),
(15, 4961, 1, 53, 54, 57, 58, 59, 61, 62, 67, 68, 71, 'A constructor must have the same name as the class', 'alloc\r\n', 'If\r\n', 'Hierarchical inheritance\r\n', 'yield()\r\n', 'public\r\n', 'debug a java program\r\n', 'Compiled Instructions', 'Converts a java program into binary code\r\n', 'JDBC drivers, ODBC drivers\r\n', '01/01/17 03:34:37 am', 0),
(16, 1068, 1, 68, 71, 74, 79, 80, 84, 85, 89, 93, 94, 'Converts a java program into binary code\r\n', 'Drivers, Application\r\n', 'Post\r\n', 'Any operating system at all', 'UNIQUE', 'MIN', 'WHERE\r\n', 'All the records from a table that match the previo', 'Sizeof', 'a network of networks', '01/02/17 12:06:19 am', 0),
(17, 4035, 1, 89, 93, 94, 95, 100, 103, 107, 109, 112, 116, 'All the records from a table that match the previo', 'Array_Count', 'an ocean of resources waiting to be mined', '<mail>xxx@yyy</mail>', 'High powered computer', 'Should be written in upper case\r\n', '<head><head>\r\n', 'The operating environment of your ISP\r\n', '<?-- _ _--?', 'HTML Element', '01/02/17 10:43:32 pm', 0),
(19, 4109, 1, 12, 14, 17, 21, 23, 29, 30, 33, 36, 38, '^', 'file_upload', 'lat()', '2000', '<black>', 'Web Browser', '<h4>', 'M. P Java\r\n', 'Code generated by a Java Virtual Machine\r\n', '()', '01/02/17 10:44:52 pm', 0),
(20, 4088, 1, 69, 70, 72, 76, 78, 81, 83, 86, 91, 96, 'anonymous classes\r\n', '5', '$get', 'count($variable)\r\n', 'SEQUENCE', '', '', 'mysql_drop_database', 'array_key_exist()\r\n', '<background>yellow</background>', '01/02/17 11:06:49 pm', 0),
(21, 2158, 1, 60, 63, 66, 69, 70, 72, 76, 78, 81, 83, 'Java Verified Machine\r\n', 'Static content', 'Java has replaced the destructor function of C++\r\n', '', 'infinite', '$ask\r\n', 'len($variable)\r\n', 'AUTO_INCREMENT', 'LIKE ton$', 'Time()', '01/02/17 11:32:04 pm', 0),
(22, 4633, 1, 1, 2, 6, 8, 11, 13, 15, 61, 74, 79, 'Personal Home Page', '.php', 'echo ï¿½$$xï¿½;\r\n', 'file()', 'Near-fatal error', 'syslog()', '-1', 'private\r\n', 'Get\r\n', 'Any operating system at all', '01/03/17 03:52:43 pm', 0),
(23, 3950, 1, 1, 2, 6, 8, 11, 13, 15, 61, 74, 79, 'Personal Home Page', '.xml', 'echo ï¿½$$xï¿½;\r\n', 'fold()', 'Fatal run-time error', 'log_system()', '0', 'private\r\n', 'Both', 'Linux and Mac OS-X only', '01/03/17 03:55:55 pm', 0),
(25, 3622, 1, 1, 2, 6, 8, 11, 13, 15, 61, 74, 79, 'Hypertext Preprocessor', '.xml', '', '', '', '', '', '', '', '', '01/03/17 04:10:54 pm', 0),
(26, 1579, 1, 35, 37, 39, 42, 43, 46, 47, 53, 54, 57, '', '', '', '', '', '', '', '', '', '', '01/03/17 04:15:44 pm', 0),
(27, 1111, 1, 1, 2, 6, 8, 11, 13, 15, 61, 74, 79, '', '.php', 'echo ï¿½$$xï¿½;\r\n', 'file()', 'Near-fatal error', 'syslog()', '-1', 'private\r\n', '', '', '01/03/17 04:21:55 pm', 0),
(28, 3629, 1, 1, 2, 6, 8, 11, 13, 15, 61, 74, 79, 'Hypertext Preprocessor', '', '', '', '', '', '', '', '', '', '01/03/17 11:48:51 pm', 0),
(29, 5000, 1, 1, 2, 6, 8, 11, 13, 15, 61, 74, 79, 'Hypertext Preprocessor', '.php', 'echo ï¿½$$xï¿½;\r\n', 'file()', 'Fatal run-time error', 'syslog()', '0', 'private\r\n', 'Post\r\n', 'Linux and Mac OS-X only', '01/04/17 12:50:59 am', 0),
(30, 4349, 1, 33, 36, 38, 48, 52, 55, 56, 60, 63, 66, 'M. P Java\r\n', 'Code generated by a Java Virtual Machine\r\n', '()', 'Java deletes all unused java files on the system.\r', 'A class\r\n', 'Braces\r\n', 'Integer\r\n', 'Java Verified Machine\r\n', 'Dynamic content', 'Java does not support overloading.\r\n', '01/04/17 12:52:03 am', 0),
(31, 3197, 1, 2, 6, 8, 11, 13, 15, 61, 74, 79, 80, '.php', '', '', '', '', '', '', '', '', '', '01/04/17 01:24:00 am', 0),
(32, 3143, 1, 1, 2, 6, 8, 11, 13, 15, 61, 74, 79, 'Personal Home Page', '.php', 'echo ï¿½$xï¿½;\r\n', '', 'Near-fatal error', 'systemlog()', '0', 'private\r\n', 'Post\r\n', 'Linux and Mac OS-X only', '01/04/17 01:34:27 am', 0);

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(11) NOT NULL,
  `menu_name` varchar(50) NOT NULL,
  `position` int(11) NOT NULL,
  `visible` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `menu_name`, `position`, `visible`) VALUES
(1, 'Home', 1, 1),
(2, 'Tests', 2, 1),
(3, 'About Us', 3, 1),
(4, 'Services', 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `test_id` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `phone` int(15) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `sex` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `test_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `password`, `phone`, `mail`, `address`, `sex`, `type`, `test_id`) VALUES
(1, 'Arif', '1234', 1234, '1234', '123 dasf ', 'male', '', 0),
(6, 'ariq', '123456', 173, 'ariq@gmail.com', 'dhanmondi', 'male', '', 0),
(9, 'shorif', '621511', 167998877, 'shorif@gmail.com', 'kolabagan', 'male', '', 0),
(10, 'samia', '123', 191885623, 'samia@gmail.com', 'badda', 'female', '', 0),
(11, 'masroor', '123987', 161232344, 'masroor@hotmail.com', 'mohammadpur', 'male', '', 0),
(12, 'sam', '1234', 1712323434, 'sam@yahoo.com', 'jigatola', 'female', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subject_id` (`subject_id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`q_id`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `q_id` (`q_id`),
  ADD KEY `user_id_2` (`user_id`),
  ADD KEY `q_iq2` (`q_iq2`),
  ADD KEY `q_iq3` (`q_iq3`),
  ADD KEY `q_iq4` (`q_iq4`),
  ADD KEY `q_iq5` (`q_iq5`),
  ADD KEY `q_iq6` (`q_iq6`),
  ADD KEY `q_iq7` (`q_iq7`),
  ADD KEY `q_iq8` (`q_iq8`),
  ADD KEY `q_iq9` (`q_iq9`),
  ADD KEY `q_iq10` (`q_iq10`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`test_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `q_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;
--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `test_id` int(200) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `question_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `course` (`course_id`);

--
-- Constraints for table `result`
--
ALTER TABLE `result`
  ADD CONSTRAINT `result_ibfk_1` FOREIGN KEY (`q_id`) REFERENCES `question` (`q_id`),
  ADD CONSTRAINT `result_ibfk_10` FOREIGN KEY (`q_iq9`) REFERENCES `question` (`q_id`),
  ADD CONSTRAINT `result_ibfk_11` FOREIGN KEY (`q_iq9`) REFERENCES `question` (`q_id`),
  ADD CONSTRAINT `result_ibfk_12` FOREIGN KEY (`q_iq9`) REFERENCES `question` (`q_id`),
  ADD CONSTRAINT `result_ibfk_13` FOREIGN KEY (`q_iq10`) REFERENCES `question` (`q_id`),
  ADD CONSTRAINT `result_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `result_ibfk_3` FOREIGN KEY (`q_iq2`) REFERENCES `question` (`q_id`),
  ADD CONSTRAINT `result_ibfk_4` FOREIGN KEY (`q_iq3`) REFERENCES `question` (`q_id`),
  ADD CONSTRAINT `result_ibfk_5` FOREIGN KEY (`q_iq4`) REFERENCES `question` (`q_id`),
  ADD CONSTRAINT `result_ibfk_6` FOREIGN KEY (`q_iq5`) REFERENCES `question` (`q_id`),
  ADD CONSTRAINT `result_ibfk_7` FOREIGN KEY (`q_iq6`) REFERENCES `question` (`q_id`),
  ADD CONSTRAINT `result_ibfk_8` FOREIGN KEY (`q_iq7`) REFERENCES `question` (`q_id`),
  ADD CONSTRAINT `result_ibfk_9` FOREIGN KEY (`q_iq8`) REFERENCES `question` (`q_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
