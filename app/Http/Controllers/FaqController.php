<?php

namespace App\Http\Controllers;

use App\Repositories\FaqRepository;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    protected $faqRepository;

    public function __construct(FaqRepository $faqRepository)
    {
        $this->faqRepository = $faqRepository;
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'question' => 'required|string|max:200',
            'answer' => 'required|string|max:500',
        ]);

        try {
            $faq = $this->faqRepository->store($validatedData);
            return response()->json(['data' => $faq, 'message' => 'FAQ added successfully'], 201);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to add FAQ', 'details' => $e->getMessage()], 500);
        }
    }

    public function index()
    {
        try {
            $faqs = $this->faqRepository->index();
            return response()->json(['data' => $faqs, 'message' => 'FAQs retrieved successfully'], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to retrieve FAQs', 'details' => $e->getMessage()], 500);
        }
    }

    public function show($faqId)
    {
        try {
            $faq = $this->faqRepository->show($faqId);
            if (!$faq) {
                return response()->json(['error' => "FAQ with ID $faqId not found"], 404);
            }
            return response()->json(['data' => $faq, 'message' => 'FAQ retrieved successfully'], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to retrieve FAQ', 'details' => $e->getMessage()], 500);
        }
    }

    public function update(Request $request, $faqId)
    {
        $validatedData = $request->validate([
            'question' => 'required|string|max:200',
            'answer' => 'required|string|max:500',
        ]);

        try {
            $faq = $this->faqRepository->update($validatedData, $faqId);
            if (!$faq) {
                return response()->json(['error' => "FAQ with ID $faqId not found"], 404);
            }
            return response()->json(['data' => $faq, 'message' => 'FAQ updated successfully'], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to update FAQ', 'details' => $e->getMessage()], 500);
        }
    }

    public function destroy($faqId)
    {
        try {
            $faq = $this->faqRepository->destroy($faqId);
            if (!$faq) {
                return response()->json(['error' => "FAQ with ID $faqId not found"], 404);
            }
            return response()->json(['message' => 'FAQ deleted successfully'], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to delete FAQ', 'details' => $e->getMessage()], 500);
        }
    }
}
