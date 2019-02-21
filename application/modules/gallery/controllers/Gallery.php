<?php

class Gallery extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('gallery/M_gallery');
        $this->load->model('product/M_product');        
    }

    public function manage_product_gallery($product_id){
        $this->load->library('session');
        $this->load->helper('url');
        if (!$this->session->userdata('user')) {
            echo" please log in";
        } else {
            $product = $this->M_product->get_item_by_id($product_id);
            $data['header'] = $product->name;
            $data['page_desc'] = 'Image Gallery';
            $data['product_id'] = $product_id;
            
            $gallery_path = APPPATH . '../upload/products/' . $product_id;            
            $data['images'] = scandir($gallery_path, 1);
        
            $data['content_view'] = 'gallery/gallery_view2';            
            $this->template->admin_template($data);
        }
    }
    
    
    function upload_image($srno)
    {
        if (!empty($_FILES)) {
            $tempFile = $_FILES['file']['tmp_name'];                        
            $targetFile = './upload/products/' . $srno . '/' . $_FILES['file']['name'];
            unlink($targetFile);
            move_uploaded_file($tempFile, $targetFile);            
        }
    }
}

?>