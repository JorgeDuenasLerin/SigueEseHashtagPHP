
/*INSERT DE USUARIOS*/
INSERT INTO USUARIO (ID,USUARIO,CONTRASEÑA,EMAIL)
 VALUES
 (1,'Adrian','$2y$10$nbm5Inx.l3F/ik5RuZa0Qu49NaFtC5i6nyYvCFLcCye6xh6GeoV3O','adriansanzclase@gmail.com'),/*1234*/
 (2,'Steven','$2y$10$nbm5Inx.l3F/ik5RuZa0Qu49NaFtC5i6nyYvCFLcCye6xh6GeoV3O','steven.cadena.giler@gmail.com'),/*1234*/
 (3,'Jorge','$2y$10$nbm5Inx.l3F/ik5RuZa0Qu49NaFtC5i6nyYvCFLcCye6xh6GeoV3O','jorge.duenas.lerin.edu@gmail.com');/*1234*/


/*INSERT DE HASHTAG*/
INSERT INTO HASHTAG (ID,NOMBRE,ID_USUARIO)
VALUES
(1,'#Coronavirus',1);


/*INSERT DE PUBLICACIONES
INSERT INTO PUBLICACION (ID,USUARIO,CONTENIDO,IMAGEN,FECHA,APLICACION,ID_TWITTER)
 VALUES
(1,'Jacinto',' Lorem ipsum dolor sit amet consectetur adipisicing elit. ','imagen','2020-04-05','twitter',17458236),
(2,'Pepe',' Lorem ipsum dolor sit amet consectetur adipisicing elit. ','imagen','2020-04-05','twitter',45781259),
(3,'Rafael',' Lorem ipsum dolor sit amet consectetur adipisicing elit. ','imagen','2020-04-05','twitter',41589304),
(4,'Rafael',' Lorem ipsum dolor sit amet consectetur adipisicing elit. ','imagen','2020-04-05','twitter',02145786),
(5,'Manuel',' Lorem ipsum dolor sit amet consectetur adipisicing elit. ','imagen','2020-04-05','twitter',02351458),
(6,'Manuel',' Lorem ipsum dolor sit amet consectetur adipisicing elit. ','imagen','2020-04-05','twitter',14580236);*/

/*INSERT DE HASHPUB*/
/*INSERT INTO HASHPUB(ID,ID_HASHTAG,ID_PUBLICACION)
VALUES
(1,1,1),
(2,1,2),
(3,2,3),
(4,2,4),
(5,3,5),
(6,3,6);*/
