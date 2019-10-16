<?php

namespace bootstrap\img;

use n2n\impl\web\ui\view\html\img\ProportionalImgComposer;
use n2n\core\N2N;

class MimgBs {
	
	/**
	 * @param ProportionalImgComposer $pic
	 * @return \bootstrap\img\BsImgComposer
	 */
	public static function xs(ProportionalImgComposer $pic) {
		$bootstrapConfig = N2N::getN2nContext()->getModuleConfig('bootstrap');
		
		return new BsImgComposer($pic, $bootstrapConfig);
	}
}