<?php include 'inc/header.php'; ?>

<?php
$get_all_query = "SELECT * FROM feedback";
$res = mysqli_query($conn, $get_all_query);
$feedback = mysqli_fetch_all($res, MYSQLI_ASSOC);
?>

<h2>Past Feedback</h2>

<?php if (empty($feedback)): ?>
  <p class="lead mt3">There is no feedback</p>
<?php endif; ?>

<?php foreach ($feedback as $item) : ?>
  <div class="card my-3 w-75">
    <div class="card-body text-center">
      <p><?= $item['body']; ?></p>
      <div class="text-secondary mt-2">
        By <?= $item['name']; ?> on <?= $item['postedAt']; ?>
      </div>
    </div>
  </div>

<?php endforeach; ?>


<?php include 'inc/footer.php'; ?>