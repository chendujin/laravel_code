<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class WelcomeMessage extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    // protected $signature = 'welcome:message {name=thomas : The name of the Users}';
    // protected $signature = 'welcome:message {name : 用户名} {--city= : 来自的城市}';
    protected $signature = 'welcome:message';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Thomas First Command';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        // $this->info('热烈欢迎 Thomas 大帅逼！');
        // $name = $this->ask('你叫什么名字');
        // $this->info('热烈欢迎来自' . $this->option('city') . '的' . $this->argument('name') .'大帅逼！');
        
        // $name = $this->ask('你叫什么名字');
        // $city = $this->choice('你来自哪个城市', [
        //     '北京', '杭州', '深圳'
        // ], 0);
        // $password = $this->secret('输入密码才能执行此命令');
        // if ($password != '123') {
        //     $this->error('密码错误');
        //     exit(-1);
        // }
        // if ($this->confirm('确定要执行此命令吗?')) {
        //     $this->info('欢迎来自' . $city . '的' . $name . '访问 Laravel 学院');
        // } else {
        //     exit(0);
        // }
        
        // $headers = ['姓名', '城市'];
        // $data = [
        //     ['张三', '北京'],
        //     ['李四', '上海']
        // ];
        // $this->table($headers, $data);
        
        $totalUnits = 100;
        $this->output->progressStart($totalUnits);

        $i = 0;
        while ($i++ < $totalUnits) {
            sleep(1);
            $this->output->progressAdvance();
        }

        $this->output->progressFinish();
    }
}
