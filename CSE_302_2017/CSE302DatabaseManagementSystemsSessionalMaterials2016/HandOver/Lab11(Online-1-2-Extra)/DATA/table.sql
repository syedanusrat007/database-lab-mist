
Create table Customer
(
	Cust_id 	VARCHAR2(12),
	Cust_name	VARCHAR2(12),
	Cust_dob	DATE,
	Cust_street	VARCHAR2(12),
	Cust_city	VARCHAR2(12),
	CONSTRAINT Customer_CUST_ID_pk PRIMARY KEY(CUST_ID)
);


Create table Account
(
	Account_id 	VARCHAR2(12)  NOT NULL,
	Balance		NUMBER(20,5),
	Type		VARCHAR2(8),
        Branch_name	VARCHAR2(14),
	CONSTRAINT ACCOUNT_ACCOUNT_ID_pk PRIMARY KEY(ACCOUNT_ID)
);


Create table Employee
(
	Employee_id	VARCHAR2(12),
	Employee_name	VARCHAR2(20),
	Employee_dob	DATE,
	Employee_street	VARCHAR2(20),
	Employee_city	VARCHAR2(20),
	Employee_startdate DATE,
	Salary		NUMBER(10,3),
	Manager		VARCHAR2(12),
	CONSTRAINT EMPLOYEE_EMP_ID_pk PRIMARY KEY(Employee_id)
);




Create table Loan
(
	Loan_id 	VARCHAR2(12)  NOT NULL,
	Amount		NUMBER(20,5),				
	CONSTRAINT Loan_LoanID_pk PRIMARY KEY(LOAN_id)
);


Create table Borrower
(
	Cust_id 	VARCHAR2(12)  NOT NULL,
	Loan_id 	VARCHAR2(12)  NOT NULL,
	CONSTRAINT BORROWER_CUST_ID_FK FOREIGN KEY(CUST_ID) 
			REFERENCES  CUSTOMER(CUST_ID),
	CONSTRAINT BORROWER_LOAN_ID_FK FOREIGN KEY(LOAN_ID) 
			REFERENCES  LOAN(LOAN_ID)
);


Create table Depositor
(
	Cust_id 	VARCHAR2(12)  NOT NULL,
	Account_id	 VARCHAR2(12) NOT NULL,
	CONSTRAINT DEPOSITOR_CUST_ID_FK FOREIGN KEY(CUST_ID) 
			REFERENCES  CUSTOMER(CUST_ID),
	CONSTRAINT DEPOSITOR_ACCOUNT_ID_FK FOREIGN KEY(ACCOUNT_ID) 
			REFERENCES  ACCOUNT(ACCOUNT_ID)
);

Create table Branch
(
	Branch_name	VARCHAR2(14)  NOT NULL,
	Branch_city	VARCHAR2(10),
	Assets		NUMBER(20,5)
);

create table salgrade(
 grade varchar2(5),
 lowsal number,
 highsal number);
 
 
 insert into salgrade values ('A+','8000','10000');
 insert into salgrade values ('A','6000','7900');
 insert into salgrade values ('A-','4000','5900');
 insert into salgrade values ('B+','2000','3900');
 insert into salgrade values ('B','0000','1900');
 
