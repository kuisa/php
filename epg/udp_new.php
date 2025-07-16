<?php
########## 脚本说明及常量定义 ##########
#脚本说明:
#待验证:

#常量定义: (常量定义后可以在主脚本或函数中直接使用而无须任何声明,使用时无需添加 $)
define('UDPTEST_MinSendBuffSize', 4096);//socket 最小发送缓冲区(字节)
define('UDPTEST_MaxSendBuffSize', 65536);//socket 最大发送缓冲区(字节)
define('UDPTEST_DefaultSendBuffSize', 65536);//socket 默认发送缓冲区(字节)

define('UDPTEST_MinRecvBuffSize', 4096);//socket 最小接收缓冲区(字节)
define('UDPTEST_MaxRecvBuffSize', 65536);//socket 最大接收缓冲区(字节)
define('UDPTEST_DefaultRecvBuffSize', 4096);//socket 默认接收缓冲区(字节)

define('UDPTEST_MinSendTimeout', 5);//并行测试最小发送超时(秒)
define('UDPTEST_MaxSendTimeout', 60);//并行测试最大发送超时(秒)
define('UDPTEST_DefaultSendTimeout', 5);//并行测试默认发送超时(秒)

define('UDPTEST_MinRecvTimeout', 5);//并行测试最小接收超时(秒)
define('UDPTEST_MaxRecvTimeout', 60);//并行测试最大接收超时(秒)
define('UDPTEST_DefaultRecvTimeout', 5);//并行测试默认接收超时(秒)

define('UDPTEST_MinDuration', 60);//最小任务持续时间(秒)
define('UDPTEST_MaxDuration', 3600);//最大任务持续时间(秒)
define('UDPTEST_DefaultDuration', 60);//默认任务持续时间(秒)

define('UDPTEST_MinMulti', 1);//最小并行测试连接数
define('UDPTEST_MaxMulti', 256);//最大并行测试连接数.Windows 系统中使用 socket_select 最大的单次 socket 检查数量为 256)
define('UDPTEST_DefaultMulti', 1);//默认并行测试连接数

define('UDPTEST_SendDataPrefix', str_repeat("\0",10).chr(7)."\0\0".chr(29));
########## 脚本说明及常量定义 ##########

$ip = $_GET['ip'];//目标地址
$start = intval($_GET['start']);//开始端口
$end = intval($_GET['end']);//结束端口
$cmp = $_GET['cmp'];//自定义匹配数据

if (filter_var($ip, FILTER_VALIDATE_IP) === false):
  error('目标地址 ip 参数缺失或无效');
endif;
if ($start < 1 or $start > 65535):
  error('开始端口 start 参数缺失或无效.范围: 1-65535');
endif;
if ($end < 1 or $end > 65535):
  error('结束端口 end 参数缺失或无效.范围: 1-65535');
endif;
if ($end < $start):
  error('结束端口不能小于开始端口');
endif;
if (empty($cmp)):
  error('自定义匹配数据 cmp 参数缺失或为空');
endif;

if (!isset($_GET['sb']))://发送缓冲区(字节)
  $sb = UDPTEST_DefaultSendBuffSize;
elseif (($sb = intval($_GET['sb'])) < UDPTEST_MinSendBuffSize or $sb > UDPTEST_MaxSendBuffSize):
  error('发送缓冲区 sb 参数无效.范围: '.strval(UDPTEST_MinSendBuffSize).'-'.strval(UDPTEST_MaxSendBuffSize).' 字节');
endif;
if (!isset($_GET['rb']))://接收缓冲区(字节)
  $rb = UDPTEST_DefaultRecvBuffSize;
elseif (($rb = intval($_GET['rb'])) < UDPTEST_MinRecvBuffSize or $rb > UDPTEST_MaxRecvBuffSize):
  error('发送缓冲区 rb 参数无效.范围: '.strval(UDPTEST_MinRecvBuffSize).'-'.strval(UDPTEST_MaxRecvBuffSize).' 字节');
endif;
if (!isset($_GET['sto']))://并行测试发送超时(秒)
  $sto = UDPTEST_DefaultSendTimeout;
elseif (($sto = intval($_GET['sto'])) < UDPTEST_MinSendTimeout or $sto > UDPTEST_MaxSendTimeout):
  error('并行测试发送超时 sto 参数无效.范围: '.strval(UDPTEST_MinSendTimeout).'-'.strval(UDPTEST_MaxSendTimeout).' 秒');
endif;
if (!isset($_GET['rto']))://并行测试接收超时(秒)
  $rto = UDPTEST_DefaultRecvTimeout;
elseif (($rto = intval($_GET['rto'])) < UDPTEST_MinRecvTimeout or $rto > UDPTEST_MaxRecvTimeout):
  error('并行测试接收超时 rto 参数无效.范围: '.strval(UDPTEST_MinRecvTimeout).'-'.strval(UDPTEST_MaxRecvTimeout).' 秒');
endif;
if (!isset($_GET['dur']))://任务持续时间(秒)
  $dur = UDPTEST_DefaultDuration;
elseif (($dur = intval($_GET['dur'])) < UDPTEST_MinDuration or $dur > UDPTEST_MaxDuration):
  error('任务持续时间 dur 参数无效.范围: '.strval(UDPTEST_MinDuration).'-'.strval(UDPTEST_MaxDuration));
endif;
if (!isset($_GET['multi']))://并行测试连接数
  $multi = UDPTEST_DefaultMulti;
elseif (($multi = intval($_GET['multi'])) < UDPTEST_MinMulti or $multi > UDPTEST_MaxMulti):
  error('并行测试连接数 multi 参数无效.范围: '.strval(UDPTEST_MinMulti).'-'.strval(UDPTEST_MaxMulti));
endif;

$pass = array();
$varA = $varB = $varC = $varD = $null = $data = null;
if ($multi > ($varA = $end - $start + 1)):
  $multi = $varA;
endif;

$start_time = microtime(true);
$end_time = $start_time + $dur;
$count = 0;
udp_debug_start:
echo 'debug: 第 ', strval(++$count), ' 轮任务开始执行', PHP_EOL;
ob_flush();
flush();
$socket = array();
$varA = 0;
do {
  $varB = socket_create(AF_INET, SOCK_DGRAM, SOL_UDP);
  socket_set_option($varB, SOL_SOCKET, SO_SNDBUF, $sb);
  socket_set_option($varB, SOL_SOCKET, SO_RCVBUF, $rb);
  $socket[$varA] = $varB;
} while (++$varA < $multi);

$varD = $start;
do {
  $varA = $socket;
  if (($varB = socket_select($null, $varA, $null, $sto)) === false):
    echo 'error: 发送数据阶段调用 socket_select 函数出现错误,错误代码: ', strval(($varB = socket_last_error())), ', 错误描述: ', socket_strerror($varB);
    exit;
  elseif ($varB > 0):
    foreach ($varA as $varB) {
      $varC = UDPTEST_SendDataPrefix.base64_encode($ip.':'.strval($varD))."\0";
      socket_sendto($varB, $varC, strlen($varC), 0, $ip, $varD);
      if (++$varD > $end):
        break 2;
      endif;
    }
  else:
    echo 'error: 发送数据阶段调用 socket_select 函数出现超时.可能由于本机发送资源不足';
    exit;
  endif;
} while (true);

do {
  $varA = $socket;
  if (($varB = socket_select($varA, $null, $null, $rto)) === false):
    echo 'error: 接收数据阶段调用 socket_select 函数出现错误,错误代码: ', strval(($varB = socket_last_error())), ', 错误描述: ', socket_strerror($varB);
    exit;
  elseif ($varB > 0):
    foreach ($varA as $varB) {
      socket_recvfrom($varB, $data, 4096, 0, $varC, $varD);
      #-----------已接收数据处理代码开始-----------

      if (strpos(base64_decode($data), $cmp) !== false)://如果需要保证查找的数据在首位开始出现则将 !== false 改为 === 0
        if (isset($pass[$varD]))://重复排除并统计累计出现次数
          $pass[$varD] += 1;
        else:
          $pass[$varD] = 1;
          echo PHP_EOL, $varC, ':', strval($varD), PHP_EOL;
        endif;
      endif;

      #-----------已接收数据处理代码结束-----------
    }
  elseif (count($pass) > 0):
    echo PHP_EOL, 'debug: 任务执行完毕并已找出响应端口.用时: ', strval(microtime(true) - $start_time), ' 秒', PHP_EOL;
    exit;
  elseif (microtime(true) < $end_time):
    echo 'debug: 第 ', strval($count), ' 轮任务执行完毕', PHP_EOL;
    ob_flush();
    flush();
    foreach ($socket as $varA) {
      socket_close($varA);
    }
    goto udp_debug_start;
  else:
    echo 'debug: 已到达最大任务持续时间且没有响应端口被发现', PHP_EOL;
    exit;
  endif;
} while (true);

function error(string $msg) {
  header('HTTP/1.1 400 Bad Request', true, 400);
  echo 'error: ', $msg;
  exit;
}

?>