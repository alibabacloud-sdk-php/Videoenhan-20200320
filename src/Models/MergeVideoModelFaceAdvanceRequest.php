<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videoenhan\V20200320\Models;

use AlibabaCloud\SDK\Videoenhan\V20200320\Models\MergeVideoModelFaceAdvanceRequest\mergeInfos;
use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class MergeVideoModelFaceAdvanceRequest extends Model
{
    /**
     * @var bool
     */
    public $addWatermark;

    /**
     * @var bool
     */
    public $enhance;

    /**
     * @example https://invi-label.oss-cn-shanghai.aliyuncs.com/label/temp/faceswap/ref/ref.jpg
     *
     * @var Stream
     */
    public $faceImageURLObject;

    /**
     * @var mergeInfos[]
     */
    public $mergeInfos;

    /**
     * @description This parameter is required.
     *
     * @example 3bf2418c-7adf-4002-a9d6-2f7cf1889c0d
     *
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $watermarkType;
    protected $_name = [
        'addWatermark'       => 'AddWatermark',
        'enhance'            => 'Enhance',
        'faceImageURLObject' => 'FaceImageURL',
        'mergeInfos'         => 'MergeInfos',
        'templateId'         => 'TemplateId',
        'watermarkType'      => 'WatermarkType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addWatermark) {
            $res['AddWatermark'] = $this->addWatermark;
        }
        if (null !== $this->enhance) {
            $res['Enhance'] = $this->enhance;
        }
        if (null !== $this->faceImageURLObject) {
            $res['FaceImageURL'] = $this->faceImageURLObject;
        }
        if (null !== $this->mergeInfos) {
            $res['MergeInfos'] = [];
            if (null !== $this->mergeInfos && \is_array($this->mergeInfos)) {
                $n = 0;
                foreach ($this->mergeInfos as $item) {
                    $res['MergeInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->watermarkType) {
            $res['WatermarkType'] = $this->watermarkType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MergeVideoModelFaceAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddWatermark'])) {
            $model->addWatermark = $map['AddWatermark'];
        }
        if (isset($map['Enhance'])) {
            $model->enhance = $map['Enhance'];
        }
        if (isset($map['FaceImageURL'])) {
            $model->faceImageURLObject = $map['FaceImageURL'];
        }
        if (isset($map['MergeInfos'])) {
            if (!empty($map['MergeInfos'])) {
                $model->mergeInfos = [];
                $n                 = 0;
                foreach ($map['MergeInfos'] as $item) {
                    $model->mergeInfos[$n++] = null !== $item ? mergeInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['WatermarkType'])) {
            $model->watermarkType = $map['WatermarkType'];
        }

        return $model;
    }
}
