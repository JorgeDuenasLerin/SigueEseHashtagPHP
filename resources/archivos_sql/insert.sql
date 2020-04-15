

/*INSERT DE USUARIOS*/
INSERT INTO USUARIO (NOMBRE,CONTRASEÑA)
 VALUES
 ('Juan','$2y$10$nbm5Inx.l3F/ik5RuZa0Qu49NaFtC5i6nyYvCFLcCye6xh6GeoV3O'),/*1234*/
 ('Carlos','$2y$10$nbm5Inx.l3F/ik5RuZa0Qu49NaFtC5i6nyYvCFLcCye6xh6GeoV3O'),/*1234*/
 ('Patricia','$2y$10$nbm5Inx.l3F/ik5RuZa0Qu49NaFtC5i6nyYvCFLcCye6xh6GeoV3O');/*1234*/


/*INSERT DE HASTAG*/
INSERT INTO HASTAG (NOMBRE,ID_USUARIO) 
VALUES
('#Coronavirus',1),
('#PodemosAprobar',2),
('#JorgeNosAprobaraSeguro',3)


/*INSERT DE PUBLICACIONES*/
INSERT INTO PUBLICACION (NOMBRE,CONTENIDO,IMAGEN,FECHA,ID_HASTAG)
 VALUES
('Jacinto','#Aprobados','#Aprobados','imagen','2020-04-05',1),
('Rafael','#FelizVerano','#FelizVerano','imagen','2020-04-05',2),
('Manuel','#JorgeEresUnCrack','#JorgeEresUnCrack','imagen','2020-04-05',3)

