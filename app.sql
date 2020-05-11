
 create database gestionvol;
 use gestionvol;

create table client
(
   cin            varchar(90) not null,
   nom                 varchar(90),
   prenom               varchar(90),
   adress               varchar(90),
   numTelephone         varchar(90),
    email                varchar(90),
   passport            varchar(90) ,
   primary key (cin)
);



create table vol
(
   idvol                int not null AUTO_INCREMENT,
   lieuDepart           varchar(90),
   destination         varchar(90),
   dateVole             date,
   prix                 int,
   nombreplace           int,
   primary key (idvol)
);

create table reservation
(
   idReservation        int  not null AUTO_INCREMENT,
   cin                  varchar(90) not null,
   idvol                int not null,
   dateResr             date,
   nombrelimite         int,
   primary key (idReservation) ,
   FOREIGN KEY (cin) REFERENCES client(cin) on update cascade on delete cascade,
   FOREIGN KEY (idvol) REFERENCES vol(idvol) on update cascade on delete cascade
);

