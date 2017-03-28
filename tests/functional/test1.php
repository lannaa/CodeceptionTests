<?php

/*
Task_1:
1. Open page https://www.drukwerkdeal.nl/
2. Check status code 200 OK 
*/

// https://www.drukwerkdeal.nl/favicon-16x16.png

$I->sendGET('/');
$I->seeResponseCodeIs(HttpCode::OK); 


?>