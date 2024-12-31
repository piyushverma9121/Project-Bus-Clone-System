create database buses;
use buses;
create table teacher
(
Teacherid int PRIMARY key,
name varchar(255),
department varchar(255),
email varchar(255),
gender varchar(255),
address varchar(20),
contact varchar(20),
password varchar(50),
status varchar(50)
);
create table student
(
stuid int PRIMARY key,
name varchar(255),
password  varchar(255),
email varchar(255),
gender varchar(255),
address varchar(255),
contact varchar(255),
status varchar(255)
);
create table bustbl
(
busno VARCHAR(30),
source varchar(100),
destination varchar(100),
driverno varchar(100),
fare int
);
create TABLE driver
(
driverid int AUTO_INCREMENT primary key,
name varchar(100),
qualification varchar(100),
contact varchar(100),
address varchar(100),
experience int
);
create table admin
(
name varchar(200),
password varchar(100)
);
create table contact
(
name varchar(200),
email varchar(200),
subject varchar(100),
message varchar(100)
);
create table busrequest
(
Bookingid int,
source varchar(100),
destination varchar(100),
busno varchar(100),
fare int,
status varchar(100),
bookingdate varchar(100)
);
alter table bustbl change column fare Fare int;
	