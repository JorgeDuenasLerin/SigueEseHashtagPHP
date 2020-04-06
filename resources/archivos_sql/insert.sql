

/*INSERT DE USUARIOS*/
INSERT INTO USUARIO (ID,NOMBRE,CONTRASEÑA)
 VALUES
 (1,'Juan','$2y$10$nbm5Inx.l3F/ik5RuZa0Qu49NaFtC5i6nyYvCFLcCye6xh6GeoV3O'),/*1234*/
 (2,'Carlos','$2y$10$nbm5Inx.l3F/ik5RuZa0Qu49NaFtC5i6nyYvCFLcCye6xh6GeoV3O'),/*1234*/
 (3,'Patricia','$2y$10$nbm5Inx.l3F/ik5RuZa0Qu49NaFtC5i6nyYvCFLcCye6xh6GeoV3O');/*1234*/


/*INSERT DE HASTAG*/
INSERT INTO HASTAG (ID,NOMBRE) 
VALUES
(1,'#Coronavirus'),
(2,'#PodemosAprobar'),
(3,'#JorgeNosAprobaraSeguro')


/*INSERT DE PUBLICACIONES*/
INSERT INTO PUBLICACION (ID,NOMBRE,CONTENIDO,IMAGEN,FECHA)
 VALUES
(1,'Jacinto','#Aprobados','imagen','2020-04-05'),
(2,'Rafael','#FelizVerano','imagen','2020-04-05'),
(3,'Manuel','#JorgeEresUnCrack','imagen','2020-04-05')

