<?php
/**
 * Device Detector - The Universal Device Detection library for parsing User Agents
 *
 * @link http://piwik.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 */
namespace DeviceDetector\Tests\Parser\Client;

use DeviceDetector\Parser\Client\MediaPlayer;
use \Spyc;

class MediaPlayerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider getFixtures
     */
    public function testParse($useragent, $client)
    {
        $mediaPlayerParser = new MediaPlayer();
        $mediaPlayerParser->setUserAgent($useragent);
        $this->assertEquals($client, $mediaPlayerParser->parse());
    }

    public function getFixtures()
    {
        $fixtureData = \Spyc::YAMLLoad(realpath(dirname(__FILE__)) . '/fixtures/mediaplayer.yml');
        return $fixtureData;
    }
}
