<h1>Welcome to the COGIP</h1>
<p>Bonjour !</p>


<div class="row">
    <h2>Last invoice : </h2>
    <div class="col-sm-8">
        <?php
        foreach (\App\Table\Invoices::getLast() as $post ): ?>

            <!--<h2>
                <a href="<?/*= $post->url */?>"><?/*= $post->titre; */?></a>,
            </h2>
            <p><em><?/*= $post->category; */?></em></p>
            <p><?/*= $post->extrait; */?></p>-->

        <?php endforeach; ?>

    </div>
    <h2>Last contacts : </h2>
    <div class="col-sm-4">
        <?php foreach (\App\Table\Contacts::all() as $categorie): ?>
            <!--<li><a href="<?/*= $categorie->url */?>"><?/*= $categorie->titre; */?></a></li>-->

        <?php endforeach; ?>
    </div>
    <h2>Last companies : </h2>
    <div class="col-sm-4">
        <?php foreach (\App\Table\Companies::all() as $categorie): ?>
            <!--<li><a href="<?/*= $categorie->url */?>"><?/*= $categorie->titre; */?></a></li>-->

        <?php endforeach; ?>
    </div>

</div>
