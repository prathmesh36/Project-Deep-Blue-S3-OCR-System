<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/videointelligence/v1/video_intelligence.proto

namespace Google\Cloud\VideoIntelligence\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Face annotation.
 *
 * Generated from protobuf message <code>google.cloud.videointelligence.v1.FaceAnnotation</code>
 */
class FaceAnnotation extends \Google\Protobuf\Internal\Message
{
    /**
     * Thumbnail of a representative face view (in JPEG format).
     *
     * Generated from protobuf field <code>bytes thumbnail = 1;</code>
     */
    private $thumbnail = '';
    /**
     * All video segments where a face was detected.
     *
     * Generated from protobuf field <code>repeated .google.cloud.videointelligence.v1.FaceSegment segments = 2;</code>
     */
    private $segments;
    /**
     * All video frames where a face was detected.
     *
     * Generated from protobuf field <code>repeated .google.cloud.videointelligence.v1.FaceFrame frames = 3;</code>
     */
    private $frames;

    public function __construct() {
        \GPBMetadata\Google\Cloud\Videointelligence\V1\VideoIntelligence::initOnce();
        parent::__construct();
    }

    /**
     * Thumbnail of a representative face view (in JPEG format).
     *
     * Generated from protobuf field <code>bytes thumbnail = 1;</code>
     * @return string
     */
    public function getThumbnail()
    {
        return $this->thumbnail;
    }

    /**
     * Thumbnail of a representative face view (in JPEG format).
     *
     * Generated from protobuf field <code>bytes thumbnail = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setThumbnail($var)
    {
        GPBUtil::checkString($var, False);
        $this->thumbnail = $var;

        return $this;
    }

    /**
     * All video segments where a face was detected.
     *
     * Generated from protobuf field <code>repeated .google.cloud.videointelligence.v1.FaceSegment segments = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSegments()
    {
        return $this->segments;
    }

    /**
     * All video segments where a face was detected.
     *
     * Generated from protobuf field <code>repeated .google.cloud.videointelligence.v1.FaceSegment segments = 2;</code>
     * @param \Google\Cloud\VideoIntelligence\V1\FaceSegment[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSegments($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\VideoIntelligence\V1\FaceSegment::class);
        $this->segments = $arr;

        return $this;
    }

    /**
     * All video frames where a face was detected.
     *
     * Generated from protobuf field <code>repeated .google.cloud.videointelligence.v1.FaceFrame frames = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFrames()
    {
        return $this->frames;
    }

    /**
     * All video frames where a face was detected.
     *
     * Generated from protobuf field <code>repeated .google.cloud.videointelligence.v1.FaceFrame frames = 3;</code>
     * @param \Google\Cloud\VideoIntelligence\V1\FaceFrame[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFrames($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\VideoIntelligence\V1\FaceFrame::class);
        $this->frames = $arr;

        return $this;
    }

}

