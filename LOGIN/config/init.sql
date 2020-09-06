create database LOGIN;

grant all on LOGIN.* to dbuser@localhost identified by 'suyrw2';

use LOGIN

create table users (
  id int not null auto_increment primary key,
  email varchar(255) unique,
  password varchar(255),
  created datetime,
  modified datetime
);

desc users;
