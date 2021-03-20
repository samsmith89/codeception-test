<?php

class WPFirstCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
	    $I->loginAsAdmin();
	    $I->amOnPluginsPage();
	    $I->activatePlugin('classic-editor');
    }
}
