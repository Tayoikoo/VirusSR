<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * KPOFPJKKBFI (7074)
 *
 * Generated from protobuf message <code>MonopolyMoveCsReq</code>
 */
class MonopolyMoveCsReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 fklbhncojim = 4;</code>
     */
    protected $fklbhncojim = 0;
    /**
     * Generated from protobuf field <code>uint32 gfmlhcbjpcb = 6;</code>
     */
    protected $gfmlhcbjpcb = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $fklbhncojim
     *     @type int $gfmlhcbjpcb
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 fklbhncojim = 4;</code>
     * @return int
     */
    public function getFklbhncojim()
    {
        return $this->fklbhncojim;
    }

    /**
     * Generated from protobuf field <code>uint32 fklbhncojim = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setFklbhncojim($var)
    {
        GPBUtil::checkUint32($var);
        $this->fklbhncojim = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 gfmlhcbjpcb = 6;</code>
     * @return int
     */
    public function getGfmlhcbjpcb()
    {
        return $this->gfmlhcbjpcb;
    }

    /**
     * Generated from protobuf field <code>uint32 gfmlhcbjpcb = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setGfmlhcbjpcb($var)
    {
        GPBUtil::checkUint32($var);
        $this->gfmlhcbjpcb = $var;

        return $this;
    }

}
