<?php
class Comments extends Model{

	public function getComments(){
		$sql = 'SELECT commentID, uID, commentText, date, postID from categories';
		$categories2 = array();

		// perform query
		$results = $this->db->execute($sql);

		while ($row=$results->fetchrow()) {
			$comments[] = $row;
		}

		foreach($comments as $array){
			$comments2[$array['commentID']]=$array['name'];
		}

		$comments = $comments2;
		return $comments;
	}

	public function getComment($cID){
		$sql = 'SELECT commentID, name FROM comments WHERE commentID=?';
		$outcome = $this->db->getrow($sql,array($cID));

		return $outcome;

		}
		
	public function addComment($comment){
		$sql = "INSERT INTO comments (commentID, uID, commentText, date, postID) VALUES (?,?,?,?,1)";
		$outcome = $this->db->execute($sql, $comment);

		return $outcome;
		}

}

?>
