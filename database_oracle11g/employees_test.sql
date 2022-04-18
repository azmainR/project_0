ALTER TABLE USER_LIST 
ADD user_type varchar2(10)
/
SELECT * FROM USER_LIST ul 
/

select max(user_id) id from USER_LIST ul 
/

select e.FIRST_NAME emp_name, e.SALARY sal from employees e
where e.SALARY =(select MIN(SALARY) from EMPLOYEEs); 
/

select DISTINCT
f.employee_id,
   f.first_name || ' ' || f.last_name manager, f.employee_id manager_id,
   f.email || ', ' || f.phone_number contact_info, f.hire_date, j.job_title, 
   f.salary, d.department_name, l.city || ', ' || l.state_province 
   || ', ' || c.country_name || ', ' || r.region_name address 
   from 
   employees e, (select * from employees) f, departments d, jobs j, locations l, 
   countries c, regions r
   where 
   f.department_id=d.department_id and e.manager_id=f.employee_id and 
   f.job_id=j.job_id and d.location_id=l.location_id 
   and l.country_id=c.country_id and c.region_id=r.region_id
   and e.manager_id between :emp_id1 and :emp_id2 
   /
  
  select DISTINCT
f.employee_id,
   f.first_name || ' ' || f.last_name manager, f.employee_id manager_id,
   f.email || ', ' || f.phone_number contact_info, f.hire_date, j.job_title, 
   f.salary, d.department_name, l.city || ', ' || l.state_province 
   || ', ' || c.country_name || ', ' || r.region_name address 
   from 
   employees e, (select * from employees) f, departments d, jobs j, locations l, 
   countries c, regions r
   where 
   f.department_id=d.department_id and e.manager_id=f.employee_id and 
   f.job_id=j.job_id and d.location_id=l.location_id 
   and l.country_id=c.country_id and c.region_id=r.region_id
   and e.manager_id between 10 and 120
   /
  
  create table m_employees(
  	man_id number(5) not null,
  	man_name varchar2(20),
  	contact varchar2(50),
  	hire_date date,
  	job_title varchar2(30),
  	salary number(8),
  	department_name varchar2(30),
  	address varchar2(100),
  	comm_pct number(4,2),
  	dob date,
  	hobby varchar2(20),
  	primary key(man_id)
  )
  /
 
insert into m_employees
values (:id,:name,:contact,to_date(:hireDate,'dd/mm/yyyy'),:jobTitle,:salary,:deptName,:addrs,:commPct,
to_date(:dob,'dd/mm/yyyy'),:hobby)
/

select * from m_employees
/
drop table m_employees
/
select d.location_id, l.postal_code
from employees e, departments d, locations l 
where e.DEPARTMENT_ID =d.DEPARTMENT_ID and d.LOCATION_ID = l.LOCATION_ID 
and e.manager_ID  = :id1
/

--insert,update,delete

select count(e.employee_id) from employees e
/
update	m_employees
set man_id=:employeesmanager_id,man_name=:employeesmanager_name,contact=:employeescontact, 
	hire_date=to_date(:employeeshire_date,'dd/mm/rrrr')
where man_id between :id1 and :id2;
/
update	m_employees
set man_name=:employeesmanager_name,contact=:employeescontact, 
	hire_date=to_date(:employeeshire_date,'dd/mm/rrrr'),job_title=:employeesjob_title,salary=:employeessalary,
	department_name=:employeesdepartment_name,address=:employeesaddress,comm_pct=:employeescom_pct,
	dob=to_date(:employeesdob,'dd/mm/rrrr'),hobby=:employeeshobby,loc_id=:employeesloc_id,
	postal_code=:employeespostal_code
where man_id =:man
/
delete from m_employees
where man_id=:mid
/
			
