<?php
class Password
{
	public function rand($length) 
	{
		$chars = "abcdefghijklmnpqrstuvwxyzABCDEFGHIJKLMNPQRSTUVWXYZ123456789";
		return substr(str_shuffle($chars),0,$length);
	}
}

echo Password::rand(8);
