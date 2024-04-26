<?php

	$siteUrl = $_POST['site_url'];

	$studentName = $_POST['student_name'];
	$birthday= $_POST['birthday'];
	$studentPhone = $_POST['student_phone'];
	$studentEmail = $_POST['student_email'];
	$firstLastName = $_POST['first_last_name'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$edrpu = $_POST['edrpu'];
	$phone = $_POST['phone'];
	$pageLink = $_POST['page_Link'];



	$totalFile1 = count($_FILES['file_1']['name']);
	$totalFile2 = count($_FILES['file_2']['name']);
	$totalFile3 = count($_FILES['file_3']['name']);
	$totalFile4 = count($_FILES['file_4']['name']);

	$file1Links = '';
	$file2Links = '';
	$file3Links = '';
	$file4Links = '';

	for( $i=0 ; $i < $totalFile1 ; $i++ ) {

		$tmpFilePath = $_FILES['file_1']['tmp_name'][$i];

		if ($tmpFilePath != ""){

			$newFilePath = "./uploads/" . $_FILES['file_1']['name'][$i];

			$file1Links = $siteUrl.'/wp-content/themes/ua-teens/uploads/'.$_FILES['file_1']['name'][$i].' , '.$file1Links;

			if(move_uploaded_file($tmpFilePath, $newFilePath)) {

			}
		}
	}

	for( $i=0 ; $i < $totalFile2 ; $i++ ) {

		$tmpFilePath = $_FILES['file_2']['tmp_name'][$i];

		if ($tmpFilePath != ""){

			$newFilePath = "./uploads/" . $_FILES['file_2']['name'][$i];

			$file2Links = $siteUrl.'/wp-content/themes/ua-teens/uploads/'.$_FILES['file_2']['name'][$i].' , '.$file2Links;

			if(move_uploaded_file($tmpFilePath, $newFilePath)) {

			}
		}
	}

	for( $i=0 ; $i < $totalFile3 ; $i++ ) {

		$tmpFilePath = $_FILES['file_3']['tmp_name'][$i];

		if ($tmpFilePath != ""){

			$newFilePath = "./uploads/" . $_FILES['file_3']['name'][$i];

			$file3Links = $siteUrl.'/wp-content/themes/ua-teens/uploads/'.$_FILES['file_3']['name'][$i].' , '.$file3Links;

			if(move_uploaded_file($tmpFilePath, $newFilePath)) {

			}
		}
	}

	for( $i=0 ; $i < $totalFile4 ; $i++ ) {

		$tmpFilePath = $_FILES['file_4']['tmp_name'][$i];

		if ($tmpFilePath != ""){

			$newFilePath = "./uploads/" . $_FILES['file_4']['name'][$i];

			$file4Links = $siteUrl.'/wp-content/themes/ua-teens/uploads/'.$_FILES['file_4']['name'][$i].' , '.$file4Links;

			if(move_uploaded_file($tmpFilePath, $newFilePath)) {

			}
		}
	}

	$post_data_gsth = array (
		'Прізвище, імʼя, по батькові' => $firstLastName,
		'Адреса реєстрації' => $address,
		'Контактний телефон' => $phone,
		'Електронна пошта' => $email,
		'Код ЄДРПОУ' => $edrpu,
		'Імʼя, прізвище Студента' => $studentName,
		'Дата народження Студента' => $birthday,
		'Контактний телефон студента' => $studentPhone,
		'Електронна пошта Студента' => $studentEmail ,
		'Документ, що посвідчує особу Студента' => $file1Links,
		'Документ, що посвідчує особу Замовника' => $file2Links,
		'Документ, що посвідчує повноваження Замовника діяти від імені Студента' => $file3Links,
		'Документ, що посвідчує повноваження підписувати документи' => $file4Links,
		'Сторінка заявки' => $pageLink,

	);

	$chanelGsth = curl_init();

	curl_setopt($chanelGsth, CURLOPT_URL, 'https://script.google.com/macros/s/AKfycbxzP7lzUz_kh0B1Y4pzs7k4iIjksu0NFKF1upSfAnOr0PsDP9qSAibEdG2V0DTasVv0ow/exec');
	/*curl_setopt($chanelGsth, CURLOPT_URL, 'https://script.google.com/macros/s/AKfycbzIrBsR6xJaH-dodAyAqaUFwDxLQNAI5C9riAQaaX9JzG-XkicHc50nVV6jFb96jL33CA/exec');*/
	curl_setopt($chanelGsth, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($chanelGsth, CURLOPT_POST, 1);
	curl_setopt($chanelGsth, CURLOPT_POSTFIELDS, $post_data_gsth);

	$output = curl_exec($chanelGsth);

	curl_close($chanelGsth);

	header('Location:'.$siteUrl.'/dyakuyemo');

	wp_die();