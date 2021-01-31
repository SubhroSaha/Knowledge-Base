CREATE TABLE users (
    user_id int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
    user_first varchar(256) NOT NULL,
    user_last varchar(256) NOT NULL,
    user_email varchar(256) NOT NULL,
    user_uid varchar(256) NOT NULL,
    user_pwd varchar(10) NOT NULL
);

INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd) VALUES ('Subhro','Saha','subhro980898@gmail.com','subzero','1234')