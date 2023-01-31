/*==============================================================*/
/* Table : CLIENT                                               */
/*==============================================================*/
create table CLIENT 
(
   LOGIN_C        varchar(20)    not null,
   PASS_C         varchar(20)   not null,
   NOM_C          varchar(20)   not null,
   PRENOM_C        varchar(20)   not null,
   ADRESSE_C      varchar(20)    null,
   TELEPHONE_C     integer   null,
   EMAIL_C         varchar(30)   null,
   TYPE_CUISINE_C   varchar(20)  null
);

alter table CLIENT
   add constraint PK_CLIENT primary key (PASS_C);


/*==============================================================*/
/* Table : COMMENTAIRE                                          */
/*==============================================================*/
create table COMMENTAIRE 
(
   DATE_T     date      null,
   ID_T       INTEGER AUTO_INCREMENT primary key,
   PASS_C     varchar(20)   not null,/*client commentant*/
   PASS_R     varchar(20)   null,/*commentaire sur un resto*/
   TEXT_T     varchar(200)   not null,
   MODE_T    VARCHAR(20)   null
);

alter table COMMENTAIRE
   add constraint PK_COMMENTAIRE primary key (ID_T);


/*==============================================================*/
/* Table : PLAT                                                 */
/*==============================================================*/
create table PLAT 
(
   HEURE_M    varchar(20)  null,
   ID_M       INTEGER AUTO_INCREMENT primary  key  ,
   PASS_R     varchar(20)   not null,
   IMAGE_M    varchar(40)  null,
   NOM_M      varchar(20)  null,
   PRIX_M    float     null
);

alter table PLAT
   add constraint PK_PLAT primary key (ID_M);

/*==============================================================*/
/* Table : PUBLICATION                                      */
/*==============================================================*/
create table PUBLICATION
(
   DATE_P     date       null,
   ID_P    INTEGER AUTO_INCREMENT,
   PASS_R     varchar(20)   not null,
   IMAGE_P    varchar(30)     not null,
   NBRLIKE_P  integer        null,
   TEXTE_P    varchar(40)       null
);

alter table PUBLICATION
   add constraint PK_PUBLICATION primary key (ID_P);

/*==============================================================*/
/* Table : RESTAURANT                                           */
/*==============================================================*/
create table RESTAURANT 
(
   LOGIN_R    varchar(20)      not null,
   PASS_R     varchar (20)     not null,
   ADRESSE_R  varchar(20)     not null,
   CONTACT_R  integer(20)       null,
   EMAIL_R    varchar(30)       null,
   LOGO_R     varchar(40)      null,
   NBRLIKE_R   integer      null,
   NOM_R       varchar(20)      null,
   TYPE_CUISINE_R   varchar(20)  null
);

alter table RESTAURANT
   add constraint PK_RESTAURANT primary key (PASS_R);

/*==============================================================*/
/* Alter : LES REFERENCES                                       */
/*==============================================================*/

alter table COMMENTAIRE
   add constraint FK_COMMENTA_CONCERNER_RESTAURA foreign key (PASS_R)
      references RESTAURANT (PASS_R)
      on update CASCADE
      on delete CASCADE;

alter table COMMENTAIRE
   add constraint FK_COMMENTA_EFFECTUER_CLIENT foreign key (PASS_C)
      references CLIENT (PASS_C)
      on update CASCADE
      on delete CASCADE;

alter table PLAT
   add constraint FK_PLAT_PREPARATI_RESTAURA foreign key (PASS_R)
      references RESTAURANT (PASS_R)
      on update CASCADE
      on delete CASCADE;

alter table PUBLICATION
   add constraint FK_PUBLICAT_FAIRE_RESTAURA foreign key (PASS_R)
      references RESTAURANT (PASS_R)
      on update CASCADE
      on delete CASCADE;


create trigger avantAjoutPlat 
before insert on PLAT
for each statement 
NEW.IMAGE_M='Vues/image'||NEW.IMAGE_M;

