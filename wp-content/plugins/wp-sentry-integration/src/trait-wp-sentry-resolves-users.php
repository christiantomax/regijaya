<?php

trait WP_Sentry_Resolve_User {
	/**
	 * Retrieve the current user info from WordPress.
	 *
	 * @return array
	 */
	protected function get_current_user_info(): ?array {
		$current_user = wp_get_current_user();

		if ( $current_user === null ) {
			return null;
		}

		// Determine whether the user is logged in assign their details.
		$user_context = $current_user instanceof WP_User && $current_user->exists() ? [
			'id'       => $current_user->ID,
			'name'     => $current_user->display_name,
			'email'    => $current_user->user_email,
			'username' => $current_user->user_login,
		] : [
			'id'   => 0,
			'name' => 'anonymous',
		];

		// Filter the user context so that plugins that manage users on their own
		// can provide alternate user context. ie. members plugin
		if ( has_filter( 'wp_sentry_user_context' ) ) {
			return (array) apply_filters( 'wp_sentry_user_context', $user_context );
		}

		return $user_context;
	}
}
