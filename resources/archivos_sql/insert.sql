

/*INSERT DE USUARIOS*/
INSERT INTO USUARIO (ID,NOMBRE,CONTRASEÑA,EMAIL)
 VALUES
 (1,'Juan','$2y$10$nbm5Inx.l3F/ik5RuZa0Qu49NaFtC5i6nyYvCFLcCye6xh6GeoV3O','asd@asd.com'),/*1234*/
 (2,'Carlos','$2y$10$nbm5Inx.l3F/ik5RuZa0Qu49NaFtC5i6nyYvCFLcCye6xh6GeoV3O','asdasd@asd.com'),/*1234*/
 (3,'Patricia','$2y$10$nbm5Inx.l3F/ik5RuZa0Qu49NaFtC5i6nyYvCFLcCye6xh6GeoV3O','asd_asd@asd.com');/*1234*/


/*INSERT DE HASTAG*/
INSERT INTO HASTAG (ID,NOMBRE,ID_USUARIO) 
VALUES
(1,'#Coronavirus',1),
(2,'#PodemosAprobar',2),
(3,'#JorgeNosAprobaraSeguro',3);


/*INSERT DE PUBLICACIONES*/
INSERT INTO PUBLICACION (ID,NOMBRE,CONTENIDO,IMAGEN,FECHA,APLICACION)
 VALUES
(1,'Jacinto','#Aprobados','imagen','2020-04-05','tiwtter'),
(2,'pepe','#Aprobados','imagen','2020-04-05','tiwtter'),
(3,'Rafael','#FelizVerano','imagen','2020-04-05','tiwtter'),
(4,'Rafael','#FelizVerano','imagen','2020-04-05','tiwtter'),
(5,'Manuel','#JorgeEresUnCrack','imagen','2020-04-05','tiwtter'),
(6,'Manuel','#JorgeEresUnCrack','imagen','2020-04-05','tiwtter');


INSERT INTO HASPUB(ID,ID_HASTAG,ID_PUBLICACION)
VALUES
(1,1,1),
(2,1,2),
(3,2,3),
(4,2,4),
(5,3,5),
(6,3,6);
