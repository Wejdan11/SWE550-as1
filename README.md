SWE550-as1 
language: php, html.
database: Mysql 
database schema:
database name: names.
tabel: students
+--------+
| name   |
+--------+
| Arwa   |
| Wejdan |
| shahad |
| Nouf   |
| noura  |
| sara   |
| leena  |
| reem   |
| rana   |
| haneen |
+--------+

-------------
Commands to create and run database on localhost:
docker exec -it mysql12 bash
mysql -u root -psecret    
create database names;
use names;
create table students(name text);

insert into students (name) values ('Arwa');
insert into students (name) values ('Wejdan');
insert into students (name) values ('shahad');
insert into students (name) values ('Nouf');
insert into students (name) values ('noura');
insert into students (name) values ('sara');
insert into students (name) values ('leena');
insert into students (name) values ('reem');
insert into students (name) values ('rana');
insert into students (name) values ('haneen');
commit;
