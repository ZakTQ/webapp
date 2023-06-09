<?php

class Model_Main extends Model
{

	public function get_data()
	{
		try {
			$db = Database::getInstance();
			Database::setCharsetEncoding();

			$sql = 'SELECT name,title,price FROM product ORDER BY name';
			$stm = $db->prepare($sql);
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_ASSOC);
		} catch (Exception $e) {
			print $e->getMessage();
		}
	}
}
