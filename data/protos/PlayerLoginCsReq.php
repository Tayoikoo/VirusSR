<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * DBGKGGCEELN (36)
 *
 * Generated from protobuf message <code>PlayerLoginCsReq</code>
 */
class PlayerLoginCsReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string apejgcgcdnk = 1040;</code>
     */
    protected $apejgcgcdnk = '';
    /**
     * Generated from protobuf field <code>string client_version = 4;</code>
     */
    protected $client_version = '';
    /**
     * Generated from protobuf field <code>string gehpjdmaeeo = 3;</code>
     */
    protected $gehpjdmaeeo = '';
    /**
     * Generated from protobuf field <code>string eaoiadcplni = 13;</code>
     */
    protected $eaoiadcplni = '';
    /**
     * Generated from protobuf field <code>uint32 ejpgnpnmnme = 6;</code>
     */
    protected $ejpgnpnmnme = 0;
    /**
     * Generated from protobuf field <code>string keckllnpnmc = 450;</code>
     */
    protected $keckllnpnmc = '';
    /**
     * Generated from protobuf field <code>string pggemchdkgm = 10;</code>
     */
    protected $pggemchdkgm = '';
    /**
     * Generated from protobuf field <code>string rogue_get_info = 8;</code>
     */
    protected $rogue_get_info = '';
    /**
     * Generated from protobuf field <code>uint32 ghkpbpdfijh = 1261;</code>
     */
    protected $ghkpbpdfijh = 0;
    /**
     * Generated from protobuf field <code>string dmbaimcnhkk = 15;</code>
     */
    protected $dmbaimcnhkk = '';
    /**
     * Generated from protobuf field <code>.ExtraDeviceInfo hjbdiepmfcc = 1352;</code>
     */
    protected $hjbdiepmfcc = null;
    /**
     * Generated from protobuf field <code>uint64 login_random = 5;</code>
     */
    protected $login_random = 0;
    /**
     * Generated from protobuf field <code>string mjbmnloijan = 12;</code>
     */
    protected $mjbmnloijan = '';
    /**
     * Generated from protobuf field <code>string pdciladmjij = 1933;</code>
     */
    protected $pdciladmjij = '';
    /**
     * Generated from protobuf field <code>string aeohjingifk = 867;</code>
     */
    protected $aeohjingifk = '';
    /**
     * Generated from protobuf field <code>string bokafhimcen = 1291;</code>
     */
    protected $bokafhimcen = '';
    /**
     * Generated from protobuf field <code>string aalpfdjnhme = 11;</code>
     */
    protected $aalpfdjnhme = '';
    /**
     * Generated from protobuf field <code>uint32 client_res_version = 9;</code>
     */
    protected $client_res_version = 0;
    /**
     * Generated from protobuf field <code>string iacjlnhkfjl = 1;</code>
     */
    protected $iacjlnhkfjl = '';
    /**
     * Generated from protobuf field <code>uint32 mplbcokaihj = 1090;</code>
     */
    protected $mplbcokaihj = 0;
    /**
     * Generated from protobuf field <code>.PlatformType platform = 2;</code>
     */
    protected $platform = 0;
    /**
     * Generated from protobuf field <code>uint32 edibgljnojg = 1000;</code>
     */
    protected $edibgljnojg = 0;
    /**
     * Generated from protobuf field <code>bool ncolnocggph = 170;</code>
     */
    protected $ncolnocggph = false;
    /**
     * Generated from protobuf field <code>string oohnmkaogcl = 1640;</code>
     */
    protected $oohnmkaogcl = '';
    /**
     * Generated from protobuf field <code>string signature = 14;</code>
     */
    protected $signature = '';
    /**
     * Generated from protobuf field <code>.LanguageType dgdpjgplkhm = 7;</code>
     */
    protected $dgdpjgplkhm = 0;
    /**
     * Generated from protobuf field <code>bool lnpeccbkbeb = 304;</code>
     */
    protected $lnpeccbkbeb = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $apejgcgcdnk
     *     @type string $client_version
     *     @type string $gehpjdmaeeo
     *     @type string $eaoiadcplni
     *     @type int $ejpgnpnmnme
     *     @type string $keckllnpnmc
     *     @type string $pggemchdkgm
     *     @type string $rogue_get_info
     *     @type int $ghkpbpdfijh
     *     @type string $dmbaimcnhkk
     *     @type \ExtraDeviceInfo $hjbdiepmfcc
     *     @type int|string $login_random
     *     @type string $mjbmnloijan
     *     @type string $pdciladmjij
     *     @type string $aeohjingifk
     *     @type string $bokafhimcen
     *     @type string $aalpfdjnhme
     *     @type int $client_res_version
     *     @type string $iacjlnhkfjl
     *     @type int $mplbcokaihj
     *     @type int $platform
     *     @type int $edibgljnojg
     *     @type bool $ncolnocggph
     *     @type string $oohnmkaogcl
     *     @type string $signature
     *     @type int $dgdpjgplkhm
     *     @type bool $lnpeccbkbeb
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string apejgcgcdnk = 1040;</code>
     * @return string
     */
    public function getApejgcgcdnk()
    {
        return $this->apejgcgcdnk;
    }

    /**
     * Generated from protobuf field <code>string apejgcgcdnk = 1040;</code>
     * @param string $var
     * @return $this
     */
    public function setApejgcgcdnk($var)
    {
        GPBUtil::checkString($var, True);
        $this->apejgcgcdnk = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string client_version = 4;</code>
     * @return string
     */
    public function getClientVersion()
    {
        return $this->client_version;
    }

    /**
     * Generated from protobuf field <code>string client_version = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setClientVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->client_version = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string gehpjdmaeeo = 3;</code>
     * @return string
     */
    public function getGehpjdmaeeo()
    {
        return $this->gehpjdmaeeo;
    }

    /**
     * Generated from protobuf field <code>string gehpjdmaeeo = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setGehpjdmaeeo($var)
    {
        GPBUtil::checkString($var, True);
        $this->gehpjdmaeeo = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string eaoiadcplni = 13;</code>
     * @return string
     */
    public function getEaoiadcplni()
    {
        return $this->eaoiadcplni;
    }

    /**
     * Generated from protobuf field <code>string eaoiadcplni = 13;</code>
     * @param string $var
     * @return $this
     */
    public function setEaoiadcplni($var)
    {
        GPBUtil::checkString($var, True);
        $this->eaoiadcplni = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 ejpgnpnmnme = 6;</code>
     * @return int
     */
    public function getEjpgnpnmnme()
    {
        return $this->ejpgnpnmnme;
    }

    /**
     * Generated from protobuf field <code>uint32 ejpgnpnmnme = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setEjpgnpnmnme($var)
    {
        GPBUtil::checkUint32($var);
        $this->ejpgnpnmnme = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string keckllnpnmc = 450;</code>
     * @return string
     */
    public function getKeckllnpnmc()
    {
        return $this->keckllnpnmc;
    }

    /**
     * Generated from protobuf field <code>string keckllnpnmc = 450;</code>
     * @param string $var
     * @return $this
     */
    public function setKeckllnpnmc($var)
    {
        GPBUtil::checkString($var, True);
        $this->keckllnpnmc = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string pggemchdkgm = 10;</code>
     * @return string
     */
    public function getPggemchdkgm()
    {
        return $this->pggemchdkgm;
    }

    /**
     * Generated from protobuf field <code>string pggemchdkgm = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setPggemchdkgm($var)
    {
        GPBUtil::checkString($var, True);
        $this->pggemchdkgm = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string rogue_get_info = 8;</code>
     * @return string
     */
    public function getRogueGetInfo()
    {
        return $this->rogue_get_info;
    }

    /**
     * Generated from protobuf field <code>string rogue_get_info = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setRogueGetInfo($var)
    {
        GPBUtil::checkString($var, True);
        $this->rogue_get_info = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 ghkpbpdfijh = 1261;</code>
     * @return int
     */
    public function getGhkpbpdfijh()
    {
        return $this->ghkpbpdfijh;
    }

    /**
     * Generated from protobuf field <code>uint32 ghkpbpdfijh = 1261;</code>
     * @param int $var
     * @return $this
     */
    public function setGhkpbpdfijh($var)
    {
        GPBUtil::checkUint32($var);
        $this->ghkpbpdfijh = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string dmbaimcnhkk = 15;</code>
     * @return string
     */
    public function getDmbaimcnhkk()
    {
        return $this->dmbaimcnhkk;
    }

    /**
     * Generated from protobuf field <code>string dmbaimcnhkk = 15;</code>
     * @param string $var
     * @return $this
     */
    public function setDmbaimcnhkk($var)
    {
        GPBUtil::checkString($var, True);
        $this->dmbaimcnhkk = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.ExtraDeviceInfo hjbdiepmfcc = 1352;</code>
     * @return \ExtraDeviceInfo|null
     */
    public function getHjbdiepmfcc()
    {
        return $this->hjbdiepmfcc;
    }

    public function hasHjbdiepmfcc()
    {
        return isset($this->hjbdiepmfcc);
    }

    public function clearHjbdiepmfcc()
    {
        unset($this->hjbdiepmfcc);
    }

    /**
     * Generated from protobuf field <code>.ExtraDeviceInfo hjbdiepmfcc = 1352;</code>
     * @param \ExtraDeviceInfo $var
     * @return $this
     */
    public function setHjbdiepmfcc($var)
    {
        GPBUtil::checkMessage($var, \ExtraDeviceInfo::class);
        $this->hjbdiepmfcc = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 login_random = 5;</code>
     * @return int|string
     */
    public function getLoginRandom()
    {
        return $this->login_random;
    }

    /**
     * Generated from protobuf field <code>uint64 login_random = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setLoginRandom($var)
    {
        GPBUtil::checkUint64($var);
        $this->login_random = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string mjbmnloijan = 12;</code>
     * @return string
     */
    public function getMjbmnloijan()
    {
        return $this->mjbmnloijan;
    }

    /**
     * Generated from protobuf field <code>string mjbmnloijan = 12;</code>
     * @param string $var
     * @return $this
     */
    public function setMjbmnloijan($var)
    {
        GPBUtil::checkString($var, True);
        $this->mjbmnloijan = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string pdciladmjij = 1933;</code>
     * @return string
     */
    public function getPdciladmjij()
    {
        return $this->pdciladmjij;
    }

    /**
     * Generated from protobuf field <code>string pdciladmjij = 1933;</code>
     * @param string $var
     * @return $this
     */
    public function setPdciladmjij($var)
    {
        GPBUtil::checkString($var, True);
        $this->pdciladmjij = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string aeohjingifk = 867;</code>
     * @return string
     */
    public function getAeohjingifk()
    {
        return $this->aeohjingifk;
    }

    /**
     * Generated from protobuf field <code>string aeohjingifk = 867;</code>
     * @param string $var
     * @return $this
     */
    public function setAeohjingifk($var)
    {
        GPBUtil::checkString($var, True);
        $this->aeohjingifk = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string bokafhimcen = 1291;</code>
     * @return string
     */
    public function getBokafhimcen()
    {
        return $this->bokafhimcen;
    }

    /**
     * Generated from protobuf field <code>string bokafhimcen = 1291;</code>
     * @param string $var
     * @return $this
     */
    public function setBokafhimcen($var)
    {
        GPBUtil::checkString($var, True);
        $this->bokafhimcen = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string aalpfdjnhme = 11;</code>
     * @return string
     */
    public function getAalpfdjnhme()
    {
        return $this->aalpfdjnhme;
    }

    /**
     * Generated from protobuf field <code>string aalpfdjnhme = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setAalpfdjnhme($var)
    {
        GPBUtil::checkString($var, True);
        $this->aalpfdjnhme = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 client_res_version = 9;</code>
     * @return int
     */
    public function getClientResVersion()
    {
        return $this->client_res_version;
    }

    /**
     * Generated from protobuf field <code>uint32 client_res_version = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setClientResVersion($var)
    {
        GPBUtil::checkUint32($var);
        $this->client_res_version = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string iacjlnhkfjl = 1;</code>
     * @return string
     */
    public function getIacjlnhkfjl()
    {
        return $this->iacjlnhkfjl;
    }

    /**
     * Generated from protobuf field <code>string iacjlnhkfjl = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setIacjlnhkfjl($var)
    {
        GPBUtil::checkString($var, True);
        $this->iacjlnhkfjl = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 mplbcokaihj = 1090;</code>
     * @return int
     */
    public function getMplbcokaihj()
    {
        return $this->mplbcokaihj;
    }

    /**
     * Generated from protobuf field <code>uint32 mplbcokaihj = 1090;</code>
     * @param int $var
     * @return $this
     */
    public function setMplbcokaihj($var)
    {
        GPBUtil::checkUint32($var);
        $this->mplbcokaihj = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.PlatformType platform = 2;</code>
     * @return int
     */
    public function getPlatform()
    {
        return $this->platform;
    }

    /**
     * Generated from protobuf field <code>.PlatformType platform = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPlatform($var)
    {
        GPBUtil::checkEnum($var, \PlatformType::class);
        $this->platform = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 edibgljnojg = 1000;</code>
     * @return int
     */
    public function getEdibgljnojg()
    {
        return $this->edibgljnojg;
    }

    /**
     * Generated from protobuf field <code>uint32 edibgljnojg = 1000;</code>
     * @param int $var
     * @return $this
     */
    public function setEdibgljnojg($var)
    {
        GPBUtil::checkUint32($var);
        $this->edibgljnojg = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool ncolnocggph = 170;</code>
     * @return bool
     */
    public function getNcolnocggph()
    {
        return $this->ncolnocggph;
    }

    /**
     * Generated from protobuf field <code>bool ncolnocggph = 170;</code>
     * @param bool $var
     * @return $this
     */
    public function setNcolnocggph($var)
    {
        GPBUtil::checkBool($var);
        $this->ncolnocggph = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string oohnmkaogcl = 1640;</code>
     * @return string
     */
    public function getOohnmkaogcl()
    {
        return $this->oohnmkaogcl;
    }

    /**
     * Generated from protobuf field <code>string oohnmkaogcl = 1640;</code>
     * @param string $var
     * @return $this
     */
    public function setOohnmkaogcl($var)
    {
        GPBUtil::checkString($var, True);
        $this->oohnmkaogcl = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string signature = 14;</code>
     * @return string
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * Generated from protobuf field <code>string signature = 14;</code>
     * @param string $var
     * @return $this
     */
    public function setSignature($var)
    {
        GPBUtil::checkString($var, True);
        $this->signature = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.LanguageType dgdpjgplkhm = 7;</code>
     * @return int
     */
    public function getDgdpjgplkhm()
    {
        return $this->dgdpjgplkhm;
    }

    /**
     * Generated from protobuf field <code>.LanguageType dgdpjgplkhm = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setDgdpjgplkhm($var)
    {
        GPBUtil::checkEnum($var, \LanguageType::class);
        $this->dgdpjgplkhm = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool lnpeccbkbeb = 304;</code>
     * @return bool
     */
    public function getLnpeccbkbeb()
    {
        return $this->lnpeccbkbeb;
    }

    /**
     * Generated from protobuf field <code>bool lnpeccbkbeb = 304;</code>
     * @param bool $var
     * @return $this
     */
    public function setLnpeccbkbeb($var)
    {
        GPBUtil::checkBool($var);
        $this->lnpeccbkbeb = $var;

        return $this;
    }

}
