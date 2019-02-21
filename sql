CREATE TABLE multiplication(
	id INT(11) AUTO_INCREMENT PRIMARY KEY not null,
    factor1 INT(11) not null,
    factor2 INT(11) not null,
    operation VARCHAR(2) not null,
    result INT(11) not null,
    date datetime not null
);