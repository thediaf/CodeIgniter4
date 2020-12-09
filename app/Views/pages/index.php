<div class="container">
  <?php
    $session = \Config\Services::session();
    if (isset($session->success)) 
    {
  ?>
      <div class="alert alert-success alert-dismissible text-center fade show mb-0">
        <?= $session->success ?>
        <button class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
  <?php
    }
  ?>
  <section class="jumbotron">
    <h1>Welcome in my codeIgniter blog</h1>
    <p>CodeIgniter is a framework of php. If you want to code fast you have to choose CodeIgniter4.</p>
    <p>
        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga impedit ratione aliquid minima unde, nulla, quos nihil provident, hic saepe aut sit! Culpa aspernatur suscipit possimus repudiandae consequuntur cum eos.</span>
        <span>Odio voluptate quia quam eos eaque sed earum, error modi unde quas? Debitis natus laboriosam fuga sunt eaque rerum, corporis ut quam, accusamus dicta modi. Eaque corporis ducimus corrupti iste.</span>
        <span>Ut mollitia consequatur consectetur, delectus blanditiis tempora? Veniam quasi, in eaque aliquid numquam accusantium culpa eveniet incidunt labore. Veniam, rem quasi fuga possimus officia eius non? Ut vel ipsa dicta!</span>
    </p>
  </section>
  <section class="blog-section">
    <div class="container">
      <?php if ($articles): ?>
        <?php foreach ($articles as $article): ?>
          <h3> <a href="/post/<?= $article['slug'] ?>"><?= $article['title']; ?> et <?= $article['slug'] ?></a></h3>
        <?php endforeach; ?>
      <?php else: ?>
          <p class="text-center">No articles found</p>
      <?php endif; ?>
    </div>
  </section>
</div>
