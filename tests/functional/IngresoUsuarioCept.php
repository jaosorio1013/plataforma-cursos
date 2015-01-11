<?php

$I = new FunctionalTester($scenario);
$I->am('Usuario no logueado');
$I->wantTo('Hacer login en la aplicacion');

$I->amOnPage('/');