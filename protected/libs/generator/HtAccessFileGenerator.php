<?php 

/**
*
* HtAccessFileGenerator
 *
 * Creates a temporary file containing htaccess configuration for
 * blocking certain IP Address
*/
class HtAccessFileGenerator 
{
	protected $htaccessTemplate;

	function __construct() {
		$this->htaccessTemplate = <<<EOL
 # ALLOW USER BY IP
<Limit GET POST>
 order deny,allow
 deny from all
%s
</Limit>

# PREVENT VIEWING OF .HTACCESS
<Files .htaccess>
 order allow,deny
 deny from all
</Files>
EOL;

	}
    /**
     * Generates temporary file that has the new htaccess configuration
     * @return string Returns path of generated file containing the htaccess configuration
     */
    public function generateFile()
	{
        $rowTemplate = " allow from %s";
        $generatedRowsArr = array();
        $generatedRowsStr = '';
        $generatedHtAccessConfStr = '';
		Yii::trace('retrieving all ip address','dev_trace');
		$allIpAddressesMdls = Ipaddress::model()->findAll();
		foreach ($allIpAddressesMdls as $currentIpAddressMdl) {
			$generatedRowsArr[] = sprintf($rowTemplate, $currentIpAddressMdl->ip_address);
		}
		$generatedRowsStr = implode(PHP_EOL , $generatedRowsArr);
		Yii::trace('generating htaccess configuration string','dev_trace');
		$generatedHtAccessConfStr = sprintf($this->getHtaccessTemplate(), $generatedRowsStr);
		Yii::trace('creating and writing the configuration string to temporary file','dev_trace');
		$tempFileLoc = tempnam(sys_get_temp_dir(), 'htaccess');
		file_put_contents($tempFileLoc, $generatedHtAccessConfStr);
		Yii::trace('return generated temporary file','dev_trace');
        return $tempFileLoc;
	}

    public function getHtaccessTemplate()
    {
        return $this->htaccessTemplate;
    }

	
}