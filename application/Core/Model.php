<?php

class Model
{
	public function connect_db()
	{
	$server = "localhost";
    	$user = "root";
    	$pass = "1";
    	$db = "mybase";
    	mysql_connect ($server, $user, $pass) or die ("нет подключения к mysql");
    	mysql_select_db ($db) or die ("нет БД");
	mysql_set_charset('utf8');
	setlocale(LC_ALL, 'ru_RU.UTF-8');
	}
	/*
		Модель обычно включает методы выборки данных, это могут быть:
			> методы нативных библиотек pgsql или mysql;
			> методы библиотек, реализующих абстракицю данных. Например, методы библиотеки PEAR MDB2;
			> методы ORM;
			> методы для работы с NoSQL;
			> и др.
	*/

	// метод выборки данных
	public function get_data()
	{
		// todo
	}
	

	
}
