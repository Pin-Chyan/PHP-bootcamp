CREATE TABLE ft_table (
    `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `login` varchar(8) NOT NULL DEFUALT 'toto',
    `group` ENUM('staff' , 'student' , 'other') NOT NULL,
    `creation_date` DATE NOT NULL
);