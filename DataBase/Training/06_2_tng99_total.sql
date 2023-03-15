INSERT INTO employees (
	emp_no
	,birth_date
	,first_name
	,last_name
	,gender
	,hire_date
)
VALUES
(
	500000
	,DATE(19930803)
	,'EunYoung'
	,'Sin'
	,'F'
	,NOW()
);

SELECT *
FROM employees
WHERE emp_no = 500000;

INSERT INTO salaries (
	emp_no
	,salary
	,from_date
	,to_date
)
VALUES
(
	500000
	,60117
	,DATE(20230315)
	,DATE(99990101)
);

SELECT *
FROM salaries
WHERE emp_no = 500000;

INSERT INTO titles (
	emp_no
	,title
	,from_date
	,to_date
)
VALUES
(
	500000
	,'Engineer'
	,DATE(20230315)
	,DATE(99990101)
);

SELECT *
FROM titles
WHERE emp_no = 500000;

INSERT INTO dept_emp (
	emp_no
	,dept_no
	,from_date
	,to_date
)
VALUES
(
	500000
	,'d005'
	,DATE(20230315)
	,DATE(99990101)
);

SELECT *
FROM dept_emp
WHERE emp_no = 500000;


-- 짝꿍 직원정보 삽입
INSERT INTO employees (
	emp_no
	,birth_date
	,first_name
	,last_name
	,gender
	,hire_date
)
VALUES
(
	500001
	,DATE(19980809)
	,'MiHyeon'
	,'Kim'
	,'F'
	,NOW()
);

SELECT *
FROM employees
WHERE emp_no = 500001;

INSERT INTO salaries (
	emp_no
	,salary
	,from_date
	,to_date
)
VALUES
(
	500001
	,30000
	,DATE(20230315)
	,DATE(99990101)
);

SELECT *
FROM salaries
WHERE emp_no = 500001;

INSERT INTO titles (
	emp_no
	,title
	,from_date
	,to_date
)
VALUES
(
	500001
	,'Engineer'
	,DATE(20230315)
	,DATE(99990101)
);

SELECT *
FROM titles
WHERE emp_no = 500001;

INSERT INTO dept_emp (
	emp_no
	,dept_no
	,from_date
	,to_date
)
VALUES
(
	500001
	,'d001'
	,DATE(20230315)
	,DATE(99990101)
);

SELECT *
FROM dept_emp
WHERE emp_no = 500001;


--소속부서 d001, d005 -> d009 변경
UPDATE dept_emp
SET to_date = DATE(20230315)
WHERE emp_no = 500000 OR emp_no = 500001;

INSERT INTO dept_emp (
	emp_no
	,dept_no
	,from_date
	,to_date
)
VALUES
(
	500000
	,'d009'
	,DATE(20230315)
	,DATE(99990101)
);

INSERT INTO dept_emp (
	emp_no
	,dept_no
	,from_date
	,to_date
)
VALUES
(
	500001
	,'d009'
	,DATE(20230315)
	,DATE(99990101)
);


SELECT *
FROM dept_emp
WHERE emp_no = 500000 OR emp_no = 500001;

--짝궁 정보 삭제
DELETE
FROM dept_emp
WHERE emp_no = 500001;

DELETE
FROM employees
WHERE emp_no = 500001;

DELETE
FROM salaries
WHERE emp_no = 500001;

DELETE
FROM titles
WHERE emp_no = 500001;

SELECT *
FROM dept_emp
WHERE emp_no = 500001;

SELECT *
FROM employees
WHERE emp_no = 500001;

SELECT *
FROM salaries
WHERE emp_no = 500001;

SELECT *
FROM titles
WHERE emp_no = 500001;


-- d009 부서 관리자 변경
UPDATE dept_manager
SET to_date = DATE(20230315)
WHERE emp_no = 111939;

INSERT INTO dept_manager (
	dept_no
	,emp_no
	,from_date
	,to_date
)
VALUES
(
	'd009'
	,500000
	,DATE(20230315)
	,DATE(99990101)
);

SELECT *
FROM dept_manager
WHERE emp_no = 500000;

-- 직책 변경
UPDATE titles
SET to_date = DATE(20230315)
WHERE emp_no = 500000;

INSERT INTO titles (
	emp_no
	,title
	,from_date
	,to_date
)
VALUES
(
	500000
	,'Senior Engineer'
	,DATE(20230315)
	,DATE(99990101)
);

SELECT *
FROM titles
WHERE emp_no = 500000;

-- 최고 연봉 사원, 최저 연봉 사원 사번과 이름 출력
SELECT emp_no, first_name
FROM employees
WHERE emp_no IN (
						SELECT emp_no
						fROM salaries
						WHERE salary = (SELECT MAX(salary) FROM salaries)
						OR salary = (SELECT MIN(salary) FROM salaries)
						);
						
-- 전체 사원 평균 연봉 출력
SELECT AVG(salary)
FROM salaries;

-- 사번 499,975 평균 연봉 출력
SELECT AVG(salary)
FROM salaries
WHERE emp_no = 499975;