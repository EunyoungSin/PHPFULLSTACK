-- 	CREATE [OR REPLACE] VIEW 뷰명
-- 	AS
-- 		SELECT 문
-- 	;
-- 	** [OR REPLACE] : 기존의 뷰가 있을 경우 덮어쓰기를 합니다. **

CREATE VIEW test_view
AS
	SELECT tit.title, COUNT(*) cnt
	FROM employees emp
		INNER JOIN titles tit
		ON emp.emp_no = tit.emp_no
	WHERE emp.gender = 'F'
	  AND tit.to_date = DATE(99990101)
	GROUP BY tit.title
;

SELECT * FROM test_view WHERE title = 'staff';

DROP VIEW test_view;

CREATE OR REPLACE VIEW test_view
AS
	SELECT emp.emp_no
		,CONCAT_WS(' ',last_name,first_name) full_name
		,d_m.dept_name
	FROM employees AS emp
		INNER JOIN dept_emp AS d_e
		ON emp.emp_no=d_e.emp_no
		INNER JOIN departments AS d_m
		ON d_m.dept_no=d_e.dept_no
		WHERE d_e.to_date>=NOW()
		ORDER BY emp.emp_no
;

SELECT * FROM test_view;