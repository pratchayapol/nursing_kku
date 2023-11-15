GRANT ALL PRIVILEGES ON * . * TO 'kku'@'%';
CREATE TABLE `account` (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name_title varchar(10),
    first_name varchar(50),
    last_name varchar(50),
    email varchar(75),
    phone_number varchar(10),
    urole varchar(10),
    profile_img varchar(50),
    otp INT,
    pass_word varchar(255)
);