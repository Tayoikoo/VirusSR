<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>GMJAGNOCABD</code>
 */
class GMJAGNOCABD extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.FCPOCIKPEBN GKACBDJKNKO = 1;</code>
     */
    protected $GKACBDJKNKO = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \FCPOCIKPEBN $GKACBDJKNKO
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.FCPOCIKPEBN GKACBDJKNKO = 1;</code>
     * @return \FCPOCIKPEBN|null
     */
    public function getGKACBDJKNKO()
    {
        return $this->GKACBDJKNKO;
    }

    public function hasGKACBDJKNKO()
    {
        return isset($this->GKACBDJKNKO);
    }

    public function clearGKACBDJKNKO()
    {
        unset($this->GKACBDJKNKO);
    }

    /**
     * Generated from protobuf field <code>.FCPOCIKPEBN GKACBDJKNKO = 1;</code>
     * @param \FCPOCIKPEBN $var
     * @return $this
     */
    public function setGKACBDJKNKO($var)
    {
        GPBUtil::checkMessage($var, \FCPOCIKPEBN::class);
        $this->GKACBDJKNKO = $var;

        return $this;
    }

}

