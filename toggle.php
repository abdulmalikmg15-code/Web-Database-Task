<?php

include "db.php";

if (isset($_POST["id"])) {

    $id = intval($_POST["id"]);

    $stmt = $conn->prepare(
        "UPDATE users
         SET status = CASE
             WHEN status = 0 THEN 1
             ELSE 0
         END
         WHERE id = ?"
    );

    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {

        $stmt = $conn->prepare(
            "SELECT status FROM users WHERE id = ?"
        );

        $stmt->bind_param("i", $id);
        $stmt->execute();

        $result = $stmt->get_result();
        $row = $result->fetch_assoc();

        echo $row["status"];

    } else {

        echo "error";
    }

    $stmt->close();
    $conn->close();
}

?>