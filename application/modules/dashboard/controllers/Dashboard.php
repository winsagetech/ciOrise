<?php

class Dashboard extends MY_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->module(['product', 'login', 'category', 'blog', 'subscribers', 'inventory', 'gallery', 'orders' ]);
 
        $this->load->model('category/M_category');
        $this->load->model('product/M_product');
        $this->load->model('blog/M_blog');
        $this->load->model('orders/M_orders');
        $this->load->model('subscribers/M_subscribers');
    }

    function index()
    {
        $this->load->library('session');
        $this->load->helper('url');
        if (! $this->session->userdata('user')) {
            redirect(base_url());
        } else if ($this->session->userdata('user') != "admin") {
            redirect('dashboard/inventory');
        } else {
            
            $data['header'] = 'Dashboard';
            $data['page_desc'] = 'Overalls';
            $data['content_view'] = 'dashboard/dashboard_v';
            $data['item_count'] = $this->M_product->get_items_count();
            $this->template->admin_template($data);
        }
    }

    function inventory()
    {
        $this->inventory->display_items();
    }

    function categories()
    {
        $this->category->display_category();
    }
    
    function gallery($product_id)
    {
        $this->gallery->manage_product_gallery($product_id);
    }

    function blogs()
    {
        $this->blog->display_blog();
    }

    function subscribers()
    {
        $this->subscribers->display_subscribers();
    }
    
    function orders()
    {
        $this->orders->display_orders();
    }
}

?>