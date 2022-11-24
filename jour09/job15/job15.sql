-- Ecrivez dans le fichier “job15.sql” une requête permettant de récupérer le nom des
-- salles et le nom de leur étage.

SELECT salles.nom AS salles_nom, id_etage AS etage, etage.nom AS etages_nom
FROM `salles`
INNER JOIN `etage` ON salles.id_etage = etage.id;