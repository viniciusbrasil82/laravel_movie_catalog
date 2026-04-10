<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;


class MovieController extends Controller
{
    
    //
    public function index(Request $request)
    {
        $orderAllowed = ['id','title','release_year'];
        $direction = ['desc', 'asc'];

        $order = $request->input('sort','id');
        $dir = $request->input('dir',$order=='id'?'desc':'asc');

        if(!in_array($order,$orderAllowed))
            $order = 'id';

        if(!in_array($dir,$direction))
            $dir = $order=='id'?'desc':'asc';


        return Movie::orderBy($order,$dir)->paginate(20);
    }

    public function show($id)
    {
        return Movie::findOrFail($id);
    }    

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|unique:movies,title',
            'poster_url' => 'nullable|url',
            'release_year' => 'required|integer',
            'author_id' => 'required|exists:authors,id',
        ]);

        $data['created_by'] = auth()->id();

        return Movie::create($data);
    }

    public function destroy($id)
    {
        $movie = Movie::findOrFail($id);

        $this->authorize('delete', $movie);

        $movie->delete();

        return response()->json(['message' => 'Deleted']);
    }       

    public function update(Request $request, $id)
    {
        //dd(class_parents($this));
        $movie = Movie::findOrFail($id);

        $this->authorize('update', $movie);

        $data = $request->validate([
            'title' => 'required|string|unique:movies,title,' . $id,
            'poster_url' => 'nullable|url',
            'release_year' => 'required|integer',
            'author_id' => 'required|exists:authors,id',
        ]);

        $movie->update($data);

        return $movie;
    } 
}
