CREATE TABLE students (
	serial_no NUMBER (3),
	roll_no number(3),
	class varchar2(5),
	class_sect varchar2(1),
	f_name varchar2(20),
	l_name varchar2(20),
	mobile number(11),
	email varchar2(30),
	district varchar2(15),
	country varchar2(15),
	PRIMARY KEY (roll_no, class, class_sect)
);

INSERT INTO STUDENTS
VALUES (1, 01, 'V','A','John','Smith',37127896543,'smith@john.com','Los Angeles','USA');

update STUDENTS
	--SET l_name='Smith'
	SET mobile=31278965432
	WHERE roll_no=1;

drop TABLE STUDENTS;

INSERT INTO STUDENTS
	VALUES (2, 02, 'V','A','Jane','Smith',37125686543,'smith@jane.com','California','USA');

INSERT INTO STUDENTS
	VALUES (emp_test_seq.nextval, 03, 'V','C','test','test1',37125686543,'test1@test.com',
'California','USA');

--	,VALUES (3, 03, 'V','A','June','Rogers',37125129543,'rogers@june.com','Dakota','USA')
SELECT * FROM STUDENTS ;

ALTER TABLE STUDENTS 
MODIFY class NUMBER(2);

ALTER TABLE STUDENTS 
MODIFY mobile varchar(20);

SELECT s.SERIAL_NO FROM STUDENTS S
WHERE s.class_sect='A';

select count(rownum) c from students;

SELECT max(SERIAL_NO) + 1 FROM STUDENTS s ;

SELECT s.SERIAL_NO ,s.L_NAME || ', ' || s.F_NAME st_name, s.MOBILE ,s.EMAIL ,s.DISTRICT ,
s.COUNTRY 
FROM STUDENTS s WHERE s.ROLL_NO =&num AND s.CLASS ='V' AND s.CLASS_SECT = 'A';

ALTER TABLE STUDENTS 
add IMG varchar(255);

