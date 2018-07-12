<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NameTag extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');

        $config1 = array(
        	array(
        		'field' => 'nim',
        		'rules' => 'required|numeric|min_length[10]|max_length[11]'
        	),

        	array(
        		'field' => 'fullname',
        		'rules' => 'required|alpha_numeric_spaces|min_length[5]|max_length[50]'
        	),

        	array(
        		'field' => 'callname',
        		'rules' => 'required|alpha_numeric_spaces|min_length[3]|max_length[50]'
        	),

        	array(
        		'field' => 'born_place',
        		'rules' => 'required|alpha_numeric_spaces|min_length[5]|max_length[50]'
        	),

        	array(
        		'field' => 'birth_day',
        		'rules' => 'required'
        	),

        	array(
        		'field' => 'address',
        		'rules' => 'required|min_length[5]|max_length[100]'
        	),

        	array(
        		'field' => 'department',
        		'rules' => 'required'
        	),

        	array(
        		'field' => 'hobbies',
        		'rules' => 'required|alpha_numeric_spaces|min_length[4]|max_length[50]'
        	),

        	array(
        		'field' => 'motto',
        		'rules' => 'required|alpha_numeric_spaces|min_length[5]|max_length[50]'
        	),

            array(
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'required'
            )
        );

        $this->form_validation->set_rules($config1);

    	$this->form_validation->set_message('required', '{field} harus diisi !');

    	$this->form_validation->set_message('alpha_numeric_spaces', '{field} hanya boleh berisi karakter a-z, A-Z, 0-9!');

    	$this->form_validation->set_message('numeric', '{field} hanya boleh diisi angka !');

    	$this->form_validation->set_message('min_length', '{field} harus diisi minimal {param} karakter!');

    	$this->form_validation->set_message('max_length', '{field} harus diisi maksimal {param} karakter!');

        if ($this->form_validation->run() == FALSE)
        {
                $this->load->view('landing');
        }
        else
        {
    		$data1 = array(
				'nim'        => $this->input->post('nim'),
				
				'fullname'   => $this->input->post('fullname'),
				
				'callname'   => $this->input->post('callname'),
				
				'born_place' => $this->input->post('born_place'),
				
				'birth_day'  => $this->input->post('birth_day'),
				
				'department' => $this->input->post('department'),

                'address'    => $this->input->post('address'),

                'hobbies'    => $this->input->post('hobbies'),
				
				'motto'      => $this->input->post('motto'),  

                'email'      => $this->input->post('email'),

                'ip'         => client_ip(),

                'browser'    => client_browser(),

                'os'         => client_os()
    		);

            $nim    = $this->input->post('nim');
           
            $config = array(
                'upload_path'   => "./assets/img/users",
                'allowed_types' => "gif|jpg|png|jpeg",
                'file_name'     => $nim,
                'overwrite'     => TRUE,
                'max_size'      => 300
            );

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('photo'))
            {
                $error = $this->upload->display_errors();

                echo "<script>
                        alert('pesan error $error');
                        window.location.href='..';
                        </script>";
            }
            else
            {
                $upload_data = $this->upload->data(); 
                
                $data1['photo'] = $upload_data['file_name'];
                
                $this->load->view('print', $data1);
            }

        }
	}
}
