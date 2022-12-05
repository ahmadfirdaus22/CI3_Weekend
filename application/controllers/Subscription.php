<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subscription extends CI_Controller {

    public function __construct()
    {
        parent:: __construct();
        $this->load->model('Subscription_model', 'subscription');
        $this->load->library("form_validation");
    }

	public function index()
    {
        $data['subscription'] = $this->subscription->all();

        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('subscription/index', $data);
        $this->load->view('template/footer');
    }
    
	public function add()
    {
        if($this->input->method()=="post")
        {
            $this->form_validation->set_rules('title', 'Title', 'required');
            $this->form_validation->set_rules('month', 'Month', 'required');
            $this->form_validation->set_rules('price', 'Price', 'required');
            $this->form_validation->run();
            if($this->form_validation->run()== false)
            {
            }else{
                $data = [
                    'title' => $this->input->post('title'),
                    'month' => $this->input->post('month'),
                    'price' => $this->input->post('price'),
                    'is_Active' => 1,
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>Null
                ];
                
                $this->subscription->insert($data);
                return redirect('subscription/index');
            }

        }

        $data['subscriptions']= $this->subscription->all();

        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('subscription/add');
        $this->load->view('template/footer');

    }
    
	public function edit($id)
    {
        if($this->input->method()=="post")
        {
                $this->form_validation->set_rules('title', 'Title', 'required');
                $this->form_validation->set_rules('month', 'Month', 'required');
                $this->form_validation->set_rules('price', 'Price', 'required');
                $this->form_validation->set_rules('is_Active', 'Is Active', 'required');
                $this->form_validation->run();

                if($this->form_validation->run()== false)
                {
                }else{
                $data = [
                    'title' => $this->input->post('title'),
                    'month' => $this->input->post('month'),
                    'price' => $this->input->post('price'),
                    'is_Active' => $this->input->post('is_Active'),
                    'updated_at'=>date('Y-m-d H:i:s')
        ];
        $this->subscription->update($id,$data);
        return redirect('subscription/index');
        }
        }
        $data['subscriptions']= $this->subscription->all();
        $data['data'] = $this->subscription->findById($id);
        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('subscription/edit', $data);
        $this->load->view('template/footer');

    }
    
	public function delete($id)
    {
        $this->subscription->delete($id);
        return redirect('subscription/index');
    }
}
