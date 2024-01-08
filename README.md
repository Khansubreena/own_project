# own_project 
# created a cache folder in applications and give permissions to that folder 
# create db_wateen
 CREATE TABLE gift_card (
    id INT NOT NULL AUTO_INCREMENT,
    balance INT NULL DEFAULT NULL,
    customer_number INT NOT NULL,
    card_number INT NOT NULL,
    PRIMARY KEY (id)
) ENGINE = InnoDB;