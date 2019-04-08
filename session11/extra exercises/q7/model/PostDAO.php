<?php

require_once 'common.php';

class PostDAO {

    public function getAll() {
        // STEP 1
        $connMgr = new ConnectionManager();
        $conn = $connMgr->connect();

        // STEP 2
        $sql = "SELECT
                    id,
                    create_timestamp,
                    update_timestamp,
                    subject,
                    entry,
                    mood
                FROM post"; // SELECT * FROM post; // This will also work
        $stmt = $conn->prepare($sql);

        // STEP 3
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);

        // STEP 4
        $posts = []; // Indexed Array of Post objects
        while( $row = $stmt->fetch() ) {
            $posts[] =
                new Post(
                    $row['id'],
                    $row['create_timestamp'],
                    $row['update_timestamp'],
                    $row['subject'],
                    $row['entry'],
                    $row['mood']);
        }

        // STEP 5
        $stmt = null;
        $conn = null;

        // STEP 6
        return $posts;
    }

    public function get($id) {
        // STEP 1
        $connMgr = new ConnectionManager(); // ConnectionManager object
        $conn = $connMgr->connect();        // PDO object

        // STEP 2
        $sql = "SELECT * FROM post WHERE id = :id"; // INCOMPLETE
        $stmt = $conn->prepare($sql);       // SQLStatement object

        // STEP 3
        // How do I run my query using $stmt?
        $stmt->bindParam(":id", $id, PDO::PARAM_STR);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();

        // STEP 4
        $post_object = null;  // If a match is found, return a Post object

        // How to retrieve query results?
        // ???
        if( $row = $stmt->fetch() ) {
            $post_object =
                new Post(
                    $row['id'],
                    $row['create_timestamp'],
                    $row['update_timestamp'],
                    $row['subject'],
                    $row['entry'],
                    $row['mood']);
        }

        // STEP 5
        $stmt = null;
        $conn = null;

        // STEP 6
        return $post_object;
    }

    public function update($id, $subject, $entry, $mood) {

        $connMgr = new ConnectionManager(); // ConnectionManager object
        $conn = $connMgr->connect();        // PDO object

        // STEP 2
        $sql = "UPDATE post 
            SET entry = :entry, subject = :subject, mood = :mood, update_timestamp = :u_stamp      
            WHERE id = :id"; // INCOMPLETE
        $stmt = $conn->prepare($sql);       // SQLStatement object

        // STEP 3
        // How do I run my query using $stmt?
        $stamp = new DateTime();
        $stamp = $stamp->format('Y-m-d H:i:s');
        $stmt->bindParam(":id", $id, PDO::PARAM_STR);
        $stmt->bindParam(":entry", $entry, PDO::PARAM_STR);
        $stmt->bindParam(":subject", $subject, PDO::PARAM_STR);
        $stmt->bindParam(":mood", $mood, PDO::PARAM_STR);
        $stmt->bindParam(":u_stamp", $stamp, PDO::PARAM_STR);


        $status = $stmt->execute();

        // STEP 5
        $stmt = null;
        $conn = null;

        // STEP 6
        return $status;
    }

    public function delete($id) {

        $connMgr = new ConnectionManager(); // ConnectionManager object
        $conn = $connMgr->connect();        // PDO object

        // STEP 2
        $sql = "DELETE FROM post WHERE id = :id"; // INCOMPLETE
        $stmt = $conn->prepare($sql);       // SQLStatement object

        // STEP 3
        // How do I run my query using $stmt?
        $stmt->bindParam(":id", $id, PDO::PARAM_STR);
        $status = $stmt->execute();

        // STEP 5
        $stmt = null;
        $conn = null;

        // STEP 6
        return $status;
    }

    public function add($subject, $entry, $mood) {

        $connMgr = new ConnectionManager(); // ConnectionManager object
        $conn = $connMgr->connect();        // PDO object

        // STEP 2
        $sql = "INSERT INTO post (subject, entry, mood, create_timestamp, update_timestamp) 
                VALUES (:subject, :entry, :mood, :c_stamp, :u_stamp)"; // INCOMPLETE
        $stmt = $conn->prepare($sql);       // SQLStatement object

        // STEP 3
        // How do I run my query using $stmt?
        $stamp = new DateTime();
        $stamp = $stamp->format('Y-m-d H:i:s');
        $stmt->bindParam(":entry", $entry, PDO::PARAM_STR);
        $stmt->bindParam(":subject", $subject, PDO::PARAM_STR);
        $stmt->bindParam(":mood", $mood, PDO::PARAM_STR);
        $stmt->bindParam(":u_stamp", $stamp, PDO::PARAM_STR);
        $stmt->bindParam(":c_stamp", $stamp, PDO::PARAM_STR);

        $status = $stmt->execute();

        // STEP 5
        $stmt = null;
        $conn = null;

        // STEP 6
        return $status;
    }
}

?>