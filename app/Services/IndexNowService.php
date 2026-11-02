<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class IndexNowService
{
    protected string $key = 'c96a7516805141efae8da87c10d3a5a7';
    protected string $host = 'intliex.com';
    
    public function submitUrl(string $url): bool
    {
        // Don't send real pings if we are in local development unless explicitly needed
        if (app()->environment('local')) {
            Log::info("IndexNow: Skipping ping for {$url} (local environment).");
            return true;
        }

        try {
            $response = Http::post('https://api.indexnow.org/indexnow', [
                'host' => $this->host,
                'key' => $this->key,
                'keyLocation' => "https://{$this->host}/{$this->key}.txt",
                'urlList' => [$url]
            ]);

            if ($response->successful()) {
                Log::info("IndexNow: Successfully submitted {$url} to Bing/Yandex.");
                return true;
            }

            Log::warning("IndexNow: Failed to submit {$url}. Status: " . $response->status());
            return false;
            
        } catch (\Exception $e) {
            Log::error("IndexNow Error: " . $e->getMessage());
            return false;
        }
    }
}
