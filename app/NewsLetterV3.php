<?php namespace App;

use App\Contracts\MailListContract;
use Illuminate\Contracts\Logging\Log;
class NewsLetterV3 {
	protected $mailList;
	protected $logger;

	public function __construct(MailListContract $mailList, Log $logger)
	{
		$this->mailList = $mailList;
		$this->logger = $logger;
	}
	public function register($email) {
		$this->logger->info('User baru diregistrasi : ' . $email);
		return $this->mailList->register($email);
	}
}
