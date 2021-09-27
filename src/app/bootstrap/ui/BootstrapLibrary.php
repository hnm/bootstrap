<?php
namespace bootstrap\ui;

use n2n\impl\web\ui\view\html\LibraryAdapter;
use n2n\impl\web\ui\view\html\HtmlView;
use n2n\impl\web\ui\view\html\HtmlBuilderMeta;
use n2nutil\jquery\JQueryLibrary;

class BootstrapLibrary  extends LibraryAdapter {
	// main and side version numbers are synchronized with the bootstrap version
	const VERSION = '5.1.1';
	
	private $loadBootstrapCss;
	private $loadJs;
	private $bodyEnd;
	
	public function __construct(bool $loadBootstrapCss = true, bool $loadJs = true, bool $bodyEnd = true) {
		$this->loadBootstrapCss = $loadBootstrapCss;
		$this->loadJs = $loadJs;
		$this->bodyEnd = $bodyEnd;
	}
	
	/**
	 * {@inheritDoc}
	 * @see \n2n\impl\web\ui\view\html\Library::apply()
	 */
	public function apply(HtmlView $view, HtmlBuilderMeta $htmlMeta) {
		if ($this->loadBootstrapCss) {
			$htmlMeta->addCss('dist/css/bootstrap.min.css', null, 'bootstrap');
		}
		
		if ($this->loadJs) {
			if ($this->bodyEnd) {
				$htmlMeta = $htmlMeta->bodyEnd();
			}
			$htmlMeta->addJs('dist/js/bootstrap.bundle.min.js', 'bootstrap');
		}
	}
}
