<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models;

use AlibabaCloud\Tea\Model;

class ConfigLayer7RuleRequest extends Model
{
    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $proxyTypeList;

    /**
     * @var string[]
     */
    public $proxyTypes;

    /**
     * @var int
     */
    public $rsType;

    /**
     * @var string[]
     */
    public $realServers;

    /**
     * @var string[]
     */
    public $instanceIds;
    protected $_name = [
        'resourceGroupId' => 'ResourceGroupId',
        'domain'          => 'Domain',
        'proxyTypeList'   => 'ProxyTypeList',
        'proxyTypes'      => 'ProxyTypes',
        'rsType'          => 'RsType',
        'realServers'     => 'RealServers',
        'instanceIds'     => 'InstanceIds',
    ];

    public function validate()
    {
        Model::validateRequired('domain', $this->domain, true);
        Model::validateRequired('rsType', $this->rsType, true);
        Model::validateRequired('realServers', $this->realServers, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->proxyTypeList) {
            $res['ProxyTypeList'] = $this->proxyTypeList;
        }
        if (null !== $this->proxyTypes) {
            $res['ProxyTypes'] = $this->proxyTypes;
        }
        if (null !== $this->rsType) {
            $res['RsType'] = $this->rsType;
        }
        if (null !== $this->realServers) {
            $res['RealServers'] = $this->realServers;
        }
        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = $this->instanceIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ConfigLayer7RuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['ProxyTypeList'])) {
            $model->proxyTypeList = $map['ProxyTypeList'];
        }
        if (isset($map['ProxyTypes'])) {
            if (!empty($map['ProxyTypes'])) {
                $model->proxyTypes = $map['ProxyTypes'];
            }
        }
        if (isset($map['RsType'])) {
            $model->rsType = $map['RsType'];
        }
        if (isset($map['RealServers'])) {
            if (!empty($map['RealServers'])) {
                $model->realServers = $map['RealServers'];
            }
        }
        if (isset($map['InstanceIds'])) {
            if (!empty($map['InstanceIds'])) {
                $model->instanceIds = $map['InstanceIds'];
            }
        }

        return $model;
    }
}
