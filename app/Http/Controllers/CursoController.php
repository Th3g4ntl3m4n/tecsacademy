<?php

namespace App\Http\Controllers;

use App\Models\curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    //Formulario de creacion de curso

public function createNewCourse (Request $request) {

    //Tomamos el usuario logueado
    $teacher = auth()->id();

// llenamos el formulario 
    $new_curso = new curso();  
    $new_curso->type = 1;     
    $new_curso->teacher = $teacher;
    $new_curso->estado = 0;   
    $new_curso->schedule = $request ->schedule; 
    $new_curso->url = $request ->url;  
    $new_curso->fecha_inicio = $request ->fecha_inicio;  
    $new_curso->fecha_fin = $request ->fecha_fin;
    $new_curso->size = 10;

    $new_curso->save();

    return redirect()->route('satageTeacher');
}

        
}
