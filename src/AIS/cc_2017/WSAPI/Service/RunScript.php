<?php

namespace InDesignClient\AIS\cc_2017\WSAPI\Service;

class RunScript
{

    /**
     * @var RunScriptParameters $runScriptParameters
     */
    protected $runScriptParameters = null;

    /**
     * @param RunScriptParameters $runScriptParameters
     */
    public function __construct($runScriptParameters = null)
    {
      $this->runScriptParameters = $runScriptParameters;
    }

    /**
     * @return RunScriptParameters
     */
    public function getRunScriptParameters()
    {
      return $this->runScriptParameters;
    }

    /**
     * @param RunScriptParameters $runScriptParameters
     * @return \InDesignClient\AIS\cc_2017\WSAPI\Service\RunScript
     */
    public function setRunScriptParameters($runScriptParameters)
    {
      $this->runScriptParameters = $runScriptParameters;
      return $this;
    }

}
