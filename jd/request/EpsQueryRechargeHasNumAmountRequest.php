<?php
class EpsQueryRechargeHasNumAmountRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.eps.queryRechargeHasNumAmount";
	}
	
	public function getApiParas(){
	    if(empty($this->apiParas)){
            return "{}";
        }
        return json_encode($this->apiParas);
	}
	
	public function check(){
		
	}
	
	public function putOtherTextParam($key, $value){
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}

    private  $version;

    public function setVersion($version){
        $this->version = $version;
    }

    public function getVersion(){
        return $this->version;
    }
                                                        		                                    	                        	                   			private $deliveryNo;
    	                        
	public function setDeliveryNo($deliveryNo){
		$this->deliveryNo = $deliveryNo;
         $this->apiParas["deliveryNo"] = $deliveryNo;
	}

	public function getDeliveryNo(){
	  return $this->deliveryNo;
	}

                        	                   			private $siteNo;
    	                        
	public function setSiteNo($siteNo){
		$this->siteNo = $siteNo;
         $this->apiParas["siteNo"] = $siteNo;
	}

	public function getSiteNo(){
	  return $this->siteNo;
	}

                            }





        
 

