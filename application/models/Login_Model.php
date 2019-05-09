 <?php  
 class Login_model extends CI_Model  
 {  
      function can_login($email, $password)  
      {  
           $this->db->where('email', $email);  
           $this->db->where('password', $password);  
           $query = $this->db->get('members');   
           return $query->row();
      }  
 }  