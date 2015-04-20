<?php
    //API Key - see http://admin.mailchimp.com/account/api
	// Testing : f9ef98f299433c726c9f027b128e5344-us2
	// Live : 4f870c9b4b3e984d1a9caa3458d9a110-us5
    $apikey = '4f870c9b4b3e984d1a9caa3458d9a110-us5';
    
    // A List Id to run examples against. use lists() to view all
    // Also, login to MC account, go to List, then List Tools, and look for the List ID entry
	// Testing : 3b1d154839
	// Live : ace96a2fdd
    $listId = 'ace96a2fdd';
    
	// Todo lo de aca abajo no se usa
    // A Campaign Id to run examples against. use campaigns() to view all
    $campaignId = 'YOUR MAILCHIMP CAMPAIGN ID - see campaigns() method';

    //some email addresses used in the examples:
    $my_email = 'INVALID@example.org';
    $boss_man_email = 'INVALID@example.com';

    //just used in xml-rpc examples
    $apiUrl = 'http://api.mailchimp.com/1.3/';
    
?>
