<?php

//phpinfo();
////
//exit;
// ���ӵ�mongodb

$m = new \MongoClient();
// ѡ��һ�����ݿ�


$db = $m->selectDB("test");

//$db = $m->mydb;

//��������
//$collection = $db->createCollection("my_score_col");


//ѡ�񼯺�
$collection = $db->my_score_col;


// �����ĵ� C
$document = array(
    "title" => "MongoDB",
    "description" => "database",
    "likes" => 100,
    "url" => "http://www.baidu.com",
    "by"=>"change.net"
);
$ret_ins  = $collection->insert($document);


$cursors = $collection->find();
$list = iterator_to_array($cursors, true);

//var_dump($cursors,$list);

// U
$ret_upd = $collection->update(array("title" => "MongoDB"), array('$set' => ["title" => "MongoDB","by"=>"change.com"]));
$ret_upd = $collection->update(array("title" => "MongoDB"), array('$set' => ["title" => "MongoDB","by"=>"change.com"],'$incr'=>["likes"=>1]),["multi"=>true]);
$ret_save = $collection->save(["_id" => ObjectId("56064f89ade2f21f36b03136")],["title"=>"MongoDB Save"]);
$cursors = $collection->find();
$list = iterator_to_array($cursors, true);

//var_dump($cursors,$list);

//D

$collection->remove(array("title"=>"MongoDB"), array("justOne" => true));


//// R
$cursors = $collection->find();
$list = iterator_to_array($cursors, true);
$info = $collection->findOne();


$count = $collection->count();



//�ͻ���
// $db = $m->selectDB("test");  ����һ�� mongodb����
$db_info = $m->listDBs();
$host_info = $m->getHosts();
//$m->close();;

//var_dump($count,$db_info,$host_info,$db);

//���ݼ���
//$cols = $db->getCollectionNames();
//$db->createCollection("haha");
//$cols = $db->listCollections();


var_dump($host_info,$db_info,$list);


