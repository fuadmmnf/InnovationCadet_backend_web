<?php

namespace App\Http\Controllers;

use App\Helpers\ImageHandler;
use App\Http\Requests\CreateCustomerReviewRequest;
use App\Http\Requests\UpdateCustomerReviewRequest;
use App\Repositories\CustomerReviewRepository;
use Illuminate\Http\JsonResponse;

class CustomerReviewController extends Controller
{
    protected $customerReviewRepository;

    public function __construct(CustomerReviewRepository $customerReviewRepository)
    {
        $this->customerReviewRepository = $customerReviewRepository;
    }

    /**
     * Display a listing of the customer reviews.
     */
    public function index(): JsonResponse
    {
        $reviews = $this->customerReviewRepository->findAll();
        return response()->json($reviews, 200);
    }

    /**
     * Store a newly created customer review.
     */
    public function store(CreateCustomerReviewRequest $request): JsonResponse
    {
        $data = $request->validated();

        if ($request->hasFile('img')) {
            $data['img'] = ImageHandler::uploadImage($request->file('img'), 'customer_reviews');
        }

        $review = $this->customerReviewRepository->create($data);
        return response()->json(['review' => $review], 201);
    }

    /**
     * Update an existing customer review.
     * @throws \Exception
     */
    public function update(UpdateCustomerReviewRequest $request, int $id): JsonResponse
    {
        $data = $request->validated();

        if ($request->hasFile('img')) {
            $data['img'] = ImageHandler::uploadImage($request->file('img'), 'customer_reviews');
        }

        $review = $this->customerReviewRepository->update($id, $data);

        if ($review) {
            return response()->json(['review' => $review], 200);
        } else {
            return response()->json(['error' => 'Customer review not found'], 404);
        }
    }

    /**
     * Remove the specified customer review.
     */
    public function destroy(int $id): JsonResponse
    {
        $deleted = $this->customerReviewRepository->delete($id);

        if ($deleted) {
            return response()->json(['message' => 'Customer review deleted successfully'], 200);
        } else {
            return response()->json(['message' => 'Customer review not found'], 404);
        }
    }
}
