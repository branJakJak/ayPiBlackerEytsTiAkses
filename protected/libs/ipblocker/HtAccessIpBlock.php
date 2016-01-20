<?php

/**
 * Class HtAccessIpBlock
 */
class HtAccessIpBlock implements IpBlockInterface
{
    protected $htaccessLocation;

    function __construct($htaccessLocation)
    {
        touch($htaccessLocation);// create if it doesn't exists
        $this->htaccessLocation = $htaccessLocation;// 
    }

    public function implementIpBlock()
    {
        $commandResult = null;
        $htaccessFileGenerator = new HtAccessFileGenerator();
        /*generate the htaccess content*/
        Yii::trace('generate the htaccess content', 'dev_trace');
        $temporaryContainer = $htaccessFileGenerator->generateFile();
        /* get the htaccess file location */
        Yii::trace('get the htaccess file location', 'dev_trace');
        if (!isset(  $this->htaccessLocation  ) || empty($this->htaccessLocation)) {
            throw new CHttpException(500, "Please define the path of htaccess");
        } else {
            $htAccessLocation = realpath($this->getHtaccessLocation());
            Yii::trace('overwrite the content of old htaccess', 'dev_trace');
            /* overwrite the content */
            $shellCommand = "cat $temporaryContainer > $htAccessLocation && echo done";
            $commandResult = shell_exec($shellCommand);
            $commandResult = trim($commandResult);
        }
        return $commandResult;
    }

    public function setHtaccessLocation($htaccessLocation)
    {
        $this->htaccessLocation = $htaccessLocation;
    }

    public function getHtaccessLocation()
    {
        return $this->htaccessLocation;
    }

}