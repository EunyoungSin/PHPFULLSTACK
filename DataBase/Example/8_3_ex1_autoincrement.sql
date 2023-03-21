CREATE TABLE test_member (
	mem_no		INT(11) PRIMARY KEY AUTO_INCREMENT
	,mem_name	VARCHAR(50)
);

INSERT INTO test_member(mem_name)
VALUES('박병주');
INSERT INTO test_member(mem_name)
VALUES('박상준');
DELETE FROM test_member
WHERE mem_no = 2;

ALTER TABLE test_member MODIFY mem_no INT(11) AUTO_INCREMENT;

SELECT *
FROM test_member;
