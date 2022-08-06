<?php

namespace Core\Policies\Firewall\Inbound;

use Core\Policies\iPolicy;
use Core\Policies\Policy;

/**
 * Firewall Policy
 *
 * @version: PHP:8.1
 */
class FirewallPolicy extends Policy implements iPolicy {
	/**
	 * IP Blacklist for Inbound Firewall Rules
	 * Supports both IPv4 and IPv6
	 * @var array
	 */
	const INBOUND_RULES_BLACKLIST = array (
		/*
		"127.0.0.1",
		"::1"
		*/
	);

	/**
	 * checkCompliance
	 *
	 * @param $ComplianceItem
	 * @return bool
	 */
	public static function checkCompliance($ComplianceItem) : bool {
		if (!in_array($ComplianceItem,self::INBOUND_RULES_BLACKLIST)) {
			return false;
		}

		return true;
	}
}