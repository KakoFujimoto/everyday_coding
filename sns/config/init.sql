create database kako_sns;

grant all on kako_sns.* to dbuser@localhost identified by 'huhso4293079';

use kako_sns

create table users (
    id int not null auto_increment primary key,
    email varchar(255) unique,
    password varchar(255),
    created datetime,
    modified datetime
);

desc users;
