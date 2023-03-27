CREATE TABLE member (
	mem_no INT(11) PRIMARY KEY
	, mem_name VARCHAR(20) NOT NULL
	, mem_tel CHAR(20) NOT NULL
	, mem_addr VARCHAR(50) NOT NULL
	, mem_birth DATE NOT NULL
	, mem_gender CHAR(1) NOT NULL
	, mem_entry_date DATE NOT NULL
);

DROP TABLE board;

CREATE TABLE board (
	bd_no INT(11) PRIMARY KEY
	, mem_no INT(11) NOT NULL
	, bd_title VARCHAR(30) NOT NULL
	, bd_content LONGTEXT NOT NULL
	, bd_delflg CHAR(1) NOT NULL DEFAULT('0')
	, bd_write_date TIMESTAMP NOT NULL DEFAULT(NOW())
	, CONSTRAINT board_mem_no FOREIGN KEY(mem_no) REFERENCES member(mem_no)
);

INSERT INTO member(
	mem_no 
	, mem_name 
	, mem_tel 
	, mem_addr  
	, mem_birth 
	, mem_gender 
	, mem_entry_date 
)

VALUES (
	1
	,'신은영'
	,'01099999999'
	,'대구'
	,DATE('19930803')
	,'0'
	,DATE(NOW())
);

INSERT INTO member(
	mem_no 
	, mem_name 
	, mem_tel 
	, mem_addr  
	, mem_birth 
	, mem_gender 
	, mem_entry_date 
)

VALUES (
	2
	,'홍길동'
	,'01099999999'
	,'대구'
	,DATE('19930803')
	,'1'
	,DATE(NOW())
);

SELECT * FROM member WHERE mem_birth >= DATE('19900223');

INSERT INTO board(
	bd_no 
	, mem_no 
	, bd_title 
	, bd_content 
)

VALUES (
	1
	,1
	,'1번이 작성 제목'
	,'내용내용 1번이 작성 내용'
);

INSERT INTO board(
	bd_no 
	, mem_no 
	, bd_title 
	, bd_content
)

VALUES (
	2
	,1
	,'1번이 작성 제목22'
	,'내용내용 1번이 작성 내용22'
);

SELECT * FROM board;


SELECT mem.mem_name, bod.*
FROM member mem
	INNER JOIN board bod
		ON mem.mem_no = bod.mem_no
WHERE mem.mem_no = 1;


SELECT a.bd_title, a.bd_content
FROM (SELECT * FROM board WHERE mem_no = 1) a; 

SELECT mem_no, COUNT(mem_no) cnt
FROM board
GROUP BY mem_no;

SELECT mem.mem_no, mem.mem_name, bod.cnt
FROM member mem
	INNER JOIN (SELECT mem_no, COUNT(mem_no) cnt
					FROM board
					GROUP BY mem_no) bod
		ON mem.mem_no = bod.mem_no;
		
UPDATE member
SET mem_gender = '0'
WHERE mem_no = 1;

SELECT * FROM member;

DELETE from board WHERE mem_no = 2;

SELECT * FROM board;

--삭제 이력 안남음 (테이블 내 데이터 삭제, 테이블 삭제)
TRUNCATE table board;

DROP TABLE board;