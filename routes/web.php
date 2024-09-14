<?php

use App\Http\Controllers\ProfileController;
use App\Models\Medias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';


Route::get('/index', function () {
    return view('index');
})->name('index');



Route::middleware('auth')->group(function () {

    // RUTAS DE LAS MEDIAS 
    Route::get('/Media', function () {
        $medias = Medias::all();
        return view('Admin.Media.indexMedia', compact('medias'));
    })->name('Media.index');


    Route::get('/Media/create', function () {
        return view('Admin.Media.CreateMedia');
    })->name('Media.Create');


    Route::post('/Media', function (Request $request) {
        $media = new Medias();
        $media->FileName = $request->input('FileName');
        $media->FileType = $request->input('FileType');
        $media->filePath = $request->input('FilePath');
        $media->created_at = date('Y-m-d H:i:s');
        $media->updated_at = date('Y-m-d H:i:s');

        // Manejar el archivo subido
        if ($request->hasFile('FilePath')) {
            $file = $request->file('FilePath');
            
            // Guardar el archivo en el sistema de archivos (por defecto en `storage/app/uploads`)
            $filePath = $file->store('uploads');

            // Asignar la ruta del archivo al modelo
            $media->filePath = $filePath; // Guardas la ruta relativa del archivo en la BD
        }
        error_log($media->filePath );
        $media->save();
        return redirect()->route('Media.index')->with('success', 'la Media se guardo correctamente {{$media->filePath}}');
    })->name('Media.Guardar');

    Route::delete('/Media/{id}', function ($id) {
        $media = Medias::findOrFail($id);
        $media->delete();
        return redirect()->route('Media.index')->with('success', 'La Media se elimino correctamente');
    })->name('Media.Eliminar');
});