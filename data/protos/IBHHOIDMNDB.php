<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>IBHHOIDMNDB</code>
 */
class IBHHOIDMNDB extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 IBAKCHMIOGG = 5;</code>
     */
    protected $IBAKCHMIOGG = 0;
    /**
     * Generated from protobuf field <code>uint32 HMGCNFIFKDJ = 13;</code>
     */
    protected $HMGCNFIFKDJ = 0;
    /**
     * Generated from protobuf field <code>uint32 NDHNELNKLAA = 8;</code>
     */
    protected $NDHNELNKLAA = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $IBAKCHMIOGG
     *     @type int $HMGCNFIFKDJ
     *     @type int $NDHNELNKLAA
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 IBAKCHMIOGG = 5;</code>
     * @return int
     */
    public function getIBAKCHMIOGG()
    {
        return $this->IBAKCHMIOGG;
    }

    /**
     * Generated from protobuf field <code>uint32 IBAKCHMIOGG = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setIBAKCHMIOGG($var)
    {
        GPBUtil::checkUint32($var);
        $this->IBAKCHMIOGG = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 HMGCNFIFKDJ = 13;</code>
     * @return int
     */
    public function getHMGCNFIFKDJ()
    {
        return $this->HMGCNFIFKDJ;
    }

    /**
     * Generated from protobuf field <code>uint32 HMGCNFIFKDJ = 13;</code>
     * @param int $var
     * @return $this
     */
    public function setHMGCNFIFKDJ($var)
    {
        GPBUtil::checkUint32($var);
        $this->HMGCNFIFKDJ = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 NDHNELNKLAA = 8;</code>
     * @return int
     */
    public function getNDHNELNKLAA()
    {
        return $this->NDHNELNKLAA;
    }

    /**
     * Generated from protobuf field <code>uint32 NDHNELNKLAA = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setNDHNELNKLAA($var)
    {
        GPBUtil::checkUint32($var);
        $this->NDHNELNKLAA = $var;

        return $this;
    }

}
