<?php
namespace YahnisElsts\PluginUpdateChecker\v5p0;

use LogicException;
use stdClass;
use WP_Error;

if ( !class_exists(Metadata::class, false) ):

	/**
	 * A base container for holding information about updates and plugin metadata.
	 *
	 * @author Janis Elsts
	 * @copyright 2016
	 * @access public
	 */
	abstract class Metadata {

		/**
		 * Create an instance of this class from a JSON document.
		 *
		 * @abstract
		 * @param string $json
		 * @return self
		 */
		public static function fromJson($json) {
			throw new LogicException('The ' . __METHOD__ . ' method must be implemented by subclasses');
		}

		/**
		 * @param string $json
		 * @param self $target
		 * @return bool
		 */
		protected static function createFromJson($json, $target) {
			/** @var \StdClass $apiResponse */
			$apiResponse = json_decode($json);
			if ( empty($apiResponse) || !is_object($apiResponse) ){

				$errorMessage = "Failed to check for plugin updates. There may be a server timeout (try again later) or your license key may be inactive.";

				// deactivate license KINGS PLUGINS
				//update_option('b2bking_license_key_setting', '');

				$license = get_option('b2bking_license_key_setting', '');
				$email = get_option('b2bking_license_email_setting', '');
				$info = parse_url(get_site_url());
				$host = $info['host'];
				$host_names = explode(".", $host);
				$bottom_host_name = $host_names[count($host_names)-2] . "." . $host_names[count($host_names)-1];

				if (strlen($host_names[count($host_names)-2]) <= 3){    // likely .com.au, .co.uk, .org.uk etc
				    $bottom_host_name = $host_names[count($host_names)-3] . "." . $host_names[count($host_names)-2] . "." . $host_names[count($host_names)-1];
				}

				// only if updates fail 2 times in a row
				$failed_attempts = intval(get_option('b2bking_failed_license_'.$license, 0));

				if ($failed_attempts >= 1){
					// set as inactive 
					update_option('pluginactivation_'.$email.'_'.$license.'_'.$bottom_host_name, 'inactive');
				} else {
					update_option('b2bking_failed_license_'.$license, ($failed_attempts+1));
				}


				do_action('puc_api_error', new WP_Error('puc-invalid-json', $errorMessage));
				//phpcs:ignore WordPress.PHP.DevelopmentFunctions.error_log_trigger_error -- For plugin developers.
				trigger_error(esc_html($errorMessage), E_USER_NOTICE);
				return false;
			} else {

				// Update successful, set to 0
				$license = get_option('b2bking_license_key_setting', '');
				update_option('b2bking_failed_license_'.$license, 0);
			}


			$valid = $target->validateMetadata($apiResponse);
			if ( is_wp_error($valid) ){
				do_action('puc_api_error', $valid);
				//phpcs:ignore WordPress.PHP.DevelopmentFunctions.error_log_trigger_error -- For plugin developers.
				trigger_error(esc_html($valid->get_error_message()), E_USER_NOTICE);
				return false;
			}

			foreach(get_object_vars($apiResponse) as $key => $value){
				$target->$key = $value;
			}

			return true;
		}

		/**
		 * No validation by default! Subclasses should check that the required fields are present.
		 *
		 * @param \StdClass $apiResponse
		 * @return bool|\WP_Error
		 */
		protected function validateMetadata($apiResponse) {
			return true;
		}

		/**
		 * Create a new instance by copying the necessary fields from another object.
		 *
		 * @abstract
		 * @param \StdClass|self $object The source object.
		 * @return self The new copy.
		 */
		public static function fromObject($object) {
			throw new LogicException('The ' . __METHOD__ . ' method must be implemented by subclasses');
		}

		/**
		 * Create an instance of StdClass that can later be converted back to an
		 * update or info container. Useful for serialization and caching, as it
		 * avoids the "incomplete object" problem if the cached value is loaded
		 * before this class.
		 *
		 * @return \StdClass
		 */
		public function toStdClass() {
			$object = new stdClass();
			$this->copyFields($this, $object);
			return $object;
		}

		/**
		 * Transform the metadata into the format used by WordPress core.
		 *
		 * @return object
		 */
		abstract public function toWpFormat();

		/**
		 * Copy known fields from one object to another.
		 *
		 * @param \StdClass|self $from
		 * @param \StdClass|self $to
		 */
		protected function copyFields($from, $to) {
			$fields = $this->getFieldNames();

			if ( property_exists($from, 'slug') && !empty($from->slug) ) {
				//Let plugins add extra fields without having to create subclasses.
				$fields = apply_filters($this->getPrefixedFilter('retain_fields') . '-' . $from->slug, $fields);
			}

			foreach ($fields as $field) {
				if ( property_exists($from, $field) ) {
					$to->$field = $from->$field;
				}
			}
		}

		/**
		 * @return string[]
		 */
		protected function getFieldNames() {
			return array();
		}

		/**
		 * @param string $tag
		 * @return string
		 */
		protected function getPrefixedFilter($tag) {
			return 'puc_' . $tag;
		}
	}

endif;
