# Common mysql commands
---
- show databases;

- create database 'mytodo';

- use 'mytodo';

- show tables;

- create table 'todos' (id integer PRIMARY KEY AUTO_INCREMENT, description text NOT_NULL, completed boolean NOT_NULL);

- describe todos;

- insert into todos (description, completed) values ('Go to the store', false);

- select * from todos;

- drop table todos;
