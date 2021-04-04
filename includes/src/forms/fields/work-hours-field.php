<?php

namespace MyListing\Src\Forms\Fields;

if ( ! defined('ABSPATH') ) {
	exit;
}

class Work_Hours_Field extends Base_Field {

	public function get_posted_value() {
		return ! empty( $_POST[ $this->key ] ) ? (array) $_POST[ $this->key ] : [];
	}

	public function validate() {
		$value = $this->get_posted_value();
		//
	}

	public function field_props() {
		$this->props['type'] = 'work-hours';
	}

	public function string_value( $modifier = null ) {
		return $this->listing->get_schedule()->get_label_for_preview_card();
	}

	public function get_editor_options() {
		$this->getLabelField();
		$this->getKeyField();
		$this->getPlaceholderField();
		$this->getDescriptionField();
		$this->getRequiredField();
		$this->getShowInSubmitFormField();
		$this->getShowInAdminField();
	}
}