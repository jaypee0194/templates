<?php namespace App\Controllers;
  
use CodeIgniter\Controller;
use App\Models\UserModel;

class Dashboard extends Controller
{
    public function index()
    {
        $model = new UserModel();
        $data['users'] = $model->findAll();

        $session = session();
       return view ('Dashboard/dashboard' ,$data); // echo "Welcome back, ".$session->get('user_name');
    }
    public function edit($id = null){
        $user = new UserModel();
        $data['users'] = $user->find($id);
        return view('Dashboard/edit', $data);
    }
    public function update($id = null){

        $user = new UserModel();
        $data = [
            'user_name' => $this->request->getPost('name'),
            'user_email' => $this->request->getPost('email'),
            // 'user_password' => $this->request->getPost('password'),
            'user_password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT)
        ];
        $user->update($id, $data);
        return redirect()->to(base_url('Dashboard/dashboard'))->with('status','Successfully updated data');
     }
    public function delete($id = null){
        $user = new UserModel();
        $user->delete($id);
        return redirect()->back()->with('status','Successfully deleted data'); 
    }
}