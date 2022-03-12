<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;

use App\Models\Topic;
use App\Handlers\SlugTranslateHandler;
class TranslateSlug implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    protected $topic;
    public function __construct(Topic $topic)
    {
        $this->topic = $topic;
    }


    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(){
        $slug = app(SlugTranslateHandler::class)->translate($this->topic->title);
        DB::table('topics')->where('id',$this->topic->id)->update(['slug'=>$slug]);
    }
}