@SELECT '' AS `name` ,'' AS `id` FROM `[[+PREFIX]]site_content` UNION SELECT `pagetitle` AS `name`,`id` FROM `[[+PREFIX]]site_content` WHERE `published` = 1 AND `deleted` = 0 AND template IN (4,3) ORDER BY pagetitle ASC
