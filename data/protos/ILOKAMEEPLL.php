<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>ILOKAMEEPLL</code>
 */
class ILOKAMEEPLL extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool LFJLHJHPLGI = 3;</code>
     */
    protected $LFJLHJHPLGI = false;
    /**
     * Generated from protobuf field <code>.JNJKMBIGMPE KILHOKNHHBD = 13;</code>
     */
    protected $KILHOKNHHBD = null;
    /**
     * Generated from protobuf field <code>uint32 LMFHNELKFOC = 4;</code>
     */
    protected $LMFHNELKFOC = 0;
    /**
     * Generated from protobuf field <code>uint32 retcode = 6;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>.JIADKOFHHJM KPPFCHGDODL = 1506;</code>
     */
    protected $KPPFCHGDODL = null;
    /**
     * Generated from protobuf field <code>.JGNHFJAGHKA LFCEFFHMLIG = 69;</code>
     */
    protected $LFCEFFHMLIG = null;
    /**
     * Generated from protobuf field <code>.CKCNEGHAMGM KIBAIMIKFED = 366;</code>
     */
    protected $KIBAIMIKFED = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $LFJLHJHPLGI
     *     @type \JNJKMBIGMPE $KILHOKNHHBD
     *     @type int $LMFHNELKFOC
     *     @type int $retcode
     *     @type \JIADKOFHHJM $KPPFCHGDODL
     *     @type \JGNHFJAGHKA $LFCEFFHMLIG
     *     @type \CKCNEGHAMGM $KIBAIMIKFED
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool LFJLHJHPLGI = 3;</code>
     * @return bool
     */
    public function getLFJLHJHPLGI()
    {
        return $this->LFJLHJHPLGI;
    }

    /**
     * Generated from protobuf field <code>bool LFJLHJHPLGI = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setLFJLHJHPLGI($var)
    {
        GPBUtil::checkBool($var);
        $this->LFJLHJHPLGI = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.JNJKMBIGMPE KILHOKNHHBD = 13;</code>
     * @return \JNJKMBIGMPE|null
     */
    public function getKILHOKNHHBD()
    {
        return $this->KILHOKNHHBD;
    }

    public function hasKILHOKNHHBD()
    {
        return isset($this->KILHOKNHHBD);
    }

    public function clearKILHOKNHHBD()
    {
        unset($this->KILHOKNHHBD);
    }

    /**
     * Generated from protobuf field <code>.JNJKMBIGMPE KILHOKNHHBD = 13;</code>
     * @param \JNJKMBIGMPE $var
     * @return $this
     */
    public function setKILHOKNHHBD($var)
    {
        GPBUtil::checkMessage($var, \JNJKMBIGMPE::class);
        $this->KILHOKNHHBD = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 LMFHNELKFOC = 4;</code>
     * @return int
     */
    public function getLMFHNELKFOC()
    {
        return $this->LMFHNELKFOC;
    }

    /**
     * Generated from protobuf field <code>uint32 LMFHNELKFOC = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setLMFHNELKFOC($var)
    {
        GPBUtil::checkUint32($var);
        $this->LMFHNELKFOC = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 6;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setRetcode($var)
    {
        GPBUtil::checkUint32($var);
        $this->retcode = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.JIADKOFHHJM KPPFCHGDODL = 1506;</code>
     * @return \JIADKOFHHJM|null
     */
    public function getKPPFCHGDODL()
    {
        return $this->KPPFCHGDODL;
    }

    public function hasKPPFCHGDODL()
    {
        return isset($this->KPPFCHGDODL);
    }

    public function clearKPPFCHGDODL()
    {
        unset($this->KPPFCHGDODL);
    }

    /**
     * Generated from protobuf field <code>.JIADKOFHHJM KPPFCHGDODL = 1506;</code>
     * @param \JIADKOFHHJM $var
     * @return $this
     */
    public function setKPPFCHGDODL($var)
    {
        GPBUtil::checkMessage($var, \JIADKOFHHJM::class);
        $this->KPPFCHGDODL = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.JGNHFJAGHKA LFCEFFHMLIG = 69;</code>
     * @return \JGNHFJAGHKA|null
     */
    public function getLFCEFFHMLIG()
    {
        return $this->LFCEFFHMLIG;
    }

    public function hasLFCEFFHMLIG()
    {
        return isset($this->LFCEFFHMLIG);
    }

    public function clearLFCEFFHMLIG()
    {
        unset($this->LFCEFFHMLIG);
    }

    /**
     * Generated from protobuf field <code>.JGNHFJAGHKA LFCEFFHMLIG = 69;</code>
     * @param \JGNHFJAGHKA $var
     * @return $this
     */
    public function setLFCEFFHMLIG($var)
    {
        GPBUtil::checkMessage($var, \JGNHFJAGHKA::class);
        $this->LFCEFFHMLIG = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.CKCNEGHAMGM KIBAIMIKFED = 366;</code>
     * @return \CKCNEGHAMGM|null
     */
    public function getKIBAIMIKFED()
    {
        return $this->KIBAIMIKFED;
    }

    public function hasKIBAIMIKFED()
    {
        return isset($this->KIBAIMIKFED);
    }

    public function clearKIBAIMIKFED()
    {
        unset($this->KIBAIMIKFED);
    }

    /**
     * Generated from protobuf field <code>.CKCNEGHAMGM KIBAIMIKFED = 366;</code>
     * @param \CKCNEGHAMGM $var
     * @return $this
     */
    public function setKIBAIMIKFED($var)
    {
        GPBUtil::checkMessage($var, \CKCNEGHAMGM::class);
        $this->KIBAIMIKFED = $var;

        return $this;
    }

}

