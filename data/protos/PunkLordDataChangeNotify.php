<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * KDGEKJOPEMA (3210)
 *
 * Generated from protobuf message <code>PunkLordDataChangeNotify</code>
 */
class PunkLordDataChangeNotify extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 infcnckapfh = 4;</code>
     */
    protected $infcnckapfh = 0;
    /**
     * Generated from protobuf field <code>uint32 icohfpgniih = 12;</code>
     */
    protected $icohfpgniih = 0;
    /**
     * Generated from protobuf field <code>uint32 ndefcgkbplo = 5;</code>
     */
    protected $ndefcgkbplo = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $infcnckapfh
     *     @type int $icohfpgniih
     *     @type int $ndefcgkbplo
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 infcnckapfh = 4;</code>
     * @return int
     */
    public function getInfcnckapfh()
    {
        return $this->infcnckapfh;
    }

    /**
     * Generated from protobuf field <code>uint32 infcnckapfh = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setInfcnckapfh($var)
    {
        GPBUtil::checkUint32($var);
        $this->infcnckapfh = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 icohfpgniih = 12;</code>
     * @return int
     */
    public function getIcohfpgniih()
    {
        return $this->icohfpgniih;
    }

    /**
     * Generated from protobuf field <code>uint32 icohfpgniih = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setIcohfpgniih($var)
    {
        GPBUtil::checkUint32($var);
        $this->icohfpgniih = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 ndefcgkbplo = 5;</code>
     * @return int
     */
    public function getNdefcgkbplo()
    {
        return $this->ndefcgkbplo;
    }

    /**
     * Generated from protobuf field <code>uint32 ndefcgkbplo = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setNdefcgkbplo($var)
    {
        GPBUtil::checkUint32($var);
        $this->ndefcgkbplo = $var;

        return $this;
    }

}

