<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ENPLKMGDCHP (6452)
 *
 * Generated from protobuf message <code>TravelBrochureApplyPasterCsReq</code>
 */
class TravelBrochureApplyPasterCsReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 cjaebolpifp = 10;</code>
     */
    protected $cjaebolpifp = 0;
    /**
     * Generated from protobuf field <code>uint32 kmdnpchkgkn = 4;</code>
     */
    protected $kmdnpchkgkn = 0;
    /**
     * Generated from protobuf field <code>int32 hjikkgeejbi = 8;</code>
     */
    protected $hjikkgeejbi = 0;
    /**
     * Generated from protobuf field <code>uint32 item_id = 1;</code>
     */
    protected $item_id = 0;
    /**
     * Generated from protobuf field <code>uint32 gcfehgmgodk = 11;</code>
     */
    protected $gcfehgmgodk = 0;
    /**
     * Generated from protobuf field <code>int32 ebjjbbamkdp = 12;</code>
     */
    protected $ebjjbbamkdp = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $cjaebolpifp
     *     @type int $kmdnpchkgkn
     *     @type int $hjikkgeejbi
     *     @type int $item_id
     *     @type int $gcfehgmgodk
     *     @type int $ebjjbbamkdp
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 cjaebolpifp = 10;</code>
     * @return int
     */
    public function getCjaebolpifp()
    {
        return $this->cjaebolpifp;
    }

    /**
     * Generated from protobuf field <code>uint32 cjaebolpifp = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setCjaebolpifp($var)
    {
        GPBUtil::checkUint32($var);
        $this->cjaebolpifp = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 kmdnpchkgkn = 4;</code>
     * @return int
     */
    public function getKmdnpchkgkn()
    {
        return $this->kmdnpchkgkn;
    }

    /**
     * Generated from protobuf field <code>uint32 kmdnpchkgkn = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setKmdnpchkgkn($var)
    {
        GPBUtil::checkUint32($var);
        $this->kmdnpchkgkn = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 hjikkgeejbi = 8;</code>
     * @return int
     */
    public function getHjikkgeejbi()
    {
        return $this->hjikkgeejbi;
    }

    /**
     * Generated from protobuf field <code>int32 hjikkgeejbi = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setHjikkgeejbi($var)
    {
        GPBUtil::checkInt32($var);
        $this->hjikkgeejbi = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 item_id = 1;</code>
     * @return int
     */
    public function getItemId()
    {
        return $this->item_id;
    }

    /**
     * Generated from protobuf field <code>uint32 item_id = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setItemId($var)
    {
        GPBUtil::checkUint32($var);
        $this->item_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 gcfehgmgodk = 11;</code>
     * @return int
     */
    public function getGcfehgmgodk()
    {
        return $this->gcfehgmgodk;
    }

    /**
     * Generated from protobuf field <code>uint32 gcfehgmgodk = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setGcfehgmgodk($var)
    {
        GPBUtil::checkUint32($var);
        $this->gcfehgmgodk = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 ebjjbbamkdp = 12;</code>
     * @return int
     */
    public function getEbjjbbamkdp()
    {
        return $this->ebjjbbamkdp;
    }

    /**
     * Generated from protobuf field <code>int32 ebjjbbamkdp = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setEbjjbbamkdp($var)
    {
        GPBUtil::checkInt32($var);
        $this->ebjjbbamkdp = $var;

        return $this;
    }

}
