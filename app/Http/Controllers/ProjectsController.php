<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProjectRequest;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    //  Lista todos os projetos
    public function getProjects(){
        $projects = Project::all();
        return $projects;
    }
    
    //  mostra um curso especifico
    public function showProject(Request $req){
        $project = Project::find($req->id);
        
        if(!$project){
            return response([
                "Project not found"
            ], 404);
        }

        return $project;
    }

    // cria um novo projeto
    public function createProject(CreateProjectRequest $req){


        $project = Project::create([
            'project' => $req->project,
            'client' => $req->client,
            'date_initial' => $req->date_initial,
            'deadline' => $req->deadline,
            'budget' => $req->budget,
            'status' => 1,
            'situacao' => "Em dia",
        ]);

        return $project;
    }

    // corrigir editar projeto
    public function updateProject(Request $req){
       
        $project = Project::find($req->id)->update(
            [
                'project' => $req->project,
                'client' => $req->client,
                'date_initial' => $req->date_initial,
                'deadline' => $req->deadline,
                'budget' => $req->budget,
                'status' => $req->status,
                'situacao' => $req->situacao ,
            ]
        );

        // if(!$project){
        //     return response(["Project not found"], 404);
        // }

        // $project->project  = $req->project  ;
        // $project->client   = $req->client   ;
        // $project->deadline = $req->deadline ;
        // $project->budget   = $req->budget   ;
        // $project->status   = $req->status   ;
        // $project->situacao = $req->situacao  ;
        // $project->date_initial = $req->date_initial ;

        // $project->save();

        return $project;
    }

    // deleta um projeto
    public function deleteProject(Request $req){
        $project = Project::find($req->id);
        if(!$project){
            return response(['Project not found'], 404);
        }
        $project->delete();
        return response([
            'Project deleted'
        ], 200);
    }
}
