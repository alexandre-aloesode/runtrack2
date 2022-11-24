-- Ecrivez dans le fichier “job06.sql” une requête permettant de sélectionner l’ensemble
-- des informations des étudiants dont prenom commence par un “T”.

select * from etudiants where prenom LIKE 'T%';