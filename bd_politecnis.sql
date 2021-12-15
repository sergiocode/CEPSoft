
create database politecnics;
USE politecnics;


CREATE TABLE Usuarios(
    ID_Usuarios integer NOT NULL AUTO_INCREMENT,
    Nombre VARCHAR(50),
    Apellido VARCHAR(50),
    Correo VARCHAR(50),
    NickName VARCHAR(50) NOT NULL ,
    Password char(255),
    Esadmin boolean not null default 0,
    curso VARCHAR(50),
    Foto varchar(50),
    PRIMARY KEY (NickName),
    key auto (ID_Usuarios)
);
INSERT INTO `usuarios` (ID_Usuarios, Nombre, Apellido, Correo, NickName, Password, Esadmin, curso,foto)
 VALUES (DEFAULT, 'Nombre_test1', 'Apellido_test1','correotest1@te.test', 'nickname_test1','password_test', DEFAULT, 'Daw', '../media/img/avatar/perfil_user0.png');
INSERT INTO `usuarios` (`ID_Usuarios`, `Nombre`, `Apellido`, `Correo`, `NickName`, `Password`, `Esadmin`, `curso`,`foto`)
 VALUES (DEFAULT, 'Nombre_test2', 'Apellido_test2','correotest2@te.test', 'nicknametest2','password_test2', DEFAULT, 'Daw', '../media/img/avatar/perfil_user1.png');



CREATE TABLE Juegos(
    ID_Juego tinyint,
    titulo VARCHAR(50),
    PRIMARY KEY (ID_Juego)
);

INSERT INTO `Juegos` (`ID_Juego`, `titulo`)
 VALUES (001, 'Frase');
INSERT INTO `Juegos` (`ID_Juego`, `titulo`)
 VALUES (002, 'Salidas Profesionales');


CREATE TABLE juega(
	id  integer AUTO_INCREMENT,
    NickName VARCHAR(50),
    ID_Juego tinyint,
    juego_finalizado boolean,
    puntuacion_juego integer,
    PRIMARY KEY (id),
    foreign key(NickName) REFERENCES  Usuarios(NickName),
    foreign key(ID_Juego) REFERENCES  Juegos(ID_Juego)
    
);





INSERT INTO `juega` (`id`, `NickName`, `ID_Juego`, `juego_finalizado`, `puntuacion_juego`)
 VALUES (DEFAULT, 'nickname_test1', '002',true, 100);
 INSERT INTO `juega` (`id`, `NickName`, `ID_Juego`, `juego_finalizado`, `puntuacion_juego`)
 VALUES (DEFAULT, 'nickname_test1', '001',true, 100);
 
 INSERT INTO juega(id, NickName, ID_Juego, juego_finalizado,puntuacion_juego)
VALUES (DEFAULT, "usuario", 001, false, 1);



