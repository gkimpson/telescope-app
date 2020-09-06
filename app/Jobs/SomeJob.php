<?php

namespace App\Jobs;

use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class SomeJob implements ShouldQueue
{
    public $user;

    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {
        $this->user = $user; 
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        sleep(4);
        $message = 'SomeJob was completed!';
        Log::emergency('Emergency'.': '.$message);
        Log::alert('Alert'.': '.$message);
        Log::critical('Critical'.': '.$message);
        Log::error('Error'.': '.$message);
        Log::warning('Warning'.': '.$message);
        Log::notice('Notice'.': '.$message);
        Log::info('Info'.': '.$message);
        Log::debug('Debug'.': '.$message);
    }
}
