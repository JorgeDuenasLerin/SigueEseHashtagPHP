

/*INSERT DE USUARIOS*/
INSERT INTO USUARIO (ID,NOMBRE,CONTRASEÑA)
 VALUES
 (1,'Juan','$2y$10$nbm5Inx.l3F/ik5RuZa0Qu49NaFtC5i6nyYvCFLcCye6xh6GeoV3O'),/*1234*/
 (2,'Carlos','$2y$10$nbm5Inx.l3F/ik5RuZa0Qu49NaFtC5i6nyYvCFLcCye6xh6GeoV3O'),/*1234*/
 (3,'Patricia','$2y$10$nbm5Inx.l3F/ik5RuZa0Qu49NaFtC5i6nyYvCFLcCye6xh6GeoV3O');/*1234*/


/*INSERT DE HASTAG*/
INSERT INTO HASTAG (ID,NOMBRE,ID_USUARIO) 
VALUES
(1,'#Coronavirus',1),
(2,'#PodemosAprobar',2),
(3,'#JorgeNosAprobaraSeguro',3)


/*INSERT DE PUBLICACIONES*/
INSERT INTO PUBLICACION (ID,NOMBRE,CONTENIDO,IMAGEN,FECHA,ID_HASTAG)
 VALUES
(1,'Jacinto','#Aprobados','#Aprobados','imagen','2020-04-05',1),
(2,'Rafael','#FelizVerano','#FelizVerano','imagen','2020-04-05',2),
(3,'Manuel','#JorgeEresUnCrack','#JorgeEresUnCrack','imagen','2020-04-05',3)


INSERT INTO HASPUB(ID_HASTAG,ID_PUBLICACION)
VALUES
