<?php

use App\Http\Controllers\Admin\CursoController;
use App\Http\Controllers\Admin\EstudienteController;
use App\Http\Controllers\Admin\GradoController;
use App\Http\Controllers\Admin\InscripcionController;
use App\Http\Controllers\Admin\PadreController;
use App\Http\Controllers\Admin\ProfesorController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('login');
});
Auth::routes();
// rauta para ejecutar comando artisan desde la web
Route::get('artisan/{comando}/{contra}', function ($comando, $contra) {
    if ($contra === 'Taylor110eAA.') {
        // ejemplo www.decodev.net/cmd/migrate
        Artisan::call($comando);
        dd(Artisan::output());
    } else {
        echo 'NO ACCESO';
    }
});

Route::get('estudiante', [EstudienteController::class, 'boletinConsulta'])->name('estudiantes.boletinConsulta');

Route::group(['prefix' => "admin", 'namespace' => 'App\Http\Controllers\Admin', 'middleware' => ['auth', 'AdminPanelAccess']], function () {

    Route::get('/', 'HomeController@index')->name('home');
    Route::resource('/users', 'UserController');
    Route::resource('/roles', 'RoleController');
    Route::resource('/permissions', 'PermissionController')->except(['show']);

    // grados
    Route::prefix('grados')->group(function () {
        Route::get('', [GradoController::class, 'index'])->name('grado.index');
        Route::get('/create', [GradoController::class, 'create'])->name('grados.create');
        Route::get('show/{id}', [GradoController::class, 'show'])->name('grados.show');
        Route::post('', [GradoController::class, 'store'])->name('grado.store');
        Route::put('/{id}', [GradoController::class, 'update'])->name('grado.update');
        Route::delete('/{id}', [GradoController::class, 'delete'])->name('grado.delete');
        Route::get('tarea-grado/', [GradoController::class, 'tareas_to_grado'])->name('grado.tareas_to_grado');
        Route::get('reportes', [GradoController::class, 'reportes'])->name('grados.reportes');
        Route::get('reportes-all', [GradoController::class, 'allgrados'])->name('grados.allgrados');
    });

    // profesor
    Route::prefix('profesores')->group(function () {
        Route::get('', [ProfesorController::class, 'index'])->name('profe.index');
        Route::get('/create', [ProfesorController::class, 'create'])->name('profe.create');
        Route::get('show/{id}', [ProfesorController::class, 'show'])->name('profe.show');
        Route::post('', [ProfesorController::class, 'store'])->name('profe.store');
        Route::put('/{id}', [ProfesorController::class, 'update'])->name('profe.update');
        Route::delete('/{id}', [ProfesorController::class, 'destroy'])->name('profe.delete');

        Route::get('reporte', [ProfesorController::class, 'reporteAll'])->name('profe.reporteAll');
    });

    // inscripcion
    Route::prefix('inscripciones')->group(function () {
        Route::get('', [InscripcionController::class, 'index'])->name('inscripcion.index');
        Route::post('', [InscripcionController::class, 'inscribir'])->name('inscripcion.inscribir');
    });

    // encargados
    Route::prefix('encargados')->group(function () {
        Route::get('', [PadreController::class, 'index'])->name('encargado.index');
        Route::get('show/{id}', [PadreController::class, 'show'])->name('encargado.show');
        Route::put('/{id}', [PadreController::class, 'update'])->name('encargado.update');
        Route::get('reporte-all', [PadreController::class, 'reports'])->name('encargado.reports');
    });

    // estudiantes
    Route::prefix('estudiantes')->group(function () {
        Route::get('', [EstudienteController::class, 'index'])->name('estu.index');
        Route::get('perfil/{id}', [EstudienteController::class, 'show'])->name('estu.show');
        Route::get('grados', [EstudienteController::class, 'grados'])->name('estu.grados');
        Route::get('calificar', [EstudienteController::class, 'calificar'])->name('estu.calificar');
        Route::get('asignar-calificacion', [EstudienteController::class, 'save_calificacion'])->name('estu.save_calificacion');
        // el id es del estudiante
        Route::get('boletin/{id}', [EstudienteController::class, 'boletin'])->name('estu.boletin');
        Route::get('reportes', [EstudienteController::class, 'reportes'])->name('estu.reportes');
        Route::get('reportes-all', [EstudienteController::class, 'estudianteAllReport'])->name('estu.estudianteAllReport');
        Route::get('reportes-grado', [EstudienteController::class, 'estudianteAllReportToGrado'])->name('estu.estudianteAllReportToGrado');
        Route::put('actualizar/{id}', [EstudienteController::class, 'update'])->name('estu.update');
    });

    // CURSOS
    Route::prefix('cursos')->group(function () {
        Route::get('', [CursoController::class, 'index'])->name('cur.index');
        Route::get('perfil/{id}', [CursoController::class, 'show'])->name('cur.show');
        Route::post('store', [CursoController::class, 'store'])->name('cur.store');
        Route::put('actualizar/{id}', [CursoController::class, 'update'])->name('cur.update');
        Route::delete('delte/{id}', [CursoController::class, 'delete'])->name('cur.delete');
        Route::get('reporte', [CursoController::class, 'reports'])->name('cur.reports');
        Route::get('reportes', [CursoController::class, 'reportes'])->name('cur.reportes');
        
        Route::get('reporte/tareas', [CursoController::class, 'tareasa_to_curso'])->name('cur.tareasa_to_curso');
    });

    Route::prefix('tarea')->group(function () {
        Route::post('save_tarea', [CursoController::class, 'save_tarea'])->name('cur.save_tarea');
        Route::delete('delete/{id}', [CursoController::class, 'delete_tarea'])->name('cur.delete_tarea');
    });
});
