<?php

namespace InDesignClient\AIS\cc_2017\WSAPI\Service;

class RunScriptParameters
{

    /**
     * @var string $scriptText
     */
    protected $scriptText = null;

    /**
     * @var string $scriptLanguage
     */
    protected $scriptLanguage = null;

    /**
     * @var string $scriptFile
     */
    protected $scriptFile = null;

    /**
     * @var IDSPScriptArg[] $scriptArgs
     */
    protected $scriptArgs = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getScriptText()
    {
      return $this->scriptText;
    }

    /**
     * @param string $scriptText
     * @return \InDesignClient\AIS\cc_2017\WSAPI\Service\RunScriptParameters
     */
    public function setScriptText($scriptText)
    {
      $this->scriptText = $scriptText;
      return $this;
    }

    /**
     * @return string
     */
    public function getScriptLanguage()
    {
      return $this->scriptLanguage;
    }

    /**
     * @param string $scriptLanguage
     * @return \InDesignClient\AIS\cc_2017\WSAPI\Service\RunScriptParameters
     */
    public function setScriptLanguage($scriptLanguage)
    {
      $this->scriptLanguage = $scriptLanguage;
      return $this;
    }

    /**
     * @return string
     */
    public function getScriptFile()
    {
      return $this->scriptFile;
    }

    /**
     * @param string $scriptFile
     * @return \InDesignClient\AIS\cc_2017\WSAPI\Service\RunScriptParameters
     */
    public function setScriptFile($scriptFile)
    {
      $this->scriptFile = $scriptFile;
      return $this;
    }

    /**
     * @return IDSPScriptArg[]
     */
    public function getScriptArgs()
    {
      return $this->scriptArgs;
    }

    /**
     * @param IDSPScriptArg[] $scriptArgs
     * @return \InDesignClient\AIS\cc_2017\WSAPI\Service\RunScriptParameters
     */
    public function setScriptArgs(array $scriptArgs = null)
    {
      $this->scriptArgs = $scriptArgs;
      return $this;
    }

}
