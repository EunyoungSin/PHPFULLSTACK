CREATE TABLE employees1 (
	emp_no INT(11) NOT NULL 
	,birth_date DATE NOT NULL 
	,first_name VARCHAR(14) NOT NULL 
	,last_name VARCHAR(16) NOT NULL 
	,gender ENUM('M', 'F') NOT NULL 
	,hire_date DATE NOT NULL 
	,CONSTRAINT PK_EMPLOYEES1_emp_no PRIMARY KEY(emp_no)
);

SHOW FULL COLUMNS FROM employees1;

CREATE TABLE salaries1 (
	emp_no INT(11) NOT NULL 
	,salary INT(11) NOT NULL 
	,from_date DATE NOT NULL 
	,to_date DATE
	,CONSTRAINT PK_salaries1_emp_no PRIMARY KEY(emp_no, from_date)
	,CONSTRAINT FK_salaries1_emp_no FOREIGN KEY(emp_no) REFERENCES employees1
);

CREATE INDEX emp_no ON salaries1 (emp_no);

SHOW FULL COLUMNS FROM salaries1;

CREATE TABLE titles1 (
	emp_no INT(11) NOT NULL 
	,title VARCHAR(50) NOT NULL 
	,from_date DATE NOT NULL 
	,to_date DATE
	,CONSTRAINT PK_titles1_emp_no PRIMARY KEY(emp_no, title, from_date)
	,CONSTRAINT FK_titles1_emp_no FOREIGN KEY(emp_no) REFERENCES employees1
);

CREATE INDEX emp_no ON titles1 (emp_no);

SHOW FULL COLUMNS FROM titles1;

CREATE TABLE departments1 (
	dept_no CHAR(4) NOT NULL 
	,dept_name VARCHAR(40) NOT NULL
	,CONSTRAINT PK_departments1_dept_no PRIMARY KEY(dept_no)
);

CREATE INDEX dept_name ON departments1 (dept_name);

SHOW FULL COLUMNS FROM departments1;

CREATE TABLE dept_emp1 (
	emp_no INT(11) NOT NULL 
	,dept_no CHAR(4) NOT NULL 
	,from_date DATE NOT NULL 
	,to_date DATE
	,CONSTRAINT PK_dept_emp1_emp_no PRIMARY KEY(emp_no, dept_no)
	,CONSTRAINT FK_dept_emp1_emp_no FOREIGN KEY(emp_no) REFERENCES employees1
	,CONSTRAINT FK_dept_emp1_dept_no FOREIGN KEY(dept_no) REFERENCES departments1
);

CREATE INDEX dept_no ON dept_emp1 (dept_no);
CREATE INDEX emp_no ON dept_emp1 (emp_no);

SHOW FULL COLUMNS FROM dept_emp1;

CREATE TABLE dept_manager1 (
	dept_no CHAR(4) NOT NULL 
	,emp_no INT(11) NOT NULL  
	,from_date DATE NOT NULL 
	,to_date DATE
	,CONSTRAINT PK_dept_manager1_dept_no PRIMARY KEY(dept_no, emp_no)
	,CONSTRAINT FK_dept_manager1_emp_no FOREIGN KEY(emp_no) REFERENCES employees1
	,CONSTRAINT FK_dept_manager1_dept_no FOREIGN KEY(dept_no) REFERENCES departments1
);

CREATE INDEX dept_no ON dept_manager1 (dept_no);
CREATE INDEX emp_no ON dept_manager1 (emp_no);

SHOW FULL COLUMNS FROM dept_manager1;

COMMIT;