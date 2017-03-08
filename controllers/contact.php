<?php





$app->get('/contact', function(){

	$GLOBALS['app']->render_template(array(
		'template' => 'contact',
    'title' => 'Contact Us - ' . $GLOBALS['site_title'],
		'data' => $data
	));

});





$app->post('/contact/process', function(){

	if (!$_POST['email_validate']){
		email_send(array(
			// 'to' => 'nacho.pizza@gmail.com',
			'from' => $_POST['email'],
			'subject' => '[' . $GLOBALS['site_code'] . '] ' . $_POST['subject'],
			'message' => $_POST['message'],
		));
	}

	$GLOBALS['app']->render_json(array(
		'success' => 'true'
	));

});



?>
