SELECT REVERSE(RIGHT(telephone, LENGTH(telephone) - 1)) AS `enohpelet` FROM `distrib` WHERE LEFT(telephone, 2) REGEXP "05";