<?php
/**
 * Created by PhpStorm.
 * User: Clement
 * Date: 20/05/2019
 * Time: 12:21
 */

class ActusModel extends CI_Model
{
		public function getArticles($limit)
		{
			$this->db->select('*');
			$this->db->from('actus pro');
			if($limit == 2)
			{
				$this->db->limit(2);
			}
			$query = $this->db->get();
			return $query->result_array($query);

		}
		public function getArticle($id)
		{
			$this->db->select('*');
			$this->db->from('actus act');
			$this->db->where('act.id', $id);
			$query = $this->db->get();
			return $query->result_array($query);

		}
}
