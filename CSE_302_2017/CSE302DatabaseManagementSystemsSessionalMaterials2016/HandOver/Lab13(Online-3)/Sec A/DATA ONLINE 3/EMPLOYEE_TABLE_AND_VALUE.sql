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

Insert into Employee values('E00000000001','Alfreds',TO_DATE('11-JAN-1982','DD-MON-YYYY'),'e_street_006', 'e_city_001',to_date('11-JAN-2002','dd-mon-yyyy'),5000,'');
Insert into Employee values('E00000000002','Futterkiste',TO_DATE('22-JAN-1958','DD-MON-YYYY'),'e_street_005', 'e_city_002',to_date('22-JAN-1978','dd-mon-yyyy'),2850,'E00000000001');
Insert into Employee values('E00000000003','Ana',TO_DATE('23-FEB-1962','DD-MON-YYYY'),'e_street_007', 'e_city_003',to_date('23-FEB-1982','dd-mon-yyyy'),2000,'E00000000001');
Insert into Employee values('E00000000004','Trujillo',TO_DATE('24-FEB-1964','DD-MON-YYYY'),'e_street_004', 'e_city_004',to_date('24-FEB-1984','dd-mon-yyyy'),5300,'E00000000001');
Insert into Employee values('E00000000005','Emparedados',TO_DATE('25-OCT-1956','DD-MON-YYYY'),'e_street_004', 'e_city_005',to_date('25-OCT-1976','dd-mon-yyyy'),6500,'E00000000001');
Insert into Employee values('E00000000006','Helados',TO_DATE('26-NOV-1982','DD-MON-YYYY'),'e_street_003', 'e_city_006',to_date('26-NOV-2002','dd-mon-yyyy'),1700,'E00000000007');
Insert into Employee values('E00000000007','Antonio',TO_DATE('27-DEC-1975','DD-MON-YYYY'),'e_street_002', 'e_city_007',to_date('27-DEC-1995','dd-mon-yyyy'),900000,'');
Insert into Employee values('E00000000008','Moreno',TO_DATE('28-MAR-1978','DD-MON-YYYY'),'e_street_002', 'e_city_008','to_date('28-MAR-1998','dd-mon-yyyy'),5090,'E00000000007');
Insert into Employee values('E00000000009','Taquería',TO_DATE('27-MAR-1974','DD-MON-YYYY'),'e_street_001', 'e_city_009',to_date('27-MAR-1994','dd-mon-yyyy'),4000,'E00000000007');
Insert into Employee values('E00000000010','Parmarita',TO_DATE('27-MAR-1974','DD-MON-YYYY'),'e_street_001', 'e_city_009',to_date('27-MAR-1994','dd-mon-yyyy'),4000,'E00000000007');
