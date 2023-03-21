SHOW INDEX FROM employees;

CREATE INDEX idx_employees_last_name ON employees(last_name);

DROP INDEX idx_employees_last_name ON employees;

SELECT * FROM employees WHERE last_name = 'Swan';