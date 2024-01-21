<?php
    include_once("templates/header.php");
    if(isset($_GET['id'])){
        $postId = $_GET['id'];
        $currentPost;
        foreach($posts as $post) {
          if($post['id'] == $postId) {
            $currentPost = $post;
          }
        }
      }
?>
    <main id="post-container"> 
        <div class="content-container">
            <h1 id="main-title"><?= $currentPost['title'] ?></h1>
            <p id="post-description"><?= $currentPost['description'] ?></p>
            <div class="img-container">
                <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?=$currentPost['title']?>">
            </div>
            <p class="post-content">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat, harum culpa? Magni numquam quia velit voluptatum molestiae blanditiis veritatis? Ipsum aliquid atque sapiente magnam eos similique voluptatem impedit perferendis voluptate?
            Atque numquam odio cum incidunt quibusdam dolores, quisquam ut enim sunt, iure eveniet porro eos maiores. Optio, accusamus. Officiis, autem. Mollitia nulla at minus voluptatum laboriosam unde dignissimos, dolore inventore.
            Aut facilis ullam illum quo! Voluptatibus doloribus ratione error minima molestias, alias vero sequi dignissimos cupiditate totam? Vero doloremque magni molestiae voluptates corrupti. Exercitationem, magni fugiat repellendus culpa modi animi.
            Repudiandae autem dolore impedit velit rem suscipit doloribus nihil quas distinctio praesentium reprehenderit vero, maiores nulla quis. Culpa vero maiores incidunt est corporis nesciunt illo id placeat quae deserunt? Magnam.
            Nostrum ad dignissimos quas alias soluta iure assumenda est, maiores, sunt eaque, veniam delectus numquam aliquid non eum fugiat. Cum earum neque dolorum, ipsam saepe praesentium totam temporibus quasi commodi?</p>
            <p class="post-content">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat, harum culpa? Magni numquam quia velit voluptatum molestiae blanditiis veritatis? Ipsum aliquid atque sapiente magnam eos similique voluptatem impedit perferendis voluptate?
            Atque numquam odio cum incidunt quibusdam dolores, quisquam ut enim sunt, iure eveniet porro eos maiores. Optio, accusamus. Officiis, autem. Mollitia nulla at minus voluptatum laboriosam unde dignissimos, dolore inventore.
            Aut facilis ullam illum quo! Voluptatibus doloribus ratione error minima molestias, alias vero sequi dignissimos cupiditate totam? Vero doloremque magni molestiae voluptates corrupti. Exercitationem, magni fugiat repellendus culpa modi animi.
            Repudiandae autem dolore impedit velit rem suscipit doloribus nihil quas distinctio praesentium reprehenderit vero, maiores nulla quis. Culpa vero maiores incidunt est corporis nesciunt illo id placeat quae deserunt? Magnam.
            Nostrum ad dignissimos quas alias soluta iure assumenda est, maiores, sunt eaque, veniam delectus numquam aliquid non eum fugiat. Cum earum neque dolorum, ipsam saepe praesentium totam temporibus quasi commodi?</p>
        </div>
        <aside id="nav-container">
        <h3 id="tags-title">Tags</h3>
            <ul id="tag-list">
                <?php foreach($currentPost['tags'] as $tag): ?>
                    <li><a href="#"><?= $tag ?></a></li>
                <?php endforeach ?>
            </ul>
        <h3 id="categories-title">Categorias</h3>
            <ul id="categories-list">
                <?php foreach($categories as $category): ?>
                    <li><a href="#"><?= $category ?></a></li>
                <?php endforeach ?>
            </ul>
        </aside>
    </main>
<?php
    include_once("templates/footers.php")
?>