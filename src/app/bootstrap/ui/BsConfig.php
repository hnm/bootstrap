<?php
namespace bootstrap\ui;

use n2n\web\ui\UiException;
use n2n\web\ui\UiComponent;

class BsConfig {
	protected $required;
	protected $autoPlaceholder;
	protected $placeholder;
	protected $helpText;
	protected $labelHidden;
	protected $labelAttrs;
	protected $controlAttrs;
	protected $groupAttrs;
	protected $rowClassNames;
	protected $child;
	protected $formCheckAttrs;

	public function __construct(bool $required, bool $autoPlaceholder, ?string $placeholder,
			$helpText = null, bool $labelHidden = false, array $labelAttrs = null, array $controlAttrs = null, array $groupAttrs = null,
			array $rowClassNames = null, BsComposer $child = null, array $formCheckAttrs = null) {
		$this->required = $required;
		$this->autoPlaceholder = $autoPlaceholder;
		$this->placeholder = $placeholder;
		$this->helpText = $helpText;
		$this->labelHidden = $labelHidden;
		$this->labelAttrs = $labelAttrs;
		$this->controlAttrs = $controlAttrs;
		$this->groupAttrs = $groupAttrs;
		$this->rowClassNames = $rowClassNames;
		$this->child = $child;
		$this->formCheckAttrs = $formCheckAttrs;
	}
	
	public function isRequired() {
		return $this->required;
	}
	
	public function isAutoPlaceholderUsed() {
		return $this->autoPlaceholder;
	}
	
	public function getPlaceholder() {
		return $this->placeholder;
	}
	
	public function getHelpText() {
		return $this->helpText;
	}
	
	public function isLabelHidden() {
		return $this->labelHidden;
	}
	
	public function getLabelAttrs() {
		return $this->labelAttrs;
	}
	
	public function getControlAttrs() {
		return $this->controlAttrs;
	}
	
	public function getGroupAttrs() {
		return $this->groupAttrs;
	}
	
	public function getRowClassNames() {
		return $this->rowClassNames;
	}

	public function getChild() {
		return $this->child;
	}
	
	public function getFormCheckAttrs() {
		return $this->formCheckAttrs;
	}
}