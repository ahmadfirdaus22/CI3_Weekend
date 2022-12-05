<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Librarian extends CI_Controller {

    private const CONFIG_UPLOAD =[
        'upload_path'=>FCPATH .'/assets/profile',
        'allowed_types'=>'gif|jpg|png',
        'upload_max_filesize'=> '1M',
        'overwrite' =>true
    ];

    public function __construct()
    {
        parent:: __construct();
        $this->load->model('Librarian_model', 'librarian');
        $this->load->library("form_validation");
        // $this->load->library('upload', '$CONFIG_UPLOAD');
    }

	public function index()
    {
        $data['librarian'] = $this->librarian->all();

        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('librarian/index', $data);
        $this->load->view('template/footer');
    }
    
	public function add()
    {
        if($this->input->method()=="post")
        {
            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');
            $this->form_validation->run();
           
            $this->load->library('upload',array_merge(self::CONFIG_UPLOAD,['file_name'=>md5(time())]));
            if(isset($_FILES['avatar']) && ! $this->upload->do_upload('avatar')){
                // $data['avatar'] = $this->upload->display_error();
                $this->form_validation->set_rules('avatar', 'Avatar', 'required');
                
                
            }else{
                $field_name= $this->upload->data();
            }
            if($this->form_validation->run()== false)
            {
            }else{
                $data = [
                    'username' => $this->input->post('username'),
                    'name' => $this->input->post('name'),
                    'email' => $this->input->post('email'),
                    'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                    'avatar' => $field_name['file_name'],
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>Null
                ];
                
                $this->librarian->insert($data);
                return redirect('Librarian/index');
            }

        }

        $data['librarians']= $this->librarian->all();

        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('librarian/add');
        $this->load->view('template/footer');

    }
    
	public function edit($id)
    {
        if($this->input->method()=="post")
        {
                $this->form_validation->set_rules('username', 'Username', 'required');
                $this->form_validation->set_rules('name', 'Name', 'required');
                $this->form_validation->set_rules('email', 'Email', 'required');
                $this->form_validation->run();

                $this->load->library('upload',array_merge(self::CONFIG_UPLOAD,['file_name'=>md5(time())]));
                if(isset($_FILES['avatar']) && ! $this->upload->do_upload('avatar')){
                    // $data['avatar'] = $this->upload->display_error();
                    // $this->form_validation->set_rules('avatar', 'Avatar', 'required');
                }else{
                    $field_name= $this->upload->data();
                }
                if($this->form_validation->run()== false)
                {
                }else{
            $data = [
            'username' => $this->input->post('username'),
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'avatar' => $field_name['file_name'],
            'updated_at'=>date('Y-m-d H:i:s')
        ];
        $this->librarian->update($id,$data);
        return redirect('Librarian/index');
        }
        }
        $data['librarians']= $this->librarian->all();
        $data['data'] = $this->librarian->findById($id);
        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('librarian/edit', $data);
        $this->load->view('template/footer');

    }
    
	public function delete($id)
    {
        $this->librarian->delete($id);
        return redirect('librarian/index');
    }
}
