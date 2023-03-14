SELECT emp_no AS 사원번호, avg(salary) AS 평균급여
FROM salaries
GROUP BY emp_no
HAVING 평균급여 >= 30000
   AND 평균급여 <= 50000;
   
SELECT CONCAT(last_name, ' ', first_name) AS fullname
FROM employees;

SELECT *
FROM dept_manager
WHERE dept_no =
					(
						SELECT dept_no
						FROM dept_manager
						WHERE emp_no = 110344
						);
						
SELECT *
FROM dept_manager
WHERE dept_no IN
					(
						SELECT dept_no
						FROM dept_manager
						WHERE dept_no = 'd009'
						);
						
SELECT *
FROM dept_manager
WHERE dept_no = ANY (
						SELECT dept_no
						FROM dept_manager
						WHERE dept_no = 'd009'
						);
						
SELECT *
FROM dept_manager
WHERE dept_no = ALL (
						SELECT dept_no
						FROM dept_manager
						WHERE dept_no = 'd009'
						);
						
SELECT emp_no, first_name, last_name, gender
FROM employees
WHERE emp_no in (
						SELECT emp_no
						fROM salaries
						GROUP BY emp_no
						having avg(salary) >= 70000
						);
						
SELECT *
FROM titles
WHERE emp_no = 10009;

SELECT *, NOW()
FROM titles
WHERE emp_no = 10009
  AND to_date >= NOW();
  
SELECT emp_no, last_name
FROM employees
WHERE emp_no IN (
						SELECT emp_no
						FROM titles
						WHERE title = 'senior engineer'
						AND to_date >= NOW()
					);