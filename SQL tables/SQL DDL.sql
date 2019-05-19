USE id324399_banking;
   
CREATE TABLE Acct_Applications
   (	applic_no INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
   	name VARCHAR(100) NOT NULL,
   	mother_name VARCHAR(30) NOT NULL,
   	gender VARCHAR(8) NOT NULL,
   	address VARCHAR(100) NOT NULL,
   	pincode SMALLINT(6) UNSIGNED NOT NULL,
   	state VARCHAR(30) NOT NULL,
   	dobirth DATE NOT NULL,
   	occupation VARCHAR(30) NOT NULL,
   	aadhaar BIGINT(16) UNSIGNED,
   	mob_no BIGINT(10) UNSIGNED NOT NULL,
   	email VARCHAR(40),
   	username VARCHAR(20) NOT NULL,
   	password VARCHAR(20) NOT NULL,
   	status VARCHAR(30) NOT NULL
   );   
   
   
   ALTER TABLE Acct_Applications
 	   MODIFY status VARCHAR(100);
 	   
 	   
 	   CREATE TABLE Accounts
   (	acc_no INT(10) ZEROFILL UNSIGNED AUTO_INCREMENT PRIMARY KEY,
   	name VARCHAR(100) NOT NULL,
   	mother_name VARCHAR(30) NOT NULL,
   	gender VARCHAR(8) NOT NULL,
   	address VARCHAR(100) NOT NULL,
   	pincode SMALLINT(6) UNSIGNED NOT NULL,
   	state VARCHAR(30) NOT NULL,
   	dobirth DATE NOT NULL,
   	occupation VARCHAR(30) NOT NULL,
   	aadhaar BIGINT(16) UNSIGNED,
   	mob_no BIGINT(10) UNSIGNED NOT NULL,
   	email VARCHAR(40),
   	username VARCHAR(20) NOT NULL,
   	password VARCHAR(20) NOT NULL,
   	balance DOUBLE(30, 2) NOT NULL,
   	branch VARCHAR(40) NOT NULL
   );
   
   
   CREATE TABLE Transactions
   (	trans_no INT(8) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
   	date DATE NOT NULL,
   	time TIME NOT NULL,
   	from_acc INT(10) UNSIGNED NOT NULL,
   	to_acc INT(10) UNSIGNED NOT NULL,
   	amount INT(10) UNSIGNED NOT NULL,
   	description VARCHAR(60)
   );
   
   
   ALTER TABLE Transactions
 	   MODIFY from_acc INT(10) UNSIGNED DEFAULT NULL;
   
   
   ALTER TABLE Transactions
 	   MODIFY to_acc INT(10) UNSIGNED DEFAULT NULL;
 	   
 	   
ALTER TABLE Transactions
 	   MODIFY to_acc INT(10) UNSIGNED ZEROFILL DEFAULT NULL;
 	   
 	   
ALTER TABLE Transactions
 	   MODIFY from_acc INT(10) UNSIGNED ZEROFILL DEFAULT NULL;
 	   
 	   
CREATE TABLE Employee
   (	id INT(8) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
   	username VARCHAR(20) NOT NULL,
   	password VARCHAR(20) NOT NULL,
   	branch VARCHAR(25) NOT NULL
   );
   
   
   INSERT INTO Employee(username, password, branch) VALUES('Username1', 'Password1!', 'branch1');
   
   INSERT INTO Employee(username, password, branch) VALUES('Username2', 'Password2@', 'branch2');
   
   INSERT INTO Employee(username, password, branch) VALUES('Username3', 'Password3#', 'branch3');
   
    	    	    	   
