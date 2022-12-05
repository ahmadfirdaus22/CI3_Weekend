<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

    public function __construct()
    {
        parent:: __construct();
        $this->load->model('Member_model', 'member');
        $this->load->library("form_validation");
    }

	public function index()
    {
        $data['member'] = $this->member->all();

        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('member/index', $data);
        $this->load->view('template/footer');
    }
    
	public function add()
    {
        if($this->input->method()=="post")
        {
            $this->form_validation->set_rules('nik', 'NIK', 'required');
            $this->form_validation->set_rules('full_name', 'Full Name', 'required');
            $this->form_validation->set_rules('phone', 'Phone', 'required');
            $this->form_validation->set_rules('address', 'Address', 'required');
            $this->form_validation->set_rules('born_place', 'Born Place', 'required');
            $this->form_validation->set_rules('born_date', 'Born Date', 'required');
            $this->form_validation->set_rules('gender', 'Gender', 'required');
            $this->form_validation->set_rules('country', 'Country', 'required');
            $this->form_validation->set_rules('nationality', 'Nationality', 'required');

            $this->form_validation->run();
            if($this->form_validation->run()== false)
            {
            }else{
                $data = [
                    'nik' => $this->input->post('nik'),
                    'full_name' => $this->input->post('full_name'),
                    'phone' => $this->input->post('phone'),
                    'address' => $this->input->post('address'),
                    'born_place' => $this->input->post('born_place'),
                    'born_date' => $this->input->post('born_date'),
                    'gender' => $this->input->post('gender'),
                    'country' => $this->input->post('country'),
                    'nationality' => $this->input->post('nationality'),
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>Null
                ];
                
                $this->member->insert($data);
                return redirect('member/index');
            }

        }

        $data['members']= $this->member->all();

        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('member/add');
        $this->load->view('template/footer');

    }
    
	public function edit($id)
    {
        if($this->input->method()=="post")
        {
                $this->form_validation->set_rules('nik', 'NIK', 'required');
                $this->form_validation->set_rules('full_name', 'Full Name', 'required');
                $this->form_validation->set_rules('phone', 'Phone', 'required');
                $this->form_validation->set_rules('address', 'Address', 'required');
                $this->form_validation->set_rules('born_place', 'Born Place', 'required');
                $this->form_validation->set_rules('born_date', 'Born Date', 'required');
                $this->form_validation->set_rules('gender', 'Gender', 'required');
                $this->form_validation->set_rules('country', 'Country', 'required');
                $this->form_validation->set_rules('nationality', 'Nationality', 'required');    
                $this->form_validation->run();

                if($this->form_validation->run()== false)
                {
                }else{
                $data = [
                    'nik' => $this->input->post('nik'),
                    'full_name' => $this->input->post('full_name'),
                    'phone' => $this->input->post('phone'),
                    'address' => $this->input->post('address'),
                    'born_place' => $this->input->post('born_place'),
                    'born_date' => $this->input->post('born_date'),
                    'gender' => $this->input->post('gender'),
                    'country' => $this->input->post('country'),
                    'nationality' => $this->input->post('nationality'),
                    'updated_at'=>date('Y-m-d H:i:s')
        ];
        $this->member->update($id,$data);
        return redirect('member/index');
        }
        }
        $data['members']= $this->member->all();
        $data['data'] = $this->member->findById($id);
        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('member/edit', $data);
        $this->load->view('template/footer');

    }
    
	public function delete($id)
    {
        $this->member->delete($id);
        return redirect('member/index');
    }
}
