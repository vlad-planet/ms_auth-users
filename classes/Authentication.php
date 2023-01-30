<?php
/**
* Реализация схемы аутентификацию 
*/
abstract class Authentication implements IAccount{
	const AUTHENTICATION_ERR_MSG = 'Произошла ошибка или время Вашего сеанса закончилось. Попробуйте выполнит вход ещё раз.';

	private $account = null;
	/**
	* Возвращает объект учетной записи, если он действителен.
	*
	* @param string $user user account login
	* @return Account user account
	*/
	public function getAccount(string $user = '') {
		if ($this->account !== null) {
			return $this->account;
		} else {
			return AUTHENTICATION_ERR_MSG;
		}
	}
	
	/**
	* Проверить авторизирован ли пользователь
	*
	* @return boolean
	*/
	public function isLoggedIn() : bool {
		return ($this->account !== null);
	}
	
	/**
	* Вход в систему
	*
	* @param string $user
	* @param string $password
	*
	* @return boolean
	*/
	abstract public function login(string $user, string $password) : bool;
}
?>	