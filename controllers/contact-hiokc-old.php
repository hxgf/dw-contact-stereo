<?php



$app->post('/contact/process', function(){

	if (!$_POST['cfv']){
		$data = $GLOBALS['app']->api_request('/contact/process', 
		array(
			'email' => $_POST['email'],
			'subject' => $_POST['subject'],
			'message' => $_POST['message']
		));	
	}

	$GLOBALS['app']->render_template(array(
		'template' => 'misc/contact',
    'title' => 'Contact - ' . $GLOBALS['site_title']
	));

});








$app->all('/contact/?', function(){

	$GLOBALS['app']->render_template(array(
		'template' => 'misc/contact',
    'title' => 'Contact - ' . $GLOBALS['site_title']
	));

});
