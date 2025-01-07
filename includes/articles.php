<?php
// ==========================================================================
// includes/articles.php
// ==========================================================================

// Attempt to retrieve all data from articles table.
try {
    $query = "SELECT * FROM articles";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $articles = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    error_log("Error fetching table: " . $e->getMessage());
}

// Insert articles into HTML.
function insertArticles($articles) {

    // Define modifier classes for each category.
    $modifiers = [
        'Careers' => 'business',
        'Insights' => 'digital',
        'News' => 'web'
    ];

    // Loop through articles and generate HTML.
    foreach ($articles as $article) {
        $modifier = $modifiers[$article['category']] ?? 'web';
        echo generateArticleHTML($article, $modifier);
    }
}

// Generate article HTML and set modifier class for color scheme.
function generateArticleHTML($article, $modifier) {
    return 
    '<div class="news__item-wrapper col-xs-12 col-sm-6 col-lg-4">
        <div class="news__item">
            <a href="#" class="news__link"></a>
            <div>
                <a href="#" class="news__category news__category--' . $modifier . '">
                    <strong>' . $article['category'] . '</strong>
                </a>
                <img src="' . $article['img_path'] . '" class="news__image" alt="' . $article['heading'] . '">
            </div>
            <div class="news__preview card">
                <h3 class="news__heading news__heading--' . $modifier . '">
                    <strong>' . $article['heading'] . '</strong>
                </h3>
                <p class="news__paragraph">' . $article['paragraph'] . '</p>
                <a href="#" class="btn btn--' . $modifier . '">Read More</a>
                <div class="news__user">
                    <div class="news__avatar">
                        <img src="' . $article['avatar_path'] . '" alt="' . $article['author'] . '">
                    </div>
                    <div class="news__date">
                        <strong class="news__author">Posted by ' . $article['author'] . '</strong><br>
                        ' . formatDate($article['date']) . '
                    </div>
                </div>
            </div>
        </div>
    </div>';
}

// Format date string into readable format (e.g. 10th October 2024).
function formatDate($date) {
    return date("jS F Y", strtotime($date));
}

?>