--1.
SELECT emp.emp_no, CONCAT(first_name, ' ' , last_name) fullname, tit.title
FROM employees emp
	INNER JOIN titles tit
		ON emp.emp_no = tit.emp_no
WHERE tit.to_date = DATE(99990101);
		
--2.
SELECT emp.emp_no, emp.gender, sal.salary
FROM employees emp
	INNER JOIN salaries sal
		ON emp.emp_no = sal.emp_no
WHERE sal.to_date = DATE(99990101);

--3.
SELECT CONCAT(first_name, ' ' , last_name) fullname, sal.salary
FROM employees emp
	INNER JOIN salaries sal
		ON emp.emp_no = sal.emp_no
WHERE emp.emp_no = 10010;

--4.
SELECT emp.emp_no, CONCAT(first_name, ' ' , last_name) fullname, dep.dept_name
FROM employees emp
	INNER JOIN dept_emp dept
		ON emp.emp_no = dept.emp_no
	INNER JOIN departments dep
		ON dept.dept_no = dep.dept_no
WHERE dept.to_date = DATE(99990101)
ORDER BY emp.emp_no ASC;
		
--5.
SELECT emp.emp_no, CONCAT(first_name, ' ' , last_name) fullname, sal.salary
FROM employees emp
	INNER JOIN salaries sal
		ON emp.emp_no = sal.emp_no
WHERE sal.to_date = DATE(99990101)
ORDER BY sal.salary desc
LIMIT 10;

--6.
SELECT dep.dept_name, CONCAT(first_name, ' ' , last_name) fullname, hire_date
FROM employees emp
	INNER JOIN dept_manager dept
		ON emp.emp_no = dept.emp_no
	INNER JOIN departments dep
		ON dept.dept_no = dep.dept_no
WHERE dept.to_date = DATE(99990101);
		
--7.
SELECT AVG(sal.salary)
FROM salaries sal
	INNER JOIN titles tit
		ON sal.emp_no = tit.emp_no
WHERE tit.title = 'staff'
  AND sal.to_date >= NOW()
  AND tit.to_date >= NOW();

--8.
SELECT CONCAT(first_name, ' ' , last_name) fullname, emp.hire_date, emp.emp_no, dep.dept_no
FROM employees emp
	INNER JOIN dept_manager dep
		ON emp.emp_no = dep.emp_no;

--9.
SELECT tit.title, TRUNCATE(AVG(sal.salary),0)
FROM salaries sal
	INNER JOIN titles tit
		ON sal.emp_no = tit.emp_no
WHERE sal.to_date >= NOW() AND tit.to_date >= NOW()
GROUP BY tit.title
HAVING AVG(sal.salary) >= 60000
ORDER BY TRUNCATE(AVG(sal.salary), 0) DESC;

--10.
SELECT tit.title, COUNT(*)
FROM employees emp
	INNER JOIN titles tit
		ON emp.emp_no = tit.emp_no
WHERE emp.gender = 'F'
GROUP BY tit.title;

--11.
SELECT A.gender, COUNT(A.gender) AS cnt
FROM employees A
INNER JOIN (
	SELECT emp_no
	FROM title
	GROUP BY emp_no
	HAVING MAX(to_date) != DATE('9999-01-01')
) B
ON A.emp_no = B.emp_no
GROUP BY A.gender;