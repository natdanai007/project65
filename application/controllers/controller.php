<?php
class controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form', 'url');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('m_admin'); //
        $this->load->model('m_customer'); //
        $this->load->model('m_login'); //
        $this->load->model('m_splogin'); //
        $this->load->model('m_adminlogin'); //
        $this->load->model('m_register'); //
        $this->load->model('m_spregister'); //
        $this->load->model('m_sp'); //
        $this->load->model('m_system'); //
        $this->load->model('m_reserve');
        $this->load->model('usersp');
    }


    function add()
    {

        //Form for adding user data
        $this->load->view('add');
    }
    public function dbhome()
    {
        $data['system'] = $this->m_system->all();
        $this->load->view('dbhome', $data);
    }
    public function pagelogin()
    {
        $this->load->view('pagelogin');
    }
    public function adminlogin()
    {
        $this->load->view('form_adminlogin');
    }
    public function form_adminlogin()
    {
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('form_adminlogin');
        } else {
            $get_data['username'] = $_REQUEST['username'];
            $get_data['password'] = $_REQUEST['password'];
            //$this->load->view('msg_login',$data);
            //**/
            $data = $this->m_adminlogin->adminlogin($get_data);
            if ($data) { //ตรวจสอบว่าพบข้อมูล username password
                foreach ($data as $row) {
                    $userdata = array(

                        'username' => $row->ad_user,
                        'name' => $row->ad_name
                    );
                    $this->session->set_userdata($userdata);
                }
                $this->load->view('form_pageadmin');
            } else { //ไม่พบข้อมูลใน database
                $data['error'] = "username or password incorrect";
                $this->load->view('form_adminlogin', $data);
            }
            /** */
        }
    }
    public function pageadmin()
    {
        $this->load->view('form_pageadmin');
    }
   
    public function login()
    {
        $this->load->view('form_login');
    }
    //customer//
    public function authen()
    {
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('form_login');
        } else {
            $get_data['username'] = $_REQUEST['username'];
            $get_data['password'] = $_REQUEST['password'];
            //$this->load->view('msg_login',$data);
            //**/
            $data = $this->m_login->login($get_data);
            if ($data) { //ตรวจสอบว่าพบข้อมูล username password
                foreach ($data as $row) {
                    $userdata = array(
                        'cusid' => $row->cus_id,
                        'username' => $row->cus_user,
                        'name' => $row->cus_name
                    );
                    $this->session->set_userdata($userdata);
                }
                redirect('controller/form_homepage');
                //$this->load->view('form_homepage');
            } else { //ไม่พบข้อมูลใน database
                $data['error'] = "username or password incorrect";
                $this->load->view('form_login', $data);
            }
            /** */
        }
    }
    public function form_homepage()
    {
        $this->load->view('form_homepage');
    }
    public function splogin()
    {
        $this->load->view('form_splogin');
    }
    public function sppage()
    {
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('form_splogin');
        } else {
            $get_data['username'] = $_REQUEST['username'];
            $get_data['password'] = $_REQUEST['password'];
            //$this->load->view('msg_login',$data);
            //**/
            $data = $this->m_splogin->login($get_data);
            if ($data) { //ตรวจสอบว่าพบข้อมูล username password
                foreach ($data as $row) {
                    $userdata = array(
                        'username' => $row->sp_user,
                        'name' => $row->sp_name
                    );
                }
                $this->load->view('form_sppage');
            } else { //ไม่พบข้อมูลใน database
                $data['error'] = "username or password incorrect";
                $this->load->view('form_splogin', $data);
            }
            /** */
        }
    }
    public function logout()
    {
        $userdata = array('username', 'password');
        $this->session->unset_userdata($userdata);
        $this->load->view('form_login');
    }
    //=============================================================================
    public function form_register()
    {
        $this->load->view('form_register');
    }

    public function form_validation()
    {
        $this->form_validation->set_rules('id', 'id', 'required');
        $this->form_validation->set_rules('tel', 'tel', 'required');
        $this->form_validation->set_rules('address', 'address', 'required');
        $this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required|min_length[8]|max_length[25]');
        $this->form_validation->set_rules('password2', 'password2 Confirmation', 'required|min_length[8]|matches[password]');

        $this->form_validation->set_message('required', '{field} is required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('form_register');
        } else {
            $data['id'] = $_REQUEST['id'];
            $data['tel'] = $_REQUEST['tel'];
            $data['email'] = $_REQUEST['email'];
            $data['address'] = $_REQUEST['address'];
            $data['name'] = $_REQUEST['name'];
            $data['username'] = $_REQUEST['username'];
            $data['password'] = $_REQUEST['password'];
            $data['password2'] = $_REQUEST['password2'];

            $success = $this->m_register->insert($data);
            if ($success) {
                $data['msg'] = "register complete";
                $data['rec'] = $this->m_register->select();
            } else
                $data['msg'] = "register error";
            $this->load->view('form_login', $data);
        }
    }
    public function form_spregister()
    {
        $this->load->view('form_spregister');
    }


    public function form_validationsp()
    {

        if ($this->form_validation->run() == FALSE) {

            $this->load->view('form_splogin');
        } else {
            $data['id'] = $_REQUEST['id'];
            $data['tel'] = $_REQUEST['tel'];
            $data['email'] = $_REQUEST['email'];
            $data['address'] = $_REQUEST['address'];
            $data['name'] = $_REQUEST['name'];
            $data['bankname'] = $_REQUEST['bankname'];
            $data['banknumber'] = $_REQUEST['banknumber'];
            $data['picture'] = $_REQUEST['picture'];
            $data['vaccine'] = $_REQUEST['vaccine'];
            $data['aptitude'] = $_REQUEST['aptitude'];
            $data['username'] = $_REQUEST['username'];
            $data['password'] = $_REQUEST['password'];
            $data['password2'] = $_REQUEST['password2'];
            $success = $this->UserSp->insert($data);
            if ($success) {
                $data['msg'] = "register complete";
                $data['rec'] = $this->UserSp->select();
                //var_dump($data['aptitude']);
            } else
                $data['msg'] = "register error";
            //var_dump($data['aptitude']);
            $this->load->view('form_splogin', $data);
        }
        if ($this->input->post('userspSubmit')) {
            //Check whether user upload picture
            if (!empty($_FILES['picture']['name'])) {
                $config['upload_path'] = 'img';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = $_FILES['picture']['name'];

                //Load upload library and initialize configuration
                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                if ($this->upload->do_upload('picture')) {
                    $uploadData = $this->upload->data();
                    $sp_picture = $uploadData['file_name'];
                } else {
                    $picture = '';
                }
            } else {
                $picture = '';
            }

            $userspData = array(
                'sp_id' => $this->input->post('id'),
                'sp_name' => $this->input->post('name'),
                'sp_tel' => $this->input->post('tel'),
                'sp_email' => $this->input->post('email'),
                'sp_address' => $this->input->post('address'),
                'sp_bankname' => $this->input->post('bankname'),
                'sp_banknumber' => $this->input->post('banknumber'),
                'sp_vaccine' => $this->input->post('vaccine'),
                'sp_aptitude' => $this->input->post('aptitude[]'),
                'sp_user' => $this->input->post('username'),
                'sp_pass' => $this->input->post('password'),
                'sp_picture' => $sp_picture
            );

            $userspData['sp_aptitude'] = implode(",", $userspData['sp_aptitude']);

            //Pass user data to model
            $insertUserSpData = $this->usersp->insert($userspData);
        }
    }

    public function form_validationat()
    {
        $this->form_validation->set_rules('id', 'id', 'required');
        $this->form_validation->set_rules('name', 'name', 'required');
    }

    //============================================================================
    public function form_admin()
    {

        $this->load->view('form_admin');
    }
    public function form_validationadmin()
    {
        $this->form_validation->set_rules('id', 'id', 'required');
        $this->form_validation->set_rules('tel', 'tel', 'required');
        $this->form_validation->set_rules('address', 'address', 'required');
        $this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required|min_length[8]|max_length[25]');
        $this->form_validation->set_message('required', '{field} is required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('form_admin');
        } else {
            $data['id'] = $_REQUEST['id'];
            $data['tel'] = $_REQUEST['tel'];
            $data['email'] = $_REQUEST['email'];
            $data['address'] = $_REQUEST['address'];
            $data['name'] = $_REQUEST['name'];
            $data['username'] = $_REQUEST['username'];
            $data['password'] = $_REQUEST['password'];
            $success = $this->m_admin->insert($data);
            $this->load->view('show_output', $data);
        }
    }

    public function main()
    {
        $data['admin'] = $this->m_admin->all();
        $this->load->view('main', $data);
    }
    public function insert()
    {

        $this->load->view('form_admin');
    }
    public function insert2()
    {
        $this->form_validation->set_rules('id', 'id', 'required');
        $this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_rules('tel', 'tel', 'required');
        $this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('address', 'address', 'required');
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');

        $this->form_validation->set_message('required', '{field} is required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('form_admin');
        } else {
            $data['id'] = $_REQUEST['id'];
            $data['tel'] = $_REQUEST['tel'];
            $data['email'] = $_REQUEST['email'];
            $data['address'] = $_REQUEST['address'];
            $data['name'] = $_REQUEST['name'];
            $data['username'] = $_REQUEST['username'];
            $data['password'] = $_REQUEST['password'];
            $this->m_admin->insert($data);
            $data['admin'] = $this->m_admin->all();
            $this->load->view('main', $data);
        }
    }
    public function admin_delete()
    {
        $ad_id = $_REQUEST['ad_id'];
        $this->m_admin->delete($ad_id);
        $data['admin'] = $this->m_admin->all();
        $this->load->view('main', $data);
    }

    public function admin_save()
    {
        $data['id'] = $_REQUEST['id'];
        $data['tel'] = $_REQUEST['tel'];
        $data['email'] = $_REQUEST['email'];
        $data['address'] = $_REQUEST['address'];
        $data['name'] = $_REQUEST['name'];
        $data['username'] = $_REQUEST['username'];
        $data['password'] = $_REQUEST['password'];
        $this->m_admin->insert($data);
        $data['admin'] = $this->m_admin->all();
        $this->load->view('main', $data);
    }


    public function admin_edit()
    {
        $ad_id = $_REQUEST['ad_id'];
        $data['admin'] = $this->m_admin->edit($ad_id);
        $this->load->view('form_edit', $data);
    }
    public function admin_update()
    {
        $data['id'] = $_REQUEST['id'];
        $data['tel'] = $_REQUEST['tel'];
        $data['email'] = $_REQUEST['email'];
        $data['address'] = $_REQUEST['address'];
        $data['name'] = $_REQUEST['name'];
        $data['username'] = $_REQUEST['username'];
        $data['password'] = $_REQUEST['password'];

        $this->m_admin->update($data);
        $data['admin'] = $this->m_admin->all();
        $this->load->view('main', $data);
    }
    //customer data
    public function form_customer()
    {

        $this->load->view('form_customer');
    }
    public function form_validationcus()
    {
        $this->form_validation->set_rules('id', 'id', 'required');
        $this->form_validation->set_rules('tel', 'tel', 'required');
        $this->form_validation->set_rules('address', 'address', 'required');
        $this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required|min_length[8]|max_length[25]');
        $this->form_validation->set_message('required', '{field} is required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('form_customer');
        } else {
            $data['id'] = $_REQUEST['id'];
            $data['tel'] = $_REQUEST['tel'];
            $data['email'] = $_REQUEST['email'];
            $data['address'] = $_REQUEST['address'];
            $data['name'] = $_REQUEST['name'];
            $data['username'] = $_REQUEST['username'];
            $data['password'] = $_REQUEST['password'];
            $success = $this->m_customer->insert($data);
            $this->load->view('show_cusoutput', $data);
        }
    }

    public function datacustomer()
    {
        $data['customer'] = $this->m_customer->all();
        $this->load->view('datacustomer', $data);
    }
    public function insertcus()
    {

        $this->load->view('form_customer');
    }
    public function insert3()
    {
        $this->form_validation->set_rules('id', 'id', 'required');
        $this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_rules('tel', 'tel', 'required');
        $this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('address', 'address', 'required');
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');

        $this->form_validation->set_message('required', '{field} is required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('form_customer');
        } else {
            $data['id'] = $_REQUEST['id'];
            $data['tel'] = $_REQUEST['tel'];
            $data['email'] = $_REQUEST['email'];
            $data['address'] = $_REQUEST['address'];
            $data['name'] = $_REQUEST['name'];
            $data['username'] = $_REQUEST['username'];
            $data['password'] = $_REQUEST['password'];
            $this->m_customer->insert($data);
            $data['customer'] = $this->m_customer->all();
            $this->load->view('datacustomer', $data);
        }
    }
    public function cus_delete()
    {
        $cus_id = $_REQUEST['cus_id'];
        $this->m_customer->delete($cus_id);
        $data['customer'] = $this->m_customer->all();
        $this->load->view('datacustomer', $data);
    }

    public function cus_save()
    {
        $data['id'] = $_REQUEST['id'];
        $data['tel'] = $_REQUEST['tel'];
        $data['email'] = $_REQUEST['email'];
        $data['address'] = $_REQUEST['address'];
        $data['name'] = $_REQUEST['name'];
        $data['username'] = $_REQUEST['username'];
        $data['password'] = $_REQUEST['password'];
        $this->m_customer->insert($data);
        $data['customer'] = $this->m_customer->all();
        $this->load->view('datacustomer', $data);
    }

    public function cus_edit()
    {
        $cus_id = $_REQUEST['cus_id'];
        $data['customer'] = $this->m_customer->edit($cus_id);
        $this->load->view('form_cusedit', $data);
    }
    public function cus_update()
    {
        $data['id'] = $_REQUEST['id'];
        $data['tel'] = $_REQUEST['tel'];
        $data['email'] = $_REQUEST['email'];
        $data['address'] = $_REQUEST['address'];
        $data['name'] = $_REQUEST['name'];
        $data['username'] = $_REQUEST['username'];
        $data['password'] = $_REQUEST['password'];

        $this->m_customer->update($data);
        $data['customer'] = $this->m_customer->all();
        $this->load->view('datacustomer', $data);
    }
    public function form_validationserviceprovider()
    {
        $this->form_validation->set_rules('id', 'id', 'required');
        $this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_rules('tel', 'tel', 'required');
        $this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('address', 'address', 'required');
        $this->form_validation->set_rules('picture', 'picture', 'required');
        $this->form_validation->set_rules('card', 'card', 'required');
        $this->form_validation->set_rules('banknumber', 'banknumber', 'required');
        $this->form_validation->set_rules('vaccine', 'vaccine', 'required');
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required|min_length[8]|max_length[25]');
        $this->form_validation->set_message('required', '{field} is required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('form_customer');
        } else {
            $data['id'] = $_REQUEST['id'];
            $data['name'] = $_REQUEST['name'];
            $data['tel'] = $_REQUEST['tel'];
            $data['email'] = $_REQUEST['email'];
            $data['address'] = $_REQUEST['address'];
            $data['picture'] = $_REQUEST['picture'];
            $data['card'] = $_REQUEST['card'];
            $data['banknumber'] = $_REQUEST['banknumber'];
            $data['vaccine'] = $_REQUEST['vaccine'];
            $data['username'] = $_REQUEST['username'];
            $data['password'] = $_REQUEST['password'];
            $success = $this->m_customer->insert($data);
            $this->load->view('show_cusoutput', $data);
        }
    }
    public function form_tablesp()
    {
        $data['service_provider'] = $this->m_sp->all();
        $this->load->view('form_tablesp', $data);
    }
    public function form_detailsp()
    {
        $data['service_provider'] = $this->m_sp->all();
        $this->load->view('form_detailsp', $data);
    }
    public function insertsp()
    {

        $this->load->view('form_serviceprovider');
    }

    public function insert4()
    {
        $this->form_validation->set_rules('id', 'id', 'required');
        $this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_rules('tel', 'tel', 'required');
        $this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('address', 'address', 'required');
        $this->form_validation->set_rules('picture', 'picture', 'required');
        $this->form_validation->set_rules('card', 'card', 'required');
        $this->form_validation->set_rules('banknumber', 'banknumber', 'required');
        $this->form_validation->set_rules('vaccine', 'vaccine', 'required');
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required|min_length[8]|max_length[25]');
        $this->form_validation->set_message('required', '{field} is required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('form_serviceprovider');
        } else {
            $data['id'] = $_REQUEST['id'];
            $data['name'] = $_REQUEST['name'];
            $data['tel'] = $_REQUEST['tel'];
            $data['email'] = $_REQUEST['email'];
            $data['address'] = $_REQUEST['address'];
            $data['picture'] = $_REQUEST['picture'];
            $data['card'] = $_REQUEST['card'];
            $data['banknumber'] = $_REQUEST['banknumber'];
            $data['vaccine'] = $_REQUEST['vaccine'];
            $data['username'] = $_REQUEST['username'];
            $data['password'] = $_REQUEST['password'];
            $this->m_sp->insert($data);
            $data['service_provider'] = $this->m_sp->all();
            $this->load->view('form_tablesp', $data);
        }
    }
    public function sp_delete()
    {
        $sp_id = $_REQUEST['sp_id'];
        $this->m_sp->delete($sp_id);
        $data['service_provider'] = $this->m_sp->all();
        $this->load->view('form_tablesp', $data);
    }

    public function sp_save()
    {
        $data['id'] = $_REQUEST['id'];
        $data['name'] = $_REQUEST['name'];
        $data['tel'] = $_REQUEST['tel'];
        $data['email'] = $_REQUEST['email'];
        $data['address'] = $_REQUEST['address'];
        $data['picture'] = $_REQUEST['picture'];
        $data['card'] = $_REQUEST['card'];
        $data['banknumber'] = $_REQUEST['banknumber'];
        $data['vaccine'] = $_REQUEST['vaccine'];
        $data['username'] = $_REQUEST['username'];
        $data['password'] = $_REQUEST['password'];
        $this->m_sp->insert($data);
        $data['service_provider'] = $this->m_sp->all();
        $this->load->view('form_serviceprovider', $data);
    }

    public function sp_edit()
    {
        $sp_id = $_REQUEST['sp_id'];
        $data['service_provider'] = $this->m_sp->edit($sp_id);
        $this->load->view('form_spedit', $data);
    }
    public function sp_update()
    {
        $data['id'] = $_REQUEST['id'];
        $data['name'] = $_REQUEST['name'];
        $data['tel'] = $_REQUEST['tel'];
        $data['email'] = $_REQUEST['email'];
        $data['aptitude'] = $_REQUEST['aptitude'];
        $data['address'] = $_REQUEST['address'];
        $data['picture'] = $_REQUEST['picture'];
        $data['bankname'] = $_REQUEST['bankname'];
        $data['banknumber'] = $_REQUEST['banknumber'];
        $data['vaccine'] = $_REQUEST['vaccine'];
        $data['username'] = $_REQUEST['username'];
        $data['password'] = $_REQUEST['password'];
        $this->m_sp->update($data);
        $data['service_provider'] = $this->m_sp->all();
        $this->load->view('form_tablesp', $data);
    }
    //system
    public function form_tablesystem()
    {
        $data['system'] = $this->m_system->all();
        $this->load->view('form_tablesystem', $data);
    }
    public function insertsystem()
    {

        $this->load->view('form_system');
    }
    public function insert5()
    {
        $this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_rules('address', 'address', 'required');
        $this->form_validation->set_rules('tel', 'tel', 'required');
        $this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('account', 'account', 'required');
        $this->form_validation->set_rules('bank', 'bank', 'required');
        $this->form_validation->set_rules('manage', 'manage', 'required');
        $this->form_validation->set_message('required', '{field} is required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('form_system');
        } else {
            $data['name'] = $_REQUEST['name'];
            $data['address'] = $_REQUEST['address'];
            $data['tel'] = $_REQUEST['tel'];
            $data['email'] = $_REQUEST['email'];
            $data['account'] = $_REQUEST['account'];
            $data['bank'] = $_REQUEST['bank'];
            $data['manage'] = $_REQUEST['manage'];
            $this->m_system->insert($data);
            $data['system'] = $this->m_system->all();
            $this->load->view('form_tablesystem', $data);
        }
    }
    public function st_delete()
    {
        $st_name = $_REQUEST['st_name'];
        $this->m_system->delete($st_name);
        $data['system'] = $this->m_system->all();
        $this->load->view('form_tablesystem', $data);
    }

    public function st_save()
    {
        $data['name'] = $_REQUEST['name'];
        $data['address'] = $_REQUEST['address'];
        $data['tel'] = $_REQUEST['tel'];
        $data['email'] = $_REQUEST['email'];
        $data['account'] = $_REQUEST['account'];
        $data['bank'] = $_REQUEST['bank'];
        $data['manage'] = $_REQUEST['manage'];
        $this->m_system->insert($data);
        $data['system'] = $this->m_system->all();
        $this->load->view('form_tablesystem', $data);
    }

    public function st_edit()
    {
        $st_name = $_REQUEST['st_name'];
        $data['system'] = $this->m_system->edit($st_name);
        $this->load->view('form_system', $data);
    }
    public function st_update()
    {
        $data['name'] = $_REQUEST['name'];
        $data['address'] = $_REQUEST['address'];
        $data['tel'] = $_REQUEST['tel'];
        $data['email'] = $_REQUEST['email'];
        $data['account'] = $_REQUEST['account'];
        $data['bank'] = $_REQUEST['bank'];
        $data['manage'] = $_REQUEST['manage'];
        $this->m_system->update($data);
        $data['system'] = $this->m_system->all();
        $this->load->view('form_tablesystem', $data);
    }

    public function form_reserve()
    {
        $data['id'] = $_REQUEST['id'];
        $data['svname'] = $_REQUEST['svname'];
        $data['period'] = $_REQUEST['period'];
        $data['datetime'] = $_REQUEST['datetime'];
        $data['address'] = $_REQUEST['address'];
        $data['total'] = $_REQUEST['total'];
        $data['cusid'] = $_REQUEST['cusid'];
        $data['spid'] = $_REQUEST['spid'];
        $this->m_reserve->insert($data);
        $data['reserve'] = $this->m_reserve->select();
      
        $this->load->view('ConfirmReserve', $data);
    }
    public function form_map()
    { 
        $data = array();
        $data['service_provider'] = $this->m_sp->getRows();
        $this->load->view('form_map' , $data);
    }
    public function pay()
    {
        $this->load->view('pay');
    }


    public function sp(){
      
        $this->load->view('form_sp');
    }
}
