<?php

/**
 * Class Allegro_Web_Api_SiteFlagInfoType
 * @package Allegro_Web_Api
 * @author Paweł Cieślik <cieslix@gmail.com>
 * @licence http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Allegro_Web_Api_SiteFlagInfoType extends Allegro_Web_Api_Abstract
{
    /**
     * @var string $siteName
     */
    protected $siteName = null;

    /**
     * @var string $siteUrl
     */
    protected $siteUrl = null;

    /**
     * @var int $siteCountryCode
     */
    protected $siteCountryCode = null;

    /**
     * @var string $siteCodePage
     */
    protected $siteCodePage = null;

    /**
     * @var base64Binary $siteLogoGif
     */
    protected $siteLogoGif = null;

    /**
     * @var base64Binary $siteFlagGif
     */
    protected $siteFlagGif = null;

    /**
     * @param string       $siteName
     * @param string       $siteUrl
     * @param int          $siteCountryCode
     * @param string       $siteCodePage
     * @param base64Binary $siteLogoGif
     * @param base64Binary $siteFlagGif
     */
    public function __construct($siteName, $siteUrl, $siteCountryCode, $siteCodePage, $siteLogoGif, $siteFlagGif)
    {
        $this->siteName        = $siteName;
        $this->siteUrl         = $siteUrl;
        $this->siteCountryCode = $siteCountryCode;
        $this->siteCodePage    = $siteCodePage;
        $this->siteLogoGif     = $siteLogoGif;
        $this->siteFlagGif     = $siteFlagGif;
    }

    /**
     * @return string
     */
    public function getSiteName()
    {
        return $this->siteName;
    }

    /**
     * @param string $siteName
     * @return Allegro_Web_Api_SiteFlagInfoType
     */
    public function setSiteName($siteName)
    {
        $this->siteName = $siteName;
        return $this;
    }

    /**
     * @return string
     */
    public function getSiteUrl()
    {
        return $this->siteUrl;
    }

    /**
     * @param string $siteUrl
     * @return Allegro_Web_Api_SiteFlagInfoType
     */
    public function setSiteUrl($siteUrl)
    {
        $this->siteUrl = $siteUrl;
        return $this;
    }

    /**
     * @return int
     */
    public function getSiteCountryCode()
    {
        return $this->siteCountryCode;
    }

    /**
     * @param int $siteCountryCode
     * @return Allegro_Web_Api_SiteFlagInfoType
     */
    public function setSiteCountryCode($siteCountryCode)
    {
        $this->siteCountryCode = $siteCountryCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getSiteCodePage()
    {
        return $this->siteCodePage;
    }

    /**
     * @param string $siteCodePage
     * @return Allegro_Web_Api_SiteFlagInfoType
     */
    public function setSiteCodePage($siteCodePage)
    {
        $this->siteCodePage = $siteCodePage;
        return $this;
    }

    /**
     * @return base64Binary
     */
    public function getSiteLogoGif()
    {
        return $this->siteLogoGif;
    }

    /**
     * @param base64Binary $siteLogoGif
     * @return Allegro_Web_Api_SiteFlagInfoType
     */
    public function setSiteLogoGif($siteLogoGif)
    {
        $this->siteLogoGif = $siteLogoGif;
        return $this;
    }

    /**
     * @return base64Binary
     */
    public function getSiteFlagGif()
    {
        return $this->siteFlagGif;
    }

    /**
     * @param base64Binary $siteFlagGif
     * @return Allegro_Web_Api_SiteFlagInfoType
     */
    public function setSiteFlagGif($siteFlagGif)
    {
        $this->siteFlagGif = $siteFlagGif;
        return $this;
    }
}
