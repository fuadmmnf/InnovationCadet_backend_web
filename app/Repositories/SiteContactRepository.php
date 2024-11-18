<?php

namespace App\Repositories;

use App\Models\SiteContact;

class SiteContactRepository
{
    /**
     * Fetch the site contact information (single entry).
     */
    public function fetch(): ?SiteContact
    {
        return SiteContact::first();
    }

    /**
     * Update the site contact information.
     */
    public function update(array $data): SiteContact
    {
        $siteContact = SiteContact::first();

        if ($siteContact) {
            $siteContact->update($data);
        } else {
            $siteContact = SiteContact::create($data);
        }

        return $siteContact;
    }
}
