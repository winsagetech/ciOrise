<?php

class Inventory extends MY_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->view_data = array();
        $this->load->model('inventory/M_inventory');
        $this->load->model('product/M_product');
        $this->load->model('category/M_category');
    }

    function display_items()
    {
        $this->load->library('session');
        $this->load->helper('url');
        if (! $this->session->userdata('user')) {
            redirect(base_url());
        } else {
            $this->view_data['category_types'] = $this->populate_model_select();
            
            $this->view_data['items'] = $this->M_product->get_all_items();
            $this->view_data['header'] = 'Products';
            $this->view_data['page_desc'] = 'List';
            $this->view_data['content_view'] = 'inventory/inventory_view';
            $this->template->admin_template($this->view_data);
        }
    }

    function populate_model_select()
    {
        $item_types = $this->M_category->get_category_types();
        $options = '';
        if (count($item_types)) {
            foreach ($item_types as $key => $value) {
                $options .= "<option value='{$value->category}'> {$value->category} </option>";
            }
        }
        return $options;
    }

    
    function upload_image($srno)
    {
        if (isset($_FILES["image"])) {
            $extension = explode('.', $_FILES['image']['name']);
            $new_name = $srno . '.' . $extension[1];
            $destination = './upload/subcats/' . $new_name;
            unlink($destination);
            move_uploaded_file($_FILES['image']['tmp_name'], $destination);
            return $new_name;
        }
    }

    public function item_add()
    {
        $data = array(
            'srno' => $this->input->post('sr_num'),
            'category' => $this->input->post('item_model'),
            'name' => $this->input->post('item_name'),
            'image' => $this->upload_image($this->input->post('sr_num'))
        );
        $insert = $this->M_product->item_add($data);
        
        echo json_encode(array(
            "status" => TRUE
        ));
    }

    public function item_delete($id)
    {
        $this->M_product->delete_item_by_id($id);
        echo json_encode(array(
            "status" => TRUE
        ));
    }

    public function ajax_edit_item($id)
    {
        $data = array();
        $data['item'] = $this->M_product->get_item_by_id($id);
        echo json_encode($data);
    }

    public function item_update()
    {
        if (($_FILES['image']['tmp_name']!='')) {
            $data = array(
                'srno' => $this->input->post('sr_num'),
                'category' => $this->input->post('item_model'),
                'name' => $this->input->post('item_name'),
                'image' => $this->upload_image($this->input->post('sr_num'))
            );
        } else {
            $data = array(
                'srno' => $this->input->post('sr_num'),
                'category' => $this->input->post('item_model'),
                'name' => $this->input->post('item_name')
                
            );
        }
        
        
        $this->M_product->item_update(array(
            'srno' => $this->input->post('sr_num')
        ), $data);
        echo json_encode(array(
            "status" => TRUE
        ));
    }
}
?>