SELECT etage.nom AS nom_étage, salles.nom AS `Biggest Room`, salles.capacite
FROM salles
JOIN etage ON salles.id_etage = étage.id
WHERE salles.capacite = (
  SELECT MAX(capacite) FROM salles
);