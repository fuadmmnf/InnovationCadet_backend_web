<?php

namespace App\Repositories;

use App\Models\Faq;

class FaqRepository
{
    public function store(array $data)
    {
        return Faq::create($data);
    }

    public function index()
    {
        return Faq::all();
    }

    public function show($faqId)
    {
        return Faq::find($faqId);
    }

    public function update(array $data, $faqId)
    {
        $faq = Faq::find($faqId);
        if ($faq) {
            $faq->update($data);
        }
        return $faq;
    }

    public function destroy($faqId)
    {
        $faq = Faq::find($faqId);
        if ($faq) {
            $faq->delete();
        }
        return $faq;
    }
}
