<?php

namespace InDesignClient\AIS\cc_2017\Fabricator;


use InDesignClient\AIS\cc_2017\WSAPI\Service\RunScript;
use InDesignClient\AIS\cc_2017\WSAPI\Service\RunScriptResponse;
use InDesignClient\AIS\cc_2017\WSAPI\Service\RunScriptParameters;
use InDesignClient\AIS\cc_2017\WSAPI\Service\IDSPScriptArg;
use InDesignClient\AIS\cc_2017\WSAPI\Service\Data;


class FabricateService
{
    private $paramAutoSet;
    
    /**
     * Constructor.
     *
     * @param array $paramAutoSet
     */
    public function __construct($paramAutoSet = [])
    {
        $this->setParamAutoSet($paramAutoSet);
    }


    /**
     * @return array
     */
    public function getParamAutoSet()
    {
        return $this->paramAutoSet;
    }


    /**
     * @param array $paramAutoSet
     */
    public function setParamAutoSet($paramAutoSet)
    {
        $this->paramAutoSet = $paramAutoSet;
    }


   /**
    * @param array $paramAutoSet
    * @return RunScript
    */
    public function RunScript($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $RunScript = new RunScript();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($RunScript, $methodName)) {
                $RunScript->$methodName($paramValue);
            }
        }
        return $RunScript;
    }


   /**
    * @param array $paramAutoSet
    * @return RunScriptResponse
    */
    public function RunScriptResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $RunScriptResponse = new RunScriptResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($RunScriptResponse, $methodName)) {
                $RunScriptResponse->$methodName($paramValue);
            }
        }
        return $RunScriptResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return RunScriptParameters
    */
    public function RunScriptParameters($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $RunScriptParameters = new RunScriptParameters();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($RunScriptParameters, $methodName)) {
                $RunScriptParameters->$methodName($paramValue);
            }
        }
        return $RunScriptParameters;
    }


   /**
    * @param array $paramAutoSet
    * @return IDSPScriptArg
    */
    public function IDSPScriptArg($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $IDSPScriptArg = new IDSPScriptArg();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($IDSPScriptArg, $methodName)) {
                $IDSPScriptArg->$methodName($paramValue);
            }
        }
        return $IDSPScriptArg;
    }


   /**
    * @param array $paramAutoSet
    * @return Data
    */
    public function Data($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $Data = new Data();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($Data, $methodName)) {
                $Data->$methodName($paramValue);
            }
        }
        return $Data;
    }



}

?>
