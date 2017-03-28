<?php

/*
Task_3:
1. Open page https://www.drukwerkdeal.nl/
2. Check 11 menu items are present in the "Alle categorieÎn"
*/

$I->amOnPage('/');
$I->see('Alle categorieën', 'div class="ProductNav__TogglerText text-nobreak">Alle categorieën')
$I->seeNumberOfElements('span class="ProductNav__CategoryTitle"', 11);


?>
