<?php
/**
 * Created by PhpStorm.
 * User: Jenner
 * Date: 2015/7/22
 * Time: 10:34
 */


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
//��ȡ���屨�棬��������
$report = $timer->getReport();
//��ȡһ��mark�ı���
$a_report = $timer->getReport('a');
print_r($a_report);
//��ӡa״̬��b״̬�Ĳ�����Ϣ����������ʱ�䡢ʹ���ڴ��
$timer->printDiffReportByStartAndEnd('a', 'b');
//��ȡa״̬��b״̬�Ĳ��챨��
$ab_diff_report = $timer->getDiffReportByStartAndEnd('a', 'b');
//��ӡ��һ��mark�����һ��mark֮��Ĳ�����Ϣ
$timer->printDiffReport();
//��ȡ��һ��mark�����һ��mark֮��Ĳ�����Ϣ
$diff_report = $timer->getDiffReport();