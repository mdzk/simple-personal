<?php

namespace App\Controllers;
use App\Models\UserModel;
use App\Models\EducationModel;
use App\Models\ExperienceModel;
use App\Models\ProjectModel;

class Home extends BaseController
{
    public function index()
    {
        $user       = new UserModel();
        $education  = new EducationModel();
        $experience = new ExperienceModel();
        $project    = new ProjectModel();
        $data = [
            'user'       => $user->first(),
            'education'  => $education->findAll(),
            'experience' => $experience->findAll(),
            'project'    => $project->findAll(),
        ];
        return view('home', $data);
    }
}