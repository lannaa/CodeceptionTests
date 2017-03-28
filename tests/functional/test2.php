<?php

/* 
Task_2:
1. Open page https://www.drukwerkdeal.nl/
2. Check "Populairste producten" block is present
*/


$I->amOnPage('/');
$I->see('Populairste producten', 'h2 class="h h--branded');


?>