<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Book extends CI_Controller {

    public function __construct()
    {
        parent:: __construct();
        $this->load->model('Book_model', 'book');
        $this->load->library("form_validation");
    }

	public function index()
    {
        $data['book'] = $this->book->all();

        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('book/index', $data);
        $this->load->view('template/footer');
    }
    
	public function add()
    {
        if($this->input->method()=="post")
        {
            $this->form_validation->set_rules('isbn', 'ISBN', 'required');
            $this->form_validation->set_rules('title', 'Title', 'required');
            $this->form_validation->set_rules('synopsis', 'Synopsis', 'required');
            $this->form_validation->set_rules('author', 'Author', 'required');
            $this->form_validation->set_rules('publisher', 'Publisher', 'required');
            $this->form_validation->set_rules('category', 'Category', 'required');
            $this->form_validation->set_rules('languange', 'Languange', 'required');
            $this->form_validation->run();
            if($this->form_validation->run()== false)
            {
            }else{
                $data = [
                    'isbn' => $this->input->post('isbn'),
                    'title' => $this->input->post('title'),
                    'synopsis' => $this->input->post('synopsis'),
                    'author' => $this->input->post('author'),
                    'publisher' => $this->input->post('publisher'),
                    'category' => $this->input->post('category'),
                    'languange' => $this->input->post('languange'),
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>Null
                ];
                
                $this->book->insert($data);
                return redirect('book/index');
            }

        }

        $data['books']= $this->book->all();

        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('book/add');
        $this->load->view('template/footer');

    }
    
	public function edit($id)
    {
        if($this->input->method()=="post")
        {
                $this->form_validation->set_rules('isbn', 'ISBN', 'required');
                $this->form_validation->set_rules('title', 'Title', 'required');
                $this->form_validation->set_rules('synopsis', 'Synopsis', 'required');
                $this->form_validation->set_rules('author', 'Author', 'required');
                $this->form_validation->set_rules('publisher', 'Publisher', 'required');
                $this->form_validation->set_rules('category', 'Category', 'required');
                $this->form_validation->set_rules('languange', 'Languange', 'required');
                $this->form_validation->run();

                if($this->form_validation->run()== false)
                {
                }else{
                $data = [
                    'isbn' => $this->input->post('isbn'),
                    'title' => $this->input->post('title'),
                    'synopsis' => $this->input->post('synopsis'),
                    'author' => $this->input->post('author'),
                    'publisher' => $this->input->post('publisher'),
                    'category' => $this->input->post('category'),
                    'languange' => $this->input->post('languange'),
                    'updated_at'=>date('Y-m-d H:i:s')
        ];
        $this->book->update($id,$data);
        return redirect('book/index');
        }
        }
        $data['books']= $this->book->all();
        $data['data'] = $this->book->findById($id);
        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('book/edit', $data);
        $this->load->view('template/footer');

    }
    
	public function delete($id)
    {
        $this->book->delete($id);
        return redirect('book/index');
    }
}
