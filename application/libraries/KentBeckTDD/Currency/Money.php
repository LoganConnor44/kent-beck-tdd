<?php namespace KentBeckTDD\Currency;

class Money {
	protected $amount;
	protected $currency;

	public function __construct(int $amount, string $currency) {
		$this->amount = $amount;
		$this->currency = $currency;
	}

	static function dollar(int $amount): Money {
		return new Money($amount, 'USD');
	}

	static function peso(int $amount): Money {
		return new Money($amount, 'MXN');
	}

	public function times(int $multiplier): Money {
		return new Money($this->amount * $multiplier, $this->currency);
	}

	public function currency(): string {
		return $this->currency;
	}

	public function equals(Money $Money): bool {
		return $this->amount == $Money->amount && get_class($this) == get_class($Money);
	}
}