CREATE EXTENSION postgis;

SELECT PostGIS_Version();

CREATE TABLE alcaldias ( id int4 primary key, geom geometry(POINT,4326), nombre varchar(50));

//Inserts 
INSERT INTO alcaldias (id, geom, nombre) VALUES (3,ST_GeomFromText('POINT(-99.1503763525 19.3266672536)',4326),'Coyoacán');
INSERT INTO alcaldias (id, geom, nombre) VALUES (15,ST_GeomFromText('POINT(-99.1490557562 19.4313734294)',4326),'Cuauhtémoc');
INSERT INTO alcaldias (id, geom, nombre) VALUES (16,ST_GeomFromText('POINT(-99.2045669144 19.4280623649)',4326),'Miguel Hidalgo');

//consultassss
SELECT alcaldias.id, alcaldias.nombre, alcaldias.geom, limalcaldias.geom
FROM "limite-de-las-alcaldias" as limalcaldias, alcaldias
WHERE ST_Contains(limalcaldias.geom, alcaldias.geom)
AND limalcaldias.nomgeo = 'Miguel Hidalgo';

SELECT a.nombre, b.nombre, ST_Distance(ST_Transform(a.geom, 3857), ST_Transform(b.geom, 3857))
FROM alcaldias a, alcaldias b
WHERE a.nombre='Miguel Hidalgo' AND b.nombre='Cuauhtémoc';