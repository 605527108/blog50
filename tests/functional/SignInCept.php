<?php 
$I = new FunctionalTester($scenario);


$I->am('blog50 member');
$I->wantTo('login to my blog50 account');

$I->signIn();

$I->seeInCurrentUrl('/statuses');

$I->assertTrue(Auth::check());
