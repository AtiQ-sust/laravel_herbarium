<?php
use Illuminate\Http\Request;


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

///////////////////////////////////////////////////////////////////////////////////////////////////////////

Route::get('/', function () {
    return view('content.index');
});

Route::get('/bfri', function () {
    return view('content.bfri');
});


Route::get('/blog', function () {
    return view('content.blog');
});

Route::get('/contact', function () {
    return view('content.contact');
});

Route::get('/timeline', function () {
    return view('content.timeline');
});




///////////////////////////////////////////////////////////////////////////////////////////////////////////


Route::group(['prefix' => 'herbarium'], function () {
    Route::get('parts', function () {
        return view('content.herbarium.parts');
    });
    
    
    Route::get('aglaia', function () {
        return view('content.herbarium.aglaia');
    });
    
    Route::get('/', function () {
        return view('content.herbarium.index');
    });
    
    
    Route::get('collector', function () {
        return view('content.herbarium.collector');
    });
    

    
    Route::get('article/{slug}', function ($slug) {
        /*
        $dat = DB::select("SELECT * from herbarium where slug=?", [$slug]);
        if (count($dat)<=0){
            return;
        }
        */
        $dat = array(
            'slug' => strtolower($slug),
            'title' => ''
        );
        switch ($slug) {
            case 'neem':
                $dat['title'] = 'Neem';   
                break;
            case 'basella-alba':
                $dat['title'] = 'Basella Alba';   
                break;
            case 'spondias':
                $dat['title'] = 'Spondias';   
                break;
                
            case 'jubaea':
                $dat['title'] = 'Jubaea';   
                break;
            case 'fabaceae':
                $dat['title'] = 'Fabaceae';   
                break;
            default:
                return redirect('/herbarium/');
        }

        return view('content.herbarium.article')->withData($dat);
        //return ($dat);
    });
    
           
});




///////////////////////////////////////////////////////////////////////////////////////////////////////////

Route::get('xylarium/', function () {
    return view('content.xylarium.index');
});


Route::get('xylarium/arboretum', function () {
    return view('content.xylarium.arboretum');
});




////////////////////////////////////////////////////////////
Route::group(['prefix' => 'admin/taxonomy'], function () {
    Route::get('kingdom', function ()    {
			$dat = DB::select("SELECT * from kingdom order by kingdom_id");
			return view ( 'content.admin.taxonomy.kingdom' )->withData ( $dat );
    });

    
    Route::post('kingdom/insert', function (Request $req)    {
            $kingdom_id = $req->input('_kingdom_id');
            $code = $req->input('_code');
            $title = $req->input('_title');
            $description = $req->input('_description');
            //return "Success: $code";

            DB::insert("INSERT INTO kingdom( code, title, description) VALUES (?, ?, ?);", [$code, $title, $description]);
            $dat =  DB::select("SELECT kingdom_id from kingdom order by kingdom_id desc limit 1");
            //return $kingdom_id;
            $ret_val = $dat[0]->kingdom_id;
            return "$ret_val";
            //return "Success";
    });


    Route::post('kingdom/update', function (Request $req)    {
			$kingdom_id = $req->input('_kingdom_id');
            $code = $req->input('_code');
			$title = $req->input('_title');
			$description = $req->input('_description');
			//return "Success: $code";

			$dat = DB::update("update kingdom set code=?, title=?, description=? where kingdom_id=?", [$code, $title, $description, $kingdom_id]);
			//return view ( 'admin.taxonomy.kingdom' )->withData ( $dat );
            return "Success: $code";
    });

    Route::post('kingdom/delete', function (Request $req)    {
            $kingdom_id = $req->input('_kingdom_id');
            
            //return "Success: $code";

            $dat = DB::delete("delete from kingdom where kingdom_id=? ", [$kingdom_id]);
            return "Success: $dat";
            //return view ( 'admin.taxonomy.kingdom' )->withData ( $dat );
    });


    Route::post ( 'kingdom', function (Request $req) {
        $dat = $req->input( 'dat' );
        $data = DB::select("select * from kingdom where code||title||description ilike ?", ["%".$dat."%"]);
        //return count($data);
        return view ( 'content.admin.taxonomy.kingdom' )->withData ( $data );

        /*if (count ( $user ) > 0)
        /else
            return view ( 'admin.taxonomy.kingdom' )->withMessage ( 'No Details found. Try to search again !' );*/
    });
		
});



/////////////////////////////////////////////////////////////////////////////////////////////////////////

    Route::get('admin/article/editor', function () {
        return view('content.admin.article.editor');
    });

    Route::post('admin/article/editor', function (Request $req)    {
            $article_id = $req->input('article_id');
            $article_title = $req->input('article_title');
            $article_slug = $req->input('article_slug');
            $desc = $req->input('desc');
            $domain = $req->input('domain');
            $kingdom = $req->input('kingdom');
            $phylum = $req->input('phylum');
            $order = $req->input('order');
            $class = $req->input('class');
            $family = $req->input('family');
            $genus = $req->input('genus');
            $species = $req->input('species');
            $fri_no = $req->input('fri_no');
            $plant_name = $req->input('plant_name');
            $scientific_name = $req->input('scientific_name');
            $local_name = $req->input('local_name');
            $locality = $req->input('locality');
            $flowers = $req->input('flowers');
            $fruit = $req->input('fruit');
            $collector = $req->input('collector');
            $collection_date = $req->input('collection_date');
            
            //return "Success: $code";

            $idata= DB::insert("INSERT INTO article( article_id, 
                article_title, 
                article_slug,
                description,
                domain,
                kingdom,
                phylum,
                \"order\",
                class,
                family,
                genus,
                species,
                fri_no,
                plant_name,
                scientific_name,
                local_name,
                locality,
                flowers,
                fruits,
                collector_name,
                collection_date) 
                VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);", [$article_id, $article_title, $article_slug, $desc,$domain,$kingdom,$phylum,$order,$class,$family,$genus,$species,$fri_no,$plant_name,$scientific_name,$local_name,$locality,$flowers,$fruit,$collector,$collection_date]);
             
           
            //return $kingdom_id;
            
            return redirect('/admin/article/editor/' . $article_id);
            //return "$data";
    });

    Route::get('admin/article/editor/{article_id}', function ($article_id)    {
        //return "Success: $code";

        $data = DB::select("select * from article where article_id=?", [$article_id]);       
        //return $kingdom_id;
        //$row = $data[0];
        if ($article_id = null){
            $data = null;
        }
        return view('content.admin.article.editor')->withData($data[0]);
        //return "$data";
    });

    Route::post('admin/article/editor/{article_id}', function ($article_id)    {
        //return "Success: $code";

        $data = DB::update("update article set article_title=?, article_slug=?, description=?, domain=?, kingdom=?, phylum=?, order=?, class=?, family=?, genus=?, species=?, fri_no=?, plant_name=?, scientific_name=?, local_name=?, locality=?, flowers=?, fruits=?, collector_name=?, collection_date=? where kingdom_id=?", [$article_title, $article_slug, $desc,$domain,$kingdom,$phylum,$order,$class,$family,$genus,$species,$fri_no,$plant_name,$scientific_name,$local_name,$locality,$flowers,$fruit,$collector,$collection_date,$article_id]);       
        //return $kingdom_id;
        //$row = $data[0];
        if ($article_id = null){
            $data = null;
        }
        return view('content.admin.article.editor')->withData($data[0]);
        //return "$data";
    });


    

///////////////////////////////////////////////////////////////////////////////////////////////////////////





Route::get('admin/article/demo', function () {
    $data = DB::select("select * from article");

    return view('content.admin.article.demo')->withData($data);
});







