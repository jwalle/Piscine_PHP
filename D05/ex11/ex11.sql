SELECT UPPER(f.nom) AS NOM, f.prenom, a.prix FROM fiche_personne f
JOIN membre m ON m.id_fiche_perso=f.id_perso
JOIN abonnement a ON a.id_abo=m.id_abo
WHERE a.prix > 42 ORDER BY f.nom ASC, f.prenom ASC;