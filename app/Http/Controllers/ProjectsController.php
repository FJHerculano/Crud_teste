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

        // A situação vai sempre ser cadastrada como default, mas ela vai ser editada sempre no front
        // O status sempre será true por default.
        if($req->data_initial <= $req->deadline){
            $situacao = "Em dia";
        }else{
            $situacao = "Cuidado";
        }

        $project = Project::create([
            'project' => $req->project,
            'client' => $req->client,
            'date_initial' => $req->date_initial,
            'deadline' => $req->deadline,
            'budget' => $req->budget,
            'status' => 1,
            'situacao' => $situacao,
        ]);

        return $project;
    }

    // Editar projeto
    public function updateProject(Request $req){
       
        $project = Project::find($req->id);

        if(!$project){
            return response(["Project not found"], 404);
        }
        
        $req->project  ? $project->project  = $req->project  : null;
        $req->client   ? $project->client   = $req->client   : null;
        $req->deadline ? $project->deadline = $req->deadline : null;
        $req->budget   ? $project->budget   = $req->budget   : null;
        $req->status   ? $project->status   = $req->status   : null;
        $req->situacao ? $project->situacao = $req->situacao : null;
        $req->date_initial ? $project->date_initial = $req->date_initial : null;        

        $project->save();

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
