<?php

namespace Overload\Command;

use Overload\Model\Overload;

use Illuminate\Console\Command;

class Fixtures extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fixtures:load';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Load fixtures';

    
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
        $this->load();
    }

    protected function load() {

		$vars = [
			[
				'date' => date('Y-m-d'),
				'dateTime' => date('Y-m-d H:i:s'),
				'fixedString' =>    'Hello John , how are you ? do',
				'variableString' => 'you feel good today ? is the umbr'
			],
			[
				'date' => date('Y-m-d'),
				'dateTime' => date('Y-m-d H:i:s'),
				'fixedString' => 'Hello John , how are you ? do',
				'variableString' => 'you feel good today ? is the umbr'
			],
			[
				'date' => date('Y-m-d'),
				'dateTime' => date('Y-m-d H:i:s'),
				'fixedString' => 'Hello John !',
				'variableString' => 'How are you ?'
			]
		];

		foreach( $vars as $entity ) {
			
			$model = new Overload();
			foreach( $entity as $key => $value ) {
				$model->$key = $value;
			}
			$model->save();
		}
	}
}