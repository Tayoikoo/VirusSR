<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>ADDCJFIBCFF</code>
 */
class ADDCJFIBCFF extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 CIJBGKHBHBL = 9;</code>
     */
    protected $CIJBGKHBHBL = 0;
    /**
     * Generated from protobuf field <code>uint32 LGBJLFEMFOL = 3;</code>
     */
    protected $LGBJLFEMFOL = 0;
    /**
     * Generated from protobuf field <code>uint32 OLNEPHADOEA = 4;</code>
     */
    protected $OLNEPHADOEA = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $CIJBGKHBHBL
     *     @type int $LGBJLFEMFOL
     *     @type int $OLNEPHADOEA
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 CIJBGKHBHBL = 9;</code>
     * @return int
     */
    public function getCIJBGKHBHBL()
    {
        return $this->CIJBGKHBHBL;
    }

    /**
     * Generated from protobuf field <code>uint32 CIJBGKHBHBL = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setCIJBGKHBHBL($var)
    {
        GPBUtil::checkUint32($var);
        $this->CIJBGKHBHBL = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 LGBJLFEMFOL = 3;</code>
     * @return int
     */
    public function getLGBJLFEMFOL()
    {
        return $this->LGBJLFEMFOL;
    }

    /**
     * Generated from protobuf field <code>uint32 LGBJLFEMFOL = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setLGBJLFEMFOL($var)
    {
        GPBUtil::checkUint32($var);
        $this->LGBJLFEMFOL = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 OLNEPHADOEA = 4;</code>
     * @return int
     */
    public function getOLNEPHADOEA()
    {
        return $this->OLNEPHADOEA;
    }

    /**
     * Generated from protobuf field <code>uint32 OLNEPHADOEA = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setOLNEPHADOEA($var)
    {
        GPBUtil::checkUint32($var);
        $this->OLNEPHADOEA = $var;

        return $this;
    }

}
