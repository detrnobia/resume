<?php
namespace App\Controllers;
use App\Models\ProfileModel;

class ProfileController extends BaseController
{
    public function index()
    {
        $model = new ProfileModel();
        $profile = $model->first(); // Get the first profile row
        return view('resume', ['profile' => $profile]);
    }

    public function edit()
    {
        $model = new ProfileModel();
        $profile = $model->first();
        return view('editResume', ['profile' => $profile]);
    }

    public function update()
{
    $model = new \App\Models\ProfileModel();

    $photo = $this->request->getFile('photo');
    $photoName = '';

    if ($photo && $photo->isValid() && !$photo->hasMoved()) {
        $photoName = $photo->getRandomName();
        $photo->move('assets/images', $photoName);
    }

    $data = [
        'name'    => $this->request->getPost('name'),
        'title'   => $this->request->getPost('title'),
        'email'   => $this->request->getPost('email'),
        'phone'   => $this->request->getPost('phone'),
        'address' => $this->request->getPost('address'),
        'lang'    => $this->request->getPost('lang'),
    ];

    if ($photoName !== '') {
        $data['photo'] = 'assets/images/' . $photoName;
    }

    $model->update(1, $data);
    return redirect()->to('/');
}

}