<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	public $user;
	public $_id;
	public $username;
	public $last_login_time = 0;
	public $last_login_ip = '';

	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
		$this->errorCode = self::ERROR_PASSWORD_INVALID;
		$user = Administrator::model()->find('LOWER(username)=?',array(strtolower($this->username)));;
		if ($user)
		{
			if ($user->password === md5(md5($this->password).$user->salt))
			{
				$this->errorCode = self::ERROR_NONE;
				$this->setUser($user);
				$this->_id = $user->id;
				$this->username = $user->username;
				$this->last_login_time = $user->this_login_time;
				$this->last_login_ip = $user->this_login_ip;
				// Yii::app()->user->setState("thisisadmin", "true");
			} else {
				$this->errorCode = self::ERROR_USERNAME_INVALID;
            }
		} else {
			$this->errorCode = self::ERROR_USERNAME_INVALID;
		}

		unset($user);
		return !$this->errorCode;
	}

	public function getUser()
	{
		return $this->user;
	}

	public function getId()
	{
		return $this->_id;
	}

	public function getUserName()
	{
		return $this->username;
	}

	public function setUser(CActiveRecord $user)
	{
		$this->user = $user->attributes;
	}
}