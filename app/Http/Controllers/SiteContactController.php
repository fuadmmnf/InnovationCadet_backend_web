<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateSiteContactRequest;
use App\Repositories\SiteContactRepository;
use Illuminate\Http\JsonResponse;

class SiteContactController extends Controller
{
    protected $siteContactRepository;

    public function __construct(SiteContactRepository $siteContactRepository)
    {
        $this->siteContactRepository = $siteContactRepository;
    }

    /**
     * Fetch the site contact information.
     */
    public function fetch(): JsonResponse
    {
        $siteContact = $this->siteContactRepository->fetch();

        if ($siteContact) {
            return response()->json($siteContact, 200);
        } else {
            return response()->json(['message' => 'No site contact information found.'], 404);
        }
    }

    /**
     * Update the site contact information.
     */
    public function update(UpdateSiteContactRequest $request): JsonResponse
    {
        $siteContact = $this->siteContactRepository->update($request->validated());

        return response()->json(['message' => 'Site contact information updated successfully.', 'site_contact' => $siteContact], 200);
    }
}
