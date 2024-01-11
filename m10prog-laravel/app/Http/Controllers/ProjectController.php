<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function add() {
        // Maak een model aan
        $model = new Project();
        // definieer de velden
        $model->titel = 'HET WERKT';
        $model->img = 'https://www.npo3-senavideo-npo3.apps.senavideo.cluster.chp4.io/uploads/media_item/media_item/236/30/moffel-1520347361.jpg';
        $model->active = true;
        // sla het model op
        $model->save();

        return $model->titel; $model->active;
    }

    public function index() {
        return view ('project');
    }

    public function show(Project $show)
    {
        return view('project.show', ['project'=>$show]);
    }

}


