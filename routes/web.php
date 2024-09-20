<?php

use App\Http\Controllers\LocationController;
use App\Http\Controllers\ProfileController;
use App\Models\Countrie;
use App\Models\Location;
use App\Models\Medias;
use Database\Seeders\CountrieSeeder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $images = Medias::all();
    $paises = Countrie::all();    
    $locations = Location::all();
    return view('index', compact('images', 'paises', 'locations'));
});

Route::get('/dashboard', function () {
    //return view('Admin.Media.indexMedia');

    return redirect()->route('Media.index');
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


        $media->user_id = auth()->user()->id;
        $media->FileName = $request->input('FileName','');
        $media->FileType = $request->input('FileType','');
        $media->FileCopyright = $request->input('FileCopyright','');
        $media->FileContact = $request->input('FileContact','');
        
        //$media->filePath = $request->input('FilePath');
        $media->created_at = date('Y-m-d H:i:s');
        $media->updated_at = date('Y-m-d H:i:s');



        // Manejar el archivo subido
        if ($request->hasFile('FilePath')) {
            $file = $request->file('FilePath');
            $filename = $file->getClientOriginalName();
            //Ruta para guardar
            $filePath = 'images/';
            // Guardar el archivo en el sistema 
            $cargafolder = $request->file('FilePath')->move($filePath, $filename);
            // Asignar la ruta del archivo al modelo
            $media->filePath = $filePath . $filename; // Guardas la ruta relativa del archivo en la BD

        }

        $media->save();
        return redirect()->route('Media.index')->with('success', 'El archivo multimedia se guardo correctamente.');
    })->name('Media.Guardar');

    Route::delete('/Media/{id}', function ($id) {
        $media = Medias::findOrFail($id);
        $media->delete();
        return redirect()->route('Media.index')->with('success', 'El archivo multimedia se elimino correctamente.');
    })->name('Media.Eliminar');


    // RUTAS DE LOS PAISES
    Route::get('/Pais', function () {
        $paises = Countrie::all();
        return view('Admin.Paises.indexPaises', compact('paises'));
    })->name('Pais.index');

    Route::get('/Pais/Create', function () {
        return view('Admin.Paises.CreatePaises');
    })->name('Pais.Create');


    Route::post('/Pais', function (Request $request) {
        $countrie = new Countrie();
        $countrie->Order = $request->input('Order');
        $countrie->Name = strtoupper($request->input('Name'));
        $countrie->created_at = date('Y-m-d H:i:s');
        $countrie->updated_at = date('Y-m-d H:i:s');

        $countrie->save();
        return redirect()->route('Pais.index')->with('success', 'El pais se guardo correctamente.');
    })->name('Pais.Guardar');

    Route::delete('/Pais/{id}', function ($id) {
        $countrie = Countrie::findOrFail($id);
        $countrie->delete();
        return redirect()->route('Pais.index')->with('success', 'El pais se elimino correctamente.');
    })->name('Pais.Eliminar');


    // RUTAS DE LOCALIDADES    
    Route::get('/Localidad/{id}', [LocationController::class, 'getLocations'])->name('getLocations');

    Route::post('/Localidad/Guardar', [LocationController::class, 'create']);

    Route::delete('/Localidad/Eliminar/{id}/{countrie_id}', [LocationController::class, 'destroy']);
});