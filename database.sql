create table account (email varchar(100) primary key ,pass varchar(100),address varchar(200),phone int);
create table item (item_id int primary key,name varchar(20),qty int,price varchar(20),shipment varchar(200),email varchar(100) references account(email)); 