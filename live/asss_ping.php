<?php
  //ServerPopulation.php v1.0
  // by Goldeye 12/26/07
  // Goldeye.Ichiban@gmail.com

  // http://wiki.minegoboom.com/index.php/PHP_ping_client


  //Errors are silent and the recv times out default 100ms.
  //Updates occur no more than once in 60 sec by default anyway.
$hz = new ServerPopulation("162.248.95.143", 5005);
$total = $hz->get_server_total();
$playing = $hz->get_server_playing();
$spec = $total-$playing;
$pub0=$hz->get_arena("0");
$fb=$hz->get_arena("teamelim");
//Note: name automatically lowercased before it gets here.
print "Total: $playing playing, $spec spectating, $total logged in.\n";
print "(Public 0): $pub0[playing] playing, $pub0[spec] spectating, $pub0[total] logged in.\n";
print "Football: $fb[playing] playing, $fb[spec] spectating, $fb[total] logged in.\n";

class ServerPopulation
{
  var $host;
  var $port;
  var $last_time;
  var $update_time;
  var $timeout;
  var $arenas = array();
  var $total;
  var $playing;

  function ServerPopulation($host,$port,$update_time=60,$timeout=100)
  { //For PHP4
    $this->__construct($host,$port,$update_time,$timeout);
  }

  function __construct($host,$port,$update_time=60,$timeout=100)
  { //For PHP5
    $this->host = $host;
    $this->port = $port;
    $this->update_time=$update_time;
    $this->timeout=$timeout*1000;
    $this->update();
  }

  function get_server_total()
  {
    return $this->total;
  }

  function get_server_playing()
  {
    return $this->playing;
  }

  function get_arena($name)
  {
    return $this->arenas[$name];
  }

  function get_arena_array()
  {
    return $this->arenas;
  }

  function update()
  {
    if(time()-$this->last_time < $this->update_time)
      return;

    $socket = socket_create(AF_INET, SOCK_DGRAM, 0);
    $rcvtimeo["sec"]=0;
    $rcvtimeo["usec"]=$this->timeout;
    socket_set_option($socket,SOL_SOCKET,SO_RCVTIMEO,$rcvtimeo);
    $result = socket_connect($socket,$this->host,$this->port);
    if(!$socket || !$result) return;
    $out=pack("VV",0,0x01|0x02);
    socket_write($socket, $out, 8);
    if(@socket_recv($socket,$in,512,0) < 1)
      return;
    $res = unpack("Vtime/Voptions",$in);
    $opt = $res["options"];
    if($opt & 0x01) // Server info included.
      {
	$in = substr($in,8);
	$res = unpack( "Vtotal/Vplaying",$in);
	$this->total = $res["total"];
	$this->playing = $res["playing"];
      }
    if($opt & 0x02) // Arena info included.
      {
	$in = substr($in,8);
	do
	  {
	    $n = strpos($in,0x00);
	    $name = strtolower(substr($in,0,$n));
	    $in = substr($in,$n+1);
	    $res = unpack("vtotal/vplaying",$in);
	    $res["spec"]=$res["total"]-$res["playing"];
	    $in = substr($in,4);
	    $this->arenas[$name]=$res;
	  }
	while(strlen($in)>1);
      }
    $this->last_time=time();
  }
}
?>