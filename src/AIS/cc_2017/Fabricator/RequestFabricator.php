<?php

namespace InDesignClient\AIS\cc_2017\Fabricator;


use InDesignClient\AIS\cc_2017\Fabricator\FabricateService;


class RequestFabricator
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
    * @return FabricateService
    */
    public function Service($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        return new FabricateService($paramAutoSet);
    }



}

?>
