<?php

class CustomerPORTALModel extends CI_Model{

    public function insert_ticket(){
        $data = array(
            'ticket_uniqueid' => $this->input->post('ticket_uniqueid'),
            'full_name' => $this->input->post('full_name'),
            'issue_title' => $this->input->post('issue_title'),
            'issue_description' => $this->input->post('issue_description'),
            'status' => 'open'
        );
        

        return $this->db->insert('inquiries', $data);
    }

   public function search_ticket($ticket_uniqueid){
      
        $this->db->like('ticket_uniqueid', $ticket_uniqueid);
        $query = $this->db->get("inquiries");
        return $query->result();
   }
    
    public function get_ticket(){
        if(!empty($this->input->get("search"))){
            $this->db->like('ticket_id', $this->input->get("search"));
            $this->db->or_like('issue_title', $this->input->get("search"));
        }
        $query = $this->db->get("inquiries");
        return $query->result();
    }

    public function update_ticket($ticket_id){
        $data = array(
            'operator' => $this->input->post('operator')
            
        );
        if($ticket_id == 0){
            return $this->db->insert('inquiries', $data);
        }else{
            $this->db->where('ticket_id', $ticket_id);
            return $this->db->update('inquiries', $data);
        }
    }

    public function update_ticket_operator($ticket_id){
        $data = array(
            'status' => $this->input->post('status'),
            'remarks'=> $this->input->post('remarks')
            
        );
        if($ticket_id == 0){
            return $this->db->insert('inquiries', $data);
        }else{
            $this->db->where('ticket_id', $ticket_id);
            return $this->db->update('inquiries', $data);
        }
    }

    public function find_ticket($ticket_id){
        return $this->db->get_where('inquiries', array('ticket_id' => $ticket_id))->row();
    }

    public function delete_ticket($ticket_id){
        return $this->db->delete('inquiries', array('ticket_id' => $ticket_id));
    }

    
}

?>