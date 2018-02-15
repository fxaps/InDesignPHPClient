<?php

namespace InDesignClient\AIS\cc_2017\WSAPI\Service;

class RunScriptResponse
{

    /**
     * @var int $errorNumber
     */
    protected $errorNumber = null;

    /**
     * @var string $errorString
     */
    protected $errorString = null;

    /**
     * @var Data $scriptResult
     */
    protected $scriptResult = null;

    /**
     * @param int $errorNumber
     * @param string $errorString
     * @param Data $scriptResult
     */
    public function __construct($errorNumber = null, $errorString = null, $scriptResult = null)
    {
      $this->errorNumber = $errorNumber;
      $this->errorString = $errorString;
      $this->scriptResult = $scriptResult;
    }

    /**
     * @return int
     */
    public function getErrorNumber()
    {
      return $this->errorNumber;
    }

    /**
     * @param int $errorNumber
     * @return \InDesignClient\AIS\cc_2017\WSAPI\Service\RunScriptResponse
     */
    public function setErrorNumber($errorNumber)
    {
      $this->errorNumber = $errorNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getErrorString()
    {
      return $this->errorString;
    }

    /**
     * @param string $errorString
     * @return \InDesignClient\AIS\cc_2017\WSAPI\Service\RunScriptResponse
     */
    public function setErrorString($errorString)
    {
      $this->errorString = $errorString;
      return $this;
    }

    /**
     * @return Data
     */
    public function getScriptResult()
    {
      return $this->scriptResult;
    }

    /**
     * @param Data $scriptResult
     * @return \InDesignClient\AIS\cc_2017\WSAPI\Service\RunScriptResponse
     */
    public function setScriptResult($scriptResult)
    {
      $this->scriptResult = $scriptResult;
      return $this;
    }

}
