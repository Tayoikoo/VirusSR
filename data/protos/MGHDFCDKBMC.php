<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>MGHDFCDKBMC</code>
 */
class MGHDFCDKBMC extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 IGADMJFCGCO = 11;</code>
     */
    protected $IGADMJFCGCO = 0;
    /**
     * Generated from protobuf field <code>uint64 unique_id = 13;</code>
     */
    protected $unique_id = 0;
    /**
     * Generated from protobuf field <code>uint32 LGBJLFEMFOL = 14;</code>
     */
    protected $LGBJLFEMFOL = 0;
    /**
     * Generated from protobuf field <code>int32 NPIDJACJPFN = 1;</code>
     */
    protected $NPIDJACJPFN = 0;
    /**
     * Generated from protobuf field <code>uint32 HLCJKBONMOF = 3;</code>
     */
    protected $HLCJKBONMOF = 0;
    /**
     * Generated from protobuf field <code>int32 GAJFGDGOBCG = 5;</code>
     */
    protected $GAJFGDGOBCG = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $IGADMJFCGCO
     *     @type int|string $unique_id
     *     @type int $LGBJLFEMFOL
     *     @type int $NPIDJACJPFN
     *     @type int $HLCJKBONMOF
     *     @type int $GAJFGDGOBCG
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 IGADMJFCGCO = 11;</code>
     * @return int
     */
    public function getIGADMJFCGCO()
    {
        return $this->IGADMJFCGCO;
    }

    /**
     * Generated from protobuf field <code>uint32 IGADMJFCGCO = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setIGADMJFCGCO($var)
    {
        GPBUtil::checkUint32($var);
        $this->IGADMJFCGCO = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 unique_id = 13;</code>
     * @return int|string
     */
    public function getUniqueId()
    {
        return $this->unique_id;
    }

    /**
     * Generated from protobuf field <code>uint64 unique_id = 13;</code>
     * @param int|string $var
     * @return $this
     */
    public function setUniqueId($var)
    {
        GPBUtil::checkUint64($var);
        $this->unique_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 LGBJLFEMFOL = 14;</code>
     * @return int
     */
    public function getLGBJLFEMFOL()
    {
        return $this->LGBJLFEMFOL;
    }

    /**
     * Generated from protobuf field <code>uint32 LGBJLFEMFOL = 14;</code>
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
     * Generated from protobuf field <code>int32 NPIDJACJPFN = 1;</code>
     * @return int
     */
    public function getNPIDJACJPFN()
    {
        return $this->NPIDJACJPFN;
    }

    /**
     * Generated from protobuf field <code>int32 NPIDJACJPFN = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setNPIDJACJPFN($var)
    {
        GPBUtil::checkInt32($var);
        $this->NPIDJACJPFN = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 HLCJKBONMOF = 3;</code>
     * @return int
     */
    public function getHLCJKBONMOF()
    {
        return $this->HLCJKBONMOF;
    }

    /**
     * Generated from protobuf field <code>uint32 HLCJKBONMOF = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setHLCJKBONMOF($var)
    {
        GPBUtil::checkUint32($var);
        $this->HLCJKBONMOF = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 GAJFGDGOBCG = 5;</code>
     * @return int
     */
    public function getGAJFGDGOBCG()
    {
        return $this->GAJFGDGOBCG;
    }

    /**
     * Generated from protobuf field <code>int32 GAJFGDGOBCG = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setGAJFGDGOBCG($var)
    {
        GPBUtil::checkInt32($var);
        $this->GAJFGDGOBCG = $var;

        return $this;
    }

}

