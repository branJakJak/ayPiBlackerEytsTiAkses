<?php

class m160120_104103_create_ip_address_records extends CDbMigration
{
	public function safeUp()
	{
		$this->createTable("tbl_ipaddress",array(
				'id'=>'pk',
				'ip_address'=>'string not null',
				'status'=>'string default "whitelisted"',
				'notes'=>'text',
				'date_created'=>'datetime',
				'date_updated'=>'datetime',
			));
		$this->insert("tbl_ipaddress", array("ip_address"=>"216.158.235.250","status"=>"whitelisted","date_created"=>date("Y-m-d H:i:s"),"date_updated"=>date("Y-m-d H:i:s")));
		$this->insert("tbl_ipaddress", array("ip_address"=>"87.81.166.107","status"=>"whitelisted","date_created"=>date("Y-m-d H:i:s"),"date_updated"=>date("Y-m-d H:i:s")));
		$this->insert("tbl_ipaddress", array("ip_address"=>"88.208.237.252","status"=>"whitelisted","date_created"=>date("Y-m-d H:i:s"),"date_updated"=>date("Y-m-d H:i:s")));
		$this->insert("tbl_ipaddress", array("ip_address"=>"213.171.204.244","status"=>"whitelisted","date_created"=>date("Y-m-d H:i:s"),"date_updated"=>date("Y-m-d H:i:s")));
		$this->insert("tbl_ipaddress", array("ip_address"=>"216.158.235.234","status"=>"whitelisted","date_created"=>date("Y-m-d H:i:s"),"date_updated"=>date("Y-m-d H:i:s")));
		$this->insert("tbl_ipaddress", array("ip_address"=>"162.250.124.167","status"=>"whitelisted","date_created"=>date("Y-m-d H:i:s"),"date_updated"=>date("Y-m-d H:i:s")));
		$this->insert("tbl_ipaddress", array("ip_address"=>"82.6.23.214","status"=>"whitelisted","date_created"=>date("Y-m-d H:i:s"),"date_updated"=>date("Y-m-d H:i:s")));
		$this->insert("tbl_ipaddress", array("ip_address"=>"86.14.22.132","status"=>"whitelisted","date_created"=>date("Y-m-d H:i:s"),"date_updated"=>date("Y-m-d H:i:s")));
		$this->insert("tbl_ipaddress", array("ip_address"=>"141.105.220.169","status"=>"whitelisted","date_created"=>date("Y-m-d H:i:s"),"date_updated"=>date("Y-m-d H:i:s")));
		$this->insert("tbl_ipaddress", array("ip_address"=>"81.145.200.200","status"=>"whitelisted","date_created"=>date("Y-m-d H:i:s"),"date_updated"=>date("Y-m-d H:i:s")));
		$this->insert("tbl_ipaddress", array("ip_address"=>"121.54.44.89","status"=>"whitelisted","date_created"=>date("Y-m-d H:i:s"),"date_updated"=>date("Y-m-d H:i:s")));
		$this->insert("tbl_ipaddress", array("ip_address"=>"37.130.229.149","status"=>"whitelisted","date_created"=>date("Y-m-d H:i:s"),"date_updated"=>date("Y-m-d H:i:s")));
		$this->insert("tbl_ipaddress", array("ip_address"=>"121.54.44.90","status"=>"whitelisted","date_created"=>date("Y-m-d H:i:s"),"date_updated"=>date("Y-m-d H:i:s")));
		$this->insert("tbl_ipaddress", array("ip_address"=>"45.59.157.114","status"=>"whitelisted","date_created"=>date("Y-m-d H:i:s"),"date_updated"=>date("Y-m-d H:i:s")));
		$this->insert("tbl_ipaddress", array("ip_address"=>"192.186.142.165","status"=>"whitelisted","date_created"=>date("Y-m-d H:i:s"),"date_updated"=>date("Y-m-d H:i:s")));
		$this->insert("tbl_ipaddress", array("ip_address"=>"115.147.97.156","status"=>"whitelisted","date_created"=>date("Y-m-d H:i:s"),"date_updated"=>date("Y-m-d H:i:s")));
		$this->insert("tbl_ipaddress", array("ip_address"=>"122.53.31.205","status"=>"whitelisted","date_created"=>date("Y-m-d H:i:s"),"date_updated"=>date("Y-m-d H:i:s")));
		$this->insert("tbl_ipaddress", array("ip_address"=>"122.53.31.203","status"=>"whitelisted","date_created"=>date("Y-m-d H:i:s"),"date_updated"=>date("Y-m-d H:i:s")));
		$this->insert("tbl_ipaddress", array("ip_address"=>"203.167.167.50","status"=>"whitelisted","date_created"=>date("Y-m-d H:i:s"),"date_updated"=>date("Y-m-d H:i:s")));
		$this->insert("tbl_ipaddress", array("ip_address"=>"87.7.135.176","status"=>"whitelisted","date_created"=>date("Y-m-d H:i:s"),"date_updated"=>date("Y-m-d H:i:s")));
		$this->insert("tbl_ipaddress", array("ip_address"=>"121.44.44.94","status"=>"whitelisted","date_created"=>date("Y-m-d H:i:s"),"date_updated"=>date("Y-m-d H:i:s")));
		$this->insert("tbl_ipaddress", array("ip_address"=>"64.233.173.238","status"=>"whitelisted","date_created"=>date("Y-m-d H:i:s"),"date_updated"=>date("Y-m-d H:i:s")));
		$this->insert("tbl_ipaddress", array("ip_address"=>"203.177.217.50","status"=>"whitelisted","date_created"=>date("Y-m-d H:i:s"),"date_updated"=>date("Y-m-d H:i:s")));
		$this->insert("tbl_ipaddress", array("ip_address"=>"45.59.157.112","status"=>"whitelisted","date_created"=>date("Y-m-d H:i:s"),"date_updated"=>date("Y-m-d H:i:s")));
		$this->insert("tbl_ipaddress", array("ip_address"=>"146.185.28.62","status"=>"whitelisted","date_created"=>date("Y-m-d H:i:s"),"date_updated"=>date("Y-m-d H:i:s")));
		$this->insert("tbl_ipaddress", array("ip_address"=>"104.219.250.52","status"=>"whitelisted","date_created"=>date("Y-m-d H:i:s"),"date_updated"=>date("Y-m-d H:i:s")));
		$this->insert("tbl_ipaddress", array("ip_address"=>"203.177.167.50","status"=>"whitelisted","date_created"=>date("Y-m-d H:i:s"),"date_updated"=>date("Y-m-d H:i:s")));
		$this->insert("tbl_ipaddress", array("ip_address"=>"112.208.148.77","status"=>"whitelisted","date_created"=>date("Y-m-d H:i:s"),"date_updated"=>date("Y-m-d H:i:s")));
		$this->insert("tbl_ipaddress", array("ip_address"=>"109.149.135.25","status"=>"whitelisted","date_created"=>date("Y-m-d H:i:s"),"date_updated"=>date("Y-m-d H:i:s")));
		$this->insert("tbl_ipaddress", array("ip_address"=>"88.208.237.252","status"=>"whitelisted","date_created"=>date("Y-m-d H:i:s"),"date_updated"=>date("Y-m-d H:i:s")));
		$this->insert("tbl_ipaddress", array("ip_address"=>"79.99.79.205","status"=>"whitelisted","date_created"=>date("Y-m-d H:i:s"),"date_updated"=>date("Y-m-d H:i:s")));
		$this->insert("tbl_ipaddress", array("ip_address"=>"81.96.202.82","status"=>"whitelisted","date_created"=>date("Y-m-d H:i:s"),"date_updated"=>date("Y-m-d H:i:s")));
		$this->insert("tbl_ipaddress", array("ip_address"=>"81.96.200.251","status"=>"whitelisted","date_created"=>date("Y-m-d H:i:s"),"date_updated"=>date("Y-m-d H:i:s")));
		$this->insert("tbl_ipaddress", array("ip_address"=>"78.141.25.38","status"=>"whitelisted","date_created"=>date("Y-m-d H:i:s"),"date_updated"=>date("Y-m-d H:i:s")));
		$this->insert("tbl_ipaddress", array("ip_address"=>"87.81.166.107","status"=>"whitelisted","date_created"=>date("Y-m-d H:i:s"),"date_updated"=>date("Y-m-d H:i:s")));
		$this->insert("tbl_ipaddress", array("ip_address"=>"141.105.220.169","status"=>"whitelisted","date_created"=>date("Y-m-d H:i:s"),"date_updated"=>date("Y-m-d H:i:s")));
		$this->insert("tbl_ipaddress", array("ip_address"=>"80.45.207.49","status"=>"whitelisted","date_created"=>date("Y-m-d H:i:s"),"date_updated"=>date("Y-m-d H:i:s")));
		$this->insert("tbl_ipaddress", array("ip_address"=>"94.197.121.162","status"=>"whitelisted","date_created"=>date("Y-m-d H:i:s"),"date_updated"=>date("Y-m-d H:i:s")));
		$this->insert("tbl_ipaddress", array("ip_address"=>"121.54.44.94","status"=>"whitelisted","date_created"=>date("Y-m-d H:i:s"),"date_updated"=>date("Y-m-d H:i:s")));
		$this->insert("tbl_ipaddress", array("ip_address"=>"109.149.135.25","status"=>"whitelisted","date_created"=>date("Y-m-d H:i:s"),"date_updated"=>date("Y-m-d H:i:s")));
		$this->insert("tbl_ipaddress", array("ip_address"=>"122.53.31.201","status"=>"whitelisted","date_created"=>date("Y-m-d H:i:s"),"date_updated"=>date("Y-m-d H:i:s")));
		$this->insert("tbl_ipaddress", array("ip_address"=>"188.29.165.41","status"=>"whitelisted","date_created"=>date("Y-m-d H:i:s"),"date_updated"=>date("Y-m-d H:i:s")));
		$this->insert("tbl_ipaddress", array("ip_address"=>"92.40.248.173","status"=>"whitelisted","date_created"=>date("Y-m-d H:i:s"),"date_updated"=>date("Y-m-d H:i:s")));
		$this->insert("tbl_ipaddress", array("ip_address"=>"185.34.80.137","status"=>"whitelisted","date_created"=>date("Y-m-d H:i:s"),"date_updated"=>date("Y-m-d H:i:s")));
		$this->insert("tbl_ipaddress", array("ip_address"=>"82.10.126.65","status"=>"whitelisted","date_created"=>date("Y-m-d H:i:s"),"date_updated"=>date("Y-m-d H:i:s")));
		$this->insert("tbl_ipaddress", array("ip_address"=>"216.158.235.250","status"=>"whitelisted","date_created"=>date("Y-m-d H:i:s"),"date_updated"=>date("Y-m-d H:i:s")));

	}
	public function safeDown()
	{
		$this->dropTable("tbl_ipaddress");
	}
}