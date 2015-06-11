<?php

class MobWeb_LogoUpload_Block_Html_Header extends Mage_Page_Block_Html_Header
{
	public function getLogoSrc()
	{

		// If a logo has been uploaded, use it
		if($uploadedLogo = Mage::getStoreConfig('design/header/logo_upload')) {
			return '/media/mobweb_logoupload/' . $uploadedLogo;
		}

		// If no logo has been uploaded, fall back to the default logic
		if (empty($this->_data['logo_src'])) {
			$this->_data['logo_src'] = Mage::getStoreConfig('design/header/logo_src');
		}
		return $this->getSkinUrl($this->_data['logo_src']);
	}

	public function getLogoSrcSmall()
	{

		// If a logo has been uploaded, use it
		if($uploadedLogo = Mage::getStoreConfig('design/header/logo_small_upload')) {
			return '/media/mobweb_logoupload/' . $uploadedLogo;
		}

		// If no logo has been uploaded, fall back to the default logic
		if (empty($this->_data['logo_src_small'])) {
			$this->_data['logo_src_small'] = Mage::getStoreConfig('design/header/logo_src_small');
		}
		return $this->getSkinUrl($this->_data['logo_src_small']);
	}
}