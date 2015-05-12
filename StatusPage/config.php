<?php
//Uptime Robot API Key
$apiKey = getenv('API_KEY');

//Text to display on Nav Bar and page title
$websitename = 'MOi Solutions';

//How often the page should refresh the checks
$pagerefreshtime = '01:00';

//Uptime percentage for following days
$historyDay = array(1, 7, 30, 360);

//Display names for the uptime percentage of the previous days
$historyDaysNames = array('Últimas 24 Horas', 'Semana Pasada', 'Pasado Mes', 'Año Pasado');

//On the status page what percentage is what color
$percentGreen = 99;
$percentYellow = 96;

//Display an alert at the top of the page alerting the user
$alertEnabled = getenv('ALERT_ENABLED');
//What type of message could be displayed (sucess, warning, info, alert, secondary, standard)
//You can see what each color looks like here: http://foundation.zurb.com/docs/components/alert_boxes.html
$alertType = ($alertEnabled == 1) ? 'alert' : 'success';

//What the alert box should say
$alertMessage = ($alertEnabled == 1) ? getenv('ALERT_MESSAGE') : getenv('DEFAULT_MESSAGE');

//checks to exclude from the status page. This info can be found in the UptimeRobot URL for each check
//$excludedchecks = array("776396792", "776396743");
$excludedChecks = array();

//Show a link to your twitter in the nav bar
$showTwitter = True;
$twitterURL = 'https://twitter.com/MOiSolutions';
$twitterTitle = 'MOi Solutions';

//You can remove the Powered By OpenStatusPage, but I might cry!
$showFooter = False;
