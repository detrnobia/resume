<?php

namespace App\Controllers;

use App\Models\ProfileModel;
use App\Models\EducationModel;
use App\Models\OrgModel;
use App\Models\ProjectModel;
use App\Models\WorkAwardModel;


class Home extends BaseController
{
    public function index()
    {
        // Load the resume view
        return view('resume', $data);
    }
   public function _construct()
    {
        $profileModel = new ProfileModel();
        $projectModel = new ProjectModel();
        $orgModel = new OrgModel();
        $workAwardModel = new WorkAwardModel();
        $educationModel = new EducationModel();

        $data['contact'] = $profileModel->find(1); // or by user/session
        $data['projects'] = $projectModel->where('resume_id', 1)->findAll();
        $data['Orgs'] = $o->where('resume_id', 1)->findAll();
        $data['work_awards'] = $workAwardModel->where('resume_id', 1)->findAll();
        $data['education'] = $educationModel->findAll(); // Assuming EducationModel is defined similarly

        return view('edit_profile', $data);
    }

    public function update()
    {
        // Handle form submission, file upload, and update all tables
        // Example for resume:
        $profileModel = new ProfileModel();
        $profileModel->update(1, [
            'name' => $this->request->getPost('name'),
            'title' => $this->request->getPost('title'),
            'photo' => $this->request->getFile('photo')->store(), // Handle file upload
            'email' => $this->request->getPost('email'),
            'phone' => $this->request->getPost('phone'),
            'address' => $this->request->getPost('address'),
            'lang' => $this->request->getPost('lang'),
        ]);

        $educationModel = new EducationModel();
        $educationModel->update(1, [
            'degree' => $this->request->getPost('degree'),
            'institution' => $this->request->getPost('institution'),
            'year' => $this->request->getPost('year'),
        ]);

        $orgModel = new OrgModel();
        $orgs = $this->request->getPost('orgs'); // Assuming orgs is an array of data
        foreach ($orgs as $org) {
            $orgModel->update($org['id'], [
                'name' => $org['name'],
                'role' => $org['role'],
                'year' => $org['year'],
                'description' => $org['description'],
                'resume_id' => 1, // Assuming resume_id is 1
            ]);
        }
        $projectModel = new ProjectModel();
        $project = $this->request->getPost('projects'); // Assuming projects is an array of data
        foreach ($projects as $project) {
            $projectModel->update($project['id'], [
                'name' => $project['name'],
                'role' => $project['role'],
                'year' => $project['year'],
                'description' => $project['description'],
                'resume_id' => 1, // Assuming resume_id is 1
            ]);
        }
        $workAwardModel = new WorkAwardModel();
        $awards = $this->request->getPost('awards'); // Assuming awards is an array of data
        foreach ($awards as $award) {
            $workAwardModel->update($award['id'], [
                'name' => $award['name'],
                'year' => $award['year'],
                'description' => $award['description'],
                'resume_id' => 1, // Assuming resume_id is 1
            ]);
        }

        // Repeat for projects, orgs, awards (loop through posted arrays)
        return redirect()->to('/resume');
    }
}
