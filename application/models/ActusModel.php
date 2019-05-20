<?php
/**
 * Created by PhpStorm.
 * User: Clement
 * Date: 20/05/2019
 * Time: 12:21
 */

class ActusModel extends CI_Model
{
		public function getArticles()
		{
			$this->db->select('*');
			$this->db->from('actus pro');
			$query = $this->db->get();
			return $query->result_array($query);

		}
}
