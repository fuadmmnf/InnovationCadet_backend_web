<?php

namespace App\Repositories;

use App\Models\CustomerReview;

class CustomerReviewRepository
{
    public function findAll()
    {
        return CustomerReview::all();
    }

    public function create(array $data): CustomerReview
    {
        return CustomerReview::create($data);
    }

    public function update(int $id, array $data): ?CustomerReview
    {
        $review = CustomerReview::find($id);

        if ($review) {
            $review->update($data);
            return $review;
        }

        return null;
    }

    public function findById(int $id): ?CustomerReview
    {
        return CustomerReview::find($id);
    }

    public function delete(int $id): bool
    {
        $review = CustomerReview::find($id);

        if ($review) {
            return $review->delete();
        }

        return false;
    }
}
