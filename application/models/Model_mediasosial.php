<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Model_mediasosial extends CI_Model
{
    function dbmedia_sosial($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('media_sosial')->result_array();
    }
    function dbmedia_sosialall()
    {
        return $this->db->get('media_sosial')->result_array();
    }
}
