<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class Book_model
 * Модель для работы с книгами
 */
class Book_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    /**
	 * Загрузка списка книг
	 */
	public function loadList()
	{
        return $this->db->query('SELECT * FROM books')->result_array();
	}
}
