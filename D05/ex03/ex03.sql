INSERT INTO `ft_table` (`login`, `groupe`, `date_de_creation`)
SELECT `nom`, 'other', date(`date_naissance`) FROM `fiche_personne` WHERE LENGTH(nom) < 9 && nom REGEXP "a" ORDER BY nom LIMIT 10;