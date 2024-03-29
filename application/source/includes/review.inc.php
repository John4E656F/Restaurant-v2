<?php
    include_once 'dbh.php';

    function time_elapsed_string($datetime, $full = false) {
        $now = new Datetime;
        $ago = new DateTime($datetime);
        $diff = $now->diff($ago);
        $diff->w = floor($diff->d / 7);
        $diff->d -= $diff->d / 7;
        $string = array('y' => 'year', 'm' => 'month', 'w' => 'week', 'd' => 'day', 'h' => 'hour', 'i' => 'minute', 's' => 'second');
        foreach ($string as $k => &$v) {
            if ($diff->$k) {
            $v  = $diff -> $k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
        } else {
            unset($string[$k]);
        }
    }
    if (!$full) $string = array_slice($string, 0 ,1);
    return $string ? implode(', ', $string) . ' ago' : 'just now';
    }

if (isset($_GET['page_id'])) {
    if (isset($_POST['name'], $_POST['email'], $_POST['content'], $_POST['rating'],)) {

    // if(emptyInputReview($name, $email, $content, $rating)) {
    //     exit(header("Location: ../pages/review.php?error=emptyinput"));
    // }
    //Inset a new review (user submitted form)
    $stmt = $pdo->prepare('INSERT INTO reviews (page_id, name, email, content, image, rating) VALUES (?,?,?,?,?,?,NOW())');
    $stmt->execute([$_GET['page_id'], $_POST['name'], $_POST['email'], $_POST['content'], $_POST['image'], $_POST['rating']]);
        exit(header("Location: ../pages/review.php?review=Submitted!"));
    } 

    //Get all review by the Page ID ordered by the submit data
    $stmt = $pdo->prepare('SELECT * FROM reviews WHERE page_id = ? ORDER BY submit_date DESC');
    $stmt->execute([$_GET['page_id']]);
    $reviews = $stmt->fetchAll(PDO::FETCH_ASSOC);

    //Get the overall rating and total amount of reviews
    $stmt = $pdo->prepare('SELECT AVG(rating) AS overall_rating, COUNT(*) AS total_reviews FROM reviews WHERE page_id = ?');
    $stmt->execute([$_GET['page_id']]);
    $reviews_info = $stmt->fetch(PDO::FETCH_ASSOC);
} else {
    exit(header("Location: ../pages/review.php?review=providePageID"));
}

?>

<div class="overall_rating">
    <span class="num"><?=number_format($reviews_info['overall_rating'], 1)?></span>
    <span class="stars"><?=str_repeat('&#9733;', round($reviews_info['overall_rating']))?></span>
    <span class="total"><?=$reviews_info['total_reviews']?>reviews</span>
</div>
<a href="#" class="write_review_btn">>Write Review</a>
<div class="write_review">
    <form>
        <input name="name" type="text" placeholder="Your Name" required>
        <input name="email" type="text" placeholder="Your Email" required>
        <input name="rating" tyype="number" min="1" max="5" placeholder="Rating (1-5)" required>
        <textarea name="content" placeholder="Write your review here..." required></textarea>
        <button type="submit">Submit Review</button>
    </form>
</div>
<?php foreach ($reviews as $review): ?>
    <div class="review">
        <h3 class="name"><?htmlspecialchars($review['name'], ENT_QUOTES)?></h3>
        <h3 class="email"><?htmlspecialchars($review['email'], ENT_QUOTES)?></h3>
        <div>
            <span class="rating"><?str_repeat('&#9733;', $review['rating'])?></span>
            <span class="date"><?time_elapsed_string($review['submit_date'], ENT_QUOTES)?></span>
        </div>
        <p class="content"><?=htmlspecialchars($review['content'], ENT_QUOTES)?></p>
    </div>
<?php endforeach ?>
