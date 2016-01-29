use books;
create table books
(  isbn char(13) not null primary key,
   author char(50),
   title char(100),
   price float(4,2)
);
