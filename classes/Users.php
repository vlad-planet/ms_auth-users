<?php
/**
* Пользователи
*/
class Users{

	private static $accounts = array('John' => '1234', 'mike' => 'qwerty');
	
	/**
	* Валидация пользователя
	*
	* @param string $user account user name
	* @param string $password account password
	* @return boolean
	*/
	public static function validate(string $user, string $password) : bool {
		return self::$accounts[$user] == $password;
	}
	
	/**
	* Проверить учетную запись
	*
	* @param string $name
	* @param array $arguments
	* @return boolean
	*/
	public function __call(string $name, array $arguments) : bool{
		if (preg_match("/^validate(.*)$/", $name, $matches) && count($arguments) > 0) {
			return self::validate($matches[1], $arguments[0]);
		}
	}
}
?>