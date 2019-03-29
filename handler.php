<?php
	//Получение информации с выбранными днями
	$resdata = htmlspecialchars($_REQUEST['reserve']);

	/*Запись данных в файл base.txt*/

	// Пишу название файла с "базой данных"
	$base = 'base.txt';
	//Беру инфу из базы данных
	$current = file_get_contents($base);
	// Превращаю данные в строку без пробелов (но разделенную запятыми)
	$current = implode("", (array)$resdata);
	
	//Добавляю новые данные в базу данных
	file_put_contents($base, $current, FILE_APPEND);


	//Запрос данных с забронированными днями
	$base = 'base.txt';
	$currentdate = file_get_contents($base);
	$currentdatearr = explode(",", $currentdate);
	//Создание массива с датами
	$valajax = [];
	foreach ($currentdatearr as $value) 
	{
		$valajax[] = $value;
	}
	//Отправка данных в файл с таблицей
	echo json_encode($valajax);


//ТЕЛЕФОН
		$resdat = htmlspecialchars($_REQUEST['too']);

	/*Запись данных в файл base.txt*/

	// Пишу название файла с "базой данных"
	$bas = 'basa_data_phone.txt';
	//Беру инфу из базы данных
	$curren = file_get_contents($bas);
	// Превращаю данные в строку без пробелов (но разделенную запятыми)
	$curren = implode("", (array)$resdat);
	
	//Добавляю новые данные в базу данных
	file_put_contents($bas, $curren, FILE_APPEND);



?>