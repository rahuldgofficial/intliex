<?php

namespace App\Observers;

use App\Services\IndexNowService;

class IndexNowObserver
{
    protected IndexNowService $indexNowService;

    public function __construct(IndexNowService $indexNowService)
    {
        $this->indexNowService = $indexNowService;
    }

    public function saved($model)
    {
        $this->pingModelUrl($model);
    }

    public function deleted($model)
    {
        $this->pingModelUrl($model);
    }

    protected function pingModelUrl($model)
    {
        $url = null;

        if ($model instanceof \App\Models\BlogPost && $model->status === 'published') {
            $url = url("/blog/{$model->slug}");
        } elseif ($model instanceof \App\Models\JobPosting && $model->is_active) {
            $url = url("/careers/{$model->slug}");
        } elseif ($model instanceof \App\Models\CaseStudy && $model->is_active) {
            $url = url("/case-studies/{$model->slug}");
        }

        if ($url) {
            $this->indexNowService->submitUrl($url);
        }
    }
}
