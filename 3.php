<?php
/*
实例和类
My是一个类
$zzy和$zxg都是实例，new是实例化操作
实例访问要用->符号。访问的时候，比如为$zzy->age（虽然这里age是私有的，但是打个比方。注意，age前面没有$。）
__construct叫做构造函数，用于在类实例化的时候传值
private是不能直接通过实例访问的
public是可以通过实例访问的
protected以后再说
static为 静态成员变量
可以直接通过类名(My)来访问
如果直接通过类名来访问的话，不用->，而是用::（叫做 作用域操作符）。
比如My::$wuzhong。注意，需要$。
除了静态成员变量，还有静态成员方法。

继承
extends
private是不能继承的

*/
class animal{
	public function eat(){
		echo '吃';
	}
}

class My extends animal{
	public static $wuzhong = "人类";
	private $age;
	private $name;
	public function introduce(){
		echo $this->name,',',$this->age;
	}

}

$zzy = new My("竹致远",22);
$zzy->introduce();
