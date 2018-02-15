<?php

namespace InDesignClient\AIS\cc_2017\WSAPI\Service;


/**
 * gSOAP 2.7.8c generated service definition
 */
class Service extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
  'RunScript' => 'InDesignClient\\AIS\\cc_2017\\WSAPI\\Service\\RunScript',
  'RunScriptResponse' => 'InDesignClient\\AIS\\cc_2017\\WSAPI\\Service\\RunScriptResponse',
  'RunScriptParameters' => 'InDesignClient\\AIS\\cc_2017\\WSAPI\\Service\\RunScriptParameters',
  'IDSPScriptArg' => 'InDesignClient\\AIS\\cc_2017\\WSAPI\\Service\\IDSPScriptArg',
  'Data' => 'InDesignClient\\AIS\\cc_2017\\WSAPI\\Service\\Data',
);

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
    
  foreach (self::$classmap as $key => $value) {
    if (!isset($options['classmap'][$key])) {
      $options['classmap'][$key] = $value;
    }
  }
      $options = array_merge(array (
  'features' => 1,
), $options);
      if (!$wsdl) {
        $wsdl = 'http://localhost:12345/Service.xml?wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * Service definition of function IDSP__RunScript
     *
     * @param RunScript $parameters
     * @return RunScriptResponse
     */
    public function RunScript(RunScript $parameters)
    {
      return $this->__soapCall('RunScript', array($parameters));
    }

}
