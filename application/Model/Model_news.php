<meta charset='UTF-8'><?php
class Model_News extends Model{
	
	
	function select_news(){
		$conn = $this->connect_db();
                $sum = 3;
                $page = 0;
                if (isset($_get[page])){$page = $_get[page];}
			if($conn == false){
                                
				#$result = mysql_query("SELECT * FROM news");
				$result = mysql_query("SELECT * FROM news ORDER BY id DESC LIMIT $page,$sum");
				while($myrow = mysql_fetch_array($result)){
				$data [] = $myrow;
				}
				#require_once './lib/Pager/Pager.php';
				#$pager = Pager::factory($result);
                                $back = $page-$sum;
                                $next = $page+$sum;
                                array_push($data, $back, $next);
                                                                var_dump($back);
		return $data;
			}
                
		}
		
	function select_newsone($id){
		$conn = $this->connect_db();
			if($conn == false){
				$result = mysql_query("SELECT * FROM news WHERE id='$id'");
		
				$myrow = mysql_fetch_array($result);
				$data [] = $myrow; 
			}
		return $data;
		}
		
	
	function add_new(){
		$this->connect_db();
		$title = $_POST[title];
		$text = $_POST[text];
		$user = $_SESSION[user];
		$date = date("H:i m.d.y");
		mysql_query("INSERT INTO news (title, text, user, date) VALUES ('$title', '$text', '$user', '$date')") or die ("Не получилось!");
	}
	
	function del_new()
	{
		$this->connect_db();
		$id = $_POST[id];
		mysql_query("DELETE FROM news WHERE id = '$id'") or die ("Не получилось!");
	}
	
	function edit_new()
	{
		$this->connect_db();
		$id = $_POST[id];
		$title = $_POST[title];
		$text = $_POST[text];
		$user = $_SESSION[user];
		$date = date("H:i m.d.y");
		mysql_query("UPDATE news SET title = '$title', text = '$text', user = '$user', date = '$date' WHERE id='$id'") or die ("Хер там!");
	}
}
?>

