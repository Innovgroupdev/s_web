<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFaqRequest;
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
    public function storeFaqs(CreateFaqRequest $request)
    {
        $input = $request->all();
        $faq = $this->faqRepository->create($input);

        return response()->json($faq);
    }

}
