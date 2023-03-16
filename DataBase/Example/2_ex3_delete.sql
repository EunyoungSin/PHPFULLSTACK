DELETE FROM departments;

SELECT *
FROM departments;

ROLLBACK;

DELETE
FROM employees
WHERE emp_no = 500000;

SELECT *
FROM employees
WHERE emp_no >= 499990;