-- Database: `myperweb`
-- For create database and tables run this mysql codes in youer localhost 
-- Don't import this file, manaly run this codes one by one
-- --------------------------------------------------------
-- for create databse
create database myperweb;

--for create con_infor table
create table con_infor (
  ID_No int(100) primary key AUTO_INCREMENT,
  Name varchar(255) not null,
  Email varchar(255) not null,
  Number int(255),
  Message longtext,
  Date datetime DEFAULT current_timestamp()
);


