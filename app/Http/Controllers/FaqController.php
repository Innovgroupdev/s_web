<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFaqRequest;
use App\Models\Faq;
use App\Repositories\FaqRepository;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Flash;
use Response;

class FaqController extends AppBaseController
{
    /** @var FaqRepository $faqRepository*/
    private $faqRepository;

    public function __construct(FaqRepository $faqRepo)
    {
        $this->faqRepository = $faqRepo;
    }

    /**
     * Display a listing of the Faq.
     *
     * @param Request $request
     *
     * @return Application|Factory|View
     */
    public function index(Request $request)
    {
        $faqs = $this->faqRepository->all();

        return view('faqs.index')
            ->with('faqs', $faqs);
    }

    /**
     * Store a newly created Faq in storage.
     *
     * @param CreateFaqRequest $request
     *
     * @return JsonResponse
     */
    public function storeFaqs(Request $request)
    {

        if($request->email != ''){
            $request->validate([
                'email' => 'unique:faqs',
            ]);
        }
      
        $request->validate([
            'tel' => 'required|min:5|unique:faqs',
        ]);
        // dd($request->all()); 
        $faq = new Faq();
        $faq->pays = $request->pays;  
        $faq->tel = $request->tel; 
        $faq->email = $request->email; 
        $faq->question = $request->question; 
        $faq->save();

        return response()->json($faq);
    }
    /**
     * 
     */

     public static function Numberofaqs()
     {
        $numberofaqs = Faq::count();

        return $numberofaqs;
     }
     /**
      * 
      */
      public static function GetrecentFivefaqs()
      {
        $recentfiveFaq = Faq::Orderby('created_at', 'ASC')->take(4)->get();
        if(!empty($recentfiveFaq)){
            return response()->json([
                'data'=>$recentfiveFaq
            ]);
        }
      }

}
