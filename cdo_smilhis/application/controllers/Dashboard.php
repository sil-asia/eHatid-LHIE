<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {

	public function __construct(){
		parent::__construct();
        $this->load->database();
        $this->load->library('table');
        $this->load->model('dashboard_model');

        if(!($this->session->has_userdata('user'))){
        redirect('landing', 'refresh');

           
        }
        
      




    }

    public function index()
    {
        $this->view(date('y-m-d'),date('Y-m-d', strtotime('+1 day', strtotime(date('y-m-d')))));
    	
    }

    public function view($start, $end)
    {
       
        $data = $this->user_header_data();
        $data['module'] = "General Dashboard";
        $data['buyers'] = 10;
        $data['buyers_week'] = 20;
        $data['org_week'] = 30;
        $data['organizations'] = 10;
        $data['item_counts'] = $this->get_product_count_per_item();
        $data['view_array'] = $this->generate_view_array($start, $end);
        $data['views'] = 10;
        $data['views_week'] = 20;
        $data['all_products_submitted'] = 30;
        $data['all_products_submitted_week'] = 40;
         $data['all_products_vetted'] =30;
        $data['all_products_vetted_week'] = 20;
         $data['all_products_posted'] = 15;
        $data['all_products_posted_week'] = 30;
        $data['product_views'] = $this->get_product_views(5);
        $data['buyer_views'] = $this->get_buyer_views(5);
        $data['product_count'] = $this->get_product_count_per_item();



        
        $this->load->view('internal/dashboard/view',$data);

    }

    public function generate_view_array($start, $end)
    {
  

        $curr_date =  date('Y-m-d', strtotime('0 day', strtotime($start)));
        $data = array();
        while($curr_date < $end)
        {
            $element = new StdClass();
            $element->date = $curr_date;
            $element->count = 5;
            $curr_date = date('Y-m-d', strtotime('+1 day', strtotime($curr_date)));
            array_push($data, $element);

        }

        return $data;
    }


    public function get_product_count_per_item()
    {
        $items = $this->dashboard_model->get_all('dd_hwr_type');
        $item_count = array();
        $item_color = array('blue','blue','blue', 'blue', 'blue', 'blue', 'blue','teal', 'pink');
        $j = 0;
        $product_count = 100;
        foreach($items as $item)
        {
            $item_ = new StdClass();
            $item_->name = $item->name;
            $count = 10;
            $item_->count = $count;
            $item_->rate =  round($count*100/$product_count);
            $item_->color = 'blue';
            $j++;
            array_push($item_count, $item_);
        }
      

        return $item_count;

    }

    public function get_product_views($c)
    {
        $items = $this->dashboard_model->get_all('dd_hwr_type');
        $item_count = array();
        $item_color = array('blue','blue','blue', 'blue', 'blue', 'blue', 'blue','teal', 'pink');
        $j = 0;
                $product_count = 100;

        foreach($items as $item)
        {
            $item_ = new StdClass();
            $item_->name = $item->name;
            $count = 10;
            $item_->count = $count;
            $item_->rate =  round($count*100/$product_count);
            $item_->color = 'blue';
            $j++;
            array_push($item_count, $item_);
        }
      

        return $item_count;
        function my_sort_function2($a, $b)
        {
            return $a->count < $b->count;
        }
        usort($product_count, 'my_sort_function2');
        $i = 0;
        $result = array();
        while($i < $c)
        {
            array_push($result,$product_count[$i]);
            $i++;
        }

        return $result;
    }
    public function get_buyer_views($c)
    {
       $items = $this->dashboard_model->get_all('dd_hwr_type');
        $item_count = array();
        $item_color = array('blue','blue','blue', 'blue', 'blue', 'blue', 'blue','teal', 'pink');
        $j = 0;
         $product_count = 100;

        foreach($items as $item)
        {
            $item_ = new StdClass();
            $item_->name = $item->name;
            $count = 10;
            $item_->count = $count;
            $item_->rate =  round($count*100/$product_count);
            $item_->color = 'blue';
            $j++;
            array_push($item_count, $item_);
        }
      

        return $item_count;
        function my_sort_function3($a, $b)
        {
            return $a->count < $b->count;
        }
        usort($buyer_count, 'my_sort_function3');
        $i = 0;
        $result = array();
        while($i < $c)
        {
            array_push($result,$buyer_count[$i]);
            $i++;
        }

        return $result;
    }

    public function view_all_product_counts()
    {
         $items = $this->dashboard_model->get_all('dd_hwr_type');
        $item_count = array();
        $item_color = array('blue','blue','blue', 'blue', 'blue', 'blue', 'blue','teal', 'pink');
        $j = 0;
        $product_count = 100;

        foreach($items as $item)
        {
            $item_ = new StdClass();
            $item_->name = $item->name;
            $count = 10;
            $item_->count = $count;
            $item_->rate =  round($count*100/$product_count);
            $item_->color = 'blue';
            $j++;
            array_push($item_count, $item_);
        }
      

        return $item_count;
        function my_sort_function2($a, $b)
        {
            return $a->count < $b->count;
        }
        usort($product_count, 'my_sort_function2');
        $i = 0;
        
        $data = $this->user_header_data();
        $data['product_views'] = $product_count;
        $this->load->view('internal/Dashboard/product_count_view',$data);


    }
    public function view_all_buyer_counts()
    { $items = $this->dashboard_model->get_all('dd_hwr_type');
        $item_count = array();
        $item_color = array('blue','blue','blue', 'blue', 'blue', 'blue', 'blue','teal', 'pink');
        $j = 0;
        $product_count = 100;

        foreach($items as $item)
        {
            $item_ = new StdClass();
            $item_->name = $item->name;
            $count = 10;
            $item_->count = $count;
            $item_->rate =  round($count*100/$product_count);
            $item_->color = 'blue';
            $j++;
            array_push($item_count, $item_);
        }
      

        return $item_count;
        function my_sort_function3($a, $b)
        {
            return $a->count < $b->count;
        }
        usort($buyer_count, 'my_sort_function3');
        $i = 0;
        
        $data = $this->user_header_data();
        $data['buyer_views'] = $buyer_count;
        $this->load->view('internal/Dashboard/buyer_count_view',$data);


    }


   

     
}
