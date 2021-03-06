<?php
/**
 * TOP API: rds.aliyuncs.com.DescribeDBInstancesByPerformance.2014-08-15 request
 * 
 * @author auto create
 * @since 1.0, 2015.04.21
 */
class Rds20140815DescribeDBInstancesByPerformanceRequest
{
	/** 
	 * 实例名，可以一次输入多个，以英文半角“,”分隔
	 **/
	private $dBInstanceId;
	
	/** 
	 * 页码，大于0，且不超过Integer的最大值
默认值：1
	 **/
	private $pageNumber;
	
	/** 
	 * 每页记录数，取值：30|50|100
默认值：30
	 **/
	private $pageSize;
	
	/** 
	 * 排序key
CPUUsage
IOPSUsage
DiskUsage
SessionUsage
	 **/
	private $sortKey;
	
	/** 
	 * 排序方式
ASC
DESC
	 **/
	private $sortMethod;
	
	/**
	 * 仅用于渠道商发起API调用时，指定访问的资源拥有者的ID
	 **/
	private $ownerId;
	
	/**
	 *仅用于渠道商发起API调用时，指定访问的资源拥有者的账号
	 **/
    private  $ownerAccount;
    
    /**
     *API调用者试图通过API调用来访问别人拥有但已经授权给他的资源时，
     *通过使用该参数来声明此次操作涉及到的资源是谁名下的,该参数仅官网用户可用
     **/
    private $resourceOwnerAccount;
    
	private $apiParas = array();
	
	public function setdBInstanceId($dBInstanceId)
	{
		$this->dBInstanceId = $dBInstanceId;
		$this->apiParas["DBInstanceId"] = $dBInstanceId;
	}

	public function getdBInstanceId()
	{
		return $this->dBInstanceId;
	}

	public function setPageNumber($pageNumber)
	{
		$this->pageNumber = $pageNumber;
		$this->apiParas["PageNumber"] = $pageNumber;
	}

	public function getPageNumber()
	{
		return $this->pageNumber;
	}

	public function setPageSize($pageSize)
	{
		$this->pageSize = $pageSize;
		$this->apiParas["PageSize"] = $pageSize;
	}

	public function getPageSize()
	{
		return $this->pageSize;
	}

	public function setSortKey($sortKey)
	{
		$this->sortKey = $sortKey;
		$this->apiParas["SortKey"] = $sortKey;
	}

	public function getSortKey()
	{
		return $this->sortKey;
	}

	public function setSortMethod($sortMethod)
	{
		$this->sortMethod = $sortMethod;
		$this->apiParas["SortMethod"] = $sortMethod;
	}

	public function getSortMethod()
	{
		return $this->sortMethod;
	}

	
	public function setOwnerId($ownerId)
	{
		$this->ownerId = $ownerId;
		$this->apiParas["OwnerId"] = $ownerId;
	}
	
	public function getOwnerId()
	{
		return $this->ownerId;
	}
	
	public function setOwnerAccount($ownerAccount)
	{
		$this->ownerAccount = $ownerAccount;
		$this->apiParas["OwnerAccount"] = $ownerAccount;
	}
	
	public function getOwnerAccount()
	{
		return $this->ownerAccount;
	}
	
	public function setResourceOwnerAccount($resourceOwnerAccount)
	{
		$this->resourceOwnerAccount = $resourceOwnerAccount;
		$this->apiParas["ResourceOwnerAccount"] = $resourceOwnerAccount;
	}
	
	public function getResourceOwnerAccount()
	{
		return $this->resourceOwnerAccount;
	}

	public function getApiMethodName()
	{
		return "rds.aliyuncs.com.DescribeDBInstancesByPerformance.2014-08-15";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxValue($this->pageNumber,2147483647,"pageNumber");
		RequestCheckUtil::checkMinValue($this->pageNumber,0,"pageNumber");
		RequestCheckUtil::checkMaxValue($this->pageSize,100,"pageSize");
		RequestCheckUtil::checkMinValue($this->pageSize,1,"pageSize");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}