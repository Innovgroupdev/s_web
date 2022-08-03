<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCategoriesRequest;
use App\Http\Requests\UpdateCategoriesRequest;
use App\Models\Articles;
use App\Models\Categories;
use App\Models\User;
use App\Repositories\CategoriesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Facades\DB;
use Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class CategoriesController extends AppBaseController
{
    /** @var CategoriesRepository $categoriesRepository*/
    private $categoriesRepository;

    public function __construct(CategoriesRepository $categoriesRepo)
    {
        $this->categoriesRepository = $categoriesRepo;
    }

    /**
     * Display a listing of the Categories.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $categories = $this->categoriesRepository->all();

        //$categories = Categories::all();

        return view('categories.index')->with('categories', $categories);
    }

//    /**
//     * Display a listing of the Categories.
//     *
//     * @param Request $request
//     *
//     * @return JsonResponse
//     */
//    public function index(Request $request)
//    {
//        $categories = Articles::with("category")->get();
//        dd($categories);
//        return (new JsonResponse($categories, 200));
////        $categories = Categories::all();
////        $articles = Articles::all();
////        $items= collect();
////        foreach ($categories as $category){
////            foreach ($articles as $article){
////                if($category->id == $article->categorie_id){
////                    $items->push($article) ;
////                }
////            }
////        }
////        dd($items);
//       // $category = Categories::find(3)->articles();
//
//        //$articles=$category->fresh('articles');
//        //dd($category);
//    }


    /**
     * Show the form for creating a new Categories.
     *
     * @return Response
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created Categories in storage.
     *
     * @param CreateCategoriesRequest $request
     *
     * @return Response
     */
    public function store(Request $request)
    {
       // $input = $request->all();
        $request->validate([
            'lib' => 'string|min:3',
            'desc' => 'string|min:5',

        ]);
        $user = auth()->user();
        //dd($user);
        $categories = new Categories();
        $categories->lib = $request->lib;
        $categories->desc = $request->desc;
        $categories->user_id = $user->id;
        if(!empty($categories)){
            $categories->save();
        }
        else{
            Flash::error('Categories empty');
        }


        //dd($categorie);

      //  $categories = $this->categoriesRepository->create($input);

        Flash::success('Categories saved successfully.');

        return redirect(route('categories.index'));
    }

    /**
     * Display the specified Categories.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $categories = $this->categoriesRepository->find($id);

        if (empty($categories)) {
            Flash::error('Categories not found');

            return redirect(route('categories.index'));
        }

        return view('categories.show')->with('categories', $categories);
    }

    /**
     * Show the form for editing the specified Categories.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $categories = $this->categoriesRepository->find($id);

        if (empty($categories)) {
            Flash::error('Categories not found');

            return redirect(route('categories.index'));
        }

        return view('categories.edit')->with('categories', $categories);
    }

    /**
     * Update the specified Categories in storage.
     *
     * @param int $id
     * @param UpdateCategoriesRequest $request
     *
     * @return Response
     */
    public function update($id, Request $request)
    {
        //$categories = $this->categoriesRepository->find($id);
        $request->validate([
            'lib'=>'required',
            'desc'=>'required'
        ]);
        $categories = Categories::find($id);

        if (empty($categories)) {
            Flash::error('Categories not found');

            return redirect(route('categories.index'));
        }
        $categories->lib = $request->lib;
        $categories->desc =$request->desc;
        //dd($categories);
        $categories->save();

       // $categories = $this->categoriesRepository->update($request->all(), $id);

        Flash::success('Categories updated successfully.');

        return redirect(route('categories.index'));
    }

    /**
     * Remove the specified Categories from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $categories = $this->categoriesRepository->find($id);

        if (empty($categories)) {
            Flash::error('Categories not found');

            return redirect(route('categories.index'));
        }

        $this->categoriesRepository->delete($id);

        Flash::success('Categories deleted successfully.');

        return redirect(route('categories.index'));
    }
}
