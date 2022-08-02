<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Carousel; 

class CarouselController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carousel = Carousel::all();

        return view('carousel.carousel')
        ->with('carousels',$carousel);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $carousel = Carousel::find($id);
        return view('carousel.edit')->with('carousel',$carousel);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $configurar = Carousel::find($id);

        $img1 = $request -> file('img1');
        if ($img1!=null) 
        {
            $img1->move(public_path().'/img/tattoo/','img1'.'.jpg');
            $configurar->img1  = 'img1'.'.jpg';
        }

        $img2 = $request -> file('img2');
        if ($img2!=null) 
        {
            $img2->move(public_path().'/img/tattoo/','img2'.'.jpg');
            $configurar ->img2 = 'img2'.'.jpg';
        }


        $img3 = $request -> file('img3');
        if ($img3!=null) 
        {
            $img3->move(public_path().'/img/tattoo/','img3'.'.jpg');
            $configurar->img3 = 'img3'.'.jpg';
        }

        $img4 = $request -> file('img4');
        if ($img4!=null) 
        {
            $img4->move(public_path().'/img/tattoo/','img4'.'.jpg');
            $configurar->img4 = 'img4'.'.jpg';
        }

        $img5 = $request -> file('img5');
        if ($img5!=null) 
        {
          $img5->move(public_path().'/img/tattoo/','img5'.'.jpg');
          $configurar->img5 = 'img5'.'.jpg';
        }

        $configurar-> save();
        return redirect()->route('Carousel.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
