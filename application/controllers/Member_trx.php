<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member_trx extends CI_Controller {

    public function __construct()
    {
        parent:: __construct();
        $this->load->model('Member_trx_model', 'member_trx');
        $this->load->model('Member_model', 'member');
        $this->load->model('Subscription_model', 'subscription');

        $this->load->library("form_validation");
    }

	public function index()
    {
        $data['member_trx'] = $this->member_trx->all();

        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('member_trx/index', $data);
        $this->load->view('template/footer');
    }
    
	public function add()
    {
        if($this->input->method()=="post")
        {
            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('title', 'Title', 'required');
            $this->form_validation->set_rules('active_at', 'Active At', 'required');
            $this->form_validation->set_rules('expire_at', 'Expire At', 'required');
            $this->form_validation->set_rules('status', 'Status', 'required');
            $this->form_validation->set_rules('total_order', 'Total Order', 'required');
            $this->form_validation->set_rules('note', 'Note', 'required');

            $this->form_validation->run();
            if($this->form_validation->run()== false)
            {
            }else{
                $data = [
                    'member_id' => (int)$this->input->post('name'),
                    'subs_id' => (int)$this->input->post('title'),
                    'trx_date' => date('Y-m-d H:i:s'),
                    'active_at' => $this->input->post('active_at'),
                    'expire_at' => $this->input->post('expire_at'),
                    'status' => $this->input->post('status'),
                    'total_order' => $this->input->post('total_order'),
                    'note' => $this->input->post('note'),
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>Null
                ];
                
                // die(var_dump($data));
                $this->member_trx->insert($data);
                return redirect('member_trx/index');
            }

        }

        $data['data1']=$this->member->all();
        $data['data2']=$this->subscription->all();

        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('member_trx/add', $data);
        $this->load->view('template/footer');

    }
    
	public function edit($id)
    {
        if($this->input->method()=="post")
        {
                $this->form_validation->set_rules('name', 'Name', 'required');
                $this->form_validation->set_rules('title', 'Title', 'required');
                $this->form_validation->set_rules('active_at', 'Active At', 'required');
                $this->form_validation->set_rules('expire_at', 'Expire At', 'required');
                $this->form_validation->set_rules('status', 'Status', 'required');
                $this->form_validation->set_rules('total_order', 'Total Order', 'required');
                $this->form_validation->set_rules('note', 'Note', 'required');
                $this->form_validation->run();

                if($this->form_validation->run()== false)
                {
                }else{
                $data = [
                    'member_id' => (int)$this->input->post('name'),
                    'subs_id' => (int)$this->input->post('title'),
                    'active_at' => $this->input->post('active_at'),
                    'expire_at' => $this->input->post('expire_at'),
                    'status' => $this->input->post('status'),
                    'total_order' => $this->input->post('total_order'),
                    'note' => $this->input->post('note'),
                    'updated_at'=>date('Y-m-d H:i:s')
        ];
        $this->member_trx->update($id,$data);
        return redirect('member_trx/index');
        }
        }
        $data['member_trxs']= $this->member_trx->all();
        $data['data1'] = $this->member_trx->findById($id);
        $data['data2']=$this->member->all();
        $data['data3']=$this->subscription->all();
        
        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('member_trx/edit', $data);
        $this->load->view('template/footer');

    }
    
	public function delete($id)
    {
        $this->member_trx->delete($id);
        return redirect('member_trx/index');
    }
}
