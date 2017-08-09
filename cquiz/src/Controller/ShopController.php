<?php
namespace App\Controller;
//use Cake\ORM\TableRegistry;
//use Cake\Datasource\ConnectionManager;
class ShopController extends AppController{
	public function index(){

    echo "1";
		/*
		$articles = TableRegistry::get('Articles');
		$query = $articles->find();
		foreach ($query as $row) {
		    $this->set("message",$row->title);
		}
		*/
		/*
	$query = $this->Articles->find()
		    ->where(['id' => 111]);
		    //->orWhere(['author_id' => 3])
		    //->andWhere([
		    //    'published' => true,
		    //    'view_count >' => 10
		    //])
		    //->orWhere(['promoted' => true]);
			foreach ($query as $row) {
		    	$this->set("message",$row->title);
			}
	//debug($query->all());	    
	

	
		
		$query = $this->Articles->query();
		$query->insert(['id', 'title','content'])
		    ->values([
		    	'id' => '333',
		        'title' => 'Firs',
		        'content' => 'Somt',
		    ])
		    ->execute();
		    */


	}

}
?>