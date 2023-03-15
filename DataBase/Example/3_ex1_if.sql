SELECT CAST( '1234' AS INT );

SELECT CONVERT( 1234, CHAR(4) );

SELECT if( 1 < 2 , '참', '거짓');

SELECT emp_no, if( emp_no = 10001 , first_name, birth_date )
FROM employees;

SELECT IFNULL(' ', 'aa');

SELECT NULLIF(1 , 1);

SELECT
	emp_no
	,gender
	,case gender
		when 'm' then '남자'
		when 'f' then '여자'
		ELSE ' '
	end
FROM employees LIMIT 10;

SELECT
	emp_no
	,title
	,case title
		when 'senior engineer' then '관리자'
		ELSE '팀원'
	END AS 'k_title'
FROM titles