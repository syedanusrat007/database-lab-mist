
Create table Customer
(
	Cust_id 	VARCHAR2(12)  NOT NULL,
	Cust_name	VARCHAR2(12),
	Cust_dob	DATE,
	Cust_street	VARCHAR2(12),
	Cust_city	VARCHAR2(12)
);

Create table Account
(
	Account_id 	VARCHAR2(12)  NOT NULL,
	Balance		NUMBER(20,5),
	Type		VARCHAR2(8)
);

Create table Branch
(
	Branch_name	VARCHAR2(14)  NOT NULL,
	Branch_city	VARCHAR2(10),
	Assets		NUMBER(20,5)
);

Create table Employee
(
	Employee_id	VARCHAR2(12)  NOT NULL,
	Employee_name	VARCHAR2(20),
	Employee_dob	DATE,
	Employee_street	VARCHAR2(20),
	Employee_city	VARCHAR2(20),
	Employee_startdate DATE,
	Salary		NUMBER(10,3),
	Manager_id	VARCHAR2(12)
);

Create table Loan
(
	Loan_id 	VARCHAR2(12)  NOT NULL,
	Amount		NUMBER(20,5)				
);
Create table Return
(
	Payment_id 	VARCHAR2(12)  NOT NULL,
	Loan_id 	VARCHAR2(12)  NOT NULL
);

Create table Loan_return
(
	Payment_id 	VARCHAR2(12)  NOT NULL,
	Payment_amount	NUMBER(20,5),				
	Payment_date	Date
);

Create table InfoTran
(
	Transaction_id	 VARCHAR2(20) NOT NULL,
	Transaction_date DATE,
	Type		 VARCHAR2(8),
	Amount		 NUMBER(20,5)
);

Create table Transaction
(
	Transaction_id	 VARCHAR2(20) NOT NULL,
	Account_id	 VARCHAR2(12) NOT NULL
);
Create table Borrower
(
	Cust_id 	VARCHAR2(12)  NOT NULL,
	Loan_id 	VARCHAR2(12)  NOT NULL
);
Create table Depositor
(
	Cust_id 	VARCHAR2(12)  NOT NULL,
	Account_id	 VARCHAR2(12) NOT NULL
);

Create table Cust_banker
(
	Customer_id 	VARCHAR2(12)  NOT NULL,
	Employee_id	VARCHAR2(12)  NOT NULL		
);
Create table Loan_Branch
(
	Loan_id 	VARCHAR2(12)  NOT NULL,
	Branch_name	VARCHAR2(14)  NOT NULL
);

Create table SALGRADE
(
	GRADE	VARCHAR2(5)  NOT NULL,
	LOSAL	NUMBER(10,3),
	HISAL	NUMBER(10,3)	
)
