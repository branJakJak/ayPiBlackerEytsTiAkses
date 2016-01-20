<?php

class RebuildHtAccessBehavior extends CActiveRecordBehavior{
	public $htaccessFile;
	public function rebuildHtAccessFile()
	{
		$htAccessIpBlock = new HtAccessIpBlock($this->htaccessFile);
		$result = $htAccessIpBlock->implementIpBlock($this->htaccessFile);
	}

}