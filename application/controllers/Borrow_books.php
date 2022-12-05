<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Borrow_books extends CI_Controller {

    public function __construct()
    {
        parent:: __construct();
        $this->load->model('Borrow_books_model', 'borrow_books');
        $this->load->model('Member_model', 'member');

        $this->load->library("form_validation");
    }

	public function index()
    {
        $data['borrow_books'] = $this->borrow_books->all();

        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('borrow_books/index', $data);
        $this->load->view('template/footer');
    }
    
	public function add()
    {
        if($this->input->method()=="post")
        {
            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('note', 'Note', 'required');

            $this->form_validation->run();
            if($this->form_validation->run()== false)
            {
            }else{
                $data = [
                    'member_id' => (int)$this->input->post('name'),
                    'trx_date' => date('Y-m-d H:i:s'),
                    'note' => $this->input->post('note'),
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>Null
                ];
                
                $this->borrow_books->insert($data);
                return redirect('borrow_books/index');
            }

        }

        $data['data1']=$this->member->all();

        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('borrow_books/add', $data);
        $this->load->view('template/footer');

    }
    
	public function edit($id)
    {
        if($this->input->method()=="post")
        {
                $this->form_validation->set_rules('name', 'Name', 'required');
                $this->form_validation->set_rules('note', 'Note', 'required');
                $this->form_validation->run();

                if($this->form_validation->run()== false)
                {
                }else{
                $data = [
                    'member_id' => (int)$this->input->post('name'),
                    'note' => $this->input->post('note'),
                    'updated_at'=>date('Y-m-d H:i:s')
        ];
        $this->borrow_books->update($id,$data);
        return redirect('borrow_books/index');
        }
        }
        $data['borrow_bookss']= $this->borrow_books->all();
        $data['data1'] = $this->borrow_books->findById($id);
        $data['data2']=$this->member->all();

        
        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('borrow_books/edit', $data);
        $this->load->view('template/footer');

    }
    
	public function delete($id)
    {
        $this->borrow_books->delete($id);
        return redirect('borrow_books/index');
    }
}
