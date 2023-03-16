SELECT CONCAT('안녕하세요.', '좋은아침입니다.');

SELECT CONCAT(last_name, ' ', first_name)
FROM employees
WHERE emp_no = 500000;

SELECT CONCAT_WS(' / ', 'a', 'b', 'c')

select FORMAT(123456,0);

SELECT LEFT('abcdefg', 3);

SELECT RIGHT('abcdefg', 3);

SELECT LOWER('aBC');

SELECT LPAD('abc', 5, '0');

SELECT RPAD('abc', 5, '0');

SELECT TRIM('         A BC ');

SELECT SUBSTRING('ABCDEF', 2, 4);

SELECT SUBSTRING_INDEX('AB.CD.EF.GH', '.', 3);

SELECT CEILING(1.1);

SELECT TRUNCATE(1.11, 0);

SELECT NOW();
SELECT DATE(NOW());

SELECT ADDDATE(NOW(), INTERVAL -1 DAY);
SELECT SUBDATE(NOW(), INTERVAL -1 DAY);

SELECT ADDTIME(NOW(), '-1:1:1');

SELECT emp_no, RANK() over(ORDER BY salary ASC) r, salary
FROM salaries;

