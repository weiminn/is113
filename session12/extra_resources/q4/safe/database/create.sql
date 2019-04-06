drop database if exists extra12q4safe;
create database extra12q4safe;
use extra12q4safe;

create table account (
    id integer auto_increment primary key,
    email varchar(200),
    pass varchar(1000)
);

insert into account (email, pass) values ('donald@trump.com', '$2y$10$h.IgQD4s28VppNZSrgNXNutTT272hEIOjj0nulqrqF7w0a.KSzIUe');
insert into account (email, pass) values ('hillary@clinton.com', '$2y$10$tJluGYzd1W8LxaUuC6Qn1uVDaK1V42cZkUEqGrsuLSpjAnjL/Rm/2');


create table task (
    id integer auto_increment primary key,
    account_id integer not null,
    constraint fk_account foreign key (account_id) references account(id),
    description varchar(1000)
);

insert into task (account_id, description) values (1, 'Reply to Chairman Kim Jong Un on Hanoi Summit');
insert into task (account_id, description) values (1, 'Buy Melania new shoes for wedding anniversary');
insert into task (account_id, description) values (1, 'Call back Vladimir Putin on September visit');
insert into task (account_id, description) values (1, 'Lunch with Hillary and Bill Clinton');
insert into task (account_id, description) values (1, 'Golf with Wharton alumni');


insert into task (account_id, description) values (2, 'Book signing in Richmond, Virginia');
insert into task (account_id, description) values (2, 'Dinner with Chelsea');
insert into task (account_id, description) values (2, "Review Bill's biography draft");
insert into task (account_id, description) values (2, 'Reply to Israeli government on Palestine');
insert into task (account_id, description) values (2, 'Attend Yoga Meditation on April 1');