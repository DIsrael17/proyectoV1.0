<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

 // ----------------------------------------------------------------------------------------------------------
    Route::get('hola',function() { 

    });
 // --------------------------------------------------------------------------------------------------
// --------------------fpdf--------------------------------------------------
// Ejemplo fpdf
Route::get('fpdf', function () {   

    Fpdf::AddPage();
    Fpdf::SetFont('Courier', 'B', 18);
    Fpdf::Cell(50, 25,'Estoy usando fpdf!');
    // $header=['Content-Type'=>'aplication/pdf'];
    Fpdf::Output('I'); 
    exit;
});

Route::get('municipio','RecuperandoPueblosController@obtener'); 
Route::get('municipioPDF','RecuperandoPueblosController@Formato'); 
// ----------------------------------------------------------------------------------------------------------
// -----------------------------------Ruta para los municipios-----------------------------------------------
    Route::get('municipio','RecuperandoPueblosController@obtener'); 
    // ############################################################
    Route::get('pueblos', function(){
            return view('testing.pueblos');
    });
// ----------------------------------------------------------------------------------
	// Rutas de tipo resource para el administrador
	// 
 Route::resource('config','ConfigurarPController')->middleware('imAdmin');

 Route::get('NmbreDeLaPeticionURL','NombreDelControlador@NombreDelMetodo');
// ----------------------------------------------------------------------------------


// ----------------------------------------------------------------------------------
// Ruta de tipo api para Carousel
 Route::Resource('Carousel','CarouselController')->middleware('imAdmin');
// ----------------------------------------------------------------------------------

 
// -----------------------------------Ruta para Agendas -----------------------------
Route::resource('agendas','AgendaController')->middleware('imAdmin');

// ----------------------------------------------------------------------------------



// ----------------------------------Ruta para peticiones----------------------------
//el nombre de la ruta no es sensible a mayusculas  y minusculas
//la que esta en el segundo comillado simple
Route::resource('peticiones','PeticionController')->middleware('imAdmin');
// ----------------------------------------------------------------------------------



// ----------------------------------------------------------------------------------
//Rutas para mostrar datos al usuario normal
// 
 Route::get('home','ConfigPageController@Mostrar');

 // ----------------------------------------------------------------------------------



// 
// ----------------------------------------------------------------------------------
 // cerrar sesion
 Route::get('logout','AccesoController@salir'); 
 // ---------------------------------------------------------------------------------


// ----------------------------------------------------------------------------------

//validar al usuario que es administrador
 Route::post('validar','AccesoController@validar');
// ----------------------------------------------------------------------------------


 // ----------------------------------------------------------------------------------

 // tipo_tattoos
 Route::resource('tipo_tattoos','tipo_tattooController')->middleware('imAdmin');
//----------------------------------------------------------------------------------- 


//------------------------------tattoosCotroller----------------------------------- 
 Route::resource('tattoos','tattoosController')->middleware('imAdmin');
//----------------------------------------------------------------------------------- 


 // -------------------------------Clientes---------------------------------------------------
  Route::apiResource('apiclientes','apiClientesController');

	 Route::get('clientes',function()
		{
			return view('clientes.clientess');

		});
 // ----------------------------------------------------------------------------------


 // -----------------------------logueo-----------------------------------------------------
Route::get('login', function()
{
return view('login.login');
});
 // -----------------------------logueo-----------------------------------------------------


 // ---------------------------------------rutas Jose Luis------------------------------------------- 

//rutas noticias
// Route::get('not',function(){
// 	return view('config.noticia');
// });

//Route::get('crud', 'CrudNoticia@index');

Route::resource('noot','CrudGeneral');
Route::get('noticia','mostrarNoticiaController@Noticia');


//rutas categorias

Route::resource('cat','ConfiguraCategoriaController');

// Route::get('cate', 'Catego@index');

// Route::get('categoria',function(){
// 	return view('config.categoria');
// });

//rutas imagenes

//Route::get('foto', 'Modeimagen@index');

// Route::get('fotos',function(){
// 	return view('config.imagen');
// });


Route::resource('image','crudImagenController')->middleware('imAdmin');
Route::get('imagen','mostrarGaleriaController@Mostrar'); 


//ruta videos
// Route::get('video', 'Modevideo@index');

Route::resource('videos','crudVideoController')->middleware('imAdmin');
Route::get('video','mostrarVideoController@Mostrar');


// ----------------------------------------------------------------------------------
Route::apiResource('Folio','ObtenerFolioController');
// ----------------------------------------------------------------------------------
// ---------------------Graficar-------------------------------------------------------------
Route::Resource('grafica','ChartController');
// ----------------------------------------------------------------------------------
Route::get('Formato1','FormatoController1@Formato');
Route::get('Formato2','FormatoController2@Formato');
//--------------------------------------------------
Route::get('Calendario',function(){
    return view('Calendario.calendario');
});

Route::get('DevAgenda','AgendaController@dev');