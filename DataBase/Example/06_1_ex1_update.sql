UPDATE departments
SET dept_name = '1000'
WHERE dept_no = 'd001';

SELECT *
FROM departments
WHERE dept_np = 'd001';

UPDATE employees
SET birth_date = date(19930803)
, first_name = 'EunYoung'
, last_name = 'Sin'
WHERE emp_no = 500000;

SELECT *
FROM employees
WHERE birth_date = 19930803;

UPDATE departments
SET dept_name = 2000
WHERE emp_no = 'd001' OR 'd002';
