<?php
/*
ʵ������
My��һ����
$zzy��$zxg����ʵ����new��ʵ��������
ʵ������Ҫ��->���š����ʵ�ʱ�򣬱���Ϊ$zzy->age����Ȼ����age��˽�еģ����Ǵ���ȷ���ע�⣬ageǰ��û��$����
__construct�������캯������������ʵ������ʱ��ֵ
private�ǲ���ֱ��ͨ��ʵ�����ʵ�
public�ǿ���ͨ��ʵ�����ʵ�
protected�Ժ���˵
staticΪ ��̬��Ա����
����ֱ��ͨ������(My)������
���ֱ��ͨ�����������ʵĻ�������->��������::������ ���������������
����My::$wuzhong��ע�⣬��Ҫ$��
���˾�̬��Ա���������о�̬��Ա������

�̳�
extends
private�ǲ��ܼ̳е�

*/
class animal{
	public function eat(){
		echo '��';
	}
}

class My extends animal{
	public static $wuzhong = "����";
	private $age;
	private $name;
	public function introduce(){
		echo $this->name,',',$this->age;
	}

}

$zzy = new My("����Զ",22);
$zzy->introduce();
