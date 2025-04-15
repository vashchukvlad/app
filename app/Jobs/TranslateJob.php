<?php

namespace App\Jobs;

use App\Models\Job;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

class TranslateJob implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct(public Job $current_job)
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        // TODO: Translate the job title to Spanish
        logger('Translating ' . $this->current_job->title . ' to Spanish.');
    }
}
