<main>
   <div class="container">
      <div class="row row-cols-1 row-cols-md-2 row-cols-lg-5 g-4 align-items-stretch">
         
         <?php foreach ($albums as $album): ?>
            <a href="" class="col d-block">
               <article class="text-center h-100 p-3">
                  <img src="<?= $album['poster'] ?>" alt="<?= $album['title'] ?>" class="w-100 mb-2">
                  <h2 class="text-uppercase"><?= $album['title'] ?></h2>
                  <p class="m-0"><?= $album['author'] ?></p>
                  <p class="m-0"><?= $album['year'] ?></p>
                  <p class="m-0 fst-italic"><?= $album['genre'] ?></p>
               </article>
            </a>
         <?php endforeach ?>

      </div>
   </div>
</main>