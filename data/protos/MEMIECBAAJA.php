<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>MEMIECBAAJA</code>
 */
class MEMIECBAAJA extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 ejdepkeaoli = 7;</code>
     */
    protected $ejdepkeaoli = 0;
    /**
     * Generated from protobuf field <code>uint32 abdgfjelhhk = 15;</code>
     */
    protected $abdgfjelhhk = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $ejdepkeaoli
     *     @type int $abdgfjelhhk
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 ejdepkeaoli = 7;</code>
     * @return int
     */
    public function getEjdepkeaoli()
    {
        return $this->ejdepkeaoli;
    }

    /**
     * Generated from protobuf field <code>uint32 ejdepkeaoli = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setEjdepkeaoli($var)
    {
        GPBUtil::checkUint32($var);
        $this->ejdepkeaoli = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 abdgfjelhhk = 15;</code>
     * @return int
     */
    public function getAbdgfjelhhk()
    {
        return $this->abdgfjelhhk;
    }

    /**
     * Generated from protobuf field <code>uint32 abdgfjelhhk = 15;</code>
     * @param int $var
     * @return $this
     */
    public function setAbdgfjelhhk($var)
    {
        GPBUtil::checkUint32($var);
        $this->abdgfjelhhk = $var;

        return $this;
    }

}

