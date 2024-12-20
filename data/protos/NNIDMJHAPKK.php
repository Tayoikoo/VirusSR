<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>NNIDMJHAPKK</code>
 */
class NNIDMJHAPKK extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.GBAINEMEKED APKEFKGPHIE = 13;</code>
     */
    protected $APKEFKGPHIE = 0;
    /**
     * Generated from protobuf field <code>uint32 OMFGMILDJDO = 14;</code>
     */
    protected $OMFGMILDJDO = 0;
    /**
     * Generated from protobuf field <code>uint32 NNOLOOIACLG = 2;</code>
     */
    protected $NNOLOOIACLG = 0;
    /**
     * Generated from protobuf field <code>uint32 MKNHJFFHCDA = 3;</code>
     */
    protected $MKNHJFFHCDA = 0;
    /**
     * Generated from protobuf field <code>repeated uint32 MHFANLAADFF = 15;</code>
     */
    private $MHFANLAADFF;
    /**
     * Generated from protobuf field <code>uint32 scene_event_id = 8;</code>
     */
    protected $scene_event_id = 0;
    /**
     * Generated from protobuf field <code>uint32 DDCGDKHHPAK = 4;</code>
     */
    protected $DDCGDKHHPAK = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $APKEFKGPHIE
     *     @type int $OMFGMILDJDO
     *     @type int $NNOLOOIACLG
     *     @type int $MKNHJFFHCDA
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $MHFANLAADFF
     *     @type int $scene_event_id
     *     @type int $DDCGDKHHPAK
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.GBAINEMEKED APKEFKGPHIE = 13;</code>
     * @return int
     */
    public function getAPKEFKGPHIE()
    {
        return $this->APKEFKGPHIE;
    }

    /**
     * Generated from protobuf field <code>.GBAINEMEKED APKEFKGPHIE = 13;</code>
     * @param int $var
     * @return $this
     */
    public function setAPKEFKGPHIE($var)
    {
        GPBUtil::checkEnum($var, \GBAINEMEKED::class);
        $this->APKEFKGPHIE = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 OMFGMILDJDO = 14;</code>
     * @return int
     */
    public function getOMFGMILDJDO()
    {
        return $this->OMFGMILDJDO;
    }

    /**
     * Generated from protobuf field <code>uint32 OMFGMILDJDO = 14;</code>
     * @param int $var
     * @return $this
     */
    public function setOMFGMILDJDO($var)
    {
        GPBUtil::checkUint32($var);
        $this->OMFGMILDJDO = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 NNOLOOIACLG = 2;</code>
     * @return int
     */
    public function getNNOLOOIACLG()
    {
        return $this->NNOLOOIACLG;
    }

    /**
     * Generated from protobuf field <code>uint32 NNOLOOIACLG = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setNNOLOOIACLG($var)
    {
        GPBUtil::checkUint32($var);
        $this->NNOLOOIACLG = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 MKNHJFFHCDA = 3;</code>
     * @return int
     */
    public function getMKNHJFFHCDA()
    {
        return $this->MKNHJFFHCDA;
    }

    /**
     * Generated from protobuf field <code>uint32 MKNHJFFHCDA = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setMKNHJFFHCDA($var)
    {
        GPBUtil::checkUint32($var);
        $this->MKNHJFFHCDA = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 MHFANLAADFF = 15;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMHFANLAADFF()
    {
        return $this->MHFANLAADFF;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 MHFANLAADFF = 15;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMHFANLAADFF($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->MHFANLAADFF = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 scene_event_id = 8;</code>
     * @return int
     */
    public function getSceneEventId()
    {
        return $this->scene_event_id;
    }

    /**
     * Generated from protobuf field <code>uint32 scene_event_id = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setSceneEventId($var)
    {
        GPBUtil::checkUint32($var);
        $this->scene_event_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 DDCGDKHHPAK = 4;</code>
     * @return int
     */
    public function getDDCGDKHHPAK()
    {
        return $this->DDCGDKHHPAK;
    }

    /**
     * Generated from protobuf field <code>uint32 DDCGDKHHPAK = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setDDCGDKHHPAK($var)
    {
        GPBUtil::checkUint32($var);
        $this->DDCGDKHHPAK = $var;

        return $this;
    }

}
