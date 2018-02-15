<?php

namespace InDesignClient\AIS\cc_2017\WSAPI\Service;

class Data
{

    /**
     * @var mixed $data
     */
    protected $data = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return mixed
     */
    public function getData()
    {
      return $this->data;
    }

    /**
     * @param mixed $data
     * @return \InDesignClient\AIS\cc_2017\WSAPI\Service\Data
     */
    public function setData($data)
    {
      $this->data = $data;
      return $this;
    }

}
