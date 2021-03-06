<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videoenhan\V20200320\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class ChangeVideoSizeAdvanceRequest extends Model
{
    /**
     * @var Stream
     */
    public $videoUrlObject;

    /**
     * @var int
     */
    public $width;

    /**
     * @var int
     */
    public $height;

    /**
     * @var string
     */
    public $cropType;

    /**
     * @var string
     */
    public $fillType;

    /**
     * @var float
     */
    public $tightness;

    /**
     * @var int
     */
    public $r;

    /**
     * @var int
     */
    public $g;

    /**
     * @var int
     */
    public $b;
    protected $_name = [
        'videoUrlObject' => 'VideoUrlObject',
        'width'          => 'Width',
        'height'         => 'Height',
        'cropType'       => 'CropType',
        'fillType'       => 'FillType',
        'tightness'      => 'Tightness',
        'r'              => 'R',
        'g'              => 'G',
        'b'              => 'B',
    ];

    public function validate()
    {
        Model::validateRequired('videoUrlObject', $this->videoUrlObject, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->videoUrlObject) {
            $res['VideoUrlObject'] = $this->videoUrlObject;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->cropType) {
            $res['CropType'] = $this->cropType;
        }
        if (null !== $this->fillType) {
            $res['FillType'] = $this->fillType;
        }
        if (null !== $this->tightness) {
            $res['Tightness'] = $this->tightness;
        }
        if (null !== $this->r) {
            $res['R'] = $this->r;
        }
        if (null !== $this->g) {
            $res['G'] = $this->g;
        }
        if (null !== $this->b) {
            $res['B'] = $this->b;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ChangeVideoSizeAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VideoUrlObject'])) {
            $model->videoUrlObject = $map['VideoUrlObject'];
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['CropType'])) {
            $model->cropType = $map['CropType'];
        }
        if (isset($map['FillType'])) {
            $model->fillType = $map['FillType'];
        }
        if (isset($map['Tightness'])) {
            $model->tightness = $map['Tightness'];
        }
        if (isset($map['R'])) {
            $model->r = $map['R'];
        }
        if (isset($map['G'])) {
            $model->g = $map['G'];
        }
        if (isset($map['B'])) {
            $model->b = $map['B'];
        }

        return $model;
    }
}
