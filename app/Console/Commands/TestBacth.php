<?php

namespace App\Console\Commands;
use Carbon\Carbon;
use App\User;
use App\Keyword;
use App\TwitterUser;
use App\Management;
use App\Tweet;
use App\Like;
use App\FollowTarget;
use App\FollowerTarget;
use App\UnfollowDetect;
use App\FollowsRepository;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Mail;
use App\Mail\CompleteAutoFollow;
use Abraham\TwitterOAuth\TwitterOAuth;
use App\Http\Components\ApiHandle;
use App\Http\Components\FollowService;
use App\Mail\StopTwitterAccountMail;
use App\Mail\LimitApiMail;
use App\Http\Components\Utility;
use App\Mail\CompleteAutoTweet;
// URL
const ApiTweet = "accounts/";

/**
 * 処理動作テスト用バッチ
 */
class TestBacth extends Command
{
    protected $signature = "command:testbatch";
    protected $description = "test用";
    public function __construct() { parent::__construct(); }

    public function handle()
    {
        $system_manager = Management::find(3)->with('user')->first();
        Log::Debug("system_manager");
        Log::Debug([$system_manager]);

        $twitter_user = TwitterUser::find(4)->first();
        Log::Debug("twitter_user");
        Log::Debug([$twitter_user]);

        $user = $system_manager->user;
        Log::Debug("user");
        Log::Debug([$user]);
        // Mail::to($user)->send(new CompleteAutoTweet($user, $twitter_user, $auto_tweet));
    }
}
