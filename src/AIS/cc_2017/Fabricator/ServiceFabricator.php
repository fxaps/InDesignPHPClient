<?php

namespace InDesignClient\AIS\cc_2017\Fabricator;


use InDesignClient\Utilities\Formatter;
use InDesignClient\AIS\cc_2017\WSAPI\Service\Service;


class ServiceFabricator
{
    private $aisUrl;
    private $options;

    /**
     * ServiceFabricator constructor.
     *
     * @param array $options
     * @param string $serverUrl
     */
    public function __construct(array $options = [], $serverUrl = 'http://localhost:12345/')
    {
        $this->setAISUrl($serverUrl);
        $this->setOptions($options);
    }

    /**
     * @return string
     */
    public function getAISUrl()
    {
        return $this->aisUrl;
    }

    /**
     * @param string $aisUrl
     */
    public function setAISUrl($aisUrl)
    {
        $aisUrl = Formatter::fixServerUrl($aisUrl);
        $this->aisUrl = $aisUrl;
    }

    /**
     * @return array
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @param array $options
     */
    public function setOptions($options)
    {
        $this->options = $options;
    }


   /**
    * @param null|array $options
    * @param null|string $serverUrl
    * @return Service
    */
    public function Service($options = null, $serverUrl = null)
    {
        $append = "Service.asmx?wsdl";
        
        if ($options) {
            $options = array_merge($this->options, $options);
        } else {
            $options = $this->getOptions();
        }
        
        if ($serverUrl) {
            $serverUrl = Formatter::fixServerUrl($serverUrl) . $append;
        } else {
            $serverUrl = $this->getAISUrl() . $append;
        }
        
        return new Service($options, $serverUrl);
    }



}

?>
