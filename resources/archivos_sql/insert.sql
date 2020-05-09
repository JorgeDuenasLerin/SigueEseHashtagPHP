
/*INSERT DE USUARIOS*/
INSERT INTO USUARIO (ID,USUARIO,CONTRASEÑA,EMAIL)
 VALUES
 (1,'Juan','$2y$10$nbm5Inx.l3F/ik5RuZa0Qu49NaFtC5i6nyYvCFLcCye6xh6GeoV3O','asd@asd.com'),/*1234*/
 (2,'Carlos','$2y$10$nbm5Inx.l3F/ik5RuZa0Qu49NaFtC5i6nyYvCFLcCye6xh6GeoV3O','asdasd@asd.com'),/*1234*/
 (3,'Patricia','$2y$10$nbm5Inx.l3F/ik5RuZa0Qu49NaFtC5i6nyYvCFLcCye6xh6GeoV3O','asd_asd@asd.com'),/*1234*/
 (4,'Adrian','$2y$10$nbm5Inx.l3F/ik5RuZa0Qu49NaFtC5i6nyYvCFLcCye6xh6GeoV3O','adriansanzclase@gmail.com'),/*1234*/
 (5,'Steven','$2y$10$nbm5Inx.l3F/ik5RuZa0Qu49NaFtC5i6nyYvCFLcCye6xh6GeoV3O','steven.cadena.giler@gmail.com');/*1234*/


/*INSERT DE HASHTAG*/
INSERT INTO HASHTAG (ID,NOMBRE,ID_USUARIO)
VALUES
(1,'#Coronavirus',1),
(2,'#PodemosAprobar',2),
(3,'#JorgeNosAprobaraSeguro',3);


/*INSERT DE PUBLICACIONES*/
INSERT INTO PUBLICACION (ID,USUARIO,CONTENIDO,IMAGEN,FECHA,APLICACION)
 VALUES
(1,'Jacinto',' Lorem ipsum dolor sit amet consectetur adipisicing elit. ','imagen','2020-04-05','tiwtter'),
(2,'Pepe',' Lorem ipsum dolor sit amet consectetur adipisicing elit. ','imagen','2020-04-05','tiwtter'),
(3,'Rafael',' Lorem ipsum dolor sit amet consectetur adipisicing elit. ','imagen','2020-04-05','tiwtter'),
(4,'Rafael',' Lorem ipsum dolor sit amet consectetur adipisicing elit. ','imagen','2020-04-05','tiwtter'),
(5,'Manuel',' Lorem ipsum dolor sit amet consectetur adipisicing elit. ','imagen','2020-04-05','tiwtter'),
(6,'Manuel',' Lorem ipsum dolor sit amet consectetur adipisicing elit. ','imagen','2020-04-05','tiwtter');

/*INSERT DE TOKEN */
/*INSERT INTO TOKEN (ID,EMAIL,TOKEN,ID_USUARIO)
VALUES
(1,"pepito@hotmail.com",1111111111,1),
(2,"pepito@hotmail.com",3333333333,2),
(3,"pepito@hotmail.com",5555555555,3);*/



/*INSERT DE HASHPUB*/
INSERT INTO HASHPUB(ID,ID_HASHTAG,ID_PUBLICACION)
VALUES
(1,1,1),
(2,1,2),
(3,2,3),
(4,2,4),
(5,3,5),
(6,3,6);
