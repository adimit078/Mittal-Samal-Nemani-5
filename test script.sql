show databases;
create database myDatabase;
use myDatabase;
show tables;
create table myTable(
ID int auto_increment primary key,
firstName varchar(30) not null,
lastName  varchar(30) not null,
age int);
show tables;
describe myTable;
insert into myTable(
firstName,lastName,age)
values(
"Wilma","Flinstone",60),(
"Pebbles","Flinstone",6),(
"Dog","Flinstone",8);
select * from myTable;
select firstName from myTable where age < 10 and age>2;

