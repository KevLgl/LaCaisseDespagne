-- Delete existing database and user
DROP DATABASE IF EXISTS banque_php;
DROP USER IF EXISTS 'banquePHP'@'*';

-- Create database with utf-8 characters
CREATE DATABASE banque_php CHARACTER SET 'utf8';

-- Create user and his privileges
CREATE USER 'banquePHP'@'*' IDENTIFIED BY 'mdp';
GRANT ALL ON banque_php.* TO 'banquePHP'@'*';


-- create 3 tables in database

CREATE TABLE user (
  id int PRIMARY KEY NOT NULL AUTO_INCREMENT,
  nom varchar(50) NOT NULL,
  email varchar(30) NOT NULL,
  pass varchar(30) NOT NULL,
);

CREATE TABLE personal_account (
  id int PRIMARY KEY NOT NULL AUTO_INCREMENT,
  account_type varchar(30) NOT NULL,
  numb decimal NOT NULL,
  opening_date date NOT NULL,
  amount int NULL
);


CREATE TABLE operations (
  id int PRIMARY KEY NOT NULL AUTO_INCREMENT,
  amout int NULL,
  compte_id int NOT NULL,
  debtor_account_id int NOT NULL,
  creditor_account_id int NOT NULL
);



-- add foreign keys for table personal_account
ALTER TABLE personal_account
  ADD CONSTRAINT user_id 
  FOREIGN KEY(user) 
  REFERENCES user(id);
-- add foreign keys for table opération
ALTER TABLE operations
  ADD CONSTRAINT user_id 
  FOREIGN KEY(user) 
  REFERENCES user(id);


-- add of some users, accounts and operations in the tables
INSERT INTO user (name, email, pass)
  VALUE ('John Doe', 'johndoe@a.fr', 'coucou'),
        ('Jule Verne', 'az@afpa.fr', 'coucou1');

INSERT INTO personal_account (account_type, numb, opening_date, amount, user_id)
  VALUE ('compte courant', 1402176513, '2020-10-02', 165,4),
        ('PEL', 30092785114, '2019-01-03', 12);
