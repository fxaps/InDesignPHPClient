<?php

namespace InDesignClient\AIS\cc_2017\WSAPI\Service;

class IDSPScriptArg
{

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $value
     */
    protected $value = null;

    /**
     * @param string $name
     * @param string $value
     */
    public function __construct($name = null, $value = null)
    {
      $this->name = $name;
      $this->value = $value;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \InDesignClient\AIS\cc_2017\WSAPI\Service\IDSPScriptArg
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param string $value
     * @return \InDesignClient\AIS\cc_2017\WSAPI\Service\IDSPScriptArg
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
