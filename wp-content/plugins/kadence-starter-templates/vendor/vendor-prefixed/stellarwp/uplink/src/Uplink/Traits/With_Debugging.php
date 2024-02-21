<?php
/**
 * @license GPL-2.0-or-later
 *
 * Modified by kadencewp on 10-January-2024 using Strauss.
 * @see https://github.com/BrianHenryIE/strauss
 */ declare( strict_types=1 );

namespace KadenceWP\KadenceStarterTemplates\StellarWP\Uplink\Traits;

trait With_Debugging {

	/**
	 * Determine if WP_DEBUG is enabled.
	 *
	 * @return bool
	 */
	protected function is_wp_debug(): bool {
		return defined( 'WP_DEBUG' ) && WP_DEBUG;
	}

}
