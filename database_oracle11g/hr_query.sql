select distinct
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
AND e.manager_ID between '100' and '150'
ORDER BY f.employee_id ASC ;

select distinct
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
AND f.HIRE_DATE between TO_DATE('2004-01-01', 'YYYY-MM-DD') AND TO_DATE('2010-12-31', 'YYYY-MM-DD')
ORDER BY f.employee_id ASC ;

SELECT * FROM EMPLOYEES e WHERE e.HIRE_DATE BETWEEN TO_DATE('01.01.2004','DD.MM.YYYY') AND 
TO_DATE('31.12.2010', 'DD.MM.YYYY'); 

SELECT * FROM EMPLOYEES e WHERE e.HIRE_DATE BETWEEN DATE '2004-01-01' AND DATE '2010-12-31';  