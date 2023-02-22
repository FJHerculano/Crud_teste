<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Rotas do projeto

Todas as rotas foram feitas no arquivo API da pasta routes do laravel 


### Buscando todos os dados listados.
- Route::get('/projects', [ProjectsController::class, 'getProjects']);
ou  http://127.0.0.1:8000/api/projects para realização de testes.

### Buscando um dado especifico.
- Route::get('/projects/{id}', [ProjectsController::class, 'showProject']);
ou http://127.0.0.1:8000/api/projects/{id} para realização de testes.
- 
### Criando um dado especifico.
- Route::post('/projects', [ProjectsController::class, 'createProject']);
ou http://127.0.0.1:8000/api/projects para realização de testes.

### Editando um dado especifico.
- Route::patch('/projects/{id}', [ProjectsController::class, 'updateProject']);
ou http://127.0.0.1:8000/api/projects/{id} Para realizaçaõ de testes.

### Deletando um dado especifico.
- Route::delete('/projects/{id}', [ProjectsController::class, 'deleteProject']);
ou http://127.0.0.1:8000/api/projects/{id} Para realizaçaõ de testes.

