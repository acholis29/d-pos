<?php

class login_model extends CI_model {
	function __construct(){
	}
 
	public function verify_userbo($user,$password,$grp){
		$q=$this->db
			->where('userid',$user)
			->where('passwd',md5($password))			
            ->where('grp',$grp)						
            ->or_where('email',$user)
			->where('passwd',md5($password))			
            ->where('grp',$grp)						
			->limit(1)
			->get('mspasswd');
			
		if( $q->num_rows() > 0 ){			
			return true;
        }else{
            redirect('auth/'.$grp.'?err=0');
        }
		
		return false;
			
	}
}