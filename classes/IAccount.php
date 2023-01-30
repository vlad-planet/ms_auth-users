<?php

/**
* Интерфейс для аутентификации
*/
interface IAccount{
	/**
	* Вошел ли текущий пользователь в систему?
	*
	* @return bool
	*/
	public function isLoggedIn();
	
	/**
	* Возвращает информацию об учетной записи пользователя
	*
	* @param string $user user name of the account
	* @return Account
	*/
	public function getAccount(string $user = '');
}
?>