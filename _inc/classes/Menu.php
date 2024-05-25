<?php
    class Menu extends Database{
        private $db;
        public function __construct()
        {
            $this->db = $this->make_connection();
        }
        public function selectAll(){
            try{
                $sql = "SELECT * FROM menu";
                $query = $this->db->query($sql);
                $result = $query->fetchAll();
                return $result;
            }
            catch(PDOException $e){
                echo $e->getMessage();
            }
        }
        public function getRows(){
            try{
                $sql = "SELECT * FROM menu";
                $query = $this->db->query($sql);
                return $query->rowCount();
            }
            catch(PDOException $e){
                echo $e->getMessage();
            }
        }
        public function content_mapping(){
            try{
                $sql = "SELECT * FROM menu";
                $query = $this->db->query($sql);
                $rows = $query->fetchAll();
                echo '<table class="table-horizontal">
                        <tr>
                            <th>názov</th>
                            <th>image</th>
                            <th>cena</th>
                            <th>delete</th>
                            <th>edit</th>
                        <tr>';
                for($i = 0; $i<count($rows); $i++){
                    echo '<tr>';
                    echo '<td>'.$rows[$i]->name.'</td>';
                    echo '<td>'.basename($rows[$i]->pic_url).'</td>';
                    echo '<td>'.$rows[$i]->price.'</td>';
                    echo '<td>
                            <form action ="" method="POST">
                                <button type="submit" class="btn border-10 no-shadow no-transform no-border" name="delete" value="'.$rows[$i]->menu_id.'"'.'>Vymazať</button>
                         </form>
                        </td>';
                    echo '<td>
                        <form action="update.php?page=Menu" method="POST">
                          <button type="submit" class="btn border-10 no-shadow no-transform no-border" name="edit_menu" value="'.$rows[$i]->menu_id.'"'.'>Editovať</button>
                          </form>
                      </td>';
                    echo '</tr>';
                }
                echo '</table>';
            }
            catch(PDOException $e){
                echo $e->getMessage();
            }
    }
    public function delete($id){
        try{
            $sql = "DELETE FROM menu WHERE menu_id = ?";
            $query = $this->db->prepare($sql);
            $query->execute([$id]);
        }
        catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    // private function select_distinguish_url($id){
    //     $sql = "SELECT pic_url FROM menu WHERE menu_id != ?";
    //     $query = $this->db->prepare($sql);
    //     $query->execute([$id]);
    //     $array = $query->fetchAll();
    //     return $array;
    // }
    private function get_images_url(){
        $array = glob("../img/menu_img/*");
        return $array;
    }
    public function edit_interface($id){
        $sql = "SELECT name, pic_url, price FROM menu WHERE menu_id = ?";
        $query = $this->db->prepare($sql);
        $query->execute([$id]);
        $object = $query->fetch();
        $img_url = basename($object->pic_url);
        $url_array = $this->get_images_url();
        $dir = '/pekaren/img/menu_img/';
        echo '<form action="table.php?page=Menu" method="POST" class="standart-form edit-form">
        <label for="name">Názov</label><br>
          <input type="text" name="edit_name" value="'.$object->name.'" required><br>
          <label for="images">Image</label><br>
          <select name="images" id="images">
            <option value="'.$dir.$img_url.'">'.$img_url.'</option>';
        for($i = 0; $i<count($url_array); $i++){
            if(basename($url_array[$i]) == $img_url) continue;
            echo '<option value="'.$dir.basename($url_array[$i]).'">'.basename($url_array[$i]).'</option>';
        }
        echo  '</select><br>';
        echo '<label for="edit_price">Cena</label><br>';
        echo '<input type="text" name="edit_price" value="'.$object->price.'" required><br>';
        echo '<img src="'.$dir.$img_url.'" id="prewiew-image" width=500><br>';
        echo  '<button type="submit" name="edit" class="btn no-border" value="'.$id.'">Submit</button>
        </form>';
    }
    public function edit(){
        $sql = "UPDATE menu SET name = :name, pic_url = :url, price = :price WHERE menu_id = :id";
        $query = $this->db->prepare($sql);
        $data = array("name" => $_POST['edit_name'], "url" => $_POST['images'], "price"=> $_POST['edit_price'], "id" => $_POST['edit']);
        $query->execute($data);
    }
}
?>