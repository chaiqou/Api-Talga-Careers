<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class CreateUser extends Command
{
	/**
	 * The name and signature of the console command.
	 *
	 * @var string
	 */
	protected $signature = 'create:user';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Create user by command';

	/**
	 * Execute the console command.
	 *
	 * @return int
	 */
	public function handle()
	{
		$name = $this->ask('What is your name?');
		$email = $this->ask('What is your email?');
		$password = $this->secret('What is the password?');

		if ($this->confirm('Do you wish to continue?'))
		{
			User::create([
				'name'     => $name,
				'email'    => $email,
				'password' => bcrypt($password),
			]);
		}

		$this->info('User created successfully');
	}
}
