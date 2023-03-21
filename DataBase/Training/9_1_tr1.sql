CREATE TABLE student(
stud_no INT(11)
, stud_birth DATE NOT NULL
, stud_name VARCHAR(30) NOT NULL
, stud_addr VARCHAR(100) NOT NULL
, stud_tel CHAR(11) NOT NULL
, stud_gender ENUM('M','F') NOT NULL
, stud_ent_date DATE NOT NULL
, stud_grad_date DATE NOT NULL
, stud_status ENUM('재학','휴학','퇴학','졸업') NOT NULL
, CONSTRAINT student_stud_no PRIMARY KEY (stud_no)
);

CREATE TABLE professor(
prof_no INT(11)
, prof_name VARCHAR(30) NOT NULL
, prof_birth DATE NOT NULL
, prof_degree_no INT(11) NOT NULL
, prof_email VARCHAR(30) NOT NULL
, prof_rank VARCHAR(30) NOT NULL
, prof_lab_no INT(11) NOT NULL
, prof_gender ENUM('M','F') NOT NULL
, prof_hire_date DATE NOT NULL
, CONSTRAINT professor_prof_no PRIMARY KEY (prof_no)
);

CREATE TABLE subject(
sub_no INT(11)
, sub_name VARCHAR(30) NOT NULL
, prof_no INT(11) NOT NULL
, book_no INT(11) NOT NULL
, sub_quota INT(11) NOT NULL
, sub_session INT(11) NOT NULL
, sub_classroom INT(11) NOT NULL
, sub_start_time DATE NOT NULL
, sub_end_time DATE NOT NULL
, sub_must ENUM('Y','N') NOT NULL
, CONSTRAINT subject_sub_no PRIMARY KEY (sub_no)
);

CREATE TABLE grade(
stud_no INT(11)
, sub_no INT(11)
, grad_score INT(11) NOT NULL
, grad_rank INT(11) NOT NULL
, grad_compl_date DATE NOT NULL
, CONSTRAINT grade_stud_no PRIMARY KEY (stud_no, sub_no)
);

CREATE TABLE book(
book_no INT(11)
, book_name VARCHAR(50) NOT NULL
, CONSTRAINT book_book_no PRIMARY KEY (book_no)
);

COMMIT;