<?php

/**
* фактическая аутентификация пользователя.
*/
class AuthAccounts extends Authentication{

	private $users;
	
	/**
	* @return void
	*/
	public function __construct(){
		$this->users = new Users();
	}
	/**
	* Авторизация пользователя
	*
	* @param string $user account user name
	* @param string $password account password
	* @return boolean
	*/
	public function login(string $user, string $password) : bool {
		if (empty($user) || empty($password)) {
			return false;
		} else {
			// Проверяем через два метода валидации. Должны работать оба.
			// Статический метод класса User для валидации аккаунта
			$firstValidation = Users::validate($user, $password);
			// 'волшебный' метод класса User validate<username>($password)
			$userLoginFunction = 'validate' . $user;
			$secondValidation = $this->users->$userLoginFunction($password);
			return ($firstValidation && $secondValidation);
		}
	}
}
?>