<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>OPBFBEJFALE</code>
 */
class OPBFBEJFALE extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.ECFEPHMPLFI JGDKKJNEGOH = 9;</code>
     */
    protected $JGDKKJNEGOH = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \ECFEPHMPLFI $JGDKKJNEGOH
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.ECFEPHMPLFI JGDKKJNEGOH = 9;</code>
     * @return \ECFEPHMPLFI|null
     */
    public function getJGDKKJNEGOH()
    {
        return $this->JGDKKJNEGOH;
    }

    public function hasJGDKKJNEGOH()
    {
        return isset($this->JGDKKJNEGOH);
    }

    public function clearJGDKKJNEGOH()
    {
        unset($this->JGDKKJNEGOH);
    }

    /**
     * Generated from protobuf field <code>.ECFEPHMPLFI JGDKKJNEGOH = 9;</code>
     * @param \ECFEPHMPLFI $var
     * @return $this
     */
    public function setJGDKKJNEGOH($var)
    {
        GPBUtil::checkMessage($var, \ECFEPHMPLFI::class);
        $this->JGDKKJNEGOH = $var;

        return $this;
    }

}

