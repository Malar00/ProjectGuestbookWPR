CREATE TABLE guests(
    GuestNumber SERIAL primary key,
    Name varchar(12),
    Surname varchar(20),
    Date datetime
    );

INSERT INTO guests(Name,Surname,Date) VALUES ('Josh','Drake','2008-11-11 11:12:51');
INSERT INTO guests(Name,Surname,Date) VALUES ('Daniel','Querry','2010-11-21 6:12:31');
INSERT INTO guests(Name,Surname,Date) VALUES ('Hunter','Smith','2012-11-11 11:45:22');
INSERT INTO guests(Name,Surname,Date) VALUES ('Johnny','Test','2012-7-2 8:35:21');
INSERT INTO guests(Name,Surname,Date) VALUES ('Jan','Sitarski','2020-10-5 1:18:10');

Drop TABLE guests;