<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>NLKFAEELOFC</code>
 */
class NLKFAEELOFC extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .EMIIFPJHLCM LDLKIHGICIJ = 13;</code>
     */
    private $LDLKIHGICIJ;
    /**
     * Generated from protobuf field <code>repeated .MBFGFOGLDAP buff_list = 9;</code>
     */
    private $buff_list;
    /**
     * Generated from protobuf field <code>repeated .MMMBOIJODHG MPLABMDJANB = 2;</code>
     */
    private $MPLABMDJANB;
    /**
     * Generated from protobuf field <code>repeated .CLJJKJMBFLK EDPJKHBDGDB = 11;</code>
     */
    private $EDPJKHBDGDB;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\EMIIFPJHLCM>|\Google\Protobuf\Internal\RepeatedField $LDLKIHGICIJ
     *     @type array<\MBFGFOGLDAP>|\Google\Protobuf\Internal\RepeatedField $buff_list
     *     @type array<\MMMBOIJODHG>|\Google\Protobuf\Internal\RepeatedField $MPLABMDJANB
     *     @type array<\CLJJKJMBFLK>|\Google\Protobuf\Internal\RepeatedField $EDPJKHBDGDB
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .EMIIFPJHLCM LDLKIHGICIJ = 13;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLDLKIHGICIJ()
    {
        return $this->LDLKIHGICIJ;
    }

    /**
     * Generated from protobuf field <code>repeated .EMIIFPJHLCM LDLKIHGICIJ = 13;</code>
     * @param array<\EMIIFPJHLCM>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLDLKIHGICIJ($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \EMIIFPJHLCM::class);
        $this->LDLKIHGICIJ = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .MBFGFOGLDAP buff_list = 9;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBuffList()
    {
        return $this->buff_list;
    }

    /**
     * Generated from protobuf field <code>repeated .MBFGFOGLDAP buff_list = 9;</code>
     * @param array<\MBFGFOGLDAP>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBuffList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \MBFGFOGLDAP::class);
        $this->buff_list = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .MMMBOIJODHG MPLABMDJANB = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMPLABMDJANB()
    {
        return $this->MPLABMDJANB;
    }

    /**
     * Generated from protobuf field <code>repeated .MMMBOIJODHG MPLABMDJANB = 2;</code>
     * @param array<\MMMBOIJODHG>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMPLABMDJANB($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \MMMBOIJODHG::class);
        $this->MPLABMDJANB = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .CLJJKJMBFLK EDPJKHBDGDB = 11;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEDPJKHBDGDB()
    {
        return $this->EDPJKHBDGDB;
    }

    /**
     * Generated from protobuf field <code>repeated .CLJJKJMBFLK EDPJKHBDGDB = 11;</code>
     * @param array<\CLJJKJMBFLK>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEDPJKHBDGDB($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \CLJJKJMBFLK::class);
        $this->EDPJKHBDGDB = $arr;

        return $this;
    }

}

