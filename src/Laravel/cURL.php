<?php
/**
 * PHP OOP cURL
 * 
 * @author   Andreas Lutro <sharmavikram054@gmail.com>
 * @license  http://opensource.org/licenses/MIT
 * @package  PHP cURL
 */

namespace vikram\cURL\Laravel;

use Illuminate\Support\Facades\Facade;

/**
 * cURL facade class.
 */
class cURL extends Facade
{
	public static function getFacadeAccessor()
	{
		return 'vikram\cURL\cURL';
	}
}
