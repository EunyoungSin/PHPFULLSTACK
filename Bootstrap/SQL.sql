CREATE DATABASE minishop;

USE minishop;

CREATE TABLE user_info(
	u_no INT PRIMARY KEY AUTO_INCREMENT
	,u_id VARCHAR(12) NOT NULL
	,u_pw VARCHAR(512) NOT NULL
);

INSERT INTO user_info(
	u_id
	,u_pw
)
VALUES(
	123
	,123
);

COMMIT;

ALTER TABLE user_info DROP u_email;

ALTER TABLE user_info ADD u_name VARCHAR(512) NOT NULL;

UPDATE user_info SET u_pw = :pw WHERE u_id = :id

ALTER TABLE user_info ADD del_flg INT(1) DEFAULT "0" NOT NULL;

ALTER TABLE user_info DROP del_flg;

FLUSH PRIVILEGES;

ALTER TABLE user_info MODIFY u_pw VARCHAR(512) NOT NULL;