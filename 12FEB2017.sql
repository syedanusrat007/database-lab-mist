CREATE TABLE EMPLOYEE
(
E_id VARCHAR2(12) Not NULL,
E_name VARCHAR2(20),
E_dob DATE,
E_street VARCHAR2(12),
E_city VARCHAR2(12),
E_startdate DATE
);

INSERT INTO EMPLOYEE (E_id,E_name,E_dob,E_street,E_city,E_startdate) 
VALUES ( 'E01', 'Pious', to_date('11-Jan-1987', 'DD-Mon-YYYY'), 'e_s_001', 'Dhaka',to_date('11-Jan-2015', 'DD-Mon-YYYY'));

SELECT * FROM EMPLOYEE;

INSERT INTO EMPLOYEE2 SELECT * FROM EMPLOYEE;

ALIASING :-
SELECT E_id AS "EMPLOYEE ID" FROM EMPLOYEE;

DUPLICATE HANDLE:- 

SELECT DISTINCT/UNIQUE E_city FROM EMPLOYEE;

CONCAT:-

SELECT E_name || 'Has Employee ID' || E_id FROM EMPLOYEE2;

SELECT E_name || 'Has Employee ID' || E_id AS "Employee Name AND Employe ID' FROM EMPLOYEE2";

To show any Date in specific Format:-

SELECT to_char (E_dob, 'mm/dd/yyyy') AS "Date of Birth" FROM EMPLOYEE2;


19/02/17

CREATE TABLE CUSTOMER
(
C_id VARCHAR2(12) Not NULL,
C_name VARCHAR2(20),
C_dob DATE,
C_city VARCHAR2(12),
C_street VARCHAR2(12)
);

CREATE TABLE ACCOUNT
(
A_id VARCHAR2(12) Not NULL,
A_balance VARCHAR2(20),
A_type VARCHAR2(20)
);

CREATE TABLE DEPOSITOR
(
C_id VARCHAR2(12) Not NULL,
A_id VARCHAR2(12) Not NULL
);


INSERT INTO ACCOUNT (A_id,A_balance,A_type) 
VALUES ( 'A_4', '7000','Current');
INSERT INTO DEPOSITOR (C_id,A_id) 
VALUES ( 'C_4', 'A_4');

cross join:
SELECT C_name, A_id FROM CUSTOMER ,ACCOUNT;

inner join:
SELECT C_name,A_id FROM CUSTOMER ,DEPOSITOR

WHERE CUSTOMER.C_id = DEPOSITOR.C_id;


SELECT C_name,A_id FROM CUSTOMER c,DEPOSITOR d

WHERE c.C_id = d.C_id;