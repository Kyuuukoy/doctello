<?php

function getComments($conn) {
    $sql = "SELECT * FROM comments ORDER BY date DESC;";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<div class='comment-box' style='background: var(--bg-surface, #f9f9f9); padding: 1rem; border-radius: var(--radius-md, 8px); border: 1px solid var(--border-color, #ccc); margin-bottom: 1rem;'>";
            echo "<p style='margin: 0; font-weight: bold;'>" . htmlspecialchars($row['uid']) . " <span style='font-size: 0.85rem; color: #666; font-weight: normal;'>" . htmlspecialchars($row['date']) . "</span></p>";
            echo "<p style='margin-top: 0.5rem; margin-bottom: 0;'>" . nl2br(htmlspecialchars($row['message'])) . "</p>";
            echo "</div>";
        }
    } else {
        echo "<p>No reviews yet. Be the first to leave one!</p>";
    }
}