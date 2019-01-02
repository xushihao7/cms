<?php
 namespace  App\Http\Controllers\User;
    use Illuminate\Routing\Controller;
    use App\Model\UserModel;
    class User extends  Controller{
    /*public  function  index($id){
        $user=UserModel::where(['id'=>$id])->first()->toArray();
        echo "<pre>";
        print_r($user);
    }*/
    public function add(){
        $data=[
            'name'=>"欧文",
            'age'=>28
        ];
        $id=UserModel::insert($data);
        var_dump($id);
    }
    public function update($id){
         $where=[
             'id'=>$id
         ];
         $data=[
             'name'=>"杜兰特"
         ];
         $id=UserModel::where($where)->update($data);
         var_dump($id);
    }
    public function  del($id){
        $where=[
            'id'=>$id
        ];
        $id=UserModel::where($where)->delete();
        var_dump($id);
    }
    public function list(){
        $list=UserModel::all();
        $data=[
            'list'=>$list
        ];
        return view("user.index",$data);
    }

}