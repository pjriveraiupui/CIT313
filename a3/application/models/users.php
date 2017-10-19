<?php
class Users extends Model{

  function getUser($pID){
    if($limit > 0){

      $numposts = ' LIMIT '.$limit;
    }

      $sql =  'SELECT first_name, last_name, email FROM users'.$numposts;

    // perform query
    $results = $this->db->execute($sql);

    while ($row=$results->fetchrow()) {
      $users[] = $row;
    }

    return $users;

  }

  }


}
