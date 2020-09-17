create database login0916;

grant all on LOGIN.* to dbuser@localhost identified by 'suyrw2';

use login0916

create table users (
  id int not null auto_increment primary key,
  email varchar(255) unique,
  password varchar(255),
  created datetime,
  modified datetime
);

desc users;
