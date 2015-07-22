# php-timer

php����״̬���湤��
-------------------
ʹ�÷�������  
```php
require dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

//��ʼ���������ڴ浥λ
$timer = new \Jenner\Timer(\Jenner\Timer::UNIT_KB);
//��¼a״̬
$timer->mark('a');
sleep(2);
//��¼b״̬
$timer->mark('b');
sleep(3);
//��¼c״̬
$timer->mark('c');
sleep(4);
//��¼d״̬
$timer->mark('d');
//��ӡ���屨�棨��������ֵ��
$timer->printReport();
//��ӡa״̬��b״̬�Ĳ�����Ϣ����������ʱ�䡢ʹ���ڴ��
$timer->printDiffReportByStartAndEnd('a', 'b');
//��ȡ��һ��mark�����һ��mark֮��Ĳ�����Ϣ
$timer->printDiffReport();
```

����������  
```shell
------------------------------------------
mark:a
time:1437534443.7121s
memory_real:1280KB
memory_emalloc:830.4375KB
memory_peak_real:1280KB
memory_peak_emalloc:841.625KB
------------------------------------------
mark:b
time:1437534445.7123s
memory_real:1280KB
memory_emalloc:831.625KB
memory_peak_real:1280KB
memory_peak_emalloc:841.625KB
------------------------------------------
mark:c
time:1437534448.7125s
memory_real:1280KB
memory_emalloc:832.5859375KB
memory_peak_real:1280KB
memory_peak_emalloc:841.625KB
------------------------------------------
mark:d
time:1437534452.7127s
memory_real:1280KB
memory_emalloc:833.546875KB
memory_peak_real:1280KB
memory_peak_emalloc:841.625KB
------------------------------------------
mark:[diff] start_mark:a end_mark:b
time:2.0001969337463s
memory_real:0KB
memory_emalloc:1.1875KB
memory_peak_real:0KB
memory_peak_emalloc:0KB
------------------------------------------
mark:[total diff]
time:9.0006530284882s
memory_real:0KB
memory_emalloc:3.109375KB
memory_peak_real:0KB
memory_peak_emalloc:0KB
```