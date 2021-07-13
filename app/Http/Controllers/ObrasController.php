<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Module;
use App\Models\Menu;

use Illuminate\Support\Facades\DB;

class ObrasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $dumps = DB::table('Modules')
        ->join('category_menu', 'modules.category_menu_id', '=', 'category_menu.id')
        ->where('enlace','obras')
        ->get();

        $content = $dumps[0];
        $gallery = Module::all();
        $menus = Menu::orderBy('sort_order', 'ASC')->get();

        return view('page', compact(['content', 'menus', 'gallery']));
    }
}
