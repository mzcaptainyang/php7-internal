## 4.1 变量

### 4.1.1 变量的赋值、销毁
PHP变量定义：变量名 = 变量值，其中变量名有两种类型：CV($var_name)、VAR($$var_name)，这里的CV、VAR等就是对应前面Zend编译过程中提到的那5种[__操作数类型__](../zend_compile.md#操作数类型)。

普通PHP变量赋值操作对应的opcode是`ZEND_ASSIGN`，

### 4.1.2 变量类型转换


