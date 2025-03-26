SELECT * FROM habilitados
WHERE id_especie=1;


SELECT * FROM ejemplares
WHERE id_especie=2;


SELECT COUNT(id_ejemplar) FROM preferencias
WHERE id_voluntario=9;


SELECT cuidadores.nombre, cuidadores.telefono
FROM cuidadores
JOIN encargados ON cuidadores.id= encargados.id_cuidador
JOIN ejemplares ON ejemplares.id = encargados.id_ejemplar
WHERE ejemplares.nombre = 'Rex';


SELECT 
	cuidadores.nombre AS nombre_cuidador,
	ejemplares.nombre AS nombre_ejemplar,
	ejemplares.fecha_nacimiento AS fecha_nacimiento_ejemplar,
	voluntarios.nombre AS nombre_voluntario
FROM visitas
JOIN cuidadores ON cuidadores.id= visitas.id_cuidador 
JOIN ejemplares ON ejemplares.id=visitas.id_ejemplar
JOIN voluntarios ON voluntarios.id=visitas.id_voluntario
WHERE visitas.fecha_hora
BETWEEN '2025-03-01' AND '2025-03-30';





