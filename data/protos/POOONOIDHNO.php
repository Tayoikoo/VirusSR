<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>POOONOIDHNO</code>
 */
class POOONOIDHNO extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string MIEHEHEJFFM = 1;</code>
     */
    protected $MIEHEHEJFFM = '';
    /**
     * Generated from protobuf field <code>double JMDADAHHGDH = 2;</code>
     */
    protected $JMDADAHHGDH = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $MIEHEHEJFFM
     *     @type float $JMDADAHHGDH
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string MIEHEHEJFFM = 1;</code>
     * @return string
     */
    public function getMIEHEHEJFFM()
    {
        return $this->MIEHEHEJFFM;
    }

    /**
     * Generated from protobuf field <code>string MIEHEHEJFFM = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setMIEHEHEJFFM($var)
    {
        GPBUtil::checkString($var, True);
        $this->MIEHEHEJFFM = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double JMDADAHHGDH = 2;</code>
     * @return float
     */
    public function getJMDADAHHGDH()
    {
        return $this->JMDADAHHGDH;
    }

    /**
     * Generated from protobuf field <code>double JMDADAHHGDH = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setJMDADAHHGDH($var)
    {
        GPBUtil::checkDouble($var);
        $this->JMDADAHHGDH = $var;

        return $this;
    }

}
